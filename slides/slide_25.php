<?php 
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-container { 
            display: flex; 
            flex-direction: column; 
            gap: 16px;
            padding: 60px 80px;
        }
        
        .slide-title { 
            display: flex; 
            align-items: center; 
            gap: 10px; 
            font-size: 1.8rem; 
            font-weight: 800; 
            color: #1f2937; 
        }
        
        .slide-subtitle { 
            font-size: 1rem; 
            color: #6b7280; 
            margin-bottom: 8px;
        }

        /* Architecture Diagram */
        .diagram { 
            background: #fafbfc; 
            border: 2px solid #e5e7eb; 
            border-radius: 14px; 
            padding: 20px; 
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        
        .area { 
            border-radius: 12px; 
            padding: 14px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
            border: 2px solid;
        }
        
        /* Soft colors per layer */
        .area.kb { 
            border-color: #b3d9ff; 
            background: linear-gradient(135deg, #f0f8ff 0%, #e6f2ff 100%); 
        }
        
        .area.spec { 
            border-color: #b8e6b8; 
            background: linear-gradient(135deg, #f0fdf4 0%, #e8f5e9 100%); 
        }
        
        .area.engines { 
            border-color: #ffd9a3; 
            background: linear-gradient(135deg, #fffbf0 0%, #fff4e6 100%); 
        }
        
        .area.app { 
            border-color: #f5c2e7; 
            background: linear-gradient(135deg, #fff5fb 0%, #ffe6f7 100%); 
        }
        
        .area-header { 
            display: flex; 
            align-items: center; 
            gap: 10px; 
            font-weight: 800; 
            color: #111827; 
            margin-bottom: 10px;
            font-size: 1.05rem;
        }
        
        .area-header .material-symbols-rounded { 
            font-size: 1.5rem; 
        }
        
        .area-grid { 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 10px; 
        }
        
        .box { 
            background: rgba(255, 255, 255, 0.85); 
            border: 2px solid #e5e7eb; 
            border-radius: 10px; 
            padding: 12px; 
            display: flex; 
            flex-direction: column;
            gap: 8px;
        }
        
        .box-header {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            color: #374151;
            font-size: 0.95rem;
        }
        
        .box .material-symbols-rounded { 
            font-size: 1.2rem; 
            color: #64748b; 
        }
        
        .chips { 
            display: flex; 
            flex-wrap: wrap; 
            gap: 6px; 
        }
        
        .chip { 
            display: inline-flex; 
            align-items: center; 
            border: 1px solid #d1d5db; 
            border-radius: 999px; 
            padding: 5px 11px; 
            background: #ffffff; 
            font-weight: 600; 
            color: #374151; 
            font-size: 0.82rem;
            box-shadow: 0 1px 2px rgba(0,0,0,0.04);
        }

        /* Professional System Flow Chart */
        .flow-section {
            margin-top: 16px;
        }
        
        .flow-container { 
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%); 
            border: 2px solid #e5e7eb; 
            border-radius: 14px; 
            padding: 32px 60px; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            gap: 0;
            position: relative;
        }
        
        .flow-step { 
            display: inline-flex; 
            align-items: center; 
            justify-content: center;
            gap: 12px; 
            padding: 18px 28px; 
            border: 2.5px solid #cbd5e1; 
            border-radius: 10px; 
            background: #ffffff;
            font-size: 1.05rem;
            font-weight: 700;
            color: #1f2937;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08), 0 2px 4px rgba(0,0,0,0.04);
            position: relative;
            text-align: center;
            min-width: 480px;
            max-width: 650px;
            transition: all 0.3s ease;
        }
        
        .flow-step:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.12), 0 3px 6px rgba(0,0,0,0.06);
            border-color: #0ea5e9;
        }
        
        .flow-step .material-symbols-rounded {
            font-size: 1.7rem;
            color: #0ea5e9;
            flex-shrink: 0;
        }
        
        .flow-arrow { 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            padding: 10px 0;
            position: relative;
            width: 3px;
            height: 32px;
            background: linear-gradient(180deg, #94a3b8 0%, #64748b 100%);
            margin: 6px 0;
        }
        
        .flow-arrow::before {
            content: '';
            position: absolute;
            bottom: -6px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 10px solid #64748b;
        }
        
        .flow-arrow .material-symbols-rounded { 
            display: none;
        }

        /* Full-width Examples and References */
        .full-row-section {
            margin-top: 16px;
        }
        
        .example-panel { 
            background: #ffffff; 
            border: 2px solid #e5e7eb; 
            border-radius: 12px; 
            padding: 16px 20px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
        }
        
        .example-panel h3 { 
            margin: 0 0 10px 0; 
            font-size: 1.15rem; 
            color: #111827; 
            display: flex; 
            align-items: center; 
            gap: 10px;
            font-weight: 800;
        }
        
        .example-panel h3 .material-symbols-rounded { 
            color: #0ea5e9; 
            font-size: 1.4rem;
        }
        
        .example-panel ul { 
            margin: 0; 
            padding-left: 0; 
            list-style: none;
            color: #374151; 
            font-size: 0.95rem; 
        }
        
        .example-panel ul li {
            margin-bottom: 16px;
            padding: 12px;
            background: #f9fafb;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }
        
        .query-text {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: block;
        }
        
        .flow-chain {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }
        
        .flow-box {
            display: inline-flex;
            align-items: center;
            padding: 6px 12px;
            background: #ffffff;
            border: 2px solid #cbd5e1;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.88rem;
            color: #334155;
        }
        
        .flow-box.spec {
            border-color: #86efac;
            background: #f0fdf4;
            color: #166534;
        }
        
        .flow-box.engine {
            border-color: #fbbf24;
            background: #fffbeb;
            color: #92400e;
        }
        
        .flow-box.action {
            border-color: #bae6fd;
            background: #f0f9ff;
            color: #075985;
        }
        
        .flow-sep {
            color: #94a3b8;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .refs-panel { 
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); 
            border: 2px solid #e5e7eb; 
            border-radius: 12px; 
            padding: 16px 20px; 
            margin-top: 14px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
        }
        
        .refs-panel h3 { 
            margin: 0 0 10px 0; 
            font-size: 1.1rem; 
            color: #0f172a; 
            display: flex; 
            align-items: center; 
            gap: 10px;
            font-weight: 800;
        }
        
        .refs-panel h3 .material-symbols-rounded {
            color: #8b5cf6;
            font-size: 1.4rem;
        }
        
        .refs-panel ul { 
            margin: 0; 
            padding-left: 20px; 
            color: #334155; 
            line-height: 1.7; 
            font-size: 0.92rem; 
        }
        
        .refs-panel ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">library_books</span>
            AI Knowledge Base Platform
        </div>
        <div class="slide-subtitle">
            Nền tảng tri thức học từ mọi nguồn dữ liệu để trả lời truy vấn chính xác, linh hoạt và mở rộng.
        </div>

        <!-- Architecture Layers Diagram -->
        <div class="diagram">
            <!-- Layer 0: Knowledge Base Management -->
            <div class="area kb">
                <div class="area-header">
                    <span class="material-symbols-rounded">inventory_2</span>
                    Knowledge Base Management
                </div>
                <div class="area-grid">
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">folder_managed</span>
                            Datasets
                        </div>
                        <div class="chips">
                            <span class="chip">Documents</span>
                            <span class="chip">Databases</span>
                            <span class="chip">Web/Emails</span>
                            <span class="chip">Images/Audio</span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">settings</span>
                            Policies
                        </div>
                        <div class="chips">
                            <span class="chip">Access Control</span>
                            <span class="chip">Retention</span>
                            <span class="chip">Compliance</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layer 1: Query Specification -->
            <div class="area spec">
                <div class="area-header">
                    <span class="material-symbols-rounded">rule</span>
                    Query Specification
                </div>
                <div class="area-grid">
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">schema</span>
                            Interfaces
                        </div>
                        <div class="chips">
                            <span class="chip">SpecificationInterface</span>
                            <span class="chip">RouterPolicy</span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">view_list</span>
                            Specifications
                        </div>
                        <div class="chips">
                            <span class="chip">LLMSpecification</span>
                            <span class="chip">RandomSpecification</span>
                            <span class="chip">SQLSpecification</span>
                            <span class="chip">ImageSpec</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layer 2: Engines -->
            <div class="area engines">
                <div class="area-header">
                    <span class="material-symbols-rounded">precision_manufacturing</span>
                    Engines
                </div>
                <div class="area-grid">
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">account_tree</span>
                            Engine Interfaces
                        </div>
                        <div class="chips">
                            <span class="chip">EngineInterface</span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">category</span>
                            Implementations
                        </div>
                        <div class="chips">
                            <span class="chip">LLMSEngine</span>
                            <span class="chip">HybridEngine</span>
                            <span class="chip">RagMysqlEngine</span>
                            <span class="chip">VectorSearchEngine</span>
                            <span class="chip">GraphEngine</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layer 3: Application -->
            <div class="area app">
                <div class="area-header">
                    <span class="material-symbols-rounded">apps</span>
                    Application Layer
                </div>
                <div class="area-grid">
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">chat</span>
                            Chatbox & Q&A
                        </div>
                        <div class="chips">
                            <span class="chip">Conversational UI</span>
                            <span class="chip">Context Tools</span>
                            <span class="chip">Guardrails</span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <span class="material-symbols-rounded">dashboard</span>
                            Management Modules
                        </div>
                        <div class="chips">
                            <span class="chip">Ingestion</span>
                            <span class="chip">KB Admin</span>
                            <span class="chip">Engines Management</span>
                            <span class="chip">Specification Management</span>
                            <span class="chip">Model Registry</span>
                            <span class="chip">Analytics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-width Vertical Processing Flow -->
        <div class="flow-section">
            <div class="flow-container">
                <div class="flow-step">
                    <span class="material-symbols-rounded">input</span>
                    Nhận Query từ người dùng
                </div>
                
                <div class="flow-arrow">
                    <span class="material-symbols-rounded">arrow_downward</span>
                </div>
                
                <div class="flow-step">
                    <span class="material-symbols-rounded">rule</span>
                    Phân loại Query qua Specification Layer
                </div>
                
                <div class="flow-arrow">
                    <span class="material-symbols-rounded">arrow_downward</span>
                </div>
                
                <div class="flow-step">
                    <span class="material-symbols-rounded">fork_right</span>
                    Router chọn Engine phù hợp (LLM, RAG, SQL, Hybrid...)
                </div>
                
                <div class="flow-arrow">
                    <span class="material-symbols-rounded">arrow_downward</span>
                </div>
                
                <div class="flow-step">
                    <span class="material-symbols-rounded">precision_manufacturing</span>
                    Engine thực thi: Retrieval + Reasoning + Generation
                </div>
                
                <div class="flow-arrow">
                    <span class="material-symbols-rounded">arrow_downward</span>
                </div>
                
                <div class="flow-step">
                    <span class="material-symbols-rounded">outbox</span>
                    Trả kết quả có giải thích, nguồn trích dẫn và confidence score
                </div>
            </div>
        </div>

        <!-- Full-width Examples -->
        <div class="full-row-section">
            <div class="example-panel">
                <h3>
                    <span class="material-symbols-rounded">quiz</span>
                    Ví dụ truy vấn thực tế
                </h3>
                <ul>
                    <li>
                        <span class="query-text">"Bán sản phẩm Laptop DELL X24 theo quy trình SOP: bán hàng thiết bị và bàn giao tự động cho nhân viên đang available"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">LLMSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">HybridEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Khởi tạo workflow + routing task</span>
                        </div>
                    </li>
                    <li>
                        <span class="query-text">"Doanh số bán laptop tháng 09/2025"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">SQLSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">RagMysqlEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Truy vấn database + tổng hợp báo cáo</span>
                        </div>
                    </li>
                    <li>
                        <span class="query-text">"Hóa đơn P123 đã xuất chưa, hiện ai là người đảm nhận và task liên quan"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">SQLSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">HybridEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Query trạng thái + phân tích workflow</span>
                        </div>
                    </li>
                    <li>
                        <span class="query-text">"Danh sách đơn hàng > 100 triệu trong 1 năm gần nhất"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">SQLSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">RagMysqlEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Truy vấn lịch sử đơn hàng</span>
                        </div>
                    </li>
                    <li>
                        <span class="query-text">"Tìm tài liệu HR liên quan đến nghỉ phép"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">LLMSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">VectorSearchEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Semantic search + rank documents</span>
                        </div>
                    </li>
                    <li>
                        <span class="query-text">"Tóm tắt hợp đồng XSD với khách hàng ABC Corp"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">LLMSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">LLMSEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Đọc PDF/Word + tóm tắt điều khoản</span>
                        </div>
                    </li>
                    <li>
                        <span class="query-text">"So sánh hiệu suất bán hàng của 5 nhân viên top Q4/2025"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">SQLSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">HybridEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Aggregate data + visualization</span>
                        </div>
                    </li>
                    <li>
                        <span class="query-text">"Khách hàng XYZ có lịch sử mua hàng như thế nào, đề xuất sản phẩm phù hợp"</span>
                        <div class="flow-chain">
                            <span class="flow-box spec">LLMSpecification</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box engine">HybridEngine</span>
                            <span class="flow-sep">→</span>
                            <span class="flow-box action">Retrieval + reasoning + recommendation</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="refs-panel">
                <h3>
                    <span class="material-symbols-rounded">school</span>
                    Academic & Technical References
                </h3>
                <ul>
                    <li><strong>RAG (Retrieval-Augmented Generation):</strong> Vector DB indexing with HNSW, IVF, PQ algorithms</li>
                    <li><strong>Design Patterns:</strong> Specification Pattern, Strategy Pattern, Adapter & Facade cho Engine routing</li>
                    <li><strong>Embeddings:</strong> sentence-transformers, OpenAI text-embedding-3, multimodal embeddings (CLIP, ImageBind)</li>
                    <li><strong>Quality & Safety:</strong> Prompt engineering, guardrails, evaluation metrics (BLEU/ROUGE, grounding, faithfulness)</li>
                    <li><strong>Scalability:</strong> Sharding, caching layers, async pipelines; observability: distributed tracing, metrics, structured logs</li>
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
