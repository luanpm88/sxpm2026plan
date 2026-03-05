<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.box{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">analytics</span>SWOT for FDI Production Entry</div>
    <div class="slide-subtitle">Đánh giá thực chiến để quyết định cách vào thị trường FDI phù hợp năng lực hiện tại</div>
  </div>
  <div class="slide-content">
    <div class="row g-3">
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">thumb_up</span>Strengths</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đội SCRUM nhỏ gọn, phản ứng nhanh khi chỉnh solution theo thực tế</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Kinh nghiệm customization đa domain (warehouse/ERP/education)</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Core web/mobile + AI integration giúp rút ngắn thời gian build</span></li></ul></div></div>
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">thumb_down</span>Weaknesses</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">warning</span><span>Chưa có SME manufacturing product reference chạy production</span></li><li><span class="material-symbols-rounded">warning</span><span>Thiếu evidence pack enterprise (security/compliance benchmark)</span></li><li><span class="material-symbols-rounded">warning</span><span>Risk quá tải nếu vừa build product vừa mở rộng sales nhanh</span></li></ul></div></div>
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">trending_up</span>Opportunities</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>FDI KCN cần giải pháp linh hoạt hơn ERP nặng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Khoảng trống giữa giải pháp lớn và custom ad-hoc còn rộng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Nếu có 1-2 lighthouse case, tốc độ mở rộng có thể tăng mạnh</span></li></ul></div></div>
      <div class="col-md-6"><div class="box"><div class="pro-section-title"><span class="material-symbols-rounded">gpp_bad</span>Threats</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Đối thủ lớn có thương hiệu và compliance profile mạnh hơn</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Chu kỳ bán hàng FDI dài, yêu cầu POC/pilot nhiều vòng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Sai 1 pilot đầu có thể ảnh hưởng niềm tin thị trường</span></li></ul></div></div>
    </div>

    <div class="note mt-3">
      <strong>Glossary (diễn giải thuật ngữ trong slide)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr><th style="width:24%">Thuật ngữ</th><th style="width:40%">Ý nghĩa</th><th style="width:36%">Cách hiểu nhanh / ví dụ</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>SWOT</strong></td><td>Khung phân tích Strengths, Weaknesses, Opportunities, Threats.</td><td>Dùng để chọn chiến lược phù hợp với năng lực thực tế.</td></tr>
          <tr><td><strong>SCRUM team nhỏ gọn</strong></td><td>Đội tinh gọn có khả năng phản hồi và điều chỉnh nhanh theo thực tế.</td><td>Phù hợp giai đoạn pilot cần học nhanh từ hiện trường.</td></tr>
          <tr><td><strong>Customization đa domain</strong></td><td>Kinh nghiệm làm giải pháp riêng theo từng lĩnh vực khác nhau.</td><td>Là lợi thế triển khai nhanh nhưng cần chuẩn hóa để scale.</td></tr>
          <tr><td><strong>SME manufacturing product reference</strong></td><td>Dự án tham chiếu sản phẩm cho nhóm khách hàng sản xuất SME.</td><td>Thiếu reference này sẽ khó tăng độ tin cậy khi bán enterprise.</td></tr>
          <tr><td><strong>Evidence pack enterprise</strong></td><td>Gói bằng chứng chuẩn enterprise về bảo mật, tuân thủ và hiệu quả.</td><td>Gồm KPI, checklist audit, case study, acceptance records.</td></tr>
          <tr><td><strong>FDI KCN</strong></td><td>Khách hàng FDI trong khu công nghiệp với chuẩn vận hành cao.</td><td>Thường có yêu cầu quy trình nghiêm và chu kỳ ra quyết định dài.</td></tr>
          <tr><td><strong>Lighthouse case</strong></td><td>Case đầu tiên mang tính chiến lược để làm chuẩn tham chiếu mở rộng.</td><td>1-2 case mạnh có thể rút ngắn sales cycle đáng kể.</td></tr>
          <tr><td><strong>POC/Pilot nhiều vòng</strong></td><td>Quá trình kiểm chứng giải pháp qua nhiều vòng thử nghiệm trước khi ký lớn.</td><td>Ảnh hưởng trực tiếp tới thời gian và chi phí bán hàng.</td></tr>
          <tr><td><strong>Over-stretch risk</strong></td><td>Rủi ro team quá tải khi đồng thời build product và mở rộng sales.</td><td>Cần giới hạn nhịp mở rộng theo năng lực delivery thực tế.</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
