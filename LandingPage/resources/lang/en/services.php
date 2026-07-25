<?php

return [
    // Hero Section
    'hero_title' => 'Enterprise Software Engineering Capabilities',
    'hero_desc' => 'Hoang Khang designs, builds, and operates custom software for organizations: core systems, internal workflows, SaaS platforms, AI enablement, and secure production operations.',
    'hero_subtitle' => 'We work as a long-term engineering team: understand the business context, design the architecture, deliver in controlled phases, and hand over systems that can scale.',
    'section_services' => 'CORE CAPABILITIES',
    'section_custom' => 'CUSTOM SOFTWARE',
    'section_ai' => 'AI SOLUTIONS',
    'section_saas' => 'SAAS PLATFORMS',
    'section_security' => 'SECURITY & CONTROLS',
    'section_engagement' => 'ENGAGEMENT MODELS',

    // Services Overview Section
    'overview_title' => 'Four Core Capability Areas',
    'overview_subtitle' => 'From domain-specific software to platform operations, controlled AI enablement, and secure system engineering',

    // Service Overview Items
    'services' => [
        [
            'title' => 'Custom Software Development',
            'desc' => 'Analysis, architecture, and system development aligned with the organization’s real operating model',
        ],
        [
            'title' => 'SaaS Platform',
            'desc' => 'Multi-tenant platform architecture for subscription, access control, billing, and production operations, informed by HK-owned platforms such as HKSpace and Yolius',
        ],
        [
            'title' => 'AI Knowledge Platform',
            'desc' => 'RAG, LLM, semantic search, and controlled workflow automation integrated into internal systems or digital products',
        ],
        [
            'title' => 'Security & Controls',
            'desc' => 'Security architecture, access control, audit logs, data protection, and risk controls tailored to business context',
        ],
    ],

    // Custom Software Development Service
    'service1' => [
        'title' => 'Custom Software Development',
        'subtitle' => 'Custom software delivery with disciplined sprint governance',
        'process_title' => 'Structured Delivery Process',
        'process_desc' => 'Projects are organized by sprint, with clear plans, review points, acceptance criteria, and progress visibility for stakeholders.',
        'transparency_title' => 'Transparency Commitment',
        'sprint_planning_title' => 'Sprint Planning',
        'sprint_planning_desc' => 'Sprint kickoff to define scope, priorities, risks, and acceptance criteria',
        'daily_updates_title' => 'Daily Updates',
        'daily_updates_desc' => 'Progress, blockers, and coordination points tracked through project tools',
        'sprint_demo_title' => 'Sprint Demo',
        'sprint_demo_desc' => 'Stakeholders review working increments and confirm acceptance criteria',
        'code_quality_title' => 'Code Quality',
        'code_quality_desc' => 'Code reviews, automated testing, CI/CD',
        'full_visibility_title' => 'Full Visibility',
        'full_visibility_desc' => 'Visibility into backlog, source control, delivery status, and open risks',
        'cycle_title' => 'SCRUM Development Cycle',
        'cycle_desc' => 'Short cycles with client participation to keep the system aligned with operating goals.',
        'cycle_kicker' => 'Controlled delivery cycle',
        'cycle_2week' => '2-Week',
        'cycle_sprint' => 'Sprint',
        'delivery_map' => [
            ['num' => '01', 'title' => 'Discovery', 'desc' => 'Goals, workflow, data'],
            ['num' => '02', 'title' => 'Architecture', 'desc' => 'Scope, APIs, security'],
            ['num' => '03', 'title' => 'Sprint build', 'desc' => 'Design, code, review'],
            ['num' => '04', 'title' => 'Validation', 'desc' => 'Demo, UAT, quality'],
            ['num' => '05', 'title' => 'Operations', 'desc' => 'Release, support, improve'],
        ],
        'delivery_governance' => 'Project governance, progress visibility, and quality control',
        'tech_title' => 'Technology & Delivery Platform',
        'tech_desc' => 'Full-stack development with technology choices matched to product stage, maintainability, and operations.',
        'tech_details' => '10+ tech categories',
        'tech_details_full' => 'with frameworks and tools selected for real production requirements',
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
            'title' => 'Security & Controls',
            'techs' => ['OAuth 2.0', 'JWT', 'Encryption', 'OWASP', 'Zero Trust'],
        ],
    ],

    // AI Knowledge Platform
    'ai' => [
        'title' => 'AI Knowledge Platform',
        'subtitle' => 'NLP, RAG, and LLM integration on a controlled data and governance foundation.',
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
        'capabilities_desc' => 'From data intake to retrieval, answer generation, and operational control.',
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
        'diagram_title' => 'AI Knowledge Flow',
        'diagram_data_title' => 'Data Sources',
        'diagram_data_desc' => 'Docs · APIs',
        'diagram_processing_title' => 'Processing',
        'diagram_processing_desc' => 'Knowledge Ingestion',
        'diagram_vector_title' => 'Vector DB',
        'diagram_vector_desc' => 'Vector Search',
        'diagram_llm_title' => 'LLM',
        'diagram_llm_desc' => 'LLM Routing',
        'diagram_output_title' => 'Output',
        'diagram_output_desc' => 'Answer + Cite',
        'diagram_ingestion_title' => 'Knowledge Ingestion',
        'diagram_ingestion_desc' => 'Connectors · OCR · Chunking',
        'diagram_search_title' => 'Vector Search',
        'diagram_search_desc' => 'Semantic · BM25 · Re-rank',
        'diagram_routing_title' => 'LLM Routing',
        'diagram_routing_desc' => 'Multi-provider · Fallbacks',
        'diagram_rag_title' => 'RAG Pipeline',
        'diagram_rag_desc' => 'Retrieve → Context → Generate → Cite',
        'diagram_query' => 'Query',
        'diagram_processing' => 'Processing',
        'diagram_storage' => 'Storage',
        'diagram_generation' => 'Generation',
        'diagram_pipeline' => 'Pipeline',
        'diagram_response' => 'Intelligent Response',
        'flow_title' => 'Example AI Processing Flow',
        'see_how_it_works' => 'See how it works',
        'how_it_works_title' => 'How the AI Knowledge Platform works',
        'how_it_works_subtitle' => 'From data intake to retrieval, generation, and safe operation.',
        'how_it_works_foundation_title' => 'Foundation modules',
        'how_it_works_flow_title' => 'Processing flow',
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
        'subtitle' => 'Multi-user SaaS platform design for access control, billing, security, operations, and staged growth.',
        'hkspace_title' => 'HKSpace - Flagship SaaS Platform',
        'platform_heading' => 'Design and Operate Scalable SaaS Platforms',
        'platform_desc' => 'Multi-tenant architecture with access control, service plans, data isolation, payment integration, and operating visibility.',
        'platform_note' => 'From architecture, development, and security to deployment and staged scaling.',
        'platform_cta_primary' => 'Discuss Scope',
        'platform_cta_secondary' => 'View Projects',
        'diagram_title' => 'Enterprise SaaS Platform',
        'diagram_workspace_label' => 'Workspaces',
        'diagram_workspace_value' => 'Multi-tenant',
        'diagram_availability_label' => 'Operations',
        'diagram_availability_value' => 'Resilient',
        'diagram_api_label' => 'API Response',
        'diagram_api_value' => 'Real-time',
        'diagram_workspace_module' => 'Workspace Mgmt',
        'diagram_workspace_desc_1' => 'Projects · Members',
        'diagram_workspace_desc_2' => 'Permissions · Teams',
        'diagram_collab_module' => 'Collaboration',
        'diagram_collab_desc_1' => 'Real-time Updates',
        'diagram_collab_desc_2' => 'Activity Stream',
        'diagram_billing_module' => 'Billing & Plans',
        'diagram_billing_desc_1' => 'Subscription · Invoice',
        'diagram_billing_desc_2' => 'Usage Metering',
        'diagram_isolation' => 'Multi-tenant Isolation',
        'diagram_tenant_a' => 'Tenant A',
        'diagram_tenant_b' => 'Tenant B',
        'diagram_tenant_c' => 'Tenant C',
        'diagram_others' => '+ Others',
        'diagram_platform_line_1' => 'Multi-tenant',
        'diagram_platform_line_2' => 'Platform',
        'diagram_shared_infra' => 'Shared Infrastructure',
        'ecosystem_title' => 'SaaS Operating Layers We Build',
        'ecosystem_items' => [
            [
                'title' => 'End-to-End Delivery',
                'desc' => 'Architecture, development, security, payments, operations, and scaling layers are designed together.',
            ],
            [
                'title' => 'Experience From Owned Platforms',
                'desc' => 'HKSpace and Yolius give Hoang Khang practical experience with multi-user, multi-role, and multi-workflow platform design.',
            ],
            [
                'title' => 'Scalable Architecture',
                'desc' => 'Modular design, clear data boundaries, and access control allow the platform to evolve with business needs.',
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
                'title' => 'Operational Support',
                'desc' => 'Support aligned to SLA scope, incident handling, regular updates, and patches',
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
                'desc' => 'Webhooks, REST APIs, OAuth, collaboration tools, CRM systems, and business platforms',
            ],
            [
                'icon' => 'security',
                'title' => 'Enterprise Security',
                'desc' => 'SSL/TLS encryption, OAuth 2.0, role-based access control, audit logging, penetration testing',
            ],
            [
                'icon' => 'storage',
                'title' => 'Data Management',
                'desc' => 'Multi-database support, backup and disaster recovery, data residency, and privacy principles',
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

    // Security & Controls
    'security' => [
        'title' => 'Security & Controls',
        'subtitle' => 'Security architecture, access control, and data governance aligned to enterprise operating requirements.',
        'features' => [
            [
                'title' => 'Enterprise Security',
                'desc' => 'SSL/TLS encryption, OAuth 2.0, role-based access control, audit logging, penetration testing',
            ],
            [
                'title' => 'Data Management',
                'desc' => 'Multi-database support, backup and disaster recovery, data residency, and privacy principles',
            ],
            [
                'title' => 'Monitoring & Analytics',
                'desc' => 'Real-time dashboards, system health monitoring, user analytics, performance metrics',
            ],
            [
                'title' => 'Support',
                'desc' => 'Operational support, optimization, and staged scaling',
            ],
        ],
        'standards' => 'ISO/IEC 27001, SOC 2, GDPR, and PCI DSS used as references when required by scope',
        'compliance_highlights_title' => 'Control Highlights',
        'compliance_highlights' => [
            'Encryption: SSL/TLS, end-to-end encryption',
            'Authentication: OAuth 2.0, JWT, multi-factor authentication',
            'Authorization: RBAC/ABAC with fine-grained controls',
            'Reference frameworks: GDPR, HIPAA, SOC 2, ISO/IEC 27001 when relevant',
            'Audit & Monitoring: Complete audit trails, real-time monitoring',
            'Incident Response: 24/7 monitoring and incident response team',
        ],
    ],

    // Why Us Section
    'why_us' => [
        'title' => 'How We Operate SaaS Platforms',
        'highlights' => [
            [
                'title' => 'Architecture-led technology choices',
                'desc' => 'Technology is selected around architecture, maintainability, operations, and the expected growth path.',
            ],
            [
                'title' => 'SaaS operating experience',
                'desc' => 'Experience with multi-tenant architecture, access control, billing flows, data isolation, and production platform operations.',
            ],
            [
                'title' => 'Cross-domain delivery context',
                'desc' => 'Project experience across education, logistics, manufacturing, SaaS, retail, and business operations.',
            ],
        ],
    ],

    // CTA
    'cta_title' => 'Ready to Discuss Your Project Scope?',
    'cta_desc' => 'Share the operating context, system goals, and priority constraints so Hoàng Khang Incotech can recommend a practical engineering approach.',
    'cta_button' => 'Discuss Requirements',
    'learn_process' => 'Learn Detailed Process',
];
