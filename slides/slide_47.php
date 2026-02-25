<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .quarter { border: 1px solid #e5e7eb; border-radius: 14px; background: #fff; padding: 14px; height: 100%; }
        .quarter h6 { margin-bottom: 8px; font-weight: 800; }
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
        <div class="slide-title"><span class="material-symbols-rounded">calendar_month</span>12-Month Roadmap</div>
        <div class="slide-subtitle">Lộ trình tăng trưởng theo quý: từ nền tảng tới cá nhân hóa trải nghiệm</div>
    </div>

    <div class="slide-content">
        <div class="row g-3 mb-3">
            <div class="col-md-3"><div class="quarter"><h6 class="text-primary"><span class="material-symbols-rounded me-1" style="font-size:18px; color:#2563eb;">rocket_launch</span>Q1 2026</h6><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>Launch architecture</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Baseline KPI</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Optimize funnel core</span></li></ul></div></div>
            <div class="col-md-3"><div class="quarter"><h6 class="text-success"><span class="material-symbols-rounded me-1" style="font-size:18px; color:#15803d;">dynamic_feed</span>Q2 2026</h6><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>Testimonials</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Video case studies</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Mở rộng blog/R&D</span></li></ul></div></div>
            <div class="col-md-3"><div class="quarter"><h6 class="text-warning"><span class="material-symbols-rounded me-1" style="font-size:18px; color:#d97706;">integration_instructions</span>Q3 2026</h6><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>Interactive demo</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Live chat + automation</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Advanced analytics</span></li></ul></div></div>
            <div class="col-md-3"><div class="quarter"><h6 class="text-info"><span class="material-symbols-rounded me-1" style="font-size:18px; color:#0ea5e9;">psychology</span>Q4 2026</h6><ul class="pro-list"><li><span class="material-symbols-rounded">check_circle</span><span>AI chatbot</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Personalized paths</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Enhanced mobile UX</span></li></ul></div></div>
        </div>

        <div class="card border-0 visual-panel" style="background:#f8fbff; border:1px solid #cfe2ff !important;">
            <div class="card-body">
                <div class="pro-section-title"><span class="material-symbols-rounded">monitoring</span>Roadmap Governance</div>
                <ul class="pro-list">
                    <li><span class="material-symbols-rounded">chevron_right</span><span>Traffic quality</span></li>
                    <li><span class="material-symbols-rounded">chevron_right</span><span>Conversion efficiency</span></li>
                    <li><span class="material-symbols-rounded">chevron_right</span><span>Lead quality</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
