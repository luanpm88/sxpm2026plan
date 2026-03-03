<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.step{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:14px;height:100%}
.badge-step{width:30px;height:30px;border:1px solid #cbd5e1;border-radius:999px;background:#f8fafc;display:inline-flex;align-items:center;justify-content:center;font-weight:700;margin-bottom:8px}
.scrum{border:1px solid #9ca3af;border-radius:14px;background:#f8fafc;padding:16px}
.gate{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:12px;height:100%}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">route</span>Implementation Method (A5) — SCRUM</div>
    <div class="slide-subtitle">FDI sản xuất KCN làm trước: SCRUM theo phase-gate có điều kiện chuyển rõ ràng</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="step"><div class="badge-step">1</div><strong>Assess</strong><p class="mb-0">Khảo sát hiện trạng + mục tiêu.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">2</div><strong>Design backlog</strong><p class="mb-0">Ưu tiên theo business value.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">3</div><strong>Pilot sprint</strong><p class="mb-0">Sprint 2 tuần, demo liên tục.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">4</div><strong>UAT</strong><p class="mb-0">Kiểm thử với user thật.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">5</div><strong>Go-live</strong><p class="mb-0">Đào tạo + hỗ trợ vận hành đầu kỳ.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">6</div><strong>Scale</strong><p class="mb-0">Mở rộng line/factory có kiểm soát.</p></div></div>
    </div>
    <div class="scrum mb-3"><strong>SCRUM cadence:</strong> Planning -> Daily -> Review -> Retro theo chu kỳ 2 tuần. <strong>Mô hình triển khai:</strong> Pilot-first, module-by-module, tránh big-bang risk.</div>

    <div class="row g-3">
      <div class="col-md-4"><div class="gate"><strong>Phase-gate Y1 -> Y2</strong><p class="mb-0 mt-1">Pilot được nghiệm thu, có baseline KPI và bộ tài liệu solution/playbook chuẩn.</p></div></div>
      <div class="col-md-4"><div class="gate"><strong>Phase-gate Y2 -> Y3</strong><p class="mb-0 mt-1">Rollout ổn định đa line/nhà máy, tích hợp ERP/MES đạt tiêu chí vận hành.</p></div></div>
      <div class="col-md-4"><div class="gate"><strong>Ownership</strong><p class="mb-0 mt-1">PO/PM chịu backlog; Tech Lead chịu kiến trúc; QA/Support chịu chất lượng và SLA sau go-live.</p></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
