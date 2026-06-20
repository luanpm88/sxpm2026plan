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
            'name' => 'Security & Controls',
            'icon' => 'shield',
            'technologies' => [
                'SSL/TLS encryption',
                'OWASP security practices',
                'Privacy and data protection controls',
                'Security scanning & penetration testing',
                'DDoS protection & WAF',
                'Audit logging & control reporting'
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
        ['metric' => 'High Availability', 'label' => 'Operating SLA', 'desc' => 'Availability targets by system scope'],
        ['metric' => 'Low Latency', 'label' => 'API Response Time', 'desc' => 'Stable response under real load'],
        ['metric' => '>95', 'label' => 'Google Lighthouse Score', 'desc' => 'Performance + SEO'],
        ['metric' => '<3s', 'label' => 'Page Load Time', 'desc' => 'On 3G network'],
        ['metric' => 'A/A+', 'label' => 'Security Configuration', 'desc' => 'Target for TLS and application checks'],
        ['metric' => 'Scope-based', 'label' => 'Test Coverage', 'desc' => 'Unit + Integration for core flows'],
    ],

    // Multi-Platform Coverage
    'platforms_title' => 'Multi-Platform Coverage',
    'platforms_subtitle' => 'Web, mobile, and desktop applications designed with consistent experience and operating standards.',

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
    'practices_title' => 'Engineering Principles',
    'practices_subtitle' => 'Practical principles for systems that can scale, be controlled, and remain maintainable.',

    'practices' => [
        ['icon' => 'psychology', 'title' => 'Clear Service Architecture', 'company' => 'Design principle', 'desc' => 'Separate important business domains so systems can be scaled, tested, and deployed with less coupling.'],
        ['icon' => 'auto_fix_high', 'title' => 'CI/CD Automation', 'company' => 'Operations principle', 'desc' => 'Automate testing and deployment to reduce manual errors and improve repeatability.'],
        ['icon' => 'security', 'title' => 'Security by Design', 'company' => 'Security principle', 'desc' => 'Bring access control, data protection, and security review into architecture instead of adding them late.'],
        ['icon' => 'analytics', 'title' => 'Data-Informed Decisions', 'company' => 'Product principle', 'desc' => 'Track metrics, observe user behavior, and measure changes using operating data.'],
        ['icon' => 'trending_up', 'title' => 'Infrastructure as Code', 'company' => 'Infrastructure principle', 'desc' => 'Keep infrastructure versioned, reproducible, and reviewable as part of the delivery process.'],
        ['icon' => 'manage_accounts', 'title' => 'Documented Collaboration', 'company' => 'Team principle', 'desc' => 'Maintain documentation, decisions, and project knowledge to reduce dependency on individuals.'],
    ],

    // CTA Section
    'cta_title' => 'Build on the Right Technology Foundation',
    'cta_desc' => 'The right architecture decisions at the start determine your system\'s performance, maintainability, and ability to scale.',
    'cta_button' => 'Request an Architecture Consultation',
];
