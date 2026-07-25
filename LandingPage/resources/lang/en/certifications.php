<?php

return [
    // Hero
    'hero_title'       => 'Standards & Engineering',
    'hero_title_accent'=> 'Capability',
    'hero_desc'        => 'Security, operations, cloud, and delivery frameworks used as reference points for controllable, long-lived enterprise systems.',
    'hero_cta'         => 'Discuss Security Requirements',
    'section_compliance' => 'REFERENCE STANDARDS',
    'section_cloud' => 'CLOUD CAPABILITY',
    'section_agile' => 'DELIVERY PRACTICE',
    'section_tech' => 'TECHNOLOGY STACK',
    'section_team' => 'TEAM EXPERTISE',

    // Compliance section
    'compliance_title'       => 'Security & Controls',
    'compliance_title_accent'=> 'Reference Frameworks',
    'compliance_subtitle'    => 'Standards commonly used to frame security, data, audit, and operating requirements for enterprise systems.',

    // Cloud section
    'cloud_title'       => 'Cloud & Infrastructure',
    'cloud_title_accent'=> 'Capability',
    'cloud_subtitle'    => 'Experience designing, deploying, and operating systems across common cloud platforms.',

    // Agile section
    'agile_title'       => 'Delivery & Engineering',
    'agile_title_accent'=> 'Practice',
    'agile_subtitle'    => 'Scrum, Agile, and technical practices that keep delivery visible, testable, and ready for handover.',

    // Tech section
    'tech_title'        => 'Technology',
    'tech_title_accent' => 'Capability',
    'tech_subtitle'     => 'Technology groups selected according to operating context, data needs, security requirements, and scalability.',

    // Team section
    'team_title'        => 'Team Capability &',
    'team_title_accent' => 'Engineering Discipline',
    'team_subtitle'     => 'Project teams are organized around clear roles: architecture, development, QA, DevOps, business analysis, and operations.',

    // Learning section
    'learning_title'    => 'Continuous Learning Culture',
    'learning_desc'     => 'Team capability is maintained through internal training, engineering reviews, technology research, and lessons learned from real projects.',
    'learning_stat1_value'=> 'Dedicated',
    'learning_stat1_label'=> 'Training & Engineering Standards',
    'learning_stat2_value'=> 'Regular',
    'learning_stat2_label'=> 'Tech Talks & Knowledge Sharing',
    'learning_stat3_value'=> 'R&D Time',
    'learning_stat3_label'=> 'Emerging Technologies Focus',
    'learning_stat4_value'=> 'Mentorship',
    'learning_stat4_label'=> 'Project-Based Engineering Mentorship',

    // CTA
    'cta_title'  => 'Partner with Hoàng Khang Incotech',
    'cta_desc'   => 'An enterprise-grade engineering team with disciplined security, cloud, AI, and controlled delivery practices.',
    'cta_button' => 'Discuss a Project',

    // Compliance certs
    'compliance' => [
        ['icon'=>'shield_lock','name'=>'ISO/IEC 27001','subtitle'=>'Information Security Management','desc'=>'Used as a reference for access control, risk governance, data protection, and operational security management.'],
        ['icon'=>'verified','name'=>'SOC 2','subtitle'=>'Service Controls','desc'=>'Referenced when framing controls for security, availability, processing integrity, confidentiality, and privacy.'],
        ['icon'=>'gavel','name'=>'GDPR / Data Privacy','subtitle'=>'Privacy-by-design','desc'=>'Guides collection, storage, processing, and deletion of personal data with minimization and control principles.'],
        ['icon'=>'credit_card','name'=>'PCI DSS','subtitle'=>'Payment Data','desc'=>'Referenced for systems involving payment flows, tokenization, access control, and sensitive-data handling.'],
        ['icon'=>'health_and_safety','name'=>'HIPAA / Health Data','subtitle'=>'Healthcare Data','desc'=>'Considered for healthcare-related systems requiring role-based access and auditability around sensitive records.'],
        ['icon'=>'lock','name'=>'OWASP ASVS','subtitle'=>'Web Application Security','desc'=>'A practical review framework for authentication, sessions, APIs, input handling, and deployment configuration.'],
    ],

    // Cloud certs
    'cloud_certs' => [
        ['icon'=>'cloud','provider'=>'Amazon Web Services (AWS)','certs'=>['Cloud application architecture','CI/CD and infrastructure operations','Networking, security, and IAM','Cost and observability optimization']],
        ['icon'=>'cloud','provider'=>'Google Cloud Platform','certs'=>['Cloud infrastructure architecture','Data and analytics workloads','Cloud networking','Monitored service operations']],
        ['icon'=>'cloud','provider'=>'Microsoft Azure','certs'=>['Azure solution architecture','Cloud resource administration','Enterprise application deployment','Security and monitoring']],
        ['icon'=>'settings','provider'=>'Kubernetes & Container','certs'=>['Application containerization','Service orchestration','Cluster administration','CI/CD and observability']],
    ],

    // Agile certs
    'agile' => [
        ['category'=>'Sprint governance','icon'=>'groups','items'=>['Sprint planning','Prioritized backlog','Regular demo and acceptance','Risk and dependency tracking','Retrospectives for process improvement']],
        ['category'=>'Phased delivery','icon'=>'trending_up','items'=>['Scope split by value','Validation with real users','Milestones with acceptance criteria','Change-impact governance','Post-launch hypercare']],
        ['category'=>'Technical practice','icon'=>'code','items'=>['Continuous Delivery & DevOps','Test-Driven Development (TDD)','Behavior-Driven Development (BDD)','Domain-Driven Design (DDD)','Microservices Architecture']],
    ],

    // Tech expertise
    'technologies' => [
        ['category'=>'Frontend & UX','icon'=>'palette','items'=>['React / Vue / Angular','TypeScript','PWA and responsive UI','Design-system implementation','Frontend performance optimization']],
        ['category'=>'Backend & API','icon'=>'storage','items'=>['Node.js / PHP / Python / Java / Go','REST / GraphQL','Modular or microservice architecture','Authentication and authorization','Versioned API design']],
        ['category'=>'Data & Database','icon'=>'database','items'=>['PostgreSQL / MySQL / MongoDB','Redis / Elasticsearch','Domain data modeling','ETL and real-time processing','Backup and recovery design']],
        ['category'=>'Applied AI','icon'=>'smart_toy','items'=>['Controlled LLM integration','RAG and vector databases','Semantic search','Workflow automation','Answer-quality evaluation']],
        ['category'=>'DevOps & Infrastructure','icon'=>'settings','items'=>['Docker / Kubernetes','CI/CD pipelines','Infrastructure as Code','Monitoring and alerting','Operating-cost optimization']],
        ['category'=>'Security & Performance','icon'=>'security','items'=>['Security architecture','Application security testing','Performance tuning','Load testing','Monitoring and incident response']],
    ],

    // Team profile
    'team_profile' => [
        ['icon'=>'person','title'=>'Core Engineers','count'=>'Core team','desc'=>'Engineering teams experienced in enterprise systems, digital products, APIs, data, and long-term operations.'],
        ['icon'=>'shield','title'=>'Security & Controls','count'=>'By design','desc'=>'Access control, audit logging, data protection, permission models, and incident response are considered from architecture.'],
        ['icon'=>'smart_toy','title'=>'Applied AI','count'=>'Controlled','desc'=>'LLM, RAG, semantic search, and automation are integrated with clear data sources, permissions, and quality evaluation.'],
        ['icon'=>'architecture','title'=>'Solution Architecture','count'=>'Long-term','desc'=>'Modular, microservice, or structured monolith designs are selected according to scope, scale, and operating capability.'],
        ['icon'=>'trending_up','title'=>'Technical Leadership','count'=>'By sprint','desc'=>'Tech leads guide solution direction, review engineering decisions, control quality, and mentor the project team.'],
        ['icon'=>'school','title'=>'Continuous Learning','count'=>'Ongoing','desc'=>'Training budget, internal knowledge sharing, and R&D practice are maintained across the engineering team.'],
    ],
];
