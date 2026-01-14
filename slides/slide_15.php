<?php 
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-container { display: flex; flex-direction: column; gap: 12px; overflow-y: auto; }
        .slide-title { display: flex; align-items: center; gap: 10px; font-size: 1.8rem; font-weight: 800; color: #1f2937; margin-bottom: 5px; }
        .slide-subtitle { font-size: 0.95rem; color: #6b7280; margin-bottom: 10px; }
        
        .arch-diagram { position: relative; background: #f8fafc; border: 2px solid #cbd5e1; border-radius: 12px; padding: 20px; min-height: 600px; }
        
        .layer { position: relative; margin-bottom: 20px; padding-bottom: 20px; border-bottom: 2px dashed #e5e7eb; }
        .layer:last-child { border-bottom: none; margin-bottom: 0; }
        .layer-title { font-size: 0.85rem; font-weight: 700; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px; }
        
        .boxes { display: flex; gap: 12px; flex-wrap: wrap; justify-content: center; }
        
        .box { 
            background: #ffffff; 
            border: 2px solid #3b82f6; 
            border-radius: 10px; 
            padding: 12px 14px;
            min-width: 140px;
            max-width: 200px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            position: relative;
        }
        .box.primary { border-color: #2563eb; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
        .box.secondary { border-color: #10b981; background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); }
        .box.tertiary { border-color: #f59e0b; background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
        .box.infra { border-color: #6b7280; background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%); }
        
        .box-title { font-size: 0.95rem; font-weight: 700; color: #111827; margin-bottom: 6px; display: flex; align-items: center; gap: 6px; }
        .box-title .material-symbols-rounded { font-size: 1.2rem; }
        .box-desc { font-size: 0.8rem; color: #4b5563; line-height: 1.4; }
        
        .arrow-down { 
            width: 0; 
            height: 0; 
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 12px solid #3b82f6;
            margin: 8px auto;
            opacity: 0.6;
        }
        
        .connector-line {
            position: absolute;
            border-left: 2px dashed #94a3b8;
            height: 20px;
            left: 50%;
            bottom: -20px;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">hub</span>
            Kiến trúc tổng thể hệ thống HKSpace Platform
        </div>
        <div class="slide-subtitle">
            Sơ đồ kiến trúc theo tầng từ User Interface → Application Services → Data Layer → Infrastructure
        </div>

        <div class="arch-diagram">
            <!-- LAYER 1: User Interface -->
            <div class="layer">
                <div class="layer-title"><span class="material-symbols-rounded" style="font-size: 1rem; vertical-align: middle;">palette</span> User Interface Layer</div>
                <div class="boxes">
                    <div class="box primary">
                        <div class="box-title"><span class="material-symbols-rounded">phone_iphone</span>Mobile App</div>
                        <div class="box-desc">iOS/Android native (React Native)</div>
                    </div>
                    <div class="box primary">
                        <div class="box-title"><span class="material-symbols-rounded">web</span>Web App</div>
                        <div class="box-desc">React SPA + PWA</div>
                    </div>
                    <div class="box primary">
                        <div class="box-title"><span class="material-symbols-rounded">mic</span>Voice Interface</div>
                        <div class="box-desc">Speech-to-text → AI command</div>
                    </div>
                    <div class="box primary">
                        <div class="box-title"><span class="material-symbols-rounded">terminal</span>Admin Console</div>
                        <div class="box-desc">Tenant management, analytics</div>
                    </div>
                </div>
            </div>
            <div class="arrow-down"></div>
            
            <!-- LAYER 2: API Gateway & Auth -->
            <div class="layer">
                <div class="layer-title"><span class="material-symbols-rounded" style="font-size: 1rem; vertical-align: middle;">lock</span> API Gateway & Security</div>
                <div class="boxes">
                    <div class="box secondary">
                        <div class="box-title"><span class="material-symbols-rounded">vpn_lock</span>API Gateway</div>
                        <div class="box-desc">Rate limit, routing, load balancing</div>
                    </div>
                    <div class="box secondary">
                        <div class="box-title"><span class="material-symbols-rounded">verified_user</span>Auth Service</div>
                        <div class="box-desc">JWT, OAuth2, SSO, RBAC</div>
                    </div>
                    <div class="box secondary">
                        <div class="box-title"><span class="material-symbols-rounded">shield</span>Tenant Isolation</div>
                        <div class="box-desc">Multi-tenant context, RLS</div>
                    </div>
                </div>
            </div>
            <div class="arrow-down"></div>
            
            <!-- LAYER 3: Application Services -->
            <div class="layer">
                <div class="layer-title"><span class="material-symbols-rounded" style="font-size: 1rem; vertical-align: middle;">settings</span> Application Services</div>
                <div class="boxes">
                    <div class="box tertiary">
                        <div class="box-title"><span class="material-symbols-rounded">checklist</span>HKSpace Core</div>
                        <div class="box-desc">Todo, folder, project, team, comment</div>
                    </div>
                    <div class="box tertiary">
                        <div class="box-title"><span class="material-symbols-rounded">account_tree</span>Automation Engine</div>
                        <div class="box-desc">DAG workflow, trigger, action, scheduler</div>
                    </div>
                    <div class="box tertiary">
                        <div class="box-title"><span class="material-symbols-rounded">psychology</span>AI Platform</div>
                        <div class="box-desc">LLM router, RAG, knowledge, prompt-to-code</div>
                    </div>
                    <div class="box tertiary">
                        <div class="box-title"><span class="material-symbols-rounded">settings</span>SaaS Services</div>
                        <div class="box-desc">Billing, notification, webhook, feature flag</div>
                    </div>
                </div>
            </div>
            <div class="arrow-down"></div>
            
            <!-- LAYER 4: Data Layer -->
            <div class="layer">
                <div class="layer-title"><span class="material-symbols-rounded" style="font-size: 1rem; vertical-align: middle;">storage</span> Data Layer</div>
                <div class="boxes">
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">storage</span>PostgreSQL</div>
                        <div class="box-desc">Primary DB (tasks, users, automation)</div>
                    </div>
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">quiz</span>Vector DB</div>
                        <div class="box-desc">Embeddings (Weaviate/PGVector)</div>
                    </div>
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">bolt</span>Redis</div>
                        <div class="box-desc">Cache, session, queue, pub/sub</div>
                    </div>
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">folder</span>S3/Storage</div>
                        <div class="box-desc">Files, attachments, backups</div>
                    </div>
                </div>
            </div>
            <div class="arrow-down"></div>
            
            <!-- LAYER 5: Infrastructure -->
            <div class="layer">
                <div class="layer-title"><span class="material-symbols-rounded" style="font-size: 1rem; vertical-align: middle;">construction</span> Infrastructure & DevOps</div>
                <div class="boxes">
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">cloud_queue</span>Message Bus</div>
                        <div class="box-desc">Kafka/NATS (event streaming)</div>
                    </div>
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">monitoring</span>Observability</div>
                        <div class="box-desc">Logs, metrics, traces (OpenTelemetry)</div>
                    </div>
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">key</span>Secret Vault</div>
                        <div class="box-desc">API keys, credentials (Vault/KMS)</div>
                    </div>
                    <div class="box infra">
                        <div class="box-title"><span class="material-symbols-rounded">deployed_code</span>CI/CD</div>
                        <div class="box-desc">GitHub Actions, Docker, K8s</div>
                    </div>
                </div>
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
