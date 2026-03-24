---
name: backend-i18n-playbook
description: >
  Complete playbook for adding, editing, or debugging i18n (multi-language) on the
  HKIncotech Laravel landing page. Use whenever the task involves translations,
  locale switching, new language keys, __() not resolving, or language file structure.
---

# Backend i18n Playbook — HKIncotech Laravel

## Architecture in one diagram

```
Browser Request
    │
    ├── GET /           → routes/web.php (detect locale) → redirect /en or /vi
    │
    └── GET /en/*       → SetLocale middleware
    └── GET /vi/*           ├─ App::setLocale('en' or 'vi')
                            └─ URL::defaults(['locale' => 'en'])
                                │
                                ▼
                        Blade view uses __('section.key')
                                │
                                ▼
                        resources/lang/{locale}/{section}.php
```

## Translation file structure

```
resources/lang/
├── en/
│   ├── nav.php         # __('nav.home')
│   ├── hero.php        # __('hero.title_line1')
│   ├── contact.php     # __('contact.send_message'), __('contact.faqs')
│   ├── footer.php      # __('footer.copyright')
│   └── lang.php        # __('lang.en'), __('lang.vi')
└── vi/
    ├── nav.php
    ├── hero.php
    ├── contact.php
    ├── footer.php
    └── lang.php
```

**RULE: JSON files DO NOT work for nested keys.**
Laravel JSON (`en.json`) only supports flat string keys like `"Hello"`.
For `__('section.key')` you MUST use PHP array files.

## Adding a new translation key

### Step 1 — Add to en/{file}.php

```php
// resources/lang/en/hero.php
return [
    'existing_key' => 'Existing value',
    'new_key'      => 'New English text',   // ← add here
];
```

### Step 2 — Add matching key to vi/{file}.php

```php
// resources/lang/vi/hero.php
return [
    'existing_key' => 'Nội dung cũ',
    'new_key'      => 'Nội dung tiếng Việt', // ← same key, Vietnamese value
];
```

### Step 3 — Use in Blade

```php
{{ __('hero.new_key') }}
```

### Key rules

- **Keys must match exactly** between en/ and vi/. Missing key → returns the key string as-is.
- **Nested arrays** work: `__('contact.project_types.custom')` → `contact.php['project_types']['custom']`
- **Arrays** work: `__('contact.faqs')` returns the PHP array — usable with `@foreach`
- **Interpolation**: `__('hero.welcome', ['name' => 'Thu'])` needs `'welcome' => 'Hello :name'` in PHP file

## Adding a new section/file

When content doesn't fit existing files, create a new one:

```bash
# Create new section file
touch resources/lang/en/pricing.php
touch resources/lang/vi/pricing.php
```

```php
// resources/lang/en/pricing.php
return [
    'title'    => 'Pricing Plans',
    'subtitle' => 'Transparent, scalable pricing',
    'plans' => [
        'startup'    => 'Startup',
        'growth'     => 'Growth',
        'enterprise' => 'Enterprise',
    ],
];
```

```php
// resources/lang/vi/pricing.php
return [
    'title'    => 'Bảng Giá',
    'subtitle' => 'Giá minh bạch, linh hoạt mở rộng',
    'plans' => [
        'startup'    => 'Khởi nghiệp',
        'growth'     => 'Tăng trưởng',
        'enterprise' => 'Doanh nghiệp',
    ],
];
```

## Locale detection priority

```
SetLocale middleware:
  1. URL param {locale}      /en/services → 'en'
  2. Cookie 'locale'         (set by /set-locale/{locale})
  3. Accept-Language header  vi-VN → 'vi'
  4. Default                 'en'
```

Cookie note: Laravel encrypts cookies by default.
Do NOT read raw cookie values in tests — test behaviour (which URL is served) instead.

## Adding a new page with translations

```php
// 1. routes/web.php (inside {locale} prefix group)
Route::get('/new-page', 'newPage')->name('landing.new-page');

// 2. LandingPageController.php
public function newPage(): View
{
    return view('landing_page.new-page', [
        'pageTitle'       => __('new_page.meta_title'),
        'pageDescription' => __('new_page.meta_desc'),
        'navMenu'         => $this->getNavMenu(),
        'currentPage'     => $this->getCurrentPage(),
    ]);
}

// 3. Blade view (resources/views/landing_page/new-page.blade.php)
@extends('layouts.main')
@section('content')
    <h1>{{ __('new_page.title') }}</h1>
@endsection

// 4. resources/lang/en/new_page.php + vi/new_page.php
```

## Debugging checklist

| Symptom | Cause | Fix |
|---------|-------|-----|
| `__('nav.home')` outputs `nav.home` | Wrong file type (JSON nested) | Use PHP array files |
| `__('nav.home')` outputs `nav.home` | Key missing in lang file | Add key to both en/ and vi/ |
| Correct EN but wrong locale on /vi | View has hardcoded text | Replace with `__()` |
| Route 500 after adding locale | `URL::defaults` not set | Check SetLocale middleware registered in bootstrap/app.php |
| All pages show EN even on /vi | Middleware not running | Check `->middleware('set.locale')` on route group |

```bash
# Quick debug commands
php artisan tinker --execute="App::setLocale('vi'); echo __('nav.home');"
php artisan config:clear && php artisan cache:clear
php artisan route:list | grep locale
```

## Testing i18n

```bash
# Run all Playwright locale tests
npx playwright test tests/e2e/locale.spec.ts

# Run single test by name
npx playwright test -g "hero title is in Vietnamese"

# Run with browser visible (debug mode)
npx playwright test --headed --slow-mo=500 tests/e2e/locale.spec.ts
```

The test suite (`tests/e2e/locale.spec.ts`) covers:
- Root `/` redirect based on Accept-Language
- Cookie priority over Accept-Language
- EN/VI page content validation
- Language switcher navigation
- Cookie persistence via behaviour (not raw value — encrypted)
- `/set-locale/{locale}` path preservation
- Translation completeness (no raw keys in output)
- Contact page form label translations

## URL::defaults — how route() auto-includes locale

```php
// In SetLocale middleware:
URL::defaults(['locale' => 'vi']);

// Now in Blade, route() automatically includes the locale:
route('landing.index')     // → /vi
route('landing.services')  // → /vi/services
route('landing.contact')   // → /vi/contact

// locale.switch is defined outside {locale} group — no defaults needed:
route('locale.switch', 'en')  // → /set-locale/en
route('locale.switch', 'vi')  // → /set-locale/vi
```
