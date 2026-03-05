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
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">target</span>Solution Scope & Strategic Goals</div>
    <div class="slide-subtitle">Bối cảnh ngành, bài toán, mục tiêu 1-3 năm, và giải pháp tổng thể</div>
  </div>
  <div class="slide-content">
    <div class="panel mb-3"><strong>Use-case cụ thể:</strong> Manufacturing Operating Framework cho nhà máy FDI sản xuất cần chuẩn hóa vận hành mà không triển khai full ERP ngay.</div>
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="grid"><strong><span class="material-symbols-rounded" style="font-size:18px;vertical-align:-3px">domain</span> Industry context</strong><p class="mb-0 mt-1">Nhà máy sản xuất nhiều line/ca, cần ổn định cao và dữ liệu nhanh cho quyết định vận hành.</p></div></div>
      <div class="col-md-6"><div class="grid"><strong><span class="material-symbols-rounded" style="font-size:18px;vertical-align:-3px">error</span> Business problem</strong><p class="mb-0 mt-1">Rủi ro downtime, dữ liệu lệch, báo cáo chậm, khó truy vết, khó audit.</p></div></div>
      <div class="col-md-6"><div class="grid"><strong><span class="material-symbols-rounded" style="font-size:18px;vertical-align:-3px">flag</span> Strategic goals (1-3 years)</strong><p class="mb-0 mt-1">Giảm downtime, tăng minh bạch dữ liệu, nâng năng lực quản trị rủi ro, tăng hiệu quả vận hành.</p></div></div>
      <div class="col-md-6"><div class="grid"><strong><span class="material-symbols-rounded" style="font-size:18px;vertical-align:-3px">deployed_code</span> Overall solution</strong><p class="mb-0 mt-1">Module hóa Production - Warehouse - Quality - Dashboard, có khả năng tích hợp hệ thống hiện hữu.</p></div></div>
    </div>

    <div class="panel mb-3">
      <strong>Giải thích khung 4 phần (chuẩn đánh giá nhanh)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr>
            <th style="width:24%">Thành phần</th>
            <th style="width:28%">Ý nghĩa</th>
            <th style="width:34%">Chuẩn đạt</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Industry context</strong></td>
            <td>Industry context: bối cảnh ngành và hiện trạng vận hành.</td>
            <td>Nêu rõ loại nhà máy, mô hình line/ca, áp lực vận hành và yêu cầu enterprise.</td>
          </tr>
          <tr>
            <td><strong>Business problem</strong></td>
            <td>Business problem: vấn đề kinh doanh cần giải quyết.</td>
            <td>Vấn đề phải đo được bằng tác động thực tế (downtime, chất lượng, giao hàng, audit).</td>
          </tr>
          <tr>
            <td><strong>Strategic goals</strong></td>
            <td>Strategic goals (1-3 years): mục tiêu theo giai đoạn.</td>
            <td>Mục tiêu có KPI, có mốc thời gian và có điều kiện chuyển phase rõ.</td>
          </tr>
          <tr>
            <td><strong>Overall solution</strong></td>
            <td>Overall solution: giải pháp tổng thể để đạt mục tiêu.</td>
            <td>Phạm vi in-scope/out-of-scope rõ, kiến trúc tích hợp rõ, tránh over-promise.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="visual-panel mb-0">Kết luận: giải pháp tập trung vào giá trị vận hành đo được, không đi theo hướng “làm cho có tính năng”.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
