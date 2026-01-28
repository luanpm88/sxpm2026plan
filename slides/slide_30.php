<?php 
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php';
$roles = [
    [
        'name' => 'Phong — BA → PO',
        'icon' => 'analytics',
        'role_template' => 'Business Analyst / Product Owner',
        'level_target' => 'BA → PO (PSPO)',
        'note' => 'Phong map vào lộ trình BA/PO ở slide 29; ưu tiên backlog health và stakeholder alignment.',
        'timeline' => [
            ['m' => '0-3', 'milestone' => 'Requirements Engineering, Business Process Modeling (BPMN), user story mapping'],
            ['m' => '3-6', 'milestone' => 'CCBA prep, stakeholder workshops, requirements traceability matrix (RTM)'],
            ['m' => '6-12', 'milestone' => 'PSPO I, value prioritization (WSJF, MoSCoW), OKR/metrics, product vision']
        ],
        'certs' => [
            ['name' => 'PSM I', 'type' => 'cert'],
            ['name' => 'CCBA (IIBA)', 'type' => 'cert'],
            ['name' => 'PSPO I', 'type' => 'cert'],
            ['name' => 'Business Process Modeling', 'type' => 'course']
        ],
        'skills' => ['Requirements Engineering', 'Business Process Modeling', 'Stakeholder Analysis', 'Value Prioritization (WSJF)', 'Product Roadmapping']
    ],
    [
        'name' => 'Hoàng Anh — Senior Dev → Tech Lead',
        'icon' => 'code',
        'role_template' => 'Developer',
        'level_target' => 'Senior → Tech Lead (slide 29)',
        'note' => 'Hoàng Anh theo track Developer thuần kỹ thuật: system design, scalability, mentoring. Vai trò Tech Lead chủ chốt trong bộ phận.',
        'timeline' => [
            ['m' => '0-3', 'milestone' => 'System Design patterns, distributed systems, code review standards, AI/ML integration basics'],
            ['m' => '3-6', 'milestone' => 'Cloud Architecture (AWS/GCP), microservices, observability, trending tech (AI agents, RAG)'],
            ['m' => '6-12', 'milestone' => 'TOGAF/Architecture patterns, GenAI best practices, technical strategy, mentoring 2-3 devs']
        ],
        'certs' => [
            ['name' => 'AWS Solutions Architect Associate', 'type' => 'cert'],
            ['name' => 'System Design & Architecture', 'type' => 'course'],
            ['name' => 'AI/ML Fundamentals', 'type' => 'course'],
            ['name' => 'TOGAF Foundation', 'type' => 'cert']
        ],
        'skills' => ['System Design & Architecture', 'AI/ML Integration', 'Cloud Architecture', 'Technical Strategy', 'Tech Leadership & Mentoring']
    ],
    [
        'name' => 'Minh Thư — Senior Dev → Delivery Lead/Coach',
        'icon' => 'widgets',
        'role_template' => 'Developer + Delivery/Training',
        'level_target' => 'Senior → Delivery Lead/Coach (slide 29 dev/DevOps hybrid)',
        'note' => 'Thư thiên về đào tạo, dẫn dắt nhóm delivery/DevOps, huấn luyện quy trình & release (khác Hoàng Anh là tech lead thuần).',
        'timeline' => [
            ['m' => '0-3', 'milestone' => 'Chuẩn hóa release mgmt, QA gates, CI pipelines; shadow lead các buổi release'],
            ['m' => '3-6', 'milestone' => 'DevOps practices, Cloud Practitioner, deploy success ≥95%, mentoring 1-2 devs'],
            ['m' => '6-12', 'milestone' => 'Delivery frameworks, PMI-ACP intro, incident/SLA governance, coaching team rituals']
        ],
        'certs' => [
            ['name' => 'AWS/GCP Cloud Practitioner', 'type' => 'cert'],
            ['name' => 'Docker Certified Associate', 'type' => 'cert'],
            ['name' => 'CKA (Kubernetes Admin)', 'type' => 'cert'],
            ['name' => 'PMI-ACP (intro)', 'type' => 'course']
        ],
        'skills' => ['Delivery planning', 'CI/CD & Release', 'SRE basics', 'Cross-team coordination', 'SLA/OLA & risk', 'Team leadership & coaching']
    ],
    [
        'name' => 'Hoàn — QA/QC Tester',
        'icon' => 'bug_report',
        'role_template' => 'Tester (QA/QC)',
        'level_target' => 'Tester → Senior QA (slide 29)',
        'note' => 'Bám sát lộ trình Tester ở slide 29; nâng dần automation & API coverage.',
        'timeline' => [
            ['m' => '0-3', 'milestone' => 'ISTQB Foundation, test cases & traceability, manual coverage ≥90%'],
            ['m' => '3-6', 'milestone' => 'Automation (Cypress/Selenium), API testing, CI integration'],
            ['m' => '6-12', 'milestone' => 'Performance/Security testing, automation coverage ≥50%']
        ],
        'certs' => [
            ['name' => 'ISTQB Foundation', 'type' => 'cert'],
            ['name' => 'ISTQB Advanced (Test Analyst)', 'type' => 'cert'],
            ['name' => 'Automation (Cypress/Selenium)', 'type' => 'course']
        ],
        'skills' => ['Test strategy', 'Automation scripting', 'API/Performance/Security testing', 'Quality gates']
    ],
    [
        'name' => 'Nguyễn Duy Tài — Intern/Fresher Dev (học việc)',
        'icon' => 'rocket_launch',
        'role_template' => 'Developer (Intern/Fresher)',
        'level_target' => 'Học việc → Junior (slide 29 Developer)',
        'note' => 'Đang học việc; lộ trình dev có thể điều chỉnh theo tiến bộ. Bám sát map Developer slide 29: Intern → Junior.',
        'timeline' => [
            ['m' => '0-3', 'milestone' => 'Onboarding quy trình, Git workflow, HTML/CSS/JS cơ bản'],
            ['m' => '3-6', 'milestone' => 'Task nhỏ, PR review, REST basics, SQL cơ bản'],
            ['m' => '6-12', 'milestone' => 'Backend/frontend foundation, unit test cơ bản, chuẩn bị lên Junior']
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
                                    <div class="timeline-period"><?= htmlspecialchars($t['m']) ?> tháng</div>
                                    <div class="timeline-milestone"><?= htmlspecialchars($t['milestone']) ?></div>
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
                        Chi phí thực tế phụ thuộc nhà cung cấp, ưu đãi, và lộ trình học. Có thể tối ưu bằng học liệu tự học + thi chứng chỉ trực tiếp.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>