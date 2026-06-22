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

            <!-- Hero Illustration — Live Data-Flow Topology (theme-aware) -->
            <div class="hero-dashboard">
                <div class="topoflow" role="img"
                     aria-label="{{ __('hero.svg_system_core') }} — {{ __('hero.svg_domain') }}, {{ __('hero.svg_data_ai') }}, {{ __('hero.svg_security') }} → {{ __('hero.svg_architecture') }} · {{ __('hero.svg_api') }} · {{ __('hero.svg_operations') }} → SaaS · AI · {{ __('hero.svg_scale') }}, {{ __('hero.svg_delivery') }} / {{ __('hero.svg_acceptance') }}">
                    <svg class="topoflow__svg" viewBox="0 0 720 520" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                        <defs>
                            <radialGradient id="tf-core" cx="42%" cy="34%" r="78%">
                                <stop class="tf-core-s0" offset="0%"/>
                                <stop class="tf-core-s1" offset="46%"/>
                                <stop class="tf-core-s2" offset="100%"/>
                            </radialGradient>
                            <radialGradient id="tf-glow" cx="50%" cy="50%" r="50%">
                                <stop class="tf-glow-s0" offset="0%"/>
                                <stop class="tf-glow-s1" offset="55%"/>
                                <stop class="tf-glow-s2" offset="100%"/>
                            </radialGradient>
                            <linearGradient id="tf-node" x1="0" y1="0" x2="0" y2="1">
                                <stop class="tf-node-s0" offset="0%"/>
                                <stop class="tf-node-s1" offset="100%"/>
                            </linearGradient>
                            <linearGradient id="tf-chip" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="rgba(255,255,255,0.16)"/>
                                <stop offset="100%" stop-color="rgba(255,255,255,0.04)"/>
                            </linearGradient>
                            <radialGradient id="tf-pkt" cx="50%" cy="50%" r="50%">
                                <stop offset="0%" stop-color="#ffffff"/>
                                <stop offset="35%" stop-color="#dcebff"/>
                                <stop offset="100%" stop-color="#2f6abf"/>
                            </radialGradient>
                            <radialGradient id="tf-pkt-acc" cx="50%" cy="50%" r="50%">
                                <stop offset="0%" stop-color="#ffffff"/>
                                <stop offset="35%" stop-color="#c8f0df"/>
                                <stop offset="100%" stop-color="#059669"/>
                            </radialGradient>
                            <filter id="tf-soft" x="-40%" y="-40%" width="180%" height="180%">
                                <feDropShadow dx="0" dy="6" stdDeviation="9" flood-color="#0F203D" flood-opacity="0.12"/>
                            </filter>
                            <filter id="tf-coreshadow" x="-60%" y="-60%" width="220%" height="220%">
                                <feDropShadow dx="0" dy="14" stdDeviation="20" flood-color="#0F203D" flood-opacity="0.28"/>
                            </filter>
                            <filter id="tf-blur" x="-50%" y="-50%" width="200%" height="200%">
                                <feGaussianBlur stdDeviation="2.2"/>
                            </filter>
                        </defs>

                        <!-- faint constellation / dot field -->
                        <g class="tf-dots">
                            <circle cx="60" cy="58" r="1.4"/><circle cx="120" cy="40" r="1"/>
                            <circle cx="40" cy="160" r="1"/><circle cx="92" cy="430" r="1.4"/>
                            <circle cx="150" cy="470" r="1"/><circle cx="300" cy="36" r="1"/>
                            <circle cx="430" cy="44" r="1.4"/><circle cx="540" cy="56" r="1"/>
                            <circle cx="650" cy="92" r="1.4"/><circle cx="690" cy="190" r="1"/>
                            <circle cx="676" cy="320" r="1"/><circle cx="640" cy="446" r="1.4"/>
                            <circle cx="560" cy="478" r="1"/><circle cx="392" cy="492" r="1"/>
                            <circle cx="250" cy="486" r="1.4"/><circle cx="36" cy="300" r="1"/>
                        </g>

                        <!-- ambient glow behind core -->
                        <circle class="tf-core-pulse" cx="392" cy="240" r="178" fill="url(#tf-glow)"/>

                        <!-- edges (base) -->
                        <path class="tf-edge-base" d="M 196 132 C 256 132, 256 198, 318 210"/>
                        <path class="tf-edge-base" d="M 196 232 C 252 232, 262 234, 312 240"/>
                        <path class="tf-edge-base" d="M 196 332 C 256 332, 256 286, 318 272"/>
                        <path class="tf-edge-base" d="M 462 226 C 512 214, 512 138, 560 132"/>
                        <path class="tf-edge-base" d="M 470 244 C 516 244, 520 240, 560 240"/>
                        <path class="tf-edge-base" d="M 462 262 C 512 274, 512 332, 560 338"/>
                        <path class="tf-edge-base" d="M 392 318 C 392 372, 392 392, 392 426"/>
                        <!-- edges (live) -->
                        <path class="tf-edge-live d1" d="M 196 132 C 256 132, 256 198, 318 210"/>
                        <path class="tf-edge-live d2" d="M 196 232 C 252 232, 262 234, 312 240"/>
                        <path class="tf-edge-live d3" d="M 196 332 C 256 332, 256 286, 318 272"/>
                        <path class="tf-edge-live d4" d="M 462 226 C 512 214, 512 138, 560 132"/>
                        <path class="tf-edge-live d5" d="M 470 244 C 516 244, 520 240, 560 240"/>
                        <path class="tf-edge-live d6" d="M 462 262 C 512 274, 512 332, 560 338"/>
                        <path class="tf-edge-live acc d7" d="M 392 318 C 392 372, 392 392, 392 426"/>

                        <!-- inbound nodes (left) -->
                        <g filter="url(#tf-soft)"><rect class="tf-card" x="40" y="106" width="156" height="52" rx="12"/></g>
                        <rect class="tf-rim" x="40.5" y="106.5" width="155" height="51" rx="11.5" opacity="0.6"/>
                        <circle class="tf-node-port" cx="60" cy="132" r="3.6"/>
                        <circle class="tf-node-port-core" cx="60" cy="132" r="1.4"/>
                        <text class="tf-label" x="76" y="128">{{ __('hero.svg_domain') }}</text>
                        <text class="tf-sub" x="76" y="143">{{ __('hero.svg_acceptance') }}</text>

                        <g filter="url(#tf-soft)"><rect class="tf-card" x="40" y="206" width="156" height="52" rx="12"/></g>
                        <rect class="tf-rim" x="40.5" y="206.5" width="155" height="51" rx="11.5" opacity="0.6"/>
                        <circle class="tf-node-port" cx="60" cy="232" r="3.6"/>
                        <circle class="tf-node-port-core" cx="60" cy="232" r="1.4"/>
                        <text class="tf-label" x="76" y="228">{{ __('hero.svg_data_ai') }}</text>
                        <text class="tf-sub" x="76" y="243">{{ __('hero.svg_api') }}</text>

                        <g filter="url(#tf-soft)"><rect class="tf-card" x="40" y="306" width="156" height="52" rx="12"/></g>
                        <rect class="tf-rim" x="40.5" y="306.5" width="155" height="51" rx="11.5" opacity="0.6"/>
                        <circle class="tf-node-port" cx="60" cy="332" r="3.6"/>
                        <circle class="tf-node-port-core" cx="60" cy="332" r="1.4"/>
                        <text class="tf-label" x="76" y="328">{{ __('hero.svg_security') }}</text>
                        <text class="tf-sub" x="76" y="343">{{ __('hero.svg_operations') }}</text>

                        <!-- outbound nodes (right) -->
                        <g filter="url(#tf-soft)"><rect class="tf-card" x="560" y="106" width="120" height="52" rx="12"/></g>
                        <rect class="tf-rim" x="560.5" y="106.5" width="119" height="51" rx="11.5" opacity="0.6"/>
                        <circle class="tf-node-port" cx="664" cy="132" r="3.6"/>
                        <circle class="tf-node-port-core" cx="664" cy="132" r="1.4"/>
                        <text class="tf-label" x="576" y="128">SaaS</text>
                        <text class="tf-sub" x="576" y="143">ERP</text>

                        <g filter="url(#tf-soft)"><rect class="tf-card" x="560" y="214" width="120" height="52" rx="12"/></g>
                        <rect class="tf-rim" x="560.5" y="214.5" width="119" height="51" rx="11.5" opacity="0.6"/>
                        <circle class="tf-node-port" cx="664" cy="240" r="3.6"/>
                        <circle class="tf-node-port-core" cx="664" cy="240" r="1.4"/>
                        <text class="tf-label" x="576" y="236">AI</text>
                        <text class="tf-sub" x="576" y="251">{{ __('hero.svg_data_ai') }}</text>

                        <g filter="url(#tf-soft)"><rect class="tf-card" x="560" y="312" width="120" height="52" rx="12"/></g>
                        <rect class="tf-rim" x="560.5" y="312.5" width="119" height="51" rx="11.5" opacity="0.6"/>
                        <circle class="tf-node-port" cx="664" cy="338" r="3.6"/>
                        <circle class="tf-node-port-core" cx="664" cy="338" r="1.4"/>
                        <text class="tf-label" x="576" y="334">{{ __('hero.svg_scale') }}</text>
                        <text class="tf-sub" x="576" y="349">{{ __('hero.svg_operations') }}</text>

                        <!-- system core -->
                        <circle class="tf-core-ring--soft" cx="392" cy="240" r="92"/>
                        <circle class="tf-core-ring" cx="392" cy="240" r="78"/>
                        <g filter="url(#tf-coreshadow)"><circle class="tf-core-body" cx="392" cy="240" r="66"/></g>
                        <circle cx="392" cy="240" r="58" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
                        <ellipse cx="392" cy="214" rx="44" ry="20" fill="rgba(255,255,255,0.10)" filter="url(#tf-blur)"/>

                        <!-- core ports -->
                        <circle class="tf-port tf-port-dot" cx="324" cy="208" r="3.2"/>
                        <circle class="tf-port b2 tf-port-dot" cx="318" cy="240" r="3.2"/>
                        <circle class="tf-port b3 tf-port-dot" cx="324" cy="272" r="3.2"/>
                        <circle class="tf-port b2 tf-port-dot" cx="460" cy="224" r="3.2"/>
                        <circle class="tf-port b3 tf-port-dot" cx="466" cy="240" r="3.2"/>
                        <circle class="tf-port tf-port-dot" cx="460" cy="262" r="3.2"/>
                        <circle class="tf-port b2 tf-port-acc" cx="392" cy="306" r="3.2"/>

                        <!-- core title -->
                        <text class="tf-eyebrow" x="392" y="201" text-anchor="middle">{{ __('hero.svg_system_core') }}</text>

                        <!-- core modules -->
                        <rect class="tf-chip-rect" x="343" y="214" width="98" height="17" rx="8.5"/>
                        <circle class="tf-chip-dot" cx="354" cy="222.5" r="2"/>
                        <text class="tf-chip-text" x="364" y="226">{{ __('hero.svg_architecture') }}</text>
                        <rect class="tf-chip-rect" x="343" y="234" width="98" height="17" rx="8.5"/>
                        <circle class="tf-chip-dot" cx="354" cy="242.5" r="2"/>
                        <text class="tf-chip-text" x="364" y="246">{{ __('hero.svg_api') }}</text>
                        <rect class="tf-chip-rect" x="343" y="254" width="98" height="17" rx="8.5"/>
                        <circle class="tf-chip-dot" cx="354" cy="262.5" r="2"/>
                        <text class="tf-chip-text" x="364" y="266">{{ __('hero.svg_operations') }}</text>

                        <!-- governance gate -->
                        <g filter="url(#tf-soft)"><rect class="tf-card" x="262" y="426" width="260" height="56" rx="14"/></g>
                        <rect class="tf-rim" x="262.5" y="426.5" width="259" height="55" rx="13.5" opacity="0.6"/>
                        <circle class="tf-port tf-port-acc" cx="392" cy="426" r="3.4"/>
                        <circle class="tf-check-bg" cx="290" cy="454" r="10"/>
                        <path class="tf-check" d="M 285 454 l 3.4 3.6 l 6.4 -8"/>
                        <line class="tf-divider" x1="318" y1="438" x2="318" y2="470"/>
                        <line class="tf-divider" x1="430" y1="438" x2="430" y2="470"/>
                        <text class="tf-label" x="374" y="450" text-anchor="middle">{{ __('hero.svg_delivery') }}</text>
                        <text class="tf-sub" x="374" y="465" text-anchor="middle">Sprint</text>
                        <text class="tf-label" x="476" y="450" text-anchor="middle">{{ __('hero.svg_acceptance') }}</text>
                        <text class="tf-sub" x="476" y="465" text-anchor="middle">QA · SLA</text>

                        <!-- data packets -->
                        <circle class="tf-packet pk1" r="3.4" fill="url(#tf-pkt)"/>
                        <circle class="tf-packet pk2" r="3.4" fill="url(#tf-pkt)"/>
                        <circle class="tf-packet pk3" r="3.4" fill="url(#tf-pkt)"/>
                        <circle class="tf-packet pk4" r="3.4" fill="url(#tf-pkt)"/>
                        <circle class="tf-packet pk5" r="3.4" fill="url(#tf-pkt)"/>
                        <circle class="tf-packet pk6" r="3.4" fill="url(#tf-pkt)"/>
                        <circle class="tf-packet pk7" r="3.6" fill="url(#tf-pkt-acc)"/>
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
