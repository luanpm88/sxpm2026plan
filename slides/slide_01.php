<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-top: 10px;
            color: #6b7280;
        }
        
        .slide-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .agenda-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            flex: 1;
        }
        
        .agenda-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px 30px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .agenda-card:hover {
            border-color: #2672cd;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59,130,246,0.15);
        }
        
        .agenda-number {
            font-size: 3rem;
            font-weight: 700;
            color: #e5e7eb;
            line-height: 1;
            margin-bottom: 10px;
        }
        
        .agenda-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #000000;
        }
        
        .agenda-title .material-symbols-rounded {
            font-size: 2rem;
            color: #2672cd;
        }
        
        .agenda-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .agenda-items li {
            padding: 8px 0;
            padding-left: 28px;
            position: relative;
            line-height: 1.5;
            font-size: 1.1rem;
            color: #4b5563;
        }
        
        .agenda-items li:before {
            content: "chevron_right";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 8px;
            font-size: 1.4rem;
            color: #2672cd;
            line-height: 1;
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">list_alt</span>
                Nội dung trình bày
            </div>
            <div class="slide-subtitle">
                7 phần chính trong báo cáo định hướng phát triển 2026
            </div>
        </div>
        
        <div class="slide-content">
            <div class="agenda-grid">
                <div class="agenda-card">
                    <div class="agenda-number">01</div>
                    <div class="agenda-title">
                        <span class="material-symbols-rounded">analytics</span>
                        Hiện trạng bộ phận
                    </div>
                    <ul class="agenda-items">
                        <li>Quy mô & Mô hình</li>
                        <li>Năng lực đã chứng minh</li>
                        <li>Điểm mạnh & Điểm yếu</li>
                    </ul>
                </div>
                
                <div class="agenda-card">
                    <div class="agenda-number">02</div>
                    <div class="agenda-title">
                        <span class="material-symbols-rounded">report_problem</span>
                        Vấn đề cốt lõi
                    </div>
                    <ul class="agenda-items">
                        <li>Thực tế đang đối mặt</li>
                        <li>Hệ quả & Rủi ro</li>
                    </ul>
                </div>
                
                <div class="agenda-card">
                    <div class="agenda-number">03</div>
                    <div class="agenda-title">
                        <span class="material-symbols-rounded">explore</span>
                        Định hướng tổng thể
                    </div>
                    <ul class="agenda-items">
                        <li>Outsourcing / Sản xuất phần mềm</li>
                        <li>SaaS Product: HKSpace</li>
                        <li>AI Knowledge Platform</li>
                        <li>Website / Domain Hosting packages</li>
                    </ul>
                </div>
                
                <div class="agenda-card">
                    <div class="agenda-number">04</div>
                    <div class="agenda-title">
                        <span class="material-symbols-rounded">rocket_launch</span>
                        Lộ trình HKSpace
                    </div>
                    <ul class="agenda-items">
                        <li>Phiên bản v1, v2, v3</li>
                        <li>Timeline 2025-2026</li>
                        <li>Mục tiêu từng giai đoạn</li>
                    </ul>
                </div>
                
                <div class="agenda-card">
                    <div class="agenda-number">05</div>
                    <div class="agenda-title">
                        <span class="material-symbols-rounded">pie_chart</span>
                        Phân bổ nguồn lực
                    </div>
                    <ul class="agenda-items">
                        <li>Tỉ trọng 4 hướng phát triển</li>
                        <li>Kế hoạch tăng trưởng đội ngũ</li>
                        <li>Timeline 2025-2027</li>
                    </ul>
                </div>
                
                <div class="agenda-card">
                    <div class="agenda-number">06</div>
                    <div class="agenda-title">
                        <span class="material-symbols-rounded">assignment</span>
                        Lộ trình triển khai 2026
                    </div>
                    <ul class="agenda-items">
                        <li>Hành động cụ thể theo quý</li>
                        <li>Phân tích SWOT</li>
                        <li>Hỗ trợ liên phòng ban</li>
                    </ul>
                </div>
                
                <div class="agenda-card">
                    <div class="agenda-number">07</div>
                    <div class="agenda-title">
                        <span class="material-symbols-rounded">handshake</span>
                        Đề xuất & Cam kết
                    </div>
                    <ul class="agenda-items">
                        <li>Đề nghị BOD phê duyệt</li>
                        <li>Cam kết thực hiện</li>
                        <li>Chỉ số đánh giá thành công</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
