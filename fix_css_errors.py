#!/usr/bin/env python3
"""
Fix CSS syntax errors in all PHP slides
"""

import re
import os

def clean_css_in_file(filepath):
    """Remove orphaned CSS blocks and broken rules"""
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original = content
    
    # Remove orphaned "to { ... }" lines
    content = re.sub(r'^\s*to\s*\{\s*opacity:\s*1;\s*transform:\s*translateY\(0\);\s*\}\s*$', '', content, flags=re.MULTILINE)
    
    # Remove lines with just closing braces followed by "to {" pattern
    content = re.sub(r'^\s*\}\s*\n\s*to\s*\{[^}]+\}\s*$', '', content, flags=re.MULTILINE)
    
    # Remove orphaned position: fixed blocks without proper context
    # Look for position: fixed that's not inside a proper rule
    lines = content.split('\n')
    cleaned_lines = []
    i = 0
    while i < len(lines):
        line = lines[i]
        # If we find an orphaned position: fixed block (not inside a selector)
        if re.match(r'^\s*position:\s*fixed;\s*$', line):
            # Check if this is part of an incomplete rule - skip it and following related lines
            if i + 1 < len(lines) and re.match(r'^\s*(bottom|top|left|right|color|font-size|opacity):', lines[i + 1]):
                # Skip this incomplete rule block
                while i < len(lines) and re.match(r'^\s*(position|bottom|top|left|right|color|font-size|opacity):', lines[i]):
                    i += 1
                continue
        cleaned_lines.append(line)
        i += 1
    
    content = '\n'.join(cleaned_lines)
    
    # Remove duplicate closing braces
    content = re.sub(r'\}\s*\n\s*\}\s*\n\s*\}', '}\n    }', content)
    
    # Clean up excessive blank lines
    content = re.sub(r'\n\s*\n\s*\n\s*\n', '\n\n', content)
    
    if content != original:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        return True
    return False

def main():
    slides_dir = 'slides'
    fixed_count = 0
    
    for i in range(14):
        filepath = os.path.join(slides_dir, f'slide_{i:02d}.php')
        if os.path.exists(filepath):
            if clean_css_in_file(filepath):
                print(f'✓ Fixed CSS errors in {filepath}')
                fixed_count += 1
            else:
                print(f'  No issues in {filepath}')
    
    print(f'\n✅ Fixed CSS errors in {fixed_count} slides')

if __name__ == '__main__':
    main()
