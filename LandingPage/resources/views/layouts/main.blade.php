<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $pageDescription ?? 'HKIncotech - Enterprise Software Engineering' }}">
    <title>{{ $pageTitle ?? 'HKIncotech' }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/logo.svg') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Symbols Rounded -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Main CSS (v= cache-bust so header/nav fixes always apply) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v=8">

    {{-- Critical header/lang fallback if main.css fails to load or is cached stale --}}
    <style>
        header nav a.nav-link-v5 {
            white-space: nowrap !important;
            word-break: keep-all;
        }
        .btn-header {
            white-space: nowrap !important;
        }
        .lang-dropdown {
            display: none !important;
        }
        .lang-menu.open .lang-dropdown {
            display: block !important;
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="header-container">
            <a href="{{ route('landing.index') }}" class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="HKIncotech">
                <span style="transform: translateY(5px)">INCOTECH</span>
            </a>
            <button class="mobile-menu-toggle" onclick="document.querySelector('nav').classList.toggle('mobile-open')">
                <span class="material-symbols-rounded">menu</span>
            </button>
            <nav>
                @php
                    $locale = app()->getLocale();
                    $navLinks = [
                        'landing.index'              => __('nav.home'),
                        'landing.about-us'           => __('nav.about'),
                        'landing.services'           => __('nav.services'),
                        'solutions.sme-manufacturing'=> __('nav.solutions'),
                        'landing.scrum'              => __('nav.scrum'),
                        'landing.tech-stack'         => __('nav.tech'),
                        'landing.case-studies'       => __('nav.case_studies'),
                        'landing.blog.r_and_d'       => __('nav.rd'),
                        'landing.certifications'     => __('nav.certifications'),
                        'landing.pricing'            => __('nav.pricing'),
                        'landing.contact'            => __('nav.contact'),
                    ];
                @endphp
                @foreach($navLinks as $route => $label)
                    <a href="{{ route($route) }}"
                       class="nav-link-v5 @if(Route::currentRouteName() === $route) nav-link-v5--active @endif"
                       onclick="document.querySelector('nav').classList.remove('mobile-open')">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>

            <div class="header-actions">
                <!-- Language Switcher -->
                <div class="lang-menu" data-lang-menu>
                    <button class="lang-trigger" type="button" aria-label="Switch language" data-lang-trigger>
                        <span class="lang-current-flag">{{ app()->getLocale() === 'vi' ? '🇻🇳' : '🇬🇧' }}</span>
                    </button>
                    <div class="lang-dropdown" data-lang-dropdown>
                        <a href="{{ route('locale.switch', 'vi') }}" class="{{ app()->getLocale() === 'vi' ? 'lang-option--active' : '' }}">
                            <span>🇻🇳</span> VI
                        </a>
                        <a href="{{ route('locale.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'lang-option--active' : '' }}">
                            <span>🇬🇧</span> EN
                        </a>
                    </div>
                </div>

                <a href="{{ route('landing.contact') }}" class="btn-header">{{ __('nav.get_started') }}</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container-v5">
            <div style="display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr; gap: 2.5rem; margin-bottom: 2.5rem;">
                <!-- Company Info -->
                <div class="footer-section">
                    <a href="{{ route('landing.index') }}" class="logo" style="color: white; margin-bottom: 1rem; display: inline-flex;">
                        <img src="{{ asset('img/logo.svg') }}" alt="HKIncotech" style="filter: brightness(10);">
                        <span style="transform: translateY(5px)">INCOTECH</span>
                    </a>
                    <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.88rem; line-height: 1.65; margin-top: 1rem;">
                        {{ __('footer.about_desc') }}
                    </p>
                </div>

                <!-- Solutions -->
                <div class="footer-section">
                    <h3>{{ __('footer.services_title') }}</h3>
                    <ul>
                        <li><a href="{{ route('landing.services') }}">{{ __('footer.services.custom') }}</a></li>
                        <li><a href="{{ route('landing.services') }}">{{ __('footer.services.saas') }}</a></li>
                        <li><a href="{{ route('landing.services') }}">{{ __('footer.services.ai') }}</a></li>
                        <li><a href="{{ route('landing.services') }}">{{ __('footer.services.security') }}</a></li>
                    </ul>
                </div>

                <!-- Technology -->
                <div class="footer-section">
                    <h3>{{ __('footer.tech_title') }}</h3>
                    <ul>
                        <li><a href="{{ route('landing.tech-stack') }}">{{ __('footer.tech.cloud') }}</a></li>
                        <li><a href="{{ route('landing.tech-stack') }}">{{ __('footer.tech.frontend') }}</a></li>
                        <li><a href="{{ route('landing.tech-stack') }}">{{ __('footer.tech.backend') }}</a></li>
                        <li><a href="{{ route('landing.tech-stack') }}">{{ __('footer.tech.data') }}</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div class="footer-section">
                    <h3>{{ __('footer.company_title') }}</h3>
                    <ul>
                        <li><a href="{{ route('landing.about-us') }}">{{ __('footer.company.about') }}</a></li>
                        <li><a href="{{ route('solutions.sme-manufacturing') }}">{{ __('footer.company.solutions') }}</a></li>
                        <li><a href="{{ route('landing.case-studies') }}">{{ __('footer.company.case_studies') }}</a></li>
                        <li><a href="{{ route('landing.contact') }}">{{ __('footer.company.contact') }}</a></li>
                    </ul>
                </div>

                <!-- Learn -->
                <div class="footer-section">
                    <h3>Learn</h3>
                    <ul>
                        <li><a href="{{ route('landing.blog.r_and_d') }}">{{ __('footer.company.rd') }}</a></li>
                        <li><a href="{{ route('landing.certifications') }}">{{ __('footer.company.certifications') }}</a></li>
                        <li><a href="{{ route('landing.pricing') }}">{{ __('footer.company.pricing') }}</a></li>
                        <li><a href="{{ route('landing.scrum') }}">{{ __('nav.scrum') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-divider">
                {{ __('footer.copyright') }}
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('[data-lang-menu]').forEach((menu) => {
            const trigger = menu.querySelector('[data-lang-trigger]');
            if (!trigger) return;

            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                menu.classList.toggle('open');
            });
        });

        document.addEventListener('click', (e) => {
            document.querySelectorAll('[data-lang-menu]').forEach((menu) => {
                if (!menu.contains(e.target)) {
                    menu.classList.remove('open');
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
