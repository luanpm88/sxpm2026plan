<?php
// Configuration for the presentation
define('PRESENTATION_TITLE', 'Định hướng phát triển Bộ phận Sản xuất Phần mềm 2026');
define('TOTAL_SLIDES', 72);

// Slide titles
$slide_titles = [
    0 => 'Giới thiệu',
    1 => 'Nội dung trình bày',
    2 => 'Hiện trạng Bộ phận Sản xuất Phần mềm',
    3 => 'Vấn đề cốt lõi hiện tại',
    4 => 'Định hướng tổng thể',
    5 => 'Hướng 1 – Software Development',
    6 => 'Hướng 2 – SaaS Product: HKSpace',
    7 => 'Lộ trình phát triển HKSpace',
    8 => 'Hướng 3 – Website Development',
    9 => 'Hướng 4 – AI Knowledge Platform',
    10 => 'Phân bổ nguồn lực đề xuất',
    11 => 'Lộ trình triển khai 2026',
    12 => 'Đề xuất & Cam kết',
    13 => 'Tổng hợp Danh mục Sản phẩm',
    14 => 'Cảm ơn',
    15 => 'Kiến trúc tổng thể hệ thống',
    16 => 'User Layer & API Gateway',
    17 => 'HKSpace Core & Todo Engine',
    18 => 'Automation Engine Architecture',
    19 => 'AI Knowledge Platform',
    20 => 'SaaS Foundation & Infrastructure',
    21 => 'Advanced AI & Generative AI Integration',
    22 => 'Vision 10 năm: Technology Evolution',
    23 => 'Emerging Tech & R&D Roadmap',
    24 => 'Thiết kế: Tổng quan Automation (Visual)',
    25 => 'Thiết kế: AI Knowledge Base Platform',
    26 => 'Thiết kế: Scaling Infrastructure (10-Year Roadmap)',
    27 => 'Thiết kế: Security Posture & Risk Mitigation',
    28 => 'HKIncotech Landing Page - Nội dung Website',
    29 => 'Nguồn lực: Vị trí, kỹ năng & Chứng chỉ theo SCRUM',
    30 => 'Nguồn lực: Phân hóa nguồn lực hiện tại và chứng chỉ đề xuất',
    31 => 'Workshop #1: Embracing AI, the Emotsy Way',
    32 => 'Workshop #1: AI in Development: Benefits & Risks',
    33 => 'Workshop #1: Design-First Control Loop',
    34 => 'Workshop #1: Workshop Use Case: Email Verification Service',
    35 => 'Workshop #1: Email Verification Architecture Snapshot',
    36 => 'Workshop #1: AI Prompting with Constraints',
    37 => 'Workshop #1: Workshop Flow & Roles',
    38 => 'Workshop #1: Principles & Takeaways',
    39 => 'Workshop #1: Practice Playbook: Add Reoon Fast & Safely',
    40 => 'Website: Executive Overview & Board Context',
    41 => 'Website: Site Architecture Hub Model',
    42 => 'Website: Customer Journey 4-Stage Funnel',
    43 => 'Website: CTA Strategy & Trust Staircase',
    44 => 'Website: Content Strategy by Page Cluster',
    45 => 'Website: KPI Targets & Revenue Impact',
    46 => 'Website: Launch Plan (4-6 Weeks)',
    47 => 'Website: 12-Month Roadmap',
    48 => 'Website: Risk Mitigation & Governance',
    49 => 'Website: Board Decision & Next Steps',
    50 => 'FDI sản xuất: Operating Framework',
    51 => 'FDI sản xuất: Executive Summary',
    52 => 'FDI sản xuất: Why This Opportunity Now',
    53 => 'FDI sản xuất: Market Positioning Gap',
    54 => 'FDI sản xuất: Current Manufacturing Pain Points',
    55 => 'FDI sản xuất: Product Vision',
    56 => 'FDI sản xuất: System Architecture (3 Layers)',
    57 => 'FDI sản xuất: Core Functional Modules Overview',
    58 => 'FDI sản xuất: Quality & Executive Modules',
    59 => 'FDI sản xuất: Structured Implementation Approach',
    60 => 'FDI sản xuất: Business Model Evolution',
    61 => 'FDI sản xuất: Competitive Positioning',
    62 => 'FDI sản xuất: Development Roadmap (24–36 Months)',
    63 => 'FDI sản xuất: Key Risks & Mitigation',
    64 => 'FDI sản xuất: Strategic Impact & Decision Required',
    65 => 'FDI sản xuất: Reality Check - Current Readiness & Constraints',
    66 => 'FDI sản xuất: SWOT for FDI Production Entry',
    67 => 'FDI sản xuất: Top Risks, Challenges & Mitigation',
    68 => 'FDI sản xuất: Strategic Lighthouse Customer Decision',
    69 => 'FDI sản xuất: Practical Timeline (0-18 Months)',
    70 => 'FDI sản xuất: Cost Envelope & Budget Scenarios',
    71 => 'FDI sản xuất: Pricing Strategy & Opportunity Model',
    72 => 'FDI sản xuất: BOD Realism Checkpoint & Final Confirmations'
];

// Get current slide number from URL
function getCurrentSlide() {
    $page = basename($_SERVER['PHP_SELF'], '.php');
    if ($page === 'index') {
        return 0;
    }
    if (preg_match('/slide_(\d+)/', $page, $matches)) {
        return (int)$matches[1];
    }
    return 0;
}

// Get slide title
function getSlideTitle($slide_num = null) {
    global $slide_titles;
    if ($slide_num === null) {
        $slide_num = getCurrentSlide();
    }
    return $slide_titles[$slide_num] ?? PRESENTATION_TITLE;
}

// Navigation helpers
function getPrevSlide($current) {
    return $current > 0 ? "slide_" . str_pad($current - 1, 2, '0', STR_PAD_LEFT) . ".php" : null;
}

function getNextSlide($current) {
    return $current < TOTAL_SLIDES ? "slide_" . str_pad($current + 1, 2, '0', STR_PAD_LEFT) . ".php" : null;
}
?>
