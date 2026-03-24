<?php

return [
    'badge' => 'Sáng Kiến Nghiên Cứu',
    'title' => 'HKSpace: Nền Tảng Kiến Trúc Cho Hệ Thống Doanh Nghiệp Thích Ứng',
    'intro' => 'HKSpace ra đời từ một nhận định cốt lõi: hầu hết phần mềm doanh nghiệp được xây dựng trên kiến trúc phân mảnh, chuyên biệt theo lĩnh vực — điều này hạn chế khả năng mở rộng và tích hợp. Chúng tôi xây dựng HKSpace không phải như một công cụ quản lý tác vụ, mà như một nền tảng hạ tầng cốt lõi — một nền móng cấu trúc có khả năng hỗ trợ đa dạng quy trình, mô hình dữ liệu và mẫu tích hợp xuyên suốt doanh nghiệp. Nền tảng trừu tượng hóa sự phức tạp của multi-tenancy, đồng bộ thời gian thực và điện toán phân tán, cho phép tổ chức xây dựng hệ thống thích ứng phát triển cùng nhu cầu thay vì bị ràng buộc.',

    'challenge_title' => 'Thách Thức Chúng Tôi Giải Quyết',
    'challenge_desc' => 'Phần mềm doanh nghiệp luôn tồn tại ràng buộc kiến trúc: hệ thống thường được xây riêng cho từng lĩnh vực, khiến chúng khó thích ứng và tích hợp. Cô lập dữ liệu trở thành hình thức bảo mật thay vì yêu cầu thiết kế, và việc không thể kết hợp hành vi xuyên ranh giới buộc tổ chức rơi vào vòng lặp giải pháp rời rạc. HKSpace được thiết kế để giải quyết vấn đề cấu trúc này bằng cách cung cấp nền tảng để xây dựng hệ thống có khả năng mở rộng và kết hợp. Nền tảng cần phải:',
    'challenge_items' => [
        'Cung cấp tầng lưu trữ tổng quát hỗ trợ mô hình dữ liệu tùy ý mà không bị khóa schema',
        'Cho phép giao tiếp bất đồng bộ, hướng sự kiện giữa các hệ thống con liên kết lỏng',
        'Đảm bảo cô lập tenant hoàn toàn ở tầng hạ tầng, không phải tầng ứng dụng',
        'Hỗ trợ lập lịch tài nguyên thông minh và cân bằng tải thích ứng không cần can thiệp thủ công',
    ],

    'strategy_title' => 'Chiến Lược Kiến Trúc',
    'strategy_desc' => 'Thay vì tối ưu cho một trường hợp sử dụng cụ thể, chúng tôi kiến trúc HKSpace như một hệ thống phân tán đa mục đích. Triết lý thiết kế tập trung vào phân tách quan tâm qua các tầng rõ ràng: hạ tầng, đồng bộ, lưu trữ và kết hợp. Phân tầng này cho phép phát triển độc lập và giúp xây dựng hệ thống cấp cao mà không cần triển khai lại các bài toán hệ thống phân tán cốt lõi.',
    'strategy_composable_title' => 'Kiến Trúc Có Thể Kết Hợp',
    'strategy_composable_desc' => 'Các trừu tượng cốt lõi cung cấp giao diện rõ ràng cho quản lý trạng thái, lan truyền sự kiện và phối hợp phân tán. Điều này cho phép các tầng chuyên biệt được kết hợp mà không kế thừa ràng buộc kiến trúc từ triển khai bên dưới.',
    'strategy_extensibility_title' => 'Mở Rộng Thông Qua Trừu Tượng Hóa',
    'strategy_extensibility_desc' => 'Backend lưu trữ dạng plugin, giao thức đồng bộ cấu hình được và mẫu adapter cho tích hợp bên ngoài cho phép hệ thống thích ứng với đa dạng yêu cầu vận hành mà không cần sửa đổi lõi.',
    'strategy_ai_title' => 'Hạ Tầng AI-Native',
    'strategy_ai_desc' => 'Nền tảng được thiết kế để hiển thị các điểm quyết định và luồng dữ liệu theo cách mà hệ thống tự trị có thể tiêu thụ và hành động. Điều này tạo ra các điểm tích hợp tự nhiên nơi các tầng thông minh có thể tối ưu phân bổ tài nguyên, thích ứng mẫu hành vi và tự động hóa phối hợp mà không cần lập trình rõ ràng.',

    'milestones_title' => 'Mục Tiêu Cột Mốc',
    'milestones_desc' => 'Lộ trình phát triển của chúng tôi tập trung vào đạt được các mục tiêu hiệu suất chính trong 18-24 tháng tới khi mở rộng hạ tầng hiện tại và tiến vào thị trường doanh nghiệp mới.',
    'milestones' => [
        ['bold' => 'Mở rộng lên 50.000+ người dùng đồng thời', 'text' => 'trong khi duy trì độ trễ ổn định dưới 100ms trong tải cao điểm'],
        ['bold' => 'Đạt SLA uptime 99.99%', 'text' => 'trên toàn bộ hạ tầng khi hoàn thiện hệ thống dự phòng'],
        ['bold' => 'Giảm thời gian phản hồi API trung bình xuống <100ms toàn cầu', 'text' => 'thông qua tối ưu edge computing'],
        ['bold' => 'Mở rộng áp dụng doanh nghiệp', 'text' => 'đến các công ty Fortune 500 cần nền tảng cộng tác có khả năng mở rộng'],
        ['bold' => 'Xây dựng mô hình doanh thu bền vững', 'text' => 'hỗ trợ R&D liên tục trong hạ tầng nền tảng'],
    ],

    'directions_title' => 'Định Hướng Chiến Lược',
    'directions_desc' => 'Hướng nghiên cứu nhằm nâng cao năng lực của HKSpace như nền tảng cho hệ thống thông minh. Thay vì triển khai tính năng cụ thể, chúng tôi đầu tư vào các mẫu nền tảng cho phép xuất hiện hành vi thích ứng:',
    'directions' => [
        ['bold' => 'Quan Sát Như Trừu Tượng Hạng Nhất:', 'text' => 'Hệ thống xây trên HKSpace cần hiển thị các điểm quyết định và chuyển đổi trạng thái cho phép học liên tục và tối ưu'],
        ['bold' => 'Kết Hợp Xuyên Lĩnh Vực:', 'text' => 'Cho phép quy trình tự nhiên trải rộng nhiều hệ thống và mô hình dữ liệu mà không cần phối hợp tập trung'],
        ['bold' => 'Tối Ưu Tài Nguyên Tự Trị:', 'text' => 'Phát triển mẫu nơi hạ tầng tự thích ứng phân bổ tài nguyên dựa trên mẫu tải và phản hồi hiệu suất'],
        ['bold' => 'Tầng Tích Hợp Thông Minh:', 'text' => 'Hệ thống có thể suy luận về luồng dữ liệu và tự động điều phối đồng bộ giữa các backend khác nhau'],
        ['bold' => 'Mở Rộng Dự Đoán:', 'text' => 'Hạ tầng dự đoán mẫu nhu cầu và chủ động phân bổ tài nguyên trước khi hiệu suất suy giảm'],
    ],

    // Sidebar
    'sidebar_title' => 'Nền Tảng Hạ Tầng Thích Ứng',
    'sidebar_desc' => 'Nền tảng để xây dựng hệ thống doanh nghiệp thông minh. Không phải sản phẩm, mà là kiến trúc nền tảng cho phép kết hợp, tiến hóa và tối ưu tự trị.',
    'sidebar_principles_title' => 'Nguyên Tắc Thiết Kế Cốt Lõi',
    'sidebar_p1_title' => 'Lưu Trữ Tổng Quát',
    'sidebar_p1_desc' => 'Mô hình dữ liệu tùy ý, không khóa schema. Hệ thống phát triển mà không cần viết lại kiến trúc.',
    'sidebar_p2_title' => 'Kết Hợp Hướng Sự Kiện',
    'sidebar_p2_desc' => 'Các hệ thống con liên kết lỏng giao tiếp bất đồng bộ. Cho phép điều phối thông minh.',
    'sidebar_p3_title' => 'Cô Lập Tầng Hạ Tầng',
    'sidebar_p3_desc' => 'Multi-tenancy được thực thi ở ranh giới nền tảng, không phải tầng ứng dụng.',
    'sidebar_p4_title' => 'Quan Sát Tích Hợp Sẵn',
    'sidebar_p4_desc' => 'Tất cả điểm quyết định và chuyển đổi trạng thái được hiển thị để hệ thống tự trị học liên tục.',
    'sidebar_vision' => 'Một nền tảng trừu tượng hóa sự phức tạp của hệ thống phân tán, cho phép tổ chức xây dựng hệ thống thích ứng, học hỏi và tối ưu để đáp ứng nhu cầu thay đổi — không bị ràng buộc kiến trúc giới hạn khả năng.',
];
