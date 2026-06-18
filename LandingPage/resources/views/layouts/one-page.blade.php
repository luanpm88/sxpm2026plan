<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HKIncotech - Enterprise Software Engineering">
    <title>HKIncotech | One Page Landing</title>
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const preferredDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const theme = savedTheme || (preferredDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', theme);
            if (sessionStorage.getItem('locale-switch-scroll-y') !== null) {
                history.scrollRestoration = 'manual';
            }
        })();
    </script>
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/logo.svg') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        .lang-switcher-op {
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }
        .lang-switcher-op a,
        .theme-toggle-locale {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.35rem 0.65rem;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 600;
            text-decoration: none;
            border: 1.5px solid var(--contrast-glass-border);
            color: var(--contrast-panel-muted);
            transition: all 0.2s ease;
            background: transparent;
            cursor: pointer;
        }
        .theme-toggle-locale .material-symbols-rounded {
            font-size: 1rem;
            line-height: 1;
        }
        .lang-switcher-op a:hover,
        .lang-switcher-op a.active,
        .theme-toggle-locale:hover {
            background: var(--contrast-panel-border);
            border-color: var(--contrast-panel-muted-soft);
            color: var(--contrast-panel-text);
        }
        .lang-switcher-op .material-symbols-rounded {
            font-size: 1rem;
            line-height: 1;
        }
    </style>
    @stack('styles')
    @yield('custom_head')
</head>
<body class="onepage-body">
    <!-- OnePage Navigation -->
    <header>
        <div class="header-container">
            <a href="#hero" class="logo nav-link">
                <img src="/img/logo.svg" alt="HKIncotech">
                <span>INCOTECH</span>
            </a>
            <button class="mobile-menu-toggle" onclick="document.querySelector('nav').classList.toggle('mobile-open')">
                <span class="material-symbols-rounded">menu</span>
            </button>
            <nav>
                <a href="#hero" class="nav-link">{{ __('nav.home') }}</a>
                <a href="#about" class="nav-link">{{ __('nav.about') }}</a>
                <a href="#services" class="nav-link">{{ __('nav.services') }}</a>
                <a href="#scrum" class="nav-link">{{ __('nav.scrum') }}</a>
                <a href="#tech-stack" class="nav-link">{{ __('nav.tech') }}</a>
                <a href="#case-studies" class="nav-link">{{ __('nav.case_studies') }}</a>
                <a href="#r_and_d" class="nav-link">{{ __('nav.rd') }}</a>
                <a href="#certifications" class="nav-link">{{ __('nav.certifications') }}</a>
                <a href="#pricing" class="nav-link">{{ __('nav.pricing') }}</a>
                <a href="#contact" class="nav-link">{{ __('nav.contact') }}</a>
            </nav>
            <button class="theme-toggle theme-toggle-locale" type="button" aria-label="Toggle dark mode" data-theme-toggle>
                <span class="material-symbols-rounded" data-theme-icon>dark_mode</span>
            </button>
            <!-- Language Switcher -->
            <div class="lang-switcher-op">
                <a href="{{ route('locale.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}" data-locale-switch>
                    <span class="material-symbols-rounded" aria-hidden="true">language</span>
                    English
                </a>
                <a href="{{ route('locale.switch', 'vi') }}" class="{{ app()->getLocale() === 'vi' ? 'active' : '' }}" data-locale-switch>
                    <span class="material-symbols-rounded" aria-hidden="true">language</span>
                    Tiếng Việt
                </a>
            </div>

            <a href="#contact" class="btn-header nav-link">{{ __('nav.get_started') }}</a>
        </div>
    </header>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer (same as main) -->
    <footer>
        <div class="container-v5">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3>{{ __('footer.about_title') }}</h3>
                    <p style="color: var(--contrast-panel-muted-soft); font-size: 0.9rem; line-height: 1.6;">
                        {{ __('footer.about_desc') }}
                    </p>
                </div>
                <!-- Services -->
                <div class="footer-section">
                    <h3>{{ __('footer.services_title') }}</h3>
                    <ul>
                        <li><a href="#services" class="nav-link">{{ __('footer.services.custom') }}</a></li>
                        <li><a href="#services" class="nav-link">{{ __('footer.services.saas') }}</a></li>
                        <li><a href="#services" class="nav-link">{{ __('footer.services.ai') }}</a></li>
                        <li><a href="#services" class="nav-link">{{ __('footer.services.security') }}</a></li>
                    </ul>
                </div>
                <!-- Technology -->
                <div class="footer-section">
                    <h3>{{ __('footer.tech_title') }}</h3>
                    <ul>
                        <li><a href="#tech-stack" class="nav-link">{{ __('footer.tech.cloud') }}</a></li>
                        <li><a href="#tech-stack" class="nav-link">{{ __('footer.tech.frontend') }}</a></li>
                        <li><a href="#tech-stack" class="nav-link">{{ __('footer.tech.backend') }}</a></li>
                        <li><a href="#tech-stack" class="nav-link">{{ __('footer.tech.data') }}</a></li>
                    </ul>
                </div>
                <!-- Company -->
                <div class="footer-section">
                    <h3>{{ __('footer.company_title') }}</h3>
                    <ul>
                        <li><a href="#about" class="nav-link">{{ __('footer.company.about') }}</a></li>
                        <li><a href="#case-studies" class="nav-link">{{ __('footer.company.case_studies') }}</a></li>
                        <li><a href="#certifications" class="nav-link">{{ __('footer.company.certifications') }}</a></li>
                        <li><a href="#contact" class="nav-link">{{ __('footer.company.contact') }}</a></li>
                        <li><a href="#pricing" class="nav-link">{{ __('footer.company.pricing') }}</a></li>
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
        (function () {
            const LOCALE_SCROLL_KEY = 'locale-switch-scroll-y';
            const savedScrollY = sessionStorage.getItem(LOCALE_SCROLL_KEY);
            if (savedScrollY !== null) {
                sessionStorage.removeItem(LOCALE_SCROLL_KEY);
                history.scrollRestoration = 'manual';
                requestAnimationFrame(() => {
                    window.scrollTo({ top: Number(savedScrollY) || 0, behavior: 'instant' });
                });
            }
            document.querySelectorAll('[data-locale-switch]').forEach((link) => {
                link.addEventListener('click', () => {
                    sessionStorage.setItem(LOCALE_SCROLL_KEY, String(window.scrollY));
                });
            });
        })();
    </script>
    <script>
        // Mobile nav: close when clicking outside
        document.addEventListener('click', (e) => {
            const nav = document.querySelector('nav');
            const toggle = document.querySelector('.mobile-menu-toggle');
            if (nav && nav.classList.contains('mobile-open') && !nav.contains(e.target) && toggle && !toggle.contains(e.target)) {
                nav.classList.remove('mobile-open');
            }
        });
    </script>
    <script>
        // Smooth scroll for nav links
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        e.preventDefault();
                        window.scrollTo({
                            top: target.offsetTop - 60,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const HEADER_OFFSET = 70;
            const navLinks = document.querySelectorAll('header nav a[href^="#"]');

            const sections = Array.from(navLinks)
                .map(link => document.querySelector(link.getAttribute('href')))
                .filter(Boolean);

            let isProgrammaticScroll = false;
            let observerEnabled = false;
            let hasUserInteracted = false; // ⭐ KEY FIX

            // -----------------------------
            // Helpers
            // -----------------------------
            function setActiveById(id) {
                navLinks.forEach(link => {
                    link.classList.toggle(
                        'active',
                        link.getAttribute('href') === `#${id}`
                    );
                });
            }

            function updateHash(id) {
                if (!hasUserInteracted) return; // ⛔ block auto hash
                if (window.location.hash !== `#${id}`) {
                    history.pushState(null, '', `#${id}`);
                }
            }

            function scrollToSection(section, callback) {
                isProgrammaticScroll = true;

                window.scrollTo({
                    top: section.offsetTop - HEADER_OFFSET,
                    behavior: 'smooth'
                });

                setTimeout(() => {
                    isProgrammaticScroll = false;
                    callback?.();
                }, 700);
            }

            // -----------------------------
            // Menu click (explicit intent)
            // -----------------------------
            navLinks.forEach(link => {
                link.addEventListener('click', e => {
                    const target = document.querySelector(link.getAttribute('href'));
                    if (!target) return;

                    e.preventDefault();

                    hasUserInteracted = true;
                    observerEnabled = false;

                    setActiveById(target.id);
                    history.pushState(null, '', `#${target.id}`);

                    scrollToSection(target, () => {
                        observerEnabled = true;
                    });

                    document.querySelector('nav')?.classList.remove('mobile-open');
                });
            });

            // -----------------------------
            // Detect real user scroll
            // -----------------------------
            let scrollTimeout;
            window.addEventListener('scroll', () => {
                if (isProgrammaticScroll) return;

                hasUserInteracted = true;

                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    observerEnabled = true;
                }, 50);
            }, { passive: true });

            // -----------------------------
            // Scroll spy
            // -----------------------------
            const observer = new IntersectionObserver(
                entries => {
                    if (!observerEnabled || isProgrammaticScroll) return;

                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            setActiveById(entry.target.id);
                            updateHash(entry.target.id);
                        }
                    });
                },
                {
                    root: null,
                    rootMargin: `-${HEADER_OFFSET}px 0px -50% 0px`,
                    threshold: 0
                }
            );

            sections.forEach(section => observer.observe(section));

            // -----------------------------
            // Initial load
            // -----------------------------
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    observerEnabled = false;
                    setActiveById(target.id);

                    setTimeout(() => {
                        scrollToSection(target, () => {
                            observerEnabled = true;
                        });
                    }, 80);
                }
            } else {
                // ✅ No hash → NO scroll, NO hash update
                observerEnabled = false;
            }

            // -----------------------------
            // Back / Forward buttons
            // -----------------------------
            window.addEventListener('popstate', () => {
                if (!window.location.hash) return;

                hasUserInteracted = true;
                const target = document.querySelector(window.location.hash);
                if (target) {
                    observerEnabled = false;
                    scrollToSection(target, () => {
                        observerEnabled = true;
                    });
                }
            });
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

            // Restore scroll position after locale page reload.
            const savedScrollY = sessionStorage.getItem(LOCALE_SCROLL_KEY);
            if (savedScrollY !== null) {
                sessionStorage.removeItem(LOCALE_SCROLL_KEY);
                window.scrollTo(0, Number(savedScrollY) || 0);
            }

            localeLinks.forEach((link) => {
                link.addEventListener('click', () => {
                    sessionStorage.setItem(LOCALE_SCROLL_KEY, String(window.scrollY));
                });
            });
        })();
    </script>

    @stack('scripts')
    @yield('custom_scripts')
</body>
</html>
