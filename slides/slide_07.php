<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.8rem;
            font-weight: 400;
            margin-top: 10px;
            opacity: 0.95;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .slide-subtitle .material-symbols-rounded {
            font-size: 2rem;
            font-weight: 600;
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
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.25);
            border-radius: 18px;
            padding: 30px;
            transition: all 0.3s ease;
        }
        
        .info-card:hover {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.4);
        }
        
        .card-header {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #ffd700;
        }
        
        .card-header .material-symbols-rounded {
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        .card-content {
            font-size: 1.3rem;
            line-height: 1.8;
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
        }
        
        .card-list li:before {
            content: "check";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 12px;
            font-size: 1.8rem;
            color: #4ade80;
            line-height: 1;
        }
        
        .status-card {
            background: linear-gradient(135deg, rgba(33, 150, 243, 0.2) 0%, rgba(21, 101, 192, 0.2) 100%);
            border: 2px solid rgba(33, 150, 243, 0.4);
        }
        
        .status-card .card-list li:before {
            content: "check_circle";
            color: #60a5fa;
        }
        
        .potential-card {
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.2) 0%, rgba(56, 142, 60, 0.2) 100%);
            border: 2px solid rgba(76, 175, 80, 0.4);
        }
        
        .challenge-card {
            background: linear-gradient(135deg, rgba(251, 146, 60, 0.2) 0%, rgba(249, 115, 22, 0.2) 100%);
            border: 2px solid rgba(251, 146, 60, 0.4);
        }
        
        .challenge-card .card-list li:before {
            content: "priority_high";
            color: #fb923c;
        }
        
        .full-width {
            grid-column: 1 / -1;
        }
        
        .target-card {
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.25) 0%, rgba(109, 40, 217, 0.25) 100%);
            border: 3px solid rgba(139, 92, 246, 0.5);
        }
        
        .warning-card {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.25) 0%, rgba(220, 38, 38, 0.25) 100%);
            border: 3px solid rgba(239, 68, 68, 0.5);
        }
        
        .objective-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 10px;
        }
        
        .objective-item {
            background: rgba(255,255,255,0.15);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .objective-number {
            font-size: 2.5rem;
            font-weight: 700;
            opacity: 0.4;
            line-height: 1;
        }
        
        .objective-text {
            font-size: 1.35rem;
            line-height: 1.6;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">language</span>
                Hướng 3 – Website / Domain packages
            </div>
            <div class="slide-subtitle">
                <span class="material-symbols-rounded">bolt</span>
                <span>Cơ hội ngắn hạn, cạnh tranh cao, cần thận trọng</span>
            </div>
        </div>
        
        <div class="slide-content">
            <div class="info-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">analytics</span>
                    Đánh giá dựa trên thị trường Việt Nam
                </div>
                <div class="card-content">
                    Thị trường website/domain Việt Nam đã <strong>bão hòa</strong> với hàng nghìn freelancer và công ty nhỏ lẻ cạnh tranh giá. 
                    Haravan, Sapo đã chiếm thị phần ecommerce. Với <strong>7-9 nhân sự</strong>, việc tham gia thị trường này sẽ <strong>loãng nguồn lực</strong> 
                    và khó tạo được lợi thế cạnh tranh so với các đối thủ đã có sẵn khách hàng và giá rẻ hơn.
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card potential-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">thumb_up</span>
                        Cơ hội trong thị trường
                    </div>
                    <ul class="card-list">
                        <li>Nhiều <strong>SME/startup</strong> cần website</li>
                        <li>Dễ <strong>tiếp cận</strong> khách hàng địa phương</li>
                        <li>Có thể <strong>bán kèm</strong> dịch vụ khác</li>
                        <li><strong>Dòng tiền nhanh</strong> từ dự án nhỏ</li>
                    </ul>
                </div>
                
                <div class="info-card challenge-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">dangerous</span>
                        Thực trạng cạnh tranh khốc liệt
                    </div>
                    <ul class="card-list">
                        <li><strong>Hàng nghìn</strong> freelancer/công ty nhỏ giá rẻ</li>
                        <li>Giá bị <strong>đẩy xuống</strong> rất thấp (5-10 triệu)</li>
                        <li>Khách hàng <strong>nhạy cảm giá</strong>, ưu tiên rẻ</li>
                        <li><strong>Lợi nhuận mỏng</strong>, khó thu hồi chi phí</li>
                    </ul>
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card status-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">gavel</span>
                        Phân tích đối thủ cụ thể
                    </div>
                    <ul class="card-list">
                        <li><strong>Haravan, Sapo</strong> - đã chiếm thị phần ecommerce</li>
                        <li><strong>Freelancer</strong> - làm rẻ, nhanh, không chi phí cố định</li>
                        <li><strong>Template</strong> WordPress - giá 2-5 triệu</li>
                        <li><strong>Công ty nhỏ</strong> - đã có network khách sẵn</li>
                    </ul>
                </div>
            </div>
            
            <div class="info-card warning-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">report</span>
                    Kết luận và khuyến nghị
                </div>
                <div class="objective-list">
                    <div class="objective-item">
                        <div class="objective-number">01</div>
                        <div class="objective-text"><strong>KHÔNG NÊN</strong> đầu tư nguồn lực chính - thị trường đã bão hòa</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-number">02</div>
                        <div class="objective-text">Nếu làm: chỉ nhận <strong>dự án từ khách quen</strong>, không marketing</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-number">03</div>
                        <div class="objective-text"><strong>Ưu tiên tuyệt đối</strong>: Outsourcing + SaaS (HKSpace)</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-number">04</div>
                        <div class="objective-text">Tránh <strong>cạnh tranh giá</strong> với freelancer/công ty nhỏ lẻ</div>
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
