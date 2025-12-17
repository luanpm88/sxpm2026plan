#!/usr/bin/env python3
"""
Fix scrolling on all slides by changing slide-container from fixed height to min-height
"""

import re
import os

def fix_scrolling(filepath):
    """Fix scrolling for a single slide"""
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original = content
    
    # Fix slide-container to allow scrolling
    content = re.sub(
        r'(\.slide-container \{[^}]*?)height: 100vh;',
        r'\1min-height: 100vh;',
        content,
        flags=re.DOTALL
    )
    
    # Also ensure the container allows overflow
    if 'overflow-y: auto;' not in content:
        content = re.sub(
            r'(\.slide-container \{[^}]*?)(\})',
            r'\1    overflow-y: auto;\n        \2',
            content,
            flags=re.DOTALL
        )
    
    if content != original:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f'✓ Fixed scrolling in {filepath}')
    else:
        print(f'- No changes needed for {filepath}')

def main():
    for i in range(14):
        filepath = f'slide_{i:02d}.html'
        if os.path.exists(filepath):
            fix_scrolling(filepath)
    
    print('\n✅ All slides now have proper scrolling!')

if __name__ == '__main__':
    main()
