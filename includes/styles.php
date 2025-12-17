<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            overflow-x: hidden;
            overflow-y: auto;
            min-height: 100vh;
        }
        
        .material-symbols-rounded {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
            vertical-align: middle;
        }
        
        .slide-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 60px 80px;
            color: white;
            overflow-y: auto;
        }
        
        .slide-header {
            margin-bottom: 40px;
            animation: fadeInDown 0.6s ease-out;
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .slide-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .slide-title .material-symbols-rounded {
            font-size: 3rem;
        }
        
        .slide-content {
            flex: 1;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .navigation {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }
        
        .nav-btn {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.3);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .nav-btn:hover {
            background: rgba(255,255,255,0.3);
            transform: scale(1.1);
        }
        
        .nav-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
        
        .slide-number {
            position: fixed;
            bottom: 30px;
            left: 30px;
            color: white;
            font-size: 0.9rem;
            opacity: 0.7;
            cursor: pointer;
            padding: 10px 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .slide-number:hover {
            opacity: 1;
            background: rgba(255,255,255,0.2);
            transform: scale(1.05);
        }
        
        .nav-modal {
            display: none;
            position: fixed;
            bottom: 80px;
            left: 30px;
            background: rgba(30, 30, 60, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.5);
            z-index: 2000;
            max-height: 70vh;
            max-width: 500px;
            overflow-y: auto;
        }
        
        .nav-modal.active {
            display: block;
            animation: slideUp 0.3s ease-out;
        }
        
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .nav-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .nav-list-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 18px;
            background: rgba(255,255,255,0.08);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 2px solid transparent;
        }
        
        .nav-list-item:hover {
            background: rgba(255,255,255,0.15);
            transform: translateX(5px);
        }
        
        .nav-list-item.current {
            background: rgba(139, 92, 246, 0.3);
            border-color: rgba(139, 92, 246, 0.6);
        }
        
        .nav-item-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: #fbbf24;
            min-width: 35px;
            text-align: center;
            background: rgba(251, 191, 36, 0.15);
            padding: 6px 10px;
            border-radius: 8px;
        }
        
        .nav-item-title {
            flex: 1;
            font-size: 1.1rem;
            font-weight: 500;
            line-height: 1.4;
            color: rgba(255, 255, 255, 0.95);
        }
    </style>
