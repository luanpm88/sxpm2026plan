<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .cluster { border: 1px solid #e5e7eb; border-radius: 14px; background: #fff; padding: 16px; height: 100%; }
        .cluster h6 { margin-bottom: 10px; }
        .chart-box { border: 2px dashed #93c5fd; background: #f8fbff; border-radius: 14px; padding: 16px; }
        .cluster .material-symbols-rounded { font-size: 18px; color: #2563eb; }
        .buyer-map { border: 1px solid #d1d5db; border-radius: 14px; background: #ffffff; padding: 16px; }
        .buyer-intro { font-size: 1.02rem; color: #111827; margin: 4px 0 12px; }
        .buyer-row { border: 1px solid #e5e7eb; border-radius: 11px; background: #f9fafb; padding: 10px 12px; margin-bottom: 10px; }
        .buyer-row:last-child { margin-bottom: 0; }
        .buyer-q { font-weight: 700; margin-bottom: 4px; }
        .buyer-meta { display: flex; flex-wrap: wrap; gap: 8px; font-size: 0.94rem; }
        .buyer-chip { border: 1px solid #d1d5db; border-radius: 999px; background: #fff; padding: 4px 9px; display: inline-flex; align-items: center; gap: 5px; }
        .buyer-chip .material-symbols-rounded { font-size: 15px; }
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
    </style>
</head>
<body>
<div class="slide-container">
    <div class="slide-header">
        <div class="slide-title"><span class="material-symbols-rounded">view_quilt</span>Content Strategy by Page Cluster</div>
        <div class="slide-subtitle">Module hóa nội dung: self-contained, có liên kết, không dead-end</div>
    </div>

    <div class="slide-content">
        <div class="row g-3 mb-3">
            <div class="col-md-4"><div class="cluster"><h6 class="text-primary fw-bold"><span class="material-symbols-rounded me-1">door_open</span>Entry Cluster</h6><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>Homepage tạo credibility + interest</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Điều hướng chính tới Services</span></li></ul></div></div>
            <div class="col-md-4"><div class="cluster"><h6 class="text-success fw-bold"><span class="material-symbols-rounded me-1">menu_book</span>Education Cluster</h6><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>Services, Tech Stack, SCRUM, Scaling</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Chứng minh năng lực và phương pháp</span></li></ul></div></div>
            <div class="col-md-4"><div class="cluster"><h6 class="text-warning fw-bold"><span class="material-symbols-rounded me-1" style="color:#d97706;">verified_user</span>Trust Cluster</h6><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>About, Case Studies, Certifications</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Pricing giúp giảm rào cản quyết định</span></li></ul></div></div>
        </div>

        <div class="chart-box mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="pro-section-title mb-0"><span class="material-symbols-rounded">account_tree</span>IA Visual</div>
                <span class="badge text-bg-light border">INFORMATION_ARCHITECTURE.mermaid</span>
            </div>
            <div class="text-secondary">Chèn mindmap hierarchy: page purpose + CTA mapping.</div>
        </div>

        <div class="chart-box">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="pro-section-title mb-0"><span class="material-symbols-rounded">query_stats</span>Content Strategy Visual</div>
                <span class="badge text-bg-light border">CONTENT_STRATEGY.mermaid</span>
            </div>
            <div class="text-secondary">Chèn strategy theo stage: message, intent, CTA, success signal.</div>
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
