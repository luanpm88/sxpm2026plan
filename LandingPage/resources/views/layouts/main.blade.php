<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $pageDescription ?? 'HKIncotech - Enterprise Software Engineering' }}">
    <title>{{ $pageTitle ?? 'HKIncotech' }}</title>
    <meta name="keywords" content="enterprise software development Vietnam, custom software development Southeast Asia, SaaS development company, offshore development team Vietnam, MVP development service, cloud-native application development, AI integration enterprise software">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Hreflang for multilingual SEO -->
    @php
        $currentPath = request()->path();
        $pathWithoutLocale = preg_replace('#^(en|vi)(/|$)#', '', $currentPath);
    @endphp
    <link rel="alternate" hreflang="en" href="{{ url('/en/' . $pathWithoutLocale) }}">
    <link rel="alternate" hreflang="vi" href="{{ url('/vi/' . $pathWithoutLocale) }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/en/' . $pathWithoutLocale) }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "HKIncotech",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('img/logo.svg') }}",
        "description": "Enterprise software engineering company based in Southeast Asia. 12+ years, 100+ engineers, 50+ enterprise clients.",
        "foundingDate": "2012",
        "numberOfEmployees": {
            "@@type": "QuantitativeValue",
            "minValue": 100
        },
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "188 Duong So 1, Binh Hung Hoa, Binh Tan",
            "addressLocality": "Ho Chi Minh City",
            "addressCountry": "VN"
        },
        "sameAs": [],
        "knowsAbout": ["Custom Software Development", "SaaS Platforms", "AI Solutions", "Cloud Architecture", "Manufacturing Software"],
        "areaServed": ["Southeast Asia", "Global"]
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "HKIncotech",
        "url": "{{ url('/') }}"
    }
    </script>

    <!-- OpenGraph -->
    <meta property="og:type"        content="website">
    <meta property="og:title"       content="{{ $pageTitle ?? 'HKIncotech' }}">
    <meta property="og:description" content="{{ $pageDescription ?? 'HKIncotech - Enterprise Software Engineering' }}">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:image"       content="{{ asset('img/og-cover.png') }}">
    <meta property="og:site_name"   content="HKIncotech">
    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="{{ $pageTitle ?? 'HKIncotech' }}">
    <meta name="twitter:description" content="{{ $pageDescription ?? 'HKIncotech - Enterprise Software Engineering' }}">
    <meta name="twitter:image"       content="{{ asset('img/og-cover.png') }}">
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const preferredDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const theme = savedTheme || (preferredDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', theme);
            // Prevent browser from overriding JS scroll restore on locale switch
            if (sessionStorage.getItem('locale-switch-scroll-y') !== null) {
                history.scrollRestoration = 'manual';
            }
        })();
    </script>
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/logo.svg') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}">

    <!-- Preconnect for external resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Bootstrap 5 CSS (retained for multi-page compatibility) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts: Inter + Material Symbols in a single request -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}">

    {{-- Critical nav fallback --}}
    <style>
        header nav a.nav-link-v5 { white-space: nowrap !important; word-break: keep-all; }
        .btn-header { white-space: nowrap !important; }
        .lang-dropdown { display: none !important; }
        .lang-menu.open .lang-dropdown { display: block !important; }
    </style>

    @stack('schemas')
    @stack('styles')
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="header-container">
            <a href="{{ route('landing.index') }}" class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="HKIncotech">
                <span>INCOTECH</span>
            </a>
            <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                <span class="material-symbols-rounded">menu</span>
            </button>
            <nav id="mainNav">
                @php
                    $r = Route::currentRouteName();
                    $servicesActive = in_array($r, ['landing.services', 'solutions.sme-manufacturing']);
                    $expertiseActive = in_array($r, ['landing.scrum', 'landing.tech-stack', 'landing.certifications']);
                    $companyActive   = in_array($r, ['landing.about-us', 'landing.case-studies', 'landing.blog.r_and_d']);
                    $closeNav = "document.getElementById('mainNav').classList.remove('mobile-open')";
                @endphp

                <a href="{{ route('landing.index') }}"
                   class="nav-link-v5 {{ $r === 'landing.index' ? 'nav-link-v5--active' : '' }}"
                   onclick="{{ $closeNav }}">
                    {{ __('nav.home') }}
                </a>

                {{-- Services dropdown --}}
                <div class="nav-group nav-group--services {{ $servicesActive ? 'nav-group--active' : '' }}" data-nav-group>
                    <button class="nav-group__trigger" data-nav-trigger aria-expanded="false">
                        {{ __('nav.group_services') }}
                        <span class="material-symbols-rounded nav-chevron">expand_more</span>
                    </button>
                    <div class="nav-group__panel nav-group__panel--mega">
                        <div class="nav-mega">
                            <div class="nav-mega__aside">
                                <div class="nav-mega__aside-top">
                                    <div class="nav-mega__aside-title">{{ __('nav.dropdown.services.aside_title') }}</div>
                                    <div class="nav-mega__aside-desc">{{ __('nav.dropdown.services.aside_desc') }}</div>
                                </div>
                                <div class="nav-mega__tags" aria-label="{{ __('nav.dropdown.services.tags_aria') }}">
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.services.tag_1') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.services.tag_2') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.services.tag_3') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.services.tag_4') }}</span>
                                </div>
                            </div>
                            <div class="nav-mega__main">
                                <div class="nav-mega__label">{{ __('nav.dropdown.services.main_label') }}</div>
                                <a href="{{ route('landing.services') }}"
                                   class="nav-mega__item {{ $r === 'landing.services' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">code</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.services') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.services.item_services_desc') }}</span>
                                    </span>
                                </a>
                                <a href="{{ route('solutions.sme-manufacturing') }}"
                                   class="nav-mega__item {{ $r === 'solutions.sme-manufacturing' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">factory</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.solutions') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.services.item_solutions_desc') }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Expertise dropdown --}}
                <div class="nav-group nav-group--expertise {{ $expertiseActive ? 'nav-group--active' : '' }}" data-nav-group>
                    <button class="nav-group__trigger" data-nav-trigger aria-expanded="false">
                        {{ __('nav.group_expertise') }}
                        <span class="material-symbols-rounded nav-chevron">expand_more</span>
                    </button>
                    <div class="nav-group__panel nav-group__panel--mega">
                        <div class="nav-mega">
                            <div class="nav-mega__aside">
                                <div class="nav-mega__aside-top">
                                    <div class="nav-mega__aside-title">{{ __('nav.dropdown.expertise.aside_title') }}</div>
                                    <div class="nav-mega__aside-desc">{{ __('nav.dropdown.expertise.aside_desc') }}</div>
                                </div>
                                <div class="nav-mega__tags" aria-label="{{ __('nav.dropdown.expertise.tags_aria') }}">
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.expertise.tag_1') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.expertise.tag_2') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.expertise.tag_3') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.expertise.tag_4') }}</span>
                                </div>
                            </div>
                            <div class="nav-mega__main">
                                <div class="nav-mega__label">{{ __('nav.dropdown.expertise.main_label') }}</div>
                                <a href="{{ route('landing.scrum') }}"
                                   class="nav-mega__item {{ $r === 'landing.scrum' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">sprint</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.scrum') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.expertise.item_scrum_desc') }}</span>
                                    </span>
                                </a>
                                <a href="{{ route('landing.tech-stack') }}"
                                   class="nav-mega__item {{ $r === 'landing.tech-stack' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">layers</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.tech') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.expertise.item_tech_desc') }}</span>
                                    </span>
                                </a>
                                <a href="{{ route('landing.certifications') }}"
                                   class="nav-mega__item {{ $r === 'landing.certifications' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">verified</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.certifications') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.expertise.item_certs_desc') }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Company dropdown --}}
                <div class="nav-group nav-group--company {{ $companyActive ? 'nav-group--active' : '' }}" data-nav-group>
                    <button class="nav-group__trigger" data-nav-trigger aria-expanded="false">
                        {{ __('nav.group_company') }}
                        <span class="material-symbols-rounded nav-chevron">expand_more</span>
                    </button>
                    <div class="nav-group__panel nav-group__panel--mega">
                        <div class="nav-mega">
                            <div class="nav-mega__aside">
                                <div class="nav-mega__aside-top">
                                    <div class="nav-mega__aside-title">{{ __('nav.dropdown.company.aside_title') }}</div>
                                    <div class="nav-mega__aside-desc">{{ __('nav.dropdown.company.aside_desc') }}</div>
                                </div>
                                <div class="nav-mega__tags" aria-label="{{ __('nav.dropdown.company.tags_aria') }}">
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.company.tag_1') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.company.tag_2') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.company.tag_3') }}</span>
                                    <span class="nav-mega__tag">{{ __('nav.dropdown.company.tag_4') }}</span>
                                </div>
                            </div>
                            <div class="nav-mega__main">
                                <div class="nav-mega__label">{{ __('nav.dropdown.company.main_label') }}</div>
                                <a href="{{ route('landing.about-us') }}"
                                   class="nav-mega__item {{ $r === 'landing.about-us' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">groups</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.about') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.company.item_about_desc') }}</span>
                                    </span>
                                </a>
                                <a href="{{ route('landing.case-studies') }}"
                                   class="nav-mega__item {{ $r === 'landing.case-studies' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">cases</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.case_studies') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.company.item_case_desc') }}</span>
                                    </span>
                                </a>
                                <a href="{{ route('landing.blog.r_and_d') }}"
                                   class="nav-mega__item {{ $r === 'landing.blog.r_and_d' ? 'nav-item--active' : '' }}"
                                   onclick="{{ $closeNav }}">
                                    <span class="material-symbols-rounded nav-mega__icon">science</span>
                                    <span class="nav-mega__text">
                                        <span class="nav-mega__title">{{ __('nav.rd') }}</span>
                                        <span class="nav-mega__desc">{{ __('nav.dropdown.company.item_rd_desc') }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('landing.pricing') }}"
                   class="nav-link-v5 {{ $r === 'landing.pricing' ? 'nav-link-v5--active' : '' }}"
                   onclick="{{ $closeNav }}">
                    {{ __('nav.pricing') }}
                </a>

                <a href="{{ route('landing.contact') }}"
                   class="nav-link-v5 {{ $r === 'landing.contact' ? 'nav-link-v5--active' : '' }}"
                   onclick="{{ $closeNav }}">
                    {{ __('nav.contact') }}
                </a>
            </nav>

            <div class="header-actions">
                <button class="theme-toggle" type="button" aria-label="Toggle dark mode" data-theme-toggle>
                    <span class="material-symbols-rounded" data-theme-icon>dark_mode</span>
                </button>
                <!-- Language Switcher -->
                <div class="lang-menu" data-lang-menu>
                    <button class="lang-trigger" type="button" aria-label="Switch language" data-lang-trigger>
                        <span class="material-symbols-rounded lang-globe" aria-hidden="true">language</span>
                        <span class="lang-current-label">{{ app()->getLocale() === 'vi' ? 'Tiếng Việt' : 'English' }}</span>
                        <span class="material-symbols-rounded lang-chevron" aria-hidden="true">expand_more</span>
                    </button>
                    <div class="lang-dropdown" data-lang-dropdown>
                        <a href="{{ route('locale.switch', 'vi') }}" class="{{ app()->getLocale() === 'vi' ? 'lang-option--active' : '' }}" data-locale-switch>
                            <span class="lang-option-code">VI</span>
                            <span class="lang-option-copy">
                                <strong>Tiếng Việt</strong>
                                <small>Vietnamese</small>
                            </span>
                        </a>
                        <a href="{{ route('locale.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'lang-option--active' : '' }}" data-locale-switch>
                            <span class="lang-option-code">EN</span>
                            <span class="lang-option-copy">
                                <strong>English</strong>
                                <small>English</small>
                            </span>
                        </a>
                    </div>
                </div>

                <a href="{{ route('landing.contact') }}" class="btn-header">{{ __('nav.get_started') }}</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
    @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container-v5">
            <div class="footer-grid-5col" style="display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr; gap: 2.5rem; margin-bottom: 2.5rem;">
                <!-- Company Info -->
                <div class="footer-section">
                    <a href="{{ route('landing.index') }}" class="logo" style="color: var(--contrast-panel-text); margin-bottom: 1rem; display: inline-flex;">
                        <img src="{{ asset('img/logo.svg') }}" alt="HKIncotech" style="filter: brightness(0) invert(1);">
                        <span>INCOTECH</span>
                    </a>
                    <p style="color: var(--footer-text); font-size: 0.88rem; line-height: 1.65; margin-top: 1rem;">
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
                    <h3>{{ __('footer.learn_title') }}</h3>
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
        // Mobile menu toggle
        const mobileToggle = document.getElementById('mobileMenuToggle');
        const mainNav = document.getElementById('mainNav');
        if (mobileToggle && mainNav) {
            mobileToggle.addEventListener('click', () => {
                const isOpen = mainNav.classList.toggle('mobile-open');
                // Collapse all nav groups when closing
                if (!isOpen) {
                    document.querySelectorAll('[data-nav-group]').forEach(g => g.classList.remove('open'));
                }
            });
        }

        // Nav dropdown groups — toggle open/close on click (mobile)
        document.querySelectorAll('[data-nav-trigger]').forEach((trigger) => {
            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                const group = trigger.closest('[data-nav-group]');
                const isOpen = group.classList.contains('open');
                // Close all groups
                document.querySelectorAll('[data-nav-group]').forEach(g => {
                    g.classList.remove('open');
                    g.querySelector('[data-nav-trigger]')?.setAttribute('aria-expanded', 'false');
                });
                // Toggle this one
                if (!isOpen) {
                    group.classList.add('open');
                    trigger.setAttribute('aria-expanded', 'true');
                }
            });
        });

        // Lang menu toggle
        document.querySelectorAll('[data-lang-menu]').forEach((menu) => {
            const trigger = menu.querySelector('[data-lang-trigger]');
            if (!trigger) return;
            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                menu.classList.toggle('open');
            });
        });

        document.addEventListener('click', (e) => {
            // Close lang menu
            document.querySelectorAll('[data-lang-menu]').forEach((menu) => {
                if (!menu.contains(e.target)) menu.classList.remove('open');
            });
            // Close mobile nav when clicking outside
            if (mainNav && mainNav.classList.contains('mobile-open') && !mainNav.contains(e.target) && mobileToggle && !mobileToggle.contains(e.target)) {
                mainNav.classList.remove('mobile-open');
                document.querySelectorAll('[data-nav-group]').forEach(g => g.classList.remove('open'));
            }
            // Close desktop dropdowns when clicking outside
            if (!e.target.closest('[data-nav-group]')) {
                document.querySelectorAll('[data-nav-group]').forEach(g => g.classList.remove('open'));
            }
        });

        (function () {
            const toggleButton = document.querySelector('[data-theme-toggle]');
            const icon = document.querySelector('[data-theme-icon]');
            if (!toggleButton || !icon) return;

            const applyTheme = (theme) => {
                document.documentElement.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
                icon.textContent = theme === 'dark' ? 'light_mode' : 'dark_mode';
                toggleButton.setAttribute('aria-label', theme === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
            };

            const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
            applyTheme(currentTheme);

            toggleButton.addEventListener('click', () => {
                const nextTheme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
                applyTheme(nextTheme);
            });
        })();

        (function () {
            const LOCALE_SCROLL_KEY = 'locale-switch-scroll-y';
            const localeLinks = document.querySelectorAll('[data-locale-switch]');

            // Restore scroll position after locale switch redirect.
            const savedScrollY = sessionStorage.getItem(LOCALE_SCROLL_KEY);
            if (savedScrollY !== null) {
                sessionStorage.removeItem(LOCALE_SCROLL_KEY);
                history.scrollRestoration = 'manual';
                requestAnimationFrame(() => {
                    window.scrollTo({ top: Number(savedScrollY) || 0, behavior: 'instant' });
                });
            }

            localeLinks.forEach((link) => {
                link.addEventListener('click', () => {
                    sessionStorage.setItem(LOCALE_SCROLL_KEY, String(window.scrollY));
                });
            });
        })();
    </script>

    @stack('scripts')

    {{-- Google Analytics 4 --}}
    {{-- Replace GA_MEASUREMENT_ID with your actual GA4 ID (e.g., G-XXXXXXXXXX) --}}
    @if(config('services.ga4.id'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga4.id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('services.ga4.id') }}', {
            page_title: document.title,
            page_location: window.location.href,
            content_group: '{{ $currentPage ?? "index" }}'
        });
    </script>
    @endif

    {{-- GA4 Event Tracking --}}
    <script>
    (function() {
        function trackEvent(eventName, params) {
            if (typeof gtag === 'function') {
                gtag('event', eventName, params);
            }
        }

        // CTA click tracking
        document.querySelectorAll('[data-ga-event="cta_click"]').forEach(function(el) {
            el.addEventListener('click', function() {
                trackEvent('cta_click', {
                    cta_text: this.textContent.trim(),
                    cta_location: this.dataset.gaCta || 'unknown',
                    page: window.location.pathname
                });
            });
        });

        // Service explore tracking
        document.querySelectorAll('[data-ga-event="service_explore"]').forEach(function(el) {
            el.addEventListener('click', function() {
                trackEvent('service_explore', {
                    service_name: this.dataset.gaService || 'unknown',
                    source_section: 'services'
                });
            });
        });

        // Case study view tracking
        document.querySelectorAll('[data-ga-event="case_study_view"]').forEach(function(el) {
            el.addEventListener('click', function() {
                trackEvent('case_study_view', {
                    case_study_name: this.dataset.gaCase || 'unknown',
                    page: window.location.pathname
                });
            });
        });

        // Contact form submission tracking
        var contactForm = document.querySelector('form[action*="contact"]');
        if (contactForm) {
            contactForm.addEventListener('submit', function() {
                trackEvent('contact_form_submit', {
                    form_type: 'contact',
                    source_page: window.location.pathname
                });
            });
        }

        // Scroll depth tracking
        var scrollMarkers = [25, 50, 75, 100];
        var scrollFired = {};
        window.addEventListener('scroll', function() {
            var scrollPercent = Math.round(
                (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100
            );
            scrollMarkers.forEach(function(marker) {
                if (scrollPercent >= marker && !scrollFired[marker]) {
                    scrollFired[marker] = true;
                    trackEvent('scroll_depth', {
                        page: window.location.pathname,
                        percent: marker
                    });
                }
            });
        }, { passive: true });

        // Language switch tracking
        document.querySelectorAll('[data-locale-switch]').forEach(function(el) {
            el.addEventListener('click', function() {
                trackEvent('language_switch', {
                    from_lang: document.documentElement.lang,
                    to_lang: this.href.includes('/vi') ? 'vi' : 'en'
                });
            });
        });

        // Engagement time tracking (>30s)
        setTimeout(function() {
            trackEvent('engagement_time', {
                page: window.location.pathname,
                duration_bucket: '30s+'
            });
        }, 30000);
    })();
    </script>
</body>
</html>
