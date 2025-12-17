#!/usr/bin/env python3
"""
Batch update all presentation slides:
1. Convert Vietnamese to English
2. Replace emojis with Material Symbols
3. Increase font sizes
4. Add interactive navigation modal
"""

import re
import os

# Translation mappings
translations = {
    # Slide titles and headers
    'Định hướng phát triển Bộ phận Sản xuất Phần mềm 2026': 'Software Development Department Strategic Roadmap 2026',
    'Định hướng phát triển<br>Bộ phận Sản xuất Phần mềm': 'Strategic Development Roadmap<br>Software Development Department',
    'Lộ trình chiến lược 2026': 'Strategic Roadmap 2026',
    'Thời gian:': 'Date:',
    'Tháng 12, 2025': 'December 2025',
    'Trình bày:': 'Presented by:',
    'Bộ phận Sản xuất Phần mềm': 'Software Development Department',
    
    # Slide 01
    'Mục tiêu trình bày': 'Presentation Objectives',
    'Làm rõ năng lực và trạng thái hiện tại của bộ phận': 'Clarify current capabilities and status of the department',
    'Đề xuất định hướng phát triển chủ động cho năm 2026': 'Propose proactive development direction for 2026',
    'Xin phê duyệt ưu tiên và phân bổ nguồn lực': 'Request approval for priorities and resource allocation',
    'Outsourcing tạo dòng tiền ngắn hạn': 'Outsourcing creates short-term cash flow',
    'SaaS tạo tài sản dài hạn': 'SaaS creates long-term assets',
    
    # Slide 02
    'Hiện trạng Bộ phận Sản xuất Phần mềm': 'Current Status - Software Development Department',
    'Quy mô & Mô hình': 'Scale & Model',
    'nhân sự': 'staff members',
    'Vận hành theo Scrum': 'Operating with Scrum methodology',
    'sprint / tháng': 'sprints / month',
    'Full-cycle: phân tích → phát triển → triển khai → bảo trì': 'Full-cycle: analysis → development → deployment → maintenance',
    'Năng lực đã chứng minh': 'Proven Capabilities',
    'Hệ thống:': 'Systems:',
    'Research nhanh': 'Fast research capability',
    'Tinh thần ownership cao': 'High ownership mindset',
    'Đánh giá': 'Assessment',
    'Bộ phận đủ năng lực xây dựng sản phẩm hoàn chỉnh, không chỉ gia công theo yêu cầu': 'Department has the capability to build complete products, not just contract work',
    
    # More translations...
}

# Emoji to Icon mappings
emoji_to_icon = {
    '🚀': '<span class="material-symbols-rounded">rocket_launch</span>',
    '💰': '<span class="material-symbols-rounded">payments</span>',
    '🏆': '<span class="material-symbols-rounded">emoji_events</span>',
    '⚠️': '<span class="material-symbols-rounded">warning</span>',
    '⚠': '<span class="material-symbols-rounded">warning</span>',
    '🎯': '<span class="material-symbols-rounded">flag</span>',
    '📊': '<span class="material-symbols-rounded">pie_chart</span>',
    '👥': '<span class="material-symbols-rounded">groups</span>',
    '✅': '<span class="material-symbols-rounded">check_circle</span>',
    '🌐': '<span class="material-symbols-rounded">language</span>',
    '🤖': '<span class="material-symbols-rounded">psychology</span>',
    '📚': '<span class="material-symbols-rounded">menu_book</span>',
    '🔍': '<span class="material-symbols-rounded">search</span>',
    '💡': '<span class="material-symbols-rounded">emoji_objects</span>',
    '🌱': '<span class="material-symbols-rounded">eco</span>',
    '⭐': '<span class="material-symbols-rounded">star</span>',
    '📋': '<span class="material-symbols-rounded">task_alt</span>',
    '📢': '<span class="material-symbols-rounded">campaign</span>',
    '⏰': '<span class="material-symbols-rounded">schedule</span>',
    '⛔': '<span class="material-symbols-rounded">block</span>',
}

# Navigation modal HTML template
NAV_MODAL_STYLES = '''
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
        }'''

def generate_nav_modal_html(current_slide):
    """Generate navigation modal HTML for a specific slide"""
    items = ['<div class="nav-item{}" onclick="goToSlide(0)">Cover</div>'.format(' current' if current_slide == 0 else '')]
    for i in range(1, 13):
        items.append('<div class="nav-item{}" onclick="goToSlide({})">{:02d}</div>'.format(
            ' current' if current_slide == i else '', i, i))
    items.append('<div class="nav-item{}" onclick="goToSlide(13)">Thank You</div>'.format(
        ' current' if current_slide == 13 else ''))
    
    return f'''    <div class="nav-modal" id="navModal">
        <div class="nav-grid">
            {chr(10).join('            ' + item for item in items)}
        </div>
    </div>'''

NAV_FUNCTIONS = '''
        function toggleNavModal() {
            const modal = document.getElementById('navModal');
            modal.classList.toggle('active');
        }
        
        function goToSlide(num) {
            window.location.href = `slide_${num.toString().padStart(2, '0')}.html`;
        }
        
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('navModal');
            const slideNumber = document.querySelector('.slide-number');
            if (modal && slideNumber && !modal.contains(event.target) && !slideNumber.contains(event.target)) {
                modal.classList.remove('active');
            }
        });'''

def update_slide(filename, slide_num):
    """Update a single slide file"""
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # 1. Replace Vietnamese with English
    for vn, en in translations.items():
        content = content.replace(vn, en)
    
    # 2. Replace emojis with Material Symbols
    for emoji, icon in emoji_to_icon.items():
        content = content.replace(emoji, icon)
    
    # 3. Increase font sizes
    font_replacements = [
        (r'font-size: 1\.1rem', 'font-size: 1.3rem'),
        (r'font-size: 1\.2rem', 'font-size: 1.5rem'),
        (r'font-size: 1\.3rem', 'font-size: 1.6rem'),
        (r'font-size: 1\.5rem', 'font-size: 1.8rem'),
        (r'font-size: 2\.5rem', 'font-size: 3rem'),
        (r'font-size: 3\.5rem', 'font-size: 4.5rem'),
    ]
    for pattern, replacement in font_replacements:
        content = re.sub(pattern, replacement, content)
    
    # 4. Add navigation modal styles if not present
    if '.nav-modal' not in content:
        content = content.replace('        .slide-number {', NAV_MODAL_STYLES)
    
    # 5. Update slide number to be clickable
    content = re.sub(
        r'<div class="slide-number">(\d{2} / 13)</div>',
        r'<div class="slide-number" onclick="toggleNavModal()">\1</div>',
        content
    )
    
    # 6. Add navigation modal HTML
    if '<div class="nav-modal"' not in content:
        nav_html = generate_nav_modal_html(slide_num)
        content = content.replace(
            '<div class="slide-number"',
            nav_html + '\n    \n    <div class="slide-number"'
        )
    
    # 7. Add navigation functions if not present
    if 'function toggleNavModal()' not in content:
        content = content.replace(
            '        document.addEventListener(\'keydown\'',
            NAV_FUNCTIONS + '\n        \n        document.addEventListener(\'keydown\''
        )
    
    with open(filename, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f'✓ Updated {filename}')

def main():
    """Update all slide files"""
    for i in range(14):
        filename = f'slide_{i:02d}.html'
        if os.path.exists(filename):
            update_slide(filename, i)
        else:
            print(f'✗ File not found: {filename}')
    
    print('\n✅ All slides updated successfully!')

if __name__ == '__main__':
    main()
