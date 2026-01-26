<!-- Hero -->
<section id="certifications" style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                Certifications & Industry <span style="color: var(--primary);">Standards</span>
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                Enterprise-grade compliance, security certifications, and continuous professional development across our team
            </p>
            <a href="#contact" class="btn-primary-v5">
                <span>Verify Our Credentials</span>
                <span class="material-symbols-rounded">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<!-- Compliance & Security -->
<section id="compliance">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Compliance & Security <span style="color: var(--primary);">Certifications</span></h2>
            <p class="section-subtitle">Enterprise-grade security standards and regulatory compliance</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @php
            $compliance = [
                [
                    'icon' => 'shield_lock',
                    'name' => 'ISO 27001',
                    'subtitle' => 'Information Security Management',
                    'desc' => 'International standard for information security management systems. Ensures confidentiality, integrity, and availability of data.'
                ],
                [
                    'icon' => 'verified',
                    'name' => 'SOC 2 Type II',
                    'subtitle' => 'Service Organization Control',
                    'desc' => 'Validates security, availability, processing integrity, confidentiality, and privacy controls over time.'
                ],
                [
                    'icon' => 'gavel',
                    'name' => 'GDPR Compliant',
                    'subtitle' => 'General Data Protection Regulation',
                    'desc' => 'Ensures data protection and privacy rights for EU citizens. Full compliance with data processing and storage requirements.'
                ],
                [
                    'icon' => 'credit_card',
                    'name' => 'PCI DSS',
                    'subtitle' => 'Payment Card Industry Data Security',
                    'desc' => 'Secures payment card data and systems. Required for any company processing payment cards.'
                ],
                [
                    'icon' => 'health_and_safety',
                    'name' => 'HIPAA',
                    'subtitle' => 'Health Insurance Portability',
                    'desc' => 'Protects healthcare data privacy and security. Ensures patient information confidentiality and integrity.'
                ],
                [
                    'icon' => 'lock',
                    'name' => 'OWASP Standards',
                    'subtitle' => 'Web Application Security',
                    'desc' => 'Follows industry best practices for secure web application development and vulnerability prevention.'
                ],
            ];
            @endphp
            @foreach($compliance as $cert)
            <div style="background: white; border-radius: 12px; padding: 2.5rem 2rem; border: 1px solid var(--border); transition: all 0.3s ease; text-align: center;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(15, 107, 158, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                    <span class="material-symbols-rounded">{{ $cert['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                    {{ $cert['name'] }}
                </h3>
                <p style="font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 1rem;">
                    {{ $cert['subtitle'] }}
                </p>
                <p style="font-size: 0.9rem; color: var(--text-gray); line-height: 1.6;">
                    {{ $cert['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Cloud Provider Certifications -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Cloud Provider <span style="color: var(--primary);">Certifications</span></h2>
            <p class="section-subtitle">Certified expertise across leading cloud platforms</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @php
            $cloudCerts = [
                [
                    'icon' => 'cloud',
                    'provider' => 'Amazon Web Services (AWS)',
                    'certs' => [
                        'AWS Certified Solutions Architect',
                        'AWS Certified DevOps Engineer',
                        'AWS Certified Solutions Architect - Professional',
                        'AWS Certified Advanced Networking'
                    ]
                ],
                [
                    'icon' => 'cloud',
                    'provider' => 'Google Cloud Platform',
                    'certs' => [
                        'Google Cloud Professional Cloud Architect',
                        'Google Cloud Associate Cloud Engineer',
                        'Google Cloud Professional Data Engineer',
                        'Google Cloud Professional Cloud Network Engineer'
                    ]
                ],
                [
                    'icon' => 'cloud',
                    'provider' => 'Microsoft Azure',
                    'certs' => [
                        'Azure Solutions Architect',
                        'Azure Administrator',
                        'Azure Developer Associate',
                        'Azure Security Engineer'
                    ]
                ],
                [
                    'icon' => 'settings',
                    'provider' => 'Kubernetes & Container',
                    'certs' => [
                        'Kubernetes Certified Application Developer (CKAD)',
                        'Certified Kubernetes Administrator (CKA)',
                        'Docker Certified Associate',
                        'Linux Foundation Certified'
                    ]
                ],
            ];
            @endphp
            @foreach($cloudCerts as $cloud)
            <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                    <span class="material-symbols-rounded">{{ $cloud['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">
                    {{ $cloud['provider'] }}
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($cloud['certs'] as $cert)
                    <li style="padding: 0.75rem 0; display: flex; align-items: flex-start; gap: 0.75rem; border-bottom: 1px solid #e2e8f0;">
                        <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0; margin-top: 2px;">check_circle</span>
                        <span style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.5;">{{ $cert }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Agile & Development Certifications -->
<section>
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Agile & Development <span style="color: var(--primary);">Expertise</span></h2>
            <p class="section-subtitle">Professional certifications in agile methodologies and software development</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @php
            $agile = [
                [
                    'category' => 'Scrum Framework',
                    'icon' => 'groups',
                    'items' => [
                        'Certified Scrum Master (CSM)',
                        'Certified Scrum Product Owner (CSPO)',
                        'Professional Scrum Developer (PSD)',
                        'Certified Scrum Trainer (CST)',
                        'Advanced Scrum Master (A-CSM)'
                    ]
                ],
                [
                    'category' => 'Scaled Agile',
                    'icon' => 'trending_up',
                    'items' => [
                        'SAFe Agilist (Scaled Agile Framework)',
                        'SAFe Program Consultant',
                        'SAFe Scrum Master',
                        'SAFe Release Train Engineer',
                        'Disciplined Agile Scrum Master'
                    ]
                ],
                [
                    'category' => 'Technical Excellence',
                    'icon' => 'code',
                    'items' => [
                        'Continuous Delivery & DevOps',
                        'Test-Driven Development (TDD)',
                        'Behavior-Driven Development (BDD)',
                        'Domain-Driven Design (DDD)',
                        'Microservices Architecture'
                    ]
                ],
            ];
            @endphp
            @foreach($agile as $category)
            <div style="background: white; border-radius: 12px; padding: 2.5rem 2rem; border: 2px solid #e2e8f0; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.transform='translateX(5px)';" onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='';">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="font-size: 2rem; color: var(--primary);">
                        <span class="material-symbols-rounded">{{ $category['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin: 0;">
                        {{ $category['category'] }}
                    </h3>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($category['items'] as $item)
                    <li style="padding: 0.75rem 0; color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; display: flex; align-items: center; gap: 0.75rem; border-bottom: 1px solid #f0f0f0;">
                        <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1rem;">verified</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Technology & Framework Expertise -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Technology & Framework <span style="color: var(--primary);">Expertise</span></h2>
            <p class="section-subtitle">Deep expertise across modern development frameworks and technologies</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @php
            $technologies = [
                [
                    'category' => 'Frontend Technologies',
                    'icon' => 'palette',
                    'items' => ['React.js Certified', 'Vue.js Professional', 'Angular Expert', 'TypeScript Master', 'PWA Specialist']
                ],
                [
                    'category' => 'Backend Technologies',
                    'icon' => 'storage',
                    'items' => ['Node.js Expert', 'Python/Django Master', 'Java Enterprise', 'Go Professional', 'GraphQL Specialist']
                ],
                [
                    'category' => 'Database & Data',
                    'icon' => 'database',
                    'items' => ['PostgreSQL Expert', 'MongoDB Professional', 'Redis Specialist', 'Elasticsearch Master', 'Data Architecture']
                ],
                [
                    'category' => 'AI & Machine Learning',
                    'icon' => 'smart_toy',
                    'items' => ['OpenAI Integration', 'LLM Specialist', 'TensorFlow Professional', 'PyTorch Expert', 'RAG Pipeline Architect']
                ],
                [
                    'category' => 'DevOps & Infrastructure',
                    'icon' => 'settings',
                    'items' => ['Kubernetes Expert', 'Docker Master', 'Terraform Professional', 'CI/CD Specialist', 'Infrastructure as Code']
                ],
                [
                    'category' => 'Security & Performance',
                    'icon' => 'security',
                    'items' => ['Security Architecture', 'Penetration Testing', 'Performance Optimization', 'Load Testing', 'Monitoring Expert']
                ],
            ];
            @endphp
            @foreach($technologies as $tech)
            <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 20px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.boxShadow='';">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="font-size: 2rem; color: var(--primary);">
                        <span class="material-symbols-rounded">{{ $tech['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin: 0;">
                        {{ $tech['category'] }}
                    </h3>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($tech['items'] as $item)
                    <li style="padding: 0.5rem 0; color: var(--text-gray); font-size: 0.85rem; display: flex; align-items: center; gap: 0.5rem;">
                        <span style="color: var(--primary); font-weight: 700;">•</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Expertise -->
<section>
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Team Expertise & <span style="color: var(--primary);">Experience</span></h2>
            <p class="section-subtitle">50+ senior engineers with deep specialization and track record</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @php
            $teamProfile = [
                [
                    'icon' => 'person',
                    'title' => 'Senior Engineers',
                    'count' => '50+',
                    'desc' => 'Average 10+ years enterprise software experience. Certified architects and specialists across all domains.'
                ],
                [
                    'icon' => 'shield',
                    'title' => 'Security Experts',
                    'count' => '8+',
                    'desc' => 'Certified security architects. Penetration testers, compliance specialists. Zero Trust & OWASP expertise.'
                ],
                [
                    'icon' => 'smart_toy',
                    'title' => 'AI/ML Specialists',
                    'count' => '6+',
                    'desc' => 'LLM integration experts. NLP, semantic search, RAG pipeline architects with research background.'
                ],
                [
                    'icon' => 'architecture',
                    'title' => 'Solution Architects',
                    'count' => '12+',
                    'desc' => 'Enterprise solution architects. Microservices, cloud-native, scalable systems design specialists.'
                ],
                [
                    'icon' => 'trending_up',
                    'title' => 'Tech Leads',
                    'count' => '15+',
                    'desc' => 'Team leaders with P&L responsibility. Product vision, technical strategy, mentorship expertise.'
                ],
                [
                    'icon' => 'school',
                    'title' => 'Continuous Learning',
                    'count' => '100%',
                    'desc' => 'Annual certification budget per engineer. Internal knowledge sharing, tech talks, R&D time allocation.'
                ],
            ];
            @endphp
            @foreach($teamProfile as $profile)
            <div style="background: white; border-radius: 12px; padding: 2.5rem 2rem; border: 1px solid var(--border); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 30px rgba(15, 107, 158, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.transform=''; this.style.boxShadow='';">
                <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
                    <span class="material-symbols-rounded">{{ $profile['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                    {{ $profile['title'] }}
                </h3>
                <p style="font-size: 2rem; font-weight: 800; color: var(--primary); margin: 0.75rem 0;">
                    {{ $profile['count'] }}
                </p>
                <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6;">
                    {{ $profile['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Continuous Learning Culture -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
            <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Continuous Learning Culture</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                We invest in our team's growth through certifications, training, and knowledge sharing
            </p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto;">
                <div style="background: rgba(255, 255, 255, 0.1); border-radius: 8px; padding: 1.5rem;">
                    <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">100%</div>
                    <div style="font-size: 0.9rem;">Annual Certification Budget</div>
                </div>
                <div style="background: rgba(255, 255, 255, 0.1); border-radius: 8px; padding: 1.5rem;">
                    <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">Monthly</div>
                    <div style="font-size: 0.9rem;">Tech Talks & Knowledge Sharing</div>
                </div>
                <div style="background: rgba(255, 255, 255, 0.1); border-radius: 8px; padding: 1.5rem;">
                    <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">R&D Time</div>
                    <div style="font-size: 0.9rem;">Emerging Technologies Focus</div>
                </div>
                <div style="background: rgba(255, 255, 255, 0.1); border-radius: 8px; padding: 1.5rem;">
                    <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">Mentorship</div>
                    <div style="font-size: 0.9rem;">Senior-to-Junior Developer Program</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section>
    <div class="container-v5">
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3.5rem 2rem; text-align: center; color: white;">
            <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Partner with HKIncotech</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                Enterprise-grade team with industry certifications and proven expertise
            </p>
            <a href="#contact" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                <span>Start Your Project</span>
            </a>
        </div>
    </div>
</section>