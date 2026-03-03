<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.box{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">analytics</span>SWOT for FDI Manufacturing Entry</div>
    <div class="slide-subtitle">Đánh giá thực chiến để quyết định cách vào thị trường FDI phù hợp năng lực hiện tại</div>
  </div>
  <div class="slide-content">
    <div class="row g-3">
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">thumb_up</span>Strengths</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đội SCRUM nhỏ gọn, phản ứng nhanh khi chỉnh solution theo thực tế</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Kinh nghiệm customization đa domain (warehouse/ERP/education)</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Core web/mobile + AI integration giúp rút ngắn thời gian build</span></li></ul></div></div>
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">thumb_down</span>Weaknesses</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">warning</span><span>Chưa có SME manufacturing product reference chạy production</span></li><li><span class="material-symbols-rounded">warning</span><span>Thiếu evidence pack enterprise (security/compliance benchmark)</span></li><li><span class="material-symbols-rounded">warning</span><span>Risk quá tải nếu vừa build product vừa mở rộng sales nhanh</span></li></ul></div></div>
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">trending_up</span>Opportunities</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>FDI KCN cần giải pháp linh hoạt hơn ERP nặng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Khoảng trống giữa giải pháp lớn và custom ad-hoc còn rộng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Nếu có 1-2 lighthouse case, tốc độ mở rộng có thể tăng mạnh</span></li></ul></div></div>
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">gpp_bad</span>Threats</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Đối thủ lớn có thương hiệu và compliance profile mạnh hơn</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Chu kỳ bán hàng FDI dài, yêu cầu POC/pilot nhiều vòng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Sai 1 pilot đầu có thể ảnh hưởng niềm tin thị trường</span></li></ul></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
