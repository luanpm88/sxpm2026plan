@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Success <span style="color: var(--primary);">Case Studies</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    50+ projects, 100% client satisfaction. From startup MVPs to enterprise systems, we deliver results.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Stats -->
    <section style="background: white;">
        <div class="container-v5">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                @php
                $portfolio_stats = [
                    ['num' => '50+', 'label' => 'Projects Delivered'],
                    ['num' => '10+', 'label' => 'Industries Served'],
                    ['num' => '$1M', 'label' => 'Project Value'],
                    ['num' => '99.99%', 'label' => 'Client Satisfaction'],
                    ['num' => '12+', 'label' => 'Years Expertise'],
                    ['num' => '10+', 'label' => 'Countries Reach'],
                ];
                @endphp
                @foreach($portfolio_stats as $stat)
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary);">
                        {{ $stat['num'] }}
                    </div>
                    <div style="color: var(--text-gray); margin-top: 0.5rem;">
                        {{ $stat['label'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Case Studies -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-subtitle">Representative solutions and outcomes</p>
            </div>

            @php
            $case_studies = [
                // [
                //     'title' => 'HKSpace - SaaS Platform',
                //     'industry' => 'Enterprise SaaS',
                //     'challenge' => 'Build a SaaS platform for 10,000+ users with multi-tenancy, real-time collaboration, and analytics.',
                //     'solution' => 'Microservices on AWS, React frontend, Node.js backend, PostgreSQL database. Real-time updates with WebSocket, caching, and CDN optimization.',
                //     'results' => [
                //         'Real-time sync: 100% of tasks',
                //         'Latency <100ms; uptime 99.99%',
                //         'Multi-tenant architecture',
                //         'Enterprise adoption in 4 months'
                //     ],
                //     'tech' => 'React, Node.js, PostgreSQL, AWS, Redis, Docker'
                // ],
                // [
                //     'title' => 'AI Knowledge Platform',
                //     'industry' => 'Artificial Intelligence',
                //     'challenge' => 'Build AI-powered knowledge management platform. Ingest 100,000+ documents, extract insights, provide semantic search.',
                //     'solution' => 'Leverage OpenAI APIs, build custom RAG pipeline with Pinecone vector DB, develop intuitive UI. Implement document parsing pipeline, semantic indexing, chat interface.',
                //     'results' => [
                //         '100k+ enterprise queries answered daily',
                //         'Accuracy 95%+',
                //         'Response time <500ms',
                //         'Adopted by enterprises',
                //         '90% reduction in research time'
                //     ],
                //     'tech' => 'OpenAI, Pinecone, Python, FastAPI, React, TypeScript'
                // ],
                [
                    'title' => 'Education Platform: Scheduling Automation',
                    'industry' => 'Education',
                    'challenge' => 'Manage schedules, class assignments, learning reports, and attendance for 10,000+ students. Manual scheduling took 3 weeks per semester with frequent conflicts.',
                    'solution' => 'Delivered a comprehensive operations platform using a PHP-based API stack, focused on reliability and scale rather than heavy AI. Implemented flexible timetable generation, workload balancing rules, automated attendance, and reporting. Added high-availability infrastructure with PostgreSQL load balancing, caching, and resilient queues to handle peak enrollment and scheduling periods.',
                    'results' => [
                        'Scheduling time: 3 weeks → 2 days',
                        'Data accuracy 99.9%',
                        '10K+ students managed',
                        'Adoption 98%',
                        '500+ hours/semester saved'
                    ],
                    'tech' => 'PHP, REST API, PostgreSQL (Load Balancing), Redis, React, React Native'
                ],
                [
                    'title' => 'Storage Management System',
                    'industry' => 'Logistics & Retail',
                    'challenge' => 'Manage ~10M SKUs across 50+ branches. Pain points: inventory control, inbound/outbound, consignment, barcode scanning, monthly audits. Manual workflows led to inaccurate reports. Needed accurate demand forecasting.',
                    'solution' => 'Built a comprehensive WMS with real-time barcode scanning and automated reconciliation. Implemented demand forecasting via matrix factorization and time-series analysis. Added analytics dashboards, multi-location sync, and blockchain-backed consignment docs for transparency.',
                    'results' => [
                        'Inventory accuracy: 85% → 99.8%',
                        'Forecasting accuracy: 94%',
                        'Throughput: 1M+ transactions/day',
                        'Audit time reduced by 80%',
                        'Dead stock reduced by 35%',
                        'Cost savings: $15M/year'
                    ],
                    'tech' => 'Python, Machine Learning, PostgreSQL, Redis, React, Node.js, Blockchain'
                ],
                [
                    'title' => 'ERP Management System',
                    'industry' => 'Enterprise Management',
                    'challenge' => 'A 100+ employee company needed unified accounting, procurement, inventory, e-commerce, and operations. Inventory data wasn’t in sync with accounting; disparate modules slowed reporting.',
                    'solution' => 'Built an integrated ERP: accounting (GL, AR, AP), inventory, procurement, e-commerce sync (Shopify/WooCommerce), HR payroll, and reporting. Added real-time consolidation, BI dashboards, workflow automation, and a mobile app for field staff.',
                    'results' => [
                        'Consolidation: 3 days → 1 minute',
                        'Invoice processing effort reduced by 70%',
                        'Accounting reconciliation automated',
                        'Report generation: 2 hours → 5 minutes',
                        'Decision speed improved by 60%',
                        'Adoption 95% within 2 months'
                    ],
                    'tech' => 'Node.js, PostgreSQL, React, Python, Elasticsearch, AWS, Docker, Microservices'
                ],
                [
                    'title' => 'E-Commerce Transformation',
                    'industry' => 'Retail',
                    'challenge' => 'Legacy monolithic system, slow performance, 50,000+ SKUs, 100,000+ daily transactions. Need modern architecture.',
                    'solution' => 'Migrate to serverless architecture, implement headless commerce, build fast API layer. Implement caching, CDN, database optimization. Real-time inventory sync.',
                    'results' => [
                        'Page loads 70% faster',
                        'Transaction capacity 10x increase',
                        'Conversion rate +25%',
                        'Revenue growth: +$50M/year'
                    ],
                    'tech' => 'Next.js, AWS Lambda, DynamoDB, Elasticsearch',
                    'hidden' => true
                ],
                [
                    'title' => 'Mobile Banking App',
                    'industry' => 'Financial Services',
                    'challenge' => 'Build secure mobile banking app for 1M+ users. Requirements: high security, 99.99% uptime, offline functionality.',
                    'solution' => 'Native iOS/Android apps with React Native, blockchain for transaction verification, advanced encryption, offline-first architecture.',
                    'results' => 'User base: 1M+ downloads. Daily active users: 500k+. Transaction volume: $1B+/month. Security rating: A+. Retention: 95%.',
                    'tech' => 'React Native, Blockchain, Swift, Kotlin',
                    'hidden' => true
                ],
                [
                    'title' => 'Supply Chain Platform',
                    'industry' => 'Logistics',
                    'challenge' => 'Real-time supply chain visibility across 50 countries. 10,000+ shipments/day tracking.',
                    'solution' => 'Build IoT integration platform, real-time tracking dashboard, predictive analytics, blockchain for transparency.',
                    'results' => 'Delivery time: -20% reduction. Cost savings: -$2M/year. Visibility: 99.9% real-time tracking. Partnerships: 100+ logistics companies.',
                    'tech' => 'IoT, Blockchain, Python, Real-time Data Streaming',
                    'hidden' => true
                ],
            ];
            @endphp

            @foreach($case_studies as $cs)
            @if(!isset($cs['hidden']) || !$cs['hidden'])
            <div style="background: white; border-radius: 12px; padding: 3rem; margin-bottom: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.boxShadow='';">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
                    <div>
                        <div style="display: inline-block; background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; color: var(--primary); font-size: 0.85rem; font-weight: 600; margin-bottom: 1.5rem;">
                            {{ $cs['industry'] }}
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">
                            {{ $cs['title'] }}
                        </h3>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <h4 style="font-size: 0.9rem; font-weight: 700; color: var(--primary); text-transform: uppercase; margin-bottom: 0.5rem;">Challenge</h4>
                            <p style="color: var(--text-gray); line-height: 1.6;">
                                {{ $cs['challenge'] }}
                            </p>
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <h4 style="font-size: 0.9rem; font-weight: 700; color: var(--primary); text-transform: uppercase; margin-bottom: 0.5rem;">Solution</h4>
                            <p style="color: var(--text-gray); line-height: 1.6;">
                                {{ $cs['solution'] }}
                            </p>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            @foreach(explode(', ', $cs['tech']) as $tech)
                            <span style="background: var(--secondary-bg); color: var(--primary); padding: 0.4rem 0.8rem; border-radius: 4px; font-size: 0.85rem;">
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    
                    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 8px; padding: 2rem; color: white;">
                        <h4 style="font-size: 0.9rem; font-weight: 700; text-transform: uppercase; margin-bottom: 1.5rem; opacity: 0.95;">Results</h4>
                        @if(is_array($cs['results']))
                        <ul style="list-style: none; padding: 0; margin: 0; display: grid; gap: 0.65rem;">
                            @foreach($cs['results'] as $item)
                            <li style="display: flex; align-items: center; gap: 0.6rem; font-size: 0.95rem; line-height: 1.5; opacity: 0.95;">
                                <span class="material-symbols-rounded" style="font-size: 1.2rem; color: white;">check_circle</span>
                                <span style="color: white;">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p style="line-height: 1.8; opacity: 0.95;">
                            {{ $cs['results'] }}
                        </p>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>

    <!-- Industries Served -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Industries Served</h2>
                <p class="section-subtitle">Cross-industry experience and domain expertise</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <?php
                $industries = [
                    ['icon' => 'shopping_cart', 'name' => 'E-commerce & Retail', 'description' => 'Built lean storefronts, POS integrations, and analytics to help small retailers modernize sales.'],
                    ['icon' => 'trending_up', 'name' => 'FinTech & Banking', 'description' => 'Developed compliance-friendly dashboards, payment flows, and reporting for early-stage fintech teams.'],
                    ['icon' => 'local_hospital', 'name' => 'Healthcare & Medical', 'description' => 'Created appointment, intake, and data-tracking tools with a focus on security and patient privacy.'],
                    ['icon' => 'school', 'name' => 'EdTech & Training', 'description' => 'Built course portals and assessment tooling to digitize training programs and improve learner engagement.'],
                    ['icon' => 'local_shipping', 'name' => 'Logistics & Supply Chain', 'description' => 'Implemented shipment tracking dashboards and simple forecasting to cut manual coordination.'],
                    ['icon' => 'factory', 'name' => 'Manufacturing & IoT', 'description' => 'Prototyped equipment monitoring and KPI boards to surface real-time production insights.'],
                    ['icon' => 'apartment', 'name' => 'Real Estate & Construction', 'description' => 'Delivered listing, lead-tracking, and progress visibility tools for small property teams.'],
                    ['icon' => 'sports_esports', 'name' => 'Gaming & Entertainment', 'description' => 'Shipped lightweight event, community, and content portals for niche gaming audiences.'],
                    ['icon' => 'psychology', 'name' => 'AI & Data Science', 'description' => 'Built pragmatic AI assistants and data pipelines to automate repetitive workflows.'],
                    ['icon' => 'cloud', 'name' => 'SaaS & Cloud', 'description' => 'Helped teams launch MVPs with multi-tenant basics, auth, and billing ready to grow.'],
                ];
                foreach ($industries as $ind):
                ?>
                <div style="background: white; border-radius: 12px; padding: 2rem; text-align: center; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded"><?php echo $ind['icon']; ?></span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        <?php echo $ind['name']; ?>
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        <?php echo $ind['description']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="opacity-75" style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Client Testimonials  <span class="badge  rounded-pill bg-warning">Draft</span></h2>
                <p class="section-subtitle">Feedback from our clients</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <?php
                $testimonials = [
                    ['name' => 'CEO, E-Commerce Startup', 'text' => 'HKIncotech not only delivered the scope, but proactively suggested improvements. Communication was excellent and responsive.'],
                    ['name' => 'Founder, FinTech Startup', 'text' => 'Their security and compliance experience helped us pass ISO 27001 and PCI DSS on the first attempt.'],
                    ['name' => 'Director, Healthcare Provider', 'text' => 'Deep healthcare domain knowledge. ML performance exceeded expectations.'],
                    ['name' => 'VP Product, Logistics Company', 'text' => 'Scaled from 100 to 2,000 shipments/day without downtime. Strong infrastructure planning.'],
                    ['name' => 'CTO, Retail Chain', 'text' => 'Real-time analytics enabled data-driven decisions. Positive ROI in 3 months.'],
                    ['name' => 'Founder, SaaS Startup', 'text' => 'Post-launch support was exceptional: 24/7 availability, quick response, solution-oriented.'],
                ];
                foreach ($testimonials as $t):
                ?>
                <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='white';" onmouseout="this.style.backgroundColor='var(--secondary-bg)';">
                    <div style="display: flex; gap: 0.3rem; margin-bottom: 1rem;">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <span style="color: #f59e0b; font-size: 1.2rem;">★</span>
                        <?php endfor; ?>
                    </div>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem; font-style: italic;">
                        "<?php echo $t['text']; ?>"
                    </p>
                    <div style="font-weight: 600; color: var(--text-dark); font-size: 0.9rem;">
                        <?php echo $t['name']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: white;">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Ready for the Next Project?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Start the conversation with us today.
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </section>

@endsection
