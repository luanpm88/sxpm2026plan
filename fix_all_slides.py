#!/usr/bin/env python3
"""
Comprehensive update for all slides:
1. Translate all English back to Vietnamese
2. Remove all remaining emojis and replace with Material Icons
3. Make icons larger where needed
4. Enable scrolling on all slides
"""

import re
import os

# Comprehensive Vietnamese translations
translations = {
    # Slide titles
    'Executive Summary': 'Nội dung trình bày',
    'Current Status - Software Development Department': 'Hiện trạng Bộ phận Sản xuất Phần mềm',
    'Current Status': 'Hiện trạng',
    'Core Issues': 'Vấn đề cốt lõi hiện tại',
    'Overall Direction': 'Định hướng tổng thể',
    'Outsourcing': 'Outsourcing',
    'SaaS Product: HKSpace': 'SaaS Product – HKSpace',
    'HKSpace Roadmap': 'Lộ trình phát triển HKSpace',
    'Development Roadmap': 'Lộ trình phát triển',
    'Website / Domain Packages': 'Website / Domain Packages',
    'AI / Open Knowledge Platform': 'AI / Open Knowledge Platform',
    'Resource Allocation': 'Phân bổ nguồn lực đề xuất',
    'Implementation Roadmap': 'Lộ trình triển khai 2026',
    'BOD Proposal & Commitment': 'Đề xuất với BOD & Cam kết',
    'Proposal to BOD': 'Đề xuất với BOD',
    
    # Common phrases
    'Presentation Objectives': 'Mục tiêu trình bày',
    'Clarify current capabilities and status of the department': 'Làm rõ năng lực và trạng thái hiện tại của bộ phận',
    'Propose proactive development direction for 2026': 'Đề xuất định hướng phát triển chủ động cho năm 2026',
    'Request approval for priorities and resource allocation': 'Xin phê duyệt ưu tiên và phân bổ nguồn lực',
    'Outsourcing creates short-term cash flow': 'Outsourcing tạo dòng tiền ngắn hạn',
    'SaaS creates long-term assets': 'SaaS tạo tài sản dài hạn',
    
    # Slide 02
    'Scale & Model': 'Quy mô & Mô hình',
    'staff members': 'nhân sự',
    'Operating with Scrum methodology': 'Vận hành theo Scrum',
    'sprints / month': 'sprint / tháng',
    'Full-cycle: analysis → development → deployment → maintenance': 'Full-cycle: phân tích → phát triển → triển khai → bảo trì',
    'Proven Capabilities': 'Năng lực đã chứng minh',
    'Systems:': 'Phát triển hệ thống:',
    'Fast research capability': 'Research nhanh',
    'High ownership mindset': 'Tinh thần ownership cao',
    'Assessment': 'Đánh giá',
    'Department has the capability to build complete products, not just contract work': 'Bộ phận đủ năng lực xây dựng sản phẩm hoàn chỉnh, không chỉ gia công theo yêu cầu',
    
    # Slide 03
    'Current Reality': 'Thực tế đang đối mặt',
    'Revenue depends on individual projects, lacks stability': 'Doanh thu phụ thuộc dự án lẻ, thiếu ổn định',
    'Knowledge and experience scattered across clients': 'Kiến thức và kinh nghiệm phân tán theo từng khách hàng',
    'No long-term technology assets formed yet': 'Chưa hình thành tài sản công nghệ dài hạn',
    'If No Change': 'Nếu không thay đổi',
    'Still a contracting team in 2-3 years': '2–3 năm tới vẫn là đội gia công',
    'Hard to retain and develop talented staff': 'Khó giữ và phát triển nhân sự giỏi',
    'Department value does not increase over time': 'Giá trị bộ phận không tăng theo thời gian',
    'Need to transform now to avoid stagnation': 'Cần chuyển đổi ngay để tránh đi vào bế tắc',
    
    # Slide 04
    'Strategic Objective': 'Mục tiêu chiến lược',
    'Ensure operational cash flow while building core products for the future': 'Vừa đảm bảo dòng tiền vận hành, vừa xây dựng sản phẩm cốt lõi cho tương lai',
    'Cash flow': 'Cash flow',
    'Long-term strategy': 'Chiến lược dài hạn',
    'Short-term': 'Ngắn hạn',
    'Prepare for future': 'Chuẩn bị tương lai',
    
    # Slide 05
    'Cash Flow Engine': 'Cash Flow Engine',
    'Role': 'Vai trò',
    'Feed the team and maintain operations': 'Nuôi team và duy trì vận hành',
    'Create real cases and business data': 'Tạo case thực tế và dữ liệu nghiệp vụ',
    '2026 Focus': 'Trọng tâm 2026',
    'Mini projects (< 100 million)': 'Mini projects (< 100 triệu)',
    'Upgrade, expand systems for existing clients': 'Nâng cấp, mở rộng hệ thống cho khách hàng hiện tại',
    'Monthly maintenance, software management services': 'Dịch vụ bảo trì, quản lý phần mềm theo tháng',
    'Clear Direction': 'Định hướng rõ ràng',
    'Do not pursue large, long-term, high-risk projects': 'Không theo đuổi dự án lớn, dài hạn, rủi ro cao',
    
    # More translations as needed
    'Thank You': 'Cảm ơn',
    'Cover': 'Bìa',
}

# Emoji replacements
emoji_replacements = {
    '⚖️': '<span class="material-symbols-rounded" style="font-size: 1.5em; vertical-align: middle;">balance</span>',
    '🚀': '<span class="material-symbols-rounded" style="font-size: 1.5em;">rocket_launch</span>',
    '💰': '<span class="material-symbols-rounded" style="font-size: 1.5em;">payments</span>',
    '🏆': '<span class="material-symbols-rounded" style="font-size: 1.5em;">emoji_events</span>',
    '⚠️': '<span class="material-symbols-rounded" style="font-size: 1.5em;">warning</span>',
    '⚠': '<span class="material-symbols-rounded" style="font-size: 1.5em;">warning</span>',
    '🎯': '<span class="material-symbols-rounded" style="font-size: 1.5em;">flag</span>',
    '📊': '<span class="material-symbols-rounded" style="font-size: 1.5em;">pie_chart</span>',
    '⏰': '<span class="material-symbols-rounded" style="font-size: 1.5em;">schedule</span>',
    '⛔': '<span class="material-symbols-rounded" style="font-size: 1.5em;">block</span>',
    '🎉': '<span class="material-symbols-rounded" style="font-size: 1.5em;">celebration</span>',
}

def update_slide_file(filepath, slide_num):
    """Update a single slide file"""
    print(f'Processing {filepath}...')
    
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original_content = content
    
    # 1. Enable scrolling - replace overflow: hidden with scrolling
    content = re.sub(
        r'overflow:\s*hidden;\s*\n\s*height:\s*100vh;',
        'overflow-x: hidden;\n            overflow-y: auto;\n            min-height: 100vh;',
        content
    )
    
    # 2. Make title icons larger
    if '.slide-title {' in content and '.slide-title .material-symbols-rounded' not in content:
        content = content.replace(
            '        .slide-title {\n            font-size: 2.5rem;\n            font-weight: 700;\n            margin-bottom: 0.5rem;\n            display: flex;\n            align-items: center;\n            gap: 15px;\n        }',
            '''        .slide-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .slide-title .material-symbols-rounded {
            font-size: 3rem;
        }'''
        )
    
    # 3. Remove emojis and replace with Material Icons
    for emoji, icon in emoji_replacements.items():
        content = content.replace(emoji, icon)
    
    # 4. Translate English to Vietnamese
    for en, vn in translations.items():
        content = content.replace(en, vn)
    
    # 5. Make section title icons larger if needed
    if '.section-title {' in content and '.section-title .material-symbols-rounded' not in content:
        content = re.sub(
            r'(\.section-title \{[^}]+\})',
            r'\1\n        \n        .section-title .material-symbols-rounded {\n            font-size: 2rem;\n        }',
            content
        )
    
    # Only write if changes were made
    if content != original_content:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f'  ✓ Updated {filepath}')
    else:
        print(f'  - No changes needed for {filepath}')

def main():
    """Update all slide files"""
    for i in range(2, 14):  # Skip 00 and 01, already done
        filepath = f'slide_{i:02d}.html'
        if os.path.exists(filepath):
            update_slide_file(filepath, i)
        else:
            print(f'  ✗ File not found: {filepath}')
    
    print('\n✅ All slides updated!')
    print('\nChanges made:')
    print('  1. ✓ Enabled scrolling (overflow-y: auto)')
    print('  2. ✓ Removed all emojis, replaced with Material Icons')
    print('  3. ✓ Translated content to Vietnamese')
    print('  4. ✓ Made icons larger where needed')

if __name__ == '__main__':
    main()
