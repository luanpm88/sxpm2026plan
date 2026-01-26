@extends('layouts.one-page')
@section('custom_head')
    <style>
        /* html, body { scroll-behavior: smooth; }
        .onepage-section { padding: 80px 0 60px; }
        .section-title { font-size: 2.2rem; font-weight: 800; color: #1f2937; margin-bottom: 30px; text-align: center; }
        .section-subtitle { font-size: 1.1rem; color: #6b7280; text-align: center; margin-bottom: 40px; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
        .onepage-navbar { position: fixed; top: 0; left: 0; width: 100%; background: #fff; z-index: 100; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .onepage-navbar .container { display: flex; gap: 30px; justify-content: center; align-items: center; height: 60px; }
        .nav-link { color: #0f6b9e; font-weight: 600; text-decoration: none; padding: 8px 18px; border-radius: 6px; transition: background 0.2s; }
        .nav-link:hover, .nav-link.active { background: #e0e7ef; color: #1e40af; }
        @media (max-width: 900px) { .section-title { font-size: 1.5rem; } .container { padding: 0 8px; } } */
        .nav-link:hover, .nav-link.active { color: #30699A; }
    </style>
@endsection
@section('content')
    @include('landing_page.partials.hero')
    @include('landing_page.partials.about')
    @include('landing_page.partials.services')
    @include('landing_page.partials.scrum')
    @include('landing_page.partials.tech_stack')
    @include('landing_page.partials.case_studies')
    @include('landing_page.partials.certifications')
    @include('landing_page.partials.pricing')
    @include('landing_page.partials.contact')

    {{-- <section id="hero" class="onepage-section" style="background: linear-gradient(135deg, #e0e7ef 0%, #f9fafb 100%);">
        <div class="container">
            <div style="text-align:center; max-width:700px; margin:0 auto;">
                <h1 class="section-title">HKIncotech — Nâng tầm giải pháp số doanh nghiệp</h1>
                <div class="section-subtitle">12+ năm phát triển phần mềm, 50+ dự án lớn nhỏ, 10+ ngành, 10M+ queries AI/ngày, 100% real-time sync, 1M+ giao dịch logistics/ngày</div>
                <a href="#services" class="nav-link" style="background:#0f6b9e;color:#fff;font-size:1.1rem;padding:14px 36px;margin-top:30px;display:inline-block;">Khám phá dịch vụ</a>
            </div>
        </div>
    </section>
    <section id="services" class="onepage-section">
        <div class="container">
            <h2 class="section-title">Dịch vụ nổi bật</h2>
            <div class="section-subtitle">Từ SaaS, AI, Logistics, Education, đến giải pháp Cloud & DevOps</div>
            @include('landing_page.partials.services')
        </div>
    </section>
    <section id="case-studies" class="onepage-section" style="background: #f9fafb;">
        <div class="container">
            <h2 class="section-title">Case Studies & Success Stories</h2>
            <div class="section-subtitle">Những dự án tiêu biểu, kết quả thực tế, chỉ số vận hành & chuyển đổi số</div>
            @include('landing_page.partials.case_studies')
        </div>
    </section>
    <section id="team" class="onepage-section">
        <div class="container">
            <h2 class="section-title">Đội ngũ & Lộ trình phát triển</h2>
            <div class="section-subtitle">Chuyên gia BA, Dev, QA, UI/UX, DevOps, PO — Lộ trình nghề nghiệp & chứng chỉ rõ ràng</div>
            @include('landing_page.partials.team_roadmap')
        </div>
    </section>
    <section id="certs" class="onepage-section" style="background: #f9fafb;">
        <div class="container">
            <h2 class="section-title">Chứng chỉ & Đào tạo</h2>
            <div class="section-subtitle">Chuẩn hóa kỹ năng, đào tạo liên tục, roadmap chứng chỉ quốc tế</div>
            @include('landing_page.partials.certs_table')
        </div>
    </section>
    <section id="contact" class="onepage-section">
        <div class="container">
            <h2 class="section-title">Liên hệ & Đăng ký tư vấn</h2>
            <div class="section-subtitle">Đội ngũ HKIncotech sẵn sàng đồng hành cùng doanh nghiệp bạn</div>
            @include('landing_page.partials.contact_form')
        </div>
    </section> --}}
@endsection
