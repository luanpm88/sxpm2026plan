<?php
$page_title = "Liên Hệ - HKIncotech";
$page_description = "Liên hệ HKIncotech cho tư vấn miễn phí. Email, phone, chat. Support 24/7.";
include '_header.php';
?>

    <!-- Hero -->
    <section style="min-height: 50vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <style>
            @media (max-width: 767px) {
                .contact-grid {
                    grid-template-columns: 1fr !important;
                }
                .contact-form input,
                .contact-form select,
                .contact-form textarea {
                    min-height: 44px !important;
                    font-size: 16px !important;
                }
                .contact-form label {
                    font-size: 0.9rem !important;
                }
                .contact-form button {
                    min-height: 48px !important;
                    font-size: 1rem !important;
                }
            }
        </style>
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1rem; color: var(--text-dark);">
                    Chúng Tôi Sẵn Sàng Tư Vấn
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray);">
                    Liên hệ với chúng tôi hôm nay. Tư vấn miễn phí 30 phút với expert.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form + Info -->
    <section>
        <div class="container-v5">
            <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
                <!-- Contact Form -->
                <div>
                    <h2 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">
                        Gửi Tin Nhắn
                    </h2>
                    <form id="contactForm" class="contact-form" style="display: flex; flex-direction: column; gap: 1rem;">
                        <div>
                            <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">
                                Tên của bạn
                            </label>
                            <input type="text" name="name" placeholder="Ví dụ: Nguyễn Văn A" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; height: 44px;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border)'" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'"/>
                        </div>
                        
                        <div>
                            <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">
                                Email
                            </label>
                            <input type="email" name="email" placeholder="email@example.com" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; height: 44px;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'"/>
                        </div>
                        
                        <div>
                            <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">
                                Điện Thoại
                            </label>
                            <input type="tel" name="phone" placeholder="+84 (123) 456-7890" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; height: 44px;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'"/>
                        </div>
                        
                        <div>
                            <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">
                                Công Ty
                            </label>
                            <input type="text" name="company" placeholder="Tên công ty" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; height: 44px;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'"/>
                        </div>
                        
                        <div>
                            <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">
                                Loại Dự Án
                            </label>
                            <select name="project_type" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; height: 44px;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'">
                                <option value="">-- Chọn loại dự án --</option>
                                <option value="custom_software">Custom Software Development</option>
                                <option value="saas">SaaS Platform</option>
                                <option value="mobile_app">Mobile App</option>
                                <option value="ai_ml">AI / Machine Learning</option>
                                <option value="web_app">Web Application</option>
                                <option value="enterprise">Enterprise Solution</option>
                                <option value="consulting">Technology Consulting</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">
                                Tin Nhắn
                            </label>
                            <textarea name="message" placeholder="Mô tả chi tiết dự án của bạn..." required rows="5" style="width: 100%; padding: 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit; transition: all 0.3s ease; resize: vertical; min-height: 120px;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'"></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary-v5" style="background: var(--primary); color: white; padding: 1rem 2rem; border: none; border-radius: 8px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 0.75rem; min-height: 48px;" onmouseover="this.style.backgroundColor='var(--primary-dark)'; this.style.boxShadow='0 8px 20px rgba(15, 107, 158, 0.25)'" onmouseout="this.style.backgroundColor='var(--primary)'; this.style.boxShadow=''">>
                            <span>Gửi Tin Nhắn</span>
                            <span class="material-symbols-rounded">send</span>
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div>
                    <h2 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">
                        Thông Tin Liên Hệ
                    </h2>
                    
                    <!-- Address -->
                    <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; margin-bottom: 1rem;">
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                            <div style="font-size: 2rem; color: var(--primary);">
                                <span class="material-symbols-rounded">location_on</span>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">Văn Phòng Chính</h3>
                                <p style="color: var(--text-gray); font-size: 0.95rem;">
                                    123 Đường Tây Sơn, Phường Trường Chinh<br/>
                                    Quận Đống Đa, Hà Nội, Việt Nam
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; margin-bottom: 1rem;">
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                            <div style="font-size: 2rem; color: var(--primary);">
                                <span class="material-symbols-rounded">phone</span>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">Điện Thoại</h3>
                                <p style="color: var(--text-gray); font-size: 0.95rem;">
                                    <strong>Toll Free:</strong> 1-800-HKINCO (1-800-454-6266)<br/>
                                    <strong>Direct:</strong> +84 243 999 0123<br/>
                                    <strong>Support:</strong> support@hkincotech.com
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; margin-bottom: 1rem;">
                        <div style="display: flex; gap: 1rem;">
                            <div style="font-size: 2rem; color: var(--primary);">
                                <span class="material-symbols-rounded">email</span>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">Email</h3>
                                <p style="color: var(--text-gray); font-size: 0.95rem;">
                                    <strong>Sales:</strong> sales@hkincotech.com<br/>
                                    <strong>Support:</strong> support@hkincotech.com<br/>
                                    <strong>Careers:</strong> careers@hkincotech.com
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hours -->
                    <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem;">
                        <div style="display: flex; gap: 1rem;">
                            <div style="font-size: 2rem; color: var(--primary);">
                                <span class="material-symbols-rounded">schedule</span>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">Giờ Làm Việc</h3>
                                <p style="color: var(--text-gray); font-size: 0.95rem;">
                                    <strong>Thứ 2 - Thứ 6:</strong> 8:00 AM - 6:00 PM<br/>
                                    <strong>Thứ 7:</strong> 9:00 AM - 1:00 PM<br/>
                                    <strong>Support 24/7</strong> cho urgent issues
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <h2 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 2rem; text-align: center;">
                Vị Trí Văn Phòng
            </h2>
            
            <div style="background: white; border-radius: 12px; overflow: hidden; height: 400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4567890123456!2d105.8269!3d21.0073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abc81234!2sHanoi!5e0!3m2!1svi!2svn!4v1234567890" style="width: 100%; height: 100%; border: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Câu Hỏi Thường Gặp</h2>
                <p class="section-subtitle">Giải đáp nhanh nhất</p>
            </div>
            
            <div style="display: grid; gap: 1.5rem; max-width: 900px; margin: 0 auto;">
                <?php
                $faqs = [
                    ['q' => 'Thời gian tư vấn ban đầu bao lâu?', 'a' => 'Tư vấn miễn phí kéo dài 30-45 phút. Chúng tôi sẽ hiểu rõ goals, challenges, timeline của bạn.'],
                    ['q' => 'Giá dịch vụ bao nhiêu?', 'a' => 'Giá tùy thuộc vào scope, complexity, timeline dự án. Chúng tôi sẽ provide detailed proposal sau tư vấn ban đầu.'],
                    ['q' => 'Có hỗ trợ sau project launch không?', 'a' => 'Có! Chúng tôi offer 24/7 support, maintenance, và optimization sau launch. Package support linh hoạt.'],
                    ['q' => 'Có thể bắt đầu ngay không?', 'a' => 'Tùy timing của bạn. Dự án tăng tốc có thể bắt đầu trong 1-2 tuần. Standard projects: 3-4 tuần.'],
                    ['q' => 'NDA có được signed không?', 'a' => 'Absolutely! Chúng tôi luôn sign NDAs. Bảo mật dữ liệu client là first priority.'],
                    ['q' => 'Team size có thể thay đổi được không?', 'a' => 'Có! Team size linh hoạt dựa vào project needs. Có thể scale up/down theo từng phase.'],
                ];
                foreach ($faqs as $faq):
                ?>
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem;">
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem; cursor: pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'">
                        ❓ <?php echo $faq['q']; ?>
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        <?php echo $faq['a']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Sẵn Sàng Để Thảo Luận?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Đặt tư vấn hôm nay - không có cam kết, không có risk. Chỉ là cuộc trò chuyện sáng suốt về dự án của bạn.
                </p>
                <a href="#contactForm" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Gửi Tin Nhắn</span>
                </a>
            </div>
        </div>
    </section>

<?php include '_footer.php'; ?>

<script>
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! We will contact you within 24 hours.');
    this.reset();
});
</script>
