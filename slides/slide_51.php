<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.cardx{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.band{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.industry-list .material-symbols-rounded{font-size:20px}
.industry-list li.ind-primary .material-symbols-rounded{color:#0f766e}
.industry-list li.ind-expand .material-symbols-rounded{color:#2563eb}
.industry-list li.ind-ref .material-symbols-rounded{color:#9ca3af}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">hub</span>Context & Strategic Target Segments</div>
    <div class="slide-subtitle">Bối cảnh và phân khúc ưu tiên theo guideline BOD</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">groups</span>Target segments</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>FDI: Tier 1, vendor cấp 1-2, tập đoàn đa quốc gia</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Doanh nghiệp nội địa sản xuất quy mô lớn</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Trọng tâm khu vực phía Nam</span></li></ul></div></div>
      <div class="col-md-6"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">factory</span>Priority industries</div>
        <ul class="pro-list mb-0 industry-list">
          <li class="ind-primary"><span class="material-symbols-rounded">chevron_right</span><span class="fw-bold">Điện - điện tử</span></li>
          <li class="ind-primary"><span class="material-symbols-rounded">chevron_right</span><span class="fw-bold">Linh kiện ô tô</span></li>
          <li class="ind-expand"><span class="material-symbols-rounded">chevron_right</span><span>Công nghiệp phụ trợ</span></li>
          <li class="ind-expand"><span class="material-symbols-rounded">chevron_right</span><span>Thiết bị công nghiệp & chế tạo</span></li>
          <li class="ind-expand"><span class="material-symbols-rounded">chevron_right</span><span>Sản xuất tiêu dùng quy mô lớn (FMCG)</span></li>
          <li class="ind-ref"><span class="material-symbols-rounded">chevron_right</span><span>Thực phẩm & đồ uống</span></li>
          <li class="ind-ref"><span class="material-symbols-rounded">chevron_right</span><span>Dược phẩm & thiết bị y tế</span></li>
          <li class="ind-ref"><span class="material-symbols-rounded">chevron_right</span><span>Nhựa & cao su công nghiệp</span></li>
          <li class="ind-ref"><span class="material-symbols-rounded">chevron_right</span><span>Bao bì & đóng gói</span></li>
          <li class="ind-ref"><span class="material-symbols-rounded">chevron_right</span><span>Dệt may & da giày</span></li>
        </ul>
      </div></div>
    </div>
    <div class="band"><strong>3 business pillars của công ty:</strong> Cung cấp thiết bị phần cứng, giải pháp hạ tầng CNTT, phần mềm quản lý sản xuất. <strong>Thứ tự ưu tiên triển khai:</strong> FDI sản xuất trong KCN phía Nam làm trước, sau đó mở rộng.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
