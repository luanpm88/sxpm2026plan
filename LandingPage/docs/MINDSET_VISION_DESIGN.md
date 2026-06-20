# HKIncotech Site Mindset, Vision & Design Source of Truth

This document is the reference for future copy, UI, illustration, and section updates on the HKIncotech landing site. Read this before changing homepage positioning, service copy, use cases, visual diagrams, or dark mode.

## Positioning

HKIncotech should be presented as an engineering partner for enterprise software systems, not as a generic outsourcing vendor and not as a single-product marketing site.

Core statement:

- VI: Hoang Khang la doi tac ky thuat thiet ke, phat trien va van hanh he thong phan mem doanh nghiep.
- EN: Hoang Khang is an engineering partner for enterprise software systems.

Use "phan mem theo yeu cau" only as a service category, not as the main brand idea. The broader story is enterprise systems: internal platforms, SaaS, digital products, data integration, applied AI, infrastructure modernization, security, delivery governance, and long-term operations.

## Audience

Primary readers are founders, CEOs, CTOs, operations leaders, factory managers, and enterprise buyers evaluating whether the team has enough depth to handle real systems.

The site should feel like a capability profile from a serious software engineering firm:

- Calm, precise, and board-level.
- Concrete about operating context, risk, ownership, and delivery.
- Confident without false precision or exaggerated claims.
- Technical enough to earn trust, but still readable for non-technical decision makers.

## Vietnamese Voice

Vietnamese copy must be written natively, not translated sentence-by-sentence from English.

Prefer:

- "he thong phan mem doanh nghiep"
- "bai toan van hanh"
- "tieu chi nghiem thu"
- "KPI/SLA van hanh"
- "kiem soat rui ro"
- "kien truc co the mo rong"
- "ban giao ro rang"
- "so huu ma nguon va tai lieu"
- "chuan nganh va quy trinh nghiep vu"
- "do luong hieu qua"

Avoid:

- Literal translated phrases such as "Doi tac trien khai tin cay", "Nghe quen khong?", "hang dau the gioi" without proof.
- Generic marketing words that do not say anything operational.
- Fabricated metrics, exact percentages, and large money claims unless backed by real data.
- Repeating "phan mem theo yeu cau" as the only value proposition.

## Design Principles

- Palette: official logo/brand navy is `#183060`. Use CSS variables, not hardcoded colors, except in source logo assets where required.
- Text: high-contrast black/near-black in light mode; legible white/near-white in dark mode.
- Font weight: maximum visual weight is 600. Use hierarchy through spacing, size, composition, and contrast, not 700/800/900 weight.
- Illustration: diagrams must explain the content. Avoid decorative blobs, faint background art that cannot be read, or generic icons repeated without meaning.
- Dark mode: no pale-blue cards with white text. Contrast panels must use tokenized contrast variables.
- Layout: align icons, headings, and card content with stable grid tracks. No accidental wrapping caused by equal-width metric columns.
- Use cases: show operating context, solution architecture, stack, engineering patterns, governance, and realistic outcomes. Do not make result numbers look fabricated.

## Capability Themes

The site should repeatedly communicate these six ideas:

1. Domain and process modeling: understand the real operating workflow before writing code.
2. Architecture and integration: design systems around data, roles, APIs, reliability, and scale.
3. Delivery governance: sprint reviews, acceptance criteria, traceability, and phased rollout.
4. Security and risk: access control, audit logs, data protection, and secure engineering practices.
5. Measurement and operations: KPI/SLA targets, observability, incident handling, and cost/performance controls.
6. Handover and ownership: source code, documentation, deployment guidance, and reduced vendor/person dependency.

## Standards Lens

The site can reference standards as a design mindset, not as unsupported certification claims:

- ISO 9001: quality management, process control, performance evaluation, and continual improvement.
- ISO/IEC 27001 and NIST CSF: information security risk, governance, protection, detection, response, and recovery.
- OWASP ASVS: application security verification, authentication, access control, data protection, and secure APIs.
- WCAG: accessibility, contrast, keyboard access, readable content, and usable interfaces.

## Use Case Content Model

Each use case should answer:

- Context: where the system operates.
- Problem: what was slowing decisions, data flow, delivery, or control.
- Architecture: what type of system was built.
- Practices: which engineering patterns and controls were applied.
- Outcome: qualitative or backed result, written without false precision.

