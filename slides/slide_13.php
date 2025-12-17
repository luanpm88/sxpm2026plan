<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
                    font-size: 1.8rem;
                    font-weight: 300;
                    margin-top: 10px;
                    opacity: 0.9;
                }
                .slide-content {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                    animation: fadeInUp 0.8s ease-out;
                }
                .timeline-container {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 20px;
                    flex: 1;
                }
                .quarter-card {
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 25px;
                    transition: all 0.3s ease;
                    display: flex;
                    flex-direction: column;
                }
                .quarter-card:hover {
                    transform: translateY(-10px);
                    background: rgba(255,255,255,0.25);
                    border-color: rgba(255,255,255,0.4);
                }
                .quarter-header {
                    font-size: 2rem;
                    font-weight: 700;
                    margin-bottom: 15px;
                    text-align: center;
                    padding: 10px;
                    background: rgba(255,255,255,0.2);
                    border-radius: 10px;
                }
                .quarter-content {
                    flex: 1;
                }
                .task-list {
                    list-style: none;
                    padding: 0;
                }
                .task-list li {
                    padding: 10px 0;
                    padding-left: 30px;
                    position: relative;
                    line-height: 1.5;
                    font-size: 0.95rem;
                }
                .task-list li:before {
                    content: "▸";
                    position: absolute;
                    left: 0;
                    font-size: 1.8rem;
                }
                .commitment-card {
                    background: linear-gradient(135deg, rgba(255,215,0,0.3) 0%, rgba(255,165,0,0.3) 100%);
                    border: 3px solid rgba(255,215,0,0.6);
                    border-radius: 20px;
                    padding: 25px;
                    text-align: center;
                    font-size: 1.8rem;
                    font-weight: 600;
                }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">timeline</span>
                Lộ trình triển khai 2026
            </div>
            <div class="slide-subtitle"><span class="material-symbols-rounded">star</span> Năm đặt nền móng</div>
        </div>
        
        <div class="slide-content">
            <div class="timeline-container">
                <div class="quarter-card">
                    <div class="quarter-header">Q1</div>
                    <div class="quarter-content">
                        <ul class="task-list">
                            <li>Hoàn thiện SaaS v2</li>
                            <li>Chuẩn hóa hồ sơ năng lực</li>
                            <li>Tài liệu kỹ thuật</li>
                            <li>Xây dựng marketing materials</li>
                        </ul>
                    </div>
                </div>
                
                <div class="quarter-card">
                    <div class="quarter-header">Q2</div>
                    <div class="quarter-content">
                        <ul class="task-list">
                            <li>Người dùng SaaS đầu tiên</li>
                            <li>Doanh thu thử nghiệm</li>
                            <li>Thu thập feedback</li>
                            <li>Điều chỉnh sản phẩm</li>
                        </ul>
                    </div>
                </div>
                
                <div class="quarter-card">
                    <div class="quarter-header">Q3</div>
                    <div class="quarter-content">
                        <ul class="task-list">
                            <li>Tối ưu sản phẩm</li>
                            <li>Tích hợp AI features</li>
                            <li>Cải thiện UX</li>
                            <li>Mở rộng tính năng</li>
                        </ul>
                    </div>
                </div>
                
                <div class="quarter-card">
                    <div class="quarter-header">Q4</div>
                    <div class="quarter-content">
                        <ul class="task-list">
                            <li>Đánh giá khả năng scale</li>
                            <li>Review metrics</li>
                            <li>Điều chỉnh chiến lược</li>
                            <li>Lập kế hoạch 2027</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="commitment-card">
                <span class="material-symbols-rounded">flag</span> Cam kết: Không hứa doanh thu lớn, tập trung đi đúng hướng
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
