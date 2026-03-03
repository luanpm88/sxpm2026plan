<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.wrap{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:10px}
.cost-table{width:100%;border-collapse:separate;border-spacing:0 8px}
.cost-table th{font-size:.84rem;text-transform:uppercase;letter-spacing:.04em;color:#374151;padding:8px 10px}
.cost-table td{background:#f9fafb;border:1px solid #e5e7eb;padding:10px 12px;vertical-align:top;color:#111827}
.cost-table td:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px;width:16%}
.cost-table td:nth-child(2){width:22%}
.cost-table td:nth-child(3){width:22%}
.cost-table td:nth-child(4){width:20%}
.cost-table td:last-child{border-top-right-radius:10px;border-bottom-right-radius:10px;width:20%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:12px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">payments</span>Cost Envelope & Budget Scenarios</div>
    <div class="slide-subtitle">Khung chi phí 18 tháng theo kịch bản Lean / Base / Aggressive</div>
  </div>
  <div class="slide-content">
    <div class="wrap mb-3">
      <table class="cost-table">
        <thead><tr><th>Scenario</th><th>Team shape</th><th>Monthly burn (ước tính)</th><th>18-month envelope</th><th>Khi nào dùng</th></tr></thead>
        <tbody>
          <tr><td><strong>Lean</strong></td><td>5-6 core + support bán thời gian</td><td>380-520 triệu VND</td><td>6.8-9.4 tỷ VND</td><td>Khi tập trung 1 lighthouse pilot</td></tr>
          <tr><td><strong>Base</strong></td><td>6-8 core + security/compliance support</td><td>520-780 triệu VND</td><td>9.4-14.0 tỷ VND</td><td>Khi chạy 1-2 pilot song song có kiểm soát</td></tr>
          <tr><td><strong>Aggressive</strong></td><td>8-12 + mở rộng pre-sales/on-site</td><td>780 triệu-1.15 tỷ VND</td><td>14.0-20.7 tỷ VND</td><td>Khi đã có strong signal từ thị trường</td></tr>
        </tbody>
      </table>
    </div>
    <div class="note"><strong>Assumptions:</strong> chi phí gồm People + Tooling + Infra + Compliance + On-site support. <strong>Guardrail:</strong> giải ngân theo phase-gate, không giải ngân full upfront nếu pilot chưa đạt KPI/acceptance.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
