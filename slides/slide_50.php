<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.hero{border:1px solid #d1d5db;border-radius:16px;background:#f8fafc;padding:22px}
.meta{border:1px solid #e5e7eb;border-radius:12px;background:#fff;padding:14px;height:100%}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">domain</span>Enterprise Business Catalog Direction</div>
    <div class="slide-subtitle">Manufacturing Operating Framework aligned with BOD enterprise standard</div>
  </div>
  <div class="slide-content">
    <div class="hero mb-4">
      <div class="pro-section-title"><span class="material-symbols-rounded">flag</span>Presentation Objective</div>
      <p class="mb-2">Trả lời đủ 4 câu cho BOD: <strong>khách hàng nào</strong>, <strong>vấn đề kinh doanh nào</strong>, <strong>giải pháp nào</strong>, <strong>triển khai/cam kết ra sao</strong>.</p>
      <p class="mb-0">Deck này dùng ngôn ngữ đơn giản, nhưng vẫn bám chuẩn enterprise để các phòng ban cùng dùng chung một khung làm việc.</p>
    </div>
    <div class="row g-3">
      <div class="col-md-4"><div class="meta"><strong>Presented to</strong><p class="mb-0 mt-1">Board of Directors</p></div></div>
      <div class="col-md-4"><div class="meta"><strong>Presented by</strong><p class="mb-0 mt-1">Software Development Department</p></div></div>
      <div class="col-md-4"><div class="meta"><strong>Date</strong><p class="mb-0 mt-1">March 2026</p></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
