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
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
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
    <div class="band"><strong>Cost of no action:</strong> nếu không đi hướng ưu tiên FDI sản xuất có pilot thực tế, team dễ bị kẹt ở mô hình customization ngắn hạn, khó tạo moat dài hạn và mất cơ hội định vị ở phân khúc enterprise manufacturing.</div>

    <div class="band mt-3">
      <strong>Glossary (diễn giải thuật ngữ trong slide)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr><th style="width:24%">Thuật ngữ</th><th style="width:40%">Ý nghĩa</th><th style="width:36%">Cách hiểu nhanh / ví dụ</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>Pilot pricing</strong></td><td>Mức giá giai đoạn pilot ưu tiên tạo reference thay vì tối đa hóa biên lợi nhuận.</td><td>Thường margin thấp hơn do cần support sát và tùy biến ban đầu.</td></tr>
          <tr><td><strong>Post-pilot pricing</strong></td><td>Cấu trúc giá sau pilot khi giải pháp đã ổn định và có bằng chứng hiệu quả.</td><td>Kết hợp setup fee với support/subscription theo module.</td></tr>
          <tr><td><strong>Setup fee</strong></td><td>Phí khởi tạo triển khai ban đầu cho từng khách hàng/site.</td><td>Bù chi phí triển khai nền tảng và cấu hình ban đầu.</td></tr>
          <tr><td><strong>Annual support / subscription</strong></td><td>Doanh thu định kỳ hằng năm cho hỗ trợ vận hành và sử dụng giải pháp.</td><td>Tạo dòng tiền ổn định thay vì chỉ phụ thuộc dự án một lần.</td></tr>
          <tr><td><strong>Module maturity pricing</strong></td><td>Định giá theo mức trưởng thành module: core trước, add-on sau.</td><td>Giúp khách hàng vào nhanh, rồi mở rộng dần theo giá trị thực nhận.</td></tr>
          <tr><td><strong>Conservative / Base / Stretch</strong></td><td>Ba kịch bản cơ hội doanh thu theo mức độ thành công thị trường.</td><td>Số accounts tăng dần khi reference lighthouse mạnh hơn.</td></tr>
          <tr><td><strong>Accounts</strong></td><td>Số khách hàng/tài khoản doanh nghiệp trả phí trong giai đoạn dự báo.</td><td>Là chỉ số quy mô thị trường có thể khai thác thực tế.</td></tr>
          <tr><td><strong>Lighthouse case</strong></td><td>Case chiến lược đầu tiên giúp tăng uy tín và tốc độ mở rộng.</td><td>Case càng mạnh thì cơ hội đạt kịch bản stretch càng cao.</td></tr>
          <tr><td><strong>Cost of no action</strong></td><td>Chi phí cơ hội khi không hành động theo chiến lược ưu tiên.</td><td>Mất định vị thị trường và tiếp tục mắc kẹt mô hình ngắn hạn.</td></tr>
          <tr><td><strong>Moat</strong></td><td>Lợi thế cạnh tranh bền vững khó sao chép trong dài hạn.</td><td>Được xây từ reference, playbook và năng lực delivery lặp lại.</td></tr>
          <tr><td><strong>Enterprise manufacturing</strong></td><td>Phân khúc khách hàng sản xuất quy mô lớn, yêu cầu chuẩn vận hành cao.</td><td>Đòi hỏi bằng chứng, compliance và năng lực support ổn định.</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
