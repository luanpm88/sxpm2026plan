@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Flexible Pricing <span style="color: var(--primary);">Based on Needs</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    Every project is unique. We customize pricing based on your scope, complexity, and timeline. No fixed packages, only solutions that fit.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Price Reference Guide</h2>
                <p class="section-subtitle">Prices below are reference only. Actual pricing depends on project-specific requirements</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                @php
                $pricing_plans = [
                    [
                        'name' => 'MVP / Startup',
                        'price_from' => '$6,300',
                        'price_to' => '$12,000',
                        'period' => 'Typical monthly investment',
                        'desc' => 'MVP projects, prototypes, small web apps',
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
                        'price_from' => '$12,000',
                        'price_to' => '$25,000',
                        'period' => 'Typical monthly investment',
                        'desc' => 'Medium-sized apps, SaaS, platforms',
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
                        'price_from' => '$25,000+',
                        'price_to' => null,
                        'period' => 'Typical monthly investment',
                        'desc' => 'Complex systems, ERP, multi-module platforms',
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
                        Most Popular
                    </div>
                    @endif
                    
                    <h3 style="font-size: 1.5rem; font-weight: 700; color: {{ $plan['highlighted'] ? 'white' : 'var(--text-dark)' }}; margin-bottom: 0.5rem;">
                        {{ $plan['name'] }}
                    </h3>
                    <p style="color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.9)' : 'var(--text-gray)' }}; margin-bottom: 1.5rem;">
                        {{ $plan['desc'] }}
                    </p>
                    
                    <div style="margin-bottom: 2rem;">
                        <div style="font-size: 0.9rem; letter-spacing: 0.5px; text-transform: uppercase; font-weight: 700; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.85)' : 'var(--text-gray)' }}; margin-bottom: 0.35rem;">
                            {{ $plan['period'] }}
                        </div>
                        <div style="display: flex; align-items: baseline; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 0.35rem;">
                            <span style="font-size: 2.4rem; font-weight: 800; color: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }};">
                                {{ $plan['price_from'] }}
                            </span>
                            @if($plan['price_to'])
                            <span style="font-size: 0.95rem; font-weight: 600; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.85)' : 'var(--text-gray)' }};">to</span>
                            <span style="font-size: 2.05rem; font-weight: 700; color: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }};">
                                {{ $plan['price_to'] }}
                            </span>
                            @endif
                        </div>
                        <div style="font-size: 0.95rem; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.85)' : 'var(--text-gray)' }};">
                            per month, varies by scope
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
                        Get Pricing Consultation
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
                <h2 class="section-title">Included in Every Project</h2>
                <p class="section-subtitle">Core services included in all projects</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                @php
                $core_services = [
                    ['icon' => 'computer', 'title' => 'Modern Tech Stack', 'desc' => 'React, Node.js, AWS, TypeScript, Python, latest technologies.'],
                    ['icon' => 'security', 'title' => 'Security First', 'desc' => 'SSL, encryption, security audit, compliance standards.'],
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
                <h2 class="section-title">Detailed Comparison</h2>
                <p class="section-subtitle">Plan-by-plan scope breakdown</p>
            </div>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--secondary-bg);">
                            <th style="padding: 1rem; text-align: left; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">Feature</th>
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
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Everything you need to know about pricing</p>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                @php
                $faqs = [
                    ['q' => 'How do I know what scope my project falls into?', 'a' => 'We conduct a detailed 30-minute free consultation to assess scope, complexity, timeline. From this we provide accurate pricing and timeline recommendations.'],
                    ['q' => 'Can the displayed prices change?', 'a' => 'Yes. Prices are reference only. Actual pricing depends on: detailed scope, technology choices, timeline, team size, post-launch support.'],
                    ['q' => 'Can we do fixed-price projects?', 'a' => 'Yes, but only when scope is 100% defined. We recommend time & materials for exploratory projects or those with evolving requirements.'],
                    ['q' => 'Are there hidden fees?', 'a' => 'No hidden fees. Infrastructure costs (AWS, hosting, domains) are listed separately. All costs disclosed upfront.'],
                    ['q' => 'What is the payment structure?', 'a' => 'Typically monthly invoicing with Net-30 payment terms. Custom arrangements negotiable for enterprise clients.'],
                    ['q' => 'Can we scale the team up/down during the project?', 'a' => 'Absolutely. You can increase or decrease team size based on needs with advance notice.'],
                    ['q' => 'Does pricing include post-launch support?', 'a' => 'Yes. Post-launch support duration varies by plan: 30 days (MVP), 90 days (Growth), 6-12 months (Enterprise).'],
                    ['q' => 'Who owns the code after the project?', 'a' => 'You own 100% of the code. We provide full source code, documentation, deployment guides. No licensing fees or royalties.'],
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
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Your Project Different from Above Plans?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    That's fine. We customize pricing based on your specific requirements. Let's discuss your needs.
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Free Consultation</span>
                </a>
            </div>
        </div>
    </section>

@endsection
