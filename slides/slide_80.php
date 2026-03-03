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
.pkg{border:1px solid #94a3b8;border-radius:12px;background:#f8fafc;padding:12px;height:100%}
.pkg h4{margin:0 0 6px 0;font-size:1.08rem;color:#0f172a;font-weight:700}
.price{font-weight:700;color:#1d4ed8;margin:6px 0 10px}
.timebox{border:1px dashed #94a3b8;border-radius:10px;background:#f8fafc;padding:10px;height:100%}
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
    <div class="slide-title"><span class="material-symbols-rounded">sell</span>FDI SX - Solution: Packages, Pricing & Investment</div>
    <div class="slide-subtitle">So sánh gói giải pháp, mức đầu tư tham chiếu và nguyên tắc mở rộng theo hiệu quả</div>
  </div>

  <div class="slide-content">
    <div class="bridge mb-3">
      <strong>Liên kết mạch nội dung</strong>
      <div class="mt-1">Nhận từ slide 79: điều kiện vận hành an toàn đã chốt. Slide này trả lời phần quyết định cuối: đầu tư bao nhiêu, theo lộ trình nào, và khi nào đủ điều kiện scale.</div>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="pkg"><h4>Package A — Foundation</h4><div class="price">Khung giá tham chiếu: 1.2 - 2.0 tỷ VNĐ / site pilot</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Production + basic inventory tracking</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Dashboard vận hành cốt lõi</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Tích hợp trọng yếu với ERP</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Timeline điển hình: 3-4 tháng cho 1 line/site ưu tiên</span></li></ul></div></div>
      <div class="col-md-4"><div class="pkg"><h4>Package B — Standard</h4><div class="price">Khung giá tham chiếu: 2.4 - 4.0 tỷ VNĐ / site</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Thêm Quality + Maintenance coordination</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Mở rộng integration nhiều domain</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Operational governance nâng cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Timeline điển hình: 6-9 tháng cho rollout ổn định</span></li></ul></div></div>
      <div class="col-md-4"><div class="pkg"><h4>Package C — Enterprise</h4><div class="price">Khung giá tham chiếu: 4.5 - 8.0 tỷ VNĐ / multi-site phase đầu</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Đầy đủ module + control tower đa site</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Advanced analytics + risk board</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Security/audit/compliance mức cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Timeline điển hình: 9-18 tháng theo số site/line</span></li></ul></div></div>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-6">
        <div class="section-card h-100">
          <div class="pro-section-title"><span class="material-symbols-rounded">memory</span>Giả định hạ tầng phần cứng/ngoại vi cho chi phí</div>
          <table class="detail-table mb-0">
            <thead><tr><th>Nhóm</th><th>Giả định tính giá</th></tr></thead>
            <tbody>
              <tr><td>Server/Storage</td><td>1 cụm ứng dụng + 1 DB (hoặc cloud equivalent), backup storage riêng</td></tr>
              <tr><td>Network/Edge</td><td>Gateway tích hợp + cấu hình phân tách IT/OT + secure connectivity</td></tr>
              <tr><td>Shopfloor peripheral</td><td>Tablet/HMI, scanner, label printer theo số line áp dụng</td></tr>
              <tr><td>Resilience</td><td>Spare thiết bị critical và năng lực thay thế trong SLA mục tiêu</td></tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <div class="timebox h-100"><strong>Tổng mức đầu tư được duyệt theo gate, không chi một lần</strong><p class="mb-2 mt-2">Phê duyệt ngân sách theo từng phase giúp kiểm soát rủi ro scope, giữ linh hoạt tài chính, và bảo đảm mở rộng chỉ khi đạt KPI vận hành.</p><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Gate 1: duyệt baseline + phạm vi pilot.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Gate 2: duyệt rollout sau khi pilot pass KPI.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Gate 3: duyệt scale theo ROI + readiness đa site.</span></li></ul></div>
      </div>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">schedule</span>Timeline đầu tư theo phase (0-18 tháng)</div>
      <table class="detail-table">
        <thead><tr><th>Phase</th><th>Thời gian</th><th>Mục tiêu đầu tư</th><th>Tỷ trọng chi phí tham chiếu</th><th>Điều kiện chuyển phase</th></tr></thead>
        <tbody>
          <tr><td>Phase 1 — Discover & Design</td><td>0-2 tháng</td><td>Định nghĩa scope, baseline KPI, thiết kế tích hợp</td><td>10-15% tổng mức đầu tư</td><td>Chốt architecture + acceptance criteria</td></tr>
          <tr><td>Phase 2 — Build & Pilot</td><td>3-6 tháng</td><td>Triển khai module cốt lõi, UAT, vận hành pilot</td><td>40-50% tổng mức đầu tư</td><td>Pilot pass theo KPI và stability target</td></tr>
          <tr><td>Phase 3 — Rollout & Harden</td><td>7-12 tháng</td><td>Mở rộng line/site, hoàn thiện governance và support</td><td>25-35% tổng mức đầu tư</td><td>Incident/SLA nằm trong ngưỡng mục tiêu</td></tr>
          <tr><td>Phase 4 — Scale</td><td>13-18 tháng</td><td>Mở rộng module nâng cao và control tower</td><td>10-20% tổng mức đầu tư</td><td>ROI review và phê duyệt mở rộng</td></tr>
        </tbody>
      </table>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">request_quote</span>Điều kiện duyệt ngân sách & cam kết thương mại có điều kiện</div>
      <table class="detail-table">
        <thead><tr><th>Thành phần</th><th>Mô tả</th><th>Điều kiện áp dụng/duyệt</th></tr></thead>
        <tbody>
          <tr><td>License / Subscription</td><td>Theo phạm vi module, site, user profile</td><td>Duyệt theo phase và theo phạm vi đã nghiệm thu</td></tr>
          <tr><td>Implementation Services</td><td>Discover, design, build, integrate, UAT/go-live</td><td>Thanh toán theo milestone + acceptance gate</td></tr>
          <tr><td>Support & SLA</td><td>L1/L2/L3, preventive review, incident response</td><td>Band SLA chỉ áp dụng khi baseline hạ tầng/vận hành đạt chuẩn</td></tr>
          <tr><td>Optional Extensions</td><td>Báo cáo nâng cao, thêm connector, automation mở rộng</td><td>Phê duyệt sau ROI review và change control</td></tr>
        </tbody>
      </table>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">insights</span>Năng lực hiện tại, gap và roadmap 3 năm để mở rộng</div>
      <table class="detail-table">
        <thead><tr><th>Trạng thái</th><th>Nội dung</th><th>Điều kiện chuyển bước</th></tr></thead>
        <tbody>
          <tr><td>Năng lực hiện tại</td><td>Đội SCRUM nền 5-8, có kinh nghiệm customization nhiều domain, nền tảng web/mobile/management + integration.</td><td>Chọn package phù hợp với mức readiness hiện trạng.</td></tr>
          <tr><td>Gap cần đóng</td><td>Domain depth theo ngành, QA automation chiều sâu, evidence pack chuẩn enterprise.</td><td>Đưa vào kế hoạch nâng năng lực ngay từ Phase 1-2.</td></tr>
          <tr><td>Year 1 — Foundation/Pilot</td><td>Đạt baseline KPI, ổn định vận hành pilot, chuẩn hóa playbook.</td><td>Gate mở rộng khi pilot pass KPI + SLA.</td></tr>
          <tr><td>Year 2 — Replicate/Expand</td><td>Nhân rộng line/site theo package rollout, tăng độ chín governance.</td><td>Gate scale khi incident và cost variance trong ngưỡng.</td></tr>
          <tr><td>Year 3 — Scale Portfolio</td><td>Mở rộng danh mục module và mô hình vận hành đa site có kiểm soát.</td><td>Phê duyệt theo ROI review + readiness audit.</td></tr>
        </tbody>
      </table>
    </div>

    <div class="row g-3">
      <div class="col-md-8"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">trending_up</span>Nguyên tắc quyết định đầu tư</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Chọn gói dựa trên độ chín vận hành và readiness dữ liệu, không chỉ dựa trên ngân sách.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Đặt KPI business làm điều kiện mở rộng từ package thấp lên cao.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Ưu tiên TCO dài hạn và tính bền vững vận hành hơn chi phí triển khai ban đầu.</span></li></ul></div></div>
      <div class="col-md-4"><div class="visual-panel h-100"><strong>Thông điệp kết thúc cụm 73-80</strong><p class="mb-0 mt-2">Giải pháp MES được thiết kế để khách hàng FDI đi từ “nhận diện pain” đến “quyết định đầu tư có kiểm soát”, với module rõ, kiến trúc rõ, quy trình rõ và trách nhiệm rõ.</p></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
