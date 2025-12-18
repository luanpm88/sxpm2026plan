<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.8rem;
            font-weight: 400;
            margin-top: 10px;
            color: #6b7280;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .slide-subtitle .material-symbols-rounded {
            font-size: 2rem;
            font-weight: 600;
            color: #2672cd;
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
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            padding: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .info-card:hover {
            border-color: #2672cd;
            box-shadow: 0 4px 12px rgba(59,130,246,0.15);
        }
        
        .card-header {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #2672cd;
        }
        
        .card-header .material-symbols-rounded {
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        .card-content {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #4b5563;
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
            color: #4b5563;
        }
        
        .card-list li:before {
            content: "check";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 12px;
            font-size: 1.8rem;
            color: #2672cd;
            line-height: 1;
        }
        
        .status-card {
            background: #ffffff;
            border: 2px solid #2672cd;
        }
        
        .status-card .card-list li:before {
            content: "check_circle";
            color: #2672cd;
        }
        
        .potential-card {
            background: #f9fafb;
            border: 2px solid #e5e7eb;
        }
        
        .challenge-card {
            background: #f9fafb;
            border: 2px solid #e5e7eb;
        }
        
        .challenge-card .card-list li:before {
            content: "priority_high";
            color: #6b7280;
        }
        
        .full-width {
            grid-column: 1 / -1;
        }
        
        .target-card {
            background: #ffffff;
            border: 2px solid #2672cd;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .objective-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 10px;
        }
        
        .objective-item {
            background: #f9fafb;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            border: 2px solid #e5e7eb;
        }
        
        .objective-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #e5e7eb;
            line-height: 1;
        }
        
        .objective-text {
            font-size: 1.35rem;
            line-height: 1.6;
            font-weight: 600;
            color: #1f2937;
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
                    Nền tảng huấn luyện AI từ dữ liệu nội bộ
                </div>
                <div class="card-content">
                    Bộ phận đã phát triển <strong>AI Knowledge Platform</strong> - nền tảng mở chuyên <strong>huấn luyện AI dựa trên dữ liệu</strong> với mô hình linh hoạt phục vụ nhiều nhu cầu. 
                    Platform có thể tạo giá trị cho nội bộ, khách hàng và thị trường.
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
                        <li><strong>Kiến trúc hệ thống:</strong> Đã thiết kế kiến trúc có khả năng mở rộng</li>
                        <li><strong>Giai đoạn hiện tại:</strong> Research & Development, có demo minh họa</li>
                        <li><strong>Khả năng tích hợp:</strong> Linh hoạt tích hợp với các hệ thống hiện tại</li>
                        <li><strong>Roadmap 2026:</strong> Hoàn thiện tính năng core, áp dụng vào sản phẩm</li>
                        <li><strong>Deployment:</strong> Chuẩn bị triển khai môi trường production</li>
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
                <div class="assessment-section">
                <div class="info-card full-width" style="background: #ffffff; border: 2px solid #2672cd; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    <div class="card-header">
                        <span class="material-symbols-rounded">precision_manufacturing</span>
                        Technology Stack & Kỹ thuật áp dụng
                    </div>
                    <ul class="card-list" style="column-count: 2; column-gap: 40px;">
                        <li><strong>Foundation Models:</strong> GPT-4, DeepSeek, Claude 3, Llama 3</li>
                        <li><strong>Fine-tuning:</strong> Custom model training trên dữ liệu domain-specific</li>
                        <li><strong>RAG Architecture:</strong> Retrieval-Augmented Generation với hybrid search</li>
                        <li><strong>Vector Database:</strong> Embedding storage, semantic search optimization</li>
                        <li><strong>SQL Integration:</strong> Natural language to SQL query generation</li>
                        <li><strong>Prompt Engineering:</strong> Template system, dynamic context injection</li>
                        <li><strong>Context Management:</strong> Conversation history, multi-turn dialogue</li>
                        <li><strong>Multi-modal Support:</strong> Text, document, structured data processing</li>
                        <li><strong>API Integration:</strong> RESTful API, webhook, real-time streaming</li>
                        <li><strong>Monitoring & Analytics:</strong> Usage tracking, performance metrics, cost optimization</li>
                    </ul>
                </div>
            </div>
            </div>
            
            
            <div class="info-card target-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">stars</span>
                    Đánh giá tiềm năng ứng dụng
                </div>
                <div class="card-content" style="font-size: 1.35rem; line-height: 1.8;">
                    <strong>AI Knowledge Platform</strong> là công nghệ nền tảng có thể áp dụng vào nhiều hướng phát triển của bộ phận. 
                    Với khả năng tự phát triển và tích hợp linh hoạt, platform này có thể hỗ trợ cho cả SaaS, Outsourcing và các dự án tương lai. 
                    Đây là tài sản công nghệ dài hạn giúp bộ phận tận dụng xu hướng AI trong giai đoạn tới.
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
