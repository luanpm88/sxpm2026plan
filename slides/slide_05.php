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
                Hướng 1 – Outsourcing
            </div>
            <div class="slide-subtitle">
                <span class="material-symbols-rounded">payments</span>
                <span>Tạo dòng tiền ổn định, nuôi team và tích lũy kinh nghiệm</span>
            </div>
        </div>
        
        <div class="slide-content">
            <div class="info-card full-width">
                <div class="card-header">
                    <span class="material-symbols-rounded">analytics</span>
                    Đánh giá dựa trên hiện trạng bộ phận
                </div>
                <div class="card-content">
                    Với quy mô <strong>7-9 nhân sự</strong> và năng lực <strong>full-cycle</strong> hiện tại, outsourcing là hướng đi <strong>phù hợp</strong> để:
                    đảm bảo dòng tiền ổn định, duy trì hoạt động team, và tích lũy kinh nghiệm thực tế từ nhiều nghiệp vụ khác nhau.
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card">
                    <div class="card-header positive">
                        <span class="material-symbols-rounded">thumb_up</span>
                        Lợi ích
                    </div>
                    <ul class="card-list positive">
                        <li><strong>Dòng tiền ổn định</strong> để vận hành</li>
                        <li><strong>Nuôi team</strong> trong giai đoạn xây sản phẩm</li>
                        <li>Tích lũy <strong>case thực tế</strong> đa dạng</li>
                        <li>Học hỏi <strong>nghiệp vụ</strong> nhiều lĩnh vực</li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <div class="card-header info">
                        <span class="material-symbols-rounded">target</span>
                        Định hướng 2026
                    </div>
                    <ul class="card-list neutral">
                        <li>Mini projects <strong>(< 100 triệu)</strong></li>
                        <li><strong>Nâng cấp</strong> hệ thống khách cũ</li>
                        <li><strong>Bảo trì</strong> theo tháng/năm</li>
                        <li>Dịch vụ <strong>tư vấn</strong> kỹ thuật</li>
                    </ul>
                </div>
            </div>
            
            <div class="assessment-section">
                <div class="info-card">
                    <div class="card-header warning">
                        <span class="material-symbols-rounded">report_problem</span>
                        Hạn chế cần lưu ý
                    </div>
                    <ul class="card-list warning">
                        <li>Năng lực <strong>phân tán</strong> theo từng dự án</li>
                        <li>Thiếu <strong>tài sản</strong> tích lũy dài hạn</li>
                        <li>Khó <strong>scale</strong> và tăng giá trị</li>
                        <li>Phụ thuộc vào <strong>nguồn dự án</strong></li>
                    </ul>
                </div>
            </div>
            
            <div class="warning-box full-width">
                <span class="material-symbols-rounded">warning</span>
                <span class="warning-text">KHÔNG theo đuổi dự án lớn, dài hạn, rủi ro cao</span>
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
