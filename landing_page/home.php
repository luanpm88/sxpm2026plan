<?php
$page_title = "HKIncotech - Phát Triển Phần Mềm Doanh Nghiệp";
$page_description = "Xây dựng phần mềm quy mô toàn cầu theo SCRUM. 12+ năm kinh nghiệm, 150+ dự án, 80+ khách hàng.";
include '_header.php';
?>

    <!-- Hero Section -->
    <section class="hero" style="min-height: 90vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <style>
            @media (max-width: 767px) {
                .hero {
                    min-height: auto;
                    padding: 3rem 0 !important;
                }
                .hero-grid {
                    grid-template-columns: 1fr !important;
                    gap: 2rem !important;
                }
                .hero h1 {
                    font-size: 2rem !important;
                }
                .hero-content p {
                    font-size: 0.95rem !important;
                }
                .hero-stats {
                    gap: 1.5rem !important;
                    grid-template-columns: 1fr !important;
                }
                .hero-stats > div {
                    font-size: 1.5rem !important;
                }
                .hero-stats > div > div:first-child {
                    font-size: 1.75rem !important;
                }
                .hero-svg-box {
                    min-height: 300px !important;
                }
            }
        </style>
        <div class="container-v5">
            <div class="hero-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                <div class="hero-content">
                    <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                        Xây Dựng Phần Mềm<br><span style="color: var(--primary);">Doanh Nghiệp Quy Mô Toàn Cầu</span>
                    </h1>
                    <p style="font-size: 1.15rem; color: var(--text-gray); margin-bottom: 2.5rem; line-height: 1.8;">
                        HKIncotech là partner phát triển phần mềm hàng đầu Đông Nam Á. Chúng tôi xây dựng hệ thống phức tạp, AI platform, SaaS solutions theo SCRUM methodology với 12+ năm kinh nghiệm.
                    </p>
                    <div style="display: flex; gap: 1.25rem; margin-bottom: 3rem; flex-wrap: wrap;">
                        <a href="contact.php" class="btn-primary-v5">
                            <span>Tư Vấn Miễn Phí</span>
                            <span class="material-symbols-rounded">arrow_forward</span>
                        </a>
                        <a href="services.php" class="btn-secondary-v5">
                            <span>Khám Phá Dịch Vụ</span>
                            <span class="material-symbols-rounded">explore</span>
                        </a>
                    </div>
                    <div class="hero-stats" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 3rem; padding-top: 2.5rem; border-top: 1px solid var(--border);">
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">12+</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Năm Kinh Nghiệm</div>
                        </div>
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">150+</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Dự Án Hoàn Thành</div>
                        </div>
                        <div>
                            <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">99.99%</div>
                            <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Uptime SLA</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-svg-box" style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; min-height: 450px;">
                    <svg viewBox="0 0 350 350" style="width: 100%; max-width: 350px;">
                        <!-- Background circles -->
                        <circle cx="175" cy="175" r="160" fill="none" stroke="#0f6b9e" stroke-width="1" opacity="0.1"/>
                        <circle cx="175" cy="175" r="120" fill="none" stroke="#0f6b9e" stroke-width="1" opacity="0.15"/>
                        <circle cx="175" cy="175" r="80" fill="none" stroke="#0f6b9e" stroke-width="1" opacity="0.2"/>
                        
                        <!-- Nodes -->
                        <circle cx="175" cy="80" r="12" fill="#0f6b9e"/>
                        <circle cx="265" cy="130" r="12" fill="#0f6b9e"/>
                        <circle cx="285" cy="220" r="12" fill="#0f6b9e"/>
                        <circle cx="175" cy="270" r="12" fill="#0f6b9e"/>
                        <circle cx="65" cy="220" r="12" fill="#0f6b9e"/>
                        <circle cx="85" cy="130" r="12" fill="#0f6b9e"/>
                        <circle cx="175" cy="175" r="16" fill="#059669"/>
                        
                        <!-- Connections -->
                        <line x1="175" y1="80" x2="265" y2="130" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="265" y1="130" x2="285" y2="220" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="285" y1="220" x2="175" y2="270" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="175" y1="270" x2="65" y2="220" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="65" y1="220" x2="85" y2="130" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        <line x1="85" y1="130" x2="175" y2="80" stroke="#0f6b9e" stroke-width="2" opacity="0.4"/>
                        
                        <!-- Center to nodes -->
                        <line x1="175" y1="175" x2="175" y2="80" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="265" y2="130" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="285" y2="220" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="175" y2="270" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="65" y2="220" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        <line x1="175" y1="175" x2="85" y2="130" stroke="#059669" stroke-width="2" opacity="0.5"/>
                        
                        <!-- Labels -->
                        <text x="175" y="55" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Frontend</text>
                        <text x="290" y="105" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Backend</text>
                        <text x="305" y="225" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Database</text>
                        <text x="175" y="295" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">DevOps</text>
                        <text x="35" y="225" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Security</text>
                        <text x="55" y="105" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">AI/ML</text>
                        
                        <text x="175" y="180" text-anchor="middle" font-size="14" fill="#059669" font-weight="bold">SCRUM</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section id="services" style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Dịch Vụ Chính</h2>
                <p class="section-subtitle">4 dịch vụ giải quyết toàn bộ nhu cầu phần mềm của doanh nghiệp</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease; position: relative;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">code</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Custom Software Development</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Phát triển ứng dụng từ đầu với kiến trúc cloud-native, microservices, DevOps automation.
                    </p>
                    <a href="services.php" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">workspace_premium</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">SaaS Platform</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Nền tảng multi-tenant với khả năng mở rộng vô hạn. HKSpace là SaaS flagship của chúng tôi.
                    </p>
                    <a href="services.php" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">psychology</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">AI Knowledge Platform</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Nền tảng AI tích hợp NLP, RAG, vector databases, LLM integration.
                    </p>
                    <a href="services.php" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
                
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2.5rem 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">shield</span>
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Security & Compliance</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Kiến trúc bảo mật enterprise-grade. ISO 27001, SOC 2, OWASP compliant.
                    </p>
                    <a href="services.php" style="color: var(--primary); font-weight: 600; text-decoration: none;">Xem Chi Tiết →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRUM Process Preview -->
    <section id="process">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Quy Trình SCRUM</h2>
                <p class="section-subtitle">Phương pháp phát triển agile giúp bạn thấy tiến độ real-time</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem;">
                <?php
                $processes = [
                    ['icon' => 'lightbulb', 'title' => 'Khám Phá', 'desc' => 'Tư vấn, lập kế hoạch'],
                    ['icon' => 'architecture', 'title' => 'Thiết Kế', 'desc' => 'Wireframe, kiến trúc'],
                    ['icon' => 'code', 'title' => 'Phát Triển', 'desc' => 'Sprint cycles'],
                    ['icon' => 'verified', 'title' => 'QA Testing', 'desc' => 'Kiểm thử toàn diện'],
                    ['icon' => 'cloud_upload', 'title' => 'Deploy', 'desc' => 'Launch sản phẩm'],
                    ['icon' => 'support_agent', 'title' => 'Support', 'desc' => '24/7 hỗ trợ'],
                ];
                foreach ($processes as $p):
                ?>
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem 1.5rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded"><?php echo $p['icon']; ?></span>
                    </div>
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;"><?php echo $p['title']; ?></h3>
                    <p style="font-size: 0.9rem; color: var(--text-gray);"><?php echo $p['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="scrum.php" class="btn-primary-v5">
                    <span>Tìm Hiểu Quy Trình Chi Tiết</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Tại Sao Chọn HKIncotech?</h2>
                <p class="section-subtitle">Partner phát triển phần mềm đáng tin cậy</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $features = [
                    ['icon' => 'verified_user', 'title' => 'Kinh Nghiệm Sâu', 'desc' => '12+ năm xây dựng hệ thống enterprise-grade'],
                    ['icon' => 'groups', 'title' => 'Team Giỏi Giang', 'desc' => '100+ engineers & architects chuyên gia'],
                    ['icon' => 'speed', 'title' => 'Delivery Nhanh', 'desc' => 'MVP trong 4-8 tuần, scale linh hoạt'],
                    ['icon' => 'shield_lock', 'title' => 'Bảo Mật Cao', 'desc' => 'ISO 27001, SOC 2, OWASP Level 3'],
                    ['icon' => 'trending_up', 'title' => 'Kiến Trúc Scalable', 'desc' => 'Từ 100 → 10M+ concurrent users'],
                    ['icon' => 'handshake', 'title' => 'Partnership', 'desc' => 'Strategic partner, không chỉ vendor'],
                ];
                foreach ($features as $f):
                ?>
                <div style="background: white; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded"><?php echo $f['icon']; ?></span>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;"><?php echo $f['title']; ?></h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;"><?php echo $f['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section>
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Sẵn Sàng Bắt Đầu?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Đặt 30 phút tư vấn miễn phí để thảo luận về dự án của bạn
                </p>
                <a href="contact.php" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Đặt Tư Vấn Ngay</span>
                </a>
            </div>
        </div>
    </section>

<?php include '_footer.php'; ?>
