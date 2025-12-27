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
            color: #10b981;
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
        
        .full-width {
            grid-column: 1 / -1;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">code</span>
                Hướng 1 – Software Development Services
            </div>
            <div class="slide-subtitle">
                <span class="material-symbols-rounded">payments</span>
                <span>Dự án full-cycle & mini projects - Dòng tiền ổn định từ năng lực thực tế</span>
            </div>
        </div>
        
        <div class="slide-content">
            <div class="info-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">analytics</span>
                    Cơ sở năng lực & Thành tích
                </div>
                <div class="card-content">
                    Bộ phận đã triển khai <strong>các dự án lớn như ASMS</strong> (tỷ doanh thu), chứng minh năng lực <strong>full-cycle development từ A-Z</strong>.
                    Với quy mô <strong>7-9 nhân sự</strong> và SCRUM team linh hoạt, có thể handle cả <strong>dự án full</strong> lẫn <strong>mini projects</strong> (<100 triệu) thu nhập nhanh gọn.
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card">
                    <div class="card-header positive">
                        <span class="material-symbols-rounded">verified</span>
                        Năng lực thực tế
                    </div>
                    <ul class="card-list positive">
                        <li><strong>Dự án full-cycle</strong> như ASMS (tỷ doanh thu)</li>
                        <li><strong>Tư vấn khách hàng từ A-Z</strong> (phân tích, thiết kế, triển khai)</li>
                        <li><strong>SCRUM team</strong> linh hoạt cho dự án lớn nhỏ</li>
                        <li>Năng lực <strong>kỹ thuật đa dạng</strong> (web, mobile, backend)</li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <div class="card-header positive">
                        <span class="material-symbols-rounded">thumb_up</span>
                        Lợi ích chiến lược
                    </div>
                    <ul class="card-list positive">
                        <li><strong>Dòng tiền ổn định</strong> để vận hành và nuôi team</li>
                        <li>Tích lũy <strong>case thực tế</strong> đa dạng</li>
                        <li>Học hỏi <strong>nghiệp vụ</strong> nhiều lĩnh vực</li>
                        <li>Xây dựng <strong>portfolio</strong> mạnh và uy tín</li>
                    </ul>
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card">
                    <div class="card-header info">
                        <span class="material-symbols-rounded">target</span>
                        Định hướng 2026-2027
                    </div>
                    <ul class="card-list neutral">
                        <li><strong>Full projects:</strong> Dự án tỷ/trăm triệu với SCRUM team</li>
                        <li><strong>Mini projects:</strong> Dự án < 100 triệu, thu nhập nhanh</li>
                        <li><strong>Nâng cấp & bảo trì:</strong> Hệ thống khách cũ</li>
                        <li><strong>Tư vấn kỹ thuật:</strong> Phân tích, thiết kế, review</li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <div class="card-header warning">
                        <span class="material-symbols-rounded">report_problem</span>
                        Hạn chế cần lưu ý
                    </div>
                    <ul class="card-list warning">
                        <li>Năng lực <strong>phân tán</strong> theo từng dự án</li>
                        <li>Thiếu <strong>tài sản</strong> tích lũy dài hạn</li>
                        <li>Khó <strong>scale</strong> và tăng giá trị</li>
                        <li>Phụ thuộc vào <strong>nguồn dự án</strong> từ Sales</li>
                    </ul>
                </div>
            </div>
            
            <div class="info-card target-card full-width" style="background: #f0f9ff; border: 2px solid #bfdbfe;">
                <div class="card-header" style="background: #dbeafe; color: #1e40af;">
                    <span class="material-symbols-rounded">flag</span>
                    Mục tiêu cụ thể 2026-2027
                </div>
                <div class="objective-list" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 15px;">
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">01</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Doanh thu:</strong> 3-5 tỷ/năm từ dev services để nuôi team và hỗ trợ HKSpace
                        </div>
                    </div>
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">02</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Dự án:</strong> 2-3 full projects (trăm triệu+) + 8-12 mini projects (<100 triệu)
                        </div>
                    </div>
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">03</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Khách hàng:</strong> Giữ 3-5 khách cũ (bảo trì, nâng cấp) + mở rộng 5-7 khách mới
                        </div>
                    </div>
                    <div class="objective-item" style="display: flex; gap: 15px; align-items: flex-start; padding: 15px; background: #ffffff; border-radius: 12px;">
                        <div class="objective-number" style="background: #3b82f6; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem; flex-shrink: 0;">04</div>
                        <div class="objective-text" style="font-size: 1.05rem; line-height: 1.6; color: #1f2937;">
                            <strong>Quy trình:</strong> Chuẩn hóa quy trình dev, tài liệu kỹ thuật, xây portfolio/case study
                        </div>
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
