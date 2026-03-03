# SEM_DESIGN.md

## 1. Tài liệu này để làm gì?

Đây là tài liệu gốc để đội ngũ cập nhật deck **FDI Manufacturing** (slide 50–64).

Mục tiêu:

- Viết rõ chiến lược trước khi sửa slide.
- Giải thích đơn giản để người không kỹ thuật cũng hiểu.
- Giữ nội dung đồng bộ, dễ bảo trì.

Nguyên tắc bắt buộc:

1. Update tài liệu design trước.
2. Chốt nội dung với team.
3. Mới update slide.

> Không làm ngược quy trình.

---

## 2. Scope áp dụng

- Slide áp dụng: `slides/slide_50.php` đến `slides/slide_64.php`.
- Prefix title: `FDI Manufacturing:` trong `config.php`.

---

## 3. Bài toán khách hàng (nói thật dễ hiểu)

Khách hàng của mình là nhà máy FDI sản xuất.

Họ thường gặp vấn đề:

- Nhiều phòng ban dùng file rời, dữ liệu không khớp nhau.
- Quản lý không thấy tình hình sản xuất theo thời gian thực.
- Theo dõi chất lượng còn thủ công, khó truy vết.
- Audit và compliance làm tốn thời gian.

Nói ngắn gọn:

**Nhà máy thiếu một hệ thống vận hành chung, đủ chuẩn, nhưng vẫn linh hoạt.**

---

## 4. Solution của mình làm được gì cho khách?

Giải pháp của mình là **Manufacturing Operating Framework** (dạng module).

Giải pháp giúp khách:

1. Quản lý sản xuất rõ hơn (work order, tiến độ, downtime).
2. Đồng bộ kho và sản xuất (raw material, WIP, finished goods).
3. Kiểm soát chất lượng theo chuẩn (incoming, in-process, final QC).
4. Có dashboard cho quản lý xem KPI nhanh.
5. Có audit trail để truy vết và làm compliance dễ hơn.

Giải pháp của mình **không phải**:

- Không phải full ERP nặng như SAP/Oracle.
- Không phải phần mềm chắp vá, làm kiểu từng dự án không có chuẩn.

Giải pháp của mình là:

**Chuẩn hóa đủ dùng + triển khai thực tế + mở rộng được theo từng giai đoạn.**

---

## 5. Market Positioning Gap (thông điệp bắt buộc)

Phần này phải nói rất rõ trên slide (slide 53 hoặc 61):

- **Không quá over như SAP**: chi phí cao, triển khai nặng, khó linh động theo thực tế SME.
- **Không chộp giựt như nhiều vendor custom**: làm nhanh nhưng thiếu bài bản, khó bảo trì dài hạn.
- **Vị trí của mình**: giải pháp có kiến trúc chuẩn, module rõ ràng, triển khai linh hoạt theo nhà máy.

Thông điệp one-line gợi ý:

> “We are structured enough to scale, and flexible enough to deploy fast for FDI manufacturing factories.”

---

## 6. Cách làm (delivery model) — dùng SCRUM

## 6.1 Vì sao dùng SCRUM

Vì nhà máy thay đổi liên tục theo sản xuất thực tế, cần cách làm:

- Nhỏ, nhanh, kiểm soát được.
- Có review theo sprint.
- Có backlog rõ và ưu tiên theo business value.

## 6.2 SCRUM setup đề xuất

- Sprint length: 2 tuần.
- Sprint Planning: chốt scope theo ưu tiên vận hành.
- Daily Scrum: 15 phút, chốt blocker nhanh.
- Sprint Review: demo trực tiếp cho stakeholder.
- Retrospective: rút kinh nghiệm và cải tiến sprint sau.

## 6.3 Vai trò chính

- Product Owner: chốt ưu tiên business.
- Scrum Master: giữ quy trình và gỡ blocker.
- Tech Lead / Architect: đảm bảo kiến trúc đúng chuẩn.
- QA Lead: đảm bảo chất lượng và tiêu chí test.
- BA/Domain Analyst: chuyển hóa yêu cầu nghiệp vụ nhà máy thành user story.
- Dev Team: xây module và tích hợp.

---

## 7. Hình thức triển khai cho khách hàng

Triển khai theo 3 lớp:

1. **Pilot-first**
  - Chọn 1 nhà máy/1 line ưu tiên.
  - Làm nhanh 1–2 module quan trọng để kiểm chứng.

2. **Module-by-module rollout**
  - Không big-bang.
  - Mở rộng theo luồng nghiệp vụ: Production -> Warehouse -> Quality -> Dashboard.

3. **Scale deployment**
  - Khi pilot ổn, nhân rộng sang line/plant khác.
  - Dùng checklist chuẩn để giữ chất lượng rollout.

---

## 8. Bảo mật (Security) — phải có trong story

Khi trình bày, bắt buộc nói rõ các lớp bảo mật cơ bản:

1. Access control
  - RBAC theo vai trò (operator, supervisor, manager, admin).
  - Nguyên tắc least privilege.

2. Data security
  - Mã hóa dữ liệu khi truyền (TLS).
  - Mã hóa dữ liệu nhạy cảm khi lưu.

3. Audit & traceability
  - Log các thao tác quan trọng.
  - Có lịch sử thay đổi để phục vụ audit.

4. Security operations
  - Backup định kỳ.
  - Khôi phục dữ liệu có kịch bản test.
  - Theo dõi bất thường và cảnh báo sự cố.

5. Secure delivery
  - Code review.
  - Kiểm tra lỗ hổng dependency.
  - Quy trình release có checklist.

One-line dễ hiểu cho BOD:

> “Security is built-in from architecture to operation, not added later.”

---

## 9. Chứng chỉ và chuẩn liên quan (nêu đúng mức)

Mục này dùng để tăng niềm tin, không cần khoe quá mức.

Các nhóm chứng chỉ/chuẩn nên đề cập:

- **ISO 27001** (khung quản lý an toàn thông tin) — định hướng cho security governance.
- **ISO 9001** (quản lý chất lượng) — định hướng cho quality process.
- **SCRUM certifications** (PSM/CSM/PO) — bảo đảm cách làm agile bài bản.
- **Cloud/security fundamentals** (AWS/Azure/GCP security tracks) — năng lực vận hành hạ tầng an toàn.

Lưu ý quan trọng:

- Chỉ ghi chứng chỉ khi có thực.
- Nếu chưa có đầy đủ, dùng câu: “roadmap chứng chỉ” thay vì claim đã đạt.

---

## 10. Hệ thống đảm bảo điều gì?

Khi BOD hỏi “hệ thống đảm bảo gì?”, trả lời theo 6 điểm:

1. Dữ liệu vận hành rõ ràng hơn.
2. Quy trình chuẩn hơn, ít phụ thuộc cá nhân.
3. Truy vết nhanh hơn khi có lỗi.
4. Báo cáo điều hành nhanh hơn.
5. Dễ audit/compliance hơn.
6. Dễ mở rộng sang nhà máy khác hơn.

---

## 11. Scale như thế nào?

Scale theo 4 tầng:

1. Scale module
  - Bật thêm chức năng theo nhu cầu.

2. Scale user/load
  - Tối ưu database, caching, queue.

3. Scale site
  - Mở từ 1 factory sang multi-factory.

4. Scale integration
  - Kết nối ERP/MES/WMS hiện có qua API.

Nguyên tắc scale:

**Chuẩn hóa trước, nhân rộng sau.**

---

## 12. Đội ngũ chuyên gia là ai?

Trên slide nên có 1 block ngắn về team (slide 59 hoặc 64):

- Domain Consultant (manufacturing flow)
- Solution Architect
- Product Owner
- Scrum Master
- Backend/Frontend Engineers
- QA/Automation QA
- DevOps/SRE
- Support Lead

Thông điệp:

> “Đây là đội đa vai trò, đủ năng lực từ tư vấn quy trình đến vận hành sau go-live.”

---

## 13. Bảo trì và support như thế nào?

## 13.1 Bảo trì (Maintenance)

- Preventive maintenance: kiểm tra định kỳ hiệu năng và lỗi tiềm ẩn.
- Corrective maintenance: xử lý bug theo mức độ ưu tiên.
- Adaptive maintenance: cập nhật theo thay đổi quy trình nhà máy.
- Version management: có lịch phát hành rõ.

## 13.2 Support model

- L1: tiếp nhận và phân loại sự cố.
- L2: xử lý nghiệp vụ và cấu hình.
- L3: xử lý kỹ thuật sâu, fix code/infrastructure.

## 13.3 SLA mẫu (nêu ở mức định hướng)

- Critical: phản hồi nhanh, xử lý ưu tiên cao.
- High/Medium/Low: có thời gian phản hồi và xử lý theo cấp độ.

---

## 14. Storyline chi tiết cho từng slide (phiên bản dễ hiểu)

## Slide 50 — Title

Mục tiêu: mở bối cảnh.

Người nghe cần hiểu:

- Đây là định hướng sản phẩm cấp chiến lược.
- Trình bày cho BOD để xin quyết định.

## Slide 51 — Executive Summary

Mục tiêu: tóm tắt toàn bộ đề xuất trong 1 slide.

Nói đơn giản:

- Thị trường đang mở.
- Khách đang đau.
- Có khoảng trống.
- Mình có cách làm phù hợp.
- Cần đi theo hướng sản phẩm ngành dọc.

## Slide 52 — Why Now

Mục tiêu: tạo tính cấp thiết có cơ sở.

## Slide 53 — Market Positioning Gap (focus slide bắt buộc)

Mục tiêu: chốt vị trí cạnh tranh của mình.

Thông điệp bắt buộc phải đọc lên được:

- Không over như SAP: quá nặng cho SME.
- Không chộp giựt như nhiều vendor custom: thiếu chuẩn và khó đi đường dài.
- Mình đi giữa: đủ chuẩn + đủ linh hoạt + triển khai thực tế.

## Slide 54 — Pain Points

Mục tiêu: làm rõ vì sao khách cần hệ thống mới.

## Slide 55 — Product Vision

Mục tiêu: nói rõ mình bán cái gì.

## Slide 56 — Architecture 3 Layers

Mục tiêu: tạo niềm tin kỹ thuật và khả năng scale.

## Slide 57 — Core Modules

Mục tiêu: cho thấy module tác động trực tiếp tới vận hành.

## Slide 58 — Quality + Executive

Mục tiêu: cho thấy giá trị cho cả nhà máy và quản lý cấp cao.

## Slide 59 — SCRUM + Implementation

Mục tiêu: trả lời “làm bằng cách nào?”.

Nên thêm rõ:

- Sprint 2 tuần.
- Demo mỗi sprint.
- Pilot trước khi nhân rộng.

## Slide 60 — Business Model

Mục tiêu: trả lời “kiếm tiền và tăng trưởng ra sao?”.

## Slide 61 — Competitive Positioning

Mục tiêu: nhắc lại lợi thế so với ERP lớn và vendor custom.

## Slide 62 — Roadmap 24–36 tháng

Mục tiêu: chứng minh lộ trình thực tế, không vẽ quá xa.

## Slide 63 — Risks & Mitigation

Mục tiêu: BOD thấy team có control plan, không chạy theo cảm tính.

## Slide 64 — Strategic Impact & Decision

Mục tiêu: chốt xin phê duyệt:

1. Hướng chiến lược
2. Ngân sách R&D
3. Pilot FDI factories

---

## 15. Ngôn ngữ và phong cách viết (đơn giản, dễ hiểu)

Rule viết:

- 1 câu = 1 ý.
- Tránh từ chuyên môn nếu không cần.
- Nếu dùng thuật ngữ, phải có câu giải thích ngắn.
- Mỗi slide có 1 câu kết luận cuối slide.

Ví dụ câu kết luận tốt:

- “Giải pháp này giúp nhà máy vận hành rõ dữ liệu, giảm sai lệch và mở rộng có kiểm soát.”

### 15.1 Glossary bắt buộc (phải giải thích trên slide khi dùng)

- **ERP**: hệ thống quản trị tổng thể doanh nghiệp, thường rất rộng và triển khai nặng.
- **Module**: khối chức năng riêng (ví dụ: kho, chất lượng), có thể triển khai từng phần.
- **WIP (Work In Progress)**: hàng đang trong quá trình sản xuất, chưa là thành phẩm.
- **OEE**: chỉ số hiệu quả tổng thể máy/chuyền sản xuất.
- **Downtime**: thời gian máy/chuyền dừng, không sản xuất được.
- **RBAC**: phân quyền theo vai trò người dùng.
- **Audit trail**: lịch sử ai làm gì, lúc nào, trên dữ liệu nào.
- **SLA**: cam kết thời gian phản hồi/xử lý support.
- **Pilot**: triển khai thử ở phạm vi nhỏ trước khi nhân rộng.
- **Recurring revenue**: doanh thu định kỳ từ bảo trì, vận hành, licensing.

> Rule: Nếu trong slide có từ chuyên môn, phải có dòng giải thích ngắn ngay gần nội dung đó.

---

## 16. Visual rule để không bị “AI style”

- Ít màu, nhiều khoảng trắng.
- Card thẳng, sạch, không hiệu ứng phức tạp.
- Chữ đậm ở đúng điểm cần nhấn.
- Dùng icon vừa đủ, không trang trí quá nhiều.
- Tránh nhồi chữ đầy slide.

---

## 17. Quy trình cập nhật chuẩn (DESIGN -> SLIDES)

### 17.0 Mapping bắt buộc cho phiên bản hiện tại

- **Market Positioning Gap**: phải có câu “không over như SAP, không chộp giựt như vendor custom”.
- **SCRUM & cách làm**: phải có sprint flow + vai trò + cadence review.
- **Triển khai**: phải có pilot -> rollout -> scale.
- **Bảo mật**: phải có RBAC + encryption + audit trail + backup.
- **Chứng chỉ**: phải có mục hiện có/roadmap rõ, không claim sai.
- **Hệ thống đảm bảo gì**: phải có outcome vận hành rõ cho khách.
- **Đội ngũ chuyên gia**: phải có danh sách vai trò chính.
- **Bảo trì & support**: phải có mô hình L1/L2/L3 + SLA định hướng.

## Bước 1 — Sửa design

Phải cập nhật:

- Mục tiêu thay đổi
- Slide nào bị ảnh hưởng
- Key message mới
- Checklist kiểm tra

## Bước 2 — Chốt nội dung

Review nhanh với PO/Lead trước khi sửa code.

## Bước 3 — Sửa slides

- Chỉ sửa slide nằm trong scope.
- Không đổi style global nếu chưa đánh giá impact.

## Bước 4 — QA

- QA content
- QA visual
- QA navigation
- QA syntax

## Bước 5 — Ghi changelog

Luôn ghi lại để team sau đọc là hiểu ngay.

---

## 18. Checklist trước khi merge

- [ ] Nội dung đã dễ hiểu cho người không kỹ thuật
- [ ] Có nói rõ solution làm gì cho khách
- [ ] Có nói rõ cách làm bằng SCRUM
- [ ] Có nói rõ hình thức triển khai (pilot -> rollout -> scale)
- [ ] Có nói rõ security
- [ ] Có nói rõ maintenance và support
- [ ] Có nhắc market positioning gap đúng thông điệp
- [ ] Không claim chứng chỉ sai sự thật
- [ ] Prefix `FDI Manufacturing:` đúng toàn bộ 50–64
- [ ] Không có lỗi syntax

---

## 19. Changelog template

## [YYYY-MM-DD] SEM Design Update

### Why
- Lý do cần đổi

### What changed in design
- Điểm thay đổi chính

### Slides impacted
- Updated: slide_xx, slide_yy
- No change: ...

### Validation
- Content clarity: pass/fail
- Visual consistency: pass/fail
- Syntax: pass/fail

### Next action
- Việc cần làm tiếp

---

## 20. Kết luận

Tài liệu này là “bản thiết kế chiến lược” trước khi đụng vào slide.

Làm đúng quy trình **DESIGN trước -> SLIDES sau** thì deck sẽ:

- Dễ hiểu hơn cho BOD
- Dễ maintain hơn cho team
- Dễ scale hơn khi mở rộng sang các solution khác

Khi tuân thủ đúng quy trình **DESIGN trước -> SLIDES sau**, team sẽ:

- Dễ maintain
- Ít lệch narrative
- Tăng chất lượng trình bày BOD
- Giảm chi phí sửa đi sửa lại theo cảm tính
