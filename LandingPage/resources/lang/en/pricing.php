<?php

return [
    'hero_title' => 'Investment Plans',
    'hero_title_highlight' => 'Tailored to Your Needs',
    'hero_desc' => 'Every software engagement has its own scope, risk profile, and operating requirements. Budget is shaped around the real context, not a rigid package.',
    'section_plans' => 'REFERENCE PLANS',
    'section_included' => 'DELIVERY FOUNDATION',
    'section_comparison' => 'SCOPE COMPARISON',
    'section_faq' => 'FREQUENTLY ASKED',

    'plans_title' => 'Price Reference Guide',
    'plans_subtitle' => 'The ranges below are directional. Actual pricing depends on scope, complexity, timeline, team model, and support requirements.',

    'plans' => [
        [
            'name' => 'MVP / Startup',
            'price_from' => '$6,300',
            'price_to' => '$12,000',
            'period' => 'Typical monthly investment',
            'desc' => 'First releases, validation products, small web applications, or an initial business module',
            'highlighted' => false,
            'features' => [
                '1-2 full-stack engineers',
                'Sprint-based delivery',
                'Core feature development',
                'Weekly status updates',
                'Source repository and handover documentation',
                'Baseline performance optimization',
                'Post-launch Support (30 days)'
            ]
        ],
        [
            'name' => 'Growth / Scale-up',
            'price_from' => '$12,000',
            'price_to' => '$25,000',
            'period' => 'Typical monthly investment',
            'desc' => 'Mid-sized applications, SaaS platforms, or systems with several business modules',
            'highlighted' => true,
            'features' => [
                '2-4 full-stack engineers',
                'Dedicated project manager',
                'Advanced architecture design',
                'Regular demo and review rhythm',
                'Custom API development',
                'Performance optimization',
                'Security practices aligned to project scope',
                '90 days post-launch support',
                'Agile governance rhythm'
            ]
        ],
        [
            'name' => 'Enterprise / Complex',
            'price_from' => '$25,000+',
            'price_to' => null,
            'period' => 'Typical monthly investment',
            'desc' => 'Complex systems, ERP, multi-module platforms',
            'highlighted' => false,
            'features' => [
                '4-8+ full-stack engineers',
                'Dedicated team and Scrum Master',
                'Enterprise architecture',
                'Daily coordination and code reviews',
                'Microservices or advanced system design',
                'Security and compliance review',
                'Advanced analytics and reporting',
                '6-12 months support',
                'Stage-based team scaling'
            ]
        ]
    ],

    'label_popular' => 'Most Popular',
    'label_to' => 'to',
    'label_per_month' => 'per month, varies by scope',
    'plan_cta' => 'Request Pricing Guidance',

    'services_title' => 'Delivery Foundation in Every Project',
    'services_subtitle' => 'Core engineering practices required for clear handover, operation, and future expansion.',

    'core_services' => [
        ['icon' => 'computer', 'title' => 'Fit-for-purpose technology', 'desc' => 'Technology is selected according to architecture, operating team, and growth requirements.'],
        ['icon' => 'security', 'title' => 'Security foundation', 'desc' => 'Encryption, access control, auditability, and security review aligned to project scope.'],
        ['icon' => 'api', 'title' => 'Documented APIs', 'desc' => 'Clear API contracts for integration, maintenance, and future development.'],
        ['icon' => 'storage', 'title' => 'Deployment infrastructure', 'desc' => 'Cloud, CDN, automated deployment, backup, and monitoring according to project needs.'],
        ['icon' => 'analytics', 'title' => 'Operational visibility', 'desc' => 'Logs, alerts, performance indicators, and tooling for issue handling.'],
        ['icon' => 'assignment', 'title' => 'Handover documentation', 'desc' => 'Technical documents, deployment guides, and operational references for the client team.'],
    ],

    'comparison_title' => 'Detailed Comparison',
    'comparison_subtitle' => 'Plan-by-plan scope breakdown',
    'comparison_feature' => 'Feature',
    'comparison_mvp' => 'MVP',
    'comparison_growth' => 'Growth',
    'comparison_enterprise' => 'Enterprise',

    'features' => [
        ['feature' => 'Team Size', 'startup' => '1-2 devs', 'growth' => '2-4 devs', 'enterprise' => '4-8+ devs'],
        ['feature' => 'Project Manager', 'startup' => 'Shared', 'growth' => 'Dedicated', 'enterprise' => 'Dedicated'],
        ['feature' => 'Sprint Duration', 'startup' => '2 weeks', 'growth' => '2 weeks', 'enterprise' => 'Flexible'],
        ['feature' => 'Code Review', 'startup' => 'Weekly', 'growth' => '2x Weekly', 'enterprise' => 'Daily'],
        ['feature' => 'API Development', 'startup' => 'Basic', 'growth' => 'Advanced', 'enterprise' => 'Custom'],
        ['feature' => 'Architecture', 'startup' => 'Standard', 'growth' => 'Advanced', 'enterprise' => 'Enterprise'],
        ['feature' => 'Post-launch Support', 'startup' => '30 days', 'growth' => '90 days', 'enterprise' => '6-12 months'],
        ['feature' => 'Modules', 'startup' => '1-2 modules', 'growth' => '3-5 modules', 'enterprise' => '5+ modules'],
        ['feature' => 'Security Level', 'startup' => 'Standard', 'growth' => 'Advanced', 'enterprise' => 'Enterprise'],
        ['feature' => 'Timeline', 'startup' => '3-6 months', 'growth' => '6-12 months', 'enterprise' => '12+ months'],
    ],

    'faq_title' => 'Frequently Asked Questions',
    'faq_subtitle' => 'Everything you need to know about pricing',

    'faqs' => [
        ['q' => 'How do I know what scope my project falls into?', 'a' => 'We discuss the project context directly to assess scope, complexity, technical risk, and timeline. From there we provide pricing and delivery recommendations that fit the project.'],
        ['q' => 'Can the displayed prices change?', 'a' => 'Yes. Prices are reference only. Actual pricing depends on: detailed scope, technology choices, timeline, team size, post-launch support.'],
        ['q' => 'Can we do fixed-price projects?', 'a' => 'Yes, but only when scope is 100% defined. We recommend time & materials for exploratory projects or those with evolving requirements.'],
        ['q' => 'Are there hidden fees?', 'a' => 'No hidden fees. Infrastructure costs (AWS, hosting, domains) are listed separately. All costs disclosed upfront.'],
        ['q' => 'What is the payment structure?', 'a' => 'Typically monthly invoicing with Net-30 payment terms. Custom arrangements negotiable for enterprise clients.'],
        ['q' => 'Can we scale the team up/down during the project?', 'a' => 'Absolutely. You can increase or decrease team size based on needs with advance notice.'],
        ['q' => 'Does pricing include post-launch support?', 'a' => 'Yes. Post-launch support duration varies by plan: 30 days (MVP), 90 days (Growth), 6-12 months (Enterprise).'],
        ['q' => 'Who owns the code after the project?', 'a' => 'Source-code ownership is defined clearly in the agreement. For custom development engagements, HKIncotech hands over source code, documentation, and deployment guidance according to the agreed scope.'],
    ],

    'cta_title' => 'Does Your Project Fall Outside These Plans?',
    'cta_desc' => 'That is perfectly normal. We tailor pricing to your specific requirements, complexity, and timeline. Let us discuss your needs.',
    'cta_button' => 'Discuss Pricing Scope',
];
