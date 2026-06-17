<!-- Hero -->
<section id="case-studies" style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                {{ __('case_studies.hero_title') }} <span style="color: var(--primary);">{{ __('case_studies.hero_title_highlight') }}</span>
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                {{ __('case_studies.hero_desc') }}
            </p>
        </div>
    </div>
</section>

<!-- Portfolio Stats -->
{{-- <section style="background: white;">
    <div class="container-v5">
        <div class="card-grid" style="--card-min: 180px; --card-max: 320px; --card-gap: 2rem; margin-bottom: 4rem;">
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
                <div style="font-size: 2rem; font-weight: 800; color: var(--primary);">
                    {{ $stat['num'] }}
                </div>
                <div style="color: var(--text-gray); margin-top: 0.5rem;">
                    {{ $stat['label'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}

<!-- Featured Case Studies -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('case_studies.featured_title') }}</h2>
            <p class="section-subtitle">{{ __('case_studies.featured_subtitle') }}</p>
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
                    'Scheduling time: weeks → days',
                    'High data accuracy',
                    '10K+ students managed',
                    'Strong organization-wide adoption',
                    'Significant operational hours saved each semester'
                ],
                'tech' => 'PHP, REST API, PostgreSQL (Load Balancing), Redis, React, React Native'
            ],
            [
                'title' => 'Storage Management System',
                'industry' => 'Logistics & Retail',
                'challenge' => 'Manage ~5M SKUs across 2+ branches. Pain points: inventory control, inbound/outbound, consignment, barcode scanning, monthly audits. Manual workflows led to inaccurate reports. Needed accurate demand forecasting.',
                'solution' => 'Built a comprehensive WMS with real-time barcode scanning and automated reconciliation. Implemented demand forecasting via matrix factorization and time-series analysis. Added analytics dashboards, multi-location sync, and blockchain-backed consignment docs for transparency.',
                'results' => [
                    'Near-perfect inventory accuracy',
                    'High forecasting accuracy',
                    'High-volume transaction throughput',
                    'Major reduction in audit time',
                    'Meaningfully reduced dead stock',
                    // 'Significant cost savings'
                ],
                'tech' => 'Python, Machine Learning, PostgreSQL, Redis, React, Node.js, Blockchain'
            ],
            [
                'title' => 'ERP Management System',
                'industry' => 'Enterprise Management',
                'challenge' => 'A 30+ employee company needed unified accounting, procurement, inventory, e-commerce, and operations. Inventory data wasn’t in sync with accounting; disparate modules slowed reporting.',
                'solution' => 'Built an integrated ERP: accounting (GL, AR, AP), inventory, procurement, e-commerce sync (Shopify/WooCommerce), HR payroll, and reporting. Added real-time consolidation, BI dashboards, workflow automation, and a mobile app for field staff.',
                'results' => [
                    'Consolidation reduced from days to minutes',
                    'Major reduction in invoice processing effort',
                    'Accounting reconciliation automated',
                    'Report generation reduced from hours to minutes',
                    'Faster decision-making',
                    'Strong adoption within the first months'
                ],
                'tech' => 'Node.js, PostgreSQL, React, Python, Elasticsearch, AWS, Docker, Microservices'
            ],
            [
                'title' => 'E-Commerce Transformation',
                'industry' => 'Retail',
                'challenge' => 'Legacy monolithic system, slow performance, 50,000+ SKUs, 100,000+ daily transactions. Need modern architecture.',
                'solution' => 'Migrate to serverless architecture, implement headless commerce, build fast API layer. Implement caching, CDN, database optimization. Real-time inventory sync.',
                'results' => [
                    'Significantly faster page loads',
                    'Major increase in transaction capacity',
                    'Improved conversion rate',
                    'Significant revenue growth'
                ],
                'tech' => 'Next.js, AWS Lambda, DynamoDB, Elasticsearch',
                'hidden' => true
            ],
            [
                'title' => 'Mobile Banking App',
                'industry' => 'Financial Services',
                'challenge' => 'Build a secure mobile banking app at consumer scale. Requirements: strong security, enterprise-grade uptime, offline functionality.',
                'solution' => 'Native iOS/Android apps with React Native, blockchain for transaction verification, advanced encryption, offline-first architecture.',
                'results' => 'Delivered a production-scale banking app with strong user adoption, high-volume transaction throughput, bank-grade security, and high user retention.',
                'tech' => 'React Native, Blockchain, Swift, Kotlin',
                'hidden' => true
            ],
            [
                'title' => 'Supply Chain Platform',
                'industry' => 'Logistics',
                'challenge' => 'Real-time supply chain visibility across multiple countries, tracking high daily shipment volumes.',
                'solution' => 'Build IoT integration platform, real-time tracking dashboard, predictive analytics, blockchain for transparency.',
                'results' => 'Delivered faster deliveries, significant cost savings, near-real-time shipment visibility, and a strong network of logistics partners.',
                'tech' => 'IoT, Blockchain, Python, Real-time Data Streaming',
                'hidden' => true
            ],
        ];
        @endphp

        @foreach($case_studies as $cs)
        @if(!isset($cs['hidden']) || !$cs['hidden'])
        <div style="background: white; border-radius: var(--card-radius); padding: 3rem; margin-bottom: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px var(--shadow-hover)';" onmouseout="this.style.boxShadow='';">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
                <div>
                    <div style="display: inline-block; background: var(--secondary-bg); padding: 0.5rem 1rem; border-radius: 6px; color: var(--primary); font-size: 0.85rem; font-weight: 600; margin-bottom: 1.5rem;">
                        {{ $cs['industry'] }}
                    </div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">
                        {{ $cs['title'] }}
                    </h3>
                    
                    <div style="margin-bottom: 1.5rem;">
                        <h4 style="font-size: 0.9rem; font-weight: 700; color: var(--primary); text-transform: uppercase; margin-bottom: 0.5rem;">{{ __('case_studies.label_challenge') }}</h4>
                        <p style="color: var(--text-gray); line-height: 1.6;">
                            {{ $cs['challenge'] }}
                        </p>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <h4 style="font-size: 0.9rem; font-weight: 700; color: var(--primary); text-transform: uppercase; margin-bottom: 0.5rem;">{{ __('case_studies.label_solution') }}</h4>
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
                    <h4 style="font-size: 0.9rem; font-weight: 700; text-transform: uppercase; margin-bottom: 1.5rem; opacity: 0.95;">{{ __('case_studies.label_results') }}</h4>
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
            <h2 class="section-title">{{ __('case_studies.industries_title') }}</h2>
            <p class="section-subtitle">{{ __('case_studies.industries_subtitle') }}</p>
        </div>
        
        <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
            @foreach(__('case_studies.industries') as $ind)
            <div style="background: white; border-radius: var(--card-radius); padding: 2rem; text-align: center; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px var(--shadow-hover)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                    <span class="material-symbols-rounded">{{ $ind['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                    {{ $ind['name'] }}
                </h3>
                <p style="color: var(--text-gray); font-size: 0.95rem;">
                    {{ $ind['description'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section style="background: white;">
    <div class="container-v5">
        <div class="section-header">
            <span class="section-label">{{ __('case_studies.section_testimonials') }}</span>
            <h2 class="section-title">{{ __('case_studies.testimonials_title') }}</h2>
            <p class="section-subtitle">{{ __('case_studies.testimonials_subtitle') }}</p>
        </div>
        
        <div class="card-grid" style="--card-min: 300px; --card-max: 440px; --card-gap: 2rem;">
            @foreach(__('case_studies.testimonials') as $t)
            <div style="background: var(--secondary-bg); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='white';" onmouseout="this.style.backgroundColor='var(--secondary-bg)';">
                <div style="display: flex; gap: 0.3rem; margin-bottom: 1rem;">
                    @for($i = 0; $i < 5; $i++)
                    <span style="color: var(--primary); font-size: 1.2rem;">★</span>
                    @endfor
                </div>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem; font-style: italic;">
                    "{{ $t['text'] }}"
                </p>
                <div style="font-weight: 600; color: var(--text-dark); font-size: 0.9rem;">
                    {{ $t['name'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section style="background: white;">
    <div class="container-v5">
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: white;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('case_studies.cta_title') }}</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                {{ __('case_studies.cta_desc') }}
            </p>
            <a href="#contact" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                <span>{{ __('case_studies.cta_button') }}</span>
            </a>
        </div>
    </div>
</section>