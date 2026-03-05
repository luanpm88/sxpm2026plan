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
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">gavel</span>Strategic Impact & Decision Required</div>
    <div class="slide-subtitle">FDI sản xuất khu công nghiệp làm trước: kế hoạch hành động 3 năm, từ team nhỏ đến team mở rộng</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-7"><div class="cardx"><div class="pro-section-title"><span class="material-symbols-rounded">flag</span>Phạm vi thực thi ưu tiên FDI sản xuất (KCN sản xuất)</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span><strong>Ưu tiên khách hàng:</strong> FDI sản xuất trong KCN phía Nam, dự án có nhu cầu SLA/uptime/compliance cao</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Phạm vi làm trước:</strong> 1 gói giải pháp chuẩn theo 3 mảng (hardware/infra/software) để triển khai lặp lại</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Đầu ra bắt buộc:</strong> proposal template, kiến trúc chuẩn, checklist bảo mật, bộ KPI đo hiệu quả sau go-live</span></li><li><span class="material-symbols-rounded">check_circle</span><span><strong>Mục tiêu chiến lược:</strong> từ mô hình dự án rời rạc sang năng lực sản phẩm ngành dọc có thể scale</span></li></ul></div></div>
      <div class="col-md-5"><div class="cardy"><div class="pro-section-title"><span class="material-symbols-rounded">playlist_add_check</span>Readiness trước khi go-to-market</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Hoàn thiện solution playbook + baseline scope (what in / what out)</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Chuẩn hóa tài liệu pre-sales: one-pager, proposal, Q&A handling</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Thiết lập baseline delivery: RACI, SLA support, incident flow</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Chốt tiêu chí chọn pilot: ngành, quy mô line, mức sẵn sàng dữ liệu</span></li></ul></div></div>
    </div>

    <div class="pro-section-title mb-2"><span class="material-symbols-rounded">calendar_month</span>3-year action timeline (from small team to scaled delivery)</div>
    <div class="row g-3 mb-3">
      <div class="col-md-4">
        <div class="phase-item">
          <div class="phase-head">Year 1 — Foundation & Pilot (team nhỏ)</div>
          <ul class="pro-list mb-0">
            <li><span class="material-symbols-rounded">arrow_right</span><span>Thiết kế gói FDI sản xuất chuẩn và demo flow end-to-end</span></li>
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

    <div class="visual-panel"><strong>Decision required from BOD:</strong> (1) Duyệt hướng FDI sản xuất KCN làm trước; (2) Duyệt khung nguồn lực theo 3 năm và cơ chế tuyển/đào tạo; (3) Duyệt danh sách pilot + nguyên tắc ngân sách theo giai đoạn.</div>

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
            <td><strong>SLA / Uptime / Compliance</strong></td>
            <td>Bộ chuẩn vận hành gồm cam kết mức dịch vụ, độ sẵn sàng hệ thống và yêu cầu tuân thủ.</td>
            <td>Dùng để chọn khách hàng ưu tiên có nhu cầu vận hành nghiêm ngặt.</td>
          </tr>
          <tr>
            <td><strong>Hardware / Infra / Software</strong></td>
            <td>Ba lớp giải pháp cốt lõi cần thiết kế đồng bộ để triển khai lặp lại.</td>
            <td>Không làm rời rạc từng phần để tránh gãy luồng vận hành end-to-end.</td>
          </tr>
          <tr>
            <td><strong>Proposal template</strong></td>
            <td>Mẫu đề xuất chuẩn giúp pre-sales trình bày giải pháp và phạm vi nhất quán.</td>
            <td>Giảm phụ thuộc cá nhân và rút ngắn thời gian chuẩn bị proposal.</td>
          </tr>
          <tr>
            <td><strong>Go-live</strong></td>
            <td>Thời điểm đưa hệ thống vào vận hành thực tế với giám sát tăng cường đầu kỳ.</td>
            <td>Sau go-live mới đo tác động KPI thực tế để đánh giá hiệu quả.</td>
          </tr>
          <tr>
            <td><strong>Solution playbook</strong></td>
            <td>Bộ hướng dẫn chuẩn cho pre-sales, delivery và support trong cùng một mô hình.</td>
            <td>Gồm checklist, runbook, tài liệu Q&A và tiêu chí triển khai.</td>
          </tr>
          <tr>
            <td><strong>Baseline scope (what in / what out)</strong></td>
            <td>Phạm vi chuẩn định nghĩa rõ phần nào thuộc gói, phần nào nằm ngoài gói.</td>
            <td>Giúp kiểm soát kỳ vọng và giảm tranh chấp phạm vi khi triển khai.</td>
          </tr>
          <tr>
            <td><strong>One-pager</strong></td>
            <td>Tài liệu tóm tắt một trang để truyền đạt nhanh giá trị giải pháp.</td>
            <td>Dùng trong bước mở đầu pre-sales và trao đổi với stakeholder bận rộn.</td>
          </tr>
          <tr>
            <td><strong>Q&A handling</strong></td>
            <td>Bộ câu hỏi-trả lời chuẩn để xử lý thắc mắc kỹ thuật/vận hành nhất quán.</td>
            <td>Giúp team phản hồi nhanh, đúng thông điệp và giảm rủi ro over-commit.</td>
          </tr>
          <tr>
            <td><strong>RACI</strong></td>
            <td>Khung phân vai trách nhiệm: Responsible, Accountable, Consulted, Informed.</td>
            <td>Làm rõ ai thực thi, ai quyết định, ai cần tham vấn, ai cần được cập nhật.</td>
          </tr>
          <tr>
            <td><strong>Incident flow</strong></td>
            <td>Quy trình xử lý sự cố từ tiếp nhận, phân loại, xử lý đến đóng sự cố.</td>
            <td>Gắn với SLA để bảo đảm thời gian phản hồi/khắc phục đúng cam kết.</td>
          </tr>
          <tr>
            <td><strong>Pilot</strong></td>
            <td>Triển khai thử nghiệm phạm vi nhỏ để kiểm chứng mô hình trước khi nhân rộng.</td>
            <td>Thường chọn 1-2 khách hàng đại diện để tạo case study và baseline KPI.</td>
          </tr>
          <tr>
            <td><strong>Baseline KPI</strong></td>
            <td>Bộ số liệu gốc trước triển khai để so sánh hiệu quả sau từng giai đoạn.</td>
            <td>Ví dụ: downtime, lead-time, tỷ lệ lỗi, mức độ adoption.</td>
          </tr>
          <tr>
            <td><strong>Rollout package</strong></td>
            <td>Bộ đóng gói chuẩn để nhân rộng từ pilot sang nhiều line/nhà máy.</td>
            <td>Gồm template cấu hình, tài liệu training, checklist go-live và support.</td>
          </tr>
          <tr>
            <td><strong>Monitoring</strong></td>
            <td>Theo dõi hệ thống liên tục để phát hiện sớm bất thường và hỗ trợ quyết định.</td>
            <td>Gắn dashboard cảnh báo giúp giảm thời gian gián đoạn.</td>
          </tr>
          <tr>
            <td><strong>Security hardening</strong></td>
            <td>Siết chặt bảo mật về cấu hình, phân quyền, quy trình trước khi scale.</td>
            <td>Đóng lỗ hổng còn lại sau pilot để vận hành an toàn hơn ở quy mô lớn.</td>
          </tr>
          <tr>
            <td><strong>ERP/MES integration</strong></td>
            <td>Tích hợp dữ liệu từ quản trị doanh nghiệp đến điều hành sản xuất vào luồng thống nhất.</td>
            <td>Giảm nhập liệu lặp, tăng tính nhất quán dữ liệu vận hành.</td>
          </tr>
          <tr>
            <td><strong>Service operations nhiều lớp</strong></td>
            <td>Mô hình hỗ trợ theo nhiều tầng trách nhiệm để xử lý nhanh và đúng chuyên môn.</td>
            <td>Ví dụ: L1 tiếp nhận, L2 xử lý kỹ thuật, L3 xử lý kiến trúc.</td>
          </tr>
          <tr>
            <td><strong>Governance liên phòng ban</strong></td>
            <td>Cơ chế điều phối, ra quyết định và theo dõi giữa các bộ phận liên quan.</td>
            <td>Giữ nhịp pre-sales, delivery, support, security đồng bộ khi mở rộng.</td>
          </tr>
          <tr>
            <td><strong>Capability owner</strong></td>
            <td>Người sở hữu năng lực cốt lõi của một mảng để bảo đảm chất lượng khi scale.</td>
            <td>Ví dụ: owner cho infra, software, QA hoặc operations.</td>
          </tr>
          <tr>
            <td><strong>Scaled delivery</strong></td>
            <td>Năng lực triển khai ở quy mô lớn hơn nhưng vẫn giữ chuẩn chất lượng và tiến độ.</td>
            <td>Từ team nhỏ lên team lớn theo lộ trình 3 năm và điều kiện rõ ràng.</td>
          </tr>
          <tr>
            <td><strong>BOD decision required</strong></td>
            <td>Nhóm quyết định chiến lược cần phê duyệt để triển khai roadmap khả thi.</td>
            <td>Gồm định hướng ưu tiên, khung nguồn lực và nguyên tắc ngân sách theo giai đoạn.</td>
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
