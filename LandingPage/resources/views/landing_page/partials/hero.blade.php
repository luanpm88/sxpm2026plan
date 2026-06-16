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

                <!-- Micro-copy (friction reducer) -->
                <p class="hero-microcopy">{{ __('hero.cta_microcopy') }}</p>

                <!-- Social Proof -->
                <div class="hero-social-proof">
                    <div class="hero-avatars">
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">V</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #10b981, #059669);">T</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">H</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #f59e0b, #d97706);">N</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #ef4444, #dc2626);">M</div>
                        <div class="hero-avatar hero-avatar-more">+48</div>
                    </div>
                    <div class="hero-social-divider"></div>
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
                    <img
                        class="hero-dashboard-illustration__img"
                        src="{{ asset('img/flat-hand-drawn-people-analyzing-growth-chart-illustration.png') }}"
                        alt="{{ __('hero.title_line1') }} {{ __('hero.title_line2') }} - HKIncotech enterprise software engineering"
                        loading="eager"
                    >
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
