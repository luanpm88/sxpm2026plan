<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.block{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">workspace_premium</span>People, Certification, Governance, Tools (B11-B14)</div>
    <div class="slide-subtitle">Chuẩn bị nội lực theo lộ trình 3 năm để triển khai FDI sản xuất KCN</div>
  </div>
  <div class="slide-content">
    <div class="row g-3">
      <div class="col-md-6"><div class="block"><strong>B11 - Chuyên môn & chứng chỉ (theo năm)</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Year 1: SCRUM discipline + secure delivery baseline</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 2: tăng cường roadmap ISO 27001 / ISO 9001 theo mức sẵn sàng</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 3: chuẩn hóa competency matrix theo vai trò và ngành</span></li></ul></div></div>
      <div class="col-md-6"><div class="block"><strong>B12 - Nhân sự (small -> medium -> large)</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Year 1: <strong>6-8 người</strong> cho pilot squad (PM/BA, Solution, Tech Lead, Dev, QA, Support)</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 2: <strong>12-16 người</strong>, tách pre-sales, delivery, service operations</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Year 3: <strong>20-28 người</strong>, có capability owner theo hardware/infra/software</span></li></ul></div></div>
      <div class="col-md-6"><div class="block"><strong>B13 - Quy trình & quản trị</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>RACI rõ: Sales/Delivery/Support/Security cho từng phase</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Phase-gate review theo quý: pilot acceptance, rollout readiness, scale readiness</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Risk register + escalation path liên phòng ban</span></li></ul></div></div>
      <div class="col-md-6"><div class="block"><strong>B14 - Công cụ</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Backlog/issue/doc/monitoring chuẩn hóa dùng chung</span></li><li><span class="material-symbols-rounded">check_circle</span><span>CI/CD + security scanning + release checklist bắt buộc</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Dashboard KPI cho SLA, incident, lead time, adoption</span></li></ul></div></div>
    </div>

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
            <td><strong>SCRUM discipline</strong></td>
            <td>Kỷ luật thực thi SCRUM nhất quán theo sprint, nghi thức và cam kết đầu ra.</td>
            <td>Planning, Daily, Review, Retro chạy đều theo nhịp 2 tuần.</td>
          </tr>
          <tr>
            <td><strong>Secure delivery baseline</strong></td>
            <td>Mức chuẩn tối thiểu về an toàn bảo mật khi phát triển và bàn giao phần mềm.</td>
            <td>Áp dụng checklist security trước release cho mọi dự án.</td>
          </tr>
          <tr>
            <td><strong>ISO 27001 / ISO 9001 roadmap</strong></td>
            <td>Lộ trình nâng dần hệ thống quản lý bảo mật thông tin và quản lý chất lượng.</td>
            <td>Không cần đạt ngay; triển khai theo mức sẵn sàng từng năm.</td>
          </tr>
          <tr>
            <td><strong>Competency matrix</strong></td>
            <td>Ma trận năng lực theo vai trò để xác định mức độ thành thạo và kế hoạch phát triển.</td>
            <td>Ví dụ: PM/BA, Tech Lead, QA, Support có tiêu chí năng lực riêng theo level.</td>
          </tr>
          <tr>
            <td><strong>Pilot squad</strong></td>
            <td>Nhóm nòng cốt triển khai pilot với đầy đủ vai trò cần thiết.</td>
            <td>Slide này định nghĩa quy mô ban đầu 6-8 người để chạy nhanh và kiểm soát tốt.</td>
          </tr>
          <tr>
            <td><strong>Capability owner</strong></td>
            <td>Người chịu trách nhiệm năng lực cốt lõi của một mảng chuyên môn.</td>
            <td>Ví dụ: owner cho hardware, infra, software để đảm bảo chuẩn khi scale.</td>
          </tr>
          <tr>
            <td><strong>RACI</strong></td>
            <td>Khung phân vai trách nhiệm gồm Responsible, Accountable, Consulted, Informed.</td>
            <td>Giúp rõ ai làm, ai quyết định, ai cần tham vấn và ai cần được cập nhật.</td>
          </tr>
          <tr>
            <td><strong>Phase-gate review</strong></td>
            <td>Đánh giá theo cổng giai đoạn để quyết định có chuyển phase hay không.</td>
            <td>Ví dụ: pilot acceptance -> rollout readiness -> scale readiness.</td>
          </tr>
          <tr>
            <td><strong>Risk register</strong></td>
            <td>Danh mục rủi ro đã nhận diện kèm mức độ, owner và kế hoạch xử lý.</td>
            <td>Được cập nhật định kỳ để tránh rủi ro “đến lúc mới biết”.</td>
          </tr>
          <tr>
            <td><strong>Escalation path</strong></td>
            <td>Đường dẫn leo thang xử lý sự cố theo cấp thẩm quyền và thời gian phản hồi.</td>
            <td>Sự cố vượt ngưỡng thì chuyển cấp ngay, tránh kéo dài ảnh hưởng vận hành.</td>
          </tr>
          <tr>
            <td><strong>CI/CD</strong></td>
            <td>Tự động hóa tích hợp - kiểm thử - triển khai để giảm lỗi thủ công và tăng tốc release.</td>
            <td>Mỗi lần merge có pipeline build/test/deploy theo chuẩn đã định.</td>
          </tr>
          <tr>
            <td><strong>Security scanning</strong></td>
            <td>Quét lỗ hổng bảo mật trong source, dependency hoặc cấu hình trước khi phát hành.</td>
            <td>Lỗi nghiêm trọng chưa xử lý thì không cho qua release checklist.</td>
          </tr>
          <tr>
            <td><strong>Release checklist</strong></td>
            <td>Danh sách kiểm tra bắt buộc trước go-live để đảm bảo chất lượng và an toàn.</td>
            <td>Gồm test pass, security pass, backup/rollback plan, owner xác nhận.</td>
          </tr>
          <tr>
            <td><strong>Dashboard KPI</strong></td>
            <td>Bảng theo dõi chỉ số vận hành theo thời gian thực hoặc theo chu kỳ.</td>
            <td>Dùng để phát hiện sớm xu hướng xấu và ưu tiên cải tiến.</td>
          </tr>
          <tr>
            <td><strong>SLA</strong></td>
            <td>Service Level Agreement: cam kết mức dịch vụ giữa đội vận hành và khách hàng nội/ngoại bộ.</td>
            <td>Ví dụ: thời gian phản hồi và thời gian khắc phục theo mức độ sự cố.</td>
          </tr>
          <tr>
            <td><strong>Incident</strong></td>
            <td>Sự cố làm gián đoạn hoặc suy giảm chất lượng dịch vụ cần được xử lý theo quy trình.</td>
            <td>Ví dụ: hệ thống chậm bất thường hoặc ngừng dịch vụ ở một line sản xuất.</td>
          </tr>
          <tr>
            <td><strong>Lead time</strong></td>
            <td>Thời gian từ lúc yêu cầu được ghi nhận đến lúc hoàn thành bàn giao giá trị.</td>
            <td>Lead time giảm thể hiện quy trình delivery hiệu quả hơn.</td>
          </tr>
          <tr>
            <td><strong>Adoption</strong></td>
            <td>Mức độ người dùng thực tế sử dụng giải pháp sau khi triển khai.</td>
            <td>Adoption thấp thường báo hiệu cần cải thiện training hoặc UX/quy trình.</td>
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
