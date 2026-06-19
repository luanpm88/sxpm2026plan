<?php

return [
    'badge' => 'Sáng Kiến Nghiên Cứu',
    'title' => 'HKSpace: Nền Tảng Kiến Trúc Cho Hệ Thống Doanh Nghiệp Thích Ứng',
    'intro' => 'HKSpace ra đời từ một nhận định cốt lõi: nhiều phần mềm doanh nghiệp được xây dựng rời rạc theo từng phòng ban, khiến dữ liệu khó kết nối và hệ thống khó mở rộng. Hoàng Khang phát triển HKSpace như một nền tảng hạ tầng ứng dụng, hỗ trợ nhiều quy trình, nhiều mô hình dữ liệu và nhiều lớp tích hợp trong cùng một kiến trúc. Nền tảng xử lý các bài toán như mô hình đa khách hàng, đồng bộ thời gian thực và hệ thống phân tán để doanh nghiệp có thể phát triển hệ thống linh hoạt hơn.',

    'challenge_title' => 'Thách Thức Chúng Tôi Giải Quyết',
    'challenge_desc' => 'Trong nhiều doanh nghiệp, mỗi hệ thống được xây cho một nhu cầu riêng và thiếu một nền kiến trúc chung. Điều này làm tăng chi phí tích hợp, khó đồng bộ dữ liệu và khiến mỗi lần mở rộng đều trở thành một dự án riêng. HKSpace được thiết kế để giải quyết vấn đề cấu trúc này bằng một nền tảng có thể mở rộng và kết hợp. Nền tảng cần phải:',
    'challenge_items' => [
        'Cung cấp tầng lưu trữ linh hoạt, hỗ trợ nhiều mô hình dữ liệu mà không bị khóa vào một schema cố định',
        'Cho phép giao tiếp bất đồng bộ, hướng sự kiện giữa các hệ thống con liên kết lỏng',
        'Đảm bảo cô lập dữ liệu khách hàng ở tầng nền tảng, không phụ thuộc hoàn toàn vào tầng ứng dụng',
        'Hỗ trợ lập lịch tài nguyên và cân bằng tải thích ứng theo nhu cầu vận hành',
    ],

    'strategy_title' => 'Chiến Lược Kiến Trúc',
    'strategy_desc' => 'Thay vì tối ưu cho một trường hợp sử dụng duy nhất, HKSpace được thiết kế như một nền tảng phân tán đa mục đích. Kiến trúc tách rõ các lớp hạ tầng, đồng bộ, lưu trữ và tích hợp để các hệ thống phía trên có thể phát triển mà không phải giải quyết lại những bài toán nền tảng.',
    'strategy_composable_title' => 'Kiến Trúc Có Thể Kết Hợp',
    'strategy_composable_desc' => 'Các lớp lõi cung cấp giao diện rõ ràng cho quản lý trạng thái, lan truyền sự kiện và phối hợp phân tán. Nhờ đó, các mô-đun chuyên biệt có thể kết hợp với nhau mà không bị phụ thuộc quá sâu vào triển khai bên dưới.',
    'strategy_extensibility_title' => 'Mở Rộng Thông Qua Trừu Tượng Hóa',
    'strategy_extensibility_desc' => 'Lớp lưu trữ dạng plugin, giao thức đồng bộ có thể cấu hình và bộ chuyển đổi tích hợp bên ngoài giúp hệ thống thích ứng với nhiều yêu cầu vận hành mà không cần sửa lõi.',
    'strategy_ai_title' => 'Hạ Tầng AI-Native',
    'strategy_ai_desc' => 'Nền tảng được thiết kế để các điểm quyết định và luồng dữ liệu có thể quan sát được. Đây là điều kiện để các tầng AI sau này hỗ trợ tối ưu tài nguyên, phát hiện mẫu hành vi và tự động hóa phối hợp.',

    'milestones_title' => 'Mục Tiêu Cột Mốc',
    'milestones_desc' => 'Lộ trình phát triển của chúng tôi tập trung vào đạt được các mục tiêu hiệu suất chính trong 18-24 tháng tới khi mở rộng hạ tầng hiện tại và tiến vào thị trường doanh nghiệp mới.',
    'milestones' => [
        ['bold' => 'Mở rộng tới vận hành thực tế', 'text' => 'trong khi duy trì độ trễ thấp trong tải cao điểm'],
        ['bold' => 'Đạt mục tiêu sẵn sàng cao', 'text' => 'trên toàn bộ hạ tầng khi hoàn thiện hệ thống dự phòng'],
        ['bold' => 'Mang lại phản hồi API độ trễ thấp toàn cầu', 'text' => 'thông qua tối ưu edge computing'],
        ['bold' => 'Mở rộng áp dụng trong doanh nghiệp', 'text' => 'cho các tổ chức cần nền tảng cộng tác có khả năng mở rộng'],
        ['bold' => 'Xây dựng mô hình doanh thu bền vững', 'text' => 'hỗ trợ R&D liên tục trong hạ tầng nền tảng'],
    ],

    'directions_title' => 'Định Hướng Chiến Lược',
    'directions_desc' => 'Hướng nghiên cứu nhằm nâng cao năng lực của HKSpace như nền tảng cho hệ thống thông minh. Thay vì triển khai tính năng cụ thể, chúng tôi đầu tư vào các mẫu nền tảng cho phép xuất hiện hành vi thích ứng:',
    'directions' => [
        ['bold' => 'Khả năng quan sát là nền tảng:', 'text' => 'Hệ thống xây trên HKSpace cần hiển thị các điểm quyết định và chuyển đổi trạng thái để hỗ trợ học liên tục và tối ưu'],
        ['bold' => 'Kết Hợp Xuyên Lĩnh Vực:', 'text' => 'Cho phép quy trình tự nhiên trải rộng nhiều hệ thống và mô hình dữ liệu mà không cần phối hợp tập trung'],
        ['bold' => 'Tối Ưu Tài Nguyên Tự Trị:', 'text' => 'Phát triển mẫu nơi hạ tầng tự thích ứng phân bổ tài nguyên dựa trên mẫu tải và phản hồi hiệu suất'],
        ['bold' => 'Tầng tích hợp thông minh:', 'text' => 'Hệ thống có thể suy luận về luồng dữ liệu và tự động điều phối đồng bộ giữa các dịch vụ máy chủ khác nhau'],
        ['bold' => 'Mở Rộng Dự Đoán:', 'text' => 'Hạ tầng dự đoán mẫu nhu cầu và chủ động phân bổ tài nguyên trước khi hiệu suất suy giảm'],
    ],

    // Sidebar
    'sidebar_title' => 'Nền Tảng Hạ Tầng Thích Ứng',
    'sidebar_desc' => 'Nền tảng để xây dựng hệ thống doanh nghiệp thông minh hơn. Không chỉ là một sản phẩm, HKSpace là lớp kiến trúc cho phép kết hợp, phát triển và tối ưu theo thời gian.',
    'sidebar_principles_title' => 'Nguyên Tắc Thiết Kế Cốt Lõi',
    'sidebar_p1_title' => 'Lưu Trữ Tổng Quát',
    'sidebar_p1_desc' => 'Mô hình dữ liệu tùy ý, không khóa schema. Hệ thống phát triển mà không cần viết lại kiến trúc.',
    'sidebar_p2_title' => 'Kết Hợp Hướng Sự Kiện',
    'sidebar_p2_desc' => 'Các hệ thống con liên kết lỏng giao tiếp bất đồng bộ. Cho phép điều phối thông minh.',
    'sidebar_p3_title' => 'Cô Lập Tầng Hạ Tầng',
    'sidebar_p3_desc' => 'Mô hình đa khách hàng được thực thi ở ranh giới nền tảng, không phải tầng ứng dụng.',
    'sidebar_p4_title' => 'Quan Sát Tích Hợp Sẵn',
    'sidebar_p4_desc' => 'Tất cả điểm quyết định và chuyển đổi trạng thái được hiển thị để hệ thống tự trị học liên tục.',
    'sidebar_vision' => 'Một nền tảng giảm độ phức tạp của hệ thống phân tán, giúp tổ chức xây dựng hệ thống có khả năng thích ứng, học hỏi và tối ưu khi nhu cầu thay đổi.',
];
