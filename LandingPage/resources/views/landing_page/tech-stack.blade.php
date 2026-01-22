@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Technology & Tech Stack
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                    Enterprise-grade technology: scalable, secure, reliable. Industry-proven standards.
                </p>
            </div>
        </div>
    </section>

    <!-- Tech Stack Matrix -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Complete Tech Stack</h2>
                <p class="section-subtitle">From frontend to cloud infrastructure</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $tech_categories = [
                    [
                        'title' => 'Frontend',
                        'icon' => 'web',
                        'technologies' => [
                            'React, Vue, Angular',
                            'TypeScript, modern JavaScript',
                            'Responsive Design (Mobile-first)',
                            'Performance optimization',
                            'PWA & Progressive Enhancement',
                            'SEO & Accessibility (WCAG 2.1)'
                        ]
                    ],
                    [
                        'title' => 'Backend & API',
                        'icon' => 'storage',
                        'technologies' => [
                            'Node.js, Python, Java, Go',
                            'RESTful APIs, GraphQL',
                            'Microservices architecture',
                            'Authentication & Authorization',
                            'Rate limiting & Security',
                            'Caching & CDN strategy'
                        ]
                    ],
                    [
                        'title' => 'Data & Database',
                        'icon' => 'database',
                        'technologies' => [
                            'PostgreSQL, MySQL, MongoDB',
                            'Redis, Elasticsearch',
                            'Data warehouse & BigQuery',
                            'ETL & real-time processing',
                            'Backup & disaster recovery',
                            'Database optimization & tuning'
                        ]
                    ],
                    [
                        'title' => 'Cloud & Infrastructure',
                        'icon' => 'cloud',
                        'technologies' => [
                            'AWS, GCP, Azure',
                            'Kubernetes & Docker',
                            'CI/CD pipelines (GitHub Actions, Jenkins)',
                            'Monitoring & alerting (Prometheus, DataDog)',
                            'Auto-scaling & load balancing',
                            'Infrastructure as Code (Terraform)'
                        ]
                    ],
                    [
                        'title' => 'Security & Compliance',
                        'icon' => 'shield',
                        'technologies' => [
                            'SSL/TLS encryption',
                            'OWASP security standards',
                            'GDPR & data privacy compliance',
                            'Security scanning & penetration testing',
                            'DDoS protection & WAF',
                            'Audit logging & compliance reporting'
                        ]
                    ],
                    [
                        'title' => 'DevOps & Tools',
                        'icon' => 'settings',
                        'technologies' => [
                            'Git & version control',
                            'Docker & container orchestration',
                            'Terraform & infrastructure automation',
                            'Monitoring & observability',
                            'Issue tracking & collaboration',
                            'Performance profiling & debugging'
                        ]
                    ],
                    [
                        'title' => 'Mobile & Cross-Platform',
                        'icon' => 'smartphone',
                        'technologies' => [
                            'React Native, Flutter',
                            'iOS (Swift) & Android (Kotlin)',
                            'Progressive Web Apps (PWA)',
                            'Offline-first architecture',
                            'Push notifications & deep linking',
                            'App Store & Play Store deployment'
                        ]
                    ],
                    [
                        'title' => 'AI & Machine Learning',
                        'icon' => 'psychology',
                        'technologies' => [
                            'OpenAI GPT, Claude, Gemini APIs',
                            'Custom ML models (TensorFlow, PyTorch)',
                            'Computer Vision & NLP',
                            'RAG & Vector databases (Pinecone)',
                            'Model training & fine-tuning',
                            'AI ethics & responsible AI'
                        ]
                    ],
                ];
                @endphp
                @foreach($tech_categories as $cat)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); color: white; padding: 2rem; display: flex; align-items: center; gap: 1rem;">
                        <div style="font-size: 2.5rem;">
                            <span class="material-symbols-rounded">{{ $cat['icon'] }}</span>
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin: 0;">
                            {{ $cat['title'] }}
                        </h3>
                    </div>
                    <div style="padding: 2rem;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            @foreach($cat['technologies'] as $tech)
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border); font-size: 0.95rem; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem;">check_circle</span>
                                {{ $tech }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Performance Metrics -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Performance Metrics</h2>
                <p class="section-subtitle">Enterprise-grade targets</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 2rem; text-align: center;">
                @php
                $metrics = [
                    ['metric' => '99.99%', 'label' => 'Uptime SLA', 'desc' => '~4.26 minutes downtime/year'],
                    ['metric' => '<100ms', 'label' => 'API Response Time', 'desc' => 'P99 latency'],
                    ['metric' => '>95', 'label' => 'Google Lighthouse Score', 'desc' => 'Performance + SEO'],
                    ['metric' => '<3s', 'label' => 'Page Load Time', 'desc' => 'On 3G network'],
                    ['metric' => '100/100', 'label' => 'Security Grade', 'desc' => 'Grade A+ from SSL Labs'],
                    ['metric' => '>90%', 'label' => 'Test Coverage', 'desc' => 'Unit + Integration'],
                ];
                @endphp
                @foreach($metrics as $m)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                        {{ $m['metric'] }}
                    </div>
                    <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        {{ $m['label'] }}
                    </div>
                    <div style="font-size: 0.85rem; color: var(--text-gray);">
                        {{ $m['desc'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Best Practices -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Multi-Platform Coverage</h2>
                <p class="section-subtitle">Web, mobile, desktop — build once, deploy anywhere</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; margin-bottom: 4rem;">
                @php
                $platforms = [
                    [
                        'icon' => 'web',
                        'title' => 'Web Applications',
                        'desc' => 'Responsive web applications across major browsers: Chrome, Safari, Firefox, Edge.',
                        'tech' => 'React, Vue, Angular, TypeScript',
                        'features' => ['PWA support', 'Offline mode', 'Cross-browser compatible', 'SEO optimized']
                    ],
                    [
                        'icon' => 'smartphone',
                        'title' => 'Mobile Apps',
                        'desc' => 'Native iOS & Android, or cross‑platform with React Native / Flutter.',
                        'tech' => 'React Native, Flutter, Swift, Kotlin',
                        'features' => ['Native performance', 'Push notifications', 'Biometric auth', 'App Store ready']
                    ],
                    [
                        'icon' => 'desktop_windows',
                        'title' => 'Desktop Applications',
                        'desc' => 'Cross‑platform desktop applications for Windows, macOS, and Linux.',
                        'tech' => 'Electron, Tauri, .NET MAUI',
                        'features' => ['Native OS integration', 'Auto-update', 'Offline support', 'System tray']
                    ],
                ];
                @endphp
                @foreach($platforms as $platform)
                <div style="background: white; border-radius: 12px; padding: 2.5rem; transition: all 0.3s ease; border: 1px solid var(--border);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(15, 107, 158, 0.15)';" onmouseout="this.style.transform=''; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1.5rem;">
                        <span class="material-symbols-rounded" style="font-size: 3rem;">{{ $platform['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">
                        {{ $platform['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ $platform['desc'] }}
                    </p>
                    <div style="background: var(--secondary-bg); padding: 0.75rem 1rem; border-radius: 6px; margin-bottom: 1.5rem;">
                        <div style="font-size: 0.85rem; font-weight: 600; color: var(--primary); margin-bottom: 0.3rem;">TECH STACK</div>
                        <div style="font-size: 0.9rem; color: var(--text-dark);">{{ $platform['tech'] }}</div>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach($platform['features'] as $feature)
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span class="material-symbols-rounded" style="color: var(--accent); font-size: 1.25rem;">check_circle</span>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Best Practices -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Engineering Best Practices</h2>
                <p class="section-subtitle">Applying lessons learned from industry leaders</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $practices = [
                    ['icon' => 'psychology', 'title' => 'Microservices Architecture', 'company' => 'Reference: Netflix', 'desc' => 'Decompose into independent services for scale and isolated deployments.'],
                    ['icon' => 'auto_fix_high', 'title' => 'CI/CD Automation', 'company' => 'Reference: Amazon', 'desc' => 'Automated testing before deploy; high deployment frequency.'],
                    ['icon' => 'security', 'title' => 'Security by Design', 'company' => 'Reference: Google', 'desc' => 'Security checks from development stage; avoid post‑production patching.'],
                    ['icon' => 'analytics', 'title' => 'Data-Driven Decisions', 'company' => 'Reference: Meta', 'desc' => 'A/B testing, metrics tracking, centralized analytics.'],
                    ['icon' => 'trending_up', 'title' => 'Infrastructure as Code', 'company' => 'Reference: AWS', 'desc' => 'Terraform/CloudFormation for versionable, reproducible infrastructure.'],
                    ['icon' => 'manage_accounts', 'title' => 'Team Collaboration', 'company' => 'Reference: Google', 'desc' => 'Async communication, clear documentation, knowledge sharing.'],
                ];
                @endphp
                @foreach($practices as $p)
                <div style="background: white; border-radius: 12px; padding: 2rem; transition: all 0.3s ease; border: 1px solid var(--border);" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $p['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.3rem;">
                        {{ $p['title'] }}
                    </h3>
                    {{-- <div style="font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 0.75rem;">
                        {{ $p['company'] }}
                    </div> --}}
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        {{ $p['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Build with the Right Technology</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Optimized tech stack = better product and faster growth
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Architecture Consultation</span>
                </a>
            </div>
        </div>
    </section>

@endsection
