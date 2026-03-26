<!-- Hero Section -->
<section id="hero" class="hero" aria-labelledby="heading-hero">

    <div class="container-v5">
        <div class="hero-main-grid">
            <div class="hero-centered">
                <!-- Headline -->
                <h1>
                    {{ __('hero.title_line1') }}<br><span>{{ __('hero.title_line2') }}</span>
                </h1>

                <!-- Description -->
                <p class="hero-desc">
                    {{ __('hero.description') }}
                </p>

                <!-- CTA Buttons -->
                <div class="hero-buttons">
                    <a href="{{ route('landing.contact') }}" class="btn-primary-v5">
                        <span class="material-symbols-rounded" style="font-size: 1.1rem;">rocket_launch</span>
                        <span>{{ __('hero.cta_primary') }}</span>
                    </a>
                    <a href="#services" class="btn-secondary-v5">
                        <span class="material-symbols-rounded" style="font-size: 1.1rem;">play_circle</span>
                        <span>{{ __('hero.cta_secondary') }}</span>
                    </a>
                </div>

                <!-- Social Proof -->
                <div class="hero-social-proof">
                    <div class="hero-avatars">
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">V</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #10b981, #059669);">T</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">H</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #f59e0b, #d97706);">N</div>
                        <div class="hero-avatar" style="background: linear-gradient(135deg, #ef4444, #dc2626);">M</div>
                        <div class="hero-avatar hero-avatar-more">+45</div>
                    </div>
                    <div class="hero-social-divider"></div>
                    <div class="hero-social-text">
                        <div class="hero-social-rating">
                            <span class="hero-stars">★★★★★</span>
                            <span class="hero-rating-score">4.9</span>
                        </div>
                        <div class="hero-social-label">{{ __('hero.social_proof_label') }}</div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Illustration -->
            <div class="hero-dashboard">
                <div class="hero-dashboard-inner hero-dashboard-inner--illustration">
                    <!-- Static illustration (image already transparent) -->
                    <img
                        class="hero-dashboard-illustration__img"
                        src="{{ asset('img/flat-hand-drawn-people-analyzing-growth-chart-illustration.png') }}"
                        alt="{{ __('hero.title_line1') }} {{ __('hero.title_line2') }}"
                        loading="eager"
                    >
                <!-- Topbar with dots -->
                <div class="hero-dashboard-topbar" style="display: none;">
                    <div class="dot" style="background: #ff5f57;"></div>
                    <div class="dot" style="background: #febc2e;"></div>
                    <div class="dot" style="background: #28c840;"></div>
                    <span style="margin-left: 0.75rem; font-size: 0.72rem; font-weight: 600; color: var(--text-light);">{{ __('hero.dashboard_title') }}</span>
                </div>

                <!-- SVG Dashboard Content -->
                <div class="hero-dashboard-svg" style="display: none;">
                    <svg viewBox="0 0 820 320" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <!-- Background grid lines -->
                        <line x1="0" y1="80" x2="820" y2="80" stroke="var(--border)" stroke-width="0.5" stroke-dasharray="4 4"/>
                        <line x1="0" y1="160" x2="820" y2="160" stroke="var(--border)" stroke-width="0.5" stroke-dasharray="4 4"/>
                        <line x1="0" y1="240" x2="820" y2="240" stroke="var(--border)" stroke-width="0.5" stroke-dasharray="4 4"/>

                        <!-- Left: Mini metric cards -->
                        <rect x="15" y="15" width="175" height="75" rx="10" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.75"/>
                        <text x="30" y="38" font-size="10" fill="var(--text-light)" font-weight="600">{{ __('hero.svg_active_users') }}</text>
                        <text x="30" y="62" font-size="22" fill="var(--text-dark)" font-weight="800">100+</text>
                        <text x="105" y="62" font-size="10" fill="#22c55e" font-weight="700">+15% YoY</text>
                        <!-- Sparkline -->
                        <polyline points="130,38 138,42 144,36 150,40 158,32 164,35 172,28" stroke="#22c55e" stroke-width="1.5" fill="none"/>

                        <rect x="15" y="100" width="175" height="75" rx="10" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.75"/>
                        <text x="30" y="123" font-size="10" fill="var(--text-light)" font-weight="600">{{ __('hero.svg_revenue_mrr') }}</text>
                        <text x="30" y="148" font-size="22" fill="var(--text-dark)" font-weight="800">50+</text>
                        <text x="108" y="148" font-size="10" fill="#22c55e" font-weight="700">+12 YoY</text>
                        <!-- Sparkline -->
                        <polyline points="130,123 136,126 142,120 150,124 156,116 164,119 172,112" stroke="var(--primary)" stroke-width="1.5" fill="none"/>

                        <rect x="15" y="185" width="175" height="75" rx="10" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.75"/>
                        <text x="30" y="208" font-size="10" fill="var(--text-light)" font-weight="600">{{ __('hero.svg_sprint_velocity') }}</text>
                        <text x="30" y="233" font-size="22" fill="var(--text-dark)" font-weight="800">94 pts</text>
                        <text x="108" y="233" font-size="10" fill="#22c55e" font-weight="700">+12%</text>
                        <!-- Sparkline -->
                        <polyline points="130,208 138,212 144,206 150,210 158,204 164,208 172,200" stroke="#a855f7" stroke-width="1.5" fill="none"/>

                        <!-- Center: Main chart area -->
                        <rect x="210" y="15" width="390" height="250" rx="12" fill="var(--surface)" stroke="var(--border)" stroke-width="0.75"/>
                        <text x="230" y="42" font-size="12" fill="var(--text-dark)" font-weight="700">{{ __('hero.svg_project_delivery_timeline') }}</text>
                        <text x="230" y="58" font-size="9" fill="var(--text-light)">{{ __('hero.svg_last_12_months_overview') }}</text>

                        <!-- Chart axes -->
                        <line x1="250" y1="80" x2="250" y2="240" stroke="var(--border)" stroke-width="0.75"/>
                        <line x1="250" y1="240" x2="580" y2="240" stroke="var(--border)" stroke-width="0.75"/>

                        <!-- Y-axis labels -->
                        <text x="240" y="100" font-size="8" fill="var(--text-light)" text-anchor="end">100</text>
                        <text x="240" y="140" font-size="8" fill="var(--text-light)" text-anchor="end">75</text>
                        <text x="240" y="180" font-size="8" fill="var(--text-light)" text-anchor="end">50</text>
                        <text x="240" y="220" font-size="8" fill="var(--text-light)" text-anchor="end">25</text>

                        <!-- X-axis labels -->
                        <text x="280" y="255" font-size="8" fill="var(--text-light)" text-anchor="middle">Jan</text>
                        <text x="320" y="255" font-size="8" fill="var(--text-light)" text-anchor="middle">Mar</text>
                        <text x="360" y="255" font-size="8" fill="var(--text-light)" text-anchor="middle">May</text>
                        <text x="400" y="255" font-size="8" fill="var(--text-light)" text-anchor="middle">Jul</text>
                        <text x="440" y="255" font-size="8" fill="var(--text-light)" text-anchor="middle">Sep</text>
                        <text x="480" y="255" font-size="8" fill="var(--text-light)" text-anchor="middle">Nov</text>

                        <!-- Bar chart (background bars) -->
                        <rect x="270" y="170" width="20" height="70" rx="3" fill="var(--primary)" opacity="0.15"/>
                        <rect x="310" y="150" width="20" height="90" rx="3" fill="var(--primary)" opacity="0.15"/>
                        <rect x="350" y="130" width="20" height="110" rx="3" fill="var(--primary)" opacity="0.15"/>
                        <rect x="390" y="120" width="20" height="120" rx="3" fill="var(--primary)" opacity="0.15"/>
                        <rect x="430" y="105" width="20" height="135" rx="3" fill="var(--primary)" opacity="0.15"/>
                        <rect x="470" y="95" width="20" height="145" rx="3" fill="var(--primary)" opacity="0.2"/>

                        <!-- Line chart overlay -->
                        <polyline points="280,168 320,148 360,128 400,118 440,104 480,92"
                                  stroke="var(--primary)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        <!-- Area fill -->
                        <polygon points="280,168 320,148 360,128 400,118 440,104 480,92 480,240 280,240"
                                 fill="var(--primary)" opacity="0.06"/>
                        <!-- Data points -->
                        <circle cx="280" cy="168" r="4" fill="var(--primary)"/>
                        <circle cx="320" cy="148" r="4" fill="var(--primary)"/>
                        <circle cx="360" cy="128" r="4" fill="var(--primary)"/>
                        <circle cx="400" cy="118" r="4" fill="var(--primary)"/>
                        <circle cx="440" cy="104" r="4" fill="var(--primary)"/>
                        <circle cx="480" cy="92" r="5" fill="var(--surface)" stroke="var(--primary)" stroke-width="2.5"/>

                        <!-- Tooltip -->
                        <rect x="460" y="62" width="80" height="28" rx="6" fill="var(--primary)"/>
                        <text x="500" y="80" font-size="10" fill="white" text-anchor="middle" font-weight="700">{{ __('hero.svg_tooltip_pts') }}</text>
                        <line x1="480" y1="90" x2="480" y2="92" stroke="var(--primary)" stroke-width="1" stroke-dasharray="2 2"/>

                        <!-- Right: Donut chart + list -->
                        <rect x="620" y="15" width="185" height="145" rx="12" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.75"/>
                        <text x="635" y="38" font-size="10" fill="var(--text-dark)" font-weight="700">{{ __('hero.svg_tech_distribution') }}</text>

                        <!-- Donut chart -->
                        <circle cx="670" cy="95" r="35" fill="none" stroke="var(--border)" stroke-width="8"/>
                        <circle cx="670" cy="95" r="35" fill="none" stroke="var(--primary)" stroke-width="8"
                                stroke-dasharray="77 143" stroke-dashoffset="0" stroke-linecap="round"/>
                        <circle cx="670" cy="95" r="35" fill="none" stroke="#22c55e" stroke-width="8"
                                stroke-dasharray="44 176" stroke-dashoffset="-77" stroke-linecap="round"/>
                        <circle cx="670" cy="95" r="35" fill="none" stroke="#a855f7" stroke-width="8"
                                stroke-dasharray="33 187" stroke-dashoffset="-121" stroke-linecap="round"/>
                        <circle cx="670" cy="95" r="35" fill="none" stroke="#f59e0b" stroke-width="8"
                                stroke-dasharray="22 198" stroke-dashoffset="-154" stroke-linecap="round"/>
                        <text x="670" y="98" font-size="12" fill="var(--text-dark)" text-anchor="middle" font-weight="800">8</text>
                        <text x="670" y="109" font-size="7" fill="var(--text-light)" text-anchor="middle">{{ __('hero.svg_stacks') }}</text>

                        <!-- Legend -->
                        <circle cx="725" cy="60" r="3" fill="var(--primary)"/>
                        <text x="733" y="63" font-size="8" fill="var(--text-gray)">{{ __('hero.svg_legend_frontend') }}</text>
                        <circle cx="725" cy="78" r="3" fill="#22c55e"/>
                        <text x="733" y="81" font-size="8" fill="var(--text-gray)">{{ __('hero.svg_legend_backend') }}</text>
                        <circle cx="725" cy="96" r="3" fill="#a855f7"/>
                        <text x="733" y="99" font-size="8" fill="var(--text-gray)">{{ __('hero.svg_legend_cloud') }}</text>
                        <circle cx="725" cy="114" r="3" fill="#f59e0b"/>
                        <text x="733" y="117" font-size="8" fill="var(--text-gray)">{{ __('hero.svg_legend_ai_ml') }}</text>

                        <!-- Right: Team activity -->
                        <rect x="620" y="170" width="185" height="100" rx="12" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.75"/>
                        <text x="635" y="193" font-size="10" fill="var(--text-dark)" font-weight="700">{{ __('hero.svg_team_activity') }}</text>

                        <!-- Activity bars -->
                        <rect x="635" y="205" width="100" height="8" rx="4" fill="var(--border)"/>
                        <rect x="635" y="205" width="85" height="8" rx="4" fill="var(--primary)"/>
                        <text x="742" y="213" font-size="8" fill="var(--text-gray)">{{ __('hero.svg_activity_frontend') }}</text>

                        <rect x="635" y="222" width="100" height="8" rx="4" fill="var(--border)"/>
                        <rect x="635" y="222" width="70" height="8" rx="4" fill="#22c55e"/>
                        <text x="742" y="230" font-size="8" fill="var(--text-gray)">{{ __('hero.svg_activity_backend') }}</text>

                        <rect x="635" y="239" width="100" height="8" rx="4" fill="var(--border)"/>
                        <rect x="635" y="239" width="55" height="8" rx="4" fill="#a855f7"/>
                        <text x="742" y="247" font-size="8" fill="var(--text-gray)">{{ __('hero.svg_activity_devops') }}</text>

                        <!-- Bottom status bar -->
                        <rect x="15" y="278" width="790" height="32" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                        <circle cx="35" cy="294" r="4" fill="#22c55e"/>
                        <text x="45" y="297" font-size="9" fill="var(--text-gray)" font-weight="600">{{ __('hero.svg_all_systems_operational') }}</text>
                        <text x="220" y="297" font-size="9" fill="var(--text-light)">{{ __('hero.svg_last_updated') }}</text>
                        <rect x="620" y="284" width="65" height="20" rx="4" fill="var(--primary)" opacity="0.1"/>
                        <text x="652" y="297" font-size="8" fill="var(--primary)" text-anchor="middle" font-weight="700">{{ __('hero.svg_live') }}</text>
                        <rect x="695" y="284" width="95" height="20" rx="4" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                        <text x="742" y="297" font-size="8" fill="var(--text-gray)" text-anchor="middle" font-weight="600">{{ __('hero.svg_view_dashboard') }}</text>
                    </svg>
                </div>
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
    </div>
</section>
