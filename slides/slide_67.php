<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.table-wrap{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:10px}
.risk-table{width:100%;border-collapse:separate;border-spacing:0 8px}
.risk-table th{font-size:.84rem;text-transform:uppercase;letter-spacing:.04em;color:#374151;padding:8px 10px}
.risk-table td{background:#f9fafb;border:1px solid #e5e7eb;padding:9px 10px;vertical-align:top;color:#111827;font-size:.94rem}
.risk-table td:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px;width:25%}
.risk-table td:nth-child(2){width:10%;text-align:center;font-weight:700}
.risk-table td:nth-child(3){width:10%;text-align:center;font-weight:700}
.risk-table td:nth-child(4){width:18%}
.risk-table td:last-child{border-top-right-radius:10px;border-bottom-right-radius:10px;width:37%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:12px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">report_problem</span>Top Risks, Challenges & Mitigation Plan</div>
    <div class="slide-subtitle">Risk register thực tế khi đi từ customization sang productized FDI solution</div>
  </div>
  <div class="slide-content">
    <div class="table-wrap mb-3">
      <table class="risk-table">
        <thead>
          <tr><th>Risk</th><th>Impact</th><th>Likelihood</th><th>Owner</th><th>Mitigation</th></tr>
        </thead>
        <tbody>
          <tr><td>Scope creep pilot</td><td>H</td><td>H</td><td>PM</td><td>Đóng baseline scope + change control theo sprint review.</td></tr>
          <tr><td>Timeline slip do tích hợp</td><td>H</td><td>M</td><td>Tech Lead</td><td>Timebox integration spike + buffer kỹ thuật theo phase-gate.</td></tr>
          <tr><td>Security/compliance gap</td><td>H</td><td>M</td><td>Security Owner</td><td>Security checklist bắt buộc trước UAT + audit log evidence.</td></tr>
          <tr><td>Thiếu domain depth manufacturing</td><td>M</td><td>H</td><td>Solution Lead</td><td>Dùng domain advisor + workshop hiện trường trước thiết kế chi tiết.</td></tr>
          <tr><td>Team over-stretch 5-8 người</td><td>H</td><td>M</td><td>Delivery Lead</td><td>Giới hạn số pilot đồng thời, ưu tiên 1-2 lighthouse accounts.</td></tr>
          <tr><td>Acceptance mơ hồ</td><td>H</td><td>M</td><td>QA Lead</td><td>Định nghĩa acceptance criteria + KPI baseline từ đầu pilot.</td></tr>
          <tr><td>Sales cycle kéo dài</td><td>M</td><td>H</td><td>Manager</td><td>Tạo evidence pack và ROI story theo case thực tế.</td></tr>
          <tr><td>Cash burn vượt kế hoạch</td><td>H</td><td>M</td><td>Program Manager</td><td>Duyệt ngân sách theo phase, dừng nếu không đạt gate.</td></tr>
        </tbody>
      </table>
    </div>
    <div class="note"><strong>Risk control principle:</strong> Không mở rộng đại trà khi chưa vượt qua phase-gate của pilot (acceptance + KPI + reference evidence).</div>

    <div class="note mt-3">
      <strong>Glossary (diễn giải thuật ngữ trong slide)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr><th style="width:24%">Thuật ngữ</th><th style="width:40%">Ý nghĩa</th><th style="width:36%">Cách hiểu nhanh / ví dụ</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>Risk register</strong></td><td>Danh mục rủi ro có impact, likelihood, owner và biện pháp xử lý.</td><td>Là công cụ quản trị rủi ro sống, cập nhật theo chu kỳ review.</td></tr>
          <tr><td><strong>Impact / Likelihood (H/M/L)</strong></td><td>Hai trục đánh giá mức ảnh hưởng và xác suất xảy ra của rủi ro.
            <ul class="mb-0 ps-3">
              <li><strong>H — High:</strong> ảnh hưởng lớn (mất khách, downtime hệ thống, dự án fail).</li>
              <li><strong>M — Medium:</strong> ảnh hưởng vừa (delay timeline, tăng thêm chi phí).</li>
              <li><strong>L — Low:</strong> ảnh hưởng nhỏ (xử lý nhanh, ít tác động).</li>
            </ul>
          </td><td>H-H ưu tiên xử lý trước vì có thể gây thiệt hại lớn và dễ xảy ra.</td></tr>
          <tr><td><strong>Scope creep</strong></td><td>Phạm vi dự án tăng dần ngoài thỏa thuận ban đầu.</td><td>Khắc phục bằng baseline scope và change control rõ ràng.</td></tr>
          <tr><td><strong>Integration spike</strong></td><td>Khoảng thời gian thử nghiệm kỹ thuật ngắn để đánh giá rủi ro tích hợp.</td><td>Timebox spike giúp ước lượng tốt hơn trước khi commit timeline.</td></tr>
          <tr><td><strong>Security checklist</strong></td><td>Danh sách kiểm tra bảo mật bắt buộc trước UAT/go-live.</td><td>Không đạt checklist thì chưa qua gate triển khai.</td></tr>
          <tr><td><strong>UAT</strong></td><td>User Acceptance Test: kiểm thử chấp nhận với người dùng thực.</td><td>UAT fail nghĩa là chưa đủ điều kiện đi production.</td></tr>
          <tr><td><strong>Acceptance criteria</strong></td><td>Tiêu chí nghiệm thu định nghĩa rõ điều kiện hoàn thành.</td><td>Giúp tránh tình trạng nghiệm thu mơ hồ theo cảm tính.</td></tr>
          <tr><td><strong>KPI baseline</strong></td><td>Bộ số liệu gốc để so sánh hiệu quả trước-sau triển khai.</td><td>Thiếu baseline sẽ khó chứng minh ROI và hiệu quả vận hành.</td></tr>
          <tr><td><strong>Evidence pack</strong></td><td>Gói bằng chứng phục vụ sales và quyết định mở rộng.</td><td>Gồm KPI, acceptance, audit log, case study.</td></tr>
          <tr><td><strong>Cash burn</strong></td><td>Mức tiêu hao ngân sách theo thời gian khi chương trình đang chạy.</td><td>Nếu burn vượt kế hoạch mà không đạt gate thì cần dừng/điều chỉnh.</td></tr>
          <tr><td><strong>Phase-gate</strong></td><td>Cơ chế kiểm soát chỉ cho mở rộng khi đạt đủ điều kiện.</td><td>Acceptance + KPI + evidence là cổng tối thiểu trước scale.</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
