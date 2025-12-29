<?php
require_once __DIR__ . '/includes/auth.php';

// If authenticated, redirect to first slide; otherwise to login
if (isAuthenticated()) {
    header('Location: /slides/slide_00.php');
} else {
    header('Location: /login.php');
}
exit();
?>
