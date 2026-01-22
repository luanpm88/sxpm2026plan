<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKIncotech - Thuyết Minh Nội Dung Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL@48,400,1">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f6b9e 0%, #059669 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #0f6b9e 0%, #059669 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            font-weight: 800;
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.95;
        }

        .content {
            padding: 50px 40px;
            max-height: 70vh;
            overflow-y: auto;
        }

        .section {
            margin-bottom: 45px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.5em;
            font-weight: 700;
            color: #0f6b9e;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 3px solid #059669;
        }

        .section-icon {
            font-size: 2em;
            color: #059669;
        }

        .section-content {
            margin-left: 35px;
        }

        .point {
            margin-bottom: 15px;
            padding: 12px 15px;
            background: #f8fafc;
            border-left: 4px solid #059669;
            border-radius: 4px;
            font-size: 0.95em;
        }

        .point strong {
            color: #0f6b9e;
            display: block;
            margin-bottom: 4px;
        }

        .point-detail {
            color: #666;
            font-size: 0.9em;
        }

        .subsection {
            margin: 20px 0;
            padding: 15px;
            background: #f0f9ff;
            border-radius: 8px;
            border-left: 3px solid #0f6b9e;
        }

        .subsection-title {
            font-weight: 600;
            color: #0f6b9e;
            margin-bottom: 10px;
            font-size: 0.95em;
        }

        .subsection-list {
            list-style: none;
            margin-left: 10px;
        }

        .subsection-list li {
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
            font-size: 0.9em;
            color: #555;
        }

        .subsection-list li:before {
            content: "→";
            position: absolute;
            left: 0;
            color: #059669;
            font-weight: bold;
        }

        .highlight {
            background: #fef3c7;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #f59e0b;
        }

        .highlight-title {
            font-weight: 700;
            color: #d97706;
            margin-bottom: 8px;
        }

        .cta-section {
            margin-top: 40px;
            padding: 30px;
            background: linear-gradient(135deg, #f0f9ff 0%, #ecfdf5 100%);
            border-radius: 12px;
            text-align: center;
            border: 2px solid #059669;
        }

        .cta-section h3 {
            color: #0f6b9e;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .cta-section p {
            color: #666;
            margin-bottom: 15px;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.95em;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #0f6b9e 0%, #059669 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(15, 107, 158, 0.3);
        }

        .btn-secondary {
            background: white;
            color: #0f6b9e;
            border: 2px solid #0f6b9e;
        }

        .btn-secondary:hover {
            background: #f0f9ff;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .stat-card {
            background: #f8fafc;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #e2e8f0;
        }

        .stat-number {
            font-size: 1.8em;
            font-weight: 800;
            color: #0f6b9e;
        }

        .stat-label {
            font-size: 0.85em;
            color: #666;
            margin-top: 5px;
        }

        .footer {
            background: #f8fafc;
            padding: 30px 40px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            color: #666;
            font-size: 0.9em;
        }

        .footer p {
            margin: 5px 0;
        }

        .page-number {
            float: right;
            color: #999;
            font-size: 0.85em;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8em;
            }

            .content {
                padding: 30px 20px;
            }

            .section-content {
                margin-left: 20px;
            }

            .btn-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }

        /* Scrollbar styling */
        .content::-webkit-scrollbar {
            width: 8px;
        }

        .content::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .content::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .content::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>🎯 HKIncotech Landing Page</h1>
            <p>Thuyết Minh Nội Dung & Mục Lục Trình Bày</p>
            <p style="font-size: 0.9em; margin-top: 15px;">Các nội dung chính muốn chia sẻ thông qua website</p>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- 1. Giới Thiệu -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">info</span>
                    Phần 1: Giới Thiệu HKIncotech
                </div>
                <div class="section-content">
                    <div class="point">
                        <strong>🌍 Về Chúng Tôi</strong>
                        <div class="point-detail">HKIncotech là công ty phát triển phần mềm doanh nghiệp hàng đầu tại Đông Nam Á với 12+ năm kinh nghiệm</div>
                    </div>
                    <div class="point">
                        <strong>📊 Thành Tích</strong>
                        <div class="point-detail">50+ dự án lớn nhỏ • 10+ ngành công nghiệp • $10M giá trị dự án • 99.99% hài lòng khách hàng</div>
                    </div>
                    <div class="point">
                        <strong>🎯 Tầm Nhìn</strong>
                        <div class="point-detail">Xây dựng phần mềm doanh nghiệp quy mô toàn cầu với công nghệ tiên tiến và quy trình Agile</div>
                    </div>
                </div>
            </div>

            <!-- 2. Dịch Vụ Chính -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">work</span>
                    Phần 2: 4 Dịch Vụ & Giải Pháp Chính
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <div class="subsection-title">1️⃣ Custom Software Development</div>
                        <ul class="subsection-list">
                            <li>Web & Mobile Applications</li>
                            <li>Distributed Systems & Microservices</li>
                            <li>Real-time Processing & Analytics</li>
                            <li>Enterprise Integrations</li>
                        </ul>
                    </div>

                    <div class="subsection">
                        <div class="subsection-title">2️⃣ SaaS Platform</div>
                        <ul class="subsection-list">
                            <li>HKSpace - Nền tảng multi-tenant, 50K+ users</li>
                            <li>Real-time collaboration, Analytics advanced</li>
                            <li>99.99% SLA, <100ms latency</li>
                        </ul>
                    </div>

                    <div class="subsection">
                        <div class="subsection-title">3️⃣ AI Knowledge Platform</div>
                        <ul class="subsection-list">
                            <li>NLP & Semantic Search (100K+ documents)</li>
                            <li>RAG Pipeline & LLM Integration (OpenAI, Claude)</li>
                            <li>95%+ accuracy, <500ms response time</li>
                        </ul>
                    </div>

                    <div class="subsection">
                        <div class="subsection-title">4️⃣ Security & Compliance</div>
                        <ul class="subsection-list">
                            <li>Zero Trust Architecture & End-to-end Encryption</li>
                            <li>ISO 27001, SOC 2, GDPR, PCI DSS, HIPAA compliant</li>
                            <li>24/7 SOC Monitoring & Incident Response</li>
                        </ul>
                    </div>

                    <div class="highlight">
                        <div class="highlight-title">⭐ NEW: Mobile & Cross-Platform Development</div>
                        <strong>React Native</strong> (iOS + Android) • <strong>Flutter</strong> (Web, Desktop) • <strong>PWA + Electron</strong><br>
                        <em>90% code sharing • 60% cost savings</em>
                    </div>
                </div>
            </div>

            <!-- 3. Quy Trình -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">settings</span>
                    Phần 3: Quy Trình Phát Triển - SCRUM Agile
                </div>
                <div class="section-content">
                    <div class="point">
                        <strong>7 Phases Đầy Đủ</strong>
                        <div class="point-detail">Discovery & Planning → Design → Development → Testing & QA → Demo & Review → Deployment → Post-Launch Support</div>
                    </div>
                    <div class="point">
                        <strong>Cách Chúng Tôi Hoạt Động</strong>
                        <div class="point-detail">
                            ✓ 2-week sprints • ✓ Daily standups • ✓ Real-time transparency • ✓ Code quality review • ✓ Continuous integration & deployment • ✓ Flexible feedback loops
                        </div>
                    </div>
                    <div class="point">
                        <strong>Kết Quả</strong>
                        <div class="point-detail">30-50% faster delivery • High quality • Reduced risk • Client satisfaction 99.99%</div>
                    </div>
                </div>
            </div>

            <!-- 4. Công Nghệ -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">code</span>
                    Phần 4: Tech Stack Hiện Đại & Toàn Diện
                </div>
                <div class="section-content">
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">10</div>
                            <div class="stat-label">Công Nghệ Category</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">99.99%</div>
                            <div class="stat-label">Uptime SLA</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number"><100ms</div>
                            <div class="stat-label">API Response Time</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Công Nghệ Sử Dụng</div>
                        </div>
                    </div>

                    <div class="subsection">
                        <div class="subsection-title">📚 8 Tech Categories + 2 NEW:</div>
                        <ul class="subsection-list">
                            <li><strong>Frontend:</strong> React, Vue, Angular, TypeScript, PWA</li>
                            <li><strong>Backend:</strong> Node.js, Python, Java, Go, GraphQL</li>
                            <li><strong>Database:</strong> PostgreSQL, MongoDB, Redis, Elasticsearch</li>
                            <li><strong>Cloud:</strong> AWS, GCP, Azure, Kubernetes, Docker</li>
                            <li><strong>Security:</strong> SSL/TLS, OWASP, GDPR, Penetration testing</li>
                            <li><strong>DevOps:</strong> Git, Docker, Terraform, CI/CD, Monitoring</li>
                            <li><strong>⭐ Mobile/Cross-Platform:</strong> React Native, Flutter, iOS, Android, PWA</li>
                            <li><strong>⭐ AI & Machine Learning:</strong> OpenAI, TensorFlow, PyTorch, RAG, Vector DB</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 5. Scaling -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">trending_up</span>
                    Phần 5: Kiến Trúc Mở Rộng - MVP → 100M+ Users
                </div>
                <div class="section-content">
                    <div class="point">
                        <strong>4 Giai Đoạn Scaling</strong>
                        <div class="point-detail">
                            <strong>MVP:</strong> 0-1K users, simple architecture<br>
                            <strong>Growth:</strong> 1K-100K users, optimization<br>
                            <strong>Scale:</strong> 100K-10M users, microservices<br>
                            <strong>Enterprise:</strong> 10M+ users, global deployment
                        </div>
                    </div>
                    <div class="point">
                        <strong>Công Nghệ Mở Rộng</strong>
                        <div class="point-detail">Database sharding • Caching strategy (Redis) • Load balancing • Microservices • CDN • Message queues</div>
                    </div>
                </div>
            </div>

            <!-- 6. Case Studies -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">cases</span>
                    Phần 6: 6 Case Studies - Dự Án Tiêu Biểu
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <div class="subsection-title">1. HKSpace - SaaS Platform</div>
                        <ul class="subsection-list">
                            <li>50K+ users • $2M revenue • 99.99% uptime</li>
                        </ul>
                    </div>
                    <div class="subsection">
                        <div class="subsection-title">2. AI Knowledge Platform</div>
                        <ul class="subsection-list">
                            <li>100K+ documents • 95%+ accuracy • 50+ companies</li>
                        </ul>
                    </div>
                    <div class="subsection">
                        <div class="subsection-title">3. E-Commerce Transformation</div>
                        <ul class="subsection-list">
                            <li>70% faster • 10x capacity • +$50M revenue</li>
                        </ul>
                    </div>
                    <div class="subsection">
                        <div class="subsection-title">4. Education Management System ⭐ NEW</div>
                        <ul class="subsection-list">
                            <li>10K+ students • AI scheduling (3 weeks → 2 days) • 95% conflict reduction</li>
                        </ul>
                    </div>
                    <div class="subsection">
                        <div class="subsection-title">5. Storage Management System ⭐ NEW</div>
                        <ul class="subsection-list">
                            <li>10M SKUs • 99.8% accuracy • $15M savings</li>
                        </ul>
                    </div>
                    <div class="subsection">
                        <div class="subsection-title">6. Multi-Platform Delivery App ⭐ NEW</div>
                        <ul class="subsection-list">
                            <li>React Native • 100K+ downloads • 92% code sharing • 65% cost savings</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 7. Use Cases -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">lightbulb</span>
                    Phần 7: Use Cases Tiêu Biểu Theo Ngành
                </div>
                <div class="section-content">
                    <div class="point">
                        <strong>10 Ngành Công Nghiệp Phục Vụ</strong>
                        <div class="point-detail">
                            💻 Công Nghệ • 🏦 Tài Chính & Banking • 🏥 Y Tế • 🛒 E-Commerce • 🏭 Sản Xuất • 🚚 Logistics • 🏢 Bất Động Sản • 🎓 Giáo Dục • 🏨 Du Lịch & Khách Sạn • 🎬 Media & Giải Trí
                        </div>
                    </div>
                    <div class="highlight">
                        <div class="highlight-title">🌟 Use Cases Nổi Bật</div>
                        <strong>E-commerce:</strong> Multi-platform delivery, 100K+ downloads<br>
                        <strong>Fintech:</strong> Real-time transactions, 99.99% security<br>
                        <strong>Healthcare:</strong> Patient management, HIPAA compliant<br>
                        <strong>Education:</strong> AI-powered scheduling, learning analytics<br>
                        <strong>Logistics:</strong> 10M+ inventory tracking, 99.8% accuracy
                    </div>
                </div>
            </div>

            <!-- 8. Bảng Giá -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">payments</span>
                    Phần 8: Bảng Giá Tham Khảo - Linh Hoạt Theo Nhu Cầu
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <div class="subsection-title">📌 3 Tiers Giá Tham Khảo (Range-based)</div>
                    </div>

                    <div class="point">
                        <strong>MVP / Startup: $6,300 - $12,000/tháng</strong>
                        <div class="point-detail">1-2 developers • 2-week sprints • Core features • 30 days support</div>
                    </div>

                    <div class="point">
                        <strong>Growth / Scale-up: $12,000 - $25,000/tháng (🌟 Popular)</strong>
                        <div class="point-detail">2-4 developers + PM • Advanced architecture • Bi-weekly demos • 90 days support</div>
                    </div>

                    <div class="point">
                        <strong>Enterprise / Complex: $25,000+/tháng</strong>
                        <div class="point-detail">4-8+ developers + PM + SM • Microservices • Daily standups • 6-12 months support</div>
                    </div>

                    <div class="highlight">
                        <div class="highlight-title">✅ Bao Gồm Tất Cả Dự Án</div>
                        Modern tech stack • Security first • Clean APIs • Cloud infrastructure • Performance tracking • Full documentation
                    </div>
                </div>
            </div>

            <!-- 9. Best Practices -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">verified</span>
                    Phần 9: Best Practices từ Tech Giants
                </div>
                <div class="section-content">
                    <div class="point">
                        <strong>6 Best Practices Áp Dụng</strong>
                        <div class="point-detail">
                            ✓ Microservices Architecture (Netflix Model)<br>
                            ✓ CI/CD Automation (Amazon Practice)<br>
                            ✓ Security by Design (Google Standards)<br>
                            ✓ Data-Driven Decisions (Facebook Model)<br>
                            ✓ Infrastructure as Code (AWS Practice)<br>
                            ✓ Team Collaboration (Google Culture)
                        </div>
                    </div>
                </div>
            </div>

            <!-- 10. CTA -->
            <div class="section">
                <div class="section-title">
                    <span class="section-icon material-symbols-rounded">call_to_action</span>
                    Phần 10: Gọi Hành Động - Liên Hệ & Tư Vấn
                </div>
                <div class="section-content">
                    <div class="point">
                        <strong>Quá Trình Tư Vấn</strong>
                        <div class="point-detail">Tư vấn miễn phí 30 min • Phân tích requirements • Đề xuất tech stack • Báo giá tham khảo • Lên kế hoạch dự án</div>
                    </div>
                    <div class="point">
                        <strong>Liên Hệ</strong>
                        <div class="point-detail">📧 Email: contact@hkincotech.com<br>📞 Phone: +84 28 6788 6699<br>📍 Office: HCM City, Vietnam</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <h3>🎬 Sẵn Sàng Xem Demo Chi Tiết?</h3>
            <p>Những nội dung trên đây được trình bày chi tiết trên website landing page</p>
            <div class="btn-group">
                <a href="http://localhost:8000/" target="_blank" class="btn btn-primary">
                    Xem Website Ngay →
                </a>
            </div>
            <p style="margin-top: 12px; font-size: 0.95em; color: #0f6b9e; font-weight: 600;">
                Link demo (SXPM nội bộ): <a href="http://hoangkhang.com.vn:8003" target="_blank" style="color: #0f6b9e; text-decoration: underline;">hoangkhang.com.vn:8003</a>
            </p>
            <p style="margin-top: 15px; font-size: 0.9em; color: #666;">
                Bấm vào nút trên để xem demo thực tế tất cả nội dung được trình bày
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>HKIncotech Landing Page - Thuyết Minh Nội Dung</strong></p>
            <p>Slide này tóm tắt 10 phần nội dung chính muốn chia sẻ thông qua website</p>
            <p style="margin-top: 10px; color: #999;">📅 Tháng 1, 2026 | Bản Thuyết Minh Chi Tiết</p>
        </div>
    </div>
</body>
</html>
