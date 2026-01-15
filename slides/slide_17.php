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
    .content-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .card { background: #ffffff; border: 2px solid #e5e7eb; border-radius: 12px; padding: 14px 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
    .card h3 { margin: 0 0 10px 0; font-size: 1.15rem; color: #111827; display: flex; align-items: center; gap: 8px; }
    .card h3 .material-symbols-rounded { color: #10b981; font-size: 1.4rem; }
    .card ul { margin: 0; padding: 0; list-style: none; color: #4b5563; line-height: 1.6; font-size: 0.95rem; }
    .card ul li { padding: 5px 0; padding-left: 16px; position: relative; }
    .card ul li:before { content: '•'; position: absolute; left: 2px; color: #10b981; font-weight: 700; }
    .tech-stack { background: #ecfdf5; border: 2px solid #a7f3d0; border-radius: 10px; padding: 12px; font-size: 0.9rem; color: #065f46; line-height: 1.5; }
    .tech-stack strong { color: #064e3b; display: block; margin-bottom: 6px; }
    .diagram-flow { background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; padding: 12px; font-size: 0.88rem; color: #0f172a; text-align: center; line-height: 1.8; }
    .diagram-flow .arrow { color: #3b82f6; font-weight: 700; }
</style>
</head>
<body>

<div class="slide-container">
    <div class="slide-title">
        <span class="material-symbols-rounded">checklist</span>
        HKSpace Core & Todo Engine
    </div>

    <div class="slide-subtitle">
        Kiến trúc lõi HKSpace: quản lý task / folder / project, cộng tác theo team, đồng bộ real-time và hỗ trợ offline-first.
    </div>

    <!-- CORE & COLLAB -->
    <div class="content-grid">
        <div class="card">
            <h3><span class="material-symbols-rounded">task_alt</span>Task Management Core</h3>
            <ul>
                <li><strong>Domain model:</strong> Workspace, Project, Folder, Task, Comment, Attachment (Eloquent ORM).</li>
                <li><strong>Task attributes:</strong> title, description, assignees, due_date, priority, tags, status.</li>
                <li><strong>Hierarchy:</strong> Task/Sub-task, Folder lồng nhau không giới hạn, soft delete & archive.</li>
                <li><strong>Dependencies:</strong> Task blocking / blocked-by, tự động cập nhật trạng thái liên quan.</li>
                <li><strong>Recurring tasks:</strong> Rule-based schedule, sinh task mới bằng queued job.</li>
                <li><strong>Comments & files:</strong> Threaded comment, @mention, upload file qua S3-compatible storage.</li>
            </ul>
        </div>

        <div class="card">
            <h3><span class="material-symbols-rounded">group</span>Team & Collaboration</h3>
            <ul>
                <li><strong>Workspace:</strong> Multi-workspace per user, private / shared, switch context.</li>
                <li><strong>Roles & permissions:</strong> Owner, Admin, Member, Guest (RBAC + policy).</li>
                <li><strong>Activity feed:</strong> Ghi nhận mọi thay đổi (create/update/assign/comment).</li>
                <li><strong>Notification:</strong> In-app, email, push notification (mobile).</li>
                <li><strong>Presence:</strong> Hiển thị user đang xem / chỉnh sửa task (WebSocket).</li>
            </ul>
        </div>
    </div>

    <!-- REALTIME & OFFLINE -->
    <div class="content-grid">
        <div class="card">
            <h3><span class="material-symbols-rounded">sync</span>Real-time & Offline-first</h3>
            <ul>
                <li><strong>Realtime sync:</strong> Laravel Event → Queue → Redis pub/sub → WebSocket broadcast.</li>
                <li><strong>Optimistic UI:</strong> Cập nhật UI trước, rollback khi API lỗi.</li>
                <li><strong>Offline-first:</strong> IndexedDB (web), SQLite (mobile), queue mutation khi offline.</li>
                <li><strong>Conflict handling:</strong> Versioning + timestamp, last-write-wins, soft-lock theo session.</li>
            </ul>
        </div>

        <div class="card">
            <h3><span class="material-symbols-rounded">dashboard</span>Views & Filters</h3>
            <ul>
                <li><strong>View modes:</strong> List, Kanban, Calendar, Timeline (Gantt), Table.</li>
                <li><strong>Search & filter:</strong> Full-text search, filter theo assignee/tag/status/due.</li>
                <li><strong>Custom fields:</strong> Text, number, date, select, checkbox – cấu hình theo workspace.</li>
                <li><strong>Bulk actions:</strong> Multi-select, bulk update, move, archive, delete.</li>
            </ul>
        </div>
    </div>

    <!-- TECH STACK -->
    <div class="tech-stack">
        <strong>Tech stack (Laravel-first):</strong>
        Backend: Laravel 10+, PHP 8.2, RESTful API, Eloquent ORM, Policy & Gate.<br>
        Database: PostgreSQL (core data), Redis (cache, queue, pub/sub).<br>
        Realtime: Laravel WebSockets / Pusher-compatible, Redis broadcaster.<br>
        Queue: Laravel Queue (Redis driver) cho notification, sync, automation.<br>
        Frontend: React + Redux Toolkit, React Query, WebSocket client.<br>
        Mobile: React Native, SQLite, background sync worker.
    </div>

    <!-- DATA FLOW -->
    <div class="diagram-flow">
        <strong>Data flow:</strong>
        User action <span class="arrow">→</span>
        Optimistic UI <span class="arrow">→</span>
        API request <span class="arrow">→</span>
        DB transaction <span class="arrow">→</span>
        Queue job <span class="arrow">→</span>
        Redis pub/sub <span class="arrow">→</span>
        WebSocket broadcast <span class="arrow">→</span>
        All clients sync
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