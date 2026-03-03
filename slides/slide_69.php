<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.phase{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.gate{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">event</span>18-Month Practical Timeline (From Pilot to Replication)</div>
    <div class="slide-subtitle">Lộ trình 0-18 tháng theo phase-gate, có output và owner cụ thể</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="phase"><strong>0-3 tháng | Foundation</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Chuẩn hóa FDI manufacturing playbook + reference architecture</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Chốt tiêu chí chọn lighthouse customer</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> Manager + Solution Lead</span></li></ul></div></div>
      <div class="col-md-6"><div class="phase"><strong>4-6 tháng | Pilot Execution</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Triển khai pilot 1-2 khách hàng FDI KCN</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Đo baseline KPI + acceptance theo sprint</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> PM + Tech Lead + QA Lead</span></li></ul></div></div>
      <div class="col-md-6"><div class="phase"><strong>7-12 tháng | Hardening</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Khóa security/compliance gaps và stability issues</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Tạo evidence pack cho sales (KPI + case study)</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> Delivery Lead + Security Owner</span></li></ul></div></div>
      <div class="col-md-6"><div class="phase"><strong>13-18 tháng | Replication Ready</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Đóng gói rollout package cho nhiều factory/line</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Mở rộng có kiểm soát theo năng lực team</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> Program Manager + Capability Owners</span></li></ul></div></div>
    </div>
    <div class="gate"><strong>Phase-gate rule:</strong> chỉ chuyển phase khi đạt đủ acceptance criteria + KPI baseline + evidence vận hành. Không đạt gate thì không mở rộng.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
