<?php
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php';
$roles = [
    [
        'name' => 'Phong — BA → PO',
        'icon' => 'analytics',
        'role_template' => 'Developer/BA',
        'level_target' => 'BA → PO (PSPO)',
        'note' => 'Phong map vào lộ trình BA/PO ở ; ưu tiên backlog health và stakeholder alignment. Bổ sung: SQL/Data Analysis, Facilitation, Product Metrics để đủ năng lực PO thực chiến.',
        'timeline' => [
            [
                'm' => 'GĐ I',
                'milestone' => [
                    'Requirements Engineering, BPMN, user story mapping',
                    'SQL basics, Excel nâng cao, Jira mastery',
                    'API/REST basics, Presentation skills'
                ]
            ],
            [
                'm' => 'GĐ II',
                'milestone' => [
                    'CCBA prep, stakeholder workshops, RTM',
                    'Financial literacy (ROI/business case)',
                    'Customer research methods, facilitation & workshop design',
                    'Market analysis, data visualization (Power BI/Tableau)'
                ]
            ],
            [
                'm' => 'GĐ III',
                'milestone' => [
                    'PSPO I, WSJF/MoSCoW, OKR/metrics',
                    'Product vision, Product analytics (AARRR/North Star)',
                    'Lean Startup & A/B testing',
                    'Advanced roadmapping, GTM basics',
                    'Case study projects'
                ]
            ]
        ],
        'certs' => [
            ['name' => 'PSM I', 'type' => 'cert'],
            ['name' => 'CCBA (IIBA)', 'type' => 'cert'],
            ['name' => 'PSPO I', 'type' => 'cert'],
            ['name' => 'Business Process Modeling', 'type' => 'course'],
            ['name' => 'SQL for Data Analysis', 'type' => 'course'],
            ['name' => 'Google Data Analytics Certificate', 'type' => 'cert'],
            ['name' => 'Product Analytics (Reforge/Amplitude)', 'type' => 'course'],
            ['name' => 'Facilitation Skills', 'type' => 'course'],
            ['name' => 'PSPO II (optional)', 'type' => 'cert']
        ],
        'skills' => [
            'Requirements Engineering',
            'Business Process Modeling',
            'Stakeholder Analysis',
            'Value Prioritization (WSJF/MoSCoW)',
            'Product Roadmapping',
            'SQL & Data Analysis',
            'Customer Research & Personas',
            'Facilitation & Workshop Design',
            'Product Metrics (AARRR)',
            'Financial Literacy (ROI/Business Case)',
            'Lean Startup & Experimentation',
            'Presentation & Storytelling',
            'Data Visualization',
            'Market & Competitive Analysis'
        ]
    ],
    [
        'name' => 'Hoàng Anh — Senior Dev → Tech Lead',
        'icon' => 'code',
        'role_template' => 'Developer',
        'level_target' => 'Senior → Tech Lead',
        'note' => 'Track: Developer thuần kỹ thuật (không đi theo EM/PM/Product). Thiên hướng: System Design, DevOps, AI integration (RAG/Agents/internal tools), Technical Analyst. Tập trung ownership kiến trúc + tiêu chuẩn review & reliability.',
        'timeline' => [
            [
                'm' => 'GĐ I',
                'milestone' => [
                    'Nền móng Tech Lead: thoát mindset “senior coder”, bắt đầu ownership kiến trúc, chuẩn hóa review & design',
                    'System Design & scalability: cache/indexing/sharding, sync vs async (queue/event-driven)',
                    'Code review standards: review vì maintainability (không sa đà style)',
                    'Distributed systems: idempotency, retry/timeout/circuit breaker',
                    'AI integration (cơ bản): RAG, embedding + vector DB cho internal tools',
                    'Deliverables: ≥6 design reviews; ≥1 system design doc; ≥1 POC nhỏ; checklist code review cho team'
                ]
            ],
            [
                'm' => 'GĐ II',
                'milestone' => [
                    'Kiến trúc & Cloud: cloud architecture AWS/GCP (compute/DB/network/security/cost awareness)',
                    'Microservices: khi nào không dùng, data ownership, versioning/backward compatibility',
                    'Observability: logs/metrics/tracing, SLI/SLO, alerting không spam',
                    'Automation: AI agents + RAG cho knowledge base/internal automation',
                    'Deliverables: ≥2 architecture proposal; ≥1 migration monolith → modular; ≥1 observability setup; mentor active ≥2 junior'
                ]
            ],
            [
                'm' => 'GĐ III',
                'milestone' => [
                    'Tech Lead thực thụ: ra quyết định kỹ thuật cấp team, dẫn dắt roadmap 6–12 tháng',
                    'Architecture patterns: Hexagonal/Event-driven, technical strategy proposal',
                    'GenAI best practices: security/data leakage, cost control, evaluation/monitoring output',
                    'Mentoring: growth plan cho dev, review design của dev khác, decision making',
                    'Deliverables: ≥3 system design nâng cao; ≥1 technical strategy proposal; ≥1 AI integration production; team satisfaction ≥85%'
                ]
            ]
        ],
        'kpis' => [
            [
                'title' => 'KPI kỹ thuật (2026)',
                'items' => [
                    'Senior design review ≥ 2/tháng',
                    'System design proposal ≥ 1/tháng',
                    'ADR (Architecture Decision Record) ≥ 1/tháng',
                    'Code coverage ≥ 85% (core modules ≥ 90%)',
                    'Bug escapes (prod) ≤ 1%',
                    'POC kỹ thuật ≥ 1/quý'
                ]
            ],
            [
                'title' => 'KPI team',
                'items' => [
                    'Mentor ≥ 2 junior (có feedback định kỳ)',
                    'Team velocity ≥ 90%',
                    'Team satisfaction ≥ 85%',
                    'Code review expert (merge reject rate có lý do rõ ràng)'
                ]
            ],
            [
                'title' => 'Chứng chỉ',
                'items' => [
                    'AWS Certified Solutions Architect – Associate (ưu tiên cao)',
                    'AWS Certified Developer hoặc Solutions Architect (tùy định hướng)',
                    'GCP Professional Developer (optional nhưng mạnh)'
                ]
            ]
        ],
        'certs' => [
            ['name' => 'AWS Certified Solutions Architect – Associate', 'type' => 'cert'],
            ['name' => 'AWS Certified Developer – Associate', 'type' => 'cert'],
            ['name' => 'GCP Professional Developer (optional)', 'type' => 'cert'],
            ['name' => 'System Design & Architecture (Grokking/Educative)', 'type' => 'course'],
            ['name' => 'TOGAF Foundation (foundation)', 'type' => 'cert']
        ],
        'skills' => [
            'System Design & Architecture',
            'Cloud Architecture (AWS/GCP)',
            'Observability & Reliability',
            'AI/ML Integration (RAG, Agents)',
            'Technical Strategy',
            'Tech Leadership & Mentoring'
        ]
    ],
    [
        'name' => 'Minh Thư — Senior Dev → Architecture Specialist',
        'icon' => 'widgets',
        'role_template' => 'Developer',
        'level_target' => 'Senior → Architecture Specialist',
        'note' => 'Thư map vào lộ trình Software Engineering → Architecture; tập trung tư duy kiến trúc hệ thống, scalability, không thiên về quản lý team (khác Tech Lead). Đặc biệt: deep expertise trong design patterns, distributed systems, system scalability.',
        'timeline' => [
            [
                'm' => 'GĐ I',
                'milestone' => [
                    'Software Architecture fundamentals: SOLID principles, design patterns',
                    'Architectural styles: Monolithic, Layered, Microservices',
                    'Architecture Decision Records (ADR): cách viết & maintain',
                    'System Design fundamentals: scaling, caching, database optimization',
                    'Deliverables: ≥3 design reviews; ≥1 architecture documentation'
                ]
            ],
            [
                'm' => 'GĐ II',
                'milestone' => [
                    'Distributed Systems: CAP theorem, idempotency, consistency models',
                    'Scalability patterns: load balancing, sharding, replication',
                    'Advanced patterns: Event Sourcing, Saga pattern, Circuit Breaker',
                    'Cloud architecture: AWS/GCP, multi-region design',
                    'Deliverables: ≥2 system design proposals; ≥1 scalability analysis document'
                ]
            ],
            [
                'm' => 'GĐ III',
                'milestone' => [
                    'Architecture Specialist: ra quyết định kiến trúc cấp team/product',
                    'Technology evaluation & trade-off analysis',
                    'Security & reliability architecture',
                    'Mentoring architecture thinking, design review lead',
                    'Deliverables: ≥3 system design; ≥1 technology strategy proposal; ≥1 production implementation'
                ]
            ]
        ],
        'kpis' => [
            [
                'title' => 'Architecture KPIs (2026)',
                'items' => [
                    'Architecture review ≥ 2/tháng',
                    'System design proposal ≥ 1/tháng',
                    'ADR (Architecture Decision Record) ≥ 1/tháng',
                    'Design pattern application score ≥ 4/5',
                    'System scalability score ≥ 4/5',
                    'Architecture documentation quality ≥ 90%'
                ]
            ],
            [
                'title' => 'Technical Impact',
                'items' => [
                    'Architecture mentoring ≥ 2 dev',
                    'Optimization projects ≥ 1/quý (cost/performance)',
                    'System reliability (uptime) ≥ 99.9%',
                    'Design review expert (high-quality feedback)'
                ]
            ]
        ],
        'certs' => [
            ['name' => 'System Design & Architecture (Grokking/Educative)', 'type' => 'course', 'priority' => 'immediate'],
            // ['name' => 'AWS Certified Solutions Architect – Associate', 'type' => 'cert', 'priority' => 'immediate'],
            ['name' => 'Domain-Driven Design (DDD) Fundamentals', 'type' => 'course', 'priority' => 'near-term'],
            ['name' => 'TOGAF Foundation', 'type' => 'cert', 'priority' => 'near-term'],
            // ['name' => 'AWS Certified Solutions Architect – Professional', 'type' => 'cert', 'priority' => 'mid-term'],
            ['name' => 'GCP Professional Cloud Architect', 'type' => 'cert', 'priority' => 'mid-term'],
            ['name' => 'Event-Driven Architecture & Microservices', 'type' => 'course', 'priority' => 'mid-term'],
            ['name' => 'TOGAF Certified (Advanced)', 'type' => 'cert', 'priority' => 'advanced'],
            ['name' => 'Enterprise Architecture (Zachman Framework)', 'type' => 'course', 'priority' => 'advanced']
        ],
        'skills' => [
            'Software Architecture & Design Patterns',
            'System Design & Scalability',
            'Distributed Systems & Microservices',
            'Domain-Driven Design (DDD)',
            // 'Cloud Architecture (AWS/GCP)',
            'Data Architecture & Optimization',
            'Performance & Reliability Engineering',
            'Technology Evaluation & Selection',
            'Architecture Decision Making',
            'Enterprise Architecture Thinking',
            'Security & Compliance Architecture'
        ]
    ],
[
    'name' => 'Hoàn — QA/QC Tester',
    'icon' => 'bug_report',
    'role_template' => 'Tester (QA/QC)',
    'current_level' => 'Tester',
    'level_target' => 'Senior QA',
    'note' => 'Lộ trình phát triển từ Manual QA lên Senior QA theo hướng Quality Engineering: nắm vững Agile, làm chủ API & Automation, tiến tới ownership chất lượng toàn module/dự án.',

    'timeline' => [
        [
            'm' => 'GĐ I',
            'focus' => 'QA Foundation & Agile Mindset',
            'role_expectation' => 'Tester độc lập trong Scrum team',
            'milestone' => [
                'Hiểu rõ vai trò QA trong Scrum (Sprint, User Story, Acceptance Criteria)',
                'Thiết kế Test Scenario, Test Case, Test Data theo chuẩn ISTQB',
                'Áp dụng test design techniques (BVA, ECP, Decision Table)',
                'Xây dựng Requirements Traceability Matrix (RTM)',
                'Manual test coverage ≥ 90%',
                'Bug report rõ ràng (severity, priority, root cause)',
                'Tham gia đầy đủ Sprint Planning, Review, Retrospective'
            ],
            'deliverables' => [
                'Bộ test case chuẩn cho ≥ 1 module',
                'RTM liên kết AC – TC – Bug',
                'Test Summary Report theo sprint'
            ],
            'cert_target' => [
                'ISTQB Foundation (CTFL)',
                'ISTQB Agile Tester (CTFL-AT)'
            ]
        ],
        [
            'm' => 'GĐ II',
            'focus' => 'API Testing & Test Automation',
            'role_expectation' => 'QA chịu trách nhiệm chất lượng cho module',
            'milestone' => [
                'API testing với Postman / Newman',
                'Test API authentication & authorization (Bearer Token, OAuth)',
                'Validate business logic, negative & edge cases',
                'Xây dựng automation framework cơ bản (Cypress hoặc Selenium)',
                'Automation cho smoke & regression test',
                'Tích hợp automation & API test vào CI/CD',
                'Automation coverage ≥ 30%'
            ],
            'deliverables' => [
                'API test collection + environment',
                'Automation test suite cho các flow chính',
                'CI pipeline chạy API & automation test'
            ],
            'cert_target' => [
                'API Testing (Postman/Newman)',
                'Automation Testing (Cypress/Selenium)'
            ]
        ],
        [
            'm' => 'GĐ III',
            'focus' => 'Senior QA Skills & Quality Ownership',
            'role_expectation' => 'Quality Owner / Senior QA',
            'milestone' => [
                'Automation coverage ≥ 50%',
                'Thiết kế Test Strategy cho module / dự án',
                'Áp dụng Risk-based Testing',
                'Performance testing cơ bản (JMeter / k6)',
                'Security testing cơ bản theo OWASP Top 10',
                'Định nghĩa Quality Gates trước khi release',
                'Review test case & automation cho QA khác',
                'Chủ động cảnh báo rủi ro chất lượng với PO/PM'
            ],
            'deliverables' => [
                'Test Strategy document',
                'Performance test report',
                'Quality checklist & release gate'
            ],
            'cert_target' => [
                'ISTQB Advanced – Test Analyst',
                'Basic Performance Testing (JMeter/k6)'
            ]
        ]
    ],

    'certs' => [
        ['order' => 1, 'name' => 'ISTQB Foundation (CTFL)', 'type' => 'cert', 'priority' => 'mandatory'],
        ['order' => 2, 'name' => 'ISTQB Agile Tester (CTFL-AT)', 'type' => 'cert', 'priority' => 'mandatory'],
        ['order' => 3, 'name' => 'API Testing (Postman/Newman)', 'type' => 'course'],
        ['order' => 4, 'name' => 'Automation Testing (Cypress/Selenium)', 'type' => 'course'],
        ['order' => 5, 'name' => 'Basic Performance Testing (JMeter/k6)', 'type' => 'course'],
        ['order' => 6, 'name' => 'ISTQB Advanced – Test Analyst', 'type' => 'cert', 'priority' => 'target']
    ],

    'skills' => [
        'Manual & Exploratory Testing',
        'Agile/Scrum QA Practices',
        'Test Case Design & Traceability (RTM)',
        'API Testing & Validation',
        'Automation Scripting & Maintenance',
        'CI/CD Integration',
        'Performance & Security Testing (basic)',
        'Test Strategy & Quality Gates'
    ],

    'kpi' => [
        'Manual test coverage ≥ 90%',
        'Automation coverage ≥ 50%',
        'Bug leakage < 5%',
        'On-time test delivery per sprint',
        'Chủ động phát hiện & báo cáo risk'
    ],

    'promotion_criteria' => [
        'Có thể tự xây dựng Test Strategy',
        'Làm chủ API & Automation test',
        'Đóng vai trò Quality Owner cho module',
        'Có khả năng review & mentor QA khác',
        'Được Dev/PO tin tưởng về chất lượng'
    ]
],

    [
        'name' => 'Nguyễn Duy Tài — Intern/Fresher Dev (học việc)',
        'icon' => 'rocket_launch',
        'role_template' => 'Developer (Intern/Fresher)',
        'level_target' => 'Học việc → Junior (Developer)',
        'note' => 'Đang học việc; lộ trình dev có thể điều chỉnh theo tiến bộ. Bám sát map Developer : Intern → Junior.',
        'timeline' => [
            ['m' => 'GĐ I', 'milestone' => 'Onboarding quy trình, Git workflow, HTML/CSS/JS cơ bản'],
            ['m' => 'GĐ II', 'milestone' => 'Task nhỏ, PR review, REST basics, SQL cơ bản'],
            ['m' => 'GĐ III', 'milestone' => 'Backend/frontend foundation, unit test cơ bản, chuẩn bị lên Junior']
        ],
        'certs' => [
            ['name' => 'Git basics', 'type' => 'course'],
            ['name' => 'Web fundamentals (HTML/CSS/JS)', 'type' => 'course'],
            ['name' => 'SQL cơ bản', 'type' => 'course']
        ],
        'skills' => ['Git', 'HTML/CSS/JS', 'SQL basics', 'Debugging', 'Team process & review']
    ]
];

$vn_costs = [
    ['path' => 'PSM I / PSPO I', 'provider' => 'Scrum.org / VN partners', 'duration' => '2-3 days', 'cost' => '6–12 triệu VND'],
    ['path' => 'PSPO II', 'provider' => 'Scrum.org / VN partners', 'duration' => '2-3 days', 'cost' => '10–18 triệu VND'],
    ['path' => 'CCBA / CBAP', 'provider' => 'IIBA + local training', 'duration' => '4-8 weeks prep', 'cost' => '15–35 triệu VND'],
    ['path' => 'Business Process Modeling (BPMN)', 'provider' => 'Online/Udemy/local training', 'duration' => '1-2 weeks', 'cost' => '2–5 triệu VND'],
    ['path' => 'Agile BA / Agile Scrum fundamentals', 'provider' => 'Local training / online', 'duration' => '1-2 weeks', 'cost' => '3–6 triệu VND'],
    ['path' => 'SQL for Data Analysis', 'provider' => 'Mode Analytics / Codecademy', 'duration' => '2-3 weeks', 'cost' => '0–2 triệu VND'],
    ['path' => 'Google Data Analytics Certificate', 'provider' => 'Coursera (Google)', 'duration' => '3-6 months', 'cost' => '~2 triệu VND'],
    ['path' => 'Product Analytics', 'provider' => 'Reforge / Amplitude Academy', 'duration' => '4-8 weeks', 'cost' => '8–12 triệu VND'],
    ['path' => 'Facilitation Skills', 'provider' => 'LinkedIn Learning / local', 'duration' => '2-3 weeks', 'cost' => '3–6 triệu VND'],
    ['path' => 'Power BI / Tableau basics', 'provider' => 'Microsoft Learn / online', 'duration' => '1-2 weeks', 'cost' => '0–3 triệu VND'],
    ['path' => 'AWS Cloud Practitioner', 'provider' => 'VN training centers', 'duration' => '2-4 weeks', 'cost' => '3–6 triệu VND'],
    ['path' => 'AWS Solutions Architect Associate', 'provider' => 'VN training centers', 'duration' => '4-6 weeks', 'cost' => '8–18 triệu VND'],
    ['path' => 'Docker Certified Associate', 'provider' => 'Local bootcamps / online', 'duration' => '2-4 weeks', 'cost' => '6–12 triệu VND'],
    ['path' => 'CKA (Kubernetes Admin)', 'provider' => 'Authorized K8s training', 'duration' => '4-6 weeks', 'cost' => '8–16 triệu VND'],
    ['path' => 'System Design & Architecture', 'provider' => 'Online/Educative/ByteByteGo', 'duration' => '4-8 weeks', 'cost' => '2–6 triệu VND'],
    ['path' => 'AI/ML Fundamentals & GenAI', 'provider' => 'Coursera/DeepLearning.AI', 'duration' => '4-8 weeks', 'cost' => '3–8 triệu VND'],
    ['path' => 'TOGAF Foundation', 'provider' => 'Authorized providers', 'duration' => '1-2 weeks', 'cost' => '12–25 triệu VND'],
    ['path' => 'ISTQB Foundation', 'provider' => 'VN QA academies', 'duration' => '1-2 weeks', 'cost' => '5–10 triệu VND'],
    ['path' => 'ISTQB Advanced Test Analyst', 'provider' => 'VN QA academies', 'duration' => '3-6 weeks prep', 'cost' => '12–20 triệu VND'],
    ['path' => 'Automation (Cypress/Selenium)', 'provider' => 'Local bootcamps', 'duration' => '2-4 weeks', 'cost' => '6–15 triệu VND'],
    ['path' => 'PMI-ACP (intro / prep)', 'provider' => 'PMI R.E.P / local', 'duration' => '3-6 weeks', 'cost' => '12–20 triệu VND'],
    ['path' => 'Web fundamentals (Git, HTML/CSS/JS, SQL)', 'provider' => 'Online/Udemy/FreeCodeCamp', 'duration' => '2-6 weeks', 'cost' => '0–3 triệu VND']
];
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-top: 10px;
            color: #6b7280;
        }

        .slide-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 25px;
            animation: fadeInUp 0.8s ease-out;
        }

        .roles-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .role-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .role-card:hover {
            border-color: #7c9ee3;
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(124,158,227,0.2);
        }

        .role-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #7c9ee3;
        }

        .role-header .material-symbols-rounded {
            font-size: 2rem;
            color: #7c9ee3;
        }

        .role-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0;
        }

        .role-meta {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 14px;
        }

        .meta-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 10px;
            border-radius: 999px;
            background: #f3f4f6;
            color: #1f2937;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .meta-blue {
            background: #e0f2fe;
            color: #075985;
        }

        .meta-pill .material-symbols-rounded {
            font-size: 1rem;
            color: inherit;
        }

        .timeline {
            margin-bottom: 20px;
        }

        .timeline-item {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
            padding: 10px;
            background: #f9fafb;
            border-left: 4px solid #7c9ee3;
            border-radius: 4px;
        }

        .timeline-period {
            font-weight: 700;
            color: #0f6b9e;
            min-width: 70px;
            font-size: 0.9rem;
        }

        .timeline-milestone {
            color: #4b5563;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Timeline dạng gạch đầu dòng: để nội dung dễ scan hơn */
        .timeline-milestone ul {
            margin: 0;
            padding-left: 18px;
            list-style: disc;
        }

        .timeline-milestone li {
            margin: 2px 0;
        }

        .role-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .detail-section h3 {
            font-size: 1rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0 0 10px 0;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .detail-section h3 .material-symbols-rounded {
            font-size: 1.2rem;
            color: #7c9ee3;
        }

        .detail-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .detail-section li {
            padding: 6px 10px;
            background: #f0f9ff;
            border-left: 3px solid #bfdbfe;
            border-radius: 3px;
            margin-bottom: 6px;
            color: #1e3a8a;
            font-size: 0.85rem;
        }

        .cert-badges {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 8px;
        }

        .cert-badge {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 5px 10px;
            border-radius: 6px;
            font-size: 0.78rem;
            font-weight: 700;
            border: 1.5px solid;
        }

        .cert-badge .material-symbols-rounded {
            font-size: 1rem;
        }

        .cert-cert {
            background: #dbeafe;
            border-color: #3b82f6;
            color: #1e40af;
        }

        .cert-course {
            background: #dcfce7;
            border-color: #22c55e;
            color: #166534;
        }

        .role-note {
            margin-top: 12px;
            padding: 10px 12px;
            border-radius: 8px;
            background: #fffbeb;
            border: 1px solid #fcd34d;
            display: flex;
            gap: 8px;
            align-items: flex-start;
        }

        .role-note .material-symbols-rounded {
            color: #b45309;
            font-size: 1.1rem;
        }

        .role-note p {
            margin: 0;
            color: #92400e;
            font-size: 0.85rem;
            line-height: 1.4;
        }

        .costs-section {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .costs-header {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #1f2937;
            padding-bottom: 15px;
            border-bottom: 3px solid #7c9ee3;
        }

        .costs-header .material-symbols-rounded {
            font-size: 2rem;
            color: #7c9ee3;
        }

        .costs-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        .costs-table thead {
            background: linear-gradient(135deg, #7c9ee3 0%, #6b8dd6 100%);
        }

        .costs-table th {
            padding: 12px 15px;
            text-align: left;
            color: #ffffff;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .costs-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: background 0.2s ease;
        }

        .costs-table tbody tr:hover {
            background: #f9fafb;
        }

        .costs-table td {
            padding: 12px 15px;
            color: #4b5563;
            font-size: 0.9rem;
        }

        .costs-table td:first-child {
            font-weight: 600;
            color: #1f2937;
        }

        .costs-table td:last-child {
            color: #0f6b9e;
            font-weight: 600;
        }

        .note-box {
            background: linear-gradient(135deg, #fef9e7 0%, #fdf2d9 100%);
            border: 2px solid #fcd34d;
            border-radius: 8px;
            padding: 15px 20px;
            display: flex;
            align-items: start;
            gap: 12px;
        }

        .note-box .material-symbols-rounded {
            color: #b45309;
            font-size: 1.5rem;
            margin-top: 2px;
        }

        .note-text {
            color: #7c2d12;
            font-size: 0.9rem;
            line-height: 1.6;
            margin: 0;
        }

        @media (max-width: 1024px) {
            .roles-grid {
                grid-template-columns: 1fr;
            }

            .role-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">school</span>
                Phân hóa nguồn lực hiện tại và chứng chỉ đề xuất
            </div>
            <div class="slide-subtitle">
                Lộ trình phát triển chuyên môn 12 tháng cho từng thành viên
            </div>
        </div>

        <div class="slide-content">
            <!-- Roles Grid -->
            <div class="roles-grid">
                <?php foreach ($roles as $r): ?>
                    <div class="role-card">
                        <div class="role-header">
                            <span class="material-symbols-rounded"><?= htmlspecialchars($r['icon']) ?></span>
                            <h2 class="role-name"><?= htmlspecialchars($r['name']) ?></h2>
                        </div>

                        <div class="role-meta">
                            <div class="meta-pill">
                                <span class="material-symbols-rounded">category</span>
                                <?= htmlspecialchars($r['role_template']) ?>
                            </div>
                            <div class="meta-pill meta-blue">
                                <span class="material-symbols-rounded">flag</span>
                                <?= htmlspecialchars($r['level_target']) ?>
                            </div>
                        </div>

                        <div class="timeline">
                            <?php foreach ($r['timeline'] as $t): ?>
                                <div class="timeline-item">
                                    <div class="timeline-period"><?= htmlspecialchars($t['m']) ?></div>
                                    <div class="timeline-milestone">
                                        <?php if (is_array($t['milestone'])): ?>
                                            <ul>
                                                <?php foreach ($t['milestone'] as $mi): ?>
                                                    <li><?= htmlspecialchars($mi) ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php else: ?>
                                            <?= htmlspecialchars($t['milestone']) ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="role-details">
                            <div class="detail-section">
                                <h3>
                                    <span class="material-symbols-rounded">card_membership</span>
                                    Chứng chỉ / Khóa học
                                </h3>
                                <div class="cert-badges">
                                    <?php foreach ($r['certs'] as $c): ?>
                                        <span class="cert-badge cert-<?= htmlspecialchars($c['type']) ?>">
                                            <?php if ($c['type'] === 'cert'): ?>
                                                <span class="material-symbols-rounded">verified</span>
                                            <?php else: ?>
                                                <span class="material-symbols-rounded">school</span>
                                            <?php endif; ?>
                                            <?= htmlspecialchars($c['name']) ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php if (false && !empty($r['kpis'])): ?>
                                <div class="detail-section">
                                    <h3>
                                        <span class="material-symbols-rounded">target</span>
                                        KPI / Deliverables
                                    </h3>
                                    <ul>
                                        <?php foreach ($r['kpis'] as $kg): ?>
                                            <li style="background:#fff7ed;border-left-color:#fdba74;color:#9a3412;font-weight:700;">
                                                <?= htmlspecialchars($kg['title']) ?>
                                            </li>
                                            <?php foreach (($kg['items'] ?? []) as $item): ?>
                                                <li><?= htmlspecialchars($item) ?></li>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="detail-section">
                                <h3>
                                    <span class="material-symbols-rounded">stars</span>
                                    Kỹ năng trọng tâm
                                </h3>
                                <ul>
                                    <?php foreach ($r['skills'] as $s): ?>
                                        <li><?= htmlspecialchars($s) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="role-note">
                                <span class="material-symbols-rounded">info</span>
                                <p><?= htmlspecialchars($r['note']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Costs Section -->
            <div class="costs-section">
                <div class="costs-header">
                    <span class="material-symbols-rounded">payments</span>
                    Tổng quan chi phí đào tạo (VN)
                </div>

                <table class="costs-table">
                    <thead>
                        <tr>
                            <th>Lộ trình</th>
                            <th>Nhà cung cấp</th>
                            <th>Thời lượng</th>
                            <th>Chi phí ước tính</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vn_costs as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['path']) ?></td>
                                <td><?= htmlspecialchars($row['provider']) ?></td>
                                <td><?= htmlspecialchars($row['duration']) ?></td>
                                <td><?= htmlspecialchars($row['cost']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="note-box">
                    <span class="material-symbols-rounded">info</span>
                    <p class="note-text">
                        Chi phí thực tế phụ thuộc nhà cung cấp, ưu đãi, và lộ trình học. Có thể tối ưu bằng học liệu tự học + thi chứng chỉ trực tiếp. Tổng chi phí bổ sung cho Phong: ~25-50 triệu VND (ngoài chứng chỉ chính).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>