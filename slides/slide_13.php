<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.3rem;
            font-weight: 400;
            margin-top: 8px;
            color: #6b7280;
        }
        
        .slide-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 30px;
            animation: fadeInUp 0.8s ease-out;
            overflow-y: auto;
            padding-right: 10px;
        }
        
        .products-table {
            width: 100%;
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .products-table table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .products-table th {
            background: #f9fafb;
            padding: 18px 20px;
            text-align: left;
            font-size: 1.1rem;
            font-weight: 700;
            color: #1f2937;
            border-bottom: 2px solid #e5e7eb;
        }
        
        .products-table td {
            padding: 20px;
            border-bottom: 1px solid #f3f4f6;
            vertical-align: top;
            font-size: 1.05rem;
            line-height: 1.6;
            color: #4b5563;
        }
        
        .products-table tbody tr:last-child td {
            border-bottom: none;
        }
        
        .products-table tbody tr:hover {
            background: #f9fafb;
        }
        
        .product-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .product-name .material-symbols-rounded {
            font-size: 1.8rem;
        }
        
        .product-category {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.95rem;
            font-weight: 600;
            margin-top: 5px;
        }
        
        .category-strategic {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #1f2937;
        }
        
        .category-cashflow {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #1f2937;
        }
        
        .category-support {
            background: rgba(139, 92, 246, 0.1);
            border: 1px solid rgba(139, 92, 246, 0.3);
            color: #1f2937;
        }
        
        .category-opportunity {
            background: rgba(251, 146, 60, 0.1);
            border: 1px solid rgba(251, 146, 60, 0.3);
            color: #1f2937;
        }
        
        .status-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-right: 8px;
        }
        
        .status-active {
            background: rgba(16, 185, 129, 0.15);
            color: #059669;
        }
        
        .status-planning {
            background: rgba(59, 130, 246, 0.15);
            color: #2563eb;
        }
        
        .status-future {
            background: rgba(107, 114, 128, 0.15);
            color: #4b5563;
        }
        
        .timeline {
            font-weight: 600;
            color: #1f2937;
        }
        
        .key-points {
            list-style: none;
            padding: 0;
            margin: 8px 0 0 0;
        }
        
        .key-points li {
            padding: 5px 0;
            padding-left: 25px;
            position: relative;
            line-height: 1.5;
        }
        
        .key-points li:before {
            content: "•";
            position: absolute;
            left: 8px;
            color: #3b82f6;
            font-weight: 700;
            font-size: 1.2rem;
        }
        
        .summary-card {
            background: #f0f9ff;
            border: 2px solid #bfdbfe;
            border-radius: 18px;
            padding: 25px 30px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .summary-card .material-symbols-rounded {
            font-size: 2.5rem;
            color: #3b82f6;
            flex-shrink: 0;
        }
        
        .summary-text {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #1e40af;
        }
        
        .summary-text strong {
            color: #1e3a8a;
        }
        
        .note-section {
            background: #fffbeb;
            border-left: 4px solid #fb923c;
            padding: 20px 25px;
            border-radius: 12px;
            margin-top: 20px;
        }
        
        .note-section .note-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .note-section .note-title .material-symbols-rounded {
            color: #fb923c;
            font-size: 1.5rem;
        }
        
        .note-section .note-content {
            font-size: 1rem;
            line-height: 1.6;
            color: #4b5563;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">inventory_2</span>
                Tổng hợp Danh mục Sản phẩm 2026-2027
            </div>
            <div class="slide-subtitle">
                Portfolio đầy đủ của Phòng Sản xuất Phần mềm - Báo cáo BOD
            </div>
        </div>
        
        <div class="slide-content">
            <div class="summary-card">
                <span class="material-symbols-rounded">widgets</span>
                <div class="summary-text">
                    Bộ phận phát triển <strong>4 hướng chính</strong>: SaaS chiến lược dài hạn (HKSpace), Software Development dòng tiền ổn định, AI Platform bổ trợ công nghệ, và Website packages cơ hội thị trường. 
                    Tổng <strong>7 sản phẩm/dịch vụ</strong> cụ thể được triển khai từ 2025-2027.
                </div>
            </div>
            
            <div class="products-table">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 20%;">Sản phẩm</th>
                            <th style="width: 15%;">Phân loại</th>
                            <th style="width: 12%;">Trạng thái</th>
                            <th style="width: 15%;">Timeline</th>
                            <th style="width: 38%;">Mục tiêu & Đặc điểm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 1. HKSpace SaaS -->
                        <tr>
                            <td>
                                <div class="product-name">
                                    <span class="material-symbols-rounded" style="color: #10b981;">cloud</span>
                                    HKSpace SaaS
                                </div>
                                <div class="product-category category-strategic">Chiến lược dài hạn</div>
                            </td>
                            <td>
                                <strong>SaaS Product</strong><br>
                                <span style="font-size: 0.95rem; color: #6b7280;">Platform quản lý dự án</span>
                            </td>
                            <td>
                                <span class="status-badge status-active">Đang triển khai</span>
                            </td>
                            <td>
                                <div class="timeline">v1: 2025 (Web + Mobile đã lên store)</div>
                                <div class="timeline">v2: 2026 (Đẩy mạnh cả mobile)</div>
                                <div class="timeline">v3: 2027+ (Scale & AI)</div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li>Tài sản công nghệ dài hạn, thu nhập thụ động từ subscription</li>
                                    <li><strong>v1 có mobile app đã lên store</strong> với basic functions</li>
                                    <li>v2 đẩy mạnh song song cả web lẫn mobile</li>
                                    <li>Mục tiêu: 50-100 users (2026), 200+ users (2027+)</li>
                                    <li>Tích hợp AI, tự động hóa workflow, expand enterprise</li>
                                    <li>Nguồn lực: 50-60% team (2-3 người fulltime)</li>
                                </ul>
                            </td>
                        </tr>
                        
                        <!-- 2. Software Development Services -->
                        <tr>
                            <td>
                                <div class="product-name">
                                    <span class="material-symbols-rounded" style="color: #3b82f6;">code</span>
                                    Software Development
                                </div>
                                <div class="product-category category-cashflow">Dòng tiền ổn định</div>
                            </td>
                            <td>
                                <strong>Custom Development</strong><br>
                                <span style="font-size: 0.95rem; color: #6b7280;">Full-cycle & Mini projects</span>
                            </td>
                            <td>
                                <span class="status-badge status-active">Đang hoạt động</span>
                            </td>
                            <td>
                                <div class="timeline">Liên tục 2026-2027</div>
                                <div style="font-size: 0.95rem; color: #6b7280; margin-top: 5px;">Theo từng project</div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li><strong>Đã triển khai các dự án lớn:</strong> ASMS (tỷ doanh thu) - cơ sở năng lực thực tế</li>
                                    <li><strong>Full projects:</strong> Dự án tỷ/trăm triệu với SCRUM team full-cycle A-Z</li>
                                    <li><strong>Mini projects:</strong> Dự án < 100 triệu, thu nhập nhanh gọn</li>
                                    <li>Dòng tiền ổn định để vận hành và nuôi team</li>
                                    <li>Tích lũy case thực tế, học nghiệp vụ đa dạng, xây portfolio</li>
                                    <li>Nguồn lực: 30-40% team (SCRUM team linh hoạt)</li>
                                </ul>
                            </td>
                        </tr>
                        
                        <!-- 3. AI Knowledge Platform -->
                        <tr>
                            <td>
                                <div class="product-name">
                                    <span class="material-symbols-rounded" style="color: #8b5cf6;">psychology</span>
                                    AI Knowledge Platform
                                </div>
                                <div class="product-category category-support">Chức năng bổ trợ</div>
                            </td>
                            <td>
                                <strong>AI Platform</strong><br>
                                <span style="font-size: 0.95rem; color: #6b7280;">Nền tảng tri thức AI</span>
                            </td>
                            <td>
                                <span class="status-badge status-planning">Đang phát triển</span>
                            </td>
                            <td>
                                <div class="timeline">2026-2027</div>
                                <div style="font-size: 0.95rem; color: #6b7280; margin-top: 5px;">Phase triển khai dần</div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li>Hỗ trợ Q&A nội bộ, chatbot khách hàng, query/report tự nhiên</li>
                                    <li>Tích hợp sâu vào HKSpace, tự động hóa workflow</li>
                                    <li>Công nghệ: RAG, Vector DB, GPT-4/DeepSeek, Fine-tuning</li>
                                    <li>Có thể bán độc lập hoặc tích hợp vào các sản phẩm</li>
                                    <li>Nguồn lực: 20-30% team (chia sẻ với HKSpace)</li>
                                </ul>
                            </td>
                        </tr>
                        
                        <!-- 4. Website Development Service -->
                        <tr>
                            <td>
                                <div class="product-name">
                                    <span class="material-symbols-rounded" style="color: #fb923c;">language</span>
                                    Website Service
                                </div>
                                <div class="product-category category-opportunity">Cơ hội ngắn hạn</div>
                            </td>
                            <td>
                                <strong>Web Development</strong><br>
                                <span style="font-size: 0.95rem; color: #6b7280;">Phát triển website</span>
                            </td>
                            <td>
                                <span class="status-badge status-planning">Sẵn sàng</span>
                            </td>
                            <td>
                                <div class="timeline">Có thể ngay</div>
                                <div style="font-size: 0.95rem; color: #6b7280; margin-top: 5px;">Nguồn lực có hạn</div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li>Dịch vụ làm website cho SME/startup địa phương</li>
                                    <li>Dòng tiền nhanh từ dự án nhỏ, dễ tiếp cận khách</li>
                                    <li><strong>Có thể triển khai ngay</strong> nhưng nguồn lực có hạn</li>
                                    <li>Cạnh tranh cao, margin thấp, cần thận trọng</li>
                                    <li>Nguồn lực: 10-15% team (flexible, khi có thời gian)</li>
                                </ul>
                            </td>
                        </tr>
                        
                        <!-- 5. Domain & Hosting Packages -->
                        <tr>
                            <td>
                                <div class="product-name">
                                    <span class="material-symbols-rounded" style="color: #fb923c;">dns</span>
                                    Domain Packages
                                </div>
                                <div class="product-category category-opportunity">Sản phẩm phụ</div>
                            </td>
                            <td>
                                <strong>Package Service</strong><br>
                                <span style="font-size: 0.95rem; color: #6b7280;">Gói domain + hosting</span>
                            </td>
                            <td>
                                <span class="status-badge status-active">Đang hoạt động</span>
                            </td>
                            <td>
                                <div class="timeline">Hiện tại</div>
                                <div style="font-size: 0.95rem; color: #6b7280; margin-top: 5px;">Đại lý reseller</div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li><strong>Đang kinh doanh:</strong> Đại lý MatBao, PAVietnam - mua đi bán lại ngay</li>
                                    <li>Domain, hosting, email server, SSL, VPS,... lệ thuộc NPP</li>
                                    <li>Chủ yếu khách quen, chưa đẩy mạnh marketing + public</li>
                                    <li>Thu nhập thêm nhỏ, bán kèm website service</li>
                                    <li>Có thể mở rộng nếu có chiến lược rõ ràng</li>
                                </ul>
                            </td>
                        </tr>
                        
                        <!-- 6. Internal Tools & Automation -->
                        <tr>
                            <td>
                                <div class="product-name">
                                    <span class="material-symbols-rounded" style="color: #6b7280;">build</span>
                                    Internal Tools
                                </div>
                                <div class="product-category category-support">Nội bộ</div>
                            </td>
                            <td>
                                <strong>Automation Tools</strong><br>
                                <span style="font-size: 0.95rem; color: #6b7280;">Công cụ hỗ trợ nội bộ</span>
                            </td>
                            <td>
                                <span class="status-badge status-active">Liên tục</span>
                            </td>
                            <td>
                                <div class="timeline">Ongoing</div>
                                <div style="font-size: 0.95rem; color: #6b7280; margin-top: 5px;">Theo nhu cầu</div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li>Script automation, CI/CD pipeline, testing tools</li>
                                    <li>Tăng hiệu suất team, giảm manual work</li>
                                    <li>Development khi có thời gian, không block main work</li>
                                    <li>Có thể reuse cho dev projects</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="note-section">
                <div class="note-title">
                    <span class="material-symbols-rounded">info</span>
                    Lưu ý quan trọng
                </div>
                <div class="note-content">
                    <strong>• Ưu tiên:</strong> HKSpace (50-60%) > Dev Services (30-40%) > AI Platform (20-30%) > Website (10-15% nếu có capacity)<br>
                    <strong>• Linh hoạt:</strong> Phân bổ nguồn lực có thể điều chỉnh theo tình hình thực tế và chỉ đạo BOD<br>
                    <strong>• Đánh giá:</strong> Quarterly review để điều chỉnh kịp thời, báo cáo minh bạch progress<br>
                    <strong>• Phối hợp:</strong> Cần sự hỗ trợ từ các phòng ban (Sales, Marketing, Support) để thành công<br>
                    <strong>• Risk:</strong> Tất cả là đề xuất sơ bộ, chờ góp ý và phê duyệt từ BOD
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
