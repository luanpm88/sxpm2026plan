# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

### Setup (first time)
```bash
composer run setup
```

### Development (runs all services concurrently)
```bash
composer run dev
```
This starts: Laravel server, queue listener, Pail log viewer, and Vite dev server.

### Build assets
```bash
npm run build
```

### Run tests
```bash
# Laravel unit tests
composer run test
# or a single test
php artisan test --filter TestName

# Playwright E2E (server must be running on :8787 first)
npx playwright test tests/e2e/locale.spec.ts
npx playwright test -g "hero title is in Vietnamese"   # single test
npx playwright test --headed --slow-mo=300             # debug with browser
```

### Code style (Laravel Pint)
```bash
./vendor/bin/pint
```

## Architecture

This is a **Laravel 12** marketing/landing page site for HKIncotech (enterprise software company). It runs in two modes served from the same codebase:

### Routing
All routes are in `routes/web.php`. Two controllers handle everything:
- `LandingPageController` — handles all landing pages and the one-page view
- `SolutionController` — handles `/solutions/*` pages (e.g. `/solutions/sme-manufacturing`)

### Two rendering modes

**Multi-page mode** (most routes): each page is a separate URL (`/`, `/services`, `/scrum`, etc.)
- Extends `layouts/main.blade.php`
- Layout includes Bootstrap 5, Inter font, Material Symbols via CDN
- Shared stylesheet: `public/css/main.css`

**One-page mode** (`/one-page`): single-page app with anchor navigation
- Extends `layouts/one-page.blade.php`
- Assembles partials from `resources/views/landing_page/partials/` in order
- Has scroll-spy + hash update JS built into the layout
- Note: references `/css/onepage.css` which does not currently exist in `public/css/`

### Controller pattern
`LandingPageController` has three private helpers used by every action:
- `getPageMetadata()` — page titles and meta descriptions
- `getNavMenu()` — nav labels keyed by slug
- `getCurrentPage()` — maps route name to slug

Every public action passes `pageTitle`, `pageDescription`, `navMenu`, `currentPage` to the view.

### Adding a new page
1. Add route in `routes/web.php` with name `landing.{slug}`
2. Add metadata entry in `getPageMetadata()`
3. Add nav entry in `getNavMenu()` (if it should appear in nav)
4. Add controller action
5. Create `resources/views/landing_page/{slug}.blade.php` extending `layouts.main`

### CSS / Design system
Defined in `public/css/main.css` — key tokens:
- `--primary: #0f6b9e`, `--primary-light: #1a8fb8`, `--primary-dark: #0a4a6b`
- `--accent: #059669`
- `--secondary-bg: #f8fafc`, `--text-dark: #0f172a`, `--text-gray: #475569`
- Container: `.container-v5` (max-width 1400px)
- Font: Inter; Icons: Material Symbols Rounded

Vite (with `@tailwindcss/vite`) is configured but the main styles live in `public/css/main.css`, not in the Vite pipeline.

### Known issues
- `layouts/one-page.blade.php` references `/css/onepage.css` but the file does not exist
- Footer in one-page layout uses `#certs` but the section id is `#certifications`
- Some page content contains `Draft` / `Demo data` markers not suitable for production
