<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HKIncotech - Enterprise Software Engineering">
    <title>HKIncotech | One Page Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        .lang-switcher-op {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
        .lang-switcher-op a {
            display: inline-flex;
            align-items: center;
            gap: 0.2rem;
            padding: 0.25rem 0.55rem;
            border-radius: 5px;
            font-size: 0.78rem;
            font-weight: 600;
            text-decoration: none;
            border: 1.5px solid rgba(255,255,255,0.3);
            color: rgba(255,255,255,0.8);
            transition: all 0.2s ease;
        }
        .lang-switcher-op a:hover,
        .lang-switcher-op a.active {
            background: rgba(255,255,255,0.15);
            border-color: rgba(255,255,255,0.7);
            color: white;
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
                <span style="transform: translateY(5px)">INCOTECH</span>
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
            <!-- Language Switcher -->
            <div class="lang-switcher-op">
                <a href="{{ route('locale.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">🇺🇸 EN</a>
                <a href="{{ route('locale.switch', 'vi') }}" class="{{ app()->getLocale() === 'vi' ? 'active' : '' }}">🇻🇳 VI</a>
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
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6;">
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
                        <li><a href="#certs" class="nav-link">{{ __('footer.company.certifications') }}</a></li>
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
    </script>

    @stack('scripts')
    @yield('custom_scripts')
</body>
</html>
