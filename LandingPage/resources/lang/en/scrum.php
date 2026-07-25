<?php

return [
    // Hero Section
    'hero_title' => 'SCRUM Development',
    'hero_title_highlight' => 'Process',
    'hero_desc' => 'A sprint-based delivery model that helps clients control priorities, review working increments, manage risks, and accept scope by stage.',
    'hero_cta' => 'Discuss Delivery Model',
    'section_process' => 'DELIVERY PROCESS',
    'section_sprint' => 'SPRINT CYCLE',
    'section_benefits' => 'KEY BENEFITS',
    'section_journey' => 'CLIENT JOURNEY',
    'section_why' => 'HOW WE WORK',

    // 6 Steps Section
    'steps_title' => '6 Steps in SCRUM Process',
    'steps_subtitle' => 'From requirement discovery to controlled deployment and operations.',
    'steps' => [
        [
            'num' => 1,
            'icon' => 'lightbulb',
            'title' => 'Discovery & Scope Framing',
            'desc' => 'Clarify goals, users, workflows, risks, and delivery priorities.',
        ],
        [
            'num' => 2,
            'icon' => 'architecture',
            'title' => 'Design & Planning',
            'desc' => 'System architecture, product flows, data model, and sprint plan.',
        ],
        [
            'num' => 3,
            'icon' => 'code',
            'title' => 'Sprint Development',
            'desc' => 'Feature development through short cycles with review, testing, and progress updates.',
        ],
        [
            'num' => 4,
            'icon' => 'verified',
            'title' => 'QA & Testing',
            'desc' => 'Functional, integration, UAT, performance, and edge-case testing.',
        ],
        [
            'num' => 5,
            'icon' => 'cloud_upload',
            'title' => 'Deployment & Release',
            'desc' => 'CI/CD deployment, monitoring setup, rollback planning, and incident readiness.',
        ],
        [
            'num' => 6,
            'icon' => 'support_agent',
            'title' => 'Support & Development',
            'desc' => 'Operational support, performance improvement, issue handling, and staged expansion.',
        ],
    ],

    // Sprint Cycle Section
    'sprint_title' => 'Sprint Delivery Operating Model',
    'sprint_subtitle' => 'Each sprint is managed as a controlled delivery loop with backlog ownership, engineering execution, quality gates, stakeholder review, and release readiness.',
    'sprint_items' => [
        [
            'icon' => 'fact_check',
            'title' => 'Scope & sprint planning',
            'desc' => 'Confirm business priority, sprint goal, acceptance criteria, dependencies, and delivery risk before engineering begins.',
            'artifact' => 'Sprint goal + acceptance baseline',
        ],
        [
            'icon' => 'sync_alt',
            'title' => 'Execution cadence',
            'desc' => 'Keep product, engineering, QA, and project coordination aligned through short status loops and blocker handling.',
            'artifact' => 'Daily status + risk log',
        ],
        [
            'icon' => 'deployed_code',
            'title' => 'Engineering build',
            'desc' => 'Implement the agreed scope with code review, branch discipline, CI/CD, and architecture-level checks.',
            'artifact' => 'Working increment',
        ],
        [
            'icon' => 'verified',
            'title' => 'QA, review & acceptance',
            'desc' => 'Validate functionality, integration points, data behavior, edge cases, and stakeholder feedback before sign-off.',
            'artifact' => 'Test result + review notes',
        ],
        [
            'icon' => 'published_with_changes',
            'title' => 'Release readiness & improvement',
            'desc' => 'Prepare deployment, update documentation, close learnings, and feed the next sprint with controlled changes.',
            'artifact' => 'Release checklist + next backlog',
        ],
    ],
    'sprint_model_kicker' => 'Delivery governance',
    'sprint_model_title' => 'How a sprint becomes a reviewable software increment',
    'sprint_model_desc' => 'The sprint is not just a development timebox. It is a governance loop that turns scope into tested software, visible decisions, and controlled handover.',
    'sprint_model_stages' => [
        [
            'icon' => 'assignment',
            'title' => 'Backlog',
            'desc' => 'Priority, scope, acceptance criteria',
        ],
        [
            'icon' => 'terminal',
            'title' => 'Build',
            'desc' => 'Engineering, review, CI/CD',
        ],
        [
            'icon' => 'rule',
            'title' => 'Verify',
            'desc' => 'QA, UAT, integration checks',
        ],
        [
            'icon' => 'rocket_launch',
            'title' => 'Release',
            'desc' => 'Deploy, monitor, hand over',
        ],
    ],
    'sprint_controls' => [
        [
            'icon' => 'groups',
            'title' => 'Stakeholder review',
            'desc' => 'Working scope is shown early enough for business feedback.',
        ],
        [
            'icon' => 'shield',
            'title' => 'Quality gate',
            'desc' => 'Definition of Done, tests, and defects are visible before release.',
        ],
        [
            'icon' => 'monitoring',
            'title' => 'Progress control',
            'desc' => 'Risks, blockers, and change impact are tracked through the sprint.',
        ],
        [
            'icon' => 'inventory',
            'title' => 'Handover asset',
            'desc' => 'Documents, release notes, and next actions are maintained with the increment.',
        ],
    ],

    // Benefits Section
    'benefits_title' => 'SCRUM Process Benefits',
    'benefits_subtitle' => 'What sprint-based delivery helps control in a custom software project.',
    'benefits' => [
        [
            'icon' => 'visibility',
            'title' => 'Transparency & Control',
            'desc' => 'Sprint reviews show working progress early, surface risks, and keep priorities visible throughout each stage.',
        ],
        [
            'icon' => 'tune',
            'title' => 'Flexible & Adaptive',
            'desc' => 'Feedback after each sprint helps adjust scope with clear impact and reduced change risk.',
        ],
        [
            'icon' => 'check_circle',
            'title' => 'Delivery Quality',
            'desc' => 'Code review, testing, and CI/CD help detect issues earlier and protect delivery quality.',
        ],
        [
            'icon' => 'speed',
            'title' => 'Coordinated Team',
            'desc' => 'Clear priorities, short coordination loops, and visible blockers reduce waiting time between roles.',
        ],
        [
            'icon' => 'shield',
            'title' => 'Reduced End-Project Risk',
            'desc' => 'Staged delivery helps identify issues early instead of concentrating risk at the end.',
        ],
        [
            'icon' => 'trending_up',
            'title' => 'Clear Investment Value',
            'desc' => 'Features are prioritized by operating value and business impact instead of broad, unfocused scope.',
        ],
    ],

    // Journey Section
    'journey_title' => 'Your Journey with Hoàng Khang Incotech',
    'journey_subtitle' => 'Six phases from discovery to controlled release and ongoing operation.',
    'journey_phase_label' => 'Phase',
    'journey' => [
        [
            'phase' => 'Phase 1: Initial Discovery',
            'content' => 'Clarify business goals, operating context, users, constraints, and assumptions that need validation.',
        ],
        [
            'phase' => 'Phase 2: Discovery & Design (2-3 Weeks)',
            'content' => 'Design product flows, data model, interface direction, and technical architecture before full development begins.',
        ],
        [
            'phase' => 'Phase 3: Sprint Development (6-12 Weeks)',
            'content' => 'Develop by sprint. Each sprint closes with working scope that can be reviewed, tested, and accepted.',
        ],
        [
            'phase' => 'Phase 4: QA & Testing (2-3 Weeks)',
            'content' => 'Run functional, performance, security, and UAT checks; resolve defects and optimize before release.',
        ],
        [
            'phase' => 'Phase 5: Release & Deployment',
            'content' => 'Prepare the production environment, deploy, set up monitoring, plan rollback, and support release readiness.',
        ],
        [
            'phase' => 'Phase 6: Support & Growth (Ongoing)',
            'content' => 'Monitor operations, improve performance, support issues, and expand the system according to real needs.',
        ],
    ],

    // Why Choose Section
    'why_title' => 'How Hoàng Khang Incotech Organizes Agile Delivery',
    'why_subtitle' => 'Sprint governance, quality control, and staged handover for custom software projects.',
    'why_items' => [
        [
            'title' => 'Disciplined sprint governance',
            'desc' => 'Backlog, acceptance criteria, reviews, and sign-off are managed clearly within each sprint.',
        ],
        [
            'title' => 'Transparent Process',
            'desc' => 'Progress, blockers, scope, and risks are visible to stakeholders throughout the project.',
        ],
        [
            'title' => 'Flexible & Adaptive',
            'desc' => 'Requirement changes are assessed, prioritized, and brought into the backlog with clear impact.',
        ],
        [
            'title' => 'Quality First',
            'desc' => 'Automated testing, code review, and CI/CD protect delivery quality through each stage.',
        ],
        [
            'title' => 'Staged Handover',
            'desc' => 'High-value scope is delivered first, validated with users, and expanded through controlled increments.',
        ],
        [
            'title' => 'Long-term Partnership',
            'desc' => 'After release, the team continues supporting operations, optimization, and future expansion.',
        ],
    ],

    // CTA Section
    'cta_title' => 'Discuss Agile Delivery Model',
    'cta_desc' => 'Discuss project scope, collaboration model, and a SCRUM delivery approach that fits your team maturity.',
    'cta_button' => 'Discuss the Process',
];
