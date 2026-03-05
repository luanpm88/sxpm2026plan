<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.year{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.frame{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">timeline</span>Milestones, Resources & Cost Frame (B15-B16)</div>
    <div class="slide-subtitle">FDI sản xuất KCN làm trước: roadmap 3 năm, điều kiện chuyển pha, và team scale-up</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="year"><strong>Year 1 — Foundation & Pilot</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đóng gói FDI playbook + kiến trúc baseline + proposal template</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Pilot 1-2 khách hàng FDI KCN để xác lập baseline KPI</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Team triển khai <strong>6-8 người</strong> (PM/BA, Solution, Tech Lead, Dev, QA, Support)</span></li></ul></div></div>
      <div class="col-md-4"><div class="year"><strong>Year 2 — Replicate & Expand</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Nhân bản pilot thành rollout package cho nhiều line/nhà máy</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Chuẩn hóa tích hợp ERP/MES, monitoring, security hardening</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Team triển khai <strong>12-16 người</strong>, tách pre-sales / delivery / vận hành</span></li></ul></div></div>
      <div class="col-md-4"><div class="year"><strong>Year 3 — Scale Portfolio</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Mở rộng danh mục ngành ưu tiên, giữ chuẩn delivery thống nhất</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Thiết lập service operations đa lớp SLA và governance liên phòng ban</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Team triển khai <strong>20-28 người</strong>, có capability owner theo từng mảng</span></li></ul></div></div>
    </div>
    <div class="frame"><strong>Phase gate & resource-cost frame:</strong> chỉ chuyển Year 2 khi Year 1 có pilot acceptance + baseline KPI + tài liệu chuẩn; chỉ chuyển Year 3 khi Year 2 đạt ổn định rollout. Khung ngân sách chia 4 nhóm People / Process / Platform / Program và duyệt theo từng phase để kiểm soát rủi ro.</div>

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
            <td><strong>Foundation & Pilot</strong></td>
            <td>Giai đoạn dựng nền tảng và chạy thử nghiệm có kiểm soát để xác thực mô hình.</td>
            <td>Thường tập trung đóng gói playbook, kiến trúc baseline và pilot 1-2 khách hàng.</td>
          </tr>
          <tr>
            <td><strong>Replicate & Expand</strong></td>
            <td>Giai đoạn nhân bản mô hình pilot đã chứng minh thành triển khai diện rộng hơn.</td>
            <td>Từ 1-2 line/site mở rộng sang nhiều line/nhà máy theo chuẩn chung.</td>
          </tr>
          <tr>
            <td><strong>Scale Portfolio</strong></td>
            <td>Giai đoạn mở rộng danh mục và quy mô vận hành khi nền tảng đã ổn định.</td>
            <td>Vừa tăng coverage ngành/khách hàng, vừa giữ chuẩn delivery nhất quán.</td>
          </tr>
          <tr>
            <td><strong>FDI playbook</strong></td>
            <td>Bộ tài liệu chuẩn hóa cách pre-sales, delivery và vận hành cho khách hàng FDI sản xuất.</td>
            <td>Gồm proposal template, checklist triển khai, runbook và tiêu chí gate.</td>
          </tr>
          <tr>
            <td><strong>Kiến trúc baseline</strong></td>
            <td>Kiến trúc chuẩn làm mốc tham chiếu cho các dự án triển khai và tích hợp.</td>
            <td>Giúp giảm thiết kế lại từ đầu và tăng tính nhất quán giữa các dự án.</td>
          </tr>
          <tr>
            <td><strong>Baseline KPI</strong></td>
            <td>Bộ chỉ số gốc trước triển khai để so sánh hiệu quả sau pilot/rollout.</td>
            <td>Ví dụ: downtime, lead-time, OTD, tỷ lệ lỗi trước và sau triển khai.</td>
          </tr>
          <tr>
            <td><strong>Rollout package</strong></td>
            <td>Bộ công cụ/tài liệu chuẩn giúp nhân rộng nhanh mà vẫn kiểm soát chất lượng.</td>
            <td>Thường gồm template cấu hình, checklist go-live, tài liệu đào tạo và support.</td>
          </tr>
          <tr>
            <td><strong>ERP/MES integration</strong></td>
            <td>Tích hợp hệ thống quản trị doanh nghiệp và điều hành sản xuất vào luồng dữ liệu chung.</td>
            <td>Đảm bảo dữ liệu vận hành liền mạch từ planning tới shopfloor.</td>
          </tr>
          <tr>
            <td><strong>Monitoring</strong></td>
            <td>Theo dõi liên tục trạng thái hệ thống, hiệu năng và sự cố để phản ứng sớm.</td>
            <td>Giảm downtime nhờ cảnh báo sớm và truy vết nguyên nhân nhanh.</td>
          </tr>
          <tr>
            <td><strong>Security hardening</strong></td>
            <td>Giai đoạn siết chặt cấu hình và quy trình bảo mật để vận hành ổn định khi scale.</td>
            <td>Đóng các lỗ hổng, chuẩn hóa phân quyền, tăng kiểm soát thay đổi.</td>
          </tr>
          <tr>
            <td><strong>Service operations đa lớp</strong></td>
            <td>Mô hình vận hành dịch vụ theo nhiều lớp hỗ trợ và trách nhiệm rõ ràng.</td>
            <td>Ví dụ: L1 hỗ trợ nhanh, L2 xử lý kỹ thuật, L3 xử lý kiến trúc/chuyên sâu.</td>
          </tr>
          <tr>
            <td><strong>SLA</strong></td>
            <td>Service Level Agreement: cam kết mức dịch vụ như thời gian phản hồi và khắc phục.</td>
            <td>Dùng để đo chất lượng vận hành và quản trị kỳ vọng với khách hàng.</td>
          </tr>
          <tr>
            <td><strong>Governance liên phòng ban</strong></td>
            <td>Cơ chế điều phối và ra quyết định giữa các bộ phận để giữ nhịp triển khai đồng bộ.</td>
            <td>Nếu governance yếu, rollout dễ chậm hoặc đứt mạch trách nhiệm.</td>
          </tr>
          <tr>
            <td><strong>Capability owner</strong></td>
            <td>Người chịu trách nhiệm cuối cho một năng lực cốt lõi trong mô hình scale.</td>
            <td>Ví dụ: owner cho infra, software, security hoặc service operations.</td>
          </tr>
          <tr>
            <td><strong>Phase gate</strong></td>
            <td>Cổng kiểm soát điều kiện chuyển pha; không đạt tiêu chí thì chưa chuyển năm.</td>
            <td>Y1 -> Y2 cần pilot acceptance + baseline KPI + tài liệu chuẩn.</td>
          </tr>
          <tr>
            <td><strong>Resource-cost frame</strong></td>
            <td>Khung hoạch định nguồn lực và ngân sách theo từng phase để kiểm soát rủi ro.</td>
            <td>Chia ngân sách theo People / Process / Platform / Program và duyệt theo cổng.</td>
          </tr>
          <tr>
            <td><strong>People / Process / Platform / Program</strong></td>
            <td>Bốn nhóm cấu phần chính khi lập kế hoạch đầu tư và triển khai.</td>
            <td>People: nhân sự; Process: quy trình; Platform: công nghệ; Program: điều phối tổng thể.</td>
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
