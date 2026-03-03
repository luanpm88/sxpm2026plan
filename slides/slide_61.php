<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.block{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">workspace_premium</span>People, Certification, Governance, Tools (B11-B14)</div>
    <div class="slide-subtitle">Chuẩn bị nội lực theo lộ trình 3 năm để triển khai FDI sản xuất KCN</div>
  </div>
  <div class="slide-content">
    <div class="row g-3">
      <div class="col-md-6"><div class="block"><strong>B11 - Chuyên môn & chứng chỉ (theo năm)</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Year 1: SCRUM discipline + secure delivery baseline</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 2: tăng cường roadmap ISO 27001 / ISO 9001 theo mức sẵn sàng</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 3: chuẩn hóa competency matrix theo vai trò và ngành</span></li></ul></div></div>
      <div class="col-md-6"><div class="block"><strong>B12 - Nhân sự (small -> medium -> large)</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Year 1: <strong>6-8 người</strong> cho pilot squad (PM/BA, Solution, Tech Lead, Dev, QA, Support)</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 2: <strong>12-16 người</strong>, tách pre-sales, delivery, service operations</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 3: <strong>20-28 người</strong>, có capability owner theo hardware/infra/software</span></li></ul></div></div>
      <div class="col-md-6"><div class="block"><strong>B13 - Quy trình & quản trị</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>RACI rõ: Sales/Delivery/Support/Security cho từng phase</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Phase-gate review theo quý: pilot acceptance, rollout readiness, scale readiness</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Risk register + escalation path liên phòng ban</span></li></ul></div></div>
      <div class="col-md-6"><div class="block"><strong>B14 - Công cụ</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Backlog/issue/doc/monitoring chuẩn hóa dùng chung</span></li><li><span class="material-symbols-rounded">check_circle</span><span>CI/CD + security scanning + release checklist bắt buộc</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Dashboard KPI cho SLA, incident, lead time, adoption</span></li></ul></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
