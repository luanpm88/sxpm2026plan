# Deploy — HKIncotech LandingPage

Production demo: **https://demo.hkincotech.com**

## TL;DR — one command

```bash
# from the repo root, on a machine with the `hkspace-ssd` SSH alias + git push access
./LandingPage/deploy.sh -m "what changed"   # commit everything, push, deploy, verify
# or, if you've already committed:
./LandingPage/deploy.sh
```

The script pushes branch `clean`, pulls it on the app host, clears Laravel caches,
reloads php-fpm, and curls the site to confirm HTTP 200.

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
# 1. locally: commit + push
git add -A && git commit -m "..." && git push origin clean

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
