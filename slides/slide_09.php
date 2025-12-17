<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-content {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    gap: 25px;
                    animation: fadeInUp 0.8s ease-out;
                }
                .roadmap-container {
                    display: flex;
                    gap: 25px;
                    flex: 1;
                }
                .version-card {
                    flex: 1;
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 30px;
                    transition: all 0.3s ease;
                    display: flex;
                    flex-direction: column;
                }
                .version-card:hover {
                    transform: translateY(-10px);
                    background: rgba(255,255,255,0.2);
                    border-color: rgba(255,255,255,0.4);
                }
                .version-header {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    margin-bottom: 20px;
                }
                .version-title {
                    font-size: 2rem;
                    font-weight: 700;
                }
                .version-badge {
                    padding: 8px 16px;
                    border-radius: 20px;
                    font-size: 0.85rem;
                    font-weight: 600;
                }
                .badge-complete {
                    background: rgba(76, 175, 80, 0.4);
                }
                .badge-inprogress {
                    background: rgba(33, 150, 243, 0.4);
                }
                .badge-planned {
                    background: rgba(156, 39, 176, 0.4);
                }
                .version-period {
                    font-size: 1.6rem;
                    opacity: 0.9;
                    margin-bottom: 20px;
                }
                .feature-list {
                    list-style: none;
                    padding: 0;
                    flex: 1;
                }
                .feature-list li {
                    padding: 12px 0;
                    padding-left: 30px;
                    position: relative;
                    line-height: 1.5;
                }
                .feature-list li:before {
                    content: "▸";
                    position: absolute;
                    left: 0;
                    font-size: 1.8rem;
                }
                .principle-box {
                    background: rgba(255,215,0,0.2);
                    border: 2px solid rgba(255,215,0,0.4);
                    border-radius: 15px;
                    padding: 20px;
                    text-align: center;
                    font-size: 1.6rem;
                    font-weight: 600;
                }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">map</span>
                Lộ trình phát triển HKSpace
            </div>
        </div>
        
        <div class="slide-content">
            <div class="roadmap-container">
                <div class="version-card">
                    <div class="version-header">
                        <div class="version-title">v1</div>
                        <div class="version-badge badge-complete">✓ Hoàn thành</div>
                    </div>
                    <div class="version-period">2025</div>
                    <ul class="feature-list">
                        <li>Validate ý tưởng</li>
                        <li>MVP đầu tiên</li>
                        <li>Kiến trúc nền tảng</li>
                    </ul>
                </div>
                
                <div class="version-card">
                    <div class="version-header">
                        <div class="version-title">v2</div>
                        <div class="version-badge badge-inprogress">⚡ Ưu tiên</div>
                    </div>
                    <div class="version-period">2026 Q1–Q2</div>
                    <ul class="feature-list">
                        <li>Hoàn thiện UI/UX</li>
                        <li>Core features phục vụ nhu cầu thực tế</li>
                        <li>Triển khai subscription</li>
                        <li>Thu thập feedback người dùng</li>
                    </ul>
                </div>
                
                <div class="version-card">
                    <div class="version-header">
                        <div class="version-title">v3</div>
                        <div class="version-badge badge-planned"><span class="material-symbols-rounded">task_alt</span> Kế hoạch</div>
                    </div>
                    <div class="version-period">2026 Q3–Q4</div>
                    <ul class="feature-list">
                        <li>Automation nâng cao</li>
                        <li>Tích hợp AI Knowledge Base</li>
                        <li>Tối ưu hiệu năng</li>
                        <li>Sẵn sàng mở rộng người dùng</li>
                    </ul>
                </div>
            </div>
            
            <div class="principle-box">
                <span class="material-symbols-rounded">pie_chart</span> Làm từng bước – đo lường – điều chỉnh
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
