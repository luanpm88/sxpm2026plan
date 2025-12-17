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
                    gap: 25px;
                }
                .info-card {
                    background: rgba(255,255,255,0.15);
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255,255,255,0.2);
                    border-radius: 20px;
                    padding: 35px;
                    flex: 1;
                }
                .card-title {
                    font-size: 1.6rem;
                    font-weight: 600;
                    margin-bottom: 25px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }
                .status-list {
                    list-style: none;
                    padding: 0;
                }
                .status-list li {
                    padding: 15px 0;
                    padding-left: 35px;
                    position: relative;
                    line-height: 1.6;
                    font-size: 1.6rem;
                }
                .status-list li:before {
                    content: "✓";
                    position: absolute;
                    left: 0;
                    font-size: 1.8rem;
                    color: #4ade80;
                }
                .strategy-card {
                    background: linear-gradient(135deg, rgba(156,39,176,0.3) 0%, rgba(123,31,162,0.3) 100%);
                    border: 3px solid rgba(156,39,176,0.6);
                }
                .strategy-list {
                    list-style: none;
                    padding: 0;
                }
                .strategy-list li {
                    padding: 15px 0;
                    padding-left: 35px;
                    position: relative;
                    line-height: 1.6;
                    font-size: 1.6rem;
                }
                .strategy-list li:before {
                    content: "▸";
                    position: absolute;
                    left: 0;
                    font-size: 1.8rem;
                }
                .principle-card {
                    background: rgba(255,215,0,0.2);
                    border: 2px solid rgba(255,215,0,0.4);
                    padding: 25px;
                    border-radius: 15px;
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
                <span class="material-symbols-rounded">psychology</span>
                Hướng 4 – AI / Open Knowledge Platform
            </div>
        </div>
        
        <div class="slide-content">
            <div class="content-column">
                <div class="info-card">
                    <div class="card-title">
                        <span class="material-symbols-rounded">checklist</span>
                        Thực trạng
                    </div>
                    <ul class="status-list">
                        <li>Đã research kiến trúc</li>
                        <li>Có MVP sử dụng nội bộ</li>
                        <li>Nền tảng công nghệ ổn định</li>
                    </ul>
                </div>
                
                <div class="info-card strategy-card">
                    <div class="card-title">
                        <span class="material-symbols-rounded">strategy</span>
                        Vai trò trong 2026
                    </div>
                    <ul class="strategy-list">
                        <li>Không bán độc lập</li>
                        <li>Bổ trợ trực tiếp cho HKSpace</li>
                        <li>Tạo lợi thế công nghệ dài hạn</li>
                    </ul>
                </div>
            </div>
            
            <div class="content-column">
                <div class="info-card" style="flex: 2;">
                    <div class="card-title">
                        <span class="material-symbols-rounded">integration_instructions</span>
                        Chiến lược tích hợp
                    </div>
                    <div style="font-size: 1.6rem; line-height: 1.8; margin-bottom: 30px;">
                        <div style="padding: 20px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 15px;">
                            <strong><span class="material-symbols-rounded">psychology</span> AI Assistant</strong><br>
                            Trợ lý thông minh trong HKSpace giúp người dùng tìm kiếm và xử lý thông tin nhanh chóng
                        </div>
                        <div style="padding: 20px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 15px;">
                            <strong><span class="material-symbols-rounded">menu_book</span> Knowledge Base</strong><br>
                            Tổ chức và chia sẻ kiến thức doanh nghiệp một cách thông minh
                        </div>
                        <div style="padding: 20px; background: rgba(255,255,255,0.1); border-radius: 10px;">
                            <strong><span class="material-symbols-rounded">search</span> Smart Search</strong><br>
                            Tìm kiếm ngữ nghĩa giúp tăng hiệu quả làm việc
                        </div>
                    </div>
                </div>
                
                <div class="principle-card">
                    <span class="material-symbols-rounded">emoji_objects</span> Nhỏ – chọn lọc – phục vụ chiến lược SaaS
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
