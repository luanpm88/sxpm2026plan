<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-content {
                    flex: 1;
                    display: flex;
                    gap: 30px;
                    animation: fadeInUp 0.8s ease-out;
                }
                .chart-container {
                    flex: 1.2;
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 30px;
                    display: flex;
                    flex-direction: column;
                }
                #resourceChart {
                    flex: 1;
                    min-height: 0;
                }
                .info-container {
                    flex: 0.8;
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                }
                .info-card {
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 30px;
                }
                .card-title {
                    font-size: 1.8rem;
                    font-weight: 600;
                    margin-bottom: 20px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }
                .allocation-item {
                    padding: 15px;
                    background: rgba(255,255,255,0.1);
                    border-radius: 10px;
                    margin-bottom: 15px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .item-name {
                    font-weight: 600;
                }
                .item-value {
                    font-size: 1.6rem;
                    font-weight: 700;
                }
                .warning-card {
                    background: linear-gradient(135deg, rgba(255,82,82,0.3) 0%, rgba(220,38,38,0.3) 100%);
                    border: 3px solid rgba(255,82,82,0.6);
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }
                .warning-content {
                    font-size: 1.8rem;
                    font-weight: 600;
                    text-align: center;
                    line-height: 1.8;
                }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">pie_chart</span>
                Phân bổ nguồn lực đề xuất
            </div>
        </div>
        
        <div class="slide-content">
            <div class="chart-container">
                <div class="card-title" style="margin-bottom: 20px;">
                    <span class="material-symbols-rounded">pie_chart</span> Tỷ lệ effort cho đội 7–9 người
                </div>
                <div id="resourceChart"></div>
            </div>
            
            <div class="info-container">
                <div class="info-card">
                    <div class="card-title">
                        <span class="material-symbols-rounded">list</span>
                        Chi tiết phân bổ
                    </div>
                    <div class="allocation-item" style="background: rgba(76,175,80,0.3);">
                        <div class="item-name"><span class="material-symbols-rounded">payments</span> Outsourcing & Maintenance</div>
                        <div class="item-value">40–50%</div>
                    </div>
                    <div class="allocation-item" style="background: rgba(33,150,243,0.3);">
                        <div class="item-name"><span class="material-symbols-rounded">rocket_launch</span> SaaS HKSpace</div>
                        <div class="item-value">30–40%</div>
                    </div>
                    <div class="allocation-item" style="background: rgba(255,193,7,0.3);">
                        <div class="item-name"><span class="material-symbols-rounded">language</span> Website & AI side products</div>
                        <div class="item-value">10–20%</div>
                    </div>
                </div>
                
                <div class="info-card warning-card">
                    <div class="warning-content">
                        <span class="material-symbols-rounded">warning</span> Quan điểm rõ ràng<br><br>
                        Nếu SaaS dưới 30% nguồn lực<br>
                        → Không thể tạo sản phẩm thành công
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
