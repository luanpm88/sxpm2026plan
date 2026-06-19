<?php

return [
    // Hero Section
    'hero_title' => 'Quy Trình Phát Triển',
    'hero_title_highlight' => 'SCRUM',
    'hero_desc' => 'Mô hình phát triển theo sprint giúp khách hàng kiểm soát ưu tiên, theo dõi tiến độ, review kết quả và nghiệm thu theo từng giai đoạn rõ ràng.',
    'hero_cta' => 'Trao Đổi Mô Hình Triển Khai',
    'section_process' => 'QUY TRÌNH',
    'section_sprint' => 'CHU KỲ SPRINT',
    'section_benefits' => 'LỢI ÍCH CHÍNH',
    'section_journey' => 'HÀNH TRÌNH TRIỂN KHAI',
    'section_why' => 'CÁCH CHÚNG TÔI LÀM VIỆC',

    // 6 Steps Section
    'steps_title' => '6 Bước Trong Quy Trình SCRUM',
    'steps_subtitle' => 'Từ khảo sát yêu cầu đến triển khai và vận hành chính thức.',
    'steps' => [
        [
            'num' => 1,
            'icon' => 'lightbulb',
            'title' => 'Khảo sát & định hình phạm vi',
            'desc' => 'Làm rõ mục tiêu, người dùng, quy trình, rủi ro và ưu tiên triển khai.',
        ],
        [
            'num' => 2,
            'icon' => 'architecture',
            'title' => 'Thiết kế kiến trúc & kế hoạch sprint',
            'desc' => 'Xác định kiến trúc, dữ liệu, luồng giao diện và backlog theo từng giai đoạn.',
        ],
        [
            'num' => 3,
            'icon' => 'code',
            'title' => 'Phát triển theo sprint',
            'desc' => 'Triển khai tính năng theo chu kỳ ngắn, có review, kiểm thử và cập nhật tiến độ.',
        ],
        [
            'num' => 4,
            'icon' => 'verified',
            'title' => 'QA & nghiệm thu',
            'desc' => 'Kiểm thử chức năng, tích hợp, UAT, hiệu năng và các kịch bản ngoại lệ.',
        ],
        [
            'num' => 5,
            'icon' => 'cloud_upload',
            'title' => 'Triển Khai & Phát Hành',
            'desc' => 'Triển khai CI/CD, thiết lập giám sát, chuẩn bị phương án quay lui và xử lý sự cố.',
        ],
        [
            'num' => 6,
            'icon' => 'support_agent',
            'title' => 'Hỗ trợ & cải tiến',
            'desc' => 'Theo dõi vận hành, tối ưu hiệu năng, xử lý phát sinh và mở rộng theo nhu cầu.',
        ],
    ],

    // Sprint Cycle Section
    'sprint_title' => 'Mô hình vận hành sprint',
    'sprint_subtitle' => 'Mỗi sprint được quản trị như một vòng giao hàng có kiểm soát: làm rõ phạm vi, triển khai kỹ thuật, kiểm thử, review với stakeholder và chuẩn bị phát hành.',
    'sprint_items' => [
        [
            'icon' => 'fact_check',
            'title' => 'Chốt phạm vi & kế hoạch sprint',
            'desc' => 'Thống nhất ưu tiên kinh doanh, mục tiêu sprint, tiêu chí nghiệm thu, phụ thuộc và rủi ro trước khi bắt đầu triển khai.',
            'artifact' => 'Mục tiêu sprint + tiêu chí nghiệm thu',
        ],
        [
            'icon' => 'sync_alt',
            'title' => 'Nhịp điều phối thực thi',
            'desc' => 'Giữ sản phẩm, kỹ thuật, QA và quản trị dự án cùng nhịp bằng cập nhật ngắn, xử lý blocker và rà soát rủi ro.',
            'artifact' => 'Cập nhật tiến độ + risk log',
        ],
        [
            'icon' => 'deployed_code',
            'title' => 'Xây dựng kỹ thuật',
            'desc' => 'Triển khai phạm vi đã chốt bằng review mã nguồn, kỷ luật branch, CI/CD và kiểm tra ở mức kiến trúc.',
            'artifact' => 'Increment có thể chạy được',
        ],
        [
            'icon' => 'verified',
            'title' => 'QA, review & nghiệm thu',
            'desc' => 'Xác thực chức năng, tích hợp, dữ liệu, kịch bản ngoại lệ và phản hồi stakeholder trước khi sign-off.',
            'artifact' => 'Kết quả test + biên bản review',
        ],
        [
            'icon' => 'published_with_changes',
            'title' => 'Sẵn sàng phát hành & cải tiến',
            'desc' => 'Chuẩn bị triển khai, cập nhật tài liệu, chốt bài học và đưa thay đổi có kiểm soát vào sprint kế tiếp.',
            'artifact' => 'Checklist release + backlog kế tiếp',
        ],
    ],
    'sprint_model_kicker' => 'Quản trị giao hàng',
    'sprint_model_title' => 'Cách một sprint trở thành phần mềm có thể review và nghiệm thu',
    'sprint_model_desc' => 'Sprint không chỉ là một khung thời gian phát triển. Đó là vòng quản trị biến phạm vi thành phần mềm đã kiểm thử, quyết định rõ ràng và bàn giao có kiểm soát.',
    'sprint_model_stages' => [
        [
            'icon' => 'assignment',
            'title' => 'Backlog',
            'desc' => 'Ưu tiên, phạm vi, tiêu chí nghiệm thu',
        ],
        [
            'icon' => 'terminal',
            'title' => 'Build',
            'desc' => 'Kỹ thuật, review, CI/CD',
        ],
        [
            'icon' => 'rule',
            'title' => 'Verify',
            'desc' => 'QA, UAT, kiểm tra tích hợp',
        ],
        [
            'icon' => 'rocket_launch',
            'title' => 'Release',
            'desc' => 'Triển khai, giám sát, bàn giao',
        ],
    ],
    'sprint_controls' => [
        [
            'icon' => 'groups',
            'title' => 'Review với stakeholder',
            'desc' => 'Phần việc đã chạy được được trình bày đủ sớm để nhận phản hồi nghiệp vụ.',
        ],
        [
            'icon' => 'shield',
            'title' => 'Cổng kiểm soát chất lượng',
            'desc' => 'Definition of Done, test và defect được minh bạch trước khi phát hành.',
        ],
        [
            'icon' => 'monitoring',
            'title' => 'Kiểm soát tiến độ',
            'desc' => 'Rủi ro, blocker và tác động thay đổi được theo dõi trong suốt sprint.',
        ],
        [
            'icon' => 'inventory',
            'title' => 'Tài sản bàn giao',
            'desc' => 'Tài liệu, ghi chú phát hành và bước kế tiếp đi cùng từng increment.',
        ],
    ],

    // Benefits Section
    'benefits_title' => 'Lợi Ích Của Quy Trình SCRUM',
    'benefits_subtitle' => 'Lợi ích của mô hình phát triển theo sprint khi triển khai phần mềm theo yêu cầu.',
    'benefits' => [
        [
            'icon' => 'visibility',
            'title' => 'Minh Bạch & Kiểm Soát',
            'desc' => 'Review sprint giúp khách hàng thấy kết quả thật, nắm rủi ro sớm và kiểm soát thứ tự ưu tiên trong từng giai đoạn.',
        ],
        [
            'icon' => 'tune',
            'title' => 'Linh Hoạt & Thích Ứng',
            'desc' => 'Phản hồi sau mỗi sprint giúp điều chỉnh phạm vi có kiểm soát và giảm rủi ro khi yêu cầu thay đổi.',
        ],
        [
            'icon' => 'check_circle',
            'title' => 'Chất Lượng Cao',
            'desc' => 'Review mã nguồn, kiểm thử và CI/CD giúp phát hiện lỗi sớm và giảm chi phí sửa chữa.',
        ],
        [
            'icon' => 'speed',
            'title' => 'Đội Ngũ Hiệu Quả',
            'desc' => 'Đội ngũ có ưu tiên rõ ràng, trao đổi đều đặn và giảm thời gian chờ giữa các vai trò.',
        ],
        [
            'icon' => 'shield',
            'title' => 'Giảm Thiểu Rủi Ro',
            'desc' => 'Triển khai theo từng phần giúp phát hiện vấn đề sớm, tránh dồn rủi ro vào cuối dự án.',
        ],
        [
            'icon' => 'trending_up',
            'title' => 'Giá Trị Đầu Tư Rõ Ràng',
            'desc' => 'Ưu tiên tính năng theo giá trị vận hành và tác động kinh doanh thay vì phát triển dàn trải.',
        ],
    ],

    // Journey Section
    'journey_title' => 'Hành Trình Cùng HKIncotech',
    'journey_subtitle' => '6 giai đoạn từ lúc khảo sát đến khi hệ thống đi vào vận hành.',
    'journey_phase_label' => 'GĐ',
    'journey' => [
        [
            'phase' => 'Giai Đoạn 1: Khảo Sát Ban Đầu',
            'content' => 'Làm rõ mục tiêu kinh doanh, bối cảnh vận hành, ràng buộc kỹ thuật và các giả định cần kiểm chứng.',
        ],
        [
            'phase' => 'Giai Đoạn 2: Khám Phá & Thiết Kế (2-3 Tuần)',
            'content' => 'Thiết kế luồng nghiệp vụ, giao diện, dữ liệu và kiến trúc kỹ thuật trước khi bước vào phát triển chính thức.',
        ],
        [
            'phase' => 'Giai Đoạn 3: Phát Triển Sprint (6-12 Tuần)',
            'content' => 'Phát triển theo sprint. Mỗi sprint kết thúc bằng phần việc có thể review, kiểm thử và nghiệm thu.',
        ],
        [
            'phase' => 'Giai Đoạn 4: QA & Kiểm Thử (2-3 Tuần)',
            'content' => 'Kiểm thử chức năng, hiệu năng, bảo mật và UAT; xử lý lỗi và tối ưu trước khi phát hành.',
        ],
        [
            'phase' => 'Giai Đoạn 5: Phát Hành & Triển Khai (1 Tuần)',
            'content' => 'Chuẩn bị môi trường vận hành, triển khai, thiết lập giám sát, kế hoạch quay lui và hỗ trợ phát hành chính thức.',
        ],
        [
            'phase' => 'Giai Đoạn 6: Hỗ Trợ & Phát Triển (Liên Tục)',
            'content' => 'Theo dõi vận hành, tối ưu hệ thống, bổ sung tính năng và mở rộng theo nhu cầu thực tế.',
        ],
    ],

    // Why Choose Section
    'why_title' => 'Cách HKIncotech Tổ Chức Dự Án Agile',
    'why_subtitle' => 'Quản trị sprint, kiểm soát chất lượng và bàn giao phần mềm theo từng giai đoạn rõ ràng.',
    'why_items' => [
        [
            'title' => 'Quản trị sprint có kỷ luật',
            'desc' => 'Backlog, tiêu chí hoàn thành, review và nghiệm thu được quản lý rõ ràng trong từng sprint.',
        ],
        [
            'title' => 'Quy Trình Minh Bạch',
            'desc' => 'Báo cáo tiến độ, điểm nghẽn, phạm vi và rủi ro được cập nhật đều đặn cho các bên liên quan.',
        ],
        [
            'title' => 'Linh Hoạt & Thích Ứng',
            'desc' => 'Thay đổi yêu cầu được đưa vào backlog, đánh giá tác động và ưu tiên theo giá trị.',
        ],
        [
            'title' => 'Chất Lượng Trước Tiên',
            'desc' => 'Kiểm thử tự động, review mã nguồn và CI/CD giúp bảo vệ chất lượng bàn giao.',
        ],
        [
            'title' => 'Bàn giao theo giai đoạn',
            'desc' => 'Ưu tiên các phần giá trị cao trước, kiểm chứng với người dùng và mở rộng sau khi có dữ liệu.',
        ],
        [
            'title' => 'Đối Tác Lâu Dài',
            'desc' => 'Sau khi hệ thống vận hành chính thức, đội ngũ tiếp tục hỗ trợ, tối ưu và mở rộng theo nhu cầu.',
        ],
    ],

    // CTA Section
    'cta_title' => 'Trao Đổi Mô Hình Triển Khai Agile',
    'cta_desc' => 'Trao đổi phạm vi dự án, mô hình phối hợp và cách triển khai SCRUM phù hợp với mức độ trưởng thành của đội ngũ.',
    'cta_button' => 'Trao Đổi Quy Trình',
];
