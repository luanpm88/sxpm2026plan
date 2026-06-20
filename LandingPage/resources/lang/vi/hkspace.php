<?php

return [
    'badge' => 'Sáng kiến nghiên cứu',
    'title' => 'HKSpace: nền tảng kiến trúc cho hệ thống doanh nghiệp linh hoạt',
    'intro' => 'HKSpace ra đời từ một nhận định cốt lõi: nhiều phần mềm doanh nghiệp được xây dựng rời rạc theo từng phòng ban, khiến dữ liệu khó kết nối và hệ thống khó mở rộng. Hoàng Khang phát triển HKSpace như một nền tảng hạ tầng ứng dụng, hỗ trợ nhiều quy trình, nhiều mô hình dữ liệu và nhiều lớp tích hợp trong cùng một kiến trúc. Nền tảng xử lý các bài toán như mô hình đa khách hàng, đồng bộ thời gian thực và hệ thống phân tán để doanh nghiệp có thể phát triển hệ thống linh hoạt hơn.',

    'challenge_title' => 'Thách thức chúng tôi giải quyết',
    'challenge_desc' => 'Trong nhiều doanh nghiệp, mỗi hệ thống được xây cho một nhu cầu riêng và thiếu một nền kiến trúc chung. Điều này làm tăng chi phí tích hợp, khó đồng bộ dữ liệu và khiến mỗi lần mở rộng đều trở thành một dự án riêng. HKSpace được thiết kế để giải quyết vấn đề cấu trúc này bằng một nền tảng có thể mở rộng và kết hợp. Nền tảng cần phải:',
    'challenge_items' => [
        'Cung cấp tầng lưu trữ linh hoạt, hỗ trợ nhiều mô hình dữ liệu mà không bị khóa vào một schema cố định',
        'Cho phép giao tiếp bất đồng bộ, hướng sự kiện giữa các hệ thống con liên kết lỏng',
        'Cô lập dữ liệu khách hàng ở ranh giới nền tảng, không chỉ dựa vào tầng ứng dụng',
        'Hỗ trợ lập lịch tài nguyên và cân bằng tải thích ứng theo nhu cầu vận hành',
    ],

    'strategy_title' => 'Chiến lược kiến trúc',
    'strategy_desc' => 'Thay vì tối ưu cho một trường hợp sử dụng duy nhất, HKSpace được thiết kế như một nền tảng phân tán đa mục đích. Kiến trúc tách rõ các lớp hạ tầng, đồng bộ, lưu trữ và tích hợp để các hệ thống phía trên có thể phát triển mà không phải giải quyết lại những bài toán nền tảng.',
    'strategy_composable_title' => 'Kiến trúc có thể kết hợp',
    'strategy_composable_desc' => 'Các lớp lõi cung cấp giao diện rõ ràng cho quản lý trạng thái, lan truyền sự kiện và phối hợp phân tán. Nhờ đó, các mô-đun chuyên biệt có thể kết hợp với nhau mà không bị phụ thuộc quá sâu vào triển khai bên dưới.',
    'strategy_extensibility_title' => 'Mở rộng thông qua trừu tượng hóa',
    'strategy_extensibility_desc' => 'Lớp lưu trữ dạng plugin, giao thức đồng bộ có thể cấu hình và bộ chuyển đổi tích hợp bên ngoài giúp hệ thống thích ứng với nhiều yêu cầu vận hành mà không cần sửa lõi.',
    'strategy_ai_title' => 'Hạ tầng sẵn sàng cho AI',
    'strategy_ai_desc' => 'Nền tảng được thiết kế để các điểm quyết định và luồng dữ liệu có thể quan sát được. Đây là điều kiện để các tầng AI sau này hỗ trợ tối ưu tài nguyên, phát hiện mẫu vận hành và tự động hóa trong phạm vi kiểm soát.',

    'milestones_title' => 'Trọng tâm lộ trình',
    'milestones_desc' => 'Lộ trình HKSpace tập trung vào độ trưởng thành vận hành: khả năng xử lý đồng thời ở quy mô sản xuất, mô hình sẵn sàng cao, API độ trễ thấp, mức độ áp dụng trong doanh nghiệp và mô hình nền tảng bền vững.',
    'milestones' => [
        ['bold' => 'Mở rộng tới vận hành thực tế', 'text' => 'trong khi duy trì độ trễ thấp trong tải cao điểm'],
        ['bold' => 'Đạt mục tiêu sẵn sàng cao', 'text' => 'trên toàn bộ hạ tầng khi hoàn thiện hệ thống dự phòng'],
        ['bold' => 'Tối ưu phản hồi API độ trễ thấp', 'text' => 'thông qua kiến trúc phân tán và tối ưu edge khi phù hợp'],
        ['bold' => 'Mở rộng áp dụng trong doanh nghiệp', 'text' => 'cho các tổ chức cần nền tảng cộng tác có khả năng mở rộng'],
        ['bold' => 'Xây dựng mô hình doanh thu bền vững', 'text' => 'hỗ trợ R&D liên tục trong hạ tầng nền tảng'],
    ],

    'directions_title' => 'Định hướng chiến lược',
    'directions_desc' => 'Hướng nghiên cứu nhằm nâng cao năng lực của HKSpace như nền tảng cho hệ thống doanh nghiệp linh hoạt. Thay vì chỉ phát triển từng tính năng riêng lẻ, chúng tôi đầu tư vào các mẫu nền tảng giúp hệ thống dễ kết hợp và dễ vận hành hơn:',
    'directions' => [
        ['bold' => 'Khả năng quan sát là nền tảng:', 'text' => 'Hệ thống xây trên HKSpace cần hiển thị các điểm quyết định và chuyển đổi trạng thái để hỗ trợ học liên tục và tối ưu'],
        ['bold' => 'Kết hợp xuyên lĩnh vực:', 'text' => 'Cho phép quy trình tự nhiên trải rộng nhiều hệ thống và mô hình dữ liệu mà không cần phối hợp tập trung'],
        ['bold' => 'Tối ưu tài nguyên có kiểm soát:', 'text' => 'Phát triển mẫu để hạ tầng điều chỉnh phân bổ tài nguyên theo mẫu tải và phản hồi hiệu suất'],
        ['bold' => 'Tầng tích hợp thông minh:', 'text' => 'Hệ thống có thể suy luận về luồng dữ liệu và tự động điều phối đồng bộ giữa các dịch vụ máy chủ khác nhau'],
        ['bold' => 'Mở rộng dự đoán:', 'text' => 'Hạ tầng dự đoán mẫu nhu cầu và chủ động phân bổ tài nguyên trước khi hiệu suất suy giảm'],
    ],

    // Sidebar
    'sidebar_title' => 'Nền tảng hạ tầng thích ứng',
    'sidebar_desc' => 'Nền tảng để xây dựng hệ thống doanh nghiệp linh hoạt hơn. Không chỉ là một sản phẩm, HKSpace là lớp kiến trúc cho phép kết hợp, phát triển và tối ưu theo thời gian.',
    'sidebar_principles_title' => 'Nguyên tắc thiết kế cốt lõi',
    'sidebar_p1_title' => 'Lưu trữ tổng quát',
    'sidebar_p1_desc' => 'Mô hình dữ liệu tùy ý, không khóa schema. Hệ thống phát triển mà không cần viết lại kiến trúc.',
    'sidebar_p2_title' => 'Kết hợp hướng sự kiện',
    'sidebar_p2_desc' => 'Các hệ thống con liên kết lỏng giao tiếp bất đồng bộ. Cho phép điều phối thông minh.',
    'sidebar_p3_title' => 'Cô lập tầng hạ tầng',
    'sidebar_p3_desc' => 'Mô hình đa khách hàng được thực thi ở ranh giới nền tảng, không phải tầng ứng dụng.',
    'sidebar_p4_title' => 'Quan sát tích hợp sẵn',
    'sidebar_p4_desc' => 'Các điểm quyết định và chuyển đổi trạng thái được quan sát để hỗ trợ giám sát, học hỏi và tối ưu có kiểm soát.',
    'sidebar_vision' => 'Một nền tảng giảm độ phức tạp của hệ thống phân tán, giúp tổ chức xây dựng phần mềm có thể thích ứng khi nhu cầu vận hành thay đổi.',
];
