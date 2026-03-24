<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $pageDescription ?? 'HKIncotech - Enterprise Software Engineering' }}">
    <title>{{ $pageTitle ?? 'HKIncotech' }}</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Symbols Rounded -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Main CSS (v= cache-bust so header/nav fixes always apply) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v=3">

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
    </header>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container-v5">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3>{{ __('footer.about_title') }}</h3>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6;">
                        {{ __('footer.about_desc') }}
                    </p>
                </div>

                <!-- Services -->
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
                        <li><a href="{{ route('landing.blog.r_and_d') }}">{{ __('footer.company.rd') }}</a></li>
                        <li><a href="{{ route('landing.certifications') }}">{{ __('footer.company.certifications') }}</a></li>
                        <li><a href="{{ route('landing.contact') }}">{{ __('footer.company.contact') }}</a></li>
                        <li><a href="{{ route('landing.pricing') }}">{{ __('footer.company.pricing') }}</a></li>
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
