<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.step{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:14px;height:100%}
.badge-step{width:30px;height:30px;border:1px solid #cbd5e1;border-radius:999px;background:#f8fafc;display:inline-flex;align-items:center;justify-content:center;font-weight:700;margin-bottom:8px}
.scrum{border:1px solid #9ca3af;border-radius:14px;background:#f8fafc;padding:16px}
.gate{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:12px;height:100%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">route</span>Implementation Method — SCRUM</div>
    <div class="slide-subtitle">FDI sản xuất KCN làm trước: SCRUM theo phase-gate có điều kiện chuyển rõ ràng</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="step"><div class="badge-step">1</div> <strong>Assess</strong><p class="mb-0">Khảo sát hiện trạng + mục tiêu.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">2</div> <strong>Design backlog</strong><p class="mb-0">Ưu tiên theo business value.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">3</div> <strong>Pilot sprint</strong><p class="mb-0">Sprint 2 tuần, demo liên tục.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">4</div> <strong>UAT</strong><p class="mb-0">Kiểm thử với user thật.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">5</div> <strong>Go-live</strong><p class="mb-0">Đào tạo + hỗ trợ vận hành đầu kỳ.</p></div></div>
      <div class="col-md-4"><div class="step"><div class="badge-step">6</div> <strong>Scale</strong><p class="mb-0">Mở rộng line/factory có kiểm soát.</p></div></div>
    </div>
    <div class="scrum mb-3"><strong>SCRUM cadence:</strong> Planning -> Daily -> Review -> Retro theo chu kỳ 2 tuần. <strong>Mô hình triển khai:</strong> Pilot-first, module-by-module, tránh big-bang risk.</div>

    <div class="row g-3">
      <div class="col-md-4"><div class="gate"><strong>Phase-gate Y1 -> Y2</strong><p class="mb-0 mt-1">Pilot được nghiệm thu, có baseline KPI và bộ tài liệu solution/playbook chuẩn.</p></div></div>
      <div class="col-md-4"><div class="gate"><strong>Phase-gate Y2 -> Y3</strong><p class="mb-0 mt-1">Rollout ổn định đa line/nhà máy, tích hợp ERP/MES đạt tiêu chí vận hành.</p></div></div>
      <div class="col-md-4"><div class="gate"><strong>Ownership</strong><p class="mb-0 mt-1">PO/PM chịu backlog; Tech Lead chịu kiến trúc; QA/Support chịu chất lượng và SLA sau go-live.</p></div></div>
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
            <td><strong>Assess</strong></td>
            <td>Khảo sát hiện trạng vận hành, dữ liệu và mục tiêu business trước khi thiết kế giải pháp.</td>
            <td>Ví dụ: kiểm tra downtime, chất lượng dữ liệu, mức sẵn sàng đội vận hành.</td>
          </tr>
          <tr>
            <td><strong>Design backlog</strong></td>
            <td>Danh sách hạng mục cần làm đã được ưu tiên theo giá trị business và rủi ro.</td>
            <td>Không làm tất cả cùng lúc; ưu tiên phần tạo KPI impact cao trước.</td>
          </tr>
          <tr>
            <td><strong>Pilot sprint</strong></td>
            <td>Giai đoạn thử nghiệm có kiểm soát theo sprint ngắn để kiểm chứng giải pháp.</td>
            <td>Ví dụ: sprint 2 tuần, demo liên tục, đo baseline KPI sau từng vòng.</td>
          </tr>
          <tr>
            <td><strong>UAT</strong></td>
            <td>User Acceptance Test: kiểm thử chấp nhận với user thật trước go-live.</td>
            <td>Nếu UAT không đạt thì chưa chuyển production.</td>
          </tr>
          <tr>
            <td><strong>Go-live</strong></td>
            <td>Thời điểm đưa hệ thống vào vận hành thực tế với giám sát tăng cường đầu kỳ.</td>
            <td>Thường đi kèm training, runbook và support on-site/remote.</td>
          </tr>
          <tr>
            <td><strong>Pilot-first</strong></td>
            <td>Chiến lược triển khai bắt đầu bằng pilot phạm vi nhỏ để giảm rủi ro trước khi scale.</td>
            <td>Làm 1-2 line/site trước, đạt KPI rồi mới mở rộng đa line/nhà máy.</td>
          </tr>
          <tr>
            <td><strong>Phase-gate</strong></td>
            <td>Cơ chế điều kiện vào/ra từng phase; chỉ qua phase tiếp theo khi đạt tiêu chí đã chốt.</td>
            <td>Ví dụ Y1->Y2: phải có pilot nghiệm thu + baseline KPI + playbook chuẩn.</td>
          </tr>
          <tr>
            <td><strong>Ownership</strong></td>
            <td>Phân định rõ ai chịu trách nhiệm cuối cùng cho từng phần việc/kết quả.</td>
            <td>PO/PM owner backlog, Tech Lead owner kiến trúc, QA/Support owner chất lượng vận hành.</td>
          </tr>
          <tr>
            <td><strong>SCRUM cadence</strong></td>
            <td>Nhịp làm việc lặp lại theo sprint: Planning, Daily, Review, Retro.</td>
            <td>Giúp theo dõi tiến độ, phát hiện sớm blocker, cải tiến liên tục.</td>
          </tr>
          <tr>
            <td><strong>Baseline KPI</strong></td>
            <td>Bộ số liệu gốc trước triển khai để so sánh hiệu quả sau khi áp dụng giải pháp.</td>
            <td>Ví dụ: downtime, lead-time, inventory accuracy, OTD trước và sau pilot.</td>
          </tr>
          <tr>
            <td><strong>Solution playbook</strong></td>
            <td>Bộ tài liệu chuẩn hóa cách triển khai/vận hành để nhân rộng nhất quán.</td>
            <td>Gồm SOP, checklist, tiêu chí gate, escalation path.</td>
          </tr>
          <tr>
            <td><strong>Big-bang risk</strong></td>
            <td>Rủi ro khi triển khai diện rộng một lần, dễ gây gián đoạn vận hành và khó kiểm soát lỗi.</td>
            <td>Vì vậy ưu tiên module-by-module và pilot-first thay vì rollout ồ ạt.</td>
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
