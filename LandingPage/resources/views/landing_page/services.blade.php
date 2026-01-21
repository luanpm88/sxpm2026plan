@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Dịch Vụ & Giải Pháp
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                    4 dịch vụ chính toàn diện giải quyết toàn bộ nhu cầu phần mềm, từ MVP đến enterprise solutions
                </p>
                <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                    Chúng tôi kết hợp công nghệ tiên tiến, best practices toàn cầu, và deep domain expertise để xây dựng giải pháp tối ưu cho business của bạn.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid Overview -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">4 Dịch Vụ Chính</h2>
                <p class="section-subtitle">Giải pháp toàn diện từ development đến deployment & scaling</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $service_overview = [
                    ['num' => 1, 'icon' => 'code', 'title' => 'Custom Software Development', 'desc' => 'Xây dựng ứng dụng từ đầu với kiến trúc cloud-native, microservices, hiệu năng tối ưu'],
                    ['num' => 2, 'icon' => 'workspace_premium', 'title' => 'SaaS Platform', 'desc' => 'Nền tảng multi-tenant production-ready. HKSpace có 50K+ users đang hoạt động'],
                    ['num' => 3, 'icon' => 'psychology', 'title' => 'AI Knowledge Platform', 'desc' => 'NLP, RAG, LLM integration. Xây dựng AI-powered solutions thông minh'],
                    ['num' => 4, 'icon' => 'shield', 'title' => 'Security & Compliance', 'desc' => 'Kiến trúc bảo mật enterprise. ISO 27001, SOC 2, GDPR, PCI DSS compliant'],
                ];
                @endphp
                @foreach($service_overview as $s)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: var(--primary); color: white; border-radius: 50%; font-weight: 800; font-size: 1.3rem; margin-bottom: 1rem;">
                        {{ $s['num'] }}
                    </div>
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $s['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $s['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        {{ $s['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service 1: Custom Software Development (DETAILED) -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">1. Custom Software Development</h2>
                <p class="section-subtitle">Xây dựng ứng dụng từ khái niệm đến production</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Phát Triển Toàn Diện</h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        Từ MVP nhanh chóng đến production-grade systems. Chúng tôi chuyên phát triển:
                    </p>
                    <ul style="list-style: none; margin-bottom: 1.5rem;">
                        @php
                        $dev_services = [
                            'Web & Mobile Applications (React, Vue, React Native, Flutter)',
                            'Distributed Systems (Microservices, Event-driven architecture)',
                            'Real-time Processing (WebSockets, message queues)',
                            'Data Pipelines & Analytics (ETL, data warehousing)',
                            'Enterprise Integrations (API, webhooks, third-party systems)',
                            'Cloud-native Architecture (Kubernetes, serverless, Docker)'
                        ];
                        @endphp
                        @foreach($dev_services as $item)
                        <li style="padding: 0.6rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.75rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: 800;">✓</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); text-align: center;">
                    <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                        <!-- Frontend -->
                        <rect x="40" y="30" width="70" height="50" fill="#0f6b9e" rx="6"/>
                        <text x="75" y="65" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Frontend</text>
                        
                        <!-- API -->
                        <rect x="155" y="30" width="70" height="50" fill="#0f6b9e" rx="6"/>
                        <text x="190" y="65" text-anchor="middle" font-size="11" fill="white" font-weight="bold">API</text>
                        
                        <!-- Database -->
                        <rect x="40" y="130" width="70" height="50" fill="#059669" rx="6"/>
                        <text x="75" y="165" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Database</text>
                        
                        <!-- Cache/Queue -->
                        <rect x="155" y="130" width="70" height="50" fill="#10b981" rx="6"/>
                        <text x="190" y="165" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Cache/Queue</text>
                        
                        <!-- Mobile -->
                        <rect x="97" y="230" width="70" height="30" fill="#f59e0b" rx="6"/>
                        <text x="132" y="251" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Mobile</text>
                        
                        <!-- Connections -->
                        <line x1="75" y1="80" x2="75" y2="130" stroke="#0f6b9e" stroke-width="2"/>
                        <line x1="190" y1="80" x2="190" y2="130" stroke="#0f6b9e" stroke-width="2"/>
                        <line x1="110" y1="155" x2="155" y2="155" stroke="#059669" stroke-width="2"/>
                        <line x1="132" y1="180" x2="132" y2="230" stroke="#f59e0b" stroke-width="2"/>
                    </svg>
                </div>
            </div>
            
            <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Tech Stack Sử Dụng</h4>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div><strong style="color: var(--primary);">Frontend:</strong> React, Vue, Next.js, TypeScript</div>
                    <div><strong style="color: var(--primary);">Backend:</strong> Node.js, Python, Java, Go</div>
                    <div><strong style="color: var(--primary);">Database:</strong> PostgreSQL, MongoDB, Redis</div>
                    <div><strong style="color: var(--primary);">DevOps:</strong> AWS, GCP, Kubernetes, Terraform</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 2: SaaS Platform -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">2. SaaS Platform</h2>
                <p class="section-subtitle">Nền tảng multi-tenant production-ready với 50K+ users</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); text-align: center;">
                    <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                        <!-- Multiple users -->
                        <circle cx="70" cy="60" r="20" fill="#0f6b9e"/>
                        <circle cx="140" cy="40" r="20" fill="#0f6b9e"/>
                        <circle cx="210" cy="60" r="20" fill="#0f6b9e"/>
                        
                        <!-- Central Platform -->
                        <rect x="100" y="110" width="80" height="80" fill="#059669" rx="8"/>
                        <text x="140" y="150" text-anchor="middle" font-size="12" fill="white" font-weight="bold">SaaS Platform</text>
                        <text x="140" y="165" text-anchor="middle" font-size="10" fill="white">Multi-tenant</text>
                        
                        <!-- Database -->
                        <rect x="110" y="220" width="60" height="30" fill="#10b981" rx="6"/>
                        <text x="140" y="241" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Database</text>
                        
                        <!-- Connections -->
                        <line x1="70" y1="80" x2="120" y2="110" stroke="#0f6b9e" stroke-width="2"/>
                        <line x1="140" y1="60" x2="140" y2="110" stroke="#0f6b9e" stroke-width="2"/>
                        <line x1="210" y1="80" x2="160" y2="110" stroke="#0f6b9e" stroke-width="2"/>
                        <line x1="140" y1="190" x2="140" y2="220" stroke="#059669" stroke-width="2"/>
                    </svg>
                </div>
                
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">HKSpace - Flagship SaaS Platform</h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        Nền tảng collaboration & task management hiện có 50K+ users đang sử dụng. Proof of concept cho khả năng xây dựng SaaS thành công.
                    </p>
                    <ul style="list-style: none; margin-bottom: 1.5rem;">
                        @php
                        $saas_features = [
                            'Multi-tenant Architecture (Data isolation, tenant customization)',
                            'Real-time Collaboration (WebSocket, live updates)',
                            'Task & Workflow Management',
                            'Advanced Analytics & Reporting',
                            'Enterprise Integrations (Slack, GitHub, Jira)',
                            'Auto-scaling Infrastructure',
                            'SLA 99.99% Uptime Guarantee'
                        ];
                        @endphp
                        @foreach($saas_features as $item)
                        <li style="padding: 0.6rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.75rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--accent); font-weight: 800;">✓</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 3: AI Knowledge Platform -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">3. AI Knowledge Platform</h2>
                <p class="section-subtitle">NLP, RAG, LLM Integration - Xây dựng AI-powered solutions</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Công Nghệ AI Tiên Tiến</h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        Tích hợp các công nghệ AI mới nhất để xây dựng intelligent systems:
                    </p>
                    <ul style="list-style: none; margin-bottom: 1.5rem;">
                        @php
                        $ai_features = [
                            'Natural Language Processing (NLP) - Text analysis, sentiment',
                            'Retrieval-Augmented Generation (RAG) - Semantic search',
                            'LLM Integration (GPT-4, Claude, Llama) - Intelligent chatbots',
                            'Vector Databases (Pinecone, Weaviate) - Semantic storage',
                            'Knowledge Graphs - Entity relationships, reasoning',
                            'Document Processing - OCR, extraction, summarization',
                            'Fine-tuning & Custom Models - Domain-specific AI'
                        ];
                        @endphp
                        @foreach($ai_features as $item)
                        <li style="padding: 0.6rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.75rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: 800;">✓</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); text-align: center;">
                    <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                        <!-- User Input -->
                        <rect x="20" y="30" width="60" height="40" fill="#0f6b9e" rx="6"/>
                        <text x="50" y="58" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Query</text>
                        
                        <!-- NLP Processing -->
                        <circle cx="140" cy="50" r="30" fill="#f59e0b" opacity="0.8"/>
                        <text x="140" y="48" text-anchor="middle" font-size="10" fill="white" font-weight="bold">NLP</text>
                        <text x="140" y="62" text-anchor="middle" font-size="9" fill="white">Processing</text>
                        
                        <!-- Vector DB -->
                        <rect x="20" y="150" width="60" height="50" fill="#10b981" rx="6"/>
                        <text x="50" y="173" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Vector DB</text>
                        <text x="50" y="188" text-anchor="middle" font-size="9" fill="white">Storage</text>
                        
                        <!-- LLM -->
                        <circle cx="140" cy="175" r="35" fill="#059669"/>
                        <text x="140" y="173" text-anchor="middle" font-size="10" fill="white" font-weight="bold">LLM</text>
                        <text x="140" y="187" text-anchor="middle" font-size="9" fill="white">Generation</text>
                        
                        <!-- RAG -->
                        <rect x="200" y="150" width="60" height="50" fill="#7c3aed" rx="6"/>
                        <text x="230" y="173" text-anchor="middle" font-size="10" fill="white" font-weight="bold">RAG</text>
                        <text x="230" y="188" text-anchor="middle" font-size="9" fill="white">Pipeline</text>
                        
                        <!-- Output -->
                        <rect x="90" y="240" width="100" height="30" fill="#0f6b9e" rx="6"/>
                        <text x="140" y="260" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Intelligent Response</text>
                        
                        <!-- Connections -->
                        <line x1="80" y1="50" x2="110" y2="60" stroke="#f59e0b" stroke-width="2"/>
                        <line x1="140" y1="85" x2="50" y2="150" stroke="#059669" stroke-width="2"/>
                        <line x1="140" y1="85" x2="140" y2="140" stroke="#059669" stroke-width="2"/>
                        <line x1="140" y1="85" x2="230" y2="150" stroke="#059669" stroke-width="2"/>
                        <line x1="140" y1="210" x2="140" y2="240" stroke="#0f6b9e" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 4: Security & Compliance -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">4. Security & Compliance</h2>
                <p class="section-subtitle">Enterprise-grade bảo mật tuân thủ toàn bộ standards</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); text-align: center;">
                    <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                        <!-- Main Shield -->
                        <path d="M 140 20 L 180 40 L 180 120 Q 180 180 140 220 Q 100 180 100 120 L 100 40 Z" fill="#059669" stroke="#0f6b9e" stroke-width="2"/>
                        
                        <!-- Lock inside -->
                        <rect x="120" y="90" width="40" height="35" fill="white" rx="4"/>
                        <circle cx="140" cy="110" r="5" fill="#059669"/>
                        
                        <!-- Security layers -->
                        <circle cx="50" cy="100" r="25" fill="#0f6b9e" opacity="0.3"/>
                        <text x="50" y="105" text-anchor="middle" font-size="10" fill="#0f6b9e" font-weight="bold">Auth</text>
                        
                        <circle cx="230" cy="100" r="25" fill="#0f6b9e" opacity="0.3"/>
                        <text x="230" y="105" text-anchor="middle" font-size="10" fill="#0f6b9e" font-weight="bold">Audit</text>
                        
                        <circle cx="140" cy="240" r="25" fill="#0f6b9e" opacity="0.3"/>
                        <text x="140" y="245" text-anchor="middle" font-size="10" fill="#0f6b9e" font-weight="bold">Monitor</text>
                    </svg>
                </div>
                
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Bảo Mật Toàn Diện</h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        Kiến trúc bảo mật zero-trust với compliance đầy đủ:
                    </p>
                    <div style="margin-bottom: 1.5rem;">
                        <h4 style="font-weight: 700; color: var(--primary); margin-bottom: 0.75rem;">Tiêu Chuẩn Tuân Thủ:</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem;">
                            <span style="background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.9rem; font-weight: 600; color: var(--text-dark);">ISO 27001</span>
                            <span style="background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.9rem; font-weight: 600; color: var(--text-dark);">SOC 2 Type II</span>
                            <span style="background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.9rem; font-weight: 600; color: var(--text-dark);">GDPR</span>
                            <span style="background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.9rem; font-weight: 600; color: var(--text-dark);">PCI DSS</span>
                            <span style="background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.9rem; font-weight: 600; color: var(--text-dark);">HIPAA Ready</span>
                            <span style="background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.9rem; font-weight: 600; color: var(--text-dark);">OWASP Standards</span>
                        </div>
                    </div>
                    <ul style="list-style: none;">
                        @php
                        $security_features = [
                            'Zero Trust Architecture - Verify everything',
                            'End-to-end Encryption - Data in transit & at rest',
                            '24/7 SOC Monitoring - Real-time threat detection',
                            'Incident Response - Rapid containment & recovery',
                            'Vulnerability Scanning - Automated & manual testing',
                            'Compliance Audits - Regular security assessments'
                        ];
                        @endphp
                        @foreach($security_features as $item)
                        <li style="padding: 0.6rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.75rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--accent); font-weight: 800;">✓</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities & Tech Stack -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Khả Năng Toàn Diện</h2>
                <p class="section-subtitle">Công nghệ & tools enterprise-grade cho từng layer</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                @php
                $capabilities = [
                    [
                        'title' => 'Frontend & UI/UX',
                        'icon' => 'web',
                        'items' => [
                            'React, Vue, Next.js, Angular',
                            'TypeScript for type safety',
                            'Responsive design (mobile-first)',
                            'Accessibility (WCAG 2.1 AA)',
                            'Performance optimization',
                            'Progressive Web Apps (PWA)'
                        ]
                    ],
                    [
                        'title' => 'Backend & API',
                        'icon' => 'storage',
                        'items' => [
                            'Node.js, Python, Java, Go',
                            'FastAPI, NestJS, Spring Boot',
                            'GraphQL & REST APIs',
                            'Microservices & Event-driven',
                            'Authentication & Authorization',
                            'API Gateway & Rate Limiting'
                        ]
                    ],
                    [
                        'title' => 'Data & Databases',
                        'icon' => 'database',
                        'items' => [
                            'PostgreSQL, MySQL, MongoDB',
                            'Redis, Elasticsearch',
                            'Vector Databases (Pinecone)',
                            'Data Warehousing (BigQuery)',
                            'ETL & Data Pipelines',
                            'Backup & Replication'
                        ]
                    ],
                    [
                        'title' => 'Cloud & DevOps',
                        'icon' => 'cloud',
                        'items' => [
                            'AWS, Google Cloud, Azure',
                            'Kubernetes & Docker',
                            'Terraform & Infrastructure as Code',
                            'CI/CD Pipelines (GitHub Actions)',
                            'Monitoring & Observability',
                            'Auto-scaling & Load Balancing'
                        ]
                    ]
                ];
                @endphp
                @foreach($capabilities as $cap)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <div style="font-size: 2rem; color: var(--primary);">
                            <span class="material-symbols-rounded">{{ $cap['icon'] }}</span>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin: 0;">
                            {{ $cap['title'] }}
                        </h3>
                    </div>
                    <ul style="list-style: none;">
                        @foreach($cap['items'] as $item)
                        <li style="padding: 0.6rem 0; color: var(--text-gray); font-size: 0.9rem; padding-left: 1.5rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--primary); font-weight: 600;">▸</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Engagement Models -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Mô Hình Hợp Tác</h2>
                <p class="section-subtitle">Flexible options phù hợp với mọi business needs</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $models = [
                    ['title' => 'Fixed Project', 'desc' => 'Dự án với scope, timeline, giá cố định. Phù hợp với well-defined requirements.', 'timeline' => '4-16 tuần'],
                    ['title' => 'MVP Development', 'desc' => 'MVP nhanh chóng trong 4-8 tuần. Test market assumptions, gather user feedback.', 'timeline' => '4-8 tuần'],
                    ['title' => 'Team Augmentation', 'desc' => 'Thêm developers vào team của bạn. Flexible duration, bạn là PO.', 'timeline' => 'Flexible'],
                    ['title' => 'Dedicated Team', 'desc' => 'Full team chuyên dành cho project. Long-term commitment, product-focused.', 'timeline' => '6+ tháng'],
                    ['title' => 'Consulting', 'desc' => 'Architecture, strategy, technology guidance. CTO-as-a-service.', 'timeline' => 'Flexible'],
                    ['title' => 'Support & Scaling', 'desc' => 'Post-launch support, optimization, maintenance, thêm features.', 'timeline' => 'Ongoing'],
                ];
                @endphp
                @foreach($models as $m)
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.backgroundColor='white';" onmouseout="this.style.borderColor='var(--border)'; this.style.backgroundColor='var(--secondary-bg)';">
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $m['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1rem;">
                        {{ $m['desc'] }}
                    </p>
                    <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--primary); font-weight: 600; font-size: 0.9rem;">
                        <span class="material-symbols-rounded" style="font-size: 1.2rem;">schedule</span>
                        {{ $m['timeline'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Process -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Quy Trình Phát Triển Dịch Vụ</h2>
                <p class="section-subtitle">SCRUM-based methodology cho delivery nhanh & quality cao</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
                @php
                $process = [
                    ['icon' => 'search', 'title' => 'Discovery', 'desc' => 'Hiểu rõ goals, analyze requirements, market research'],
                    ['icon' => 'design_services', 'title' => 'Design', 'desc' => 'Architecture, wireframes, data models, tech planning'],
                    ['icon' => 'code', 'title' => 'Development', 'desc' => 'Sprint-based delivery, code review, CI/CD'],
                    ['icon' => 'bug_report', 'title' => 'Testing', 'desc' => 'QA, performance testing, security scanning'],
                    ['icon' => 'cloud_upload', 'title' => 'Deployment', 'desc' => 'Production release, monitoring setup'],
                    ['icon' => 'support_agent', 'title' => 'Support', 'desc' => '24/7 support, optimization, scaling'],
                ];
                @endphp
                @foreach($process as $p)
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border); text-align: center;">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $p['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $p['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        {{ $p['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
