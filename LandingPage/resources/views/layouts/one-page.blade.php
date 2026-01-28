<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HKIncotech - Enterprise Software Engineering">
    <title>HKIncotech | One Page Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/onepage.css">
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
                <a href="#hero" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About Us</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#scrum" class="nav-link">SCRUM</a>
                <a href="#tech-stack" class="nav-link">Technology</a>
                <a href="#case-studies" class="nav-link">Case Studies</a>
                <a href="#r_and_d" class="nav-link">R&D</a>
                <a href="#certifications" class="nav-link">Certifications</a>
                <a href="#pricing" class="nav-link">Cost & Plans</a>
                <a href="#contact" class="nav-link">Contact</a>
            </nav>
            <a href="#contact" class="btn-header nav-link">Get Started</a>
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
                    <h3>About HKIncotech</h3>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6;">
                        Leading enterprise software development company in Southeast Asia. Specializing in custom software solutions, SaaS platforms, and AI solutions with 12+ years of experience.
                    </p>
                </div>
                <!-- Services -->
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#services" class="nav-link">Custom Software Development</a></li>
                        <li><a href="#services" class="nav-link">SaaS Platform</a></li>
                        <li><a href="#services" class="nav-link">AI Knowledge Platform</a></li>
                        <li><a href="#services" class="nav-link">Security & Compliance</a></li>
                    </ul>
                </div>
                <!-- Technology -->
                <div class="footer-section">
                    <h3>Technology</h3>
                    <ul>
                        <li><a href="#tech-stack" class="nav-link">Cloud & DevOps</a></li>
                        <li><a href="#tech-stack" class="nav-link">Frontend Technologies</a></li>
                        <li><a href="#tech-stack" class="nav-link">Backend Technologies</a></li>
                        <li><a href="#tech-stack" class="nav-link">Data & Analytics</a></li>
                    </ul>
                </div>
                <!-- Company -->
                <div class="footer-section">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#about" class="nav-link">About Us</a></li>
                        <li><a href="#case-studies" class="nav-link">Case Studies</a></li>
                        <li><a href="#certs" class="nav-link">Certifications</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                        <li><a href="#pricing" class="nav-link">Pricing</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider">
                &copy; 2026 HKIncotech. All rights reserved.
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
