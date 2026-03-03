<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.box{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.band{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">query_stats</span>Pricing Strategy, Opportunity & Trade-off</div>
    <div class="slide-subtitle">Giá pilot, giá scale và cơ hội doanh thu 3 năm theo kịch bản</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">sell</span>Pricing logic</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span><strong>Pilot pricing:</strong> phí triển khai + support cao, margin thấp để đổi reference</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Post-pilot:</strong> setup fee + annual support/subscription theo module</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Áp dụng giá theo maturity: core module trước, add-on sau</span></li></ul></div></div>
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">trending_up</span>3-year opportunity (ước tính)</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span><strong>Conservative:</strong> 2-3 accounts sau 18-24 tháng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span><strong>Base:</strong> 4-6 accounts, mở rộng dần theo ngành ưu tiên</span></li><li><span class="material-symbols-rounded">chevron_right</span><span><strong>Stretch:</strong> 7-10 accounts nếu lighthouse case rất mạnh</span></li></ul></div></div>
    </div>
    <div class="band"><strong>Cost of no action:</strong> nếu không đi FDI-first có pilot thực tế, team dễ bị kẹt ở mô hình customization ngắn hạn, khó tạo moat dài hạn và mất cơ hội định vị ở phân khúc enterprise manufacturing.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
