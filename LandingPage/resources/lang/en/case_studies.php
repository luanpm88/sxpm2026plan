<?php

return [
    'hero_title' => 'Client',
    'hero_title_highlight' => 'Case Studies',
    'hero_desc' => '50+ delivered projects across 10+ industries. From startup MVPs to large-scale enterprise systems — each engagement is measured by real, demonstrable outcomes.',

    'stats' => [
        ['num' => '50+', 'label' => 'Projects Delivered'],
        ['num' => '10+', 'label' => 'Industries Served'],
        ['num' => '$1M', 'label' => 'Project Value'],
        ['num' => '99.99%', 'label' => 'Client Satisfaction'],
        ['num' => '12+', 'label' => 'Years Expertise'],
        ['num' => '10+', 'label' => 'Countries Reach'],
    ],

    'featured_title' => 'Featured Projects',
    'featured_subtitle' => 'Representative solutions and outcomes',

    'case_studies' => [
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
            'challenge' => 'A 100+ employee company needed unified accounting, procurement, inventory, e-commerce, and operations. Inventory data wasn\'t in sync with accounting; disparate modules slowed reporting.',
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
    ],

    'label_challenge' => 'Challenge',
    'label_solution' => 'Solution',
    'label_results' => 'Results',
    'label_tech' => 'Tech',

    'industries_title' => 'Industries Served',
    'industries_subtitle' => 'Cross-industry experience and domain expertise',

    'industries' => [
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
    ],

    'section_testimonials' => 'CLIENT TESTIMONIALS',
    'testimonials_title' => 'Client Testimonials',
    'testimonials_subtitle' => 'What our partners and clients say about working with us.',

    'testimonials' => [
        ['name' => 'CEO, E-Commerce Startup', 'text' => 'HKIncotech not only delivered the scope, but proactively suggested improvements. Communication was excellent and responsive.'],
        ['name' => 'Founder, FinTech Startup', 'text' => 'Their security and compliance experience helped us pass ISO 27001 and PCI DSS on the first attempt.'],
        ['name' => 'Director, Healthcare Provider', 'text' => 'Deep healthcare domain knowledge. ML performance exceeded expectations.'],
        ['name' => 'VP Product, Logistics Company', 'text' => 'Scaled from 100 to 2,000 shipments/day without downtime. Strong infrastructure planning.'],
        ['name' => 'CTO, Retail Chain', 'text' => 'Real-time analytics enabled data-driven decisions. Positive ROI in 3 months.'],
        ['name' => 'Founder, SaaS Startup', 'text' => 'Post-launch support was exceptional: 24/7 availability, quick response, solution-oriented.'],
    ],

    'cta_title' => 'Ready for the Next Project?',
    'cta_desc' => 'Start the conversation with us today.',
    'cta_button' => 'Contact Us',
];
