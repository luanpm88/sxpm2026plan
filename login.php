<?php
require_once __DIR__ . '/includes/auth.php';

$error = '';
$success = '';

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';
    $redirect_to = $_GET['redirect_to'] ?? '/slides/slide_00.php';
    
    if (empty($password)) {
        $error = 'Please enter a password';
    } elseif (authenticate($password)) {
        $success = 'Login successful! Redirecting...';
        // Redirect to the requested page or default to slide 00
        header('Refresh: 1; url=' . htmlspecialchars($redirect_to));
    } else {
        $error = 'Invalid password. Please try again.';
    }
}

// If already authenticated, redirect to the requested page
if (isAuthenticated()) {
    $redirect = $_GET['redirect_to'] ?? '/slides/slide_00.php';
    header('Location: ' . htmlspecialchars($redirect));
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <title>SXPM 2026 Plan - Login</title>
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
        
        .login-container {
            width: 100%;
            max-width: 500px;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .login-header {
            margin-bottom: 50px;
        }
        
        .login-header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000000;
            letter-spacing: -0.5px;
        }
        
        .login-header p {
            color: #6b7280;
            font-size: 1.1rem;
            font-weight: 400;
        }
        
        .form-group {
            margin-bottom: 25px;
            text-align: left;
            width: 100%;
        }
        
        .form-group label {
            display: block;
            color: #000000;
            font-weight: 600;
            margin-bottom: 12px;
            font-size: 1rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: #ffffff;
            color: #000000;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #6b7280;
            box-shadow: 0 0 0 3px rgba(107, 114, 128, 0.1);
        }
        
        .form-group input::placeholder {
            color: #9ca3af;
        }
        
        .submit-btn {
            width: 100%;
            padding: 14px 20px;
            background: #000000;
            color: #ffffff;
            border: 2px solid #000000;
            border-radius: 8px;
            font-size: 1.05rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            margin-bottom: 30px;
        }
        
        .submit-btn:hover {
            background: #1f2937;
            border-color: #1f2937;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .alert {
            padding: 14px 16px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-size: 0.95rem;
            line-height: 1.5;
            width: 100%;
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }
        
        .alert-error {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fca5a5;
        }
        
        .alert-success {
            background-color: #dcfce7;
            color: #166534;
            border: 1px solid #86efac;
        }
        
        .login-footer {
            text-align: center;
            color: #6b7280;
            font-size: 0.9rem;
            margin-top: 20px;
        }
        
        .material-symbols-rounded {
            font-size: 20px;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>SXPM 2026</h1>
            <p>Presentation Login</p>
        </div>
        
        <?php if ($error): ?>
            <div class="alert alert-error">
                <span class="material-symbols-rounded">error</span>
                <span><?php echo htmlspecialchars($error); ?></span>
            </div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-success">
                <span class="material-symbols-rounded">check_circle</span>
                <span><?php echo htmlspecialchars($success); ?></span>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="" style="width: 100%;">
            <div class="form-group">
                <label for="password">Enter Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Enter presentation password" 
                    autocomplete="off"
                    autofocus
                    required
                >
            </div>
            
            <button type="submit" class="submit-btn">Access Presentation</button>
        </form>
        
        <div class="login-footer">
            <div>Session valid for 24 hours after login</div>
            <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #e5e7eb;">
                Contact <strong>Luan Pham</strong> for access if you have not received the password
            </div>
        </div>
    </div>
</body>
</html>
