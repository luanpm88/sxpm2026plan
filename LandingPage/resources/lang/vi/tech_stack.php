<?php

return [
    // Hero Section
    'hero_title' => 'Công Nghệ & Tech Stack',
    'hero_desc' => 'Bộ công nghệ cấp doanh nghiệp: dễ mở rộng, bảo mật, ổn định và đã được kiểm chứng thực tế.',

    // Tech Stack Matrix
    'stack_title' => 'Toàn Bộ Tech Stack',
    'stack_subtitle' => 'Từ frontend đến hạ tầng cloud',

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
    'metrics_title' => 'Chỉ Số Hiệu Năng',
    'metrics_subtitle' => 'Các mục tiêu theo chuẩn doanh nghiệp',

    'metrics' => [
        ['metric' => '99.99%', 'label' => 'Uptime SLA', 'desc' => '~4.26 phút downtime/năm'],
        ['metric' => '<100ms', 'label' => 'API Response Time', 'desc' => 'Độ trễ P99'],
        ['metric' => '>95', 'label' => 'Google Lighthouse Score', 'desc' => 'Hiệu năng + SEO'],
        ['metric' => '<3s', 'label' => 'Page Load Time', 'desc' => 'Mạng 3G'],
        ['metric' => '100/100', 'label' => 'Security Grade', 'desc' => 'Xếp hạng A+ từ SSL Labs'],
        ['metric' => '>90%', 'label' => 'Test Coverage', 'desc' => 'Unit + Integration'],
    ],

    // Multi-Platform Coverage
    'platforms_title' => 'Đa Nền Tảng',
    'platforms_subtitle' => 'Web, mobile, desktop - phát triển hiệu quả và triển khai linh hoạt',

    'platforms' => [
        [
            'icon' => 'web',
            'title' => 'Web Applications',
            'desc' => 'Ứng dụng web responsive trên các trình duyệt chính: Chrome, Safari, Firefox, Edge.',
            'tech_label' => 'TECH STACK',
            'tech' => 'React, Vue, Angular, TypeScript',
            'features' => ['Hỗ trợ PWA', 'Chế độ offline', 'Tương thích đa trình duyệt', 'Tối ưu SEO']
        ],
        [
            'icon' => 'smartphone',
            'title' => 'Mobile Apps',
            'desc' => 'iOS & Android native, hoặc cross-platform với React Native / Flutter.',
            'tech_label' => 'TECH STACK',
            'tech' => 'React Native, Flutter, Swift, Kotlin',
            'features' => ['Hiệu năng native', 'Push notifications', 'Xác thực sinh trắc học', 'Sẵn sàng App Store']
        ],
        [
            'icon' => 'desktop_windows',
            'title' => 'Desktop Applications',
            'desc' => 'Ứng dụng desktop cross-platform cho Windows, macOS, và Linux.',
            'tech_label' => 'TECH STACK',
            'tech' => 'Electron, Tauri, .NET MAUI',
            'features' => ['Tích hợp OS native', 'Cập nhật tự động', 'Hỗ trợ offline', 'System tray']
        ],
    ],

    // Best Practices
    'practices_title' => 'Best Practices Kỹ Thuật',
    'practices_subtitle' => 'Áp dụng bài học thực tiễn từ các tổ chức dẫn đầu',

    'practices' => [
        ['icon' => 'psychology', 'title' => 'Microservices Architecture', 'company' => 'Tham khảo: Netflix', 'desc' => 'Phân tách thành các dịch vụ độc lập cho khả năng mở rộng và triển khai cách ly.'],
        ['icon' => 'auto_fix_high', 'title' => 'CI/CD Automation', 'company' => 'Tham khảo: Amazon', 'desc' => 'Kiểm thử tự động trước triển khai; tần suất triển khai cao.'],
        ['icon' => 'security', 'title' => 'Security by Design', 'company' => 'Tham khảo: Google', 'desc' => 'Kiểm tra bảo mật từ giai đoạn phát triển; tránh vá lỗi sau khi sản phẩm hoạt động.'],
        ['icon' => 'analytics', 'title' => 'Data-Driven Decisions', 'company' => 'Tham khảo: Meta', 'desc' => 'Kiểm thử A/B, theo dõi chỉ số, phân tích tập trung.'],
        ['icon' => 'trending_up', 'title' => 'Infrastructure as Code', 'company' => 'Tham khảo: AWS', 'desc' => 'Terraform/CloudFormation cho cơ sở hạ tầng có phiên bản và có thể tái tạo.'],
        ['icon' => 'manage_accounts', 'title' => 'Team Collaboration', 'company' => 'Tham khảo: Google', 'desc' => 'Giao tiếp không đồng bộ, tài liệu rõ ràng, chia sẻ kiến thức.'],
    ],

    // CTA Section
    'cta_title' => 'Xây Dựng Với Công Nghệ Phù Hợp',
    'cta_desc' => 'Tech stack tối ưu = sản phẩm tốt hơn và tăng trưởng nhanh hơn',
    'cta_button' => 'Tư Vấn Kiến Trúc',
];
