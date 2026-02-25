<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .panel { border: 1px solid #e5e7eb; border-radius: 14px; background: #fff; padding: 16px; height: 100%; }
        .step-row { border: 1px solid #e5e7eb; border-radius: 10px; padding: 10px 12px; display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
        .step-num { width: 28px; height: 28px; border-radius: 999px; background: #eff6ff; border: 1px solid #bfdbfe; color: #1d4ed8; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; font-size: 14px; }
        .slide-content .text-secondary,
        .slide-content .small,
        .slide-content p,
        .slide-content li,
        .slide-content .text-primary,
        .slide-content .text-success,
        .slide-content .text-warning,
        .slide-content .text-info {
            color: #111827 !important;
        }
        .slide-content .material-symbols-rounded {
            color: #111827 !important;
        }
        .slide-content .pro-section-title .material-symbols-rounded {
            border-color: #d1d5db !important;
            background: #f3f4f6 !important;
        }
    </style>
</head>
<body>
<div class="slide-container">
    <div class="slide-header">
        <div class="slide-title"><span class="material-symbols-rounded">target</span>CTA Strategy & Trust Staircase</div>
        <div class="slide-subtitle">CTA theo ngữ cảnh + niềm tin tăng dần theo concern của khách hàng</div>
    </div>

    <div class="slide-content">
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <div class="panel">
                    <div class="pro-section-title"><span class="material-symbols-rounded">touch_app</span>Progressive CTA Set</div>
                    <ul class="pro-list">
                        <li><span class="material-symbols-rounded">chevron_right</span><span><strong>Homepage:</strong> Free Consultation</span></li>
                        <li><span class="material-symbols-rounded">chevron_right</span><span><strong>Services:</strong> Consult on Services</span></li>
                        <li><span class="material-symbols-rounded">chevron_right</span><span><strong>Pricing:</strong> Get Pricing Consultation</span></li>
                        <li><span class="material-symbols-rounded">chevron_right</span><span><strong>All pages:</strong> Contact luôn sẵn sàng ở header/body CTA</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <div class="pro-section-title"><span class="material-symbols-rounded" style="color:#d97706; border-color:#fcd34d; background:#fffbeb;">stairs</span>Trust-Building Staircase</div>
                    <div class="step-row"><span class="step-num">1</span><span>Năng lực thực thi: Services + Tech Stack</span></div>
                    <div class="step-row"><span class="step-num">2</span><span>Độ tin cậy delivery: SCRUM + Case Studies</span></div>
                    <div class="step-row"><span class="step-num">3</span><span>Khả năng scale: Scaling roadmap</span></div>
                    <div class="step-row"><span class="step-num">4</span><span>Khả năng ngân sách: Pricing clarity</span></div>
                    <div class="step-row mb-0"><span class="step-num">5</span><span>An toàn/compliance: Certifications</span></div>
                </div>
            </div>
        </div>

        <div class="visual-panel mb-0">
            <strong>Core Principle:</strong> CTA không chỉ để bấm, mà là công cụ giảm rủi ro nhận thức ở từng phase mua hàng.
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
