const fs = require('fs');

// Navigation modal HTML
const navModalHTML = (currentSlide) => `
    <div class="nav-modal" id="navModal">
        <div class="nav-grid">
            <div class="nav-item${currentSlide === 0 ? ' current' : ''}" onclick="goToSlide(0)">Cover</div>
            ${[...Array(13)].map((_, i) => `<div class="nav-item${currentSlide === i+1 ? ' current' : ''}" onclick="goToSlide(${i+1})">${i < 9 ? '0' : ''}${i+1}</div>`).join('\n            ')}
            <div class="nav-item${currentSlide === 13 ? ' current' : ''}" onclick="goToSlide(13)">Thank You</div>
        </div>
    </div>`;

// Navigation modal styles
const navModalStyles = `
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
            background: linear-gradient(135deg, #ffd700 0%, #ffa500 100());
        }`;

// Navigation functions
const navFunctions = `
        function toggleNavModal() {
            const modal = document.getElementById('navModal');
            modal.classList.toggle('active');
        }
        
        function goToSlide(num) {
            window.location.href = \`slide_\${num.toString().padStart(2, '0')}.html\`;
        }
        
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('navModal');
            const slideNumber = document.querySelector('.slide-number');
            if (modal && slideNumber && !modal.contains(event.target) && !slideNumber.contains(event.target)) {
                modal.classList.remove('active');
            }
        });`;

console.log('Script created - run with node');
