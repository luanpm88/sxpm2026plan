@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    Các <span style="color: var(--primary);">Case Study</span> Thành Công
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    150+ dự án, 100% hài lòng client. Từ startup MVPs đến enterprise systems, chúng tôi deliver results.
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
                    ['num' => '150+', 'label' => 'Projects Delivered'],
                    ['num' => '50+', 'label' => 'Industries Served'],
                    ['num' => '$500M+', 'label' => 'Project Value'],
                    ['num' => '99.99%', 'label' => 'Client Satisfaction'],
                    ['num' => '12+', 'label' => 'Years Expertise'],
                    ['num' => '30+', 'label' => 'Countries Reach'],
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
                <h2 class="section-title">Các Dự Án Tiêu Biểu</h2>
                <p class="section-subtitle">Những giải pháp đã thay đổi business của client</p>
            </div>

            @php
            $case_studies = [
                [
                    'title' => 'HKSpace - SaaS Platform',
                    'industry' => 'Enterprise SaaS',
                    'challenge' => 'Client cần xây dựng SaaS platform cho 10,000+ users với requirements phức tạp: multi-tenancy, real-time collaboration, advanced analytics.',
                    'solution' => 'Xây dựng architecture microservices trên AWS, React frontend, Node.js backend, PostgreSQL database. Implement real-time updates với WebSocket, advanced caching strategy, CDN optimization.',
                    'results' => 'Time to market: 6 tháng. Performance: <100ms latency. 99.99% uptime. Revenue growth: $2M first year. User base: scaled to 50,000+ users.',
                    'tech' => 'React, Node.js, PostgreSQL, AWS, Redis, Docker'
                ],
                [
                    'title' => 'AI Knowledge Platform',
                    'industry' => 'Artificial Intelligence',
                    'challenge' => 'Build AI-powered knowledge management platform. Ingest 100,000+ documents, extract insights, provide semantic search.',
                    'solution' => 'Leverage OpenAI APIs, build custom RAG pipeline with Pinecone vector DB, develop intuitive UI. Implement document parsing pipeline, semantic indexing, chat interface.',
                    'results' => 'Processing 1000+ documents/day. 95%+ accuracy. Response time <500ms. Enterprise adoption: 50+ companies. Revenue: $5M ARR.',
                    'tech' => 'OpenAI, Pinecone, Python, FastAPI, React, TypeScript'
                ],
                [
                    'title' => 'Education Management System',
                    'industry' => 'Education',
                    'challenge' => 'Quản lý thời khóa biểu, xếp lớp, báo cáo học tập, điểm danh phức tạp cho 10,000+ sinh viên. Xếp lớp thủ công mất 3 tuần/kỳ, nhiều mâu thuẫn lịch biểu giáo viên. Cần tự động hóa toàn bộ quy trình.',
                    'solution' => 'Phát triển AI-powered class scheduling engine, learning analytics dashboard, automated attendance system. Integrate ML algorithms để xếp lớp tối ưu (giảm conflict, balance workload giáo viên). Real-time transcript generation, parent-student portal, mobile app cho notifications.',
                    'results' => 'Xếp lịch thời gian: từ 3 tuần xuống 2 ngày. Conflict reduction: 95%. Data accuracy: 99.9%. User adoption: 98% (giáo viên + sinh viên). Time saved: 500+ hours/kỳ cho admin staff.',
                    'tech' => 'Python, ML/AI, PostgreSQL, React, React Native, API REST'
                ],
                [
                    'title' => 'Storage Management System',
                    'industry' => 'Logistics & Retail',
                    'challenge' => 'Quản lý ~10 triệu sản phẩm SKU trên 50+ chi nhánh. Thách thức: quản lý tồn kho, xuất nhập, ký gửi, quét mã, kiểm kho hàng tháng. Dữ liệu báo cáo bị sai lệch do quy trình thủ công. Cần dự đoán chính xác lượng hàng cần nhập.',
                    'solution' => 'Xây dựng hệ thống quản lý kho toàn diện với barcode scanning real-time, automated reconciliation. Implement demand forecasting using matrix factorization & time series analysis. Advanced analytics dashboard, multi-location inventory sync, blockchain cho chứng từ ký gửi để đảm bảo transparency.',
                    'results' => 'Inventory accuracy: 99.8% (lên từ 85%). Forecasting accuracy: 94% (demand prediction). Processing speed: 1M+ transactions/ngày. Audit time: -80%. Reduction in dead stock: 35%. Cost savings: $15M/năm từ better inventory allocation.',
                    'tech' => 'Python, Machine Learning, PostgreSQL, Redis, React, Node.js, Blockchain'
                ],
                [
                    'title' => 'ERP Management System',
                    'industry' => 'Enterprise Management',
                    'challenge' => 'Doanh nghiệp 100+ nhân viên cần tích hợp kế toán, nhập hàng, tồn kho, TMDT, quản lý toàn bộ hoạt động. Dữ liệu tồn kho không đồng bộ với báo cáo kế toán. Nhiều module riêng lẻ, thông tin báo cáo không nhất quán, liên thông chậm chạp.',
                    'solution' => 'Phát triển ERP system tích hợp toàn bộ: accounting module (GL, AR, AP), inventory management, procurement, TMDT integration (Shopify/WooCommerce sync), HR payroll, advanced reporting engine. Real-time consolidation, business intelligence dashboards, workflow automation, mobile app cho field staff.',
                    'results' => 'Data consolidation time: từ 3 ngày xuống 1 phút. Invoice processing: -70% manual effort. Accounting reconciliation: tự động 100%. Report generation: từ 2 giờ xuống 5 phút. Decision-making speed: +60% nhanh hơn. User adoption: 95% trong 2 tháng.',
                    'tech' => 'Node.js, PostgreSQL, React, Python, Elasticsearch, AWS, Docker, Microservices'
                ],
                [
                    'title' => 'E-Commerce Transformation',
                    'industry' => 'Retail',
                    'challenge' => 'Legacy monolithic system, slow performance, 50,000+ SKUs, 100,000+ daily transactions. Need modern architecture.',
                    'solution' => 'Migrate to serverless architecture, implement headless commerce, build fast API layer. Implement caching, CDN, database optimization. Real-time inventory sync.',
                    'results' => 'Performance improvement: 70% faster page loads. Transaction capacity: 10x increase. Conversion rate: +25%. Revenue growth: +$50M/year.',
                    'tech' => 'Next.js, AWS Lambda, DynamoDB, Elasticsearch'
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
                    'results' => 'Delivery time: -20% reduction. Cost savings: -$10M/year. Visibility: 99.9% real-time tracking. Partnerships: 100+ logistics companies.',
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
                            <h4 style="font-size: 0.9rem; font-weight: 700; color: var(--primary); text-transform: uppercase; margin-bottom: 0.5rem;">Thách Thức</h4>
                            <p style="color: var(--text-gray); line-height: 1.6;">
                                {{ $cs['challenge'] }}
                            </p>
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <h4 style="font-size: 0.9rem; font-weight: 700; color: var(--primary); text-transform: uppercase; margin-bottom: 0.5rem;">Giải Pháp</h4>
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
                        <h4 style="font-size: 0.9rem; font-weight: 700; text-transform: uppercase; margin-bottom: 1.5rem; opacity: 0.95;">Kết Quả</h4>
                        <p style="line-height: 1.8; opacity: 0.95;">
                            {{ $cs['results'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>

    <!-- Industries Served -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Chuyên Môn Theo Ngành</h2>
                <p class="section-subtitle">Kinh nghiệm 12+ năm phục vụ 50+ ngành công nghiệp</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1.75rem;">
                @php
                $industries = [
                    ['name' => 'Công Nghệ', 'icon' => 'desktop_mac'],
                    ['name' => 'Tài Chính & Banking', 'icon' => 'account_balance'],
                    ['name' => 'Y Tế', 'icon' => 'local_hospital'],
                    ['name' => 'E-Commerce', 'icon' => 'shopping_cart'],
                    ['name' => 'Sản Xuất', 'icon' => 'factory'],
                    ['name' => 'Logistics', 'icon' => 'local_shipping'],
                    ['name' => 'Bất Động Sản', 'icon' => 'apartment'],
                    ['name' => 'Giáo Dục', 'icon' => 'school'],
                    ['name' => 'Du Lịch & Khách Sạn', 'icon' => 'hotel'],
                    ['name' => 'Media & Giải Trí', 'icon' => 'theaters'],
                ];
                @endphp
                @foreach($industries as $industry)
                <div style="background: linear-gradient(135deg, var(--secondary-bg) 0%, rgba(5, 150, 105, 0.05) 100%); border: 1px solid rgba(15, 107, 158, 0.1); border-radius: 12px; padding: 2rem 1.5rem; text-align: center; transition: all 0.3s ease; cursor: pointer;" 
                     onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 24px rgba(15, 107, 158, 0.15)'; this.style.borderColor='var(--primary)';" 
                     onmouseout="this.style.transform=''; this.style.boxShadow=''; this.style.borderColor='rgba(15, 107, 158, 0.1)';">
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem; transition: all 0.3s ease;">
                        <span class="material-symbols-rounded" style="font-size: 2.5rem;">{{ $industry['icon'] }}</span>
                    </div>
                    <div style="font-weight: 600; color: var(--text-dark); font-size: 0.95rem; line-height: 1.4;">
                        {{ $industry['name'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">Client Testimonials</h2>
                <p class="section-subtitle">What our clients say about working with us</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                @php
                $testimonials = [
                    ['quote' => 'HKIncotech transformed our entire business. Professional, delivered on time, exceeded expectations.', 'author' => 'CEO, TechStartup', 'rating' => 5],
                    ['quote' => 'Best technology partner we\'ve ever worked with. Highly recommended!', 'author' => 'Founder, FinTech Unicorn', 'rating' => 5],
                    ['quote' => 'The team understood our vision and delivered beyond what we imagined.', 'author' => 'Director, Enterprise Co.', 'rating' => 5],
                    ['quote' => 'Professional, reliable, innovative. HKIncotech is our go-to partner.', 'author' => 'CTO, Digital Agency', 'rating' => 5],
                    ['quote' => 'Exceptional quality and dedication. Highly professional team.', 'author' => 'VP Product, SaaS Company', 'rating' => 5],
                    ['quote' => 'Best decision we made. Transformed our legacy system brilliantly.', 'author' => 'COO, Financial Services', 'rating' => 5],
                ];
                @endphp
                @foreach($testimonials as $t)
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <div style="display: flex; gap: 0.25rem; margin-bottom: 1rem;">
                        @for($i = 0; $i < $t['rating']; $i++)
                        <span class="material-symbols-rounded" style="color: #fbbf24; font-size: 1.25rem;">star</span>
                        @endfor
                    </div>
                    <p style="color: var(--text-gray); font-style: italic; margin-bottom: 1.5rem; line-height: 1.7;">
                        "{{ $t['quote'] }}"
                    </p>
                    <div style="font-weight: 600; color: var(--text-dark); font-size: 0.95rem;">
                        {{ $t['author'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: white;">
        <div class="container-v5">
            <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Sẵn Sàng Cho Dự Án Tiếp Theo?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    Hãy bắt đầu cuộc trò chuyện với chúng tôi ngay hôm nay
                </p>
                <a href="{{ route('landing.contact') }}" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>Liên Hệ Ngay</span>
                </a>
            </div>
        </div>
    </section>

@endsection
