<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.map-wrap{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:10px}
.qa-table{width:100%;border-collapse:separate;border-spacing:0 8px}
.qa-table th{font-size:.86rem;text-transform:uppercase;letter-spacing:.04em;color:#374151;padding:8px 10px}
.qa-table td{background:#f9fafb;border:1px solid #e5e7eb;padding:10px 12px;vertical-align:top;color:#111827}
.qa-table td:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px;width:33%}
.qa-table td:nth-child(2){width:44%}
.qa-table td:last-child{border-top-right-radius:10px;border-bottom-right-radius:10px;width:23%}
.slide-link{display:inline-block;margin:0 6px 6px 0;padding:4px 8px;border:1px solid #cbd5e1;border-radius:999px;background:#fff;color:#0f172a;text-decoration:none;font-size:.92rem}
.slide-link:hover{border-color:#94a3b8;background:#f8fafc;text-decoration:none}
.quick{border:1px solid #9ca3af;border-radius:14px;background:#f8fafc;padding:12px}
.quick-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px}
.quick-item{border:1px solid #d1d5db;border-radius:10px;background:#fff;padding:8px 10px;font-size:.96rem}
.note{border:1px solid #9ca3af;border-radius:10px;background:#f8fafc;padding:10px 12px;font-size:.97rem;color:#1f2937}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">help</span>BOD Requirement Mapping Q&A</div>
    <div class="slide-subtitle">Mapping đầy đủ: yêu cầu/thắc mắc BOD -> trả lời tóm tắt -> slide dẫn chứng</div>
  </div>
  <div class="slide-content">
    <div class="quick mb-3">
      <div class="pro-section-title mb-2"><span class="material-symbols-rounded">bolt</span>Top mối quan tâm trọng yếu của BOD và các phòng ban (điều hướng nhanh)</div>
      <div class="quick-grid">
        <div class="quick-item"><strong>Q1:</strong> Khách hàng mục tiêu? <a class="slide-link" href="slide_51.php">S51</a><a class="slide-link" href="slide_53.php">S53</a></div>
        <div class="quick-item"><strong>Q2:</strong> Vấn đề là business hay technical? <a class="slide-link" href="slide_54.php">S54</a></div>
        <div class="quick-item"><strong>Q3:</strong> Định vị cạnh tranh? <a class="slide-link" href="slide_53.php">S53</a><a class="slide-link" href="slide_61.php">S61</a></div>
        <div class="quick-item"><strong>Q4:</strong> Giải pháp có hệ thống chưa? <a class="slide-link" href="slide_55.php">S55</a><a class="slide-link" href="slide_56.php">S56</a></div>
        <div class="quick-item"><strong>Q5:</strong> Cách triển khai và phase-gate rõ chưa? <a class="slide-link" href="slide_59.php">S59</a><a class="slide-link" href="slide_62.php">S62</a></div>
        <div class="quick-item"><strong>Q6:</strong> Cam kết SLA/Uptime/Security? <a class="slide-link" href="slide_58.php">S58</a></div>
        <div class="quick-item"><strong>Q7:</strong> Team scale-up và owner đã rõ? <a class="slide-link" href="slide_60.php">S60</a><a class="slide-link" href="slide_61.php">S61</a><a class="slide-link" href="slide_64.php">S64</a></div>
        <div class="quick-item"><strong>Q8:</strong> Cần BOD duyệt gì ngay? <a class="slide-link" href="slide_64.php">S64</a><a class="slide-link" href="slide_72.php">S72</a></div>
        <div class="quick-item"><strong>Q9:</strong> Năng lực thật hiện tại tới đâu? <a class="slide-link" href="slide_65.php">S65</a></div>
        <div class="quick-item"><strong>Q10:</strong> SWOT có đủ thực tế? <a class="slide-link" href="slide_66.php">S66</a></div>
        <div class="quick-item"><strong>Q11:</strong> Rủi ro và owner xử lý? <a class="slide-link" href="slide_67.php">S67</a></div>
        <div class="quick-item"><strong>Q12:</strong> Nên scale ngay hay lighthouse first? <a class="slide-link" href="slide_68.php">S68</a></div>
        <div class="quick-item"><strong>Q13:</strong> Timeline 18 tháng có khả thi? <a class="slide-link" href="slide_69.php">S69</a></div>
        <div class="quick-item"><strong>Q14:</strong> Ngân sách và kịch bản chi phí? <a class="slide-link" href="slide_70.php">S70</a></div>
        <div class="quick-item"><strong>Q15:</strong> Giá và cơ hội doanh thu? <a class="slide-link" href="slide_71.php">S71</a></div>
        <div class="quick-item"><strong>Q16:</strong> Điều kiện Go/No-Go cuối cùng? <a class="slide-link" href="slide_72.php">S72</a></div>
      </div>
    </div>

    <div class="map-wrap mb-3">
      <table class="qa-table">
        <thead>
          <tr>
            <th>Yêu cầu / Câu hỏi BOD</th>
            <th>Trả lời trong deck</th>
            <th>Slide liên quan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Khách hàng mục tiêu là ai? khu vực nào?</td>
            <td>Tập trung FDI Tier 1/vendor 1-2, doanh nghiệp sản xuất lớn, trọng tâm phía Nam.</td>
            <td><a class="slide-link" href="slide_51.php">Slide 51</a><a class="slide-link" href="slide_53.php">Slide 53</a></td>
          </tr>
          <tr>
            <td>Ngành ưu tiên và ngành mở rộng đã nêu chưa?</td>
            <td>Đã nêu ngành ưu tiên (điện-điện tử, linh kiện ô tô) và 3 nhóm mở rộng.</td>
            <td><a class="slide-link" href="slide_51.php">Slide 51</a></td>
          </tr>
          <tr>
            <td>3 mảng kinh doanh công ty đã được gắn vào câu chuyện chưa?</td>
            <td>Đã map phần cứng, hạ tầng CNTT, phần mềm tùy chỉnh vào cùng narrative.</td>
            <td><a class="slide-link" href="slide_51.php">Slide 51</a><a class="slide-link" href="slide_54.php">Slide 54</a></td>
          </tr>
          <tr>
            <td>Vai trò BOD / Manager / Marketing có rõ trách nhiệm không?</td>
            <td>Đã phân trách nhiệm rõ theo cấp phê duyệt, chuyên môn, và chuyển hóa nội dung.</td>
            <td><a class="slide-link" href="slide_52.php">Slide 52</a><a class="slide-link" href="slide_64.php">Slide 64</a></td>
          </tr>
          <tr>
            <td>Lộ trình 3 giai đoạn T3-T4-T5 đã phản ánh chưa?</td>
            <td>Đã thể hiện phase xây danh mục -> trình duyệt BOD -> chuẩn hóa nội dung/website.</td>
            <td><a class="slide-link" href="slide_52.php">Slide 52</a><a class="slide-link" href="slide_64.php">Slide 64</a></td>
          </tr>
          <tr>
            <td>Đặc điểm nhóm FDI và sản xuất lớn có đủ sâu chưa?</td>
            <td>Đã mô tả chuẩn vận hành, SLA/uptime/compliance/ROI và áp lực downtime nhiều ca.</td>
            <td><a class="slide-link" href="slide_53.php">Slide 53</a></td>
          </tr>
          <tr>
            <td>Vấn đề khách hàng đã chứng minh là vấn đề kinh doanh chưa?</td>
            <td>Đã nêu pain points theo 3 mảng và chốt đây là business operation problem.</td>
            <td><a class="slide-link" href="slide_54.php">Slide 54</a></td>
          </tr>
          <tr>
            <td>Giải pháp tổng thể có tính hệ thống chưa?</td>
            <td>Đã mô tả scope, non-goal, architecture 3 layers, modules và tích hợp ERP/MES.</td>
            <td><a class="slide-link" href="slide_55.php">Slide 55</a><a class="slide-link" href="slide_56.php">Slide 56</a></td>
          </tr>
          <tr>
            <td>Phương pháp triển khai có rõ quy trình không?</td>
            <td>Đã nêu SCRUM cadence + pilot -> rollout -> scale và điều kiện chuyển phase.</td>
            <td><a class="slide-link" href="slide_59.php">Slide 59</a><a class="slide-link" href="slide_62.php">Slide 62</a></td>
          </tr>
          <tr>
            <td>Có tiêu chuẩn và cam kết cụ thể (SLA/KPI/Uptime/Security) không?</td>
            <td>Đã đưa baseline cam kết và security controls (RBAC, encryption, audit, backup/DR).</td>
            <td><a class="slide-link" href="slide_58.php">Slide 58</a></td>
          </tr>
          <tr>
            <td>Có giá trị định lượng và đo lường hiệu quả không?</td>
            <td>Đã có KPI khung: downtime, lead-time, độ chính xác tồn kho, tỷ lệ hoàn thành đơn.</td>
            <td><a class="slide-link" href="slide_57.php">Slide 57</a><a class="slide-link" href="slide_58.php">Slide 58</a></td>
          </tr>
          <tr>
            <td>Năng lực nội bộ hiện tại, năng lực yêu cầu, khoảng cách đã nêu chưa?</td>
            <td>Đã có current vs required vs gap và kế hoạch lấp gap theo mốc, có owner rõ.</td>
            <td><a class="slide-link" href="slide_60.php">Slide 60</a><a class="slide-link" href="slide_64.php">Slide 64</a></td>
          </tr>
          <tr>
            <td>Chứng chỉ, nhân sự, quy trình quản trị, công cụ có kế hoạch chưa?</td>
            <td>Đã nêu roadmap năng lực/chứng chỉ, team scale-up 3 năm, governance theo phase-gate và toolchain KPI.</td>
            <td><a class="slide-link" href="slide_61.php">Slide 61</a><a class="slide-link" href="slide_62.php">Slide 62</a></td>
          </tr>
          <tr>
            <td>Mốc thời gian, nguồn lực, chi phí có rõ chưa?</td>
            <td>Đã có roadmap 3 năm, phase gate chuyển năm, team scale-up và cost frame theo People/Process/Platform/Program.</td>
            <td><a class="slide-link" href="slide_62.php">Slide 62</a><a class="slide-link" href="slide_64.php">Slide 64</a></td>
          </tr>
          <tr>
            <td>Rủi ro, phản biện, và quyết định BOD cần duyệt đã chốt chưa?</td>
            <td>Đã trả lời trực diện các câu phản biện và nêu 3 quyết định cần phê duyệt.</td>
            <td><a class="slide-link" href="slide_64.php">Slide 64</a><a class="slide-link" href="slide_72.php">Slide 72</a></td>
          </tr>
          <tr>
            <td>Năng lực thực tế hiện tại có đủ để scale ngay không?</td>
            <td>Đã có reality check về team, asset sẵn có, và giới hạn hiện tại để tránh over-commit.</td>
            <td><a class="slide-link" href="slide_65.php">Slide 65</a></td>
          </tr>
          <tr>
            <td>SWOT đã phản ánh thực tế thị trường FDI sản xuất chưa?</td>
            <td>Đã phân tích rõ Strength/Weakness/Opportunity/Threat theo năng lực hiện tại.</td>
            <td><a class="slide-link" href="slide_66.php">Slide 66</a></td>
          </tr>
          <tr>
            <td>Top risks có owner và mitigation cụ thể chưa?</td>
            <td>Đã có risk register với impact/likelihood/owner/mitigation cho từng rủi ro chính.</td>
            <td><a class="slide-link" href="slide_67.php">Slide 67</a></td>
          </tr>
          <tr>
            <td>Nên Scale ngay hay Lighthouse first?</td>
            <td>Khuyến nghị lighthouse first để đổi margin ngắn hạn lấy reference và khả năng scale bền vững.</td>
            <td><a class="slide-link" href="slide_68.php">Slide 68</a></td>
          </tr>
          <tr>
            <td>Timeline 0-18 tháng có phase-gate và owner rõ chưa?</td>
            <td>Đã chia Foundation -> Pilot -> Hardening -> Replication Ready với điều kiện chuyển phase rõ.</td>
            <td><a class="slide-link" href="slide_69.php">Slide 69</a></td>
          </tr>
          <tr>
            <td>Khung ngân sách và kịch bản chi phí có đủ để duyệt chưa?</td>
            <td>Đã có Lean/Base/Aggressive scenario và nguyên tắc giải ngân theo phase-gate.</td>
            <td><a class="slide-link" href="slide_70.php">Slide 70</a></td>
          </tr>
          <tr>
            <td>Mô hình giá và cơ hội doanh thu 3 năm đã hợp lý chưa?</td>
            <td>Đã có pricing logic pilot vs post-pilot và cơ hội theo 3 kịch bản.</td>
            <td><a class="slide-link" href="slide_71.php">Slide 71</a></td>
          </tr>
          <tr>
            <td>Điều kiện Go/No-Go cuối cùng và xác nhận BOD?</td>
            <td>Đã có matrix market/delivery/finance và danh sách xác nhận cuối để ra quyết định thực tế.</td>
            <td><a class="slide-link" href="slide_72.php">Slide 72</a><a class="slide-link" href="slide_64.php">Slide 64</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="note"><strong>Ghi chú:</strong> Slide này là bản đồ điều hướng Q&A. Khi BOD hỏi theo từng ý trong guideline, chỉ cần nhảy tới slide liên quan để chứng minh.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
<script>
  (function() {
    const slideTitles = <?php global $slide_titles; echo json_encode($slide_titles, JSON_UNESCAPED_UNICODE); ?>;
    const links = document.querySelectorAll('.slide-link[href^="slide_"]');

    links.forEach((link) => {
      const matched = link.getAttribute('href').match(/slide_(\d+)\.php/);
      if (!matched) return;
      const slideNum = parseInt(matched[1], 10);
      const padded = String(slideNum).padStart(2, '0');
      const slideId = `slide_${String(slideNum).padStart(2, '0')}`;
      const title = slideTitles[slideId] || `Slide ${slideNum}`;
      link.setAttribute('title', `S${padded} - ${title}`);
    });
  })();
</script>
</body>
</html>
