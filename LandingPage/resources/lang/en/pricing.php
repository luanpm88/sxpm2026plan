<?php

return [
    'hero_title' => 'Investment Plans',
    'hero_title_highlight' => 'Tailored to Your Needs',
    'hero_desc' => 'Every engagement is unique. Pricing is structured around your scope, complexity, and delivery timeline — no rigid packages, only solutions that fit your actual requirements.',

    'plans_title' => 'Price Reference Guide',
    'plans_subtitle' => 'Prices below are reference only. Actual pricing depends on project-specific requirements',

    'plans' => [
        [
            'name' => 'MVP / Startup',
            'price_from' => '$6,300',
            'price_to' => '$12,000',
            'period' => 'Typical monthly investment',
            'desc' => 'MVP projects, prototypes, small web apps',
            'highlighted' => false,
            'features' => [
                '1-2 Full Stack Developer',
                'Agile/Sprint Based (2-week sprints)',
                'Core Features Development',
                'Weekly Status Updates',
                'Git Repo & Documentation',
                'Basic Performance Optimization',
                'Post-launch Support (30 days)'
            ]
        ],
        [
            'name' => 'Growth / Scale-up',
            'price_from' => '$12,000',
            'price_to' => '$25,000',
            'period' => 'Typical monthly investment',
            'desc' => 'Medium-sized apps, SaaS, platforms',
            'highlighted' => true,
            'features' => [
                '2-4 Full Stack Developers',
                'Dedicated Project Manager',
                'Advanced Architecture Design',
                'Bi-weekly Demo & Review',
                'Custom API Development',
                'Performance Optimization',
                'Security Best Practices',
                '90 Days Post-launch Support',
                'Agile Ceremonies'
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
                '4-8+ Full Stack Developers',
                'Dedicated Team & Scrum Master',
                'Enterprise-Grade Architecture',
                'Daily Standups & Code Reviews',
                'Microservices / Advanced Design',
                'Security & Compliance Audit',
                'Advanced Analytics & Reporting',
                '6-12 Months Support',
                'Flexible Scaling'
            ]
        ]
    ],

    'label_popular' => 'Most Popular',
    'label_to' => 'to',
    'label_per_month' => 'per month, varies by scope',
    'plan_cta' => 'Get Pricing Consultation',

    'services_title' => 'Included in Every Project',
    'services_subtitle' => 'Core services included in all projects',

    'core_services' => [
        ['icon' => 'computer', 'title' => 'Modern Tech Stack', 'desc' => 'React, Node.js, AWS, TypeScript, Python, latest technologies.'],
        ['icon' => 'security', 'title' => 'Security First', 'desc' => 'SSL, encryption, security audit, compliance standards.'],
        ['icon' => 'api', 'title' => 'Clean APIs', 'desc' => 'RESTful APIs, well-documented, scalable, production-ready.'],
        ['icon' => 'storage', 'title' => 'Cloud Infrastructure', 'desc' => 'AWS/GCP deployment, CDN, auto-scaling, automated backups.'],
        ['icon' => 'analytics', 'title' => 'Performance Tracking', 'desc' => 'Real-time monitoring, alert systems, performance analytics.'],
        ['icon' => 'assignment', 'title' => 'Full Documentation', 'desc' => 'Code docs, API docs, deployment guides, best practices.'],
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
        ['q' => 'Who owns the code after the project?', 'a' => 'You own 100% of the code. We provide full source code, documentation, deployment guides. No licensing fees or royalties.'],
    ],

    'cta_title' => 'Does Your Project Fall Outside These Plans?',
    'cta_desc' => 'That is perfectly normal. We tailor pricing to your specific requirements, complexity, and timeline. Let us discuss your needs.',
    'cta_button' => 'Request a Free Consultation',
];
