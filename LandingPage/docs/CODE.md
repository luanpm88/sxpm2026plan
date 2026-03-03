# HKIncotech Landing Page — CODE

Mục tiêu tài liệu: mô tả **kiến trúc code + cấu trúc site + UX/UI look & feel** của toàn bộ LandingPage (Laravel) để mở rộng page mới vẫn đồng bộ “elegant / professional”.

## 1) High-level architecture

```text
Route (routes/web.php)
  -> LandingPageController
      -> Blade views (resources/views/landing_page/*.blade.php)
          -> Layouts (resources/views/layouts/*.blade.php)
              -> Shared CSS (public/css/main.css)
              -> CDN assets (Bootstrap, Inter, Material Symbols)
```

## 2) Cấu trúc thư mục chính

```text
LandingPage/
├── app/Http/Controllers/LandingPageController.php
├── routes/web.php
├── resources/views/
│   ├── layouts/
│   │   ├── main.blade.php
│   │   └── one-page.blade.php
│   └── landing_page/
│       ├── index.blade.php
│       ├── services.blade.php
│       ├── scrum.blade.php
│       ├── tech-stack.blade.php
│       ├── scaling.blade.php
│       ├── about-us.blade.php
│       ├── case-studies.blade.php
│       ├── pricing.blade.php
│       ├── certifications.blade.php
│       ├── contact.blade.php
│       ├── one-page.blade.php
│       ├── blog/r_and_d.blade.php
│       └── partials/
│           ├── hero.blade.php
│           ├── about.blade.php
│           ├── services.blade.php
│           ├── scrum.blade.php
│           ├── tech_stack.blade.php
│           ├── case_studies.blade.php
│           ├── blog/r_and_d.blade.php
│           ├── certifications.blade.php
│           ├── pricing.blade.php
│           └── contact.blade.php
├── public/css/main.css
└── screenshot/1.jpg ... 4.jpg
```

## 3) Route map (multi-page + one-page)

Defined trong `routes/web.php`:

- `/` → `landing.index`
- `/services` → `landing.services`
- `/scrum` → `landing.scrum`
- `/tech-stack` → `landing.tech-stack`
- `/scaling` → `landing.scaling`
- `/about-us` → `landing.about-us`
- `/case-studies` → `landing.case-studies`
- `/pricing` → `landing.pricing`
- `/certifications` → `landing.certifications`
- `/contact` → `landing.contact`
- `/one-page` → `landing.one-page`
- `/blog/r_and_d` → `landing.blog.r_and_d`

## 4) Controller pattern

File: `app/Http/Controllers/LandingPageController.php`

### 4.1 Shared private helpers
- `getPageMetadata()`
- `getNavMenu()`
- `getCurrentPage()`

### 4.2 Public actions
- Mỗi route tương ứng 1 action trả về view blade.
- Các page standard truyền `pageTitle`, `pageDescription`, `navMenu`, `currentPage`.
- `onePage()` là special case: trả về view tự chứa theo anchor section.

## 5) Layout system

## 5.1 `layouts/main.blade.php`
- Dùng cho toàn bộ site multi-page.
- Chứa header sticky + nav route-based + footer đầy đủ link.
- Nạp CDN:
  - Bootstrap 5
  - Inter font
  - Material Symbols
- Nạp stylesheet chính: `public/css/main.css`.

## 5.2 `layouts/one-page.blade.php`
- Dùng cho `/one-page`.
- Header nav anchor (`#hero`, `#about`, ...), smooth scroll + scrollspy JS.
- Footer dùng anchor links thay vì route links.
- Nạp `main.css` và có tham chiếu `onepage.css`.

> Lưu ý hiện trạng: có link `/css/onepage.css` trong layout one-page nhưng file này chưa thấy trong source tree (chưa tồn tại trong `public/css`).

## 6) View composition

## 6.1 Multi-page mode
- Mỗi page file (`index`, `services`, `scrum`, ...) `@extends('layouts.main')`.
- Nội dung section viết trực tiếp trong page.
- `blog/r_and_d.blade.php` có include:
  - `landing_page.blog.r_and_d.hkspace`
  - `landing_page.blog.r_and_d.ai`

## 6.2 One-page mode
- `landing_page/one-page.blade.php` `@extends('layouts.one-page')`.
- Ghép các partial theo thứ tự:
  1. `partials.hero`
  2. `partials.about`
  3. `partials.services`
  4. `partials.scrum`
  5. `partials.tech_stack`
  6. `partials.case_studies`
  7. `partials.blog.r_and_d`
  8. `partials.certifications`
  9. `partials.pricing`
  10. `partials.contact`

## 6.3 Site map theo view file

- `index.blade.php`: hero, services preview, process preview, tech, scaling, why choose, carousel success stories, R&D, testimonials, CTA.
- `services.blade.php`: core services, deep-dive blocks, tech stack, engagement models, process.
- `scrum.blade.php`: 6 steps, sprint details, benefits, journey, why choose, CTA.
- `tech-stack.blade.php`: tech matrix, metrics, multi-platform, best practices, CTA.
- `scaling.blade.php`: scaling phases timeline, metrics, CTA.
- `about-us.blade.php`: story, values, leadership/team, achievements, CTA.
- `case-studies.blade.php`: stats, featured projects, industries, testimonials, CTA.
- `pricing.blade.php`: plans, included scope, comparison, FAQ, custom quote.
- `certifications.blade.php`: compliance/cloud/agile/framework/team expertise, learning culture, CTA.
- `contact.blade.php`: contact form + info + FAQ + CTA.
- `blog/r_and_d.blade.php`: R&D hero, 2 research articles, capability blocks, CTA.

## 7) UX/UI style language (look & feel)

Đây là phần quan trọng để mở rộng page mới đồng bộ.

## 7.1 Design tokens (từ `main.css`)

- `--primary: #0f6b9e`
- `--primary-light: #1a8fb8`
- `--primary-dark: #0a4a6b`
- `--accent: #059669`
- `--secondary-bg: #f8fafc`
- `--text-dark: #0f172a`
- `--text-gray: #475569`
- `--border: #e2e8f0`

Font hệ thống:
- Primary typeface: **Inter**.
- Icon system: **Material Symbols Rounded**.

## 7.2 Layout rhythm

- Container chuẩn: `.container-v5` max-width 1400px, horizontal padding 2rem.
- Section spacing desktop: khoảng 6rem vertical.
- Hero thường cao (60vh–90vh), center-aligned theo grid 2 cột hoặc 1 cột.
- Background chuyển nhịp trắng ↔ light gray (`--secondary-bg`) để tạo “story pacing”.

## 7.3 Component patterns

1. **Header sticky**
   - nền trắng, border-bottom nhẹ, shadow nhẹ.
   - active nav có underline/inner shadow màu primary.

2. **Cards**
   - nền trắng, bo góc 12px, border mảnh `--border`.
   - hover: đổi border sang primary + shadow xanh nhẹ.

3. **CTA buttons**
   - Primary: nền primary, chữ trắng, hover tối hơn + nâng nhẹ.
   - Secondary: nền trắng + viền primary, hover đảo màu.

4. **Section headers**
   - H2 lớn (bold 800), subtitle trung tính.
   - dùng ngôn ngữ business + engineering.

5. **Data visualization inline**
   - Nhiều trang có SVG/diagram/timeline/carousel inline, tạo cảm giác technical depth.

## 7.4 Motion/interaction

- Smooth scroll (`html { scroll-behavior: smooth; }`).
- Hover micro-interactions qua inline style JS (border/shadow/color transition).
- One-page có scrollspy + hash update logic để active nav theo section.

## 7.5 Responsive behavior

- Tablet (`<=1023px`): nav xếp dọc khi cần.
- Mobile (`<=767px`): header fixed + mobile menu toggle.
- Small phone (`<=480px`): ép grid về 1 cột, giảm section spacing, giảm padding/button size.

## 8) Quan hệ nav ↔ sections

## 8.1 Multi-page nav (route-based)
- Header nav ở `layouts/main.blade.php` trỏ bằng `route('landing.*')`.

## 8.2 One-page nav (anchor-based)
- Header/footer ở `layouts/one-page.blade.php` trỏ `#id` section.
- Các id thực tế nằm trong partials (`#hero`, `#about`, `#services`, `#scrum`, `#tech-stack`, `#case-studies`, `#r_and_d`, `#certifications`, `#pricing`, `#contact`).

> Ghi chú kỹ thuật: trong footer one-page đang có link `#certs`, trong khi section id đang là `#certifications`.

## 9) Blueprint thêm 1 page mới (đồng bộ phong cách hiện tại)

## 9.1 Về code

1. Thêm route trong `routes/web.php` theo chuẩn `landing.{slug}`.
2. Thêm metadata trong `getPageMetadata()`.
3. Thêm controller action trả view blade.
4. Tạo file view ở `resources/views/landing_page/{new-page}.blade.php`.
5. (Nếu muốn hiển thị trên menu) thêm link trong header/footer layout.

## 9.2 Về UX/UI

Page mới nên có cấu trúc:
- Hero mạnh (value proposition + 1 primary CTA + 1 secondary CTA).
- 2–4 section chứng minh năng lực (capability/process/metrics/case).
- 1 section trust (testimonial/logo/certification/snippet).
- 1 CTA kết thúc dẫn về `contact` hoặc action chính.

Checklist visual đồng bộ:
- dùng đúng palette token từ `main.css`.
- ưu tiên card trắng + border nhẹ + shadow subtle.
- giữ nhịp spacing 6rem desktop, giảm hợp lý mobile.
- giữ typographic hierarchy tương tự các trang hiện có.

## 10) Screenshot references cho style sync

Tham chiếu one-page version:
- `screenshot/1.jpg`
- `screenshot/2.jpg`
- `screenshot/3.jpg`
- `screenshot/4.jpg`

Dùng các ảnh này để cân đối:
- độ “thoáng” giữa section,
- độ đậm nhạt màu primary,
- tỷ lệ text/card/visual,
- nhịp CTA trong toàn trang.

## 11) Known notes (hiện trạng)

1. `layouts/one-page.blade.php` đang gọi `/css/onepage.css` nhưng chưa thấy file thực tế.
2. Anchor footer one-page có `#certs` chưa đồng nhất với section id `#certifications`.
3. Có một số badge nội dung dạng draft/demo trong page (`Draft`, `Demo data`) — cân nhắc khi dùng bản production.

---

Tài liệu này là bản tổng hợp từ source code thực tế (`routes`, `controller`, `views/partials`, `main.css`) + sitemap/guide hiện hữu + screenshot one-page.
