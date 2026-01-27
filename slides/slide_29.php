
<?php 
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php'; 

// Slide 29: Vị trí, kỹ năng & Chứng chỉ theo SCRUM - 6 vị trí cốt lõi
$positions = [
  [
    'name' => 'Developer',
    'icon' => 'code',
    'progression' => 'Intern/Fresher → Junior → Mid-Level → Senior → Tech Lead → Solution Architect → CTO',
    'levels' => 7,
    'salary_range' => '10–50 triệu VND',
    'avg_time' => '8–12 năm (Intern → CTO)',
    'summary' => 'Phát triển phần mềm từ code đơn giản đến kiến trúc hệ thống lớn. Cốt lõi của mọi sản phẩm công nghệ.'
  ],
  [
    'name' => 'Tester (QA/QC)',
    'icon' => 'bug_report',
    'progression' => 'Junior Tester → Tester → Senior QA → QA Lead → QA Manager → Test Architect',
    'levels' => 6,
    'salary_range' => '12–35 triệu VND',
    'avg_time' => '6–10 năm (Junior → Architect)',
    'summary' => 'Đảm bảo chất lượng sản phẩm, phát hiện lỗi sớm, giảm rủi ro production. Hàng phòng ngự cuối cùng.'
  ],
  [
    'name' => 'UI/UX Designer',
    'icon' => 'palette',
    'progression' => 'Junior Designer → Designer → Senior UI/UX → Product Designer → Design Lead → Head of Design',
    'levels' => 6,
    'salary_range' => '15–35 triệu VND',
    'avg_time' => '6–9 năm (Junior → Head)',
    'summary' => 'Thiết kế trải nghiệm người dùng và giao diện đẹp, dễ dùng. Biến nghiệp vụ thành visual intuitive.'
  ],
  [
    'name' => 'DevOps Engineer',
    'icon' => 'settings_suggest',
    'progression' => 'Junior DevOps → DevOps → Senior DevOps → Infrastructure Lead → Cloud Architect → Principal Engineer',
    'levels' => 6,
    'salary_range' => '18–45 triệu VND',
    'avg_time' => '7–10 năm (Junior → Principal)',
    'summary' => 'Vận hành hệ thống, CI/CD, cloud infrastructure. Đảm bảo uptime, scalability và bảo mật cho toàn bộ sản phẩm.'
  ],
  [
    'name' => 'Business Analyst (BA)',
    'icon' => 'analytics',
    'progression' => 'Junior BA → BA → Senior BA → BA Lead → Product Owner → Product Manager',
    'levels' => 6,
    'salary_range' => '15–32 triệu VND',
    'avg_time' => '6–9 năm (Junior → PM)',
    'summary' => 'Cầu nối giữa nghiệp vụ và kỹ thuật. Phân tích yêu cầu, viết tài liệu, đảm bảo team hiểu đúng.'
  ],
  [
    'name' => 'Product Owner (PO)',
    'icon' => 'account_tree',
    'progression' => 'Associate PO → Product Owner → Senior PO → Product Manager → Head of Product → CPO',
    'levels' => 6,
    'salary_range' => '20–40 triệu VND',
    'avg_time' => '7–12 năm (Associate → CPO)',
    'summary' => 'Định hướng sản phẩm, quyết định CÁI GÌ nên phát triển và VÌ SAO. Chịu trách nhiệm business value.'
  ]
];

$cert_roadmap = [
  [
    'role' => 'Developer',
    'levels' => [
      [
        'level' => 'Intern/Fresher',
        'salary' => '10–12 triệu',
        'kpis' => ['Hoàn thành task đơn giản ≥80%', 'Học hỏi tích cực', 'Đúng giờ', 'Tuân thủ quy trình'],
        'skills' => ['Git cơ bản', 'HTML/CSS/JS nền tảng', 'SQL cơ bản', 'Debugging'],
        'certs' => [
          ['name' => 'Git basics', 'type' => 'course'],
          ['name' => 'HTML/CSS/JS fundamentals', 'type' => 'course'],
          ['name' => 'SQL cơ bản', 'type' => 'course'],
          ['name' => 'Version control workflow', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Junior',
        'salary' => '13–18 triệu',
        'kpis' => ['Task đúng hạn ≥90%', 'PR qua review ≥85%', 'Code coverage ≥70%', 'Học tập ≥5h/tuần'],
        'skills' => ['RESTful API', 'OOP cơ bản', 'MVC pattern', 'Unit test'],
        'certs' => [
          ['name' => 'FreeCodeCamp', 'type' => 'course'],
          ['name' => 'Framework basics (React/Laravel)', 'type' => 'course'],
          ['name' => 'REST API design', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Mid-Level',
        'salary' => '19–25 triệu',
        'kpis' => ['Task phức tạp ≥90%', 'Code coverage ≥75%', 'Review code cho junior ≥2/tuần', 'Đề xuất ≥1/tháng'],
        'skills' => ['Clean Code', 'SOLID principles', 'Design patterns', 'TDD'],
        'certs' => [
          ['name' => 'Clean Code principles', 'type' => 'course'],
          ['name' => 'SOLID & Design patterns', 'type' => 'course'],
          ['name' => 'TDD/Unit Testing', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Senior',
        'salary' => '26–35 triệu',
        'kpis' => ['Design review ≥2/tháng', 'Code coverage ≥85%', 'Bug escapes ≤1%', 'Mentor ≥2 junior', 'POC ≥1/quý'],
        'skills' => ['System design', 'Architecture', 'Code review expert', 'Mentoring'],
        'certs' => [
          ['name' => 'AWS Certified Developer', 'type' => 'cert'],
          ['name' => 'GCP Professional Developer', 'type' => 'cert'],
          ['name' => 'Microservices Architecture', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Tech Lead',
        'salary' => '36–45 triệu',
        'kpis' => ['Team velocity ≥90%', 'Technical decisions', 'Team satisfaction ≥85%', 'System design ≥1/tháng'],
        'skills' => ['Technical leadership', 'System design advanced', 'Team coordination'],
        'certs' => [
          ['name' => 'PSM I (Scrum.org)', 'type' => 'cert'],
          ['name' => 'System Design', 'type' => 'course'],
          ['name' => 'Architecture patterns', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Solution Architect',
        'salary' => '46–60 triệu',
        'kpis' => ['Enterprise architecture', 'Cross-team alignment', 'Tech debt ↓20%/năm', 'Strategic decisions'],
        'skills' => ['Enterprise architecture', 'Strategic thinking', 'Technology roadmap'],
        'certs' => [
          ['name' => 'TOGAF 9 Foundation', 'type' => 'cert'],
          ['name' => 'AWS Solutions Architect Professional', 'type' => 'cert'],
          ['name' => 'Enterprise Architecture', 'type' => 'course']
        ]
      ],
      [
        'level' => 'CTO',
        'salary' => '60+ triệu',
        'kpis' => ['Technology vision', 'Business alignment', 'Team growth', 'Innovation strategy'],
        'skills' => ['Executive leadership', 'Technology vision', 'Business strategy'],
        'certs' => [
          ['name' => 'Executive Leadership Program', 'type' => 'course'],
          ['name' => 'Technology Strategy', 'type' => 'course'],
          ['name' => 'Business Innovation', 'type' => 'course']
        ]
      ]
    ]
  ],
  [
    'role' => 'Tester (QA/QC)',
    'levels' => [
      [
        'level' => 'Junior Tester',
        'salary' => '12–15 triệu',
        'kpis' => ['Test case writing ≥50 cases/tuần', 'Bug tracking đúng quy trình', 'Manual test coverage ≥90%'],
        'skills' => ['Test case writing', 'Bug tracking', 'Manual testing', 'Test planning'],
        'certs' => [
          ['name' => 'Testing fundamentals', 'type' => 'course'],
          ['name' => 'Test case writing', 'type' => 'course'],
          ['name' => 'Jira basics', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Tester',
        'salary' => '16–20 triệu',
        'kpis' => ['Bug phát hiện ≥90%', 'Test coverage ≥95%', 'Prod bugs ≤2%', 'Test cycle ≤3 ngày'],
        'skills' => ['ISTQB fundamentals', 'Test execution', 'Agile testing', 'Defect management'],
        'certs' => [
          ['name' => 'ISTQB Foundation Level', 'type' => 'cert'],
          ['name' => 'Agile Testing', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Senior QA',
        'salary' => '21–26 triệu',
        'kpis' => ['Automation coverage ≥50%', 'API test coverage ≥80%', 'Performance test ≥1/tháng', 'Mentor junior'],
        'skills' => ['Test automation', 'API testing', 'Performance testing', 'Test strategy'],
        'certs' => [
          ['name' => 'ISTQB Advanced Level', 'type' => 'cert'],
          ['name' => 'Selenium/Cypress Certified', 'type' => 'cert'],
          ['name' => 'Postman API Testing', 'type' => 'course']
        ]
      ],
      [
        'level' => 'QA Lead',
        'salary' => '27–32 triệu',
        'kpis' => ['Team productivity ≥90%', 'CI/CD integration', 'Automation framework', 'QA process ≥1/tháng'],
        'skills' => ['Automation framework', 'CI/CD integration', 'QA leadership'],
        'certs' => [
          ['name' => 'Test Automation frameworks', 'type' => 'course'],
          ['name' => 'CI/CD integration', 'type' => 'course'],
          ['name' => 'JMeter Performance', 'type' => 'course']
        ]
      ],
      [
        'level' => 'QA Manager',
        'salary' => '33–40 triệu',
        'kpis' => ['Quality metrics dashboard', 'Risk-based testing strategy', 'Team satisfaction ≥85%'],
        'skills' => ['Quality process', 'Risk-based testing', 'Team management'],
        'certs' => [
          ['name' => 'ISTQB Test Manager', 'type' => 'cert'],
          ['name' => 'Quality Management', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Test Architect',
        'salary' => '40+ triệu',
        'kpis' => ['Enterprise test strategy', 'Security testing ≥2/tháng', 'DevOps/TestOps framework'],
        'skills' => ['Enterprise test strategy', 'Security testing', 'DevOps/TestOps'],
        'certs' => [
          ['name' => 'ISTQB Expert Level', 'type' => 'cert'],
          ['name' => 'OWASP Security Testing', 'type' => 'cert'],
          ['name' => 'DevOps/TestOps', 'type' => 'course']
        ]
      ]
    ]
  ],
  [
    'role' => 'UI/UX Designer',
    'levels' => [
      [
        'level' => 'Junior Designer',
        'salary' => '15–18 triệu',
        'kpis' => ['Hoàn thành design ≥3–5/tuần', 'Revision ≤3 vòng', 'Design system compliance', 'Học hỏi tools'],
        'skills' => ['Figma/Adobe XD', 'Design principles', 'Typography', 'Responsive design'],
        'certs' => [
          ['name' => 'Figma basics', 'type' => 'course'],
          ['name' => 'Design fundamentals', 'type' => 'course'],
          ['name' => 'Typography & Color', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Designer',
        'salary' => '19–24 triệu',
        'kpis' => ['Design approval ≥90%', 'Revision ≤2', 'User feedback ≥4/5', 'Component design'],
        'skills' => ['Wireframing', 'Prototyping', 'User flow', 'Design systems'],
        'certs' => [
          ['name' => 'Google UX Design Certificate', 'type' => 'cert'],
          ['name' => 'Wireframing & Prototyping', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Senior UI/UX',
        'salary' => '25–30 triệu',
        'kpis' => ['Design approval ≥95%', 'UX research ≥1/quý', 'User satisfaction ≥85%', 'Mentor junior'],
        'skills' => ['UX research', 'Usability testing', 'Interaction design', 'Design systems expert'],
        'certs' => [
          ['name' => 'UX Research Certified', 'type' => 'cert'],
          ['name' => 'IDF Interaction Design', 'type' => 'cert'],
          ['name' => 'Usability Testing', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Product Designer',
        'salary' => '31–38 triệu',
        'kpis' => ['Product thinking', 'A/B test ≥2/tháng', 'Data-driven decisions', 'Cross-functional collab'],
        'skills' => ['Product thinking', 'A/B testing', 'Analytics', 'User research'],
        'certs' => [
          ['name' => 'Product Design', 'type' => 'course'],
          ['name' => 'Design Thinking Advanced', 'type' => 'course'],
          ['name' => 'Data-driven Design', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Design Lead',
        'salary' => '39–48 triệu',
        'kpis' => ['Team productivity ≥90%', 'Design operations', 'Stakeholder satisfaction ≥85%'],
        'skills' => ['Design leadership', 'Team management', 'Design operations'],
        'certs' => [
          ['name' => 'Design Leadership', 'type' => 'course'],
          ['name' => 'Design Ops', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Head of Design',
        'salary' => '48+ triệu',
        'kpis' => ['Design vision & strategy', 'Design culture', 'Business impact measurement'],
        'skills' => ['Design vision', 'Design culture', 'Executive communication'],
        'certs' => [
          ['name' => 'Strategic Design', 'type' => 'course'],
          ['name' => 'Executive Communication', 'type' => 'course']
        ]
      ]
    ]
  ],
  [
    'role' => 'DevOps Engineer',
    'levels' => [
      [
        'level' => 'Junior DevOps',
        'salary' => '18–22 triệu',
        'kpis' => ['Giải quyết issues ≥80%', 'Học Linux/Docker', 'Scripting cơ bản', 'On-call support'],
        'skills' => ['Linux', 'Git', 'Docker basics', 'Shell scripting'],
        'certs' => [
          ['name' => 'Linux Essentials', 'type' => 'course'],
          ['name' => 'Docker basics', 'type' => 'course'],
          ['name' => 'Shell scripting', 'type' => 'course']
        ]
      ],
      [
        'level' => 'DevOps',
        'salary' => '23–28 triệu',
        'kpis' => ['CI/CD uptime ≥95%', 'Deploy success ≥95%', 'MTTR ≤4h', 'Automation ≥3/tháng'],
        'skills' => ['CI/CD pipelines', 'Cloud basics', 'Infrastructure', 'Container mgmt'],
        'certs' => [
          ['name' => 'Docker Certified Associate', 'type' => 'cert'],
          ['name' => 'Jenkins/GitLab CI', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Senior DevOps',
        'salary' => '29–35 triệu',
        'kpis' => ['System uptime ≥99.5%', 'MTTR ≤2h', 'IaC coverage ≥80%', 'Security scan ≥2/tháng'],
        'skills' => ['Kubernetes', 'IaC (Terraform)', 'Monitoring', 'AWS/GCP'],
        'certs' => [
          ['name' => 'CKA (Certified Kubernetes Admin)', 'type' => 'cert'],
          ['name' => 'AWS DevOps Engineer Professional', 'type' => 'cert'],
          ['name' => 'Terraform Associate', 'type' => 'cert']
        ]
      ],
      [
        'level' => 'Infrastructure Lead',
        'salary' => '36–42 triệu',
        'kpis' => ['Infrastructure strategy', 'Security & compliance ≥95%', 'Team leadership', 'Cost optimization'],
        'skills' => ['Architecture', 'Security', 'Compliance', 'Team leadership'],
        'certs' => [
          ['name' => 'AWS Solutions Architect Professional', 'type' => 'cert'],
          ['name' => 'Security & Compliance', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Cloud Architect',
        'salary' => '43–55 triệu',
        'kpis' => ['Multi-cloud strategy', 'Cost optimization ≥20%', 'HA/DR design', 'Scalability'],
        'skills' => ['Multi-cloud strategy', 'Cost optimization', 'HA/DR design'],
        'certs' => [
          ['name' => 'AWS Solutions Architect Professional', 'type' => 'cert'],
          ['name' => 'GCP Professional Cloud Architect', 'type' => 'cert'],
          ['name' => 'Multi-cloud strategy', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Principal Engineer',
        'salary' => '55+ triệu',
        'kpis' => ['Platform engineering vision', 'SRE principles', 'Technical strategy', 'Innovation'],
        'skills' => ['Platform engineering', 'SRE principles', 'Technical strategy'],
        'certs' => [
          ['name' => 'CNCF Cloud Native', 'type' => 'cert'],
          ['name' => 'SRE Principles', 'type' => 'course']
        ]
      ]
    ]
  ],
  [
    'role' => 'Business Analyst',
    'levels' => [
      [
        'level' => 'Junior BA',
        'salary' => '15–18 triệu',
        'kpis' => ['Docs ≥5/tuần', 'Stakeholder meetings', 'Requirements gathering', 'Học BPMN/Use Case'],
        'skills' => ['Requirements gathering', 'Documentation', 'Stakeholder communication'],
        'certs' => [
          ['name' => 'Requirements gathering', 'type' => 'course'],
          ['name' => 'BPMN basics', 'type' => 'course']
        ]
      ],
      [
        'level' => 'BA',
        'salary' => '19–24 triệu',
        'kpis' => ['Docs approval ≥90%', 'User story defect ≤5%', 'Stakeholder satisfaction ≥85%'],
        'skills' => ['BRD/FRD writing', 'Use Case modeling', 'User Story writing'],
        'certs' => [
          ['name' => 'BRD/FRD writing', 'type' => 'course'],
          ['name' => 'Agile BA', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Senior BA',
        'salary' => '25–29 triệu',
        'kpis' => ['Requirements modeling', 'Gap analysis ≥1/tháng', 'Process improvement', 'Mentor junior'],
        'skills' => ['Requirements modeling', 'Gap analysis', 'Process improvement'],
        'certs' => [
          ['name' => 'CCBA (IIBA)', 'type' => 'cert'],
          ['name' => 'Advanced modeling', 'type' => 'course']
        ]
      ],
      [
        'level' => 'BA Lead',
        'salary' => '30–35 triệu',
        'kpis' => ['Team productivity ≥90%', 'Requirements management', 'BA mentoring ≥2 người'],
        'skills' => ['Requirements management', 'Team coordination', 'BA mentoring'],
        'certs' => [
          ['name' => 'CBAP (IIBA)', 'type' => 'cert'],
          ['name' => 'BA Leadership', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Product Owner',
        'salary' => '36–45 triệu',
        'kpis' => ['Sprint goal ≥90%', 'Backlog health', 'Value prioritization', 'Stakeholder alignment'],
        'skills' => ['Backlog management', 'Roadmap planning', 'Value prioritization'],
        'certs' => [
          ['name' => 'PSPO I (Scrum.org)', 'type' => 'cert'],
          ['name' => 'PSPO II (Scrum.org)', 'type' => 'cert'],
          ['name' => 'Product Management', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Product Manager',
        'salary' => '45+ triệu',
        'kpis' => ['Product strategy', 'Market research ≥1/quý', 'Go-to-market success', 'Revenue impact'],
        'skills' => ['Product strategy', 'Market analysis', 'Go-to-market'],
        'certs' => [
          ['name' => 'Certified Product Manager (AIPMM)', 'type' => 'cert'],
          ['name' => 'Product Strategy', 'type' => 'course']
        ]
      ]
    ]
  ],
  [
    'role' => 'Product Owner',
    'levels' => [
      [
        'level' => 'Associate PO',
        'salary' => '20–24 triệu',
        'kpis' => ['User stories ≥20/tuần', 'Backlog grooming', 'Sprint planning support'],
        'skills' => ['Agile/Scrum basics', 'User story basics', 'Backlog grooming'],
        'certs' => [
          ['name' => 'Agile/Scrum fundamentals', 'type' => 'course'],
          ['name' => 'User story basics', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Product Owner',
        'salary' => '25–32 triệu',
        'kpis' => ['Sprint goal ≥90%', 'Feature alignment ≥90%', 'Stakeholder satisfaction ≥85%'],
        'skills' => ['Backlog management', 'Sprint planning', 'Acceptance criteria'],
        'certs' => [
          ['name' => 'PSPO I (Scrum.org)', 'type' => 'cert'],
          ['name' => 'Product Backlog', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Senior PO',
        'salary' => '33–40 triệu',
        'kpis' => ['Product discovery', 'OKR achievement', 'Release on-time ≥90%', 'User NPS ≥40'],
        'skills' => ['Product discovery', 'OKR/KPI frameworks', 'Roadmap planning'],
        'certs' => [
          ['name' => 'PSPO II (Scrum.org)', 'type' => 'cert'],
          ['name' => 'Product Discovery', 'type' => 'course'],
          ['name' => 'OKR frameworks', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Product Manager',
        'salary' => '41–50 triệu',
        'kpis' => ['Product strategy', 'Market share growth', 'Competitive analysis', 'Revenue growth'],
        'skills' => ['Product strategy', 'Market research', 'Competitive analysis'],
        'certs' => [
          ['name' => 'Certified Product Manager', 'type' => 'cert'],
          ['name' => 'Product Strategy', 'type' => 'course']
        ]
      ],
      [
        'level' => 'Head of Product',
        'salary' => '51–65 triệu',
        'kpis' => ['Portfolio management', 'P&L responsibility', 'Product-led growth ≥15%/năm'],
        'skills' => ['Portfolio management', 'P&L responsibility', 'Product-led growth'],
        'certs' => [
          ['name' => 'Advanced Product Management', 'type' => 'course'],
          ['name' => 'Portfolio Management', 'type' => 'course']
        ]
      ],
      [
        'level' => 'CPO',
        'salary' => '65+ triệu',
        'kpis' => ['Product vision & strategy', 'Business alignment', 'Innovation', 'Board-level impact'],
        'skills' => ['Executive leadership', 'Business strategy', 'Vision & innovation'],
        'certs' => [
          ['name' => 'Executive Product Leadership', 'type' => 'course'],
          ['name' => 'Business Strategy', 'type' => 'course']
        ]
      ]
    ]
  ]
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
            gap: 20px;
            animation: fadeInUp 0.8s ease-out;
            overflow-y: auto;
        }
        
        .positions-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }
        
        .position-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .position-card:hover {
            border-color: #7c9ee3;
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(124,158,227,0.2);
        }
        
        .position-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            padding-bottom: 10px;
            border-bottom: 3px solid #7c9ee3;
        }
        
        .position-header .material-symbols-rounded {
            font-size: 1.5rem;
            color: #7c9ee3;
        }
        
        .position-name {
            font-size: 1rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0;
        }
        
        .progression-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-left: 4px solid #0ea5e9;
            padding: 8px 10px;
            border-radius: 4px;
            margin-bottom: 12px;
        }
        
        .progression-label {
            font-size: 0.7rem;
            font-weight: 600;
            color: #0369a1;
            margin-bottom: 3px;
            text-transform: uppercase;
        }
        
        .progression-path {
            font-size: 0.75rem;
            color: #0c4a6e;
            font-weight: 500;
            line-height: 1.3;
        }
        
        .position-section {
            margin-bottom: 10px;
        }
        
        .section-title {
            font-size: 0.75rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .section-title .material-symbols-rounded {
            font-size: 0.9rem;
            color: #7c9ee3;
        }
        
        .kpi-list, .cert-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .kpi-list {
            display: none;
        }
        
        .kpi-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.65rem;
            background: #ffffff;
            margin: 0;
        }
        
        .kpi-table thead {
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 100%);
            position: sticky;
            top: 0;
        }
        
        .kpi-table th {
            padding: 5px 6px;
            text-align: left;
            color: #ffffff;
            font-weight: 600;
            border-right: 1px solid rgba(255,255,255,0.3);
        }
        
        .kpi-table th:last-child {
            border-right: none;
        }
        
        .kpi-table tbody tr {
            border-bottom: 1px solid #fef3c7;
        }
        
        .kpi-table tbody tr:hover {
            background: #fffbeb;
        }
        
        .kpi-table td {
            padding: 5px 6px;
            border-right: 1px solid #fef3c7;
            color: #92400e;
        }
        
        .kpi-table td:first-child {
            font-weight: 600;
            color: #b45309;
            width: 70px;
        }
        
        .kpi-table td:nth-child(2) {
            width: 180px;
        }
        
        .kpi-table td:nth-child(3) {
            font-weight: 600;
            text-align: center;
            width: 50px;
            color: #dc2626;
        }
        
        .kpi-table td:last-child {
            border-right: none;
            font-size: 0.6rem;
            color: #78350f;
            font-style: italic;
        }
        
        .roadmap-section {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-top: 10px;
        }
        
        .roadmap-header {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #1f2937;
            padding-bottom: 12px;
            border-bottom: 3px solid #7c9ee3;
        }
        
        .roadmap-header .material-symbols-rounded {
            font-size: 1.8rem;
            color: #7c9ee3;
        }
        
        .roadmap-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.7rem;
        }
        
        .roadmap-table thead {
            background: linear-gradient(135deg, #7c9ee3 0%, #6b8dd6 100%);
        }
        
        .roadmap-table th {
            padding: 8px;
            text-align: left;
            color: #ffffff;
            font-weight: 600;
            font-size: 0.75rem;
            border-right: 1px solid rgba(255,255,255,0.2);
        }
        
        .roadmap-table th:last-child {
            border-right: none;
        }
        
        .roadmap-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
        }
        
        .roadmap-table tbody tr:hover {
            background: #f9fafb;
        }
        
        .roadmap-table td {
            padding: 8px;
            color: #4b5563;
            line-height: 1.4;
            border-right: 1px solid #e5e7eb;
            vertical-align: top;
        }
        
        .level-cell {
            font-weight: 600;
            width: 180px;
            min-width: 180px;
        }
        
        .salary-cell {
            background: #f0fdf4;
            width: 110px;
            min-width: 110px;
            font-weight: 600;
            font-size: 0.75rem;
        }
        
        .salary-badge {
            display: block;
            color: #059669;
            padding: 3px 6px;
            border-radius: 3px;
            font-weight: 600;
            text-align: center;
        }
        
        .kpis-cell {
            background: #fef9e7;
            /* width: 180px; */
            min-width: 180px;
        }
        
        .skills-cell {
            background: #f0f9ff;
        }
        
        .certs-cell {
            background: #fff;
            border-right: none;
        }
        
        .roadmap-table td:last-child {
            border-right: none;
        }
        
        .level-badge {
            display: block;
            background: #dbeafe;
            color: #1e40af;
            padding: 3px 6px;
            border-radius: 3px;
            font-weight: 600;
            font-size: 0.65rem;
            margin-bottom: 6px;
            text-align: right;
        }
        
        .roadmap-tables-container {
            display: grid;
            /* grid-template-columns: repeat(auto-fit, minmax(550px, 1fr)); */
            gap: 20px;
            margin-top: 15px;
        }
        
        .roadmap-table-wrapper {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 12px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }
        
        .roadmap-position-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0 0 12px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid #7c9ee3;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .roadmap-position-title .material-symbols-rounded {
            font-size: 1.1rem;
            color: #7c9ee3;
        }

        .cert-badge {
            display: block;
        }
        
        .cert-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .cert-items li {
            font-size: 0.7rem;
            color: #374151;
            padding: 2px 0;
            margin-bottom: 2px;
        }
        
        .cert-items li:before {
            content: '• ';
            color: #7c9ee3;
            font-weight: bold;
            margin-right: 4px;
        
            .cert-badges {
              display: flex;
              flex-wrap: wrap;
              gap: 6px;
            }
        
            .cert-badge {
              display: inline-flex;
              align-items: center;
              gap: 4px;
              padding: 4px 8px;
              border-radius: 4px;
              font-size: 0.65rem;
              font-weight: 600;
              border: 1.5px solid;
            }
        
            .cert-badge .material-symbols-rounded {
              font-size: 0.9rem;
            }
        
            /* Chứng chỉ chính thức - Màu xanh dương */
            .cert-cert {
              background: #dbeafe;
              border-color: #3b82f6;
              color: #1e40af;
            }
        
            .cert-cert .material-symbols-rounded {
              color: #2563eb;
            }
        
            /* Khóa học - Màu xanh lá */
            .cert-course {
              background: #dcfce7;
              border-color: #22c55e;
              color: #15803d;
            }
        
            .cert-course .material-symbols-rounded {
              color: #16a34a;
            }
        }
        
        .summary-box {
            background: linear-gradient(135deg, #fef9e7 0%, #fdf2d9 100%);
            border: 2px solid #fcd34d;
            border-radius: 12px;
            padding: 15px 20px;
            display: flex;
            align-items: start;
            gap: 12px;
            margin-top: 10px;
        }
        
        .summary-box .material-symbols-rounded {
            color: #b45309;
            font-size: 1.5rem;
            margin-top: 2px;
        }
        
        .summary-content h3 {
            font-size: 1rem;
            font-weight: 700;
            color: #b45309;
            margin: 0 0 8px 0;
        }
        
        .summary-content p {
            color: #7c2d12;
            font-size: 0.8rem;
            line-height: 1.5;
            margin: 0;
        }
        
        @media (max-width: 1200px) {
            .positions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .positions-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">groups</span>
                Vị trí, kỹ năng & Chứng chỉ theo SCRUM
            </div>
            <div class="slide-subtitle">
                7 vị trí cốt lõi với lộ trình phát triển nghề nghiệp rõ ràng
            </div>
        </div>
        
        <div class="slide-content">
            <!-- Positions Grid -->
            <div class="positions-grid">
                <?php foreach ($positions as $pos): ?>
                    <div class="position-card">
                        <div class="position-header">
                            <span class="material-symbols-rounded"><?= htmlspecialchars($pos['icon']) ?></span>
                            <h2 class="position-name"><?= htmlspecialchars($pos['name']) ?></h2>
                        </div>
                        
                        <div class="progression-box">
                            <div class="progression-label">Lộ trình nghề nghiệp</div>
                            <div class="progression-path"><?= htmlspecialchars($pos['progression']) ?></div>
                        </div>
                        
                        <div class="position-section">
                            <div class="section-title">
                                <span class="material-symbols-rounded">work</span>
                                Tổng quan
                            </div>
                            <div style="font-size: 0.75rem; color: #374151; line-height: 1.6;">
                                <div style="margin-bottom: 8px; display: flex; align-items: center; gap: 5px;">
                                    <span class="material-symbols-rounded" style="font-size: 1rem; color: #059669;">payments</span>
                                    <strong style="color: #059669;">Lương:</strong> <?= htmlspecialchars($pos['salary_range']) ?>
                                </div>
                                <div style="margin-bottom: 8px; display: flex; align-items: center; gap: 5px;">
                                    <span class="material-symbols-rounded" style="font-size: 1rem; color: #0369a1;">bar_chart</span>
                                    <strong style="color: #0369a1;">Cấp độ:</strong> <?= htmlspecialchars($pos['levels']) ?> levels
                                </div>
                                <div style="margin-bottom: 8px; display: flex; align-items: center; gap: 5px;">
                                    <span class="material-symbols-rounded" style="font-size: 1rem; color: #7c2d12;">schedule</span>
                                    <strong style="color: #7c2d12;">Thời gian:</strong> <?= htmlspecialchars($pos['avg_time']) ?>
                                </div>
                                <div style="padding: 8px; background: #f9fafb; border-radius: 4px; margin-top: 8px;">
                                    <em style="font-size: 0.7rem; color: #6b7280;"><?= htmlspecialchars($pos['summary']) ?></em>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Certification Roadmap Tables - One per Position -->
            <div class="roadmap-section">
                <div class="roadmap-header">
                    <span class="material-symbols-rounded">school</span>
                    Lộ trình Chứng chỉ & Đào tạo theo từng cấp độ
                </div>
                
                <div class="roadmap-tables-container">
                    <?php foreach ($cert_roadmap as $road): ?>
                        <div class="roadmap-table-wrapper">
                            <h3 class="roadmap-position-title">
                                <span class="material-symbols-rounded">trending_up</span>
                                <?= htmlspecialchars($road['role']) ?>
                            </h3>
                            <table class="roadmap-table">
                                <thead>
                                    <tr>
                                        <th style="width: 180px;">Cấp độ</th>
                                        <th class="d-none" style="width: 110px;">Mức lương</th>
                                        <th>KPI cốt lõi</th>
                                        <th>Kỹ năng chính</th>
                                        <th>Chứng chỉ & Khóa học</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($road['levels'] as $lvl): ?>
                                        <tr>
                                            <td class="level-cell">
                                                <span class="level-badge"><?= htmlspecialchars($lvl['level']) ?></span>
                                            </td>
                                            <td class="salary-cell d-none">
                                                <span class="salary-badge"><?= htmlspecialchars($lvl['salary']) ?></span>
                                            </td>
                                            <td class="kpis-cell">
                                                <ul class="cert-items">
                                                    <?php foreach ($lvl['kpis'] as $kpi): ?>
                                                        <li><?= htmlspecialchars($kpi) ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </td>
                                            <td class="skills-cell">
                                                <ul class="cert-items">
                                                    <?php foreach ($lvl['skills'] as $skill): ?>
                                                        <li><?= htmlspecialchars($skill) ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </td>
                                            <td class="certs-cell">
                                                <div class="cert-badges">
                                                  <?php foreach ($lvl['certs'] as $cert): ?>
                                                    <span class="cert-badge cert-<?= $cert['type'] ?>">
                                                      <?php if ($cert['type'] === 'cert'): ?>
                                                        <span class="material-symbols-rounded">verified</span>
                                                      <?php else: ?>
                                                        <span class="material-symbols-rounded">school</span>
                                                      <?php endif; ?>
                                                      <?= htmlspecialchars($cert['name']) ?>
                                                    </span>
                                                  <?php endforeach; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Summary Box -->
            <div class="summary-box">
                <span class="material-symbols-rounded">info</span>
                <div class="summary-content">
                    <h3>Triết lý phát triển nhân sự</h3>
                    <p>
                        Mỗi vị trí đều có lộ trình rõ ràng từ <strong>Intern → Junior → Mid → Senior → Lead → Principal</strong>. 
                        Chúng tôi đầu tư vào đào tạo liên tục, chứng chỉ nghề nghiệp, và văn hóa mentoring để mỗi thành viên 
                        đều có cơ hội phát triển theo thế mạnh cá nhân. <strong>KPI minh bạch</strong>, <strong>lương thưởng công bằng</strong>, 
                        và <strong>môi trường học hỏi</strong> là nền tảng xây dựng đội ngũ mạnh.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
