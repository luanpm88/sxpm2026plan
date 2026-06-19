<?php

return [
    // Hero Section
    'hero_title' => 'Technology Stack',
    'hero_desc' => 'Technology choices are mapped to scalability, security, reliability, and long-term maintainability for each business system.',
    'section_stack' => 'TECHNOLOGY AREAS',
    'section_metrics' => 'PERFORMANCE',
    'section_platforms' => 'PLATFORMS',
    'section_practices' => 'ENGINEERING PRINCIPLES',

    // Tech Stack Matrix
    'stack_title' => 'Core Technology Areas',
    'stack_subtitle' => 'From user interface and APIs to data, cloud infrastructure, and security.',

    'categories' => [
        [
            'name' => 'Frontend',
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
            'name' => 'Backend & API',
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
            'name' => 'Data & Database',
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
            'name' => 'Cloud & Infrastructure',
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
            'name' => 'Security & Compliance',
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
            'name' => 'DevOps & Tools',
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
            'name' => 'Mobile & Cross-Platform',
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
            'name' => 'AI & Machine Learning',
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
    ],

    // Performance Metrics
    'metrics_title' => 'Performance Metrics',
    'metrics_subtitle' => 'Enterprise-grade targets',

    'metrics' => [
        ['metric' => 'High Availability', 'label' => 'Uptime SLA', 'desc' => 'Enterprise-grade uptime'],
        ['metric' => 'Low Latency', 'label' => 'API Response Time', 'desc' => 'Fast, responsive APIs'],
        ['metric' => '>95', 'label' => 'Google Lighthouse Score', 'desc' => 'Performance + SEO'],
        ['metric' => '<3s', 'label' => 'Page Load Time', 'desc' => 'On 3G network'],
        ['metric' => 'Grade A+', 'label' => 'Security Grade', 'desc' => 'SSL Labs best practices'],
        ['metric' => '>90%', 'label' => 'Test Coverage', 'desc' => 'Unit + Integration'],
    ],

    // Multi-Platform Coverage
    'platforms_title' => 'Multi-Platform Coverage',
    'platforms_subtitle' => 'Web, mobile, desktop — build once, deploy anywhere',

    'platforms' => [
        [
            'icon' => 'web',
            'title' => 'Web Applications',
            'desc' => 'Responsive web applications across major browsers: Chrome, Safari, Firefox, Edge.',
            'tech_label' => 'TECH STACK',
            'tech' => 'React, Vue, Angular, TypeScript',
            'features' => ['PWA support', 'Offline mode', 'Cross-browser compatible', 'SEO optimized']
        ],
        [
            'icon' => 'smartphone',
            'title' => 'Mobile Apps',
            'desc' => 'Native iOS & Android, or cross‑platform with React Native / Flutter.',
            'tech_label' => 'TECH STACK',
            'tech' => 'React Native, Flutter, Swift, Kotlin',
            'features' => ['Native performance', 'Push notifications', 'Biometric auth', 'App Store ready']
        ],
        [
            'icon' => 'desktop_windows',
            'title' => 'Desktop Applications',
            'desc' => 'Cross‑platform desktop applications for Windows, macOS, and Linux.',
            'tech_label' => 'TECH STACK',
            'tech' => 'Electron, Tauri, .NET MAUI',
            'features' => ['Native OS integration', 'Auto-update', 'Offline support', 'System tray']
        ],
    ],

    // Best Practices
    'practices_title' => 'Engineering Best Practices',
    'practices_subtitle' => 'Applying lessons learned from industry leaders',

    'practices' => [
        ['icon' => 'psychology', 'title' => 'Microservices Architecture', 'company' => 'Reference: Netflix', 'desc' => 'Decompose into independent services for scale and isolated deployments.'],
        ['icon' => 'auto_fix_high', 'title' => 'CI/CD Automation', 'company' => 'Reference: Amazon', 'desc' => 'Automated testing before deploy; high deployment frequency.'],
        ['icon' => 'security', 'title' => 'Security by Design', 'company' => 'Reference: Google', 'desc' => 'Security checks from development stage; avoid post‑production patching.'],
        ['icon' => 'analytics', 'title' => 'Data-Driven Decisions', 'company' => 'Reference: Meta', 'desc' => 'A/B testing, metrics tracking, centralized analytics.'],
        ['icon' => 'trending_up', 'title' => 'Infrastructure as Code', 'company' => 'Reference: AWS', 'desc' => 'Terraform/CloudFormation for versionable, reproducible infrastructure.'],
        ['icon' => 'manage_accounts', 'title' => 'Team Collaboration', 'company' => 'Reference: Google', 'desc' => 'Async communication, clear documentation, knowledge sharing.'],
    ],

    // CTA Section
    'cta_title' => 'Build on the Right Technology Foundation',
    'cta_desc' => 'The right architecture decisions at the start determine your system\'s performance, maintainability, and ability to scale.',
    'cta_button' => 'Request an Architecture Consultation',
];
