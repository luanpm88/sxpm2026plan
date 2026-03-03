<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.mod{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.kpi{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">widgets</span>Core Modules + Quantified Value (A7)</div>
    <div class="slide-subtitle">Từ module chức năng tới giá trị kinh doanh đo lường được</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="mod"><div class="pro-section-title"><span class="material-symbols-rounded">factory</span>Production + Quality</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Work order + progress tracking</span></li><li><span class="material-symbols-rounded">check_circle</span><span>In-process quality checkpoints</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Non-conformance tracking</span></li></ul></div></div>
      <div class="col-md-6"><div class="mod"><div class="pro-section-title"><span class="material-symbols-rounded">inventory_2</span>Warehouse + Dashboard</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Raw/WIP/FG inventory visibility</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Realtime KPI dashboard</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Cross-department data consistency</span></li></ul></div></div>
    </div>
    <div class="kpi"><strong>Giá trị định lượng gợi ý để đo:</strong> giảm downtime %, giảm thời gian tổng hợp báo cáo, tăng độ chính xác tồn kho, giảm lead-time xử lý sự cố, tăng tỷ lệ hoàn thành đơn hàng đúng hạn.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
