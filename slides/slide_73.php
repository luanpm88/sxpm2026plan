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
.flow-step{border:1px dashed #9ca3af;border-radius:12px;background:#f8fafc;padding:12px;height:100%}
.bridge{border:1px solid #93c5fd;border-radius:12px;background:#eff6ff;padding:12px}
.summary-note{display:flex;gap:12px;align-items:flex-start;border:1px solid #c7d2fe;border-radius:14px;background:linear-gradient(180deg,#f8fbff 0%,#eef4ff 100%);padding:14px}
.summary-icon{width:40px;height:40px;border:1px solid #93c5fd;border-radius:999px;display:flex;align-items:center;justify-content:center;background:#fff;color:#2563eb;flex-shrink:0}
.summary-icon .material-symbols-rounded{font-size:22px;line-height:1}
.summary-title{font-size:1rem;font-weight:700;color:#1e3a8a;margin-bottom:2px}
.summary-text{font-size:1rem;color:#0f172a;line-height:1.45}
.detail-table{width:100%;border-collapse:collapse;font-size:.94rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:8px;vertical-align:top}
.detail-table th{background:#f3f4f6;color:#0f172a;font-weight:700}
.detail-table td{color:#111827}
.flow-step strong{font-size:1.06rem;color:#0f172a}
.flow-step small{font-size:.96rem;color:#475569}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">view_list</span>FDI SX - Solution: Product Introduction Plan</div>
    <div class="slide-subtitle">Khung dẫn chuyện sản phẩm MES cho khách hàng FDI sản xuất: từ nhu cầu đến giá trị triển khai</div>
  </div>

  <div class="slide-content">
    <div class="bridge mb-3">
      <strong>Cách đọc cụm 73 -> 80 để hiểu sản phẩm nhanh</strong>
      <ul class="pro-list mb-0 mt-2">
        <li><span class="material-symbols-rounded">looks_one</span><span><strong>74-75:</strong> xác định vấn đề thật và phạm vi giải pháp.</span></li>
        <li><span class="material-symbols-rounded">looks_two</span><span><strong>76-77:</strong> hiểu module, kiến trúc và logic tích hợp.</span></li>
        <li><span class="material-symbols-rounded">looks_3</span><span><strong>78-80:</strong> xem cách triển khai, cam kết vận hành, và quyết định đầu tư.</span></li>
      </ul>
    </div>

    <div class="row g-3 mb-3">
      <div class="col-md-7">
        <div class="section-card">
          <div class="pro-section-title"><span class="material-symbols-rounded">inventory</span>Sản phẩm chúng tôi cung cấp</div>
          <ul class="pro-list mb-0">
            <li><span class="material-symbols-rounded">check_circle</span><span>Nền tảng MES theo kiến trúc module cho nhà máy FDI: Production, Warehouse, Quality, Maintenance, Analytics.</span></li>
            <li><span class="material-symbols-rounded">check_circle</span><span>Tích hợp hệ thống hiện hữu ERP/MES/WMS/HRM/IoT qua API + event flow có kiểm soát.</span></li>
            <li><span class="material-symbols-rounded">check_circle</span><span>Triển khai theo phase-gate với KPI baseline, acceptance criteria, và governance rõ owner.</span></li>
            <li><span class="material-symbols-rounded">check_circle</span><span>Vận hành dài hạn bằng SLA band, security baseline, bảo trì/bảo hành theo phạm vi cam kết.</span></li>
          </ul>
        </div>
      </div>
      <div class="col-md-5">
        <div class="section-card h-100">
          <div class="pro-section-title"><span class="material-symbols-rounded">groups</span>Khách hàng được gì</div>
          <ul class="pro-list mb-0">
            <li><span class="material-symbols-rounded">account_balance</span><span><strong>Executive Sponsor:</strong> logic đầu tư rõ, điều kiện mở rộng có kiểm soát.</span></li>
            <li><span class="material-symbols-rounded">precision_manufacturing</span><span><strong>Plant:</strong> giảm downtime, tăng ổn định throughput.</span></li>
            <li><span class="material-symbols-rounded">dns</span><span><strong>IT:</strong> giảm integration chaos, tăng auditability.</span></li>
            <li><span class="material-symbols-rounded">receipt_long</span><span><strong>Procurement:</strong> scope, milestone, acceptance và chi phí rõ.</span></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">route</span>Story flow 74 -> 80 (theo góc nhìn khách hàng)</div>
      <div class="row g-3">
        <div class="col-md-3"><div class="flow-step"><strong>74</strong><br>Pain & urgency<br><small>Vì sao phải thay đổi</small></div></div>
        <div class="col-md-3"><div class="flow-step"><strong>75</strong><br>MES scope<br><small>Sản phẩm giải gì, không giải gì</small></div></div>
        <div class="col-md-3"><div class="flow-step"><strong>76</strong><br>Module catalog<br><small>Chức năng đầy đủ + KPI</small></div></div>
        <div class="col-md-3"><div class="flow-step"><strong>77</strong><br>Architecture<br><small>Tích hợp + luồng dữ liệu</small></div></div>
        <div class="col-md-3"><div class="flow-step"><strong>78</strong><br>Delivery & team<br><small>Quy trình SXPM + RACI</small></div></div>
        <div class="col-md-3"><div class="flow-step"><strong>79</strong><br>Security/Infra<br><small>SLA + support + boundary</small></div></div>
        <div class="col-md-6"><div class="flow-step"><strong>80</strong><br>Packages & pricing<br><small>3 gói chức năng + chi phí + mở rộng</small></div></div>
      </div>
    </div>

    <div class="section-card">
      <div class="pro-section-title"><span class="material-symbols-rounded">table_chart</span>Ánh xạ quan tâm khách hàng -> slide trả lời</div>
      <table class="detail-table">
        <thead><tr><th>Mối quan tâm khách hàng</th><th>Slide trả lời chính</th><th>Kết quả kỳ vọng sau khi nghe</th></tr></thead>
        <tbody>
          <tr><td>Vì sao cần MES ngay bây giờ?</td><td>74</td><td>Hiểu rõ cost of inaction theo vận hành thực tế</td></tr>
          <tr><td>Sản phẩm thực sự gồm những gì?</td><td>75, 76</td><td>Nắm rõ phạm vi module và giá trị theo vai trò</td></tr>
          <tr><td>Tích hợp với hệ thống hiện tại ra sao?</td><td>77</td><td>Yên tâm về kiến trúc và lộ trình tích hợp</td></tr>
          <tr><td>Triển khai có rủi ro không, ai chịu trách nhiệm?</td><td>78, 79</td><td>Thấy rõ phase-gate, owner, security/SLA boundary</td></tr>
          <tr><td>Tổng đầu tư và gói giải pháp như thế nào?</td><td>80</td><td>Có cơ sở so sánh gói và quyết định đầu tư</td></tr>
        </tbody>
      </table>
    </div>

    <div class="summary-note mt-3">
      <div class="summary-icon"><span class="material-symbols-rounded">lightbulb</span></div>
      <div>
        <div class="summary-title">Tóm tắt nhanh</div>
        <div class="summary-text">Cụm 74-80 là hành trình quyết định đầu tư MES theo thứ tự cố định: hiểu pain -> chốt scope -> xác nhận kiến trúc/triển khai -> chốt cam kết vận hành -> phê duyệt đầu tư theo phase.</div>
      </div>
    </div>
  </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
