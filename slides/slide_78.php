<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.28rem;color:#111827;margin-top:8px;font-weight:500}
.section-card{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.phase{border:1px solid #94a3b8;border-radius:10px;background:#f8fafc;padding:10px;height:100%}
.detail-table{width:100%;border-collapse:collapse;font-size:.84rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:7px;vertical-align:top}
.detail-table th{background:#f3f4f6}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">engineering</span>FDI SX - Solution: Delivery Process & Team</div>
    <div class="slide-subtitle">Quy trình triển khai theo phase-gate và mô hình phối hợp đội ngũ hai bên</div>
  </div>

  <div class="slide-content">
    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">timeline</span>Delivery lifecycle theo mô hình SXPM</div>
      <div class="row g-2">
        <div class="col-md-3"><div class="phase"><strong>Phase 1 — Discover</strong><br>As-is mapping, KPI baseline, risk log khởi tạo, scope ưu tiên.</div></div>
        <div class="col-md-3"><div class="phase"><strong>Phase 2 — Design</strong><br>To-be process, architecture target, data mapping, acceptance draft.</div></div>
        <div class="col-md-3"><div class="phase"><strong>Phase 3 — Build & Integrate</strong><br>Config module, API/event integration, SIT/UAT theo checklist.</div></div>
        <div class="col-md-3"><div class="phase"><strong>Phase 4 — Operate & Improve</strong><br>Go-live stabilization, SLA tracking, optimization roadmap.</div></div>
      </div>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-7"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">rule</span>Gate criteria bắt buộc mỗi phase</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span><strong>Business gate:</strong> owner xác nhận scope và KPI mục tiêu.</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Technical gate:</strong> pass test tích hợp + dữ liệu + bảo mật.</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Operations gate:</strong> team vận hành được training + runbook sẵn sàng.</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Governance gate:</strong> risk/issues/escalation cập nhật và sign-off.</span></li></ul></div></div>
      <div class="col-md-5"><div class="section-card h-100"><div class="pro-section-title"><span class="material-symbols-rounded">groups</span>Cadence phối hợp</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Daily: integration blockers + incident triage.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Weekly: KPI trend + delivery risk review.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Bi-weekly: Steering committee với sponsor.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Monthly: roadmap update và scope governance.</span></li></ul></div></div>
    </div>

    <div class="section-card">
      <div class="pro-section-title"><span class="material-symbols-rounded">badge</span>RACI tóm tắt cho các vai trò chính</div>
      <table class="detail-table">
        <thead><tr><th>Hoạt động</th><th>Vendor PM</th><th>Solution Architect</th><th>Plant Owner</th><th>IT Owner</th><th>Executive Sponsor</th></tr></thead>
        <tbody>
          <tr><td>Scope & milestone</td><td>A/R</td><td>C</td><td>C</td><td>C</td><td>I</td></tr>
          <tr><td>Architecture & integration</td><td>I</td><td>A/R</td><td>C</td><td>R</td><td>I</td></tr>
          <tr><td>UAT & acceptance</td><td>C</td><td>C</td><td>A/R</td><td>R</td><td>I</td></tr>
          <tr><td>Go-live decision</td><td>R</td><td>R</td><td>R</td><td>R</td><td>A</td></tr>
          <tr><td>Change control</td><td>A/R</td><td>R</td><td>C</td><td>C</td><td>I</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
