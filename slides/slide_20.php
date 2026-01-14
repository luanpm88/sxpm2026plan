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
        .card h3 .material-symbols-rounded { color: #6b7280; font-size: 1.4rem; }
        .card ul { margin: 0; padding: 0; list-style: none; color: #4b5563; line-height: 1.6; font-size: 0.95rem; }
        .card ul li { padding: 5px 0; padding-left: 16px; position: relative; }
        .card ul li:before { content: '•'; position: absolute; left: 2px; color: #6b7280; font-weight: 700; }
        .content-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .tech-stack { background: #f9fafb; border: 2px solid #e5e7eb; border-radius: 10px; padding: 12px; font-size: 0.9rem; color: #374151; line-height: 1.5; }
        .tech-stack strong { color: #1f2937; display: block; margin-bottom: 6px; }
        .summary-box { background: #eff6ff; border: 2px solid #bfdbfe; border-radius: 10px; padding: 14px; margin-top: 10px; }
        .summary-box h4 { margin: 0 0 8px 0; font-size: 1.1rem; color: #1e40af; display: flex; align-items: center; gap: 6px; }
        .summary-box ul { margin: 0; padding: 0; list-style: none; color: #1e40af; font-size: 0.95rem; line-height: 1.6; }
        .summary-box ul li { padding: 4px 0; padding-left: 16px; position: relative; }
        .summary-box ul li:before { content: '✓'; position: absolute; left: 2px; color: #2563eb; font-weight: 700; }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">layers</span>
            SaaS Foundation & Infrastructure
        </div>
        <div class="slide-subtitle">
            Các dịch vụ nền tảng multi-tenant: identity, billing, notification, feature flag, secret vault, observability, CI/CD.
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">account_circle</span>Identity & Auth</h3>
                <ul>
                    <li><strong>Authentication:</strong> Email/password, OAuth2 (Google/Microsoft/GitHub), SSO (SAML/OIDC).</li>
                    <li><strong>Multi-tenant:</strong> Tenant context từ subdomain/header, org hierarchy (workspace → team → user).</li>
                    <li><strong>RBAC:</strong> Role-based với permission matrix (Owner/Admin/Member/Guest).</li>
                    <li><strong>ABAC:</strong> Attribute-based policy (plan tier, feature flag, resource quota).</li>
                    <li><strong>Session:</strong> JWT + refresh token, Redis session store, logout broadcast.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">payments</span>Billing & Metering</h3>
                <ul>
                    <li><strong>Plan management:</strong> Free/Pro/Enterprise tier, quota (tasks, automations, AI calls).</li>
                    <li><strong>Metering:</strong> Usage tracking (API calls, storage, automation runs), daily/monthly aggregation.</li>
                    <li><strong>Payment gateway:</strong> Stripe/Paddle integration, webhook handle payment events.</li>
                    <li><strong>Invoicing:</strong> Auto-generate invoice, email notification, payment reminder.</li>
                    <li><strong>Quota enforcement:</strong> Hard/soft limit, grace period, upgrade prompt.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">notifications</span>Notification & Messaging</h3>
                <ul>
                    <li><strong>Channels:</strong> In-app, email (SendGrid/SES), push (Firebase/APNs), Slack/Teams webhook.</li>
                    <li><strong>Preferences:</strong> Per-user preference (mute, frequency, channel).</li>
                    <li><strong>Template:</strong> Email/notification template với variable substitution.</li>
                    <li><strong>Batching:</strong> Group multiple notifications → digest email.</li>
                    <li><strong>Delivery tracking:</strong> Sent/opened/clicked metrics.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">toggle_on</span>Feature Flag & Rollout</h3>
                <ul>
                    <li><strong>Feature toggle:</strong> Enable/disable feature per tenant/user/percentage.</li>
                    <li><strong>Gradual rollout:</strong> 5% → 25% → 50% → 100% deployment.</li>
                    <li><strong>A/B testing:</strong> Variant A vs B, track conversion/retention.</li>
                    <li><strong>Kill switch:</strong> Emergency disable feature nếu có bug critical.</li>
                    <li><strong>SDK:</strong> Client/server SDK check flag real-time hoặc cache.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">key</span>Secret & Config Management</h3>
                <ul>
                    <li><strong>Secret vault:</strong> HashiCorp Vault/AWS Secrets Manager, encrypt at rest.</li>
                    <li><strong>API keys:</strong> Per-tenant API key cho connector (Slack, email, DB).</li>
                    <li><strong>Config store:</strong> Feature config, integration credentials, environment vars.</li>
                    <li><strong>Rotation:</strong> Auto-rotate secrets, notify trước khi expire.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">monitoring</span>Observability & DevOps</h3>
                <ul>
                    <li><strong>Logging:</strong> Structured JSON log (Winston/Pino), centralized (ELK/Loki).</li>
                    <li><strong>Metrics:</strong> Prometheus + Grafana, application/business metrics.</li>
                    <li><strong>Tracing:</strong> OpenTelemetry, Jaeger/Tempo, distributed trace.</li>
                    <li><strong>Alerting:</strong> PagerDuty/Opsgenie, Slack alert, runbook.</li>
                    <li><strong>CI/CD:</strong> GitHub Actions, Docker, Kubernetes, GitOps (ArgoCD).</li>
                </ul>
            </div>
        </div>

        <div class="tech-stack">
            <strong>Infrastructure stack đề xuất:</strong>
            Compute: Kubernetes (GKE/EKS/AKS) hoặc serverless (Cloud Run, Lambda). Database: PostgreSQL (RDS/Cloud SQL), Redis (ElastiCache/Memorystore). Storage: S3/GCS. Message bus: Kafka (MSK/Confluent) hoặc NATS. Monitoring: Prometheus, Grafana, Jaeger. Vault: HashiCorp Vault hoặc cloud KMS.
        </div>

        <div class="summary-box">
            <h4><span class="material-symbols-rounded">check_circle</span>Tổng kết kiến trúc kỹ thuật</h4>
            <ul>
                <li>Layer architecture rõ ràng: UI → API Gateway → App Services → Data → Infra.</li>
                <li>HKSpace Core: task/folder/project với real-time sync, offline-first.</li>
                <li>Automation Engine: DAG workflow, trigger/action không giới hạn, AI-powered prompt-to-code.</li>
                <li>AI Knowledge Platform: RAG, vector search, LLM routing, multi-tenant context.</li>
                <li>SaaS Foundation: identity, billing, notification, feature flag, secret vault, observability.</li>
                <li>Thiết kế theo best practice: modularity, event-driven, observability, security.</li>
            </ul>
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
