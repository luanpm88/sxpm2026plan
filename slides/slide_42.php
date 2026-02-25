<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .stage-card { border: 1px solid #e5e7eb; border-radius: 12px; padding: 14px; background: #fff; height: 100%; }
        .stage-badge { font-size: .75rem; }
        .chart-box { border: 2px dashed #93c5fd; background: #f8fbff; border-radius: 14px; padding: 18px; }
        .pct { font-size: 1.5rem; font-weight: 800; color: #0f172a; }
        .track { height: 8px; border-radius: 999px; background: #e5e7eb; overflow: hidden; margin-top: 10px; }
        .fill { height: 100%; background: #3b82f6; }
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
        <div class="slide-title"><span class="material-symbols-rounded">conversion_path</span>Customer Journey 4-Stage Funnel</div>
        <div class="slide-subtitle">Tối ưu chuyển đổi theo từng giai đoạn ra quyết định của buyer enterprise</div>
    </div>

    <div class="slide-content">
        <div class="row g-3 mb-3">
            <div class="col-md-3"><div class="stage-card"><span class="badge text-bg-primary stage-badge">Stage 1</span><h6 class="mt-2 fw-bold"><span class="material-symbols-rounded me-1" style="font-size:18px;">campaign</span>Awareness</h6><div class="text-secondary">Homepage + value proposition</div><div class="pct mt-2">100%</div><div class="track"><div class="fill" style="width:100%;"></div></div></div></div>
            <div class="col-md-3"><div class="stage-card"><span class="badge text-bg-info stage-badge">Stage 2</span><h6 class="mt-2 fw-bold"><span class="material-symbols-rounded me-1" style="font-size:18px;">manage_search</span>Interest</h6><div class="text-secondary">Services / Tech / SCRUM / Cases</div><div class="pct mt-2">40%</div><div class="track"><div class="fill" style="width:40%;"></div></div></div></div>
            <div class="col-md-3"><div class="stage-card"><span class="badge text-bg-warning stage-badge">Stage 3</span><h6 class="mt-2 fw-bold"><span class="material-symbols-rounded me-1" style="font-size:18px;">balance</span>Consideration</h6><div class="text-secondary">Pricing / About / Certs</div><div class="pct mt-2">12%</div><div class="track"><div class="fill" style="width:12%;"></div></div></div></div>
            <div class="col-md-3"><div class="stage-card"><span class="badge text-bg-success stage-badge">Stage 4</span><h6 class="mt-2 fw-bold"><span class="material-symbols-rounded me-1" style="font-size:18px;">task_alt</span>Decision</h6><div class="text-secondary">Contact + qualification + RFQ</div><div class="pct mt-2">1.8%</div><div class="track"><div class="fill" style="width:2%;"></div></div></div></div>
        </div>

        <div class="chart-box mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="pro-section-title mb-0"><span class="material-symbols-rounded">query_stats</span>Funnel Visual</div>
                <span class="badge text-bg-light border">CUSTOMER_JOURNEY.mermaid</span>
            </div>
            <div class="text-secondary">Chèn flow 100 visitors → 40 engage → 12 consider → 2 convert.</div>
        </div>

        <div class="visual-panel mb-0"><strong>Monthly Scenario:</strong> 2,000 visitors có thể tạo khoảng 24 leads qualified khi funnel vận hành ổn định.</div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
