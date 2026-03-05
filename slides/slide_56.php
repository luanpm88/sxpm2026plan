<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.layer{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px}
.arrow{text-align:center;margin:8px 0}.arrow .material-symbols-rounded{font-size:40px;color:#1f2937}
.gloss{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">schema</span>Architecture & Integration Model</div>
    <div class="slide-subtitle">Kiến trúc hệ thống theo 3 lớp, hỗ trợ tích hợp ERP/MES</div>
  </div>
  <div class="slide-content">
    <div class="layer"><div class="pro-section-title"><span class="material-symbols-rounded">foundation</span>Layer 1 - Core Foundation</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Identity & role management</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Workflow orchestration</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Audit logging & reporting</span></li><li><span class="material-symbols-rounded">check_circle</span><span>API gateway for integration</span></li></ul></div>
    <div class="arrow"><span class="material-symbols-rounded">south</span></div>
    <div class="layer"><div class="pro-section-title"><span class="material-symbols-rounded">view_module</span>Layer 2 - Domain Modules</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">chevron_right</span><span>Production</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Warehouse</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Quality</span></li><li><span class="material-symbols-rounded">chevron_right</span><span>Executive dashboard</span></li></ul></div>
    <div class="arrow"><span class="material-symbols-rounded">south</span></div>
    <div class="layer mb-3"><div class="pro-section-title"><span class="material-symbols-rounded">tune</span>Layer 3 - Adaptation</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Factory-specific configuration</span></li><li><span class="material-symbols-rounded">check_circle</span><span>SOP mapping</span></li><li><span class="material-symbols-rounded">check_circle</span><span>ERP/MES integration adapter</span></li></ul></div>
    <div class="gloss"><strong>Glossary:</strong> ERP = hệ thống quản trị tổng thể doanh nghiệp. MES = hệ thống thực thi sản xuất. API = cổng kết nối dữ liệu giữa hệ thống.</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
