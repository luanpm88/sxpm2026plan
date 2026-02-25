<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .lead-box { border: 1px solid #d1d5db; background: #f8fafc; border-radius: 14px; padding: 16px 18px; }
        .kpi-card { border: 1px solid #e5e7eb; border-radius: 14px; padding: 16px; background: #fff; height: 100%; }
        .kpi-title { font-size: .85rem; color: #6b7280; text-transform: uppercase; letter-spacing: .04em; }
        .kpi-value { font-size: 1.7rem; font-weight: 800; color: #0f172a; }
        .focus-pill { border: 1px solid #d1d5db; background: #f3f4f6; color: #334155; border-radius: 999px; padding: 8px 12px; font-size: .85rem; display: inline-flex; align-items: center; gap: 6px; }
        .story-block { border: 1px solid #e5e7eb; background: #ffffff; border-radius: 12px; padding: 12px; height: 100%; }
        .story-risk { border-color: #fed7aa; background: #fff7ed; }
        .story-success { border-color: #bbf7d0; background: #f0fdf4; }
        .success-panel { border-color: #bbf7d0 !important; background: #f0fdf4 !important; }
        .section-kicker {
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: #374151;
            margin-bottom: 4px;
        }
        .section-intro {
            font-size: 1.12rem;
            color: #111827;
            margin-bottom: 14px;
            line-height: 1.55;
        }
        .slide-content .text-secondary,
        .slide-content .small,
        .slide-content p,
        .slide-content li,
        .slide-content .kpi-title,
        .slide-content .text-primary,
        .slide-content .text-success,
        .slide-content .text-warning,
        .slide-content .text-info {
            color: #111827 !important;
        }
        .slide-content .material-symbols-rounded {
            color: #111827 !important;
        }
        .slide-content .pro-section-title .material-symbols-rounded,
        .slide-content .metric-icon,
        .slide-content .focus-pill .material-symbols-rounded {
            border-color: #d1d5db !important;
            background: #f3f4f6 !important;
        }
    </style>
</head>
<body>
<div class="slide-container">
    <div class="slide-header">
        <div class="slide-title"><span class="material-symbols-rounded">dashboard</span>Website Executive Overview</div>
        <div class="slide-subtitle">BOD Snapshot: challenge, strategic response, and expected business impact</div>
    </div>

    <div class="slide-content">
        <div class="mb-5">
            <div class="row g-3 align-items-center">
               <div class="col-md-8">
                    <div class="pro-section-title"><span class="material-symbols-rounded">flag</span>Board Context</div>
                    <p class="mb-0 text-secondary fs-4">Mục tiêu của kiến trúc landing page: chuyển hành vi khách hàng enterprise từ <strong>quan tâm</strong> sang <strong>liên hệ có chất lượng</strong> bằng funnel nhiều điểm vào, một điểm chuyển đổi.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <span class="focus-pill"><span class="material-symbols-rounded" style="font-size:16px;">flag</span>Single Conversion Goal: Contact/RFQ</span>
                </div>
            </div>
        </div>

        <div class="mb-2">
            <div class="section-kicker">Snapshot</div>
            <!-- <div class="section-intro">3 điểm nền tảng để BOD nắm nhanh bối cảnh, mô hình kiến trúc và phạm vi phiên trình bày.</div> -->
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4"><div class="kpi-card"><div class="kpi-title">Audience Fit</div><div class="kpi-value">Enterprise Buyers</div><div class="text-secondary">Cần năng lực, độ tin cậy, compliance.</div></div></div>
            <div class="col-md-4"><div class="kpi-card"><div class="kpi-title">Architecture Pattern</div><div class="kpi-value">Hub & Funnel</div><div class="text-secondary">Nhiều đường vào, luồng chuyển đổi rõ ràng.</div></div></div>
            <div class="col-md-4"><div class="kpi-card"><div class="kpi-title">Presentation Scope</div><div class="kpi-value">30 + 30 mins</div><div class="text-secondary">30 phút trình bày + 30 phút Q&A BOD.</div></div></div>
        </div>

        <div class="mb-2">
            <div class="section-kicker">Problem Framing</div>
            <!-- <div class="section-intro">Tách rõ vấn đề, giải pháp và kết quả kỳ vọng để người xem theo dõi mạch logic ngay từ đầu.</div> -->
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4"><div class="story-block story-risk"><div class="pro-section-title"><span class="material-symbols-rounded" style="color:#c2410c; border-color:#fed7aa; background:#fff7ed;">search</span>Challenge</div><div class="text-secondary">Buyer enterprise cần nội dung đủ sâu để justify đầu tư.</div></div></div>
            <div class="col-md-4"><div class="story-block"><div class="pro-section-title"><span class="material-symbols-rounded">lan</span>Solution</div><div class="text-secondary">Kiến trúc content có điều hướng + trust-building rõ.</div></div></div>
            <div class="col-md-4"><div class="story-block story-success"><div class="pro-section-title"><span class="material-symbols-rounded" style="color:#166534; border-color:#bbf7d0; background:#f0fdf4;">trending_up</span>Impact</div><div class="text-secondary">Lead chất lượng hơn và conversion có thể đo lường.</div></div></div>
        </div>

        <div class="mb-2">
            <div class="section-kicker">Execution Focus</div>
            <!-- <div class="section-intro">Hai góc nhìn vận hành chính: cách triển khai chiến lược và kết quả kinh doanh đo lường được.</div> -->
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="visual-panel mb-0">
                    <div class="pro-section-title"><span class="material-symbols-rounded">deployed_code</span>Strategic Solution</div>
                    <ul class="pro-list">
                        <li><span class="material-symbols-rounded">check_circle</span><span>Đa persona entry path</span></li>
                        <li><span class="material-symbols-rounded">check_circle</span><span>Content journey có định hướng</span></li>
                        <li><span class="material-symbols-rounded">check_circle</span><span>Trust signal xuyên suốt</span></li>
                        <li><span class="material-symbols-rounded">check_circle</span><span>Mọi CTA hội tụ về Contact</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="visual-panel mb-0 success-panel">
                    <div class="pro-section-title"><span class="material-symbols-rounded" style="color:#166534; border-color:#bbf7d0; background:#f0fdf4;">insights</span>Expected Business Outcome</div>
                    <ul class="pro-list">
                        <li><span class="material-symbols-rounded">arrow_forward</span><span>Tăng lead qualified theo tháng</span></li>
                        <li><span class="material-symbols-rounded">arrow_forward</span><span>Giảm friction trong hành trình mua</span></li>
                        <li><span class="material-symbols-rounded">arrow_forward</span><span>Dễ đo ROI nhờ funnel có tracking</span></li>
                        <li><span class="material-symbols-rounded">arrow_forward</span><span>Dễ mở rộng nội dung theo từng quý</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
