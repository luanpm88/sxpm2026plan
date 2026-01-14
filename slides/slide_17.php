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
            Chi tiết kiến trúc core HKSpace: quản lý task/folder/project, team collaboration, real-time sync, offline-first.
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">task_alt</span>Task Management Core</h3>
                <ul>
                    <li><strong>Entity model:</strong> Task, Folder, Project, Workspace, Team. Quan hệ hierarchical + graph.</li>
                    <li><strong>Task attributes:</strong> Title, description, assignee(s), due date, priority, tags, status, dependencies.</li>
                    <li><strong>Nested folders:</strong> Unlimited depth, move/copy/archive, permissions per folder.</li>
                    <li><strong>Dependencies & blocking:</strong> Task A blocks Task B, tự động update status chain.</li>
                    <li><strong>Recurring tasks:</strong> Cron-like schedule, template spawn mỗi cycle.</li>
                    <li><strong>Comments & attachments:</strong> Threaded comment, @mention, file upload (S3), emoji reaction.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">group</span>Team & Collaboration</h3>
                <ul>
                    <li><strong>Workspace:</strong> Multi-workspace per user, switch context, shared/private.</li>
                    <li><strong>Team roles:</strong> Owner, Admin, Member, Guest với permission granular.</li>
                    <li><strong>Activity feed:</strong> Real-time stream mọi thay đổi (task created, assigned, commented).</li>
                    <li><strong>@mention & notification:</strong> In-app, email, push notification (mobile).</li>
                    <li><strong>Presence & typing indicator:</strong> WebSocket live presence, ai đang xem task nào.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">sync</span>Real-time & Offline-first</h3>
                <ul>
                    <li><strong>WebSocket sync:</strong> Server push update, optimistic UI, conflict resolution (CRDT/OT).</li>
                    <li><strong>Offline-first:</strong> Local SQLite (mobile), IndexedDB (web), queue mutations khi offline.</li>
                    <li><strong>Sync strategy:</strong> Delta sync chỉ gửi thay đổi, version vector để detect conflict.</li>
                    <li><strong>Conflict resolution:</strong> Last-write-wins hoặc merge semantic (operational transform).</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">dashboard</span>Views & Filters</h3>
                <ul>
                    <li><strong>View modes:</strong> List, Kanban board, Calendar, Timeline (Gantt), Table.</li>
                    <li><strong>Filter & search:</strong> Full-text search, filter by assignee/tag/due/status, saved filters.</li>
                    <li><strong>Custom fields:</strong> Dropdown, number, date, text, checkbox – configurable per workspace.</li>
                    <li><strong>Bulk operations:</strong> Multi-select tasks, bulk edit, bulk move, bulk delete.</li>
                </ul>
            </div>
        </div>

        <div class="tech-stack">
            <strong>Tech stack:</strong>
            Backend: Node.js/NestJS hoặc Go, PostgreSQL (tasks, projects), Redis (cache, pub/sub). Frontend: React/Redux Toolkit, React Query, WebSocket client. Mobile: React Native, SQLite, background sync worker.
        </div>

        <div class="diagram-flow">
            <strong>Data flow:</strong> User action <span class="arrow">→</span> Optimistic UI update <span class="arrow">→</span> API call <span class="arrow">→</span> DB write <span class="arrow">→</span> Pub event <span class="arrow">→</span> WebSocket broadcast <span class="arrow">→</span> All clients sync
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
