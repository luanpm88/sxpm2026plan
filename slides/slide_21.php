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
            Core Enabling Technologies & Academic Foundations
        </div>
        <div class="slide-subtitle">
            Công nghệ lõi hỗ trợ: AI, Distributed Systems, Data Science, Performance, Architecture, Security. Nền tảng lý thuyết từ computer science & mathematics.
        </div>

        <div class="tech-grid">
            <!-- AI & ML -->
            <div class="tech-card ai">
                <h3><span class="material-symbols-rounded">psychology</span>AI & Generative AI</h3>
                <ul>
                    <li><strong>LLMs:</strong> GPT-4, DeepSeek, Llama, Claude cho reasoning & generation.</li>
                    <li><strong>RAG (Retrieval-Augmented):</strong> Inject domain knowledge vào AI output.</li>
                    <li><strong>Fine-tuning:</strong> Domain-specific model, RLHF from user feedback.</li>
                    <li><strong>Agents & Orchestration:</strong> Multi-step planning, tool use, self-correction.</li>
                    <li><strong>Multimodal:</strong> Vision, voice, text, sensor fusion.</li>
                    <li><strong>Academic:</strong> Transformer, attention mechanism, prompt engineering theory.</li>
                </ul>
            </div>

            <!-- Distributed Systems -->
            <div class="tech-card distrib">
                <h3><span class="material-symbols-rounded">hub</span>Distributed Systems</h3>
                <ul>
                    <li><strong>Event-driven architecture:</strong> Message bus (Kafka, NATS), async processing.</li>
                    <li><strong>Microservices:</strong> Decoupled services, independent scaling, fault isolation.</li>
                    <li><strong>Consistency models:</strong> Eventual consistency, consensus (Raft, PBFT).</li>
                    <li><strong>Coordination:</strong> Distributed lock, leader election, service discovery.</li>
                    <li><strong>Academic:</strong> CAP theorem, Byzantine fault tolerance, consensus algorithms.</li>
                </ul>
            </div>

            <!-- Data Systems & Analytics -->
            <div class="tech-card data">
                <h3><span class="material-symbols-rounded">database</span>Data Systems & Analytics</h3>
                <ul>
                    <li><strong>Vector DB:</strong> Weaviate, Pinecone, PGVector for semantic search.</li>
                    <li><strong>Time-series:</strong> Prometheus, InfluxDB, TimescaleDB for metrics.</li>
                    <li><strong>Data warehouse:</strong> Snowflake, BigQuery for analytics, OLAP.</li>
                    <li><strong>Stream processing:</strong> Kafka Streams, Flink, Spark Streaming.</li>
                    <li><strong>Academic:</strong> Distributed query optimization, columnar storage, approximate query.</li>
                </ul>
            </div>

            <!-- Performance & Optimization -->
            <div class="tech-card perf">
                <h3><span class="material-symbols-rounded">speed</span>Performance & Optimization</h3>
                <ul>
                    <li><strong>Caching:</strong> Redis, Memcached, cache-aside/write-through strategies.</li>
                    <li><strong>Indexing:</strong> B-tree, hash, bitmap index, full-text search.</li>
                    <li><strong>Query optimization:</strong> EXPLAIN, cost-based planner, vectorization.</li>
                    <li><strong>Async/concurrency:</strong> Thread pools, async/await, lock-free structures.</li>
                    <li><strong>Academic:</strong> Complexity theory, algorithmic optimization, profiling techniques.</li>
                </ul>
            </div>

            <!-- System Architecture -->
            <div class="tech-card arch">
                <h3><span class="material-symbols-rounded">construction</span>System Architecture</h3>
                <ul>
                    <li><strong>Design patterns:</strong> CQRS, event sourcing, saga, outbox pattern.</li>
                    <li><strong>Workflow engines:</strong> DAG orchestration, state machines, saga compensation.</li>
                    <li><strong>GraphQL/REST API:</strong> Schema design, versioning, rate limiting.</li>
                    <li><strong>Observability:</strong> Distributed tracing (Jaeger), metrics (Prometheus), logs (ELK).</li>
                    <li><strong>Academic:</strong> Domain-driven design, clean architecture, SOLID principles.</li>
                </ul>
            </div>

            <!-- Security & Privacy -->
            <div class="tech-card security">
                <h3><span class="material-symbols-rounded">security</span>Security & Privacy</h3>
                <ul>
                    <li><strong>Cryptography:</strong> TLS, encryption at rest/transit, key management (Vault).</li>
                    <li><strong>Auth:</strong> OAuth2, OIDC, RBAC/ABAC, MFA.</li>
                    <li><strong>Data privacy:</strong> PII scrubbing, differential privacy, federated learning.</li>
                    <li><strong>Zero-trust:</strong> Micro-segmentation, service-to-service auth (mTLS).</li>
                    <li><strong>Academic:</strong> Formal verification, cryptographic protocols, threat modeling.</li>
                </ul>
            </div>
        </div>

        <div class="academic-foundation">
            <h3><span class="material-symbols-rounded">school</span>Mathematical & Computer Science Foundations</h3>
            <ul>
                <li><strong>Algorithms & Complexity:</strong> Big-O analysis, NP-completeness, approximation algorithms cho workflow optimization.</li>
                <li><strong>Graph Theory:</strong> DAG, topological sort, cycle detection, shortest path cho workflow scheduling.</li>
                <li><strong>Linear Algebra:</strong> Matrix operations, embeddings, dimensionality reduction cho AI & analytics.</li>
                <li><strong>Probability & Statistics:</strong> Bayesian inference, statistical testing, anomaly detection cho predictive automation.</li>
                <li><strong>Formal Methods:</strong> Model checking, theorem proving cho correctness verification (critical workflows).</li>
                <li><strong>Information Theory:</strong> Entropy, compression, error correction cho reliable data transmission.</li>
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
