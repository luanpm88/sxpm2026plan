#!/usr/bin/env python3
"""
Clean up broken CSS fragments in all PHP slides
"""

import re
import os
import glob

def clean_css_in_file(filepath):
    """Remove broken CSS fragments"""
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original = content
    
    # Remove orphaned position: fixed blocks
    content = re.sub(
        r'\n\s+position:\s*fixed;\s*\n\s+bottom:[^\n]+\n\s+left:[^\n]+\n\s+color:[^\n]+\n\s+font-size:[^\n]+\n\s+opacity:[^\n]+\n\s+\}',
        '',
        content
    )
    
    # Remove lone properties at start of style blocks
    content = re.sub(r'(<style>\s*)\n\s+(font-size|margin-top|flex):[^\n]+\n', r'\1\n', content)
    
    # Remove orphaned closing braces
    content = re.sub(r'\n\s+\}\s*\n\s+(</style>|</head>|<body>|<div)', r'\n    \1', content)
    
    # Clean up multiple blank lines
    content = re.sub(r'\n\n\n+', '\n\n', content)
    
    # Fix style block that starts with properties (missing selector)
    content = re.sub(r'<style>\s*\n\s+\w+:', '<style>\n        /* Fixed */\n        .slide-content {\n            ', content)
    
    if content != original:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        return True
    return False

def main():
    slides_dir = 'slides'
    fixed_count = 0
    
    for filepath in glob.glob(os.path.join(slides_dir, 'slide_*.php')):
        if clean_css_in_file(filepath):
            print(f'✓ Cleaned {os.path.basename(filepath)}')
            fixed_count += 1
        else:
            print(f'  {os.path.basename(filepath)} - OK')
    
    print(f'\n✅ Cleaned {fixed_count} files')

if __name__ == '__main__':
    main()
