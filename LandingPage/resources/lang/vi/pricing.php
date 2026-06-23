<?php

return [
    'hero_title' => 'Ngân sách',
    'hero_title_highlight' => 'Theo phạm vi dự án',
    'hero_desc' => 'Mỗi dự án phần mềm có phạm vi, rủi ro và yêu cầu vận hành riêng. Ngân sách được xây dựng dựa trên bối cảnh thực tế, không áp dụng một gói cứng cho mọi khách hàng.',
    'section_plans' => 'GÓI THAM KHẢO',
    'section_included' => 'NỀN TẢNG BÀN GIAO',
    'section_comparison' => 'SO SÁNH PHẠM VI',
    'section_faq' => 'CÂU HỎI THƯỜNG GẶP',

    'plans_title' => 'Ngân sách tham khảo',
    'plans_subtitle' => 'Các mức dưới đây là tham chiếu lập ngân sách, chưa phải báo giá hay cam kết thương mại. Chi phí chính thức, VAT, hạ tầng và điều khoản thanh toán được xác nhận sau khi làm rõ phạm vi.',

    'plans' => [
        [
            'name' => 'Phiên bản đầu tiên',
            'price_from' => '$6,300',
            'price_to' => '$12,000',
            'period' => 'Mức đầu tư theo tháng',
            'desc' => 'Sản phẩm thử nghiệm, ứng dụng web nhỏ hoặc mô-đun nghiệp vụ đầu tiên',
            'highlighted' => false,
            'features' => [
                '1-2 kỹ sư full-stack',
                'Phát triển theo sprint 2 tuần',
                'Phát triển tính năng cốt lõi',
                'Cập nhật trạng thái hàng tuần',
                'Kho mã nguồn và tài liệu bàn giao',
                'Tối ưu hiệu năng cơ bản',
                'Hỗ trợ sau triển khai (30 ngày)'
            ]
        ],
        [
            'name' => 'Tăng trưởng & mở rộng',
            'price_from' => '$12,000',
            'price_to' => '$25,000',
            'period' => 'Mức đầu tư theo tháng',
            'desc' => 'Ứng dụng quy mô vừa, nền tảng SaaS hoặc hệ thống nhiều mô-đun',
            'highlighted' => true,
            'features' => [
                '2-4 kỹ sư full-stack',
                'Quản lý dự án chuyên trách',
                'Thiết kế kiến trúc nâng cao',
                'Review và cập nhật định kỳ',
                'Phát triển API tùy chỉnh',
                'Tối ưu hiệu năng',
                'Thực hành bảo mật theo chuẩn dự án',
                'Hỗ trợ sau triển khai 90 ngày',
                'Đầy đủ nhịp quản trị Agile'
            ]
        ],
        [
            'name' => 'Doanh nghiệp & hệ thống phức tạp',
            'price_from' => '$25,000+',
            'price_to' => null,
            'period' => 'Mức đầu tư theo tháng',
            'desc' => 'ERP, nền tảng đa mô-đun, hệ thống tích hợp nhiều phòng ban',
            'highlighted' => false,
            'features' => [
                '4-8+ kỹ sư full-stack',
                'Đội chuyên trách và quản lý dự án',
                'Kiến trúc cấp doanh nghiệp',
                'Đồng bộ hằng ngày và review mã nguồn',
                'Microservices / thiết kế nâng cao',
                'Rà soát bảo mật và kiểm soát dữ liệu',
                'Phân tích dữ liệu và báo cáo nâng cao',
                'Hỗ trợ 6-12 tháng',
                'Điều chỉnh nguồn lực theo giai đoạn'
            ]
        ]
    ],

    'label_popular' => 'Phù hợp nhiều dự án',
    'label_to' => 'đến',
    'label_per_month' => 'theo tháng, thay đổi theo phạm vi',
    'plan_cta' => 'Trao đổi phạm vi báo giá',

    'services_title' => 'Nền tảng bàn giao trong mỗi dự án',
    'services_subtitle' => 'Các hạng mục kỹ thuật cơ bản để hệ thống có thể phát triển, bàn giao và vận hành rõ ràng.',

    'core_services' => [
        ['icon' => 'computer', 'title' => 'Công nghệ phù hợp', 'desc' => 'Lựa chọn stack theo yêu cầu kiến trúc, đội ngũ vận hành và khả năng mở rộng.'],
        ['icon' => 'security', 'title' => 'Bảo mật nền tảng', 'desc' => 'Mã hóa, phân quyền, kiểm soát truy cập và rà soát bảo mật theo phạm vi.'],
        ['icon' => 'api', 'title' => 'API có tài liệu', 'desc' => 'API rõ hợp đồng dữ liệu, dễ tích hợp và thuận tiện cho bảo trì.'],
        ['icon' => 'storage', 'title' => 'Hạ tầng triển khai', 'desc' => 'Cloud, CDN, tự động hóa triển khai, backup và giám sát theo nhu cầu dự án.'],
        ['icon' => 'analytics', 'title' => 'Theo dõi vận hành', 'desc' => 'Log, cảnh báo, chỉ số hiệu năng và công cụ hỗ trợ xử lý sự cố.'],
        ['icon' => 'assignment', 'title' => 'Tài liệu bàn giao', 'desc' => 'Tài liệu kỹ thuật, hướng dẫn triển khai và thông tin cần thiết cho đội vận hành.'],
    ],

    'comparison_title' => 'So sánh phạm vi',
    'comparison_subtitle' => 'Phân tách phạm vi theo từng gói',
    'comparison_feature' => 'Hạng mục',
    'comparison_mvp' => 'MVP',
    'comparison_growth' => 'Growth',
    'comparison_enterprise' => 'Doanh nghiệp',

    'features' => [
        ['feature' => 'Quy mô đội ngũ', 'startup' => '1-2 kỹ sư', 'growth' => '2-4 kỹ sư', 'enterprise' => '4-8+ kỹ sư'],
        ['feature' => 'Quản lý dự án', 'startup' => 'Dùng chung', 'growth' => 'Chuyên trách', 'enterprise' => 'Chuyên trách'],
        ['feature' => 'Thời lượng sprint', 'startup' => '2 tuần', 'growth' => '2 tuần', 'enterprise' => 'Linh hoạt'],
        ['feature' => 'Rà soát mã nguồn', 'startup' => 'Hàng tuần', 'growth' => '2 lần/tuần', 'enterprise' => 'Hàng ngày'],
        ['feature' => 'Phát triển API', 'startup' => 'Cơ bản', 'growth' => 'Nâng cao', 'enterprise' => 'Tùy chỉnh'],
        ['feature' => 'Kiến trúc', 'startup' => 'Tiêu chuẩn', 'growth' => 'Nâng cao', 'enterprise' => 'Doanh nghiệp'],
        ['feature' => 'Hỗ trợ sau triển khai', 'startup' => '30 ngày', 'growth' => '90 ngày', 'enterprise' => '6-12 tháng'],
        ['feature' => 'Số mô-đun', 'startup' => '1-2 mô-đun', 'growth' => '3-5 mô-đun', 'enterprise' => '5+ mô-đun'],
        ['feature' => 'Mức bảo mật', 'startup' => 'Tiêu chuẩn', 'growth' => 'Nâng cao', 'enterprise' => 'Doanh nghiệp'],
        ['feature' => 'Thời gian triển khai', 'startup' => '3-6 tháng', 'growth' => '6-12 tháng', 'enterprise' => '12+ tháng'],
    ],

    'faq_title' => 'Câu hỏi thường gặp',
    'faq_subtitle' => 'Các nguyên tắc chung trước khi xác định chi phí chính thức.',

    'faqs' => [
        ['q' => 'Làm sao biết dự án của tôi thuộc phạm vi nào?', 'a' => 'Chúng tôi trao đổi trực tiếp để đánh giá phạm vi, độ phức tạp, rủi ro kỹ thuật và tiến độ mục tiêu. Từ đó đưa ra đề xuất chi phí và lộ trình phù hợp với bối cảnh dự án.'],
        ['q' => 'Giá hiển thị có thể thay đổi không?', 'a' => 'Có. Các mức hiển thị là tham chiếu lập ngân sách, không phải báo giá chính thức. Chi phí thực tế phụ thuộc vào phạm vi chi tiết, lựa chọn công nghệ, tiến độ mục tiêu, quy mô đội ngũ, VAT, hạ tầng và mức hỗ trợ sau triển khai.'],
        ['q' => 'Có làm dự án trọn gói không?', 'a' => 'Có, khi phạm vi, tiêu chí nghiệm thu và rủi ro kỹ thuật đã được xác định rõ. Với dự án còn cần khám phá hoặc thay đổi thường xuyên, mô hình theo thời gian và nguồn lực sẽ phù hợp hơn.'],
        ['q' => 'Có phí ẩn không?', 'a' => 'Không có phí ẩn. Chi phí hạ tầng (AWS, hosting, domain) được tách riêng và công khai từ đầu.'],
        ['q' => 'Cấu trúc thanh toán như thế nào?', 'a' => 'Thông thường xuất hóa đơn theo tháng hoặc theo mốc nghiệm thu. Với khách hàng doanh nghiệp, hai bên có thể thống nhất điều khoản riêng theo quy trình mua hàng.'],
        ['q' => 'Có thể tăng/giảm team trong quá trình làm không?', 'a' => 'Hoàn toàn được. Bạn có thể điều chỉnh quy mô đội ngũ theo nhu cầu với thông báo trước.'],
        ['q' => 'Giá có bao gồm hỗ trợ sau triển khai không?', 'a' => 'Có. Thời gian hỗ trợ tùy gói: 30 ngày cho phiên bản đầu tiên, 90 ngày cho giai đoạn tăng trưởng, hoặc 6-12 tháng cho phạm vi doanh nghiệp.'],
        ['q' => 'Ai sở hữu mã nguồn sau dự án?', 'a' => 'Quyền sở hữu mã nguồn được quy định rõ trong hợp đồng. Với dự án phát triển theo yêu cầu, HKIncotech bàn giao mã nguồn, tài liệu và hướng dẫn triển khai theo phạm vi đã thống nhất.'],
    ],

    'cta_title' => 'Dự án của bạn có phạm vi riêng?',
    'cta_desc' => 'HKIncotech có thể cùng bạn làm rõ phạm vi, độ phức tạp, mô hình đội ngũ và lộ trình triển khai trước khi đề xuất ngân sách.',
    'cta_button' => 'Trao đổi phạm vi báo giá',
];
