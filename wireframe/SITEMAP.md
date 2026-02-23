# HKIncotech Landing Page - Complete Sitemap & Wireframe Structure

**Last Updated:** 2026  
**Project:** HKIncotech Enterprise Development Partner - Landing Page  
**Framework:** Laravel + Blade Templating  
**Design System:** Bootstrap 5, Material Symbols, Custom CSS Variables  
**Target Audience:** Enterprise clients, startups, digital transformation buyers

---

## 1. Site Architecture Overview

### Navigation Structure (Main Routes)

The site features a primary header navigation with 10 main routes plus a homepage, organized hierarchically:

```
├── HomePage (/)
├── About Us (/about-us)
├── Services (/services)
├── SCRUM Methodology (/scrum)
├── Technology Stack (/tech-stack)
├── Scaling & Infrastructure (/scaling)
├── Case Studies (/case-studies)
├── Pricing (/pricing)
├── Certifications (/certifications)
├── Contact (/contact)
└── Blog - R&D (/blog/r_and_d)
```

**Layout Structure:** 
- Main layout: `layouts/main.blade.php` (single responsive template for all pages)
- Header navigation with responsive hamburger menu
- Flexible footer with 4-column link structure + copyright
- Consistent styling with CSS modules (--primary, --secondary-bg, --text-dark, etc.)

---

## 2. Page-by-Page Sitemap

### 2.1 HOME PAGE (/)
**File:** `resources/views/landing_page/index.blade.php`  
**Purpose:** First impression, value proposition, company credibility  
**Target Audience:** All visitors, decision-makers, technical leads

#### Sections:

**Section 1: Hero Section (Fold 1)**
- **Headline:** "Enterprise Software Development Partner"
- **Subheadline:** "HKIncotech is a software development partner in Southeast Asia. We build complex systems, AI platforms, and SaaS solutions using SCRUM methodology with 12+ years of experience."
- **Visual:** Central network diagram (SVG) showing SCRUM at center connected to Frontend, Backend, Database, DevOps, Security, AI/ML
- **CTA Buttons:**
  - Primary: "Free Consultation" → `landing.contact`
  - Secondary: "View Services" → `landing.services`
- **Statistics (Hero Stats Box):**
  - 12+ Years Experience
  - 50+ Projects Completed
  - 99.99% Uptime SLA
- **Layout:** 2-column grid (text left, visual right) → 1-column mobile

**Section 2: Complete Capabilities (Services Preview)**
- **Title:** "Complete Capabilities"
- **Subtitle:** "Enterprise-grade software solutions from custom development to SaaS platforms"
- **3-4 Feature Cards:**
  1. **Custom Software Development**
     - Icon: `code`
     - Description: Application development from scratch with cloud-native architecture, microservices, and DevOps automation
     - Bullet points: Web & Mobile Applications, Distributed Systems, Real-time Processing, Data Pipelines
     - CTA: "View Details" → `landing.services`
  
  2. **SaaS Platform: HKSpace**
     - Icon: `workspace_premium`
     - Description: Multi-tenant enterprise management platform with unlimited scalability
     - Bullet points: Task Management Engine, Workflow Automation, Real-time Collaboration, Advanced Analytics
  
  3. HKSpace, AI, Mobile, Enterprise ERP (additional cards on full view)

**Section 3: Project Portfolio Showcase (Case Study Grid)**
- Featured case studies with industry badges and key metrics
- Links to individual case study details
- Call-to-action: → `landing.case-studies`

**Visual Design Notes:**
- Gradient background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%)
- White background for service cards with hover effects (primary color border + shadow)
- Responsive grid: repeat(auto-fit, minmax(300px, 1fr))

---

### 2.2 ABOUT US PAGE (/about-us)
**File:** `resources/views/landing_page/about-us.blade.php`  
**Purpose:** Build trust, establish credibility, tell company story  
**Target Audience:** Enterprise decision-makers, investors, corporate partners

#### Sections:

**Section 1: Hero Section**
- **Headline:** "About HKIncotech"
- **Subheadline:** "12+ years delivering software for SaaS, AI, enterprise systems, and custom products. 50+ successful projects by 50+ senior engineers."
- **Layout:** Centered text, minimal design

**Section 2: HKIncotech Story**
- **Title:** "HKIncotech Story - From a small team to a trusted engineering partner"
- **2-Column Layout:**
  - **Left Column (Text Timeline):**
    - Start (2012): 5 engineers
    - Growth (2015): 40+ projects, enterprise clients
    - Expansion (2020): 30+ lead engineers, global operations
    - Today (2026): 50+ engineers, 100+ projects, own SaaS platforms
  
  - **Right Column (Visual Timeline):**
    - Vertical timeline with numbered circles (1-4)
    - Each milestone has colored background (highlight for current)
    - Connecting line between milestones
    - Cards showing year, title, description

**Section 3: Mission & Values**
- **Title:** "Mission & Values - Principles guiding how we build and deliver"
- **Grid of 6 Value Cards** (3 columns, 2 rows):
  1. **Mission** - Help 20+ companies achieve digital transformation
  2. **Quality** - High bar for reliability and performance
  3. **Partnership** - Aligned incentives and long-term relationships
  4. **Innovation** - Continuous learning and best practices
  5. **People First** - Invest in teams and culture
  6. **Transparency** - Clear communication, no surprises
- **Each Card:**
  - Icon (Material Symbols)
  - Title
  - Description
  - White background with subtle shadow

**Section 4: Leadership Team**
- **Status:** Draft (placeholder content)
- **Title:** "Leadership Team - Experienced leaders with delivery track records"
- **Grid of 4 Leader Cards:**
  - Each leader: name, title, bio, skills list
  - Card design: gradient header + profile circle overlay
  - Placeholder names (--- --- ---)
  - Ready for real data integration

**Visual Design Notes:**
- White text on gradient backgrounds for hero
- Timeline design with numbered circles and connecting lines
- Card-based layout with shadows and hover effects
- Opacity applied to draft/incomplete sections

---

### 2.3 SERVICES PAGE (/services)
**File:** `resources/views/landing_page/services.blade.php` (713 lines)  
**Purpose:** Showcase service offerings in detail, prove capability, drive project interest  
**Target Audience:** Decision-makers evaluating service providers, project leads

#### Sections:

**Section 1: Hero Section**
- **Headline:** "Services & Solutions"
- **Subtitle:** "Four core services covering software needs from MVP to enterprise solutions"
- **Secondary Copy:** "We combine modern technology, global best practices, and domain expertise to build effective solutions."

**Section 2: Four Core Services (Overview Grid)**
- **3-4 Column Grid** of service overview cards:
  1. **Custom Software Development**
     - Icon: `code`
     - Description: Building applications from scratch with cloud-native architecture
     - Numbered badge: "1"
  
  2. **SaaS Platform**
     - Icon: `workspace_premium`
     - Description: Production-ready multi-tenant platform (HKSpace)
     - Numbered badge: "2"
  
  3. **AI Knowledge Platform**
     - Icon: `psychology`
     - Description: NLP, RAG, LLM integration for intelligent solutions
     - Numbered badge: "3"
  
  4. **Security & Compliance**
     - Icon: `shield`
     - Description: Enterprise security architecture
     - Numbered badge: "4"

**Section 3: Custom Software Development (Detailed)**
- **2-Column Layout:**
  - **Left Column (Text):**
    - **Heading:** "Clear, Standard Process"
    - **Copy:** Process overview paragraph
    - **Transparency Commitment Box** (secondary-bg):
      - Sprint Planning
      - Daily Updates
      - Sprint Demo
      - Code Quality
      - Full Visibility
    - Each point has icon + description
  
  - **Right Column (Visual):**
    - **SCRUM Development Cycle Diagram** (SVG)
      - Circle with 6 phase nodes: Planning (blue), Dev (green), Testing (orange), Demo (purple), Deploy (teal), Retro (dark)
      - Center label: "2-Week Sprint"
      - Arrows between phases
    - Caption: "2-week cycles with client participation"
    - Status badge: "Update Diagram" (draft indicator)

**Section 4: Tech Stack & Technologies**
- **Heading:** "Tech Stack & Technologies"
- **Subheading:** "Full-stack development with modern tech stack"
- **CTA Button:** "View Details" → `landing.tech-stack`
- **6-Column Grid** of tech category cards:
  - Frontend & Mobile
  - Backend & API
  - Database & Cache
  - Cloud & DevOps
  - AI & Machine Learning
  - DevOps & Tools
- **Each Card:**
  - Gradient header with icon + title
  - List of technologies with checkmark icons

**Additional Sections (continued in service details):**
- SaaS Platform (HKSpace) dedicated section
- AI Knowledge Platform section
- Mobile & Cross-Platform Development
- Security, Compliance & Enterprise Standards

**Visual Design Notes:**
- Numbered badges (1, 2, 3, 4) for service hierarchy
- Card-based layout with gradient headers
- SVG diagrams for process visualization
- Hover effects on all interactive cards
- Secondary-bg for info boxes and callouts

---

### 2.4 SCRUM METHODOLOGY PAGE (/scrum)
**File:** `resources/views/landing_page/scrum.blade.php` (275 lines)  
**Purpose:** Educate on methodology, demonstrate process transparency, differentiate service approach  
**Target Audience:** Technical leads, project managers, enterprise decision-makers

#### Sections:

**Section 1: Hero Section**
- **Headline:** "SCRUM Development Process"
- **Subheadline:** "Agile methodology enabling real-time progress visibility, flexible adjustments, and 30-50% faster product delivery"
- **CTA:** "Consult on SCRUM Process" → `landing.contact`

**Section 2: 6 Steps in SCRUM Process**
- **Grid of 6 Process Cards:**
  1. **Discovery & Consulting** - Strategic approach, requirements analysis, detailed planning
  2. **Design & Planning** - System architecture, UI/UX wireframes, sprint planning
  3. **Sprint Development** - 2-4 week sprints, product demo each sprint
  4. **QA & Testing** - Unit, integration, UAT, performance testing
  5. **Deployment & Launch** - CI/CD, monitoring, incident response
  6. **Support & Development** - 24/7 support, optimization, scaling
- **Card Design:**
  - Numbered badge (1-6)
  - Large icon
  - Title
  - Description
  - Hover effects (transform, shadow)

**Section 3: Sprint Cycle Details**
- **2-Column Layout:**
  - **Left Column:**
    - **Sprint Planning** - Define goals, break down tasks, estimate effort
    - **Daily Standup** - 15-minute daily sync
    - **Development** - Coding, code review, CI/CD
    - **Sprint Review** - Demo to stakeholders
    - **Sprint Retrospective** - Reflect and identify improvements
    - Each point: white card, left border in primary color
  
  - **Right Column (Visual):**
    - **Sprint Cycle Diagram** (SVG)
      - 5 numbered circles around central "Sprint" circle
      - Connecting arrows showing cycle flow
      - Labels: Plan → Execute → Review/Demo → Improve → Deliver
    - Status badge: "Update Diagram"

**Section 4: SCRUM Process Benefits**
- **Title:** "SCRUM Process Benefits - Why SCRUM is optimal"
- **6-Column Grid** of benefit cards:
  1. Transparency & Control
  2. Flexible & Adaptive
  3. High Quality
  4. Efficient Team
  5. Risk Reduction
  6. Optimal ROI
- **Each Card:** Icon + title + description

**Section 5: Client Journey Timeline**
- **Title:** "Your Journey with HKIncotech - 6 phases from contact to live"
- **Timeline Design:**
  - 6 phases with vertical layout
  - Phase circles, connecting lines
  - Phase description cards
  - Timeline for each phase:
    1. Phase 1: Initial Consultation (1 Week)
    2. Phase 2: Discovery & Design (2-3 Weeks)
    3. Phase 3: Sprint Development (6-12 Weeks)
    4. Phase 4: QA & Testing (2-3 Weeks)
    5. Phase 5: Launch & Deployment (1 Week)
    6. Phase 6: Support & Growth (Ongoing)

**Visual Design Notes:**
- Numbered badges for process steps
- Timeline with connecting lines and circles
- White cards with left colored border (primary)
- SVG diagrams for process flows
- Clear visual hierarchy showing phases

---

### 2.5 TECHNOLOGY STACK PAGE (/tech-stack)
**File:** `resources/views/landing_page/tech-stack.blade.php` (308 lines)  
**Purpose:** Demonstrate technical expertise, platform coverage, capabilities  
**Target Audience:** CTO, technical leads, engineers evaluating partners

#### Sections:

**Section 1: Hero Section**
- **Headline:** "Technology & Tech Stack"
- **Subheadline:** "Enterprise-grade technology: scalable, secure, reliable. Industry-proven standards."

**Section 2: Complete Tech Stack Matrix**
- **Title:** "Complete Tech Stack - From frontend to cloud infrastructure"
- **8-Column Grid** of tech category cards:
  1. **Frontend** - React, Vue, Angular, TypeScript, responsive design, PWA, SEO
  2. **Backend & API** - Node.js, Python, Java, Go, REST APIs, GraphQL, microservices
  3. **Data & Database** - PostgreSQL, MySQL, MongoDB, Redis, Elasticsearch, BigQuery, ETL
  4. **Cloud & Infrastructure** - AWS, GCP, Azure, Kubernetes, Docker, CI/CD, monitoring
  5. **Security & Compliance** - SSL/TLS, OWASP, GDPR, security scanning, DDoS protection
  6. **DevOps & Tools** - Git, Docker, Terraform, monitoring, issue tracking
  7. **Mobile & Cross-Platform** - React Native, Flutter, iOS, Android, PWA, offline
  8. **AI & Machine Learning** - OpenAI, Claude, LLMs, vector databases, model training

**Each Card:**
- Gradient header: primary color background + white icon + white title
- List of technologies with checkmark icons
- Technology items displayed as list items with separators

**Section 3: Performance Metrics**
- **Title:** "Performance Metrics - Enterprise-grade targets"
- **6-Column Grid** of metric cards:
  - 99.99% Uptime SLA
  - <100ms API Response Time
  - >95 Google Lighthouse Score
  - <3s Page Load Time
  - 100/100 Security Grade
  - >90% Test Coverage
- **Each Card:** Metric number (large) + label + description

**Section 4: Multi-Platform Coverage**
- **Title:** "Multi-Platform Coverage - Web, mobile, desktop"
- Platform coverage details for Web, Mobile (iOS/Android), Desktop, Progressive Web Apps

**Additional Subsections:**
- Best Practices & Standards
- Integration Capabilities
- Performance & Scalability

**Visual Design Notes:**
- Gradient headers on tech cards (primary color)
- Checkmark icons for technology lists
- Metric cards with large numbers in primary color
- 3-column responsive grid layout (auto-fit minmax 280px)

---

### 2.6 SCALING & INFRASTRUCTURE PAGE (/scaling)
**File:** `resources/views/landing_page/scaling.blade.php`  
**Purpose:** Demonstrate infrastructure expertise, scalability roadmap, growth planning  
**Target Audience:** Founders, CTOs, technical decision-makers planning for growth

#### Sections:

**Section 1: Hero Section**
- **Headline:** "Scaling & Infrastructure"
- **Subheadline:** "From small MVP to 10 million users. 6 scaling phases with 99.99% SLA, auto-scaling, 24/7 monitoring."
- **Supporting Copy:** "We have scaled 50+ projects from 0 to millions of users."

**Section 2: 6 Scaling Phases Timeline**
- **Title:** "6 Scaling Phases - Roadmap from MVP to enterprise-scale infrastructure"
- **Single Column Timeline** (6 detailed phase cards):

  **Phase 1: Proof of Concept (MVP)**
  - Users: < 1K
  - Timeline: 0-3 months
  - Architecture: Monolithic + Simple DB
  - Description: Start simple, focus on product-market fit
  - Tech Stack: Single instance (EC2/Compute) + RDS/Cloud SQL
  - Cost: $500-2K/month

  **Phase 2: Early Growth**
  - Users: 1K - 50K
  - Timeline: 3-6 months
  - Architecture: Load Balanced + Read Replicas
  - Tech Stack: Load Balancer + 2-3 instances + Master-Slave DB
  - Cost: $2K-5K/month

  **Phase 3: Scaling Out**
  - Users: 50K - 500K
  - Timeline: 6-12 months
  - Architecture: Microservices + Kubernetes
  - Tech Stack: K8s cluster + 5-10 service replicas + Redis + CDN
  - Cost: $5K-15K/month

  **Phase 4: Multi-Region**
  - Users: 500K - 5M
  - Timeline: 12-18 months
  - Architecture: Multi-region + Database Sharding
  - Tech Stack: 3+ regions, sharded DB, global failover
  - Cost: $15K-50K/month

  **Phase 5: Hyper-Scale**
  - Users: 5M - 100M
  - Timeline: 18-24 months
  - Architecture: Event-Driven + Data Warehouse
  - Tech Stack: Message queues + Streaming + Data lake + Analytics
  - Cost: $50K-200K/month

  **Phase 6: Enterprise Scale**
  - Users: > 100M
  - Timeline: 24+ months
  - Architecture: Custom Infrastructure + Edge Computing
  - Tech Stack: Global edge network + Custom DBs + Proprietary infra
  - Cost: $200K+/month

**Each Phase Card:**
- 3-column grid layout (title/phase | users/timeline/cost | architecture box)
- Description paragraph
- Tech stack details
- Border and shadow on hover

**Section 3: Performance Metrics**
- **Title:** "Performance Excellence - Enterprise-grade SLA and benchmarks"
- **8-Column Grid** of metric cards:
  - 99.99% Uptime SLA
  - <100ms API Response Time
  - <3s Page Load Time
  - >95 Lighthouse Score
  - 0ms Zero-downtime Deploy
  - 24/7 SOC Monitoring
  - 1sec Auto-recovery Time
  - 99.9% Database Availability

**Section 4: Call-to-Action Section**
- **Background:** Linear gradient (primary → primary-light)
- **Text Color:** White
- **Heading:** "Ready to Scale?"
- **Subheading:** "We have experience scaling from 0 to 100M users. Let's build infrastructure for the future."
- **CTA Button:** "Scaling Consultation" → `landing.contact`

**Visual Design Notes:**
- Timeline layout with phase progression
- Information boxes showing architecture and costs
- Metric cards with large numbers
- Gradient background for CTA section
- Vietnamese text integration (bilingual support visible in code)

---

### 2.7 CASE STUDIES PAGE (/case-studies)
**File:** `resources/views/landing_page/case-studies.blade.php` (316 lines)  
**Purpose:** Prove results, build confidence, show real-world impact  
**Target Audience:** Decision-makers researching proof of competency, success stories

#### Sections:

**Section 1: Hero Section**
- **Headline:** "Success Case Studies"
- **Subheadline:** "50+ projects, 100% client satisfaction. From startup MVPs to enterprise systems, we deliver results."

**Section 2: Portfolio Statistics**
- **Title:** Not shown, stats displayed in grid
- **6-Column Grid** of stat cards:
  - 50+ Projects Delivered
  - 10+ Industries Served
  - $1M Project Value (typical)
  - 99.99% Client Satisfaction
  - 12+ Years Expertise
  - 10+ Countries Reach
- **Design:** Large number (primary color) + label below

**Section 3: Featured Case Studies**
- **Title:** "Featured Projects - Representative solutions and outcomes"
- **Single-Column Layout** with 3-5 Featured Case Study Cards

  **Case Study 1: Education Platform - Scheduling Automation**
  - **Industry:** Education
  - **Challenge:** Manage 10K+ students, manual scheduling took 3 weeks/semester
  - **Solution:** Built AI-powered scheduling engine, analytics dashboard, automated attendance
  - **Results:**
    - Scheduling time: 3 weeks → 2 days
    - Data accuracy: 99.9%
    - 10K+ students managed
    - 98% adoption
    - 500+ hours/semester saved
  - **Tech:** Python, ML/AI, PostgreSQL, React, React Native
  - **Layout:** 2-column grid (left: content, right: results gradient box)

  **Case Study 2: Storage Management System (WMS)**
  - **Industry:** Logistics & Retail
  - **Challenge:** Manage 10M SKUs across 50+ branches, manual workflows, inaccurate data
  - **Solution:** Comprehensive WMS with barcode scanning, demand forecasting via ML, blockchain consignment
  - **Results:**
    - Inventory accuracy: 85% → 99.8%
    - Forecasting accuracy: 94%
    - Throughput: 1M+ transactions/day
    - Audit time reduced by 80%
    - Dead stock reduced by 35%
    - Cost savings: $15M/year
  - **Tech:** Python, Machine Learning, PostgreSQL, Redis, React, Node.js, Blockchain

  **Case Study 3: ERP Management System**
  - **Industry:** Enterprise Management
  - **Challenge:** 100+ employees, disparate modules, inventory-accounting sync issues
  - **Solution:** Integrated ERP (accounting, inventory, procurement, e-commerce, payroll, BI)
  - **Results:**
    - Consolidation: 3 days → 1 minute
    - Invoice processing effort reduced by 70%
    - Report generation: 2 hours → 5 minutes
    - Decision speed improved by 60%
    - 95% adoption within 2 months
  - **Tech:** Node.js, PostgreSQL, React, Python, Elasticsearch, AWS, Docker

  **Additional case studies** (marked as hidden in code, expandable):
  - E-Commerce Transformation
  - Mobile Banking App
  - Supply Chain Platform

**Each Case Study Card:**
- Industry badge (light background)
- Title (prominent heading)
- Challenge section (description)
- Solution section (detailed approach)
- Tech tags (small pills)
- Results section (right column with gradient background)
- Results displayed as bullet points or list items

**Visual Design Notes:**
- 2-column layout for case study cards (content left, results right)
- Industry badges with light background colors
- Gradient background for results sections
- Tech tags styled as small pills
- White cards with subtle borders and hover effects

---

### 2.8 PRICING PAGE (/pricing)
**File:** `resources/views/landing_page/pricing.blade.php` (284 lines)  
**Purpose:** Show pricing transparency, enable self-assessment, encourage contact  
**Target Audience:** Budget-conscious decision-makers, finance teams, new prospects

#### Sections:

**Section 1: Hero Section**
- **Headline:** "Flexible Plans Based on Needs"
- **Subheadline:** "Every project is unique. We customize pricing based on your scope, complexity, and timeline. No fixed packages, only solutions that fit."

**Section 2: Price Reference Guide**
- **Title:** "Price Reference Guide"
- **Subtitle:** "Prices below are reference only. Actual pricing depends on project-specific requirements"
- **3-Column Grid** of pricing plan cards:

  **Plan 1: MVP / Startup**
  - **Pricing:** $6,300 - $12,000/month
  - **Description:** MVP projects, prototypes, small web apps
  - **Highlighted:** No (white background)
  - **Features:**
    - 1-2 Full Stack Developer
    - Agile/Sprint Based (2-week sprints)
    - Core Features Development
    - Weekly Status Updates
    - Git Repo & Documentation
    - Basic Performance Optimization
    - Post-launch Support (30 days)
  - **CTA:** "Get Pricing Consultation" → `landing.contact`

  **Plan 2: Growth / Scale-up**
  - **Pricing:** $12,000 - $25,000/month
  - **Description:** Medium-sized apps, SaaS, platforms
  - **Highlighted:** Yes (gradient background, "Most Popular" badge)
  - **Features:**
    - 2-4 Full Stack Developers
    - Dedicated Project Manager
    - Advanced Architecture Design
    - Bi-weekly Demo & Review
    - Custom API Development
    - Performance Optimization
    - Security Best Practices
    - 90 Days Post-launch Support
    - Agile Ceremonies

  **Plan 3: Enterprise / Complex**
  - **Pricing:** $25,000+/month
  - **Description:** Complex systems, ERP, multi-module platforms
  - **Highlighted:** No
  - **Features:**
    - 4-8+ Full Stack Developers
    - Dedicated Team & Scrum Master
    - Enterprise-Grade Architecture
    - Daily Standups & Code Reviews
    - Microservices / Advanced Design
    - Security & Compliance Audit
    - Advanced Analytics & Reporting
    - 6-12 Months Support
    - Flexible Scaling

**Plan Card Design:**
- Gradient (primary) or white background
- "Most Popular" badge for highlighted plan
- Badge: positioned absolutely at top-center
- Price displayed as: From $X to $Y per month
- Features list with checkmark icons
- CTA button (white text on primary, or inverse)
- Hover effects: transform (translateY), shadow

**Section 3: What's Included in Every Project**
- **Title:** "Included in Every Project - Core services in all projects"
- **6-Column Grid** of service cards:
  1. **Modern Tech Stack** - React, Node.js, AWS, TypeScript, Python
  2. **Security First** - SSL, encryption, compliance
  3. **Clean APIs** - RESTful, well-documented, scalable
  4. **Cloud Infrastructure** - AWS/GCP, CDN, auto-scaling, backups
  5. **Performance Tracking** - Real-time monitoring, alerts, analytics
  6. **Full Documentation** - Code, API, deployment, best practices

**Each Service Card:**
- Icon (Material Symbols)
- Title
- Description
- White background with center text

**Section 4: Detailed Comparison Table**
- **Title:** "Detailed Comparison - Plan-by-plan breakdown"
- **Table Design:**
  - First column: Feature names
  - Columns for MVP, Growth, Enterprise plans
  - Checkmark icons for included features
  - Dash or "Contact us" for enterprise-only features
- **Features in table:**
  - Team size
  - Project duration options
  - Architecture complexity
  - Support duration
  - Testing coverage
  - Performance optimization
  - Security features
  - Post-launch support

**Visual Design Notes:**
- 3-column grid for pricing cards
- Gradient on highlighted plan
- Badge positioning (absolute top-center)
- Checkmark icons throughout
- Table for detailed feature comparison
- Primary color CTAs with hover effects

---

### 2.9 CERTIFICATIONS PAGE (/certifications)
**File:** `resources/views/landing_page/certifications.blade.php` (420 lines)  
**Purpose:** Demonstrate credentials, regulatory compliance, expertise validation  
**Target Audience:** Enterprise procurement, compliance officers, security auditors

#### Sections:

**Section 1: Hero Section**
- **Headline:** "Certifications & Industry Standards"
- **Subheadline:** "Enterprise-grade compliance, security certifications, and continuous professional development across our team"
- **CTA:** "Verify Our Credentials" → `landing.contact`

**Section 2: Compliance & Security Certifications**
- **Title:** "Compliance & Security Certifications"
- **Subtitle:** "Enterprise-grade security standards and regulatory compliance"
- **6-Column Grid** of certification cards:

  1. **ISO 27001** - Information Security Management
     - Icon: `shield_lock`
     - Description: International standard for information security management systems

  2. **SOC 2 Type II** - Service Organization Control
     - Icon: `verified`
     - Description: Validates security, availability, processing integrity, confidentiality, privacy controls

  3. **GDPR Compliant** - General Data Protection Regulation
     - Icon: `gavel`
     - Description: Data protection and privacy rights for EU citizens

  4. **PCI DSS** - Payment Card Industry Data Security
     - Icon: `credit_card`
     - Description: Secures payment card data and systems

  5. **HIPAA** - Health Insurance Portability
     - Icon: `health_and_safety`
     - Description: Protects healthcare data privacy and security

  6. **OWASP Standards** - Web Application Security
     - Icon: `lock`
     - Description: Industry best practices for secure web application development

**Each Certification Card:**
- Large icon (3rem)
- Certification name
- Subtitle (regulatory focus)
- Description
- White background with border
- Hover effects: border color change, shadow, transform

**Section 3: Cloud Provider Certifications**
- **Title:** "Cloud Provider Certifications"
- **Subtitle:** "Certified expertise across leading cloud platforms"
- **4-Column Grid** of cloud certification cards:

  1. **Amazon Web Services (AWS)**
     - Icon: `cloud`
     - Certifications:
       - AWS Certified Solutions Architect
       - AWS Certified DevOps Engineer
       - AWS Certified Solutions Architect - Professional
       - AWS Certified Advanced Networking

  2. **Google Cloud Platform**
     - Icon: `cloud`
     - Certifications:
       - Google Cloud Professional Cloud Architect
       - Google Cloud Associate Cloud Engineer
       - Google Cloud Professional Data Engineer
       - Google Cloud Professional Cloud Network Engineer

  3. **Microsoft Azure**
     - Icon: `cloud`
     - Certifications:
       - Azure Solutions Architect
       - Azure Administrator
       - Azure Developer Associate
       - Azure Security Engineer

  4. **Kubernetes & Container**
     - Icon: `settings`
     - Certifications:
       - Kubernetes Certified Application Developer (CKAD)
       - Certified Kubernetes Administrator (CKA)
       - Docker Certified Associate
       - Linux Foundation Certified

**Each Cloud Card:**
- Cloud provider icon
- Provider name
- List of certifications with Material Symbols checkmarks

**Additional Sections:**
- Professional Development & Training
- Team Expertise Overview
- Audit & Verification Information

**Visual Design Notes:**
- 6-column grid for compliance certs (responsive)
- 4-column grid for cloud certs
- Large icons with primary color
- White cards with subtle borders
- Certification names in heading style
- Hover effects with color and shadow changes

---

### 2.10 CONTACT PAGE (/contact)
**File:** `resources/views/landing_page/contact.blade.php` (226 lines)  
**Purpose:** Lead generation, accessibility, demonstrate responsiveness  
**Target Audience:** All visitors interested in engagement, sales pipeline

#### Sections:

**Section 1: Hero Section**
- **Headline:** "Get in Touch"
- **Subheadline:** "Have a project in mind? Let's talk about how we can help transform your vision into reality."

**Section 2: Contact Form & Information**
- **2-Column Layout:**

  **Left Column: Contact Form**
  - **Heading:** "Send us a Message"
  - **Form Fields:**
    1. Full Name (text input, required)
    2. Email Address (email input, required)
    3. Phone Number (tel input, optional)
    4. Company (text input, optional)
    5. Project Type (select dropdown, required)
       - Options: Custom Software, SaaS, Mobile, AI/ML, Cloud Migration, Other
    6. Project Budget (select dropdown, required)
       - Options: <$50K, $50K-100K, $100K-250K, $250K-500K, >$500K
    7. Tell us about your project (textarea, required, 150px min height)
  - **Submit Button:** "Send Message" with hover color effects
  - **Form Styling:**
    - White backgrounds for inputs
    - 1px border in --border color
    - 8px border-radius
    - Flexible column layout with 1.5rem gaps
    - Width: 100%

  **Right Column: Contact Information**
  - **Heading:** "Contact Information"
  - **4 Information Boxes** (secondary-bg background):

    1. **Headquarters**
       - Icon: `location_on`
       - Title: "Headquarters"
       - Address: Ho Chi Minh City, Vietnam
       - Details: 188 Duong So 1, +84 (0) 28 3824 0000

    2. **Singapore Office** (opacity: 0.75 - draft)
       - Icon: `business`
       - Title: "Singapore Office" + "Draft" badge
       - Address: Marina Bay, Singapore
       - Details: Central Business District, +65 6123 4567

    3. **Email**
       - Icon: `mail`
       - Title: "Email Us"
       - Links (primary color):
         - General Inquiry: hello@hkincotech.com
         - Sales: sales@hkincotech.com
         - Support: support@hkincotech.com

    4. **Business Hours**
       - Icon: `schedule`
       - Title: "Business Hours"
       - Hours:
         - Monday - Friday: 9:00 AM - 6:00 PM (ICT)
         - Saturday: 10:00 AM - 4:00 PM (ICT)
         - Sunday: Closed

**Information Box Design:**
- Secondary-bg background
- 2-column layout (icon left, content right)
- Icon: 2rem size in primary color, flex-shrink: 0
- Content: flex-grow, left margin
- Border-radius: 8px
- Padding: 2rem
- Margin-bottom between boxes

**Visual Design Notes:**
- 2-column grid (form left, info right)
- Form fields with consistent styling
- Information boxes with icon-text layout
- Icons in primary color
- Links styled in primary color
- Responsive stacking on mobile (1 column)

---

### 2.11 BLOG - R&D PAGE (/blog/r_and_d)
**File:** `resources/views/landing_page/blog/r_and_d.blade.php` (126 lines)  
**Purpose:** Establish thought leadership, showcase innovation focus, demonstrate expertise  
**Target Audience:** Technical audience, investors, partnership prospects

#### Sections:

**Section 1: Hero Section**
- **Badge:** "Deep Research & Innovation" (light blue background)
- **Headline:** "Our Core R&D Initiatives"
- **Subheadline:** "Pioneering technology platforms designed for tomorrow's enterprise demands. Explore our research-driven innovations in scalable systems and artificial intelligence."

**Section 2: R&D Articles**
- **2 Featured Article Includes** (dynamic components):
  - HKSpace Article (included partial: `blog/r_and_d/hkspace`)
  - AI Knowledge Platform Article (included partial: `blog/r_and_d/ai`)
- **Divider:** 1px line separating articles (--border color, 4rem margin)

**Section 3: Research Highlights**
- **Title:** "Research Capabilities"
- **Subtitle:** "Our multidisciplinary approach to building the future of enterprise software"
- **6-Column Grid** of research focus cards:

  1. **Scalable Architecture**
     - Icon: `architecture`
     - Title: "Scalable Architecture"
     - Description: Building systems designed to grow from hundreds to billions of users
     
  2. **AI & Machine Learning**
     - Icon: `psychology`
     - Title: "AI & Machine Learning"
     - Description: Leveraging cutting-edge AI/ML for complex business problems
  
  3. **Enterprise Security**
     - Icon: `security`
     - Title: "Enterprise Security"
     - Description: Zero-trust architecture, encryption-first design principles
  
  4. **Cloud Infrastructure**
     - Icon: `cloud`
     - Title: "Cloud Infrastructure"
     - Description: Multi-cloud strategies, geographic distribution, disaster recovery
  
  5. **Data Engineering**
     - Icon: `data_object`
     - Title: "Data Engineering"
     - Description: Real-time data pipelines, petabyte-scale analytics
  
  6. **Emerging Technologies**
     - Icon: `auto_awesome`
     - Title: "Emerging Technologies"
     - (incomplete in provided snippet)

**Each Research Card:**
- White background
- Large icon (2.5rem) in primary color
- Title (1.1rem, bold)
- Description (small, gray text)
- Border: 1px (--border color)
- Centered text alignment

**Included Partials Structure:**
- HKSpace article: `resources/views/landing_page/blog/r_and_d/hkspace.blade.php`
- AI article: `resources/views/landing_page/blog/r_and_d/ai.blade.php`
- (Both files included but full content not provided in initial read)

**Visual Design Notes:**
- Hero with badge (light background)
- White space between article sections
- Card-based layout for research highlights
- Primary color for icons
- Responsive grid layout (auto-fit minmax 280px)

---

## 3. Design System & Component Library

### 3.1 Color Palette

```css
--primary: #0f6b9e              /* Main brand color - Enterprise blue */
--primary-light: #1aa0d7        /* Lighter variant for gradients */
--secondary-bg: #f0f3f7         /* Light background for sections */
--text-dark: #1f2937            /* Primary text color */
--text-gray: #6b7280            /* Secondary text color */
--border: #e5e7eb               /* Border and separator color */
--success: #10b981              /* Green for success states */
--warning: #f59e0b              /* Orange for alerts/updates */
--danger: #ef4444               /* Red for errors */
```

### 3.2 Typography

**Font Family:** Inter (Google Fonts)
- **Weights:** 300 (light), 400 (regular), 600 (semibold), 700 (bold), 800 (extra bold)
- **Usage:**
  - H1: 3.5rem, weight 800, line-height 1.15
  - H2: 2.5rem, weight 800
  - H3: 1.3rem, weight 700
  - H4: 1.1rem, weight 700
  - Body: 1rem, weight 400, line-height 1.6
  - Small: 0.9rem, weight 400

### 3.3 Component Patterns

**Section Header (Standard)**
```
- Section title (H2): 2.5rem, weight 800, color: --text-dark
- Section subtitle: 1.15rem, color: --text-gray, line-height: 1.8
- Centered, max-width 900px
```

**Card (Generic)**
```
- White background
- Border: 1px solid --border
- Border-radius: 12px
- Padding: 2-2.5rem
- Transition: 0.3s ease
- Hover: border-color → --primary, box-shadow: 0 12px 30px rgba(15, 107, 158, 0.12)
```

**Gradient Header Card**
```
- Header: linear-gradient(135deg, --primary 0%, --primary-light 100%)
- Color: white
- Padding: 2rem
- Icon: 2.5rem, white, centered
- Title: white, bold, centered
```

**Button - Primary (btn-primary-v5)**
```
- Background: --primary
- Color: white
- Padding: Variable (0.75rem 1.5rem to 1rem 2.5rem)
- Border-radius: 8px
- Font-weight: 600
- Display: inline-flex
- Gap: 0.75rem (for icon)
- Transition: all 0.3s ease
- Hover: opacity 0.85 or backgroundColor lighter
```

**Button - Secondary (btn-secondary-v5)**
```
- Border: 1px solid --primary
- Color: --primary
- Background: white
- Padding: 0.75rem 1.5rem
- Border-radius: 8px
- Font-weight: 600
- Transition: all 0.3s ease
- Hover: backgroundColor → light primary
```

**Grid Layouts (Standard)**
```
- 3-column desktop: repeat(3, 1fr), gap: 2rem
- Auto-fit responsive: repeat(auto-fit, minmax(280px, 1fr)), gap: 2rem
- 2-column (desktop): 1fr 1fr, gap: 3-4rem
- Mobile: Switches to 1fr (single column)
```

**Hero Section (Standard)**
```
- Min-height: 60-90vh
- Display: flex
- Align-items: center
- Padding: 6rem 2rem
- Background: linear-gradient(135deg, #ffffff 0%, --secondary-bg 100%)
```

### 3.4 Icons (Material Symbols Rounded)

**Common icons used throughout:**
- Navigation: `arrow_forward`, `explore`, `menu`, `close`
- Actions: `code`, `workspace_premium`, `psychology`, `shield`, `location_on`, `mail`, `schedule`
- Status: `verified`, `check_circle`, `visibility`, `warning`, `error`
- Business: `business`, `architecture`, `analytics`, `storage`, `database`, `cloud`
- Features: `security`, `lock`, `credit_card`, `health_and_safety`, `gavel`

### 3.5 Spacing System

```
- Margin between sections: 4rem (4 * 1rem)
- Padding inside cards: 2-2.5rem
- Gap between grid items: 2rem
- Padding on hero: 6rem 2rem
- Small gaps (flex): 0.75rem, 1rem
- Large gaps (grid): 2-4rem
```

### 3.6 Border Radius

```
- Cards/Hero: 12px
- Buttons/Inputs: 8px
- Pills/Badges: 20px (border-radius: 50% or px-based)
- Small elements: 4-6px
```

---

## 4. Cross-Page Relationship Map

### Navigation Flow

```
Homepage (/)
├─ CTA: "Free Consultation" → Contact
├─ CTA: "View Services" → Services
├─ Service cards link → Services
└─ Case Study links → Case Studies

About Us (/about-us)
├─ Story timeline
├─ Values cards
└─ Team carousel

Services (/services)
├─ Service overview cards
├─ Link: "View Details" (Tech Stack) → Tech Stack
├─ Custom development details
├─ SaaS Platform section
└─ CTA: "Consult on Services" → Contact

SCRUM (/scrum)
├─ 6-step process cards
├─ Sprint cycle details
├─ Benefits section
├─ Client journey timeline
└─ CTA: "Consult on SCRUM" → Contact

Tech Stack (/tech-stack)
├─ 8 tech category cards
├─ Performance metrics
├─ Multi-platform coverage
└─ Link: Back to Services

Scaling (/scaling)
├─ 6 scaling phases
├─ Performance metrics
├─ Cost progression
└─ CTA: "Scaling Consultation" → Contact

Case Studies (/case-studies)
├─ Portfolio stats
├─ Featured case studies (3-5)
└─ Industry showcase

Pricing (/pricing)
├─ 3 pricing plan cards
├─ Feature comparison table
├─ What's included section
└─ CTA: "Get Pricing" → Contact

Certifications (/certifications)
├─ Compliance certifications (6)
├─ Cloud provider certs (4 providers)
├─ Professional development
└─ CTA: "Verify Credentials" → Contact

Contact (/contact)
├─ Contact form (7 fields)
├─ Contact information (4 sections)
├─ Email links
├─ Office locations
└─ Business hours

Blog - R&D (/blog/r_and_d)
├─ HKSpace article
├─ AI Knowledge Platform article
└─ Research capabilities grid
```

### Strategic CTAs

**Primary Goal: Contact Form Conversion**
- Homepage: "Free Consultation" button (hero)
- Services: "Get Services Consultation"
- SCRUM: "Consult on SCRUM Process"
- Scaling: "Scaling Consultation"
- Pricing: "Get Pricing Consultation"
- Certifications: "Verify Our Credentials"
- All links → `/contact`

**Secondary CTAs: Page Navigation**
- Services homepage card → `/services`
- Tech Stack link in Services → `/tech-stack`
- CTA in pricing → `/contact`

---

## 5. Key Performance Sections

### Lead Generation Opportunities

1. **Homepage Form-Less CTA** - "Free Consultation" button
2. **Services Page** - Detailed service cards with CTAs
3. **Pricing Page** - Price comparison with consultation CTA
4. **Contact Page** - Full contact form with 7 qualification fields
5. **All Pages** - Navigation menu Contact link always visible

### Trust-Building Elements

1. **Statistics**: 
   - 12+ Years Experience
   - 50+ Projects Completed
   - 99.99% Uptime SLA
   - 50+ Senior Engineers

2. **Case Studies**: 3-5 detailed success stories with metrics

3. **Certifications**: 
   - 6 compliance certifications
   - 4 cloud provider certifications
   - 10+ professional developer certs

4. **Process Transparency**:
   - 6-step SCRUM process
   - Sprint cycle details
   - Client journey timeline

### Value Proposition Anchors

1. **SCRUM Methodology** - "30-50% faster delivery"
2. **Scaling Expertise** - "0 to 100M users"
3. **Tech Stack** - "Enterprise-grade, modern technologies"
4. **Support** - "24/7 monitoring, dedicated teams"

---

## 6. Mobile Responsive Behavior

### Breakpoints & Layout Changes

**Desktop (1200px+)**
- 2-3 column grids
- Full header navigation visible
- Full width content sections

**Tablet (768px - 1199px)**
- 2-column grids collapse to appropriate layouts
- Services cards may show 2 per row
- Navigation hamburger menu appears

**Mobile (< 768px)**
- All grids: 1 column
- Hero sections: stacked text over image/SVG
- Hero height: reduced (not 90vh)
- Padding reduced: 3rem instead of 6rem
- Font sizes reduced ~10-15%
- Form full width, single column
- Navigation: hamburger menu only

### CSS Media Queries Used

```css
@media (max-width: 991px) { /* Tablet and below */
  .case-study-grid { grid-template-columns: 1fr !important; }
  .hero-grid { grid-template-columns: 1fr !important; }
}

@media (max-width: 767px) { /* Mobile */
  .hero { min-height: auto; padding: 3rem 0 !important; }
  .hero-grid { grid-template-columns: 1fr !important; gap: 2rem !important; }
  .hero h1 { font-size: 2rem !important; }
  .hero-stats { grid-template-columns: 1fr !important; }
}
```

---

## 7. SiteMap XML Structure (For Reference)

```xml
<urlset>
  <url><loc>/</loc><priority>1.0</priority></url>
  <url><loc>/about-us</loc><priority>0.9</priority></url>
  <url><loc>/services</loc><priority>0.95</priority></url>
  <url><loc>/scrum</loc><priority>0.8</priority></url>
  <url><loc>/tech-stack</loc><priority>0.8</priority></url>
  <url><loc>/scaling</loc><priority>0.8</priority></url>
  <url><loc>/case-studies</loc><priority>0.9</priority></url>
  <url><loc>/pricing</loc><priority>0.85</priority></url>
  <url><loc>/certifications</loc><priority>0.7</priority></url>
  <url><loc>/contact</loc><priority>0.95</priority></url>
  <url><loc>/blog/r_and_d</loc><priority>0.7</priority></url>
</urlset>
```

---

## 8. Content Strategy & Messaging Hierarchy

### Per-Page Messaging Focus

| Page | Primary Message | Secondary Message | Conversion Goal |
|------|-----------------|-------------------|-----------------|
| Home | "Enterprise Development Partner" | Capabilities overview | Contact form |
| About | Company credibility & story | Mission & values, team | Contact form |
| Services | "We solve complex problems" | Service breadth, process | Contact form |
| SCRUM | "Transparent, agile process" | Methodology benefits | Contact form |
| Tech Stack | "Modern, enterprise-grade tech" | Platform coverage | Tech credibility |
| Scaling | "We scale businesses" | Infrastructure roadmap | Contact form |
| Case Studies | "Proven results" | Success metrics, diversity | Contact form |
| Pricing | "Transparent, flexible pricing" | Plan comparison | Contact form |
| Certs | "Enterprise-compliant" | Credential validation | Trust building |
| Contact | "Let's build together" | Multi-channel access | Form submission |
| Blog R&D | "Innovation leadership" | Thought leadership | Engagement |

---

## 9. Future Enhancement Opportunities

### Identified Draft/Incomplete Areas

1. **Leadership Team Page (About Us)**
   - Status: Draft with placeholder names
   - Recommendation: Add real team member photos, bios, LinkedIn links

2. **Singapore Office Info (Contact)**
   - Status: Draft with placeholder info
   - Recommendation: Add actual address, phone, contact person

3. **SCRUM Cycle Diagram (Services)**
   - Status: "Update Diagram" badge
   - Recommendation: Enhanced visual with animated transitions

4. **Sprint Cycle Diagram (SCRUM)**
   - Status: "Update Diagram" badge
   - Recommendation: Interactive or animated version

5. **HKSpace SaaS (Homepage)**
   - Status: Hero banner shows "Update banner" badge
   - Recommendation: Add actual dashboard screenshot/demo

6. **Blog Articles (R&D)**
   - Status: Partial includes (hkspace.blade.php, ai.blade.php)
   - Recommendation: Complete full article content with detailed methodology

### Content Expansion Ideas

1. **Customer testimonials** - Add dedicated testimonial section
2. **Team member profiles** - Complete leadership page with real bios
3. **Blog archive** - Expand R&D section with multiple articles
4. **Case study details** - Link to expanded individual case study pages
5. **Process documentation** - Create detailed onboarding guides
6. **Resource library** - Whitepapers, guides, webinars
7. **Partner programs** - Technology partner listings
8. **Careers page** - Job listings, company culture
9. **Event schedule** - Webinars, conferences, meetups
10. **Client stories** - Video testimonials, featured clients

---

## 10. Wireframing Foundation

### Page Layout Templates

**Template 1: Hero + Content Sections (Homepage, Services, Pricing)**
```
┌─── HEADER ────────────────────────────────┐
│ Logo | Nav Links | CTA Button             │
└───────────────────────────────────────────┘
┌─── HERO SECTION ──────────────────────────┐
│ Title | Subtitle | CTA Buttons | Visual   │
├─────────────────────────────────────────── │
│ SECTION 1: Title & Cards Grid             │
│ ┌──────┐ ┌──────┐ ┌──────┐               │
│ │Card 1│ │Card 2│ │Card 3│               │
│ └──────┘ └──────┘ └──────┘               │
├─────────────────────────────────────────── │
│ SECTION 2: 2-Column Detailed Content      │
│ ┌──────────────┐ ┌──────────────┐        │
│ │Text Content  │ │Visual/Diagram│        │
│ └──────────────┘ └──────────────┘        │
├─────────────────────────────────────────── │
│ SECTION 3: Feature Grid                   │
│ ┌──────┐ ┌──────┐ ┌──────┐ ┌──────┐    │
│ │Card 1│ │Card 2│ │Card 3│ │Card 4│    │
│ └──────┘ └──────┘ └──────┘ └──────┘    │
├─────────────────────────────────────────── │
│ SECTION 4: Call-to-Action / Timeline      │
└─────────────────────────────────────────── │
┌─── FOOTER ────────────────────────────────┐
│ Columns: Services | Company | Resources   │
│ Copyright & Legal Links                   │
└───────────────────────────────────────────┘
```

**Template 2: Minimal + Form (Contact Page)**
```
┌─── HEADER ────────────────────────────────┐
│ Logo | Nav Links | CTA Button             │
└───────────────────────────────────────────┘
┌─── HERO SECTION ──────────────────────────┐
│ Title | Subtitle (Centered)               │
├─────────────────────────────────────────── │
│ 2-Column Content Section                  │
│ ┌──────────────┐ ┌──────────────┐        │
│ │ Contact Form │ │Info Boxes    │        │
│ │ (7 Fields)   │ │ (4 cols)     │        │
│ └──────────────┘ └──────────────┘        │
├─────────────────────────────────────────── │
│ Optional: Additional Info Section         │
└─────────────────────────────────────────── │
┌─── FOOTER ────────────────────────────────┐
│ Columns: Services | Company | Resources   │
│ Copyright & Legal Links                   │
└───────────────────────────────────────────┘
```

### Wireframe Grid System

**Desktop (1200px+)**
- 12-column grid base
- Full width sections with container (max-width: 1400px)
- 2-3 column content areas

**Tablet (768px-1199px)**
- 8-column grid base
- Adjusted container width
- 2-column or full-width content

**Mobile (< 768px)**
- 4-column grid base
- Full width minus gutters (2rem padding)
- 1-column content only

### Key Component Positions

**Across All Pages:**
1. Top: Header/Navigation (fixed/sticky)
2. Below Nav: Hero section with large CTA
3. Middle: 2-4 content sections (cards, text, etc.)
4. Bottom: Footer with links and legal

**Secondary Elements:**
- Icons: Left or above text
- CTAs: Right-aligned or centered
- Badges: Top-right of cards or inline
- Dividers: Subtle 1px line with margin

---

## 11. Design Quality Assurance Checklist

- [ ] All pages have consistent header/footer
- [ ] Color scheme uses --primary, --text-dark, --text-gray, --border, --secondary-bg
- [ ] All CTAs link to correct routes
- [ ] Spacing follows 2rem/4rem convention
- [ ] All sections have title + subtitle pattern
- [ ] Cards use consistent border (1px --border), radius (12px)
- [ ] Buttons use consistent padding, hover effects
- [ ] Icons from Material Symbols Rounded set
- [ ] Typography follows hierarchy (H1: 3.5rem, H2: 2.5rem, etc.)
- [ ] Gradient sections use primary → primary-light
- [ ] Responsive grids use auto-fit minmax pattern
- [ ] Mobile media query rules applied (max-width: 767px, 991px)
- [ ] All images/SVGs have proper aspect ratio
- [ ] Form fields styled consistently
- [ ] Hover states applied to all interactive elements
- [ ] Accessibility: alt text on images, semantic HTML

---

## 12. Implementation Notes for Wireframing

### When Creating Wireframes from This Sitemap:

1. **Use the page templates** provided in Section 10 as baseline layouts
2. **Mark all CTAs** with clear button styles and destination routes
3. **Include placeholder dimensions** for images/videos (aspect ratios noted)
4. **Identify interactive elements**: Carousels, modals, dropdowns
5. **Note responsive breakpoints** where layout changes (768px, 991px)
6. **Annotate section spacing** (4rem between major sections)
7. **Reference color codes** from Section 3.1 for quick implementation
8. **Include icon references** with exact Material Symbols names
9. **Document form fields** with validation requirements
10. **Map all navigation links** back to route names (`landing.*`)

### Suggested Wireframing Tools:
- **Figma:** Native export to design system, grid tools
- **Balsamiq:** Quick wireframe mockups, good for showing structure
- **Adobe XD:** Prototype interactive flows
- **Draw.io:** Simple grid-based layouts

---

## Conclusion

This sitemap provides a complete architectural blueprint of the HKIncotech landing page, documenting:

✅ **11 main pages** with 40+ distinct sections  
✅ **Page-by-page structure** with heading hierarchy, content blocks, CTAs  
✅ **Component library** with reusable design patterns  
✅ **Cross-page relationship mapping** showing navigation flows  
✅ **Design system** with colors, typography, spacing, icons  
✅ **Responsive guidelines** for mobile, tablet, desktop  
✅ **Wireframing foundation** ready for detailed design  
✅ **Content strategy** aligned with conversion goals  
✅ **Enhancement opportunities** for future expansion  

### Ready to Use For:
- Creating detailed wireframes in Figma, Adobe XD, or Balsamiq
- Identifying content gaps or improvements
- Planning updates to website strategy
- Onboarding designers and developers
- Reference for rebuilding or redesigning pages
- A/B testing different section layouts
- User flow analysis and optimization

---

**Document Version:** 1.0  
**Status:** Complete - Ready for Wireframing  
**Next Step:** Use this as reference to create detailed wireframes in `wireframe/` folder
