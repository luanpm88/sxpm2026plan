<?php

return [
    // Hero
    'hero_title'        => 'Mở rộng &',
    'hero_title_accent' => 'Hạ tầng',
    'hero_desc1'        => 'Lộ trình mở rộng hạ tầng theo từng giai đoạn, từ phiên bản đầu tiên đến hệ thống có lưu lượng lớn, giám sát liên tục và khả năng phục hồi tốt hơn.',
    'hero_desc2'        => 'HKIncotech thiết kế kiến trúc để hệ thống có thể tăng trưởng mà vẫn kiểm soát được chi phí, hiệu năng, bảo mật và rủi ro vận hành.',

    // Phases section
    'phases_title'      => '6 giai đoạn mở rộng',
    'phases_subtitle'   => 'Lộ trình từ MVP đến hạ tầng quy mô doanh nghiệp',
    'label_phase'       => 'Giai đoạn',
    'label_users'       => 'Người dùng',
    'label_timeline'    => 'Thời gian',
    'label_cost'        => 'Chi phí',
    'label_architecture'=> 'Kiến trúc',
    'label_tech_stack'  => 'Tech Stack',

    // Metrics section
    'metrics_title'     => 'Tiêu chí hiệu năng',
    'metrics_subtitle'  => 'Các mục tiêu vận hành cần theo dõi khi hệ thống tăng trưởng.',

    // CTA
    'cta_title'         => 'Cần lập lộ trình mở rộng hệ thống?',
    'cta_desc'          => 'HKIncotech có thể cùng đội ngũ của bạn đánh giá hiện trạng, xác định nút thắt và xây dựng lộ trình hạ tầng phù hợp với tăng trưởng thực tế.',
    'cta_button'        => 'Trao đổi lộ trình',

    // Phase data
    'phases' => [
        [
            'phase'        => 'Giai đoạn 1: Phiên bản kiểm chứng',
            'users'        => '< 1K người dùng',
            'timeline'     => '0–3 tháng',
            'architecture' => 'Ứng dụng đơn khối + cơ sở dữ liệu cơ bản',
            'description'  => 'Bắt đầu đơn giản để kiểm chứng nhu cầu, quy trình và giá trị sử dụng trước khi đầu tư hạ tầng lớn.',
            'stack'        => 'Một cụm ứng dụng nhỏ + cơ sở dữ liệu quản lý',
            'cost'         => '$500–2K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 2: Tăng trưởng ban đầu',
            'users'        => '1K – 50K người dùng',
            'timeline'     => '3–6 tháng',
            'architecture' => 'Cân bằng tải + bản sao đọc',
            'description'  => 'Bổ sung cân bằng tải, mở rộng ngang, cache và bản sao đọc để giảm áp lực lên hệ thống lõi.',
            'stack'        => 'Cân bằng tải + nhiều instance dịch vụ máy chủ + bản sao cơ sở dữ liệu',
            'cost'         => '$2K–5K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 3: Mở rộng ra ngoài',
            'users'        => '50K – 500K người dùng',
            'timeline'     => '6–12 tháng',
            'architecture' => 'Dịch vụ tách miền + Kubernetes',
            'description'  => 'Tách các miền nghiệp vụ quan trọng, điều phối bằng Kubernetes, bổ sung cache và CDN cho tài nguyên tĩnh.',
            'stack'        => 'K8s cluster + 5–10 service replicas + Redis + CDN',
            'cost'         => '$5K–15K/tháng',
        ],
        [
            'phase'        => 'Giai đoạn 4: Đa vùng',
            'users'        => '500K – 5M người dùng',
            'timeline'     => '12–18 tháng',
            'architecture' => 'Đa vùng + phân vùng dữ liệu',
            'description'  => 'Triển khai đa vùng, phân vùng dữ liệu theo địa lý hoặc miền nghiệp vụ, CDN toàn cầu và phương án phục hồi thảm họa.',
            'stack'        => 'Nhiều vùng triển khai, phân vùng dữ liệu, failover toàn cục',
            'cost'         => 'Theo cấu hình đa vùng',
        ],
        [
            'phase'        => 'Giai đoạn 5: Quy mô rất lớn',
            'users'        => '5M – 100M người dùng',
            'timeline'     => '18–24 tháng',
            'architecture' => 'Hướng sự kiện + kho dữ liệu',
            'description'  => 'Kiến trúc hướng sự kiện, phân tích thời gian thực, kho dữ liệu và luồng xử lý dữ liệu liên tục.',
            'stack'        => 'Hàng đợi thông điệp + luồng dữ liệu + data lake + phân tích',
            'cost'         => 'Theo lưu lượng xử lý',
        ],
        [
            'phase'        => 'Giai đoạn 6: Quy mô doanh nghiệp',
            'users'        => 'Quy mô rất lớn',
            'timeline'     => '24+ tháng',
            'architecture' => 'Hạ tầng chuyên biệt + edge',
            'description'  => 'Hạ tầng chuyên biệt, edge computing, lớp dữ liệu tối ưu riêng và đội vận hành chuyên trách.',
            'stack'        => 'Edge + cơ sở dữ liệu tối ưu riêng + hạ tầng chuyên biệt',
            'cost'         => 'Theo mô hình vận hành',
        ],
    ],

    // Metrics data
    'metrics' => [
        ['metric' => 'Cao',        'label' => 'SLA độ sẵn sàng',           'desc' => 'Mục tiêu vận hành theo phạm vi hệ thống'],
        ['metric' => 'Thấp',       'label' => 'Thời gian phản hồi API',    'desc' => 'Độ trễ thấp theo mục tiêu hệ thống'],
        ['metric' => '<3s',        'label' => 'Thời gian tải trang',       'desc' => 'Trên mạng di động phổ biến'],
        ['metric' => '>95',        'label' => 'Điểm Lighthouse',           'desc' => 'Chỉ số hiệu suất'],
        ['metric' => 'Không gián đoạn',       'label' => 'Triển khai liên tục', 'desc' => 'Mô hình blue-green'],
        ['metric' => '24/7',       'label' => 'Giám sát vận hành',        'desc' => 'Cảnh báo theo ngưỡng sự cố'],
        ['metric' => 'Nhanh',      'label' => 'Thời gian tự phục hồi',    'desc' => 'Quy trình failover có kiểm soát'],
        ['metric' => 'Cao',        'label' => 'Khả dụng database',        'desc' => 'Sao lưu và replication theo phạm vi'],
    ],
];
