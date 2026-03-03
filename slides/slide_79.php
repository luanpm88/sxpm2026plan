<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.28rem;color:#111827;margin-top:8px;font-weight:500}
.section-card{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.pillar{border:1px solid #94a3b8;border-radius:10px;background:#f8fafc;padding:10px;height:100%}
.detail-table{width:100%;border-collapse:collapse;font-size:.84rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:7px;vertical-align:top}
.detail-table th{background:#f3f4f6}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">shield</span>FDI SX - Solution: Security, Infra, Network & Support</div>
    <div class="slide-subtitle">Khung bảo mật, hạ tầng, mạng và cơ chế hỗ trợ để vận hành bền vững sau go-live</div>
  </div>

  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="pillar"><strong>Security Baseline</strong><ul class="pro-list mb-0 mt-2"><li><span class="material-symbols-rounded">check_circle</span><span>IAM theo role + least privilege.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Audit log và retention policy.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Patch/vulnerability review theo lịch.</span></li></ul></div></div>
      <div class="col-md-4"><div class="pillar"><strong>Infrastructure Pattern</strong><ul class="pro-list mb-0 mt-2"><li><span class="material-symbols-rounded">check_circle</span><span>Production/DR separation theo mức yêu cầu.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Capacity planning cho peak load theo line.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Backup & restore drill định kỳ.</span></li></ul></div></div>
      <div class="col-md-4"><div class="pillar"><strong>Network & Segmentation</strong><ul class="pro-list mb-0 mt-2"><li><span class="material-symbols-rounded">check_circle</span><span>Phân vùng IT/OT có kiểm soát cổng giao tiếp.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Whitelist service traffic giữa các domain.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Monitoring bất thường theo luồng tích hợp.</span></li></ul></div></div>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">support_agent</span>Mô hình hỗ trợ vận hành</div>
      <table class="detail-table">
        <thead><tr><th>Band</th><th>Phạm vi</th><th>Response target</th><th>Escalation</th><th>Ghi chú</th></tr></thead>
        <tbody>
          <tr><td>L1 (On-site/Helpdesk)</td><td>Tiếp nhận sự cố, phân loại, thao tác chuẩn</td><td>15-30 phút</td><td>L2 sau khi xác nhận impact</td><td>Runbook bắt buộc</td></tr>
          <tr><td>L2 (Application/Integration)</td><td>Xử lý lỗi chức năng, kết nối, dữ liệu</td><td>30-60 phút</td><td>L3 nếu cần fix code/patch</td><td>Theo dõi đến khi service restored</td></tr>
          <tr><td>L3 (Engineering)</td><td>Root cause, hotfix, kiến trúc cải tiến</td><td>2-4 giờ (critical)</td><td>Steering nếu vượt SLA</td><td>Postmortem bắt buộc</td></tr>
        </tbody>
      </table>
    </div>

    <div class="row g-3">
      <div class="col-md-8"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">gpp_maybe</span>Boundary cam kết</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>SLA có hiệu lực khi hạ tầng và quy trình vận hành đáp ứng baseline đã thống nhất.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Thay đổi lớn về network policy hoặc hệ thống nguồn cần re-validation trước khi go-live phase tiếp theo.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Không xử lý triệt để bằng nhân sự support nếu chưa đóng root cause về kiến trúc/dữ liệu.</span></li></ul></div></div>
      <div class="col-md-4"><div class="visual-panel h-100"><strong>Thông điệp chốt</strong><p class="mb-0 mt-2">Giải pháp chỉ bền vững khi security, infra, network và support được thiết kế như một hệ thống thống nhất, không tách rời khỏi delivery model.</p></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
