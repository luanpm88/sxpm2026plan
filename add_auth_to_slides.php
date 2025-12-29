<?php
/**
 * Script to add authentication protection to all slide files
 * Run this once: php add_auth_to_slides.php
 */

$slides_dir = __DIR__ . '/slides';
$files = glob($slides_dir . '/slide_*.php');

foreach ($files as $file) {
    $filename = basename($file);
    
    // Skip if already has auth check
    $content = file_get_contents($file);
    if (strpos($content, 'requireAuth()') !== false) {
        echo "✓ $filename - Already has auth\n";
        continue;
    }
    
    // Add auth requirement at the top
    if (preg_match('/^<\?php\s+require_once.*?config\.php.*?\?>/s', $content, $matches)) {
        $original = $matches[0];
        $replacement = "<?php \nrequire_once '../includes/auth.php';\nrequireAuth(); // Check authentication\nrequire_once '../config.php'; \n?>";
        $content = str_replace($original, $replacement, $content);
        
        file_put_contents($file, $content);
        echo "✓ $filename - Auth added\n";
    } else {
        echo "⚠ $filename - Could not parse, skipping\n";
    }
}

echo "\nDone! All slides are now protected.\n";
?>
