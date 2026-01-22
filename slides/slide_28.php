<?php 
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php'; 
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-top: 10px;
            color: #6b7280;
        }
        
        .slide-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 25px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .content-section {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px 30px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .content-section:hover {
            border-color: #7c9ee3;
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(124,158,227,0.15);
        }
        
        .section-header {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #1f2937;
            padding-bottom: 15px;
            border-bottom: 3px solid #7c9ee3;
        }
        
        .section-header .material-symbols-rounded {
            font-size: 2.2rem;
            color: #7c9ee3;
        }
        
        .section-items {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
        }
        
        .section-items li {
            padding: 12px 15px;
            background: #f9fafb;
            border-left: 4px solid #7c9ee3;
            border-radius: 4px;
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .highlight-box {
            background: linear-gradient(135deg, #fef9e7 0%, #fdf2d9 100%);
            border: 2px solid #fcd34d;
            border-radius: 8px;
            padding: 20px;
            margin-top: 15px;
        }
        
        .highlight-title {
            font-weight: 700;
            color: #b45309;
            margin-bottom: 10px;
            font-size: 1.05rem;
        }
        
        .highlight-content {
            color: #7c2d12;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 15px 0;
        }
        
        .stat-box {
            background: #f0f9ff;
            border: 1px solid #bfdbfe;
            border-radius: 8px;
            padding: 12px;
            text-align: center;
        }
        
        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e40af;
        }
        
        .stat-label {
            font-size: 0.8rem;
            color: #1e3a8a;
            margin-top: 5px;
            line-height: 1.3;
        }

        .service-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #ecfdf5 100%);
            border: 1px solid #bfdbfe;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 12px;
        }

        .service-title {
            font-weight: 700;
            color: #0369a1;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .service-desc {
            color: #0c4a6e;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        @media (max-width: 1024px) {
            .stat-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .section-items {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">description</span>
                HKIncotech - Frontend Presentation
            </div>
            <div class="slide-subtitle">
                Nội dung & mục lục trình bày từ bộ phận SXPM
            </div>
        </div>
        
        <div class="slide-content">
            
            <!-- Section 1: Giới Thiệu -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">info</span>
                    Phần 1: Giới Thiệu HKIncotech
                </div>
                <ul class="section-items">
                    <li><strong>Về Chúng Tôi:</strong> 12+ năm kinh nghiệm phát triển phần mềm doanh nghiệp tại Đông Nam Á</li>
                    <li><strong>Thành Tích:</strong> 50+ dự án lớn nhỏ • 10+ ngành • $10M giá trị</li>
                    <li><strong>Tầm Nhìn:</strong> Xây dựng phần mềm enterprise scale với công nghệ tiên tiến</li>
                </ul>
            </div>

            <!-- Section 2: 4 Dịch Vụ -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">work</span>
                    Phần 2: Dịch vụ chính của HKINcotech
                </div>
                
                <div class="service-box">
                    <div class="service-title">Custom Software Development</div>
                    <div class="service-desc">Web & Mobile Apps • Microservices • Real-time Processing • Enterprise Integrations</div>
                </div>

                <div class="service-box">
                    <div class="service-title">SaaS Platform</div>
                    <div class="service-desc">HKSpace (50K+ users) • Multi-tenant • Real-time collaboration • 99.99% SLA</div>
                </div>

                <div class="service-box">
                    <div class="service-title">AI Knowledge Platform</div>
                    <div class="service-desc">NLP & Semantic Search • RAG Pipeline • LLM Integration • 95%+ accuracy</div>
                </div>

                <div class="service-box">
                    <div class="service-title">Security & Compliance</div>
                    <div class="service-desc">Zero Trust Architecture • ISO 27001, SOC 2, GDPR compliant • 24/7 Monitoring</div>
                </div>

                <div class="service-box">
                    <div class="service-title">Mobile & Cross-Platform Development</div>
                    <div class="service-desc">
                        <strong>React Native</strong> (iOS + Android) • <strong>Flutter</strong> (Web, Desktop) • <strong>PWA + Electron</strong><br>
                        <em>90% code sharing • 60% cost savings</em>
                    </div>
                </div>
            </div>

            <!-- Section 3: Quy Trình -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">settings</span>
                    Phần 3: Quy Trình phát triển phần mềm (Agile - SCRUM)
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 20px;">
                    <!-- Item 1 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h5 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">1. Steps in SCRUM Process</h5>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            <strong>Discovery & Consulting → Design & Planning → Sprint Development → QA & Testing → Deployment & Launch → Support & Development</strong><br>
                            6 bước từ khám phá ý tưởng đến hỗ trợ dài hạn, mỗi bước có timeline & deliverables rõ ràng
                        </p>
                    </div>
                    
                    <!-- Item 2 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h5 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">2. Sprint Cycle Details (2-4 tuần)</h5>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            <strong>Sprint Planning → Daily Standup (15 min) → Development (coding, code review) → Sprint Review (demo) → Sprint Retrospective (improve)</strong>
                        </p>
                    </div>
                    
                    <!-- Item 3 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h5 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">3. SCRUM Process Benefits</h5>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            Transparency & Control • Flexible & Adaptive • High Quality (early defect detection) • 30-50% faster delivery • Optimal ROI • Risk reduction through frequent deployment
                        </p>
                    </div>
                    
                    <!-- Item 4 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h5 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">4. Your Journey with HKIncotech (6 Phases)</h5>
                        <ul style="margin: 0; padding-left: 20px; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            <li>Phase 1 (1w): Consultation - Lắng nghe ý tưởng, phân tích mục tiêu, kế hoạch & estimate</li>
                            <li>Phase 2 (2-3w): Discovery & Design - Wireframes → Mockups → Prototypes, khách hàng review trước coding</li>
                            <li>Phase 3 (6-12w): Development - 2-4 week sprints, mỗi sprint có features hoàn chỉnh, deployable</li>
                            <li>Phase 4 (2-3w): QA & Testing - Functional, performance, security, UAT, fix bugs & optimize</li>
                            <li>Phase 5 (1w): Launch & Deployment - Deploy production, monitoring setup, incident response</li>
                            <li>Phase 6 (Ongoing): Support & Growth - 24/7 support, optimization, features mới, scaling</li>
                        </ul>
                    </div>
                    
                    <!-- Item 5 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h5 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">5. Why Choose HKIncotech for SCRUM?</h5>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            Certified Scrum Masters • 12+ years agile experience • Transparent process (dashboard, demos) • Fast delivery (MVP 4-8 weeks) • Long-term partnership & support
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 4: Tech Stack -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">code</span>
                    Phần 4: Giới thiệu công nghệ (Tech Stack)
                </div>
                <div class="stat-grid">
                    <div class="stat-box">
                        <div class="stat-number">10</div>
                        <div class="stat-label">Tech<br>Categories</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">99.99%</div>
                        <div class="stat-label">Uptime<br>SLA</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number"><100ms</div>
                        <div class="stat-label">API<br>Response</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Tech<br>Used</div>
                    </div>
                </div>
                <ul class="section-items">
                    <li><strong>Frontend:</strong> React • Vue • Angular • TypeScript • PWA</li>
                    <li><strong>Backend:</strong> Node.js • Python • Java • Go • GraphQL</li>
                    <li><strong>Database:</strong> PostgreSQL • MongoDB • Redis • Elasticsearch</li>
                    <li><strong>Cloud:</strong> AWS • GCP • Azure • Kubernetes • Docker</li>
                    <li><strong>Security:</strong> SSL/TLS • OWASP • GDPR • Penetration Testing</li>
                    <li><strong>DevOps:</strong> Git • Docker • Terraform • CI/CD • Monitoring</li>
                    <li><strong>Mobile:</strong> React Native • Flutter • iOS • Android • PWA</li>
                    <li><strong>AI/ML:</strong> OpenAI • TensorFlow • PyTorch • RAG • Vector DB</li>
                </ul>
            </div>

            <!-- Section 5: Scaling -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">trending_up</span>
                    Phần 5: Khả năng mở rộng & Scale-up
                </div>
                <ul class="section-items">
                    <li><strong>MVP Phase (0-1K):</strong> Simple architecture • Focus: Get to market fast</li>
                    <li><strong>Growth Phase (1K-100K):</strong> Optimization • Load balancing • Caching</li>
                    <li><strong>Scale Phase (100K-10M):</strong> Microservices • Database sharding • Message queues</li>
                    <li><strong>Enterprise (10M+):</strong> Multi-region • Global deployment • Advanced monitoring</li>
                </ul>
            </div>

            <!-- Section 6: Case Studies -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">cases</span>
                    Phần 6: Case Studies - Dự Án Tiêu Biểu
                </div>
                <ul class="section-items">
                    <li><strong>HKSpace:</strong> Nền tảng SaaS multi-tenant cho 10,000+ users với real-time collaboration, advanced analytics, đạt 50K+ users, $2M revenue, 99.99% uptime</li>
                    <li><strong>AI Knowledge Platform:</strong> Hệ thống quản lý kiến thức dựa trên AI, xử lý 100K+ documents với semantic search, RAG pipeline, độ chính xác 95%+</li>
                    <li><strong>E-Commerce Transformation:</strong> Hệ thống thương mại điện tử hiện đại với serverless architecture, headless commerce, fast API, 50K+ SKUs, 100K+ daily transactions</li>
                    <li><strong>Education Management System:</strong> Hệ thống quản lý giáo dục toàn diện với AI-powered class scheduling, learning analytics, automated attendance cho 10K+ sinh viên</li>
                    <li><strong>Storage Management System:</strong> Nền tảng quản lý kho bãi với ~10M SKUs, real-time barcode scanning, ML demand forecasting, blockchain cho chứng từ ký gửi</li>
                    <li><strong>ERP Management System:</strong> Hệ thống ERP tích hợp toàn bộ (accounting, inventory, procurement, HR payroll) cho doanh nghiệp 100+ nhân viên</li>
                </ul>
            </div>

            <!-- Section 7: Use Cases -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">lightbulb</span>
                    Phần 7: Các lĩnh vực ứng dụng
                </div>
                <ul class="section-items">
                    <li><strong>Công Nghệ:</strong> Web, Mobile, Cloud infrastructure</li>
                    <li><strong>Tài Chính:</strong> Real-time transactions • High-frequency trading</li>
                    <li><strong>Y Tế:</strong> Patient management • HIPAA compliant</li>
                    <li><strong>E-Commerce:</strong> Multi-platform • 100K+ downloads</li>
                    <li><strong>Sản Xuất:</strong> ERP systems • Real-time tracking</li>
                    <li><strong>Logistics:</strong> 10M+ inventory • 99.8% accuracy</li>
                    <li><strong>Bất Động Sản:</strong> Property management • 3D visualization</li>
                    <li><strong>Giáo Dục:</strong> AI scheduling • Learning analytics</li>
                    <li><strong>Du Lịch:</strong> Booking systems • Multi-language</li>
                    <li><strong>Media:</strong> Content delivery • Live streaming</li>
                </ul>
            </div>

            <!-- Section 8: Pricing -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">payments</span>
                    Phần 8: Chi phí & Gói Dịch Vụ tham khảo
                </div>
                <ul class="section-items">
                    <li><strong>MVP / Startup:</strong> $6,300 - $12,000/tháng • 1-2 developers • 30 days support</li>
                    <li><strong>Growth / Scale-up (Most Popular):</strong> $12,000 - $25,000/tháng • 2-4 developers + PM • 90 days support</li>
                    <li><strong>Enterprise / Complex:</strong> $25,000+/tháng • 4-8+ developers + PM + SM • 6-12 months support</li>
                </ul>
                <div class="highlight-box">
                    <div class="highlight-title">Bao Gồm Tất Cả Dự Án</div>
                    <div class="highlight-content">
                        Modern tech stack • Security first • Clean APIs • Cloud infrastructure • Performance tracking • Full documentation
                    </div>
                </div>
            </div>

            <!-- Section 9: Best Practices -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">verified</span>
                    Section 9: Engineering Best Practices
                </div>
                <ul class="section-items">
                    <li><strong>Microservices Architecture:</strong> Decompose into independent services for scale and isolated deployments.</li>
                    <li><strong>CI/CD Automation:</strong> Automated testing before deploy; high deployment frequency for rapid feedback.</li>
                    <li><strong>Security by Design:</strong> Security checks from development stage; avoid post-production patching.</li>
                    <li><strong>Data-Driven Decisions:</strong> A/B testing, metrics tracking, centralized analytics for informed decisions.</li>
                    <li><strong>Infrastructure as Code:</strong> Terraform/CloudFormation for versionable, reproducible infrastructure.</li>
                    <li><strong>Team Collaboration:</strong> Async communication, clear documentation, knowledge sharing across teams.</li>
                </ul>
            </div>

            <!-- Section 10: Security & Privacy -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">security</span>
                    Phần 10: Bảo mật & Privacy (Security Posture)
                </div>
                <ul class="section-items">
                    <li><strong>Compliance Standards:</strong> ISO 27001 • SOC 2 Type II • GDPR • PCI DSS • HIPAA • OWASP</li>
                    <li><strong>Data Protection:</strong> End-to-end encryption • Zero Trust Architecture • Data residency options</li>
                    <li><strong>Monitoring & Response:</strong> 24/7 SOC Monitoring • Real-time threat detection • Incident response</li>
                    <li><strong>Infrastructure Security:</strong> DDoS protection • Vulnerability scanning • Penetration testing • SSL/TLS</li>
                    <li><strong>Access Control:</strong> Multi-factor authentication • Role-based access • API key management • Audit logging</li>
                    <li><strong>Privacy by Design:</strong> Data minimization • Consent management • Privacy impact assessment • Right to be forgotten</li>
                </ul>
                <div class="highlight-box">
                    <div class="highlight-title">Bảo Mật Enterprise-Grade</div>
                    <div class="highlight-content">
                        Tất cả dự án được xây dựng với security first mindset • Regular security audits & compliance reviews • Certified security engineers & architects • Comprehensive risk mitigation strategy
                    </div>
                </div>
            </div>

            <!-- Section 11: Certifications & Standards -->
            <div class="content-section">
                <div class="section-header">
                    <span class="material-symbols-rounded">card_membership</span>
                    Phần 11: Chứng chỉ & Tiêu chuẩn Ngành
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 20px;">
                    <!-- Item 1 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h4 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">1. Compliance & Security Certifications</h4>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            <strong>ISO 27001</strong> (Information Security Management) • <strong>SOC 2 Type II</strong> (Service Organization Control) • <strong>GDPR Compliant</strong> • <strong>PCI DSS</strong> (Payment Security) • <strong>HIPAA</strong> (Healthcare Data) • <strong>OWASP</strong> (Security Standards)
                        </p>
                    </div>
                    
                    <!-- Item 2 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h4 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">2. Cloud Provider Certifications</h4>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            <strong>AWS Certified Solutions Architect</strong> • <strong>AWS Certified DevOps Engineer</strong> • <strong>Google Cloud Professional Cloud Architect</strong> • <strong>Microsoft Azure Solutions Architect</strong> • <strong>Kubernetes Certified Application Developer (CKAD)</strong>
                        </p>
                    </div>
                    
                    <!-- Item 3 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h4 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">3. Agile & Development Certifications</h4>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            <strong>Certified Scrum Master (CSM)</strong> • <strong>Certified Scrum Product Owner (CSPO)</strong> • <strong>Professional Scrum Developer (PSD)</strong> • <strong>SAFe Agilist</strong> (Scaled Agile) • <strong>Continuous Delivery & DevOps</strong> expertise
                        </p>
                    </div>
                    
                    <!-- Item 4 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h4 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">4. Technology & Framework Expertise</h4>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            <strong>React/Vue/Angular</strong> certified developers • <strong>Node.js/Python/Java</strong> backend specialists • <strong>MongoDB/PostgreSQL</strong> database experts • <strong>OpenAI/LLM</strong> AI integration specialists • <strong>Microservices & Domain-Driven Design</strong> practitioners
                        </p>
                    </div>
                    
                    <!-- Item 5 -->
                    <div style="background: #f9fafb; border-left: 4px solid #0f6b9e; padding: 15px; border-radius: 4px;">
                        <h4 style="margin: 0 0 10px 0; color: #1f2937; font-weight: 700;">5. Team Expertise & Experience</h4>
                        <p style="margin: 0; color: #4b5563; font-size: 0.9rem; line-height: 1.6;">
                            50+ senior engineers (10+ years experience average) • Certified security architects & penetration testers • AI/ML specialists với research background • Enterprise solution architects • Team leaders with P&L responsibility
                        </p>
                    </div>
                </div>
                
                <div class="highlight-box" style="margin-top: 20px;">
                    <div class="highlight-title">Continuous Learning Culture</div>
                    <div class="highlight-content">
                        Tất cả engineers được khuyến khích cập nhật certifications hàng năm • Regular tech talks & knowledge sharing • Investment trong R&D & emerging technologies (AI, Blockchain, WebAssembly) • Mentorship program cho junior developers
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Landing page demo link for SXPM internal showcase -->
    <div style="text-align: center; margin: 18px 0 50px; font-size: 0.95rem; color: #1f2937; font-weight: 700;">
        Link chi tiết nội dung (SXPM): <a href="http://hoangkhang.com.vn:8003" target="_blank" style="color: #0f6b9e; font-weight: 800; text-decoration: underline;">hoangkhang.com.vn:8003</a>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
