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
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
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
    <div class="note">
      <strong>Diễn giải thuật ngữ:</strong>
      <table class="term-table mt-2">
        <thead>
          <tr>
            <th style="width:14%">Thuật ngữ</th>
            <th style="width:43%">Định nghĩa thực tế</th>
            <th style="width:43%">Ví dụ đọc nhanh / cách hiểu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>SLA</strong></td>
            <td>Service Level Agreement: cam kết mức dịch vụ đo được (thời gian phản hồi, thời gian khắc phục, mức ưu tiên sự cố).</td>
            <td>Ví dụ: P1 phản hồi trong 15-30 phút, có escalation L1-L2-L3 và báo cáo service định kỳ.</td>
          </tr>
          <tr>
            <td><strong>Uptime</strong></td>
            <td>Tỷ lệ thời gian hệ thống sẵn sàng để vận hành trong kỳ đo (tháng/quý), không tính planned maintenance đã thống nhất.</td>
            <td>Ví dụ: Uptime target band theo tháng; nếu downtime vượt ngưỡng thì kích hoạt review nguyên nhân gốc.</td>
          </tr>
          <tr>
            <td><strong>Compliance</strong></td>
            <td>Mức tuân thủ quy định/chuẩn bảo mật-vận hành và yêu cầu audit của khách hàng/tập đoàn.</td>
            <td>Ví dụ: ISO 27001, GDPR, SOC2, IT security policy, factory audit requirements.</td>
          </tr>
          <tr>
            <td><strong>ROI</strong></td>
            <td>Return on Investment: hiệu quả đầu tư so với chi phí bỏ ra, đánh giá theo kết quả vận hành và giá trị kinh doanh.</td>
            <td>Ví dụ: giảm downtime/rework, tăng OEE/OTD; ROI review theo phase trước khi duyệt mở rộng.</td>
          </tr>
          <tr>
            <td><strong>Governance</strong></td>
            <td>Cơ chế quản trị quyết định và kiểm soát thay đổi: ai quyết, ai chịu trách nhiệm, review theo chu kỳ nào.</td>
            <td>Ví dụ: steering cadence, RACI, change control board, phase-gate review.</td>
          </tr>
          <tr>
            <td><strong>OT</strong></td>
            <td>Operational Technology: hệ thống/thiết bị điều khiển và vận hành tại nhà máy (line, máy, PLC, HMI).</td>
            <td>Ví dụ: IT/OT segmentation để bảo mật; dữ liệu OT được tích hợp có kiểm soát vào hệ thống quản lý.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
