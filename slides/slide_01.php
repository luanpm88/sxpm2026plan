<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .objectives-section {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 20px;
            padding: 45px 50px;
            margin-bottom: 40px;
        }
        
        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #ffd700;
        }
        
        .section-title .material-symbols-rounded {
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        .section-list {
            list-style: none;
            padding: 0;
        }
        
        .section-list li {
            padding: 15px 0;
            padding-left: 50px;
            position: relative;
            line-height: 1.8;
            font-size: 1.4rem;
        }
        
        .section-list li:before {
            content: "done";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 15px;
            font-size: 2rem;
            color: #4ade80;
            font-weight: 400;
            line-height: 1;
        }
        
        .key-directions {
            background: linear-gradient(135deg, rgba(255,215,0,0.25) 0%, rgba(255,165,0,0.25) 100%);
            border: 3px solid rgba(255,215,0,0.5);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(255,215,0,0.3);
        }
        
        .directions-title {
            font-size: 1.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            color: #ffd700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .directions-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }
        
        .direction-item {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .direction-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            background: rgba(255,255,255,0.25);
        }
        
        .direction-icon {
            font-size: 3.5rem;
            margin-bottom: 15px;
            display: block;
            font-weight: 600;
        }
        
        .direction-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 8px;
            line-height: 1.4;
        }
        
        .direction-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">summarize</span>
                Nội dung chính
            </div>
        </div>
        
        <div class="slide-content" style="display: flex; flex-direction: column; justify-content: center;">
            <div class="objectives-section">
                <ul class="section-list">
                    <li>Làm rõ năng lực và trạng thái hiện tại của bộ phận</li>
                    <li>Đề xuất định hướng phát triển chủ động cho năm 2026</li>
                    <li>Xin phê duyệt ưu tiên và phân bổ nguồn lực</li>
                </ul>
            </div>
            
            <div class="key-directions">
                <div class="directions-title">2 HƯỚNG CHIẾN LƯỢC CHÍNH</div>
                <div class="directions-grid">
                    <div class="direction-item">
                        <span class="material-symbols-rounded direction-icon">payments</span>
                        <div class="direction-title">Outsourcing</div>
                        <div class="direction-subtitle">Tạo dòng tiền ngắn hạn</div>
                    </div>
                    <div class="direction-item">
                        <span class="material-symbols-rounded direction-icon">emoji_events</span>
                        <div class="direction-title">SaaS Product</div>
                        <div class="direction-subtitle">Tạo tài sản dài hạn</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
