<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.box{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.gap{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.plan{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:12px;height:100%}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">analytics</span>Internal Capability: Current vs Required</div>
    <div class="slide-subtitle">Readiness ưu tiên FDI sản xuất: hiện trạng, khoảng cách và kế hoạch lấp gap có owner</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="box"><strong>B8 - Current capability</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Có nền tảng custom software và tích hợp hệ thống</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Đội kỹ thuật full-stack, QA, DevOps đã vận hành dự án thực tế</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Đã có kinh nghiệm triển khai theo sprint và quản trị release</span></li></ul></div></div>
      <div class="col-md-4"><div class="box"><strong>B9 - Required capability</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Domain manufacturing sâu theo ngữ cảnh FDI KCN</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Vận hành theo chuẩn SLA/Uptime/Compliance có bằng chứng</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Mô hình triển khai sản phẩm hóa (pilot -> rollout -> scale)</span></li></ul></div></div>
      <div class="col-md-4"><div class="box"><strong>B10 - Gap</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">warning</span><span>Thiếu playbook FDI sản xuất dùng chung cho pre-sales/delivery</span></li><li><span class="material-symbols-rounded">warning</span><span>Thiếu baseline KPI sau pilot để làm chuẩn nhân bản</span></li><li><span class="material-symbols-rounded">warning</span><span>Thiếu cơ chế owner liên phòng ban cho vận hành SLA nhiều lớp</span></li></ul></div></div>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="plan"><strong>0-90 ngày</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Hoàn thiện playbook + proposal template + checklist triển khai</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Owner: Delivery Lead + Solution Lead</span></li></ul></div></div>
      <div class="col-md-4"><div class="plan"><strong>3-12 tháng</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Chạy pilot, chốt acceptance criteria và baseline KPI</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Owner: PM + QA Lead + Support Lead</span></li></ul></div></div>
      <div class="col-md-4"><div class="plan"><strong>12+ tháng</strong><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Đóng gói rollout toolkit để mở rộng đa line/nhà máy</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Owner: Program Manager + Capability Owners</span></li></ul></div></div>
    </div>

    <div class="gap"><strong>Gate liên kết roadmap:</strong> chỉ chuyển sang Year 2 khi hoàn tất pilot acceptance và baseline KPI; chỉ chuyển sang Year 3 khi rollout ổn định và governance liên phòng ban vận hành được.</div>

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
            <td><strong>Current capability</strong></td>
            <td>Năng lực hiện có của đội ngũ và hệ thống tại thời điểm đánh giá.</td>
            <td>Ví dụ: đã có đội full-stack, QA, DevOps và kinh nghiệm vận hành release.</td>
          </tr>
          <tr>
            <td><strong>Required capability</strong></td>
            <td>Năng lực bắt buộc phải có để phục vụ mục tiêu FDI sản xuất ở mức scale.</td>
            <td>Ví dụ: hiểu sâu domain manufacturing và vận hành theo chuẩn SLA/Compliance.</td>
          </tr>
          <tr>
            <td><strong>Gap</strong></td>
            <td>Khoảng cách giữa năng lực hiện tại và năng lực mục tiêu cần đạt.</td>
            <td>Gap càng rõ thì kế hoạch lấp gap càng cụ thể và đo được.</td>
          </tr>
          <tr>
            <td><strong>Playbook FDI sản xuất</strong></td>
            <td>Bộ hướng dẫn chuẩn cho pre-sales, delivery và vận hành theo cùng một cách làm.</td>
            <td>Gồm proposal template, checklist triển khai, tiêu chí gate và runbook.</td>
          </tr>
          <tr>
            <td><strong>Baseline KPI</strong></td>
            <td>Bộ KPI gốc trước triển khai để so sánh hiệu quả sau pilot/rollout.</td>
            <td>Ví dụ: downtime, lead-time, OTD, tỷ lệ lỗi trước và sau dự án.</td>
          </tr>
          <tr>
            <td><strong>Acceptance criteria</strong></td>
            <td>Tiêu chí nghiệm thu cụ thể để xác nhận một phase hoặc kết quả đã đạt yêu cầu.</td>
            <td>Nếu không đạt thì chưa qua gate và chưa được chuyển phase.</td>
          </tr>
          <tr>
            <td><strong>SLA / Uptime / Compliance</strong></td>
            <td>Bộ chuẩn vận hành gồm mức dịch vụ cam kết, độ sẵn sàng hệ thống và yêu cầu tuân thủ.</td>
            <td>Ví dụ: SLA thời gian phản hồi, uptime mục tiêu, tuân thủ audit nội bộ/khách hàng.</td>
          </tr>
          <tr>
            <td><strong>Pilot -> Rollout -> Scale</strong></td>
            <td>Mô hình triển khai theo từng bước để giảm rủi ro thay vì triển khai diện rộng ngay.</td>
            <td>Làm pilot nhỏ trước, ổn định rồi mới rollout đa line/nhà máy và scale có kiểm soát.</td>
          </tr>
          <tr>
            <td><strong>Owner / Ownership</strong></td>
            <td>Phân định người chịu trách nhiệm chính cho từng đầu việc và kết quả.</td>
            <td>Ví dụ: Delivery Lead owner playbook, PM/QA owner pilot acceptance.</td>
          </tr>
          <tr>
            <td><strong>Rollout toolkit</strong></td>
            <td>Bộ công cụ và tài liệu chuẩn để nhân rộng nhanh, đồng nhất chất lượng.</td>
            <td>Gồm template cấu hình, checklist go-live, hướng dẫn training và support.</td>
          </tr>
          <tr>
            <td><strong>Capability Owners</strong></td>
            <td>Nhóm owner phụ trách các năng lực cốt lõi (delivery, platform, QA, support, security).</td>
            <td>Giúp mở rộng theo đúng năng lực thực tế và tránh quá tải vận hành.</td>
          </tr>
          <tr>
            <td><strong>Cross-functional governance</strong></td>
            <td>Cơ chế phối hợp liên phòng ban để ra quyết định, xử lý issue và giữ chuẩn vận hành.</td>
            <td>Nếu governance không chạy được thì rollout dễ đứt gãy giữa team kỹ thuật và vận hành.</td>
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
