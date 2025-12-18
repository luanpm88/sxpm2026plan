# Design Updates - Minimal Color System

## Thay đổi chính
Đã cập nhật toàn bộ presentation sang phong cách tối giản với màu sắc chỉ xuất hiện ở icons và badges, không còn viền/nền màu cho boxes.

## Nguyên tắc thiết kế mới
1. **Boxes/Cards**: Tất cả đều trắng (#ffffff) với viền xám nhạt (#e5e7eb)
2. **Màu sắc chỉ dùng cho**:
   - Icons: Orange (#fb923c) = cảnh báo, Green (#10b981) = positive, Black (#1f2937) = neutral
   - Small badges (labels): Giữ màu để phân loại nhanh
3. **Hover states**: Chỉ đổi viền sang xám đậm hơn (#d1d5db), không dùng màu

## Slides đã cập nhật

### slide_02.php - Phân tích nội lực
- ✅ Boxes: Trắng + viền xám
- ✅ Strength badge: Xanh lá (#10b981)
- ✅ Weakness badge: Cam (#fb923c)

### slide_03.php - Vấn đề cần giải quyết
- ✅ Problem sections: Trắng + viền xám
- ✅ Icons cảnh báo: Cam (#fb923c)
- ✅ Warning box: Trắng + viền xám

### slide_04.php - 4 định hướng phát triển
- ✅ Objective box: Trắng + viền xám
- ✅ Badges: Đen (#1f2937) cho strategic/cashflow

### slide_05.php - Outsourcing Model
- ✅ Pros/Cons cards: Trắng + viền xám
- ✅ Icons: Xanh lá (check) + Cam (warning)

### slide_06.php - Outsourcing Deep Dive (Q1-Q2 2026)
- ✅ All info cards: Trắng + viền xám
- ✅ Status/Potential/Challenge cards: Trắng + viền xám
- ✅ Target & Objective items: Trắng + viền xám
- ✅ Challenge icons: Cam (#fb923c)

### slide_07.php - Outsourcing Deep Dive (Q3-Q4 2026)
- ✅ All info cards: Trắng + viền xám
- ✅ Status/Potential/Challenge cards: Trắng + viền xám
- ✅ Target & Warning cards: Trắng + viền xám
- ✅ Challenge icons: Cam (#fb923c)

### slide_08.php - AI Platform (2026-2027)
- ✅ All info cards: Trắng + viền xám
- ✅ Status/Potential/Challenge cards: Trắng + viền xám
- ✅ Target card: Trắng + viền xám
- ✅ Tech stack card: Trắng + viền xám
- ✅ Challenge icons: Cam (#fb923c)

### slide_09.php - Roadmap 2026-2027
- ✅ Version badges: Đen (#1f2937) thay vì xanh
- ✅ Target box: Trắng + viền xám

### slide_10.php - Phân bổ nguồn lực
- ✅ Warning box: Trắng + viền xám (icon vẫn cam)
- ✅ Team cards: Đã có sẵn style neutral

### slide_11.php - SWOT Analysis
- ✅ SWOT cards (S,W,O,T): Tất cả trắng + viền xám
- ✅ Icons phân biệt từng loại

### slide_12.php - Proposals
- ✅ Proposal list: Trắng + viền xám
- ✅ Numbered badges: Đen (#1f2937)
- ✅ Commitment list: Trắng + viền xám
- ✅ Shared responsibility: Trắng + viền xám
- ✅ Next steps: Trắng + viền xám
- ✅ Inline styles: Đã update sang xám

## Common styles (includes/styles.php)
Đã có sẵn các common card classes:
- `.info-card`, `.card`, `.section-card`
- `.card-header` với variants: `.positive`, `.warning`, `.info`
- `.card-list` với variants: `.positive`, `.warning`, `.neutral`
- `.warning-box` với icon cam

## Kết quả
- Loại bỏ hoàn toàn: Viền xanh (#3b82f6, #2672cd), viền cam (#fb923c) cho boxes
- Loại bỏ hoàn toàn: Nền màu cam (#fff7ed), xanh (#eff6ff), xanh lá (#f0fdf4)
- Giữ lại: Icons màu, small badges màu
- Tất cả cards: White + gray border chỉ

**Phong cách**: Tối giản, chuyên nghiệp, màu chỉ dùng để chỉ ý nghĩa (warning, success, neutral)
