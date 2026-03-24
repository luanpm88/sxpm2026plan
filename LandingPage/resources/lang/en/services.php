<?php

return [
    // Hero Section
    'hero_title' => 'Services & Solutions',
    'hero_desc' => 'Four core services covering software needs from MVP to enterprise solutions',
    'hero_subtitle' => 'We combine modern technology, global best practices, and domain expertise to build effective solutions.',

    // Services Overview Section
    'overview_title' => 'Four Core Services',
    'overview_subtitle' => 'Complete solutions from development to deployment & scaling',

    // Service Overview Items
    'services' => [
        [
            'title' => 'Custom Software Development',
            'desc' => 'Build applications from scratch with cloud-native architecture, microservices, and optimized performance',
        ],
        [
            'title' => 'SaaS Platform',
            'desc' => 'Production-ready multi-tenant platform. HKSpace currently serves 50K+ active users',
        ],
        [
            'title' => 'AI Knowledge Platform',
            'desc' => 'NLP, RAG, LLM integration. Build intelligent AI-powered solutions',
        ],
        [
            'title' => 'Security & Compliance',
            'desc' => 'Enterprise security architecture. ISO 27001, SOC 2, GDPR, PCI DSS compliant',
        ],
    ],

    // Custom Software Development Service
    'service1' => [
        'title' => 'Custom Software Development',
        'subtitle' => 'Professional software development with transparent SCRUM process',
        'process_title' => 'Clear, Standard Process',
        'process_desc' => 'We follow international SCRUM standards. Clients receive progress updates, participate in regular reviews, and control each development phase.',
        'transparency_title' => 'Transparency Commitment',
        'sprint_planning_title' => 'Sprint Planning',
        'sprint_planning_desc' => 'Sprint kickoff meetings to define specific work items',
        'daily_updates_title' => 'Daily Updates',
        'daily_updates_desc' => 'Daily progress reports through project management tools',
        'sprint_demo_title' => 'Sprint Demo',
        'sprint_demo_desc' => 'Clients review and test new features every 2 weeks',
        'code_quality_title' => 'Code Quality',
        'code_quality_desc' => 'Code reviews, automated testing, CI/CD',
        'full_visibility_title' => 'Full Visibility',
        'full_visibility_desc' => 'Access to Jira/Git for realtime tracking',
        'cycle_title' => 'SCRUM Development Cycle',
        'cycle_desc' => '2-week cycles with client participation in each phase to ensure product alignment',
        'cycle_2week' => '2-Week',
        'cycle_sprint' => 'Sprint',
        'tech_title' => 'Tech Stack & Technologies',
        'tech_desc' => 'Full-stack development with modern tech stack suitable for MVP to Enterprise projects',
        'tech_details' => '10+ tech categories',
        'tech_details_full' => '10+ tech categories with 50+ technologies & frameworks used in production',
        'view_details' => 'View Details',
        'view_tech_full' => 'View Complete Tech Stack',
    ],

    // Tech Categories
    'tech_categories' => [
        [
            'title' => 'Frontend & Mobile',
            'techs' => ['React', 'Vue', 'Next.js', 'React Native', 'Flutter', 'TypeScript'],
        ],
        [
            'title' => 'Backend & API',
            'techs' => ['Node.js', 'Python', 'Java', 'Go', 'FastAPI', 'NestJS'],
        ],
        [
            'title' => 'Database & Cache',
            'techs' => ['PostgreSQL', 'MongoDB', 'Redis', 'Elasticsearch', 'Pinecone'],
        ],
        [
            'title' => 'Cloud & DevOps',
            'techs' => ['AWS', 'GCP', 'Azure', 'Kubernetes', 'Docker', 'Terraform'],
        ],
        [
            'title' => 'AI & Machine Learning',
            'techs' => ['OpenAI GPT-4', 'Claude', 'LangChain', 'TensorFlow', 'PyTorch'],
        ],
        [
            'title' => 'Security & Compliance',
            'techs' => ['OAuth 2.0', 'JWT', 'Encryption', 'OWASP', 'Zero Trust'],
        ],
    ],

    // AI Knowledge Platform
    'ai' => [
        'title' => 'AI Knowledge Platform',
        'subtitle' => 'NLP, RAG, LLM integration grounded on solid AI foundations',
        'foundation_title' => 'Modern AI Foundation',
        'foundation_desc' => 'Built from the ground up with knowledge ingestion, semantic storage, intelligent routing and secure governance.',
        'foundation_items' => [
            'Knowledge Ingestion: connectors, OCR, extraction, chunking with token budgeting',
            'Vector Search: hybrid semantic + keyword (BM25), metadata filters, re-ranking',
            'LLM Routing: multi-provider, cost/speed capabilities, fallbacks, function calling',
            'RAG Pipeline: retrieval, context assembly, generation, citations',
            'Security & Policy: RBAC/ABAC, PII scrubbing, guardrails, audit logs',
            'Observability: latency/cost tracking, evaluation, A/B experiments',
        ],
        'capabilities_title' => 'AI Capabilities We Deliver',
        'capabilities_desc' => 'From data ingestion to secure, production-grade reasoning and generation',
        'components' => [
            [
                'title' => 'Knowledge Ingestion',
                'desc' => 'Connectors, extraction, OCR, semantic chunking, metadata management',
            ],
            [
                'title' => 'Vector DB & Search',
                'desc' => 'Weaviate/Pinecone/PGVector, hybrid search, metadata filters, re-rank',
            ],
            [
                'title' => 'LLM Routing & Serving',
                'desc' => 'Multi-provider routing, function calling, streaming, prompt management',
            ],
            [
                'title' => 'RAG Pipeline',
                'desc' => 'Query expansion, retrieval, context assembly, generation, citations',
            ],
            [
                'title' => 'Security & Policy',
                'desc' => 'RBAC/ABAC, PII scrubbing, toxicity filters, audit logging, cost control',
            ],
            [
                'title' => 'Observability',
                'desc' => 'Latency & cost tracking, evaluation, A/B testing, guardrails',
            ],
        ],
        'reference_tech_title' => 'Reference Tech Stack',
        'reference_tech_desc' => 'Ingestion: Python (LangChain/LlamaIndex) workers • Vector DB: Weaviate/Pinecone/PGVector • LLM: OpenAI/DeepSeek/Claude + local (Llama/Ollama) • Backend: FastAPI/Node.js • Observability: Langfuse/Prometheus • Streaming: SSE/WebSocket.',
        'flow_title' => 'Example AI Processing Flow',
        'flow_steps' => [
            [
                'text' => 'Receive user query',
            ],
            [
                'text' => 'Classify via specification layer',
            ],
            [
                'text' => 'Route to the right engine (LLM, RAG, SQL, Hybrid)',
            ],
            [
                'text' => 'Execute: retrieval + reasoning + generation',
            ],
            [
                'text' => 'Return answer with citations and confidence',
            ],
        ],
    ],

    // SaaS Platform
    'saas' => [
        'title' => 'Enterprise SaaS Platform',
        'subtitle' => 'Complete production-ready multi-tenant platform serving 50K+ users with enterprise-grade security & scalability',
        'hkspace_title' => 'HKSpace - Flagship SaaS Platform',
        'ecosystem_title' => 'Complete SaaS Ecosystem We Build',
        'ecosystem_items' => [
            [
                'title' => 'End-to-End Solution',
                'desc' => 'From architecture design to deployment, security, payments, scaling—we handle all aspects so you can focus on your business.',
            ],
            [
                'title' => 'Proven Track Record',
                'desc' => '50K+ active users on HKSpace demonstrates real-world, production-grade SaaS capability at scale with enterprise requirements.',
            ],
            [
                'title' => 'Future-Ready Architecture',
                'desc' => 'Built for growth: scales from MVP to millions of users with flexible, modular architecture that evolves with your needs.',
            ],
        ],
        'features' => [
            [
                'icon' => 'design_services',
                'title' => 'Design',
                'desc' => 'Architecture, wireframes, data models, tech planning',
            ],
            [
                'icon' => 'code',
                'title' => 'Development',
                'desc' => 'Sprint-based delivery, code review, CI/CD',
            ],
            [
                'icon' => 'bug_report',
                'title' => 'Testing',
                'desc' => 'QA, performance testing, security scanning',
            ],
            [
                'icon' => 'cloud_upload',
                'title' => 'Deployment',
                'desc' => 'Production release, monitoring setup',
            ],
            [
                'icon' => 'cloud_sync',
                'title' => 'Flexible Scaling',
                'desc' => 'Auto-scaling infrastructure, multi-region deployment, load balancing, CDN integration',
            ],
            [
                'icon' => 'support_agent',
                'title' => '24/7 Support',
                'desc' => 'Dedicated support team, SLA guarantees, incident response, regular updates & patches',
            ],
        ],
        'saas_features' => [
            [
                'icon' => 'verified_user',
                'title' => 'License Management',
                'desc' => 'Flexible licensing models, subscription management, feature toggles per tier, usage tracking',
            ],
            [
                'icon' => 'payment',
                'title' => 'Payment Integration',
                'desc' => 'Stripe, PayPal, multiple currencies, invoicing, billing cycle automation, tax handling',
            ],
            [
                'icon' => 'integration_instructions',
                'title' => 'Third-party Integrations',
                'desc' => 'Webhooks, REST APIs, OAuth, Slack, Teams, Salesforce, HubSpot, and 100+ platforms',
            ],
            [
                'icon' => 'security',
                'title' => 'Enterprise Security',
                'desc' => 'SSL/TLS encryption, OAuth 2.0, role-based access control, audit logging, penetration testing',
            ],
            [
                'icon' => 'storage',
                'title' => 'Data Management',
                'desc' => 'Multi-database support, backup & disaster recovery, data residency, GDPR compliance',
            ],
            [
                'icon' => 'monitoring',
                'title' => 'Monitoring & Analytics',
                'desc' => 'Real-time dashboards, system health monitoring, user analytics, performance metrics',
            ],
        ],
    ],

    // Engagement Models
    'engagement' => [
        'title' => 'Engagement Models',
        'subtitle' => 'Flexible options for various business needs',
        'models' => [
            [
                'title' => 'MVP Development',
                'desc' => 'Rapid MVP in 4-8 weeks. Test market assumptions, gather user feedback.',
                'timeline' => '4-8 weeks',
            ],
            [
                'title' => 'Fixed Project',
                'desc' => 'Fixed scope, timeline, and price. Suitable for well-defined requirements.',
                'timeline' => '4-16 weeks',
            ],
            [
                'title' => 'Dedicated Team',
                'desc' => 'Full dedicated team for your project. Long-term commitment, product-focused.',
                'timeline' => '6+ months',
            ],
            [
                'title' => 'Support & Scaling',
                'desc' => 'Post-launch support, optimization, maintenance, adding features.',
                'timeline' => 'Ongoing',
            ],
            [
                'title' => 'Consulting',
                'desc' => 'Architecture, strategy, technology guidance. CTO-as-a-service.',
                'timeline' => 'Flexible',
            ],
            [
                'title' => 'Team Augmentation',
                'desc' => 'Add developers to your team. Flexible duration, you remain Product Owner.',
                'timeline' => 'Flexible',
            ],
        ],
    ],

    // Security & Compliance
    'security' => [
        'title' => 'Security & Compliance',
        'subtitle' => 'Enterprise security architecture with comprehensive compliance standards',
        'features' => [
            [
                'title' => 'Enterprise Security',
                'desc' => 'SSL/TLS encryption, OAuth 2.0, role-based access control, audit logging, penetration testing',
            ],
            [
                'title' => 'Data Management',
                'desc' => 'Multi-database support, backup & disaster recovery, data residency, GDPR compliance',
            ],
            [
                'title' => 'Monitoring & Analytics',
                'desc' => 'Real-time dashboards, system health monitoring, user analytics, performance metrics',
            ],
            [
                'title' => 'Support',
                'desc' => '24/7 support, optimization, scaling',
            ],
        ],
        'standards' => 'ISO 27001, SOC 2, GDPR, PCI DSS compliant',
        'compliance_highlights' => [
            'Encryption: SSL/TLS, end-to-end encryption',
            'Authentication: OAuth 2.0, JWT, multi-factor authentication',
            'Authorization: RBAC/ABAC with fine-grained controls',
            'Compliance: GDPR, HIPAA, SOC 2 Type II, ISO 27001',
            'Audit & Monitoring: Complete audit trails, real-time monitoring',
            'Incident Response: 24/7 monitoring and incident response team',
        ],
    ],

    // Why Us Section
    'why_us' => [
        'title' => 'Why Choose Us',
        'highlights' => [
            [
                'title' => 'Enterprise-grade technologies',
                'desc' => 'Enterprise-grade technologies across 8 categories, 50+ frameworks & tools',
            ],
            [
                'title' => 'SaaS Development Expertise',
                'desc' => 'in SaaS development: handling high concurrent users, enterprise requirements, and complex workflows with 99.99% uptime SLA',
            ],
            [
                'title' => 'Across multiple industries',
                'desc' => 'across multiple industries',
            ],
        ],
    ],

    // CTA
    'cta_title' => 'Ready to Get Started?',
    'cta_desc' => 'Contact us today for a free consultation',
    'cta_button' => 'Schedule a Call',
    'learn_process' => 'Learn Detailed Process',
];
