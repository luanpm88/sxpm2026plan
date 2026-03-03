# DESIGN.md

## 1) Mục tiêu tài liệu

Đây là bản thiết kế trình bày chính thức cho deck BOD.

Deck áp dụng: `slides/slide_50.php` -> `slides/slide_80.php`.

Mục tiêu:

- Trình bày sản phẩm theo chuẩn enterprise, ngôn ngữ dễ hiểu.
- Trả lời đủ toàn bộ checklist trong guideline BOD.
- Đảm bảo quy trình làm việc đúng thứ tự: **DESIGN -> SLIDES**.

---

## 2) Nguồn tham chiếu bắt buộc

1. `BOD_REQUIREMENT.md` (tổng hợp guideline BOD).
2. Tài liệu sản phẩm và năng lực nội bộ hiện có.
3. Dữ liệu thị trường/ngành phụ trách của quản lý chuyên môn.

---

## 3) Quy trình bắt buộc

1. Cập nhật/đối chiếu `BOD_REQUIREMENT.md`.
2. Cập nhật `DESIGN.md` (file này).
3. Review nội bộ (Manager + Marketing + Delivery Lead).
4. Viết/cập nhật slides.
5. QA nội dung + QA visual + QA syntax.

Không làm ngược thứ tự.

---

## 4) Mạch thông điệp chính của deck

## 4.1 Core message

Công ty xây giải pháp sản phẩm theo chuẩn enterprise để phục vụ phân khúc FDI/large manufacturing, trong đó **FDI sản xuất tại khu công nghiệp là ưu tiên triển khai trước**.

## 4.2 Tuyên bố định vị bắt buộc

- Không over như ERP lớn (quá nặng, khó linh hoạt).
- Không chộp giựt như custom ad-hoc (thiếu chuẩn, khó bảo trì).
- Hướng của mình: kiến trúc chuẩn + triển khai linh hoạt + vận hành dài hạn.

One-line:

> Structured enough to scale, flexible enough to deploy.

---

## 5) Ma trận yêu cầu BOD -> slide đáp ứng

## 5.1 Bối cảnh & mục tiêu chung

Yêu cầu BOD:

- Phân khúc: FDI, vendor cấp 1-2, tập đoàn đa quốc gia, doanh nghiệp nội địa sản xuất lớn.
- Thứ tự ưu tiên: làm trước nhóm FDI sản xuất trong khu công nghiệp, sau đó mới mở rộng sang nhóm khác.
- Khu vực trọng tâm: phía Nam.
- Ngành ưu tiên: điện-điện tử, linh kiện ô tô.
- Ngành mở rộng: công nghiệp phụ trợ, sản xuất tiêu dùng lớn, thiết bị công nghiệp/chế tạo.
- 3 mảng công ty: phần cứng, hạ tầng CNTT, phần mềm tùy chỉnh.

Slide đáp ứng:

- Slide 51, 52, 54.

## 5.2 Vai trò & trách nhiệm

Yêu cầu BOD:

- BOD: quyết định phân khúc, phê duyệt danh mục, phê duyệt phạm vi năng lực cam kết.
- Manager: nghiên cứu thị trường, xây giải pháp, kiến trúc, quy trình, chịu trách nhiệm chuyên môn.
- Marketing: chuẩn hóa thông điệp, chuyển hóa thành nội dung website và cấu trúc hình ảnh.

Slide đáp ứng:

- Slide 52, 64.

## 5.3 Giai đoạn thực hiện

Yêu cầu BOD:

- T3: xây danh mục theo chuyên môn.
- T4: trình bày và phê duyệt BOD.
- T5: chuẩn hóa nội dung và triển khai website.

Slide đáp ứng:

- Slide 59, 64.

Quy tắc triển khai bắt buộc:

- Giai đoạn đầu phải có danh sách pilot FDI sản xuất cụ thể theo tiêu chí chọn mẫu (độ sẵn sàng dữ liệu, quy mô line, mức ưu tiên downtime).
- Chỉ mở rộng Year 2 khi Year 1 đã có baseline KPI, bộ tài liệu chuẩn và quy trình vận hành đã được nghiệm thu nội bộ.

## 5.4 Đặc điểm khách hàng mục tiêu

Yêu cầu BOD:

- Nhóm FDI: chuẩn quốc tế, quản trị rủi ro chặt, bảo mật cao, quan tâm SLA/uptime/compliance/ROI.
- Nhóm sản xuất lớn: nhiều dây chuyền, 2-3 ca, IT gắn với sản xuất, downtime tổn thất lớn.

Slide đáp ứng:

- Slide 53, 54, 62.

## 5.5 Vấn đề thường gặp theo 3 mảng

Yêu cầu BOD:

1) Phần cứng: không đồng bộ thiết bị, không kiểm soát vòng đời, downtime, khó quản lý tài sản IT, rủi ro thiết bị cũ.
2) Hạ tầng CNTT: mạng thiếu ổn định, không tách IT/OT, bảo mật cao, thiếu DR/Backup, khó tích hợp ERP/MES.
3) Phần mềm tùy chỉnh: quản lý thủ công, không tích hợp dữ liệu, thiếu realtime, thiếu dashboard, phụ thuộc Excel.

Slide đáp ứng:

- Slide 54, 55, 58.

## 5.6 Cấu trúc trình bày một giải pháp (A + B)

Yêu cầu BOD:

### A) Dành cho khách hàng

1. Bối cảnh ngành cụ thể
2. Bài toán kinh doanh rõ ràng
3. Mục tiêu chiến lược khách hàng 1-3 năm
4. Giải pháp tổng thể
5. Phương pháp triển khai
6. Tiêu chuẩn & cam kết (SLA, KPI, uptime, security, tiêu chuẩn)
7. Giá trị định lượng

### B) Nâng cấp nội bộ

8. Năng lực hiện tại
9. Năng lực yêu cầu
10. Khoảng cách cụ thể
11. Chuyên môn & chứng chỉ
12. Nhân sự
13. Quy trình & quản trị
14. Công cụ
15. Mốc thời gian
16. Nguồn lực & chi phí

Slide đáp ứng:

- A: slide 55, 56, 57, 58, 59, 62.
- B: slide 60, 61, 62, 63, 64.

## 5.7 Câu hỏi phản biện BOD

Yêu cầu BOD:

- Giải pháp đã rõ khách hàng cụ thể chưa?
- Có chứng minh đây là vấn đề kinh doanh chưa?
- Có tính hệ thống chưa?
- Có quy trình triển khai rõ chưa?
- Có cam kết cụ thể chưa?
- Có đo lường hiệu quả chưa?

Slide đáp ứng:

- Slide 63 (phản biện), slide 64 (quyết định).

Quy tắc trình bày:

- Slide 63 là Q&A hub và được trình bày ở cuối deck (sau slide 80) để tổng kết toàn bộ bằng chứng.

---

## 6) Storyline chi tiết cho slide 50–80

## Slide 50 — Title & Objective

- Mở bối cảnh chiến lược và chốt mục tiêu buổi họp theo ngôn ngữ điều hành.
- Bắt buộc nêu 4 câu BOD cần được trả lời: khách hàng nào, vấn đề nào, giải pháp nào, triển khai/cam kết ra sao.
- Có khối meta rõ: presented to / presented by / date.

## Slide 51 — Bối cảnh & phân khúc mục tiêu

- Trình bày rõ phân khúc, khu vực, ngành ưu tiên, ngành mở rộng.
- Nêu thứ tự ưu tiên thực thi: FDI sản xuất KCN phía Nam làm trước.
- Chốt 3 business pillars (hardware/infra/software) như nền cho toàn deck.

## Slide 52 — Vai trò BOD / Manager / Marketing + 3 giai đoạn

- Chốt vai trò từng cấp: BOD phê duyệt, Manager chịu chuyên môn, Marketing chuẩn hóa truyền thông.
- Chốt timeline T3/T4/T5 với output cụ thể cho từng mốc.

## Slide 53 — Chân dung khách hàng enterprise

- Nêu rõ 2 nhóm: FDI/multinational và large manufacturing.
- Nêu tiêu chí ra quyết định: SLA/uptime/compliance/ROI + áp lực downtime.
- Có glossary đơn giản để phòng ban không kỹ thuật vẫn theo được.

## Slide 54 — Pain points theo 3 mảng (Hardware/Infra/Software)

- Mỗi mảng có pain points riêng.
- Chốt: vấn đề là business + vận hành, không chỉ technical.
- Pain list phải bám các điểm trong `BOD_REQUIREMENT.md` (không tự thêm hướng lạc đề).

## Slide 55 — Product vision (với FDI sản xuất use-case)

- Giải pháp tổng thể.
- Phạm vi và non-goals rõ.
- Bắt buộc theo khung A1/A2/A3/A4 và có use-case cụ thể FDI sản xuất.

## Slide 56 — Architecture & system model

- 3 layers.
- Lý do thiết kế giúp scale.
- Phải nêu khả năng tích hợp ERP/MES qua API và adaptation theo từng nhà máy.

## Slide 57 — Core modules & quantified business value

- Production/Warehouse/Quality/Dashboard.
- Nêu KPI/giá trị định lượng dự kiến.
- KPI phải ở dạng đo được (downtime, lead-time, inventory accuracy, OTD).

## Slide 58 — Standards, commitments, security

- SLA, KPI, uptime định hướng.
- RBAC, encryption, audit trail, backup.
- Nguyên tắc: không over-claim, chỉ nêu cam kết theo năng lực vận hành thực tế.

## Slide 59 — Implementation method (SCRUM + rollout)

- SCRUM cadence 2 tuần: Planning -> Daily -> Review -> Retro.
- Chuỗi triển khai bắt buộc: Pilot -> Rollout -> Scale.
- Có phase-gate rõ cho Y1->Y2 và Y2->Y3.
- Có ownership rõ theo vai trò: PO/PM, Tech Lead, QA/Support.

## Slide 60 — Internal capability: current vs required

- Không chỉ liệt kê năng lực: phải có kế hoạch lấp gap theo mốc 0-90 ngày, 3-12 tháng, 12+ tháng.
- Mỗi nhóm hành động phải gắn owner rõ (Delivery Lead/Solution Lead/PM/QA/Support/Program Manager).
- Bắt buộc nêu gate liên kết roadmap: điều kiện để chuyển Y1->Y2 và Y2->Y3.

## Slide 61 — Certifications, team, governance, tools

- Chứng chỉ/chuẩn năng lực phải trình bày theo lộ trình 3 năm, không nói chung chung.
- Team blueprint phải thể hiện scale-up từ nhỏ -> vừa -> lớn (6-8 -> 12-16 -> 20-28).
- Governance phải có RACI/phase-gate/escalation path liên phòng ban.
- Toolchain phải gắn với KPI vận hành (SLA, incident, lead time, adoption).

## Slide 62 — Roadmap, milestones, resource & budget frame

- Roadmap 3 năm theo thứ tự Foundation & Pilot -> Replicate & Expand -> Scale Portfolio.
- Nêu rõ điều kiện chuyển phase giữa từng năm (phase-gate).
- Nêu rõ team scale-up theo từng năm (6-8 -> 12-16 -> 20-28).
- Nêu rõ khung nguồn lực/chi phí theo People / Process / Platform / Program.

## Slide 63 — BOD Q&A mapping hub

- Khối top mối quan tâm trọng yếu của BOD và các phòng ban (điều hướng nhanh).
- Bảng mapping đầy đủ toàn bộ requirement/thắc mắc BOD.
- Mỗi dòng phải có link slide liên quan để điều hướng tức thì.
- Bắt buộc có câu hỏi riêng cho: phase-gate chuyển năm, team scale-up, và owner chịu trách nhiệm.
- Bắt buộc có tham chiếu đến các slide mở rộng 64–80 (reality, SWOT, risks, lighthouse, timeline, cost, pricing, go/no-go, product detail series).
- Slide này trình bày sau cùng trong flow điều hướng buổi họp.

## Slide 64 — Strategic impact & decision required

- Mục tiêu: chuyển từ slide tổng quan sang slide hành động có thể triển khai ngay.
- Phải có 4 khối nội dung theo thứ tự:
	1) Phạm vi thực thi ưu tiên FDI sản xuất (làm trước cái gì, cho ai, tại sao).
	2) Readiness checklist trước go-to-market.
	3) Timeline 3 năm (Year 1/2/3) với mục tiêu và điều kiện chuyển phase.
	4) Team scale-up từ nhỏ -> vừa -> lớn theo từng năm.
- Cuối slide phải chốt 3 quyết định BOD cần duyệt (segment, nguồn lực, pilot & ngân sách).

## Slide 65 — Reality check: current readiness

- Chốt năng lực thực tế hiện tại: team SCRUM 5-8, kinh nghiệm customization dự án vài trăm đến hơn 1.000 users.
- Nêu rõ điểm mạnh sẵn có: core nền tảng web/mobile/management + khả năng tích hợp AI.
- Nêu rõ điểm thiếu: chưa có SME product chạy production như một sản phẩm ngành dọc hoàn chỉnh.

## Slide 66 — SWOT for FDI entry

- SWOT phải trung thực, không tô hồng.
- S phải bám năng lực giao hàng/customization thực tế.
- W phải nêu rõ thiếu productized SME references và enterprise evidence pack.
- O/T phải bám bối cảnh FDI sản xuất KCN và áp lực cạnh tranh.

## Slide 67 — Top risks & mitigation

- Trình bày 8-10 rủi ro theo dạng risk register (risk / impact / likelihood / owner / mitigation).
- Bắt buộc có rủi ro: scope creep, timeline slip, security/compliance gap, integration complexity, thiếu domain depth, team over-stretch.

## Slide 68 — Strategic customer-first decision

- Trả lời trực diện câu hỏi: có cần chốt 1 khách hàng chiến lược để chạy thực tế trước khi scale đại trà không?
- Kết luận khuyến nghị: có, theo mô hình lighthouse pilot có điều kiện.
- Nêu trade-off giá và cơ hội: margin ngắn hạn thấp hơn nhưng tạo case/reference để scale nhanh hơn.

## Slide 69 — Execution timeline (0-18 months)

- Timeline theo phase-gate thực tế: Foundation -> Pilot -> Hardening -> Replication Ready.
- Mỗi phase có output, entry/exit criteria, owner.

## Slide 70 — Cost envelope & budget scenarios

- Trình bày theo 3 kịch bản Lean/Base/Aggressive.
- Có giả định minh bạch (team size, burn rate, tooling, infra, compliance, travel/on-site).
- Không đưa một con số tuyệt đối nếu chưa có dữ liệu đầy đủ; dùng khoảng ngân sách có điều kiện.

## Slide 71 — Pricing strategy & opportunity model

- Nêu mô hình giá pilot và mô hình giá sau pilot.
- Trình bày cơ hội doanh thu 3 năm theo kịch bản thận trọng/base/stretch.
- Có phần “chi phí cơ hội nếu không làm” để BOD nhìn rõ trade-off.

## Slide 72 — BOD realism checkpoint & go/no-go

- Chốt rõ giới hạn hiện tại để tránh kỳ vọng phi thực tế.
- Đưa điều kiện GO/NO-GO theo 3 nhóm: market signal, delivery readiness, financial guardrail.
- Kết thúc bằng danh sách xác nhận BOD cần ký duyệt trước khi mở rộng.

## Slide 73 — FDI Product Detail Master Outline

- Mục tiêu: làm slide “đầu mục tổng” cho cụm Product Detail, để MKT/Sales/Delivery cùng bám một narrative sản phẩm thống nhất.
- Prefix chuẩn áp dụng cho cụm chi tiết: **FDI Product Detail** (ngắn, rõ phân khúc, định vị enterprise).
- Quy tắc ngôn ngữ: mô tả theo hướng **sản phẩm và năng lực triển khai**, không mô tả theo hướng “content website”.
- 7 đầu mục bắt buộc (mỗi đầu mục là 1 slide riêng, nội dung dài):
	1) FDI Product Detail 01 — Enterprise Pain & Transformation Need.
	2) FDI Product Detail 02 — Solution Positioning & Partnering Model.
	3) FDI Product Detail 03 — Module Architecture, Integration & Functional Value.
	4) FDI Product Detail 04 — Delivery Process & Phase-Gate Execution.
	5) FDI Product Detail 05 — Customer Decision Journey & Adoption Path.
	6) FDI Product Detail 06 — Commitments, Security & Governance.
	7) FDI Product Detail 07 — Capability, 3-Year Vision & Pilot Expansion Model.
- Đầu ra kỳ vọng: MKT có thể tách trực tiếp thành nhiều asset (LP, brochure, sales deck, email sequence) mà không cần tự dựng câu chuyện từ đầu.

## Slide 74 — FDI Product Detail 01: Enterprise Pain & Transformation Need

- Mục tiêu: mở đầu bằng bài toán thực của doanh nghiệp FDI sản xuất để tạo nhu cầu chuyển đổi rõ ràng trước khi nói giải pháp.
- Khối nội dung:
	1) Khó khăn vận hành điển hình: downtime khó truy nguyên, dữ liệu phân mảnh IT/OT, phản ứng sự cố chậm, áp lực audit/compliance.
	2) Tác động business: mất OEE, chậm lead-time, tăng chi phí ẩn, rủi ro giao hàng và rủi ro uy tín.
	3) “Cost of inaction”: rủi ro nếu tiếp tục vận hành theo mô hình rời rạc.
	4) Trigger chuyển đổi: điều kiện để doanh nghiệp quyết định đi vào chương trình pilot.
- Kịch bản thông điệp:
	- Headline: “Your Plant Complexity Is Real — The Operating Model Must Match It.”
	- Sub-headline: “Chúng tôi bắt đầu từ pain vận hành và rủi ro kinh doanh, không bắt đầu từ danh sách tính năng.”
	- 3 trụ cột bắt buộc: operational reality / measurable impact / transformation urgency.
	- CTA nội bộ cho MKT: “Đánh giá nhanh mức độ sẵn sàng chuyển đổi vận hành.”

## Slide 75 — FDI Product Detail 02: Solution Positioning & Partnering Model

- Mục tiêu: dẫn dắt từ pain sang giải pháp, đồng thời chốt vai trò đồng hành partner dài hạn cho enterprise.
- Khối nội dung:
	1) Tuyên bố định vị: không ERP nặng, không custom chắp vá; sản phẩm có kiến trúc chuẩn + tùy biến có kiểm soát.
	2) Câu chuyện giải pháp: từ “pain operation” sang “operating model có thể scale”.
	3) Partnering model: đồng hành theo 3 lớp (consultative discovery, controlled delivery, operating governance).
	4) Value promise theo vai trò: BOD/Plant/IT/Procurement nhận được gì và đo bằng gì.
	5) Guardrail chống over-promise: cam kết theo phase và theo điều kiện readiness.
- Kịch bản thông điệp:
	- Headline: “From Operational Pain to a Scalable Enterprise Solution.”
	- Sub-headline: “Chúng tôi không chỉ triển khai phần mềm; chúng tôi đồng hành để doanh nghiệp chuẩn hóa và nhân rộng năng lực vận hành.”
	- 3 proof points: productized architecture / partner-led execution / governance continuity.
	- CTA nội bộ cho MKT: “Xem mô hình đồng hành giải quyết khó khăn theo từng giai đoạn.”

## Slide 76 — FDI Product Detail 03: Module Architecture, Integration & Functional Value

- Mục tiêu: giới thiệu rõ kiến trúc hệ thống, cách liên kết với các hệ thống khác và giá trị nhận được theo từng module.
- Khối nội dung:
	1) Architecture map: Experience layer -> Application layer -> Integration & Data layer -> Platform & Security layer.
	2) Module catalog bắt buộc: Production Execution / Warehouse & Inventory / Quality / Maintenance / Dashboard & Analytics.
	3) Integration map: ERP, MES, WMS, HRM, IoT/SCADA, API gateway, event bus, audit log.
	4) Module-to-value matrix: mỗi module nêu pain giải quyết + chức năng chính + KPI kết quả.
	5) Interoperability principles: data ownership, sync frequency, fallback mode, exception handling.
	6) In-scope vs out-of-scope cho pilot đầu để tránh kỳ vọng sai.
- Kịch bản thông điệp:
	- Headline: “One Architecture, Multiple Modules, Unified Operational Impact.”
	- Sub-headline: “Mỗi module không đứng riêng lẻ mà liên kết thành luồng dữ liệu vận hành thống nhất với hệ thống hiện hữu.”
	- 3 proof points: integration-first design / function-to-KPI mapping / enterprise interoperability.
	- CTA nội bộ cho MKT: “Xem bản đồ module và lợi ích theo từng vai trò vận hành.”

## Slide 77 — FDI Product Detail 04: Delivery Process & Phase-Gate Execution

- Mục tiêu: chứng minh cách triển khai thực thi được từ Discover đến Scale, có gate rõ và owner rõ.
- Khối nội dung:
	1) Giai đoạn 1 — Discover & Diagnose: business case, baseline KPI, system landscape, risk baseline.
	2) Giai đoạn 2 — Pilot & Validate: MVP enterprise scope, UAT, stabilization, acceptance criteria.
	3) Giai đoạn 3 — Rollout & Harden: replication package, SOP, incident model, change management.
	4) Giai đoạn 4 — Scale & Optimize: multi-site governance, SLA operations, continuous improvement.
	5) Gate matrix bắt buộc: entry criteria / exit criteria / owner / escalation path.
- Kịch bản thông điệp:
	- Headline: “Delivery is Governed, Not Improvised.”
	- Sub-headline: “Mỗi bước triển khai đều có tiêu chí vào-ra rõ ràng để bảo vệ tiến độ, chất lượng và ngân sách.”
	- 3 proof points: phase-gate control / owner accountability / go-no-go discipline.
	- CTA nội bộ cho MKT: “Nhận roadmap triển khai mẫu 18 tháng.”

## Slide 78 — FDI Product Detail 05: Customer Decision Journey & Adoption Path

- Mục tiêu: mô tả hành trình quyết định của khách hàng enterprise để MKT tạo content đúng người, đúng lúc, đúng câu hỏi.
- Khối nội dung:
	1) Stage A — Awareness: trigger vận hành và tín hiệu cần chuyển đổi.
	2) Stage B — Evaluation: tiêu chí đánh giá của BOD/Plant/IT/Procurement.
	3) Stage C — Pilot Decision: điều kiện ký pilot, phạm vi trách nhiệm hai bên, KPI thành công.
	4) Stage D — Expansion: điều kiện nhân rộng line/site, cơ chế quản trị thay đổi.
	5) Objection map: “vì sao tin được khi chưa có vertical product production hoàn chỉnh?”.
- Kịch bản thông điệp:
	- Headline: “Designed for How Enterprise Teams Actually Decide.”
	- Sub-headline: “Không bán theo cảm hứng; bán theo logic ra quyết định và rủi ro được kiểm soát.”
	- 3 proof points: stakeholder-specific value / decision criteria alignment / objection readiness.
	- CTA nội bộ cho MKT: “Nhận checklist đánh giá readiness cho pilot.”

## Slide 79 — FDI Product Detail 06: Commitments, Security & Governance

- Mục tiêu: chuyển phần cam kết thành nội dung có thể kiểm chứng, tránh claim mơ hồ.
- Khối nội dung:
	1) Service commitments: response band, incident priority model, uptime target band.
	2) Security controls: RBAC, encryption, audit trail, backup/DR, access governance.
	3) Delivery governance: RACI, steering cadence, risk review, escalation protocol.
	4) Compliance baseline: tài liệu bắt buộc trước và sau pilot.
	5) Service boundary: điều kiện áp dụng cam kết theo từng phase.
- Kịch bản thông điệp:
	- Headline: “Enterprise Trust Is Earned Through Operating Discipline.”
	- Sub-headline: “Cam kết đi cùng điều kiện vận hành rõ ràng, có cơ chế đo, báo cáo và truy vết.”
	- 3 proof points: measurable SLA / security by design / governance with ownership.
	- CTA nội bộ cho MKT: “Xem khung cam kết dịch vụ cho chương trình pilot.”

## Slide 80 — FDI Product Detail 07: Capability, 3-Year Vision & Pilot Expansion Model

- Mục tiêu: chốt năng lực hiện tại, lộ trình 3 năm và mô hình mở rộng từ pilot sang scale.
- Khối nội dung:
	1) Năng lực hiện tại: team SCRUM 5-8, kinh nghiệm customization quy mô vài trăm đến >1.000 users.
	2) Năng lực lõi có thể tái sử dụng: web/mobile/management core + integration + AI-assisted workflows.
	3) Gap hiện hữu: thiếu vertical product production reference cho ngành cụ thể.
	4) Kế hoạch nâng năng lực Year 1/2/3: domain depth, QA automation, security hardening, delivery governance.
	5) Pilot-to-scale model: điều kiện mở rộng, expansion trigger, governance khi nhân rộng.
	6) Chứng chỉ/chứng nhận theo roadmap: technical, security, process maturity.
- Kịch bản thông điệp:
	- Headline: “Transparent Capability, Structured Growth, Evidence-Led Scale.”
	- Sub-headline: “Nói đúng năng lực hiện tại, cùng khách hàng đi từ pilot thành năng lực vận hành có thể nhân rộng.”
	- 3 proof points: real baseline / explicit capability roadmap / pilot-to-scale discipline.
	- CTA nội bộ cho MKT: “Đăng ký buổi Pilot Readiness Workshop.”

---

## 7) Glossary bắt buộc (đơn giản)

Nếu dùng thuật ngữ, phải có giải thích ngắn ngay trong slide hoặc speaker note:

- ERP: hệ thống quản trị tổng thể, thường rộng và nặng.
- Module: khối chức năng triển khai độc lập.
- WIP: hàng đang sản xuất dở dang.
- OEE: hiệu suất tổng thể máy/chuyền.
- Downtime: thời gian dừng máy/chuyền.
- RBAC: phân quyền theo vai trò.
- Audit trail: lịch sử ai làm gì trên hệ thống.
- SLA: cam kết phản hồi/xử lý.
- Uptime: tỷ lệ hệ thống sẵn sàng.
- DR: kế hoạch khôi phục sau sự cố.
- IT/OT separation: tách lớp IT văn phòng và OT sản xuất để an toàn hơn.
- Phase-gate: điều kiện bắt buộc phải đạt trước khi chuyển sang phase tiếp theo.
- Capability owner: người chịu trách nhiệm năng lực theo từng mảng (hardware/infra/software).

---

## 8) Visual rules

- Sáng, sạch, dễ đọc từ xa.
- Không màu mè; màu chỉ dùng theo ngữ nghĩa.
- Card/list nhất quán toàn bộ deck.
- Có thể dài nhưng phải chia block rõ.

---

## 9) Checklist “đủ chuẩn BOD” trước khi chốt slide

- [ ] Đủ các nhóm nội dung trong mục 5.
- [ ] Đủ phần A (khách hàng) + B (nâng cấp nội bộ).
- [ ] Slide 63 có khối top mối quan tâm + full mapping + slide links.
- [ ] Đủ phần security/compliance/SLA/uptime.
- [ ] Đủ phần team/chứng chỉ/governance/tools.
- [ ] Đủ phần timeline/nguồn lực/chi phí.
- [ ] Có quyết định BOD cần duyệt ở slide cuối.
- [ ] Có reality check trung thực về năng lực hiện tại (slide 65).
- [ ] Có SWOT và risk register có owner/mitigation rõ (slide 66-67).
- [ ] Có quyết định lighthouse pilot và logic giá-cơ hội (slide 68, 71).
- [ ] Có budget envelope theo kịch bản và guardrail GO/NO-GO (slide 70, 72).
- [ ] Có cụm FDI Product Detail (slide 73-80) đủ sâu để MKT triển khai asset marketing theo hướng sản phẩm enterprise.

---

## 10) Slide Blueprint chi tiết (source of truth để generate)

Mục này là bản mô tả chi tiết nhất để cập nhật/generate slide chính xác từ DESIGN.

Mỗi slide phải có đủ 6 trường:

1. Title
2. Subtitle
3. Content blocks
4. Mandatory points
5. Glossary/terms (nếu có)
6. Acceptance check

### Slide 50
- Title: Enterprise Business Catalog Direction
- Subtitle: Manufacturing Operating Framework aligned with BOD enterprise standard
- Content blocks: Objective panel, 4 key BOD questions, meta info (presented to/by/date)
- Mandatory points:
	- Deck để ra quyết định BOD; scope trình bày rõ.
	- Nêu rõ 4 câu hỏi chính để định hướng toàn bộ phần sau.
- Acceptance: Người nghe hiểu ngay mục tiêu buổi họp

### Slide 51
- Title: Context & Strategic Target Segments
- Subtitle: Bối cảnh và phân khúc ưu tiên theo guideline BOD
- Content blocks: Target segments, priority industries, 3 business pillars
- Mandatory points:
	- FDI + large domestic + South; ngành ưu tiên/mở rộng; 3 mảng công ty.
	- Nêu rõ FDI sản xuất KCN phía Nam là ưu tiên triển khai đầu tiên.
- Acceptance: BOD nhìn ra rõ thị trường mục tiêu

### Slide 52
- Title: Roles, Responsibilities & 3-Phase Plan
- Subtitle: Ai làm gì và tiến độ T3 -> T5/2026
- Content blocks: BOD role, Manager role, Marketing role, phase timeline
- Mandatory points:
	- Trách nhiệm theo cấp + milestone thời gian.
	- Mỗi mốc T3/T4/T5 phải có output rõ để làm căn cứ kiểm tra tiến độ.
- Acceptance: Tránh chồng chéo trách nhiệm

### Slide 53
- Title: Target Customer Characteristics
- Subtitle: Hiểu đúng đặc tính enterprise để thiết kế giải pháp đúng
- Content blocks: FDI profile, large manufacturing profile, terms note
- Mandatory points: SLA/Uptime/Compliance/ROI + downtime pressure
- Glossary: SLA, Uptime, Compliance
- Acceptance: Người không kỹ thuật vẫn hiểu tiêu chí khách hàng

### Slide 54
- Title: Common Problems in 3 Business Pillars
- Subtitle: Bài toán kinh doanh theo phần cứng, hạ tầng, phần mềm
- Content blocks: 3 pain cards + closing statement
- Mandatory points: Đủ pain theo 3 mảng; chốt business problem
- Acceptance: BOD thấy rõ “vì sao phải làm”

### Slide 55
- Title: Solution Scope & Strategic Goals (A1-A4)
- Subtitle: Bối cảnh ngành, bài toán, mục tiêu 1-3 năm, giải pháp tổng thể
- Content blocks: A1, A2, A3, A4, conclusion
- Mandatory points:
	- Use-case cụ thể; phạm vi rõ.
	- Chỉ ra non-goal rõ để tránh scope creep khi triển khai.
- Acceptance: Đọc xong hiểu ngay giải pháp làm gì

### Slide 56
- Title: Architecture & Integration Model (A4)
- Subtitle: Kiến trúc 3 lớp, hỗ trợ tích hợp ERP/MES
- Content blocks: Layer 1/2/3 + glossary
- Mandatory points: Tính hệ thống và khả năng tích hợp
- Glossary: ERP, MES, API
- Acceptance: Không quá technical, vẫn đủ chắc về kiến trúc

### Slide 57
- Title: Core Modules + Quantified Value (A7)
- Subtitle: Từ module đến giá trị đo lường được
- Content blocks: Module cards + KPI value band
- Mandatory points: KPI định lượng rõ (downtime, lead-time, inventory accuracy, on-time delivery)
- Acceptance: Trả lời được câu hỏi “hiệu quả đo thế nào”

### Slide 58
- Title: Standards, Commitments & Security (A6)
- Subtitle: Cam kết rõ để khách enterprise ra quyết định
- Content blocks: Commitments, security controls, terms note
- Mandatory points: SLA/KPI/Uptime + RBAC/encryption/audit/backup-DR
- Glossary: SLA, Uptime, DR
- Acceptance: Không over-claim so với năng lực thật; ngôn ngữ cam kết kiểm chứng được

### Slide 59
- Title: Implementation Method (A5) — SCRUM
- Subtitle: FDI sản xuất KCN làm trước với SCRUM theo phase-gate rõ ràng
- Content blocks: 6-step execution, SCRUM cadence, phase-gate criteria, ownership
- Mandatory points:
	- Planning/Daily/Review/Retro theo nhịp 2 tuần.
	- Chuỗi triển khai Pilot -> Rollout -> Scale.
	- Gate Y1->Y2: có pilot acceptance + baseline KPI + playbook chuẩn.
	- Gate Y2->Y3: rollout ổn định, tích hợp đạt tiêu chí vận hành.
	- Ownership rõ: PO/PM, Tech Lead, QA/Support.
- Acceptance: Cách làm thực thi rõ ràng, có điều kiện chuyển phase và người chịu trách nhiệm

### Slide 60
- Title: Internal Capability: Current vs Required (B8-B10)
- Subtitle: Readiness ưu tiên FDI sản xuất với kế hoạch lấp gap có owner
- Content blocks: Current / Required / Gap, 0-90d plan, 3-12m plan, 12m+ plan, phase-gates
- Mandatory points:
	- Nêu rõ gap thực tế theo ngữ cảnh FDI sản xuất KCN.
	- Mỗi nhóm hành động phải có owner cụ thể.
	- Có điều kiện chuyển phase gắn roadmap Y1->Y2 và Y2->Y3.
- Glossary: Baseline KPI, Acceptance criteria, Stage gate
- Acceptance: BOD có thể duyệt ngay kế hoạch nâng cấp nội bộ và phân công owner

### Slide 61
- Title: People, Certification, Governance, Tools (B11-B14)
- Subtitle: Chuẩn bị nội lực 3 năm cho rollout FDI sản xuất
- Content blocks: Certification roadmap, team scale-up, governance model, toolchain + KPI
- Mandatory points:
	- Trình bày lộ trình năng lực/chứng chỉ theo Year 1/2/3.
	- Team scale theo 3 năm: 6-8 -> 12-16 -> 20-28.
	- Governance có RACI + phase-gate review + escalation path.
	- Toolchain gắn KPI vận hành: SLA, incident, lead time, adoption.
- Acceptance: Các phòng ban hiểu rõ mức sẵn sàng, vai trò, và điều kiện mở rộng theo năm

### Slide 62
- Title: Milestones, Resources & Cost Frame (B15-B16)
- Subtitle: FDI sản xuất KCN làm trước: roadmap 3 năm, phase-gate, và team scale-up
- Content blocks: Year 1/2/3 milestone cards, phase-gate rule, team scale-up, resource-cost frame
- Mandatory points:
	- Year 1: Foundation & Pilot (playbook + baseline architecture + 1-2 pilot + baseline KPI).
	- Year 2: Replicate & Expand (rollout package + tích hợp ERP/MES + hardening vận hành).
	- Year 3: Scale Portfolio (mở rộng danh mục + service operations đa lớp SLA).
	- Team scale-up bắt buộc: 6-8 -> 12-16 -> 20-28.
	- Khung chi phí theo People / Process / Platform / Program và duyệt theo phase.
- Glossary: Phase-gate, Baseline KPI, Rollout package, Service operations
- Acceptance: Trả lời được rõ “bao lâu, cần gì, ai làm, và khi nào đủ điều kiện mở rộng”

### Slide 63
- Title: BOD Requirement Mapping Q&A
- Subtitle: Mapping đầy đủ yêu cầu/thắc mắc BOD
- Content blocks: Top mối quan tâm trọng yếu + full mapping table + note
- Mandatory points:
	- Link điều hướng tới slide chứng minh cho từng câu hỏi.
	- Có mapping riêng cho nhóm câu hỏi về phase-gate, team scale-up, owner và quyết định BOD.
	- Có mapping riêng cho nhóm câu hỏi về readiness thực tế, SWOT, risk register, lighthouse-first, budget scenarios và go/no-go.
	- Câu trả lời phải ngắn gọn, hành động được, tránh mô tả chung chung.
- Acceptance: Dùng trực tiếp làm slide điều hướng Q&A ở cuối buổi họp, bao phủ đủ câu hỏi phản biện vận hành và tài chính

### Slide 64
- Title: Strategic Impact & Decision Required
- Subtitle: FDI sản xuất KCN làm trước với kế hoạch hành động 3 năm
- Content blocks: Scope ưu tiên FDI sản xuất, readiness, Year 1/2/3 timeline, team scale-up, BOD decisions
- Mandatory points:
	- Nêu rõ nhóm khách hàng làm trước: FDI sản xuất trong KCN phía Nam.
	- Nêu rõ khâu chuẩn bị trước triển khai: playbook, pre-sales assets, baseline delivery, tiêu chí pilot.
	- Nêu rõ timeline 3 năm theo logic:
		- Year 1: Foundation & Pilot (1-2 pilot, xác lập baseline KPI).
		- Year 2: Replicate & Expand (nhân bản, chuẩn hóa tích hợp/vận hành).
		- Year 3: Scale Portfolio (mở rộng danh mục, tăng độ phủ delivery).
	- Nêu rõ quy mô team theo 3 năm (khung tham chiếu): 6-8 -> 12-16 -> 20-28.
	- Chốt 3 quyết định BOD: duyệt hướng ưu tiên FDI sản xuất, duyệt khung nguồn lực 3 năm, duyệt danh sách pilot + nguyên tắc ngân sách.
- Glossary: Pilot, Baseline KPI, Scale-up, Service operations
- Acceptance:
	- Người đọc hình dung ngay “tuần tới làm gì”, “quý tới làm gì”, “năm tới mở rộng ra sao”.
	- Có thể dùng trực tiếp để assign owner và kick-off kế hoạch.

### Execution Note cho slide 64 (deterministic generation)

- Nếu thiếu dữ liệu thực tế, vẫn phải giữ cấu trúc hành động nhưng ghi theo dạng khung/placeholder có điều kiện (ví dụ: “Pilot candidate A/B theo tiêu chí X”).
- Không để slide 64 chỉ dừng ở “tác động chiến lược” hoặc khẩu hiệu; bắt buộc có hành động cụ thể theo phase.
- Khi regenerate từ DESIGN, ưu tiên giữ nguyên thứ tự 4 khối nội dung ở trên để đảm bảo logic ra quyết định.

### Slide 65
- Title: Reality Check: Current Readiness & Constraints
- Subtitle: Năng lực thật hiện tại để tiếp cận FDI sản xuất không vượt kỳ vọng
- Content blocks: Current baseline, proven capability, constraints, implication
- Mandatory points:
	- Team SCRUM hiện tại 5-8 người.
	- Kinh nghiệm đã có: software customization cho kho/ERP/education ở quy mô vài trăm đến >1.000 users.
	- Asset sẵn có: core web/mobile/management system + AI integration capability.
	- Gap thật: chưa có SME vertical product chạy production end-to-end.
- Acceptance: BOD nhìn rõ “đang đứng ở đâu” trước khi duyệt mở rộng

### Slide 66
- Title: SWOT for FDI Production Entry
- Subtitle: Đánh giá năng lực cạnh tranh hiện tại theo góc nhìn thực chiến
- Content blocks: Strengths, Weaknesses, Opportunities, Threats
- Mandatory points:
	- Strengths: tốc độ customization, năng lực tích hợp, nền tảng kỹ thuật sẵn có.
	- Weaknesses: thiếu product reference SME production, thiếu domain depth theo ngành.
	- Opportunities: nhu cầu chuyển đổi vận hành trong FDI KCN, khoảng trống giải pháp linh hoạt.
	- Threats: đối thủ lớn, chu kỳ bán hàng dài, yêu cầu compliance cao.
- Acceptance: SWOT phản ánh thực tế, không tô hồng

### Slide 67
- Title: Top Risks, Challenges & Mitigation Plan
- Subtitle: Rủi ro trọng yếu khi đi từ customization sang productized FDI solution
- Content blocks: Risk register table, mitigation priorities, owner map
- Mandatory points:
	- Ít nhất 8 rủi ro có owner và biện pháp giảm thiểu.
	- Có risk score theo impact x likelihood.
	- Có nhóm rủi ro bắt buộc: market/delivery/security/financial/team.
- Acceptance: BOD có thể dùng slide này để giám sát theo quý

### Slide 68
- Title: Should We Secure a Strategic Lighthouse Customer First?
- Subtitle: Quyết định làm pilot thực tế trước khi scale đại trà
- Content blocks: Option A/B comparison, recommendation, value vs cost trade-off
- Mandatory points:
	- Kết luận khuyến nghị: cần chốt 1-2 lighthouse customers trước scale.
	- Nêu rõ cái giá: margin thấp ban đầu, thêm effort support/on-site.
	- Nêu rõ cơ hội: reference case, rút ngắn sales cycle, tăng độ tin cậy.
- Acceptance: Trả lời dứt điểm câu hỏi “có cần làm thực tế trước không?”

### Slide 69
- Title: 18-Month Practical Timeline (From Pilot to Replication)
- Subtitle: Lộ trình hành động chi tiết theo phase-gate và owner
- Content blocks: 0-3m, 4-6m, 7-12m, 13-18m
- Mandatory points:
	- Mỗi phase có output, gate, owner.
	- Có tiêu chí dừng hoặc điều chỉnh nếu không đạt gate.
- Acceptance: BOD hình dung rõ từng quý làm gì

### Slide 70
- Title: Cost Envelope & Budget Scenarios
- Subtitle: Khung chi phí 18 tháng theo kịch bản Lean/Base/Aggressive
- Content blocks: Assumptions, scenario table, burn-rate note, control guardrails
- Mandatory points:
	- Có range ngân sách theo kịch bản, không một con số cứng thiếu dữ liệu.
	- Nêu rõ thành phần chi phí: people, tooling, infra, compliance, on-site support.
	- Có cơ chế kiểm soát chi phí theo phase-gate.
- Acceptance: BOD có đủ cơ sở duyệt ngân sách theo điều kiện

### Slide 71
- Title: Pricing Strategy, Opportunity & Trade-off
- Subtitle: Giá pilot, giá scale và cơ hội doanh thu 3 năm
- Content blocks: Pilot pricing logic, post-pilot model, 3-year opportunity scenarios, no-action cost
- Mandatory points:
	- Có chiến lược giá cho giai đoạn pilot và giai đoạn replication.
	- Có 3 kịch bản cơ hội (conservative/base/stretch).
	- Có phần chi phí cơ hội nếu không triển khai ưu tiên FDI sản xuất.
- Acceptance: BOD nắm được “cái giá” và “đổi lại được gì”

### Slide 72
- Title: BOD Realism Checkpoint & Final Confirmations
- Subtitle: Khóa kỳ vọng thực tế trước khi scale
- Content blocks: Reality constraints, go/no-go matrix, final confirmations
- Mandatory points:
	- Nêu rõ giới hạn hiện tại và điều kiện bắt buộc để mở rộng.
	- Có ma trận GO/NO-GO theo market, delivery, finance.
	- Chốt danh sách xác nhận BOD cần ký duyệt.
- Acceptance: Tránh over-commit, ra quyết định thực tế và có kiểm soát

### Slide 73
- Title: FDI Product Detail Master Outline
- Subtitle: Khung đầu mục tổng để triển khai cụm nội dung sản phẩm enterprise cho FDI sản xuất
- Section format rule (áp dụng bắt buộc cho Slide 74-80):
	- Mỗi phần nhỏ phải có 2 lớp nội dung theo thứ tự:
		1) **Tóm tắt phần này trình bày gì** (1-2 câu, nói mục tiêu business/decision của phần).
		2) **Nội dung chi tiết** (bullet dài, đủ dữ kiện để MKT có thể viết content ngay).
	- Nếu một slide có nhiều phần nhỏ, giữ cấu trúc lặp lại: Tóm tắt -> Chi tiết cho từng phần.
	- Ngôn ngữ viết theo chuẩn enterprise advisory, tránh kiểu quảng cáo ngắn.
- Content blocks:
	1) Product narrative objective (vì sao cần cụm Product Detail).
	2) Prefix naming rule (FDI Product Detail 01-07).
	3) Seven-section map (pain, solution partner model, module architecture-value, delivery, journey, commitments, capability-vision).
	4) Asset mapping cho MKT (LP, brochure, sales one-pager, email sequence, webinar talk-track).
	5) Guardrails ngôn ngữ (product-first, enterprise-first, no over-promise).
- Mandatory points:
	- Prefix chính thức dùng xuyên suốt: `FDI Product Detail`.
	- Slide 73 chỉ đóng vai trò “master index”, không trùng lặp toàn bộ nội dung của 7 slide chi tiết.
	- Mỗi đầu mục phải có: message key, proof type, call-to-action gợi ý.
	- Tuyệt đối tránh mô tả theo hướng “chỉ để làm site”; phải mô tả theo hướng năng lực sản phẩm và năng lực triển khai.
- Glossary: Product narrative, Proof type, Conversion asset, Messaging guardrail
- Acceptance:
	- MKT nhìn vào slide 73 là biết ngay phải sản xuất những cụm nội dung nào.
	- Sales/Delivery đọc slide 73 vẫn hiểu cùng một câu chuyện, không lệch thông điệp.

### Slide 74
- Title: FDI Product Detail 01 — Enterprise Pain & Transformation Need
- Subtitle: Khó khăn vận hành thực tế và lý do cần chuyển đổi theo chuẩn enterprise
- Section notes (format bắt buộc):
	- Phần 1: Bối cảnh khó khăn hiện hữu.
	- Phần 2: Tác động kinh doanh nếu không xử lý.
	- Phần 3: Điều kiện kích hoạt chuyển đổi.
	- Mỗi phần đều có “Tóm tắt” trước, “Chi tiết” sau.
- Content blocks:
	1) Pain map theo vận hành nhà máy: downtime, defect visibility thấp, dữ liệu rời rạc, phản ứng sự cố chậm.
	2) Business impact map: OEE loss, lead-time variance, compliance exposure, hidden operating cost.
	3) Cost-of-inaction narrative: nếu không chuyển đổi thì rủi ro tăng như thế nào trong 12-24 tháng.
	4) Transformation trigger checklist: điều kiện enterprise thường dùng để khởi động pilot.
	5) Outcome intent: mục tiêu chuyển đổi ở mức vận hành, tài chính và quản trị rủi ro.
- Mandatory points:
	- Bắt buộc trình bày “vấn đề trước” rồi mới đi vào giải pháp ở slide sau.
	- Mọi pain phải gắn với impact business cụ thể, tránh mô tả IT thuần túy.
	- Ngôn ngữ phải mang tính enterprise advisory, không mang tính quảng cáo tiêu dùng.
- Glossary: Cost of inaction, Transformation trigger, OEE impact
- Acceptance:
	- Người đọc thấy rõ “vì sao phải thay đổi ngay bây giờ”.
	- MKT có thể dùng làm phần mở đầu cho mọi asset funnel.

### Slide 75
- Title: FDI Product Detail 02 — Solution Positioning & Partnering Model
- Subtitle: Câu chuyện giải pháp và vai trò đồng hành partner cho enterprise FDI
- Section notes (format bắt buộc):
	- Phần 1: Giải pháp của mình là gì và khác gì.
	- Phần 2: Mô hình đồng hành partner theo vòng đời.
	- Phần 3: Giá trị theo stakeholder và guardrail cam kết.
	- Mỗi phần đều có “Tóm tắt” trước, “Chi tiết” sau.
- Content blocks:
	1) Positioning statement: structured enough to scale, flexible enough to deploy.
	2) Solution narrative từ pain sang operating model mục tiêu.
	3) Partnering model theo vòng đời: discover, co-design, controlled delivery, operating governance.
	4) Value proposition theo stakeholder: BOD/Plant/IT/Procurement.
	5) Guardrail statement: cam kết theo readiness và phase-gate.
- Mandatory points:
	- Nêu rõ doanh nghiệp nhận được gì khi chọn mô hình partner dài hạn thay vì one-off implementation.
	- Tránh ngôn ngữ “vendor triển khai”; dùng ngôn ngữ “operating partner”.
	- Chỉ ra nguyên tắc không over-promise ngay trong slide.
- Glossary: Operating partner, Guardrail commitment, Stakeholder value
- Acceptance:
	- MKT có thể viết phần “vì sao chọn chúng tôi” theo logic enterprise.
	- Sales có câu chuyện partner model nhất quán khi gặp khách hàng.

### Slide 76
- Title: FDI Product Detail 03 — Module Architecture, Integration & Functional Value
- Subtitle: Kiến trúc hệ thống liên kết module và hệ thống hiện hữu, kèm giá trị nhận được
- Section notes (format bắt buộc):
	- Phần 1: Tổng quan kiến trúc hệ thống.
	- Phần 2: Module chức năng chi tiết.
	- Phần 3: Liên kết với hệ thống hiện hữu.
	- Phần 4: Giá trị/KPI theo từng module.
	- Mỗi phần đều có “Tóm tắt” trước, “Chi tiết” sau.
- Content blocks:
	1) System architecture map: Experience -> Application -> Integration/Data -> Platform/Security.
	2) Module catalog (chi tiết bắt buộc):
		- Production Execution: lệnh sản xuất, theo dõi tiến độ line, WIP control, cycle-time tracking, cảnh báo bất thường.
		- Warehouse & Inventory: nhập-xuất-tồn, lot/batch traceability, barcode/QR flow, stock accuracy, aging control.
		- Quality Management: QC gate, non-conformance logging, CAPA tracking, defect trend dashboard.
		- Maintenance Coordination: kế hoạch PM, ticket sự cố, MTTR tracking, phụ tùng thay thế.
		- Dashboard & Analytics: plant KPI cockpit, exception dashboard, role-based reporting.
	3) Integration matrix (chi tiết bắt buộc):
		- ERP: đồng bộ master data (item/BOM/vendor) + transaction summary.
		- MES: nhận kế hoạch sản xuất, trả trạng thái thực thi theo line/shift.
		- WMS: đồng bộ tồn kho và luồng xuất/nhập liên quan sản xuất.
		- HRM: đồng bộ ca kíp, phân quyền, mapping người vận hành.
		- IoT/SCADA: nhận tín hiệu máy/chuyền phục vụ theo dõi realtime và cảnh báo.
		- API Gateway/Event Bus: chuẩn hóa kết nối, theo dõi event, audit tích hợp.
	4) Module-to-outcome table: pain giải quyết / chức năng chính / KPI tác động / stakeholder hưởng lợi / điều kiện áp dụng.
	5) Data governance basics: source of truth, auditability, exception handling, fallback mode.
	6) Scope boundary cho pilot: in-scope, deferred scope, out-of-scope.
- Mandatory points:
	- Bắt buộc có hình hoặc bảng thể hiện liên kết module với hệ thống khác.
	- Mỗi module phải nêu rõ “khách hàng nhận được chức năng gì” và “đo hiệu quả bằng gì”.
	- Nhấn mạnh kiến trúc integration-first để tạo niềm tin enterprise.
- Glossary: Integration matrix, Source of truth, Module-to-outcome mapping
- Acceptance:
	- Người đọc thấy rõ kiến trúc liên kết tổng thể và giá trị từng module.
	- MKT dùng trực tiếp để viết phần “Modules & Architecture” chi tiết.

### Slide 77
- Title: FDI Product Detail 04 — Delivery Process & Phase-Gate Execution
- Subtitle: Cách triển khai thực thi từ discover đến scale với governance rõ ràng
- Section notes (format bắt buộc):
	- Phần 1: Quy trình triển khai theo phase.
	- Phần 2: Deliverables và KPI theo phase.
	- Phần 3: Cơ chế gate và ownership.
	- Mỗi phần đều có “Tóm tắt” trước, “Chi tiết” sau.
- Content blocks:
	1) Phase 1: Discover & Diagnose (business case, baseline KPI, process mapping, risk baseline, stakeholder alignment).
	2) Phase 2: Pilot & Validate (MVP scope, sprint plan, UAT, stabilization, acceptance sign-off).
	3) Phase 3: Rollout & Harden (replication package, SOP enablement, incident rhythm, change management).
	4) Phase 4: Scale & Optimize (multi-site rollout, service operations model, continuous KPI optimization).
	5) Gate governance matrix: owner, criteria, risk review, escalation path.
	6) Delivery role map: PO/PM, Solution Lead, Tech Lead, QA, Support, Program Governance.
	7) Gate failure playbook: khi KPI/gate không đạt thì dừng ở đâu, xử lý thế nào, ai quyết định.
- Mandatory points:
	- Mỗi phase có deliverable và KPI theo dõi rõ.
	- Có ownership theo vai trò delivery và cơ chế go/no-go.
	- Có điều kiện dừng/chỉnh khi không đạt gate.
- Glossary: Phase deliverable, Gate criteria, Escalation path
- Acceptance:
	- BOD/khách hàng hiểu rõ phương pháp triển khai thực tế.
	- MKT có thể xây content “implementation confidence” có cấu trúc.

### Slide 78
- Title: FDI Product Detail 05 — Customer Decision Journey & Adoption Path
- Subtitle: Hành trình ra quyết định và điều kiện mở rộng của khách hàng enterprise
- Section notes (format bắt buộc):
	- Phần 1: Journey theo stage quyết định.
	- Phần 2: Tiêu chí theo stakeholder.
	- Phần 3: Objection handling và CTA.
	- Mỗi phần đều có “Tóm tắt” trước, “Chi tiết” sau.
- Content blocks:
	1) Stage Awareness: trigger chuyển đổi.
	2) Stage Evaluation: criteria theo BOD/Plant/IT/Procurement.
	3) Stage Pilot Commitment: scope, trách nhiệm hai bên, success criteria.
	4) Stage Adoption: training, operating rhythm, change adoption.
	5) Stage Expansion: điều kiện mở rộng sang line/site khác.
	6) Objection playbook: câu hỏi phản biện và câu trả lời chuẩn.
- Mandatory points:
	- Phải thể hiện khác biệt nội dung theo stakeholder.
	- Có tối thiểu 5 objection chuẩn và thông điệp xử lý.
	- Có CTA theo từng stage (assessment/workshop/pilot briefing).
- Glossary: Adoption path, Stakeholder criteria, Expansion trigger
- Acceptance:
	- MKT có thể xây full-funnel content theo hành trình mua enterprise.
	- Sales có checklist pre-qualify khách hàng pilot.

### Slide 79
- Title: FDI Product Detail 06 — Commitments, Security & Governance
- Subtitle: Khung cam kết kiểm chứng được cho môi trường enterprise production
- Section notes (format bắt buộc):
	- Phần 1: Cam kết dịch vụ đo được.
	- Phần 2: Bảo mật và compliance baseline.
	- Phần 3: Governance và cơ chế phối hợp với khách hàng.
	- Mỗi phần đều có “Tóm tắt” trước, “Chi tiết” sau.
- Content blocks:
	1) Service commitments: response time band, incident severity model, uptime target band, service review cadence.
	2) Security baseline: RBAC, encryption at rest/in transit, audit trail, backup/DR drills.
	3) Governance baseline: RACI, steering meeting rhythm, escalation path, issue ownership tracking.
	4) Compliance evidence pack: tài liệu cần có trước pilot và sau pilot.
	5) Commitment boundary: điều kiện áp dụng cam kết theo phase và theo phạm vi triển khai.
- Mandatory points:
	- Không ghi cam kết tuyệt đối nếu chưa có điều kiện vận hành tương ứng.
	- Mỗi cam kết phải có cách đo và cơ chế báo cáo.
	- Nêu rõ cơ chế joint governance với khách hàng enterprise.
- Glossary: Service review, Evidence pack, Commitment boundary
- Acceptance:
	- MKT có thể chuyển thành phần “Trust & Assurance” với ngôn ngữ kiểm chứng được.
	- Delivery có thể dùng trực tiếp để chuẩn hóa expectation trước hợp đồng pilot.

### Slide 80
- Title: FDI Product Detail 07 — Capability, 3-Year Vision & Pilot Expansion Model
- Subtitle: Năng lực hiện tại, lộ trình 3 năm và mô hình mở rộng từ pilot sang scale
- Section notes (format bắt buộc):
	- Phần 1: Năng lực hiện tại và giới hạn hiện tại.
	- Phần 2: Lộ trình năng lực 3 năm.
	- Phần 3: Pilot offer và expansion model.
	- Mỗi phần đều có “Tóm tắt” trước, “Chi tiết” sau.
- Content blocks:
	1) Current capability baseline: team 5-8, customization record, reusable product assets.
	2) Gap transparency: thiếu vertical production reference và domain playbook theo ngành.
	3) 3-year capability vision: Year 1 foundation, Year 2 replication, Year 3 scale portfolio.
	4) Pilot offer structure: scope, assumptions, joint commitment, pricing principle, success criteria.
	5) Expansion model: trigger chuyển pilot -> multi-site rollout -> portfolio motion.
	6) Certification & competency roadmap: technical/security/process maturity.
	7) Final CTA bundle: Pilot Readiness Workshop / Solution Briefing / Executive Discovery Session.
	8) Capability investment model: people/process/platform/program theo phase-gate để tránh đầu tư dàn trải.
- Mandatory points:
	- Minh bạch năng lực hiện tại và giới hạn hiện tại.
	- Tầm nhìn 3 năm phải gắn phase-gate và điều kiện chuyển pha rõ.
	- Pilot offer phải thể hiện win-win và kiểm soát rủi ro hai bên.
	- Có thông điệp “start small, scale with evidence” làm câu chốt nhất quán.
- Glossary: Capability baseline, Lighthouse pilot, Expansion playbook, Go-to-market motion
- Acceptance:
	- MKT có narrative “năng lực thật + kế hoạch tăng trưởng thật” để chốt pilot.
	- Narrative kết thúc đủ mạnh để chuyển từ quan tâm sang hành động.

### Product Detail Writing Template (dùng trực tiếp cho MKT)

Mẫu này áp dụng cho **mọi phần nhỏ** trong Slide 74-80.

1) Tóm tắt phần này trình bày gì
- Viết 1-2 câu trả lời rõ:
	- “Phần này giúp người đọc hiểu điều gì?”
	- “Phần này phục vụ quyết định business nào?”

2) Nội dung chi tiết
- Viết 5-8 bullet theo thứ tự:
	- Bối cảnh/vấn đề cụ thể.
	- Cách giải pháp xử lý vấn đề.
	- Chức năng hoặc cơ chế triển khai cụ thể.
	- KPI hoặc kết quả kỳ vọng đo được.
	- Điều kiện áp dụng/giới hạn cam kết.

3) Copy block chuẩn (để MKT copy ra asset)
- Headline:
- Sub-headline:
- 3 Key bullets:
	- Bullet 1 (pain -> solution).
	- Bullet 2 (function -> business value).
	- Bullet 3 (proof/guardrail -> trust).
- CTA:

### Product Detail Copy Snippet Samples (74-80)

#### Sample for Slide 76 (Module Architecture, Integration & Functional Value)
- Tóm tắt: “Phần này cho thấy các module hoạt động như một hệ thống thống nhất và kết nối được với ERP/MES/WMS hiện hữu.”
- Chi tiết:
	- Production Execution: theo dõi lệnh, tiến độ, WIP, bất thường line theo thời gian gần thực.
	- Warehouse & Inventory: chuẩn hóa nhập-xuất-tồn, truy vết lot/batch, kiểm soát tồn kho theo ngữ cảnh sản xuất.
	- Quality: QC gate, ghi nhận lỗi, CAPA, theo dõi xu hướng lỗi theo line/shift.
	- Maintenance: lịch bảo trì, ticket sự cố, MTTR, theo dõi trạng thái thiết bị trọng yếu.
	- Dashboard: tổng hợp KPI cho BOD/Plant/IT với role-based view.
	- Integration: đồng bộ master/transaction giữa ERP-MES-WMS-HRM-IoT qua API/event.
	- KPI chính: downtime, lead-time, inventory accuracy, defect rate, response time.
- Copy block:
	- Headline: “Connected Modules, Unified Factory Decisions.”
	- Sub-headline: “Kiến trúc integration-first giúp mỗi module tạo giá trị riêng nhưng vẫn vận hành trên một luồng dữ liệu thống nhất.”
	- 3 Key bullets:
		- “Mỗi module giải quyết pain cụ thể tại line vận hành.”
		- “Mỗi luồng tích hợp có định nghĩa dữ liệu và tần suất đồng bộ rõ ràng.”
		- “Mỗi kết quả đều gắn KPI theo vai trò người dùng.”
	- CTA: “Yêu cầu bản Module-to-Outcome Map cho nhà máy của bạn.”

#### Sample for Slide 77 (Delivery Process & Phase-Gate Execution)
- Tóm tắt: “Phần này mô tả cách triển khai có kiểm soát, có gate và người chịu trách nhiệm rõ ràng từ discover đến scale.”
- Chi tiết:
	- Discover: chốt baseline KPI, bản đồ quy trình, risk baseline.
	- Pilot: triển khai phạm vi tối thiểu enterprise, UAT, stabilization, acceptance.
	- Rollout: đóng gói replication package, SOP, support rhythm.
	- Scale: mở rộng đa line/site với governance chuẩn.
	- Gate control: entry/exit criteria, go/no-go, escalation owner.
	- Failure handling: không đạt gate thì corrective plan trong 2-4 tuần và review lại.
- Copy block:
	- Headline: “Execution Discipline from Pilot to Scale.”
	- Sub-headline: “Không triển khai theo cảm tính; mọi bước đều có gate, deliverable và accountability.”
	- 3 Key bullets:
		- “Phase nào cũng có KPI và tiêu chí nghiệm thu.”
		- “Ownership rõ theo vai trò business và delivery.”
		- “Có cơ chế dừng/chỉnh để bảo vệ ngân sách và chất lượng.”
	- CTA: “Nhận mẫu roadmap phase-gate 18 tháng.”

#### Sample for Slide 80 (Capability, 3-Year Vision & Pilot Expansion Model)
- Tóm tắt: “Phần này chốt năng lực thật hiện tại, lộ trình phát triển 3 năm và cách mở rộng từ pilot sang scale có bằng chứng.”
- Chi tiết:
	- Baseline hiện tại: team 5-8, năng lực customization và asset tái sử dụng.
	- Gap minh bạch: thiếu vertical production reference theo ngành.
	- Vision Year 1/2/3: foundation -> replicate -> portfolio scale.
	- Pilot offer: phạm vi, KPI thành công, trách nhiệm hai bên, nguyên tắc giá.
	- Expansion model: điều kiện nhân rộng sau pilot và governance khi mở rộng.
	- Investment logic: people/process/platform/program theo phase-gate.
- Copy block:
	- Headline: “Start with Reality, Scale with Evidence.”
	- Sub-headline: “Minh bạch năng lực hiện tại và đồng hành theo lộ trình 3 năm để tạo tăng trưởng bền vững.”
	- 3 Key bullets:
		- “Không over-claim: cam kết theo năng lực và điều kiện triển khai.”
		- “Pilot được thiết kế để tạo bằng chứng vận hành có thể nhân rộng.”
		- “Lộ trình đầu tư năng lực gắn với phase-gate và kết quả đo được.”
	- CTA: “Đăng ký Pilot Readiness Workshop cho nhà máy mục tiêu.”

### Product Detail Traceability Map (50-72 -> 74-80)

Mục tiêu: giữ mạch planning chính xác, không thêm claim ngoài phạm vi đã được duyệt trong cụm 50-72.

| Product Detail Slide | Nội dung chính | Nguồn bắt buộc từ 50-72 | Evidence type cần có | Guardrail (không ba hoa) |
|---|---|---|---|---|
| 74 — Enterprise Pain & Transformation Need | Pain thực tế + tác động business + cost of inaction | 51, 53, 54, 57 | Pain matrix, KPI baseline giả định có điều kiện | Không nêu ROI tuyệt đối khi chưa có baseline thực tế |
| 75 — Solution Positioning & Partnering Model | Định vị giải pháp + mô hình đồng hành partner | 55, 56, 58, 64 | Positioning statement, stakeholder value map | Không tự nhận thay thế toàn bộ ERP hiện hữu |
| 76 — Module Architecture, Integration & Functional Value | Kiến trúc + module + liên kết hệ thống + KPI theo module | 56, 57, 58, 62 | Architecture map, integration matrix, module-to-outcome table | Không ghi “real-time 100%” nếu chưa có điều kiện hạ tầng |
| 77 — Delivery Process & Phase-Gate Execution | Quy trình triển khai theo phase + gate + owner | 59, 60, 62, 64, 69 | Phase plan, gate criteria, ownership matrix | Không bỏ qua điều kiện dừng/chỉnh khi gate không đạt |
| 78 — Customer Decision Journey & Adoption Path | Journey theo stakeholder + objection + CTA theo stage | 52, 53, 63, 68, 71 | Stakeholder map, objection playbook, stage CTA map | Không dùng một thông điệp chung cho mọi stakeholder |
| 79 — Commitments, Security & Governance | SLA/uptime/security/governance có điều kiện áp dụng | 58, 61, 67, 70, 72 | Commitment matrix, security baseline, governance cadence | Không cam kết vượt năng lực vận hành hiện tại |
| 80 — Capability, 3-Year Vision & Pilot Expansion Model | Năng lực hiện tại + roadmap 3 năm + pilot-to-scale | 60, 61, 62, 65, 68, 70, 71, 72 | Capability baseline, roadmap, pilot offer frame | Không che giấu gap hiện tại hoặc hứa timeline cứng |

#### Gate kiểm duyệt nội dung trước khi giao MKT

- Gate 1 — Source check: mỗi bullet trong 74-80 phải chỉ rõ nguồn từ 50-72.
- Gate 2 — Evidence check: mỗi claim phải có ít nhất 1 loại bằng chứng (map, KPI band, matrix, rule).
- Gate 3 — Guardrail check: loại bỏ các câu tuyệt đối như “đảm bảo”, “100%”, “không rủi ro”.
- Gate 4 — Consistency check: thuật ngữ phải thống nhất với cụm 50-72 (`phase-gate`, `baseline KPI`, `pilot`).
- Gate 5 — Decision check: nội dung phải hỗ trợ mục tiêu thu hút 1-2 pilot đầu tiên, không lệch sang SMB/low-end.

#### Definition of Done cho cụm Product Detail

- DoD-1: Slide 74-80 bám đúng traceability map ở trên.
- DoD-2: Mỗi phần nhỏ đều có cấu trúc “Tóm tắt -> Chi tiết”.
- DoD-3: Slide 76 có đủ 4 bảng bắt buộc: architecture map, module catalog, integration matrix, module-to-outcome.
- DoD-4: Slide 77 có gate matrix + failure playbook rõ owner.
- DoD-5: Slide 79 có commitment boundary rõ điều kiện áp dụng.
- DoD-6: Slide 80 có capability gap minh bạch + roadmap 3 năm + pilot expansion trigger.

#### Checklist review 15 phút cho MKT (pre-publish)

Mục tiêu: rà nhanh trước khi đưa nội dung ra LP/brochure/sales asset để đảm bảo đúng narrative enterprise và không lệch planning.

**Phút 1-3: Narrative fit**
- [ ] Nội dung bám đúng mạch 74 -> 80: Pain -> Solution/Partner -> Module -> Delivery -> Journey -> Commitments -> Capability/Vision.
- [ ] Không có đoạn nào đi lệch sang phân khúc SMB/low-end.
- [ ] One-line định vị xuất hiện rõ: structured enough to scale, flexible enough to deploy.

**Phút 4-6: Source & evidence check**
- [ ] Mỗi phần chính đều trace được về nguồn 50-72 theo bảng mapping.
- [ ] Mỗi claim có evidence type đi kèm (map/matrix/KPI band/rule).
- [ ] Không có con số tuyệt đối nếu chưa có baseline thực tế được xác minh.

**Phút 7-9: Content structure quality**
- [ ] Mỗi phần nhỏ có đủ cấu trúc: “Tóm tắt phần này trình bày gì” -> “Nội dung chi tiết”.
- [ ] Mỗi phần có đủ 4 khối copy: headline, sub-headline, 3 key bullets, CTA.
- [ ] Ngôn ngữ nhất quán enterprise advisory (không quảng cáo khoa trương).

**Phút 10-12: Critical slide quality gates**
- [ ] Slide 76 có đủ 4 bảng: architecture map, module catalog, integration matrix, module-to-outcome.
- [ ] Slide 77 có gate matrix, ownership và failure playbook rõ ràng.
- [ ] Slide 79 nêu rõ commitment boundary và điều kiện áp dụng cam kết.
- [ ] Slide 80 minh bạch capability gap + roadmap 3 năm + trigger mở rộng pilot.

**Phút 13-15: Conversion readiness**
- [ ] CTA cuối cùng hướng đúng mục tiêu: thu hút 1-2 pilot enterprise đầu tiên.
- [ ] Có objection handling tối thiểu cho câu hỏi “chưa có vertical production reference thì vì sao tin?”.
- [ ] Nội dung hỗ trợ Sales pre-qualify được trong buổi discovery đầu.
- [ ] Bản cuối đã loại bỏ các từ rủi ro cao: “đảm bảo 100%”, “không rủi ro”, “triển khai mọi nơi ngay”.

---

## 11) Changelog mẫu

## [2026-03-03] Design & Slide Consistency Lock (50-64)

### Why
- Chuẩn hóa deck theo hướng ưu tiên FDI sản xuất cho KCN, chuyển từ mô tả tổng quan sang kế hoạch hành động có thể triển khai ngay.
- Đồng bộ 2 chiều giữa DESIGN và slides để regenerate không bị lệch nội dung.

### What changed
- Nâng độ chi tiết hành động cho cụm slide 59-64: phase-gate, ownership, team scale-up, quyết định BOD.
- Đồng bộ cụm slide 50-58 với DESIGN (ưu tiên FDI sản xuất, output theo mốc, KPI đo được, nguyên tắc không over-claim).
- Chuẩn hóa thuật ngữ toàn cụm sang `phase-gate`.

### Slide impact
- Updated: slide_51, slide_52, slide_59, slide_60, slide_61, slide_62, slide_63, slide_64.

### Validation
- Content alignment with BOD: pass
- Visual consistency: pass
- Syntax: pass

## [2026-03-03] FDI Reality Pack Extension (65-72)

### Why
- Bổ sung góc nhìn thực tế năng lực hiện tại để tránh kỳ vọng vượt khả năng khi vào phân khúc FDI sản xuất.
- Trả lời trực diện các câu hỏi BOD về SWOT, rủi ro, timeline, chi phí, giá và điều kiện GO/NO-GO.

### What changed
- Mở rộng DESIGN-first blueprint cho slides 65-72 (Reality check, SWOT, risks, lighthouse decision, 18-month timeline, cost scenarios, pricing-opportunity, realism checkpoint).
- Chuẩn hóa logic ra quyết định theo phase-gate và budget theo kịch bản.

### Slide impact
- Added: slide_65, slide_66, slide_67, slide_68, slide_69, slide_70, slide_71, slide_72.
- Updated: config.php (TOTAL_SLIDES và slide titles).

### Validation
- Content alignment with BOD: pass
- Visual consistency: pass
- Syntax: pass

## [2026-03-03] Product Detail Extension (73-80)

### Why
- Cần bộ nội dung chi tiết theo hướng sản phẩm để MKT triển khai asset marketing mà không phải tự dựng chiến lược.
- Cần narrative enterprise nhất quán để thu hút 1-2 pilot khách hàng FDI sản xuất đầu tiên.

### What changed
- Chuyển Slide 73 thành master outline cho cụm Product Detail.
- Bổ sung 7 slide chi tiết (74-80), mỗi slide là 1 đầu mục nội dung dài theo prefix `FDI Product Detail`.
- Chuẩn hóa ngôn ngữ sang hướng sản phẩm và năng lực triển khai, tránh framing “chỉ làm nội dung site”.

### Slide impact
- Added: slide_73, slide_74, slide_75, slide_76, slide_77, slide_78, slide_79, slide_80 (DESIGN blueprint level).

### Validation
- Content alignment with BOD/product-first direction: pass
- Visual/storyline consistency: pass
- Syntax: pass

## [YYYY-MM-DD] Design Update

### Why
- Lý do cập nhật.

### What changed
- Nội dung thay đổi chính.

### Slide impact
- Updated: slide_xx ...

### Validation
- Content alignment with BOD: pass/fail
- Visual consistency: pass/fail
- Syntax: pass/fail

---

## 12) BOD Run-through Checklist (release-ready)

Mục này dùng để rehearsal nhanh trước buổi họp và chốt GO/NO-GO.

### 12.1 Pre-flight (5-10 phút)

- [ ] Mở được toàn bộ slide 50 -> 64, không lỗi điều hướng.
- [ ] Font/icon hiển thị đúng, không vỡ layout ở chế độ trình chiếu.
- [ ] Người trình bày nắm rõ 3 quyết định cần BOD duyệt ở slide 64.

### 12.2 Narrative lock theo flow 50 -> 64

- [ ] Slide 50: mở đúng bối cảnh, nêu đủ 4 câu hỏi điều hướng của BOD.
- [ ] Slide 51-54: chốt rõ ưu tiên FDI sản xuất, pain là business + vận hành.
- [ ] Slide 55-58: giải pháp có hệ thống, có cam kết, có KPI đo được.
- [ ] Slide 59-62: cách làm có phase-gate, owner, team scale-up, cost frame theo phase.
- [ ] Slide 63-64: phản biện đầy đủ và kết thúc bằng quyết định cần duyệt.

### 12.3 Q&A stress test (dùng slide 63)

- [ ] Trả lời trong 30-60 giây cho mỗi câu hỏi top concern.
- [ ] Mỗi câu hỏi đều có slide dẫn chứng cụ thể (không trả lời miệng chung chung).
- [ ] Câu hỏi về phase-gate/team scale-up/owner có câu trả lời hành động được.

### 12.4 Decision readiness (slide 64)

- [ ] Quyết định 1: duyệt hướng FDI sản xuất KCN làm trước.
- [ ] Quyết định 2: duyệt khung nguồn lực 3 năm và cơ chế tuyển/đào tạo.
- [ ] Quyết định 3: duyệt danh sách pilot và nguyên tắc ngân sách theo phase.
- [ ] Mỗi quyết định có owner đề xuất + mốc thời gian follow-up sau cuộc họp.

### 12.5 GO / NO-GO rule

- GO khi tất cả mục 12.1 -> 12.4 đều đạt.
- NO-GO khi thiếu bất kỳ điểm nào trong 3 nhóm trọng yếu:
	1) Scope ưu tiên FDI sản xuất,
	2) phase-gate + owner + team scale-up,
	3) 3 quyết định BOD cần duyệt.

---

## 13) MC Cue Sheet (1-page for live meeting)

Mục này là kịch bản điều phối nhanh cho người dẫn buổi họp.

### 13.1 Timebox tổng

- Tổng thời lượng khuyến nghị: 35-45 phút.
- Trình bày chính: 20-25 phút.
- Hỏi đáp + chốt quyết định: 15-20 phút.

### 13.2 Cue theo phút và người nói

| Minute | Slide | Speaker | Cue / Key message | Backup slide nếu bị hỏi sâu |
|---|---|---|---|---|
| 00:00-02:00 | 50 | MC/Manager | Mở mục tiêu buổi họp, nêu 4 câu hỏi BOD cần được trả lời | 63 |
| 02:00-06:00 | 51-54 | Manager | Chốt ưu tiên FDI sản xuất KCN phía Nam, pain là business + vận hành | 53, 54 |
| 06:00-12:00 | 55-58 | Solution Lead | Trình bày scope giải pháp, kiến trúc, KPI, cam kết bảo mật/vận hành | 56, 58 |
| 12:00-17:00 | 59-62 | Delivery Lead | Cách triển khai có phase-gate, owner rõ, team scale-up theo năm, cost frame theo phase | 59, 62 |
| 17:00-22:00 | 63 | MC/Manager | Dẫn Q&A theo mapping table, trả lời ngắn + nhảy đúng slide chứng minh | 63 |
| 22:00-25:00 | 64 | BOD Sponsor/Manager | Xin duyệt 3 quyết định và chốt bước follow-up sau họp | 64 |

### 13.3 Talk track ngắn (để nói mạch lạc)

- Mở: “Hôm nay mục tiêu là duyệt hướng FDI sản xuất KCN làm trước và chốt kế hoạch triển khai 3 năm.”
- Giữa: “Chúng ta không trình bày tính năng rời rạc, mà trình bày cách giải quyết vấn đề vận hành có KPI đo được.”
- Chốt: “Đề nghị BOD duyệt 3 quyết định ở slide 64 để kick-off phase tiếp theo.”

### 13.4 Handover rule trong buổi họp

- MC giữ nhịp và quản lý thời gian.
- Câu hỏi về business priority: Manager trả lời trước.
- Câu hỏi về kiến trúc/kỹ thuật: Solution Lead trả lời.
- Câu hỏi về timeline/nguồn lực/rủi ro triển khai: Delivery Lead trả lời.
- Nếu tranh luận kéo dài >2 phút, MC đưa về slide 63 và chốt action owner sau họp.

### 13.5 Live decision capture

- Chuẩn bị trước 1 bảng ghi quyết định theo 3 dòng:
	1) Quyết định,
	2) Owner,
	3) Deadline xác nhận.
- Kết thúc họp phải đọc lại bảng này để xác nhận đồng thuận.

### 13.6 Emergency 5-minute version (khi BOD ít thời gian)

Mục tiêu: vẫn chốt được quyết định dù chỉ có 5 phút.

| Time | Slide | Nội dung bắt buộc |
|---|---|---|
| 00:00-00:45 | 50 | Mở mục tiêu: cần BOD duyệt hướng ưu tiên FDI sản xuất và kế hoạch triển khai.
| 00:45-01:45 | 51 + 54 | Chốt khách hàng ưu tiên (FDI KCN) và pain business/vận hành.
| 01:45-03:00 | 59 + 62 | Chốt cách làm: phase-gate, team scale-up, nguồn lực/cost frame theo phase.
| 03:00-04:00 | 63 | Trả lời nhanh 1-2 câu phản biện trọng yếu bằng mapping.
| 04:00-05:00 | 64 | Xin duyệt 3 quyết định + xác nhận owner và deadline follow-up.

Rule khi chạy bản 5 phút:

- Không đi sâu chi tiết kỹ thuật nếu chưa có câu hỏi trực tiếp.
- Mọi câu hỏi ngoài phạm vi: ghi nhận và hẹn trả lời theo owner sau buổi họp.
- Mục tiêu cuối cùng vẫn là chốt được 3 quyết định ở slide 64.

### 13.7 Elevator 2-minute version (siêu ngắn)

Mục tiêu: trong 120 giây, BOD hiểu và quyết định được hướng đi.

| Time | Slide | One-line bắt buộc |
|---|---|---|
| 00:00-00:30 | 51 | Ưu tiên làm trước FDI sản xuất trong KCN phía Nam, vì nhu cầu SLA/uptime/compliance cao và khả năng nhân bản tốt. |
| 00:30-01:00 | 59 + 62 | Cách làm theo phase-gate 3 năm, có owner rõ, team scale-up 6-8 -> 12-16 -> 20-28, ngân sách duyệt theo phase. |
| 01:00-01:30 | 63 | Các phản biện chính đã có mapping trả lời và slide chứng minh ngay. |
| 01:30-02:00 | 64 | Xin duyệt 3 quyết định: hướng ưu tiên FDI sản xuất, khung nguồn lực 3 năm, danh sách pilot + nguyên tắc ngân sách. |

Script 4 câu (đọc liền mạch):

1) “Chúng ta đề xuất làm trước FDI sản xuất KCN phía Nam để tạo case chuẩn có thể nhân rộng.”
2) “Kế hoạch thực thi theo phase-gate 3 năm, có owner rõ và đội ngũ mở rộng theo từng giai đoạn.”
3) “Các câu hỏi phản biện trọng yếu đã được mapping và có slide chứng minh trực tiếp.”
4) “Đề nghị BOD duyệt 3 quyết định ở slide 64 để kick-off triển khai ngay sau cuộc họp.”

---

## 14) Standard Speaker Notes (slide 50-64)

Quy tắc dùng:

- Mỗi slide nói trong 30-60 giây, đúng 1 thông điệp chính.
- Dùng ngôn ngữ điều hành, tránh đi sâu technical khi chưa có câu hỏi.
- Nếu bị hỏi sâu, chuyển sang slide backup theo mục 13.2.

### Slide 50
- “Deck này để BOD ra quyết định, không phải để liệt kê tính năng.”
- “Chúng ta sẽ trả lời 4 câu hỏi: làm cho ai, giải quyết vấn đề gì, làm bằng cách nào, và cam kết ra sao.”

### Slide 51
- “Phân khúc ưu tiên là FDI sản xuất trong KCN phía Nam, vì nhu cầu chuẩn vận hành cao và khả năng nhân bản.”
- “Ba mảng hardware, hạ tầng, software được gom thành một câu chuyện thống nhất.”

### Slide 52
- “Vai trò đã chia rõ: BOD duyệt hướng, Manager chịu chuyên môn, Marketing chuẩn hóa thông điệp.”
- “Timeline T3-T4-T5 có output cụ thể để kiểm soát tiến độ, không làm theo cảm tính.”

### Slide 53
- “Khách hàng mục tiêu không mua theo giá rẻ, họ mua theo độ ổn định, tuân thủ và kiểm soát rủi ro.”
- “Do đó các chỉ số như SLA, uptime, compliance, ROI là tiêu chí ra quyết định cốt lõi.”

### Slide 54
- “Pain points ở cả 3 mảng đều quy về vấn đề vận hành kinh doanh, không chỉ là bài toán kỹ thuật.”
- “Đây là cơ sở để ưu tiên dự án theo impact thay vì theo cảm giác.”

### Slide 55
- “Giải pháp được đóng theo khung A1-A4 để giữ phạm vi rõ và tránh trượt scope.”
- “Mục tiêu 1-3 năm là tạo giá trị vận hành đo được, không chạy theo tính năng rời rạc.”

### Slide 56
- “Kiến trúc 3 lớp giúp vừa chuẩn hóa lõi, vừa linh hoạt theo từng nhà máy.”
- “Khả năng tích hợp ERP/MES qua API là điều kiện bắt buộc để scale bền vững.”

### Slide 57
- “Module được thiết kế để tạo KPI đo được: downtime, lead-time, inventory accuracy, on-time delivery.”
- “Nếu không đo được, xem như chưa tạo ra giá trị kinh doanh.”

### Slide 58
- “Cam kết chỉ nêu trong phạm vi năng lực vận hành thực tế: SLA, uptime, security controls.”
- “Nguyên tắc là không over-claim, mọi cam kết phải kiểm chứng được.”

### Slide 59
- “Triển khai theo SCRUM và phase-gate để giảm rủi ro big-bang.”
- “Chỉ chuyển phase khi đạt điều kiện rõ, và mỗi phần việc đều có owner chịu trách nhiệm.”

### Slide 60
- “Chúng ta nhìn thẳng vào gap nội bộ và đưa kế hoạch lấp gap theo mốc thời gian cụ thể.”
- “Điểm quan trọng là phân công owner rõ để kế hoạch có thể thực thi ngay.”

### Slide 61
- “Nội lực được xây theo lộ trình 3 năm: năng lực/chứng chỉ, team scale-up, governance, toolchain.”
- “Mục tiêu là chuyển từ đội triển khai nhỏ sang mô hình vận hành có khả năng nhân rộng.”

### Slide 62
- “Roadmap 3 năm được kiểm soát bằng phase-gate, team scale-up và ngân sách theo phase.”
- “BOD có thể thấy rõ bao lâu, cần gì, ai làm, và khi nào đủ điều kiện mở rộng.”

### Slide 63
- “Slide này là bản đồ điều hướng Q&A: hỏi đến đâu, chứng minh bằng slide đến đó.”
- “Tất cả phản biện trọng yếu về phase-gate, owner, team scale-up đều đã có mapping.”

### Slide 64
- “Đây là slide quyết định: chốt hướng ưu tiên FDI sản xuất, khung nguồn lực 3 năm, và danh sách pilot + nguyên tắc ngân sách.”
- “Sau khi duyệt, chúng ta có thể kick-off ngay với owner và deadline đã xác định.”

---

## 15) Print Handout 1-Page (mang vào phòng họp)

Mục đích: bản tóm tắt 1 trang để MC/Manager/Delivery cùng nhìn một khung thống nhất.

### 15.1 Executive one-liner

“Đề xuất triển khai trước FDI sản xuất tại KCN phía Nam bằng mô hình phase-gate 3 năm, có owner rõ, team scale-up theo giai đoạn, và xin BOD duyệt 3 quyết định để kick-off ngay.”

### 15.2 4 ý phải nói trong 2 phút đầu

1) Vì sao ưu tiên FDI sản xuất: chuẩn vận hành cao, nhu cầu SLA/uptime/compliance rõ, dễ tạo case chuẩn để nhân rộng.
2) Vấn đề là business + vận hành: downtime, dữ liệu rời rạc, khó kiểm soát rủi ro.
3) Cách làm có kiểm soát: SCRUM + phase-gate + owner + ngân sách theo phase.
4) Kết quả cần duyệt: 3 quyết định ở slide 64.

### 15.3 Decision card (đọc nguyên văn khi chốt)

- Quyết định 1: Duyệt hướng FDI sản xuất KCN làm trước.
- Quyết định 2: Duyệt khung nguồn lực 3 năm và cơ chế tuyển/đào tạo theo phase.
- Quyết định 3: Duyệt danh sách pilot và nguyên tắc ngân sách theo phase.

### 15.4 Owner card (phân vai tại chỗ)

- Manager: chốt business priority, phạm vi và quyết định cần duyệt.
- Solution Lead: trả lời kiến trúc, tích hợp, KPI kỹ thuật-vận hành.
- Delivery Lead: trả lời timeline, phase-gate, team scale-up, rủi ro triển khai.
- MC: giữ nhịp thời gian, đưa về slide 63 khi Q&A đi xa, chốt action cuối họp.

### 15.5 Quick objection handling (30-45 giây/câu)

- “Vì sao làm trước FDI?” -> Tham chiếu slide 51 + 53.
- “Có triển khai được không?” -> Tham chiếu slide 59 + 62.
- “Nội lực có đủ không?” -> Tham chiếu slide 60 + 61.
- “Cam kết có thực tế không?” -> Tham chiếu slide 58.
- “Chốt cần duyệt gì?” -> Tham chiếu slide 64.

### 15.6 Meeting close template

“Để triển khai ngay sau họp, xin xác nhận 3 quyết định đã nêu. Đề nghị chốt owner và deadline follow-up cho từng quyết định trước khi kết thúc phiên.”

---

## 16) MKT Pre-Publish Quick Card (1-page)

Mục tiêu: checklist rút gọn để MKT review trong 10-15 phút trước khi publish LP/brochure/sales content.

### 16.1 6 câu hỏi phải đạt (Yes/No)

- [ ] Nội dung có bám đúng flow Product Detail 74 -> 80 không?
- [ ] Mỗi claim đã trace được về nguồn 50 -> 72 chưa?
- [ ] Mỗi phần nhỏ đã có cấu trúc “Tóm tắt -> Chi tiết” chưa?
- [ ] Slide 76 đã đủ architecture + modules + integration + KPI outcome chưa?
- [ ] Có câu nào đang over-claim (100%, guaranteed, no-risk) chưa?
- [ ] CTA cuối có hướng đúng mục tiêu thu hút 1-2 pilot enterprise đầu tiên chưa?

### 16.2 Critical checks theo slide

- [ ] Slide 74: pain + business impact + cost-of-inaction rõ, không nói chung chung.
- [ ] Slide 75: định vị solution + partner model rõ, không dùng giọng “vendor triển khai”.
- [ ] Slide 76: có bảng module-to-outcome (pain/chức năng/KPI/stakeholder).
- [ ] Slide 77: có phase-gate + owner + failure playbook.
- [ ] Slide 78: có stakeholder journey + objection handling + CTA theo stage.
- [ ] Slide 79: commitment boundary rõ điều kiện áp dụng.
- [ ] Slide 80: capability gap minh bạch + roadmap 3 năm + pilot expansion trigger.

### 16.3 Từ khóa bắt buộc / cấm dùng

**Bắt buộc có**
- `phase-gate`
- `baseline KPI`
- `pilot`
- `integration`
- `commitment boundary`

**Tránh dùng**
- “đảm bảo 100%”
- “không rủi ro”
- “triển khai mọi nơi ngay”
- “thay thế toàn bộ ERP trong một bước”

### 16.4 Publish gate (GO/NO-GO)

- GO khi toàn bộ mục 16.1 và 16.2 đều đạt.
- NO-GO nếu thiếu một trong các điểm trọng yếu:
	1) Traceability source (50-72),
	2) Module/integration evidence (slide 76),
	3) Capability realism + guardrail commitments (slide 79-80).

### 16.5 Handover note cho Sales

- Link kèm: bản Product Detail 74-80 + Traceability map + Objection playbook.
- Mục tiêu buổi discovery đầu: xác nhận readiness để vào pilot, không chốt scope mở rộng ngay.
- Kịch bản chốt cuộc họp: “Start small, scale with evidence.”

### 16.6 Checkbox-only Task Card (10 dòng)

- [ ] Flow đúng 74 -> 80, không lệch mạch.
- [ ] Claim trace được về nguồn 50 -> 72.
- [ ] Mỗi phần có “Tóm tắt -> Chi tiết”.
- [ ] Slide 76 đủ: architecture/modules/integration/outcome.
- [ ] Slide 77 đủ: phase-gate/owner/failure playbook.
- [ ] Slide 79 có commitment boundary rõ.
- [ ] Slide 80 có gap + roadmap + expansion trigger.
- [ ] Không còn từ over-claim (100%, no-risk, guaranteed).
- [ ] CTA cuối hướng pilot enterprise (1-2 khách hàng đầu tiên).
- [ ] Handover package cho Sales đã đính kèm đủ tài liệu.

**Tracking (Sprint use):**
- Owner:
- Review date:
- Status: Draft / In Review / Approved / Published

### 16.7 Checkbox-only Task Card (English, 10 lines)

- [ ] Flow follows 74 -> 80 with no narrative drift.
- [ ] Every claim is traceable to source slides 50 -> 72.
- [ ] Every subsection uses the “Summary -> Details” structure.
- [ ] Slide 76 includes architecture/modules/integration/outcome.
- [ ] Slide 77 includes phase-gate/owner/failure playbook.
- [ ] Slide 79 defines commitment boundaries clearly.
- [ ] Slide 80 includes gaps + roadmap + expansion triggers.
- [ ] No over-claim terms remain (100%, no-risk, guaranteed).
- [ ] Final CTA targets enterprise pilot acquisition (first 1-2 customers).
- [ ] Sales handover package is complete and attached.

**Tracking (Sprint use):**
- Owner:
- Review date:
- Status: Draft / In Review / Approved / Published
