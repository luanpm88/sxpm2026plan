<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.phase{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.gate{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">event</span>18-Month Practical Timeline (From Pilot to Replication)</div>
    <div class="slide-subtitle">Lộ trình 0-18 tháng theo phase-gate, có output và owner cụ thể</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="phase"><strong>0-3 tháng | Foundation</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Chuẩn hóa playbook FDI sản xuất + reference architecture</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Chốt tiêu chí chọn lighthouse customer</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> Manager + Solution Lead</span></li></ul></div></div>
      <div class="col-md-6"><div class="phase"><strong>4-6 tháng | Pilot Execution</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Triển khai pilot 1-2 khách hàng FDI KCN</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Đo baseline KPI + acceptance theo sprint</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> PM + Tech Lead + QA Lead</span></li></ul></div></div>
      <div class="col-md-6"><div class="phase"><strong>7-12 tháng | Hardening</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Khóa security/compliance gaps và stability issues</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Tạo evidence pack cho sales (KPI + case study)</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> Delivery Lead + Security Owner</span></li></ul></div></div>
      <div class="col-md-6"><div class="phase"><strong>13-18 tháng | Replication Ready</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Đóng gói rollout package cho nhiều factory/line</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Mở rộng có kiểm soát theo năng lực team</span></li><li><span class="material-symbols-rounded">arrow_right</span><span><strong>Owner:</strong> Program Manager + Capability Owners</span></li></ul></div></div>
    </div>
    <div class="gate"><strong>Phase-gate rule:</strong> chỉ chuyển phase khi đạt đủ acceptance criteria + KPI baseline + evidence vận hành. Không đạt gate thì không mở rộng.</div>

    <div class="note mt-3">
      <strong>Glossary (diễn giải thuật ngữ trong slide)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr>
            <th style="width:24%">Thuật ngữ</th>
            <th style="width:40%">Ý nghĩa</th>
            <th style="width:36%">Cách hiểu nhanh / ví dụ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Playbook FDI sản xuất</strong></td>
            <td>Bộ hướng dẫn chuẩn để triển khai và vận hành giải pháp cho nhóm khách hàng FDI nhà máy.</td>
            <td>Gồm checklist triển khai, SOP, điều kiện phase-gate, cách xử lý sự cố.</td>
          </tr>
          <tr>
            <td><strong>Reference architecture</strong></td>
            <td>Kiến trúc tham chiếu làm mẫu chuẩn cho tích hợp hệ thống, dữ liệu và bảo mật.</td>
            <td>Giúp các dự án pilot/rollout theo cùng chuẩn, giảm thiết kế lại từ đầu.</td>
          </tr>
          <tr>
            <td><strong>Lighthouse customer</strong></td>
            <td>Khách hàng đầu tiên tiêu biểu được chọn làm dự án mẫu để chứng minh hiệu quả.</td>
            <td>Thường là nhà máy có mức sẵn sàng cao và có khả năng tạo case study mạnh.</td>
          </tr>
          <tr>
            <td><strong>Baseline KPI</strong></td>
            <td>Bộ chỉ số gốc trước triển khai để đối chiếu kết quả sau pilot/rollout.</td>
            <td>Ví dụ: downtime, lead-time, OTD, tỷ lệ lỗi trước và sau triển khai.</td>
          </tr>
          <tr>
            <td><strong>Acceptance criteria</strong></td>
            <td>Điều kiện nghiệm thu cụ thể để xác nhận một phase hoặc deliverable đã đạt yêu cầu.</td>
            <td>Không đạt tiêu chí thì chưa qua gate và chưa mở rộng phase tiếp theo.</td>
          </tr>
          <tr>
            <td><strong>Hardening</strong></td>
            <td>Giai đoạn làm “cứng” hệ thống sau pilot: ổn định, bảo mật, tuân thủ và hiệu năng.</td>
            <td>Đóng các gap về security/compliance, giảm lỗi vận hành trước khi nhân rộng.</td>
          </tr>
          <tr>
            <td><strong>Evidence pack</strong></td>
            <td>Gói minh chứng kết quả triển khai để hỗ trợ bán hàng và thuyết phục stakeholder.</td>
            <td>Gồm số liệu KPI, bài học triển khai, tài liệu vận hành, phản hồi khách hàng.</td>
          </tr>
          <tr>
            <td><strong>Case study</strong></td>
            <td>Tài liệu mô tả bài toán, cách triển khai và kết quả thực tế tại khách hàng đã làm.</td>
            <td>Dùng để giảm rủi ro cảm nhận cho khách hàng mới khi ra quyết định.</td>
          </tr>
          <tr>
            <td><strong>Rollout package</strong></td>
            <td>Bộ đóng gói tiêu chuẩn để triển khai lặp lại nhanh cho nhiều line/nhà máy.</td>
            <td>Thường gồm template cấu hình, tài liệu đào tạo, runbook và checklist go-live.</td>
          </tr>
          <tr>
            <td><strong>Phase-gate</strong></td>
            <td>Cơ chế chia lộ trình theo phase và có cổng kiểm soát điều kiện chuyển phase.</td>
            <td>Chỉ cho phép mở rộng khi đạt đủ KPI baseline + acceptance + evidence vận hành.</td>
          </tr>
          <tr>
            <td><strong>Replication Ready</strong></td>
            <td>Trạng thái sẵn sàng nhân rộng giải pháp với rủi ro thấp và chất lượng đồng nhất.</td>
            <td>Đạt khi kiến trúc, quy trình, tài liệu và năng lực team đã ổn định.</td>
          </tr>
          <tr>
            <td><strong>Capability Owners</strong></td>
            <td>Nhóm owner chịu trách nhiệm năng lực cốt lõi (delivery, platform, security, support).</td>
            <td>Bảo đảm mở rộng theo đúng năng lực team, tránh mở rộng vượt khả năng vận hành.</td>
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
