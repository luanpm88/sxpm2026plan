<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.opt{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.reco{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">policy</span>Should We Secure a Strategic Lighthouse Customer First?</div>
    <div class="slide-subtitle">Quyết định chiến lược: chạy thực tế trước hay hoàn thiện giải pháp rồi mới bán đại trà</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="opt"><div class="pro-section-title"><span class="material-symbols-rounded">rocket_launch</span>Option A: Scale ngay</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">warning</span><span><strong>Ưu điểm:</strong> có thể tăng tốc doanh thu ngắn hạn nếu chốt được nhiều lead</span></li><li><span class="material-symbols-rounded">warning</span><span><strong>Rủi ro:</strong> chưa có reference mạnh, dễ over-commit</span></li><li><span class="material-symbols-rounded">warning</span><span><strong>Khả năng thất bại:</strong> cao nếu đội 5-8 bị dàn trải</span></li></ul></div></div>
      <div class="col-md-6"><div class="opt"><div class="pro-section-title"><span class="material-symbols-rounded">emoji_objects</span>Option B: Lighthouse first</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span><strong>Ưu điểm:</strong> tạo bằng chứng thực tế về KPI/compliance</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Cái giá:</strong> margin ban đầu thấp hơn, cần on-site support nhiều hơn</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Cơ hội:</strong> rút ngắn sales cycle khi đã có case tham chiếu thật</span></li></ul></div></div>
    </div>
    <div class="reco"><strong>Recommendation:</strong> Chọn <strong>Option B</strong> với 1-2 lighthouse customers trong 6-9 tháng đầu. Đây là cái giá chấp nhận được để đổi lấy khả năng scale bền vững và giảm rủi ro kỳ vọng sai lệch từ BOD.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
