<?php 
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php'; 
?>
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
            margin-bottom: 10px;
        }
        
        .status-timeline-cell {
            display: flex;
            flex-direction: column;
            gap: 12px;
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
                Portfolio đầy đủ của Phòng Sản xuất Phần mềm
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
                            <th style="width: 25%;">Sản phẩm</th>
                            <th style="width: 15%;">Phân loại</th>
                            <th style="width: 20%;">Trạng thái & Timeline</th>
                            <th style="width: 40%;">Mục tiêu & Đặc điểm</th>
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
                                <div class="status-timeline-cell">
                                    <div style="">
                                        <span class="status-badge status-active">Đang triển khai</span>
                                    </div>
                                    <div style="border-top: 1px solid #e5e7eb; padding-top: 12px;">
                                        <div class="timeline" style="margin-bottom: 6px;"><strong>v1:</strong> 2025 (Web + Mobile đã lên store)</div>
                                        <div class="timeline" style="margin-bottom: 6px;"><strong>v2:</strong> 2026 (Đẩy mạnh cả mobile)</div>
                                        <div class="timeline"><strong>v3:</strong> 2027+ (Scale & AI)</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li>Tài sản công nghệ dài hạn, doanh thu định kỳ từ gói thuê bao</li>
                                    <li><strong>v1 đã có app mobile trên cả iOS & Android</strong></li>
                                    <li>v2 đẩy mạnh song song cả web lẫn mobile trong năm 2026</li>
                                    <li>Mục tiêu: 50-100 khách hàng trả phí (2026), 200+ (2027+)</li>
                                    <li>Tích hợp AI, tự động hóa workflow, mở rộng thị trường doanh nghiệp</li>
                                    <li>Nguồn lực: 50-60% team (3-5 người fulltime, bao gồm AI development)</li>
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
                                <div class="status-timeline-cell">
                                    <div style="">
                                        <span class="status-badge status-active">Đang hoạt động</span>
                                    </div>
                                    <div style="border-top: 1px solid #e5e7eb; padding-top: 12px;">
                                        <div class="timeline" style="margin-bottom: 6px;">Liên tục 2026-2027</div>
                                        <div class="timeline" style="font-size: 0.95rem; color: #6b7280;">Theo từng project</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li><strong>Đã triển khai các dự án quy mô lớn:</strong> ASMS, ERP, CRM - chứng minh năng lực thực chiến</li>
                                    <li><strong>Dự án full-cycle:</strong> Từ trăm triệu trở lên, SCRUM team handle từ A-Z</li>
                                    <li><strong>Dự án nhỏ:</strong> Dưới 100 triệu, triển khai nhanh, thu tiền ngay</li>
                                    <li>Đảm bảo dòng tiền ổn định, nuôi team trong lúc phát triển sản phẩm</li>
                                    <li>Tích lũy kinh nghiệm thực tế, học nghiệp vụ đa ngành, xây dựng portfolio</li>
                                    <li>Nguồn lực: 30-40% team (2-3 người, tùy quy mô dự án)</li>
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
                                <div class="status-timeline-cell">
                                    <div style="">
                                        <span class="status-badge status-planning">Đang phát triển</span>
                                    </div>
                                    <div style="border-top: 1px solid #e5e7eb; padding-top: 12px;">
                                        <div class="timeline" style="margin-bottom: 6px;">2026-2027</div>
                                        <div class="timeline" style="font-size: 0.95rem; color: #6b7280;">Phase triển khai dần</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li>Hỗ trợ Q&A nội bộ, chatbot tự động cho khách hàng, truy vấn dữ liệu bằng ngôn ngữ tự nhiên</li>
                                    <li>Tích hợp trực tiếp vào HKSpace, nâng cao tính năng tự động hóa</li>
                                    <li>Công nghệ: RAG, Vector Database, GPT-4/DeepSeek, Fine-tuning model</li>
                                    <li>Có thể bán cho khách hàng dev services hoặc đóng gói thành module độc lập</li>
                                    <li>Nguồn lực: Đã tính trong HKSpace (50-60%) - không tách riêng</li>
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
                                <div class="status-timeline-cell">
                                    <div style="">
                                        <span class="status-badge status-planning">Sẵn sàng</span>
                                    </div>
                                    <div style="border-top: 1px solid #e5e7eb; padding-top: 12px;">
                                        <div class="timeline" style="margin-bottom: 6px;">Có thể triển khai</div>
                                        <div class="timeline" style="font-size: 0.95rem; color: #6b7280;">Tùy theo nhu cầu</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="key-points">
                                    <li>Làm website cho doanh nghiệp nhỏ, startup trong khu vực</li>
                                    <li>Dự án nhỏ 30-80 triệu, thu tiền nhanh, ít rủi ro</li>
                                    <li><strong>Chỉ nhận từ khách quen hoặc giới thiệu</strong> - không chạy marketing</li>
                                    <li>Thị trường cạnh tranh khốc liệt, lợi nhuận thấp, cân nhắc kỹ</li>
                                    <li>Nguồn lực: 5-10% team (làm khi rảnh, không ưu tiên)</li>
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
                                <div class="status-timeline-cell">
                                    <div style="">
                                        <span class="status-badge status-active">Đang hoạt động</span>
                                    </div>
                                    <div style="border-top: 1px solid #e5e7eb; padding-top: 12px;">
                                        <div class="timeline" style="margin-bottom: 6px;">Hiện tại</div>
                                        <div class="timeline" style="font-size: 0.95rem; color: #6b7280;">Đại lý reseller</div>
                                    </div>
                                </div>
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
                                <div class="status-timeline-cell">
                                    <div style="">
                                        <span class="status-badge status-active">Liên tục</span>
                                    </div>
                                    <div style="border-top: 1px solid #e5e7eb; padding-top: 12px;">
                                        <div class="timeline" style="margin-bottom: 6px;">Ongoing</div>
                                        <div class="timeline" style="font-size: 0.95rem; color: #6b7280;">Theo nhu cầu</div>
                                    </div>
                                </div>
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
            
            <div class="summary-card" style="background: #f0f9ff; border: 2px solid #bfdbfe; margin-top: 30px;">
                
                <div class="summary-text w-100" style="color: #1e3a8a;">
                    <div class="d-flex mb-2">
                        <span class="material-symbols-rounded me-3" style="color: #3b82f6;">strategy</span>
                        <strong style="font-size: 1.4rem; display: block;">Mục tiêu cụ thể cuối 2026</strong>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin-top: 20px;">
                        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 2px solid #e5e7eb;">
                            <div style="font-size: 1.2rem; font-weight: 700; color: #1f2937; margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                                <span class="material-symbols-rounded" style="font-size: 1.6rem; color: #10b981;">cloud</span>
                                HKSpace SaaS
                            </div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 1.05rem; color: #4b5563; line-height: 1.6;">
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Khách hàng:</strong> 50-100 khách trả phí (từ 3-5 nội bộ)
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Sản phẩm:</strong> Release v2 với UI/UX chuyên nghiệp + AI chatbot
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Mobile:</strong> Hoàn thiện app iOS/Android với đầy đủ tính năng v2
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Doanh thu:</strong> Tiến gần hòa vốn hoặc có lãi nhỏ
                                </li>
                            </ul>
                        </div>
                        
                        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 2px solid #e5e7eb;">
                            <div style="font-size: 1.2rem; font-weight: 700; color: #1f2937; margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                                <span class="material-symbols-rounded" style="font-size: 1.6rem; color: #3b82f6;">code</span>
                                Software Development
                            </div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 1.05rem; color: #4b5563; line-height: 1.6;">
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Doanh thu:</strong> 3-5 tỷ từ dự án (nuôi team + hỗ trợ HKSpace)
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Dự án:</strong> 2-3 dự án lớn (>100tr) + 8-12 dự án nhỏ (< 100tr)
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Team:</strong> Tăng 7-9 người cho full SCRUM cycle
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Portfolio:</strong> Chuẩn hóa quy trình, xây case study
                                </li>
                            </ul>
                        </div>
                        
                        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 2px solid #e5e7eb;">
                            <div style="font-size: 1.2rem; font-weight: 700; color: #1f2937; margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                                <span class="material-symbols-rounded" style="font-size: 1.6rem; color: #8b5cf6;">psychology</span>
                                AI Platform
                            </div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 1.05rem; color: #4b5563; line-height: 1.6;">
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Tích hợp:</strong> Đưa vào HKSpace v2 (Q2-Q3) - chatbot, automation
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Nội bộ:</strong> Deploy chatbot nội bộ Q1 cho training nhân sự
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #3b82f6;">•</span>
                                    <strong>Tech:</strong> Hoàn thiện RAG pipeline, vector DB, fine-tuning
                                </li>
                            </ul>
                        </div>
                        
                        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 2px solid #e5e7eb;">
                            <div style="font-size: 1.2rem; font-weight: 700; color: #1f2937; margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                                <span class="material-symbols-rounded" style="font-size: 1.6rem; color: #fb923c;">language</span>
                                Website Development
                            </div>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 1.05rem; color: #4b5563; line-height: 1.6;">
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                                    <strong>Thăm dò:</strong> 4-6 website/năm, chỉ khách quen/referral
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                                    <strong>Giá:</strong> Chỉ nhận gói >30-50 triệu, không đua giá
                                </li>
                                <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                                    <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                                    <strong>Template:</strong> Chuẩn hóa 1-2 bộ để triển khai nhanh
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="note-section">
                <div style="font-size: 1.2rem; font-weight: 700; color: #1f2937; margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                    <span class="material-symbols-rounded" style="font-size: 1.6rem; color: #fb923c;">info</span>
                    Lưu ý quan trọng
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 1.05rem; color: #4b5563; line-height: 1.6;">
                    <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                        <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                        <strong>Ưu tiên:</strong> HKSpace (50-60%, bao gồm AI) > Dev Services (30-40%) > Website (5-10% nếu rảnh) = Tổng 85-110%
                    </li>
                    <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                        <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                        <strong>Linh hoạt:</strong> Phân bổ nguồn lực có thể điều chỉnh theo tình hình thực tế và chỉ đạo từ BĐH
                    </li>
                    <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                        <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                        <strong>Đánh giá:</strong> Quarterly review để điều chỉnh kịp thời, báo cáo minh bạch progress
                    </li>
                    <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                        <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                        <strong>Phối hợp:</strong> Cần sự hỗ trợ từ các phòng ban (Sales, Marketing, Support) để thành công
                    </li>
                    <li style="padding: 8px 0; padding-left: 22px; position: relative;">
                        <span style="position: absolute; left: 0; color: #fb923c;">•</span>
                        <strong>Risk:</strong> Tất cả là đề xuất sơ bộ, chờ góp ý và phê duyệt từ BĐH
                    </li>
                </ul>
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
