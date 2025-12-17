#!/usr/bin/env python3
"""
Rebuild PHP slides with properly extracted CSS from HTML files
"""

import re
import os

def extract_custom_css_from_html(html_file):
    """Extract only custom CSS rules that aren't in includes/styles.php"""
    with open(html_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Extract style block
    style_match = re.search(r'<style>(.*?)</style>', content, re.DOTALL)
    if not style_match:
        return ''
    
    full_css = style_match.group(1).strip()
    
    # Rules to keep (slide-specific CSS)
    # We'll remove global rules and keep only slide-specific ones
    lines = full_css.split('\n')
    custom_lines = []
    skip_until_close = 0
    in_slide_content = False
    in_custom_rule = False
    current_rule = []
    
    # Patterns for rules to SKIP (already in includes/styles.php)
    skip_selectors = [
        r'^\s*\*\s*\{',
        r'^\s*body\s*\{',
        r'^\s*\.material-symbols-rounded\s*\{',
        r'^\s*\.slide-container\s*\{',
        r'^\s*\.slide-header\s*\{',
        r'^\s*@keyframes\s+(fadeInDown|fadeInUp|slideUp)\s*\{',
        r'^\s*\.slide-title\s*\{',
        r'^\s*\.slide-title\s+\.material-symbols-rounded\s*\{',
        r'^\s*\.navigation\s*\{',
        r'^\s*\.nav-btn',
        r'^\s*\.slide-number',
        r'^\s*\.nav-modal',
        r'^\s*\.nav-grid',
        r'^\s*\.nav-item',
    ]
    
    i = 0
    while i < len(lines):
        line = lines[i]
        
        # Check if this is a selector we should skip
        should_skip = False
        for pattern in skip_selectors:
            if re.match(pattern, line):
                should_skip = True
                break
        
        if should_skip:
            # Skip this rule - find its closing brace
            brace_count = line.count('{') - line.count('}')
            i += 1
            while i < len(lines) and brace_count > 0:
                brace_count += lines[i].count('{') - lines[i].count('}')
                i += 1
        else:
            # Keep this line/rule
            if line.strip():
                custom_lines.append(line)
            i += 1
    
    custom_css = '\n'.join(custom_lines)
    
    # Clean up whitespace
    custom_css = re.sub(r'\n\s*\n\s*\n+', '\n\n', custom_css)
    custom_css = custom_css.strip()
    
    return custom_css

def extract_body_content(html_file):
    """Extract body content without navigation and scripts"""
    with open(html_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Extract body
    body_match = re.search(r'<body>(.*?)</body>', content, re.DOTALL)
    if not body_match:
        return ''
    
    body = body_match.group(1)
    
    # Remove navigation
    body = re.sub(r'<div class="navigation">.*?</div>\s*<!--\s*Navigation\s*-->', '', body, flags=re.DOTALL)
    body = re.sub(r'<div class="slide-number".*?</div>', '', body, flags=re.DOTALL)
    body = re.sub(r'<div class="nav-modal".*?</div>\s*</div>', '', body, flags=re.DOTALL)
    
    # Remove scripts
    body = re.sub(r'<script>.*?</script>', '', body, flags=re.DOTALL)
    
    return body.strip()

def rebuild_php_slide(slide_num):
    """Rebuild a PHP slide from its HTML source"""
    html_file = f'slide_{slide_num:02d}.html'
    php_file = f'slides/slide_{slide_num:02d}.php'
    
    if not os.path.exists(html_file):
        return False
    
    custom_css = extract_custom_css_from_html(html_file)
    body_content = extract_body_content(html_file)
    
    # Build PHP content
    php_content = '<?php require_once \'../config.php\'; ?>\n'
    php_content += '<?php include \'../includes/head.php\'; ?>\n'
    
    if custom_css:
        php_content += '    <style>\n'
        # Indent CSS properly
        for line in custom_css.split('\n'):
            if line.strip():
                php_content += '        ' + line + '\n'
        php_content += '    </style>\n'
    
    php_content += '</head>\n'
    php_content += '<body>\n'
    php_content += body_content
    php_content += '\n    \n    <?php include \'../includes/navigation.php\'; ?>\n'
    php_content += '    <?php include \'../includes/scripts.php\'; ?>\n'
    php_content += '</body>\n'
    php_content += '</html>\n'
    
    with open(php_file, 'w', encoding='utf-8') as f:
        f.write(php_content)
    
    return True

def main():
    fixed_count = 0
    
    # Rebuild slides 02-13 (skip 00 and 01 as they were manually created correctly)
    for i in range(2, 14):
        if rebuild_php_slide(i):
            print(f'✓ Rebuilt slide_{i:02d}.php from HTML')
            fixed_count += 1
    
    print(f'\n✅ Rebuilt {fixed_count} slides with clean CSS')

if __name__ == '__main__':
    main()
