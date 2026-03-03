<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.28rem;color:#111827;margin-top:8px;font-weight:500}
.layer{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.layer-head{font-weight:700;color:#0f172a;margin-bottom:8px}
.connector{text-align:center;color:#64748b;font-size:28px;line-height:1}
.detail-table{width:100%;border-collapse:collapse;font-size:.84rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:7px;vertical-align:top}
.detail-table th{background:#f3f4f6}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">lan</span>FDI SX - Solution: Full Module Catalog</div>
    <div class="slide-subtitle">Mô hình module theo tầng vận hành MES: từ thu thập dữ liệu đến quyết định điều hành</div>
  </div>

  <div class="slide-content">
    <div class="row g-2 mb-2">
      <div class="col-md-12"><div class="layer"><div class="layer-head">Tầng 1 — Shopfloor Execution Layer</div><div class="row g-2"><div class="col-md-3"><div class="visual-panel"><strong>Production Execution</strong><br>Lệnh SX, trạng thái line, WIP, cycle-time</div></div><div class="col-md-3"><div class="visual-panel"><strong>Quality Control</strong><br>QC gate, NC log, CAPA workflow</div></div><div class="col-md-3"><div class="visual-panel"><strong>Maintenance</strong><br>PM plan, ticket sự cố, MTTR/MTBF</div></div><div class="col-md-3"><div class="visual-panel"><strong>Warehouse Ops</strong><br>Nhập-xuất-tồn, lot/batch traceability</div></div></div></div></div>
      <div class="col-md-12 connector">↓</div>
      <div class="col-md-12"><div class="layer"><div class="layer-head">Tầng 2 — Integration & Data Governance Layer</div><div class="row g-2"><div class="col-md-4"><div class="visual-panel"><strong>Integration Hub</strong><br>ERP/MES/WMS/HRM/IoT connectors</div></div><div class="col-md-4"><div class="visual-panel"><strong>Data Quality & Rules</strong><br>Mapping, validation, exception queue</div></div><div class="col-md-4"><div class="visual-panel"><strong>Audit & Trace</strong><br>Event log, action trail, compliance evidence</div></div></div></div></div>
      <div class="col-md-12 connector">↓</div>
      <div class="col-md-12"><div class="layer"><div class="layer-head">Tầng 3 — Management & Decision Layer</div><div class="row g-2"><div class="col-md-6"><div class="visual-panel"><strong>Operational Control Tower</strong><br>KPI dashboard theo Executive Sponsor/Plant/IT</div></div><div class="col-md-6"><div class="visual-panel"><strong>Decision Support</strong><br>Alerting, trend analysis, action recommendation</div></div></div></div></div>
    </div>

    <div class="layer mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">table_chart</span>Full module catalog (chi tiết chức năng)</div>
      <table class="detail-table">
        <thead><tr><th>Module</th><th>Chức năng chính</th><th>Dữ liệu vào/ra</th><th>KPI chính</th><th>Vai trò dùng</th></tr></thead>
        <tbody>
          <tr><td>Production Execution</td><td>Schedule dispatch, work order tracking, WIP control, line status</td><td>In: plan/order; Out: completion, delay, downtime</td><td>OEE, cycle-time, plan adherence</td><td>Plant, Supervisor</td></tr>
          <tr><td>Warehouse & Inventory</td><td>GR/GI, bin/lot tracking, shortage alert</td><td>In: stock movement; Out: available stock, variance</td><td>Inventory accuracy, stockout rate</td><td>Warehouse, Procurement</td></tr>
          <tr><td>Quality Management</td><td>QC checkpoints, defect classification, CAPA lifecycle</td><td>In: inspection result; Out: defect trend, CAPA status</td><td>Defect rate, FPY, CAPA closure</td><td>QA, Plant</td></tr>
          <tr><td>Maintenance Coordination</td><td>PM calendar, breakdown response, spare part request</td><td>In: alarm/ticket; Out: work order, MTTR report</td><td>MTTR, MTBF, uptime</td><td>Maintenance, IT</td></tr>
          <tr><td>Executive Analytics</td><td>Role-based dashboard, drilldown, exception board</td><td>In: consolidated event/KPI; Out: scorecard, trend board</td><td>OTD, risk index, cost variance</td><td>Executive Sponsor, Manager</td></tr>
        </tbody>
      </table>
    </div>

    <div class="visual-panel"><strong>Ý nghĩa kiến trúc module:</strong> không phải list chức năng rời rạc, mà là chuỗi kiểm soát vận hành từ line-level execution -> dữ liệu chuẩn hóa -> quyết định quản trị dựa trên bằng chứng.</div>
  </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
