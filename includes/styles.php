<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #ffffff;
            color: #000000;
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
            color: #000000;
            overflow-y: auto;
        }
        
        .slide-header {
            margin-bottom: 40px;
            animation: fadeInDown 0.6s ease-out;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 20px;
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
            color: #000000;
        }
        
        .slide-title .material-symbols-rounded {
            font-size: 3rem;
            color: #2672cd;
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
            background: #ffffff;
            border: 2px solid #e5e7eb;
            color: #000000;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .nav-btn:hover {
            background: #f9fafb;
            border-color: #2672cd;
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(59,130,246,0.2);
        }
        
        .nav-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
        
        .slide-number {
            position: fixed;
            bottom: 30px;
            left: 30px;
            color: #6b7280;
            font-size: 0.9rem;
            cursor: pointer;
            padding: 10px 20px;
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .slide-number:hover {
            border-color: #2672cd;
            color: #000000;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(59,130,246,0.2);
        }
        
        .nav-modal {
            display: none;
            position: fixed;
            bottom: 80px;
            left: 30px;
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
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
            background: #f9fafb;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 2px solid transparent;
        }
        
        .nav-list-item:hover {
            background: #f3f4f6;
            border-color: #2672cd;
            transform: translateX(5px);
        }
        
        .nav-list-item.current {
            background: #eff6ff;
            border-color: #2672cd;
        }
        
        .nav-item-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2672cd;
            min-width: 35px;
            text-align: center;
            background: #eff6ff;
            padding: 6px 10px;
            border-radius: 8px;
        }
        
        .nav-item-title {
            flex: 1;
            font-size: 1.1rem;
            font-weight: 500;
            line-height: 1.4;
            color: #1f2937;
        }
    </style>
