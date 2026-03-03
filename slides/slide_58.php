<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.commit{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.sec{border:1px solid #9ca3af;border-radius:14px;background:#f8fafc;padding:16px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">verified_user</span>Standards, Commitments & Security (A6)</div>
    <div class="slide-subtitle">Cam kết rõ để khách hàng enterprise có cơ sở ra quyết định</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-6"><div class="commit"><div class="pro-section-title"><span class="material-symbols-rounded">workspace_premium</span>Commitment baseline</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>SLA theo mức độ sự cố</span></li><li><span class="material-symbols-rounded">check_circle</span><span>KPI theo dõi hiệu quả vận hành</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Uptime target theo môi trường triển khai</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Roadmap compliance theo yêu cầu ngành</span></li></ul></div></div>
      <div class="col-md-6"><div class="commit"><div class="pro-section-title"><span class="material-symbols-rounded">shield</span>Security policy</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>RBAC & least privilege</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Encryption in transit/at rest</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Audit trail cho thao tác quan trọng</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Backup + DR test định kỳ</span></li></ul></div></div>
    </div>
    <div class="sec"><strong>Glossary:</strong> SLA = cam kết phản hồi/xử lý. Uptime = tỷ lệ sẵn sàng hệ thống. DR = kế hoạch phục hồi sau sự cố.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
