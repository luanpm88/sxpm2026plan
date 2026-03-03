<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.panel{border:1px solid #cbd5e1;border-radius:14px;background:#f8fafc;padding:16px}
.grid{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:14px;height:100%}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">target</span>Solution Scope & Strategic Goals (A1-A4)</div>
    <div class="slide-subtitle">Bối cảnh ngành, bài toán, mục tiêu 1-3 năm, và giải pháp tổng thể</div>
  </div>
  <div class="slide-content">
    <div class="panel mb-3"><strong>Use-case cụ thể:</strong> Manufacturing Operating Framework cho nhà máy FDI sản xuất cần chuẩn hóa vận hành mà không triển khai full ERP ngay.</div>
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="grid"><strong>A1 - Industry context</strong><p class="mb-0 mt-1">Nhà máy sản xuất nhiều line/ca, cần ổn định cao và dữ liệu nhanh cho quyết định vận hành.</p></div></div>
      <div class="col-md-6"><div class="grid"><strong>A2 - Business problem</strong><p class="mb-0 mt-1">Rủi ro downtime, dữ liệu lệch, báo cáo chậm, khó truy vết, khó audit.</p></div></div>
      <div class="col-md-6"><div class="grid"><strong>A3 - Strategic goals (1-3 years)</strong><p class="mb-0 mt-1">Giảm downtime, tăng minh bạch dữ liệu, nâng năng lực quản trị rủi ro, tăng hiệu quả vận hành.</p></div></div>
      <div class="col-md-6"><div class="grid"><strong>A4 - Overall solution</strong><p class="mb-0 mt-1">Module hóa Production - Warehouse - Quality - Dashboard, có khả năng tích hợp hệ thống hiện hữu.</p></div></div>
    </div>
    <div class="visual-panel mb-0">Kết luận: giải pháp tập trung vào giá trị vận hành đo được, không đi theo hướng “làm cho có tính năng”.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
