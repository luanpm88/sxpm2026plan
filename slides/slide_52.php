<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
.slide-subtitle{font-size:1.34rem;color:#111827;margin-top:8px;font-weight:500}
.role{border:1px solid #d1d5db;border-radius:14px;background:#fff;padding:16px;height:100%}
.phase{border:1px solid #9ca3af;border-radius:12px;background:#f8fafc;padding:14px}
</style>
</head>
<body>
<div class="slide-container">
  <div class="slide-header">
    <div class="slide-title"><span class="material-symbols-rounded">account_tree</span>Roles, Responsibilities & 3-Phase Plan</div>
    <div class="slide-subtitle">Ai làm gì và tiến độ T3 -> T5/2026</div>
  </div>
  <div class="slide-content">
    <div class="row g-3 mb-3">
      <div class="col-md-4"><div class="role"><div class="pro-section-title"><span class="material-symbols-rounded">gavel</span>BOD</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Quyết định phân khúc chiến lược</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Phê duyệt danh mục giải pháp</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Phê duyệt phạm vi năng lực cam kết</span></li></ul></div></div>
      <div class="col-md-4"><div class="role"><div class="pro-section-title"><span class="material-symbols-rounded">manage_accounts</span>Manager</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Nghiên cứu thị trường ngành</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Thiết kế giải pháp + kiến trúc + quy trình</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Chịu trách nhiệm chuyên môn</span></li></ul></div></div>
      <div class="col-md-4"><div class="role"><div class="pro-section-title"><span class="material-symbols-rounded">campaign</span>Marketing</div><ul class="pro-list mb-0"><li><span class="material-symbols-rounded">check_circle</span><span>Chuẩn hóa thông điệp sau duyệt</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Chuyển hóa thành nội dung website</span></li><li><span class="material-symbols-rounded">check_circle</span><span>Giữ chuẩn định vị thương hiệu</span></li></ul></div></div>
    </div>
    <div class="phase"><strong>Execution phases:</strong> T3/2026 xây danh mục theo chuyên môn (<strong>output:</strong> draft catalog + scope baseline) -> T4/2026 trình bày và phê duyệt BOD (<strong>output:</strong> approved direction + approved capability scope) -> T5/2026 chuẩn hóa nội dung và triển khai website (<strong>output:</strong> launch-ready content + publication plan).</div>
  </div>
</div>
<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
