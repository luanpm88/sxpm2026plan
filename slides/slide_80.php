<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.28rem;color:#111827;margin-top:8px;font-weight:500}
.section-card{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.pkg{border:1px solid #94a3b8;border-radius:12px;background:#f8fafc;padding:12px;height:100%}
.pkg h4{margin:0 0 6px 0;font-size:1rem;color:#0f172a}
.price{font-weight:700;color:#1d4ed8;margin:6px 0 10px}
.detail-table{width:100%;border-collapse:collapse;font-size:.84rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:7px;vertical-align:top}
.detail-table th{background:#f3f4f6}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">sell</span>FDI SX - Solution: Packages, Pricing & Investment</div>
    <div class="slide-subtitle">So sánh gói giải pháp, mức đầu tư tham chiếu và nguyên tắc mở rộng theo hiệu quả</div>
  </div>

  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="pkg"><h4>Package A — Foundation</h4><div class="price">Mốc đầu tư: Tối ưu cho 1 site ưu tiên</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Production + basic inventory tracking</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Dashboard vận hành cốt lõi</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Tích hợp trọng yếu với ERP</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Phù hợp: khởi động nhanh, kiểm soát rủi ro</span></li></ul></div></div>
      <div class="col-md-4"><div class="pkg"><h4>Package B — Standard</h4><div class="price">Mốc đầu tư: Chuẩn hóa liên phòng ban</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Thêm Quality + Maintenance coordination</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Mở rộng integration nhiều domain</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Operational governance nâng cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Phù hợp: nhà máy đang scale sản lượng</span></li></ul></div></div>
      <div class="col-md-4"><div class="pkg"><h4>Package C — Enterprise</h4><div class="price">Mốc đầu tư: Multi-site, kiểm soát tập trung</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đầy đủ module + control tower đa site</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Advanced analytics + risk board</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Security/audit/compliance mức cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Phù hợp: tập đoàn có yêu cầu governance chặt</span></li></ul></div></div>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">request_quote</span>Khung chi phí và điều kiện thương mại</div>
      <table class="detail-table">
        <thead><tr><th>Thành phần</th><th>Mô tả</th><th>Cách kiểm soát</th></tr></thead>
        <tbody>
          <tr><td>License / Subscription</td><td>Theo phạm vi module, site, user profile</td><td>Scale theo phase, tránh over-license</td></tr>
          <tr><td>Implementation Services</td><td>Discover, design, build, integrate, UAT/go-live</td><td>Milestone-based payment + acceptance gate</td></tr>
          <tr><td>Support & SLA</td><td>L1/L2/L3, preventive review, incident response</td><td>SLA matrix và service report định kỳ</td></tr>
          <tr><td>Optional Extensions</td><td>Báo cáo nâng cao, thêm connector, automation mở rộng</td><td>Change control + ROI review trước khi phê duyệt</td></tr>
        </tbody>
      </table>
    </div>

    <div class="row g-3">
      <div class="col-md-8"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">trending_up</span>Nguyên tắc quyết định đầu tư</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Chọn gói dựa trên độ chín vận hành và readiness dữ liệu, không chỉ dựa trên ngân sách.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Đặt KPI business làm điều kiện mở rộng từ package thấp lên cao.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Ưu tiên TCO dài hạn và tính bền vững vận hành hơn chi phí triển khai ban đầu.</span></li></ul></div></div>
      <div class="col-md-4"><div class="visual-panel h-100"><strong>Thông điệp kết thúc cụm 73-80</strong><p class="mb-0 mt-2">Giải pháp MES được thiết kế để khách hàng FDI đi từ “nhận diện pain” đến “quyết định đầu tư có kiểm soát”, với module rõ, kiến trúc rõ, quy trình rõ và trách nhiệm rõ.</p></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
