<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.cardx{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">fact_check</span>Reality Check: Current Readiness & Constraints</div>
    <div class="slide-subtitle">Năng lực thật hiện tại để tiếp cận FDI sản xuất, tránh kỳ vọng vượt khả năng</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">groups</span>Current baseline</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Team SCRUM hiện tại: <strong>5-8 người</strong></span></li><li><span class="material-symbols-rounded">check_circle</span><span>Đã triển khai nhiều dự án software customization thực tế</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Quy mô đã xử lý: từ vài trăm đến hơn 1.000 users</span></li></ul></div></div>
      <div class="col-md-6"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">deployed_code</span>Proven capability</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Domain đã làm: quản lý kho, ERP customization, education platform lớn</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Nền tảng sẵn có: core web/mobile/management system khá chuẩn</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Có năng lực tích hợp AI vào quy trình vận hành</span></li></ul></div></div>
      <div class="col-md-6"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">warning</span>Current constraints</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Chưa có vertical product chạy production end-to-end</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Thiếu reference case FDI sản xuất tại KCN</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Domain playbook chuyên sâu theo ngành còn cần chuẩn hóa</span></li></ul></div></div>
      <div class="col-md-6"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">rule</span>Implication for BOD</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Không nên đặt kỳ vọng scale đại trà ngay từ năm đầu</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Ưu tiên mô hình lighthouse pilot để tạo evidence thật</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Duyệt theo phase-gate để kiểm soát rủi ro và chi phí</span></li></ul></div></div>
    </div>
    <div class="note"><strong>Reality statement:</strong> Năng lực nền tảng là có thật, nhưng cần 1-2 dự án FDI chạy thật thành công để chuyển từ năng lực customization sang năng lực productized replication.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
