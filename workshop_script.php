<?php
require_once './includes/auth.php';
requireAuth();

$slide = isset($_GET['slide']) ? (int)$_GET['slide'] : 31;
if ($slide < 31 || $slide > 39) {
    $slide = 31;
}

$version = isset($_GET['v']) ? (int)$_GET['v'] : 1;
if (!in_array($version, [1, 2], true)) {
    $version = 1;
}

$scriptFile = $version === 2
    ? './docs/workshop_script_31_39_v2.md'
    : './docs/workshop_script_31_39.md';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Script (31-39) - V<?php echo $version; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 12px 14px;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .title {
            font-size: 1rem;
            font-weight: 700;
            color: #0f172a;
        }

        .meta {
            font-size: 0.85rem;
            color: #64748b;
        }

        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .btn {
            border: 1px solid #cbd5e1;
            background: #ffffff;
            color: #0f172a;
            border-radius: 8px;
            padding: 6px 10px;
            font-size: 0.84rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn.primary {
            background: #eff6ff;
            border-color: #bfdbfe;
            color: #1d4ed8;
            font-weight: 600;
        }

        #content {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            line-height: 1.75;
        }

        #content h1, #content h2, #content h3 {
            color: #0f172a;
            margin-top: 1.1em;
        }

        #content hr {
            border: 0;
            border-top: 1px solid #e2e8f0;
            margin: 20px 0;
        }

        #content code {
            background: #f1f5f9;
            padding: 2px 6px;
            border-radius: 6px;
        }

        .highlight-slide {
            outline: 2px solid #93c5fd;
            border-radius: 8px;
            padding: 6px 10px;
            background: #eff6ff;
            scroll-margin-top: 90px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <div>
                <div class="title">Workshop Script Guide (Slides 31–39)</div>
                <div class="meta">Version <?php echo $version; ?><?php echo $version === 2 ? ' (Straightforward presentation style)' : ' (Interactive training style)'; ?></div>
            </div>
            <div class="actions">
                <a class="btn" href="./slides/slide_<?php echo str_pad($slide, 2, '0', STR_PAD_LEFT); ?>.php">Open Slide <?php echo $slide; ?></a>
                <a class="btn <?php echo $version === 1 ? 'primary' : ''; ?>" href="./workshop_script.php?slide=<?php echo $slide; ?>&v=1">Version 1</a>
                <a class="btn <?php echo $version === 2 ? 'primary' : ''; ?>" href="./workshop_script.php?slide=<?php echo $slide; ?>&v=2">Version 2</a>
                <button class="btn primary" onclick="jumpToSlide(<?php echo $slide; ?>)">Jump to Slide <?php echo $slide; ?> Script</button>
                <button class="btn" onclick="window.print()">Print</button>
            </div>
        </div>

        <div id="content">Loading script...</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        const currentSlide = <?php echo $slide; ?>;

        function headingId(text) {
            return text
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .trim()
                .replace(/\s+/g, '-');
        }

        function jumpToSlide(slide) {
            const target = document.getElementById(`slide-${slide}`);
            if (target) {
                document.querySelectorAll('.highlight-slide').forEach(el => el.classList.remove('highlight-slide'));
                target.classList.add('highlight-slide');
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        fetch('<?php echo $scriptFile; ?>')
            .then(response => response.text())
            .then(markdown => {
                const renderer = new marked.Renderer();
                renderer.heading = function(textOrToken, level) {
                    let raw = '';
                    let headingLevel = level || 2;

                    if (typeof textOrToken === 'object' && textOrToken !== null) {
                        headingLevel = textOrToken.depth || headingLevel;
                        raw = textOrToken.text
                            || textOrToken.raw
                            || (Array.isArray(textOrToken.tokens)
                                ? textOrToken.tokens.map(token => token.text || token.raw || '').join('')
                                : '');
                    } else {
                        raw = String(textOrToken || '');
                    }

                    const id = headingId(raw);
                    let finalId = id;

                    const match = raw.match(/Slide\s+(\d+)/i);
                    if (match) {
                        finalId = `slide-${match[1]}`;
                    }

                    return `<h${headingLevel} id="${finalId}">${raw}</h${headingLevel}>`;
                };

                marked.setOptions({ renderer });
                document.getElementById('content').innerHTML = marked.parse(markdown);
                jumpToSlide(currentSlide);
            })
            .catch(() => {
                document.getElementById('content').innerHTML = '<pre>Cannot load script markdown file.</pre>';
            });
    </script>
</body>
</html>
