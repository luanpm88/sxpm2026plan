<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.32rem;color:#0f172a;margin-top:8px;font-weight:600;line-height:1.35}
.slide-content{color:#0f172a}
.pro-section-title{font-size:1.18rem;font-weight:700;color:#0f172a}
.pro-list li span:last-child{font-size:1rem;color:#1f2937;line-height:1.45}
.section-card{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.pillar{border:1px solid #94a3b8;border-radius:10px;background:#f8fafc;padding:10px;height:100%}
.hardware{border:1px dashed #94a3b8;border-radius:10px;background:#f8fafc;padding:10px;height:100%}
.bridge{border:1px solid #93c5fd;border-radius:12px;background:#eff6ff;padding:12px}
.detail-table{width:100%;border-collapse:collapse;font-size:.94rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:8px;vertical-align:top}
.detail-table th{background:#f3f4f6;color:#0f172a;font-weight:700}
.detail-table td{color:#111827}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">shield</span>FDI SX - Solution: Security, Infra, Network & Support</div>
    <div class="slide-subtitle">Khung bảo mật, hạ tầng, mạng và cơ chế hỗ trợ để vận hành bền vững sau go-live</div>
  </div>

  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="pillar"><strong>Security Baseline</strong><ul class="pro-list mb-0 mt-2"><li><span class="material-symbols-rounded">check_circle</span><span>IAM theo role + least privilege.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Audit log và retention policy.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Patch/vulnerability review theo lịch.</span></li></ul></div></div>
      <div class="col-md-4"><div class="pillar"><strong>Infrastructure Pattern</strong><ul class="pro-list mb-0 mt-2"><li><span class="material-symbols-rounded">check_circle</span><span>Production/DR separation theo mức yêu cầu.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Capacity planning cho peak load theo line.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Backup & restore drill định kỳ.</span></li></ul></div></div>
      <div class="col-md-4"><div class="pillar"><strong>Network & Segmentation</strong><ul class="pro-list mb-0 mt-2"><li><span class="material-symbols-rounded">check_circle</span><span>Phân vùng IT/OT có kiểm soát cổng giao tiếp.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Whitelist service traffic giữa các domain.</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Monitoring bất thường theo luồng tích hợp.</span></li></ul></div></div>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">support_agent</span>Mô hình hỗ trợ vận hành</div>
      <div class="mb-2" style="font-size:.95rem;color:#475569;line-height:1.45">Lưu ý: các mốc response dưới đây là band tham chiếu và chỉ áp dụng khi baseline hạ tầng, phân vai L1/L2/L3 và quy trình escalation đã được nghiệm thu.</div>
      <table class="detail-table">
        <thead><tr><th>Band</th><th>Phạm vi</th><th>Response target</th><th>Escalation</th><th>Ghi chú</th></tr></thead>
        <tbody>
          <tr><td>L1 (On-site/Helpdesk)</td><td>Tiếp nhận sự cố, phân loại, thao tác chuẩn</td><td>Band tham chiếu 15-30 phút</td><td>L2 sau khi xác nhận impact</td><td>Runbook bắt buộc</td></tr>
          <tr><td>L2 (Application/Integration)</td><td>Xử lý lỗi chức năng, kết nối, dữ liệu</td><td>Band tham chiếu 30-60 phút</td><td>L3 nếu cần fix code/patch</td><td>Theo dõi đến khi service restored</td></tr>
          <tr><td>L3 (Engineering)</td><td>Root cause, hotfix, kiến trúc cải tiến</td><td>Band tham chiếu 2-4 giờ (critical)</td><td>Steering nếu vượt SLA</td><td>Postmortem bắt buộc</td></tr>
        </tbody>
      </table>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">developer_board</span>Hạ tầng phần cứng & ngoại vi tối thiểu</div>
      <div class="row g-2 mb-2">
        <div class="col-md-3"><div class="hardware"><strong>Compute</strong><br>App node / DB node theo HA level, sizing theo line + concurrency.</div></div>
        <div class="col-md-3"><div class="hardware"><strong>Edge & Connectivity</strong><br>IoT gateway/collector, industrial network path, VPN/secure tunnel.</div></div>
        <div class="col-md-3"><div class="hardware"><strong>Shopfloor Device</strong><br>HMI tablet, scanner, label printer, workstation tại điểm vận hành.</div></div>
        <div class="col-md-3"><div class="hardware"><strong>Resilience</strong><br>Backup device, spare policy, UPS/power condition cho điểm critical.</div></div>
      </div>
      <table class="detail-table mb-0">
        <thead><tr><th>Nhóm hạ tầng</th><th>Yêu cầu baseline</th><th>Khi nào bắt buộc nâng cấp</th></tr></thead>
        <tbody>
          <tr><td>Server/Storage</td><td>Tách môi trường Prod/UAT, backup theo lịch, restore test định kỳ</td><td>Khi mở rộng thêm line/site hoặc tăng transaction >30%</td></tr>
          <tr><td>Network</td><td>Phân tách IT/OT, whitelist traffic integration, monitoring latency</td><td>Khi xuất hiện incident lặp hoặc mở thêm domain tích hợp</td></tr>
          <tr><td>Peripheral</td><td>Chuẩn model scanner/printer/tablet, SOP thay thế nhanh</td><td>Khi tỷ lệ lỗi thiết bị ảnh hưởng throughput > ngưỡng mục tiêu</td></tr>
        </tbody>
      </table>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">warning</span>Rủi ro quản lý & kế hoạch giảm thiểu</div>
      <table class="detail-table mb-0">
        <thead><tr><th>Rủi ro</th><th>Tác động</th><th>Owner</th><th>Biện pháp</th></tr></thead>
        <tbody>
          <tr><td>Scope creep qua change request không kiểm soát</td><td>Trễ tiến độ, đội chi phí</td><td>PM + Executive Sponsor</td><td>Change control board + gate phê duyệt theo impact</td></tr>
          <tr><td>Thiếu owner nghiệp vụ ở xưởng</td><td>UAT kéo dài, adoption thấp</td><td>Plant Owner</td><td>Chỉ định key user theo line/ca trước khi build</td></tr>
          <tr><td>Integration dependency chồng chéo</td><td>Incident lặp, khó truy vết</td><td>IT Owner + Solution Lead</td><td>Dependency map + freeze window theo phase</td></tr>
          <tr><td>Năng lực support chưa kịp scale</td><td>Vượt SLA sau go-live</td><td>Support Lead</td><td>L1-L2-L3 staffing plan + on-call rotation</td></tr>
          <tr><td>Compliance evidence thiếu nhất quán</td><td>Audit finding, rủi ro pháp lý</td><td>Security/Governance Owner</td><td>Evidence checklist + monthly control review</td></tr>
        </tbody>
      </table>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">verified</span>Năng lực vận hành + tiêu chuẩn/chứng nhận áp dụng</div>
      <table class="detail-table mb-0">
        <thead><tr><th>Nhóm</th><th>Bằng chứng năng lực cần có</th><th>Chuẩn/điều kiện áp dụng</th></tr></thead>
        <tbody>
          <tr><td>Service Operations</td><td>Incident workflow, postmortem record, SLA report theo tháng</td><td>Áp dụng từ pilot go-live và duy trì liên tục</td></tr>
          <tr><td>Security Operations</td><td>Access review log, backup-restore test, hardening checklist</td><td>Phải hoàn tất trước nghiệm thu production</td></tr>
          <tr><td>Delivery Competency</td><td>PM/Agile practice, QA gate, integration release discipline</td><td>Bắt buộc trong toàn bộ vòng đời phase-gate</td></tr>
          <tr><td>Roadmap Certification</td><td>Kế hoạch nâng chuẩn cloud/security/process theo Year 1-3</td><td>Được review trong steering định kỳ</td></tr>
        </tbody>
      </table>
    </div>

    <div class="row g-3">
      <div class="col-md-8"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">gpp_maybe</span>Boundary cam kết</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>SLA có hiệu lực khi hạ tầng và quy trình vận hành đáp ứng baseline đã thống nhất.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Thay đổi lớn về network policy hoặc hệ thống nguồn cần re-validation trước khi go-live phase tiếp theo.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Không xử lý triệt để bằng nhân sự support nếu chưa đóng root cause về kiến trúc/dữ liệu.</span></li></ul></div></div>
      <div class="col-md-4"><div class="visual-panel h-100"><strong>Thông điệp chốt</strong><p class="mb-0 mt-2">Giải pháp chỉ bền vững khi security, infra, network và support được thiết kế như một hệ thống thống nhất, không tách rời khỏi delivery model.</p></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
