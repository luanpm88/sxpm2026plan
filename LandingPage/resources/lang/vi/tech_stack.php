<?php

return [
    // Hero Section
    'hero_title' => 'Nền Tảng Công Nghệ',
    'hero_desc' => 'Bộ công nghệ được lựa chọn theo yêu cầu mở rộng, bảo mật, độ tin cậy và khả năng bảo trì lâu dài của từng hệ thống doanh nghiệp.',
    'section_stack' => 'NHÓM CÔNG NGHỆ',
    'section_metrics' => 'HIỆU NĂNG',
    'section_platforms' => 'NỀN TẢNG',
    'section_practices' => 'NGUYÊN TẮC KỸ THUẬT',

    // Tech Stack Matrix
    'stack_title' => 'Các Nhóm Công Nghệ Chính',
    'stack_subtitle' => 'Từ giao diện, API, dữ liệu đến hạ tầng cloud và bảo mật.',

    'categories' => [
        [
            'name' => 'Giao Diện Web',
            'icon' => 'web',
            'technologies' => [
                'React, Vue, Angular',
                'TypeScript, modern JavaScript',
                'Thiết kế tương thích đa màn hình, ưu tiên di động',
                'Tối ưu hiệu năng giao diện',
                'PWA & Progressive Enhancement',
                'SEO & Accessibility (WCAG 2.1)'
            ]
        ],
        [
            'name' => 'Dịch Vụ Máy Chủ & API',
            'icon' => 'storage',
            'technologies' => [
                'Node.js, Python, Java, Go',
                'RESTful APIs, GraphQL',
                'Kiến trúc microservices',
                'Xác thực & phân quyền',
                'Giới hạn tần suất & bảo mật API',
                'Chiến lược cache & CDN'
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
                'Tối ưu và tinh chỉnh cơ sở dữ liệu'
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
                'Giám sát & khả năng quan sát hệ thống',
                'Issue tracking & collaboration',
                'Performance profiling & debugging'
            ]
        ],
        [
            'name' => 'Di Động & Đa Nền Tảng',
            'icon' => 'smartphone',
            'technologies' => [
                'React Native, Flutter',
                'iOS (Swift) & Android (Kotlin)',
                'Progressive Web Apps (PWA)',
                'Offline-first architecture',
                'Push notifications & deep linking',
                'Phát hành App Store & Play Store'
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
        ['metric' => 'Độ Sẵn Sàng Cao', 'label' => 'SLA vận hành', 'desc' => 'Mục tiêu sẵn sàng theo yêu cầu hệ thống'],
        ['metric' => 'Độ Trễ Thấp', 'label' => 'Thời gian phản hồi API', 'desc' => 'API phản hồi ổn định dưới tải thực tế'],
        ['metric' => '>95', 'label' => 'Google Lighthouse Score', 'desc' => 'Hiệu năng + SEO'],
        ['metric' => '<3s', 'label' => 'Thời gian tải trang', 'desc' => 'Tối ưu cho mạng di động'],
        ['metric' => 'Xếp Hạng A+', 'label' => 'Security Grade', 'desc' => 'Theo chuẩn SSL Labs'],
        ['metric' => '>90%', 'label' => 'Test Coverage', 'desc' => 'Unit + Integration'],
    ],

    // Multi-Platform Coverage
    'platforms_title' => 'Đa Nền Tảng',
    'platforms_subtitle' => 'Web, di động và desktop, được thiết kế theo cùng một tiêu chuẩn trải nghiệm và vận hành.',

    'platforms' => [
        [
            'icon' => 'web',
            'title' => 'Ứng dụng web',
            'desc' => 'Ứng dụng web tương thích đa màn hình trên các trình duyệt chính: Chrome, Safari, Firefox, Edge.',
            'tech_label' => 'CÔNG NGHỆ',
            'tech' => 'React, Vue, Angular, TypeScript',
            'features' => ['Hỗ trợ PWA', 'Chế độ ngoại tuyến', 'Tương thích đa trình duyệt', 'Tối ưu SEO']
        ],
        [
            'icon' => 'smartphone',
            'title' => 'Ứng dụng di động',
            'desc' => 'iOS, Android native hoặc đa nền tảng với React Native / Flutter.',
            'tech_label' => 'CÔNG NGHỆ',
            'tech' => 'React Native, Flutter, Swift, Kotlin',
            'features' => ['Hiệu năng native', 'Thông báo đẩy', 'Xác thực sinh trắc học', 'Sẵn sàng App Store']
        ],
        [
            'icon' => 'desktop_windows',
            'title' => 'Ứng dụng desktop',
            'desc' => 'Ứng dụng desktop đa nền tảng cho Windows, macOS và Linux.',
            'tech_label' => 'CÔNG NGHỆ',
            'tech' => 'Electron, Tauri, .NET MAUI',
            'features' => ['Tích hợp hệ điều hành', 'Cập nhật tự động', 'Hỗ trợ ngoại tuyến', 'System tray']
        ],
    ],

    // Best Practices
    'practices_title' => 'Nguyên Tắc Kỹ Thuật',
    'practices_subtitle' => 'Các nguyên tắc được áp dụng để hệ thống dễ mở rộng, dễ kiểm soát và dễ vận hành.',

    'practices' => [
        ['icon' => 'psychology', 'title' => 'Kiến trúc dịch vụ rõ ràng', 'company' => 'Nguyên tắc thiết kế', 'desc' => 'Tách các miền nghiệp vụ quan trọng để hệ thống dễ mở rộng, kiểm thử và triển khai độc lập.'],
        ['icon' => 'auto_fix_high', 'title' => 'Tự động hóa CI/CD', 'company' => 'Nguyên tắc vận hành', 'desc' => 'Kiểm thử và triển khai được tự động hóa để giảm lỗi thủ công và tăng tính lặp lại.'],
        ['icon' => 'security', 'title' => 'Bảo mật từ thiết kế', 'company' => 'Nguyên tắc bảo mật', 'desc' => 'Kiểm soát bảo mật được đưa vào từ giai đoạn kiến trúc, không chờ đến khi hệ thống đã chạy.'],
        ['icon' => 'analytics', 'title' => 'Quyết định dựa trên dữ liệu', 'company' => 'Nguyên tắc sản phẩm', 'desc' => 'Theo dõi chỉ số, phân tích hành vi và đo hiệu quả thay đổi bằng dữ liệu vận hành.'],
        ['icon' => 'trending_up', 'title' => 'Hạ tầng dạng mã', 'company' => 'Nguyên tắc hạ tầng', 'desc' => 'Cấu hình hạ tầng có phiên bản, có thể tái tạo và kiểm soát thay đổi rõ ràng.'],
        ['icon' => 'manage_accounts', 'title' => 'Làm việc có tài liệu', 'company' => 'Nguyên tắc đội ngũ', 'desc' => 'Tài liệu, quyết định kỹ thuật và tri thức dự án được duy trì để giảm phụ thuộc cá nhân.'],
    ],

    // CTA Section
    'cta_title' => 'Xây Dựng Trên Nền Tảng Công Nghệ Đúng Đắn',
    'cta_desc' => 'Các quyết định kiến trúc đúng đắn từ đầu sẽ quyết định hiệu suất, khả năng bảo trì và khả năng mở rộng của hệ thống trong dài hạn.',
    'cta_button' => 'Trao Đổi Kiến Trúc',
];
