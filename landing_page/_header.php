<?php
// _header.php - Global Header for all pages
// Includes: HTML5, Bootstrap CDN, Material Icons, Global CSS, Navigation

$page = basename($_SERVER['PHP_SELF'], '.php');

// Map page names to nav slugs
$page_slug_map = [
    'tech' => 'tech-stack',
    'case-studies' => 'case-studies',
];

// Get the correct slug for current page
$current_slug = isset($page_slug_map[$page]) ? $page_slug_map[$page] : $page;

$pages = [
    'home' => 'Trang Chủ',
    'services' => 'Dịch Vụ',
    'scrum' => 'SCRUM',
    'tech-stack' => 'Công Nghệ',
    'scaling' => 'Mở Rộng',
    'about' => 'Về Chúng Tôi',
    'case-studies' => 'Case Studies',
    'pricing' => 'Giá',
    'contact' => 'Liên Hệ'
];

$page_title = isset($page_title) ? $page_title : 'HKIncotech - Enterprise Software Engineering';
$page_description = isset($page_description) ? $page_description : 'Phát triển phần mềm doanh nghiệp quy mô toàn cầu theo SCRUM';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page_description; ?>">
    <title><?php echo $page_title; ?></title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Material Symbols Rounded (Updated) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Global Styles -->
    <style>
        :root {
            --primary: #0f6b9e;
            --primary-light: #1a8fb8;
            --primary-dark: #0a4a6b;
            --accent: #059669;
            --accent-light: #d1fae5;
            --secondary-bg: #f8fafc;
            --text-dark: #0f172a;
            --text-gray: #475569;
            --text-light: #64748b;
            --border: #e2e8f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #ffffff;
            color: var(--text-dark);
            line-height: 1.6;
        }
        
        .material-symbols-rounded {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: inherit;
            vertical-align: middle;
        }
        
        /* Utilities */
        .container-v5 {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        section {
            padding: 6rem 0;
        }
        
        .section-header {
            margin-bottom: 3.5rem;
            text-align: center;
        }
        
        .section-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }
        
        .section-subtitle {
            font-size: 1.15rem;
            color: var(--text-gray);
            max-width: 750px;
            margin: 0 auto;
            line-height: 1.7;
        }
        
        /* Header */
        header {
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            padding: 1.25rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        
        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 800;
            font-size: 1.3rem;
            color: var(--primary);
            text-decoration: none;
        }
        
        .logo img {
            height: 45px;
            width: auto;
        }
        
        .logo:hover {
            opacity: 0.8;
        }
        
        nav {
            display: flex;
            gap: 2.5rem;
            align-items: center;
        }
        
        nav a {
            color: var(--text-gray);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }
        
        nav a:hover {
            color: var(--primary);
        }
        
        nav a.active {
            color: var(--primary);
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.5rem;
        }
        
        .btn-header {
            background: var(--primary);
            color: white;
            padding: 0.625rem 1.5rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-header:hover {
            background: var(--primary-dark);
        }
        
        /* Buttons */
        .btn-primary-v5 {
            background: var(--primary);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .btn-primary-v5:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(15, 107, 158, 0.2);
        }
        
        .btn-secondary-v5 {
            background: white;
            color: var(--primary);
            padding: 1rem 2.5rem;
            border-radius: 8px;
            border: 2px solid var(--primary);
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .btn-secondary-v5:hover {
            background: var(--primary);
            color: white;
        }
        
        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--primary);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }
        
        nav.mobile-open {
            display: flex !important;
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .header-container {
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            nav {
                flex-direction: column;
                gap: 0.75rem;
                width: 100%;
                text-align: center;
                order: 3;
            }
            
            nav a {
                display: inline-block;
                padding: 0.75rem 0;
            }
        }
        
        @media (max-width: 767px) {
            header {
                padding: 0.75rem 0;
                position: fixed;
                width: 100%;
                top: 0;
                left: 0;
                right: 0;
                z-index: 1000;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                background: white;
            }
            
            .header-container {
                flex-direction: row;
                gap: 0.5rem;
                justify-content: space-between;
                align-items: center;
                flex-wrap: nowrap;
            }
            
            .logo {
                font-size: 1rem;
                gap: 0.5rem;
            }
            
            .logo img {
                height: 35px;
            }
            
            .logo span {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: block;
                order: 2;
            }
            
            .btn-header {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
                order: 3;
            }
            
            nav {
                display: none;
                position: fixed;
                top: 60px;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                gap: 0;
                width: 100%;
                text-align: left;
                order: 4;
                border-top: 1px solid var(--border);
                border-bottom: 1px solid var(--border);
                padding: 0;
                z-index: 999;
                max-height: calc(100vh - 60px);
                overflow-y: auto;
            }
            
            nav a {
                padding: 1rem 1.5rem;
                display: block;
                border-bottom: 1px solid var(--border);
            }
            
            nav a.active {
                background: var(--secondary-bg);
                border-bottom: 1px solid var(--border);
                padding-bottom: 1rem;
            }
            
            body {
                padding-top: 60px;
            }
            
            section {
                padding: 3rem 0;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .container-v5 {
                padding: 0 1rem;
            }
            
            .header-container {
                padding: 0 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .section-title {
                font-size: 1.5rem;
            }
            
            .section-subtitle {
                font-size: 0.9rem;
            }
            
            .btn-primary-v5 {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }
            
            section {
                padding: 2rem 0 !important;
            }
            
            .container-v5 {
                padding: 0 1rem !important;
            }
            
            /* Grid responsive - auto-fit with larger minmax to force single column */
            [style*="grid-template-columns: repeat(auto-fit"] {
                grid-template-columns: 1fr !important;
            }
            
            /* Ensure 2-column grids don't break */
            [style*="grid-template-columns: 1fr 1fr"] {
                grid-template-columns: 1fr !important;
            }
            
            /* Reduce padding on grid gaps */
            [style*="gap: 2rem"] {
                gap: 1rem !important;
            }
            
            [style*="gap: 3rem"] {
                gap: 1.5rem !important;
            }
            
            /* Reduce padding on grid items */
            [style*="padding: 2.5rem"] {
                padding: 1.5rem !important;
            }
            
            [style*="padding: 2rem"] {
                padding: 1rem !important;
            }
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="header-container">
            <a href="home.php" class="logo">
                <img src="logo-HK-1024x810.png" alt="HKIncotech">
                <span>HKIncotech</span>
            </a>
            <button class="mobile-menu-toggle" onclick="document.querySelector('nav').classList.toggle('mobile-open')">
                <span class="material-symbols-rounded">menu</span>
            </button>
            <nav>
                <?php foreach ($pages as $slug => $label): 
                    $is_active = ($current_slug === $slug) || ($current_slug === 'index' && $slug === 'home');
                ?>
                    <a href="<?php echo $slug; ?>.php" 
                       class="<?php echo $is_active ? 'active' : ''; ?>"
                       onclick="document.querySelector('nav').classList.remove('mobile-open')">
                        <?php echo $label; ?>
                    </a>
                <?php endforeach; ?>
            </nav>
            <a href="contact.php" class="btn-header">Bắt Đầu</a>
        </div>
    </header>
</body>
</html>
