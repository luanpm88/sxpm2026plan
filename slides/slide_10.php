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
                .objective-section {
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 25px;
                }
                .section-title {
                    font-size: 1.8rem;
                    font-weight: 600;
                    margin-bottom: 15px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }
                .section-title .material-symbols-rounded {
                    font-size: 2rem;
                }
                .objective-list {
                    display: flex;
                    gap: 20px;
                }
                .objective-item {
                    flex: 1;
                    padding: 15px;
                    background: rgba(255,255,255,0.1);
                    border-radius: 10px;
                    text-align: center;
                    font-size: 1.05rem;
                }
                .packages-container {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 20px;
                    flex: 1;
                }
                .package-card {
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 30px;
                    transition: all 0.3s ease;
                    display: flex;
                    flex-direction: column;
                }
                .package-card:hover {
                    transform: scale(1.05);
                    background: rgba(255,255,255,0.25);
                    border-color: rgba(255,255,255,0.4);
                }
                .package-name {
                    font-size: 1.8rem;
                    font-weight: 700;
                    margin-bottom: 20px;
                    text-align: center;
                }
                .package-name .material-symbols-rounded {
                    font-size: 2.5rem;
                    vertical-align: middle;
                    margin-right: 8px;
                }
                .package-features {
                    list-style: none;
                    padding: 0;
                    flex: 1;
                }
                .package-features li {
                    padding: 10px 0;
                    padding-left: 30px;
                    position: relative;
                    line-height: 1.5;
                }
                .package-features li:before {
                    content: "✓";
                    position: absolute;
                    left: 0;
                    font-size: 1.6rem;
                    color: #4ade80;
                }
                .note-box {
                    background: rgba(255,193,7,0.2);
                    border: 2px solid rgba(255,193,7,0.4);
                    border-radius: 15px;
                    padding: 20px;
                    text-align: center;
                    font-size: 1.6rem;
                    font-weight: 500;
                }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">language</span>
                Hướng 3 – Website / Domain Packages
            </div>
        </div>
        
        <div class="slide-content">
            <div class="objective-section">
                <div class="section-title">
                    <span class="material-symbols-rounded">emoji_objects</span>
                    Mục tiêu
                </div>
                <div class="objective-list">
                    <div class="objective-item"><span class="material-symbols-rounded">payments</span> Tạo doanh thu nhanh, tiêu chuẩn hóa quy trình</div>
                    <div class="objective-item"><span class="material-symbols-rounded">campaign</span> Hỗ trợ marketing và bán chéo dịch vụ</div>
                </div>
            </div>
            
            <div class="packages-container">
                <div class="package-card">
                    <div class="package-name"><span class="material-symbols-rounded">eco</span> Basic</div>
                    <ul class="package-features">
                        <li>Landing page</li>
                        <li>Responsive design</li>
                        <li>Domain + Hosting 1 năm</li>
                        <li>SEO cơ bản</li>
                        <li>Form liên hệ</li>
                    </ul>
                </div>
                
                <div class="package-card">
                    <div class="package-name"><span class="material-symbols-rounded">star</span> Standard</div>
                    <ul class="package-features">
                        <li>Multi-page website</li>
                        <li>CMS tích hợp</li>
                        <li>Blog system</li>
                        <li>Analytics</li>
                        <li>Email marketing</li>
                        <li>Support 3 tháng</li>
                    </ul>
                </div>
                
                <div class="package-card">
                    <div class="package-name"><span class="material-symbols-rounded">rocket_launch</span> Business</div>
                    <ul class="package-features">
                        <li>E-commerce</li>
                        <li>Payment gateway</li>
                        <li>Member system</li>
                        <li>API integration</li>
                        <li>Advanced SEO</li>
                        <li>Support 6 tháng</li>
                    </ul>
                </div>
            </div>
            
            <div class="note-box">
                <span class="material-symbols-rounded" style="font-size: 1.5em; vertical-align: middle;">balance</span> Phạm vi: Không ảnh hưởng nguồn lực phát triển SaaS
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
