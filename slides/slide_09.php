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
            gap: 30px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .roadmap-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            flex: 1;
        }
        
        .version-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            padding: 35px 30px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .version-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: #2672cd;
        }
        
        .version-card.v1::before {
            background: #2672cd;
        }
        
        .version-card.v2::before {
            background: #2672cd;
        }
        
        .version-card.v3::before {
            background: #6b7280;
        }
        
        .version-card:hover {
            transform: translateY(-8px);
            border-color: #1f2937;
            box-shadow: 0 4px 12px rgba(59,130,246,0.15);
        }
        
        .version-header {
            margin-bottom: 25px;
        }
        
        .version-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #1f2937;
        }
        
        .version-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
        }
        
        .version-badge .material-symbols-rounded {
            font-size: 1.3rem;
        }
        
        .badge-complete {
            background: #3b82f6;
            border: 1px solid #3b82f6;
            color: #ffffff;
        }
        
        .badge-priority {
            background: #1f2937;
            border: 1px solid #1f2937;
            color: #ffffff;
        }
        
        .badge-planned {
            background: #6b7280;
            border: 1px solid #6b7280;
            color: #ffffff;
        }
        
        .version-period {
            font-size: 1.4rem;
            color: #6b7280;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
            flex: 1;
        }
        
        .feature-list li {
            padding: 10px 0;
            padding-left: 35px;
            position: relative;
            line-height: 1.6;
            font-size: 1.2rem;
            color: #4b5563;
        }
        
        .feature-list li:before {
            content: "arrow_right";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 10px;
            font-size: 1.6rem;
            color: #1f2937;
            line-height: 1;
        }
        
        .highlight-text {
            background: #f3f4f6;
            padding: 2px 8px;
            border-radius: 6px;
            font-weight: 600;
            color: #1f2937;
        }
        
        .target-box {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 15px;
            padding: 25px 35px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .target-box .material-symbols-rounded {
            font-size: 2.5rem;
            color: #1f2937;
        }
        
        .target-text {
            font-size: 1.6rem;
            line-height: 1.5;
            color: #1f2937;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">rocket_launch</span>
                Lộ trình phát triển HKSpace
            </div>
            <div class="slide-subtitle">
                Từ MVP nội bộ đến sản phẩm SaaS có doanh thu cuối 2026
            </div>
        </div>
        
        <div class="slide-content">
            <div class="roadmap-container">
                <div class="version-card v1">
                    <div class="version-header">
                        <div class="version-title">v1</div>
                        <div class="version-badge badge-complete">
                            <span class="material-symbols-rounded">check_circle</span>
                            Hoàn thành
                        </div>
                    </div>
                    <div class="version-period">2025 – Đã triển khai</div>
                    <ul class="feature-list">
                        <li>Bộ phận <span class="highlight-text">đã sử dụng thực tế</span></li>
                        <li>Thay thế phần mềm thuê <span class="highlight-text">xTeam</span></li>
                        <li><span class="highlight-text">Mobile app đã lên store</span> với basic functions</li>
                        <li>Hệ thống quản lý task & phân quyền hoàn thiện</li>
                        <li>Validate ý tưởng và kiến trúc nền tảng</li>
                    </ul>
                </div>
                
                <div class="version-card v2">
                    <div class="version-header">
                        <div class="version-title">v2</div>
                        <div class="version-badge badge-priority">
                            <span class="material-symbols-rounded">bolt</span>
                            Ưu tiên 2026
                        </div>
                    </div>
                    <div class="version-period">Q1–Q4 2026</div>
                    <ul class="feature-list">
                        <li>Hoàn thiện <span class="highlight-text">UI/UX</span> chuyên nghiệp (Web + Mobile)</li>
                        <li><span class="highlight-text">Đẩy mạnh mobile app</span> song song với web</li>
                        <li>Tính năng core phục vụ <span class="highlight-text">khách hàng trả phí</span></li>
                        <li>Triển khai <span class="highlight-text">subscription model</span></li>
                        <li>Onboarding 50-100 users, thu thập feedback</li>
                    </ul>
                </div>
                
                <div class="version-card v3">
                    <div class="version-header">
                        <div class="version-title">v3</div>
                        <div class="version-badge badge-planned">
                            <span class="material-symbols-rounded">event</span>
                            Kế hoạch
                        </div>
                    </div>
                    <div class="version-period">2027+</div>
                    <ul class="feature-list">
                        <li>Tích hợp <span class="highlight-text">AI Knowledge Base</span> sâu</li>
                        <li>Automation nâng cao & API mở</li>
                        <li>Tối ưu hiệu năng & scalability cho enterprise</li>
                        <li>Mở rộng marketing & user base (200+ users)</li>
                        <li><span class="highlight-text">Scale doanh thu</span> bền vững</li>
                    </ul>
                </div>
            </div>
            
            <div class="target-box">
                <span class="material-symbols-rounded">flag</span>
                <div class="target-text">
                    Mục tiêu cuối 2026: <strong>Có doanh thu từ khách hàng trả phí đầu tiên</strong>, chứng minh và khẳng định định hướng SaaS
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
