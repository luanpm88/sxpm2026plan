<?php
// Configuration for the presentation
define('PRESENTATION_TITLE', 'Định hướng phát triển Bộ phận Sản xuất Phần mềm 2026');
define('TOTAL_SLIDES', 14);

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
    8 => 'Hướng 3 – Website / Domain Packages',
    9 => 'Hướng 4 – AI / Open Knowledge Platform',
    10 => 'Phân bổ nguồn lực đề xuất',
    11 => 'Lộ trình triển khai 2026',
    12 => 'Đề xuất & Cam kết',
    13 => 'Tổng hợp Danh mục Sản phẩm',
    14 => 'Cảm ơn'
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
