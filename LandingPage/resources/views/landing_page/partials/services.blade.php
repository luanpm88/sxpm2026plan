<!-- Hero -->
<section id="services" style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                Services & Solutions
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                Four core services covering software needs from MVP to enterprise solutions
            </p>
            <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                We combine modern technology, global best practices, and domain expertise to build effective solutions.
            </p>
        </div>
    </div>
</section>

<!-- Services Grid Overview -->
<section style="background: white;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Four Core Services</h2>
            <p class="section-subtitle">Complete solutions from development to deployment & scaling</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @php
            $service_overview = [
                ['num' => 1, 'icon' => 'code', 'title' => 'Custom Software Development', 'desc' => 'Build applications from scratch with cloud-native architecture, microservices, and optimized performance'],
                ['num' => 2, 'icon' => 'workspace_premium', 'title' => 'SaaS Platform', 'desc' => 'Production-ready multi-tenant platform. HKSpace currently serves 50K+ active users'],
                ['num' => 3, 'icon' => 'psychology', 'title' => 'AI Knowledge Platform', 'desc' => 'NLP, RAG, LLM integration. Build intelligent AI-powered solutions'],
                ['num' => 4, 'icon' => 'shield', 'title' => 'Security & Compliance', 'desc' => 'Enterprise security architecture. ISO 27001, SOC 2, GDPR, PCI DSS compliant'],
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
            <h2 class="section-title">Custom Software Development</h2>
            <p class="section-subtitle">Professional software development with transparent SCRUM process</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
            <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Clear, Standard Process</h3>
                <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                    We follow international SCRUM standards. Clients receive progress updates, participate in regular reviews, and control each development phase.
                </p>
                <div style="background: var(--secondary-bg); padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">Transparency Commitment</h4>
                    <ul style="list-style: none; margin: 0;">
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                            <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">verified</span>
                            <span><strong>Sprint Planning:</strong> Sprint kickoff meetings to define specific work items</span>
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                            <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">visibility</span>
                            <span><strong>Daily Updates:</strong> Daily progress reports through project management tools</span>
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                            <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">preview</span>
                            <span><strong>Sprint Demo:</strong> Clients review and test new features every 2 weeks</span>
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                            <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">code</span>
                            <span><strong>Code Quality:</strong> Code reviews, automated testing, CI/CD</span>
                        </li>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                            <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">track_changes</span>
                            <span><strong>Full Visibility:</strong> Access to Jira/Git for realtime tracking</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="opacity-75" style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">SCRUM Development Cycle
                    <span class="badge  rounded-pill bg-warning">
                        <span class="spinner-border spinner-border-sm me-1" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                        Update Diagram
                    </span>
                    
                </h3>
                <svg viewBox="0 0 300 280" style="width: 100%; max-width: 300px; margin: 0 auto; display: block;">
                    <!-- Sprint Cycle Circle -->
                    <circle cx="150" cy="140" r="90" fill="none" stroke="#e5e7eb" stroke-width="3"/>
                    
                    <!-- Planning -->
                    <circle cx="150" cy="50" r="25" fill="#0f6b9e"/>
                    <text x="150" y="50" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Planning</text>
                    
                    <!-- Development -->
                    <circle cx="235" cy="100" r="25" fill="#10b981"/>
                    <text x="235" y="100" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Dev</text>
                    
                    <!-- Testing -->
                    <circle cx="235" cy="180" r="25" fill="#f59e0b"/>
                    <text x="235" y="180" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Testing</text>
                    
                    <!-- Demo/Review -->
                    <circle cx="150" cy="230" r="25" fill="#7c3aed"/>
                    <text x="150" y="230" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Demo</text>
                    
                    <!-- Deploy -->
                    <circle cx="65" cy="180" r="25" fill="#059669"/>
                    <text x="65" y="180" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Deploy</text>
                    
                    <!-- Retrospective -->
                    <circle cx="65" cy="100" r="25" fill="#0f6b9e" opacity="0.7"/>
                    <text x="65" y="100" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Retro</text>
                    
                    <!-- Center: 2 weeks -->
                    <text x="150" y="135" text-anchor="middle" font-size="14" fill="#0f6b9e" font-weight="bold">2-Week</text>
                    <text x="150" y="152" text-anchor="middle" font-size="13" fill="#059669" font-weight="bold">Sprint</text>
                    
                    <!-- Arrows -->
                    <path d="M 150 75 L 150 85" stroke="#0f6b9e" stroke-width="2" marker-end="url(#arrowhead)"/>
                    <defs>
                        <marker id="arrowhead" markerWidth="10" markerHeight="10" refX="5" refY="3" orient="auto">
                            <polygon points="0 0, 5 3, 0 6" fill="#0f6b9e" />
                        </marker>
                    </defs>
                </svg>
                <p style="text-align: center; color: var(--text-gray); font-size: 0.9rem; margin-top: 1rem; line-height: 1.6;">
                    2-week cycles with client participation in each phase to ensure product alignment
                </p>
            </div>
        </div>
        
        <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <div>
                    <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">Tech Stack & Technologies</h4>
                    <p style="color: var(--text-gray); font-size: 0.95rem; margin: 0;">Full-stack development with modern tech stack suitable for MVP to Enterprise projects</p>
                </div>
                <a href="#tech-stack" style="background: var(--primary); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; white-space: nowrap; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#0a5a82';" onmouseout="this.style.backgroundColor='var(--primary)';">
                    <span>View Details</span>
                    <span class="material-symbols-rounded" style="font-size: 1.2rem;">arrow_forward</span>
                </a>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $tech_categories = [
                    [
                        'icon' => 'web',
                        'title' => 'Frontend & Mobile',
                        'color' => '#0f6b9e',
                        'techs' => ['React', 'Vue', 'Next.js', 'React Native', 'Flutter', 'TypeScript']
                    ],
                    [
                        'icon' => 'storage',
                        'title' => 'Backend & API',
                        'color' => '#059669',
                        'techs' => ['Node.js', 'Python', 'Java', 'Go', 'FastAPI', 'NestJS']
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Database & Cache',
                        'color' => '#10b981',
                        'techs' => ['PostgreSQL', 'MongoDB', 'Redis', 'Elasticsearch', 'Pinecone']
                    ],
                    [
                        'icon' => 'cloud',
                        'title' => 'Cloud & DevOps',
                        'color' => '#0f6b9e',
                        'techs' => ['AWS', 'GCP', 'Azure', 'Kubernetes', 'Docker', 'Terraform']
                    ],
                    [
                        'icon' => 'psychology',
                        'title' => 'AI & Machine Learning',
                        'color' => '#7c3aed',
                        'techs' => ['OpenAI GPT-4', 'Claude', 'LangChain', 'TensorFlow', 'PyTorch']
                    ],
                    [
                        'icon' => 'shield',
                        'title' => 'Security & Compliance',
                        'color' => '#059669',
                        'techs' => ['OAuth 2.0', 'JWT', 'Encryption', 'OWASP', 'Zero Trust']
                    ]
                ];
                @endphp
                
                @foreach($tech_categories as $cat)
                <div style="background: var(--secondary-bg); border-radius: 10px; padding: 1.5rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='white'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';" onmouseout="this.style.backgroundColor='var(--secondary-bg)'; this.style.boxShadow='';">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div style="width: 40px; height: 40px; background: {{ $cat['color'] }}; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span class="material-symbols-rounded" style="color: white; font-size: 1.5rem;">{{ $cat['icon'] }}</span>
                        </div>
                        <h5 style="font-weight: 700; color: var(--text-dark); margin: 0; font-size: 1rem;">{{ $cat['title'] }}</h5>
                    </div>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        @foreach($cat['techs'] as $tech)
                        <span style="background: white; border: 1px solid var(--border); padding: 0.4rem 0.75rem; border-radius: 6px; font-size: 0.85rem; color: var(--text-gray); font-weight: 500;">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            
            <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border);">
                <p style="color: var(--text-gray); font-size: 0.95rem; margin-bottom: 1rem;">
                    <strong style="color: var(--primary);">10+ tech categories</strong> with 50+ technologies & frameworks used in production
                </p>
                <a href="#tech-stack" style="color: var(--primary); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">
                    <span>View Complete Tech Stack</span>
                    <span class="material-symbols-rounded" style="font-size: 1.2rem;">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- AI Knowledge Platform -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">AI Knowledge Platform</h2>
                <p class="section-subtitle">NLP, RAG, LLM integration grounded on solid AI foundations</p>
            </div>

            <!-- Foundation Overview -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 3rem;">
                
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Modern AI Foundation</h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1rem;">
                        Built from the ground up with knowledge ingestion, semantic storage, intelligent routing and secure governance.
                    </p>
                    <ul style="list-style: none; margin: 0;">
                        @php
                        $ai_foundation = [
                            'Knowledge Ingestion: connectors, OCR, extraction, chunking with token budgeting',
                            'Vector Search: hybrid semantic + keyword (BM25), metadata filters, re-ranking',
                            'LLM Routing: multi-provider, cost/speed capabilities, fallbacks, function calling',
                            'RAG Pipeline: retrieval, context assembly, generation, citations',
                            'Security & Policy: RBAC/ABAC, PII scrubbing, guardrails, audit logs',
                            'Observability: latency/cost tracking, evaluation, A/B experiments'
                        ];
                        @endphp
                        @foreach($ai_foundation as $item)
                        <li style="padding: 0.55rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.75rem; position: relative;">
                            <span class="material-symbols-rounded" style="position: absolute; left: 0; color: var(--primary); font-size: 1.2rem; display: flex; align-items: center;">check_circle</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="position-relative opacity-75" style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); text-align: center;">
                    <span class="badge  rounded-pill bg-warning position-absolute fs-6 top-0 mt-3 start-0 ms-3">
                        <span class="spinner-border spinner-border-sm me-1" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                        Update Diagram
                    </span>
                    <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                        <!-- Query -->
                        <rect x="120" y="40" width="40" height="25" fill="#0ea5e9" rx="6"/>
                        <text x="140" y="57" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Query</text>
    
                        <!-- NLP -->
                        <circle cx="140" cy="90" r="18" fill="#f59e0b"/>
                        <text x="140" y="95" text-anchor="middle" font-size="9" fill="white" font-weight="bold">NLP</text>
                        <text x="140" y="106" text-anchor="middle" font-size="8" fill="white" opacity="0.9">Processing</text>
    
                        <!-- Branches -->
                        <rect x="30" y="140" width="80" height="35" fill="#10b981" rx="8"/>
                        <text x="70" y="160" text-anchor="middle" font-size="9" fill="white" font-weight="bold">Vector DB</text>
                        <text x="70" y="170" text-anchor="middle" font-size="8" fill="white">Storage</text>
    
                        <circle cx="140" cy="160" r="22" fill="#059669"/>
                        <text x="140" y="160" text-anchor="middle" font-size="9" fill="white" font-weight="bold">LLM</text>
                        <text x="140" y="172" text-anchor="middle" font-size="8" fill="white" opacity="0.9">Generation</text>
    
                        <rect x="200" y="140" width="60" height="35" fill="#8b5cf6" rx="8"/>
                        <text x="230" y="160" text-anchor="middle" font-size="9" fill="white" font-weight="bold">RAG</text>
                        <text x="230" y="170" text-anchor="middle" font-size="8" fill="white">Pipeline</text>
    
                        <!-- Output -->
                        <rect x="110" y="240" width="60" height="25" fill="#0ea5e9" rx="6"/>
                        <text x="140" y="257" text-anchor="middle" font-size="9" fill="white" font-weight="bold">Intelligent Response</text>
    
                        <!-- Lines -->
                        <line x1="140" y1="65" x2="140" y2="72" stroke="#0ea5e9" stroke-width="2"/>
                        <line x1="140" y1="85" x2="50" y2="150" stroke="#059669" stroke-width="2"/>
                        <line x1="140" y1="85" x2="140" y2="140" stroke="#059669" stroke-width="2"/>
                        <line x1="140" y1="85" x2="230" y2="150" stroke="#059669" stroke-width="2"/>
                        <line x1="140" y1="210" x2="140" y2="240" stroke="#0f6b9e" stroke-width="2"/>
                    </svg>
                </div>
            </div>

            <!-- AI Capabilities Banner -->
            <div style="background: linear-gradient(135deg, var(--primary) 0%, #0a4a78 100%); border-radius: 16px; padding: 3rem 2rem; color: white; box-shadow: 0 12px 48px rgba(15, 107, 158, 0.25); margin-bottom: 2.5rem;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <h3 style="font-size: 1.6rem; font-weight: 800; text-align: center; margin-bottom: 0.5rem;">AI Capabilities We Deliver</h3>
                    <p style="text-align: center; font-size: 1.02rem; margin-bottom: 2rem; opacity: 0.95;">From data ingestion to secure, production-grade reasoning and generation</p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.75rem;">
                        @php
                        $ai_components = [
                            ['icon' => 'input', 'title' => 'Knowledge Ingestion', 'desc' => 'Connectors, extraction, OCR, semantic chunking, metadata management'],
                            ['icon' => 'database', 'title' => 'Vector DB & Search', 'desc' => 'Weaviate/Pinecone/PGVector, hybrid search, metadata filters, re-rank'],
                            ['icon' => 'smart_toy', 'title' => 'LLM Routing & Serving', 'desc' => 'Multi-provider routing, function calling, streaming, prompt management'],
                            ['icon' => 'build_circle', 'title' => 'RAG Pipeline', 'desc' => 'Query expansion, retrieval, context assembly, generation, citations'],
                            ['icon' => 'security', 'title' => 'Security & Policy', 'desc' => 'RBAC/ABAC, PII scrubbing, toxicity filters, audit logging, cost control'],
                            ['icon' => 'monitoring', 'title' => 'Observability', 'desc' => 'Latency & cost tracking, evaluation, A/B testing, guardrails'],
                        ];
                        @endphp
                        @foreach($ai_components as $comp)
                        <div style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25); border-radius: 12px; padding: 1.5rem; backdrop-filter: blur(8px); transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255,255,255,0.18)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='rgba(255,255,255,0.12)'; this.style.transform='';">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <span class="material-symbols-rounded" style="font-size: 1.7rem; color: #fbbf24;">{{ $comp['icon'] }}</span>
                                <h4 style="font-size: 1.05rem; font-weight: 700; margin: 0; color: white;">{{ $comp['title'] }}</h4>
                            </div>
                            <p style="color: rgba(255,255,255,0.92); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $comp['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Reference Tech Stack -->
            <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border); margin-bottom: 2.5rem;">
                <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">Reference Tech Stack</h3>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    Ingestion: Python (LangChain/LlamaIndex) workers • Vector DB: Weaviate/Pinecone/PGVector • LLM: OpenAI/DeepSeek/Claude + local (Llama/Ollama) • Backend: FastAPI/Node.js • Observability: Langfuse/Prometheus • Streaming: SSE/WebSocket.
                </p>
            </div>

            <!-- Example Flow -->
            <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1rem; text-align: center;">Example AI Processing Flow</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem;">
                    @php
                    $ai_flow = [
                        ['icon' => 'input', 'text' => 'Receive user query'],
                        ['icon' => 'rule', 'text' => 'Classify via specification layer'],
                        ['icon' => 'fork_right', 'text' => 'Route to the right engine (LLM, RAG, SQL, Hybrid)'],
                        ['icon' => 'precision_manufacturing', 'text' => 'Execute: retrieval + reasoning + generation'],
                        ['icon' => 'outbox', 'text' => 'Return answer with citations and confidence'],
                    ];
                    @endphp
                    @foreach($ai_flow as $step)
                    <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.9rem 1rem; border: 1px solid var(--border); border-radius: 10px;">
                        <span class="material-symbols-rounded" style="font-size: 1.4rem; color: var(--primary);">{{ $step['icon'] }}</span>
                        <span style="font-weight: 600; color: var(--text-dark); font-size: 0.95rem;">{{ $step['text'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

<!-- Service 2: SaaS Platform -->
<section style="background: linear-gradient(135deg, var(--secondary-bg) 0%, white 100%);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Enterprise SaaS Platform</h2>
            <p class="section-subtitle">Complete production-ready multi-tenant platform serving 50K+ users with enterprise-grade security & scalability</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
            <div class="position-relative opacity-75" style="background: white; border-radius: 12px; padding: 2.5rem; border: 2px solid var(--primary); box-shadow: 0 8px 32px rgba(15, 107, 158, 0.15);">
                <span class="badge  rounded-pill bg-warning position-absolute fs-6 top-0 mt-3 start-0 ms-3">
                    <span class="spinner-border spinner-border-sm me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </span>
                    Update Diagram
                </span>
                <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                    <!-- Multiple users -->
                    <circle cx="70" cy="60" r="20" fill="#0f6b9e"/>
                    <circle cx="140" cy="40" r="20" fill="#0f6b9e"/>
                    <circle cx="210" cy="60" r="20" fill="#0f6b9e"/>
                    
                    <!-- Central Platform -->
                    <rect x="100" y="110" width="80" height="80" fill="#059669" rx="8" style="filter: drop-shadow(0 4px 12px rgba(5, 150, 105, 0.3))"/>
                    <text x="140" y="150" text-anchor="middle" font-size="12" fill="white" font-weight="bold">SaaS Platform</text>
                    <text x="140" y="165" text-anchor="middle" font-size="10" fill="white">Multi-tenant</text>
                    
                    <!-- Database -->
                    <rect x="110" y="220" width="60" height="30" fill="#10b981" rx="6"/>
                    <text x="140" y="241" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Database</text>
                    
                    <!-- Connections -->
                    <line x1="70" y1="80" x2="120" y2="110" stroke="#0f6b9e" stroke-width="2" stroke-dasharray="5,5"/>
                    <line x1="140" y1="60" x2="140" y2="110" stroke="#0f6b9e" stroke-width="2" stroke-dasharray="5,5"/>
                    <line x1="210" y1="80" x2="160" y2="110" stroke="#0f6b9e" stroke-width="2" stroke-dasharray="5,5"/>
                    <line x1="140" y1="190" x2="140" y2="220" stroke="#059669" stroke-width="2" stroke-dasharray="5,5"/>
                </svg>
            </div>
            
            <div>
                <div style="">
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;">HKSpace - Flagship SaaS Platform</h3>
                    <p style="color: var(--text-dark); line-height: 1.8; font-weight: 500; margin-bottom: 1rem;">
                        Enterprise-grade collaboration & task management platform currently serving <strong>50K+ active users</strong> across multiple industries.
                    </p>
                    <p style="color: var(--text-gray); line-height: 1.7; font-size: 0.95rem;">
                        <strong>Proven success</strong> in SaaS development: handling high concurrent users, enterprise requirements, and complex workflows with 99.99% uptime SLA.
                    </p>
                </div>
                
                <ul style="list-style: none; margin: 0;">
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
                        <span class="material-symbols-rounded" style="position: absolute; left: 0; color: var(--accent); font-size: 1.2rem; display: flex; align-items: center;">check_circle</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- SaaS Capabilities Banner -->
        <div style="background: linear-gradient(135deg, var(--primary) 0%, #0a4a78 100%); border-radius: 16px; padding: 3.5rem 2.5rem; color: white; margin-top: 3rem; box-shadow: 0 12px 48px rgba(15, 107, 158, 0.25);">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 style="font-size: 1.8rem; font-weight: 800; margin-bottom: 0.5rem; text-align: center;">Complete SaaS Ecosystem We Build</h3>
                <p style="text-align: center; font-size: 1.05rem; margin-bottom: 2.5rem; opacity: 0.95;">
                    We don't just build platforms—we build complete, production-ready SaaS systems with every critical component integrated
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem;">
                    @php
                    $saas_components = [
                        ['icon' => 'security', 'title' => 'Enterprise Security', 'desc' => 'SSL/TLS encryption, OAuth 2.0, role-based access control, audit logging, penetration testing'],
                        ['icon' => 'verified_user', 'title' => 'License Management', 'desc' => 'Flexible licensing models, subscription management, feature toggles per tier, usage tracking'],
                        ['icon' => 'payment', 'title' => 'Payment Integration', 'desc' => 'Stripe, PayPal, multiple currencies, invoicing, billing cycle automation, tax handling'],
                        ['icon' => 'cloud_sync', 'title' => 'Flexible Scaling', 'desc' => 'Auto-scaling infrastructure, multi-region deployment, load balancing, CDN integration'],
                        ['icon' => 'integration_instructions', 'title' => 'Third-party Integrations', 'desc' => 'Webhooks, REST APIs, OAuth, Slack, Teams, Salesforce, HubSpot, and 100+ platforms'],
                        ['icon' => 'storage', 'title' => 'Data Management', 'desc' => 'Multi-database support, backup & disaster recovery, data residency, GDPR compliance'],
                        ['icon' => 'monitoring', 'title' => 'Monitoring & Analytics', 'desc' => 'Real-time dashboards, system health monitoring, user analytics, performance metrics'],
                        ['icon' => 'support_agent', 'title' => '24/7 Support', 'desc' => 'Dedicated support team, SLA guarantees, incident response, regular updates & patches'],
                    ];
                    @endphp
                    @foreach($saas_components as $comp)
                    <div style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 12px; padding: 1.75rem; backdrop-filter: blur(10px); transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255, 255, 255, 0.15)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 24px rgba(255, 255, 255, 0.1)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform=''; this.style.boxShadow='';">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                            <span class="material-symbols-rounded" style="font-size: 1.8rem; color: #fbbf24;">{{ $comp['icon'] }}</span>
                            <h4 style="font-size: 1.1rem; font-weight: 700; margin: 0; color: white;">{{ $comp['title'] }}</h4>
                        </div>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            {{ $comp['desc'] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Why Choose HKIncotech for SaaS -->
        <div style="margin-top: 3rem; background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
            <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--primary); margin-bottom: 2rem; text-align: center;">Why HKIncotech for Enterprise SaaS?</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <div style="padding: 1.5rem; background: linear-gradient(135deg, rgba(15, 107, 158, 0.05) 0%, rgba(5, 150, 105, 0.05) 100%); border-radius: 10px; border-left: 4px solid var(--primary);">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Proven Track Record</h4>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        50K+ active users on HKSpace demonstrates real-world, production-grade SaaS capability at scale with enterprise requirements.
                    </p>
                </div>
                <div style="padding: 1.5rem; background: linear-gradient(135deg, rgba(15, 107, 158, 0.05) 0%, rgba(5, 150, 105, 0.05) 100%); border-radius: 10px; border-left: 4px solid var(--accent);">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">End-to-End Solution</h4>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        From architecture design to deployment, security, payments, scaling—we handle all aspects so you can focus on your business.
                    </p>
                </div>
                <div style="padding: 1.5rem; background: linear-gradient(135deg, rgba(15, 107, 158, 0.05) 0%, rgba(5, 150, 105, 0.05) 100%); border-radius: 10px; border-left: 4px solid var(--primary);">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Future-Ready Architecture</h4>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        Built for growth: scales from MVP to millions of users with flexible, modular architecture that evolves with your needs.
                    </p>
                </div>
            </div>
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
            <a href="#tech-stack" class="btn-secondary-v5" style="display: inline-flex; align-items: center; gap: 0.75rem;">
                <span>View Complete Tech Stack with Details</span>
                <span class="material-symbols-rounded">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<!-- Engagement Models -->
<section style="background: white;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Engagement Models</h2>
            <p class="section-subtitle">Flexible options for various business needs</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @php
            $models = [
                ['title' => 'Fixed Project', 'desc' => 'Fixed scope, timeline, and price. Suitable for well-defined requirements.', 'timeline' => '4-16 weeks'],
                ['title' => 'MVP Development', 'desc' => 'Rapid MVP in 4-8 weeks. Test market assumptions, gather user feedback.', 'timeline' => '4-8 weeks'],
                ['title' => 'Team Augmentation', 'desc' => 'Add developers to your team. Flexible duration, you remain Product Owner.', 'timeline' => 'Flexible'],
                ['title' => 'Dedicated Team', 'desc' => 'Full dedicated team for your project. Long-term commitment, product-focused.', 'timeline' => '6+ months'],
                ['title' => 'Consulting', 'desc' => 'Architecture, strategy, technology guidance. CTO-as-a-service.', 'timeline' => 'Flexible'],
                ['title' => 'Support & Scaling', 'desc' => 'Post-launch support, optimization, maintenance, adding features.', 'timeline' => 'Ongoing'],
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
            <h2 class="section-title">Development Process</h2>
            <p class="section-subtitle">SCRUM-based methodology for fast delivery and high quality</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
            @php
            $process = [
                ['icon' => 'search', 'title' => 'Discovery', 'desc' => 'Understand goals, analyze requirements, market research'],
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
    <div style="text-align: center; margin-top: 3rem;">
            <a href="http://localhost:8000/scrum" class="btn-primary-v5">
                <span>Learn Detailed Process</span>
                <span class="material-symbols-rounded">arrow_forward</span>
            </a>
        </div>
</section>