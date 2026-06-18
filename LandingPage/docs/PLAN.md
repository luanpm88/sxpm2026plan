# HKIncotech Landing Site Upgrade Plan

## Goal

Raise `demo.hkincotech.com` from a polished marketing template into a senior, boardroom-ready capability profile for Hoang Khang / HKIncotech:

- Custom software engineering partner for executives, founders, and operation leaders.
- Owner/operator of real platforms such as HKSpace and Yolius, not just a service vendor.
- Tone comparable to a top software engineering firm: precise, calm, credible, and technically grounded.
- UI language: restrained enterprise navy, crisp black text, no faded copy, no flag-first language selector, no decorative SVGs that feel generic.

## Quality Bar

- **Voice:** professional, specific, executive-readable. No generic SaaS hype, fake metrics, or "book a 30-minute call" style sales copy on capability pages.
- **Typography:** all navigation, body, labels, captions, and cards must be clearly legible. Muted text still reads as black/slate, not washed-out gray.
- **Spacing:** section headers must not float in excessive empty space; each first viewport should communicate hierarchy, proof, and a next action.
- **Visuals:** every SVG/diagram must explain an engineering idea: architecture, delivery governance, platform ownership, security, data flow, integration, manufacturing process, or rollout model.
- **Dark mode:** no patchwork selector hacks. Dark mode must be token/component driven and audited section by section.
- **Language switcher:** use a globe + explicit language names. Avoid flag-only UI.
- **Implementation style:** design-system first. Prefer CSS variables and reusable component classes over one-off inline styling.
- **Verification:** screenshot every key page in light and dark, at desktop/mobile, with zoomed section crops. Iterate until findings are closed.

## Pages In Scope

- `/vi` and `/en`
- `/vi/services` and `/en/services`
- `/vi/scrum` and `/en/scrum`
- `/vi/tech-stack` and `/en/tech-stack`
- `/vi/certifications` and `/en/certifications`
- `/vi/case-studies` and `/en/case-studies`
- `/vi/about-us` and `/en/about-us`
- `/vi/pricing` and `/en/pricing`
- `/vi/contact` and `/en/contact`
- `/vi/solutions/sme-manufacturing` and `/en/solutions/sme-manufacturing`

## Workstreams

### 1. Strategy & Audit

- [x] Capture user feedback from screenshots:
  - Services hero has too much empty space and lacks visual proof.
  - Current SVG diagrams are too simple and not top-notch.
  - White logo must be fully white on dark backgrounds.
  - Dark mode has many broken light-blue cards and weak contrast.
  - Language switcher must not be flag-only.
  - SME Manufacturing page needs diagrams, icons, and stronger information architecture.
- [x] Create current-state screenshot pack for all scoped pages.
- [x] Create dark-mode screenshot pack for all scoped pages.
- [x] Create mobile screenshot pack for representative pages.
- [ ] Create zoomed/cropped section audit pack for high-risk sections.
- [ ] Record open findings in this file after each audit loop.

### 2. Design System Foundation

- [x] Replace high-risk inline visual patterns with reusable component classes.
- [ ] Establish typography tokens:
  - `--text-strong`
  - `--text-body`
  - `--text-muted`
  - `--heading-tight`
  - `--section-kicker`
- [x] Establish section spacing tokens:
  - compact hero
  - standard section
  - dense proof band
  - CTA band
- [x] Establish diagram/card tokens:
  - surface
  - elevated surface
  - dark surface
  - blueprint line
  - diagram node
  - diagram accent
- [x] Replace broad dark-mode `[style*=...]` rescue rules for white backgrounds with component-level styles.
- [x] Ensure logo white treatment is consistent in dark header/footer/CTA.
- [x] Replace flag language button with globe + "Tiếng Việt" / "English" dropdown.

### 3. Content & Voice Rewrite

- [x] Rewrite Vietnamese copy first for professional capability-profile tone.
- [x] Rewrite English copy to match the same senior voice, not a literal translation.
- [ ] Remove generic claims that sound like product marketing.
- [x] Emphasize:
  - Custom software engineering.
  - Long-term system ownership.
  - Platform experience through HKSpace / Yolius / internal products.
  - Delivery governance, architecture, security, maintainability.
  - Use cases and client capability proof.
- [ ] Audit all CTA copy: no unnecessary sales microcopy on profile pages.
- [ ] Audit all fake or overly precise metrics again.

### 4. Visual & Diagram Upgrade

- [x] Replace weak sprint-cycle SVG with a more credible delivery operating model diagram.
- [ ] Replace simple service diagrams with architecture / system-flow diagrams.
- [ ] Improve homepage/service proof sections with concise capability visual cues.
- [x] Build SME Manufacturing visuals:
  - factory process map
  - data flow from shopfloor to management
  - module architecture
  - rollout roadmap
  - governance/security layer
- [ ] Keep visuals simple, meaningful, and executive-grade.

### 5. SME Manufacturing Page Rebuild

- [x] Audit current page and language file.
- [x] Rewrite hero and positioning for a real manufacturing executive audience.
- [x] Add diagrams/icons to break "box + text only" monotony.
- [x] Restructure top sections into:
  - manufacturing pain map
  - solution operating model
  - modules
  - rollout roadmap
  - data/security/maintenance model
  - proof and fit criteria
- [x] Verify light/dark/mobile rendering.

### 6. Audit Loops

#### Loop 1 — Foundation

- [x] Capture screenshots after design-system foundation changes.
- [x] Check nav, logo, language selector, body text contrast, dark mode surfaces.
- [x] Fix severe token/component-level issues found in pass 1.

#### Loop 2 — Content + Visuals

- [x] Capture screenshots after copy + diagram work.
- [x] Check whether priority pages read like a top software engineering firm.
- [x] Fix weak priority headings, vague service copy, and generic SME hero/positioning copy.

#### Loop 3 — Section Zoom Review

- [ ] Crop every high-risk section at desktop.
- [ ] Check heading scale, line length, card rhythm, icon size, diagram clarity.
- [ ] Fix spacing gaps and awkward orphan layouts.

#### Loop 4 — Dark/Mobile/Language Review

- [ ] Capture dark mode screenshots for all scoped pages.
- [ ] Capture mobile screenshots for nav and key pages.
- [ ] Check language dropdown behavior and scroll preservation.
- [ ] Fix all remaining issues before deploy.

## Progress Log

- **2026-06-17:** Plan created. Starting audit + foundation fixes.
- **2026-06-18:** Full baseline audit captured: 60 screenshots under `/tmp/hkshots/audit-full-baseline` (light/dark/mobile, EN/VI, 10 scoped pages).
- **2026-06-18:** Implemented global contrast/button tokens, globe language selector, raw-white usage cleanup, compact Services hero, Services delivery diagram, SME hero/process diagram, SME framework diagram, SME module cards, and VI/EN copy pass. Captured audit pass 1 and pass 2 under `/tmp/hkshots/audit-redesign-pass1` and `/tmp/hkshots/audit-redesign-pass2`.

## Audit Findings

### Loop 0 — Baseline Findings

- **Services hero:** oversized empty first viewport; headline/subcopy float without visual proof or executive signal.
- **SVG diagrams:** sprint cycle, AI flow, and SaaS diagrams are too simple and feel like internal draft diagrams. They need to express delivery governance, architecture, integration, and ownership.
- **Dark mode:** many surfaces are still light-blue/pastel in dark mode; CSS relies on broad inline rescue selectors such as `[style*="background: white"]`, which is fragile and causes misses.
- **Logo on dark:** image mark is white, but wordmark/text treatment still reads blue in some dark contexts; final rule should produce full white brand treatment where background is dark.
- **Language switcher:** current flag-only UI is not sufficiently professional and can be culturally/politically sensitive. Replace with globe + explicit labels.
- **SME Manufacturing page:** content is substantial but presented as a long wall of boxes. Needs architecture diagrams, icons, operating model, and stronger executive information hierarchy.
- **Voice:** Vietnamese has several literal/translated phrases and generic product-marketing wording. English is more polished but still leans toward SaaS marketing in places. Both should read as a professional software-engineering capability profile.

### Loop 1/2 — Current Status

- **Closed:** flag-only language selector replaced with globe + explicit labels; no raw `color: white/#fff/#ffffff` or `fill="white"` remains in landing/layout/page surfaces outside token definitions.
- **Closed:** Services hero spacing reduced and copy reframed as engineering capability profile.
- **Closed:** Sprint cycle SVG replaced with a delivery operating model diagram using localized labels.
- **Closed:** SME Manufacturing top sections now include a factory operations map, layer framework diagram, module icons/cards, and revised VI/EN executive copy.
- **Closed:** Dark home CTA bug found in pass 1 fixed by moving shared CTA banners to `--contrast-panel-bg`.
- **Residual:** Lower SME sections still contain dense content blocks. They are readable after token cleanup, but a future pass should convert roadmap/implementation/why-us sections into richer timeline and proof visuals.

## Deployment Gate

Deploy only when:

- [ ] PHP lint passes for lang files touched.
- [ ] `curl` returns 200 for all scoped VI/EN routes.
- [x] Screenshot audit has no unresolved severe visual issues.
- [x] `rg` confirms no flag-only language UI remains.
- [x] Dark mode no longer relies on broad white-background rescue rules as the primary fix.
- [ ] `LandingPage/deploy.sh` completes successfully.
