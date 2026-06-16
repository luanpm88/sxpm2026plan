---
name: hkincotech-laravel
description: >
  
---

# HKIncotech LandingPage — Project Skill

## Project overview

Laravel 12 marketing site for HKIncotech (enterprise software company, SE Asia).
Multi-locale: English (`en`) + Vietnamese (`vi`).

```
LandingPage/
├── app/Http/
│   ├── Controllers/
│   │   ├── LandingPageController.php  ← tất cả landing pages
│   │   └── SolutionController.php     ← /solutions/* pages
│   └── Middleware/
│       └── SetLocale.php              ← locale detection: URL → cookie → Accept-Language → en
├── resources/
│   ├── lang/
│   │   ├── en.json                    ← English strings (dùng __('key'))
│   │   └── vi.json                    ← Vietnamese strings (phải đồng bộ với en.json)
│   └── views/
│       ├── layouts/
│       │   ├── main.blade.php         ← multi-page layout
│       │   └── one-page.blade.php     ← SPA one-page layout
│       └── landing_page/
│           ├── partials/              ← hero, contact, etc.
│           └── *.blade.php            ← individual pages
├── routes/web.php                     ← tất cả routes
├── nginx.conf                         ← production NGINX config
└── nginx-deploy.sh                    ← deploy script (chạy trên server)
```

## i18n System

### Translation keys

Tất cả strings dùng `__('section.key')` trong Blade templates:

```php
{{ __('nav.home') }}          // nav section
{{ __('hero.title_line1') }}  // hero section
{{ __('contact.send_message') }} // contact form
```

Lang files: `resources/lang/en.json` và `vi.json`.
Structure JSON phải **giống hệt nhau** giữa en.json và vi.json — cùng keys, chỉ khác values.

### Khi thêm translation key mới

1. Thêm key vào `en.json` (tiếng Anh)
2. Thêm key vào `vi.json` (tiếng Việt)
3. Dùng `__('section.key')` trong Blade view

**QUAN TRỌNG:** Không bao giờ hardcode text trong Blade — luôn dùng `__()`.

### Locale routing

```
GET /             → detect locale → 302 redirect /en hoặc /vi
GET /en/*         → middleware SetLocale: App::setLocale('en')
GET /vi/*         → middleware SetLocale: App::setLocale('vi')
GET /set-locale/vi → đặt cookie, redirect về cùng trang bằng /vi/...
```

URL::defaults(['locale' => $locale]) trong middleware → `route('landing.index')` tự
sinh ra `/en/` hoặc `/vi/` mà không cần sửa views.

### Thêm page mới

1. Route trong `routes/web.php` (trong prefix `{locale}` group):
   ```php
   Route::get('/new-page', 'newPage')->name('landing.new-page');
   ```
2. Controller action trong `LandingPageController`:
   ```php
   public function newPage(): View {
       return view('landing_page.new-page', $this->baseData('/new-page'));
   }
   ```
3. View: `resources/views/landing_page/new-page.blade.php` extends `layouts.main`
4. Translation keys trong `en.json` và `vi.json`
5. Nav entry trong `getNavMenu()` nếu cần hiển thị trên menu

## CSS & Design system

File chính: `public/css/main.css` (KHÔNG phải Vite pipeline).

CSS tokens quan trọng:
```css
--primary: #0f6b9e          /* màu chính xanh dương */
--primary-light: #1a8fb8
--primary-dark: #0a4a6b
--accent: #059669            /* màu xanh lá */
--secondary-bg: #f8fafc
--text-dark: #0f172a
--text-gray: #475569
```

Container: `.container-v5` (max-width 1400px).
Font: Inter. Icons: Material Symbols Rounded (via CDN).

## NGINX & Deployment

### NGINX config: `nginx.conf`

Key points:
- PHP-FPM via unix socket (kiểm tra: `ls /var/run/php/`)
- `try_files $uri $uri/ /index.php?$query_string` → Laravel router xử lý locale
- `rewrite ^(/(?:en|vi)/.+)/$ $1 permanent` → bỏ trailing slash
- NGINX **không** cần xử lý locale — `SetLocale` middleware làm điều đó

### Deploy script: `nginx-deploy.sh`

```bash
# Trên server:
chmod +x nginx-deploy.sh
sudo ./nginx-deploy.sh
```

Script tự detect PHP version, generate config với đúng socket path, enable site,
test nginx -t, reload, và chạy Laravel cache commands.

### Sau khi thay đổi code trên server

```bash
cd /var/www/hkincotech/LandingPage
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Nếu đổi .env:
```bash
php artisan config:clear && php artisan config:cache
```

## Common debugging

### i18n không hoạt động

1. Kiểm tra `resources/lang/vi.json` có đúng cấu trúc JSON không
2. Kiểm tra middleware `set.locale` đã đăng ký trong `bootstrap/app.php`
3. Kiểm tra URL có đúng pattern `/{locale}/...` không
4. Clear cache: `php artisan cache:clear && php artisan route:cache`

### NGINX 502 Bad Gateway

```bash
# Kiểm tra PHP-FPM
systemctl status php8.2-fpm
ls -la /var/run/php/*.sock    # xem socket có tồn tại

# Kiểm tra log
tail -50 /var/log/nginx/hkincotech.error.log
tail -50 /var/log/php8.2-fpm.log
```

### NGINX 404 cho locale URLs (/en/services)

Nguyên nhân: `try_files` chưa fallback đúng về `/index.php`.
Đảm bảo trong nginx.conf:
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

### Blade dùng `__()` nhưng ra key thay vì translation

- Kiểm tra key tồn tại trong `resources/lang/en.json` / `vi.json`
- Kiểm tra `App::getLocale()` đang trả về đúng locale
- Chạy: `php artisan view:clear && php artisan config:clear`

## Development workflow

```bash
# Khởi động dev server
composer run dev     # Laravel + queue + vite + log viewer

# Build assets production
npm run build

# Lint code
./vendor/bin/pint

# Laravel unit tests
php artisan test

# Playwright E2E tests (server phải chạy trên port 8787)
php artisan serve --port=8787 &
npx playwright test tests/e2e/locale.spec.ts

# Một test cụ thể
npx playwright test -g "hero title is in Vietnamese"
```

## Playbooks

Xem chi tiết trong `.claude/skills/hkincotech-laravel/`:

- **`backend-i18n-playbook.md`** — Thêm key, tạo file lang mới, debug __() không resolve, URL::defaults
- **`playwright-e2e-testing.md`** — Viết test mới, selectors reference, debug failures, cookie gotchas

## Known issues (cần fix)

- `layouts/one-page.blade.php` references `/css/onepage.css` nhưng file không tồn tại
- Footer trong one-page layout dùng `#certs` nhưng section id là `#certifications`
- Một số content có marker `Draft` / `Demo data` — chưa production-ready
- Các page như `services.blade.php`, `scrum.blade.php`, `about-us.blade.php` vẫn còn hardcoded text — chưa dùng `__()`. Cần convert dần.
- `LandingPageController::getPageMetadata()` trả về hardcoded page titles — cần chuyển sang `__()` để dịch meta title/description.
