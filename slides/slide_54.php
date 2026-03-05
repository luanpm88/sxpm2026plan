<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.box{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.state{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px;text-align:center;font-weight:800}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">crisis_alert</span>Common Problems in 3 Business Pillars</div>
    <div class="slide-subtitle">Bài toán kinh doanh khách hàng thường gặp theo phần cứng, hạ tầng, phần mềm</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">memory</span>Hardware Supply</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Thiết bị không đồng bộ</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Không kiểm soát vòng đời thiết bị</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Downtime do thiết bị lỗi</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Khó quản lý tài sản IT</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Rủi ro bảo mật từ thiết bị cũ</span></li></ul></div></div>
      <div class="col-md-4"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">dns</span>IT Infrastructure</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Mạng thiếu ổn định</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Không tách IT & OT</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Rủi ro bảo mật cao</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Thiếu DR/Backup chuẩn</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Khó tích hợp ERP/MES</span></li></ul></div></div>
      <div class="col-md-4"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">code_blocks</span>Software</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Quản lý thủ công</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Dữ liệu phòng ban rời rạc</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Thiếu realtime visibility</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Thiếu dashboard quản trị</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Phụ thuộc Excel</span></li></ul></div></div>
    </div>
    <div class="state">Đây là vấn đề kinh doanh và vận hành, không chỉ là vấn đề kỹ thuật.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
