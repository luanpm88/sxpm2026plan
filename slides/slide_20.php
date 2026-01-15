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
                <h3><span class="material-symbols-rounded">account_circle</span>Identity & Authentication</h3>
                <ul>
                    <li><strong>JWT & OAuth2:</strong> Secure authentication cho multi-tenant users.</li>
                    <li><strong>SSO Integration:</strong> SAML support cho enterprise customers.</li>
                    <li><strong>RBAC:</strong> Role-based permissions cho teams và projects.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">payments</span>Billing & Subscription</h3>
                <ul>
                    <li><strong>Usage Metering:</strong> Track API calls, storage, automation runs.</li>
                    <li><strong>Subscription Tiers:</strong> Freemium, Pro, Enterprise plans.</li>
                    <li><strong>Payment Integration:</strong> Stripe webhooks, auto-invoicing.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">notifications</span>Notification & Messaging</h3>
                <ul>
                    <li><strong>Real-time Updates:</strong> WebSocket cho task changes, team notifications.</li>
                    <li><strong>Email & Push:</strong> SMTP integration, FCM/APNs cho mobile alerts.</li>
                    <li><strong>Webhook Events:</strong> Automation triggers, external integrations.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">toggle_on</span>Feature Flags</h3>
                <ul>
                    <li><strong>Gradual Rollout:</strong> A/B testing cho new features.</li>
                    <li><strong>User Segmentation:</strong> Enable features per tenant hoặc user group.</li>
                    <li><strong>Safe Deployment:</strong> Rollback capability, monitoring.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">key</span>Secret Management</h3>
                <ul>
                    <li><strong>API Keys:</strong> Secure storage cho integrations (Slack, GitHub, etc.).</li>
                    <li><strong>Encryption:</strong> Vault/KMS cho sensitive credentials.</li>
                    <li><strong>Auto-rotation:</strong> Automatic key refresh cho security.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">monitoring</span>Observability & DevOps</h3>
                <ul>
                    <li><strong>Logging:</strong> Structured logs cho debugging automation workflows.</li>
                    <li><strong>Metrics:</strong> Prometheus monitoring cho performance tracking.</li>
                    <li><strong>CI/CD:</strong> GitHub Actions, Docker, Kubernetes deployment.</li>
                </ul>
            </div>
        </div>

        <div class="tech-stack">
            <strong>Infrastructure stack đề xuất:</strong>
            Compute: Kubernetes (GKE/EKS/AKS) hoặc serverless (Cloud Run, Lambda). Database: MySQL (RDS/Cloud SQL), Redis (ElastiCache/Memorystore). Storage: S3/GCS. Message bus: Kafka (MSK/Confluent) hoặc NATS. Monitoring: Prometheus, Grafana, Jaeger. Vault: HashiCorp Vault hoặc cloud KMS.
        </div>

        <div class="summary-box">
            <h4><span class="material-symbols-rounded">check_circle</span>HKSpace Platform Foundation</h4>
            <ul>
                <li>Multi-tenant architecture với tenant isolation và RBAC permissions.</li>
                <li>HKSpace Core: Task management, folders, projects, teams với real-time collaboration.</li>
                <li>Automation Engine: DAG workflows, triggers, actions cho business process automation.</li>
                <li>AI Platform: LLM integration, RAG, knowledge base, prompt-to-code capabilities.</li>
                <li>SaaS Services: Billing, notifications, webhooks, feature flags, secret management.</li>
                <li>DevOps: CI/CD pipelines, observability, monitoring cho reliable operations.</li>
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
