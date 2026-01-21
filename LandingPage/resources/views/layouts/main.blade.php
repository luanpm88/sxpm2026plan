<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $pageDescription ?? 'HKIncotech - Enterprise Software Engineering' }}">
    <title>{{ $pageTitle ?? 'HKIncotech' }}</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Material Symbols Rounded -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    @stack('styles')
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="header-container">
            <a href="{{ route('landing.index') }}" class="logo">
                <img src="{{ asset('img/logo-HK-1024x810.png') }}" alt="HKIncotech">
                <span>HKIncotech</span>
            </a>
            <button class="mobile-menu-toggle" onclick="document.querySelector('nav').classList.toggle('mobile-open')">
                <span class="material-symbols-rounded">menu</span>
            </button>
            <nav>
                @php
                    $navLinks = [
                        'landing.index' => 'Trang Chủ',
                        'landing.services' => 'Dịch Vụ',
                        'landing.scrum' => 'SCRUM',
                        'landing.tech-stack' => 'Công Nghệ',
                        'landing.scaling' => 'Mở Rộng',
                        'landing.about-us' => 'Về Chúng Tôi',
                        'landing.case-studies' => 'Case Studies',
                        'landing.pricing' => 'Giá',
                        'landing.contact' => 'Liên Hệ'
                    ];
                @endphp
                @foreach($navLinks as $route => $label)
                    <a href="{{ route($route) }}" 
                       class="@if(Route::currentRouteName() === $route) active @endif"
                       onclick="document.querySelector('nav').classList.remove('mobile-open')">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>
            <a href="{{ route('landing.contact') }}" class="btn-header">Bắt Đầu</a>
        </div>
    </header>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container-v5">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3>Về HKIncotech</h3>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6;">
                        Công ty phát triển phần mềm doanh nghiệp hàng đầu Đông Nam Á. Chuyên cung cấp giải pháp custom software, SaaS platform, AI solutions với 12+ năm kinh nghiệm.
                    </p>
                </div>
                
                <!-- Services -->
                <div class="footer-section">
                    <h3>Dịch Vụ</h3>
                    <ul>
                        <li><a href="{{ route('landing.services') }}">Custom Software Development</a></li>
                        <li><a href="{{ route('landing.services') }}">SaaS Platform</a></li>
                        <li><a href="{{ route('landing.services') }}">AI Knowledge Platform</a></li>
                        <li><a href="{{ route('landing.services') }}">Security & Compliance</a></li>
                    </ul>
                </div>
                
                <!-- Technology -->
                <div class="footer-section">
                    <h3>Công Nghệ</h3>
                    <ul>
                        <li><a href="{{ route('landing.tech-stack') }}">Cloud & DevOps</a></li>
                        <li><a href="{{ route('landing.tech-stack') }}">Frontend Technologies</a></li>
                        <li><a href="{{ route('landing.tech-stack') }}">Backend Technologies</a></li>
                        <li><a href="{{ route('landing.tech-stack') }}">Data & Analytics</a></li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div class="footer-section">
                    <h3>Công Ty</h3>
                    <ul>
                        <li><a href="{{ route('landing.about-us') }}">Về Chúng Tôi</a></li>
                        <li><a href="{{ route('landing.case-studies') }}">Case Studies</a></li>
                        <li><a href="{{ route('landing.contact') }}">Liên Hệ</a></li>
                        <li><a href="{{ route('landing.pricing') }}">Bảng Giá</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-divider">
                &copy; 2024 HKIncotech. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
