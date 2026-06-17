<?php

return [
    // Hero
    'hero_title'        => 'Mở Rộng &',
    'hero_title_accent' => 'Hạ Tầng',
    'hero_desc1'        => 'Từ MVP nhỏ lên 10 triệu người dùng. 6 giai đoạn scaling với SLA đẳng cấp enterprise, tự động mở rộng, giám sát 24/7.',
    'hero_desc2'        => 'Chúng tôi đã scale 50+ dự án từ 0 lên hàng triệu người dùng. Kinh nghiệm từ startup giai đoạn đầu đến quy mô unicorn.',

    // Phases section
    'phases_title'      => '6 Giai Đoạn Scaling',
    'phases_subtitle'   => 'Lộ trình từ MVP đến hạ tầng quy mô doanh nghiệp',
    'label_phase'       => 'Giai đoạn',
    'label_users'       => 'Người dùng',
    'label_timeline'    => 'Thời gian',
    'label_cost'        => 'Chi phí',
    'label_architecture'=> 'Kiến trúc',
    'label_tech_stack'  => 'Tech Stack',

    // Metrics section
    'metrics_title'     => 'Tiêu Chí Hiệu Năng',
    'metrics_subtitle'  => 'Chuẩn SLA và hiệu suất cấp doanh nghiệp',

    // CTA
    'cta_title'         => 'Sẵn Sàng Để Scale?',
    'cta_desc'          => 'Chúng tôi có kinh nghiệm scale từ 0 đến 100 triệu người dùng. Hãy cùng xây dựng hạ tầng vững chắc cho tương lai của bạn.',
    'cta_button'        => 'Tư Vấn Scaling',

    // Phase data
    'phases' => [
        [
            'phase'        => 'Giai đoạn 1: Proof of Concept (MVP)',
            'users'        => '< 1K người dùng',
            'timeline'     => '0–3 tháng',
            'architecture' => 'Monolithic + DB đơn giản',
            'description'  => 'Bắt đầu đơn giản: một server, database cơ bản, không cần hạ tầng phức tạp. Tập trung vào product-market fit.',
            'stack'        => 'Single instance (AWS EC2/GCP Compute) + RDS/Cloud SQL',
            'cost'         => '$500–2K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 2: Tăng Trưởng Ban Đầu',
            'users'        => '1K – 50K người dùng',
            'timeline'     => '3–6 tháng',
            'architecture' => 'Load Balanced + Read Replicas',
            'description'  => 'Bổ sung horizontal scaling: load balancer, database read replicas, caching cơ bản.',
            'stack'        => 'Load Balancer + 2–3 backend instances + Master-Slave DB',
            'cost'         => '$2K–5K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 3: Mở Rộng Ra Ngoài',
            'users'        => '50K – 500K người dùng',
            'timeline'     => '6–12 tháng',
            'architecture' => 'Microservices + Kubernetes',
            'description'  => 'Kiến trúc microservices, điều phối bằng Kubernetes, Redis caching, CDN cho tài nguyên tĩnh.',
            'stack'        => 'K8s cluster + 5–10 service replicas + Redis + CDN',
            'cost'         => '$5K–15K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 4: Đa Vùng',
            'users'        => '500K – 5M người dùng',
            'timeline'     => '12–18 tháng',
            'architecture' => 'Multi-region + Database Sharding',
            'description'  => 'Triển khai đa vùng, phân mảnh database theo địa lý, CDN toàn cầu, phục hồi thảm họa.',
            'stack'        => '3+ regions, sharded DB, global failover, multi-cloud strategy',
            'cost'         => '$15K–50K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 5: Siêu Quy Mô',
            'users'        => '5M – 100M người dùng',
            'timeline'     => '18–24 tháng',
            'architecture' => 'Event-Driven + Data Warehouse',
            'description'  => 'Kiến trúc event-driven, phân tích thời gian thực, data warehouse (BigQuery), streaming pipeline.',
            'stack'        => 'Message queues + Streaming + Data lake + Analytics',
            'cost'         => '$50K–200K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 6: Quy Mô Doanh Nghiệp',
            'users'        => '> 100M người dùng',
            'timeline'     => '24+ tháng',
            'architecture' => 'Hạ Tầng Tùy Chỉnh + Edge',
            'description'  => 'Hạ tầng tùy chỉnh, edge computing, database tùy chỉnh, đội DevOps chuyên trách.',
            'stack'        => 'Global edge network + Custom DBs + Proprietary infra',
            'cost'         => '$200K+/tháng',
        ],
    ],

    // Metrics data
    'metrics' => [
        ['metric' => 'Enterprise', 'label' => 'Uptime SLA',                'desc' => 'SLA độ sẵn sàng cao'],
        ['metric' => 'Thấp',       'label' => 'Thời Gian Phản Hồi API',    'desc' => 'Độ trễ thấp P99'],
        ['metric' => '<3s',        'label' => 'Thời Gian Tải Trang',       'desc' => 'Trên mạng 3G'],
        ['metric' => '>95',        'label' => 'Điểm Lighthouse',           'desc' => 'Chỉ số hiệu suất'],
        ['metric' => 'Zero',       'label' => 'Deploy Không Gián Đoạn',    'desc' => 'Blue-green deployment'],
        ['metric' => '24/7',       'label' => 'Giám Sát SOC',             'desc' => 'Cảnh báo thời gian thực'],
        ['metric' => 'Nhanh',      'label' => 'Thời Gian Tự Phục Hồi',    'desc' => 'Tự động failover'],
        ['metric' => 'Cao',        'label' => 'Khả Dụng Database',        'desc' => 'Sao chép đa vùng'],
    ],
];
