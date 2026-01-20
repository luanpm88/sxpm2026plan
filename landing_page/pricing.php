<?php
$page_title = "Giá Dịch Vụ - HKIncotech";
$page_description = "Flexible pricing plans: Startup, Growth, Enterprise. Transparent costs, no hidden fees.";
include '_header.php';
?>

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Giá Dịch Vụ
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                    Transparent pricing cho mọi stage - từ Startup MVP đến Enterprise at scale
                </p>
                <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                    Flexible models, no hidden fees, ROI-focused approach. Custom quotes available.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Models -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">3 Mô Hình Giá</h2>
                <p class="section-subtitle">Chọn phù hợp với business stage của bạn</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <?php
                $plans = [
                    [
                        'name' => 'Startup MVP',
                        'price' => '$8K-$20K',
                        'timeline' => '4-8 tuần',
                        'users' => 'Up to 10K',
                        'description' => 'Perfect cho MVP, proof of concept, early-stage startups',
                        'features' => [
                            'Web app (React) + Mobile (React Native)',
                            'API backend (Node.js/Python)',
                            'Database (PostgreSQL)',
                            'Basic infrastructure (single server)',
                            'Basic CI/CD pipeline',
                            'Documentation & handover',
                            '30 days support included'
                        ],
                        'best_for' => 'Startups, MVPs, Quick market entry'
                    ],
                    [
                        'name' => 'Growth Platform',
                        'price' => '$30K-$80K',
                        'timeline' => '3-6 tháng',
                        'users' => '10K - 500K',
                        'description' => 'Para scaling startups, ready for growth',
                        'features' => [
                            'Microservices architecture',
                            'Advanced features & integrations',
                            'Kubernetes deployment',
                            'Multi-region support',
                            'Advanced analytics',
                            'Performance optimization',
                            'Security audit & hardening',
                            '3 months support included'
                        ],
                        'best_for' => 'Growth-stage startups, Series A/B'
                    ],
                    [
                        'name' => 'Enterprise Solution',
                        'price' => '$150K+',
                        'timeline' => '6-12 tháng',
                        'users' => '500K - 100M+',
                        'description' => 'Enterprise-grade, fully customized',
                        'features' => [
                            'Custom architecture design',
                            'Global multi-region deployment',
                            'Advanced scaling & redundancy',
                            'ISO 27001, SOC 2, GDPR compliance',
                            '99.99% SLA guarantee',
                            ' 24/7 dedicated support',
                            '6-12 months ongoing support',
                            'White-label options',
                            'Custom integrations'
                        ],
                        'best_for' => 'Enterprises, Fortune 500, Regulated industries'
                    ]
                ];
                
                foreach ($plans as $index => $plan):
                    $is_featured = $index === 1;
                ?>
                <div style="background: white; border-radius: 12px; border: <?php echo $is_featured ? '2px solid var(--primary)' : '1px solid var(--border)'; ?>; padding: 2.5rem; transition: all 0.3s ease; position: relative;" onmouseover="this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.15)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow=''; this.style.transform='';">
                    <?php if ($is_featured): ?>
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary); color: white; padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 700;">
                        MOST POPULAR
                    </div>
                    <?php endif; ?>
                    
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        <?php echo $plan['name']; ?>
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        <?php echo $plan['description']; ?>
                    </p>
                    
                    <div style="background: var(--secondary-bg); padding: 1.5rem; border-radius: 12px; margin-bottom: 1.5rem;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div>
                                <div style="color: var(--text-gray); font-size: 0.9rem; margin-bottom: 0.3rem;">Giá từ</div>
                                <div style="font-size: 2rem; font-weight: 800; color: var(--primary);">
                                    <?php echo $plan['price']; ?>
                                </div>
                            </div>
                            <div>
                                <div style="color: var(--text-gray); font-size: 0.9rem; margin-bottom: 0.3rem;">Timeline</div>
                                <div style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark);">
                                    <?php echo $plan['timeline']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 1.5rem;">
                        <div style="color: var(--text-gray); font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Hỗ Trợ:</strong> <?php echo $plan['users']; ?></div>
                    </div>
                    
                    <ul style="list-style: none; margin-bottom: 2rem;">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li style="padding: 0.6rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.75rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--accent); font-weight: 800;">✓</span>
                            <?php echo $feature; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <div style="border-top: 1px solid var(--border); padding-top: 1.5rem;">
                        <div style="background: var(--secondary-bg); padding: 0.75rem 1rem; border-radius: 8px; text-align: center; margin-bottom: 1rem;">
                            <strong style="color: var(--text-dark); font-size: 0.9rem;">Phù hợp với:</strong>
                            <div style="color: var(--text-gray); font-size: 0.9rem; margin-top: 0.3rem;"><?php echo $plan['best_for']; ?></div>
                        </div>
                        <a href="contact.php" style="background: <?php echo $is_featured ? 'var(--primary)' : 'white'; ?>; color: <?php echo $is_featured ? 'white' : 'var(--primary)'; ?>; border: 2px solid var(--primary); padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; width: 100%; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='<?php echo !$is_featured ? 'var(--secondary-bg)' : 'var(--primary-dark)'; ?>';" onmouseout="this.style.backgroundColor='<?php echo $is_featured ? 'var(--primary)' : 'white'; ?>';">
                            Liên Hệ Để Tư Vấn
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- What's Included -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Mỗi Package Bao Gồm</h2>
                <p class="section-subtitle">Tất cả những gì cần để succeed</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $inclusions = [
                    ['icon' => 'design_services', 'title' => 'Discovery & Design', 'desc' => 'Architecture workshop, wireframes, UI/UX design, tech recommendations'],
                    ['icon' => 'code', 'title' => 'Development', 'desc' => 'Clean code, best practices, version control, code reviews'],
                    ['icon' => 'verified', 'title' => 'QA & Testing', 'desc' => 'Functional testing, performance testing, security scanning'],
                    ['icon' => 'cloud_upload', 'title' => 'Deployment', 'desc' => 'CI/CD setup, infrastructure provisioning, production deployment'],
                    ['icon' => 'school', 'title' => 'Knowledge Transfer', 'desc' => 'Documentation, team training, handover support'],
                    ['icon' => 'support_agent', 'title' => 'Post-Launch Support', 'desc' => 'Bug fixes, optimization, monitoring, 24/7 emergency support'],
                ];
                foreach ($inclusions as $inc):
                ?>
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded"><?php echo $inc['icon']; ?></span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        <?php echo $inc['title']; ?>
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        <?php echo $inc['desc']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Comparison -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Comparison Table</h2>
                <p class="section-subtitle">Chi tiết từng package</p>
            </div>
            
            <style>
                @media (max-width: 767px) {
                    .pricing-table-wrapper {
                        overflow-x: auto;
                        -webkit-overflow-scrolling: touch;
                    }
                    .pricing-table-wrapper table {
                        font-size: 0.85rem;
                    }
                    .pricing-table-wrapper th,
                    .pricing-table-wrapper td {
                        padding: 0.75rem 0.5rem !important;
                    }
                }
            </style>
            
            <div class="pricing-table-wrapper" style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; border: 1px solid var(--border); min-width: 600px;">
                    <thead style="background: var(--primary); color: white;">
                        <tr>
                            <th style="padding: 1rem; text-align: left; font-weight: 700;">Feature</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700;">Startup MVP</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700;">Growth</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700;">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $comparison = [
                            ['feature' => 'Development', 'startup' => '✓', 'growth' => '✓', 'enterprise' => '✓'],
                            ['feature' => 'Microservices', 'startup' => '○', 'growth' => '✓', 'enterprise' => '✓'],
                            ['feature' => 'Kubernetes', 'startup' => '○', 'growth' => '✓', 'enterprise' => '✓'],
                            ['feature' => 'Multi-region', 'startup' => '○', 'growth' => '○', 'enterprise' => '✓'],
                            ['feature' => 'Security Audit', 'startup' => '○', 'growth' => '✓', 'enterprise' => '✓'],
                            ['feature' => 'Compliance (ISO/SOC2)', 'startup' => '○', 'growth' => '○', 'enterprise' => '✓'],
                            ['feature' => 'SLA Guarantee', 'startup' => 'Best effort', 'growth' => '99.9%', 'enterprise' => '99.99%'],
                            ['feature' => 'Support Duration', 'startup' => '30 days', 'growth' => '3 months', 'enterprise' => '6-12 months'],
                            ['feature' => 'Support Hours', 'startup' => 'Business hours', 'growth' => '24/5', 'enterprise' => '24/7'],
                            ['feature' => 'Dedicated Support', 'startup' => '○', 'growth' => '○', 'enterprise' => '✓'],
                        ];
                        foreach ($comparison as $row):
                        ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1rem; font-weight: 600; color: var(--text-dark);"><?php echo $row['feature']; ?></td>
                            <td style="padding: 1rem; text-align: center; color: var(--text-gray);"><?php echo $row['startup']; ?></td>
                            <td style="padding: 1rem; text-align: center; color: var(--text-gray);"><?php echo $row['growth']; ?></td>
                            <td style="padding: 1rem; text-align: center; color: var(--text-gray);"><?php echo $row['enterprise']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Câu Hỏi Thường Gặp</h2>
                <p class="section-subtitle">About pricing & terms</p>
            </div>
            
            <div style="display: grid; gap: 1.5rem; max-width: 900px; margin: 0 auto;">
                <?php
                $faqs = [
                    ['q' => 'Giá có bao gồm gì?', 'a' => 'Giá bao gồm development, QA, deployment, documentation, và support theo package. Infrastructure cost (AWS/GCP) là separate.'],
                    ['q' => 'Có thể thay đổi scope trong project không?', 'a' => 'Có! Chúng tôi dùng Agile/SCRUM. Feedback mỗi sprint, có thể adjust priorities và thêm/bớt features.'],
                    ['q' => 'Thanh toán thế nào?', 'a' => 'Thường: 30% upfront, 40% mid-project, 30% on completion. Flexible terms available for long-term contracts.'],
                    ['q' => 'Có hidden fees không?', 'a' => 'Không! Tất cả costs transparent. Infrastructure, support, maintenance - tất cả đều nói rõ từ đầu.'],
                    ['q' => 'Hỗ trợ sau project kết thúc như thế nào?', 'a' => 'Included support theo package. After đó, có thể extend bằng support plans: Basic ($2K/month), Plus ($5K/month), Premium ($10K+/month).'],
                    ['q' => 'Nếu project delay có phải trả thêm không?', 'a' => 'Không. Price là fixed. Nếu delay do chúng tôi, timeline delay nhưng price không thay đổi.'],
                ];
                foreach ($faqs as $faq):
                ?>
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        ❓ <?php echo $faq['q']; ?>
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6; margin: 0;">
                        <?php echo $faq['a']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Custom Quote Section -->
    <section style="background: white;">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; border: 1px solid var(--border);">
                <h2 style="font-size: 2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1rem;">
                    Cần Custom Solution?
                </h2>
                <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                    Nếu project của bạn không fit vào 3 plans, chúng tôi có thể customize scope, timeline, giá. Hãy liên hệ để discuss.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="contact.php" style="background: var(--primary); color: white; padding: 0.85rem 2rem; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--primary-dark)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.backgroundColor='var(--primary)'; this.style.transform='';">
                        Yêu Cầu Custom Quote
                    </a>
                    <a href="services.php" style="background: white; color: var(--primary); border: 2px solid var(--primary); padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                        Xem Dịch Vụ
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 4rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Sẵn Sàng Bắt Đầu?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Tư vấn miễn phí để find plan phù hợp nhất cho business của bạn
                </p>
                <a href="contact.php" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)';" onmouseout="this.style.backgroundColor='white'; this.style.transform=''; this.style.boxShadow='';">
                    <span>Đặt Tư Vấn</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

<?php include '_footer.php'; ?>
