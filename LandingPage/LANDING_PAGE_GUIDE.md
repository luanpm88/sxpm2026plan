# Laravel Landing Page - Project Structure Guide

## 📁 Project Structure

```
LandingPage/
├── app/
│   └── Http/
│       └── Controllers/
│           └── LandingPageController.php          # Main controller for all landing pages
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── main.blade.php                     # Main layout (header + footer)
│       └── landing_page/
│           ├── index.blade.php                    # Homepage
│           ├── services.blade.php                 # Services page
│           ├── scrum.blade.php                    # SCRUM methodology
│           ├── tech-stack.blade.php               # Technology stack
│           ├── scaling.blade.php                  # Scaling roadmap
│           ├── about-us.blade.php                 # About company
│           ├── case-studies.blade.php             # Portfolio
│           ├── pricing.blade.php                  # Pricing plans
│           └── contact.blade.php                  # Contact form
├── public/
│   ├── css/
│   │   └── main.css                              # Global stylesheet
│   └── img/
│       └── logo-HK-1024x810.png                  # Company logo
├── routes/
│   └── web.php                                   # All landing page routes
└── config/
    └── app.php
```

## 🚀 Getting Started

### 1. Initial Setup
```bash
cd LandingPage
composer install
npm install
cp .env.example .env
php artisan key:generate
```

### 2. Run Development Server
```bash
php artisan serve
# Visit http://localhost:8000
```

### 3. Build Frontend Assets (if using Vite)
```bash
npm run dev  # Development
npm run build  # Production
```

## 📋 Architecture & Best Practices

### 1. **Controller Pattern** (`LandingPageController`)
- **Single Responsibility**: All landing pages handled by one controller
- **DRY Principle**: Shared metadata, navigation, and page data in private methods
- **Route Name Convention**: `landing.{page-name}` for easy navigation

```php
// Example usage in views
<a href="{{ route('landing.services') }}">Services</a>
```

### 2. **View Organization**
- **Main Layout**: `layouts/main.blade.php` contains header, footer, and shared assets
- **Page Views**: Each page extends the main layout using `@extends('layouts.main')`
- **Content Section**: Page content wrapped in `@section('content')`

```blade
@extends('layouts.main')

@section('content')
    <!-- Page-specific content -->
@endsection
```

### 3. **CSS Strategy**
- **Global CSS**: `public/css/main.css` contains all theme variables and global styles
- **CDN Assets**: Bootstrap, Material Symbols, Inter font loaded from CDN
- **Inline Styles**: Page-specific styles kept inline (can be extracted later if needed)

### 4. **Routing Convention**
All routes in `routes/web.php` follow a consistent pattern:
```php
Route::get('/page-name', 'methodName')->name('landing.page-name');
```

### 5. **Data Flow**
```
Route → Controller Method → View
  ↓                ↓          ↓
/services → services() → view('landing_page.services')
           (metadata)
           (navMenu)
           (currentPage)
```

## 🎨 Customization Guide

### Add a New Landing Page

1. **Create Controller Method** in `LandingPageController.php`:
```php
public function newPage(): View
{
    $metadata = $this->getPageMetadata();
    $navMenu = $this->getNavMenu();
    $currentPage = $this->getCurrentPage();

    return view('landing_page.new-page', [
        'pageTitle' => $metadata['new-page']['title'],
        'pageDescription' => $metadata['new-page']['description'],
        'navMenu' => $navMenu,
        'currentPage' => $currentPage
    ]);
}
```

2. **Add Route** in `routes/web.php`:
```php
Route::get('/new-page', 'newPage')->name('landing.new-page');
```

3. **Create View** at `resources/views/landing_page/new-page.blade.php`:
```blade
@extends('layouts.main')

@section('content')
    <!-- Page content -->
@endsection
```

4. **Update Metadata** in `getPageMetadata()` method:
```php
'new-page' => [
    'title' => 'Page Title - HKIncotech',
    'description' => 'Page description...'
]
```

5. **Update Navigation** in `getNavMenu()` method:
```php
'new-page' => 'Page Label',
```

### Modify Global CSS

Edit `public/css/main.css`:
- Update CSS variables in `:root` section
- Modify responsive breakpoints
- Add new utility classes
- All changes apply globally to all pages

### Update Header/Footer

Edit `resources/views/layouts/main.blade.php`:
- Modify header navigation links
- Update footer content
- Add/remove global scripts or styles
- Changes reflect across all pages

## 🔄 Route Navigation in Templates

### In Layout (Header/Footer):
```blade
<a href="{{ route('landing.index') }}">Home</a>
<a href="{{ route('landing.services') }}">Services</a>
```

### In Views:
```blade
<a href="{{ route('landing.contact') }}" class="btn-primary-v5">
    Contact Us
</a>
```

## 📱 Responsive Design

Breakpoints defined in `public/css/main.css`:
- **Desktop**: 1024px and up
- **Tablet**: 768px to 1023px
- **Mobile**: 480px to 767px
- **Small Phone**: Below 480px

Mobile menu automatically handled in layout with `.mobile-menu-toggle` button.

## 🔧 Maintenance Checklist

- [ ] Update metadata in `LandingPageController` for page titles/descriptions
- [ ] Keep navigation links in `getNavMenu()` synchronized with routes
- [ ] Test all routes after adding new pages
- [ ] Verify responsive design on mobile devices
- [ ] Update footer links when adding new pages
- [ ] Check internal links use `route()` helper, not hardcoded paths

## 🐛 Troubleshooting

### Routes not working?
- Run `php artisan route:cache` (clear cache)
- Check route names in `web.php` match controller method names
- Verify controller methods exist in `LandingPageController`

### Styles not loading?
- Clear browser cache (Ctrl+Shift+Delete)
- Run `npm run dev` if using Vite
- Check `public/css/main.css` is linked in `layouts/main.blade.php`

### Logo not showing?
- Verify `logo-HK-1024x810.png` exists in `public/img/`
- Check path in `layouts/main.blade.php`: `{{ asset('img/logo-HK-1024x810.png') }}`

## 📚 Additional Resources

- [Laravel Blade Documentation](https://laravel.com/docs/blade)
- [Laravel Routing](https://laravel.com/docs/routing)
- [Laravel Views](https://laravel.com/docs/views)

## 🤝 Best Practices Summary

1. ✅ Use route helpers (`route()`) instead of hardcoded paths
2. ✅ Keep controller methods focused and simple
3. ✅ Update both metadata and navigation consistently
4. ✅ Use Blade directives (`@extends`, `@foreach`, `@if`) instead of PHP
5. ✅ Keep global styles in `main.css`, inline styles for page-specific
6. ✅ Test all routes after modifications
7. ✅ Use meaningful route names (`landing.{page-name}`)
8. ✅ Keep footer links synchronized with routes

---

**Migration Date**: 2024
**Original Project**: `/Users/luan/apps/ppm/landing_page/`
**Laravel Version**: 12.x
