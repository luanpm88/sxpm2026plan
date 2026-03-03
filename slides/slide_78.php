<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.28rem;color:#111827;margin-top:8px;font-weight:500}
.section-card{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.phase{border:1px solid #94a3b8;border-radius:10px;background:#f8fafc;padding:10px;height:100%}
.team-card{border:1px solid #93c5fd;border-radius:10px;background:#eff6ff;padding:10px;height:100%}
.bridge{border:1px solid #93c5fd;border-radius:12px;background:#eff6ff;padding:12px}
.summary-note{display:flex;gap:12px;align-items:flex-start;border:1px solid #c7d2fe;border-radius:14px;background:linear-gradient(180deg,#f8fbff 0%,#eef4ff 100%);padding:14px}
.summary-icon{width:40px;height:40px;border:1px solid #93c5fd;border-radius:999px;display:flex;align-items:center;justify-content:center;background:#fff;color:#2563eb;flex-shrink:0}
.summary-icon .material-symbols-rounded{font-size:22px;line-height:1}
.summary-title{font-size:1rem;font-weight:700;color:#1e3a8a;margin-bottom:2px}
.summary-text{font-size:1rem;color:#0f172a;line-height:1.45}
.detail-table{width:100%;border-collapse:collapse;font-size:.84rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:7px;vertical-align:top}
.detail-table th{background:#f3f4f6}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">engineering</span>FDI SX - Solution: Delivery Process & Team</div>
    <div class="slide-subtitle">Quy trình triển khai theo phase-gate và mô hình phối hợp đội ngũ hai bên</div>
  </div>

  <div class="slide-content">
    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">stacks</span>Delivery theo hành trình ra quyết định của khách hàng</div>
      <table class="detail-table">
        <thead><tr><th>Stage quyết định</th><th>Câu hỏi khách hàng</th><th>Deliverable đội dự án cung cấp</th><th>Owner chính</th></tr></thead>
        <tbody>
          <tr><td>A — Awareness</td><td>Vấn đề có đáng đầu tư không?</td><td>Pain assessment + baseline KPI + risk snapshot</td><td>Executive Sponsor + PM</td></tr>
          <tr><td>B — Evaluation</td><td>Giải pháp có phù hợp hiện trạng hệ thống?</td><td>To-be process, architecture draft, scope boundary</td><td>Solution Lead + IT Owner</td></tr>
          <tr><td>C — Pilot Decision</td><td>Làm pilot theo điều kiện nào để an toàn?</td><td>Pilot plan, acceptance criteria, UAT plan, RACI</td><td>Plant Owner + PM/PO</td></tr>
          <tr><td>D — Expansion</td><td>Khi nào mở rộng line/site?</td><td>Gate checklist, stabilization report, expansion proposal</td><td>Program Owner + Steering</td></tr>
        </tbody>
      </table>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">timeline</span>Delivery lifecycle theo mô hình SXPM</div>
      <div class="row g-2">
        <div class="col-md-3"><div class="phase"><strong>Phase 1 — Discover</strong><br>As-is mapping, KPI baseline, risk log khởi tạo, scope ưu tiên.</div></div>
        <div class="col-md-3"><div class="phase"><strong>Phase 2 — Design</strong><br>To-be process, architecture target, data mapping, acceptance draft.</div></div>
        <div class="col-md-3"><div class="phase"><strong>Phase 3 — Build & Integrate</strong><br>Config module, API/event integration, SIT/UAT theo checklist.</div></div>
        <div class="col-md-3"><div class="phase"><strong>Phase 4 — Operate & Improve</strong><br>Go-live stabilization, SLA tracking, optimization roadmap.</div></div>
      </div>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-7"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">rule</span>Gate criteria bắt buộc mỗi phase</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span><strong>Business gate:</strong> owner xác nhận scope và KPI mục tiêu.</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Technical gate:</strong> pass test tích hợp + dữ liệu + bảo mật.</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Operations gate:</strong> team vận hành được training + runbook sẵn sàng.</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Governance gate:</strong> risk/issues/escalation cập nhật và sign-off.</span></li></ul></div></div>
      <div class="col-md-5"><div class="section-card h-100"><div class="pro-section-title"><span class="material-symbols-rounded">groups</span>Cadence phối hợp</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Daily: integration blockers + incident triage.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Weekly: KPI trend + delivery risk review.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Bi-weekly: Steering committee với sponsor.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Monthly: roadmap update và scope governance.</span></li></ul></div></div>
    </div>

    <div class="section-card">
      <div class="pro-section-title"><span class="material-symbols-rounded">badge</span>RACI tóm tắt cho các vai trò chính</div>
      <table class="detail-table">
        <thead><tr><th>Hoạt động</th><th>Vendor PM</th><th>Solution Architect</th><th>Plant Owner</th><th>IT Owner</th><th>Executive Sponsor</th></tr></thead>
        <tbody>
          <tr><td>Scope & milestone</td><td>A/R</td><td>C</td><td>C</td><td>C</td><td>I</td></tr>
          <tr><td>Architecture & integration</td><td>I</td><td>A/R</td><td>C</td><td>R</td><td>I</td></tr>
          <tr><td>UAT & acceptance</td><td>C</td><td>C</td><td>A/R</td><td>R</td><td>I</td></tr>
          <tr><td>Go-live decision</td><td>R</td><td>R</td><td>R</td><td>R</td><td>A</td></tr>
          <tr><td>Change control</td><td>A/R</td><td>R</td><td>C</td><td>C</td><td>I</td></tr>
        </tbody>
      </table>
    </div>

    <div class="row g-3 mt-1">
      <div class="col-md-7">
        <div class="section-card">
          <div class="pro-section-title"><span class="material-symbols-rounded">groups_3</span>Đội ngũ triển khai theo phase (không thiếu owner)</div>
          <div class="row g-2">
            <div class="col-md-6"><div class="team-card"><strong>Core delivery team</strong><br>PM/PO, Solution Lead, Tech Lead, QA Lead, Integration Engineer, Support Lead.</div></div>
            <div class="col-md-6"><div class="team-card"><strong>Business-side team</strong><br>Executive Sponsor, Plant Owner, IT Owner, Key user Production/Quality/Warehouse.</div></div>
            <div class="col-md-6"><div class="team-card"><strong>Quy mô tham chiếu</strong><br>Discover-Design: 6-8 người<br>Build-Operate: 8-12 người<br>Multi-site: 12-16 người.</div></div>
            <div class="col-md-6"><div class="team-card"><strong>Deliverable ownership</strong><br>Owner theo từng gate: Scope, Integration, UAT, Go-live, Stabilization.</div></div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="section-card h-100">
          <div class="pro-section-title"><span class="material-symbols-rounded">workspace_premium</span>Năng lực + tiêu chuẩn/chứng nhận áp dụng</div>
          <table class="detail-table mb-0">
            <thead><tr><th>Nhóm năng lực</th><th>Chuẩn áp dụng</th><th>Mục tiêu theo phase</th></tr></thead>
            <tbody>
              <tr><td>Delivery governance</td><td>SCRUM/SXPM, RACI, stage-gate</td><td>Yêu cầu bắt buộc ngay từ Phase 1</td></tr>
              <tr><td>Security operation</td><td>RBAC, audit trail, hardening checklist</td><td>Pass trước go-live phase pilot</td></tr>
              <tr><td>Service operation</td><td>SLA band, incident/postmortem practice</td><td>Ổn định sau 4-8 tuần vận hành</td></tr>
              <tr><td>Roadmap chứng nhận</td><td>PM/Agile, cloud/security, QA process maturity</td><td>Mở rộng theo Year 1 -> Year 3</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="summary-note mt-3">
      <div class="summary-icon"><span class="material-symbols-rounded">summarize</span></div>
      <div>
        <div class="summary-title">Tóm tắt nhanh</div>
        <div class="summary-text">Delivery chỉ an toàn khi phase-gate, owner, và đội ngũ hai phía được khóa ngay từ đầu, không để quyết định trách nhiệm sau khi đã vào triển khai.</div>
      </div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
