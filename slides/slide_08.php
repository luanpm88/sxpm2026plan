<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.8rem;
            font-weight: 400;
            margin-top: 10px;
            opacity: 0.95;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .slide-subtitle .material-symbols-rounded {
            font-size: 2rem;
            font-weight: 600;
        }
        
        .slide-content {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .assessment-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .info-card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.25);
            border-radius: 18px;
            padding: 30px;
            transition: all 0.3s ease;
        }
        
        .info-card:hover {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.4);
        }
        
        .card-header {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #ffd700;
        }
        
        .card-header .material-symbols-rounded {
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        .card-content {
            font-size: 1.3rem;
            line-height: 1.8;
        }
        
        .card-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .card-list li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            line-height: 1.7;
            font-size: 1.25rem;
        }
        
        .card-list li:before {
            content: "check";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 12px;
            font-size: 1.8rem;
            color: #4ade80;
            line-height: 1;
        }
        
        .status-card {
            background: linear-gradient(135deg, rgba(33, 150, 243, 0.2) 0%, rgba(21, 101, 192, 0.2) 100%);
            border: 2px solid rgba(33, 150, 243, 0.4);
        }
        
        .status-card .card-list li:before {
            content: "check_circle";
            color: #60a5fa;
        }
        
        .potential-card {
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.2) 0%, rgba(56, 142, 60, 0.2) 100%);
            border: 2px solid rgba(76, 175, 80, 0.4);
        }
        
        .challenge-card {
            background: linear-gradient(135deg, rgba(251, 146, 60, 0.2) 0%, rgba(249, 115, 22, 0.2) 100%);
            border: 2px solid rgba(251, 146, 60, 0.4);
        }
        
        .challenge-card .card-list li:before {
            content: "priority_high";
            color: #fb923c;
        }
        
        .full-width {
            grid-column: 1 / -1;
        }
        
        .target-card {
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.25) 0%, rgba(109, 40, 217, 0.25) 100%);
            border: 3px solid rgba(139, 92, 246, 0.5);
        }
        
        .objective-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 10px;
        }
        
        .objective-item {
            background: rgba(255,255,255,0.15);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .objective-number {
            font-size: 2.5rem;
            font-weight: 700;
            opacity: 0.4;
            line-height: 1;
        }
        
        .objective-text {
            font-size: 1.35rem;
            line-height: 1.6;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">psychology</span>
                Hướng 4 – AI Knowledge Platform
            </div>
            <div class="slide-subtitle">
                <span class="material-symbols-rounded">auto_awesome</span>
                <span>Nền tảng tri thức AI do chính bộ phận phát triển</span>
            </div>
        </div>
        
        <div class="slide-content">
            <div class="info-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">lightbulb</span>
                    Sản phẩm đột phá - Nền tảng huấn luyện AI từ dữ liệu
                </div>
                <div class="card-content">
                    Team đã phát triển <strong>AI Knowledge Platform</strong> - một nền tảng mở chuyên <strong>huấn luyện AI dựa trên dữ liệu</strong> với mô hình linh hoạt phục vụ mọi loại nhu cầu. 
                    Đây là <strong>công nghệ nền tảng</strong> có thể tạo ra giá trị cho cả nội bộ, khách hàng và thị trường.
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card potential-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">deployed_code</span>
                        Ứng dụng đa dạng & Linh hoạt
                    </div>
                    <ul class="card-list">
                        <li><strong>Hỏi đáp nghiệp vụ nội bộ:</strong> Đào tạo nhân viên mới, tra cứu quy trình, chính sách</li>
                        <li><strong>Q&A Khách hàng:</strong> Chatbot thông minh, tự động trả lời câu hỏi từ knowledge base</li>
                        <li><strong>Quản lý Query & Report:</strong> Hỏi dữ liệu bằng ngôn ngữ tự nhiên, tạo báo cáo tự động</li>
                        <li><strong>Hỗ trợ ra quyết định:</strong> Phân tích dữ liệu, đề xuất insight cho leadership</li>
                        <li><strong>Tích hợp HKSpace:</strong> Tạo task tự động từ AI, automation toàn bộ workflow</li>
                        <li><strong>Automation Actions:</strong> Tự động hóa các tác vụ lặp đi lặp lại dựa trên AI</li>
                    </ul>
                </div>
                
                <div class="info-card status-card">
                    <div class="card-header">
                        <span class="material-symbols-rounded">timeline</span>
                        Trạng thái & Định hướng
                    </div>
                    <ul class="card-list">
                        <li><strong>Đã có thiết kế chuẩn</strong> và kiến trúc scale được</li>
                        <li><strong>Kỹ sư đầu tư</strong> phát triển với chất lượng cao</li>
                        <li><strong>Giai đoạn research:</strong> Đã có demo cụ thể, đang hoàn thiện</li>
                        <li><strong>Sẵn sàng scale mạnh:</strong> Kiến trúc cho phép áp dụng rộng</li>
                        <li><strong>Định hướng 2026:</strong> Biến thành điểm nhấn công nghệ của bộ phận</li>
                    </ul>
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card full-width">
                    <div class="card-header">
                        <span class="material-symbols-rounded">rocket</span>
                        Tiềm năng chiến lược & Linh hoạt ứng dụng
                    </div>
                    <div class="objective-list">
                        <div class="objective-item">
                            <div class="objective-number">01</div>
                            <div class="objective-text"><strong>Đưa vào gói SaaS:</strong> Tăng tính cạnh tranh của HKSpace với tính năng AI độc quyền</div>
                        </div>
                        <div class="objective-item">
                            <div class="objective-number">02</div>
                            <div class="objective-text"><strong>Sử dụng nội bộ:</strong> Tăng năng suất, tự động hóa quy trình, hỗ trợ team</div>
                        </div>
                        <div class="objective-item">
                            <div class="objective-number">03</div>
                            <div class="objective-text"><strong>Bán thành sản phẩm độc lập:</strong> Nếu cần, có thể thương mại hóa riêng</div>
                        </div>
                        <div class="objective-item">
                            <div class="objective-number">04</div>
                            <div class="objective-text"><strong>Platform mở:</strong> Do chính bộ phận phát triển, linh hoạt tích hợp vào mọi dự án</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="info-card target-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">stars</span>
                    Tại sao đây là điểm nhấn đột phá?
                </div>
                <div class="card-content" style="font-size: 1.35rem; line-height: 1.8;">
                    <strong>AI Knowledge Platform</strong> không chỉ là một sản phẩm - đây là <strong>công nghệ nền tảng</strong> có thể áp dụng vào mọi hướng phát triển của bộ phận. 
                    Với khả năng <strong>tự phát triển</strong> và <strong>linh hoạt tích hợp</strong>, platform này tạo ra <strong>lợi thế cạnh tranh</strong> cho cả SaaS, Outsourcing và các dự án tương lai. 
                    Đây là <strong>tài sản công nghệ</strong> dài hạn, thể hiện <strong>năng lực đổi mới</strong> và là <strong>chìa khóa</strong> để bộ phận dẫn đầu trong kỷ nguyên AI.
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
