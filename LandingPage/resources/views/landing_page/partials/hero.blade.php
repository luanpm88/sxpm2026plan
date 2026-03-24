<!-- Hero Section -->
<section id="hero" class="hero">
    <style>
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            padding: 6rem 2rem;
            background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -0.03em;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero-content p {
            font-size: 1.15rem;
            color: var(--text-gray);
            margin-bottom: 2.5rem;
            line-height: 1.8;
        }

        .hero-buttons {
            display: flex;
            gap: 1.25rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
            padding-top: 2.5rem;
            border-top: 1px solid var(--border);
        }

        .hero-stats > div {
            display: flex;
            flex-direction: column;
        }

        .hero-stats > div > div:first-child {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--primary);
        }

        .hero-stats > div > div:last-child {
            font-size: 0.95rem;
            color: var(--text-gray);
            margin-top: 0.5rem;
        }

        .hero-svg-box {
            background: white;
            border-radius: var(--card-radius);
            padding: 2.5rem;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 450px;
            position: relative;
        }

        .hero-svg-box svg {
            width: 100%;
            max-width: 350px;
        }

        @media (max-width: 991px) {
            .case-study-grid {
                grid-template-columns: 1fr !important;
            }
        }

        @media (max-width: 767px) {
            .hero {
                min-height: auto;
                padding: 3rem 0;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 0.95rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .hero-stats {
                gap: 1.5rem;
                grid-template-columns: 1fr;
            }

            .hero-stats > div > div:first-child {
                font-size: 1.75rem;
            }

            .hero-svg-box {
                min-height: 300px;
            }

            .case-study-grid {
                grid-template-columns: 1fr !important;
            }

            .case-study-grid > div:last-child {
                min-height: 200px !important;
            }
        }
    </style>

    <div class="container-v5">
        <div class="hero-grid">
            <div class="hero-content">
                <h1>
                    {{ __('hero.title_line1') }}<br><span>{{ __('hero.title_line2') }}</span>
                </h1>
                <p>
                    {{ __('hero.description') }}
                </p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary-v5">
                        <span>{{ __('hero.cta_primary') }}</span>
                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>
                    <a href="#services" class="btn-secondary-v5">
                        <span>{{ __('hero.cta_secondary') }}</span>
                        <span class="material-symbols-rounded">explore</span>
                    </a>
                </div>
                <div class="hero-stats">
                    <div>
                        <div>{{ __('hero.stat1_value') }}</div>
                        <div>{{ __('hero.stat1_label') }}</div>
                    </div>
                    <div>
                        <div>{{ __('hero.stat2_value') }}</div>
                        <div>{{ __('hero.stat2_label') }}</div>
                    </div>
                    <div>
                        <div>{{ __('hero.stat3_value') }}</div>
                        <div>{{ __('hero.stat3_label') }}</div>
                    </div>
                </div>
            </div>

            <div class="hero-svg-box">
                <svg viewBox="0 0 350 350">
                    <!-- Background circles -->
                    <circle cx="175" cy="175" r="160" fill="none" stroke="#1a4d5e" stroke-width="1" opacity="0.1"/>
                    <circle cx="175" cy="175" r="120" fill="none" stroke="#1a4d5e" stroke-width="1" opacity="0.15"/>
                    <circle cx="175" cy="175" r="80" fill="none" stroke="#1a4d5e" stroke-width="1" opacity="0.2"/>

                    <!-- Nodes -->
                    <circle cx="175" cy="80" r="12" fill="#1a4d5e"/>
                    <circle cx="265" cy="130" r="12" fill="#1a4d5e"/>
                    <circle cx="285" cy="220" r="12" fill="#1a4d5e"/>
                    <circle cx="175" cy="270" r="12" fill="#1a4d5e"/>
                    <circle cx="65" cy="220" r="12" fill="#1a4d5e"/>
                    <circle cx="85" cy="130" r="12" fill="#1a4d5e"/>
                    <circle cx="175" cy="175" r="16" fill="#0d9488"/>

                    <!-- Connections -->
                    <line x1="175" y1="80" x2="265" y2="130" stroke="#1a4d5e" stroke-width="2" opacity="0.4"/>
                    <line x1="265" y1="130" x2="285" y2="220" stroke="#1a4d5e" stroke-width="2" opacity="0.4"/>
                    <line x1="285" y1="220" x2="175" y2="270" stroke="#1a4d5e" stroke-width="2" opacity="0.4"/>
                    <line x1="175" y1="270" x2="65" y2="220" stroke="#1a4d5e" stroke-width="2" opacity="0.4"/>
                    <line x1="65" y1="220" x2="85" y2="130" stroke="#1a4d5e" stroke-width="2" opacity="0.4"/>
                    <line x1="85" y1="130" x2="175" y2="80" stroke="#1a4d5e" stroke-width="2" opacity="0.4"/>

                    <!-- Center to nodes -->
                    <line x1="175" y1="175" x2="175" y2="80" stroke="#0d9488" stroke-width="2" opacity="0.5"/>
                    <line x1="175" y1="175" x2="265" y2="130" stroke="#0d9488" stroke-width="2" opacity="0.5"/>
                    <line x1="175" y1="175" x2="285" y2="220" stroke="#0d9488" stroke-width="2" opacity="0.5"/>
                    <line x1="175" y1="175" x2="175" y2="270" stroke="#0d9488" stroke-width="2" opacity="0.5"/>
                    <line x1="175" y1="175" x2="65" y2="220" stroke="#0d9488" stroke-width="2" opacity="0.5"/>
                    <line x1="175" y1="175" x2="85" y2="130" stroke="#0d9488" stroke-width="2" opacity="0.5"/>

                    <!-- Labels -->
                    <text x="175" y="55" text-anchor="middle" font-size="11" fill="#1a4d5e" font-weight="bold">Frontend</text>
                    <text x="290" y="105" text-anchor="middle" font-size="11" fill="#1a4d5e" font-weight="bold">Backend</text>
                    <text x="305" y="225" text-anchor="middle" font-size="11" fill="#1a4d5e" font-weight="bold">Database</text>
                    <text x="175" y="295" text-anchor="middle" font-size="11" fill="#1a4d5e" font-weight="bold">DevOps</text>
                    <text x="35" y="225" text-anchor="middle" font-size="11" fill="#1a4d5e" font-weight="bold">Security</text>
                    <text x="55" y="105" text-anchor="middle" font-size="11" fill="#1a4d5e" font-weight="bold">AI/ML</text>

                    <text x="175" y="180" text-anchor="middle" font-size="14" fill="#0d9488" font-weight="bold">SCRUM</text>
                </svg>
            </div>
        </div>
    </div>
</section>
