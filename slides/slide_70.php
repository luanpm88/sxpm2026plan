<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.wrap{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:10px}
.cost-table{width:100%;border-collapse:separate;border-spacing:0 8px}
.cost-table th{font-size:.84rem;text-transform:uppercase;letter-spacing:.04em;color:#374151;padding:8px 10px}
.cost-table td{background:#f9fafb;border:1px solid #e5e7eb;padding:10px 12px;vertical-align:top;color:#111827}
.cost-table td:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px;width:16%}
.cost-table td:nth-child(2){width:22%}
.cost-table td:nth-child(3){width:22%}
.cost-table td:nth-child(4){width:20%}
.cost-table td:last-child{border-top-right-radius:10px;border-bottom-right-radius:10px;width:20%}
.cost-table tbody td:nth-child(3),
.cost-table tbody td:nth-child(4){font-weight:800;font-size:1.08rem;color:#0f172a}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:12px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
.calc-list{margin:8px 0 0 0;padding-left:18px}
.mini-list{margin:6px 0 0 0;padding-left:16px;font-size:.86rem;color:#374151}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">payments</span>Cost Envelope & Budget Scenarios</div>
    <div class="slide-subtitle">Khung chi phí 18 tháng theo kịch bản Lean / Base / Aggressive</div>
  </div>
  <div class="slide-content">
    <div class="wrap mb-3">
      <table class="cost-table">
        <thead><tr><th>Scenario</th><th>Team shape</th><th>Monthly burn (ước tính)</th><th>18-month envelope</th><th>Khi nào dùng</th></tr></thead>
        <tbody>
          <tr><td><strong>Lean</strong></td><td>6-8 core (Year 1) + support bán thời gian</td><td>270-395 triệu VND</td><td>4.9-7.1 tỷ VND</td><td>Khi tập trung 1 lighthouse pilot</td></tr>
          <tr><td><strong>Base</strong></td><td>12-16 (Year 2) tách pre-sales/delivery/service operations</td><td>445-660 triệu VND</td><td>8.0-11.9 tỷ VND</td><td>Khi chạy 1-2 pilot song song có kiểm soát</td></tr>
          <tr><td><strong>Aggressive</strong></td><td>20-28 (Year 3) + capability owner + mở rộng pre-sales/on-site</td><td>640-990 triệu VND</td><td>11.5-17.8 tỷ VND</td><td>Khi đã có strong signal từ thị trường</td></tr>
        </tbody>
      </table>
    </div>
    <div class="note"><strong>Assumptions:</strong> chi phí gồm People + Tooling + Infra + Compliance + On-site support. <strong>Guardrail:</strong> giải ngân theo phase-gate, không giải ngân full upfront nếu pilot chưa đạt KPI/acceptance. <strong>Ghi chú thị trường VN 2026:</strong> đây là <strong>blended cost</strong> cho chương trình FDI (chi phí phân bổ theo mức tham gia thực tế), không phải full overhead/payroll toàn công ty. <strong>Warning:</strong> các con số hiện tại là <strong>dự toán chủ quan lần đầu</strong>, cần hiệu chỉnh sau pilot đầu tiên và mỗi vòng review quý.</div>

    <div class="note mt-3">
      <strong>Vì sao ra các con số này? (Cost-driver breakdown)</strong>
      <p class="mb-2 mt-2">Dải ngân sách được dựng từ 5 nhóm chi phí vận hành thực tế cho chương trình FDI pilot/rollout, không lấy theo % doanh thu.</p>
      <table class="term-table">
        <thead>
          <tr>
            <th style="width:22%">Cost driver</th>
            <th style="width:18%">Lean (triệu/tháng)</th>
            <th style="width:18%">Base (triệu/tháng)</th>
            <th style="width:18%">Aggressive (triệu/tháng)</th>
            <th style="width:24%">Giải thích</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>People (core team)</strong></td>
            <td>
              <strong>180-250</strong>
              <ul class="mini-list">
                <li><strong>6-8 người (khớp slide 61 - Year 1):</strong> PM/BA, Solution, Tech Lead, Dev, QA, Support.</li>
                <li><strong>Phạm vi tính:</strong> chỉ FTE trực tiếp cho pilot và delivery core.</li>
              </ul>
            </td>
            <td>
              <strong>300-420</strong>
              <ul class="mini-list">
                <li><strong>12-16 người (khớp slide 61 - Year 2):</strong> tách pre-sales, delivery, service operations.</li>
                <li><strong>Phạm vi tính:</strong> core delivery + phần phân bổ bảo mật/compliance theo pilot.</li>
              </ul>
            </td>
            <td>
              <strong>420-620</strong>
              <ul class="mini-list">
                <li><strong>20-28 người (khớp slide 61 - Year 3):</strong> có capability owner theo hardware/infra/software.</li>
                <li><strong>Phạm vi tính:</strong> ngân sách nhân sự phân bổ cho chương trình FDI, không phải full cost toàn công ty.</li>
              </ul>
            </td>
            <td>Chênh lệch theo quy mô team, seniority, mức chuyên trách và tỷ lệ FTE phân bổ vào chương trình.</td>
          </tr>
          <tr>
            <td><strong>Tooling + Infra</strong></td>
            <td>
              <strong>35-50</strong>
              <ul class="mini-list">
                <li>Cloud/dev-test cơ bản.</li>
                <li>Backlog, repo, CI cơ bản.</li>
              </ul>
            </td>
            <td>
              <strong>50-80</strong>
              <ul class="mini-list">
                <li>Thêm monitoring + log tập trung.</li>
                <li>Staging/UAT tách riêng.</li>
              </ul>
            </td>
            <td>
              <strong>70-110</strong>
              <ul class="mini-list">
                <li>Multi-environment + HA mức cần thiết.</li>
                <li>Automation/release tooling nâng cao.</li>
              </ul>
            </td>
            <td>Tăng theo số môi trường, monitoring và mức độ automation.</td>
          </tr>
          <tr>
            <td><strong>Security/Compliance</strong></td>
            <td>
              <strong>15-25</strong>
              <ul class="mini-list">
                <li>Checklist security baseline.</li>
                <li>Scan lỗ hổng cơ bản theo release.</li>
              </ul>
            </td>
            <td>
              <strong>30-55</strong>
              <ul class="mini-list">
                <li>Audit trail + policy chuẩn hóa.</li>
                <li>Security/compliance review định kỳ.</li>
              </ul>
            </td>
            <td>
              <strong>50-90</strong>
              <ul class="mini-list">
                <li>Hardening đa site/đa tích hợp.</li>
                <li>Chuẩn bị hồ sơ audit enterprise sâu hơn.</li>
              </ul>
            </td>
            <td>Base/Aggressive cần audit trail, checklist và support compliance sâu hơn.</td>
          </tr>
          <tr>
            <td><strong>On-site + Travel support</strong></td>
            <td>
              <strong>20-40</strong>
              <ul class="mini-list">
                <li>Khảo sát + workshop pilot ban đầu.</li>
                <li>Hỗ trợ go-live tại 1 site chính.</li>
              </ul>
            </td>
            <td>
              <strong>35-60</strong>
              <ul class="mini-list">
                <li>On-site cho 1-2 pilot song song.</li>
                <li>Training vận hành theo ca/line.</li>
              </ul>
            </td>
            <td>
              <strong>60-100</strong>
              <ul class="mini-list">
                <li>Hỗ trợ nhiều nhà máy/line.</li>
                <li>Pre-sales technical workshop mở rộng.</li>
              </ul>
            </td>
            <td>Tăng mạnh khi chạy song song nhiều pilot hoặc mở rộng pre-sales hiện trường.</td>
          </tr>
          <tr>
            <td><strong>Contingency buffer</strong></td>
            <td>
              <strong>20-30</strong>
              <ul class="mini-list">
                <li>Đệm rủi ro integration nhỏ.</li>
              </ul>
            </td>
            <td>
              <strong>30-45</strong>
              <ul class="mini-list">
                <li>Đệm cho scope change có kiểm soát.</li>
                <li>Đệm timeline trượt mức vừa.</li>
              </ul>
            </td>
            <td>
              <strong>40-70</strong>
              <ul class="mini-list">
                <li>Đệm cho rủi ro tích hợp đa hệ thống.</li>
                <li>Đệm cho biến động vận hành đa site.</li>
              </ul>
            </td>
            <td>Đệm cho biến động tích hợp, scope change có kiểm soát và timeline trượt.</td>
          </tr>
        </tbody>
      </table>

      <ul class="calc-list">
        <li><strong>Monthly burn (ước tính)</strong> = tổng 5 cost drivers theo từng scenario.</li>
        <li><strong>18-month envelope</strong> = monthly burn x 18 tháng (Lean: 270-395 x 18 = 4.9-7.1 tỷ; Base: 445-660 x 18 = 8.0-11.9 tỷ; Aggressive: 640-990 x 18 = 11.5-17.8 tỷ).</li>
        <li><strong>Khi nào đổi scenario:</strong> chỉ nâng từ Lean -> Base -> Aggressive khi gate trước đạt KPI/acceptance và có tín hiệu pipeline đủ mạnh.</li>
      </ul>
    </div>

    <div class="note mt-3">
      <strong>Glossary (diễn giải thuật ngữ trong slide)</strong>
      <table class="term-table mt-2">
        <thead>
          <tr><th style="width:24%">Thuật ngữ</th><th style="width:40%">Ý nghĩa</th><th style="width:36%">Cách hiểu nhanh / ví dụ</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>Cost envelope</strong></td><td>Khoảng ngân sách dự kiến cho toàn chương trình trong thời gian xác định.</td><td>Slide này dùng khung 18 tháng theo 3 kịch bản.</td></tr>
          <tr><td><strong>Lean / Base / Aggressive</strong></td><td>Ba mức đầu tư từ thận trọng đến mở rộng nhanh.</td><td>Chọn theo tín hiệu thị trường và năng lực delivery thực tế.</td></tr>
          <tr><td><strong>Team shape</strong></td><td>Cấu hình nhân sự và vai trò của đội triển khai theo từng kịch bản.</td><td>Lean dùng core team nhỏ; Aggressive thêm pre-sales/on-site.</td></tr>
          <tr><td><strong>Monthly burn</strong></td><td>Mức chi tiêu trung bình theo tháng để duy trì hoạt động chương trình.</td><td>Là chỉ số cảnh báo sớm về sức khỏe tài chính thực thi.</td></tr>
          <tr><td><strong>18-month envelope</strong></td><td>Tổng ngân sách ước tính cho 18 tháng triển khai.</td><td>Giúp BOD so sánh kịch bản theo quy mô đầu tư dài hơn 1 quý.</td></tr>
          <tr><td><strong>Assumptions</strong></td><td>Giả định đầu vào dùng để tính ngân sách và dự báo.</td><td>Gồm People, Tooling, Infra, Compliance, On-site support.</td></tr>
          <tr><td><strong>Guardrail</strong></td><td>Nguyên tắc kiểm soát để tránh vượt ngân sách và rủi ro mở rộng sớm.</td><td>Giải ngân theo phase-gate, không cấp full upfront.</td></tr>
          <tr><td><strong>Phase-gate</strong></td><td>Cổng kiểm soát điều kiện trước khi đi tiếp hoặc cấp ngân sách mới.</td><td>Pilot chưa đạt KPI/acceptance thì chưa mở ngân sách phase sau.</td></tr>
          <tr><td><strong>Upfront funding</strong></td><td>Cấp ngân sách toàn bộ ngay từ đầu.</td><td>Slide này khuyến nghị tránh để giảm rủi ro cash burn.</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
