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
        .card { background: #ffffff; border: 2px solid #e5e7eb; border-radius: 12px; padding: 14px 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
        .card h3 { margin: 0 0 10px 0; font-size: 1.15rem; color: #111827; display: flex; align-items: center; gap: 8px; }
        .card h3 .material-symbols-rounded { color: #f59e0b; font-size: 1.4rem; }
        .card ul { margin: 0; padding: 0; list-style: none; color: #4b5563; line-height: 1.6; font-size: 0.95rem; }
        .card ul li { padding: 5px 0; padding-left: 16px; position: relative; }
        .card ul li:before { content: '•'; position: absolute; left: 2px; color: #f59e0b; font-weight: 700; }
        .content-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .tech-stack { background: #fffbeb; border: 2px solid #fde68a; border-radius: 10px; padding: 12px; font-size: 0.9rem; color: #78350f; line-height: 1.5; }
        .tech-stack strong { color: #78350f; display: block; margin-bottom: 6px; }
        .diagram-box { background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; padding: 12px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; font-size: 0.88rem; }
        .diagram-box .item { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 8px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); }
        .diagram-box .item strong { display: block; margin-bottom: 4px; color: #111827; }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">account_tree</span>
            Automation Engine Architecture
        </div>
        <div class="slide-subtitle">
            DAG-based workflow engine với trigger/condition/action không giới hạn, hỗ trợ nhánh, retry, saga compensation.
        </div>

        <!-- CORE ARCHITECTURE -->
        <div class="card">
            <h3><span class="material-symbols-rounded">schema</span>Kiến trúc DAG Workflow</h3>
            <div class="diagram-box">
                <div class="item"><strong>Trigger</strong>Webhook, schedule (cron), DB event, app event, voice command, AI prompt.</div>
                <div class="item"><strong>Condition</strong>If/else logic, JSON path query, RBAC check, rate limit, dedupe.</div>
                <div class="item"><strong>Action</strong>Task CRUD, folder ops, email/Slack/Teams, HTTP call, script exec.</div>
                <div class="item"><strong>Flow Control</strong>Sequential, parallel fork/join, wait all/any, timeout, error handling.</div>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">settings_suggest</span>Execution Engine</h3>
                <ul>
                    <li><strong>Worker pool:</strong> Horizontal scaling với task queue (BullMQ/Redis).</li>
                    <li><strong>Orchestrator:</strong> State machine tracking, lưu state trong DB.</li>
                    <li><strong>Retry & idempotency:</strong> Exponential backoff, idempotency key, DLQ cho failed runs.</li>
                    <li><strong>Saga compensation:</strong> Rollback chain khi bước fail, undo actions theo reverse order.</li>
                    <li><strong>Rate limiting:</strong> Per-tenant quota, circuit breaker, throttle.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">build</span>Builder & Template</h3>
                <ul>
                    <li><strong>Visual builder:</strong> Drag-drop nodes, connect edges, configure properties.</li>
                    <li><strong>Template library:</strong> Pre-built: onboarding, SLA reminder, daily standup, invoice.</li>
                    <li><strong>Import/export:</strong> JSON/YAML format, share template, marketplace.</li>
                    <li><strong>Test mode:</strong> Dry-run sandbox, mock data, debug trace.</li>
                    <li><strong>Versioning:</strong> Git-like version, diff, rollback, branch/merge.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">psychology</span>AI Integration</h3>
                <ul>
                    <li><strong>Prompt-to-workflow:</strong> LLM sinh DSL graph từ câu lệnh tự nhiên.</li>
                    <li><strong>Function calling:</strong> LLM map ý định → action nodes (create task, send email).</li>
                    <li><strong>Validation:</strong> Schema check, cost estimate, human approval cho sensitive action.</li>
                    <li><strong>Knowledge injection:</strong> Context từ AI Knowledge Platform để hiểu thuật ngữ nghiệp vụ.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">monitoring</span>Observability</h3>
                <ul>
                    <li><strong>Run logs:</strong> Chi tiết từng step, input/output, execution trace.</li>
                    <li><strong>Tracing:</strong> OpenTelemetry span cho mỗi node, trace ID end-to-end.</li>
                    <li><strong>Metrics:</strong> Success rate, latency, error count, quota usage.</li>
                    <li><strong>Audit trail:</strong> Who created/edited/ran automation, timestamp, diff.</li>
                </ul>
            </div>
        </div>

        <div class="tech-stack">
            <strong>Tech stack đề xuất:</strong>
            Workflow DSL: JSON/YAML schema, validation với JSON Schema. Execution: Node.js worker pool hoặc Temporal/Cadence. Queue: BullMQ (Redis), RabbitMQ, Kafka. Storage: PostgreSQL (workflow + state), S3 (logs). Observability: OpenTelemetry, Jaeger, Prometheus.
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
