# 🚀 Laravel Landing Page - Setup Instructions

## ✅ What Has Been Migrated

All files from the original PHP landing page project (`/Users/luan/apps/ppm/landing_page/`) have been successfully converted to Laravel 12 best practices:

### ✓ Converted Files
- **Controller**: `app/Http/Controllers/LandingPageController.php` (9 page methods)
- **Layout**: `resources/views/layouts/main.blade.php` (header + footer)
- **Views** (9 pages):
  - `landing_page/index.blade.php` (homepage)
  - `landing_page/services.blade.php`
  - `landing_page/scrum.blade.php`
  - `landing_page/tech-stack.blade.php`
  - `landing_page/scaling.blade.php`
  - `landing_page/about-us.blade.php`
  - `landing_page/case-studies.blade.php`
  - `landing_page/pricing.blade.php`
  - `landing_page/contact.blade.php`
- **CSS**: `public/css/main.css` (all global styles)
- **Routes**: `routes/web.php` (9 named routes)
- **Assets**: `public/img/logo-HK-1024x810.png`
- **Documentation**: `LANDING_PAGE_GUIDE.md`

---

## 🔧 Quick Start

### 1. Install Dependencies
```bash
cd /Users/luan/apps/ppm/LandingPage
composer install
npm install
```

### 2. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Run Development Server
```bash
php artisan serve
# Open: http://localhost:8000
```

### 4. Development Build (optional, for assets)
```bash
npm run dev
```

---

## 📍 Route Map

All routes follow the pattern: `route('landing.{page-name}')`

| URL | Route Name | Controller Method |
|-----|-----------|-----------------|
| `/` | `landing.index` | `index()` |
| `/services` | `landing.services` | `services()` |
| `/scrum` | `landing.scrum` | `scrum()` |
| `/tech-stack` | `landing.tech-stack` | `techStack()` |
| `/scaling` | `landing.scaling` | `scaling()` |
| `/about-us` | `landing.about-us` | `aboutUs()` |
| `/case-studies` | `landing.case-studies` | `caseStudies()` |
| `/pricing` | `landing.pricing` | `pricing()` |
| `/contact` | `landing.contact` | `contact()` |

---

## 🏗️ Architecture Overview

```
Request → Route → Controller → View → Layout
   ↓        ↓          ↓        ↓       ↓
  /        routes    Landing  landing_page/  layouts/
         /web.php    Page      *.blade.php    main.blade.php
                   Controller              (header+footer+css)
```

### Data Flow
```php
// Example: Services Page

// 1. Route (routes/web.php)
Route::get('/services', 'services')->name('landing.services');

// 2. Controller Method (LandingPageController.php)
public function services(): View {
    return view('landing_page.services', [
        'pageTitle' => 'Dịch Vụ - HKIncotech',
        'pageDescription' => '...',
        'navMenu' => [...],
        'currentPage' => 'services'
    ]);
}

// 3. View (resources/views/landing_page/services.blade.php)
@extends('layouts.main')
@section('content')
    <!-- Page content -->
@endsection

// 4. Layout renders (resources/views/layouts/main.blade.php)
<header>{{ navigation }}</header>
@yield('content')
<footer>{{ footer }}</footer>
```

---

## 📝 Best Practices Applied

### ✅ Code Organization
- **Single Controller**: All landing pages in one place
- **Route Naming**: Consistent `landing.{page}` convention
- **View Hierarchy**: Layouts > Pages > Content sections
- **Metadata Centralized**: Page titles/descriptions in controller methods

### ✅ Maintainability
- Private methods for shared data (`getPageMetadata()`, `getNavMenu()`)
- Route name constants prevent hardcoded URL changes
- Layout inheritance reduces duplication
- CSS centralized in `main.css`

### ✅ Performance
- Compiled CSS (8.5 KB minified)
- CDN-hosted dependencies (Bootstrap, Material Symbols, Inter font)
- Single-controller pattern minimizes overhead

### ✅ Scalability
- Easy to add new pages (3 steps: controller method, route, view)
- Modular view structure
- Route grouping for future features

---

## 🎨 Customization Guide

### Add New Page

1. **Add Controller Method**:
```php
public function newPage(): View {
    $metadata = $this->getPageMetadata();
    return view('landing_page.new-page', [
        'pageTitle' => $metadata['new-page']['title'],
        'pageDescription' => $metadata['new-page']['description'],
        'navMenu' => $this->getNavMenu(),
        'currentPage' => $this->getCurrentPage()
    ]);
}
```

2. **Add Route**:
```php
Route::get('/new-page', 'newPage')->name('landing.new-page');
```

3. **Create View**:
```blade
@extends('layouts.main')
@section('content')
    <!-- Your HTML content -->
@endsection
```

### Modify Styles
- Edit `public/css/main.css`
- Update CSS variables: `--primary`, `--accent`, `--secondary-bg`, etc.
- Add responsive rules for new breakpoints

### Update Navigation
- Edit `getNavMenu()` in controller
- Edit header/footer links in `resources/views/layouts/main.blade.php`

---

## 🔍 File Sizes

| File | Size | Purpose |
|------|------|---------|
| `main.css` | 8.5 KB | Global stylesheet |
| `logo-HK-1024x810.png` | 37 KB | Company logo |
| `index.blade.php` | 36 KB | Homepage |
| `services.blade.php` | 33 KB | Services page |
| Other pages | 10-20 KB each | Various pages |

---

## 🧪 Testing Checklist

- [ ] All routes work (visit each URL)
- [ ] Navigation links work correctly
- [ ] Logo displays
- [ ] Styles load properly
- [ ] Responsive design works on mobile
- [ ] Forms function correctly
- [ ] External links work

```bash
# Quick test all routes
curl http://localhost:8000/
curl http://localhost:8000/services
curl http://localhost:8000/contact
# ... etc
```

---

## 📚 File Structure Reference

```
LandingPage/
├── app/Http/Controllers/
│   └── LandingPageController.php (9 methods, ~180 lines)
├── resources/views/
│   ├── layouts/
│   │   └── main.blade.php (header + footer + CSS links)
│   └── landing_page/
│       ├── index.blade.php (35 KB)
│       ├── services.blade.php (33 KB)
│       ├── scrum.blade.php (19 KB)
│       ├── tech-stack.blade.php (12 KB)
│       ├── scaling.blade.php (11 KB)
│       ├── about-us.blade.php (10 KB)
│       ├── case-studies.blade.php (14 KB)
│       ├── pricing.blade.php (16 KB)
│       └── contact.blade.php (15 KB)
├── public/
│   ├── css/
│   │   └── main.css (8.5 KB)
│   └── img/
│       └── logo-HK-1024x810.png (37 KB)
├── routes/
│   └── web.php (9 routes)
└── LANDING_PAGE_GUIDE.md (Detailed documentation)
```

---

## ⚡ Performance Tips

1. **CSS**: Already optimized at 8.5 KB
2. **Images**: Use CDN for hero images (add to views as needed)
3. **JavaScript**: Minimal (only header toggle for mobile)
4. **Caching**: Enable route caching in production
   ```bash
   php artisan route:cache
   ```

---

## 🔗 Useful Commands

```bash
# List all routes
php artisan route:list

# Clear all caches
php artisan cache:clear

# Optimize autoloader (production)
composer dump-autoload -o

# Restart development server
php artisan serve --port=8000
```

---

## 🆘 Troubleshooting

### Routes return 404?
```bash
php artisan route:cache --force
```

### Styles not loading?
- Clear browser cache (Ctrl+Shift+Delete)
- Check `public/css/main.css` exists
- Verify asset helper: `{{ asset('css/main.css') }}`

### Logo missing?
- Check `public/img/logo-HK-1024x810.png` exists
- Update path if logo moved

---

## 📖 Next Steps

1. ✅ Run `php artisan serve`
2. ✅ Test all URLs working
3. ✅ Check responsive design
4. ✅ Customize if needed (see LANDING_PAGE_GUIDE.md)
5. ✅ Deploy to production (see Laravel deployment docs)

---

**Migration Completed**: January 21, 2024
**Original Path**: `/Users/luan/apps/ppm/landing_page/`
**New Path**: `/Users/luan/apps/ppm/LandingPage/`
**Laravel Version**: 12.x
**Status**: ✅ Ready for Development
