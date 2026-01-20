<?php
$page_title = "Công Nghệ - HKIncotech";
$page_description = "Tech Stack: Frontend, Backend, Data, Cloud. Best practices từ Google, Amazon, Netflix";
include '_header.php';
?>

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Công Nghệ & Tech Stack
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                    Enterprise-grade technology: scalable, secure, và reliable. Best practices từ Google, Amazon, Netflix.
                </p>
            </div>
        </div>
    </section>

    <!-- Tech Stack Matrix -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Tech Stack Hoàn Chỉnh</h2>
                <p class="section-subtitle">Từ frontend đến cloud infrastructure</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $tech_categories = [
                    [
                        'title' => 'Frontend',
                        'icon' => 'web',
                        'technologies' => [
                            'React, Vue, Angular',
                            'TypeScript, modern JavaScript',
                            'Responsive Design (Mobile-first)',
                            'Performance optimization',
                            'PWA & Progressive Enhancement',
                            'SEO & Accessibility (WCAG 2.1)'
                        ]
                    ],
                    [
                        'title' => 'Backend & API',
                        'icon' => 'storage',
                        'technologies' => [
                            'Node.js, Python, Java, Go',
                            'RESTful APIs, GraphQL',
                            'Microservices architecture',
                            'Authentication & Authorization',
                            'Rate limiting & Security',
                            'Caching & CDN strategy'
                        ]
                    ],
                    [
                        'title' => 'Data & Database',
                        'icon' => 'database',
                        'technologies' => [
                            'PostgreSQL, MySQL, MongoDB',
                            'Redis, Elasticsearch',
                            'Data warehouse & BigQuery',
                            'ETL & real-time processing',
                            'Backup & disaster recovery',
                            'Database optimization & tuning'
                        ]
                    ],
                    [
                        'title' => 'Cloud & Infrastructure',
                        'icon' => 'cloud',
                        'technologies' => [
                            'AWS, GCP, Azure',
                            'Kubernetes & Docker',
                            'CI/CD pipelines (GitHub Actions, Jenkins)',
                            'Monitoring & alerting (Prometheus, DataDog)',
                            'Auto-scaling & load balancing',
                            'Infrastructure as Code (Terraform)'
                        ]
                    ],
                    [
                        'title' => 'Security & Compliance',
                        'icon' => 'shield',
                        'technologies' => [
                            'SSL/TLS encryption',
                            'OWASP security standards',
                            'GDPR & data privacy compliance',
                            'Security scanning & penetration testing',
                            'DDoS protection & WAF',
                            'Audit logging & compliance reporting'
                        ]
                    ],
                    [
                        'title' => 'DevOps & Tools',
                        'icon' => 'settings',
                        'technologies' => [
                            'Git & version control',
                            'Docker & container orchestration',
                            'Terraform & infrastructure automation',
                            'Monitoring & observability',
                            'Issue tracking & collaboration',
                            'Performance profiling & debugging'
                        ]
                    ],
                ];
                
                foreach ($tech_categories as $cat):
                ?>
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); color: white; padding: 2rem; display: flex; align-items: center; gap: 1rem;">
                        <div style="font-size: 2.5rem;">
                            <span class="material-symbols-rounded"><?php echo $cat['icon']; ?></span>
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin: 0;">
                            <?php echo $cat['title']; ?>
                        </h3>
                    </div>
                    <div style="padding: 2rem;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            <?php foreach ($cat['technologies'] as $tech): ?>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border); font-size: 0.95rem; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem;">
                                <span style="color: var(--primary); font-weight: 600;">✓</span>
                                <?php echo $tech; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Architecture Diagram -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Kiến Trúc Hệ Thống Chuẩn</h2>
                <p class="section-subtitle">Scalable, Reliable, Secure (SRS)</p>
            </div>
            
            <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); overflow-x: auto;">
                <svg viewBox="0 0 1000 400" style="width: 100%; min-height: 400px;">
                    <!-- Users -->
                    <circle cx="50" cy="50" r="25" fill="#0f6b9e"/>
                    <text x="50" y="55" text-anchor="middle" font-size="12" fill="white" font-weight="bold">Users</text>
                    
                    <!-- CDN -->
                    <rect x="150" y="20" width="120" height="60" rx="8" fill="#059669"/>
                    <text x="210" y="55" text-anchor="middle" font-size="13" fill="white" font-weight="bold">CDN</text>
                    <text x="210" y="70" text-anchor="middle" font-size="10" fill="white">Static Assets</text>
                    
                    <!-- Load Balancer -->
                    <circle cx="350" cy="50" r="30" fill="#f59e0b" stroke="#0f6b9e" stroke-width="2"/>
                    <text x="350" y="48" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Load</text>
                    <text x="350" y="62" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Balancer</text>
                    
                    <!-- Microservices -->
                    <g>
                        <rect x="500" y="10" width="100" height="50" rx="6" fill="#0f6b9e"/>
                        <text x="550" y="40" text-anchor="middle" font-size="11" fill="white" font-weight="bold">API Service</text>
                    </g>
                    <g>
                        <rect x="500" y="80" width="100" height="50" rx="6" fill="#0f6b9e"/>
                        <text x="550" y="110" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Auth Service</text>
                    </g>
                    <g>
                        <rect x="650" y="10" width="100" height="50" rx="6" fill="#0f6b9e"/>
                        <text x="700" y="40" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Data Service</text>
                    </g>
                    <g>
                        <rect x="650" y="80" width="100" height="50" rx="6" fill="#0f6b9e"/>
                        <text x="700" y="110" text-anchor="middle" font-size="11" fill="white" font-weight="bold">File Service</text>
                    </g>
                    
                    <!-- Cache -->
                    <rect x="800" y="10" width="90" height="50" rx="6" fill="#7c3aed"/>
                    <text x="845" y="40" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Cache (Redis)</text>
                    
                    <!-- Databases -->
                    <rect x="500" y="200" width="100" height="50" rx="6" fill="#10b981"/>
                    <text x="550" y="230" text-anchor="middle" font-size="11" fill="white" font-weight="bold">PostgreSQL</text>
                    
                    <rect x="650" y="200" width="100" height="50" rx="6" fill="#10b981"/>
                    <text x="700" y="230" text-anchor="middle" font-size="11" fill="white" font-weight="bold">MongoDB</text>
                    
                    <rect x="800" y="200" width="100" height="50" rx="6" fill="#10b981"/>
                    <text x="850" y="230" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Elasticsearch</text>
                    
                    <!-- Message Queue -->
                    <rect x="500" y="300" width="100" height="50" rx="6" fill="#f59e0b"/>
                    <text x="550" y="330" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Message Queue</text>
                    
                    <!-- Monitoring & Logging -->
                    <rect x="650" y="300" width="100" height="50" rx="6" fill="#ef4444"/>
                    <text x="700" y="325" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Monitoring &</text>
                    <text x="700" y="340" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Logging</text>
                    
                    <!-- Cloud Infrastructure -->
                    <rect x="800" y="300" width="100" height="50" rx="6" fill="#06b6d4"/>
                    <text x="850" y="325" text-anchor="middle" font-size="10" fill="white" font-weight="bold">AWS/GCP/</text>
                    <text x="850" y="340" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Azure</text>
                    
                    <!-- Connections -->
                    <line x1="75" y1="50" x2="150" y2="50" stroke="#0f6b9e" stroke-width="2" stroke-dasharray="5,5"/>
                    <line x1="270" y1="50" x2="320" y2="50" stroke="#0f6b9e" stroke-width="2"/>
                    <line x1="380" y1="50" x2="500" y2="35" stroke="#0f6b9e" stroke-width="2"/>
                    <line x1="380" y1="50" x2="500" y2="105" stroke="#0f6b9e" stroke-width="2"/>
                    <line x1="600" y1="35" x2="650" y2="35" stroke="#0f6b9e" stroke-width="2"/>
                    <line x1="600" y1="105" x2="650" y2="105" stroke="#0f6b9e" stroke-width="2"/>
                    <line x1="700" y1="60" x2="800" y2="35" stroke="#0f6b9e" stroke-width="2"/>
                    
                    <!-- Data layer connections -->
                    <line x1="550" y1="150" x2="550" y2="200" stroke="#0f6b9e" stroke-width="2"/>
                    <line x1="700" y1="150" x2="700" y2="200" stroke="#0f6b9e" stroke-width="2"/>
                    <line x1="800" y1="60" x2="850" y2="200" stroke="#0f6b9e" stroke-width="2"/>
                    
                    <!-- Queue connections -->
                    <line x1="550" y1="200" x2="550" y2="300" stroke="#f59e0b" stroke-width="2" stroke-dasharray="5,5"/>
                </svg>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div style="background: white; border-radius: 12px; padding: 1.5rem; border-left: 4px solid #0f6b9e;">
                    <strong style="display: block; color: var(--text-dark); margin-bottom: 0.5rem;">Frontend Layer</strong>
                    <span style="color: var(--text-gray); font-size: 0.9rem;">CDN + Caching cho tốc độ tối đa</span>
                </div>
                <div style="background: white; border-radius: 12px; padding: 1.5rem; border-left: 4px solid #f59e0b;">
                    <strong style="display: block; color: var(--text-dark); margin-bottom: 0.5rem;">API Layer</strong>
                    <span style="color: var(--text-gray); font-size: 0.9rem;">Microservices + Load Balancing</span>
                </div>
                <div style="background: white; border-radius: 12px; padding: 1.5rem; border-left: 4px solid #10b981;">
                    <strong style="display: block; color: var(--text-dark); margin-bottom: 0.5rem;">Data Layer</strong>
                    <span style="color: var(--text-gray); font-size: 0.9rem;">Multi-database strategy + Replication</span>
                </div>
                <div style="background: white; border-radius: 12px; padding: 1.5rem; border-left: 4px solid #ef4444;">
                    <strong style="display: block; color: var(--text-dark); margin-bottom: 0.5rem;">Observability</strong>
                    <span style="color: var(--text-gray); font-size: 0.9rem;">Monitoring, Logging, Tracing, Alerting</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Performance Metrics -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Tiêu Chí Hiệu Năng</h2>
                <p class="section-subtitle">Đạt chuẩn enterprise-grade</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 2rem; text-align: center;">
                <?php
                $metrics = [
                    ['metric' => '99.99%', 'label' => 'Uptime SLA', 'desc' => '~4.26 phút downtime/năm'],
                    ['metric' => '<100ms', 'label' => 'API Response Time', 'desc' => 'P99 latency'],
                    ['metric' => '>95', 'label' => 'Google Lighthouse Score', 'desc' => 'Performance + SEO'],
                    ['metric' => '<3s', 'label' => 'Page Load Time', 'desc' => 'Trên 3G network'],
                    ['metric' => '100/100', 'label' => 'Security Grade', 'desc' => 'Grade A+ from SSL Labs'],
                    ['metric' => '>90%', 'label' => 'Test Coverage', 'desc' => 'Unit + Integration'],
                ];
                foreach ($metrics as $m):
                ?>
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                        <?php echo $m['metric']; ?>
                    </div>
                    <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        <?php echo $m['label']; ?>
                    </div>
                    <div style="font-size: 0.85rem; color: var(--text-gray);">
                        <?php echo $m['desc']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Best Practices -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Best Practices Từ Tech Giants</h2>
                <p class="section-subtitle">Áp dụng những lesson learned từ Google, Amazon, Netflix, Uber</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $practices = [
                    ['icon' => 'psychology', 'title' => 'Microservices Architecture', 'company' => 'Netflix Model', 'desc' => 'Chia nhỏ thành independent services, dễ scale, deploy riêng rẽ.'],
                    ['icon' => 'auto_fix_high', 'title' => 'CI/CD Automation', 'company' => 'Amazon Practice', 'desc' => 'Deploy 50+ times/day. Automated testing trước mỗi deploy.'],
                    ['icon' => 'security', 'title' => 'Security by Design', 'company' => 'Google Standards', 'desc' => 'Security checks từ development stage, không patch sau.'],
                    ['icon' => 'analytics', 'title' => 'Data-Driven Decisions', 'company' => 'Facebook Model', 'desc' => 'A/B testing, metrics tracking, data warehouse.'],
                    ['icon' => 'trending_up', 'title' => 'Infrastructure as Code', 'company' => 'AWS Practice', 'desc' => 'Terraform, CloudFormation. Infrastructure versionable, reproducible.'],
                    ['icon' => 'manage_accounts', 'title' => 'Team Collaboration', 'company' => 'Google Culture', 'desc' => 'Async communication, clear documentation, knowledge sharing.'],
                ];
                foreach ($practices as $p):
                ?>
                <div style="background: white; border-radius: 12px; padding: 2rem; transition: all 0.3s ease; border: 1px solid var(--border);" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded"><?php echo $p['icon']; ?></span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.3rem;">
                        <?php echo $p['title']; ?>
                    </h3>
                    <div style="font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 0.75rem;">
                        📌 <?php echo $p['company']; ?>
                    </div>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        <?php echo $p['desc']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Xây Dựng Với Công Nghệ Tốt Nhất</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Tech stack tối ưu = Product tốt hơn + Business grow nhanh hơn
                </p>
                <a href="contact.php" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Tư Vấn Tech Architecture</span>
                </a>
            </div>
        </div>
    </section>

<?php include '_footer.php'; ?>
