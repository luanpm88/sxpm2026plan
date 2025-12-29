<?php
require_once __DIR__ . '/includes/auth.php';

// Logout the user
logout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <title>Logged Out</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #ffffff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #000000;
        }
        
        .logout-container {
            width: 100%;
            max-width: 500px;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .logout-icon {
            width: 80px;
            height: 80px;
            background: #ecfdf5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .logout-icon .material-symbols-rounded {
            font-size: 44px;
            color: #059669;
        }
        
        .logout-container h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000000;
        }
        
        .logout-container p {
            color: #6b7280;
            margin-bottom: 30px;
            font-size: 1.05rem;
            line-height: 1.6;
        }
        
        .login-btn {
            display: inline-block;
            padding: 14px 32px;
            background: #000000;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #000000;
            font-size: 1rem;
        }
        
        .login-btn:hover {
            background: #1f2937;
            border-color: #1f2937;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        
        .login-btn:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <div class="logout-icon">
            <span class="material-symbols-rounded">check_circle</span>
        </div>
        <h1>Logged Out</h1>
        <p>You have been successfully logged out from the presentation.</p>
        <a href="/login.php" class="login-btn">Login Again</a>
    </div>
</body>
</html>
