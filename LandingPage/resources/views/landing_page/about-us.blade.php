@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    About <span style="color: var(--primary);">HKIncotech</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    12+ years delivering software for SaaS, AI, enterprise systems, and custom products. 50+ successful projects by 50+ senior engineers.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">HKIncotech Story</h2>
                <p class="section-subtitle">From a small team to a trusted engineering partner</p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                <div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        Start (2012)
                    </h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.25rem;">
                        Began as a 5-person engineering team focused on building reliable software that moves the business needle.
                    </p>
                    
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        Growth (2015-2018)
                    </h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.25rem;">
                        Delivered 100+ projects; expanded to Singapore and Thailand; grew to 30+ engineers serving startups and Fortune 500 clients.
                    </p>
                    
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                        Today (2024)
                    </h3>
                    <p style="color: var(--text-gray); line-height: 1.8;">
                        50+ senior engineers, 50+ delivered projects. Focus: SaaS, AI, Enterprise Solutions, Custom Software Development. Mission: help 20+ companies achieve digital transformation with measurable results.
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
                        <text x="180" y="268" font-size="11" fill="#666">50+ team, 50+ projects</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Mission & Values</h2>
                <p class="section-subtitle">Principles guiding how we build and deliver</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @php
                $values = [
                    ['icon' => 'target', 'title' => 'Mission', 'desc' => 'Help 20+ companies achieve digital transformation with tangible outcomes.'],
                    ['icon' => 'diamond', 'title' => 'Quality', 'desc' => 'High bar for reliability and performance. Automated testing and reviews by default.'],
                    ['icon' => 'handshake', 'title' => 'Partnership', 'desc' => 'Aligned incentives and transparency; long-term relationships over short-term gains.'],
                    ['icon' => 'lightbulb', 'title' => 'Innovation', 'desc' => 'Continuous learning, prototyping, and adopting proven best practices.'],
                    ['icon' => 'people', 'title' => 'People First', 'desc' => 'Invest in teams and culture; skilled, supported teams deliver better products.'],
                    ['icon' => 'globe', 'title' => 'Transparency', 'desc' => 'Clear communication, real-time progress, no surprises.'],
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

    <!-- Leadership Team -->
    <section class="opacity-75">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Leadership Team  <span class="badge  rounded-pill bg-warning">Draft</span></h2>
                <p class="section-subtitle">Experienced leaders with delivery track records</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $leaders = [
                    [
                        'name' => '--- --- ---',
                        'title' => 'Founder & CEO',
                        'bio' => '15+ years tech leadership. Ex-Google, ex-Amazon. Led 50+ projects, $100M+ revenue.',
                        'skills' => ['Tech Strategy', 'Team Building', 'Scaling']
                    ],
                    [
                        'name' => '--- --- ---',
                        'title' => 'CTO & Lead Architect',
                        'bio' => '14+ years backend engineering. Microservices, Cloud, Big Data. Patent holder.',
                        'skills' => ['Architecture', 'Cloud Infra', 'Performance']
                    ],
                    [
                        'name' => '--- --- ---',
                        'title' => 'VP Product',
                        'bio' => '12+ years product management. Ex-Grab, ex-Gojek. 3 successful exits.',
                        'skills' => ['Product Strategy', 'Growth', 'User Experience']
                    ],
                    [
                        'name' => '--- --- ---',
                        'title' => 'VP Engineering',
                        'bio' => '11+ years engineering management. Certified Scrum Master. Agile expert.',
                        'skills' => ['Team Leadership', 'DevOps', 'Quality Assurance']
                    ],
                ];
                foreach ($leaders as $leader):
                ?>
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); height: 150px;"></div>
                    <div style="padding: 1.5rem; text-align: center; margin-top: -60px;">
                        <div style="width: 120px; height: 120px; background: white; border: 3px solid var(--border); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                            <div style="font-size: 3rem; color: var(--primary);">
                                <span class="material-symbols-rounded">account_circle</span>
                            </div>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                            <?php echo $leader['name']; ?>
                        </h3>
                        <div style="color: var(--primary); font-weight: 600; font-size: 0.9rem; margin-bottom: 1rem;">
                            <?php echo $leader['title']; ?>
                        </div>
                        <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem;">
                            <?php echo $leader['bio']; ?>
                        </p>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center;">
                            <?php foreach ($leader['skills'] as $skill): ?>
                            <span style="background: var(--secondary-bg); color: var(--primary); padding: 0.3rem 0.75rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">
                                <?php echo $skill; ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Achievements -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Achievements</h2>
                <p class="section-subtitle">Results earned through consistent delivery</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                @php
                $achievements = [
                    ['num' => '100+', 'title' => 'Projects Completed', 'desc' => 'From startup launches to enterprise rollouts'],
                    ['num' => '20+', 'title' => 'Senior Engineers', 'desc' => 'Certified and experienced team'],
                    ['num' => '99.99%', 'title' => 'Uptime Record', 'desc' => 'Reliability focus'],
                    ['num' => '12+', 'title' => 'Years of Delivery', 'desc' => 'Proven track record'],
                    ['num' => '$2M', 'title' => 'Project Value', 'desc' => 'Solutions delivered'],
                    ['num' => '10+', 'title' => 'Industries Served', 'desc' => 'Cross-industry expertise'],
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
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Build with HKIncotech</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    From MVP to enterprise delivery—we partner to ship dependable software.
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </section>

@endsection
