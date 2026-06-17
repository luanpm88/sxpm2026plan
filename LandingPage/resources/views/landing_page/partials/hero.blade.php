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
                    <svg class="hero-illustration" viewBox="0 0 600 500" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="{{ __('hero.title_line1') }} {{ __('hero.title_line2') }} — HKIncotech enterprise software engineering">
                        <!-- structural orbits (engineered, airy) -->
                        <circle cx="300" cy="250" r="178" stroke="currentColor" stroke-width="1.3" opacity="0.09" stroke-dasharray="1.5 11" stroke-linecap="round"/>
                        <circle cx="300" cy="250" r="112" stroke="currentColor" stroke-width="1.3" opacity="0.07" stroke-dasharray="1.5 11" stroke-linecap="round"/>
                        <!-- corner registration marks -->
                        <g stroke="currentColor" stroke-width="1.4" opacity="0.16" stroke-linecap="round">
                            <path d="M68 70h15M68 70v15"/>
                            <path d="M532 70h-15M532 70v15"/>
                            <path d="M68 430h15M68 430v-15"/>
                            <path d="M532 430h-15M532 430v-15"/>
                        </g>
                        <!-- precise connectors + data flow dots -->
                        <g stroke="currentColor" stroke-width="1.5" opacity="0.26" stroke-linecap="round">
                            <path d="M300 172V103"/><path d="M378 250H447"/><path d="M300 328V397"/><path d="M222 250H153"/>
                        </g>
                        <g fill="currentColor" opacity="0.55">
                            <circle cx="300" cy="137" r="2.4"/><circle cx="412" cy="250" r="2.4"/><circle cx="300" cy="363" r="2.4"/><circle cx="187" cy="250" r="2.4"/>
                        </g>

                        <!-- layered depth behind the platform hub -->
                        <rect x="238" y="158" width="156" height="156" rx="30" fill="currentColor" opacity="0.035"/>
                        <rect x="230" y="165" width="156" height="156" rx="30" fill="currentColor" opacity="0.05"/>
                        <rect x="224" y="180" width="156" height="156" rx="30" fill="currentColor" opacity="0.05"/>
                        <!-- platform hub -->
                        <rect class="hs-surface" x="222" y="172" width="156" height="156" rx="30" stroke="currentColor" stroke-width="1.9"/>
                        <!-- inner registration ticks (precision) -->
                        <g stroke="currentColor" stroke-width="1.4" opacity="0.22" stroke-linecap="round">
                            <path d="M242 199v-9h9"/><path d="M358 199v-9h-9"/><path d="M242 301v9h9"/><path d="M358 301v9h-9"/>
                        </g>
                        <!-- core: engineered processor -->
                        <g stroke="currentColor" stroke-width="1.6" stroke-linecap="round" opacity="0.85">
                            <path d="M286 224v-10M300 224v-10M314 224v-10"/>
                            <path d="M286 276v10M300 276v10M314 276v10"/>
                            <path d="M274 236h-10M274 250h-10M274 264h-10"/>
                            <path d="M326 236h10M326 250h10M326 264h10"/>
                        </g>
                        <rect class="hs-surface" x="274" y="224" width="52" height="52" rx="12" stroke="currentColor" stroke-width="1.9"/>
                        <rect x="287" y="237" width="26" height="26" rx="6" stroke="currentColor" stroke-width="1.5" fill="currentColor" fill-opacity="0.05"/>
                        <circle class="hs-accent" cx="300" cy="250" r="3.4" stroke="none"/>

                        <!-- TOP: architecture / layers -->
                        <rect x="275" y="51" width="56" height="56" rx="15" fill="currentColor" opacity="0.05"/>
                        <rect class="hs-surface" x="272" y="47" width="56" height="56" rx="15" stroke="currentColor" stroke-width="1.6"/>
                        <g stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" fill="none">
                            <path d="M300 60l16 8-16 8-16-8 16-8z"/>
                            <path d="M284 76l16 8 16-8" opacity="0.6"/>
                        </g>
                        <!-- RIGHT: integration (accent node) -->
                        <rect x="450" y="226" width="56" height="56" rx="15" fill="currentColor" opacity="0.05"/>
                        <rect class="hs-surface" x="447" y="222" width="56" height="56" rx="15" stroke="currentColor" stroke-width="1.6"/>
                        <g stroke="currentColor" stroke-width="1.5">
                            <path d="M467 240l16 10M467 260l16-10" stroke-linecap="round"/>
                            <circle class="hs-surface" cx="465" cy="240" r="4"/>
                            <circle class="hs-surface" cx="465" cy="260" r="4"/>
                            <circle class="hs-accent" cx="487" cy="250" r="5" stroke="none"/>
                        </g>
                        <!-- BOTTOM: security -->
                        <rect x="275" y="401" width="56" height="56" rx="15" fill="currentColor" opacity="0.05"/>
                        <rect class="hs-surface" x="272" y="397" width="56" height="56" rx="15" stroke="currentColor" stroke-width="1.6"/>
                        <path d="M300 411l13 5v9c0 8.5-6.5 13.5-13 16-6.5-2.5-13-7.5-13-16v-9l13-5z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" fill="none"/>
                        <!-- LEFT: engineering / code -->
                        <rect x="100" y="226" width="56" height="56" rx="15" fill="currentColor" opacity="0.05"/>
                        <rect class="hs-surface" x="97" y="222" width="56" height="56" rx="15" stroke="currentColor" stroke-width="1.6"/>
                        <path d="M120 240l-10 10 10 10M130 240l10 10-10 10" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
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
