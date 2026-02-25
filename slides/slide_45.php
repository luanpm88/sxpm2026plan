<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .metric { border: 1px solid #e5e7eb; border-radius: 12px; background: #fff; padding: 14px; height: 100%; }
        .metric h6 { margin-bottom: 6px; }
        .chart-box { border: 2px dashed #93c5fd; background: #f8fbff; border-radius: 14px; padding: 16px; }
        .metric-value { font-size: 1.7rem; font-weight: 800; color: #0f172a; }
        .metric-icon { width: 36px; height: 36px; border-radius: 10px; background: #eff6ff; border: 1px solid #bfdbfe; color: #2563eb; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 8px; }
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
        <div class="slide-title"><span class="material-symbols-rounded">monitoring</span>KPI Targets & Revenue Impact</div>
        <div class="slide-subtitle">Tập trung chỉ số đo được, gắn trực tiếp với đầu ra kinh doanh</div>
    </div>

    <div class="slide-content">
        <div class="row g-3 mb-3">
            <div class="col-md-3"><div class="metric"><div class="metric-icon"><span class="material-symbols-rounded" style="font-size:20px;">home_work</span></div><h6 class="text-primary fw-bold">Homepage → Services</h6><div class="metric-value">&gt; 40%</div><div class="text-secondary">Mức engage đầu funnel</div></div></div>
            <div class="col-md-3"><div class="metric"><div class="metric-icon"><span class="material-symbols-rounded" style="font-size:20px;">ads_click</span></div><h6 class="text-primary fw-bold">Services → Contact</h6><div class="metric-value">&gt; 15%</div><div class="text-secondary">CTA hiệu quả nội dung</div></div></div>
            <div class="col-md-3"><div class="metric"><div class="metric-icon"><span class="material-symbols-rounded" style="font-size:20px;">payments</span></div><h6 class="text-primary fw-bold">Pricing → Contact</h6><div class="metric-value">&gt; 20%</div><div class="text-secondary">Xử lý objection budget</div></div></div>
            <div class="col-md-3"><div class="metric"><div class="metric-icon"><span class="material-symbols-rounded" style="font-size:20px;">monitoring</span></div><h6 class="text-primary fw-bold">Overall Conversion</h6><div class="metric-value">2–5%</div><div class="text-secondary">Tùy traffic mix</div></div></div>
        </div>

        <div class="chart-box mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="pro-section-title mb-0"><span class="material-symbols-rounded">stacked_line_chart</span>Conversion Visual</div>
                <span class="badge text-bg-light border">CONVERSION_FUNNEL.mermaid</span>
            </div>
            <div class="text-secondary">Chèn chart conversion theo stage + drop-off points.</div>
        </div>

        <div class="visual-panel mb-0" style="border-color:#fde68a; background:linear-gradient(180deg,#fffaf0 0%,#ffffff 100%);">
            <div class="pro-section-title"><span class="material-symbols-rounded" style="color:#d97706; border-color:#fcd34d; background:#fffbeb;">paid</span>Revenue Lens</div>
            <ul class="pro-list">
                <li><span class="material-symbols-rounded">check_circle</span><span>2–4 dự án/tháng</span></li>
                <li><span class="material-symbols-rounded">check_circle</span><span>ACV $50K–$150K</span></li>
                <li><span class="material-symbols-rounded">check_circle</span><span>Tiềm năng $100K–$600K/tháng</span></li>
            </ul>
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
