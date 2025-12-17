<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .objective-box {
            background: linear-gradient(135deg, rgba(255,215,0,0.25) 0%, rgba(255,165,0,0.25) 100%);
            border: 3px solid rgba(255,215,0,0.5);
            border-radius: 15px;
            padding: 20px 30px;
            margin-bottom: 25px;
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            animation: fadeInUp 0.8s ease-out;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        
        .objective-box .material-symbols-rounded {
            font-size: 2rem;
            font-weight: 600;
        }
        
        .slide-content {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            animation: fadeInUp 1s ease-out;
        }
        
        .direction-card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.25);
            border-radius: 18px;
            padding: 25px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: relative;
            overflow: hidden;
        }
        
        .direction-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.22);
            border-color: rgba(255,255,255,0.4);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        
        .card-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 8px;
        }
        
        .card-number {
            font-size: 4rem;
            font-weight: 700;
            opacity: 0.3;
            line-height: 1;
        }
        
        .card-icon {
            font-size: 5rem;
            line-height: 1;
            font-weight: 600;
            opacity: 0.15;
            position: absolute;
            right: 15px;
            bottom: 15px;
        }
        
        .card-title {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.3;
            flex: 1;
        }
        
        .card-badge {
            display: inline-block;
            padding: 8px 18px;
            background: rgba(255,255,255,0.3);
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 700;
            margin-top: 5px;
            align-self: flex-start;
            border: 2px solid rgba(255,255,255,0.4);
        }
        
        .badge-cashflow { 
            background: rgba(76, 175, 80, 0.4);
            border-color: rgba(76, 175, 80, 0.6);
            color: #e8f5e9;
        }
        .badge-strategic { 
            background: rgba(33, 150, 243, 0.4);
            border-color: rgba(33, 150, 243, 0.6);
            color: #e3f2fd;
        }
        .badge-shortterm { 
            background: rgba(255, 193, 7, 0.4);
            border-color: rgba(255, 193, 7, 0.6);
            color: #fffde7;
        }
        .badge-future { 
            background: rgba(156, 39, 176, 0.4);
            border-color: rgba(156, 39, 176, 0.6);
            color: #f3e5f5;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">explore</span>
                Định hướng tổng thể
            </div>
        </div>
        
        <div class="objective-box">
            <span class="material-symbols-rounded">flag</span>
            <span>Vừa đảm bảo dòng tiền, vừa xây dựng tài sản dài hạn</span>
        </div>
        
        <div class="slide-content">
            <div class="direction-card">
                <div class="card-header">
                    <div class="card-number">01</div>
                    <span class="material-symbols-rounded card-icon">code</span>
                </div>
                <div class="card-title">Outsourcing / Sản xuất phần mềm</div>
                <div class="card-badge badge-cashflow">Dòng tiền ngắn hạn</div>
            </div>
            
            <div class="direction-card">
                <div class="card-header">
                    <div class="card-number">02</div>
                    <span class="material-symbols-rounded card-icon">cloud</span>
                </div>
                <div class="card-title">SaaS Product: HKSpace</div>
                <div class="card-badge badge-strategic">Chiến lược dài hạn</div>
            </div>
            
            <div class="direction-card">
                <div class="card-header">
                    <div class="card-number">03</div>
                    <span class="material-symbols-rounded card-icon">language</span>
                </div>
                <div class="card-title">Website / Domain packages</div>
                <div class="card-badge badge-shortterm">Cơ hội ngắn hạn</div>
            </div>
            
            <div class="direction-card">
                <div class="card-header">
                    <div class="card-number">04</div>
                    <span class="material-symbols-rounded card-icon">psychology</span>
                </div>
                <div class="card-title">AI Knowledge Platform</div>
                <div class="card-badge badge-future">Chức năng bổ trợ & Chuẩn bị tương lai</div>
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
