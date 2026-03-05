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
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
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

    <div class="reco mt-3">
      <strong>Glossary (diễn giải thuật ngữ trong slide)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr><th style="width:24%">Thuật ngữ</th><th style="width:40%">Ý nghĩa</th><th style="width:36%">Cách hiểu nhanh / ví dụ</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>Option A: Scale ngay</strong></td><td>Chiến lược mở rộng bán hàng/triển khai sớm trên diện rộng.</td><td>Ưu điểm tăng doanh thu nhanh, nhưng rủi ro chất lượng cao khi chưa có reference.</td></tr>
          <tr><td><strong>Option B: Lighthouse first</strong></td><td>Chiến lược ưu tiên 1-2 khách hàng tiêu biểu trước khi mở rộng.</td><td>Tạo nền bằng chứng thật để giảm rủi ro khi scale.</td></tr>
          <tr><td><strong>Lighthouse customer</strong></td><td>Khách hàng chiến lược dùng làm case tham chiếu đầu tiên.</td><td>Chọn nơi có nhu cầu rõ và dữ liệu đủ để chứng minh KPI.</td></tr>
          <tr><td><strong>KPI / Compliance evidence</strong></td><td>Bằng chứng định lượng và tuân thủ dùng để thuyết phục thị trường enterprise.</td><td>Gồm chỉ số hiệu quả, acceptance records, checklist tuân thủ.</td></tr>
          <tr><td><strong>Over-commit</strong></td><td>Cam kết vượt quá năng lực thực thi hiện có của team.</td><td>Dễ dẫn tới trễ tiến độ, giảm chất lượng và mất niềm tin.</td></tr>
          <tr><td><strong>On-site support</strong></td><td>Hỗ trợ trực tiếp tại nhà máy/địa điểm khách hàng trong giai đoạn đầu.</td><td>Tăng chi phí ngắn hạn nhưng giảm rủi ro go-live.</td></tr>
          <tr><td><strong>Sales cycle</strong></td><td>Chu kỳ từ lúc tiếp cận đến lúc chốt hợp đồng.</td><td>Lighthouse case mạnh thường giúp rút ngắn chu kỳ này.</td></tr>
          <tr><td><strong>Scale bền vững</strong></td><td>Mở rộng có kiểm soát, giữ được chất lượng delivery và hiệu quả tài chính.</td><td>Không chạy theo số lượng deal nếu chưa đủ readiness nội bộ.</td></tr>
          <tr><td><strong>BOD expectation alignment</strong></td><td>Đồng bộ kỳ vọng của BOD với năng lực và nhịp triển khai thực tế.</td><td>Giảm áp lực mở rộng quá sớm dẫn đến thất bại pilot đầu.</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
