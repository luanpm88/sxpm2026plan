# SHARED BRIEF — HKIncotech homepage HERO illustration (variant build)

You are hand-authoring ONE top-notch hero illustration variant for an enterprise-software
company's homepage. Multiple designers are each doing a DIFFERENT variant independently — do
NOT try to match anyone else; commit fully to YOUR assigned art-direction lane (given in your
task prompt). Goal: make a senior CTO / enterprise buyer think "these people are serious."

## The company & message (do not change copy)
HKIncotech = engineering partner for enterprise software systems. They design, build, and
operate: internal platforms, digital products, SaaS, data integration, applied AI, and
infrastructure modernization. Audience: founders, CEOs, CTOs, ops leaders, factory managers.
Tone: calm, precise, board-level, technically credible. NOT playful, NOT cartoonish.

## NON-NEGOTIABLE brand & design constraints (from the design source-of-truth)
- Palette — use these exact values:
  - Brand navy `--primary: #183060`  (logo, primary)
  - Lifted navy `--primary-light: #1a4585`
  - Deepest navy `--primary-dark: #0F203D`
  - Faint navy wash `--primary-subtle: rgba(24,48,96,0.05)`
  - Restrained steel-blue accent `--accent: #2f6abf`  (small accents only — "the 20%")
  - Surface white `#ffffff`, light bg `--secondary-bg: #f6f7f9`
  - Near-black text `--text-dark: #0b0f15`, gray text `#475569`
  - ONE optional success-green `#059669` — use on at most ONE element (the verified/SLA signal). Optional.
- Font: Inter only. **MAXIMUM font-weight is 600.** Never 700/800/900. Hierarchy via size/spacing/contrast.
- Monochrome navy + single accent. NO rainbow, NO purple/pink/cyan "AI gradient", NO multi-hue.
- The illustration must EXPLAIN the system, not decorate. Every shape should mean something.
- ❌ NO fabricated metrics. NO fake dashboards with lorem numbers ("$48,291 ↑24%", random charts).
  Use real domain labels (Architecture, API, Operations, SLA, Acceptance) and abstracted/structural
  visuals only. Fake KPIs are the #1 B2B-slop tell and instantly destroy trust here.
- Must be hand-authored crisp SVG (no raster, no external images). Lightweight. Accessible (role/aria).
- If you add motion: exactly ONE calm idea (e.g. a slow data-flow dash pulse). Wrap it in
  `@media (prefers-reduced-motion: reduce)` to disable. Never multiple competing animations.

## Domain labels to use IN the illustration (Vietnamese — keep these)
- System core: "Lõi hệ thống"; core modules: "Kiến trúc", "API", "Vận hành"
- Inputs: "Quy trình"/"Nghiệm thu", "Dữ liệu + AI"/"API", "Bảo mật"/"Vận hành"
- Outputs: "SaaS"/"ERP", "AI"/"Dữ liệu + AI", "Mở rộng"/"Vận hành"
- Governance: "Bàn giao"/"Sprint", "Nghiệm thu"/"QA · SLA"
(You may simplify/curate which labels appear to fit your composition — but keep them real & in VI.)

## Reference screenshots — READ THESE before drawing
- `/Users/luan/apps/ppm/LandingPage/tmp/hero-ref/home-hero.png` — the full current hero (style to match in spirit)
- `/Users/luan/apps/ppm/LandingPage/tmp/hero-ref/home-illustration.png` — the CURRENT illustration (flat wireframe systems-map). Your job is to make a FAR better, top-notch version in your lane.
- `/Users/luan/apps/ppm/LandingPage/tmp/hero-ref/services-hero.png` — secondary style reference
The current illustration is a flat 1px wireframe. It reads like documentation, not a premium product. Elevate it.

## Research (do your own, in YOUR lane)
Use web search to study how the BEST 2025-26 enterprise/dev-platform sites execute YOUR specific
style (e.g. Stripe, Linear, Vercel, WorkOS, Supabase, Retool, Railway, Palantir, Thoughtworks).
Pull concrete techniques you can implement in hand-authored SVG/CSS. Be specific, not generic.

## DELIVERABLE — a standalone, reviewable preview file
Write your variant to: `public/hero-variants/vN.html`  (N = your variant number, given in your prompt).
It is served at `http://127.0.0.1:8787/hero-variants/vN.html`.
It MUST render the REAL hero chrome (so all variants are comparable) and differ ONLY in the
illustration. Use this exact skeleton — keep the left column copy verbatim; put YOUR illustration
inside the `.hero-dashboard` block. You may add a `<style>` block for your illustration only.

```html
<!DOCTYPE html>
<html lang="vi" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Variant N — HKIncotech</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
  <style>
    /* OPTIONAL: small helpers so the standalone page breathes; do NOT override .hero internals */
    body { background: #fff; }
    .variant-tag { position: fixed; top: 12px; left: 12px; z-index: 99; background: #183060; color:#fff;
      font: 600 12px/1 Inter, sans-serif; padding: 7px 12px; border-radius: 999px; letter-spacing: .02em; }
    /* === YOUR ILLUSTRATION STYLES BELOW (scope everything under a unique class) === */
  </style>
</head>
<body>
  <span class="variant-tag">Variant N — "Your lane name"</span>
  <section id="hero" class="hero" aria-labelledby="heading-hero">
    <div class="container-v5">
      <div class="hero-main-grid">
        <div class="hero-centered">
          <h1 id="heading-hero">Đối tác kỹ thuật<br><span>cho hệ thống phần mềm doanh nghiệp</span></h1>
          <p class="hero-desc">Hoàng Khang thiết kế, phát triển và vận hành các hệ thống phần mềm doanh nghiệp: nền tảng nội bộ, sản phẩm số, SaaS, tích hợp dữ liệu, AI ứng dụng và hiện đại hóa hạ tầng.</p>
          <div class="hero-buttons">
            <a href="#" class="btn-primary-v5"><span class="material-symbols-rounded" style="font-size:1.1rem;">calendar_month</span><span>Trao đổi nhu cầu kỹ thuật</span></a>
            <a href="#" class="btn-secondary-v5"><span class="material-symbols-rounded" style="font-size:1.1rem;">play_circle</span><span>Xem quy trình làm việc</span></a>
          </div>
          <div class="hero-social-proof">
            <div class="hero-social-text">
              <div class="hero-social-rating"><span class="hero-stars">★★★★★</span><span class="hero-rating-score">Năng lực đã kiểm chứng qua dự án thực tế</span></div>
              <div class="hero-social-label">Kinh nghiệm triển khai trong nhiều ngành</div>
            </div>
          </div>
        </div>
        <div class="hero-dashboard">
          <!-- =========================================================== -->
          <!-- YOUR TOP-NOTCH ILLUSTRATION GOES HERE (this is the canvas)  -->
          <!-- =========================================================== -->
        </div>
      </div>
    </div>
  </section>
</body>
</html>
```

## Illustration canvas spec
- It sits in the right column (`.hero-dashboard`, ~1.15fr of a `1fr 1.15fr` grid; ~560–620px wide on desktop).
- A `viewBox="0 0 720 520"` SVG is the established size; you may choose your own ratio if your
  composition needs it, but keep it responsive (width:100%; height:auto) and roughly landscape.
- The illustration card itself MAY be dark/glass/light depending on YOUR lane — but the page chrome
  (headline, buttons, etc.) stays the light brand styling from main.css. Make the illustration sit
  beautifully on the light page.
- It MUST be legible and crisp at ~580px wide AND scale down cleanly on smaller screens.

## Quality bar
This is "max effort / top notch". Add craft: layered depth, soft shadows, subtle gradients within
the navy family, precise geometry, port nodes, micro-detail density, restrained accent. Make it
look like an architecture an engineer would respect. Avoid AI-slop: no random glow on everything,
no fake numbers, no over-animation, no generic "connected dots" stock look.

## Output
Just write the file `public/hero-variants/vN.html`. Then return a 4-6 line summary: your lane,
the key techniques you used, any motion, and one sentence on why it fits an enterprise buyer.
Do NOT edit any other files. Do NOT touch hero.blade.php or main.css.
