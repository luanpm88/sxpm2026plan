<?php

return [
    'hero_title' => 'Gói Linh Hoạt',
    'hero_title_highlight' => 'Theo Nhu Cầu',
    'hero_desc' => 'Mỗi dự án là duy nhất. Chúng tôi tùy chỉnh chi phí theo phạm vi, độ phức tạp và timeline. Không có gói cứng, chỉ có giải pháp phù hợp.',

    'plans_title' => 'Bảng Giá Tham Khảo',
    'plans_subtitle' => 'Mức giá dưới đây chỉ mang tính tham khảo. Chi phí thực tế phụ thuộc vào yêu cầu cụ thể của dự án.',

    'plans' => [
        [
            'name' => 'MVP / Startup',
            'price_from' => '$6,300',
            'price_to' => '$12,000',
            'period' => 'Mức đầu tư theo tháng',
            'desc' => 'Dự án MVP, prototype, ứng dụng web nhỏ',
            'highlighted' => false,
            'features' => [
                '1-2 Full Stack Developer',
                'Agile/Sprint (2 tuần/sprint)',
                'Phát triển tính năng cốt lõi',
                'Cập nhật trạng thái hàng tuần',
                'Git repo & tài liệu',
                'Tối ưu hiệu năng cơ bản',
                'Hỗ trợ sau triển khai (30 ngày)'
            ]
        ],
        [
            'name' => 'Growth / Scale-up',
            'price_from' => '$12,000',
            'price_to' => '$25,000',
            'period' => 'Mức đầu tư theo tháng',
            'desc' => 'Ứng dụng quy mô vừa, SaaS, platform',
            'highlighted' => true,
            'features' => [
                '2-4 Full Stack Developer',
                'Project Manager chuyên trách',
                'Thiết kế kiến trúc nâng cao',
                'Demo & review 2 lần/tuần',
                'Phát triển API tùy chỉnh',
                'Tối ưu hiệu năng',
                'Best practices về bảo mật',
                'Hỗ trợ sau triển khai 90 ngày',
                'Đầy đủ Agile ceremonies'
            ]
        ],
        [
            'name' => 'Enterprise / Complex',
            'price_from' => '$25,000+',
            'price_to' => null,
            'period' => 'Mức đầu tư theo tháng',
            'desc' => 'Hệ thống phức tạp, ERP, nền tảng đa module',
            'highlighted' => false,
            'features' => [
                '4-8+ Full Stack Developer',
                'Đội chuyên trách + Scrum Master',
                'Kiến trúc cấp doanh nghiệp',
                'Daily standup & code review',
                'Microservices / thiết kế nâng cao',
                'Security & compliance audit',
                'Analytics & báo cáo nâng cao',
                'Hỗ trợ 6-12 tháng',
                'Co giãn nguồn lực linh hoạt'
            ]
        ]
    ],

    'label_popular' => 'Phổ Biến Nhất',
    'label_to' => 'đến',
    'label_per_month' => 'theo tháng, thay đổi theo phạm vi',
    'plan_cta' => 'Nhận Tư Vấn Báo Giá',

    'services_title' => 'Bao Gồm Trong Mọi Dự Án',
    'services_subtitle' => 'Các dịch vụ cốt lõi có trong mọi dự án',

    'core_services' => [
        ['icon' => 'computer', 'title' => 'Tech Stack Hiện Đại', 'desc' => 'React, Node.js, AWS, TypeScript, Python và các công nghệ mới nhất.'],
        ['icon' => 'security', 'title' => 'Ưu Tiên Bảo Mật', 'desc' => 'SSL, mã hóa, security audit và tiêu chuẩn compliance.'],
        ['icon' => 'api', 'title' => 'API Sạch', 'desc' => 'RESTful API tài liệu rõ ràng, dễ mở rộng, sẵn sàng production.'],
        ['icon' => 'storage', 'title' => 'Cloud Infrastructure', 'desc' => 'Triển khai AWS/GCP, CDN, auto-scaling, backup tự động.'],
        ['icon' => 'analytics', 'title' => 'Theo Dõi Hiệu Năng', 'desc' => 'Giám sát thời gian thực, cảnh báo và analytics hiệu năng.'],
        ['icon' => 'assignment', 'title' => 'Tài Liệu Đầy Đủ', 'desc' => 'Code docs, API docs, hướng dẫn triển khai và best practices.'],
    ],

    'comparison_title' => 'So Sánh Chi Tiết',
    'comparison_subtitle' => 'Phân tách phạm vi theo từng gói',
    'comparison_feature' => 'Hạng mục',
    'comparison_mvp' => 'MVP',
    'comparison_growth' => 'Growth',
    'comparison_enterprise' => 'Enterprise',

    'features' => [
        ['feature' => 'Quy mô đội ngũ', 'startup' => '1-2 devs', 'growth' => '2-4 devs', 'enterprise' => '4-8+ devs'],
        ['feature' => 'Project Manager', 'startup' => 'Dùng chung', 'growth' => 'Chuyên trách', 'enterprise' => 'Chuyên trách'],
        ['feature' => 'Thời lượng sprint', 'startup' => '2 tuần', 'growth' => '2 tuần', 'enterprise' => 'Linh hoạt'],
        ['feature' => 'Code Review', 'startup' => 'Hàng tuần', 'growth' => '2 lần/tuần', 'enterprise' => 'Hàng ngày'],
        ['feature' => 'Phát triển API', 'startup' => 'Cơ bản', 'growth' => 'Nâng cao', 'enterprise' => 'Tùy chỉnh'],
        ['feature' => 'Kiến trúc', 'startup' => 'Tiêu chuẩn', 'growth' => 'Nâng cao', 'enterprise' => 'Doanh nghiệp'],
        ['feature' => 'Hỗ trợ sau go-live', 'startup' => '30 ngày', 'growth' => '90 ngày', 'enterprise' => '6-12 tháng'],
        ['feature' => 'Số module', 'startup' => '1-2 module', 'growth' => '3-5 module', 'enterprise' => '5+ module'],
        ['feature' => 'Mức bảo mật', 'startup' => 'Tiêu chuẩn', 'growth' => 'Nâng cao', 'enterprise' => 'Doanh nghiệp'],
        ['feature' => 'Timeline', 'startup' => '3-6 tháng', 'growth' => '6-12 tháng', 'enterprise' => '12+ tháng'],
    ],

    'faq_title' => 'Câu Hỏi Thường Gặp',
    'faq_subtitle' => 'Mọi thông tin bạn cần biết về báo giá',

    'faqs' => [
        ['q' => 'Làm sao biết dự án của tôi thuộc phạm vi nào?', 'a' => 'Chúng tôi có buổi tư vấn miễn phí 30 phút để đánh giá phạm vi, độ phức tạp và timeline. Từ đó đưa ra đề xuất chi phí và tiến độ chính xác.'],
        ['q' => 'Giá hiển thị có thể thay đổi không?', 'a' => 'Có. Giá hiển thị chỉ mang tính tham khảo. Chi phí thực tế phụ thuộc vào phạm vi chi tiết, lựa chọn công nghệ, timeline, quy mô đội ngũ và mức hỗ trợ sau triển khai.'],
        ['q' => 'Có làm dự án fixed-price không?', 'a' => 'Có, nhưng chỉ khi phạm vi được định nghĩa 100%. Với dự án còn cần khám phá hoặc thay đổi yêu cầu, chúng tôi khuyến nghị time & materials.'],
        ['q' => 'Có phí ẩn không?', 'a' => 'Không có phí ẩn. Chi phí hạ tầng (AWS, hosting, domain) được tách riêng và công khai từ đầu.'],
        ['q' => 'Cấu trúc thanh toán như thế nào?', 'a' => 'Thông thường xuất hóa đơn theo tháng với điều khoản Net-30. Với khách hàng enterprise có thể đàm phán phương án riêng.'],
        ['q' => 'Có thể tăng/giảm team trong quá trình làm không?', 'a' => 'Hoàn toàn được. Bạn có thể điều chỉnh quy mô đội ngũ theo nhu cầu với thông báo trước.'],
        ['q' => 'Giá có bao gồm hỗ trợ sau triển khai không?', 'a' => 'Có. Thời gian hỗ trợ tùy gói: 30 ngày (MVP), 90 ngày (Growth), 6-12 tháng (Enterprise).'],
        ['q' => 'Ai sở hữu mã nguồn sau dự án?', 'a' => 'Bạn sở hữu 100% mã nguồn. Chúng tôi bàn giao đầy đủ source code, tài liệu và hướng dẫn triển khai. Không có phí license hay royalty.'],
    ],

    'cta_title' => 'Dự Án Của Bạn Khác Các Gói Trên?',
    'cta_desc' => 'Hoàn toàn phù hợp. Chúng tôi tùy chỉnh báo giá theo yêu cầu cụ thể của bạn. Cùng trao đổi nhu cầu ngay.',
    'cta_button' => 'Tư Vấn Miễn Phí',
];
