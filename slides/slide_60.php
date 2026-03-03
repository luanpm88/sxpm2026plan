<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.box{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.gap{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.plan{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:12px;height:100%}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">analytics</span>Internal Capability: Current vs Required (B8-B10)</div>
    <div class="slide-subtitle">FDI-first readiness: hiện trạng, khoảng cách và kế hoạch lấp gap có owner</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="box"><strong>B8 - Current capability</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Có nền tảng custom software và tích hợp hệ thống</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Đội kỹ thuật full-stack, QA, DevOps đã vận hành dự án thực tế</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Đã có kinh nghiệm triển khai theo sprint và quản trị release</span></li></ul></div></div>
      <div class="col-md-4"><div class="box"><strong>B9 - Required capability</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Domain manufacturing sâu theo ngữ cảnh FDI KCN</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Vận hành theo chuẩn SLA/Uptime/Compliance có bằng chứng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Mô hình triển khai sản phẩm hóa (pilot -> rollout -> scale)</span></li></ul></div></div>
      <div class="col-md-4"><div class="box"><strong>B10 - Gap</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">warning</span><span>Thiếu playbook FDI manufacturing dùng chung cho pre-sales/delivery</span></li><li><span class="material-symbols-rounded">warning</span><span>Thiếu baseline KPI sau pilot để làm chuẩn nhân bản</span></li><li><span class="material-symbols-rounded">warning</span><span>Thiếu cơ chế owner liên phòng ban cho vận hành SLA nhiều lớp</span></li></ul></div></div>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="plan"><strong>0-90 ngày</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Hoàn thiện playbook + proposal template + checklist triển khai</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Owner: Delivery Lead + Solution Lead</span></li></ul></div></div>
      <div class="col-md-4"><div class="plan"><strong>3-12 tháng</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Chạy pilot, chốt acceptance criteria và baseline KPI</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Owner: PM + QA Lead + Support Lead</span></li></ul></div></div>
      <div class="col-md-4"><div class="plan"><strong>12+ tháng</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Đóng gói rollout toolkit để mở rộng đa line/nhà máy</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Owner: Program Manager + Capability Owners</span></li></ul></div></div>
    </div>

    <div class="gap"><strong>Gate liên kết roadmap:</strong> chỉ chuyển sang Year 2 khi hoàn tất pilot acceptance và baseline KPI; chỉ chuyển sang Year 3 khi rollout ổn định và governance liên phòng ban vận hành được.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
