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
            color: #1f2937;
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
            border-color: #6b7280;
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(107,114,128,0.2);
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
            border-color: #6b7280;
            color: #000000;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(107,114,128,0.2);
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
            border-color: #6b7280;
            transform: translateX(5px);
        }
        
        .nav-list-item.current {
            background: #f9fafb;
            border-color: #1f2937;
        }
        
        .nav-item-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1f2937;
            min-width: 35px;
            text-align: center;
            background: #f3f4f6;
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
        
        /* Common Card Styles */
        .info-card, .card, .section-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        
        .info-card:hover, .card:hover, .section-card:hover {
            border-color: #d1d5db;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        
        .card-header {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #1f2937;
        }
        
        .card-header .material-symbols-rounded {
            font-size: 2.2rem;
            color: #1f2937;
        }
        
        /* Positive/Success styles - blue accent */
        .card-header.positive {
            color: #1f2937;
        }
        
        .card-header.positive .material-symbols-rounded {
            color: #3b82f6;
        }
        
        /* Warning/Problem styles - orange accent */
        .card-header.warning {
            color: #1f2937;
        }
        
        .card-header.warning .material-symbols-rounded {
            color: #fb923c;
        }
        
        /* Neutral/Info styles - default */
        .card-header.info {
            color: #1f2937;
        }
        
        .card-header.info .material-symbols-rounded {
            color: #6b7280;
        }
        
        /* Card content */
        .card-content {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #4b5563;
        }
        
        /* Card lists */
        .card-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .card-list li {
            padding: 10px 0;
            padding-left: 32px;
            position: relative;
            line-height: 1.6;
            font-size: 1.1rem;
            color: #4b5563;
        }
        
        .card-list li:before {
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 10px;
            font-size: 1.6rem;
            line-height: 1;
        }
        
        /* Positive list items */
        .card-list.positive li:before {
            content: "check_circle";
            color: #3b82f6;
        }
        
        /* Warning list items */
        .card-list.warning li:before {
            content: "cancel";
            color: #fb923c;
        }
        
        /* Neutral list items */
        .card-list.neutral li:before {
            content: "chevron_right";
            color: #6b7280;
        }
        
        /* Warning box for critical messages */
        .warning-box {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px 30px;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        
        .warning-box .material-symbols-rounded {
            font-size: 2rem;
            color: #fb923c;
            vertical-align: middle;
            margin-right: 10px;
        }
        
        .warning-box .warning-text {
            font-size: 1.4rem;
            font-weight: 600;
            color: #1f2937;
        }
    </style>
