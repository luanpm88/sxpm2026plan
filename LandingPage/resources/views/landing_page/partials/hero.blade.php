<!-- Hero Section -->
<section id="hero" class="hero" aria-labelledby="heading-hero">

    <div class="container-v5">
        <div class="hero-main-grid">
            <div class="hero-centered">
                <!-- Headline -->
                <h1 id="heading-hero">
                    {{ __('hero.title_line1') }}<br><span>{{ __('hero.title_line2') }}</span>
                </h1>

                <!-- Description (ICP + specifics) -->
                <p class="hero-desc">
                    {{ __('hero.description') }}
                </p>

                <!-- CTA Buttons -->
                <div class="hero-buttons">
                    <a href="{{ route('landing.contact') }}" class="btn-primary-v5" data-ga-event="cta_click" data-ga-cta="hero_primary">
                        <span class="material-symbols-rounded" style="font-size: 1.1rem;">calendar_month</span>
                        <span>{{ __('hero.cta_primary') }}</span>
                    </a>
                    <a href="{{ route('landing.scrum') }}" class="btn-secondary-v5" data-ga-event="cta_click" data-ga-cta="hero_secondary">
                        <span class="material-symbols-rounded" style="font-size: 1.1rem;">play_circle</span>
                        <span>{{ __('hero.cta_secondary') }}</span>
                    </a>
                </div>

                <!-- Social Proof -->
                <div class="hero-social-proof">
                    <div class="hero-social-text">
                        <div class="hero-social-rating">
                            <span class="hero-stars">★★★★★</span>
                            <span class="hero-rating-score">{{ __('hero.social_proof_source') }}</span>
                        </div>
                        <div class="hero-social-label">{{ __('hero.social_proof_label') }}</div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Illustration -->
            <div class="hero-dashboard">
                <div class="hero-dashboard-inner hero-dashboard-inner--illustration">
                    <svg class="hero-illustration" viewBox="0 0 720 520" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="{{ __('hero.title_line1') }} {{ __('hero.title_line2') }} — HKIncotech enterprise software engineering">
                        <defs>
                            <pattern id="hero-grid-pattern" width="28" height="28" patternUnits="userSpaceOnUse">
                                <path d="M2 2h1M2 2v1" class="hs-grid-mark" />
                            </pattern>
                            <marker id="hero-arrow" markerWidth="8" markerHeight="8" refX="6.5" refY="4" orient="auto">
                                <path d="M1 1l6 3-6 3z" class="hs-arrow-head" />
                            </marker>
                            <marker id="hero-arrow-left" markerWidth="8" markerHeight="8" refX="1.5" refY="4" orient="auto">
                                <path d="M7 1L1 4l6 3z" class="hs-arrow-head" />
                            </marker>
                        </defs>

                        <rect x="46" y="42" width="628" height="398" rx="34" class="hs-grid-field" />
                        <path class="hs-axis" d="M360 62V118M360 362V438" />

                        <g class="hs-side-stack">
                            <g>
                                <path class="hs-flow" d="M202 140H272" marker-end="url(#hero-arrow)" />
                                <circle class="hs-port" cx="202" cy="140" r="4" />
                                <rect class="hs-card hs-card--side" x="58" y="102" width="144" height="76" rx="18" />
                                <path class="hs-card-divider" d="M92 134h76" />
                                <text class="hs-label" x="130" y="128" text-anchor="middle">{{ __('hero.svg_domain') }}</text>
                                <text class="hs-label-muted" x="130" y="155" text-anchor="middle">{{ __('hero.svg_acceptance') }}</text>
                            </g>
                            <g>
                                <path class="hs-flow" d="M202 250H272" marker-end="url(#hero-arrow)" />
                                <circle class="hs-port" cx="202" cy="250" r="4" />
                                <rect class="hs-card hs-card--side" x="58" y="212" width="144" height="76" rx="18" />
                                <path class="hs-card-divider" d="M92 244h76" />
                                <text class="hs-label" x="130" y="238" text-anchor="middle">{{ __('hero.svg_data_ai') }}</text>
                                <text class="hs-label-muted" x="130" y="265" text-anchor="middle">{{ __('hero.svg_api') }}</text>
                            </g>
                            <g>
                                <path class="hs-flow" d="M202 360H272" marker-end="url(#hero-arrow)" />
                                <circle class="hs-port" cx="202" cy="360" r="4" />
                                <rect class="hs-card hs-card--side" x="58" y="322" width="144" height="76" rx="18" />
                                <path class="hs-card-divider" d="M92 354h76" />
                                <text class="hs-label" x="130" y="348" text-anchor="middle">{{ __('hero.svg_security') }}</text>
                                <text class="hs-label-muted" x="130" y="375" text-anchor="middle">{{ __('hero.svg_operations') }}</text>
                            </g>
                        </g>

                        <g class="hs-system-core">
                            <rect x="288" y="88" width="176" height="254" rx="34" class="hs-core-shadow" />
                            <rect x="270" y="78" width="176" height="254" rx="34" class="hs-card hs-card--core" />
                            <text class="hs-core-title" x="358" y="116" text-anchor="middle">{{ __('hero.svg_system_core') }}</text>
                            <path class="hs-card-divider" d="M298 132h120" />
                            <rect class="hs-core-module" x="304" y="152" width="108" height="38" rx="12" />
                            <rect class="hs-core-module" x="304" y="204" width="108" height="38" rx="12" />
                            <rect class="hs-core-module" x="304" y="256" width="108" height="38" rx="12" />
                            <text class="hs-core-module-label" x="358" y="176" text-anchor="middle">{{ __('hero.svg_architecture') }}</text>
                            <text class="hs-core-module-label" x="358" y="228" text-anchor="middle">{{ __('hero.svg_api') }}</text>
                            <text class="hs-core-module-label" x="358" y="280" text-anchor="middle">{{ __('hero.svg_operations') }}</text>
                            <path class="hs-card-divider" d="M298 312h120" />
                            <path class="hs-icon-line" d="M330 324h56M342 335h32" />
                        </g>

                        <g class="hs-side-stack">
                            <g>
                                <path class="hs-flow" d="M518 140H446" marker-end="url(#hero-arrow-left)" />
                                <circle class="hs-port" cx="518" cy="140" r="4" />
                                <rect class="hs-card hs-card--side" x="518" y="102" width="144" height="76" rx="18" />
                                <path class="hs-card-divider" d="M552 134h76" />
                                <text class="hs-label" x="590" y="128" text-anchor="middle">SaaS</text>
                                <text class="hs-label-muted" x="590" y="155" text-anchor="middle">ERP</text>
                            </g>
                            <g>
                                <path class="hs-flow" d="M518 250H446" marker-end="url(#hero-arrow-left)" />
                                <circle class="hs-port" cx="518" cy="250" r="4" />
                                <rect class="hs-card hs-card--side" x="518" y="212" width="144" height="76" rx="18" />
                                <path class="hs-card-divider" d="M552 244h76" />
                                <text class="hs-label" x="590" y="238" text-anchor="middle">AI</text>
                                <text class="hs-label-muted" x="590" y="265" text-anchor="middle">{{ __('hero.svg_data_ai') }}</text>
                            </g>
                            <g>
                                <path class="hs-flow" d="M518 360H446" marker-end="url(#hero-arrow-left)" />
                                <circle class="hs-port" cx="518" cy="360" r="4" />
                                <rect class="hs-card hs-card--side" x="518" y="322" width="144" height="76" rx="18" />
                                <path class="hs-card-divider" d="M552 354h76" />
                                <text class="hs-label" x="590" y="348" text-anchor="middle">{{ __('hero.svg_scale') }}</text>
                                <text class="hs-label-muted" x="590" y="375" text-anchor="middle">{{ __('hero.svg_operations') }}</text>
                            </g>
                        </g>

                        <g class="hs-governance-strip">
                            <rect class="hs-strip" x="204" y="404" width="312" height="62" rx="22" />
                            <path class="hs-axis" d="M360 342V406" />
                            <path class="hs-icon-line" d="M234 435h50M284 435l-12-10M284 435l-12 10" />
                            <path class="hs-strip-divider" d="M312 416v38M414 416v38" />
                            <text class="hs-label" x="362" y="428" text-anchor="middle">{{ __('hero.svg_delivery') }}</text>
                            <text class="hs-label-muted" x="362" y="450" text-anchor="middle">Sprint</text>
                            <text class="hs-label" x="466" y="428" text-anchor="middle">{{ __('hero.svg_acceptance') }}</text>
                            <text class="hs-label-muted" x="466" y="450" text-anchor="middle">QA / SLA</text>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stats Row with Icons -->
        <div class="hero-stats-row">
            <div class="hero-stat-item">
                <div class="hero-stat-icon">
                    <span class="material-symbols-rounded">group</span>
                </div>
                <div class="hero-stat-value">{{ __('hero.stat1_value') }}</div>
                <div class="hero-stat-label">{{ __('hero.stat1_label') }}</div>
            </div>
            <div class="hero-stat-item">
                <div class="hero-stat-icon">
                    <span class="material-symbols-rounded">thumb_up</span>
                </div>
                <div class="hero-stat-value">{{ __('hero.stat2_value') }}</div>
                <div class="hero-stat-label">{{ __('hero.stat2_label') }}</div>
            </div>
            <div class="hero-stat-item">
                <div class="hero-stat-icon">
                    <span class="material-symbols-rounded">workspace_premium</span>
                </div>
                <div class="hero-stat-value">{{ __('hero.stat3_value') }}</div>
                <div class="hero-stat-label">{{ __('hero.stat3_label') }}</div>
            </div>
        </div>

        <!-- Industries Served (real industries, not fake logos) -->
        <div class="hero-clients-bar">
            <p class="hero-clients-label">{{ __('hero.industries_label') }}</p>
            <div class="hero-clients-logos">
                @php
                $industries = [
                    ['icon' => 'school', 'key' => 'industry_1'],
                    ['icon' => 'account_balance', 'key' => 'industry_2'],
                    ['icon' => 'local_shipping', 'key' => 'industry_3'],
                    ['icon' => 'factory', 'key' => 'industry_4'],
                    ['icon' => 'shopping_cart', 'key' => 'industry_5'],
                    ['icon' => 'health_and_safety', 'key' => 'industry_6'],
                ];
                @endphp
                @foreach($industries as $ind)
                <div class="hero-client-logo">
                    <span class="material-symbols-rounded" style="font-size: 1.5rem;">{{ $ind['icon'] }}</span>
                    <span>{{ __('hero.' . $ind['key']) }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="hero-trust-badges">
            <div class="hero-trust-badge">
                <span class="material-symbols-rounded">verified</span>
                <span>ISO 27001</span>
            </div>
            <div class="hero-trust-badge">
                <span class="material-symbols-rounded">shield</span>
                <span>SOC 2</span>
            </div>
            <div class="hero-trust-badge">
                <span class="material-symbols-rounded">security</span>
                <span>OWASP ASVS</span>
            </div>
            <div class="hero-trust-badge">
                <span class="material-symbols-rounded">policy</span>
                <span>NIST CSF</span>
            </div>
            <div class="hero-trust-badge">
                <span class="material-symbols-rounded">accessibility_new</span>
                <span>WCAG</span>
            </div>
        </div>

        <!-- Tech Badge Bar -->
        <div class="hero-tech-bar">
            <span class="hero-tech-pill">React</span>
            <span class="hero-tech-pill">Node.js</span>
            <span class="hero-tech-pill">Python</span>
            <span class="hero-tech-pill">AWS</span>
            <span class="hero-tech-pill">Kubernetes</span>
            <span class="hero-tech-pill">PostgreSQL</span>
            <span class="hero-tech-pill">GPT-4</span>
            <span class="hero-tech-pill">Flutter</span>
            <span class="hero-tech-pill">Terraform</span>
            <span class="hero-tech-pill hero-tech-pill--more">{{ __('hero.tech_badge_more') }}</span>
        </div>
    </div>
</section>
