#!/usr/bin/env bash
# ─────────────────────────────────────────────────────────────────────────────
# One-command deploy — HKIncotech LandingPage → https://demo.hkincotech.com
#
#   ./LandingPage/deploy.sh                 # push committed `clean` and deploy
#   ./LandingPage/deploy.sh -m "message"    # commit ALL changes first, then deploy
#
# Requirements (on the machine you run this from):
#   • git push access to origin (git@github.com:luanpm88/sxpm2026plan.git)
#   • SSH alias `hkspace-ssd` in ~/.ssh/config  → hkadmin@115.79.28.112:2224
#
# Topology:  demo.hkincotech.com → nginx on hkserv (115.79.28.112) reverse-proxies
#            to the app host "hkspace" (192.168.1.189:9003), where the site is a
#            git checkout served by the php-fpm pool `hkincotech`.
# ─────────────────────────────────────────────────────────────────────────────
set -euo pipefail

SSH_HOST="hkspace-ssd"
APP_DIR="/home/hkincotech/hkincotech"   # git checkout (LandingPage/ lives inside)
APP_USER="hkincotech"
BRANCH="clean"
URL="https://demo.hkincotech.com/en"

REPO_ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$REPO_ROOT"

if [ "${1:-}" = "-m" ]; then
  echo "==> Committing local changes"
  git add -A
  git commit -m "${2:-deploy: update landing page}" || echo "   (nothing to commit)"
fi

echo "==> Pushing $BRANCH → origin"
git push origin "$BRANCH"

echo "==> Deploying on $SSH_HOST ($APP_DIR @ $BRANCH)"
ssh "$SSH_HOST" "
  set -e
  sudo -u $APP_USER git -C $APP_DIR fetch --quiet origin $BRANCH
  sudo -u $APP_USER git -C $APP_DIR reset --hard origin/$BRANCH
  sudo -u $APP_USER bash -lc 'cd $APP_DIR/LandingPage && \
    php artisan config:clear && php artisan route:clear && \
    php artisan view:clear && php artisan cache:clear'
  # drop opcache so Blade/PHP changes take effect immediately (best-effort)
  sudo bash -c 'systemctl reload php8.3-fpm 2>/dev/null || systemctl reload php8.2-fpm 2>/dev/null || systemctl reload php-fpm 2>/dev/null || true'
"

echo "==> Verifying $URL"
code=$(curl -s -m 20 -o /dev/null -w '%{http_code}' "$URL" || echo 000)
echo "    HTTP $code"
if [ "$code" = "200" ]; then
  echo "✅ Deployed → https://demo.hkincotech.com"
else
  echo "⚠️  Got HTTP $code — check the server."
  exit 1
fi
