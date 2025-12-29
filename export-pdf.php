<?php
require_once __DIR__ . '/includes/auth.php';
requireAuth(); // Check authentication

// Get the slide number from query parameter
$slide = isset($_GET['slide']) ? (int)$_GET['slide'] : 0;

// Validate slide number
if ($slide < 0 || $slide > 14) {
    die('Invalid slide number');
}

// For now, we'll use a simple approach: redirect to print-friendly version
// The browser's print to PDF feature will be used
header('Location: /slides/slide_' . str_pad($slide, 2, '0', STR_PAD_LEFT) . '.php?print=1');
exit();
?>
