<?php
// Session configuration - 24 hour timeout
ini_set('session.gc_maxlifetime', 86400); // 24 hours in seconds
session_set_cookie_params([
    'lifetime' => 86400, // 24 hours
    'path' => '/',
    'httponly' => true,
    'secure' => false, // Set to true if using HTTPS
    'samesite' => 'Lax'
]);

session_start();

// Presentation password (change this to your desired password)
define('PRESENTATION_PASSWORD', 'sxpm123@'); // Change this password

// Check if user is authenticated
function isAuthenticated() {
    return isset($_SESSION['ppm_authenticated']) && $_SESSION['ppm_authenticated'] === true;
}

// Authenticate user
function authenticate($password) {
    if ($password === PRESENTATION_PASSWORD) {
        $_SESSION['ppm_authenticated'] = true;
        $_SESSION['ppm_login_time'] = time();
        return true;
    }
    return false;
}

// Logout user
function logout() {
    $_SESSION['ppm_authenticated'] = false;
    unset($_SESSION['ppm_login_time']);
    session_destroy();
}

// Redirect to login if not authenticated
function requireAuth() {
    if (!isAuthenticated()) {
        // Save the current page URL as query parameter to redirect back after login
        $redirect_url = urlencode($_SERVER['REQUEST_URI']);
        header('Location: /login.php?redirect_to=' . $redirect_url);
        exit();
    }
}

// Get session time remaining in minutes
function getSessionTimeRemaining() {
    if (!isset($_SESSION['ppm_login_time'])) {
        return 0;
    }
    $elapsed = time() - $_SESSION['ppm_login_time'];
    $remaining = 86400 - $elapsed; // 24 hours = 86400 seconds
    return max(0, ceil($remaining / 60)); // Convert to minutes
}
?>
