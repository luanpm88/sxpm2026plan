#!/usr/bin/env python3
"""
Convert all HTML slides to PHP format with reusable components
"""

import re
import os
from pathlib import Path

def extract_custom_styles(content):
    """Extract custom styles specific to this slide"""
    # Find style block
    style_match = re.search(r'<style>(.*?)</style>', content, re.DOTALL)
    if not style_match:
        return ''
    
    styles = style_match.group(1)
    
    # Remove common styles that are now in includes/styles.php
    common_patterns = [
        r'\s*\*\s*\{[^}]+\}',
        r'\s*body\s*\{[^}]+\}',
        r'\s*\.material-symbols-rounded\s*\{[^}]+\}',
        r'\s*\.slide-container\s*\{[^}]+\}',
        r'\s*\.slide-header\s*\{[^}]+\}',
        r'\s*@keyframes\s+fadeInDown\s*\{[^}]+\}',
        r'\s*@keyframes\s+fadeInUp\s*\{[^}]+\}',
        r'\s*\.slide-title\s*\{[^}]+\}\s*\.slide-title\s+\.material-symbols-rounded\s*\{[^}]+\}',
        r'\s*\.slide-content\s*\{[^}]+\}(?!\s*\{)',  # Only if it's the basic one
        r'\s*\.navigation\s*\{[^}]+\}',
        r'\s*\.nav-btn\s*\{[^}]+\}',
        r'\s*\.nav-btn:hover\s*\{[^}]+\}',
        r'\s*\.nav-btn:disabled\s*\{[^}]+\}',
        r'\s*\.slide-number\s*\{[^}]+\}',
        r'\s*\.slide-number:hover\s*\{[^}]+\}',
        r'\s*\.nav-modal\s*\{[^}]+\}',
        r'\s*\.nav-modal\.active\s*\{[^}]+\}',
        r'\s*@keyframes\s+slideUp\s*\{[^}]+\}',
        r'\s*\.nav-grid\s*\{[^}]+\}',
        r'\s*\.nav-item\s*\{[^}]+\}',
        r'\s*\.nav-item:hover\s*\{[^}]+\}',
        r'\s*\.nav-item\.current\s*\{[^}]+\}',
    ]
    
    for pattern in common_patterns:
        styles = re.sub(pattern, '', styles, flags=re.DOTALL)
    
    # Clean up extra whitespace
    styles = re.sub(r'\n\s*\n\s*\n', '\n\n', styles)
    styles = styles.strip()
    
    return styles

def extract_slide_content(content):
    """Extract the main slide content (body without navigation and scripts)"""
    # Find body content
    body_match = re.search(r'<body>(.*?)</body>', content, re.DOTALL)
    if not body_match:
        return ''
    
    body = body_match.group(1)
    
    # Remove navigation elements
    body = re.sub(r'<div class="slide-number".*?</div>', '', body, flags=re.DOTALL)
    body = re.sub(r'<div class="nav-modal".*?</div>\s*</div>', '', body, flags=re.DOTALL)
    body = re.sub(r'<div class="navigation">.*?</div>', '', body, flags=re.DOTALL)
    
    # Remove scripts
    body = re.sub(r'<script>.*?</script>', '', body, flags=re.DOTALL)
    
    return body.strip()

def convert_slide(html_file, output_dir):
    """Convert a single HTML slide to PHP"""
    with open(html_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Extract custom styles
    custom_styles = extract_custom_styles(content)
    
    # Extract slide content
    slide_content = extract_slide_content(content)
    
    # Build PHP file
    php_content = '<?php require_once \'../config.php\'; ?>\n'
    php_content += '<?php include \'../includes/head.php\'; ?>\n'
    
    if custom_styles:
        php_content += '    <style>\n'
        php_content += custom_styles
        php_content += '\n    </style>\n'
    
    php_content += '</head>\n'
    php_content += '<body>\n'
    php_content += slide_content
    php_content += '\n    \n    <?php include \'../includes/navigation.php\'; ?>\n'
    php_content += '    <?php include \'../includes/scripts.php\'; ?>\n'
    php_content += '</body>\n'
    php_content += '</html>\n'
    
    # Get slide number
    slide_num = re.search(r'slide_(\d+)', html_file)
    if slide_num:
        output_file = os.path.join(output_dir, f'slide_{slide_num.group(1)}.php')
        with open(output_file, 'w', encoding='utf-8') as f:
            f.write(php_content)
        print(f'✓ Converted {html_file} → {output_file}')

def main():
    output_dir = 'slides'
    
    # Convert slides 02-13 (00 and 01 already done manually)
    for i in range(2, 14):
        html_file = f'slide_{i:02d}.html'
        if os.path.exists(html_file):
            convert_slide(html_file, output_dir)
    
    print('\n✅ All slides converted to PHP!')
    print('\nProject structure:')
    print('  config.php - Configuration and helper functions')
    print('  index.php - Entry point (redirects to slide_00.php)')
    print('  includes/')
    print('    ├── head.php - HTML head with meta tags and CSS')
    print('    ├── styles.php - Common styles')
    print('    ├── navigation.php - Navigation buttons and modal')
    print('    └── scripts.php - JavaScript functions')
    print('  slides/')
    print('    ├── slide_00.php through slide_13.php')
    print('\nTo run: Use PHP built-in server:')
    print('  php -S localhost:8000')
    print('Then open: http://localhost:8000')

if __name__ == '__main__':
    main()
