<!-- Hero Section -->
<section id="hero" class="hero" aria-labelledby="heading-hero">

    <div class="container-v5">
        <div class="hero-main-grid">
            <div class="hero-centered">
                <!-- Headline -->
                <h1>
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
                    <svg class="hero-illustration" viewBox="0 0 640 500" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="{{ __('hero.title_line1') }} {{ __('hero.title_line2') }} — HKIncotech enterprise software engineering">
                        <defs>
                            <pattern id="hero-grid-pattern" width="28" height="28" patternUnits="userSpaceOnUse">
                                <circle cx="2" cy="2" r="1" class="hs-grid-dot" />
                            </pattern>
                        </defs>

                        <rect x="58" y="58" width="524" height="344" rx="34" class="hs-grid-field" />
                        <path class="hs-line hs-line--soft" d="M124 151H246M124 251H246M124 351H246" />
                        <path class="hs-line hs-line--soft" d="M394 151H516M394 251H516M394 351H516" />
                        <path class="hs-line hs-line--soft" d="M320 111V78M320 389V424" />

                        <g class="hs-source-stack">
                            <rect class="hs-card hs-card--soft" x="74" y="122" width="118" height="58" rx="16" />
                            <rect class="hs-card hs-card--soft" x="74" y="222" width="118" height="58" rx="16" />
                            <rect class="hs-card hs-card--soft" x="74" y="322" width="118" height="58" rx="16" />
                            <text class="hs-label" x="133" y="146" text-anchor="middle">{{ __('hero.svg_domain') }}</text>
                            <text class="hs-label-muted" x="133" y="164" text-anchor="middle">{{ __('hero.svg_acceptance') }}</text>
                            <text class="hs-label" x="133" y="246" text-anchor="middle">{{ __('hero.svg_data_ai') }}</text>
                            <text class="hs-label-muted" x="133" y="264" text-anchor="middle">{{ __('hero.svg_api') }}</text>
                            <text class="hs-label" x="133" y="346" text-anchor="middle">{{ __('hero.svg_security') }}</text>
                            <text class="hs-label-muted" x="133" y="364" text-anchor="middle">{{ __('hero.svg_operations') }}</text>
                        </g>

                        <g class="hs-system-core">
                            <rect x="236" y="104" width="168" height="232" rx="30" class="hs-core-shadow" />
                            <rect x="226" y="94" width="168" height="232" rx="30" class="hs-card hs-card--core" />
                            <text class="hs-core-title" x="310" y="130" text-anchor="middle">{{ __('hero.svg_system_core') }}</text>
                            <rect class="hs-chip" x="258" y="154" width="104" height="36" rx="12" />
                            <rect class="hs-chip" x="258" y="202" width="104" height="36" rx="12" />
                            <rect class="hs-chip" x="258" y="250" width="104" height="36" rx="12" />
                            <text class="hs-label" x="310" y="177" text-anchor="middle">{{ __('hero.svg_architecture') }}</text>
                            <text class="hs-label" x="310" y="225" text-anchor="middle">{{ __('hero.svg_api') }}</text>
                            <text class="hs-label" x="310" y="273" text-anchor="middle">{{ __('hero.svg_operations') }}</text>
                            <path class="hs-icon-line" d="M282 304h56M292 316h36" />
                        </g>

                        <g class="hs-target-stack">
                            <rect class="hs-card hs-card--soft" x="448" y="122" width="118" height="58" rx="16" />
                            <rect class="hs-card hs-card--soft" x="448" y="222" width="118" height="58" rx="16" />
                            <rect class="hs-card hs-card--soft" x="448" y="322" width="118" height="58" rx="16" />
                            <text class="hs-label" x="507" y="146" text-anchor="middle">SaaS</text>
                            <text class="hs-label-muted" x="507" y="164" text-anchor="middle">ERP</text>
                            <text class="hs-label" x="507" y="246" text-anchor="middle">AI</text>
                            <text class="hs-label-muted" x="507" y="264" text-anchor="middle">{{ __('hero.svg_data_ai') }}</text>
                            <text class="hs-label" x="507" y="346" text-anchor="middle">{{ __('hero.svg_scale') }}</text>
                            <text class="hs-label-muted" x="507" y="364" text-anchor="middle">{{ __('hero.svg_operations') }}</text>
                        </g>

                        <g class="hs-flow-dots">
                            <circle cx="226" cy="151" r="4" />
                            <circle cx="226" cy="251" r="4" />
                            <circle cx="226" cy="351" r="4" />
                            <circle cx="404" cy="151" r="4" />
                            <circle cx="404" cy="251" r="4" />
                            <circle cx="404" cy="351" r="4" />
                        </g>

                        <g class="hs-governance-strip">
                            <rect class="hs-strip" x="156" y="414" width="328" height="46" rx="18" />
                            <path class="hs-icon-line" d="M184 437h44M228 437l-9-8M228 437l-9 8" />
                            <text class="hs-label" x="292" y="433" text-anchor="middle">{{ __('hero.svg_delivery') }}</text>
                            <text class="hs-label-muted" x="392" y="433" text-anchor="middle">{{ __('hero.svg_acceptance') }}</text>
                            <text class="hs-label-muted" x="292" y="450" text-anchor="middle">Sprint</text>
                            <text class="hs-label-muted" x="392" y="450" text-anchor="middle">QA / SLA</text>
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
                <span class="material-symbols-rounded">cloud_done</span>
                <span>AWS Partner</span>
            </div>
            <div class="hero-trust-badge">
                <span class="material-symbols-rounded">security</span>
                <span>GDPR</span>
            </div>
            <div class="hero-trust-badge">
                <span class="material-symbols-rounded">lock</span>
                <span>PCI DSS</span>
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
