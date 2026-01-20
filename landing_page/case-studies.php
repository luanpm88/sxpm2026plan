<?php
$page_title = "Case Studies - HKIncotech";
$page_description = "150+ projects thành công. E-commerce, FinTech, Healthcare, Supply Chain, SaaS platforms. Results & metrics.";
include '_header.php';
?>

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Portfolio & Case Studies
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                    150+ dự án thành công. Từ startup MVP đến enterprise solutions. Tổng giá trị dự án: $500M+
                </p>
                <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                    Các kết quả thực tế từ E-commerce, FinTech, Healthcare, AI, Supply Chain, SaaS platforms
                </p>
            </div>
        </div>
    </section>

    <!-- Quick Stats -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem;">
                <?php
                $stats = [
                    ['num' => '150+', 'label' => 'Projects Delivered', 'desc' => 'MVP to enterprise-scale'],
                    ['num' => '50+', 'label' => 'Senior Developers', 'desc' => 'Expert team on projects'],
                    ['num' => '$500M+', 'label' => 'Total Project Value', 'desc' => 'Client investments funded'],
                    ['num' => '98%', 'label' => 'Client Satisfaction', 'desc' => 'NPS score average'],
                    ['num' => '12+', 'label' => 'Industries Served', 'desc' => 'Diverse verticals'],
                    ['num' => '10M+', 'label' => 'End Users Impacted', 'desc' => 'Global reach'],
                ];
                foreach ($stats as $s):
                ?>
                <div style="background: white; border-radius: 12px; padding: 2rem; text-align: center; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                        <?php echo $s['num']; ?>
                    </div>
                    <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        <?php echo $s['label']; ?>
                    </div>
                    <div style="font-size: 0.9rem; color: var(--text-gray);">
                        <?php echo $s['desc']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Featured Case Studies -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Case Studies Nổi Bật</h2>
                <p class="section-subtitle">Những dự án mang lại giá trị lớn cho business</p>
            </div>
            
            <div style="display: grid; gap: 3rem;">
                <?php
                $cases = [
                    [
                        'title' => 'E-Commerce Platform - Fashion Retail',
                        'client' => 'Fashion Leader Vietnam',
                        'industry' => 'E-commerce',
                        'challenge' => 'Cần platform e-commerce handle 100K+ concurrent users, real-time inventory, multiple payment methods',
                        'solution' => 'Built React + Node.js app on AWS, microservices architecture, Redis caching, Stripe + local payment integration',
                        'results' => ['2M+ transactions/year', '40% increase in conversion rate', '$50M+ annual revenue', '99.95% uptime'],
                        'timeline' => '4 months'
                    ],
                    [
                        'title' => 'FinTech Platform - Digital Banking',
                        'client' => 'Fintech Startup SEA',
                        'industry' => 'Financial Services',
                        'challenge' => 'Build secure digital banking platform complying PCI DSS, ISO 27001. Real-time settlements with banks.',
                        'solution' => 'Java microservices, PostgreSQL sharding, Kafka for events, HSM integration, comprehensive audit logs',
                        'results' => ['500K+ users on-boarded', 'Zero security incidents', '$200M+ transaction value', 'ISO 27001 certified'],
                        'timeline' => '6 months'
                    ],
                    [
                        'title' => 'Healthcare AI Platform',
                        'client' => 'Healthcare Provider Vietnam',
                        'industry' => 'Healthcare',
                        'challenge' => 'AI-powered diagnosis system integrating patient records, medical imaging, doctor workflow. HIPAA ready.',
                        'solution' => 'Python ML models, FastAPI backend, React frontend, DICOM image processing, HL7 integration',
                        'results' => ['95% diagnostic accuracy', '50% faster diagnosis time', 'HIPAA compliant', '100K+ patients served'],
                        'timeline' => '8 months'
                    ],
                    [
                        'title' => 'Supply Chain Management - Logistics',
                        'client' => 'Logistics Company Thailand',
                        'industry' => 'Supply Chain',
                        'challenge' => 'Real-time tracking of 1000+ shipments, automated route optimization, customer notifications',
                        'solution' => 'Next.js frontend, Node.js backend, Google Maps API, GraphQL, real-time WebSockets',
                        'results' => ['30% cost reduction', 'Real-time tracking accuracy', '99.9% uptime', '2K+ daily shipments tracked'],
                        'timeline' => '5 months'
                    ],
                    [
                        'title' => 'SaaS Platform - Project Management',
                        'client' => 'HKSpace Internal',
                        'industry' => 'SaaS',
                        'challenge' => 'Multi-tenant platform with real-time collaboration, advanced permissions, custom workflows',
                        'solution' => 'Vue.js + Node.js, MongoDB for flexibility, Redis caching, WebSocket for real-time',
                        'results' => ['50K+ active users', '$2M+ ARR', 'Multi-region deployment', '99.99% SLA'],
                        'timeline' => '6 months'
                    ],
                    [
                        'title' => 'Retail Analytics - AI-Powered Insights',
                        'client' => 'Retail Chain Vietnam',
                        'industry' => 'Retail',
                        'challenge' => 'Analyze sales across 500+ stores, customer behavior, inventory optimization using AI',
                        'solution' => 'Big Data pipeline (Spark), TensorFlow models, Power BI dashboards, real-time analytics',
                        'results' => ['15% inventory reduction', '20% sales increase', 'Real-time insights', '500 stores connected'],
                        'timeline' => '5 months'
                    ],
                ];
                
                foreach ($cases as $index => $case):
                ?>
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 3rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                        <div>
                            <div style="display: inline-block; background: var(--primary); color: white; padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600; margin-bottom: 1rem;">
                                <?php echo $case['industry']; ?>
                            </div>
                            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                                <?php echo $case['title']; ?>
                            </h3>
                            <p style="color: var(--text-gray); font-size: 0.95rem; margin-bottom: 1.5rem;">
                                <strong>Client:</strong> <?php echo $case['client']; ?> | <strong>Duration:</strong> <?php echo $case['timeline']; ?>
                            </p>
                        </div>
                        <div style="background: white; border-radius: 12px; padding: 1.5rem; border-left: 4px solid var(--primary);">
                            <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem; font-size: 0.95rem;">Kết Quả</h4>
                            <div style="display: grid; gap: 0.5rem;">
                                <?php foreach ($case['results'] as $result): ?>
                                <div style="color: var(--text-gray); font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                                    <span style="color: var(--primary); font-weight: 700;">✓</span>
                                    <?php echo $result; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div>
                            <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Thách Thức</h4>
                            <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                                <?php echo $case['challenge']; ?>
                            </p>
                        </div>
                        <div>
                            <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Giải Pháp</h4>
                            <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                                <?php echo $case['solution']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Industries Served -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Ngành Công Nghiệp Phục Vụ</h2>
                <p class="section-subtitle">Kinh nghiệm đa ngành, deep domain expertise</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $industries = [
                    ['icon' => 'shopping_cart', 'name' => 'E-commerce & Retail', 'projects' => '30+ projects'],
                    ['icon' => 'trending_up', 'name' => 'FinTech & Banking', 'projects' => '25+ projects'],
                    ['icon' => 'local_hospital', 'name' => 'Healthcare & Medical', 'projects' => '20+ projects'],
                    ['icon' => 'school', 'name' => 'EdTech & Training', 'projects' => '18+ projects'],
                    ['icon' => 'local_shipping', 'name' => 'Logistics & Supply Chain', 'projects' => '15+ projects'],
                    ['icon' => 'factory', 'name' => 'Manufacturing & IoT', 'projects' => '12+ projects'],
                    ['icon' => 'apartment', 'name' => 'Real Estate & Construction', 'projects' => '10+ projects'],
                    ['icon' => 'sports_esports', 'name' => 'Gaming & Entertainment', 'projects' => '10+ projects'],
                    ['icon' => 'psychology', 'name' => 'AI & Data Science', 'projects' => '15+ projects'],
                    ['icon' => 'cloud', 'name' => 'SaaS & Cloud', 'projects' => '25+ projects'],
                ];
                foreach ($industries as $ind):
                ?>
                <div style="background: white; border-radius: 12px; padding: 2rem; text-align: center; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded"><?php echo $ind['icon']; ?></span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        <?php echo $ind['name']; ?>
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        <?php echo $ind['projects']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Client Testimonials</h2>
                <p class="section-subtitle">Những lời nhận xét từ khách hàng thực tế</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <?php
                $testimonials = [
                    ['name' => 'CEO, E-Commerce Startup', 'text' => 'HKIncotech không chỉ deliver đúng scope, mà còn proactive suggest improvements. Team communication rất tốt, responsive to feedback.'],
                    ['name' => 'Founder, FinTech Startup', 'text' => 'Kinh nghiệm security & compliance của họ là gold. Giúp chúng tôi pass ISO 27001 & PCI DSS audit lần đầu.'],
                    ['name' => 'Director, Healthcare Provider', 'text' => 'HKSpace team hiểu healthcare domain rất sâu. ML models performance vượt expectations, doctors rất hài lòng.'],
                    ['name' => 'VP Product, Logistics Company', 'text' => 'Scaling from 100 to 2000 shipments/day mà không downtime. Infrastructure planning từ HKIncotech rất solid.'],
                    ['name' => 'CTO, Retail Chain', 'text' => 'Real-time analytics dashboards giúp chúng tôi make data-driven decisions. ROI positive trong 3 tháng.'],
                    ['name' => 'Founder, SaaS Startup', 'text' => 'Post-launch support của họ exceptional. Available 24/7, respond nhanh, solution-oriented. Best vendor experience ever.'],
                ];
                foreach ($testimonials as $t):
                ?>
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='white';" onmouseout="this.style.backgroundColor='var(--secondary-bg)';">
                    <div style="display: flex; gap: 0.3rem; margin-bottom: 1rem;">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <span style="color: #f59e0b; font-size: 1.2rem;">★</span>
                        <?php endfor; ?>
                    </div>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem; font-style: italic;">
                        "<?php echo $t['text']; ?>"
                    </p>
                    <div style="font-weight: 600; color: var(--text-dark); font-size: 0.9rem;">
                        <?php echo $t['name']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 4rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Hãy Là Câu Chuyện Thành Công Tiếp Theo</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    150+ projects thành công. Chúng tôi sẵn sàng giúp bạn achieve business goals.
                </p>
                <a href="contact.php" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)';" onmouseout="this.style.backgroundColor='white'; this.style.transform=''; this.style.boxShadow='';">
                    <span>Bắt Đầu Dự Án</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

<?php include '_footer.php'; ?>
