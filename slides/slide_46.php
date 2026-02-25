<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .phase { border: 1px solid #e5e7eb; border-radius: 14px; background: #fff; padding: 16px; height: 100%; }
        .phase .badge { margin-bottom: 8px; }
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
        <div class="slide-title"><span class="material-symbols-rounded">rocket_launch</span>Launch Plan (4-6 Weeks)</div>
        <div class="slide-subtitle">Execution framework ngắn gọn, ưu tiên ra thị trường nhanh nhưng kiểm soát chất lượng</div>
    </div>

    <div class="slide-content">
        <div class="row g-3 mb-3">
            <div class="col-md-4"><div class="phase"><span class="badge text-bg-primary">Phase 1 · Weeks 1-2</span><br><div class="pro-section-title"><span class="material-symbols-rounded">construction</span>Foundation</div><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>Deploy đủ page core</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Kết nối CTA + tracking</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Test form end-to-end</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Mobile responsiveness</span></li></ul></div></div>
            <div class="col-md-4"><div class="phase"><span class="badge text-bg-warning">Phase 2 · Week 3</span><br><div class="pro-section-title"><span class="material-symbols-rounded" style="color:#d97706; border-color:#fcd34d; background:#fffbeb;">launch</span>Launch Enablement</div><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>SEO + GA4 setup</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Heatmap & behavior tracking</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Marketing campaign go-live</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Sales handoff playbook</span></li></ul></div></div>
            <div class="col-md-4"><div class="phase"><span class="badge text-bg-success">Phase 3 · Week 4+</span><br><div class="pro-section-title"><span class="material-symbols-rounded">tune</span>Optimization</div><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>Review funnel weekly</span></li><li><span class="material-symbols-rounded">check_circle</span><span>A/B testing CTA/copy</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Tối ưu trang bounce cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Điều chỉnh thông điệp theo data</span></li></ul></div></div>
        </div>

        <div class="visual-panel mb-0">
            <strong>Operating Rhythm:</strong> Weekly optimization, monthly board-level KPI report, quarterly content refresh.
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
