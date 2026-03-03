<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.28rem;color:#111827;margin-top:8px;font-weight:500}
.section-card{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:14px;height:100%}
.mini{border:1px dashed #9ca3af;border-radius:10px;background:#f8fafc;padding:10px}
.detail-table{width:100%;border-collapse:collapse;font-size:.86rem}
.detail-table th,.detail-table td{border:1px solid #e5e7eb;padding:8px;vertical-align:top}
.detail-table th{background:#f3f4f6}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">warning</span>FDI SX - Solution: Why Now & Manufacturing Pain</div>
    <div class="slide-subtitle">Những khó khăn FDI sản xuất thường gặp và áp lực phải thay đổi mô hình vận hành</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">factory</span>Pain trong vận hành line</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Downtime lặp lại nhưng thiếu root-cause trace theo line/ca.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>WIP visibility thấp, điều phối ca/kíp phụ thuộc báo cáo thủ công.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Quality issue phát hiện trễ, CAPA closure kéo dài.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Bottleneck giữa Production - Warehouse - Quality.</span></li></ul></div></div>
      <div class="col-md-6"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">data_object</span>Pain dữ liệu và quản trị</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">arrow_right</span><span>Dữ liệu rời rạc giữa ERP/MES/WMS/Excel, thiếu source of truth.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Không đồng bộ mã vật tư/BOM/routing gây lệch báo cáo.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Audit/compliance tốn effort do bằng chứng truy xuất thủ công.</span></li><li><span class="material-symbols-rounded">arrow_right</span><span>Quyết định quản trị dựa trên dữ liệu trễ và thiếu nhất quán.</span></li></ul></div></div>
    </div>

    <div class="section-card mb-3">
      <div class="pro-section-title"><span class="material-symbols-rounded">query_stats</span>Cost of inaction (12-24 tháng)</div>
      <table class="detail-table">
        <thead><tr><th>Hạng mục</th><th>Biểu hiện nếu giữ hiện trạng</th><th>Tác động business</th></tr></thead>
        <tbody>
          <tr><td>Downtime</td><td>Sự cố lặp lại, MTTR cao</td><td>Giảm OEE, tăng overtime và trễ giao hàng</td></tr>
          <tr><td>Quality</td><td>Defect trend tăng, CAPA chậm</td><td>Tăng rework/scrap, rủi ro khi audit khách hàng</td></tr>
          <tr><td>Inventory</td><td>Stock variance và thiếu vật tư cục bộ</td><td>Gián đoạn line, tăng chi phí tồn kho an toàn</td></tr>
          <tr><td>Compliance</td><td>Evidence rời rạc</td><td>Tăng rủi ro không đạt yêu cầu tập đoàn/khách hàng</td></tr>
        </tbody>
      </table>
    </div>

    <div class="row g-3">
      <div class="col-md-8"><div class="section-card"><div class="pro-section-title"><span class="material-symbols-rounded">task_alt</span>Trigger khởi tạo triển khai giải pháp</div><div class="row g-2"><div class="col-md-6"><div class="mini"><strong>Business owner</strong><br>Có Executive Sponsor và Plant Owner cùng cam kết mục tiêu.</div></div><div class="col-md-6"><div class="mini"><strong>KPI baseline</strong><br>Có số liệu gốc cho downtime, quality, inventory, lead-time.</div></div><div class="col-md-6"><div class="mini"><strong>Scope rõ</strong><br>Khoanh line/process ưu tiên để kiểm soát rủi ro.</div></div><div class="col-md-6"><div class="mini"><strong>Data readiness</strong><br>Chốt hệ thống nguồn và mapping dữ liệu ban đầu.</div></div></div></div></div>
      <div class="col-md-4"><div class="visual-panel h-100"><strong>Thông điệp chốt</strong><p class="mb-0 mt-2">Đầu tư MES không chỉ là mua phần mềm; đây là quyết định giảm rủi ro vận hành và bảo vệ năng lực giao hàng của nhà máy FDI.</p></div></div>
    </div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
