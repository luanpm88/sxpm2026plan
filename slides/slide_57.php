<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.mod{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.kpi{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.note{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
.term-table{width:100%;border-collapse:collapse;font-size:.93rem}
.term-table th,.term-table td{border:1px solid #d1d5db;padding:9px;vertical-align:top}
.term-table th{background:#f3f4f6;color:#111827;font-weight:700}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">widgets</span>Core Modules + Quantified Value</div>
    <div class="slide-subtitle">Từ module chức năng tới giá trị kinh doanh đo lường được</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="mod"><div class="pro-section-title"><span class="material-symbols-rounded">factory</span>Production + Quality</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Work order + progress tracking</span></li><li><span class="material-symbols-rounded">check_circle</span><span>In-process quality checkpoints</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Non-conformance tracking</span></li></ul></div></div>
      <div class="col-md-6"><div class="mod"><div class="pro-section-title"><span class="material-symbols-rounded">inventory_2</span>Warehouse + Dashboard</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Raw/WIP/FG inventory visibility</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Realtime KPI dashboard</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Cross-department data consistency</span></li></ul></div></div>
    </div>
    <div class="kpi"><strong>Giá trị định lượng gợi ý để đo:</strong> giảm downtime %, giảm thời gian tổng hợp báo cáo, tăng độ chính xác tồn kho, giảm lead-time xử lý sự cố, tăng tỷ lệ hoàn thành đơn hàng đúng hạn.</div>

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
            <td><strong>Work order</strong></td>
            <td>Lệnh sản xuất giao cho line/ca để thực hiện công việc cụ thể.</td>
            <td>Ví dụ: lệnh SX mã WO-001 cho line A, số lượng mục tiêu và thời hạn rõ.</td>
          </tr>
          <tr>
            <td><strong>Progress tracking</strong></td>
            <td>Theo dõi tiến độ thực hiện lệnh sản xuất theo thời gian thực.</td>
            <td>Thấy ngay đã hoàn thành bao nhiêu %, đang chậm ở công đoạn nào.</td>
          </tr>
          <tr>
            <td><strong>In-process quality checkpoints</strong></td>
            <td>Điểm kiểm tra chất lượng trong quá trình sản xuất, không đợi cuối line mới kiểm.</td>
            <td>Giúp phát hiện lỗi sớm, giảm scrap/rework ở công đoạn sau.</td>
          </tr>
          <tr>
            <td><strong>Non-conformance tracking</strong></td>
            <td>Theo dõi lỗi không phù hợp (NC): lỗi gì, ở đâu, do ai, trạng thái xử lý.</td>
            <td>Dùng để truy vết CAPA và tránh lặp lại lỗi cùng nguyên nhân.</td>
          </tr>
          <tr>
            <td><strong>Raw/WIP/FG inventory visibility</strong></td>
            <td>Khả năng nhìn thấy tồn kho theo 3 lớp: nguyên liệu (Raw), dở dang (WIP), thành phẩm (FG).</td>
            <td>Biết tồn theo line/site theo thời gian gần realtime để tránh thiếu vật tư cục bộ.</td>
          </tr>
          <tr>
            <td><strong>Realtime KPI dashboard</strong></td>
            <td>Màn hình KPI cập nhật liên tục phục vụ điều hành vận hành.</td>
            <td>Ví dụ: OEE, downtime, defect trend, OTD hiển thị theo ca/line.</td>
          </tr>
          <tr>
            <td><strong>Cross-department data consistency</strong></td>
            <td>Dữ liệu nhất quán giữa Production, Warehouse, Quality, IT.</td>
            <td>Tránh mỗi phòng ban một số liệu khác nhau cho cùng một sự kiện.</td>
          </tr>
          <tr>
            <td><strong>Downtime</strong></td>
            <td>Thời gian dừng máy/dừng line ngoài kế hoạch hoặc vượt ngưỡng cho phép.</td>
            <td>Giảm downtime nghĩa là tăng thời gian vận hành hữu ích của dây chuyền.</td>
          </tr>
          <tr>
            <td><strong>Lead-time xử lý sự cố</strong></td>
            <td>Tổng thời gian từ lúc phát hiện sự cố đến khi khôi phục vận hành ổn định.</td>
            <td>Lead-time càng ngắn thì tác động sản xuất càng thấp.</td>
          </tr>
          <tr>
            <td><strong>Tỷ lệ hoàn thành đơn hàng đúng hạn (OTD)</strong></td>
            <td>Tỷ lệ đơn hàng giao/hoàn thành đúng thời hạn đã cam kết.</td>
            <td>OTD tăng cho thấy vận hành ổn định và khả năng giữ cam kết với khách hàng tốt hơn.</td>
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
