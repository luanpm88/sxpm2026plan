<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 35px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .problems-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 35px;
        }
        
        .problem-section {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.25);
            border-radius: 20px;
            padding: 35px;
            transition: all 0.3s ease;
        }
        
        .problem-section:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.18);
            border-color: rgba(255,255,255,0.4);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .section-header {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #ffd700;
        }
        
        .section-header .material-symbols-rounded {
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        .problem-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .problem-list li {
            padding: 15px 0;
            padding-left: 45px;
            position: relative;
            line-height: 1.7;
            font-size: 1.35rem;
        }
        
        .problem-list li:before {
            content: "error";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 15px;
            font-size: 2rem;
            color: #fbbf24;
            line-height: 1;
        }
        
        .consequence-list li:before {
            content: "dangerous";
            color: #ef4444;
        }
        
        .warning-box {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.3) 0%, rgba(220, 38, 38, 0.3) 100%);
            border: 3px solid rgba(239, 68, 68, 0.6);
            border-radius: 15px;
            padding: 30px 40px;
            font-size: 1.7rem;
            font-weight: 700;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.3);
        }
        
        .warning-box .material-symbols-rounded {
            font-size: 2.5rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">warning</span>
                Vấn đề cốt lõi hiện tại
            </div>
        </div>
        
        <div class="slide-content">
            <div class="problems-grid">
                <div class="problem-section">
                    <div class="section-header">
                        <span class="material-symbols-rounded">crisis_alert</span>
                        Thực tế đang đối mặt
                    </div>
                    <ul class="problem-list">
                        <li>Doanh thu phụ thuộc vào dự án lẻ, <strong>thiếu ổn định</strong></li>
                        <li>Kiến thức và kinh nghiệm <strong>phân tán</strong> theo từng khách hàng</li>
                        <li>Chưa xây dựng được <strong>tài sản công nghệ</strong> tích lũy dài hạn</li>
                    </ul>
                </div>
                
                <div class="problem-section">
                    <div class="section-header">
                        <span class="material-symbols-rounded">trending_down</span>
                        Hậu quả nếu không thay đổi
                    </div>
                    <ul class="problem-list consequence-list">
                        <li><strong>2–3 năm</strong> tới vẫn chỉ là đội gia công</li>
                        <li><strong>Khó thu hút</strong> và giữ chân nhân sự giỏi</li>
                        <li>Giá trị bộ phận <strong>không tăng trưởng</strong> theo thời gian</li>
                    </ul>
                </div>
            </div>
            
            <div class="warning-box">
                <span class="material-symbols-rounded">schedule</span>
                <span>Cần chuyển đổi ngay để tránh đi vào bế tắc</span>
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
