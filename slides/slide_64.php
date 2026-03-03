<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.cardx{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.cardy{border:1px solid #9ca3af;border-radius:14px;background:#f8fafc;padding:16px;height:100%}
.phase-item{border:1px solid #d1d5db;border-radius:12px;background:#fff;padding:12px;height:100%}
.phase-head{font-weight:700;color:#111827;margin-bottom:6px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">gavel</span>Strategic Impact & Decision Required</div>
    <div class="slide-subtitle">FDI manufacturing khu công nghiệp làm trước: kế hoạch hành động 3 năm, từ team nhỏ đến team mở rộng</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-7"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">flag</span>FDI-first execution scope (KCN sản xuất)</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span><strong>Ưu tiên khách hàng:</strong> FDI manufacturing trong KCN phía Nam, dự án có nhu cầu SLA/uptime/compliance cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Phạm vi làm trước:</strong> 1 gói giải pháp chuẩn theo 3 mảng (hardware/infra/software) để triển khai lặp lại</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Đầu ra bắt buộc:</strong> proposal template, kiến trúc chuẩn, checklist bảo mật, bộ KPI đo hiệu quả sau go-live</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Mục tiêu chiến lược:</strong> từ mô hình dự án rời rạc sang năng lực sản phẩm ngành dọc có thể scale</span></li></ul></div></div>
      <div class="col-md-5"><div class="cardy"><div class="pro-section-title"><span class="material-symbols-rounded">playlist_add_check</span>Readiness trước khi go-to-market</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Hoàn thiện solution playbook + baseline scope (what in / what out)</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Chuẩn hóa tài liệu pre-sales: one-pager, proposal, Q&A handling</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Thiết lập baseline delivery: RACI, SLA support, incident flow</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Chốt tiêu chí chọn pilot: ngành, quy mô line, mức sẵn sàng dữ liệu</span></li></ul></div></div>
    </div>

    <div class="pro-section-title mb-2"><span class="material-symbols-rounded">calendar_month</span>3-year action timeline (from small team to scaled delivery)</div>
    <div class="row g-3 mb-3">
      <div class="col-md-4">
        <div class="phase-item">
          <div class="phase-head">Year 1 — Foundation & Pilot (team nhỏ)</div>
          <ul class="pro-list mb-0">
            <li><span class="material-symbols-rounded">arrow_right</span><span>Thiết kế gói FDI manufacturing chuẩn và demo flow end-to-end</span></li>
            <li><span class="material-symbols-rounded">arrow_right</span><span>Triển khai pilot 1-2 khách hàng để lấy case thực tế và baseline KPI</span></li>
            <li><span class="material-symbols-rounded">arrow_right</span><span>Team triển khai: <strong>6-8 người</strong> (PM/BA, Solution, Tech Lead, Dev, QA, Support)</span></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="phase-item">
          <div class="phase-head">Year 2 — Replicate & Expand (team trung bình)</div>
          <ul class="pro-list mb-0">
            <li><span class="material-symbols-rounded">arrow_right</span><span>Nhân bản mô hình pilot thành rollout package cho nhiều nhà máy/line</span></li>
            <li><span class="material-symbols-rounded">arrow_right</span><span>Nâng cấp monitoring, security hardening, tích hợp ERP/MES theo chuẩn</span></li>
            <li><span class="material-symbols-rounded">arrow_right</span><span>Team triển khai: <strong>12-16 người</strong>, tách rõ pre-sales, delivery, vận hành</span></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="phase-item">
          <div class="phase-head">Year 3 — Scale Portfolio (team lớn)</div>
          <ul class="pro-list mb-0">
            <li><span class="material-symbols-rounded">arrow_right</span><span>Mở rộng sang danh mục nhà máy ưu tiên khác, giữ chuẩn delivery thống nhất</span></li>
            <li><span class="material-symbols-rounded">arrow_right</span><span>Thiết lập service operations theo SLA nhiều lớp và governance liên phòng ban</span></li>
            <li><span class="material-symbols-rounded">arrow_right</span><span>Team triển khai: <strong>20-28 người</strong>, có capability owner theo từng mảng</span></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="visual-panel"><strong>Decision required from BOD:</strong> (1) Duyệt hướng FDI manufacturing KCN làm trước; (2) Duyệt khung nguồn lực theo 3 năm và cơ chế tuyển/đào tạo; (3) Duyệt danh sách pilot + nguyên tắc ngân sách theo giai đoạn.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
