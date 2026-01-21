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
                        Xây Dựng Phần Mềm<br><span style="color: var(--primary);">Doanh Nghiệp Quy Mô Toàn Cầu</span>
                    </h1>
                    <p style="font-size: 1.15rem; color: var(--text-gray); margin-bottom: 2.5rem; line-height: 1.8;">
                        HKIncotech là partner phát triển phần mềm hàng đầu Đông Nam Á. Chúng tôi xây dựng hệ thống phức tạp, AI platform, SaaS solutions theo SCRUM methodology với 12+ năm kinh nghiệm.
                    </p>
                    <div style="display: flex; gap: 1.25rem; margin-bottom: 3rem; flex-wrap: wrap;">
                        <a href="{{ route('landing.contact') }}" class="btn-primary-v5">
                            <span>Tư Vấn Miễn Phí</span>
                            <span class="material-symbols-rounded">arrow_forward</span>
                        </a>
                        <a href="{{ route('landing.services') }}" class="btn-secondary-v5">
                            <span>Khám Phá Dịch Vụ</span>
                            <span class="material-symbols-rounded">explore</span>
                        </a>
                    </div>
                    <div class="hero-stats" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 3rem; padding-top: 2.5rem; border-top: 1px solid var(--border);">
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">12+</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Năm Kinh Nghiệm</div>
                        </div>
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">150+</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Dự Án Hoàn Thành</div>
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
                <h2 class="section-title">Khả Năng Toàn Diện</h2>
                <p class="section-subtitle">Cung cấp giải pháp phần mềm enterprise-grade từ phát triển custom đến SaaS platform</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease; position: relative;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">code</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Custom Software Development</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Phát triển ứng dụng từ đầu với kiến trúc cloud-native, microservices, và DevOps automation
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
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">workspace_premium</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">SaaS Platform: HKSpace</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Nền tảng quản lý doanh nghiệp multi-tenant với khả năng mở rộng vô hạn
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
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">psychology</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">AI Knowledge Platform</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Nền tảng AI tích hợp NLP, RAG, vector databases, và custom LLM
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
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">shield</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Security & Compliance</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Kiến trúc bảo mật enterprise-grade tuân thủ OWASP, ISO 27001, SOC 2
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
                    <a href="{{ route('landing.services') }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRUM Process Preview -->
    <section id="process">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Quy Trình SCRUM</h2>
                <p class="section-subtitle">Phương pháp phát triển agile giúp bạn thấy tiến độ real-time</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem;">
                @php
                $processes = [
                    ['icon' => 'lightbulb', 'title' => 'Khám Phá', 'desc' => 'Tư vấn, lập kế hoạch'],
                    ['icon' => 'architecture', 'title' => 'Thiết Kế', 'desc' => 'Wireframe, kiến trúc'],
                    ['icon' => 'code', 'title' => 'Phát Triển', 'desc' => 'Sprint cycles'],
                    ['icon' => 'verified', 'title' => 'QA Testing', 'desc' => 'Kiểm thử toàn diện'],
                    ['icon' => 'cloud_upload', 'title' => 'Deploy', 'desc' => 'Launch sản phẩm'],
                    ['icon' => 'support_agent', 'title' => 'Support', 'desc' => '24/7 hỗ trợ'],
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
                    <span>Tìm Hiểu Quy Trình Chi Tiết</span>
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
                <p class="section-subtitle">Công nghệ hiện đại được sử dụng bởi các công ty hàng đầu thế giới</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $tech_categories = [
                    [
                        'icon' => 'devices',
                        'title' => 'Frontend & UI',
                        'techs' => ['React.js / Vue.js / Next.js', 'TypeScript', 'TailwindCSS', 'Material Design', 'Responsive Architecture']
                    ],
                    [
                        'icon' => 'storage',
                        'title' => 'Backend & API',
                        'techs' => ['Node.js / Python / Java', 'FastAPI / NestJS', 'GraphQL / REST API', 'Microservices', 'Message Queues']
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Data & Storage',
                        'techs' => ['PostgreSQL / MongoDB', 'Redis / Elasticsearch', 'Vector Databases', 'Data Warehousing', 'Cloud Object Storage']
                    ],
                    [
                        'icon' => 'cloud',
                        'title' => 'Cloud & DevOps',
                        'techs' => ['AWS / GCP / Azure', 'Kubernetes / Docker', 'Terraform / IaC', 'CI/CD Automation', 'Monitoring & Logging']
                    ],
                ];
                @endphp
                @foreach($tech_categories as $cat)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                        <span class="material-symbols-rounded" style="font-size: 2rem; color: var(--primary);">{{ $cat['icon'] }}</span>
                        <h3 style="font-size: 1.2rem; font-weight: 700; color: var(--text-dark); margin: 0;">{{ $cat['title'] }}</h3>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach($cat['techs'] as $tech)
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem; border-bottom: 1px solid var(--border);">
                            <span style="width: 4px; height: 4px; background: var(--primary); border-radius: 50%; flex-shrink: 0;"></span>
                            {{ $tech }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('landing.tech-stack') }}" class="btn-secondary-v5">
                    <span>Xem Tech Stack Đầy Đủ</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Scaling Journey -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Kiến Trúc Mở Rộng</h2>
                <p class="section-subtitle">Từ MVP đến 10M+ concurrent users - 6 giai đoạn scaling chuẩn enterprise</p>
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
                    <span>Khám Phá Chi Tiết Scaling</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Tại Sao Chọn HKIncotech?</h2>
                <p class="section-subtitle">Partner phát triển phần mềm đáng tin cậy</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $features = [
                    ['icon' => 'verified_user', 'title' => 'Kinh Nghiệm Sâu', 'desc' => '12+ năm xây dựng hệ thống enterprise-grade'],
                    ['icon' => 'groups', 'title' => 'Team Giỏi Giang', 'desc' => '100+ engineers & architects chuyên gia'],
                    ['icon' => 'speed', 'title' => 'Delivery Nhanh', 'desc' => 'MVP trong 4-8 tuần, scale linh hoạt'],
                    ['icon' => 'shield_lock', 'title' => 'Bảo Mật Cao', 'desc' => 'ISO 27001, SOC 2, OWASP Level 3'],
                    ['icon' => 'trending_up', 'title' => 'Kiến Trúc Scalable', 'desc' => 'Từ 100 → 10M+ concurrent users'],
                    ['icon' => 'handshake', 'title' => 'Partnership', 'desc' => 'Strategic partner, không chỉ vendor'],
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
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Success Story</h2>
                <p class="section-subtitle">Case study nổi bật từ portfolio của chúng tôi</p>
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
                            Nền tảng quản lý doanh nghiệp multi-tenant được xây dựng từ đầu. Từ MVP đến production với 50,000+ active users trong 18 tháng.
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
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">18 tháng</div>
                                <div style="font-size: 0.85rem; color: var(--text-gray); margin-top: 0.25rem;">Timeline</div>
                            </div>
                        </div>
                        
                        <a href="{{ route('landing.case-studies') }}" style="color: var(--primary); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <span>Đọc Case Study Đầy Đủ</span>
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

@endsection
