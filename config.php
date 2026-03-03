<?php
// Configuration for the presentation
define('PRESENTATION_TITLE', 'Định hướng phát triển Bộ phận Sản xuất Phần mềm 2026');
define('TOTAL_SLIDES', 80);

// Slide titles by slide ID (order in this array = presentation order)
$slide_titles = [
    'slide_00' => 'Giới thiệu',
    'slide_01' => 'Nội dung trình bày',
    'slide_02' => 'Hiện trạng Bộ phận Sản xuất Phần mềm',
    'slide_03' => 'Vấn đề cốt lõi hiện tại',
    'slide_04' => 'Định hướng tổng thể',
    'slide_05' => 'Hướng 1 – Software Development',
    'slide_06' => 'Hướng 2 – SaaS Product: HKSpace',
    'slide_07' => 'Lộ trình phát triển HKSpace',
    'slide_08' => 'Hướng 3 – Website Development',
    'slide_09' => 'Hướng 4 – AI Knowledge Platform',
    'slide_10' => 'Phân bổ nguồn lực đề xuất',
    'slide_11' => 'Lộ trình triển khai 2026',
    'slide_12' => 'Đề xuất & Cam kết',
    'slide_13' => 'Tổng hợp Danh mục Sản phẩm',
    'slide_14' => 'Cảm ơn',
    'slide_15' => 'Kiến trúc tổng thể hệ thống',
    'slide_16' => 'User Layer & API Gateway',
    'slide_17' => 'HKSpace Core & Todo Engine',
    'slide_18' => 'Automation Engine Architecture',
    'slide_19' => 'AI Knowledge Platform',
    'slide_20' => 'SaaS Foundation & Infrastructure',
    'slide_21' => 'Advanced AI & Generative AI Integration',
    'slide_22' => 'Vision 10 năm: Technology Evolution',
    'slide_23' => 'Emerging Tech & R&D Roadmap',
    'slide_24' => 'Thiết kế: Tổng quan Automation (Visual)',
    'slide_25' => 'Thiết kế: AI Knowledge Base Platform',
    'slide_26' => 'Thiết kế: Scaling Infrastructure (10-Year Roadmap)',
    'slide_27' => 'Thiết kế: Security Posture & Risk Mitigation',
    'slide_28' => 'HKIncotech Landing Page - Nội dung Website',
    'slide_29' => 'Nguồn lực: Vị trí, kỹ năng & Chứng chỉ theo SCRUM',
    'slide_30' => 'Nguồn lực: Phân hóa nguồn lực hiện tại và chứng chỉ đề xuất',
    'slide_31' => 'Workshop #1: Embracing AI, the Emotsy Way',
    'slide_32' => 'Workshop #1: AI in Development: Benefits & Risks',
    'slide_33' => 'Workshop #1: Design-First Control Loop',
    'slide_34' => 'Workshop #1: Workshop Use Case: Email Verification Service',
    'slide_35' => 'Workshop #1: Email Verification Architecture Snapshot',
    'slide_36' => 'Workshop #1: AI Prompting with Constraints',
    'slide_37' => 'Workshop #1: Workshop Flow & Roles',
    'slide_38' => 'Workshop #1: Principles & Takeaways',
    'slide_39' => 'Workshop #1: Practice Playbook: Add Reoon Fast & Safely',
    'slide_40' => 'Website: Executive Overview & Board Context',
    'slide_41' => 'Website: Site Architecture Hub Model',
    'slide_42' => 'Website: Customer Journey 4-Stage Funnel',
    'slide_43' => 'Website: CTA Strategy & Trust Staircase',
    'slide_44' => 'Website: Content Strategy by Page Cluster',
    'slide_45' => 'Website: KPI Targets & Revenue Impact',
    'slide_46' => 'Website: Launch Plan (4-6 Weeks)',
    'slide_47' => 'Website: 12-Month Roadmap',
    'slide_48' => 'Website: Risk Mitigation & Governance',
    'slide_49' => 'Website: Board Decision & Next Steps',
    'slide_50' => 'FDI sản xuất: Operating Framework',
    'slide_51' => 'FDI sản xuất: Executive Summary',
    'slide_52' => 'FDI sản xuất: Why This Opportunity Now',
    'slide_53' => 'FDI sản xuất: Market Positioning Gap',
    'slide_54' => 'FDI sản xuất: Current Manufacturing Pain Points',
    'slide_55' => 'FDI sản xuất: Product Vision',
    'slide_56' => 'FDI sản xuất: System Architecture (3 Layers)',
    'slide_57' => 'FDI sản xuất: Core Functional Modules Overview',
    'slide_58' => 'FDI sản xuất: Quality & Executive Modules',
    'slide_59' => 'FDI sản xuất: Structured Implementation Approach',
    'slide_60' => 'FDI sản xuất: Business Model Evolution',
    'slide_61' => 'FDI sản xuất: Competitive Positioning',
    'slide_62' => 'FDI sản xuất: Development Roadmap (24–36 Months)',
    'slide_63' => 'FDI sản xuất: BOD Requirement Mapping Q&A',
    'slide_64' => 'FDI sản xuất: Strategic Impact & Decision Required',
    'slide_65' => 'FDI sản xuất: Reality Check - Current Readiness & Constraints',
    'slide_66' => 'FDI sản xuất: SWOT for FDI Production Entry',
    'slide_67' => 'FDI sản xuất: Top Risks, Challenges & Mitigation',
    'slide_68' => 'FDI sản xuất: Strategic Lighthouse Customer Decision',
    'slide_69' => 'FDI sản xuất: Practical Timeline (0-18 Months)',
    'slide_70' => 'FDI sản xuất: Cost Envelope & Budget Scenarios',
    'slide_71' => 'FDI sản xuất: Pricing Strategy & Opportunity Model',
    'slide_72' => 'FDI sản xuất: BOD Realism Checkpoint & Final Confirmations',
    'slide_73' => 'FDI SX - Solution: Product Introduction Plan',
    'slide_74' => 'FDI SX - Solution: Why Now & Manufacturing Pain',
    'slide_75' => 'FDI SX - Solution: What We Provide (MES Scope)',
    'slide_76' => 'FDI SX - Solution: Full Module Catalog',
    'slide_77' => 'FDI SX - Solution: Architecture & Integration',
    'slide_78' => 'FDI SX - Solution: Delivery Process & Team',
    'slide_79' => 'FDI SX - Solution: Security, Infra, Network & Support',
    'slide_80' => 'FDI SX - Solution: Packages, Pricing & Investment',
];

// Get current slide number from URL
function getCurrentSlide() {
    $slideId = getCurrentSlideId();
    if (preg_match('/slide_(\d+)/', $slideId, $matches)) {
        return (int)$matches[1];
    }
    return 0;
}

function getCurrentSlideId() {
    $page = basename($_SERVER['PHP_SELF'], '.php');
    if ($page === 'index') {
        return 'slide_00';
    }
    if (preg_match('/slide_(\d+)/', $page, $matches)) {
        return 'slide_' . str_pad((int)$matches[1], 2, '0', STR_PAD_LEFT);
    }
    return 'slide_00';
}

function normalizeSlideId($slideRef) {
    if (is_int($slideRef)) {
        return 'slide_' . str_pad($slideRef, 2, '0', STR_PAD_LEFT);
    }

    if (is_string($slideRef)) {
        if (preg_match('/^slide_(\d+)$/', $slideRef, $matches)) {
            return 'slide_' . str_pad((int)$matches[1], 2, '0', STR_PAD_LEFT);
        }

        if (preg_match('/^\d+$/', $slideRef)) {
            return 'slide_' . str_pad((int)$slideRef, 2, '0', STR_PAD_LEFT);
        }
    }

    return 'slide_00';
}

function getPresentationOrder() {
    global $slide_titles;
    return array_keys($slide_titles);
}

// Get slide title
function getSlideTitle($slide_num = null) {
    global $slide_titles;
    if ($slide_num === null) {
        $slide_num = getCurrentSlideId();
    }
    $slideId = normalizeSlideId($slide_num);
    return $slide_titles[$slideId] ?? PRESENTATION_TITLE;
}

// Navigation helpers
function getPrevSlide($current) {
    $currentId = normalizeSlideId($current);
    $order = getPresentationOrder();
    $index = array_search($currentId, $order, true);

    if ($index === false || $index === 0) {
        return null;
    }

    return $order[$index - 1] . '.php';
}

function getNextSlide($current) {
    $currentId = normalizeSlideId($current);
    $order = getPresentationOrder();
    $index = array_search($currentId, $order, true);

    if ($index === false || $index >= count($order) - 1) {
        return null;
    }

    return $order[$index + 1] . '.php';
}
?>
