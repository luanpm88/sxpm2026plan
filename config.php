<?php
// Configuration for the presentation
define('PRESENTATION_TITLE', 'Định hướng phát triển Bộ phận Sản xuất Phần mềm 2026');
define('TOTAL_SLIDES', 62);

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
    40 => 'Website: HKIncotech Site Architecture Overview',
    41 => 'Website: The Challenge - Enterprise Client Decision-Making',
    42 => 'Website: The Solution - Strategic Architecture Approach',
    43 => 'Website: Site Architecture - Navigation Hub Model',
    44 => 'Website: Customer Journey - 4-Stage Funnel',
    45 => 'Website: Stage 1 - Awareness (100% Traffic)',
    46 => 'Website: Stage 2 - Interest (40% Engagement)',
    47 => 'Website: Stage 3 - Consideration (12% Engagement)',
    48 => 'Website: Stage 4 - Decision & Conversion (1.8%)',
    49 => 'Website: Page Purposes & Content Strategy',
    50 => 'Website: Strategic Insight #1 - Multiple CTAs',
    51 => 'Website: Strategic Insight #2 - Trust-Building Staircase',
    52 => 'Website: Strategic Insight #3 - Modular Content Architecture',
    53 => 'Website: Strategic Insight #4 - Single Conversion Goal',
    54 => 'Website: Design Consistency & Visual Standards',
    55 => 'Website: Projected Performance & Revenue Impact',
    56 => 'Website: Key Metrics to Track',
    57 => 'Website: Launch & Optimization Strategy',
    58 => 'Website: 12-Month Roadmap - Q1 & Q2 2026',
    59 => 'Website: 12-Month Roadmap - Q3 & Q4 2026',
    60 => 'Website: Risk Mitigation Strategy',
    61 => 'Website: Implementation Requirements & Timeline',
    62 => 'Website: Board Decision & Next Steps'
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
