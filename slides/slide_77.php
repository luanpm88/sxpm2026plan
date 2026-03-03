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
.arch-node{border:1px solid #94a3b8;border-radius:10px;background:#f8fafc;padding:10px;text-align:center;height:100%}
.link-row{font-size:1.5rem;color:#64748b;text-align:center;line-height:1}
.bridge{border:1px solid #93c5fd;border-radius:12px;background:#eff6ff;padding:12px}
.summary-note{display:flex;gap:12px;align-items:flex-start;border:1px solid #c7d2fe;border-radius:14px;background:linear-gradient(180deg,#f8fbff 0%,#eef4ff 100%);padding:14px}
.summary-icon{width:40px;height:40px;border:1px solid #93c5fd;border-radius:999px;display:flex;align-items:center;justify-content:center;background:#fff;color:#2563eb;flex-shrink:0}
.summary-icon .material-symbols-rounded{font-size:22px;line-height:1}
.summary-title{font-size:1rem;font-weight:700;color:#1e3a8a;margin-bottom:2px}
.summary-text{font-size:1rem;color:#0f172a;line-height:1.45}
.detail-table{width:100%;border-collapse:collapse;font-size:.94rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:8px;vertical-align:top}
.detail-table th{background:#f3f4f6;color:#0f172a;font-weight:700}
.detail-table td{color:#111827}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">account_tree</span>FDI SX - Solution: Architecture & Integration</div>
    <div class="slide-subtitle">Kiến trúc tích hợp nhiều hệ thống trong môi trường FDI: an toàn, truy vết, và mở rộng có kiểm soát</div>
  </div>

  <div class="slide-content">
    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">schema</span>Kiến trúc logic tích hợp</div>
      <div class="row g-2 align-items-stretch">
        <div class="col-md-3"><div class="arch-node"><strong>System of Record</strong><br>ERP / HRM / Master Data</div></div>
        <div class="col-md-1 link-row">→</div>
        <div class="col-md-4"><div class="arch-node"><strong>Integration Hub</strong><br>API Gateway + Event Queue + Mapping Rules</div></div>
        <div class="col-md-1 link-row">→</div>
        <div class="col-md-3"><div class="arch-node"><strong>MES Core Modules</strong><br>Production / Quality / Warehouse / Maintenance</div></div>
      </div>
      <div class="link-row">↓</div>
      <div class="row g-2">
        <div class="col-md-6"><div class="arch-node"><strong>Operational Dashboard</strong><br>Role-based KPI, alert board, escalation list</div></div>
        <div class="col-md-6"><div class="arch-node"><strong>Audit & Compliance Layer</strong><br>Event trail, access log, evidence export</div></div>
      </div>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-7"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">hub</span>Nguyên tắc tích hợp</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Không big-bang: ưu tiên luồng dữ liệu có tác động KPI cao trước.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Mapping data có version control và owner rõ ở hai đầu hệ thống.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Thiết kế error handling + retry + dead-letter queue từ đầu.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Mọi thay đổi interface đi qua change control board.</span></li></ul></div></div>
      <div class="col-md-5"><div class="section-card h-100"><div class="pro-section-title"><span class="material-symbols-rounded">security</span>Bảo vệ kiến trúc</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">lock</span><span>Least privilege theo role và môi trường.</span></li><li><span class="material-symbols-rounded">lock</span><span>Encryption in-transit và tại lớp lưu trữ cần thiết.</span></li><li><span class="material-symbols-rounded">lock</span><span>Segmentation giữa mạng nhà máy và vùng dịch vụ.</span></li><li><span class="material-symbols-rounded">lock</span><span>Audit log bắt buộc cho truy cập dữ liệu trọng yếu.</span></li></ul></div></div>
    </div>

    <div class="section-card">
      <div class="pro-section-title"><span class="material-symbols-rounded">table_rows</span>Integration matrix theo domain</div>
      <table class="detail-table">
        <thead><tr><th>Domain</th><th>Hệ thống nguồn</th><th>Dữ liệu trao đổi</th><th>Cơ chế</th><th>Rủi ro chính cần kiểm soát</th></tr></thead>
        <tbody>
          <tr><td>Production Plan</td><td>ERP</td><td>Work order, routing, target output</td><td>API + batch sync</td><td>Data mismatch giữa plan và actual</td></tr>
          <tr><td>Inventory</td><td>WMS/ERP</td><td>Stock movement, lot/batch, bin status</td><td>Event stream</td><td>Độ trễ khiến line thiếu vật tư cục bộ</td></tr>
          <tr><td>Quality</td><td>QMS/MES</td><td>Inspection result, NC, CAPA status</td><td>API bi-directional</td><td>Lệch trạng thái CAPA giữa hệ thống</td></tr>
          <tr><td>Workforce</td><td>HRM</td><td>Shift roster, skill matrix</td><td>Scheduled sync</td><td>Phân công ca sai năng lực</td></tr>
        </tbody>
      </table>
    </div>

    <div class="summary-note mt-3">
      <div class="summary-icon"><span class="material-symbols-rounded">tips_and_updates</span></div>
      <div>
        <div class="summary-title">Tóm tắt nhanh</div>
        <div class="summary-text">Kiến trúc tích hợp chỉ được xem là đạt khi có source of truth rõ, luồng dữ liệu kiểm soát được, và cơ chế xử lý lỗi đủ để vận hành ổn định khi mở rộng.</div>
      </div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
