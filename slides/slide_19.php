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
        .card h3 .material-symbols-rounded { color: #8b5cf6; font-size: 1.4rem; }
        .card ul { margin: 0; padding: 0; list-style: none; color: #4b5563; line-height: 1.6; font-size: 0.95rem; }
        .card ul li { padding: 5px 0; padding-left: 16px; position: relative; }
        .card ul li:before { content: '•'; position: absolute; left: 2px; color: #8b5cf6; font-weight: 700; }
        .content-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .tech-stack { background: #faf5ff; border: 2px solid #e9d5ff; border-radius: 10px; padding: 12px; font-size: 0.9rem; color: #581c87; line-height: 1.5; }
        .tech-stack strong { color: #581c87; display: block; margin-bottom: 6px; }
        .diagram-box { background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; padding: 12px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; font-size: 0.88rem; }
        .diagram-box .item { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 8px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); }
        .diagram-box .item strong { display: block; margin-bottom: 4px; color: #111827; }
        .flow-line { background: #f0f9ff; border: 2px solid #bfdbfe; border-radius: 8px; padding: 10px; font-size: 0.88rem; color: #1e40af; text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">psychology</span>
            AI Knowledge Platform
        </div>
        <div class="slide-subtitle">
            Nền tảng tri thức mở với RAG, vector search, LLM routing, multi-tenant context – hỗ trợ Q&A, chatbot, prompt-to-automation.
        </div>

        <div class="card">
            <h3><span class="material-symbols-rounded">input</span>Knowledge Ingestion Pipeline</h3>
            <div class="diagram-box">
                <div class="item"><strong>Connectors</strong>Files (PDF/Doc/Txt), databases (MySQL/Postgres), APIs (REST/GraphQL), web crawler, email.</div>
                <div class="item"><strong>Extraction</strong>Text extraction, OCR (Tesseract), table parsing, metadata (author, date, tags).</div>
                <div class="item"><strong>Chunking</strong>Semantic chunking (sentence/paragraph), overlap 10-20%, max 512-1024 tokens per chunk.</div>
                <div class="item"><strong>Embedding</strong>OpenAI text-embedding-3, Sentence-BERT, multilingual model (Vietnamese support).</div>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">database</span>Vector DB & Search</h3>
                <ul>
                    <li><strong>Vector DB:</strong> Weaviate, Pinecone, Qdrant, hoặc PGVector (PostgreSQL extension).</li>
                    <li><strong>Hybrid search:</strong> Semantic (vector) + keyword (BM25), re-rank với cross-encoder.</li>
                    <li><strong>Metadata filter:</strong> Filter by tenant, source, date, tag trước khi vector search.</li>
                    <li><strong>Multi-tenant isolation:</strong> Tenant ID trong metadata, query filter enforce strict.</li>
                    <li><strong>Versioning:</strong> Version chunks khi document update, hỗ trợ time-travel query.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">smart_toy</span>LLM Routing & Serving</h3>
                <ul>
                    <li><strong>LLM providers:</strong> OpenAI (GPT-4), DeepSeek, Anthropic Claude, local model (Llama).</li>
                    <li><strong>Router logic:</strong> Route by cost/speed/capability, fallback khi provider down.</li>
                    <li><strong>Prompt hub:</strong> Version control prompt template, A/B test, evaluate output quality.</li>
                    <li><strong>Function calling:</strong> LLM gọi function (search DB, call API, trigger automation).</li>
                    <li><strong>Streaming response:</strong> SSE/WebSocket stream token, improve UX.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h3><span class="material-symbols-rounded">build_circle</span>RAG (Retrieval-Augmented Generation)</h3>
                <ul>
                    <li><strong>Query expansion:</strong> Rewrite/expand user query để tăng recall.</li>
                    <li><strong>Retrieval:</strong> Top-K chunks từ vector DB + keyword search.</li>
                    <li><strong>Context assembly:</strong> Rank chunks, inject vào prompt với token budget.</li>
                    <li><strong>Response generation:</strong> LLM sinh câu trả lời dựa context + query.</li>
                    <li><strong>Citation & source:</strong> Trả về source document/chunk reference.</li>
                    <li><strong>Feedback loop:</strong> User thumbs up/down → fine-tune retrieval/ranking.</li>
                </ul>
            </div>

            <div class="card">
                <h3><span class="material-symbols-rounded">security</span>Policy & Guardrails</h3>
                <ul>
                    <li><strong>RBAC/ABAC:</strong> Kiểm tra user có quyền truy cập knowledge source không.</li>
                    <li><strong>PII scrubbing:</strong> Detect & mask PII (email, phone, SSN) trước khi embed.</li>
                    <li><strong>Toxicity filter:</strong> Detect toxic/harmful content, block hoặc warn.</li>
                    <li><strong>Cost control:</strong> Token budget per user/tenant, rate limit, quota.</li>
                    <li><strong>Audit log:</strong> Log mọi query, response, cost, latency.</li>
                </ul>
            </div>
        </div>

        <div class="tech-stack">
            <strong>Tech stack đề xuất:</strong>
            Ingestion: Python (Langchain/LlamaIndex), Celery worker. Vector DB: Weaviate/PGVector. LLM: OpenAI/DeepSeek API, Ollama (local). Backend: Node.js/Python FastAPI. Observability: Langfuse/LangSmith (LLM tracing), Prometheus.
        </div>

        <div class="flow-line">
            <strong>RAG Flow:</strong> User query → Query expansion → Vector search + keyword → Re-rank top-K → Inject context → LLM generate → Return response + citations
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
