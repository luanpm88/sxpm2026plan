<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-container { display: flex; flex-direction: column; gap: 12px; }
        .slide-title { display: flex; align-items: center; gap: 10px; font-size: 1.8rem; font-weight: 800; color: #1f2937; }
        .slide-subtitle { font-size: 1rem; color: #6b7280; margin-bottom: 8px; }
        .tech-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
        .tech-card { background: #ffffff; border: 2px solid #e5e7eb; border-radius: 12px; padding: 14px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
        .tech-card h3 { margin: 0 0 8px 0; font-size: 1.15rem; color: #111827; display: flex; align-items: center; gap: 8px; font-weight: 700; }
        .tech-card h3 .material-symbols-rounded { font-size: 1.4rem; }
        .tech-card.ai h3 .material-symbols-rounded { color: #ec4899; }
        .tech-card.distrib h3 .material-symbols-rounded { color: #3b82f6; }
        .tech-card.data h3 .material-symbols-rounded { color: #10b981; }
        .tech-card.perf h3 .material-symbols-rounded { color: #f59e0b; }
        .tech-card.arch h3 .material-symbols-rounded { color: #8b5cf6; }
        .tech-card.security h3 .material-symbols-rounded { color: #ef4444; }
        .tech-card ul { margin: 0; padding: 0; list-style: none; color: #4b5563; font-size: 0.92rem; line-height: 1.5; }
        .tech-card ul li { padding: 3px 0; padding-left: 14px; position: relative; }
        .tech-card.ai ul li:before { content: '•'; position: absolute; left: 2px; color: #ec4899; font-weight: 700; }
        .tech-card.distrib ul li:before { content: '•'; position: absolute; left: 2px; color: #3b82f6; font-weight: 700; }
        .tech-card.data ul li:before { content: '•'; position: absolute; left: 2px; color: #10b981; font-weight: 700; }
        .tech-card.perf ul li:before { content: '•'; position: absolute; left: 2px; color: #f59e0b; font-weight: 700; }
        .tech-card.arch ul li:before { content: '•'; position: absolute; left: 2px; color: #8b5cf6; font-weight: 700; }
        .tech-card.security ul li:before { content: '•'; position: absolute; left: 2px; color: #ef4444; font-weight: 700; }
        .academic-foundation { background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border: 2px solid #7dd3fc; border-radius: 12px; padding: 14px; margin-top: 12px; }
        .academic-foundation h3 { margin: 0 0 8px 0; font-size: 1.1rem; color: #0369a1; display: flex; align-items: center; gap: 8px; }
        .academic-foundation h3 .material-symbols-rounded { font-size: 1.3rem; }
        .academic-foundation ul { margin: 0; padding: 0; list-style: none; color: #0369a1; font-size: 0.92rem; line-height: 1.5; }
        .academic-foundation ul li { padding: 3px 0; padding-left: 24px; position: relative; }
        .academic-foundation ul li:before { content: '◆'; position: absolute; left: 2px; color: #0284c7; }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">settings_input_component</span>
            Core Enabling Technologies
        </div>
        <div class="slide-subtitle">
            Công nghệ lõi hỗ trợ: Core features, Automation Engine, AI Platform, và infrastructure.
        </div>

        <div class="tech-grid">
            <!-- HKSpace Core -->
            <div class="tech-card ai">
                <h3><span class="material-symbols-rounded">checklist</span>HKSpace Core</h3>
                <ul>
                    <li><strong>Task Management:</strong> Todo, folders, projects với real-time sync.</li>
                    <li><strong>Team Collaboration:</strong> Comments, mentions, team workspaces.</li>
                    <li><strong>Offline-first:</strong> Local storage, sync khi online.</li>
                </ul>
            </div>

            <!-- Automation Engine -->
            <div class="tech-card distrib">
                <h3><span class="material-symbols-rounded">account_tree</span>Automation Engine</h3>
                <ul>
                    <li><strong>DAG Workflows:</strong> Directed acyclic graphs cho complex automation.</li>
                    <li><strong>Triggers & Actions:</strong> Event-driven execution, custom actions.</li>
                    <li><strong>Scheduler:</strong> Cron jobs, time-based automation.</li>
                </ul>
            </div>

            <!-- AI Platform -->
            <div class="tech-card data">
                <h3><span class="material-symbols-rounded">psychology</span>AI Platform</h3>
                <ul>
                    <li><strong>LLM Router:</strong> Multi-model support (GPT, Claude, local models).</li>
                    <li><strong>RAG System:</strong> Knowledge base với vector search.</li>
                    <li><strong>Prompt-to-Code:</strong> AI-generated automation scripts.</li>
                </ul>
            </div>

            <!-- Data Infrastructure -->
            <div class="tech-card perf">
                <h3><span class="material-symbols-rounded">database</span>Data Infrastructure</h3>
                <ul>
                    <li><strong>MySQL:</strong> Primary DB cho tasks, users, automation data.</li>
                    <li><strong>Vector DB:</strong> Embeddings cho semantic search (Weaviate/MySQL Vector).</li>
                    <li><strong>Redis:</strong> Cache, sessions, pub/sub messaging.</li>
                </ul>
            </div>

            <!-- Message Bus -->
            <div class="tech-card arch">
                <h3><span class="material-symbols-rounded">hub</span>Message Bus & Streaming</h3>
                <ul>
                    <li><strong>Kafka/NATS:</strong> Event streaming cho real-time updates.</li>
                    <li><strong>Async Processing:</strong> Decoupled services, fault tolerance.</li>
                    <li><strong>Webhooks:</strong> External integrations, API callbacks.</li>
                </ul>
            </div>

            <!-- Security & Privacy -->
            <div class="tech-card security">
                <h3><span class="material-symbols-rounded">security</span>Security & Privacy</h3>
                <ul>
                    <li><strong>Encryption:</strong> End-to-end encryption cho user data.</li>
                    <li><strong>Access Control:</strong> RBAC, multi-tenant isolation.</li>
                    <li><strong>Compliance:</strong> GDPR, data privacy standards.</li>
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
