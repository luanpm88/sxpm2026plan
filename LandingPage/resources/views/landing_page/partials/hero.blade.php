<!-- Hero Section -->
<section id="hero" class="hero" style="min-height: 90vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
    <style>
        @media (max-width: 991px) {
            .case-study-grid {
                grid-template-columns: 1fr !important;
            }
        }
        
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
            .case-study-grid {
                grid-template-columns: 1fr !important;
            }
            .case-study-grid > div:last-child {
                min-height: 200px !important;
            }
        }
    </style>
    <div class="container-v5">
        <div class="hero-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div class="hero-content">
                <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Enterprise Software<br><span style="color: var(--primary);">Development Partner</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); margin-bottom: 2.5rem; line-height: 1.8;">
                    HKIncotech is a software development partner in Southeast Asia. We build complex systems, AI platforms, and SaaS solutions using SCRUM methodology with 12+ years of experience.
                </p>
                <div style="display: flex; gap: 1.25rem; margin-bottom: 3rem; flex-wrap: wrap;">
                    <a href="#contact" class="btn-primary-v5">
                        <span>Free Consultation</span>
                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>
                    <a href="#services" class="btn-secondary-v5">
                        <span>View Services</span>
                        <span class="material-symbols-rounded">explore</span>
                    </a>
                </div>
                <div class="hero-stats" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 3rem; padding-top: 2.5rem; border-top: 1px solid var(--border);">
                    <div>
                        <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">12+</div>
                        <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Years Experience</div>
                    </div>
                    <div>
                        <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">10+</div>
                        <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Projects Completed</div>
                    </div>
                    <div>
                        <div style="font-size: 2.25rem; font-weight: 800; color: var(--primary);">99.99%</div>
                        <div style="font-size: 0.95rem; color: var(--text-gray); margin-top: 0.5rem;">Uptime SLA</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-svg-box opacity-75 position-relative" style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; min-height: 450px;">
                <span class="badge  rounded-pill bg-warning position-absolute fs-6 top-0 mt-3">
                    <span class="spinner-border spinner-border-sm me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </span>
                    Update banner
                </span>
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