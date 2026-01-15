<?php 
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
<style>
    .slide-container { display: flex; flex-direction: column; gap: 14px; }
    .slide-title { display: flex; align-items: center; gap: 10px; font-size: 1.8rem; font-weight: 800; color: #1f2937; }
    .slide-subtitle { font-size: 1rem; color: #6b7280; margin-bottom: 8px; }
    .content-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 14px; }
    .card { background: #ffffff; border: 2px solid #e5e7eb; border-radius: 12px; padding: 14px 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
    .card h3 { margin: 0 0 10px 0; font-size: 1.15rem; color: #111827; display: flex; align-items: center; gap: 8px; }
    .card h3 .material-symbols-rounded { color: #2563eb; font-size: 1.4rem; }
    .card ul { margin: 0; padding: 0; list-style: none; color: #4b5563; line-height: 1.6; font-size: 0.95rem; }
    .card ul li { padding: 5px 0; padding-left: 16px; position: relative; }
    .card ul li:before { content: '•'; position: absolute; left: 2px; color: #2563eb; font-weight: 700; }
    .tech-stack { background: #f0f9ff; border: 2px solid #bfdbfe; border-radius: 10px; padding: 12px; font-size: 0.9rem; color: #1e40af; line-height: 1.5; }
    .tech-stack strong { color: #1e3a8a; display: block; margin-bottom: 6px; }
</style>
</head>
<body>

<div class="slide-container">
    <div class="slide-title">
        <span class="material-symbols-rounded">web</span>
        User Layer & API Gateway
    </div>

    <div class="slide-subtitle">
        Chi tiết lớp giao diện người dùng (Web / Mobile / Admin) và API Gateway đảm nhiệm định tuyến, bảo mật và kiểm soát truy cập.
    </div>

    <div class="content-grid">
        <!-- USER INTERFACE -->
        <div class="card">
            <h3><span class="material-symbols-rounded">devices</span>User Interface Apps</h3>
            <ul>
                <li><strong>Web App (React SPA):</strong> React 18, TypeScript, Redux Toolkit, React Query, TailwindCSS.</li>
                <li><strong>Mobile App (React Native):</strong> iOS/Android native, Expo, Navigation v6, hỗ trợ offline-first với SQLite.</li>
                <li><strong>PWA Support:</strong> Service Worker, caching chiến lược, push notification, install prompt.</li>
                <li><strong>Admin Console:</strong> Quản lý tenant, user & role, analytics, feature flag, billing & subscription.</li>
                <li><strong>Design System:</strong> Component tái sử dụng (button, form, modal), hỗ trợ dark/light theme.</li>
            </ul>
        </div>

        <!-- API GATEWAY -->
        <div class="card">
            <h3><span class="material-symbols-rounded">vpn_lock</span>API Gateway</h3>
            <ul>
                <li><strong>Routing:</strong> Định tuyến request theo tenant, version API (v1, v2), hỗ trợ load balancing.</li>
                <li><strong>Rate limiting:</strong> Giới hạn request theo user/tenant (token bucket, quota).</li>
                <li><strong>Authentication:</strong> Xác thực JWT, OAuth2, SSO (Google / Microsoft).</li>
                <li><strong>Observability:</strong> Gắn Request ID, trace context (OpenTelemetry).</li>
                <li><strong>Security:</strong> CORS policy, CSRF protection, HTTP security headers.</li>
            </ul>
        </div>
    </div>

    <!-- AUTH -->
    <div class="card">
        <h3><span class="material-symbols-rounded">security</span>Authentication & Authorization</h3>
        <ul>
            <li><strong>Multi-tenant context:</strong> Xác định Tenant ID từ subdomain hoặc HTTP header, áp dụng xuyên suốt request.</li>
            <li><strong>RBAC:</strong> Owner, Admin, Member, Guest với permission matrix rõ ràng.</li>
            <li><strong>ABAC:</strong> Kiểm soát truy cập dựa trên thuộc tính (user.plan, resource.status, feature flag).</li>
            <li><strong>Session management:</strong> Redis session store, refresh token rotation, logout toàn hệ thống.</li>
            <li><strong>Audit log:</strong> Ghi nhận thao tác nhạy cảm (xoá dữ liệu, đổi quyền, billing change).</li>
        </ul>
    </div>

    <div class="tech-stack">
        <strong>Tech stack đề xuất:</strong>
        Frontend: React 18 + TypeScript + Vite, React Native + Expo.<br>
        API Gateway: Kong / Traefik / AWS API Gateway.<br>
        Auth: Auth0 / Clerk / Custom JWT Service.<br>
        Monitoring: Sentry (error tracking), Mixpanel / Amplitude (product analytics).
    </div>
</div>

<div class="navigation">
    <button class="nav-btn" onclick="previousSlide()">
        <span class="material-symbols-rounded">arrow_back</span>
    </button>
    <button class="nav-btn" onclick="nextSlide()">
        <span class="material-symbols-rounded">arrow_forward</span>
    </button>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>