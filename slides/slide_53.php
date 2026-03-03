<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.seg{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">person_search</span>Target Customer Characteristics</div>
    <div class="slide-subtitle">Hiểu đúng đặc tính enterprise để thiết kế giải pháp đúng</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="seg"><div class="pro-section-title"><span class="material-symbols-rounded">public</span>FDI & Multinational Group</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Tiêu chuẩn vận hành quốc tế</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Kiểm soát rủi ro chặt</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Yêu cầu bảo mật cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Quan tâm SLA, uptime, compliance</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Đầu tư dựa trên ROI + risk governance</span></li></ul></div></div>
      <div class="col-md-6"><div class="seg"><div class="pro-section-title"><span class="material-symbols-rounded">lan</span>Large Manufacturing Group</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Nhiều dây chuyền, vận hành 2-3 ca</span></li><li><span class="material-symbols-rounded">check_circle</span><span>IT gắn chặt với sản xuất (OT)</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Downtime gây tổn thất lớn</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Ưu tiên ổn định cao hơn giá rẻ</span></li></ul></div></div>
    </div>
    <div class="note"><strong>Giải thích:</strong> SLA = cam kết phản hồi/xử lý. Uptime = mức độ hệ thống sẵn sàng. Compliance = mức tuân thủ chuẩn/quy định.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
