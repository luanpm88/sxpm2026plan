@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Quy Trình Phát Triển <span style="color: var(--primary);">SCRUM</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                    Phương pháp Agile giúp bạn thấy tiến độ real-time, linh hoạt điều chỉnh, và deliver sản phẩm nhanh hơn 30-50%
                </p>
                <a href="{{ route('landing.contact') }}" class="btn-primary-v5">
                    <span>Tư Vấn Quy Trình SCRUM</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 6-Step Process -->
    <section id="process">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">6 Bước SCRUM Process</h2>
                <p class="section-subtitle">Từ khám phá ý tưởng đến triển khai sản phẩm thành công</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
                @php
                $steps = [
                    ['num' => 1, 'icon' => 'lightbulb', 'title' => 'Khám Phá & Tư Vấn', 'desc' => 'Tiếp cận dự án từ góc độ chiến lược. Phân tích nhu cầu, lập kế hoạch chi tiết'],
                    ['num' => 2, 'icon' => 'architecture', 'title' => 'Thiết Kế & Lập Kế Hoạch', 'desc' => 'Xây dựng kiến trúc hệ thống, wireframe UI/UX, kế hoạch sprint'],
                    ['num' => 3, 'icon' => 'code', 'title' => 'Phát Triển Sprint', 'desc' => 'Team phát triển theo sprint 2-4 tuần, demo sản phẩm mỗi sprint'],
                    ['num' => 4, 'icon' => 'verified', 'title' => 'QA & Testing', 'desc' => 'Kiểm thử toàn diện: unit, integration, UAT, performance'],
                    ['num' => 5, 'icon' => 'cloud_upload', 'title' => 'Triển Khai & Launch', 'desc' => 'Deployment tự động CI/CD, monitoring, incident response'],
                    ['num' => 6, 'icon' => 'support_agent', 'title' => 'Hỗ Trợ & Phát Triển', 'desc' => 'Support 24/7, optimization, thêm features, scaling'],
                ];
                @endphp
                @foreach($steps as $step)
                <div style="background: white; border-radius: 12px; padding: 2.5rem 2rem; border: 1px solid var(--border); transition: all 0.3s ease; text-align: center; position: relative;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(15, 107, 158, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: var(--primary); color: white; border-radius: 50%; font-weight: 800; font-size: 1.5rem; margin-bottom: 1rem;">
                        {{ $step['num'] }}
                    </div>
                    <div style="font-size: 2.5rem; color: var(--primary); margin: 1rem 0;">
                        <span class="material-symbols-rounded">{{ $step['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $step['title'] }}
                    </h3>
                    <p style="font-size: 0.9rem; color: var(--text-gray); line-height: 1.6;">
                        {{ $step['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sprint Cycle Details -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Sprint Cycle Chi Tiết</h2>
                <p class="section-subtitle">Mỗi sprint 2-4 tuần: Plan → Execute → Review → Improve</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                <div>
                    <ul style="list-style: none;">
                        @php
                        $cycles = [
                            ['title' => 'Sprint Planning', 'desc' => 'Xác định mục tiêu, chia task, estimate effort'],
                            ['title' => 'Daily Standup', 'desc' => 'Sync 15 phút mỗi ngày với team'],
                            ['title' => 'Development', 'desc' => 'Coding, code review, CI/CD'],
                            ['title' => 'Sprint Review', 'desc' => 'Demo sản phẩm cho stakeholders'],
                            ['title' => 'Sprint Retrospective', 'desc' => 'Tổng kết, identify improvements'],
                        ];
                        @endphp
                        @foreach($cycles as $cycle)
                        <li style="padding: 1.5rem; background: white; margin-bottom: 1rem; border-radius: 12px; border-left: 4px solid var(--primary);">
                            <strong style="display: block; color: var(--text-dark); font-weight: 700; margin-bottom: 0.5rem;">
                                {{ $cycle['title'] }}
                            </strong>
                            <span style="color: var(--text-gray); font-size: 0.9rem;">
                                {{ $cycle['desc'] }}
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border); text-align: center; min-height: 400px; display: flex; align-items: center; justify-content: center;">
                    <svg viewBox="0 0 300 300" style="width: 100%; max-width: 300px;">
                        <!-- Sprint cycle circle -->
                        <circle cx="150" cy="150" r="120" fill="none" stroke="#0f6b9e" stroke-width="2" opacity="0.2"/>
                        
                        <!-- 5 phases -->
                        <circle cx="150" cy="50" r="15" fill="#0f6b9e"/>
                        <circle cx="250" cy="105" r="15" fill="#0f6b9e"/>
                        <circle cx="210" cy="230" r="15" fill="#0f6b9e"/>
                        <circle cx="90" cy="230" r="15" fill="#0f6b9e"/>
                        <circle cx="50" cy="105" r="15" fill="#0f6b9e"/>
                        
                        <!-- Center -->
                        <circle cx="150" cy="150" r="25" fill="#059669"/>
                        <text x="150" y="155" text-anchor="middle" font-size="11" fill="white" font-weight="bold">Sprint</text>
                        
                        <!-- Arrows -->
                        <path d="M 160 80 L 240 110" stroke="#0f6b9e" stroke-width="2" fill="none" marker-end="url(#arrowhead)"/>
                        <path d="M 240 135 L 220 220" stroke="#0f6b9e" stroke-width="2" fill="none" marker-end="url(#arrowhead)"/>
                        <path d="M 200 240 L 100 240" stroke="#0f6b9e" stroke-width="2" fill="none" marker-end="url(#arrowhead)"/>
                        <path d="M 80 220 L 60 110" stroke="#0f6b9e" stroke-width="2" fill="none" marker-end="url(#arrowhead)"/>
                        <path d="M 60 80 L 140 60" stroke="#0f6b9e" stroke-width="2" fill="none" marker-end="url(#arrowhead)"/>
                        
                        <defs>
                            <marker id="arrowhead" markerWidth="10" markerHeight="10" refX="5" refY="5" orient="auto">
                                <polygon points="0 0, 10 5, 0 10" fill="#0f6b9e"/>
                            </marker>
                        </defs>
                        
                        <!-- Labels -->
                        <text x="150" y="35" text-anchor="middle" font-size="11" fill="#0f6b9e" font-weight="bold">Plan</text>
                        <text x="260" y="105" text-anchor="start" font-size="11" fill="#0f6b9e" font-weight="bold">Execute</text>
                        <text x="220" y="255" text-anchor="end" font-size="11" fill="#0f6b9e" font-weight="bold">Review</text>
                        <text x="50" y="255" text-anchor="start" font-size="11" fill="#0f6b9e" font-weight="bold">Improve</text>
                        <text x="30" y="105" text-anchor="end" font-size="11" fill="#0f6b9e" font-weight="bold">Deliver</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section id="benefits">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Lợi Ích Quy Trình SCRUM</h2>
                <p class="section-subtitle">Tại sao SCRUM là phương pháp phát triển tối ưu</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $benefits = [
                    ['icon' => 'visibility', 'title' => 'Minh Bạch & Kiểm Soát', 'desc' => 'Demo mỗi sprint, bạn thấy tiến độ real-time. Không có bất ngờ cuối dự án.'],
                    ['icon' => 'tune', 'title' => 'Linh Hoạt & Thích Ứng', 'desc' => 'Feedback sau mỗi sprint, pivot dễ dàng. Giảm rủi ro từ changing requirements.'],
                    ['icon' => 'check_circle', 'title' => 'Chất Lượng Cao', 'desc' => 'Code review, testing liên tục. Phát hiện bug sớm, chi phí fix thấp.'],
                    ['icon' => 'speed', 'title' => 'Team Hiệu Quả', 'desc' => 'Standup hàng ngày, clear priorities. Tốc độ delivery nhanh hơn 30-50%.'],
                    ['icon' => 'shield', 'title' => 'Giảm Rủi Ro', 'desc' => 'Deploy từng sprint, phát hiện vấn đề sớm. Không all-or-nothing risk.'],
                    ['icon' => 'trending_up', 'title' => 'ROI Tối Ưu', 'desc' => 'Prioritize features theo value. Maximize return on investment.'],
                ];
                @endphp
                @foreach($benefits as $b)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $b['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $b['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        {{ $b['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Client Journey Timeline -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Hành Trình Làm Việc Cùng HKIncotech</h2>
                <p class="section-subtitle">6 giai đoạn từ lúc bạn liên hệ đến khi sản phẩm sống trên production</p>
            </div>
            
            <div style="max-width: 900px; margin: 0 auto; position: relative;">
                @php
                $journey = [
                    ['phase' => 'Giai Đoạn 1: Tư Vấn Ban Đầu (1 Tuần)', 'content' => 'Chúng tôi lắng nghe ý tưởng, hiểu business goals, phân tích thị trường, đối thủ. Lập kế hoạch chi tiết và đưa ra estimate.'],
                    ['phase' => 'Giai Đoạn 2: Discovery & Design (2-3 Tuần)', 'content' => 'Thiết kế chi tiết: wireframes → mockups → prototypes. Bạn review feedback trước khi code bắt đầu.'],
                    ['phase' => 'Giai Đoạn 3: Sprint Development (6-12 Tuần)', 'content' => 'Phát triển theo sprint 2-4 tuần. Mỗi sprint kết thúc, bạn nhận feature hoàn chỉnh và deploy được.'],
                    ['phase' => 'Giai Đoạn 4: QA & Testing (2-3 Tuần)', 'content' => 'Kiểm thử toàn diện: functional, performance, security, UAT. Fix bugs, optimize, đảm bảo quality.'],
                    ['phase' => 'Giai Đoạn 5: Launch & Deployment (1 Tuần)', 'content' => 'Chuẩn bị production. Deploy, monitoring, incident response setup. Soft launch → full launch.'],
                    ['phase' => 'Giai Đoạn 6: Support & Growth (Ongoing)', 'content' => 'Hỗ trợ 24/7. Monitoring, optimization, thêm features, scaling. Chúng tôi là partner lâu dài.'],
                ];
                @endphp
                @foreach($journey as $index => $j)
                <div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: {{ $index < count($journey) - 1 ? '3rem' : '0' }};">
                    <!-- Left side: Circle with connecting line -->
                    <div style="position: relative; flex-shrink: 0;">
                        <div style="width: 110px; height: 110px; background: white; border: 3px solid var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; text-align: center; box-shadow: 0 4px 15px rgba(15, 107, 158, 0.15); position: relative; z-index: 2;">
                            <div style="font-size: 1.1rem; font-weight: 700; color: var(--primary); line-height: 1.2;">Phase {{ $index + 1 }}</div>
                        </div>
                        
                        <!-- Vertical connecting line -->
                        @if($index < count($journey) - 1)
                        <div style="position: absolute; top: 110px; left: 50%; width: 3px; height: 80px; background: linear-gradient(180deg, var(--primary) 0%, rgba(15, 107, 158, 0.3) 100%); transform: translateX(-50%); z-index: 1;"></div>
                        @endif
                    </div>
                    
                    <!-- Right side: Content box -->
                    <div style="flex: 1; background: white; border-radius: 12px; padding: 2rem; border: 1px solid #e2e8f0; box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 20px rgba(15, 107, 158, 0.1)'; this.style.transform='translateX(5px)';" onmouseout="this.style.borderColor='#e2e8f0'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)'; this.style.transform='translateX(0)';">
                        <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem; line-height: 1.4;">
                            {{ $j['phase'] }}
                        </h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                            {{ $j['content'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section id="why">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Tại Sao Chọn HKIncotech cho SCRUM Development?</h2>
                <p class="section-subtitle">Chúng tôi là Certified Scrum Masters với track record thành công</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $why = [
                    ['title' => 'Scrum Experts', 'desc' => 'Certified Scrum Masters (CSM), 12+ năm agile experience, best practices từ tech giants.'],
                    ['title' => 'Transparent Process', 'desc' => 'Real-time dashboard, daily standups, weekly demos. Bạn luôn biết tiến độ dự án.'],
                    ['title' => 'Flexible & Adaptive', 'desc' => 'Dễ dàng pivot, thêm/bớt features, điều chỉnh scope theo feedback.'],
                    ['title' => 'Quality First', 'desc' => 'Automated testing, code review, CI/CD. Defect detection early & often.'],
                    ['title' => 'Fast Delivery', 'desc' => 'Deploy frequently, reduce time-to-market. MVP in 4-8 weeks.'],
                    ['title' => 'Long-term Partnership', 'desc' => 'Support & scaling beyond launch. Chúng tôi invest vào success của bạn.'],
                ];
                @endphp
                @foreach($why as $w)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $w['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        {{ $w['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Bắt Đầu SCRUM Development Ngay</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Tư vấn miễn phí 30 phút để lập kế hoạch dự án SCRUM của bạn
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Đặt Tư Vấn Ngay</span>
                </a>
            </div>
        </div>
    </section>

@endsection
