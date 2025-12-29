<?php 
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php'; 
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.8rem;
            font-weight: 400;
            margin-top: 10px;
            color: #6b7280;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .slide-subtitle .material-symbols-rounded {
            font-size: 2rem;
            font-weight: 600;
            color: #1f2937;
        }
        
        .slide-content {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .assessment-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .info-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            padding: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .info-card:hover {
            border-color: #d1d5db;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        
        .card-header {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #1f2937;
        }
        
        .card-header .material-symbols-rounded {
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        .card-content {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #4b5563;
        }
        
        .card-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .card-list li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            line-height: 1.7;
            font-size: 1.25rem;
            color: #4b5563;
        }
        
        .card-list li:before {
            content: "check";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 12px;
            font-size: 1.8rem;
            color: #1f2937;
            line-height: 1;
        }
        
        .status-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
        }
        
        .status-card .card-list li:before {
            content: "check_circle";
            color: #1f2937;
        }
        
        .potential-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
        }
        
        .potential-card .card-header .material-symbols-rounded {
            color: #3b82f6;
        }
        
        .challenge-card {
            background: #ffffff;
            background: #ffffff;
            border: 2px solid #e5e7eb;
        }
        
        .challenge-card .card-list li:before {
            content: "priority_high";
            color: #fb923c;
        }
        
        .full-width {
            grid-column: 1 / -1;
        }
        
        .target-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .objective-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 10px;
        }
        
        .objective-item {
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            border: 2px solid #e5e7eb;
        }
        
        .objective-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #7c9ee3;
            line-height: 1;
        }
        
        .objective-text {
            font-size: 1.35rem;
            line-height: 1.6;
            font-weight: 600;
            color: #1f2937;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">cloud</span>
                Hướng 2 – SaaS Product – HKSpace
            </div>
            <div class="slide-subtitle">
                <span class="material-symbols-rounded">rocket_launch</span>
                <span>Xây dựng tài sản công nghệ, tạo giá trị dài hạn</span>
            </div>
        </div>
        
        <div class="slide-content">
            <div class="info-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">analytics</span>
                    Đánh giá dựa trên tiềm năng và hiện trạng
                </div>
                <div class="card-content">
                    Sản phẩm <strong>HKSpace đã có MVP</strong> và kiến trúc SaaS gần hoàn chỉnh. 
                    Đây là cơ hội để bộ phận <strong>chuyển từ gia công sang sở hữu sản phẩm</strong>, 
                    tạo tài sản công nghệ dài hạn và <strong>tăng giá trị</strong> theo thời gian.
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">fact_check</span>
                        Trạng thái hiện tại
                    </div>
                    <ul class="card-list positive">
                        <li>Đã hoàn thành <strong>phiên bản v1</strong> (Web + Mobile)</li>
                        <li><strong>Mobile app đã lên store</strong> với basic functions</li>
                        <li>Kiến trúc <strong>SaaS</strong> gần hoàn chỉnh</li>
                        <li>Sẵn sàng <strong>thương mại hóa</strong></li>
                        <li>Team có <strong>ownership</strong> cao với sản phẩm</li>
                    </ul>
                </div>
                
                <div class="info-card challenge-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">construction</span>
                        Thách thức cần vượt
                    </div>
                    <ul class="card-list">
                        <li>Cần <strong>nguồn lực</strong> phát triển liên tục</li>
                        <li>Thị trường <strong>chưa được test</strong> kỹ</li>
                        <li>Cần chiến lược <strong>marketing</strong> rõ ràng</li>
                        <li>Đòi hỏi <strong>kiên nhẫn</strong> dài hạn</li>
                    </ul>
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card potential-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">trending_up</span>
                        Tiềm năng lớn
                    </div>
                    <ul class="card-list positive">
                        <li>Tạo <strong>tài sản công nghệ</strong> dài hạn</li>
                        <li><strong>Thu nhập thụ động</strong> từ subscription</li>
                        <li><strong>Giá trị tăng</strong> theo user base</li>
                        <li>Khẳng định <strong>năng lực</strong> của team</li>
                    </ul>
                </div>
            </div>
            
            <div class="info-card target-card full-width" style="background: #f0f9ff; border: 2px solid #bfdbfe;">
                <div class="card-header" style="color: #1e40af;">
                    <span class="material-symbols-rounded">strategy</span>
                    Mục tiêu cụ thể 2026-2027
                </div>
                <div class="objective-list" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 15px;">
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">01</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Khách hàng:</strong> 50-100 khách trả phí (2026) → 200+ (2027), retention >70%, ARPU 500k-1tr/tháng
                        </div>
                    </div>
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">02</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Doanh thu:</strong> Hòa vốn hoặc có lãi từ gói thuê bao (cuối 2026 hoặc 2027)
                        </div>
                    </div>
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">03</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Sản phẩm:</strong> Hoàn thiện v2 (web + mobile), tích hợp AI, UI/UX chuyên nghiệp
                        </div>
                    </div>
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">04</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Brand:</strong> Xây dựng reputation trong thị trường mục tiêu, case study thực tế
                        </div>
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
