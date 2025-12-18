<?php require_once '../config.php'; ?>
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
            color: #2672cd;
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
            border-color: #2672cd;
            box-shadow: 0 4px 12px rgba(59,130,246,0.15);
        }
        
        .card-header {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #2672cd;
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
            color: #2672cd;
            line-height: 1;
        }
        
        .status-card {
            background: #ffffff;
            border: 2px solid #2672cd;
        }
        
        .status-card .card-list li:before {
            content: "check_circle";
            color: #2672cd;
        }
        
        .potential-card {
            background: #f9fafb;
            border: 2px solid #e5e7eb;
        }
        
        .challenge-card {
            background: #f9fafb;
            border: 2px solid #e5e7eb;
        }
        
        .challenge-card .card-list li:before {
            content: "priority_high";
            color: #6b7280;
        }
        
        .full-width {
            grid-column: 1 / -1;
        }
        
        .target-card {
            background: #ffffff;
            border: 2px solid #2672cd;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .objective-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 10px;
        }
        
        .objective-item {
            background: #f9fafb;
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
            color: #e5e7eb;
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
                <div class="info-card status-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">fact_check</span>
                        Trạng thái hiện tại
                    </div>
                    <ul class="card-list">
                        <li>Đã hoàn thành <strong>phiên bản v1</strong></li>
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
                    <ul class="card-list">
                        <li>Tạo <strong>tài sản công nghệ</strong> dài hạn</li>
                        <li><strong>Thu nhập thụ động</strong> từ subscription</li>
                        <li><strong>Giá trị tăng</strong> theo user base</li>
                        <li>Khẳng định <strong>năng lực</strong> của team</li>
                    </ul>
                </div>
            </div>
            
            <div class="info-card target-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">flag</span>
                    Mục tiêu chiến lược 2026
                </div>
                <div class="objective-list">
                    <div class="objective-item">
                        <div class="objective-number">01</div>
                        <div class="objective-text">Chuyển từ MVP sang sản phẩm có <strong>người dùng trả phí</strong></div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-number">02</div>
                        <div class="objective-text">Xây dựng <strong>tài sản công nghệ</strong> dài hạn cho công ty</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-number">03</div>
                        <div class="objective-text">Tạo <strong>brand</strong> sản phẩm trong thị trường mục tiêu</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-number">04</div>
                        <div class="objective-text">Đạt <strong>milestone</strong> về số lượng khách hàng/doanh thu</div>
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
