@extends('layouts.main')

@section('content')

    <!-- Hero Section -->
    <section class="hero" style="min-height: 90vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <style>
            @media (max-width: 991px) {
                .case-study-grid {
                    grid-template-columns: 1fr !important;
                }
            }
            
            @media (max-width: 767px) {
                .hero {
                    min-height: auto;
                    padding: 3rem 0 !important;
                }
                .hero-grid {
                    grid-template-columns: 1fr !important;
                    gap: 2rem !important;
                }
                .hero h1 {
                    font-size: 2rem !important;
                }
                .hero-content p {
                    font-size: 0.95rem !important;
                }
                .hero-stats {
                    gap: 1.5rem !important;
                    grid-template-columns: 1fr !important;
                }
                .hero-stats > div {
                    font-size: 1.5rem !important;
                }
                .hero-stats > div > div:first-child {
                    font-size: 1.75rem !important;
                }
                .hero-svg-box {
                    min-height: 300px !important;
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
            <div class="hero-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                <div class="hero-content">
                    <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                        Enterprise Software<br><span style="color: var(--primary);">Development Partner</span>
                    </h1>
                    <p style="font-size: 1.15rem; color: var(--text-gray); margin-bottom: 2.5rem; line-height: 1.8;">
                        HKIncotech is a software development partner in Southeast Asia. We build complex systems, AI platforms, and SaaS solutions using SCRUM methodology with 12+ years of experience.
                    </p>
                    <div style="display: flex; gap: 1.25rem; margin-bottom: 3rem; flex-wrap: wrap;">
                        <a href="{{ route('landing.contact') }}" class="btn-primary-v5">
                            <span>Free Consultation</span>
                            <span class="material-symbols-rounded">arrow_forward</span>
                        </a>
                        <a href="{{ route('landing.services') }}" class="btn-secondary-v5">
                            <span>View Services</span>
                            <span class="material-symbols-rounded">explore</span>
                        </a>
                    </div>
                    <div class="hero-stats" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 3rem; padding-top: 2.5rem; border-top: 1px solid var(--border);">
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">12+</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Years Experience</div>
                        </div>
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">50+</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Projects Completed</div>
                        </div>
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">99.99%</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Uptime SLA</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-svg-box" style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; min-height: 450px;">
                    <svg viewBox="0 0 350 350" style="width: 100%; max-width: 350px;">
                        <!-- Background circles -->
                        <circle cx="175" cy="175" r="160" fill="none" stroke="#0f6b9e" stroke-width="1" opacity="0.1"/>
                        <circle cx="175" cy="175" r="120" fill="none" stroke="#0f6b9e" stroke-width="1" opacity="0.15"/>
                        <circle cx="175" cy="175" r="80" fill="none" stroke="#0f6b9e" stroke-width="1" opacity="0.2"/>
                        
                        <!-- Nodes -->
                        <circle cx="175" cy="80" r="12" fill="#0f6b9e"/>
                        <circle cx="265" cy="130" r="12" fill="#0f6b9e"/>
                        <circle cx="285" cy="220" r="12" fill="#0f6b9e"/>
                        <circle cx="175" cy="270" r="12" fill="#0f6b9e"/>
                        <circle cx="65" cy="220" r="12" fill="#0f6b9e"/>
                        <circle cx="85" cy="130" r="12" fill="#0f6b9e"/>
                        <circle cx="175" cy="175" r="16" fill="#059669"/>
                        
                        <!-- Connections -->
                        <line x1="175" y1="80" x2="265" y2="130" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="265" y1="130" x2="285" y2="220" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="285" y1="220" x2="175" y2="270" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="175" y1="270" x2="65" y2="220" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="65" y1="220" x2="85" y2="130" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="85" y1="130" x2="175" y2="80" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        
                        <!-- Center to nodes -->
                        <line x1="175" y1="175" x2="175" y2="80" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="265" y2="130" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="285" y2="220" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="175" y2="270" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="65" y2="220" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="85" y2="130" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        
                        <!-- Labels -->
                        <text x="175" y="55" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Frontend</text>
                        <text x="290" y="105" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Backend</text>
                        <text x="305" y="225" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Database</text>
                        <text x="175" y="295" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">DevOps</text>
                        <text x="35" y="225" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Security</text>
                        <text x="55" y="105" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">AI/ML</text>
                        
                        <text x="175" y="180" text-anchor="middle" font-size="14" fill="#059669" font-weight="bold">SCRUM</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section id="services" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Complete Capabilities</h2>
                <p class="section-subtitle">Enterprise-grade software solutions from custom development to SaaS platforms</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease; position: relative;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">code</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Custom Software Development</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Application development from scratch with cloud-native architecture, microservices, and DevOps automation
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Web & Mobile Applications
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Distributed Systems
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Real-time Processing
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Data Pipelines
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">View Details</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">workspace_premium</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">SaaS Platform: HKSpace</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Multi-tenant enterprise management platform with unlimited scalability
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Task Management Engine
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Workflow Automation
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Real-time Collaboration
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Advanced Analytics
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">View Details</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">psychology</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">AI Knowledge Platform</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        AI platform integrating NLP, RAG, vector databases, and custom LLM
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Natural Language Processing
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Semantic Search
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Knowledge Graph
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            LLM Integration
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">View Details</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">shield</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Security & Compliance</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Enterprise-grade security architecture complying with OWASP, ISO 27001, SOC 2
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Zero Trust Architecture
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Data Encryption
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Access Control
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span style="width: 6px; height: 6px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            Incident Response
                        </li>
                    </ul>
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRUM Process Preview -->
    <section id="process">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">SCRUM Process</h2>
                <p class="section-subtitle">Agile development methodology for real-time progress visibility</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem;">
                @php
                $processes = [
                    ['icon' => 'lightbulb', 'title' => 'Discovery', 'desc' => 'Consulting, planning'],
                    ['icon' => 'architecture', 'title' => 'Design', 'desc' => 'Wireframe, architecture'],
                    ['icon' => 'code', 'title' => 'Development', 'desc' => 'Sprint cycles'],
                    ['icon' => 'verified', 'title' => 'QA Testing', 'desc' => 'Comprehensive testing'],
                    ['icon' => 'cloud_upload', 'title' => 'Deploy', 'desc' => 'Product launch'],
                    ['icon' => 'support_agent', 'title' => 'Support', 'desc' => '24/7 support'],
                ];
                @endphp
                @foreach($processes as $p)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem 1.5rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $p['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $p['title'] }}</h3>
                    <p style="font-size: 0.9rem; color: var(--text-gray);">{{ $p['desc'] }}</p>
                </div>
                @endforeach
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('landing.scrum') }}" class="btn-primary-v5">
                    <span>Learn Detailed Process</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Technology Stack Preview -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Technology Stack</h2>
                <p class="section-subtitle">Enterprise-grade technologies across 8 categories, 50+ frameworks & tools</p>
            </div>
            
            <!-- Tech Stack Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                @php
                $tech_categories = [
                    [
                        'icon' => 'web',
                        'title' => 'Frontend & UI',
                        'techs' => ['React, Vue, Angular', 'TypeScript, Next.js', 'TailwindCSS, Material Design', 'PWA & Performance'],
                        'color' => 'rgb(59, 130, 246)'
                    ],
                    [
                        'icon' => 'storage',
                        'title' => 'Backend & API',
                        'techs' => ['Node.js, Python, Java, Go', 'FastAPI, NestJS', 'GraphQL, REST APIs', 'Microservices'],
                        'color' => 'rgb(15, 107, 158)'
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Data & Database',
                        'techs' => ['PostgreSQL, MongoDB, MySQL', 'Redis, Elasticsearch', 'Vector Databases', 'BigQuery Data Warehouse'],
                        'color' => 'rgb(34, 197, 94)'
                    ],
                    [
                        'icon' => 'cloud',
                        'title' => 'Cloud & Infrastructure',
                        'techs' => ['AWS, GCP, Azure', 'Kubernetes, Docker', 'CI/CD Automation', 'Infrastructure as Code'],
                        'color' => 'rgb(168, 85, 247)'
                    ],
                    [
                        'icon' => 'shield',
                        'title' => 'Security & Compliance',
                        'techs' => ['SSL/TLS Encryption', 'OWASP Standards', 'GDPR Compliance', 'Penetration Testing'],
                        'color' => 'rgb(239, 68, 68)'
                    ],
                    [
                        'icon' => 'smartphone',
                        'title' => 'Mobile Development',
                        'techs' => ['React Native, Flutter', 'iOS (Swift), Android (Kotlin)', 'Progressive Web Apps', 'App Store Deployment'],
                        'color' => 'rgb(249, 115, 22)'
                    ],
                    [
                        'icon' => 'psychology',
                        'title' => 'AI & Machine Learning',
                        'techs' => ['OpenAI APIs', 'Custom ML Models', 'Computer Vision & NLP', 'RAG & Vector Search'],
                        'color' => 'rgb(14, 165, 233)'
                    ],
                    [
                        'icon' => 'settings',
                        'title' => 'DevOps & Tools',
                        'techs' => ['Git, GitHub, GitLab', 'Docker, Terraform', 'Monitoring & Logging', 'Performance Tools'],
                        'color' => 'rgb(236, 72, 153)'
                    ],
                ];
                @endphp
                @foreach($tech_categories as $cat)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; transition: all 0.3s ease;" 
                     onmouseover="this.style.borderColor='{{ $cat['color'] }}'; this.style.boxShadow='0 8px 20px rgba(15, 107, 158, 0.1)'; this.style.transform='translateY(-2px)';" 
                     onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
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
            <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); margin-bottom: 2.5rem;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 2rem; text-align: center;">
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">8</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">Tech Categories</div>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">50+</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">Frameworks & Tools</div>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">99.99%</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">Uptime SLA</div>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;"><100ms</div>
                        <div style="color: var(--text-gray); font-size: 0.9rem;">API Response Time</div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center;">
                <a href="{{ route('landing.tech-stack') }}" class="btn-secondary-v5" style="display: inline-flex; align-items: center; gap: 0.75rem;">
                    <span>View Complete Tech Stack with Details</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Scaling Journey -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Scaling Architecture</h2>
                <p class="section-subtitle">From MVP to 10M+ concurrent users - 6 enterprise-grade scaling phases</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem;">
                @php
                $scaling_phases = [
                    ['phase' => 'Phase 1', 'title' => 'MVP Launch', 'users' => '100-1K users', 'icon' => 'rocket_launch'],
                    ['phase' => 'Phase 2', 'title' => 'Growth', 'users' => '1K-10K users', 'icon' => 'trending_up'],
                    ['phase' => 'Phase 3', 'title' => 'Scaling', 'users' => '10K-100K users', 'icon' => 'expand'],
                    ['phase' => 'Phase 4', 'title' => 'Multi-region', 'users' => '100K-1M users', 'icon' => 'public'],
                    ['phase' => 'Phase 5', 'title' => 'Hyper-scale', 'users' => '1M-10M users', 'icon' => 'auto_awesome'],
                    ['phase' => 'Phase 6', 'title' => 'Enterprise', 'users' => '10M+ users', 'icon' => 'domain'],
                ];
                @endphp
                @foreach($scaling_phases as $sp)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem 1.5rem; text-align: center; position: relative; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary); color: white; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 700;">
                        {{ $sp['phase'] }}
                    </div>
                    <div style="font-size: 2.5rem; color: var(--primary); margin: 1rem 0;">
                        <span class="material-symbols-rounded">{{ $sp['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $sp['title'] }}</h3>
                    <p style="font-size: 0.85rem; color: var(--text-gray);">{{ $sp['users'] }}</p>
                </div>
                @endforeach
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('landing.scaling') }}" class="btn-primary-v5">
                    <span>Explore Scaling Details</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Why Choose HKIncotech?</h2>
                <p class="section-subtitle">Reliable software development partner</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $features = [
                    ['icon' => 'verified_user', 'title' => 'Deep Expertise', 'desc' => '12+ years building enterprise-grade systems'],
                    ['icon' => 'groups', 'title' => 'Expert Team', 'desc' => '100+ specialized engineers & architects'],
                    ['icon' => 'speed', 'title' => 'Fast Delivery', 'desc' => 'MVP in 4-8 weeks, flexible scaling'],
                    ['icon' => 'shield_lock', 'title' => 'High Security', 'desc' => 'ISO 27001, SOC 2, OWASP Level 3'],
                    ['icon' => 'trending_up', 'title' => 'Scalable Architecture', 'desc' => 'From 100 to 10M+ concurrent users'],
                    ['icon' => 'handshake', 'title' => 'True Partnership', 'desc' => 'Strategic partner, not just a vendor'],
                ];
                @endphp
                @foreach($features as $f)
                <div style="background: white; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $f['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">{{ $f['title'] }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Case Study -->
    <section class="opacity-75">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Success Story <span class="badge  rounded-pill bg-warning">Draft</span></h2>
                <p class="section-subtitle">Featured case study from our portfolio</p>
            </div>
            
            <div style="background: white; border: 1px solid var(--border); border-radius: 12px; overflow: hidden; box-shadow: 0 10px 40px rgba(15, 107, 158, 0.08);">
                <div class="case-study-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 0;">
                    <div style="padding: 3rem;">
                        <div style="display: inline-block; background: var(--accent-light); color: var(--accent); padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.85rem; font-weight: 700; margin-bottom: 1.5rem;">
                            SaaS Platform
                        </div>
                        <h3 style="font-size: 2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1rem; line-height: 1.3;">
                            HKSpace: Scaling to 50K+ Active Users
                        </h3>
                        <p style="color: var(--text-gray); font-size: 1rem; line-height: 1.8; margin-bottom: 2rem;">
                            Multi-tenant enterprise management platform built from scratch. From MVP to production with 50,000+ active users in 18 months.
                        </p>
                        
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 2rem;">
                            <div>
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">50K+</div>
                                <div style="font-size: 0.85rem; color: var(--text-gray); margin-top: 0.25rem;">Active Users</div>
                            </div>
                            <div>
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">99.9%</div>
                                <div style="font-size: 0.85rem; color: var(--text-gray); margin-top: 0.25rem;">Uptime</div>
                            </div>
                            <div>
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">18 months</div>
                                <div style="font-size: 0.85rem; color: var(--text-gray); margin-top: 0.25rem;">Timeline</div>
                            </div>
                        </div>
                        
                        <a href="{{ route('landing.case-studies') }}" style="color: var(--primary); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <span>Read Full Case Study</span>
                            <span class="material-symbols-rounded">arrow_forward</span>
                        </a>
                    </div>
                    
                    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%); padding: 3rem; display: flex; align-items: center; justify-content: center;">
                        <svg viewBox="0 0 300 200" style="width: 100%; max-width: 300px;">
                            <!-- Growth Curve -->
                            <path d="M 20 180 Q 80 160, 100 140 T 180 80 T 280 20" 
                                  fill="none" 
                                  stroke="white" 
                                  stroke-width="3" 
                                  opacity="0.8"/>
                            <circle cx="20" cy="180" r="6" fill="white" opacity="0.9"/>
                            <circle cx="100" cy="140" r="6" fill="white" opacity="0.9"/>
                            <circle cx="180" cy="80" r="6" fill="white" opacity="0.9"/>
                            <circle cx="280" cy="20" r="8" fill="white"/>
                            
                            <!-- Labels -->
                            <text x="20" y="195" text-anchor="middle" font-size="10" fill="white" opacity="0.8">MVP</text>
                            <text x="100" y="155" text-anchor="middle" font-size="10" fill="white" opacity="0.8">10K</text>
                            <text x="180" y="95" text-anchor="middle" font-size="10" fill="white" opacity="0.8">30K</text>
                            <text x="280" y="35" text-anchor="middle" font-size="10" fill="white">50K+</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="opacity-75" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">What Our Clients Say <span class="badge  rounded-pill bg-warning">Draft</span></h2>
                <p class="section-subtitle">Feedback from our partners and clients</p>
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
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; position: relative; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="color: var(--primary); font-size: 3rem; line-height: 1; margin-bottom: 1rem; opacity: 0.3;">"</div>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem; font-style: italic;">
                        <?php echo $t['quote']; ?>
                    </p>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary), var(--accent)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.2rem;">
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
                    <span>View More Case Studies & Testimonials</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section>
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 4rem 2rem; text-align: center; color: white; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; right: 0; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; transform: translate(30%, -30%);"></div>
                <div style="position: absolute; bottom: 0; left: 0; width: 200px; height: 200px; background: rgba(255,255,255,0.05); border-radius: 50%; transform: translate(-30%, 30%);"></div>
                
                <div style="position: relative; z-index: 1;">
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Ready to Start Your Project?</h2>
                    <p style="font-size: 1.1rem; margin-bottom: 2.5rem; opacity: 0.95; max-width: 600px; margin-left: auto; margin-right: auto;">
                        Schedule a free 30-minute consultation to discuss your project. We'll provide optimal solutions and detailed pricing.
                    </p>
                    <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                        <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='var(--secondary-bg)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)';" onmouseout="this.style.backgroundColor='white'; this.style.transform=''; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)';">
                            <span>Schedule Consultation</span>
                            <span class="material-symbols-rounded">arrow_forward</span>
                        </a>
                        <a href="{{ route('landing.pricing') }}" style="background: transparent; color: white; padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; border: 2px solid white; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)';" onmouseout="this.style.backgroundColor='transparent';">
                            <span>View Cost & Plans</span>
                            <span class="material-symbols-rounded">receipt_long</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
