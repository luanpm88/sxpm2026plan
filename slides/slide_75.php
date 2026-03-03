<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.32rem;color:#0f172a;margin-top:8px;font-weight:600;line-height:1.35}
.slide-content{color:#0f172a}
.pro-section-title{font-size:1.18rem;font-weight:700;color:#0f172a}
.pro-list li span:last-child{font-size:1rem;color:#1f2937;line-height:1.45}
.section-card{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.badge-box{border:1px solid #93c5fd;border-radius:10px;background:#eff6ff;padding:8px 10px;font-size:.96rem;color:#1f2937}
.bridge{border:1px solid #93c5fd;border-radius:12px;background:#eff6ff;padding:12px}
.detail-table{width:100%;border-collapse:collapse;font-size:.94rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:8px;vertical-align:top}
.detail-table th{background:#f3f4f6;color:#0f172a;font-weight:700}
.detail-table td{color:#111827}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">category</span>FDI SX - Solution: What We Provide (MES Scope)</div>
    <div class="slide-subtitle">Giải pháp tổng thể MES, phạm vi triển khai và giá trị theo từng nhóm người dùng</div>
  </div>

  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-8"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">inventory_2</span>Scope sản phẩm</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span><strong>In scope:</strong> quản lý thực thi sản xuất, kho, chất lượng, bảo trì phối hợp, dashboard KPI.</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>In scope:</strong> tích hợp trọng yếu với ERP/MES/WMS/HRM/IoT theo lộ trình.</span></li><li><span class="material-symbols-rounded">warning</span><span><strong>Out of scope phase đầu:</strong> thay toàn bộ ERP hoặc migration big-bang.</span></li><li><span class="material-symbols-rounded">warning</span><span><strong>Out of scope phase đầu:</strong> custom không chuẩn hóa gây lock-in vận hành.</span></li></ul></div></div>
      <div class="col-md-4"><div class="section-card h-100"><div class="pro-section-title"><span class="material-symbols-rounded">handshake</span>Partnering model</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Discover: xác nhận pain + KPI baseline.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Co-design: chốt module ưu tiên + integration.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Delivery: thực thi theo phase-gate.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Governance: review định kỳ + escalation.</span></li></ul></div></div>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">groups</span>Khách hàng nhận được gì từ sản phẩm</div>
      <table class="detail-table">
        <thead><tr><th>Vai trò</th><th>Giá trị chính</th><th>KPI quan tâm</th></tr></thead>
        <tbody>
          <tr><td>Executive Sponsor</td><td>Khung đầu tư có điều kiện, quản trị rủi ro và lộ trình mở rộng rõ</td><td>ROI theo phase, risk exposure, budget adherence</td></tr>
          <tr><td>Plant Manager</td><td>Tăng visibility line, giảm downtime, ổn định sản lượng</td><td>OEE, downtime, throughput, OTD</td></tr>
          <tr><td>IT Manager</td><td>Tích hợp có chuẩn, vận hành dễ truy vết, kiểm soát thay đổi</td><td>Integration incident rate, data latency, audit pass rate</td></tr>
          <tr><td>Procurement</td><td>Phạm vi và milestone rõ để kiểm soát hợp đồng</td><td>Acceptance on-time, change request volume, TCO variance</td></tr>
        </tbody>
      </table>
    </div>

    <div class="row g-3">
      <div class="col-md-6"><div class="section-card h-100"><div class="pro-section-title"><span class="material-symbols-rounded">verified</span>Cam kết có điều kiện (guardrail)</div><div class="badge-box mb-2">Cam kết hiệu quả theo baseline dữ liệu và phạm vi đã chốt.</div><div class="badge-box mb-2">Cam kết SLA theo readiness hạ tầng và mô hình support đã thống nhất.</div><div class="badge-box">Mở rộng chỉ khi đạt acceptance + KPI + stability.</div></div></div>
      <div class="col-md-6"><div class="visual-panel h-100"><strong>Thông điệp chốt</strong><p class="mb-0 mt-2">Sản phẩm MES không chỉ cung cấp chức năng, mà cung cấp một mô hình vận hành có thể kiểm soát, đo lường, và nhân rộng theo điều kiện thực tế của nhà máy FDI.</p></div></div>
    </div>
  </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
