<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.chk{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.final{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">task_alt</span>BOD Realism Checkpoint & Final Confirmations</div>
    <div class="slide-subtitle">Khóa kỳ vọng thực tế trước khi mở rộng để tránh over-commit</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="chk"><div class="pro-section-title"><span class="material-symbols-rounded">storefront</span>Market signal</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đã có 1-2 lighthouse customers phù hợp tiêu chí</span></li><li><span class="material-symbols-rounded">check_circle</span><span>ROI story và pain-fit được xác nhận</span></li><li><span class="material-symbols-rounded">warning</span><span>NO-GO nếu chưa có cam kết pilot thực tế</span></li></ul></div></div>
      <div class="col-md-4"><div class="chk"><div class="pro-section-title"><span class="material-symbols-rounded">engineering</span>Delivery readiness</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đạt phase-gate: acceptance + KPI baseline</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Owner rõ cho security, integration, support</span></li><li><span class="material-symbols-rounded">warning</span><span>NO-GO nếu team quá tải hoặc quality chưa ổn định</span></li></ul></div></div>
      <div class="col-md-4"><div class="chk"><div class="pro-section-title"><span class="material-symbols-rounded">account_balance_wallet</span>Financial guardrail</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Ngân sách duyệt theo phase, không giải ngân full upfront</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Theo dõi burn-rate vs KPI theo tháng/quý</span></li><li><span class="material-symbols-rounded">warning</span><span>NO-GO nếu burn-rate vượt trần không có tín hiệu doanh thu</span></li></ul></div></div>
    </div>
    <div class="final"><strong>Final confirmations for BOD:</strong> (1) Duyệt lighthouse-first strategy, (2) Duyệt budget envelope theo scenario + phase-gate, (3) Duyệt danh sách owner và cơ chế review hàng quý để giữ kế hoạch trong vùng thực tế.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
