@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <div style="display: inline-block; background: #e0f2fe; color: #0369a1; padding: 0.5rem 1.5rem; border-radius: 20px; margin-bottom: 1.5rem; font-size: 0.9rem; font-weight: 600;">
                    Deep Research & Innovation
                </div>
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Our <span style="color: var(--primary);">Core R&D Initiatives</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    Pioneering technology platforms designed for tomorrow's enterprise demands. Explore our research-driven innovations in scalable systems and artificial intelligence.
                </p>
            </div>
        </div>
    </section>

    <!-- R&D Articles -->
    <section style="background: white; padding: 4rem 2rem;">
        <div class="container-v5">
            
            <!-- HKSpace Article -->
            @include('landing_page.blog.r_and_d.hkspace')

            <!-- Divider -->
            <div style="height: 1px; background: var(--border); margin: 4rem 0;"></div>

            <!-- AI Knowledge Platform Article -->
            @include('landing_page.blog.r_and_d.ai')

        </div>
    </section>

    <!-- Research Highlights -->
    <section style="background: var(--secondary-bg); padding: 4rem 2rem;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Research Capabilities</h2>
                <p class="section-subtitle">Our multidisciplinary approach to building the future of enterprise software</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">architecture</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Scalable Architecture</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        Building systems designed to grow from hundreds to billions of users without performance degradation.
                    </p>
                </div>

                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">psychology</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">AI & Machine Learning</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        Leveraging cutting-edge AI/ML techniques to solve complex business problems and enable intelligent automation.
                    </p>
                </div>

                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">security</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Enterprise Security</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        Zero-trust architecture and encryption-first design principles embedded at every layer of our platforms.
                    </p>
                </div>

                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">cloud</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Cloud Infrastructure</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        Multi-cloud strategies enabling geographic distribution, disaster recovery, and optimal performance globally.
                    </p>
                </div>

                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">data_object</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Data Engineering</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        Real-time data pipelines and advanced analytics infrastructure handling petabyte-scale datasets.
                    </p>
                </div>

                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">auto_awesome</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">Innovation Lab</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        Continuous experimentation with emerging technologies to keep our platforms at the forefront of industry.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: white;">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Interested in Our R&D?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Let's discuss how our research-driven platforms can power your enterprise.
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Start a Conversation</span>
                </a>
            </div>
        </div>
    </section>

@endsection
