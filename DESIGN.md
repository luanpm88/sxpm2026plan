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
- 3 mảng công ty: phần cứng, hạ tầng CNTT, phần mềm quản lý sản xuất.

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
3) Phần mềm quản lý sản xuất: quản lý thủ công, không tích hợp dữ liệu, thiếu realtime, thiếu dashboard, phụ thuộc Excel.

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

---

## 17) RESET DESIGN — FDI SX - Solution (Slide 73 trở đi)

Mục này là **source of truth mới** cho nhánh giới thiệu sản phẩm từ slide 73 trở đi.

Quy tắc áp dụng:
- Bỏ qua toàn bộ mô tả cũ của nhánh 73+ trước đây.
- Tập trung vào câu chuyện sản phẩm MES cho khách hàng business/market hiểu được.
- Giọng trình bày: kỹ thuật-vận hành của team sản xuất, không dùng giọng quảng cáo.

### 17.1 Prefix bắt buộc

Prefix tiêu đề chuẩn cho nhánh này:

`FDI SX - Solution:`

Ví dụ:
- `FDI SX - Solution: Product Overview`
- `FDI SX - Solution: Module Catalog`

### 17.2 Mục tiêu nhánh 73+

- Giới thiệu rõ sản phẩm MES của mình là gì.
- Đi theo luồng quyết định tự nhiên của khách hàng: nhu cầu -> giải pháp -> triển khai -> chi phí -> vận hành dài hạn.
- Bao phủ đầy đủ các nhóm nội dung bắt buộc:
	- Mã nguồn/Công nghệ
	- Bảo mật
	- Kiến trúc hạ tầng
	- Bảo trì/Bảo hành
	- Gói sản phẩm (3 gói: chức năng + giá)
	- Thiết bị/Phần cứng/Ngoại vi
	- Quy trình SXPM
	- Đội ngũ/Vai trò
	- Rủi ro quản lý
	- Năng lực + Tiêu chuẩn/Chứng nhận

### 17.3 Slide 73 — Plan index cho nhánh sản phẩm (làm trước)

**Title**
- `FDI SX - Solution: Product Introduction Plan`

**Mục tiêu slide 73**
- Làm đầu mục tổng cho toàn bộ slide sau.
- Cho người đọc thấy ngay thứ tự kể chuyện và phạm vi nội dung.
- Đặt góc nhìn khách hàng FDI sản xuất: họ đang vướng gì, họ cần được dẫn dắt thế nào, và họ sẽ nhận được gì.
- Chỉ là plan/index nhưng phải đủ rõ để người nghe hiểu logic business trước khi đi vào từng slide chi tiết.

**Khối nội dung bắt buộc**
- Product scope (MES cho FDI sản xuất).
- Story flow map (từ nhu cầu đến vận hành và mở rộng).
- Danh sách slide phía sau + output của từng slide.
- Pain framing cho FDI sản xuất (nhóm khó khăn thường gặp):
	- Downtime khó truy nguyên theo line/ca.
	- Dữ liệu rời rạc giữa ERP/MES/WMS/Excel, thiếu một nguồn sự thật.
	- Chậm phản ứng khi lỗi chất lượng, CAPA closure kéo dài.
	- Áp lực audit/compliance, truy xuất bằng chứng tốn công.
- Solution response map (sản phẩm xử lý pain như thế nào):
	- Chuẩn hóa module vận hành (Production/Warehouse/Quality/Maintenance/Analytics).
	- Chuẩn hóa tích hợp dữ liệu và event flow với hệ thống hiện hữu.
	- Chuẩn hóa delivery theo phase-gate + KPI + ownership.
	- Chuẩn hóa trust layer: security baseline, SLA band, governance.
- Customer value summary (khách hàng được gì từ sản phẩm):
	- Executive Sponsor: thấy rõ risk-control + investment logic + điều kiện scale.
	- Plant: giảm downtime, ổn định throughput, tăng khả năng kiểm soát line.
	- IT: giảm integration chaos, tăng auditability, vận hành có chuẩn.
	- Procurement: scope rõ, mốc nghiệm thu rõ, trách nhiệm và cam kết rõ.

**Gợi ý dẫn chuyện (đặt mình vào khách hàng FDI)**
- Bước 1: “Nhà máy của tôi đang mất gì nếu giữ cách vận hành hiện tại?”
- Bước 2: “Giải pháp MES của bên bạn cụ thể giải quyết phần nào trước?”
- Bước 3: “Tôi nhận được kết quả gì theo từng vai trò (BOD/Plant/IT/Procurement)?”
- Bước 4: “Triển khai ra sao để không gây rủi ro vận hành?”
- Bước 5: “Khi nào đủ điều kiện mở rộng và tổng mức đầu tư như thế nào?”

**Talk track 60–90 giây (dùng trực tiếp cho Slide 73)**
- “Trong phần này, chúng tôi không bắt đầu từ tính năng, mà bắt đầu từ khó khăn vận hành thực tế mà nhà máy FDI đang gặp: downtime khó truy nguyên, dữ liệu rời rạc và áp lực compliance.”
- “Giải pháp của chúng tôi là một MES theo kiến trúc module, tích hợp với hệ thống hiện hữu, triển khai theo phase-gate để giảm rủi ro khi đưa vào vận hành.”
- “Giá trị nhận được sẽ rõ theo từng vai trò: Executive Sponsor có logic đầu tư và mở rộng; Plant có hiệu quả vận hành; IT có tích hợp chuẩn và truy vết; Procurement có phạm vi và cam kết rõ.”
- “Từ slide 74 đến 80, chúng tôi đi theo đúng thứ tự ra quyết định của khách hàng: nhu cầu -> giải pháp -> kiến trúc -> triển khai -> vận hành -> chi phí.”

**Implementation checklist cho Slide 73 (để tránh lỗi cũ)**
- [ ] Chỉ giữ vai trò plan/index, không đi sâu thành slide kỹ thuật chi tiết.
- [ ] Có đủ 3 lớp: Pain framing -> Solution response -> Customer value.
- [ ] Có nhắc rõ sản phẩm là MES cho FDI sản xuất và logic storytelling 74 -> 80.
- [ ] Không đưa text meta vào render slide: “template”, “DoD”, “publish gate”, “bố cục trình bày”.
- [ ] Không dùng ngôn ngữ pilot-first trong cụm 73+.
- [ ] Từ khóa vai trò dùng nhất quán: Executive Sponsor / Plant / IT / Procurement.

**Implementation checklist cho Slide 74–80 (triển khai chính xác, tránh lỗi cũ)**

**Slide 74 — Why Now & Manufacturing Pain**
- [ ] Có đủ 4 nhóm pain: downtime, data fragmentation, quality response, compliance burden.
- [ ] Có “cost of inaction” theo ngữ cảnh 12–24 tháng (không nêu mơ hồ).
- [ ] Kết thúc bằng trigger khởi tạo triển khai (owner + KPI baseline + scope line/process).

**Slide 75 — What We Provide (MES Scope)**
- [ ] Nói rõ in-scope/out-of-scope, không tạo kỳ vọng thay ERP toàn phần.
- [ ] Thể hiện mô hình đồng hành theo vòng đời: discover -> co-design -> delivery -> governance.
- [ ] Có value theo 4 vai trò: Executive Sponsor / Plant / IT / Procurement.

**Slide 76 — Full Module Catalog**
- [ ] Có danh mục module đầy đủ (Production/Warehouse/Quality/Maintenance/Analytics).
- [ ] Có integration matrix với ERP/MES/WMS/HRM/IoT/API.
- [ ] Có bảng module-to-outcome: pain -> function -> KPI -> stakeholder.
- [ ] Có data governance + scope boundary giai đoạn đầu.

**Slide 77 — Architecture & Integration**
- [ ] Có architecture logic đủ lớp (application/data/integration/platform-security).
- [ ] Có flow dữ liệu chính và nguyên tắc source of truth.
- [ ] Có ràng buộc tích hợp và điều kiện vận hành khi mở rộng.

**Slide 78 — Delivery Process & Team**
- [ ] Có phase-gate rõ (entry/exit criteria) và điều kiện dừng/chỉnh.
- [ ] Có RACI vai trò triển khai (PM/PO, Solution Lead, Tech Lead, QA, Support, Program Owner).
- [ ] Có deliverables theo phase và mốc nghiệm thu.

**Slide 79 — Security, Infra, Network & Support**
- [ ] Có security baseline: RBAC, encryption, audit trail, backup/DR.
- [ ] Có infra/network baseline cho môi trường vận hành sản xuất.
- [ ] Có SLA band + escalation path + commitment boundary.
- [ ] Nội dung phải ăn nhập trực tiếp với commitments/security/governance, không chèn meta text.

**Slide 80 — Packages, Pricing & Investment**
- [ ] Có 3 gói sản phẩm rõ chức năng và phạm vi áp dụng.
- [ ] Có khung giá dự kiến + phần cứng/ngoại vi liên quan.
- [ ] Có tổng mức đầu tư theo phase và điều kiện mở rộng.
- [ ] Có lưu ý giả định chi phí (scope, số line/site, mức tích hợp, service level).

**Cross-check bắt buộc trước khi implement 74–80**
- [ ] Không render text meta vào slide (template/DoD/publish gate/bố cục trình bày).
- [ ] Không dùng narrative pilot-first trong cụm 73+.
- [ ] Mọi claim kỹ thuật/chi phí đều trace được về plan FDI cũ (54–63, 67–72).
- [ ] Giọng văn nhất quán: team sản xuất, kỹ thuật-vận hành, không quảng cáo chung chung.

### 17.4 Story order đề xuất (ưu tiên hợp lý từ chung -> chi tiết)

#### Cụm cốt lõi
- **Slide 73** — `FDI SX - Solution: Product Introduction Plan`
	- Đầu mục tổng và thứ tự kể chuyện.

- **Slide 74** — `FDI SX - Solution: Why Now & Manufacturing Pain`
	- Nhu cầu, pain vận hành, cost of inaction.

- **Slide 75** — `FDI SX - Solution: What We Provide (MES Scope)`
	- Giải pháp tổng thể, phạm vi in-scope/out-of-scope.

- **Slide 76** — `FDI SX - Solution: Full Module Catalog`
	- Liệt kê đầy đủ module hệ thống MES và chức năng chính.

- **Slide 77** — `FDI SX - Solution: Architecture & Integration`
	- Ứng dụng, dữ liệu, tích hợp ERP/MES/WMS/HRM/IoT/API.

- **Slide 78** — `FDI SX - Solution: Delivery Process & Team`
	- Quy trình SXPM, phase-gate, đội ngũ/vai trò, RACI.

- **Slide 79** — `FDI SX - Solution: Security, Infra, Network & Support`
	- Bảo mật, hạ tầng, mạng, bảo trì/bảo hành, SLA band.

- **Slide 80** — `FDI SX - Solution: Packages, Pricing & Investment`
	- 3 gói sản phẩm (chức năng + giá dự kiến), phần cứng/ngoại vi, tổng mức đầu tư.

#### Cụm mở rộng (nên có nếu mở thêm slide sau 80)
- **Slide 81** — Mã nguồn/Công nghệ & nguyên tắc kỹ thuật.
- **Slide 82** — Thiết bị phần cứng/ngoại vi theo mô hình nhà máy.
- **Slide 83** — Rủi ro quản lý và kế hoạch giảm thiểu.
- **Slide 84** — Năng lực đội ngũ, tiêu chuẩn/chứng nhận, năng lực triển khai.
- **Slide 85** — Kế hoạch triển khai 12-18 tháng + điều kiện mở rộng.

### 17.5 Ánh xạ từ plan FDI cũ (để không lệch)

Nguồn bắt buộc từ cụm FDI hiện có:
- Pain & business context: slide 54, 57, 58.
- Architecture/module: slide 56, 57, 58.
- Delivery/process/team: slide 59, 60, 61, 62.
- Q&A và mối quan tâm quyết định: slide 63.
- Risk/cost/pricing/readiness: slide 67, 68, 70, 71, 72.

Quy tắc ánh xạ:
- Không thêm claim mới nếu chưa có nguồn từ cụm FDI.
- Khi mở rộng nội dung kỹ thuật, phải có owner kiểm chứng (Solution Lead/Delivery Lead).

### 17.6 Nếu vẫn giữ trần 80 slide

Nếu hiện tại chưa mở thêm slide >80, giữ 73-80 theo cấu trúc cốt lõi và gộp như sau:
- Gộp Source code/Công nghệ vào slide 77.
- Gộp Thiết bị/Phần cứng/Ngoại vi vào slide 80 (phần chi phí).
- Gộp Tiêu chuẩn/Chứng nhận vào slide 79 hoặc 80.
- Gộp Rủi ro quản lý vào cuối slide 79.

### 17.7 Deliverable kỳ vọng cho nhánh 73+

- 1 narrative dùng cho Sales/Presales meeting.
- 1 bộ nội dung có thể chuyển thành website marketing B2B.
- 1 bộ khung triển khai đủ sâu để Delivery sử dụng khi kickoff.

### 17.8 Implementation Template (8 khung: Slide 73 -> 80)

Mục đích: dev/content chỉ cần điền đúng các khung dưới đây để implement nhanh, không lệch story.

#### Template — Slide 73 (Plan Index)
- Title:
- Subtitle:
- One-line promise (MES cho FDI SX là gì):
- Pain framing (3-4 ý):
- Solution response map (3-4 ý):
- Customer value by role (Executive Sponsor/Plant/IT/Procurement):
- Story map 74 -> 80:
- Guardrail: không đi sâu kỹ thuật chi tiết ở slide này.

#### Template — Slide 74 (Why Now & Pain)
- Title:
- Subtitle:
- Pain groups: downtime / data / quality / compliance.
- Cost of inaction (12-24 tháng):
- Trigger khởi tạo triển khai:
- KPI baseline cần đo:
- Output chốt slide: vì sao cần làm ngay.

#### Template — Slide 75 (What We Provide)
- Title:
- Subtitle:
- In-scope:
- Out-of-scope:
- Partnering lifecycle: discover -> co-design -> delivery -> governance.
- Value per stakeholder:
- Guardrail cam kết:

#### Template — Slide 76 (Full Module Catalog)
- Title:
- Subtitle:
- Module list đầy đủ:
- Integration matrix (ERP/MES/WMS/HRM/IoT/API):
- Module-to-outcome table (pain -> function -> KPI -> stakeholder):
- Data governance rules:
- Scope boundary giai đoạn đầu:

#### Template — Slide 77 (Architecture & Integration)
- Title:
- Subtitle:
- Architecture layers:
- Data flow chính:
- Source-of-truth mapping:
- Technical constraints/prerequisites:
- Output chốt slide: khả năng tích hợp và scale có kiểm soát.

#### Template — Slide 78 (Delivery Process & Team)
- Title:
- Subtitle:
- Phase-gate plan:
- Entry/Exit criteria:
- RACI (PM/PO, Solution Lead, Tech Lead, QA, Support, Program Owner):
- Deliverables theo phase:
- Failure handling/escalation:

#### Template — Slide 79 (Security/Infra/Network/Support)
- Title:
- Subtitle:
- Security baseline (RBAC/encryption/audit/backup-DR):
- Infra & network baseline:
- SLA bands + escalation path:
- Commitment boundary:
- Evidence checklist trước sign-off:

#### Template — Slide 80 (Packages/Pricing/Investment)
- Title:
- Subtitle:
- Package 1 (chức năng + giá):
- Package 2 (chức năng + giá):
- Package 3 (chức năng + giá):
- Hardware/peripheral assumptions:
- TCO theo phase (People/Process/Platform/Program):
- Điều kiện mở rộng và giả định chi phí:

#### Global QA trước khi code slide
- [ ] Không có text meta lộ ra slide render.
- [ ] Không dùng narrative pilot-first cho cụm 73+.
- [ ] Tên vai trò nhất quán: Executive Sponsor / Plant / IT / Procurement.
- [ ] Claim kỹ thuật/chi phí trace được về cụm FDI gốc.


**Tracking (Sprint use):**
- Owner:
- Review date:
- Status: Draft / In Review / Approved / Published
