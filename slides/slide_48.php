<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .risk { border: 1px solid #e5e7eb; border-radius: 14px; background: #fff; padding: 14px; height: 100%; }
        .risk .metric { color: #6b7280; font-size: 1rem; font-weight: 600; }
        .slide-content .text-secondary,
        .slide-content .small,
        .slide-content p,
        .slide-content li,
        .slide-content .metric,
        .slide-content .text-primary,
        .slide-content .text-success,
        .slide-content .text-warning,
        .slide-content .text-info {
            color: #111827 !important;
        }
    </style>
</head>
<body>
<div class="slide-container">
    <div class="slide-header">
        <div class="slide-title"><span class="material-symbols-rounded">shield</span>Risk Mitigation & Governance</div>
        <div class="slide-subtitle">Quản trị rủi ro bằng metric rõ ràng và vòng phản hồi ngắn</div>
    </div>

    <div class="slide-content">
        <div class="row g-3">
            <div class="col-md-6"><div class="risk"><div class="pro-section-title"><span class="material-symbols-rounded" style="color:#dc2626; border-color:#fecaca; background:#fef2f2;">warning</span>Low Form Completion</div><ul class="pro-list mb-2"><li><span class="material-symbols-rounded">chevron_right</span><span>Tối ưu form fields</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Test CTA placement + copy</span></li></ul><div class="metric">Target: Completion &gt; 50%</div></div></div>
            <div class="col-md-6"><div class="risk"><div class="pro-section-title"><span class="material-symbols-rounded" style="color:#dc2626; border-color:#fecaca; background:#fef2f2;">warning</span>High Bounce Rate</div><ul class="pro-list mb-2"><li><span class="material-symbols-rounded">chevron_right</span><span>Nâng hero value proposition</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Tăng tốc tải + điều hướng rõ</span></li></ul><div class="metric">Target: Bounce &lt; 50%</div></div></div>
            <div class="col-md-6"><div class="risk"><div class="pro-section-title"><span class="material-symbols-rounded" style="color:#dc2626; border-color:#fecaca; background:#fef2f2;">warning</span>Poor Lead Quality</div><ul class="pro-list mb-2"><li><span class="material-symbols-rounded">chevron_right</span><span>Tăng pre-qualification</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Rõ project type + budget fit</span></li></ul><div class="metric">Target: Qualified lead &gt; 60%</div></div></div>
            <div class="col-md-6"><div class="risk"><div class="pro-section-title"><span class="material-symbols-rounded" style="color:#dc2626; border-color:#fecaca; background:#fef2f2;">warning</span>Low Engagement</div><ul class="pro-list mb-2"><li><span class="material-symbols-rounded">chevron_right</span><span>Refresh nội dung + visual</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Tăng readability đầu trang</span></li></ul><div class="metric">Target: Avg time/page &gt; 2 phút</div></div></div>
        </div>

        <div class="visual-panel mt-3 mb-0"><strong>Governance Loop:</strong> Review metric hằng tuần, escalations theo tháng, điều chỉnh chiến thuật theo quý.</div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
