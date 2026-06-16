---
name: landing-page-ui-audit
description: >-
  UI/UX quality audit for SaaS / Tech product landing pages, through a
  conversion-rate-optimization (CRO) lens. Verifies visual hierarchy, attention flow,
  friction points, trust signals, responsiveness, performance, and anti-pattern detection.
  TRIGGER when: user requests UI review/audit for a landing page, completing a landing page
  frontend task, verifying design quality.
  DO NOT TRIGGER for: writing new UI (use frontend skills), auditing app dashboards or admin
  panels (use quality-audit instead).
---

# Landing Page UI Audit — SaaS / Tech (CRO)

## When to apply

- **Automatically** after completing any SaaS landing page frontend task.
- When user requests: "check UI", "review design", "audit layout", "kiểm tra giao diện".
- Before declaring any landing page frontend task "done".

---

## Audit process (complete ALL steps, skip none)

### Step 1: Identify scope of changes

List all components / sections created or modified:
- [ ] Navigation / Header
- [ ] Hero section
- [ ] Problem / Feature / Solution sections
- [ ] Social proof section
- [ ] Pricing section
- [ ] FAQ section
- [ ] Footer / Final CTA
- [ ] Global styles (typography, color tokens, spacing scale)

---

### Step 2: Attention and conversion flow (CRO priority)

This is the most important audit category. A visually polished page that misdirects attention kills conversion.

**Above the fold:**
- [ ] The headline is the single most visually dominant element — larger than everything else.
- [ ] The primary CTA button is the second most visually dominant element.
- [ ] There is one clear focal point — not 3 things competing at the same visual weight.
- [ ] No nav link competes visually with the primary CTA in the hero area.

**Attention flow — every section:**
- [ ] Each section has one job (one message, one action) — not a collage of ideas.
- [ ] The user's eye is guided: large heading → supporting copy → CTA. Not the reverse.
- [ ] Directional cues (arrows, whitespace, illustration gaze direction) point toward the CTA.
- [ ] No visual dead ends where the eye stops and doesn't know where to go next.

**CTA visibility:**
- [ ] Primary CTA button color is the highest-contrast clickable element on the page.
- [ ] CTA is never the same color as a decorative section background — it must pop.
- [ ] CTA button is large enough to be instantly recognized as the primary action:
  - Desktop: minimum 48px height, 160px width.
  - Mobile: full-width or minimum 48px height.
- [ ] CTA reappears at least 3 times on the page: hero → mid-page after social proof → final section.

---

### Step 3: Visual hierarchy

**Heading scale:**
- [ ] Only one H1 on the page — the hero headline.
- [ ] H2 is visually distinct from H3: minimum 4px size difference.
- [ ] Body text is NOT bold — bold reserved for key terms only.
- [ ] No all-caps body text blocks (impossible to read at scale).

**Color contrast (WCAG AA minimum — CRO and legal requirement):**
- [ ] Body text on background: 4.5:1 ratio minimum.
- [ ] CTA button text on button color: 4.5:1 ratio minimum.
- [ ] Secondary text / captions: 4.5:1 ratio minimum.
- [ ] No light gray text on white background (common "elegant" trap that kills readability).

**Information density:**
- [ ] No section tries to communicate more than 3 main ideas.
- [ ] Feature sections: 3 or 6 items maximum per grid row — not 9–12 icons with 3-word labels.
- [ ] Pricing section: maximum 3 plans (Good / Better / Best model).

---

### Step 4: Layout and spacing

**Grid discipline:**
- [ ] Content uses a consistent grid (Bootstrap 12-col or Tailwind container with defined max-width).
- [ ] Max content width capped: 1200px for text-heavy sections, 1440px for full-bleed visuals.
- [ ] Text column measure: maximum 70 characters per line (beyond this, readability drops).

**Spacing scale:**
- [ ] All spacing (margins, padding, gaps) uses a defined scale — multiples of 4px or 8px.
- [ ] No random pixel values like `margin-top: 37px` — this indicates ad hoc design.
- [ ] Vertical rhythm between sections is consistent — same spacing tokens used throughout.
- [ ] Breathing room: sections are not cramped; adequate whitespace between distinct ideas.

**Section structure:**
- [ ] Each section has a clear visual start and end.
- [ ] Section separators (if used) are subtle — not heavy 2px borders or jarring color breaks.
- [ ] Related elements grouped visually; unrelated elements clearly separated.

---

### Step 5: Typography

- [ ] Maximum 2 font families (1 for body + 1 for display/heading — or just 1 total).
- [ ] Body font: minimum 16px desktop, 15px mobile — never 14px or below for body copy.
- [ ] Line height: 1.5–1.7 for body text — not 1.2 (cramped) or 2.0 (too loose).
- [ ] Letter spacing: normal for body; slight positive tracking only for uppercase labels.
- [ ] Font weights: maximum 3 variants (e.g. 400 / 600 / 700). More = visual noise.
- [ ] No decorative or script fonts for body copy or UI labels.

---

### Step 6: CTA button design

- [ ] Primary button is visually dominant — the largest, most conspicuous clickable element per section.
- [ ] Button padding: minimum 14px vertical, 28px horizontal (generous, confident appearance).
- [ ] Hover state: color shift or subtle shadow — NOT just cursor change.
- [ ] Focus-visible state: keyboard outline visible (`:focus-visible`) — accessibility requirement.
- [ ] Active/pressed state: slight scale-down or color darken — tactile feedback.
- [ ] Maximum 1 primary CTA style per page — secondary actions use outline or ghost variant.
- [ ] Mobile: CTA is never icon-only — always paired with a text label.

---

### Step 7: Hero section (highest CRO impact)

- [ ] Hero shows headline + subheadline + CTA **without scrolling** on a 1280px desktop at 100% zoom.
- [ ] Hero is **NOT** full-viewport-height on mobile — it pushes content below fold and kills scroll.
- [ ] Product screenshot or UI preview present (SaaS must show what the product looks like — not abstract illustrations).
  - Preferred: annotated product screenshot, or short looping UI demo GIF/video.
  - Acceptable: hero illustration if the product is complex or abstract (e.g. API/infrastructure).
  - ❌ Generic stock photo of people smiling at laptops.
- [ ] Background (if image or video): sufficient text contrast overlay; text always readable.
- [ ] No autoplay video with sound in hero — muted autoplay only, with visible pause control.
- [ ] Hero loads fast: hero image/video is the largest LCP candidate — must be optimized.

---

### Step 8: Trust signal UI

Trust signals fail when they exist in content but are poorly presented in UI.

- [ ] Testimonials displayed as cards, not a wall of text — each card contains: photo, name, role, company, quote.
- [ ] Logo wall: logos are same-height, same-color treatment (monochrome/grayscale preferred) — not a mismatched collage.
- [ ] G2 / Capterra badge: displayed at standard size, not stretched or pixelated.
- [ ] Customer count or "used by X companies" stat: large, bold, visually prominent — not buried in a caption.
- [ ] Security badges (SOC 2, GDPR, etc.): present in footer or pricing section; not cluttering the hero.

---

### Step 9: Responsiveness (verify all 3 breakpoints)

**Mobile (375px):**
- [ ] No horizontal scroll.
- [ ] No text overflowing its container.
- [ ] CTA button is full-width or near-full-width.
- [ ] Font size does not drop below 15px.
- [ ] Touch targets: minimum 44×44px for all interactive elements.
- [ ] Hero does NOT take up full viewport height — user can see content exists below.

**Tablet (768px):**
- [ ] Layout adapts gracefully — not a shrunken desktop layout.
- [ ] Two-column grids collapse to single column where needed.
- [ ] Navigation adapts (hamburger or simplified horizontal nav).

**Desktop (1280px):**
- [ ] Comfortable line lengths — text columns not stretching full viewport width.
- [ ] No excessive whitespace or awkward centering from unconstrained containers.

**Images:**
- [ ] All images scale proportionally — no fixed-width images overflowing container.
- [ ] Product screenshots on mobile: either full-width or scrollable horizontally with clear affordance.

---

### Step 10: Performance (CRO = fast pages)

Every 1 second of delay costs ~7% conversion rate. Non-negotiable.

- [ ] All images served in **WebP** format (with JPEG/PNG fallback via `<picture>`).
- [ ] Images have explicit `width` and `height` attributes (prevents Cumulative Layout Shift).
- [ ] **Above-fold images**: `loading="eager"` — do NOT lazy-load the hero image.
- [ ] **Below-fold images**: `loading="lazy"` — all images after the first viewport.
- [ ] Hero video (if present): served in WebM + MP4, compressed to under 2MB.
- [ ] No render-blocking scripts in `<head>` without `defer` or `async`.
- [ ] Google Fonts: loaded via `<link rel="preconnect">` + `font-display: swap`.
- [ ] No unused CSS loaded on the page (purge unused Tailwind utilities; scope Bootstrap).
- [ ] **Target**: LCP < 2.5s, CLS < 0.1, INP < 200ms on a mid-range mobile device.

---

### Step 11: Anti-pattern detection (CRITICAL — flag immediately)

**"AI-generated design" red flags that destroy SaaS credibility:**
- [ ] ❌ Heavy gradients on multiple section backgrounds — approve max 1 gradient accent total.
- [ ] ❌ Multiple stacked box-shadows (card shadow + parent shadow + grandparent shadow).
- [ ] ❌ Particle animations, floating blob animations, or animated background gradients in hero.
- [ ] ❌ Glassmorphism on functional UI elements (form fields, pricing cards, nav).
- [ ] ❌ Neumorphism on any UI element.
- [ ] ❌ Illustration-heavy layout where illustrations take more space than product content.
- [ ] ❌ Feature grid with 9–12 items, each with an icon + 3-word label and no explanation.
- [ ] ❌ Decorative icons that carry no informational value.

**Layout anti-patterns that kill conversion:**
- [ ] ❌ Centered body text blocks longer than 3 lines — unreadable.
- [ ] ❌ Navbar with more than 5–6 top-level items on a landing page — dilutes focus.
- [ ] ❌ Sticky header taller than 64px — consumes too much viewport on mobile.
- [ ] ❌ Modal popup or interstitial on page load — immediate UX violation.
- [ ] ❌ Auto-advancing carousel/slider without user control — accessibility and trust violation.
- [ ] ❌ Pricing plan comparison table with more than 12 rows — use feature highlights instead.
- [ ] ❌ "Contact Sales" as the only CTA for a product under $500/month — self-serve should be available.

---

### Step 12: i18n UI audit

Run this step whenever the page supports more than 1 locale. Skip only if confirmed single-language.

**Layout robustness across locales:**
- [ ] All text containers tested with the longest translation — German and Vietnamese expand ~30–40% vs English.
- [ ] No hardcoded `width` or `height` on text containers that would clip translated strings.
- [ ] Buttons: text never truncates or wraps to 2 lines in any locale at any breakpoint.
- [ ] Hero headline: does not exceed 3 lines in any locale at 375px mobile.
- [ ] Nav items: do not overflow or collapse incorrectly in the most verbose locale.

**Font & glyph rendering:**
- [ ] Font family supports all characters in all targeted locales:
  - Latin (EN, FR, DE): any standard web font works.
  - Vietnamese: requires font with full Vietnamese diacritics — verify `ắ ặ ổ ữ ề` render correctly.
  - CJK (JP, KR, ZH): requires CJK-capable font (Noto Sans CJK, system fallback, or locale-specific load).
- [ ] Font fallback stack defined in CSS — never rely on a single font for non-Latin locales:
  ```css
  font-family: 'Inter', 'Noto Sans', 'Be Vietnam Pro', sans-serif;
  ```
- [ ] Line height adjusted for CJK locales if targeted — CJK needs ~1.7–1.8 vs 1.5 for Latin.
- [ ] Vietnamese: no font renders `đ` as a standard `d` with incorrect accent rendering.

**Locale switcher UI (if present):**
- [ ] Language switcher visible and accessible — not buried in footer for a multilingual product.
- [ ] Current locale clearly indicated (flag or language label, not both — flags alone are ambiguous).
- [ ] Switcher does not reload the full page unnecessarily — URL updates, scroll position preserved.
- [ ] Dropdown locale list uses native language names, not English translations:
  - ✅ "Tiếng Việt", "日本語", "Deutsch"
  - ❌ "Vietnamese", "Japanese", "German"

**RTL layout (if Arabic, Hebrew, or Persian targeted):**
- [ ] `dir="rtl"` applied at `<html>` level for RTL locales — not via JS toggle on a child element.
- [ ] All flex/grid layouts use logical directions or RTL stylesheet overrides.
- [ ] Sidebar, nav, and card layouts mirror correctly in RTL.
- [ ] Form inputs align right in RTL.
- [ ] Directional icons (→ arrows, › chevrons) are mirrored.
- [ ] No absolute-positioned elements using `left: X` without an RTL `right: X` override.

**Image and media locale-awareness:**
- [ ] Hero screenshot / product UI image: shows the correct locale's UI — not English UI on a Vietnamese page.
- [ ] Any text embedded in images (screenshots, diagrams) is in the correct locale.
- [ ] Testimonial photos: culturally appropriate for the target market.

---

### Step 13: Accessibility baseline

- [ ] All images have descriptive `alt` text — not empty, not the filename.
- [ ] Form labels associated with inputs via `for`/`id` or `aria-label`.
- [ ] All interactive elements operable by keyboard (Tab, Enter, Space).
- [ ] Information never conveyed by color alone (error states have icon + text, not just red color).
- [ ] `<html lang="...">` set correctly (`lang="vi"` for Vietnamese, `lang="en"` for English).
- [ ] Page `<title>` matches meta title.

---

### Step 14: Summary

- List all UI violations found.
- Prioritize severity:
  - 🔴 **Critical** — blocks conversion or accessibility (CTA not visible, no mobile layout, LCP > 4s)
  - 🟡 **Major** — damages trust or UX (anti-pattern present, broken responsiveness at tablet, low contrast)
  - 🟢 **Minor** — polish (spacing inconsistency, font weight redundancy)
- Fix Critical and Major immediately.
- Report to user anything requiring a design decision (layout restructure, color system change, brand asset replacement).
- Confirm: **visual hierarchy, CTA flow, responsiveness, i18n, performance, and design system compliance are all production-ready**.