@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Về <span style="color: var(--primary);">HKIncotech</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    12+ năm phát triển các giải pháp software tiên tiến. 150+ dự án thành công. 50+ chuyên gia hàng đầu. 1 mục tiêu: Digital transformation của bạn.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Câu Chuyện HKIncotech</h2>
                <p class="section-subtitle">Từ một nhóm nhỏ đến công ty công nghệ hàng đầu</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                <div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">
                        🚀 Khởi Đầu (2012)
                    </h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        HKIncotech bắt đầu từ một nhóm nhỏ 5 developers với passion xây dựng software chất lượng cao. Chúng tôi tin rằng công nghệ tốt sẽ thay đổi business.
                    </p>
                    
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">
                        📈 Tăng Trưởng (2015-2018)
                    </h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        Với track record 100+ dự án thành công, chúng tôi mở văn phòng tại Singapore, Thái Lan. Đội ngũ lớn lên thành 30+ developers. Client: startup đến Fortune 500.
                    </p>
                    
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">
                        🌟 Hiện Tại (2024)
                    </h3>
                    <p style="color: var(--text-gray); line-height: 1.8;">
                        50+ senior developers. 150+ projects. Chuyên môn: SaaS, AI, Enterprise Solutions. Sứ mệnh: Giúp 1000+ company digital transform thành công.
                    </p>
                </div>
                
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border); text-align: center;">
                    <svg viewBox="0 0 300 300" style="width: 100%; max-width: 300px;">
                        <!-- Timeline -->
                        <line x1="150" y1="30" x2="150" y2="270" stroke="#0f6b9e" stroke-width="2"/>
                        
                        <!-- 2012 -->
                        <circle cx="150" cy="50" r="12" fill="#0f6b9e"/>
                        <circle cx="150" cy="50" r="8" fill="white"/>
                        <text x="180" y="55" font-size="13" fill="#0f6b9e" font-weight="bold">2012: Start</text>
                        <text x="180" y="68" font-size="11" fill="#666">5 developers</text>
                        
                        <!-- 2015 -->
                        <circle cx="150" cy="110" r="12" fill="#059669"/>
                        <circle cx="150" cy="110" r="8" fill="white"/>
                        <text x="180" y="115" font-size="13" fill="#059669" font-weight="bold">2015: Growth</text>
                        <text x="180" y="128" font-size="11" fill="#666">15 projects/year</text>
                        
                        <!-- 2018 -->
                        <circle cx="150" cy="170" r="12" fill="#f59e0b"/>
                        <circle cx="150" cy="170" r="8" fill="white"/>
                        <text x="180" y="175" font-size="13" fill="#f59e0b" font-weight="bold">2018: Expansion</text>
                        <text x="180" y="188" font-size="11" fill="#666">30+ developers</text>
                        
                        <!-- 2024 -->
                        <circle cx="150" cy="250" r="12" fill="#10b981"/>
                        <circle cx="150" cy="250" r="8" fill="white"/>
                        <text x="180" y="255" font-size="13" fill="#10b981" font-weight="bold">2024: Lead</text>
                        <text x="180" y="268" font-size="11" fill="#666">50+ team, 150+ projects</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Sứ Mệnh & Giá Trị</h2>
                <p class="section-subtitle">Những giá trị cốt lõi định hình mọi quyết định của chúng tôi</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $values = [
                    ['icon' => 'target', 'title' => 'Sứ Mệnh', 'desc' => 'Giúp 1000+ company digital transform thành công. Xây dựng software mà thay đổi business.'],
                    ['icon' => 'diamond', 'title' => 'Chất Lượng Hàng Đầu', 'desc' => 'Không bao giờ compromise về quality. 90%+ test coverage, 0 defects tolerance.'],
                    ['icon' => 'handshake', 'title' => 'Partnership Mindset', 'desc' => 'Bạn thắng, chúng tôi thắng. Long-term relationship > short-term profit.'],
                    ['icon' => 'innovation', 'title' => 'Innovation', 'desc' => 'Luôn learning, experimenting, pushing boundaries. Adopt best practices từ Silicon Valley.'],
                    ['icon' => 'people', 'title' => 'People First', 'desc' => 'Đầu tư vào team. Happy team = Happy client. Continuous learning & growth.'],
                    ['icon' => 'globe', 'title' => 'Transparency', 'desc' => 'Honest communication. Real-time updates. No surprises. Full visibility.'],
                ];
                @endphp
                @foreach($values as $v)
                <div style="background: white; border-radius: 12px; padding: 2rem; text-align: center;">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $v['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $v['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        {{ $v['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Achievements -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Thành Tích & Giải Thưởng</h2>
                <p class="section-subtitle">Công nhân của những nỗ lực liên tục</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                @php
                $achievements = [
                    ['num' => '150+', 'title' => 'Projects Completed', 'desc' => 'Từ startup đến Enterprise'],
                    ['num' => '50+', 'title' => 'Senior Developers', 'desc' => 'Certified & experienced team'],
                    ['num' => '99.99%', 'title' => 'Uptime Record', 'desc' => 'Reliability commitment'],
                    ['num' => '12+', 'title' => 'Years Experience', 'desc' => 'Track record proven'],
                    ['num' => '$500M+', 'title' => 'Project Value', 'desc' => 'Delivered solutions'],
                    ['num' => '30+', 'title' => 'Industry Awards', 'desc' => 'Recognition & accolades'],
                ];
                @endphp
                @foreach($achievements as $a)
                <div style="background: white; border-radius: 12px; padding: 2.5rem; text-align: center; border: 1px solid var(--border);">
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                        {{ $a['num'] }}
                    </div>
                    <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        {{ $a['title'] }}
                    </div>
                    <div style="font-size: 0.9rem; color: var(--text-gray);">
                        {{ $a['desc'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Bắt Đầu Hành Trình Cùng HKIncotech</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Dù bạn cần 1 MVP hoặc 1 enterprise system, chúng tôi sẵn sàng transform ý tưởng thành reality
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Liên Hệ Ngay</span>
                </a>
            </div>
        </div>
    </section>

@endsection
