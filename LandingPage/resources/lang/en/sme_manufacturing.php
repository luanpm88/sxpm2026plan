<?php

return [
    // Hero Section
    'hero_badge' => 'Structured Solution for Industrial Operations',
    'hero_title' => 'Manufacturing Operating Framework for SME & FDI Factories',
    'hero_description' => 'A structured, modular approach to digitalizing production, warehouse, and quality operations — built for scalable industrial environments.',

    'hero_badges' => [
        'SME & FDI Factory Focus',
        'Modular Architecture Approach',
        'SLA-based Delivery & Support',
        'Roadmap-led Transformation',
    ],

    'hero_cta_consultation' => 'Request Consultation',
    'hero_cta_assessment' => 'Schedule Factory Assessment',

    'hero_sidebar_title' => 'Who We Are in this Solution Context',
    'hero_sidebar_items' => [
        'Structured manufacturing solution architect',
        'Process-driven system design and rollout',
        'Integration-ready with ERP, PLC, and IoT layers',
        'Security and compliance-first engineering discipline',
    ],
    'hero_sidebar_audience' => 'Audience alignment: Factory Director, Operations Manager, Supply Chain Manager, IT Manager, and FDI manufacturing leadership teams.',

    // Positioning Section
    'positioning_title' => 'Positioning: Structured Manufacturing Technology Partner',
    'positioning_subtitle' => 'We work as a long-term transformation partner with a disciplined operating framework, not as a generic one-off software vendor.',

    'positioning_context_heading' => 'What this standalone solution page represents',
    'positioning_context_p1' => 'This page introduces our Modular Manufacturing Operating Framework for factories that need structured digitalization of production, inventory, packaging, and quality operations. The solution is designed as a reusable architecture with standardized modules and controlled rollout patterns.',
    'positioning_context_p2' => 'We do not position this as one-off custom coding by request. We position it as a long-term operating system roadmap for factory execution, governance, and continuous improvement.',

    'positioning_items' => [
        [
            'title' => 'Process Mapping First',
            'description' => 'We start from actual factory workflows, decision points, handovers, and bottlenecks before defining system scope.',
        ],
        [
            'title' => 'Standardized Architecture',
            'description' => 'Core architecture patterns are standardized for consistency, maintainability, and predictable rollout across sites.',
        ],
        [
            'title' => 'Modular Reuse',
            'description' => 'Reusable modules and deployment templates reduce implementation risk and improve upgrade continuity over time.',
        ],
        [
            'title' => 'Long-term Partnership',
            'description' => 'We align roadmap, operations, and support model with your multi-year digital manufacturing objectives.',
        ],
    ],

    'positioning_buyers_title' => 'Primary buyers',
    'positioning_buyers_desc' => 'Factory Director, Operations Manager, Supply Chain Manager, IT Manager.',
    'positioning_targets_title' => 'Target environments',
    'positioning_targets_desc' => 'Industrial zones, multi-line factories, SME growth plants, FDI manufacturing operations.',
    'positioning_model_title' => 'Operating model',
    'positioning_model_desc' => 'Assessment-driven architecture, modular rollout, governance-backed maintenance and upgrade path.',

    // Challenges Section
    'challenges_title' => 'Common Operational Challenges in SME & FDI Factories',
    'challenges_subtitle' => 'The framework is designed to address practical operational constraints typically seen in multi-line and multi-site manufacturing environments.',

    'challenges_symptoms_heading' => 'Operational symptoms we frequently see',
    'challenges_symptoms_text' => 'Production data often exists in fragmented forms: paper records, shift spreadsheets, independent device logs, and delayed reports. This creates gaps in decision making, quality traceability, and response time when incidents occur on the production floor.',

    'challenges_items' => [
        [
            'title' => 'Limited real-time production visibility',
            'description' => 'Supervisors receive status updates late, making line balancing and issue escalation reactive instead of proactive.',
        ],
        [
            'title' => 'Heavy Excel dependency',
            'description' => 'Manual files increase version conflicts, rework, and inconsistency between planning and actual execution data.',
        ],
        [
            'title' => 'Disconnected warehouse and production data',
            'description' => 'Material availability, WIP status, and finished goods updates are not synchronized in one operating context.',
        ],
        [
            'title' => 'Inconsistent quality tracking',
            'description' => 'Incoming QC, in-process QC, and final QC are often managed by disconnected forms and teams.',
        ],
        [
            'title' => 'Manual reporting burden',
            'description' => 'Operational reports are compiled manually, reducing management responsiveness and planning quality.',
        ],
        [
            'title' => 'Audit and compliance pressure',
            'description' => 'Fragmented logs make it difficult to demonstrate traceability and control during customer or regulatory audits.',
        ],
        [
            'title' => 'Multi-language and multi-site complexity',
            'description' => 'FDI operations require consistent workflows and terminology across teams, shifts, and locations.',
        ],
    ],

    // Framework Section
    'framework_title' => 'Manufacturing Operating Framework',
    'framework_subtitle' => 'A structured modular system architecture designed for repeatable deployment, operational consistency, and long-term expansion.',

    'framework_layer1_title' => 'Layer 1 — Core System Foundation',
    'framework_layer1_items' => [
        'User and role management',
        'Workflow engine',
        'Reporting structure',
        'Audit logging',
        'API-ready architecture',
    ],

    'framework_layer2_title' => 'Layer 2 — Manufacturing Modules',
    'framework_layer2_items' => [
        'Production management',
        'Inventory control',
        'Packaging workflow',
        'Quality control',
        'KPI dashboard',
    ],

    'framework_layer3_title' => 'Layer 3 — Adaptation & Integration',
    'framework_layer3_items' => [
        'SOP alignment',
        'ERP integration capability',
        'Factory-specific workflow configuration',
        'Multi-language support',
    ],

    'framework_note' => 'This is a structured modular system approach, not one-off coding.',

    'framework_tech_title' => 'Recommended Technology Datasheet',
    'framework_tech_subtitle' => 'The stack below is selected for scalable factory operations, API-driven device integration, and maintainable long-term ownership.',

    'framework_backend_title' => '1) Server-side (Backend)',
    'framework_backend_items' => [
        'Laravel (PHP) as core framework for modular business logic and RBAC workflow management.',
        'MySQL for transactional manufacturing data and reporting consistency.',
        'REST API (Laravel API Resources) and optional GraphQL (Lighthouse) for mobile/device clients.',
        'Realtime updates via Laravel Echo + WebSocket/Pusher for line dashboards and status boards.',
    ],

    'framework_frontend_title' => '2) Client-side (Web + Mobile)',
    'framework_frontend_items' => [
        'Web app: Vue.js or React for supervisor/manager dashboards and planning views.',
        'Mobile app: Flutter or React Native for Android/iOS at workstations and floor checkpoints.',
        'Device UI patterns optimized for touch operation on industrial tablets.',
    ],

    'framework_device_title' => '3) Device & Machine Integration',
    'framework_device_items' => [
        'IoT messaging through MQTT or FCM for status and task notifications.',
        'Line device communication by Bluetooth or secure industrial Wi-Fi.',
        'Machine protocol integration via OPC-UA or Modbus.',
        'SCADA/collection layer via Ignition, Node-RED, or dedicated integration module.',
    ],

    'framework_security_title' => '4) Security, Data & Reporting',
    'framework_security_items' => [
        'Authentication and authorization by Laravel Sanctum or OAuth2 patterns.',
        'TLS 1.2/1.3 encryption in transit, secure storage controls for sensitive data.',
        'Backup strategy on AWS S3, Google Cloud Storage, or controlled on-prem storage.',
        'Reporting layer with Laravel Excel, Chart.js, or Power BI integration.',
    ],

    'framework_cloud_title' => '5) Cloud, Delivery & Operations',
    'framework_cloud_items' => [
        'Hosting on AWS, Google Cloud, or DigitalOcean with predictable scaling models.',
        'CDN layer by Cloudflare or AWS CloudFront for static assets and global performance.',
        'CI/CD via GitHub Actions, GitLab CI/CD, or Jenkins.',
        'Deployment model supports on-prem, cloud, or hybrid architecture.',
    ],

    // Modules Section
    'modules_title' => 'Core Functional Modules',
    'modules_subtitle' => 'Modules are organized to support daily plant operations and executive-level decision visibility.',

    'modules_production_title' => 'Production Management',
    'modules_production_items' => [
        'Work order control',
        'Real-time tracking',
        'OEE visibility',
        'Downtime analysis',
    ],

    'modules_warehouse_title' => 'Warehouse & Inventory',
    'modules_warehouse_items' => [
        'Raw materials tracking',
        'WIP tracking',
        'Finished goods control',
        'Barcode support',
        'FIFO / FEFO logic',
    ],

    'modules_quality_title' => 'Quality Management',
    'modules_quality_items' => [
        'Incoming QC',
        'In-process QC',
        'Final QC',
        'Non-conformance tracking',
        'Audit logs',
    ],

    'modules_dashboard_title' => 'Executive Dashboard',
    'modules_dashboard_items' => [
        'Production efficiency overview',
        'Inventory status monitoring',
        'Order completion rate',
        'Operational KPI performance',
    ],

    'modules_packaging_title' => 'Packaging & Dispatch Control',
    'modules_packaging_items' => [
        'Packaging workflow checkpoints',
        'Lot and serial traceability',
        'Dispatch-ready verification',
        'Outbound status synchronization',
    ],

    'modules_barcode_title' => 'Barcode / QR Operations',
    'modules_barcode_items' => [
        'Product and material identification',
        'Workstation scanning flows',
        'Error reduction for manual data entry',
        'Scanner SDK integration (industrial-ready)',
    ],

    'modules_workforce_title' => 'Workforce & Shift Execution',
    'modules_workforce_items' => [
        'Shift assignment and production accountability',
        'Operator-level execution capture',
        'Escalation workflow for incidents',
        'Role-based approval and sign-off',
    ],

    'modules_reporting_title' => 'Reporting & BI Layer',
    'modules_reporting_items' => [
        'Real-time dashboard with role-based access',
        'Daily and shift-level production summaries',
        'Error, downtime, and quality trend analysis',
        'Export formats for Excel, PDF, and BI tools',
    ],

    'modules_shopfloor_title' => 'Shopfloor Device Coverage',
    'modules_shopfloor_desc' => 'The framework supports mixed endpoint operations at each production stage, including tablet input, workstation supervision, scanner-based tracking, and machine data synchronization.',
    'modules_shopfloor_items' => [
        'Android tablets (10"+) for operator workflows',
        'iOS tablets for supervisor and approval tasks',
        'PC workstation interfaces for planning and reporting',
        'Barcode/QR scanners for material and lot control',
        'IoT gateway channels for environment and machine data',
        'PLC/CNC interface via OPC-UA / Modbus integration',
    ],

    // Implementation Section
    'implementation_title' => 'Implementation Approach',
    'implementation_subtitle' => 'Deployment follows a disciplined phase model to ensure operational stability, adoption, and measurable outcomes.',

    'implementation_steps' => [
        [
            'number' => '1',
            'title' => 'Process Assessment & Mapping',
            'description' => 'Document workflows, handoffs, bottlenecks, and operational controls by department.',
        ],
        [
            'number' => '2',
            'title' => 'System Architecture Design',
            'description' => 'Define data structures, workflow engine model, access controls, and integration interfaces.',
        ],
        [
            'number' => '3',
            'title' => 'Modular Deployment',
            'description' => 'Roll out prioritized modules in sequence while keeping operational continuity.',
        ],
        [
            'number' => '4',
            'title' => 'Testing & Validation',
            'description' => 'Perform process validation, data checks, and exception scenario verification with stakeholders.',
        ],
        [
            'number' => '5',
            'title' => 'Training & Go-live',
            'description' => 'Conduct role-based enablement, operating SOP updates, and controlled production launch.',
        ],
        [
            'number' => '6',
            'title' => 'Continuous Improvement',
            'description' => 'Iterate based on KPI performance, quality trends, and evolving plant requirements.',
        ],
    ],

    'implementation_scrum_title' => 'SCRUM Delivery Flow for Industrial Projects',
    'implementation_scrum_steps' => [
        '1) Project Initiation: objectives, scope, governance model, milestone baseline.',
        '2) Requirement Analysis & Design: functional/non-functional requirements, architecture and data model approval.',
        '3) Sprint 0: environment setup, initial backlog, Definition of Done, integration sandbox preparation.',
        '4) Sprint Execution: planning, daily standup, development, testing, review, retrospective.',
        '5) Risk & Change Management: controlled backlog updates and impact assessment on timeline/cost.',
        '6) Release & Maintenance: controlled deployment, hypercare, SLA support, iterative improvement.',
    ],

    'implementation_governance_title' => 'Sprint Governance and Roles',
    'implementation_roles' => [
        [
            'title' => 'Product Owner',
            'description' => 'Owns priorities, acceptance criteria, and business alignment.',
        ],
        [
            'title' => 'SCRUM Master',
            'description' => 'Facilitates execution, removes blockers, protects team cadence.',
        ],
        [
            'title' => 'System Analyst / Architect',
            'description' => 'Maintains process integrity between shopfloor needs and system design.',
        ],
        [
            'title' => 'Engineering Team',
            'description' => 'Backend, frontend, mobile, QA, DevOps, integration specialists.',
        ],
    ],

    // Why Us Section
    'why_us_title' => 'Why HKIncotech for Manufacturing Solutions',
    'why_us_subtitle' => 'Our delivery model emphasizes structure, traceability, and long-term operational resilience.',

    'why_us_items' => [
        [
            'title' => 'Structured engineering approach',
            'description' => 'Architecture and implementation decisions are governed by process and system principles, not ad-hoc requests.',
        ],
        [
            'title' => 'Long-term system thinking',
            'description' => 'Design choices are made for maintainability, expansion, and operational continuity across future phases.',
        ],
        [
            'title' => 'Scalable architecture design',
            'description' => 'Modules and data models are structured to support additional plants, lines, and integration layers.',
        ],
        [
            'title' => 'Documentation discipline',
            'description' => 'Process maps, specifications, and handover artifacts are managed as first-class delivery outputs.',
        ],
        [
            'title' => 'SLA-based support model',
            'description' => 'Post go-live support follows response and resolution commitments aligned with plant operations.',
        ],
        [
            'title' => 'Complex systems experience',
            'description' => 'We apply proven engineering practices from building high-complexity, multi-module business systems.',
        ],
    ],

    'why_us_security_title' => 'Security & Compliance Baseline',
    'why_us_security_items' => [
        'TLS 1.2 / 1.3 enforced for data-in-transit security.',
        'Role-based access model and controlled session security policies.',
        'OWASP-aligned application security practices (XSS, CSRF, SQLi controls).',
        'Audit logs and traceability for operational and compliance review.',
        'Optional alignment roadmap for ISO/IEC 27001, IEC 62443, and automotive quality compliance contexts.',
    ],

    'why_us_delivery_title' => 'Delivery Team Structure',
    'why_us_delivery_items' => [
        'PM / SCRUM Master for planning, governance, and stakeholder communication.',
        'System Analyst for process mapping and architecture translation.',
        'Backend, frontend, and mobile engineers for cross-platform execution.',
        'QA and DevOps for release quality, CI/CD, and stability.',
        'Integration specialists for IoT/PLC/ERP interfaces where required.',
    ],

    'why_us_capability_title' => 'Capability Summary for FDI Stakeholders',
    'why_us_capability_desc' => 'We combine factory workflow understanding, engineering discipline, and structured governance to deliver a maintainable operating framework. Our approach is designed for controlled deployment, measurable outcomes, and long-term expansion, rather than ad-hoc feature delivery.',

    // Roadmap Section
    'roadmap_title' => 'Solution Roadmap',
    'roadmap_subtitle' => 'A phased roadmap to evolve from operational control to continuous performance optimization.',

    'roadmap_phases' => [
        [
            'title' => 'Phase 1 — Foundation & Core Modules',
            'description' => 'Establish governance, user roles, core workflows, and priority production and inventory modules.',
        ],
        [
            'title' => 'Phase 2 — Integration & Automation',
            'description' => 'Integrate supporting systems, reduce manual handoffs, and standardize cross-department workflows.',
        ],
        [
            'title' => 'Phase 3 — Data Intelligence & Optimization',
            'description' => 'Expand analytics, improve decision velocity, and continuously optimize operational and quality outcomes.',
        ],
    ],

    'roadmap_note' => 'Our approach builds toward a continuously improving manufacturing platform over time.',

    'roadmap_infrastructure_title' => 'Infrastructure Baseline (Hardware + Software)',
    'roadmap_infrastructure_items' => [
        [
            'title' => 'Central Server',
            'description' => 'Linux-based application hosting for Laravel backend and API services.',
        ],
        [
            'title' => 'Database Tier',
            'description' => 'MySQL/MariaDB with backup policy and role-separated access controls.',
        ],
        [
            'title' => 'Shopfloor Endpoints',
            'description' => 'Android/iOS tablets and workstation terminals across production checkpoints.',
        ],
        [
            'title' => 'Industrial Network',
            'description' => 'Managed switch, secure Wi-Fi, segmented factory network, VPN for remote access.',
        ],
        [
            'title' => 'IoT / PLC Connectivity',
            'description' => 'OPC-UA/Modbus integration via gateway or middleware service.',
        ],
        [
            'title' => 'Storage & DR',
            'description' => 'NAS/cloud backup, periodic recovery drills, and data retention governance.',
        ],
    ],

    'roadmap_hardware_title' => 'Hardware Reference Configuration',
    'roadmap_hardware_items' => [
        [
            'title' => 'Web/App Server',
            'description' => 'Reference: 8+ cores CPU, 32GB RAM ECC, enterprise SSD RAID 1/10, Linux server.',
        ],
        [
            'title' => 'Database Server',
            'description' => 'Reference: 16+ cores class CPU, 64GB RAM ECC, enterprise SSD RAID 5/10.',
        ],
        [
            'title' => 'Network Layer',
            'description' => 'Managed switch, industrial Wi-Fi, firewall with VPN/IPSec, segmented production network.',
        ],
        [
            'title' => 'Storage',
            'description' => 'Starting point: 5TB+, separated transaction/log/backup volumes, NAS or cloud backup extension.',
        ],
        [
            'title' => 'Shopfloor Devices',
            'description' => 'Android/iOS tablets 10"+, barcode scanners (1D/2D), workstation terminals, industrial printers.',
        ],
        [
            'title' => 'Power & Continuity',
            'description' => 'UPS backup for server/network layer and periodic DR readiness checks.',
        ],
    ],

    'roadmap_risk_title' => 'Risk Management Baseline',
    'roadmap_risk_items' => [
        [
            'title' => 'Requirement volatility',
            'description' => 'Controlled through phased backlog governance and formal change impact review.',
        ],
        [
            'title' => 'Integration complexity',
            'description' => 'De-risked via protocol sandboxing, interface testing, and staged machine onboarding.',
        ],
        [
            'title' => 'Data security incidents',
            'description' => 'Mitigated by encryption controls, segmentation, log monitoring, and incident playbooks.',
        ],
        [
            'title' => 'Performance and scale pressure',
            'description' => 'Addressed by load tests, tuning plans, and scalable infrastructure options.',
        ],
        [
            'title' => 'User adoption gap',
            'description' => 'Reduced by role-based training, SOP updates, and on-site hypercare in go-live stage.',
        ],
        [
            'title' => 'Timeline and budget overrun',
            'description' => 'Managed through sprint-level visibility, milestone checkpoints, and scope discipline.',
        ],
    ],

    'roadmap_targets' => 'Operational Targets Reference: availability target 99.9%, scalable architecture for additional devices and production lines, and scheduled maintenance with monthly health checks for infrastructure and application layers.',

    // CTA Section
    'cta_title' => 'Start Your Factory Digitalization Journey',
    'cta_description' => 'Build a structured operational foundation today and scale with confidence across future manufacturing phases.',
    'cta_button' => 'Book a Consultation',

    // Solution Packages Section
    'packages_title' => 'Solution Packages & Budget Reference',
    'packages_subtitle' => 'Indicative investment ranges for planning and budgeting. Final scope and pricing are confirmed after process assessment.',

    'packages' => [
        [
            'title' => 'Package A — Foundation Pilot',
            'price' => 'Estimated: 120M – 280M VND',
            'items' => [
                'Core workflow setup for one pilot line',
                'Production + inventory baseline modules',
                'Basic dashboard and report templates',
                'Initial user training and go-live support',
            ],
        ],
        [
            'title' => 'Package B — Standard Plant Rollout',
            'price' => 'Estimated: 320M – 850M VND',
            'items' => [
                'Multi-module deployment for plant operations',
                'Quality, packaging, and KPI dashboard coverage',
                'Barcode/QR operations and role-based access model',
                'Structured testing, training, and controlled launch',
            ],
        ],
        [
            'title' => 'Package C — Multi-Plant Integration',
            'price' => 'Estimated: 900M+ VND',
            'items' => [
                'Cross-site standardization and governance model',
                'ERP / PLC / IoT integration roadmap implementation',
                'Advanced analytics and phased optimization layer',
                'SLA operation model with extended support options',
            ],
        ],
    ],

    'maintenance_title' => 'Maintenance & Support Model',
    'maintenance_items' => [
        'Default maintenance package for platform stability and incident handling.',
        'Extended package for faster response windows and increased monthly support capacity.',
        'Software issue response targets based on impact class and SLA scope.',
        'Role-authorized data adjustment and log review support.',
        'Periodic performance monitoring, cache maintenance, and optimization checks.',
    ],

    'backup_title' => 'Backup & Recovery Baseline',
    'backup_items' => [
        'Automated system backup every 2 hours (server-side checkpoint).',
        'Cloud upload backup schedule at least twice per day.',
        'Standard cloud backup volume reference: 50GB baseline.',
        'Recovery objective reference: service recovery under ~60 minutes for software incidents.',
        'Contingency activation reference: temporary recovery environment under ~60 minutes in severe incidents.',
    ],

    'commercial_notes_title' => 'Important Commercial Notes',
    'commercial_notes_items' => [
        'All budget values are advisory ranges for planning and procurement preparation.',
        'Final cost is defined by scope complexity, integration depth, data migration needs, and target timeline.',
        'Additional change requests outside approved scope are estimated separately by effort and contract appendix.',
    ],
];
