<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.chk{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.final{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">task_alt</span>BOD Realism Checkpoint & Final Confirmations</div>
    <div class="slide-subtitle">Khóa kỳ vọng thực tế trước khi mở rộng để tránh over-commit</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="chk"><div class="pro-section-title"><span class="material-symbols-rounded">storefront</span>Market signal</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đã có 1-2 lighthouse customers phù hợp tiêu chí</span></li><li><span class="material-symbols-rounded">check_circle</span><span>ROI story và pain-fit được xác nhận</span></li><li><span class="material-symbols-rounded">warning</span><span>NO-GO nếu chưa có cam kết pilot thực tế</span></li></ul></div></div>
      <div class="col-md-4"><div class="chk"><div class="pro-section-title"><span class="material-symbols-rounded">engineering</span>Delivery readiness</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đạt phase-gate: acceptance + KPI baseline</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Owner rõ cho security, integration, support</span></li><li><span class="material-symbols-rounded">warning</span><span>NO-GO nếu team quá tải hoặc quality chưa ổn định</span></li></ul></div></div>
      <div class="col-md-4"><div class="chk"><div class="pro-section-title"><span class="material-symbols-rounded">account_balance_wallet</span>Financial guardrail</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Ngân sách duyệt theo phase, không giải ngân full upfront</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Theo dõi burn-rate vs KPI theo tháng/quý</span></li><li><span class="material-symbols-rounded">warning</span><span>NO-GO nếu burn-rate vượt trần không có tín hiệu doanh thu</span></li></ul></div></div>
    </div>
    <div class="final"><strong>Final confirmations for BOD:</strong> (1) Duyệt lighthouse-first strategy, (2) Duyệt budget envelope theo scenario + phase-gate, (3) Duyệt danh sách owner và cơ chế review hàng quý để giữ kế hoạch trong vùng thực tế.</div>

    <div class="final mt-3">
      <strong>Glossary (diễn giải thuật ngữ trong slide)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr><th style="width:24%">Thuật ngữ</th><th style="width:40%">Ý nghĩa</th><th style="width:36%">Cách hiểu nhanh / ví dụ</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>BOD realism checkpoint</strong></td><td>Điểm rà soát thực tế để xác nhận kế hoạch phù hợp năng lực trước khi mở rộng.</td><td>Giúp ngăn over-commit theo kỳ vọng quá lạc quan.</td></tr>
          <tr><td><strong>Market signal</strong></td><td>Tín hiệu thị trường đủ mạnh để xác nhận nhu cầu và khả năng chốt.</td><td>Ví dụ: có 1-2 lighthouse phù hợp và cam kết pilot rõ.</td></tr>
          <tr><td><strong>ROI story / pain-fit</strong></td><td>Câu chuyện giá trị tài chính và mức phù hợp với pain point của khách hàng.</td><td>Khách hàng hiểu rõ “vì sao phải làm” và “lợi ích đo được là gì”.</td></tr>
          <tr><td><strong>NO-GO condition</strong></td><td>Điều kiện dừng hoặc chưa cho phép đi tiếp nếu chưa đạt chuẩn tối thiểu.</td><td>Ví dụ: chưa có pilot thực tế hoặc burn-rate vượt trần kéo dài.</td></tr>
          <tr><td><strong>Delivery readiness</strong></td><td>Mức sẵn sàng triển khai về con người, quy trình và chất lượng.</td><td>Cần đạt phase-gate acceptance + baseline KPI + owner rõ.</td></tr>
          <tr><td><strong>Phase-gate</strong></td><td>Cổng kiểm soát điều kiện trước khi chuyển giai đoạn mở rộng.</td><td>Không đạt gate thì chưa mở rộng phạm vi/nguồn lực.</td></tr>
          <tr><td><strong>Owner clarity</strong></td><td>Phân định rõ người chịu trách nhiệm cuối cho từng mảng trọng yếu.</td><td>Security, integration, support đều có owner cụ thể.</td></tr>
          <tr><td><strong>Financial guardrail</strong></td><td>Nguyên tắc tài chính để giữ chương trình trong vùng rủi ro chấp nhận được.</td><td>Giải ngân theo phase, không cấp full upfront.</td></tr>
          <tr><td><strong>Burn-rate vs KPI</strong></td><td>So sánh tốc độ đốt ngân sách với kết quả tạo ra theo KPI.</td><td>Burn tăng nhưng KPI không cải thiện là tín hiệu cần điều chỉnh.</td></tr>
          <tr><td><strong>Budget envelope by scenario</strong></td><td>Khung ngân sách theo các kịch bản triển khai khác nhau.</td><td>Giúp BOD chọn mức đầu tư theo mức độ tự tin thị trường.</td></tr>
          <tr><td><strong>Quarterly review</strong></td><td>Chu kỳ rà soát hàng quý để cập nhật quyết định và kiểm soát thực thi.</td><td>Review owner, KPI, rủi ro và quyết định đi tiếp/dừng theo gate.</td></tr>
          <tr><td><strong>Lighthouse-first strategy</strong></td><td>Chiến lược ưu tiên case đầu tiên đủ mạnh trước khi mở rộng diện rộng.</td><td>Tăng xác suất thành công dài hạn và giảm sai lệch kỳ vọng.</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
