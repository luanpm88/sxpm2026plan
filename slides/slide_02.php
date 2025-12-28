<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-content {
                    flex: 1;
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 30px;
                    animation: fadeInUp 0.8s ease-out;
                }
                .info-card {
                    background: #ffffff;
                    border: 2px solid #e5e7eb;
                    border-radius: 20px;
                    padding: 30px;
                    transition: all 0.3s ease;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
                }
                .info-card:hover {
                    transform: translateY(-5px);
                    border-color: #6b7280;
                    box-shadow: 0 4px 12px rgba(59,130,246,0.15);
                }
                .card-icon span {
                    font-size: 4.5rem;
                    margin-bottom: 20px;
                    color: #1f2937;
                    font-weight: 600;
                }
                .card-title {
                    font-size: 1.8rem;
                    font-weight: 700;
                    margin-bottom: 20px;
                    color: #1f2937;
                }
                .card-list {
                    list-style: none;
                    padding: 0;
                }
                .card-list li {
                    padding: 8px 0;
                    padding-left: 40px;
                    position: relative;
                    line-height: 1.6;
                    font-size: 1.25rem;
                    color: #4b5563;
                }
                .card-list li:before {
                    content: "check_circle";
                    font-family: 'Material Symbols Rounded';
                    position: absolute;
                    left: 0;
                    font-size: 1.6rem;
                    line-height: 1.2;
                    color: #3b82f6;
                }
                .highlight-box {
                    background: #ffffff;
                    border: 2px solid #e5e7eb;
                    border-radius: 12px;
                    padding: 25px;
                    font-size: 1.35rem;
                    line-height: 1.8;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
                }
                .strength-label {
                    display: inline-block;
                    background: #3b82f6;
                    border: 2px solid #3b82f6;
                    color: #fff;
                    padding: 6px 16px;
                    border-radius: 20px;
                    font-size: 1rem;
                    font-weight: 700;
                    margin-bottom: 15px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }
                .weakness-label {
                    display: inline-block;
                    background: #fb923c;
                    border: 2px solid #fb923c;
                    color: #fff;
                    padding: 6px 16px;
                    border-radius: 20px;
                    font-size: 1rem;
                    font-weight: 700;
                    margin-bottom: 15px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }
                .weakness-box {
                    background: #ffffff;
                    border: 2px solid #e5e7eb;
                    border-radius: 12px;
                    padding: 25px;
                    font-size: 1.35rem;
                    line-height: 1.8;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
                    margin-top: 15px;
                }
                .highlight-box .assessment-points p:before {
                    color: #10b981;
                }
                .weakness-box .assessment-points p:before {
                    color: #fb923c;
                }
                .assessment-points {
                    margin-top: 15px;
                }
                .assessment-points p {
                    margin: 10px 0;
                    padding-left: 20px;
                    position: relative;
                }
                .assessment-points p:before {
                    content: "•";
                    position: absolute;
                    left: 0;
                    color: #6b7280;
                    font-size: 1.5rem;
                    line-height: 1.5;
                }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">assessment</span>
                Hiện trạng Bộ phận Sản xuất Phần mềm
            </div>
        </div>
        
        <div class="slide-content">
            <div class="info-card">
                <div class="card-icon">
                    <span class="material-symbols-rounded">groups</span>
                </div>
                <div class="card-title">Quy mô & Mô hình</div>
                <ul class="card-list">
                    <li><strong>7–9</strong> nhân sự</li>
                    <li>Vận hành theo <strong>Scrum</strong></li>
                    <li><strong>2–3</strong> sprint / tháng</li>
                    <li><strong>Full-cycle:</strong> phân tích → phát triển → triển khai → bảo trì</li>
                </ul>
            </div>
            
            <div class="info-card">
                <div class="card-icon">
                    <span class="material-symbols-rounded">verified</span>
                </div>
                <div class="card-title">Năng lực đã chứng minh</div>
                <ul class="card-list">
                    <li>Năng lực đã được khẳng định qua các dự án từ khác hàng: <strong>MES, EDU, ERP, CRM</strong></li>
                    <li>Đa nền tảng: <strong>Web / Mobile / System</strong></li>
                    <li>Research <strong>nhanh</strong></li>
                    <li>Tinh thần cầu tiến <strong>cao</strong></li>
                </ul>
            </div>
            
            <div class="info-card">
                <div class="card-icon">
                    <span class="material-symbols-rounded">thumb_up</span>
                </div>
                <div class="card-title">Điểm mạnh</div>
                <div class="highlight-box">
                    <div class="strength-label">✓ NĂNG LỰC CỐT LÕI</div>
                    <div class="assessment-points">
                        <p><strong>Đủ năng lực</strong> xây dựng sản phẩm hoàn chỉnh</p>
                        <p>Không chỉ <strong>gia công</strong> theo yêu cầu</p>
                        <p>Có thể <strong>sáng tạo & tự chủ</strong></p>
                        <p>Có <strong>tư duy chủ sản phẩm</strong>: tự định hướng, ưu tiên feature, quyết lộ trình</p>
                    </div>
                </div>
            </div>
            
            <div class="info-card">
                <div class="card-icon">
                    <span class="material-symbols-rounded">report_problem</span>
                </div>
                <div class="card-title">Điểm yếu</div>
                <div class="weakness-box">
                    <div class="weakness-label">⚠ HẠN CHẾ HIỆN TẠI</div>
                    <div class="assessment-points">
                        <p>Chưa có <strong>sản phẩm riêng</strong> để tích lũy</p>
                        <p>Năng lực <strong>phân tán</strong> theo từng dự án</p>
                        <p>Thiếu <strong>tập trung</strong> vào mục tiêu dài hạn</p>
                        <p>Chưa xây dựng được <strong>brand</strong></p>
                    </div>
                </div>
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
