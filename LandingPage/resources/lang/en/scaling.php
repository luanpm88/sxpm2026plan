<?php

return [
    // Hero
    'hero_title'        => 'Scaling &',
    'hero_title_accent' => 'Infrastructure',
    'hero_desc1'        => 'From small MVP to 10 million users. 6 scaling phases with enterprise-grade SLA, auto-scaling, 24/7 monitoring.',
    'hero_desc2'        => 'We have scaled 50+ projects from 0 to millions of users. Experience from early startup to unicorn scale.',

    // Phases section
    'phases_title'      => '6 Scaling Phases',
    'phases_subtitle'   => 'Roadmap from MVP to enterprise-scale infrastructure',
    'label_phase'       => 'Phase',
    'label_users'       => 'Users',
    'label_timeline'    => 'Timeline',
    'label_cost'        => 'Cost',
    'label_architecture'=> 'Architecture',
    'label_tech_stack'  => 'Tech Stack',

    // Metrics section
    'metrics_title'     => 'Performance Benchmarks',
    'metrics_subtitle'  => 'Enterprise-grade SLA and performance standards',

    // CTA
    'cta_title'         => 'Ready to Scale?',
    'cta_desc'          => 'We have experience scaling from 0 to 100 million users. Let\'s build solid infrastructure for your future together.',
    'cta_button'        => 'Scaling Consultation',

    // Phase data
    'phases' => [
        [
            'phase'        => 'Phase 1: Proof of Concept (MVP)',
            'users'        => '< 1K users',
            'timeline'     => '0–3 months',
            'architecture' => 'Monolithic + Simple DB',
            'description'  => 'Start simple: single server, basic database, no complex infrastructure. Focus on product-market fit.',
            'stack'        => 'Single instance (AWS EC2/GCP Compute) + RDS/Cloud SQL',
            'cost'         => '$500–2K/month',
        ],
        [
            'phase'        => 'Phase 2: Early Growth',
            'users'        => '1K – 50K users',
            'timeline'     => '3–6 months',
            'architecture' => 'Load Balanced + Read Replicas',
            'description'  => 'Add horizontal scaling: load balancer, database read replicas, basic caching.',
            'stack'        => 'Load Balancer + 2–3 backend instances + Master-Slave DB',
            'cost'         => '$2K–5K/month',
        ],
        [
            'phase'        => 'Phase 3: Scaling Out',
            'users'        => '50K – 500K users',
            'timeline'     => '6–12 months',
            'architecture' => 'Microservices + Kubernetes',
            'description'  => 'Microservices architecture, Kubernetes orchestration, Redis caching, CDN for static assets.',
            'stack'        => 'K8s cluster + 5–10 service replicas + Redis + CDN',
            'cost'         => '$5K–15K/month',
        ],
        [
            'phase'        => 'Phase 4: Multi-Region',
            'users'        => '500K – 5M users',
            'timeline'     => '12–18 months',
            'architecture' => 'Multi-region + Database Sharding',
            'description'  => 'Deploy to multiple regions, database sharding by geography, global CDN, disaster recovery.',
            'stack'        => '3+ regions, sharded DB, global failover, multi-cloud strategy',
            'cost'         => '$15K–50K/month',
        ],
        [
            'phase'        => 'Phase 5: Hyper-Scale',
            'users'        => '5M – 100M users',
            'timeline'     => '18–24 months',
            'architecture' => 'Event-Driven + Data Warehouse',
            'description'  => 'Event-driven architecture, real-time analytics, data warehouse (BigQuery), streaming pipelines.',
            'stack'        => 'Message queues + Streaming + Data lake + Analytics',
            'cost'         => '$50K–200K/month',
        ],
        [
            'phase'        => 'Phase 6: Enterprise Scale',
            'users'        => '> 100M users',
            'timeline'     => '24+ months',
            'architecture' => 'Custom Infrastructure + Edge',
            'description'  => 'Custom infrastructure, edge computing, custom databases, dedicated DevOps team.',
            'stack'        => 'Global edge network + Custom DBs + Proprietary infra',
            'cost'         => '$200K+/month',
        ],
    ],

    // Metrics data
    'metrics' => [
        ['metric' => 'Enterprise', 'label' => 'Uptime SLA',             'desc' => 'High-availability SLA'],
        ['metric' => 'Low',        'label' => 'API Response Time',       'desc' => 'Low-latency P99'],
        ['metric' => '<3s',        'label' => 'Page Load Time',          'desc' => 'On 3G network'],
        ['metric' => '>95',        'label' => 'Lighthouse Score',        'desc' => 'Performance metric'],
        ['metric' => 'Zero',       'label' => 'Zero-downtime Deploy',    'desc' => 'Blue-green deployment'],
        ['metric' => '24/7',       'label' => 'SOC Monitoring',         'desc' => 'Real-time alerts'],
        ['metric' => 'Fast',       'label' => 'Auto-recovery Time',     'desc' => 'Failover automation'],
        ['metric' => 'High',       'label' => 'Database Availability',  'desc' => 'Multi-region replication'],
    ],
];
