# Sections tạm ẩn — CẦN BẬT LẠI khi có dữ liệu thật

> Các mục dưới đây đang bị **ẩn khỏi site** (`display:none`) vì **chưa có dữ liệu thật**
> (testimonials / đội ngũ là dữ liệu minh hoạ). Khi có nội dung thật, **bỏ `display:none`**
> ở các dòng dưới (và cập nhật lại nội dung trong file lang tương ứng).

Ngày ẩn: 2026-07-25

## Cách bật lại
Xoá `display:none;` (và bỏ chữ "TẠM ẨN" trong comment) tại các vị trí sau, rồi thay nội dung thật.

### 1. Testimonials — Trang chủ
- File: `resources/views/landing_page/index.blade.php`
- Section: `<section id="testimonials" ... style="display:none;">`
- Nội dung: `resources/lang/{vi,en}/index.php` → `testimonial1_*`, `testimonial2_*`, `testimonials_title`, `section_testimonials`

### 2. Testimonials — Trang Dự án (Case Studies)
- File: `resources/views/landing_page/case-studies.blade.php` → `<!-- Client Testimonials -->`
- One-page: `resources/views/landing_page/partials/case_studies.blade.php` → `<!-- Client Testimonials -->`
- Nội dung: `resources/lang/{vi,en}/case_studies.php` → `testimonials`, `testimonials_title`, `section_testimonials`

### 3. Đội ngũ lãnh đạo (Leadership Team) — Trang Giới thiệu
- File: `resources/views/landing_page/about-us.blade.php` → `<!-- Leadership Team -->`
- One-page: `resources/views/landing_page/partials/about.blade.php` → `<!-- Leadership Team -->`
- Nội dung: `resources/lang/{vi,en}/about.php` → `team`, `team_title`, `section_team`

## Ghi chú
- Các số liệu định vị (100+, 50+, 12+ năm…) ở hero/case-studies/schema **vẫn giữ** — đó là
  thông điệp định vị nhất quán của site, không phải testimonials/đội ngũ giả.
- Nhãn "float" trong `hero.php` (`float_uptime`, `float_engineers`…) **không được render** ở hero
  hiện tại nên không cần xử lý.
