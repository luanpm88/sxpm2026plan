<?php

return [
    'hero_title' => 'Client',
    'hero_title_highlight' => 'Case Studies',
    'hero_desc' => 'Representative projects showing how Hoàng Khang Incotech approaches custom software delivery: understand the context, design the system, implement with control, and hand over for long-term operation.',
    'section_work' => 'SELECTED WORK',
    'section_industries' => 'INDUSTRIES SERVED',

    'stats' => [
        ['num' => 'Selected', 'label' => 'Project Contexts'],
        ['num' => 'Multi-domain', 'label' => 'Industry Experience'],
        ['num' => 'Platform', 'label' => 'Operated Products'],
        ['num' => 'Long-term', 'label' => 'Post-launch Support'],
        ['num' => '12+', 'label' => 'Years Expertise'],
        ['num' => 'Regional', 'label' => 'Delivery Scope'],
    ],

    'featured_title' => 'Selected Projects',
    'featured_subtitle' => 'Delivery context, solution direction, and operating outcomes.',

    'case_studies' => [
        [
            'title' => 'Education Platform: Scheduling Automation',
            'industry' => 'Education',
            'challenge' => 'Manage schedules, class assignments, attendance, and operating reports in a large education environment. Manual scheduling created conflicts, long review cycles, and weak accountability.',
            'solution' => 'Built an education operations platform with a central API, flexible scheduling rules, workload balancing, automated attendance, and role-based reporting. Infrastructure was designed for peak enrollment and scheduling periods.',
            'results' => [
                'Scheduling time: weeks → days',
                'High data accuracy',
                'Large-scale student data management',
                'Strong adoption',
                'Significant operational hours saved each semester'
            ],
            'tech' => 'Laravel, REST API, PostgreSQL, Redis, React, React Native, Queue Worker, RBAC',
            'patterns' => ['Domain Modeling', 'Workflow Rules', 'Audit Log', 'Data Validation', 'Role-based Reports', 'Peak-period Scaling']
        ],
        [
            'title' => 'Storage Management System',
            'industry' => 'Logistics & Retail',
            'challenge' => 'Control inventory, inbound/outbound flows, consignment, barcode scanning, and periodic audits across multiple branches. Manual workflows slowed reporting and made reconciliation difficult.',
            'solution' => 'Built a warehouse management system with barcode scanning, multi-location data sync, automated reconciliation, analytics dashboards, and forecasting support.',
            'results' => [
                'Major inventory accuracy gains',
                'High forecasting accuracy',
                'High-volume transaction throughput',
                'Audit time reduced significantly',
                'Dead stock reduced substantially',
                'Significant cost savings'
            ],
            'tech' => 'Python, Node.js, PostgreSQL, Redis, React, Barcode, Forecasting, Warehouse API',
            'patterns' => ['Inventory Reconciliation', 'Event Queue', 'Branch Sync', 'Exception Handling', 'Dashboard KPI', 'Access Control']
        ],
        [
            'title' => 'ERP Management System',
            'industry' => 'Enterprise Management',
            'challenge' => 'A business needed unified accounting, procurement, inventory, e-commerce, and operations. Inventory data was not synchronized with accounting, and disconnected modules slowed reporting.',
            'solution' => 'Built an integrated ERP: accounting (GL, AR, AP), inventory, procurement, e-commerce sync (Shopify/WooCommerce), HR payroll, and reporting. Added real-time consolidation, BI dashboards, workflow automation, and a mobile app for field staff.',
            'results' => [
                'Consolidation reduced from days to minutes',
                'Invoice processing effort reduced substantially',
                'Accounting reconciliation automated',
                'Report generation reduced from hours to minutes',
                'Faster decision-making',
                'Strong adoption within months'
            ],
            'tech' => 'Node.js, PostgreSQL, React, Python, Elasticsearch, AWS, Docker, BI Dashboard, Microservices',
            'patterns' => ['Bounded Context', 'Approval Flow', 'Ledger Sync', 'Audit Trail', 'Integration API', 'Observability']
        ],
    ],

    'label_challenge' => 'Challenge',
    'label_solution' => 'Solution',
    'label_results' => 'Results',
    'label_tech' => 'Delivery Stack',
    'label_practices' => 'Engineering Practices',

    'industries_title' => 'Industries Served',
    'industries_subtitle' => 'Experience across different business contexts and operating models.',

    'industries' => [
        ['icon' => 'shopping_cart', 'name' => 'E-commerce & Retail', 'description' => 'Sales systems, inventory, POS integrations, channel operations, and reporting.'],
        ['icon' => 'trending_up', 'name' => 'FinTech & Financial Services', 'description' => 'Payment flows, management dashboards, reporting, and data controls.'],
        ['icon' => 'local_hospital', 'name' => 'Healthcare & Medical', 'description' => 'Scheduling, intake, data management, and privacy-focused user flows.'],
        ['icon' => 'school', 'name' => 'Education & Training', 'description' => 'Learning portals, scheduling, assessment, attendance, and reporting.'],
        ['icon' => 'local_shipping', 'name' => 'Logistics & Supply Chain', 'description' => 'Shipment tracking, warehouse management, data reconciliation, and operations coordination.'],
        ['icon' => 'factory', 'name' => 'Manufacturing & IoT', 'description' => 'Shopfloor data, equipment monitoring, KPI reporting, and machine integration.'],
        ['icon' => 'apartment', 'name' => 'Real Estate & Construction', 'description' => 'Delivered listing, lead-tracking, and progress visibility tools for small property teams.'],
        ['icon' => 'sports_esports', 'name' => 'Gaming & Entertainment', 'description' => 'Shipped lightweight event, community, and content portals for niche gaming audiences.'],
        ['icon' => 'psychology', 'name' => 'AI & Data Science', 'description' => 'Built pragmatic AI assistants and data pipelines to automate repetitive workflows.'],
        ['icon' => 'cloud', 'name' => 'SaaS & Cloud', 'description' => 'Multi-user platforms with authentication, billing, access control, and cloud operations.'],
    ],

    'section_testimonials' => 'CLIENT TESTIMONIALS',
    'testimonials_title' => 'Client Testimonials',
    'testimonials_subtitle' => 'What our partners and clients say about working with us.',

    'testimonials' => [
        ['name' => 'CEO, e-commerce company', 'text' => 'Hoàng Khang Incotech did not just implement requirements. The team asked the right questions, proposed improvements, and kept delivery transparent.'],
        ['name' => 'Founder, fintech company', 'text' => 'Their security and data-control approach helped us structure the system correctly from the beginning.'],
        ['name' => 'Operations director, healthcare provider', 'text' => 'The team understood data privacy requirements and implemented the workflow carefully.'],
        ['name' => 'VP Product, logistics company', 'text' => 'The system was prepared well for expansion, from operating data to infrastructure planning.'],
        ['name' => 'CTO, retail chain', 'text' => 'The operating dashboard helped our team make faster decisions and control data more effectively.'],
        ['name' => 'Founder, SaaS platform', 'text' => 'After release, the team stayed close to operations, optimization, and follow-up requirements.'],
    ],

    'cta_title' => 'Discuss Your Business Context',
    'cta_desc' => 'Hoàng Khang Incotech can help clarify scope, technical risk, and the right delivery roadmap for your system.',
    'cta_button' => 'Contact the Team',
];
