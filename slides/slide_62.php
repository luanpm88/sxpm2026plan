<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.year{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.frame{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">timeline</span>Milestones, Resources & Cost Frame (B15-B16)</div>
    <div class="slide-subtitle">FDI manufacturing KCN làm trước: roadmap 3 năm, điều kiện chuyển pha, và team scale-up</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="year"><strong>Year 1 — Foundation & Pilot</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đóng gói FDI playbook + kiến trúc baseline + proposal template</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Pilot 1-2 khách hàng FDI KCN để xác lập baseline KPI</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Team triển khai <strong>6-8 người</strong> (PM/BA, Solution, Tech Lead, Dev, QA, Support)</span></li></ul></div></div>
      <div class="col-md-4"><div class="year"><strong>Year 2 — Replicate & Expand</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Nhân bản pilot thành rollout package cho nhiều line/nhà máy</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Chuẩn hóa tích hợp ERP/MES, monitoring, security hardening</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Team triển khai <strong>12-16 người</strong>, tách pre-sales / delivery / vận hành</span></li></ul></div></div>
      <div class="col-md-4"><div class="year"><strong>Year 3 — Scale Portfolio</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Mở rộng danh mục ngành ưu tiên, giữ chuẩn delivery thống nhất</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Thiết lập service operations đa lớp SLA và governance liên phòng ban</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Team triển khai <strong>20-28 người</strong>, có capability owner theo từng mảng</span></li></ul></div></div>
    </div>
    <div class="frame"><strong>Phase gate & resource-cost frame:</strong> chỉ chuyển Year 2 khi Year 1 có pilot acceptance + baseline KPI + tài liệu chuẩn; chỉ chuyển Year 3 khi Year 2 đạt ổn định rollout. Khung ngân sách chia 4 nhóm People / Process / Platform / Program và duyệt theo từng phase để kiểm soát rủi ro.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
