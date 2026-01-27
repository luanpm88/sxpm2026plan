<?php 
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php';
$roles = [
  [
    'name' => 'Phong — BA → PO',
    'icon' => 'person',
    'timeline' => [
      ['m' => '0-3', 'milestone' => 'Nền tảng BA, Scrum, Jira/Confluence'],
      ['m' => '3-6', 'milestone' => 'CCBA/CBAP prep, Requirements Modeling'],
      ['m' => '6-12', 'milestone' => 'PSPO I/II, Stakeholder Mgmt, Product Metrics']
    ],
    'certs' => ['Agile/Scrum (PSM I)', 'BA (CCBA/CBAP)', 'Product Owner (PSPO I/II)'],
    'skills' => ['Requirement elicitation', 'User story mapping', 'Backlog grooming', 'OKR/KPI']
  ],
  [
    'name' => 'Hoàng Anh — Senior Dev → Tech Lead',
    'icon' => 'code',
    'timeline' => [
      ['m' => '0-3', 'milestone' => 'System Design Basics, Code Reviews'],
      ['m' => '3-6', 'milestone' => 'Cloud Associate (AWS/GCP), CI/CD maturity'],
      ['m' => '6-12', 'milestone' => 'Architecture foundations (TOGAF), Leadership & Mentoring']
    ],
    'certs' => ['AWS/GCP Associate', 'Docker/K8s fundamentals', 'TOGAF Foundation'],
    'skills' => ['System design', 'Observability', 'Scalability', 'Tech leadership']
  ],
  [
    'name' => 'Minh Thư — Senior Dev → Lead Fullstack Delivery',
    'icon' => 'widgets',
    'timeline' => [
      ['m' => '0-3', 'milestone' => 'Release mgmt, QA gates, CI pipelines'],
      ['m' => '3-6', 'milestone' => 'DevOps practices, Cloud Practitioner'],
      ['m' => '6-12', 'milestone' => 'Delivery frameworks, PMI-ACP basics']
    ],
    'certs' => ['Cloud Practitioner', 'DevOps (Basic)', 'PMI-ACP (intro)'],
    'skills' => ['Delivery planning', 'Risk mgmt', 'Cross-team coordination', 'SLA/OLA']
  ],
  [
    'name' => 'Hoàn — QA/QC Tester',
    'icon' => 'bug_report',
    'timeline' => [
      ['m' => '0-3', 'milestone' => 'ISTQB Foundation, Test Cases & Traceability'],
      ['m' => '3-6', 'milestone' => 'Automation (Cypress/Selenium), API testing'],
      ['m' => '6-12', 'milestone' => 'Performance/Security testing, CI integration']
    ],
    'certs' => ['ISTQB Foundation', 'ISTQB Advanced (Test Analyst)', 'Automation (Cypress/Selenium)'],
    'skills' => ['Test strategy', 'Automation scripting', 'Non-functional testing', 'Quality gates']
  ]
];

$vn_costs = [
  ['path' => 'PSM I / PSPO I', 'provider' => 'Scrum.org / VN partners', 'duration' => '2-3 days', 'cost' => '6–12 triệu VND'],
  ['path' => 'CCBA / CBAP', 'provider' => 'IIBA + local training', 'duration' => '4-8 weeks prep', 'cost' => '15–35 triệu VND'],
  ['path' => 'AWS/GCP Associate', 'provider' => 'VN training centers', 'duration' => '4-6 weeks', 'cost' => '8–18 triệu VND'],
  ['path' => 'TOGAF Foundation', 'provider' => 'Authorized providers', 'duration' => '1-2 weeks', 'cost' => '12–25 triệu VND'],
  ['path' => 'ISTQB Foundation', 'provider' => 'VN QA academies', 'duration' => '1-2 weeks', 'cost' => '5–10 triệu VND'],
  ['path' => 'Automation (Cypress/Selenium)', 'provider' => 'Local bootcamps', 'duration' => '2-4 weeks', 'cost' => '6–15 triệu VND']
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
                        
                        <div class="timeline">
                            <?php foreach ($r['timeline'] as $t): ?>
                                <div class="timeline-item">
                                    <div class="timeline-period"><?= htmlspecialchars($t['m']) ?> tháng</div>
                                    <div class="timeline-milestone"><?= htmlspecialchars($t['milestone']) ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="role-details">
                            <div class="detail-section">
                                <h3>
                                    <span class="material-symbols-rounded">card_membership</span>
                                    Chứng chỉ
                                </h3>
                                <ul>
                                    <?php foreach ($r['certs'] as $c): ?>
                                        <li><?= htmlspecialchars($c) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
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
                        Chi phí thực tế phụ thuộc nhà cung cấp, ưu đãi, và lộ trình học. Có thể tối ưu bằng học liệu tự học + thi chứng chỉ trực tiếp.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-nav-links" style="display:flex;justify-content:space-between;margin:32px 0 0 0">
        <?php $cur = getCurrentSlide(); $prev = getPrevSlide($cur); $next = getNextSlide($cur); ?>
        <div>
            <?php if ($prev): ?>
                <a href="../slides/<?= $prev ?>" class="nav-link nav-prev">← Trang trước</a>
            <?php endif; ?>
        </div>
        <div>
            <?php if ($next): ?>
                <a href="../slides/<?= $next ?>" class="nav-link nav-next">Trang sau →</a>
            <?php endif; ?>
        </div>
    </div>
    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>