@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Định Giá Linh Hoạt <span style="color: var(--primary);">Theo Nhu Cầu</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    Mỗi dự án là duy nhất. Chúng tôi tùy chỉnh giá dựa trên scope, complexity, và timeline của bạn. Không có gói cố định, chỉ có giải pháp phù hợp.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Khoảng Giá Tham Khảo</h2>
                <p class="section-subtitle">Giá dưới đây là tham khảo. Giá thực tế phụ thuộc vào requirements cụ thể của dự án</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                @php
                $pricing_plans = [
                    [
                        'name' => 'MVP / Startup',
                        'price' => '$6,300 - $12,000',
                        'period' => 'per month',
                        'desc' => 'Dự án MVP, prototype, web app nhỏ',
                        'highlighted' => false,
                        'features' => [
                            '1-2 Full Stack Developer',
                            'Agile/Sprint Based (2-week sprints)',
                            'Core Features Development',
                            'Weekly Status Updates',
                            'Git Repo & Documentation',
                            'Basic Performance Optimization',
                            'Post-launch Support (30 days)'
                        ]
                    ],
                    [
                        'name' => 'Growth / Scale-up',
                        'price' => '$12,000 - $25,000',
                        'period' => 'per month',
                        'desc' => 'Ứng dụng trung bình, SaaS, nền tảng',
                        'highlighted' => true,
                        'features' => [
                            '2-4 Full Stack Developers',
                            'Dedicated Project Manager',
                            'Advanced Architecture Design',
                            'Bi-weekly Demo & Review',
                            'Custom API Development',
                            'Performance Optimization',
                            'Security Best Practices',
                            '90 Days Post-launch Support',
                            'Agile Ceremonies'
                        ]
                    ],
                    [
                        'name' => 'Enterprise / Complex',
                        'price' => '$25,000+',
                        'period' => 'per month',
                        'desc' => 'Hệ thống phức tạp, ERP, multi-module',
                        'highlighted' => false,
                        'features' => [
                            '4-8+ Full Stack Developers',
                            'Dedicated Team & Scrum Master',
                            'Enterprise-Grade Architecture',
                            'Daily Standups & Code Reviews',
                            'Microservices / Advanced Design',
                            'Security & Compliance Audit',
                            'Advanced Analytics & Reporting',
                            '6-12 Months Support',
                            'Flexible Scaling'
                        ]
                    ]
                ];
                @endphp
                
                @foreach($pricing_plans as $plan)
                <div style="background: {{ $plan['highlighted'] ? 'linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%)' : 'white' }}; border-radius: 12px; padding: 2.5rem; border: {{ $plan['highlighted'] ? 'none' : '1px solid var(--border)' }}; position: relative; transition: all 0.3s ease;" 
                     onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.15)';" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='';">
                    
                    @if($plan['highlighted'])
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary); color: white; padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">
                        Phổ Biến Nhất
                    </div>
                    @endif
                    
                    <h3 style="font-size: 1.5rem; font-weight: 700; color: {{ $plan['highlighted'] ? 'white' : 'var(--text-dark)' }}; margin-bottom: 0.5rem;">
                        {{ $plan['name'] }}
                    </h3>
                    <p style="color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.9)' : 'var(--text-gray)' }}; margin-bottom: 1.5rem;">
                        {{ $plan['desc'] }}
                    </p>
                    
                    <div style="margin-bottom: 2rem;">
                        <div style="font-size: 2.5rem; font-weight: 800; color: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }};">
                            {{ $plan['price'] }}
                        </div>
                        <div style="font-size: 0.9rem; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.8)' : 'var(--text-gray)' }};">
                            {{ $plan['period'] }}
                        </div>
                    </div>
                    
                    <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                        @foreach($plan['features'] as $feature)
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.95)' : 'var(--text-gray)' }};">
                            <span class="material-symbols-rounded" style="font-size: 1.25rem; color: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }};">check_circle</span>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <a href="{{ route('landing.contact') }}" style="background: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }}; color: {{ $plan['highlighted'] ? 'var(--primary)' : 'white' }}; padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: block; text-align: center; transition: all 0.3s ease;" 
                       onmouseover="this.style.opacity='0.85';" 
                       onmouseout="this.style.opacity='1';">
                        Tư Vấn Giá
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- What's Included -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Cơ Bản Của Mỗi Dự Án</h2>
                <p class="section-subtitle">Những dịch vụ core có trong tất cả các dự án</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                @php
                $core_services = [
                    ['icon' => 'computer', 'title' => 'Tech Stack Hiện Đại', 'desc' => 'React, Node.js, AWS, TypeScript, Python, các công nghệ latest.'],
                    ['icon' => 'security', 'title' => 'Bảo Mật First', 'desc' => 'SSL, encryption, security audit, compliance standards tuân thủ.'],
                    ['icon' => 'api', 'title' => 'Clean APIs', 'desc' => 'RESTful APIs, well-documented, scalable, production-ready.'],
                    ['icon' => 'storage', 'title' => 'Cloud Infrastructure', 'desc' => 'AWS/GCP deployment, CDN, auto-scaling, automated backups.'],
                    ['icon' => 'analytics', 'title' => 'Performance Tracking', 'desc' => 'Real-time monitoring, alert systems, performance analytics.'],
                    ['icon' => 'assignment', 'title' => 'Full Documentation', 'desc' => 'Code docs, API docs, deployment guides, best practices.'],
                ];
                @endphp
                
                @foreach($core_services as $service)
                <div style="background: white; border-radius: 12px; padding: 2rem; text-align: center;">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $service['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $service['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        {{ $service['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">So Sánh Chi Tiết</h2>
                <p class="section-subtitle">Mô tả từng scope project</p>
            </div>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--secondary-bg);">
                            <th style="padding: 1rem; text-align: left; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">Tính Năng</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">MVP</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">Growth</th>
                            <th style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $features = [
                            ['feature' => 'Team Size', 'startup' => '1-2 devs', 'growth' => '2-4 devs', 'enterprise' => '4-8+ devs'],
                            ['feature' => 'Project Manager', 'startup' => 'Shared', 'growth' => 'Dedicated', 'enterprise' => 'Dedicated'],
                            ['feature' => 'Sprint Duration', 'startup' => '2 weeks', 'growth' => '2 weeks', 'enterprise' => 'Flexible'],
                            ['feature' => 'Code Review', 'startup' => 'Weekly', 'growth' => '2x Weekly', 'enterprise' => 'Daily'],
                            ['feature' => 'API Development', 'startup' => 'Basic', 'growth' => 'Advanced', 'enterprise' => 'Custom'],
                            ['feature' => 'Architecture', 'startup' => 'Standard', 'growth' => 'Advanced', 'enterprise' => 'Enterprise'],
                            ['feature' => 'Post-launch Support', 'startup' => '30 days', 'growth' => '90 days', 'enterprise' => '6-12 months'],
                            ['feature' => 'Modules', 'startup' => '1-2 modules', 'growth' => '3-5 modules', 'enterprise' => '5+ modules'],
                            ['feature' => 'Security Level', 'startup' => 'Standard', 'growth' => 'Advanced', 'enterprise' => 'Enterprise'],
                            ['feature' => 'Timeline', 'startup' => '3-6 months', 'growth' => '6-12 months', 'enterprise' => '12+ months'],
                        ];
                        @endphp
                        
                        @foreach($features as $f)
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 1rem; font-weight: 600; color: var(--text-dark);">{{ $f['feature'] }}</td>
                            <td style="padding: 1rem; text-align: center; color: var(--text-gray);">{{ $f['startup'] }}</td>
                            <td style="padding: 1rem; text-align: center; color: var(--primary); font-weight: 600;">{{ $f['growth'] }}</td>
                            <td style="padding: 1rem; text-align: center; color: var(--text-gray);">{{ $f['enterprise'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Các Câu Hỏi Thường Gặp</h2>
                <p class="section-subtitle">Mọi thứ bạn cần biết về pricing</p>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                @php
                $faqs = [
                    ['q' => 'Làm sao để tôi biết dự án của tôi thuộc phạm vi nào?', 'a' => 'Chúng tôi sẽ có cuộc tư vấn chi tiết 30 phút miễn phí để đánh giá scope, complexity, timeline. Từ đó sẽ có recommendation giá và timeline chính xác.'],
                    ['q' => 'Giá hiển thị có thể thay đổi không?', 'a' => 'Có. Giá là tham khảo. Giá thực tế dựa vào: scope detail, technology choices, timeline, team size, post-launch support.'],
                    ['q' => 'Có thể fixed-price project không?', 'a' => 'Có thể, nhưng chỉ khi scope được define rõ 100%. Chúng tôi recommend time & materials cho projects exploratory hoặc requirements chưa stable.'],
                    ['q' => 'Có hidden fees không?', 'a' => 'Không có hidden fees. Chi phí infrastructure riêng (AWS, hosting, domains) sẽ listed rõ ràng. Tất cả costs disclosed upfront.'],
                    ['q' => 'Hình thức thanh toán như thế nào?', 'a' => 'Thường là monthly invoicing. Net-30 payment terms. Có thể negotiate custom arrangements cho enterprise clients.'],
                    ['q' => 'Có thể scale up/down team trong project không?', 'a' => 'Hoàn toàn có thể. Bạn có thể increase hoặc decrease team size based on needs với thông báo trước.'],
                    ['q' => 'Giá có bao gồm post-launch không?', 'a' => 'Bao gồm. Post-launch support duration tùy theo plan: 30 days (MVP), 90 days (Growth), 6-12 months (Enterprise).'],
                    ['q' => 'Ai sở hữu code sau khi project xong?', 'a' => 'Bạn 100% sở hữu code. Chúng tôi provide full source code, documentation, deploy guides. Không có licensing fees hay royalties.'],
                ];
                @endphp
                
                @foreach($faqs as $faq)
                <div style="background: white; border-radius: 8px; padding: 1.5rem; margin-bottom: 1rem;">
                    <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem; cursor: pointer; display: flex; align-items: center; gap: 0.75rem;">
                        <span class="material-symbols-rounded" style="color: var(--primary);">expand_more</span>
                        {{ $faq['q'] }}
                    </div>
                    <p style="color: var(--text-gray); line-height: 1.6; margin-left: 2.5rem;">
                        {{ $faq['a'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Custom Quote -->
    <section style="background: white;">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Dự Án Của Bạn Khác Biệt Với Các Gòi Trên?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Không sao. Chúng tôi customize giá dựa trên requirements cụ thể của bạn. Hãy tế tế nói chuyện cùng chúng tôi.
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Tư Vấn Miễn Phí</span>
                </a>
            </div>
        </div>
    </section>

@endsection
