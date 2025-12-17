<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-content {
                    flex: 1;
                    display: flex;
                    gap: 30px;
                    animation: fadeInUp 0.8s ease-out;
                }
                .content-column {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                }
                .proposal-card {
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 35px;
                    flex: 1;
                }
                .card-title {
                    font-size: 1.8rem;
                    font-weight: 600;
                    margin-bottom: 25px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }
                .proposal-list {
                    list-style: none;
                    padding: 0;
                }
                .proposal-list li {
                    padding: 18px;
                    background: rgba(255,255,255,0.1);
                    border-radius: 12px;
                    margin-bottom: 15px;
                    line-height: 1.6;
                    font-size: 1.05rem;
                    display: flex;
                    align-items: flex-start;
                    gap: 15px;
                }
                .proposal-number {
                    font-size: 1.8rem;
                    font-weight: 700;
                    opacity: 0.6;
                    min-width: 35px;
                }
                .commitment-list {
                    list-style: none;
                    padding: 0;
                }
                .commitment-list li {
                    padding: 15px 0;
                    padding-left: 35px;
                    position: relative;
                    line-height: 1.6;
                    font-size: 1.05rem;
                }
                .commitment-list li:before {
                    content: "✓";
                    position: absolute;
                    left: 0;
                    font-size: 1.8rem;
                    color: #4ade80;
                }
                .conclusion-card {
                    background: linear-gradient(135deg, rgba(255,215,0,0.3) 0%, rgba(255,165,0,0.3) 100%);
                    border: 3px solid rgba(255,215,0,0.6);
                    border-radius: 20px;
                    padding: 35px;
                }
                .conclusion-content {
                    font-size: 1.6rem;
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
                <span class="material-symbols-rounded">handshake</span>
                Đề xuất với BOD & Cam kết
            </div>
        </div>
        
        <div class="slide-content">
            <div class="content-column">
                <div class="proposal-card">
                    <div class="card-title">
                        <span class="material-symbols-rounded">request_quote</span>
                        Đề nghị BOD phê duyệt
                    </div>
                    <ul class="proposal-list">
                        <li>
                            <div class="proposal-number">1</div>
                            <div>SaaS là hướng chiến lược dài hạn của bộ phận</div>
                        </li>
                        <li>
                            <div class="proposal-number">2</div>
                            <div>Giữ tối thiểu 30–40% nguồn lực cho SaaS</div>
                        </li>
                        <li>
                            <div class="proposal-number">3</div>
                            <div>Cho phép bộ phận chủ động điều phối dự án theo định hướng đã thống nhất</div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="content-column">
                <div class="proposal-card">
                    <div class="card-title">
                        <span class="material-symbols-rounded">verified</span>
                        Cam kết thực hiện
                    </div>
                    <ul class="commitment-list">
                        <li>Báo cáo tiến độ định kỳ (hàng tháng/quý)</li>
                        <li>Đo lường bằng chỉ số cụ thể (KPIs rõ ràng)</li>
                        <li>Điều chỉnh linh hoạt theo thực tế thị trường</li>
                        <li>Minh bạch về thách thức và khó khăn</li>
                    </ul>
                </div>
                
                <div class="conclusion-card">
                    <div class="card-title" style="margin-bottom: 20px;">
                        <span class="material-symbols-rounded">stars</span>
                        Kết luận
                    </div>
                    <div class="conclusion-content">
                        <span class="material-symbols-rounded">rocket_launch</span> 2026 là thời điểm phù hợp để chuyển từ<br>
                        <strong>gia công</strong> sang <strong>xây dựng tài sản công nghệ</strong>
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
