<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .decision-card { border: 1px solid #e5e7eb; border-radius: 14px; background: #fff; padding: 16px; height: 100%; }
        .decision-card ul { margin-bottom: 0; }
        .next-step { border: 1px solid #e5e7eb; border-radius: 10px; background: #fff; padding: 12px; height: 100%; display: flex; gap: 10px; align-items: flex-start; }
        .next-step-index { width: 28px; height: 28px; border-radius: 999px; background: #eff6ff; border: 1px solid #bfdbfe; color: #1d4ed8; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0; }
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
        <div class="slide-title"><span class="material-symbols-rounded">gavel</span>Board Decision & Next Steps</div>
        <div class="slide-subtitle">Các quyết định cần chốt để đi vào execution ngay trong Q1/2026</div>
    </div>

    <div class="slide-content">
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <div class="decision-card">
                    <div class="pro-section-title"><span class="material-symbols-rounded">checklist</span>Approve Now</div>
                    <ul class="pro-list">
                        <li><span class="material-symbols-rounded">check_circle</span><span>Kiến trúc website 11-page theo funnel</span></li>
                        <li><span class="material-symbols-rounded">check_circle</span><span>Chiến lược nội dung 4-stage</span></li>
                        <li><span class="material-symbols-rounded">check_circle</span><span>Timeline launch đầu tháng 03/2026</span></li>
                        <li><span class="material-symbols-rounded">check_circle</span><span>Bộ KPI báo cáo định kỳ</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="decision-card">
                    <div class="pro-section-title"><span class="material-symbols-rounded" style="color:#d97706; border-color:#fcd34d; background:#fffbeb;">gavel</span>Decision Items</div>
                    <ul class="pro-list">
                        <li><span class="material-symbols-rounded">chevron_right</span><span>Phê duyệt ngân sách marketing traffic</span></li>
                        <li><span class="material-symbols-rounded">chevron_right</span><span>Chỉ định executive sponsor</span></li>
                        <li><span class="material-symbols-rounded">chevron_right</span><span>Chốt lịch monthly review (last Wednesday)</span></li>
                        <li><span class="material-symbols-rounded">chevron_right</span><span>Chốt owner theo dõi KPI end-to-end</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card border-0 visual-panel" style="background:#f8fbff; border:1px solid #cfe2ff !important;">
            <div class="card-body">
                <div class="pro-section-title"><span class="material-symbols-rounded">fast_forward</span>Immediate Next Steps (Week 1)</div>
                <div class="row g-2 text-secondary">
                    <div class="col-md-4"><div class="next-step"><span class="next-step-index">1</span><span>Finalize copy + visual standards</span></div></div>
                    <div class="col-md-4"><div class="next-step"><span class="next-step-index">2</span><span>Start build sprint + QA checklist</span></div></div>
                    <div class="col-md-4"><div class="next-step"><span class="next-step-index">3</span><span>Prepare campaign + sales handoff</span></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
