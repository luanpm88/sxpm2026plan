<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.table-wrap{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:10px}
.risk-table{width:100%;border-collapse:separate;border-spacing:0 8px}
.risk-table th{font-size:.84rem;text-transform:uppercase;letter-spacing:.04em;color:#374151;padding:8px 10px}
.risk-table td{background:#f9fafb;border:1px solid #e5e7eb;padding:9px 10px;vertical-align:top;color:#111827;font-size:.94rem}
.risk-table td:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px;width:25%}
.risk-table td:nth-child(2){width:10%;text-align:center;font-weight:700}
.risk-table td:nth-child(3){width:10%;text-align:center;font-weight:700}
.risk-table td:nth-child(4){width:18%}
.risk-table td:last-child{border-top-right-radius:10px;border-bottom-right-radius:10px;width:37%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:12px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">report_problem</span>Top Risks, Challenges & Mitigation Plan</div>
    <div class="slide-subtitle">Risk register thực tế khi đi từ customization sang productized FDI solution</div>
  </div>
  <div class="slide-content">
    <div class="table-wrap mb-3">
      <table class="risk-table">
        <thead>
          <tr><th>Risk</th><th>Impact</th><th>Likelihood</th><th>Owner</th><th>Mitigation</th></tr>
        </thead>
        <tbody>
          <tr><td>Scope creep pilot</td><td>H</td><td>H</td><td>PM</td><td>Đóng baseline scope + change control theo sprint review.</td></tr>
          <tr><td>Timeline slip do tích hợp</td><td>H</td><td>M</td><td>Tech Lead</td><td>Timebox integration spike + buffer kỹ thuật theo phase-gate.</td></tr>
          <tr><td>Security/compliance gap</td><td>H</td><td>M</td><td>Security Owner</td><td>Security checklist bắt buộc trước UAT + audit log evidence.</td></tr>
          <tr><td>Thiếu domain depth manufacturing</td><td>M</td><td>H</td><td>Solution Lead</td><td>Dùng domain advisor + workshop hiện trường trước thiết kế chi tiết.</td></tr>
          <tr><td>Team over-stretch 5-8 người</td><td>H</td><td>M</td><td>Delivery Lead</td><td>Giới hạn số pilot đồng thời, ưu tiên 1-2 lighthouse accounts.</td></tr>
          <tr><td>Acceptance mơ hồ</td><td>H</td><td>M</td><td>QA Lead</td><td>Định nghĩa acceptance criteria + KPI baseline từ đầu pilot.</td></tr>
          <tr><td>Sales cycle kéo dài</td><td>M</td><td>H</td><td>Manager</td><td>Tạo evidence pack và ROI story theo case thực tế.</td></tr>
          <tr><td>Cash burn vượt kế hoạch</td><td>H</td><td>M</td><td>Program Manager</td><td>Duyệt ngân sách theo phase, dừng nếu không đạt gate.</td></tr>
        </tbody>
      </table>
    </div>
    <div class="note"><strong>Risk control principle:</strong> Không mở rộng đại trà khi chưa vượt qua phase-gate của pilot (acceptance + KPI + reference evidence).</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
