@extends('layouts.main')

@section('content')

    @include('landing_page.partials.hero')


    <!-- Services Preview -->
    <section id="services" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">OUR SERVICES</span>
                <h2 class="section-title">{{ __('index.services_title') }}</h2>
                <p class="section-subtitle">{{ __('index.services_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="fp-card" style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.3s ease; position: relative;">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">code</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('index.custom_title') }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ __('index.custom_desc') }}
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.custom_feature_1') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.custom_feature_2') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.custom_feature_3') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.custom_feature_4') }}
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">{{ __('index.view_details') }}</a>
                </div>

                <div class="fp-card" style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.3s ease;">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">workspace_premium</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('index.saas_title') }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ __('index.saas_desc') }}
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.saas_feature_1') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.saas_feature_2') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.saas_feature_3') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.saas_feature_4') }}
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">{{ __('index.view_details') }}</a>
                </div>

                <div class="fp-card" style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.3s ease;">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">psychology</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('index.ai_title') }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ __('index.ai_desc') }}
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.ai_feature_1') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.ai_feature_2') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.ai_feature_3') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.ai_feature_4') }}
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">{{ __('index.view_details') }}</a>
                </div>

                <div class="fp-card" style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.3s ease;">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">shield</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('index.security_title') }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Enterprise-grade security architecture complying with OWASP, ISO 27001, SOC 2
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.security_feature_1') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.security_feature_2') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.security_feature_3') }}
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ __('index.security_feature_4') }}
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">{{ __('index.view_details') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- {{ __('index.scrum_title') }} Preview -->
    <section id="process">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">OUR PROCESS</span>
                <h2 class="section-title">{{ __('index.scrum_title') }}</h2>
                <p class="section-subtitle">{{ __('index.scrum_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem;">
                @php
                $processes = [
                    ['icon' => 'lightbulb', 'title' => __('index.scrum_discovery'), 'desc' => __('index.scrum_discovery_desc')],
                    ['icon' => 'architecture', 'title' => __('index.scrum_design'), 'desc' => __('index.scrum_design_desc')],
                    ['icon' => 'code', 'title' => __('index.scrum_development'), 'desc' => __('index.scrum_development_desc')],
                    ['icon' => 'verified', 'title' => __('index.scrum_qa'), 'desc' => __('index.scrum_qa_desc')],
                    ['icon' => 'cloud_upload', 'title' => __('index.scrum_deploy'), 'desc' => __('index.scrum_deploy_desc')],
                    ['icon' => 'support_agent', 'title' => __('index.scrum_support'), 'desc' => __('index.scrum_support_desc')],
                ];
                @endphp
                @foreach($processes as $p)
                <div class="fp-card" style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem 1.5rem; text-align: center; transition: all 0.3s ease;">
                    <div style="font-size: 1.75rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $p['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $p['title'] }}</h3>
                    <p style="font-size: 0.9rem; color: var(--text-gray);">{{ $p['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('landing.scrum') }}" class="btn-primary-v5">
                    <span>{{ __('index.scrum_learn') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- {{ __('index.tech_title') }} Preview -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">TECHNOLOGY</span>
                <h2 class="section-title">{{ __('index.tech_title') }}</h2>
                <p class="section-subtitle">{{ __('index.tech_subtitle') }}</p>
            </div>

            <!-- Tech Stack Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                @php
                $tech_categories = [
                    [
                        'icon' => 'web',
                        'title' => __('index.tech_frontend'),
                        'techs' => ['React, Vue, Angular', 'TypeScript, Next.js', 'TailwindCSS, Material Design', 'PWA & Performance'],
                        'color' => 'rgb(59, 130, 246)'
                    ],
                    [
                        'icon' => 'storage',
                        'title' => __('index.tech_backend'),
                        'techs' => ['Node.js, Python, Java, Go', 'FastAPI, NestJS', 'GraphQL, REST APIs', 'Microservices'],
                        'color' => 'rgb(26, 77, 94)'
                    ],
                    [
                        'icon' => 'database',
                        'title' => __('index.tech_data'),
                        'techs' => ['PostgreSQL, MongoDB, MySQL', 'Redis, Elasticsearch', 'Vector Databases', 'BigQuery Data Warehouse'],
                        'color' => 'rgb(34, 197, 94)'
                    ],
                    [
                        'icon' => 'cloud',
                        'title' => __('index.tech_cloud'),
                        'techs' => ['AWS, GCP, Azure', 'Kubernetes, Docker', 'CI/CD Automation', 'Infrastructure as Code'],
                        'color' => 'rgb(168, 85, 247)'
                    ],
                    [
                        'icon' => 'shield',
                        'title' => __('index.security_title'),
                        'techs' => ['SSL/TLS Encryption', 'OWASP Standards', 'GDPR Compliance', 'Penetration Testing'],
                        'color' => 'rgb(239, 68, 68)'
                    ],
                    [
                        'icon' => 'smartphone',
                        'title' => __('index.tech_mobile'),
                        'techs' => ['React Native, Flutter', 'iOS (Swift), Android (Kotlin)', 'Progressive Web Apps', 'App Store Deployment'],
                        'color' => 'rgb(249, 115, 22)'
                    ],
                    [
                        'icon' => 'psychology',
                        'title' => __('index.tech_ai'),
                        'techs' => ['OpenAI APIs', 'Custom ML Models', 'Computer Vision & NLP', 'RAG & Vector Search'],
                        'color' => 'rgb(14, 165, 233)'
                    ],
                    [
                        'icon' => 'settings',
                        'title' => __('index.tech_devops'),
                        'techs' => ['Git, GitHub, GitLab', 'Docker, Terraform', 'Monitoring & Logging', 'Performance Tools'],
                        'color' => 'rgb(236, 72, 153)'
                    ],
                ];
                @endphp
                @foreach($tech_categories as $cat)
                <div class="fp-card" style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem; transition: all 0.3s ease;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div style="font-size: 1.75rem; color: {{ $cat['color'] }}; line-height: 1;">
                            <span class="material-symbols-rounded">{{ $cat['icon'] }}</span>
                        </div>
                        <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin: 0;">{{ $cat['title'] }}</h3>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                        @foreach($cat['techs'] as $tech)
                        <div style="font-size: 0.85rem; color: var(--text-gray); display: flex; align-items: center; gap: 0.5rem;">
                            <span style="width: 3px; height: 3px; background: {{ $cat['color'] }}; border-radius: 50%; flex-shrink: 0;"></span>
                            {{ $tech }}
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Summary Stats -->
            <div style="background: white; border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid var(--border); margin-bottom: 2.5rem; box-shadow: 0 12px 32px rgba(26, 77, 94, 0.08);">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 2rem; text-align: center;">
                    <div>
                        <div style="font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">8</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">{{ __("index.tech_categories") }}</div>
                    </div>
                    <div>
                        <div style="font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">50+</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">{{ __("index.tech_frameworks") }}</div>
                    </div>
                    <div>
                        <div style="font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">99.99%</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">{{ __("index.tech_uptime") }}</div>
                    </div>
                    <div>
                        <div style="font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;"><100ms</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">{{ __("index.tech_response") }}</div>
                    </div>
                </div>
            </div>

            <div style="text-align: center;">
                <a href="{{ route('landing.tech-stack') }}" class="btn-secondary-v5" style="display: inline-flex; align-items: center; gap: 0.75rem;">
                    <span>{{ __('index.tech_view') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Scaling Journey -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">SCALING JOURNEY</span>
                <h2 class="section-title">{{ __('index.scaling_title') }}</h2>
                <p class="section-subtitle">{{ __('index.scaling_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem;">
                @php
                $scaling_phases = [
                    ['phase' => __('index.scaling_phase1'), 'title' => __('index.scaling_phase1_title'), 'users' => __('index.scaling_phase1_users'), 'icon' => 'rocket_launch'],
                    ['phase' => __('index.scaling_phase2'), 'title' => __('index.scaling_phase2_title'), 'users' => __('index.scaling_phase2_users'), 'icon' => 'trending_up'],
                    ['phase' => __('index.scaling_phase3'), 'title' => __('index.scaling_phase3_title'), 'users' => __('index.scaling_phase3_users'), 'icon' => 'expand'],
                    ['phase' => __('index.scaling_phase4'), 'title' => __('index.scaling_phase4_title'), 'users' => __('index.scaling_phase4_users'), 'icon' => 'public'],
                    ['phase' => __('index.scaling_phase5'), 'title' => __('index.scaling_phase5_title'), 'users' => __('index.scaling_phase5_users'), 'icon' => 'auto_awesome'],
                    ['phase' => __('index.scaling_phase6'), 'title' => __('index.scaling_phase6_title'), 'users' => __('index.scaling_phase6_users'), 'icon' => 'domain'],
                ];
                @endphp
                @foreach($scaling_phases as $sp)
                <div class="fp-card" style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem 1.5rem; text-align: center; position: relative; transition: all 0.3s ease;">
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary); color: white; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 700;">
                        {{ $sp['phase'] }}
                    </div>
                    <div style="font-size: 1.75rem; color: var(--primary); margin: 1rem 0;">
                        <span class="material-symbols-rounded">{{ $sp['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $sp['title'] }}</h3>
                    <p style="font-size: 0.85rem; color: var(--text-gray);">{{ $sp['users'] }}</p>
                </div>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('landing.scaling') }}" class="btn-primary-v5">
                    <span>{{ __('index.scaling_explore') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">WHY CHOOSE US</span>
                <h2 class="section-title">{{ __('index.why_title') }}</h2>
                <p class="section-subtitle">{{ __('index.why_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $features = [
                    ['icon' => 'verified_user', 'title' => 'Deep Expertise', 'desc' => '12+ years building enterprise-grade systems'],
                    ['icon' => 'groups', 'title' => 'Expert Team', 'desc' => '100+ specialized engineers & architects'],
                    ['icon' => 'speed', 'title' => __('index.why_fast'), 'desc' => __('index.why_fast_desc')],
                    ['icon' => 'shield_lock', 'title' => __('index.why_security'), 'desc' => __('index.why_security_desc')],
                    ['icon' => 'trending_up', 'title' => 'Scalable Architecture', 'desc' => 'From 100 to 10M+ concurrent users'],
                    ['icon' => 'handshake', 'title' => __('index.why_partnership'), 'desc' => __('index.why_partnership_desc')],
                ];
                @endphp
                @foreach($features as $f)
                <div class="fp-card" style="background: white; padding: 2rem; border-radius: var(--card-radius); border: 1px solid var(--border); text-align: center; transition: all 0.3s ease;">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $f['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">{{ $f['title'] }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- {{ __('index.case_title') }} Carousel -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">CASE STUDIES</span>
                <h2 class="section-title">{{ __('index.case_title') }}</h2>
                <p class="section-subtitle">{{ __('index.case_subtitle') }}</p>
            </div>

            <!-- Carousel Container -->
            <div style="position: relative;">
                <!-- Slides Wrapper -->
                <div id="casesCarousel" style="overflow: hidden; border-radius: var(--card-radius); background: white; border: 1px solid var(--border); box-shadow: 0 12px 32px rgba(26, 77, 94, 0.08);">
                    <div id="carouselInner" style="display: flex; transition: transform 0.5s ease-in-out;">

                        @php
                        $featured_cases = [
                            [
                                'badge' => 'Education',
                                'badge_bg' => '#8b5cf6',
                                'title' => 'Education Platform: Scheduling Automation',
                                'description' => 'Comprehensive education operations platform built on a PHP REST API with PostgreSQL load balancing. Flexible timetable rules, workload balancing, and automated attendance handled peak enrollment without heavy AI.',
                                'metrics' => [
                                    ['value' => '21d → 2d', 'label' => 'Scheduling'],
                                    ['value' => '99.9%', 'label' => 'Data Accuracy'],
                                    ['value' => 'PostgreSQL', 'label' => 'Load Balanced']
                                ],
                                'svg_path' => 'M 30 150 Q 90 130, 150 90 Q 210 60, 270 30',
                                'svg_points' => [
                                    ['cx' => 30, 'cy' => 150, 'r' => 6, 'label' => 'Before', 'x' => 30, 'y' => 165],
                                    ['cx' => 150, 'cy' => 90, 'r' => 6, 'label' => 'Phase 1', 'x' => 150, 'y' => 105],
                                    ['cx' => 270, 'cy' => 30, 'r' => 8, 'label' => 'Result', 'x' => 270, 'y' => 45]
                                ],
                                'image_url' => null,
                                'ongoing' => true,
                            ],
                            [
                                'badge' => 'Logistics & Retail',
                                'badge_bg' => '#f59e0b',
                                'title' => 'Storage System: 1M+ Daily Transactions',
                                'description' => 'Comprehensive WMS managing 10M SKUs across 50+ branches. Increased inventory accuracy to 99.8%, achieved 94% forecasting accuracy, handling 1M+ transactions daily.',
                                'metrics' => [
                                    ['value' => '99.8%', 'label' => 'Accuracy'],
                                    ['value' => '10M', 'label' => 'SKUs'],
                                    ['value' => '1M+', 'label' => 'Trans/Day']
                                ],
                                'svg_path' => 'M 30 170 L 80 140 L 130 110 L 180 80 L 230 50 L 270 25',
                                'svg_points' => [
                                    ['cx' => 30, 'cy' => 170, 'r' => 6, 'label' => 'Q1', 'x' => 30, 'y' => 185],
                                    ['cx' => 130, 'cy' => 110, 'r' => 6, 'label' => 'Q2', 'x' => 130, 'y' => 125],
                                    ['cx' => 230, 'cy' => 50, 'r' => 6, 'label' => 'Q3', 'x' => 230, 'y' => 65],
                                    ['cx' => 270, 'cy' => 25, 'r' => 8, 'label' => '1M+', 'x' => 270, 'y' => 40]
                                ],
                                'image_url' => null,
                                'ongoing' => true,
                            ]
                            ,[
                                'badge' => 'Enterprise Management',
                                'badge_bg' => '#10b981',
                                'title' => 'ERP Management System',
                                'description' => 'Unified accounting, procurement, inventory, e-commerce sync, and operations. Real-time consolidation, workflow automation, and BI dashboards for 100+ employees.',
                                'metrics' => [
                                    ['value' => '3d → 1m', 'label' => 'Consolidation'],
                                    ['value' => '2h → 5m', 'label' => 'Reports'],
                                    ['value' => '95%', 'label' => 'Adoption']
                                ],
                                'svg_path' => 'M 30 160 Q 110 120, 170 90 Q 230 60, 270 35',
                                'svg_points' => [
                                    ['cx' => 30, 'cy' => 160, 'r' => 6, 'label' => 'Manual', 'x' => 30, 'y' => 175],
                                    ['cx' => 170, 'cy' => 90, 'r' => 6, 'label' => 'Unified', 'x' => 170, 'y' => 105],
                                    ['cx' => 270, 'cy' => 35, 'r' => 8, 'label' => '1m', 'x' => 270, 'y' => 50]
                                ],
                                'image_url' => null,
                                'ongoing' => true,
                            ]
                        ];
                        @endphp

                        @foreach($featured_cases as $case)
                        <div class="carousel-slide" style="min-width: 100%; box-sizing: border-box;">
                            <div class="case-study-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 0;">
                                <div style="padding: 3rem;">
                                    <div style="display: inline-block; background: {{ $case['badge_bg'] }}15; color: {{ $case['badge_bg'] }}; padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.85rem; font-weight: 700; margin-bottom: 1.5rem;">
                                        {{ $case['badge'] }}
                                    </div>
                                    <h3 style="font-size: 1.6rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1rem; line-height: 1.3;">
                                        {{ $case['title'] }}
                                    </h3>
                                    <p style="color: var(--text-gray); font-size: 1rem; line-height: 1.8; margin-bottom: 2rem;">
                                        {{ $case['description'] }}
                                    </p>

                                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 2rem;">
                                        @foreach($case['metrics'] as $metric)
                                        <div>
                                            <div style="font-size: 1.5rem; font-weight: 800; color: var(--primary);">{{ $metric['value'] }}</div>
                                            <div style="font-size: 0.85rem; color: var(--text-gray); margin-top: 0.25rem;">{{ $metric['label'] }}</div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <a href="{{ route('landing.case-studies') }}" style="color: var(--primary); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                                        <span>{{ __('index.case_read') }}</span>
                                        <span class="material-symbols-rounded">arrow_forward</span>
                                    </a>
                                </div>

                                <div class="position-relative" style="background: linear-gradient(135deg, {{ $case['badge_bg'] }} 0%, {{ $case['badge_bg'] }}dd 0%); padding: 5rem; display: flex; align-items: center; justify-content: center; min-height: 400px;">

                                    @if ($case['badge'] === 'Enterprise SaaS')
                                        <img src="{{ asset('img/hkspace.png') }}" alt="HKSpace Dashboard Mockup" style="width: 100%; border-radius: var(--card-radius); box-shadow: 0 8px 20px rgba(0,0,0,0.1);"/>
                                        <div class="position-absolute start-0 bottom-0 mb-4 ms-4 p-1">
                                            <img src="{{ asset('img/hkspace_2.png') }}" alt="HKSpace Dashboard Mockup" style="width: 200px; border-radius: var(--card-radius); box-shadow: 0 8px 20px rgba(0,0,0,0.1);"/>
                                        </div>
                                    @elseif ($case['badge'] === 'Artificial Intelligence')
                                        <img src="{{ asset('img/ai_face.svg') }}" width="100" />
                                        <img src="{{ asset('img/ai_snow.svg') }}" width="100" class="mx-3" />
                                        <img src="{{ asset('img/ai_robot.svg') }}" width="100" class="mx-3" />
                                    @elseif ($case['badge'] === 'Education')
                                        <img src="{{ asset('img/edu_book.svg') }}" width="100" />
                                    @elseif ($case['badge'] === 'Logistics & Retail')
                                        <img src="{{ asset('img/store_warehouse.svg') }}" width="100" />
                                        <img src="{{ asset('img/store_barcode.svg') }}" width="100" class="mx-3" />
                                        <img src="{{ asset('img/store_trolley.svg') }}" width="100" />
                                    @elseif ($case['badge'] === 'Enterprise Management')
                                        <img src="{{ asset('img/erp_apartment.svg') }}" width="100" />
                                        {{-- <img src="{{ asset('img/store_barcode.svg') }}" width="100" class="mx-3" />
                                        <img src="{{ asset('img/store_trolley.svg') }}" width="100" /> --}}
                                    @else
                                        <svg viewBox="0 0 300 200" style="width: 100%; max-width: 300px;">
                                            <!-- Growth Curve -->
                                            <path d="{{ $case['svg_path'] }}"
                                                fill="none"
                                                stroke="white"
                                                stroke-width="3"
                                                opacity="0.8"/>

                                            @foreach($case['svg_points'] as $point)
                                            <circle cx="{{ $point['cx'] }}" cy="{{ $point['cy'] }}" r="{{ $point['r'] }}" fill="white" opacity="{{ $point['r'] > 6 ? '1' : '0.9' }}"/>
                                            <text x="{{ $point['x'] }}" y="{{ $point['y'] }}" text-anchor="middle" font-size="10" fill="white" opacity="{{ $point['r'] > 6 ? '1' : '0.8' }}">{{ $point['label'] }}</text>
                                            @endforeach
                                        </svg>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prevBtn" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); background: white; border: 1px solid var(--border); width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: all 0.3s ease; z-index: 10;">
                    <span class="material-symbols-rounded" style="color: var(--primary); transition: color 0.3s ease;">chevron_left</span>
                </button>

                <button id="nextBtn" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: white; border: 1px solid var(--border); width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: all 0.3s ease; z-index: 10;">
                    <span class="material-symbols-rounded" style="color: var(--primary); transition: color 0.3s ease;">chevron_right</span>
                </button>

                <!-- Dots Navigation -->
                <div id="dotsContainer" style="display: flex; justify-content: center; gap: 0.75rem; margin-top: 2rem;">
                    @for($i = 0; $i < count($featured_cases); $i++)
                    <button class="carousel-dot" data-index="{{ $i }}" style="width: 12px; height: 12px; border-radius: 50%; border: 2px solid var(--primary); background: {{ $i === 0 ? 'var(--primary)' : 'transparent' }}; cursor: pointer; transition: all 0.3s ease;"></button>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <script>
    (function() {
        const carouselInner = document.getElementById('carouselInner');
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        let currentIndex = 0;
        const totalSlides = slides.length;

        function updateCarousel(index) {
            currentIndex = index;
            if (currentIndex < 0) currentIndex = totalSlides - 1;
            if (currentIndex >= totalSlides) currentIndex = 0;

            const offset = -currentIndex * 100;
            carouselInner.style.transform = `translateX(${offset}%)`;

            // Update dots
            dots.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.style.background = 'var(--primary)';
                    dot.style.width = '32px';
                    dot.style.borderRadius = '6px';
                } else {
                    dot.style.background = 'transparent';
                    dot.style.width = '12px';
                    dot.style.borderRadius = '50%';
                }
            });
        }

        // Previous button
        prevBtn.addEventListener('click', () => {
            updateCarousel(currentIndex - 1);
        });

        // Next button
        nextBtn.addEventListener('click', () => {
            updateCarousel(currentIndex + 1);
        });

        // Dots navigation
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.dataset.index);
                updateCarousel(index);
            });
        });

        // Auto-play (optional)
        let autoPlayInterval = setInterval(() => {
            updateCarousel(currentIndex + 1);
        }, 5000);

        // Pause on hover
        const carousel = document.getElementById('casesCarousel');
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });

        carousel.addEventListener('mouseleave', () => {
            autoPlayInterval = setInterval(() => {
                updateCarousel(currentIndex + 1);
            }, 5000);
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                updateCarousel(currentIndex - 1);
            } else if (e.key === 'ArrowRight') {
                updateCarousel(currentIndex + 1);
            }
        });

        // Arrow button hover effects
        prevBtn.addEventListener('mouseenter', function() {
            this.style.background = 'var(--primary)';
            this.style.borderColor = 'var(--primary)';
            this.querySelector('.material-symbols-rounded').style.color = 'white';
        });

        prevBtn.addEventListener('mouseleave', function() {
            this.style.background = 'white';
            this.style.borderColor = 'var(--border)';
            this.querySelector('.material-symbols-rounded').style.color = 'var(--primary)';
        });

        nextBtn.addEventListener('mouseenter', function() {
            this.style.background = 'var(--primary)';
            this.style.borderColor = 'var(--primary)';
            this.querySelector('.material-symbols-rounded').style.color = 'white';
        });

        nextBtn.addEventListener('mouseleave', function() {
            this.style.background = 'white';
            this.style.borderColor = 'var(--border)';
            this.querySelector('.material-symbols-rounded').style.color = 'var(--primary)';
        });
    })();
    </script>

    <!-- {{ __('index.rd_title') }} Section -->
    <section style="background: linear-gradient(135deg, #f8fafc 0%, #ecfdf5 100%); padding: 5rem 0;">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label" style="color: var(--primary);">RESEARCH & DEVELOPMENT</span>
                <h2 class="section-title">{{ __('index.rd_title') }}</h2>
                <p class="section-subtitle">{{ __('index.rd_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; margin-top: 3rem;">

                <!-- HKSpace R&D Card -->
                <a href="{{ route('landing.blog.r_and_d') }}" style="text-decoration: none; display: block; background: linear-gradient(135deg, #f0f9ff 0%, #ecfdf5 100%); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid #bfdbfe; transition: all 0.3s ease; box-shadow: 0 12px 32px rgba(26, 77, 94, 0.08);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <div style="background: var(--primary); width: 48px; height: 48px; border-radius: var(--btn-radius); display: flex; align-items: center; justify-content: center;">
                            <span class="material-symbols-rounded" style="color: white; font-size: 28px;">hub</span>
                        </div>
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin: 0;">{{ __('index.rd_hkspace') }}</h3>
                            <p style="font-size: 0.85rem; color: var(--primary); font-weight: 600; margin: 0;">{{ __('index.rd_hkspace_subtitle') }}</p>
                        </div>
                    </div>

                    <p style="color: var(--text-gray); line-height: 1.7; margin-bottom: 1.5rem; font-size: 0.95rem;">
                        Architectural substrate for adaptive enterprise systems. A general-purpose distributed platform abstracting multi-tenancy, real-time synchronization, and composable workflows—enabling systems that evolve with organizational needs.
                    </p>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                        <div style="background: var(--surface); border-radius: 8px; padding: 1rem; border: 1px solid var(--border);">
                            <p style="color: var(--text-dark); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.25rem;">{{ __('index.rd_composable') }}</p>
                            <p style="color: var(--text-gray); font-size: 0.8rem; margin: 0;">{{ __('index.rd_composable_desc') }}</p>
                        </div>
                        <div style="background: var(--surface); border-radius: 8px; padding: 1rem; border: 1px solid var(--border);">
                            <p style="color: var(--text-dark); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.25rem;">{{ __('index.rd_ai_native') }}</p>
                            <p style="color: var(--text-gray); font-size: 0.8rem; margin: 0;">{{ __('index.rd_ai_native_desc') }}</p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--primary); font-weight: 600;">
                        <span>{{ __('index.rd_explore') }}</span>
                        <span class="material-symbols-rounded" style="font-size: 20px;">arrow_forward</span>
                    </div>
                </a>

                <!-- {{ __('index.ai_title') }} R&D Card -->
                <a href="{{ route('landing.blog.r_and_d') }}" style="text-decoration: none; display: block; background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid #fcd34d; transition: all 0.3s ease; box-shadow: 0 12px 32px rgba(26, 77, 94, 0.08);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <div style="background: var(--accent); width: 48px; height: 48px; border-radius: var(--btn-radius); display: flex; align-items: center; justify-content: center;">
                            <span class="material-symbols-rounded" style="color: white; font-size: 28px;">auto_awesome</span>
                        </div>
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin: 0;">{{ __('index.rd_ai_platform') }}</h3>
                            <p style="font-size: 0.85rem; color: var(--accent); font-weight: 600; margin: 0;">{{ __('index.rd_ai_platform_subtitle') }}</p>
                        </div>
                    </div>

                    <p style="color: var(--text-gray); line-height: 1.7; margin-bottom: 1.5rem; font-size: 0.95rem;">
                        Long-term research into intelligent systems as enterprise force multipliers. Semantic understanding, grounded reasoning, and autonomous optimization—AI deeply integrated with distributed infrastructure rather than bolt-on features.
                    </p>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                        <div style="background: var(--surface); border-radius: 8px; padding: 1rem; border: 1px solid var(--border);">
                            <p style="color: var(--text-dark); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.25rem;">{{ __('index.rd_semantic') }}</p>
                            <p style="color: var(--text-gray); font-size: 0.8rem; margin: 0;">{{ __('index.rd_semantic_desc') }}</p>
                        </div>
                        <div style="background: var(--surface); border-radius: 8px; padding: 1rem; border: 1px solid var(--border);">
                            <p style="color: var(--text-dark); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.25rem;">{{ __('index.rd_adaptive') }}</p>
                            <p style="color: var(--text-gray); font-size: 0.8rem; margin: 0;">{{ __('index.rd_adaptive_desc') }}</p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--accent); font-weight: 600;">
                        <span>{{ __('index.rd_explore') }}</span>
                        <span class="material-symbols-rounded" style="font-size: 20px;">arrow_forward</span>
                    </div>
                </a>

            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; max-width: 800px; margin: 0 auto; font-style: italic;">
                    These initiatives represent complementary research directions: HKSpace provides the infrastructure substrate, while AI provides the cognitive layer. Together, they explore what becomes possible when intelligent systems are built as native components of enterprise architecture.
                </p>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="opacity-75" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('index.testimonials_title') }} <span class="badge  rounded-pill bg-warning">Demo data</span></h2>
                <p class="section-subtitle">{{ __('index.testimonials_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <?php
                $testimonials = [
                    [
                        'name' => 'Nguyễn Văn A',
                        'title' => 'CTO, FinTech Startup',
                        'quote' => 'HKIncotech đã giúp chúng tôi scale từ 0 đến 100K users trong 12 tháng. Team rất pro, delivery đúng hẹn.',
                        'rating' => 5
                    ],
                    [
                        'name' => 'Sarah Johnson',
                        'title' => 'CEO, E-commerce Platform',
                        'quote' => 'Best development partner we\'ve worked with. Their SCRUM process is transparent and efficient.',
                        'rating' => 5
                    ],
                    [
                        'name' => 'Trần Thị B',
                        'title' => 'Product Manager, Healthcare',
                        'quote' => 'Kiến trúc bảo mật enterprise-grade, compliance đầy đủ. Tin cậy 100% cho healthcare data.',
                        'rating' => 5
                    ],
                ];
                foreach ($testimonials as $t):
                ?>
                <div style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; position: relative; transition: all 0.3s ease;">
                    <div style="color: var(--primary); font-size: 3rem; line-height: 1; margin-bottom: 1rem; opacity: 0.3;">"</div>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem; font-style: italic;">
                        <?php echo $t['quote']; ?>
                    </p>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary), #0d9488); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.2rem;">
                            <?php echo substr($t['name'], 0, 1); ?>
                        </div>
                        <div>
                            <div style="font-weight: 700; color: var(--text-dark);"><?php echo $t['name']; ?></div>
                            <div style="font-size: 0.85rem; color: var(--text-gray);"><?php echo $t['title']; ?></div>
                            <div style="color: #fbbf24; margin-top: 0.25rem;">
                                <?php for($i = 0; $i < $t['rating']; $i++): ?>★<?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('landing.case-studies') }}" style="color: var(--primary); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                    <span>{{ __('index.case_view_more') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section style="padding: 3rem 0 5rem;">
        <div class="container-v5">
            <div class="fp-cta-banner" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 2rem; background: linear-gradient(135deg, var(--primary) 0%, var(--primary) 100%); border-radius: var(--card-radius); padding: 4rem 2rem; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; right: 0; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; transform: translate(30%, -30%);"></div>
                <div style="position: absolute; bottom: 0; left: 0; width: 200px; height: 200px; background: rgba(255,255,255,0.05); border-radius: 50%; transform: translate(-30%, 30%);"></div>

                <div style="position: relative; z-index: 1;">
                    <span class="section-label" style="color: rgba(255,255,255,0.7);">GET STARTED</span>
                    <h2 style="font-size: 1.6rem; font-weight: 800; margin: 1rem 0 1rem 0; color: white;">{{ __('index.cta_title') }}</h2>
                    <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; margin: 0; max-width: 500px;">{{ __('index.cta_subtitle') }}</p>
                </div>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; position: relative; z-index: 1;">
                    <a href="{{ route('landing.contact') }}" class="btn-primary-v5" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: var(--btn-radius); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease;">
                        <span>{{ __('hero.cta_primary') }}</span>
                        <span class="material-symbols-rounded" style="font-size: 1.1rem;">arrow_forward</span>
                    </a>
                    <a href="#services" class="btn-secondary-v5" style="background: transparent; color: white; padding: 1rem 2.5rem; border-radius: var(--btn-radius); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; border: 2px solid white; transition: all 0.3s ease;">
                        <span>{{ __('hero.cta_secondary') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
