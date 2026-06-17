<?php

return [
    'hero_title' => 'Dự Án',
    'hero_title_highlight' => 'Tiêu Biểu',
    'hero_desc' => '50+ dự án hoàn thành trên 10+ lĩnh vực. Từ MVP startup đến hệ thống doanh nghiệp quy mô lớn — mỗi hợp tác được đánh giá bằng kết quả đo lường cụ thể.',

    'stats' => [
        ['num' => '50+', 'label' => 'Dự Án Hoàn Thành'],
        ['num' => '10+', 'label' => 'Ngành Đã Phục Vụ'],
        ['num' => '$1M', 'label' => 'Giá Trị Dự Án'],
        ['num' => 'Cao', 'label' => 'Độ Hài Lòng Khách Hàng'],
        ['num' => '12+', 'label' => 'Năm Kinh Nghiệm'],
        ['num' => '10+', 'label' => 'Quốc Gia Phục Vụ'],
    ],

    'featured_title' => 'Dự Án Nổi Bật',
    'featured_subtitle' => 'Giải pháp tiêu biểu và kết quả đạt được',

    'case_studies' => [
        [
            'title' => 'Nền Tảng Giáo Dục: Tự Động Hóa Lịch Biểu',
            'industry' => 'Giáo Dục',
            'challenge' => 'Quản lý lịch biểu, phân công lớp, báo cáo học tập và điểm danh cho 10,000+ học sinh. Lập lịch thủ công mất 3 tuần mỗi học kỳ với xung đột thường xuyên.',
            'solution' => 'Cung cấp nền tảng hoạt động toàn diện sử dụng PHP API stack, tập trung vào độ tin cậy và khả năng mở rộng. Triển khai tạo lịch biểu linh hoạt, quy tắc cân bằng tải công việc, điểm danh tự động và báo cáo. Thêm hạ tầng cao sẵn sàng với cân bằng tải PostgreSQL, bộ nhớ đệm và hàng đợi kiên cường để xử lý các thời kỳ cao điểm tuyển sinh và lập lịch.',
            'results' => [
                'Thời gian lập lịch: tuần → ngày',
                'Độ chính xác dữ liệu cao',
                '10.000+ học sinh được quản lý',
                'Tỷ lệ áp dụng cao',
                'Tiết kiệm đáng kể giờ vận hành mỗi học kỳ'
            ],
            'tech' => 'PHP, REST API, PostgreSQL (Load Balancing), Redis, React, React Native'
        ],
        [
            'title' => 'Hệ Thống Quản Lý Kho Hàng',
            'industry' => 'Logistics & Bán Lẻ',
            'challenge' => 'Quản lý ~10M SKU trên 50+ chi nhánh. Những điểm đau: kiểm soát hàng tồn kho, nhập/xuất hàng, ký gửi, quét mã vạch, kiểm kê hàng tháng. Quy trình thủ công dẫn đến báo cáo không chính xác. Cần dự báo nhu cầu chính xác.',
            'solution' => 'Xây dựng WMS toàn diện với quét mã vạch thời gian thực và điều hòa tự động. Triển khai dự báo nhu cầu thông qua phân tích thừa số ma trận và chuỗi thời gian. Thêm bảng điều khiển phân tích, đồng bộ hóa đa vị trí và tài liệu ký gửi được hỗ trợ blockchain để tăng tính minh bạch.',
            'results' => [
                'Độ chính xác hàng tồn kho cải thiện lớn',
                'Độ chính xác dự báo cao',
                'Thông lượng giao dịch lớn',
                'Thời gian kiểm kê giảm đáng kể',
                'Hàng tồn kho chết giảm đáng kể',
                'Tiết kiệm chi phí đáng kể'
            ],
            'tech' => 'Python, Machine Learning, PostgreSQL, Redis, React, Node.js, Blockchain'
        ],
        [
            'title' => 'Hệ Thống ERP Quản Lý Doanh Nghiệp',
            'industry' => 'Quản Lý Doanh Nghiệp',
            'challenge' => 'Công ty 100+ nhân viên cần tích hợp kế toán, mua hàng, tồn kho, thương mại điện tử và hoạt động. Dữ liệu tồn kho không đồng bộ với kế toán; các mô-đun rời rạc làm chậm báo cáo.',
            'solution' => 'Xây dựng ERP tích hợp: kế toán (GL, AR, AP), tồn kho, mua hàng, đồng bộ thương mại điện tử (Shopify/WooCommerce), lương HR và báo cáo. Thêm hợp nhất thời gian thực, bảng điều khiển BI, tự động hóa quy trình công việc và ứng dụng di động cho nhân viên thực địa.',
            'results' => [
                'Hợp nhất rút ngắn từ vài ngày xuống vài phút',
                'Nỗ lực xử lý hóa đơn giảm đáng kể',
                'Điều hòa kế toán tự động',
                'Tạo báo cáo rút ngắn từ vài giờ xuống vài phút',
                'Ra quyết định nhanh hơn',
                'Tỷ lệ áp dụng cao chỉ trong vài tháng'
            ],
            'tech' => 'Node.js, PostgreSQL, React, Python, Elasticsearch, AWS, Docker, Microservices'
        ],
    ],

    'label_challenge' => 'Bài Toán',
    'label_solution' => 'Giải Pháp',
    'label_results' => 'Kết Quả',
    'label_tech' => 'Công Nghệ',

    'industries_title' => 'Ngành Đã Triển Khai',
    'industries_subtitle' => 'Kinh nghiệm đa ngành và năng lực theo từng domain',

    'industries' => [
        ['icon' => 'shopping_cart', 'name' => 'Thương Mại Điện Tử & Bán Lẻ', 'description' => 'Xây dựng cửa hàng trực tuyến tinh gọn, tích hợp POS và phân tích để giúp các nhà bán lẻ nhỏ hiện đại hóa bán hàng.'],
        ['icon' => 'trending_up', 'name' => 'FinTech & Ngân Hàng', 'description' => 'Phát triển bảng điều khiển thân thiện với tuân thủ, luồng thanh toán và báo cáo cho các nhóm fintech giai đoạn đầu.'],
        ['icon' => 'local_hospital', 'name' => 'Y Tế & Chăm Sóc Sức Khỏe', 'description' => 'Tạo công cụ đặt lịch hẹn, tiếp nhận và theo dõi dữ liệu với tập trung vào bảo mật và quyền riêng tư bệnh nhân.'],
        ['icon' => 'school', 'name' => 'EdTech & Đào Tạo', 'description' => 'Xây dựng cổng thông tin khóa học và công cụ đánh giá để số hóa các chương trình đào tạo và cải thiện sự tham gia của người học.'],
        ['icon' => 'local_shipping', 'name' => 'Logistics & Chuỗi Cung Ứng', 'description' => 'Triển khai bảng điều khiển theo dõi vận chuyển và dự báo đơn giản để giảm bớt điều phối thủ công.'],
        ['icon' => 'factory', 'name' => 'Sản Xuất & IoT', 'description' => 'Tạo mẫu giám sát thiết bị và bảng KPI để hiển thị những hiểu biết về sản xuất thời gian thực.'],
        ['icon' => 'apartment', 'name' => 'Bất Động Sản & Xây Dựng', 'description' => 'Cung cấp công cụ danh sách, theo dõi khách hàng tiềm năng và hiển thị tiến độ cho các nhóm bất động sản nhỏ.'],
        ['icon' => 'sports_esports', 'name' => 'Trò Chơi & Giải Trí', 'description' => 'Phát hành các cổng thông tin sự kiện, cộng đồng và nội dung nhẹ cho các khán giả trò chơi thích hợp.'],
        ['icon' => 'psychology', 'name' => 'AI & Khoa Học Dữ Liệu', 'description' => 'Xây dựng các trợ lý AI thực tế và đường ống dữ liệu để tự động hóa các quy trình làm việc lặp đi lặp lại.'],
        ['icon' => 'cloud', 'name' => 'SaaS & Điện Toán Đám Mây', 'description' => 'Giúp các nhóm khởi chạy MVP với các chủ đề đa người dùng cơ bản, xác thực và thanh toán sẵn sàng phát triển.'],
    ],

    'section_testimonials' => 'PHẢN HỒI KHÁCH HÀNG',
    'testimonials_title' => 'Phản Hồi Khách Hàng',
    'testimonials_subtitle' => 'Chia sẻ từ các đối tác và khách hàng đã hợp tác cùng chúng tôi.',

    'testimonials' => [
        ['name' => 'CEO, E-Commerce Startup', 'text' => 'HKIncotech không chỉ cung cấp phạm vi công việc mà còn chủ động đề xuất cải tiến. Giao tiếp xuất sắc và đáp ứng nhanh.'],
        ['name' => 'Founder, FinTech Startup', 'text' => 'Kinh nghiệm bảo mật và tuân thủ của họ giúp chúng tôi vượt qua ISO 27001 và PCI DSS ngay lần đầu tiên.'],
        ['name' => 'Director, Healthcare Provider', 'text' => 'Kiến thức chuyên môn y tế sâu sắc. Hiệu suất ML vượt quá kỳ vọng.'],
        ['name' => 'VP Product, Logistics Company', 'text' => 'Tăng từ 100 lên 2.000 vận chuyển/ngày mà không bị gián đoạn. Lập kế hoạch hạ tầng mạnh mẽ.'],
        ['name' => 'CTO, Retail Chain', 'text' => 'Phân tích thời gian thực cho phép đưa ra quyết định dựa trên dữ liệu. ROI tích cực trong 3 tháng.'],
        ['name' => 'Founder, SaaS Startup', 'text' => 'Hỗ trợ sau khi ra mắt rất xuất sắc: phản hồi 24/7, xử lý nhanh và luôn tập trung vào giải pháp.'],
    ],

    'cta_title' => 'Sẵn Sàng Cho Dự Án Tiếp Theo?',
    'cta_desc' => 'Bắt đầu trao đổi với chúng tôi ngay hôm nay.',
    'cta_button' => 'Liên Hệ Ngay',
];
