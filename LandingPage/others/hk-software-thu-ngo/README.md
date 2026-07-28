# HK Software — Thư ngỏ (email template)

Email giới thiệu (thư ngỏ) gửi hàng loạt cho khách hàng doanh nghiệp về năng lực phát
triển phần mềm của **Hoàng Khang Incotech**, dẫn về `software.hoangkhang.com.vn`.

## Files
- `hk-software-thu-ngo.html` — bản HTML email (dán vào Acelle / ESP). Bulletproof: table
  layout, CSS inline, ghost table + VML button cho Outlook, preheader ẩn, dark-mode aware,
  responsive, footer CAN-SPAM/GDPR.
- `hk-software-thu-ngo.txt` — bản plain-text (đính kèm làm multipart để tăng deliverability).
- Ảnh logo: `LandingPage/public/img/email/hk-mark-white.png` (header nền navy) và
  `hk-mark-navy.png` (dự phòng nền sáng). **Phải deploy** để URL tuyệt đối hoạt động:
  `https://software.hoangkhang.com.vn/img/email/hk-mark-white.png`

## Subject lines (chọn 1)
1. `Hoàng Khang Incotech — Đối tác phát triển phần mềm doanh nghiệp`
2. `Khi phần mềm doanh nghiệp được làm tử tế`
3. `Thư ngỏ từ Hoàng Khang Incotech — đối tác kỹ thuật phần mềm`

**Preheader** (đã nhúng ẩn trong HTML): *Chúng tôi thiết kế, xây dựng và vận hành hệ thống
phần mềm doanh nghiệp. Mời Anh/Chị tìm hiểu về Hoàng Khang Incotech.*

## Merge tags (Acelle)
- `{WEBVIEW_URL}` — link "Xem bản web" (Acelle tự thay). 2 chỗ trong file.
- `{UNSUBSCRIBE_URL}` — link hủy nhận (BẮT BUỘC cho gửi hàng loạt). 1 chỗ.
- Cá nhân hoá lời chào (tùy chọn): đổi `Kính gửi Anh/Chị,` → `Kính gửi {SUBSCRIBER_NAME|Anh/Chị},`
  (dùng đúng cú pháp field của list Acelle; nếu ESP không hỗ trợ fallback thì giữ `Anh/Chị`).

## Links trong email (đều là trang thật, đã live)
- CTA chính → `/vi/services` (Năng lực triển khai)
- CTA phụ → `/vi/contact` (Trao đổi nhu cầu kỹ thuật)
- Inline → `/vi/scrum` (quy trình) · `/vi/about-us` (giới thiệu)

## Checklist trước khi gửi hàng loạt
1. **Deploy ảnh**: `hk-mark-white.png` phải truy cập được qua HTTPS (đã kèm trong deploy).
2. **Sender**: From = một địa chỉ đã xác thực trên SendGrid (vd `info@hoangkhang.com.vn` hoặc
   `soft.support@hoangkhang.com.vn`). Domain `hoangkhang.com.vn` đã được domain-authenticate
   (DKIM/SPF hợp lệ) → deliverability tốt.
3. **List-Unsubscribe header**: bật ở Acelle (one-click unsubscribe) — ngoài link trong footer.
4. **Plain-text part**: đính kèm `hk-software-thu-ngo.txt` (multipart) — tránh rơi spam.
5. **Gửi thử** tới Gmail / Outlook / Apple Mail trước khi gửi đại trà; kiểm tra cả dark mode.
6. **Warm-up**: gửi theo lô, tránh bắn 1 lần số lượng lớn từ domain mới xác thực.
7. **Không bịa** số liệu/testimonial (đúng chuẩn nội dung site).

## Kiểm thử đã chạy
Render Playwright ở 680px (desktop) + 390px (mobile), light + dark — bố cục, độ đọc và
màu nền đều đạt; nút CTA có VML fallback cho Outlook; ảnh có `max-width:100%`.
