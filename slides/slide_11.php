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
        
        .roadmap-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }
        
        .quarter-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 16px;
            padding: 20px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .quarter-card:hover {
            transform: translateY(-5px);
            border-color: #2672cd;
            box-shadow: 0 4px 12px rgba(59,130,246,0.15);
        }
        
        .quarter-header {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 12px;
            text-align: center;
            padding: 8px;
            background: #f9fafb;
            border-radius: 10px;
            color: #1f2937;
        }
        
        .task-section {
            margin-bottom: 15px;
        }
        
        .task-section:last-child {
            margin-bottom: 0;
        }
        
        .task-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #1f2937;
        }
        
        .task-title .material-symbols-rounded {
            font-size: 1.3rem;
            color: #2672cd;
        }
        
        .task-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .task-list li {
            padding: 5px 0;
            padding-left: 22px;
            position: relative;
            line-height: 1.4;
            font-size: 0.95rem;
            color: #4b5563;
        }
        
        .task-list li:before {
            content: "arrow_right";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 5px;
            font-size: 1.2rem;
            color: #2672cd;
            line-height: 1;
        }
        
        .bottom-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .swot-box {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .swot-header {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #1f2937;
        }
        
        .swot-header .material-symbols-rounded {
            font-size: 1.6rem;
            color: #2672cd;
        }
        
        .swot-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }
        
        .swot-item {
            background: #f9fafb;
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #e5e7eb;
        }
        
        .swot-label {
            font-size: 0.95rem;
            font-weight: 700;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .swot-label .material-symbols-rounded {
            font-size: 1.2rem;
        }
        
        .swot-content {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #4b5563;
        }
        
        .swot-item.strength {
            background: #ffffff;
            border: 1px solid #2672cd;
        }
        
        .swot-item.strength .swot-label {
            color: #2672cd;
        }
        
        .swot-item.weakness {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
        }
        
        .swot-item.weakness .swot-label {
            color: #6b7280;
        }
        
        .swot-item.opportunity {
            background: #ffffff;
            border: 1px solid #2672cd;
        }
        
        .swot-item.opportunity .swot-label {
            color: #2672cd;
        }
        
        .swot-item.threat {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
        }
        
        .swot-item.threat .swot-label {
            color: #6b7280;
        }
        
        .support-box {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .support-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .support-list li {
            padding: 10px 0;
            padding-left: 35px;
            position: relative;
            line-height: 1.5;
            font-size: 1rem;
            border-bottom: 1px solid #e5e7eb;
            color: #4b5563;
        }
        
        .support-list li:last-child {
            border-bottom: none;
        }
        
        .support-list li:before {
            content: "group";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 10px;
            font-size: 1.5rem;
            color: #2672cd;
            line-height: 1;
        }
        
        .support-dept {
            font-weight: 700;
            color: #2672cd;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">assignment</span>
                Lộ trình triển khai 2026 - Hành động cụ thể
            </div>
            <div class="slide-subtitle">
                Cân đối 4 hướng phát triển theo từng quý & Phân tích SWOT
            </div>
        </div>
        
        <div class="slide-content">
            <div class="roadmap-grid">
                <div class="quarter-card">
                    <div class="quarter-header">Q1 2026</div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #60a5fa;">rocket_launch</span>
                            SaaS
                        </div>
                        <ul class="task-list">
                            <li>Hoàn thiện UI/UX v2</li>
                            <li>Chuẩn bị subscription</li>
                        </ul>
                    </div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #4ade80;">handshake</span>
                            Outsourcing
                        </div>
                        <ul class="task-list">
                            <li>Chuẩn hóa hồ sơ năng lực</li>
                            <li>Tài liệu kỹ thuật</li>
                        </ul>
                    </div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #c084fc;">psychology</span>
                            AI
                        </div>
                        <ul class="task-list">
                            <li>Hoàn thiện demo</li>
                            <li>Test nội bộ</li>
                        </ul>
                    </div>
                </div>
                
                <div class="quarter-card">
                    <div class="quarter-header">Q2 2026</div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #60a5fa;">rocket_launch</span>
                            SaaS
                        </div>
                        <ul class="task-list">
                            <li>5-10 khách hàng đầu tiên</li>
                            <li>Thu feedback</li>
                        </ul>
                    </div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #4ade80;">handshake</span>
                            Outsourcing
                        </div>
                        <ul class="task-list">
                            <li>Duy trì dự án hiện tại</li>
                            <li>Bảo trì khách cũ</li>
                        </ul>
                    </div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #fb923c;">language</span>
                            Website
                        </div>
                        <ul class="task-list">
                            <li>Chỉ nhận từ khách quen</li>
                        </ul>
                    </div>
                </div>
                
                <div class="quarter-card">
                    <div class="quarter-header">Q3 2026</div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #60a5fa;">rocket_launch</span>
                            SaaS
                        </div>
                        <ul class="task-list">
                            <li>Tối ưu sản phẩm</li>
                            <li>Mở rộng tính năng</li>
                        </ul>
                    </div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #c084fc;">psychology</span>
                            AI
                        </div>
                        <ul class="task-list">
                            <li>Tích hợp vào SaaS</li>
                            <li>Áp dụng nội bộ</li>
                        </ul>
                    </div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #4ade80;">handshake</span>
                            Team
                        </div>
                        <ul class="task-list">
                            <li>Tuyển thêm 3-5 người</li>
                        </ul>
                    </div>
                </div>
                
                <div class="quarter-card">
                    <div class="quarter-header">Q4 2026</div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #60a5fa;">rocket_launch</span>
                            SaaS
                        </div>
                        <ul class="task-list">
                            <li>Đánh giá doanh thu</li>
                            <li>Review metrics</li>
                        </ul>
                    </div>
                    
                    <div class="task-section">
                        <div class="task-title">
                            <span class="material-symbols-rounded" style="color: #fbbf24;">analytics</span>
                            Tổng kết
                        </div>
                        <ul class="task-list">
                            <li>Đánh giá 4 hướng</li>
                            <li>Điều chỉnh chiến lược</li>
                            <li>Kế hoạch 2027</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="bottom-section">
                <div class="swot-box">
                    <div class="swot-header">
                        <span class="material-symbols-rounded">psychology_alt</span>
                        Phân tích SWOT
                    </div>
                    
                    <div class="swot-grid">
                        <div class="swot-item strength">
                            <div class="swot-label">
                                <span class="material-symbols-rounded">verified</span>
                                Strengths
                            </div>
                            <div class="swot-content">
                                • HKSpace MVP đã hoàn thiện<br>
                                • Team có năng lực kỹ thuật<br>
                                • Có khách hàng Outsourcing ổn định
                            </div>
                        </div>
                        
                        <div class="swot-item weakness">
                            <div class="swot-label">
                                <span class="material-symbols-rounded">report</span>
                                Weaknesses
                            </div>
                            <div class="swot-content">
                                • Team nhỏ (7-9 người)<br>
                                • Thiếu kinh nghiệm SaaS<br>
                                • Chưa có marketing/sales mạnh
                            </div>
                        </div>
                        
                        <div class="swot-item opportunity">
                            <div class="swot-label">
                                <span class="material-symbols-rounded">trending_up</span>
                                Opportunities
                            </div>
                            <div class="swot-content">
                                • Thị trường SaaS VN đang tăng<br>
                                • AI tạo competitive advantage<br>
                                • Nhu cầu quản lý dự án cao
                            </div>
                        </div>
                        
                        <div class="swot-item threat">
                            <div class="swot-label">
                                <span class="material-symbols-rounded">warning</span>
                                Threats
                            </div>
                            <div class="swot-content">
                                • Cạnh tranh SaaS quốc tế<br>
                                • Nguồn lực bị kéo bởi Outsourcing<br>
                                • Rủi ro không đạt product-market fit
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="support-box">
                    <div class="swot-header">
                        <span class="material-symbols-rounded">support_agent</span>
                        Hỗ trợ cần thiết từ các bộ phận
                    </div>
                    
                    <ul class="support-list">
                        <li>
                            <span class="support-dept">Marketing:</span> Xây dựng brand, content, chiến dịch online cho SaaS
                        </li>
                        <li>
                            <span class="support-dept">Kinh doanh:</span> Tìm khách hàng tiềm năng, close deal, hỗ trợ onboarding
                        </li>
                        <li>
                            <span class="support-dept">BOD:</span> Phê duyệt chiến lược, nguồn lực, kiên nhẫn với timeline dài hạn
                        </li>
                        <li>
                            <span class="support-dept">Tài chính:</span> Budget cho R&D, tuyển dụng, marketing SaaS
                        </li>
                        <li>
                            <span class="support-dept">Nhân sự:</span> Tuyển developer, product owner, support engineer
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="navigation">
        <button class="nav-btn" onclick="previousSlide()">
            <span class="material-symbols-rounded">arrow_back</span>
        </button>
        <button class="nav-btn" onclick="nextSlide()">
            <span class="material-symbols-rounded">arrow_forward</span>
        </button>
    </div>
    
    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
