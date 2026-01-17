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
            gap: 14px;
            padding: 50px 60px;
            max-height: 100vh;
            overflow-y: auto;
        }
        
        .slide-title { 
            display: flex; 
            align-items: center; 
            gap: 10px; 
            font-size: 1.6rem; 
            font-weight: 800; 
            color: #1f2937; 
        }
        
        .slide-subtitle { 
            font-size: 0.95rem; 
            color: #6b7280; 
        }

        /* Stage Cards Container */
        .stages-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .stage-card {
            background: #ffffff;
            border: 2px solid;
            border-radius: 12px;
            padding: 16px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
        }

        .stage-card.stage-0 { border-color: #bfdbfe; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); }
        .stage-card.stage-1 { border-color: #86efac; background: linear-gradient(135deg, #f0fdf4 0%, #e8f5e9 100%); }
        .stage-card.stage-2 { border-color: #fbbf24; background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
        .stage-card.stage-3 { border-color: #f472b6; background: linear-gradient(135deg, #fff5f8 0%, #fce7f3 100%); }
        .stage-card.stage-4 { border-color: #a78bfa; background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%); }
        .stage-card.stage-5 { border-color: #0ea5e9; background: linear-gradient(135deg, #f0f9ff 0%, #e0f7ff 100%); }

        .stage-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            font-size: 1.1rem;
            font-weight: 800;
            color: #111827;
        }

        .stage-header .material-symbols-rounded {
            font-size: 1.5rem;
        }

        .stage-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
            font-size: 0.88rem;
            line-height: 1.6;
        }

        .stage-box {
            background: rgba(255,255,255,0.9);
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 10px;
        }

        .stage-box-title {
            font-weight: 700;
            color: #374151;
            margin-bottom: 6px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .stage-box-content {
            color: #4b5563;
            font-size: 0.82rem;
        }

        .stage-box-content li {
            margin-left: 12px;
            margin-bottom: 3px;
        }

        /* Foundation Concepts */
        .foundation-section {
            margin-top: 12px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border: 2px solid #cbd5e1;
            border-radius: 12px;
            padding: 16px;
        }

        .foundation-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .foundation-title .material-symbols-rounded {
            font-size: 1.3rem;
            color: #8b5cf6;
        }

        .concepts-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .concept-pill {
            background: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 20px;
            padding: 8px 14px;
            font-size: 0.82rem;
            font-weight: 600;
            color: #334155;
            text-align: center;
            box-shadow: 0 1px 2px rgba(0,0,0,0.04);
        }

        /* Best Practices */
        .best-practices {
            margin-top: 12px;
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 14px;
        }

        .best-practices-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.98rem;
            font-weight: 800;
            color: #111827;
            margin-bottom: 8px;
        }

        .best-practices-title .material-symbols-rounded {
            color: #10b981;
            font-size: 1.3rem;
        }

        .best-practices-content {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            font-size: 0.82rem;
            color: #374151;
        }

        .bp-item {
            padding: 8px;
            background: #f9fafb;
            border-radius: 6px;
            border-left: 3px solid #10b981;
        }

        .bp-item strong {
            color: #047857;
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">cloud_upload</span>
            SaaS Scaling Infrastructure (10-Year Roadmap)
        </div>
        <div class="slide-subtitle">
            Professional infrastructure scaling strategy từ 0 users → 10M+ users, dựa trên best practices của Google, AWS, Microsoft
        </div>

        <!-- Stage 0: 0-100 Users -->
        <div class="stage-card stage-0">
            <div class="stage-header">
                <span class="material-symbols-rounded">rocket</span>
                <span>Stage 1: 0-100 Users (MVP Phase)</span>
            </div>
            <div class="stage-content">
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">storage</span>Infrastructure</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>1-2 Shared hosting / Single VM</li>
                            <li>PostgreSQL monolithic</li>
                            <li>No replication needed</li>
                            <li>Local SSD storage</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">architecture</span>Architecture</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Monolithic app server</li>
                            <li>Single DB instance</li>
                            <li>Manual backups (daily)</li>
                            <li>No load balancing</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">check_circle</span>Focus</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Cost efficiency ($50-200/mo)</li>
                            <li>Product-market fit validation</li>
                            <li>Basic monitoring setup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 1: 100-2K Users -->
        <div class="stage-card stage-1">
            <div class="stage-header">
                <span class="material-symbols-rounded">trending_up</span>
                <span>Stage 2: 100-2,000 Users (Growth Phase)</span>
            </div>
            <div class="stage-content">
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">dns</span>Compute & DB</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>2-4 App servers (load balanced)</li>
                            <li>DB: Primary + Read Replica</li>
                            <li>Automated daily backups (AWS RDS)</li>
                            <li>Basic auto-scaling</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">balance</span>High Availability</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Load balancer (ALB/NLB)</li>
                            <li>Health checks every 30s</li>
                            <li>Failover to read replica</li>
                            <li>RTO: 5-10 minutes</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">verified_user</span>Key Solution</div>
                    <div class="stage-box-content">
                        <ul>
                            <li><strong>AWS: EC2+RDS+ALB</strong></li>
                            <li>or DigitalOcean App Platform</li>
                            <li>Cost: $300-800/mo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 2: 2K-10K Users -->
        <div class="stage-card stage-2">
            <div class="stage-header">
                <span class="material-symbols-rounded">speed</span>
                <span>Stage 3: 2,000-10,000 Users (Scale Phase)</span>
            </div>
            <div class="stage-content">
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">architecture_2</span>Multi-Zone Deploy</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>8-16 App servers (2 AZ)</li>
                            <li>DB: 1 Primary + 2 Read Replicas</li>
                            <li>Redis cache layer (Session/Hot data)</li>
                            <li>Auto-scaling group (CPU 70%)</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">security</span>Resilience</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Multi-AZ RDS with auto-failover</li>
                            <li>Continuous backups (PITR)</li>
                            <li>RTO: 1-2 minutes</li>
                            <li>RPO: &lt;5 seconds</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">trending_up</span>Focus</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Database optimization (indexing)</li>
                            <li>Query performance tuning</li>
                            <li>Cost: $2K-5K/mo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 3: 10K-100K Users -->
        <div class="stage-card stage-3">
            <div class="stage-header">
                <span class="material-symbols-rounded">public</span>
                <span>Stage 4: 10,000-100,000 Users (Enterprise Phase)</span>
            </div>
            <div class="stage-content">
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">domain</span>Microservices</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>ECS/Kubernetes cluster (3 AZ)</li>
                            <li>API Gateway for rate limiting</li>
                            <li>Separate DB per service (sharding)</li>
                            <li>Message queue (SQS/Kafka)</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">backup</span>Data Strategy</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Horizontal sharding by tenant_id</li>
                            <li>Read replicas in 2 other regions</li>
                            <li>Cross-region backup daily</li>
                            <li>RTO: 30 seconds, RPO: &lt;1s</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">monitor_heart</span>Observability</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>DataDog/Prometheus metrics</li>
                            <li>Distributed tracing (Jaeger)</li>
                            <li>Alert + auto-remediation</li>
                            <li>Cost: $15K-40K/mo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 4: 100K-1M Users -->
        <div class="stage-card stage-4">
            <div class="stage-header">
                <span class="material-symbols-rounded">cloud</span>
                <span>Stage 5: 100,000-1,000,000 Users (Global Scale)</span>
            </div>
            <div class="stage-content">
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">language</span>Global CDN & Edge</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>CloudFront/Akamai CDN</li>
                            <li>Kubernetes across 6+ regions</li>
                            <li>Active-active multi-region setup</li>
                            <li>DynamoDB/Firestore global table</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">table_chart</span>Data Partitioning</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Consistent hashing for shards</li>
                            <li>Geo-sharding (APAC/EU/US)</li>
                            <li>Event sourcing for audit trail</li>
                            <li>Data warehouse (Snowflake)</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">shield</span>Reliability</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Chaos engineering tests</li>
                            <li>99.99% SLA guarantee</li>
                            <li>Multi-region failover &lt;5s</li>
                            <li>Cost: $100K-300K/mo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 5: 1M+ Users -->
        <div class="stage-card stage-5">
            <div class="stage-header">
                <span class="material-symbols-rounded">star</span>
                <span>Stage 6: 1,000,000+ Users (Hyperscale)</span>
            </div>
            <div class="stage-content">
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">domain_add</span>Distributed Services</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>Service mesh (Istio)</li>
                            <li>gRPC for inter-service comm</li>
                            <li>GraphQL federation layer</li>
                            <li>Serverless components</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">database</span>Advanced DB</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>CockroachDB/Vitess (SQL distributed)</li>
                            <li>TimescaleDB for time-series</li>
                            <li>Cassandra for analytics</li>
                            <li>Multiple consistency models</li>
                        </ul>
                    </div>
                </div>
                <div class="stage-box">
                    <div class="stage-box-title"><span class="material-symbols-rounded">verified</span>Enterprise Grade</div>
                    <div class="stage-box-content">
                        <ul>
                            <li>99.999% SLA (5-nines)</li>
                            <li>Dedicated infrastructure</li>
                            <li>Custom hardware optimization</li>
                            <li>Cost: $500K-2M/mo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Foundation Concepts -->
        <div class="foundation-section">
            <div class="foundation-title">
                <span class="material-symbols-rounded">school</span>
                Foundation Concepts & Best Practices
            </div>
            <div class="concepts-grid">
                <div class="concept-pill">Load Balancing (ALB/NLB/GSLB)</div>
                <div class="concept-pill">Horizontal Scaling (Auto-groups)</div>
                <div class="concept-pill">Data Replication (Sync/Async)</div>
                <div class="concept-pill">Sharding & Partitioning</div>
                <div class="concept-pill">Backup & PITR Recovery</div>
                <div class="concept-pill">Failover Automation</div>
                <div class="concept-pill">Multi-region Deployment</div>
                <div class="concept-pill">Circuit Breaker Pattern</div>
                <div class="concept-pill">Rate Limiting & Quotas</div>
                <div class="concept-pill">Distributed Tracing</div>
                <div class="concept-pill">Cache Strategies (Redis)</div>
                <div class="concept-pill">CDN & Edge Computing</div>
            </div>
        </div>

        <!-- Best Practices from Industry Leaders -->
        <div class="best-practices">
            <div class="best-practices-title">
                <span class="material-symbols-rounded">public</span>
                Best Practices: Google / AWS / Microsoft / Netflix
            </div>
            <div class="best-practices-content">
                <div class="bp-item">
                    <strong>Google (GCP):</strong> Kubernetes-first, multi-region active-active, BigTable for scale, 99.99% SLA by design
                </div>
                <div class="bp-item">
                    <strong>AWS:</strong> Well-architected framework, shared responsibility model, auto-scaling groups, RDS enhanced monitoring
                </div>
                <div class="bp-item">
                    <strong>Microsoft (Azure):</strong> Traffic Manager for global routing, Cosmos DB multi-master, App Service auto-heal
                </div>
                <div class="bp-item">
                    <strong>Netflix:</strong> Chaos engineering for resilience, microservices + Spring Cloud, reactive async/non-blocking
                </div>
                <div class="bp-item">
                    <strong>Meta (Facebook):</strong> TAO graph database, memcached hierarchies, logical sharding at app layer
                </div>
                <div class="bp-item">
                    <strong>LinkedIn:</strong> Kafka-driven event streaming, Voldemort key-value store, Espresso document store for scale
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
