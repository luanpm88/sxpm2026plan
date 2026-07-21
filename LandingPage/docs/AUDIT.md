# HKIncotech Landing Site Audit

Ngày audit: 2026-06-29

Phạm vi: rà soát chiến lược nội dung, văn phong EN/VI, UI layout, illustration, dark mode, mobile và các trang public chính của LandingPage. Tài liệu này chỉ ghi nhận audit và kế hoạch sửa. Chưa triển khai thay đổi nội dung hoặc giao diện site trong vòng này.

## Nguồn Đối Chiếu

- `docs/MINDSET_VISION_DESIGN.md`: nguồn chuẩn về định vị, văn phong, design system và chất lượng trình bày.
- `docs/PLAN.md`: tiến độ nâng cấp landing, các vòng screenshot audit, dark/mobile, deploy và những việc còn mở.
- `docs/CODE.md`: cấu trúc code và một số ghi chú kỹ thuật đã lệch so với design hiện tại.
- `resources/lang/en/*` và `resources/lang/vi/*`: nội dung song ngữ đang public.
- Screenshot audit đã chụp từ local server:
  - Tổng: `/tmp/hkshots/audit-2026-06-29-strategy`
  - Light desktop: `/tmp/hkshots/audit-2026-06-29-strategy/light`
  - Dark desktop: `/tmp/hkshots/audit-2026-06-29-strategy/dark`
  - Mobile: `/tmp/hkshots/audit-2026-06-29-strategy/mobile`
  - Nav states: `/tmp/hkshots/audit-2026-06-29-strategy/nav-states`

## Kết Luận Nhanh

Site đã tiến bộ rõ về hướng enterprise, đặc biệt ở homepage, services, SME manufacturing và dark mode. Tuy nhiên để đạt đúng tầm “hồ sơ năng lực công ty phần mềm” cho CEO, CTO, founder và ban điều hành, cần xử lý thêm bốn nhóm lớn:

1. Văn phong tiếng Việt cần tự nhiên hơn, bớt dịch từ tiếng Anh, bớt Title Case, bớt lặp từ “kỹ thuật”, tăng cảm giác bản địa và kinh nghiệm thực chiến.
2. Một số claim có rủi ro tin cậy: leadership placeholder, testimonial/star rating, standards/certification cards, public pricing bằng USD.
3. Visual còn lặp lại nhiều card/border; một số trang rất dài, đặc biệt mobile và SME manufacturing.
4. Design system cần đồng bộ thêm: color token, font weight tối đa 600, hardcoded SVG colors, CTA/menu/footer line-break và spacing.

## Định Vị Hero

Hiện tại:

- VI: `Đối tác kỹ thuật / cho hệ thống phần mềm doanh nghiệp`
- EN: `Engineering Partner / For Enterprise Software Systems`

Nhận xét:

- “Đối tác kỹ thuật” đúng nghĩa nhưng hơi hẹp. CEO hoặc ban điều hành có thể cảm thấy đây là vendor engineering thuần kỹ thuật, chưa đủ tầm “đối tác đồng hành”.
- “Đối tác tin cậy” mềm hơn và đúng tâm lý khách hàng hơn, nhưng nếu đứng một mình thì hơi generic.
- Site nên nói Hoàng Khang là đơn vị đồng hành xây dựng hệ thống phần mềm có thể vận hành dài hạn, có quy trình, có tiêu chuẩn, có năng lực bàn giao và mở rộng.

Đề xuất ưu tiên:

1. VI recommended: `Đối tác đồng hành xây dựng / hệ thống phần mềm doanh nghiệp`
2. VI alt: `Đối tác tin cậy cho / hệ thống phần mềm doanh nghiệp`
3. VI alt: `Đối tác phát triển hệ thống / cho doanh nghiệp vận hành dài hạn`
4. EN recommended: `Trusted partner / for enterprise software systems`
5. EN alt: `Enterprise systems partner / for long-term operation`

Lý do chọn phương án 1:

- Ít “tech” hơn `Đối tác kỹ thuật`, nhưng vẫn giữ đúng bản chất software.
- Có cảm giác đồng hành và chịu trách nhiệm, phù hợp với site giới thiệu năng lực công ty.
- Không khoa trương, không claim “hàng đầu”, không bị marketing như một sản phẩm SaaS.

Mô tả hero nên giữ hướng này:

```text
Đối tác đồng hành xây dựng
hệ thống phần mềm doanh nghiệp

Hoàng Khang thiết kế, phát triển và vận hành các hệ thống phần mềm gắn với quy trình thực tế của doanh nghiệp: sản phẩm số, nền tảng SaaS, hệ thống nội bộ, tích hợp AI, hiện đại hóa hạ tầng và chuyển giao dài hạn.
```

CTA nên đổi:

- `Trao đổi nhu cầu kỹ thuật` -> `Trao đổi bối cảnh dự án`
- EN `Discuss Technical Needs` -> `Discuss Your Project Context`

## Nhận Định Ưu Tiên

### P0 - Cần xử lý trước khi public/deploy lớn

1. `about.php` đang có placeholder lãnh đạo:
   - VI: `--- --- ---`, badge `Bản nháp`
   - EN: `--- --- ---`, badge `Draft`
   - Rủi ro: làm mất uy tín ngay lập tức với CEO/khách hàng.
   - Hướng sửa: nếu chưa có tên và ảnh thật, bỏ section leadership hoặc đổi thành “mô hình đội ngũ triển khai” với các vai trò: Solution Lead, Engineering Lead, QA/Delivery, DevOps/Security.

2. Trang `certifications` có nguy cơ bị đọc như claim chứng nhận:
   - Cards hiển thị `ISO/IEC 27001`, `SOC 2`, `GDPR`, `PCI DSS`, `HIPAA`, `OWASP ASVS`.
   - Copy có nói “khung tham chiếu”, nhưng visual vẫn có thể khiến người xem hiểu là công ty đã có certification/compliance scope.
   - Hướng sửa: tách rõ “chứng chỉ/chứng nhận đã có” và “khung tham chiếu khi thiết kế yêu cầu”. Nếu chưa có chứng nhận công ty, dùng wording như `Tham chiếu thiết kế` và `Không phải tuyên bố chứng nhận`.

3. Case studies/testimonials cần chứng thực:
   - Star rating, role chung chung, “demo data” và các claim kết quả nếu không có permission sẽ làm giảm chất enterprise.
   - Hướng sửa: ẩn testimonial đến khi có phê duyệt, hoặc đổi thành “chủ đề phản hồi thường gặp từ stakeholder” không gắn rating/người nói.

### P1 - Cần xử lý trong vòng implement tiếp theo

1. Hero và CTA dùng quá nhiều “kỹ thuật”.
   - Nên thay bằng ngôn ngữ đối tác, đồng hành, hệ thống vận hành và kết quả bàn giao.

2. Public pricing bằng USD cần xem lại pháp lý và positioning.
   - Hiện đã có disclaimer tốt: tham khảo ngân sách, chưa phải báo giá, chưa gồm VAT/hạ tầng.
   - Vẫn nên cân nhắc đổi nav `Bảng Giá` thành `Ngân sách tham khảo` hoặc `Mô hình hợp tác`.
   - Nếu public ở Việt Nam, nên confirm legal/tax wording trước khi deploy production.

3. `services` bị lệch logic:
   - Homepage/docs đang đi theo 5 nhóm năng lực, services hero nói “Bốn nhóm năng lực triển khai”.
   - Cần thống nhất hệ thống năng lực trên toàn site.

4. SME manufacturing quá dài trên mobile:
   - Mobile screenshot cao khoảng 56k px, quá nặng cho landing page.
   - Nên chia thành landing summary + technical deep dive accordion/download.

5. Design token và docs code lệch nhau:
   - `docs/CODE.md` vẫn ghi màu cũ `--primary: #0f6b9e`, trong khi source of truth hiện tại là logo navy `#183060`.
   - Cần update `CODE.md` sau khi implement để tránh các vòng sau dùng sai palette.

6. Hardcoded colors còn tồn tại trong SVG/inline styles:
   - Hero partial vẫn có nhiều hex trực tiếp trong SVG.
   - Yêu cầu của site là dùng CSS vars/design tokens để đồng bộ light/dark.

7. Font weight và Title Case:
   - Nhiều label VI đang Title Case như `Tìm Hiểu Năng Lực AI`, `Xem Nền Tảng HKSpace`, `Sẵn Sàng Cho AI`.
   - Nên sentence case: `Tìm hiểu năng lực AI`, `Xem nền tảng HKSpace`, `Sẵn sàng cho AI`.
   - Font weight tối đa 600, tránh menu/card title quá đậm.

### P2 - Nâng cấp để site có chiều sâu hơn

1. Footer/menu line-break cần kiểm lại ở wide desktop và narrow desktop.
2. Mega menu đã đúng hướng intro bên phải, menu chính bên trái; vẫn nên giảm cảm giác blue panel quá nặng.
3. Tech stack page còn hơi catalog. Nên thêm “decision model”: khi nào chọn monolith/module/microservice, RDBMS/vector/search/cache/queue, cloud/on-prem/hybrid.
4. Dark mode đã ổn định hơn, nhưng nhiều section cùng một nhịp card/border làm trang hơi đều.
5. Contact page nên đổi từ `Liên hệ HKIncotech` sang `Trao đổi bối cảnh triển khai`.

## Audit Văn Phong VI

Nguyên tắc:

- Viết như người Việt làm B2B enterprise, không dịch từng chữ từ EN.
- Bớt Title Case; chỉ viết hoa tên riêng, acronym và cụm thật sự cần nhấn.
- Không khoa trương: tránh “hàng đầu”, “tốt nhất thế giới”, “tin cậy” lặp lại nếu không có bằng chứng.
- Không quá kỹ thuật ở các vị trí CEO đọc đầu tiên. Phần kỹ thuật để ở deep dive.
- Câu nên có trọng tâm: bối cảnh doanh nghiệp, quy trình, rủi ro, tiêu chí nghiệm thu, vận hành, bàn giao, mở rộng.

Cụm nên thay:

- `Đối tác kỹ thuật` -> `Đối tác đồng hành xây dựng` hoặc `Đối tác tin cậy cho`
- `Trao đổi nhu cầu kỹ thuật` -> `Trao đổi bối cảnh dự án`
- `Đối tác triển khai tin cậy` -> `Đơn vị đồng hành triển khai có kiểm soát`
- `Nghe quen không?` -> bỏ, hoặc đổi thành `Những dấu hiệu thường gặp`
- `Doanh nghiệp trên 10+ ngành` -> `Kinh nghiệm qua nhiều bối cảnh vận hành`
- `Dự án đã tham gia` -> `Bối cảnh triển khai đã xử lý` nếu có số liệu verified; nếu không, bỏ số.
- `Khách hàng đánh giá` -> chỉ dùng khi có nguồn rating verified.
- `Dữ liệu minh họa` -> nếu là demo, nên ẩn khỏi public; nếu cần giữ, đưa xuống footnote nhỏ.

Copy sample cho CTA:

```text
Trao đổi bối cảnh dự án
Xem năng lực triển khai
```

Copy sample cho đoạn note dưới “problem section”:

```text
Không phải mọi vấn đề đều nằm ở phần mềm. Chúng tôi bắt đầu từ bối cảnh vận hành, dữ liệu và quy trình ra quyết định để xác định đúng nguyên nhân gốc, sau đó đề xuất hướng xử lý có tiêu chí nghiệm thu và khả năng vận hành lâu dài.
```

## Audit Văn Phong EN

EN hiện khá tốt nhưng còn vài cụm generic hoặc có rủi ro proof:

- `Engineering Partner` -> `Trusted partner for enterprise software systems`
- `Project Contexts` -> `Delivery contexts` hoặc `Systems delivered`, tùy proof.
- `Trusted across industries` -> `Experience across operating contexts`
- `Client Rating` -> bỏ nếu không có source rating verified.
- `Demo data` -> không nên public như testimonial. Đổi thành representative/internal example hoặc ẩn.

EN hero sample:

```text
Trusted partner
for enterprise software systems

Hoang Khang designs, builds, and operates software systems around real business workflows: digital products, SaaS platforms, internal operations, AI integration, infrastructure modernization, and long-term handover.
```

## Audit Theo Từng Trang

### Home - `/vi`, `/en`

Trang home đã ra được chất enterprise: sạch, rõ, có hệ thống năng lực, có hero illustration và các khối proof. Điểm cần chỉnh là hero wording còn hơi “engineering-heavy”; với CEO/ban điều hành, nên đưa thông điệp “đối tác đồng hành/tin cậy” lên trước, kỹ thuật nằm sau.

Cần sửa:

- Đổi hero headline theo đề xuất trên.
- Giảm lặp “kỹ thuật” ở CTA và các heading.
- Kiểm tra các số liệu/stat: chỉ giữ nếu có proof nội bộ.
- Home illustration đã có ý nghĩa, nhưng có thể thêm một “operating model strip” nhỏ dưới hero để nối rõ từ quy trình, kiến trúc, phát triển, kiểm soát đến vận hành.
- Section 6 capabilities hiện tốt, nhưng nên thêm 3 focus box về “tiêu chuẩn ngành, chỉ tiêu đo lường, governance/acceptance criteria” như user đã yêu cầu.

Screenshot tham chiếu:

- `/tmp/hkshots/audit-2026-06-29-strategy/light/vi-home.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/dark/vi-home.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/mobile/vi-home.png`

### Services - `/vi/services`, `/en/services`

Trang services có nội dung sâu và nhiều diagram hơn trước. Tuy nhiên top page còn dài và rhythm card lặp lại. “Bốn nhóm năng lực triển khai” cần đổi nếu home và strategy đang đi theo 5 nhóm.

Cần sửa:

- Thống nhất 5 nhóm năng lực hoặc giải thích vì sao services chỉ có 4 service lines.
- Cards đầu trang nên có icon/diagram nhỏ có ý nghĩa riêng, không chỉ box + text.
- Các SVG diagram cần đồng bộ stroke, scale, spacing; tránh cảm giác vẽ tay quá nhanh.
- CTA Title Case cần sentence case.
- Dark mode ổn định nhưng card rhythm quá đều; cần 1-2 section signature mạnh hơn.

Screenshot:

- `/tmp/hkshots/audit-2026-06-29-strategy/light/vi-services.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/dark/vi-services.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/mobile/vi-services.png`

### Custom Software / SCRUM Area

Flow SCRUM hiện sạch nhưng có nguy cơ overflow ở viewport hẹp. User đã nhận xét đúng: nên để 2 row, diagram SCRUM một row riêng để text không bị chen. Icon trong list cần căn giữa theo text baseline.

Cần sửa:

- Remake section theo layout:
  - Row 1: nội dung cam kết, list có icon alignment chuẩn.
  - Row 2: SCRUM timeline full width, mỗi step có title/desc ngắn, không overflow.
- Description mỗi step tối đa 1-2 dòng desktop, mobile xếp thành vertical timeline.
- Diagram dùng token color, stroke consistent, icon đơn giản hơn và thẳng hàng.

### SME Manufacturing - `/vi/solutions/sme-manufacturing`, `/en/solutions/sme-manufacturing`

Trang này đã nâng cấp rõ, có nhiều diagram và nội dung ngành. Nhưng trên mobile quá dài, đang giống technical dossier hơn landing page. Với lần đầu truy cập, CEO/ops leader có thể bị quá tải.

Cần sửa:

- Tách thành executive overview + technical deep dive:
  - Executive overview: pain, operating model, roadmap, outcomes, CTA.
  - Technical appendix: architecture, stack, integration, security, roadmap details.
- Grid “Tổ dữ liệu công nghệ được đề xuất” cần giữ layout 3 trên 2 dưới ở desktop và center.
- Thêm illustration/sơ đồ cho pain section để bớt plain.
- Giảm độ dài bullet; mỗi card nên có 3-4 ý quan trọng nhất.

Screenshot:

- `/tmp/hkshots/audit-2026-06-29-strategy/light/vi-sme-manufacturing.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/mobile/vi-sme-manufacturing.png`

### Scrum - `/vi/scrum`, `/en/scrum`

Trang SCRUM sạch, dễ đọc, hợp với “controlled delivery”. Nhưng hero/top visual còn plain và một số section vẫn card/border cơ bản.

Cần sửa:

- Hero nên có process illustration tinh gọn: discovery, sprint, review, handover.
- “Sprint Cycle Details” hoặc bản VI tương ứng cần visual row full width thay vì card + diagram hai cột nếu bị overflow.
- Bỏ các phrase quá textbook; viết theo cách “khách hàng thấy được gì trong mỗi chu kỳ”.

### Tech Stack - `/vi/tech-stack`, `/en/tech-stack`

Trang rõ về công nghệ, nhưng hơi catalog. Để thể hiện tầm công ty phần mềm, cần chuyển từ “danh sách tech” sang “cách ra quyết định công nghệ”.

Cần sửa:

- Thêm section “Cách chúng tôi chọn kiến trúc”:
  - Quy mô người dùng/dữ liệu
  - Tần suất thay đổi nghiệp vụ
  - Tích hợp và bảo mật
  - Năng lực đội ngũ khách hàng sau bàn giao
  - Chi phí vận hành
- Tech badges nên nhiều hơn và có nhóm: backend, frontend, mobile, data, AI, cloud, DevOps, observability, security.
- Tránh chỉ liệt kê logo/tên tech; mỗi nhóm cần nói vì sao được chọn.

### Certifications - `/vi/certifications`, `/en/certifications`

Đây là trang có rủi ro trust cao. Hình thức sạch, nhưng nội dung cần làm rõ để không bị hiểu nhầm là công ty đã đạt ISO/SOC2/GDPR/HIPAA/PCI.

Cần sửa:

- Đổi heading thành `Khung tiêu chuẩn tham chiếu`.
- Thêm note rõ: `Các tiêu chuẩn dưới đây là khung tham chiếu khi thiết kế yêu cầu và kiểm soát triển khai; không phải tuyên bố chứng nhận pháp lý nếu không được ghi rõ.`
- Nếu có chứng chỉ cá nhân/thành viên, tách thành `Chứng chỉ đội ngũ`.
- Nếu không có proof, bỏ rating/score/claim mạnh.

### Case Studies - `/vi/case-studies`, `/en/case-studies`

Structure case study đã đúng hướng: context, challenge, solution, outcome, stack, patterns. Tuy nhiên testimonial/stats cần proof.

Cần sửa:

- Nếu chưa được phê duyệt public: dùng “representative case context” thay vì “case study” có kết quả như thật.
- Bỏ star rating nếu không có nguồn.
- Đổi các outcome định lượng sang qualitative hoặc verified metric có source.
- Thêm “what we actually delivered” và “handover assets” cho từng case để tăng chất năng lực.

### About - `/vi/about-us`, `/en/about-us`

Đây là trang cần sửa gấp do placeholder leadership. Ngoài ra trang about nên ít nói “chúng tôi tốt” và nhiều hơn về cách tổ chức đội ngũ, governance, delivery roles.

Cần sửa:

- Bỏ placeholder tên/ảnh nếu chưa có real data.
- Nếu muốn giữ section đội ngũ, đổi sang:
  - Solution & business analysis
  - Product engineering
  - QA & delivery governance
  - DevOps & security
  - Data/AI integration
- Thêm “cách làm việc với khách hàng” thay vì chỉ giá trị chung.

### Pricing - `/vi/pricing`, `/en/pricing`

Pricing có disclaimer tốt hơn trước. Tuy nhiên public “gói USD/tháng” có thể làm site giống productized agency, trong khi định vị là hồ sơ năng lực enterprise.

Cần sửa:

- Xem lại pháp lý và thuế cho việc hiển thị giá USD trên site public tại Việt Nam.
- Nếu vẫn để giá: ghi rõ “tham khảo ngân sách lập kế hoạch, chưa bao gồm VAT/hạ tầng/bản quyền bên thứ ba, báo giá chính thức theo hợp đồng”.
- Đề xuất đổi layout từ pricing plans sang engagement models:
  - Discovery & scope definition
  - Dedicated delivery team
  - Platform modernization
  - Managed evolution/maintenance
- CTA: `Trao đổi phạm vi dự án` thay vì đặt lịch/báo giá quá bán hàng.

### Contact - `/vi/contact`, `/en/contact`

Trang functional, sạch, dễ dùng. Nhưng với định vị pro hơn, nên đổi copy thành “trao đổi bối cảnh triển khai” thay vì liên hệ chung.

Cần sửa:

- `Liên hệ HKIncotech` -> `Trao đổi bối cảnh triển khai`
- Form label nên hỏi context: loại hệ thống, mục tiêu, hiện trạng, deadline, người phụ trách.
- CTA submit: `Gửi bối cảnh dự án`.

### R&D / AI / HKSpace / Yolius

Cần audit thêm trong vòng tiếp theo vì script hiện tại chưa screenshot blog/R&D và nếu có Yolius route/page riêng thì cần đưa vào scope.

Cần làm rõ:

- Hoàng Khang là owner/operator của một số platform như HKSpace/Yolius, không chỉ outsourcing.
- Những claim về platform phải có trang giải thích sản phẩm, role ownership, use case và kiến trúc ở mức vừa đủ.
- AI page nên tập trung “AI có kiểm soát trong quy trình nghiệp vụ”, không hype model.

## Điều Hướng, Header, Footer

Mega menu:

- Desktop services/expertise/company đã theo đúng hướng: menu chính bên trái, intro bên phải.
- Mobile menu đã full-left align, không còn center bug lớn.
- Cần check tiếp line height/spacing khi text dài và dark mode hover.

Footer:

- Screenshot gần đây cho thấy footer columns cần thẳng hàng hơn và tránh text wrap bất thường.
- Logo footer trắng/dark cần giữ chuẩn: logo official `#183060` cho nền sáng, logo trắng cho nền đậm.
- Link footer nên sentence case, font weight không quá 600.

Screenshot:

- `/tmp/hkshots/audit-2026-06-29-strategy/nav-states/desktop-services.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/nav-states/desktop-expertise.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/nav-states/desktop-company.png`
- `/tmp/hkshots/audit-2026-06-29-strategy/nav-states/mobile-menu-open.png`

## Audit Visual System

Điểm tốt:

- Palette navy enterprise nhất quán hơn.
- Dark mode đã hết nhiều lỗi xanh sáng/chu trắng mờ.
- Nhiều section đã có icon/diagram, không còn quá plain như ban đầu.

Điểm còn yếu:

- Quá nhiều card với border mỏng, icon nhỏ, spacing giống nhau. Trang dài sẽ bị “flat”.
- Một số SVG handmade còn cần audit zoom: stroke, corner radius, line cap, icon center, baseline text.
- Banner/illustration nên có vai trò nội dung, không chỉ trang trí.
- Một số page cần có “section signature” riêng:
  - Home: operating system map.
  - Services: capability architecture.
  - SME: factory data flow.
  - Scrum: delivery governance timeline.
  - Tech stack: architecture decision model.
  - Certifications: reference framework matrix.

Quy tắc visual tiếp theo:

- Mỗi illustration phải trả lời một câu hỏi của người đọc.
- Không thêm hình nếu chỉ làm đầy trang.
- Stroke icon đồng bộ, không quá dày, không dùng raw hex nếu có thể token hóa.
- Desktop: tránh card ngắn xếp lẻ loi. Mobile: mỗi section phải có rhythm rõ, không để page thành danh sách quá dài.

## Audit Dark Mode

Dark mode đã ổn định hơn các screenshot trước. Tuy nhiên:

- Các section dark có nhiều card cùng màu, gây cảm giác đều.
- Badge pill cần đảm bảo contrast text/icon trên nền dark.
- Nếu dùng SVG inline, cần kiểm tra fill/stroke theo token dark.
- Cần chạy thêm audit với hover/menu/dropdown dark.

## Audit Mobile

Tất cả trang đã kiểm tra đều trả 200 và render được. Vấn đề chính là độ dài và density:

- Home mobile: khoảng 31k px.
- Services mobile: khoảng 39k px.
- SME mobile: khoảng 56k px.

Hướng sửa:

- Trên mobile, chuyển các deep content thành accordion/summary blocks.
- Mỗi page cần có executive summary 1 màn hình đầu, sau đó mới vào detail.
- SME nên có “download technical profile” hoặc “xem chi tiết” thay vì show toàn bộ ngay.

## Robots / Demo Public

User yêu cầu demo không index. Cần kiểm tra và deploy:

```text
User-agent: *
Disallow: /
```

Nên thêm meta noindex nếu demo dùng layout riêng:

```html
<meta name="robots" content="noindex,nofollow">
```

Production chính thức thì không dùng rule này nếu cần SEO.

## Thứ Tự Triển Khai Đề Xuất

### Loop 1 - Trust cleanup

- Gỡ leadership placeholder/draft.
- Làm rõ certification/reference frameworks.
- Ẩn hoặc viết lại demo testimonials/star ratings.
- Xác nhận pricing legal/disclaimer.

### Loop 2 - Hero and global copy

- Thay hero positioning VI/EN.
- Thay CTA wording toàn site.
- Sentence-case toàn bộ label VI.
- Giảm lặp `kỹ thuật`.
- Đồng bộ nghĩa EN/VI, không dịch từng chữ.

### Loop 3 - Visual/IA upgrades

- Home: thêm 3 focus boxes và refine operating model strip.
- Services: thống nhất 5 capability groups, upgrade top cards.
- Custom software/SCRUM section: remake thành 2 rows.
- SME: tách landing summary/deep dive, improve pain và stack sections.
- Tech stack: thêm architecture decision model.

### Loop 4 - Design-system cleanup

- Chuyển hardcoded colors sang vars khi phù hợp.
- Update `CODE.md` token docs.
- Audit font-weight max 600.
- Normalize icon size, stroke và alignment.

### Loop 5 - Screenshot QA

- Desktop light/dark cho toàn bộ key routes.
- Mobile cho toàn bộ key routes.
- Nav dropdown states.
- Zoom audit cho SVG/illustration sections.
- Final VI native read và EN business read.

## Tiêu Chí Đạt

- Không còn placeholder, draft badge, demo testimonial đang public.
- Không có standards/certification card có thể hiểu nhầm là chứng nhận công ty nếu chưa có proof.
- Hero đọc lên có tầm “đối tác xây dựng hệ thống doanh nghiệp”, không bị vendor kỹ thuật thuần.
- VI sentence case, tự nhiên, không thô kiểu dịch máy.
- EN rõ, gọn, không generic claim.
- CTA không còn “free call/30 minutes” nếu không đúng mục tiêu site.
- Dark mode đọc tốt, không có badge/box text mờ.
- Mobile không để SME/services thành technical dump quá dài.
- Diagrams có ý nghĩa và zoom 700-800% không lộ line/corner/stroke lỗi.
- `docs/CODE.md`, `docs/PLAN.md`, `docs/MINDSET_VISION_DESIGN.md` đồng bộ sau khi implement.

## Câu Hỏi Mở

1. Chọn hero VI theo hướng nào?
   - Đề xuất: `Đối tác đồng hành xây dựng / hệ thống phần mềm doanh nghiệp`
   - Nếu muốn dùng “tin cậy”: `Đối tác tin cậy cho / hệ thống phần mềm doanh nghiệp`

2. Có được public tên/ảnh leadership không?
   - Nếu không, nên bỏ section leadership và thay bằng delivery roles.

3. Case studies/testimonials đã được khách hàng phê duyệt chưa?
   - Nếu chưa, nên đổi thành representative contexts.

4. Pricing có tiếp tục public bằng USD không?
   - Nếu có, cần wording pháp lý rõ hơn.

5. Yolius có route/page/public material riêng không?
   - Nếu có, cần thêm vào audit screenshot và copy strategy.
