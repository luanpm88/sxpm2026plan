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
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            z-index: 2000;
            max-height: 400px;
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
        
        .nav-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        
        .nav-item {
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 600;
        }
        
        .nav-item:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        
        .nav-item.current {
            background: linear-gradient(135deg, #ffd700 0%, #ffa500 100%);
        }
    </style>
