@extends('layouts.main')

@section('content')

    @include('landing_page.partials.hero')


    <!-- Services Preview -->
    <section id="services" aria-labelledby="heading-services" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_services') }}</span>
                <h2 id="heading-services" class="section-title">{{ __('index.services_title') }}</h2>
                <p class="section-subtitle">{{ __('index.services_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="fp-card" style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.25s ease; position: relative;">
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

                <div class="fp-card" style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.25s ease;">
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

                <div class="fp-card" style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.25s ease;">
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

                <div class="fp-card" style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2.5rem 2rem; transition: all 0.25s ease;">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">shield</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('index.security_title') }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ __('index.security_desc') }}
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

    <!-- Scrum Process Preview -->
    <section id="process" aria-labelledby="heading-process">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_process') }}</span>
                <h2 id="heading-process" class="section-title">{{ __('index.scrum_title') }}</h2>
                <p class="section-subtitle">{{ __('index.scrum_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                @php
                $processes = [
                    ['icon' => 'lightbulb', 'title' => __('index.scrum_discovery'), 'desc' => __('index.scrum_discovery_desc'), 'num' => '01'],
                    ['icon' => 'architecture', 'title' => __('index.scrum_design'), 'desc' => __('index.scrum_design_desc'), 'num' => '02'],
                    ['icon' => 'code', 'title' => __('index.scrum_development'), 'desc' => __('index.scrum_development_desc'), 'num' => '03'],
                    ['icon' => 'verified', 'title' => __('index.scrum_qa'), 'desc' => __('index.scrum_qa_desc'), 'num' => '04'],
                    ['icon' => 'cloud_upload', 'title' => __('index.scrum_deploy'), 'desc' => __('index.scrum_deploy_desc'), 'num' => '05'],
                    ['icon' => 'support_agent', 'title' => __('index.scrum_support'), 'desc' => __('index.scrum_support_desc'), 'num' => '06'],
                ];
                @endphp
                @foreach($processes as $p)
                <div class="fp-card" style="text-align: left; position: relative;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                        <div style="width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; background: var(--primary-subtle); color: var(--primary); font-size: 1.3rem;">
                            <span class="material-symbols-rounded">{{ $p['icon'] }}</span>
                        </div>
                        <span style="font-size: 1.5rem; font-weight: 800; color: var(--primary); opacity: 0.15; letter-spacing: -0.03em;">{{ $p['num'] }}</span>
                    </div>
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem; letter-spacing: -0.01em;">{{ $p['title'] }}</h3>
                    <p style="font-size: 0.88rem; color: var(--text-gray); line-height: 1.6;">{{ $p['desc'] }}</p>
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

    <!-- Technology Stack Preview -->
    <section id="technology" aria-labelledby="heading-technology" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_technology') }}</span>
                <h2 id="heading-technology" class="section-title">{{ __('index.tech_title') }}</h2>
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
                <div class="fp-card" style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem; transition: all 0.25s ease;">
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
            <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid var(--border); margin-bottom: 2.5rem; box-shadow: 0 12px 32px var(--shadow-color);">
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
                        <div style="font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">&lt;100ms</div>
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
    <section id="scaling" aria-labelledby="heading-scaling">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_scaling') }}</span>
                <h2 id="heading-scaling" class="section-title">{{ __('index.scaling_title') }}</h2>
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
                <div class="fp-card" style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem 1.5rem; text-align: center; position: relative; transition: all 0.25s ease;">
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

    <!-- Why Choose Us -->
    <section id="why-us" aria-labelledby="heading-why" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_why') }}</span>
                <h2 id="heading-why" class="section-title">{{ __('index.why_title') }}</h2>
                <p class="section-subtitle">{{ __('index.why_subtitle') }}</p>
            </div>

            @php
            $features = [
                ['icon' => 'verified_user', 'title' => __('index.why_expertise'), 'desc' => __('index.why_expertise_desc'), 'color' => '#0f6b9e'],
                ['icon' => 'groups', 'title' => __('index.why_team'), 'desc' => __('index.why_team_desc'), 'color' => '#22c55e'],
                ['icon' => 'speed', 'title' => __('index.why_fast'), 'desc' => __('index.why_fast_desc'), 'color' => '#f59e0b'],
                ['icon' => 'shield_lock', 'title' => __('index.why_security'), 'desc' => __('index.why_security_desc'), 'color' => '#ef4444'],
                ['icon' => 'trending_up', 'title' => __('index.why_scalable'), 'desc' => __('index.why_scalable_desc'), 'color' => '#a855f7'],
                ['icon' => 'handshake', 'title' => __('index.why_partnership'), 'desc' => __('index.why_partnership_desc'), 'color' => '#0ea5e9'],
            ];
            @endphp
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                @foreach($features as $f)
                <div class="fp-card why-card" style="--card-accent: {{ $f['color'] }}; text-align: left;">
                    <div style="width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; background: {{ $f['color'] }}12; color: {{ $f['color'] }}; font-size: 1.35rem; margin-bottom: 1.15rem;">
                        <span class="material-symbols-rounded">{{ $f['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem; letter-spacing: -0.01em;">{{ $f['title'] }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.65;">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- {{ __('index.case_title') }} Carousel -->
    <!-- Case Studies Carousel -->
    <section id="case-studies" aria-labelledby="heading-cases">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_cases') }}</span>
                <h2 id="heading-cases" class="section-title">{{ __('index.case_title') }}</h2>
                <p class="section-subtitle">{{ __('index.case_subtitle') }}</p>
            </div>

            <!-- Carousel Container -->
            <div style="position: relative;">
                <!-- Slides Wrapper -->
                <div id="casesCarousel" role="region" aria-label="{{ __('index.case_title') }}" tabindex="0" style="overflow: hidden; border-radius: var(--card-radius); background: var(--surface); border: 1px solid var(--border); box-shadow: 0 12px 32px var(--shadow-color); outline: none;">
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
                            ],
                            [
                                'badge' => 'AI Knowledge Platform',
                                'badge_bg' => '#0ea5e9',
                                'title' => 'AI Knowledge Platform: NLP, RAG & LLM Integration',
                                'description' => 'Modern AI foundation built from the ground up with knowledge ingestion, semantic storage, intelligent routing and secure governance. Grounded on solid AI foundations for enterprise-grade NLP, RAG and LLM integration.',
                                'metrics' => [
                                    ['value' => '<200ms', 'label' => 'Query Latency'],
                                    ['value' => '97.3%', 'label' => 'Retrieval Accuracy'],
                                    ['value' => '6', 'label' => 'Core Modules']
                                ],
                                'svg_path' => '',
                                'svg_points' => [],
                                'image_url' => null,
                                'ongoing' => true,
                            ],
                            [
                                'badge' => 'Enterprise SaaS',
                                'badge_bg' => '#3b82f6',
                                'title' => 'HKSpace: Enterprise SaaS Platform',
                                'description' => 'Multi-tenant SaaS platform with workspace management, real-time collaboration, role-based access control, and integrated billing. Built for scalability with microservices architecture.',
                                'metrics' => [
                                    ['value' => '50K+', 'label' => 'Active Users'],
                                    ['value' => '99.95%', 'label' => 'Uptime SLA'],
                                    ['value' => '<50ms', 'label' => 'API Response']
                                ],
                                'svg_path' => '',
                                'svg_points' => [],
                                'image_url' => null,
                                'ongoing' => true,
                            ],
                            [
                                'badge' => 'Sprint Cycle',
                                'badge_bg' => '#6366f1',
                                'title' => 'Sprint Cycle Details: Agile at Scale',
                                'description' => 'Comprehensive Scrum implementation with sprint planning, daily standups, backlog grooming, retrospectives, and automated velocity tracking. Delivering consistent 2-week sprint cadence across distributed teams.',
                                'metrics' => [
                                    ['value' => '94 pts', 'label' => 'Avg Velocity'],
                                    ['value' => '96%', 'label' => 'Sprint Goals Met'],
                                    ['value' => '2-week', 'label' => 'Sprint Cadence']
                                ],
                                'svg_path' => '',
                                'svg_points' => [],
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

                                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(90px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
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

                                <div style="position: relative; background: linear-gradient(135deg, {{ $case['badge_bg'] }}18 0%, {{ $case['badge_bg'] }}08 100%); padding: 2rem; display: flex; align-items: center; justify-content: center; min-height: 400px; overflow: hidden;">

                                    @if ($case['badge'] === 'Education')
                                    {{-- Education: Scheduling Dashboard SVG --}}
                                    <svg viewBox="0 0 420 340" fill="none" aria-hidden="true" style="width: 100%; max-width: 400px; filter: drop-shadow(0 8px 24px rgba(139, 92, 246, 0.12));">
                                        <!-- Main card -->
                                        <rect x="0" y="0" width="420" height="340" rx="14" fill="var(--surface)" stroke="var(--border)" stroke-width="1"/>
                                        <!-- Top bar -->
                                        <rect x="0" y="0" width="420" height="40" rx="14" fill="var(--secondary-bg)"/>
                                        <rect x="0" y="28" width="420" height="12" fill="var(--secondary-bg)"/>
                                        <line x1="0" y1="40" x2="420" y2="40" stroke="var(--border)" stroke-width="0.75"/>
                                        <circle cx="18" cy="20" r="4" fill="#ff5f57"/>
                                        <circle cx="32" cy="20" r="4" fill="#febc2e"/>
                                        <circle cx="46" cy="20" r="4" fill="#28c840"/>
                                        <text x="70" y="24" font-size="9" fill="var(--text-light)" font-weight="600">Scheduling Dashboard</text>

                                        <!-- Metric cards row -->
                                        <rect x="15" y="52" width="120" height="50" rx="8" fill="#8b5cf612" stroke="#8b5cf625" stroke-width="0.75"/>
                                        <text x="25" y="70" font-size="8" fill="var(--text-light)" font-weight="600">Classes Today</text>
                                        <text x="25" y="90" font-size="18" fill="#8b5cf6" font-weight="800">48</text>
                                        <text x="62" y="90" font-size="8" fill="#22c55e" font-weight="700">+12%</text>

                                        <rect x="150" y="52" width="120" height="50" rx="8" fill="#22c55e12" stroke="#22c55e25" stroke-width="0.75"/>
                                        <text x="160" y="70" font-size="8" fill="var(--text-light)" font-weight="600">Attendance</text>
                                        <text x="160" y="90" font-size="18" fill="#22c55e" font-weight="800">96.4%</text>

                                        <rect x="285" y="52" width="120" height="50" rx="8" fill="var(--primary-subtle)" stroke="rgba(15,107,158,0.15)" stroke-width="0.75"/>
                                        <text x="295" y="70" font-size="8" fill="var(--text-light)" font-weight="600">Rooms Used</text>
                                        <text x="295" y="90" font-size="18" fill="var(--primary)" font-weight="800">32/35</text>

                                        <!-- Timetable grid -->
                                        <text x="15" y="125" font-size="9" fill="var(--text-dark)" font-weight="700">Weekly Timetable</text>
                                        <!-- Headers -->
                                        <text x="80" y="143" font-size="7" fill="var(--text-light)" text-anchor="middle" font-weight="600">Mon</text>
                                        <text x="148" y="143" font-size="7" fill="var(--text-light)" text-anchor="middle" font-weight="600">Tue</text>
                                        <text x="216" y="143" font-size="7" fill="var(--text-light)" text-anchor="middle" font-weight="600">Wed</text>
                                        <text x="284" y="143" font-size="7" fill="var(--text-light)" text-anchor="middle" font-weight="600">Thu</text>
                                        <text x="352" y="143" font-size="7" fill="var(--text-light)" text-anchor="middle" font-weight="600">Fri</text>
                                        <!-- Time labels -->
                                        <text x="34" y="165" font-size="7" fill="var(--text-light)" text-anchor="end">8:00</text>
                                        <text x="34" y="195" font-size="7" fill="var(--text-light)" text-anchor="end">10:00</text>
                                        <text x="34" y="225" font-size="7" fill="var(--text-light)" text-anchor="end">14:00</text>
                                        <text x="34" y="255" font-size="7" fill="var(--text-light)" text-anchor="end">16:00</text>
                                        <!-- Grid lines -->
                                        <line x1="42" y1="148" x2="400" y2="148" stroke="var(--border)" stroke-width="0.5"/>
                                        <line x1="42" y1="178" x2="400" y2="178" stroke="var(--border)" stroke-width="0.3" stroke-dasharray="3 3"/>
                                        <line x1="42" y1="208" x2="400" y2="208" stroke="var(--border)" stroke-width="0.3" stroke-dasharray="3 3"/>
                                        <line x1="42" y1="238" x2="400" y2="238" stroke="var(--border)" stroke-width="0.3" stroke-dasharray="3 3"/>
                                        <!-- Class blocks -->
                                        <rect x="48" y="152" width="60" height="22" rx="4" fill="#8b5cf6" opacity="0.85"/>
                                        <text x="78" y="166" font-size="7" fill="white" text-anchor="middle" font-weight="600">Math 101</text>
                                        <rect x="116" y="152" width="60" height="22" rx="4" fill="#3b82f6" opacity="0.85"/>
                                        <text x="146" y="166" font-size="7" fill="white" text-anchor="middle" font-weight="600">Physics</text>
                                        <rect x="184" y="152" width="60" height="22" rx="4" fill="#22c55e" opacity="0.85"/>
                                        <text x="214" y="166" font-size="7" fill="white" text-anchor="middle" font-weight="600">Chem Lab</text>
                                        <rect x="252" y="182" width="60" height="22" rx="4" fill="#f59e0b" opacity="0.85"/>
                                        <text x="282" y="196" font-size="7" fill="white" text-anchor="middle" font-weight="600">English</text>
                                        <rect x="320" y="152" width="60" height="22" rx="4" fill="#ef4444" opacity="0.85"/>
                                        <text x="350" y="166" font-size="7" fill="white" text-anchor="middle" font-weight="600">History</text>
                                        <rect x="48" y="182" width="60" height="22" rx="4" fill="#0ea5e9" opacity="0.85"/>
                                        <text x="78" y="196" font-size="7" fill="white" text-anchor="middle" font-weight="600">Bio</text>
                                        <rect x="116" y="212" width="60" height="22" rx="4" fill="#8b5cf6" opacity="0.85"/>
                                        <text x="146" y="226" font-size="7" fill="white" text-anchor="middle" font-weight="600">Art</text>
                                        <rect x="184" y="182" width="60" height="22" rx="4" fill="#f59e0b" opacity="0.85"/>
                                        <text x="214" y="196" font-size="7" fill="white" text-anchor="middle" font-weight="600">PE</text>
                                        <rect x="252" y="212" width="60" height="22" rx="4" fill="#3b82f6" opacity="0.85"/>
                                        <text x="282" y="226" font-size="7" fill="white" text-anchor="middle" font-weight="600">Music</text>
                                        <rect x="320" y="212" width="60" height="22" rx="4" fill="#22c55e" opacity="0.85"/>
                                        <text x="350" y="226" font-size="7" fill="white" text-anchor="middle" font-weight="600">IT Lab</text>
                                        <rect x="48" y="242" width="60" height="22" rx="4" fill="#ef4444" opacity="0.85"/>
                                        <text x="78" y="256" font-size="7" fill="white" text-anchor="middle" font-weight="600">Geo</text>
                                        <rect x="252" y="152" width="60" height="22" rx="4" fill="#0ea5e9" opacity="0.85"/>
                                        <text x="282" y="166" font-size="7" fill="white" text-anchor="middle" font-weight="600">CS 201</text>

                                        <!-- Bottom status -->
                                        <rect x="15" y="280" width="390" height="44" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <circle cx="35" cy="302" r="5" fill="#22c55e"/>
                                        <text x="48" y="298" font-size="8" fill="var(--text-dark)" font-weight="700">Auto-scheduled</text>
                                        <text x="48" y="312" font-size="7" fill="var(--text-light)">21 days → 2 days processing</text>
                                        <rect x="310" y="290" width="80" height="24" rx="6" fill="#8b5cf6"/>
                                        <text x="350" y="306" font-size="8" fill="white" text-anchor="middle" font-weight="700">Optimized</text>
                                    </svg>

                                    @elseif ($case['badge'] === 'Logistics & Retail')
                                    {{-- Logistics: Warehouse Management Dashboard SVG --}}
                                    <svg viewBox="0 0 420 340" fill="none" aria-hidden="true" style="width: 100%; max-width: 400px; filter: drop-shadow(0 8px 24px rgba(245, 158, 11, 0.12));">
                                        <rect x="0" y="0" width="420" height="340" rx="14" fill="var(--surface)" stroke="var(--border)" stroke-width="1"/>
                                        <!-- Top bar -->
                                        <rect x="0" y="0" width="420" height="40" rx="14" fill="var(--secondary-bg)"/>
                                        <rect x="0" y="28" width="420" height="12" fill="var(--secondary-bg)"/>
                                        <line x1="0" y1="40" x2="420" y2="40" stroke="var(--border)" stroke-width="0.75"/>
                                        <circle cx="18" cy="20" r="4" fill="#ff5f57"/>
                                        <circle cx="32" cy="20" r="4" fill="#febc2e"/>
                                        <circle cx="46" cy="20" r="4" fill="#28c840"/>
                                        <text x="70" y="24" font-size="9" fill="var(--text-light)" font-weight="600">Warehouse Management System</text>

                                        <!-- Metric cards -->
                                        <rect x="15" y="52" width="93" height="55" rx="8" fill="#f59e0b12" stroke="#f59e0b25" stroke-width="0.75"/>
                                        <text x="25" y="70" font-size="7" fill="var(--text-light)" font-weight="600">Daily Trans.</text>
                                        <text x="25" y="92" font-size="16" fill="#f59e0b" font-weight="800">1.2M</text>

                                        <rect x="118" y="52" width="93" height="55" rx="8" fill="#22c55e12" stroke="#22c55e25" stroke-width="0.75"/>
                                        <text x="128" y="70" font-size="7" fill="var(--text-light)" font-weight="600">Accuracy</text>
                                        <text x="128" y="92" font-size="16" fill="#22c55e" font-weight="800">99.8%</text>

                                        <rect x="221" y="52" width="93" height="55" rx="8" fill="#3b82f612" stroke="#3b82f625" stroke-width="0.75"/>
                                        <text x="231" y="70" font-size="7" fill="var(--text-light)" font-weight="600">Total SKUs</text>
                                        <text x="231" y="92" font-size="16" fill="#3b82f6" font-weight="800">10M+</text>

                                        <rect x="324" y="52" width="81" height="55" rx="8" fill="#a855f712" stroke="#a855f725" stroke-width="0.75"/>
                                        <text x="334" y="70" font-size="7" fill="var(--text-light)" font-weight="600">Branches</text>
                                        <text x="334" y="92" font-size="16" fill="#a855f7" font-weight="800">50+</text>

                                        <!-- Inventory bar chart -->
                                        <text x="15" y="130" font-size="9" fill="var(--text-dark)" font-weight="700">Inventory Throughput</text>
                                        <text x="15" y="142" font-size="7" fill="var(--text-light)">Last 7 days — units processed</text>

                                        <rect x="30" y="155" width="35" height="65" rx="4" fill="#f59e0b" opacity="0.2"/>
                                        <rect x="30" y="178" width="35" height="42" rx="4" fill="#f59e0b" opacity="0.8"/>
                                        <text x="47" y="232" font-size="7" fill="var(--text-light)" text-anchor="middle">Mon</text>

                                        <rect x="80" y="155" width="35" height="65" rx="4" fill="#f59e0b" opacity="0.2"/>
                                        <rect x="80" y="170" width="35" height="50" rx="4" fill="#f59e0b" opacity="0.8"/>
                                        <text x="97" y="232" font-size="7" fill="var(--text-light)" text-anchor="middle">Tue</text>

                                        <rect x="130" y="155" width="35" height="65" rx="4" fill="#f59e0b" opacity="0.2"/>
                                        <rect x="130" y="160" width="35" height="60" rx="4" fill="#f59e0b" opacity="0.8"/>
                                        <text x="147" y="232" font-size="7" fill="var(--text-light)" text-anchor="middle">Wed</text>

                                        <rect x="180" y="155" width="35" height="65" rx="4" fill="#f59e0b" opacity="0.2"/>
                                        <rect x="180" y="165" width="35" height="55" rx="4" fill="#f59e0b" opacity="0.8"/>
                                        <text x="197" y="232" font-size="7" fill="var(--text-light)" text-anchor="middle">Thu</text>

                                        <rect x="230" y="155" width="35" height="65" rx="4" fill="#22c55e" opacity="0.2"/>
                                        <rect x="230" y="155" width="35" height="65" rx="4" fill="#22c55e" opacity="0.8"/>
                                        <text x="247" y="232" font-size="7" fill="var(--text-light)" text-anchor="middle">Fri</text>

                                        <rect x="280" y="155" width="35" height="65" rx="4" fill="#f59e0b" opacity="0.2"/>
                                        <rect x="280" y="172" width="35" height="48" rx="4" fill="#f59e0b" opacity="0.8"/>
                                        <text x="297" y="232" font-size="7" fill="var(--text-light)" text-anchor="middle">Sat</text>

                                        <rect x="330" y="155" width="35" height="65" rx="4" fill="#f59e0b" opacity="0.2"/>
                                        <rect x="330" y="185" width="35" height="35" rx="4" fill="#f59e0b" opacity="0.5"/>
                                        <text x="347" y="232" font-size="7" fill="var(--text-light)" text-anchor="middle">Sun</text>

                                        <!-- Shipment tracker -->
                                        <rect x="15" y="248" width="190" height="76" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="25" y="268" font-size="8" fill="var(--text-dark)" font-weight="700">Active Shipments</text>
                                        <!-- Progress items -->
                                        <rect x="25" y="278" width="110" height="6" rx="3" fill="var(--border)"/>
                                        <rect x="25" y="278" width="95" height="6" rx="3" fill="#22c55e"/>
                                        <text x="142" y="284" font-size="7" fill="var(--text-gray)">HCM → HN</text>
                                        <rect x="25" y="292" width="110" height="6" rx="3" fill="var(--border)"/>
                                        <rect x="25" y="292" width="60" height="6" rx="3" fill="#f59e0b"/>
                                        <text x="142" y="298" font-size="7" fill="var(--text-gray)">DN → CT</text>
                                        <rect x="25" y="306" width="110" height="6" rx="3" fill="var(--border)"/>
                                        <rect x="25" y="306" width="35" height="6" rx="3" fill="#3b82f6"/>
                                        <text x="142" y="312" font-size="7" fill="var(--text-gray)">HP → BT</text>

                                        <!-- Forecast accuracy -->
                                        <rect x="215" y="248" width="190" height="76" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="225" y="268" font-size="8" fill="var(--text-dark)" font-weight="700">Forecast Accuracy</text>
                                        <!-- Mini donut -->
                                        <circle cx="260" cy="303" r="20" fill="none" stroke="var(--border)" stroke-width="5"/>
                                        <circle cx="260" cy="303" r="20" fill="none" stroke="#22c55e" stroke-width="5" stroke-dasharray="118 8" stroke-linecap="round"/>
                                        <text x="260" y="306" font-size="10" fill="#22c55e" text-anchor="middle" font-weight="800">94%</text>
                                        <text x="310" y="292" font-size="7" fill="var(--text-gray)">Demand prediction</text>
                                        <text x="310" y="306" font-size="7" fill="var(--text-gray)">Stock optimization</text>
                                        <text x="310" y="320" font-size="7" fill="#22c55e" font-weight="700">On target</text>
                                    </svg>

                                    @elseif ($case['badge'] === 'Enterprise Management')
                                    {{-- ERP: Enterprise Dashboard SVG --}}
                                    <svg viewBox="0 0 420 340" fill="none" aria-hidden="true" style="width: 100%; max-width: 400px; filter: drop-shadow(0 8px 24px rgba(16, 185, 129, 0.12));">
                                        <rect x="0" y="0" width="420" height="340" rx="14" fill="var(--surface)" stroke="var(--border)" stroke-width="1"/>
                                        <!-- Top bar -->
                                        <rect x="0" y="0" width="420" height="40" rx="14" fill="var(--secondary-bg)"/>
                                        <rect x="0" y="28" width="420" height="12" fill="var(--secondary-bg)"/>
                                        <line x1="0" y1="40" x2="420" y2="40" stroke="var(--border)" stroke-width="0.75"/>
                                        <circle cx="18" cy="20" r="4" fill="#ff5f57"/>
                                        <circle cx="32" cy="20" r="4" fill="#febc2e"/>
                                        <circle cx="46" cy="20" r="4" fill="#28c840"/>
                                        <text x="70" y="24" font-size="9" fill="var(--text-light)" font-weight="600">ERP Management Console</text>

                                        <!-- Module cards (2x3 grid) -->
                                        <rect x="15" y="52" width="125" height="70" rx="8" fill="#10b98112" stroke="#10b98125" stroke-width="0.75"/>
                                        <text x="25" y="72" font-size="8" fill="#10b981" font-weight="700">Accounting</text>
                                        <text x="25" y="88" font-size="14" fill="var(--text-dark)" font-weight="800">$2.4M</text>
                                        <text x="25" y="102" font-size="7" fill="var(--text-light)">Monthly revenue</text>
                                        <rect x="105" y="85" width="28" height="12" rx="3" fill="#22c55e"/>
                                        <text x="119" y="94" font-size="7" fill="white" text-anchor="middle" font-weight="600">+18%</text>

                                        <rect x="150" y="52" width="125" height="70" rx="8" fill="#3b82f612" stroke="#3b82f625" stroke-width="0.75"/>
                                        <text x="160" y="72" font-size="8" fill="#3b82f6" font-weight="700">Procurement</text>
                                        <text x="160" y="88" font-size="14" fill="var(--text-dark)" font-weight="800">847</text>
                                        <text x="160" y="102" font-size="7" fill="var(--text-light)">Active POs</text>
                                        <!-- Mini sparkline -->
                                        <polyline points="240,90 248,86 254,88 260,82 266,80" stroke="#3b82f6" stroke-width="1.5" fill="none"/>

                                        <rect x="285" y="52" width="120" height="70" rx="8" fill="#f59e0b12" stroke="#f59e0b25" stroke-width="0.75"/>
                                        <text x="295" y="72" font-size="8" fill="#f59e0b" font-weight="700">Inventory</text>
                                        <text x="295" y="88" font-size="14" fill="var(--text-dark)" font-weight="800">52K</text>
                                        <text x="295" y="102" font-size="7" fill="var(--text-light)">Items in stock</text>
                                        <polyline points="370,90 376,85 382,88 388,83 394,78" stroke="#f59e0b" stroke-width="1.5" fill="none"/>

                                        <!-- Workflow diagram -->
                                        <text x="15" y="147" font-size="9" fill="var(--text-dark)" font-weight="700">Automated Workflow</text>
                                        <text x="15" y="159" font-size="7" fill="var(--text-light)">End-to-end process automation</text>

                                        <!-- Flow nodes -->
                                        <rect x="20" y="170" width="70" height="34" rx="6" fill="#10b981" opacity="0.85"/>
                                        <text x="55" y="190" font-size="8" fill="white" text-anchor="middle" font-weight="600">Order</text>
                                        <!-- Arrow -->
                                        <line x1="95" y1="187" x2="112" y2="187" stroke="var(--border)" stroke-width="1.5"/>
                                        <polygon points="112,183 120,187 112,191" fill="var(--text-light)"/>

                                        <rect x="125" y="170" width="70" height="34" rx="6" fill="#3b82f6" opacity="0.85"/>
                                        <text x="160" y="190" font-size="8" fill="white" text-anchor="middle" font-weight="600">Approve</text>
                                        <line x1="200" y1="187" x2="217" y2="187" stroke="var(--border)" stroke-width="1.5"/>
                                        <polygon points="217,183 225,187 217,191" fill="var(--text-light)"/>

                                        <rect x="230" y="170" width="70" height="34" rx="6" fill="#f59e0b" opacity="0.85"/>
                                        <text x="265" y="190" font-size="8" fill="white" text-anchor="middle" font-weight="600">Procure</text>
                                        <line x1="305" y1="187" x2="322" y2="187" stroke="var(--border)" stroke-width="1.5"/>
                                        <polygon points="322,183 330,187 322,191" fill="var(--text-light)"/>

                                        <rect x="335" y="170" width="70" height="34" rx="6" fill="#a855f7" opacity="0.85"/>
                                        <text x="370" y="190" font-size="8" fill="white" text-anchor="middle" font-weight="600">Deliver</text>

                                        <!-- Consolidation chart -->
                                        <rect x="15" y="220" width="195" height="106" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="25" y="240" font-size="8" fill="var(--text-dark)" font-weight="700">Report Consolidation</text>
                                        <!-- Before/After comparison -->
                                        <rect x="30" y="252" width="20" height="55" rx="3" fill="#ef4444" opacity="0.25"/>
                                        <rect x="30" y="267" width="20" height="40" rx="3" fill="#ef4444" opacity="0.75"/>
                                        <text x="40" y="320" font-size="7" fill="var(--text-light)" text-anchor="middle">Before</text>
                                        <text x="40" y="263" font-size="7" fill="#ef4444" text-anchor="middle" font-weight="700">3 days</text>

                                        <rect x="70" y="252" width="20" height="55" rx="3" fill="#22c55e" opacity="0.25"/>
                                        <rect x="70" y="299" width="20" height="8" rx="3" fill="#22c55e" opacity="0.85"/>
                                        <text x="80" y="320" font-size="7" fill="var(--text-light)" text-anchor="middle">After</text>
                                        <text x="80" y="295" font-size="7" fill="#22c55e" text-anchor="middle" font-weight="700">1 min</text>

                                        <!-- Arrow showing improvement -->
                                        <text x="120" y="278" font-size="18" fill="#22c55e" font-weight="800">99.7%</text>
                                        <text x="120" y="292" font-size="7" fill="var(--text-light)">faster</text>

                                        <!-- Team adoption -->
                                        <rect x="220" y="220" width="185" height="106" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="230" y="240" font-size="8" fill="var(--text-dark)" font-weight="700">Team Adoption</text>

                                        <!-- Donut -->
                                        <circle cx="270" cy="282" r="25" fill="none" stroke="var(--border)" stroke-width="6"/>
                                        <circle cx="270" cy="282" r="25" fill="none" stroke="#10b981" stroke-width="6" stroke-dasharray="149 8" stroke-linecap="round"/>
                                        <text x="270" y="285" font-size="12" fill="#10b981" text-anchor="middle" font-weight="800">95%</text>

                                        <!-- Department list -->
                                        <circle cx="325" cy="255" r="3" fill="#10b981"/>
                                        <text x="334" y="258" font-size="7" fill="var(--text-gray)">Finance 100%</text>
                                        <circle cx="325" cy="270" r="3" fill="#3b82f6"/>
                                        <text x="334" y="273" font-size="7" fill="var(--text-gray)">Operations 96%</text>
                                        <circle cx="325" cy="285" r="3" fill="#f59e0b"/>
                                        <text x="334" y="288" font-size="7" fill="var(--text-gray)">Sales 93%</text>
                                        <circle cx="325" cy="300" r="3" fill="#a855f7"/>
                                        <text x="334" y="303" font-size="7" fill="var(--text-gray)">HR 91%</text>
                                        <circle cx="325" cy="315" r="3" fill="#0ea5e9"/>
                                        <text x="334" y="318" font-size="7" fill="var(--text-gray)">IT 89%</text>
                                    </svg>

                                    @elseif ($case['badge'] === 'AI Knowledge Platform')
                                    {{-- AI Knowledge Platform: Modern AI Foundation — 6 Core Modules SVG --}}
                                    <svg viewBox="0 0 420 340" fill="none" aria-hidden="true" style="width: 100%; max-width: 400px; filter: drop-shadow(0 8px 24px rgba(14, 165, 233, 0.12));">
                                        <rect x="0" y="0" width="420" height="340" rx="14" fill="var(--surface)" stroke="var(--border)" stroke-width="1"/>
                                        <!-- Top bar -->
                                        <rect x="0" y="0" width="420" height="36" rx="14" fill="var(--secondary-bg)"/>
                                        <rect x="0" y="24" width="420" height="12" fill="var(--secondary-bg)"/>
                                        <line x1="0" y1="36" x2="420" y2="36" stroke="var(--border)" stroke-width="0.75"/>
                                        <circle cx="16" cy="18" r="3.5" fill="#ff5f57"/>
                                        <circle cx="28" cy="18" r="3.5" fill="#febc2e"/>
                                        <circle cx="40" cy="18" r="3.5" fill="#28c840"/>
                                        <text x="56" y="22" font-size="8.5" fill="var(--text-light)" font-weight="600">Modern AI Foundation</text>
                                        <!-- Live badge -->
                                        <rect x="350" y="9" width="56" height="18" rx="9" fill="#22c55e18" stroke="#22c55e40" stroke-width="0.5"/>
                                        <circle cx="362" cy="18" r="2.5" fill="#22c55e"/>
                                        <text x="387" y="22" font-size="6.5" fill="#22c55e" text-anchor="middle" font-weight="700">6 Modules</text>

                                        <!-- ===== ROW 1: Top 3 modules (Ingestion, Vector Search, LLM Router) ===== -->
                                        <!-- Module 1: Knowledge Ingestion -->
                                        <rect x="12" y="46" width="128" height="72" rx="8" fill="#0ea5e908" stroke="#0ea5e925" stroke-width="0.75"/>
                                        <rect x="20" y="54" width="24" height="24" rx="6" fill="#0ea5e9"/>
                                        <text x="32" y="70" font-size="11" fill="white" text-anchor="middle" font-weight="800">K</text>
                                        <text x="50" y="63" font-size="7.5" fill="var(--text-dark)" font-weight="700">Knowledge</text>
                                        <text x="50" y="73" font-size="7.5" fill="var(--text-dark)" font-weight="700">Ingestion</text>
                                        <rect x="20" y="84" width="46" height="12" rx="6" fill="#0ea5e912"/>
                                        <text x="43" y="93" font-size="5.5" fill="#0ea5e9" text-anchor="middle" font-weight="600">Connectors</text>
                                        <rect x="70" y="84" width="28" height="12" rx="6" fill="#0ea5e912"/>
                                        <text x="84" y="93" font-size="5.5" fill="#0ea5e9" text-anchor="middle" font-weight="600">OCR</text>
                                        <rect x="20" y="99" width="40" height="12" rx="6" fill="#0ea5e912"/>
                                        <text x="40" y="108" font-size="5.5" fill="#0ea5e9" text-anchor="middle" font-weight="600">Chunking</text>
                                        <rect x="64" y="99" width="62" height="12" rx="6" fill="#0ea5e912"/>
                                        <text x="95" y="108" font-size="5.5" fill="#0ea5e9" text-anchor="middle" font-weight="600">Token Budget</text>

                                        <!-- Arrow 1→2 -->
                                        <line x1="145" y1="82" x2="152" y2="82" stroke="#0ea5e9" stroke-width="1" stroke-dasharray="3,2"/>
                                        <polygon points="152,79 157,82 152,85" fill="#0ea5e9"/>

                                        <!-- Module 2: Vector Search -->
                                        <rect x="160" y="46" width="122" height="72" rx="8" fill="#a855f708" stroke="#a855f725" stroke-width="0.75"/>
                                        <rect x="168" y="54" width="24" height="24" rx="6" fill="#a855f7"/>
                                        <text x="180" y="70" font-size="11" fill="white" text-anchor="middle" font-weight="800">V</text>
                                        <text x="198" y="63" font-size="7.5" fill="var(--text-dark)" font-weight="700">Vector</text>
                                        <text x="198" y="73" font-size="7.5" fill="var(--text-dark)" font-weight="700">Search</text>
                                        <rect x="168" y="84" width="50" height="12" rx="6" fill="#a855f712"/>
                                        <text x="193" y="93" font-size="5.5" fill="#a855f7" text-anchor="middle" font-weight="600">Semantic</text>
                                        <rect x="222" y="84" width="50" height="12" rx="6" fill="#a855f712"/>
                                        <text x="247" y="93" font-size="5.5" fill="#a855f7" text-anchor="middle" font-weight="600">BM25</text>
                                        <rect x="168" y="99" width="46" height="12" rx="6" fill="#a855f712"/>
                                        <text x="191" y="108" font-size="5.5" fill="#a855f7" text-anchor="middle" font-weight="600">Metadata</text>
                                        <rect x="218" y="99" width="50" height="12" rx="6" fill="#a855f712"/>
                                        <text x="243" y="108" font-size="5.5" fill="#a855f7" text-anchor="middle" font-weight="600">Re-ranking</text>

                                        <!-- Arrow 2→3 -->
                                        <line x1="287" y1="82" x2="294" y2="82" stroke="#a855f7" stroke-width="1" stroke-dasharray="3,2"/>
                                        <polygon points="294,79 299,82 294,85" fill="#a855f7"/>

                                        <!-- Module 3: LLM Routing -->
                                        <rect x="302" y="46" width="106" height="72" rx="8" fill="#f59e0b08" stroke="#f59e0b25" stroke-width="0.75"/>
                                        <rect x="310" y="54" width="24" height="24" rx="6" fill="#f59e0b"/>
                                        <text x="322" y="70" font-size="11" fill="white" text-anchor="middle" font-weight="800">L</text>
                                        <text x="340" y="63" font-size="7.5" fill="var(--text-dark)" font-weight="700">LLM</text>
                                        <text x="340" y="73" font-size="7.5" fill="var(--text-dark)" font-weight="700">Routing</text>
                                        <rect x="310" y="84" width="52" height="12" rx="6" fill="#f59e0b12"/>
                                        <text x="336" y="93" font-size="5.5" fill="#f59e0b" text-anchor="middle" font-weight="600">Multi-provider</text>
                                        <rect x="366" y="84" width="34" height="12" rx="6" fill="#f59e0b12"/>
                                        <text x="383" y="93" font-size="5.5" fill="#f59e0b" text-anchor="middle" font-weight="600">Cost</text>
                                        <rect x="310" y="99" width="44" height="12" rx="6" fill="#f59e0b12"/>
                                        <text x="332" y="108" font-size="5.5" fill="#f59e0b" text-anchor="middle" font-weight="600">Fallbacks</text>
                                        <rect x="358" y="99" width="42" height="12" rx="6" fill="#f59e0b12"/>
                                        <text x="379" y="108" font-size="5.5" fill="#f59e0b" text-anchor="middle" font-weight="600">Fn Call</text>

                                        <!-- ===== ROW 2: RAG Pipeline Flow (visual diagram) ===== -->
                                        <text x="12" y="135" font-size="8" fill="var(--text-dark)" font-weight="700">RAG Pipeline</text>
                                        <text x="82" y="135" font-size="6.5" fill="var(--text-light)">retrieval → context → generation → citations</text>

                                        <!-- 4-step pipeline: Retrieve → Context → Generate → Cite -->
                                        <rect x="12" y="143" width="396" height="42" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>

                                        <rect x="20" y="150" width="82" height="28" rx="6" fill="#0ea5e9"/>
                                        <text x="61" y="163" font-size="7.5" fill="white" text-anchor="middle" font-weight="700">1. Retrieve</text>
                                        <text x="61" y="173" font-size="5.5" fill="rgba(255,255,255,0.85)" text-anchor="middle">Top-K Docs</text>
                                        <!-- Arrow -->
                                        <line x1="107" y1="164" x2="117" y2="164" stroke="var(--text-light)" stroke-width="1"/>
                                        <polygon points="117,161 122,164 117,167" fill="var(--text-light)"/>

                                        <rect x="125" y="150" width="82" height="28" rx="6" fill="#a855f7"/>
                                        <text x="166" y="163" font-size="7.5" fill="white" text-anchor="middle" font-weight="700">2. Context</text>
                                        <text x="166" y="173" font-size="5.5" fill="rgba(255,255,255,0.85)" text-anchor="middle">Assembly</text>
                                        <line x1="212" y1="164" x2="222" y2="164" stroke="var(--text-light)" stroke-width="1"/>
                                        <polygon points="222,161 227,164 222,167" fill="var(--text-light)"/>

                                        <rect x="230" y="150" width="82" height="28" rx="6" fill="#f59e0b"/>
                                        <text x="271" y="163" font-size="7.5" fill="white" text-anchor="middle" font-weight="700">3. Generate</text>
                                        <text x="271" y="173" font-size="5.5" fill="rgba(255,255,255,0.85)" text-anchor="middle">LLM Response</text>
                                        <line x1="317" y1="164" x2="327" y2="164" stroke="var(--text-light)" stroke-width="1"/>
                                        <polygon points="327,161 332,164 327,167" fill="var(--text-light)"/>

                                        <rect x="335" y="150" width="65" height="28" rx="6" fill="#22c55e"/>
                                        <text x="367" y="163" font-size="7.5" fill="white" text-anchor="middle" font-weight="700">4. Cite</text>
                                        <text x="367" y="173" font-size="5.5" fill="rgba(255,255,255,0.85)" text-anchor="middle">Sources</text>

                                        <!-- ===== ROW 3: Security & Policy + Observability ===== -->
                                        <!-- Module 5: Security & Policy -->
                                        <rect x="12" y="196" width="196" height="68" rx="8" fill="#ef444408" stroke="#ef444420" stroke-width="0.75"/>
                                        <rect x="20" y="204" width="22" height="22" rx="5" fill="#ef4444"/>
                                        <text x="31" y="219" font-size="10" fill="white" text-anchor="middle" font-weight="800">S</text>
                                        <text x="48" y="212" font-size="7.5" fill="var(--text-dark)" font-weight="700">Security &amp; Policy</text>
                                        <text x="48" y="222" font-size="6" fill="var(--text-light)">Governance &amp; compliance layer</text>
                                        <!-- Pills row 1 -->
                                        <rect x="20" y="232" width="38" height="13" rx="6.5" fill="#ef444412"/>
                                        <text x="39" y="241" font-size="5.5" fill="#ef4444" text-anchor="middle" font-weight="600">RBAC</text>
                                        <rect x="62" y="232" width="38" height="13" rx="6.5" fill="#ef444412"/>
                                        <text x="81" y="241" font-size="5.5" fill="#ef4444" text-anchor="middle" font-weight="600">ABAC</text>
                                        <rect x="104" y="232" width="46" height="13" rx="6.5" fill="#ef444412"/>
                                        <text x="127" y="241" font-size="5.5" fill="#ef4444" text-anchor="middle" font-weight="600">PII Scrub</text>
                                        <!-- Pills row 2 -->
                                        <rect x="20" y="248" width="48" height="13" rx="6.5" fill="#ef444412"/>
                                        <text x="44" y="257" font-size="5.5" fill="#ef4444" text-anchor="middle" font-weight="600">Guardrails</text>
                                        <rect x="72" y="248" width="48" height="13" rx="6.5" fill="#ef444412"/>
                                        <text x="96" y="257" font-size="5.5" fill="#ef4444" text-anchor="middle" font-weight="600">Audit Logs</text>

                                        <!-- Module 6: Observability -->
                                        <rect x="218" y="196" width="190" height="68" rx="8" fill="#10b98108" stroke="#10b98120" stroke-width="0.75"/>
                                        <rect x="226" y="204" width="22" height="22" rx="5" fill="#10b981"/>
                                        <text x="237" y="219" font-size="10" fill="white" text-anchor="middle" font-weight="800">O</text>
                                        <text x="254" y="212" font-size="7.5" fill="var(--text-dark)" font-weight="700">Observability</text>
                                        <text x="254" y="222" font-size="6" fill="var(--text-light)">Monitoring &amp; evaluation</text>
                                        <!-- Pills row 1 -->
                                        <rect x="226" y="232" width="44" height="13" rx="6.5" fill="#10b98112"/>
                                        <text x="248" y="241" font-size="5.5" fill="#10b981" text-anchor="middle" font-weight="600">Latency</text>
                                        <rect x="274" y="232" width="34" height="13" rx="6.5" fill="#10b98112"/>
                                        <text x="291" y="241" font-size="5.5" fill="#10b981" text-anchor="middle" font-weight="600">Cost</text>
                                        <rect x="312" y="232" width="34" height="13" rx="6.5" fill="#10b98112"/>
                                        <text x="329" y="241" font-size="5.5" fill="#10b981" text-anchor="middle" font-weight="600">Eval</text>
                                        <!-- Pills row 2 -->
                                        <rect x="226" y="248" width="62" height="13" rx="6.5" fill="#10b98112"/>
                                        <text x="257" y="257" font-size="5.5" fill="#10b981" text-anchor="middle" font-weight="600">A/B Testing</text>
                                        <rect x="292" y="248" width="64" height="13" rx="6.5" fill="#10b98112"/>
                                        <text x="324" y="257" font-size="5.5" fill="#10b981" text-anchor="middle" font-weight="600">Experiments</text>

                                        <!-- ===== Bottom: Real-time Metrics Bar ===== -->
                                        <rect x="12" y="276" width="396" height="52" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="22" y="292" font-size="7" fill="var(--text-dark)" font-weight="700">Real-time</text>

                                        <!-- Metric: Latency -->
                                        <rect x="70" y="280" width="78" height="40" rx="6" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="78" y="293" font-size="5.5" fill="var(--text-light)">Avg Latency</text>
                                        <text x="78" y="310" font-size="12" fill="#0ea5e9" font-weight="800">187ms</text>
                                        <polyline points="120,306 124,302 128,304 132,298 136,300 140,294" stroke="#0ea5e9" stroke-width="1" fill="none"/>

                                        <!-- Metric: Accuracy -->
                                        <rect x="158" y="280" width="78" height="40" rx="6" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="166" y="293" font-size="5.5" fill="var(--text-light)">Retrieval Acc.</text>
                                        <text x="166" y="310" font-size="12" fill="#22c55e" font-weight="800">97.3%</text>
                                        <polyline points="208,306 212,303 216,300 220,298 224,296 228,292" stroke="#22c55e" stroke-width="1" fill="none"/>

                                        <!-- Metric: Cost -->
                                        <rect x="246" y="280" width="78" height="40" rx="6" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="254" y="293" font-size="5.5" fill="var(--text-light)">Cost/Query</text>
                                        <text x="254" y="310" font-size="12" fill="#f59e0b" font-weight="800">$0.003</text>
                                        <polyline points="296,300 300,302 304,298 308,300 312,296 316,298" stroke="#f59e0b" stroke-width="1" fill="none"/>

                                        <!-- Metric: Providers -->
                                        <rect x="334" y="280" width="66" height="40" rx="6" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="342" y="293" font-size="5.5" fill="var(--text-light)">Providers</text>
                                        <rect x="342" y="300" width="14" height="12" rx="3" fill="#0ea5e9"/>
                                        <text x="349" y="309" font-size="5" fill="white" text-anchor="middle" font-weight="700">G</text>
                                        <rect x="359" y="300" width="14" height="12" rx="3" fill="#a855f7"/>
                                        <text x="366" y="309" font-size="5" fill="white" text-anchor="middle" font-weight="700">C</text>
                                        <rect x="376" y="300" width="14" height="12" rx="3" fill="#f59e0b"/>
                                        <text x="383" y="309" font-size="5" fill="white" text-anchor="middle" font-weight="700">+4</text>
                                    </svg>

                                    @elseif ($case['badge'] === 'Enterprise SaaS')
                                    {{-- Enterprise SaaS: HKSpace Platform Dashboard SVG --}}
                                    <svg viewBox="0 0 420 340" fill="none" aria-hidden="true" style="width: 100%; max-width: 400px; filter: drop-shadow(0 8px 24px rgba(59, 130, 246, 0.12));">
                                        <rect x="0" y="0" width="420" height="340" rx="14" fill="var(--surface)" stroke="var(--border)" stroke-width="1"/>
                                        <!-- Top bar -->
                                        <rect x="0" y="0" width="420" height="40" rx="14" fill="var(--secondary-bg)"/>
                                        <rect x="0" y="28" width="420" height="12" fill="var(--secondary-bg)"/>
                                        <line x1="0" y1="40" x2="420" y2="40" stroke="var(--border)" stroke-width="0.75"/>
                                        <circle cx="18" cy="20" r="4" fill="#ff5f57"/>
                                        <circle cx="32" cy="20" r="4" fill="#febc2e"/>
                                        <circle cx="46" cy="20" r="4" fill="#28c840"/>
                                        <text x="70" y="24" font-size="9" fill="var(--text-light)" font-weight="600">HKSpace — Enterprise SaaS Platform</text>

                                        <!-- Sidebar nav -->
                                        <rect x="0" y="40" width="85" height="300" fill="var(--secondary-bg)"/>
                                        <line x1="85" y1="40" x2="85" y2="340" stroke="var(--border)" stroke-width="0.5"/>
                                        <!-- Logo area -->
                                        <rect x="18" y="52" width="50" height="16" rx="4" fill="var(--primary)"/>
                                        <text x="43" y="63" font-size="7" fill="white" text-anchor="middle" font-weight="800">HKSpace</text>
                                        <!-- Nav items -->
                                        <rect x="12" y="80" width="61" height="22" rx="5" fill="var(--primary)" opacity="0.12"/>
                                        <text x="22" y="94" font-size="7" fill="var(--primary)" font-weight="700">Dashboard</text>
                                        <text x="22" y="116" font-size="7" fill="var(--text-light)" font-weight="500">Workspaces</text>
                                        <text x="22" y="134" font-size="7" fill="var(--text-light)" font-weight="500">Members</text>
                                        <text x="22" y="152" font-size="7" fill="var(--text-light)" font-weight="500">Billing</text>
                                        <text x="22" y="170" font-size="7" fill="var(--text-light)" font-weight="500">Integrations</text>
                                        <text x="22" y="188" font-size="7" fill="var(--text-light)" font-weight="500">Settings</text>
                                        <!-- User avatar -->
                                        <circle cx="43" cy="310" r="12" fill="var(--primary)" opacity="0.15"/>
                                        <text x="43" y="314" font-size="8" fill="var(--primary)" text-anchor="middle" font-weight="700">TV</text>

                                        <!-- Main content area -->
                                        <!-- Metric cards -->
                                        <rect x="98" y="52" width="97" height="55" rx="8" fill="#3b82f610" stroke="#3b82f625" stroke-width="0.75"/>
                                        <text x="108" y="69" font-size="7" fill="var(--text-light)" font-weight="600">Active Users</text>
                                        <text x="108" y="90" font-size="16" fill="#3b82f6" font-weight="800">50.2K</text>
                                        <text x="152" y="90" font-size="7" fill="#22c55e" font-weight="700">+22%</text>

                                        <rect x="205" y="52" width="97" height="55" rx="8" fill="#22c55e10" stroke="#22c55e25" stroke-width="0.75"/>
                                        <text x="215" y="69" font-size="7" fill="var(--text-light)" font-weight="600">Uptime SLA</text>
                                        <text x="215" y="90" font-size="16" fill="#22c55e" font-weight="800">99.95%</text>

                                        <rect x="312" y="52" width="95" height="55" rx="8" fill="#f59e0b10" stroke="#f59e0b25" stroke-width="0.75"/>
                                        <text x="322" y="69" font-size="7" fill="var(--text-light)" font-weight="600">MRR</text>
                                        <text x="322" y="90" font-size="16" fill="#f59e0b" font-weight="800">$128K</text>
                                        <text x="370" y="90" font-size="7" fill="#22c55e" font-weight="700">+31%</text>

                                        <!-- Activity chart -->
                                        <rect x="98" y="118" width="205" height="110" rx="8" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="110" y="138" font-size="8" fill="var(--text-dark)" font-weight="700">User Activity</text>
                                        <text x="110" y="149" font-size="6" fill="var(--text-light)">Daily active users — last 30 days</text>
                                        <!-- Area chart -->
                                        <polygon points="110,215 130,200 150,205 170,190 190,195 210,180 230,175 250,170 270,160 290,155 290,215"
                                                 fill="#3b82f6" opacity="0.1"/>
                                        <polyline points="110,215 130,200 150,205 170,190 190,195 210,180 230,175 250,170 270,160 290,155"
                                                  stroke="#3b82f6" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="290" cy="155" r="4" fill="var(--surface)" stroke="#3b82f6" stroke-width="2"/>
                                        <!-- Tooltip -->
                                        <rect x="265" y="138" width="30" height="15" rx="4" fill="#3b82f6"/>
                                        <text x="280" y="149" font-size="6" fill="white" text-anchor="middle" font-weight="700">52K</text>

                                        <!-- Recent workspaces -->
                                        <rect x="312" y="118" width="95" height="110" rx="8" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="322" y="138" font-size="8" fill="var(--text-dark)" font-weight="700">Workspaces</text>
                                        <!-- Workspace items -->
                                        <rect x="322" y="148" width="75" height="18" rx="4" fill="#3b82f608" stroke="#3b82f620" stroke-width="0.5"/>
                                        <circle cx="332" cy="157" r="4" fill="#3b82f6"/>
                                        <text x="340" y="160" font-size="6" fill="var(--text-gray)">Engineering</text>
                                        <rect x="322" y="172" width="75" height="18" rx="4" fill="#22c55e08" stroke="#22c55e20" stroke-width="0.5"/>
                                        <circle cx="332" cy="181" r="4" fill="#22c55e"/>
                                        <text x="340" y="184" font-size="6" fill="var(--text-gray)">Marketing</text>
                                        <rect x="322" y="196" width="75" height="18" rx="4" fill="#f59e0b08" stroke="#f59e0b20" stroke-width="0.5"/>
                                        <circle cx="332" cy="205" r="4" fill="#f59e0b"/>
                                        <text x="340" y="208" font-size="6" fill="var(--text-gray)">Design</text>

                                        <!-- Bottom: Multi-tenant architecture -->
                                        <rect x="98" y="240" width="309" height="86" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="110" y="258" font-size="8" fill="var(--text-dark)" font-weight="700">Multi-Tenant Architecture</text>
                                        <!-- Tenant boxes -->
                                        <rect x="110" y="268" width="55" height="28" rx="5" fill="#3b82f6" opacity="0.85"/>
                                        <text x="137" y="279" font-size="6" fill="white" text-anchor="middle" font-weight="700">Tenant A</text>
                                        <text x="137" y="290" font-size="5" fill="rgba(255,255,255,0.75)" text-anchor="middle">12K users</text>

                                        <rect x="175" y="268" width="55" height="28" rx="5" fill="#22c55e" opacity="0.85"/>
                                        <text x="202" y="279" font-size="6" fill="white" text-anchor="middle" font-weight="700">Tenant B</text>
                                        <text x="202" y="290" font-size="5" fill="rgba(255,255,255,0.75)" text-anchor="middle">8K users</text>

                                        <rect x="240" y="268" width="55" height="28" rx="5" fill="#f59e0b" opacity="0.85"/>
                                        <text x="267" y="279" font-size="6" fill="white" text-anchor="middle" font-weight="700">Tenant C</text>
                                        <text x="267" y="290" font-size="5" fill="rgba(255,255,255,0.75)" text-anchor="middle">5K users</text>

                                        <rect x="305" y="268" width="40" height="28" rx="5" fill="var(--border)" opacity="0.5"/>
                                        <text x="325" y="285" font-size="8" fill="var(--text-light)" text-anchor="middle" font-weight="700">+47</text>

                                        <!-- Status pills -->
                                        <rect x="110" y="304" width="60" height="14" rx="7" fill="#22c55e15"/>
                                        <text x="140" y="314" font-size="6" fill="#22c55e" text-anchor="middle" font-weight="600">RBAC Active</text>
                                        <rect x="178" y="304" width="52" height="14" rx="7" fill="#3b82f615"/>
                                        <text x="204" y="314" font-size="6" fill="#3b82f6" text-anchor="middle" font-weight="600">SSO/OAuth</text>
                                        <rect x="238" y="304" width="50" height="14" rx="7" fill="#a855f715"/>
                                        <text x="263" y="314" font-size="6" fill="#a855f7" text-anchor="middle" font-weight="600">API v3</text>
                                        <rect x="296" y="304" width="56" height="14" rx="7" fill="#f59e0b15"/>
                                        <text x="324" y="314" font-size="6" fill="#f59e0b" text-anchor="middle" font-weight="600">Auto-Scale</text>
                                    </svg>

                                    @elseif ($case['badge'] === 'Sprint Cycle')
                                    {{-- Sprint Cycle: Agile Sprint Board Dashboard SVG --}}
                                    <svg viewBox="0 0 420 340" fill="none" aria-hidden="true" style="width: 100%; max-width: 400px; filter: drop-shadow(0 8px 24px rgba(99, 102, 241, 0.12));">
                                        <rect x="0" y="0" width="420" height="340" rx="14" fill="var(--surface)" stroke="var(--border)" stroke-width="1"/>
                                        <!-- Top bar -->
                                        <rect x="0" y="0" width="420" height="40" rx="14" fill="var(--secondary-bg)"/>
                                        <rect x="0" y="28" width="420" height="12" fill="var(--secondary-bg)"/>
                                        <line x1="0" y1="40" x2="420" y2="40" stroke="var(--border)" stroke-width="0.75"/>
                                        <circle cx="18" cy="20" r="4" fill="#ff5f57"/>
                                        <circle cx="32" cy="20" r="4" fill="#febc2e"/>
                                        <circle cx="46" cy="20" r="4" fill="#28c840"/>
                                        <text x="70" y="24" font-size="9" fill="var(--text-light)" font-weight="600">Sprint Cycle — Board View</text>
                                        <!-- Sprint badge -->
                                        <rect x="320" y="12" width="85" height="16" rx="8" fill="#6366f120" stroke="#6366f150" stroke-width="0.5"/>
                                        <text x="362" y="24" font-size="7" fill="#6366f1" text-anchor="middle" font-weight="700">Sprint #24 Active</text>

                                        <!-- Sprint metrics row -->
                                        <rect x="15" y="52" width="75" height="44" rx="6" fill="#6366f110" stroke="#6366f125" stroke-width="0.75"/>
                                        <text x="25" y="67" font-size="6.5" fill="var(--text-light)" font-weight="600">Velocity</text>
                                        <text x="25" y="84" font-size="15" fill="#6366f1" font-weight="800">94 pts</text>

                                        <rect x="100" y="52" width="75" height="44" rx="6" fill="#22c55e10" stroke="#22c55e25" stroke-width="0.75"/>
                                        <text x="110" y="67" font-size="6.5" fill="var(--text-light)" font-weight="600">Goal Met</text>
                                        <text x="110" y="84" font-size="15" fill="#22c55e" font-weight="800">96%</text>

                                        <rect x="185" y="52" width="75" height="44" rx="6" fill="#f59e0b10" stroke="#f59e0b25" stroke-width="0.75"/>
                                        <text x="195" y="67" font-size="6.5" fill="var(--text-light)" font-weight="600">Stories</text>
                                        <text x="195" y="84" font-size="15" fill="#f59e0b" font-weight="800">18/21</text>

                                        <rect x="270" y="52" width="65" height="44" rx="6" fill="#ef444410" stroke="#ef444425" stroke-width="0.75"/>
                                        <text x="280" y="67" font-size="6.5" fill="var(--text-light)" font-weight="600">Blockers</text>
                                        <text x="280" y="84" font-size="15" fill="#ef4444" font-weight="800">1</text>

                                        <!-- Days remaining -->
                                        <rect x="345" y="52" width="60" height="44" rx="6" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="375" y="67" font-size="6.5" fill="var(--text-light)" font-weight="600" text-anchor="middle">Days Left</text>
                                        <text x="375" y="86" font-size="17" fill="var(--text-dark)" font-weight="800" text-anchor="middle">5</text>

                                        <!-- Kanban board -->
                                        <text x="15" y="117" font-size="9" fill="var(--text-dark)" font-weight="700">Sprint Board</text>

                                        <!-- Column: Backlog -->
                                        <rect x="15" y="126" width="95" height="16" rx="4" fill="var(--secondary-bg)"/>
                                        <text x="23" y="137" font-size="7" fill="var(--text-gray)" font-weight="700">Backlog</text>
                                        <text x="90" y="137" font-size="7" fill="var(--text-light)" font-weight="600">3</text>
                                        <!-- Cards -->
                                        <rect x="15" y="148" width="95" height="30" rx="5" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="23" y="161" font-size="6.5" fill="var(--text-dark)" font-weight="600">API refactor</text>
                                        <rect x="23" y="167" width="24" height="8" rx="4" fill="#6366f115"/>
                                        <text x="35" y="174" font-size="5" fill="#6366f1" text-anchor="middle" font-weight="600">5 pts</text>

                                        <rect x="15" y="184" width="95" height="30" rx="5" fill="var(--surface)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="23" y="197" font-size="6.5" fill="var(--text-dark)" font-weight="600">DB migration</text>
                                        <rect x="23" y="203" width="24" height="8" rx="4" fill="#f59e0b15"/>
                                        <text x="35" y="210" font-size="5" fill="#f59e0b" text-anchor="middle" font-weight="600">3 pts</text>

                                        <!-- Column: In Progress -->
                                        <rect x="120" y="126" width="95" height="16" rx="4" fill="#3b82f615"/>
                                        <text x="128" y="137" font-size="7" fill="#3b82f6" font-weight="700">In Progress</text>
                                        <text x="195" y="137" font-size="7" fill="#3b82f6" font-weight="600">4</text>

                                        <rect x="120" y="148" width="95" height="30" rx="5" fill="var(--surface)" stroke="#3b82f630" stroke-width="0.75"/>
                                        <text x="128" y="161" font-size="6.5" fill="var(--text-dark)" font-weight="600">Auth module</text>
                                        <rect x="128" y="167" width="24" height="8" rx="4" fill="#3b82f615"/>
                                        <text x="140" y="174" font-size="5" fill="#3b82f6" text-anchor="middle" font-weight="600">8 pts</text>
                                        <circle cx="200" cy="162" r="6" fill="#3b82f6" opacity="0.15"/>
                                        <text x="200" y="165" font-size="5" fill="#3b82f6" text-anchor="middle" font-weight="700">JD</text>

                                        <rect x="120" y="184" width="95" height="30" rx="5" fill="var(--surface)" stroke="#3b82f630" stroke-width="0.75"/>
                                        <text x="128" y="197" font-size="6.5" fill="var(--text-dark)" font-weight="600">Dashboard UI</text>
                                        <rect x="128" y="203" width="24" height="8" rx="4" fill="#a855f715"/>
                                        <text x="140" y="210" font-size="5" fill="#a855f7" text-anchor="middle" font-weight="600">5 pts</text>
                                        <circle cx="200" cy="198" r="6" fill="#a855f7" opacity="0.15"/>
                                        <text x="200" y="201" font-size="5" fill="#a855f7" text-anchor="middle" font-weight="700">TH</text>

                                        <!-- Column: Review -->
                                        <rect x="225" y="126" width="95" height="16" rx="4" fill="#f59e0b15"/>
                                        <text x="233" y="137" font-size="7" fill="#f59e0b" font-weight="700">Review</text>
                                        <text x="300" y="137" font-size="7" fill="#f59e0b" font-weight="600">3</text>

                                        <rect x="225" y="148" width="95" height="30" rx="5" fill="var(--surface)" stroke="#f59e0b30" stroke-width="0.75"/>
                                        <text x="233" y="161" font-size="6.5" fill="var(--text-dark)" font-weight="600">Payment flow</text>
                                        <rect x="233" y="167" width="28" height="8" rx="4" fill="#22c55e15"/>
                                        <text x="247" y="174" font-size="5" fill="#22c55e" text-anchor="middle" font-weight="600">13 pts</text>

                                        <rect x="225" y="184" width="95" height="30" rx="5" fill="var(--surface)" stroke="#f59e0b30" stroke-width="0.75"/>
                                        <text x="233" y="197" font-size="6.5" fill="var(--text-dark)" font-weight="600">Search index</text>
                                        <rect x="233" y="203" width="24" height="8" rx="4" fill="#6366f115"/>
                                        <text x="245" y="210" font-size="5" fill="#6366f1" text-anchor="middle" font-weight="600">8 pts</text>

                                        <!-- Column: Done -->
                                        <rect x="330" y="126" width="75" height="16" rx="4" fill="#22c55e15"/>
                                        <text x="338" y="137" font-size="7" fill="#22c55e" font-weight="700">Done</text>
                                        <text x="390" y="137" font-size="7" fill="#22c55e" font-weight="600">11</text>

                                        <rect x="330" y="148" width="75" height="30" rx="5" fill="#22c55e08" stroke="#22c55e25" stroke-width="0.5"/>
                                        <text x="338" y="161" font-size="6.5" fill="var(--text-dark)" font-weight="600">User CRUD</text>
                                        <text x="338" y="173" font-size="5" fill="#22c55e" font-weight="600">✓ 8 pts</text>

                                        <rect x="330" y="184" width="75" height="30" rx="5" fill="#22c55e08" stroke="#22c55e25" stroke-width="0.5"/>
                                        <text x="338" y="197" font-size="6.5" fill="var(--text-dark)" font-weight="600">CI/CD setup</text>
                                        <text x="338" y="209" font-size="5" fill="#22c55e" font-weight="600">✓ 5 pts</text>

                                        <!-- Burndown chart -->
                                        <rect x="15" y="228" width="200" height="98" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="25" y="248" font-size="8" fill="var(--text-dark)" font-weight="700">Sprint Burndown</text>
                                        <!-- Ideal line -->
                                        <line x1="30" y1="262" x2="200" y2="315" stroke="var(--border)" stroke-width="1" stroke-dasharray="3 3"/>
                                        <!-- Actual line -->
                                        <polyline points="30,262 50,265 70,260 90,258 110,248 130,240 150,230 165,220"
                                                  stroke="#6366f1" stroke-width="2" fill="none" stroke-linecap="round"/>
                                        <polygon points="30,262 50,265 70,260 90,258 110,248 130,240 150,230 165,220 165,315 30,315"
                                                 fill="#6366f1" opacity="0.06"/>
                                        <circle cx="165" cy="220" r="3.5" fill="var(--surface)" stroke="#6366f1" stroke-width="2"/>
                                        <text x="30" y="322" font-size="6" fill="var(--text-light)">Day 1</text>
                                        <text x="200" y="322" font-size="6" fill="var(--text-light)" text-anchor="end">Day 10</text>
                                        <text x="115" y="260" font-size="6" fill="#6366f1" font-weight="700">Ahead of schedule</text>

                                        <!-- Team allocation -->
                                        <rect x="225" y="228" width="180" height="98" rx="8" fill="var(--secondary-bg)" stroke="var(--border)" stroke-width="0.5"/>
                                        <text x="235" y="248" font-size="8" fill="var(--text-dark)" font-weight="700">Team Allocation</text>
                                        <!-- Members -->
                                        <circle cx="245" cy="270" r="8" fill="#3b82f6" opacity="0.15"/>
                                        <text x="245" y="273" font-size="6" fill="#3b82f6" text-anchor="middle" font-weight="700">JD</text>
                                        <text x="260" y="273" font-size="6.5" fill="var(--text-gray)">Frontend</text>
                                        <rect x="310" y="265" width="70" height="6" rx="3" fill="var(--border)"/>
                                        <rect x="310" y="265" width="58" height="6" rx="3" fill="#3b82f6"/>
                                        <text x="387" y="272" font-size="6" fill="var(--text-light)">82%</text>

                                        <circle cx="245" cy="290" r="8" fill="#a855f7" opacity="0.15"/>
                                        <text x="245" y="293" font-size="6" fill="#a855f7" text-anchor="middle" font-weight="700">TH</text>
                                        <text x="260" y="293" font-size="6.5" fill="var(--text-gray)">Backend</text>
                                        <rect x="310" y="285" width="70" height="6" rx="3" fill="var(--border)"/>
                                        <rect x="310" y="285" width="50" height="6" rx="3" fill="#a855f7"/>
                                        <text x="387" y="292" font-size="6" fill="var(--text-light)">71%</text>

                                        <circle cx="245" cy="310" r="8" fill="#22c55e" opacity="0.15"/>
                                        <text x="245" y="313" font-size="6" fill="#22c55e" text-anchor="middle" font-weight="700">NL</text>
                                        <text x="260" y="313" font-size="6.5" fill="var(--text-gray)">DevOps</text>
                                        <rect x="310" y="305" width="70" height="6" rx="3" fill="var(--border)"/>
                                        <rect x="310" y="305" width="42" height="6" rx="3" fill="#22c55e"/>
                                        <text x="387" y="312" font-size="6" fill="var(--text-light)">60%</text>
                                    </svg>

                                    @else
                                    {{-- Default fallback: growth chart --}}
                                    <svg viewBox="0 0 300 200" aria-hidden="true" style="width: 100%; max-width: 300px;">
                                        <path d="{{ $case['svg_path'] }}" fill="none" stroke="var(--primary)" stroke-width="3" opacity="0.8"/>
                                        @foreach($case['svg_points'] as $point)
                                        <circle cx="{{ $point['cx'] }}" cy="{{ $point['cy'] }}" r="{{ $point['r'] }}" fill="var(--primary)" opacity="{{ $point['r'] > 6 ? '1' : '0.7' }}"/>
                                        <text x="{{ $point['x'] }}" y="{{ $point['y'] }}" text-anchor="middle" font-size="10" fill="var(--text-dark)" opacity="0.8">{{ $point['label'] }}</text>
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
                <button id="prevBtn" aria-label="Previous case study" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); background: var(--surface); border: 1px solid var(--border); width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: all 0.3s ease; z-index: 10;">
                    <span class="material-symbols-rounded" aria-hidden="true" style="color: var(--primary); transition: color 0.3s ease;">chevron_left</span>
                </button>

                <button id="nextBtn" aria-label="Next case study" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: var(--surface); border: 1px solid var(--border); width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: all 0.3s ease; z-index: 10;">
                    <span class="material-symbols-rounded" aria-hidden="true" style="color: var(--primary); transition: color 0.3s ease;">chevron_right</span>
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

        // Touch/swipe support for mobile
        let touchStartX = 0;
        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        carousel.addEventListener('touchend', (e) => {
            const diff = touchStartX - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 50) updateCarousel(diff > 0 ? currentIndex + 1 : currentIndex - 1);
        }, { passive: true });

        // Keyboard navigation — scoped to carousel focus only
        carousel.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                updateCarousel(currentIndex - 1);
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
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
            this.style.background = 'var(--surface)';
            this.style.borderColor = 'var(--border)';
            this.querySelector('.material-symbols-rounded').style.color = 'var(--primary)';
        });

        nextBtn.addEventListener('mouseenter', function() {
            this.style.background = 'var(--primary)';
            this.style.borderColor = 'var(--primary)';
            this.querySelector('.material-symbols-rounded').style.color = 'white';
        });

        nextBtn.addEventListener('mouseleave', function() {
            this.style.background = 'var(--surface)';
            this.style.borderColor = 'var(--border)';
            this.querySelector('.material-symbols-rounded').style.color = 'var(--primary)';
        });
    })();
    </script>

    <!-- R&D Section -->
    <section id="rd" aria-labelledby="heading-rd" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label" style="color: var(--primary);">{{ __('index.section_rd') }}</span>
                <h2 id="heading-rd" class="section-title">{{ __('index.rd_title') }}</h2>
                <p class="section-subtitle">{{ __('index.rd_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; margin-top: 3rem;">

                <!-- HKSpace R&D Card -->
                <a href="{{ route('landing.blog.r_and_d') }}" style="text-decoration: none; display: block; background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid var(--border); border-top: 3px solid var(--primary); transition: box-shadow 0.25s ease, transform 0.25s ease; box-shadow: 0 4px 16px var(--shadow-color);" onmouseenter="this.style.transform='translateY(-2px)';this.style.boxShadow='0 12px 32px var(--shadow-hover)'" onmouseleave="this.style.transform='';this.style.boxShadow='0 4px 16px var(--shadow-color)'"  >
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
                        {{ __('index.rd_hkspace_desc') }}
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
                <a href="{{ route('landing.blog.r_and_d') }}" style="text-decoration: none; display: block; background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid var(--border); border-top: 3px solid var(--accent); transition: box-shadow 0.25s ease, transform 0.25s ease; box-shadow: 0 4px 16px var(--shadow-color);" onmouseenter="this.style.transform='translateY(-2px)';this.style.boxShadow='0 12px 32px var(--shadow-hover)'" onmouseleave="this.style.transform='';this.style.boxShadow='0 4px 16px var(--shadow-color)'"  >
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
                        {{ __('index.rd_ai_platform_desc') }}
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
                    {{ __('index.rd_closing') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section aria-labelledby="heading-testimonials" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_testimonials') }}</span>
                <h2 id="heading-testimonials" class="section-title">{{ __('index.testimonials_title') }}</h2>
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
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; position: relative; transition: all 0.25s ease;">
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
                    <span class="section-label" style="color: rgba(255,255,255,0.7);">{{ __('index.section_cta') }}</span>
                    <h2 style="font-size: 2rem; font-weight: 800; margin: 1rem 0 1rem 0; color: white; letter-spacing: -0.025em;">{{ __('index.cta_title') }}</h2>
                    <p style="color: rgba(255,255,255,0.88); font-size: 0.95rem; margin: 0; max-width: 500px; line-height: 1.75;">{{ __('index.cta_subtitle') }}</p>
                </div>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; position: relative; z-index: 1;">
                    <a href="{{ route('landing.contact') }}" class="btn-primary-v5" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: var(--btn-radius); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease;">
                        <span>{{ __('index.cta_consultation') }}</span>
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
