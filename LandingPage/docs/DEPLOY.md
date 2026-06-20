# Deploy — HKIncotech LandingPage

Production demo: **https://demo.hkincotech.com**

## TL;DR — standard deploy

```bash
# from /Users/luan/apps/ppm/LandingPage
git status --short
git add <only-the-files-for-this-change>
git commit -m "short deploy message"
git push
./deploy.sh
```

The script pushes branch `clean`, pulls it on the app host, clears Laravel caches,
reloads php-fpm, and curls the site to confirm HTTP 200.

Avoid `./deploy.sh -m` during normal work. That mode commits **all** local changes
from the repo root, which is risky when unrelated files such as slides, workshop
notes, tmp folders, or screenshots are dirty. Use it only when the whole worktree
is intentionally part of the deploy.

## Pre-deploy QA used for landing/design changes

```bash
# 1. PHP / Blade syntax
php -l resources/lang/vi/index.php
php -l resources/lang/en/index.php
php -l resources/views/landing_page/index.blade.php

# 2. Design-system checks for the landing scope
rg -n "font-weight:\s*(7[0-9]{2}|8[0-9]{2}|9[0-9]{2}|bold)|font-weight=\"(7|8|9|bold)" public/css/main.css resources/views/landing_page resources/views/pages/solutions resources/views/layouts
rg -n "color:\s*white|fill=\"white|stroke=\"white|background:\s*white" public/css/main.css resources/views/landing_page resources/views/pages/solutions resources/views/layouts
git diff --check

# 3. Screenshot audit
php artisan serve --host=127.0.0.1 --port=8765
BASE_URL=http://127.0.0.1:8765 node tools/audit-site.mjs codex-enterprise-pass
```

Expected:

- The `rg` checks should return no matches in the landing scope.
- `git diff --check` should return no output.
- The screenshot audit should return HTTP `200` for VI/EN light, dark, and mobile routes.
- Review at least home, pricing, certifications, case studies, SME manufacturing, and one dark-mode page before deploy.

## Last verified deploy

- Date: 2026-06-20 ICT
- Commit: `ba8d0ec` (`upgrade landing brand and delivery sections`)
- Verified live URL: `https://demo.hkincotech.com`
- Verified routes: `/vi`, `/vi/scrum`, `/vi/contact`, `/en`
- Verified logo asset on server: `/home/hkincotech/hkincotech/LandingPage/public/img/logo.svg`
- Official logo / primary brand navy: `#183060`

## How it's hosted (topology)

```
demo.hkincotech.com (DNS → 115.79.28.112)
        │
        ▼
  nginx on "hkserv" (115.79.28.112)         reverse proxy
        │   /etc/nginx/sites-available/hkincotech.conf
        ▼
  app host "hkspace" — 192.168.1.189:9003   (local nginx + php-fpm)
        │   php-fpm pool: hkincotech
        ▼
  /home/hkincotech/hkincotech/              ← git checkout (branch: clean)
        └── LandingPage/                     ← Laravel 12 app (this folder)
            └── public/                       docroot
```

- **SSH:** `hkspace-ssd` → `hkadmin@115.79.28.112:2224` (host `hkspace`). `hkadmin` has passwordless sudo.
- **App owner:** `hkincotech` (run git/artisan as this user: `sudo -u hkincotech ...`).
- **Branch deployed:** `clean` (same branch the checkout tracks).
- **Git remote:** `git@github.com:luanpm88/sxpm2026plan.git` (the app host can fetch from GitHub).
- **CSS:** static at `public/css/main.css` (no Vite/npm build needed). Cache-busted via `?v=filemtime`.

## Manual steps (what the script does)

```bash
# 1. locally: commit + push only the intended files
git status --short
git add <only-the-files-for-this-change>
git commit -m "..."
git push origin clean

# 2. on the app host
ssh hkspace-ssd
sudo -u hkincotech git -C /home/hkincotech/hkincotech fetch origin clean
sudo -u hkincotech git -C /home/hkincotech/hkincotech reset --hard origin/clean
cd /home/hkincotech/hkincotech/LandingPage
sudo -u hkincotech php artisan config:clear
sudo -u hkincotech php artisan route:clear
sudo -u hkincotech php artisan view:clear     # important: recompiles Blade views
sudo -u hkincotech php artisan cache:clear
sudo systemctl reload php8.3-fpm               # drop opcache (adjust version if needed)

# 3. verify
curl -I https://demo.hkincotech.com/en         # expect 200
```

## Post-deploy verification checklist

```bash
# public routes
curl -I -s https://demo.hkincotech.com/en
curl -I -s https://demo.hkincotech.com/vi
curl -I -s https://demo.hkincotech.com/vi/scrum
curl -I -s https://demo.hkincotech.com/vi/contact

# deployed commit; safe.directory is needed when checking as hkadmin
ssh hkspace-ssd "cd /home/hkincotech/hkincotech && git -c safe.directory=/home/hkincotech/hkincotech rev-parse --short HEAD"

# logo color check; current official brand navy should appear in the SVG
ssh hkspace-ssd "grep -o '#183060' /home/hkincotech/hkincotech/LandingPage/public/img/logo.svg | wc -l"
```

Expected:

- HTTP routes return `200`.
- Git HEAD matches the pushed deploy commit.
- Logo color grep returns a positive count. On 2026-06-20 it returned `13`.

## Rollback

```bash
# on the app host — reset to the previous commit, then clear caches
sudo -u hkincotech git -C /home/hkincotech/hkincotech reset --hard <previous-commit-sha>
sudo -u hkincotech bash -lc 'cd /home/hkincotech/hkincotech/LandingPage && php artisan view:clear && php artisan config:clear'
```

## Notes

- `git reset --hard` on the server discards any server-side edits to tracked files
  (the working tree is expected to stay clean — `.env` is gitignored and untouched).
- `APP_ENV=production`. If `config:cache` / `view:cache` are used, the deploy's
  `*:clear` calls are what make changes show up.
- Static CSS/JS are served by nginx; only Blade/PHP need cache clears + opcache reload.
