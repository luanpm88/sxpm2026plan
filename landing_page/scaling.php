<?php
$page_title = "Mở Rộng & Infrastructure - HKIncotech";
$page_description = "6 giai đoạn scaling từ MVP đến enterprise. Performance metrics, SLA 99.99%, auto-scaling infrastructure.";
include '_header.php';
?>

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Mở Rộng & <span style="color: var(--primary);">Infrastructure</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                    Từ MVP nhỏ đến 10 triệu users. 6 giai đoạn scaling với SLA 99.99%, auto-scaling, monitoring 24/7.
                </p>
                <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                    Chúng tôi đã scale 150+ projects từ 0 → millions of users. Kinh nghiệm từ early startup đến unicorn.
                </p>
            </div>
        </div>
    </section>

    <!-- 6 Scaling Phases Timeline -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">6 Giai Đoạn Scaling</h2>
                <p class="section-subtitle">Roadmap từ MVP đến enterprise-scale infrastructure</p>
            </div>
            
            <div style="display: grid; gap: 2rem;">
                <?php
                $phases = [
                    [
                        'phase' => 'Phase 1: Proof of Concept (MVP)',
                        'users' => '< 1K users',
                        'timeline' => '0-3 months',
                        'architecture' => 'Monolithic + Simple DB',
                        'description' => 'Start simple: single server, basic database, no complex infrastructure. Focus on product-market fit.',
                        'stack' => 'Single instance (AWS EC2/GCP Compute) + RDS/Cloud SQL',
                        'cost' => '$500-2K/month'
                    ],
                    [
                        'phase' => 'Phase 2: Early Growth',
                        'users' => '1K - 50K users',
                        'timeline' => '3-6 months',
                        'architecture' => 'Load Balanced + Read Replicas',
                        'description' => 'Add horizontal scaling: load balancer, database read replicas, basic caching.',
                        'stack' => 'Load Balancer + 2-3 backend instances + Master-Slave DB',
                        'cost' => '$2K-5K/month'
                    ],
                    [
                        'phase' => 'Phase 3: Scaling Out',
                        'users' => '50K - 500K users',
                        'timeline' => '6-12 months',
                        'architecture' => 'Microservices + Kubernetes',
                        'description' => 'Microservices architecture, Kubernetes orchestration, Redis caching, CDN for static assets.',
                        'stack' => 'K8s cluster + 5-10 service replicas + Redis + CDN',
                        'cost' => '$5K-15K/month'
                    ],
                    [
                        'phase' => 'Phase 4: Multi-Region',
                        'users' => '500K - 5M users',
                        'timeline' => '12-18 months',
                        'architecture' => 'Multi-region + Database Sharding',
                        'description' => 'Deploy to multiple regions, database sharding by geography, global CDN, disaster recovery.',
                        'stack' => '3+ regions, sharded DB, global failover, multi-cloud strategy',
                        'cost' => '$15K-50K/month'
                    ],
                    [
                        'phase' => 'Phase 5: Hyper-Scale',
                        'users' => '5M - 100M users',
                        'timeline' => '18-24 months',
                        'architecture' => 'Event-Driven + Data Warehouse',
                        'description' => 'Event-driven architecture, real-time analytics, data warehouse (BigQuery), streaming pipelines.',
                        'stack' => 'Message queues + Streaming + Data lake + Analytics',
                        'cost' => '$50K-200K/month'
                    ],
                    [
                        'phase' => 'Phase 6: Enterprise Scale',
                        'users' => '> 100M users',
                        'timeline' => '24+ months',
                        'architecture' => 'Custom Infrastructure + Edge',
                        'description' => 'Custom infrastructure, edge computing, custom databases, dedicated DevOps team.',
                        'stack' => 'Global edge network + Custom DBs + Proprietary infra',
                        'cost' => '$200K+/month'
                    ]
                ];
                
                foreach ($phases as $index => $p):
                ?>
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.boxShadow='';">
                    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 2rem; margin-bottom: 1.5rem;">
                        <div>
                            <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                                Phase <?php echo $index + 1; ?>
                            </div>
                            <h3 style="font-size: 1.2rem; font-weight: 700; color: var(--text-dark);">
                                <?php echo $p['phase']; ?>
                            </h3>
                        </div>
                        <div>
                            <div style="color: var(--text-gray); font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Users:</strong> <?php echo $p['users']; ?></div>
                            <div style="color: var(--text-gray); font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Timeline:</strong> <?php echo $p['timeline']; ?></div>
                            <div style="color: var(--text-gray); font-size: 0.9rem;"><strong>Cost:</strong> <?php echo $p['cost']; ?></div>
                        </div>
                        <div>
                            <div style="background: var(--secondary-bg); padding: 1rem; border-radius: 8px;">
                                <div style="font-weight: 700; color: var(--primary); font-size: 0.9rem; margin-bottom: 0.5rem;">Architecture</div>
                                <div style="color: var(--text-gray); font-size: 0.9rem;"><?php echo $p['architecture']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div style="border-top: 1px solid var(--border); padding-top: 1.5rem;">
                        <p style="color: var(--text-gray); line-height: 1.7; margin-bottom: 1rem;">
                            <?php echo $p['description']; ?>
                        </p>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; font-size: 0.9rem;">
                            <div>
                                <strong style="color: var(--text-dark);">Tech Stack:</strong>
                                <div style="color: var(--text-gray); margin-top: 0.3rem;"><?php echo $p['stack']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Performance Metrics -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Tiêu Chí Hiệu Năng</h2>
                <p class="section-subtitle">Enterprise-grade SLA và performance benchmarks</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem;">
                <?php
                $metrics = [
                    ['metric' => '99.99%', 'label' => 'Uptime SLA', 'desc' => '~4.26 phút downtime/năm'],
                    ['metric' => '<100ms', 'label' => 'API Response Time', 'desc' => 'P99 latency'],
                    ['metric' => '<3s', 'label' => 'Page Load Time', 'desc' => 'On 3G network'],
                    ['metric' => '>95', 'label' => 'Lighthouse Score', 'desc' => 'Performance metric'],
                    ['metric' => '0ms', 'label' => 'Zero-downtime Deploy', 'desc' => 'Blue-green deployment'],
                    ['metric' => '24/7', 'label' => 'SOC Monitoring', 'desc' => 'Real-time alerts'],
                    ['metric' => '1sec', 'label' => 'Auto-recovery Time', 'desc' => 'Failover automation'],
                    ['metric' => '99.9%', 'label' => 'Database Availability', 'desc' => 'Multi-region replication'],
                ];
                foreach ($metrics as $m):
                ?>
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2rem; border: 1px solid var(--border); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='white'; this.style.borderColor='var(--primary)';" onmouseout="this.style.backgroundColor='var(--secondary-bg)'; this.style.borderColor='var(--border)';">
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                        <?php echo $m['metric']; ?>
                    </div>
                    <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        <?php echo $m['label']; ?>
                    </div>
                    <div style="font-size: 0.9rem; color: var(--text-gray);">
                        <?php echo $m['desc']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Scaling Case Study -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Case Study: Scaling Story</h2>
                <p class="section-subtitle">HKSpace: 0 → 50K users trong 18 tháng</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">
                        HKSpace - Scaling Journey
                    </h3>
                    <div style="display: grid; gap: 1.5rem;">
                        <?php
                        $timeline = [
                            ['month' => 'Month 0', 'milestone' => 'MVP Launch', 'users' => '100 beta users', 'desc' => 'Single server, basic infrastructure'],
                            ['month' => 'Month 3', 'milestone' => 'Series A', 'users' => '5K users', 'desc' => 'Added load balancer, read replicas'],
                            ['month' => 'Month 6', 'milestone' => 'Product-Market Fit', 'users' => '20K users', 'desc' => 'Migrated to Kubernetes'],
                            ['month' => 'Month 12', 'milestone' => 'Series B', 'users' => '40K users', 'desc' => 'Multi-region deployment'],
                            ['month' => 'Month 18', 'milestone' => 'Unicorn Path', 'users' => '50K+ users', 'desc' => 'Enterprise features, white-label'],
                        ];
                        foreach ($timeline as $item):
                        ?>
                        <div style="background: white; border-radius: 12px; padding: 1.5rem; border-left: 4px solid var(--primary); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 6px 15px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.boxShadow='';">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <strong style="color: var(--primary); font-size: 0.95rem;"><?php echo $item['month']; ?></strong>
                                <span style="background: var(--secondary-bg); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600; color: var(--text-dark);"><?php echo $item['users']; ?></span>
                            </div>
                            <strong style="display: block; color: var(--text-dark); margin-bottom: 0.3rem;"><?php echo $item['milestone']; ?></strong>
                            <p style="color: var(--text-gray); font-size: 0.9rem; margin: 0;"><?php echo $item['desc']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); text-align: center;">
                    <svg viewBox="0 0 300 300" style="width: 100%; max-width: 300px;">
                        <!-- Growth curve -->
                        <path d="M 30 250 Q 80 220 130 150 T 250 50" fill="none" stroke="#0f6b9e" stroke-width="3"/>
                        
                        <!-- Data points -->
                        <circle cx="30" cy="250" r="5" fill="#0f6b9e"/>
                        <circle cx="80" cy="220" r="5" fill="#0f6b9e"/>
                        <circle cx="130" cy="150" r="5" fill="#0f6b9e"/>
                        <circle cx="180" cy="90" r="5" fill="#0f6b9e"/>
                        <circle cx="250" cy="50" r="5" fill="#0f6b9e"/>
                        
                        <!-- Grid lines -->
                        <line x1="20" y1="260" x2="260" y2="260" stroke="#e2e8f0" stroke-width="1"/>
                        <line x1="20" y1="40" x2="260" y2="40" stroke="#e2e8f0" stroke-width="1"/>
                        <line x1="20" y1="40" x2="20" y2="260" stroke="#e2e8f0" stroke-width="1"/>
                        <line x1="260" y1="40" x2="260" y2="260" stroke="#e2e8f0" stroke-width="1"/>
                        
                        <!-- Labels -->
                        <text x="20" y="275" font-size="11" fill="#666">0</text>
                        <text x="245" y="275" font-size="11" fill="#666">18mo</text>
                        <text x="5" y="45" font-size="11" fill="#666">50K</text>
                        <text x="5" y="265" font-size="11" fill="#666">100</text>
                        
                        <!-- Annotations -->
                        <text x="80" y="180" font-size="10" fill="#0f6b9e" font-weight="bold">Series A</text>
                        <text x="180" y="60" font-size="10" fill="#0f6b9e" font-weight="bold">Unicorn Path</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Security & Compliance for Scaling -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Bảo Mật & Compliance at Scale</h2>
                <p class="section-subtitle">Enterprise security standards từ day 1</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $security = [
                    ['icon' => 'security', 'title' => 'Zero Trust Architecture', 'items' => ['End-to-end encryption', 'API authentication', 'Role-based access', 'Multi-factor auth']],
                    ['icon' => 'verified', 'title' => 'Compliance Standards', 'items' => ['ISO 27001', 'SOC 2 Type II', 'GDPR ready', 'PCI DSS']],
                    ['icon' => 'backup', 'title' => 'Data Protection', 'items' => ['Automated backups', 'Disaster recovery', 'Multi-region replication', 'PITR support']],
                    ['icon' => 'visibility', 'title' => 'Monitoring & Audit', 'items' => ['24/7 SOC monitoring', 'Real-time alerts', 'Audit logging', 'Incident response']],
                ];
                foreach ($security as $s):
                ?>
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='white'; this.style.borderColor='var(--primary)';" onmouseout="this.style.backgroundColor='var(--secondary-bg)'; this.style.borderColor='var(--border)';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded"><?php echo $s['icon']; ?></span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">
                        <?php echo $s['title']; ?>
                    </h3>
                    <ul style="list-style: none;">
                        <?php foreach ($s['items'] as $item): ?>
                        <li style="padding: 0.5rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.5rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--accent); font-weight: 600;">✓</span>
                            <?php echo $item; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SLA Overview -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">SLA & Support Tiers</h2>
                <p class="section-subtitle">Guaranteed uptime & rapid response</p>
            </div>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; border: 1px solid var(--border);">
                    <thead style="background: var(--primary); color: white;">
                        <tr>
                            <th style="padding: 1rem; text-align: left; font-weight: 700;">Tier</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700;">Uptime SLA</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700;">Response Time</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700;">Support Hours</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700;">Cost Impact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $slas = [
                            ['tier' => 'Startup', 'sla' => '99.5%', 'response' => '4 hours', 'support' => 'Business hours', 'credit' => '5% credit'],
                            ['tier' => 'Growth', 'sla' => '99.9%', 'response' => '1 hour', 'support' => '24/5', 'credit' => '10% credit'],
                            ['tier' => 'Enterprise', 'sla' => '99.99%', 'response' => '15 min', 'support' => '24/7', 'credit' => '30% credit'],
                        ];
                        foreach ($slas as $item):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1.2rem; font-weight: 600; color: var(--text-dark);"><?php echo $item['tier']; ?></td>
                            <td style="padding: 1.2rem; text-align: center; color: var(--text-gray);"><?php echo $item['sla']; ?></td>
                            <td style="padding: 1.2rem; text-align: center; color: var(--text-gray);"><?php echo $item['response']; ?></td>
                            <td style="padding: 1.2rem; text-align: center; color: var(--text-gray);"><?php echo $item['support']; ?></td>
                            <td style="padding: 1.2rem; text-align: center; color: var(--primary); font-weight: 600;"><?php echo $item['credit']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: white;">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 4rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Sẵn Sàng Để Scale?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Chúng tôi có kinh nghiệm scale từ 0 đến 100 triệu users. Hãy cùng nhau xây dựng infrastructure vững chắc cho tương lai.
                </p>
                <a href="contact.php" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)';" onmouseout="this.style.backgroundColor='white'; this.style.transform=''; this.style.boxShadow='';">
                    <span>Tư Vấn Scaling</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

<?php include '_footer.php'; ?>
