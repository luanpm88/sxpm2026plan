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
        .timeline { background: #ffffff; border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
        .timeline-row { display: grid; grid-template-columns: 120px 1fr; gap: 16px; padding: 12px 0; border-bottom: 1px solid #f3f4f6; }
        .timeline-row:last-child { border-bottom: none; }
        .timeline-year { font-size: 1.3rem; font-weight: 800; color: #2563eb; display: flex; align-items: center; gap: 6px; }
        .timeline-content h4 { margin: 0 0 6px 0; font-size: 1.05rem; color: #111827; font-weight: 700; }
        .timeline-content ul { margin: 0; padding: 0; list-style: none; color: #4b5563; font-size: 0.92rem; line-height: 1.5; }
        .timeline-content ul li { padding: 3px 0; padding-left: 14px; position: relative; }
        .timeline-content ul li:before { content: '▸'; position: absolute; left: 2px; color: #3b82f6; font-weight: 700; }
        .vision-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 10px; }
        .vision-card { background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); border: 2px solid #93c5fd; border-radius: 12px; padding: 14px; }
        .vision-card h3 { margin: 0 0 8px 0; font-size: 1.1rem; color: #1e40af; display: flex; align-items: center; gap: 6px; }
        .vision-card h3 .material-symbols-rounded { font-size: 1.3rem; }
        .vision-card ul { margin: 0; padding: 0; list-style: none; color: #1e40af; font-size: 0.92rem; line-height: 1.5; }
        .vision-card ul li { padding: 3px 0; padding-left: 14px; position: relative; }
        .vision-card ul li:before { content: '✦'; position: absolute; left: 2px; color: #2563eb; }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">timeline</span>
            Vision 10 năm: Technology Evolution (2026-2036)
        </div>
        <div class="slide-subtitle">
            Lộ trình phát triển công nghệ dài hạn: từ SaaS platform hiện tại → hyper-automation + AI integration gradual.
        </div>

        <div class="timeline">
            <div class="timeline-row">
                <div class="timeline-year"><span class="material-symbols-rounded">looks_one</span>2026-2027</div>
                <div class="timeline-content">
                    <h4>Phase 1: Complete Platform & Core Automation (Execute Foundation)</h4>
                    <ul>
                        <li><strong>HKSpace core complete:</strong> Task/folder/project hierarchy, team collaboration, real-time sync (Web + Mobile).</li>
                        <li><strong>SaaS foundation production:</strong> Multi-tenant, billing, RBAC, observability, backup/restore, SLA guaranteed.</li>
                        <li><strong>Automation engine deployed:</strong> DAG workflow engine với 30+ pre-built SOP templates (invoice, HR, support, sales).</li>
                        <li><strong>Visual no-code builder:</strong> Drag-drop workflow nodes, condition logic, action mapping (không cần code).</li>
                        <li><strong>Core integrations:</strong> Email, SMS, Slack, Teams, webhook, basic database query, file operations.</li>
                        <li><strong>Target: 500-1000 paying customers,</strong> retention >70%, ARPU 500k-1.5tr/tháng. Product-market fit achieved.</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-year"><span class="material-symbols-rounded">looks_two</span>2028-2029</div>
                <div class="timeline-content">
                    <h4>Phase 2: Automation Expansion & AI Enhancement (Gradual)</h4>
                    <ul>
                        <li><strong>Extended action library:</strong> 50+ actions (PDF generation, spreadsheet ops, image processing, API chaining, DB transactions).</li>
                        <li><strong>SOP enrichment:</strong> Workflow templates cho phức tạp hơn (purchase-to-pay, order-to-cash, case management).</li>
                        <li><strong>AI Knowledge Platform integration:</strong> Workflows can retrieve context từ knowledge base, suggest condition/action based on pattern.</li>
                        <li><strong>Workflow analytics:</strong> Dashboard show execution metrics, bottleneck detection, optimization suggestion (still need human approval).</li>
                        <li><strong>Custom connector framework:</strong> 3rd-party developers build adapter cho proprietary system.</li>
                        <li><strong>Target: 1500-2500 customers,</strong> ASEAN expansion (Thailand, Vietnam, Indonesia), vertical market focus (accounting, HR, manufacturing).</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-year"><span class="material-symbols-rounded">looks_3</span>2030-2032</div>
                <div class="timeline-content">
                    <h4>Phase 3: Intelligent Automation & Agent Workflows</h4>
                    <ul>
                        <li><strong>Multi-step agent workflows:</strong> Agents handle complex logic, validation, decision-making dengan AI reasoning (nhưng human review critical step).</li>
                        <li><strong>Predictive automation:</strong> AI analyze historical data → predict business event → proactive trigger workflow (low-confidence suggest only, high-confidence auto-execute).</li>
                        <li><strong>Workflow self-optimization:</strong> Continuous learning từ execution logs, auto-tune parameters, suggest variant improve performance.</li>
                        <li><strong>Cross-org workflow federation:</strong> Companies share workflow (supplier order, customer delivery notification, B2B integration).</li>
                        <li><strong>Voice-enabled automation:</strong> Voice command trigger workflow, conversational status check (Whisper + LLM).</li>
                        <li><strong>Target: 3000-5000 customers,</strong> enterprise tier (SSO, on-premise, custom SLA), $5-10M ARR.</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-year"><span class="material-symbols-rounded">looks_4</span>2032-2036</div>
                <div class="timeline-content">
                    <h4>Phase 4: Autonomous Enterprise Platform</h4>
                    <ul>
                        <li><strong>Hyper-automation:</strong> 80%+ routine process fully autonomous, AI handle exception, human review only critical decisions.</li>
                        <li><strong>Multimodal AI integration:</strong> Vision (invoice scanning), voice (command), text (email), sensor data all feed automation.</li>
                        <li><strong>Regional operating system:</strong> HKSpace = de facto business process standard cho Southeast Asia (like SAP/Salesforce globally).</li>
                        <li><strong>Edge AI capability:</strong> Local model inference for latency-sensitive process, on-device learning, privacy-preserved federation.</li>
                        <li><strong>Marketplace ecosystem:</strong> Pre-built workflow templates, AI agents, data enrichment service (community + enterprise vendors).</li>
                        <li><strong>Vision: 5000+ customers,</strong> $20-50M ARR, become essential infrastructure company Southeast Asia.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="vision-grid">
            <div class="vision-card">
                <h3><span class="material-symbols-rounded">insights</span>Realistic Execution Strategy</h3>
                <ul>
                    <li><strong>2026-27:</strong> Execute flawlessly. Complete HKSpace, SaaS solid, automation engine stable. Focus on 500-1000 customers.</li>
                    <li><strong>2028-29:</strong> Expand carefully. More actions, more templates, start AI enhancement (gradual, proven ROI only).</li>
                    <li><strong>2030-32:</strong> Scale with confidence. Agent workflow mature, predictive decent accuracy, cross-org possible.</li>
                    <li><strong>2032+:</strong> Market leadership. Platform ecosystem, regional standard, hard to beat (data lock-in, workflow inertia, domain expertise).</li>
                </ul>
            </div>

            <div class="vision-card">
                <h3><span class="material-symbols-rounded">explore</span>Key Risks & Mitigation</h3>
                <ul>
                    <li><strong>Execution risk (high):</strong> Shipping quality product hard, over-engineer or under-deliver → hire strong team.</li>
                    <li><strong>Competition:</strong> Big Tech might enter → move fast, build moat (domain data), build community.</li>
                    <li><strong>Customer adoption:</strong> SME fear complexity → education, support, freemium model, migration help.</li>
                    <li><strong>Regulation:</strong> Data privacy law (GDPR), automation liability → compliance team, transparent audit log.</li>
                </ul>
            </div>
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
