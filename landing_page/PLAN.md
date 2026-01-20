# HKIncotech Landing Page - PHP Project Structure & Plan

## Project Overview
Professional software company website - Tổng hợp tất cả ý tưởng từ landing_page 1-5 thành 1 project PHP hoàn chỉnh.

---

## File Structure
```
landing_page/
├── _header.php          (HTML5, Bootstrap CDN, Material Icons, CSS global)
├── _footer.php          (Footer toàn bộ trang)
├── assets/
│   ├── css/
│   │   ├── global.css   (Variables, theme, animations)
│   │   └── pages.css    (Page-specific styles)
│   └── js/
│       └── main.js      (Navigation, scroll effects)
├── home.php             (Hero + About + Services Preview + Stats)
├── services.php         (4 Services Detailed + Capabilities Grid)
├── scrum.php            (SCRUM Process + Journey + Why Choose)
├── tech-stack.php       (Technology Matrix + Best Practices)
├── scaling.php          (Infrastructure + 6 Phases Timeline)
├── pricing.php          (Pricing Plans + CTA)
├── contact.php          (Contact Form + Info)
├── about.php            (Company Story + Team + Culture)
├── case-studies.php     (Portfolio + Results)
└── index.php            (Redirect to home.php)
```

---

## Pages Design & Content Plan

### 1. _header.php
**Features:**
- Sticky header with logo
- Navigation menu (Home, Services, SCRUM, Tech, About, Pricing, Contact)
- CTA button "Bắt Đầu"
- Mobile-responsive navbar
- Active page highlighting
- Bootstrap CDN + Material Symbols Rounded

### 2. _footer.php
**Features:**
- 4 columns: Company, Services, Technology, Links
- Contact info
- Social links
- Copyright
- Dark footer with light text

### 3. home.php
**Sections:**
1. **Hero** (gradient, CTA buttons, 3 stats) - từ LP 1-5
2. **Services/Capabilities** (4 cards với bullet points chi tiết) - từ LP 1, 5
3. **Technology Stack Preview** (4 categories grid) - từ tech-stack.php
4. **SCRUM Process Preview** (6 steps overview) - từ scrum.php
5. **Scaling Journey** (6 phases compact timeline) - từ scaling.php
6. **Why Choose Us** (6 value propositions) - từ about.php
7. **Featured Case Study** (1 success story highlight) - từ case-studies.php
8. **Client Testimonials** (3 testimonial cards) - từ case-studies.php
9. **CTA Banner** (Contact + Pricing links)

**Flow Story:**
- Hero → Grab attention với value proposition
- Services → Show WHAT we do (4 core offerings)
- Tech Stack → Show HOW we build (technology)
- SCRUM → Show HOW we work (process)
- Scaling → Show HOW we grow (infrastructure journey)
- Why Choose → Show WHY us (competitive advantages)
- Case Study → Show PROOF (real results)
- Testimonials → Show TRUST (client voices)
- CTA → Drive ACTION (contact/pricing)

### 4. services.php
**Sections:**
- Hero (Services Title)
- 4 Main Services (detail cards):
  - Custom Software Development
  - SaaS Platform (HKSpace)
  - AI Knowledge Platform
  - Security & Compliance
- Capabilities Grid (từ LP 1, 3)
- Service Timeline
- Industries Served
- CTA

### 5. scrum.php (Quy Trình SCRUM)
**Sections:**
- Hero: SCRUM Methodology
- 6-Step SCRUM Process (từ LP 4, 5)
- Sprint Cycle Details
- Client Journey Timeline (từ LP 4, 5)
- Why SCRUM Benefits
- Comparison: Traditional vs Agile
- CTA

### 6. tech-stack.php
**Sections:**
- Hero: Technology Stack
- 4 Tech Categories (Frontend, Backend, Data, Cloud) - từ LP 1, 3, 5
- Best Practices from Big Tech (từ LP 5)
- Architecture Diagram
- Integration & API Section
- CTA

### 7. scaling.php (Infrastructure)
**Sections:**
- Hero: Scaling & Infrastructure
- 6 Phases Timeline (từ LP 1, 2, 5)
- Performance Metrics
- Case Study: Scaling Story
- Security & Compliance (từ LP 1, 3)
- SLA Overview
- CTA

### 8. about.php
**Sections:**
- Company Story
- Team Section (4 leaders with avatars)
- Culture & Values
- Why Work With Us (6 cards)
- Achievements & Milestones
- Contact CTA

### 9. case-studies.php
**Sections:**
- Portfolio Hero
- 6-8 Case Studies (từ LP 1, 5):
  - E-commerce Platform
  - FinTech Solution
  - Healthcare AI
  - Supply Chain
  - SaaS Platform
  - etc.
- Results & Metrics
- Industry Coverage
- CTA

### 10. pricing.php
**Sections:**
- Pricing Hero
- 3 Pricing Plans (từ LP 4, 5)
- Features Comparison Table
- What's Included
- FAQ
- Contact for Custom Quote
- CTA

### 11. contact.php
**Sections:**
- Contact Hero
- Contact Form (left) + Info (right)
- Multiple Contact Methods
- Office Location Map
- Business Hours
- Response Time Info
- Social Links

### 12. index.php
- Redirect hoặc load home.php

---

## Design System

### Color Scheme
- Primary: #0f6b9e (Navy/Teal)
- Primary Light: #1a8fb8
- Primary Dark: #0a4a6b
- Accent: #059669 (Green)
- Accent Light: #d1fae5
- Secondary BG: #f8fafc (Light)
- Text Dark: #0f172a
- Text Gray: #475569
- Text Light: #64748b
- Border: #e2e8f0

### Typography
- Font: Inter (Google Fonts)
- Headings: 800 weight
- Body: 400-500 weight
- Sizes: 3rem (h1), 2.2rem (h2), 1.5rem (h3), etc.

### Components
- Buttons: Primary (filled), Secondary (outline), Ghost
- Cards: Hover effects, border animations
- Forms: Clean, accessible
- Navigation: Smooth transitions

### Animations
- Smooth scrolling
- Fade-in on scroll
- Hover effects
- Transitions: 0.3s ease

---

## Content Strategy

### Key Messages
1. Enterprise-grade software solutions
2. SCRUM-based development process
3. 12+ years experience
4. 150+ projects completed
5. 80+ satisfied clients
6. 99.99% uptime SLA
7. Scalable from MVP to 10M+ users

### CTA Placement
- Header: "Bắt Đầu" button
- Hero: Primary CTA (Tư Vấn Miễn Phí) + Secondary (Khám Phá)
- Mid-page: Section CTAs
- Bottom: Contact CTA
- Footer: Links

### SEO & Meta
- Each page has unique title, description
- Structured data for schema.org
- Mobile-first design
- Fast loading (critical CSS inline)

---

## Development Notes

### Global Assets
- Bootstrap 5 CDN (CSS + JS)
- Material Symbols Rounded (Icons)
- Inter Font (Google Fonts)
- Global CSS (variables, resets, utilities)
- Main JS (navigation, scroll effects)

### PHP Includes
- Each page includes _header.php at top
- Each page includes _footer.php at bottom
- Common variables: $page_title, $page_active, etc.

### Responsive Breakpoints
- Desktop: 1400px
- Tablet: 991px
- Mobile: 767px

---

## Implementation Order
1. Create _header.php
2. Create _footer.php
3. Create global assets (CSS, JS)
4. Create home.php
5. Create services.php
6. Create scrum.php
7. Create tech-stack.php
8. Create scaling.php
9. Create about.php
10. Create case-studies.php
11. Create pricing.php
12. Create contact.php
13. Create index.php

---

## Features to Include
✅ SCRUM process (6 steps)
✅ Scaling infrastructure (6 phases)
✅ Technology stack (4 categories)
✅ Service details (4 services)
✅ Client journey timeline
✅ Pricing plans (3 tiers)
✅ Best practices from Big Tech
✅ Case studies
✅ Contact form
✅ Team section
✅ Security & compliance
✅ Responsive design
✅ Accessibility (a11y)
✅ Performance optimized
✅ Professional UI/UX
