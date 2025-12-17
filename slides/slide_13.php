<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .thank-content {
            max-width: 900px;
            animation: fadeInUp 1s ease-out;
        }
        
        .thank-icon {
            margin-bottom: 30px;
        }
        
        .thank-icon .material-symbols-rounded {
            font-size: 5rem;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
        
        h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 25px;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        
        .subtitle {
            font-size: 1.8rem;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.95;
            line-height: 1.6;
        }
        
        .contact-info {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 35px 40px;
            display: inline-block;
            margin: 0 auto;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-size: 1.8rem;
            margin: 15px 0;
        }
        
        .contact-item .material-symbols-rounded {
            font-size: 2rem;
        }
        
        .closing-message {
            margin-top: 40px;
            font-size: 1.6rem;
            opacity: 0.8;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .closing-message .material-symbols-rounded {
            font-size: 2rem;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="thank-content">
            <div class="thank-icon">
                <span class="material-symbols-rounded">celebration</span>
            </div>
            
            <h1>Cảm ơn!</h1>
            
            <div class="subtitle">
                Cảm ơn BOD đã dành thời gian lắng nghe<br>
                Rất mong nhận được sự ủng hộ và phản hồi
            </div>
            
            <div class="contact-info">
                <div class="contact-item">
                    <span class="material-symbols-rounded">mail</span>
                    <span>Liên hệ: Luan Pham</span>
                </div>
                <div class="contact-item">
                    <span class="material-symbols-rounded">calendar_month</span>
                    <span>December 2025</span>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="navigation">
        <button class="nav-btn" onclick="previousSlide()">
            <span class="material-symbols-rounded">arrow_back</span>
        </button>
        <button class="nav-btn" onclick="nextSlide()" disabled>
            <span class="material-symbols-rounded">arrow_forward</span>
        </button>
    </div>
    
    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
