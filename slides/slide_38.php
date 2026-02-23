<?php
require_once '../includes/auth.php';
requireAuth(); // Check authentication
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.35rem;
            font-weight: 400;
            margin-top: 8px;
            color: #6b7280;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 18px;
        }

        .card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 22px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 10px;
        }

        .list li {
            background: #f9fafb;
            border-left: 4px solid #2563eb;
            border-radius: 10px;
            padding: 10px 12px;
            color: #374151;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .quote {
            margin-top: 24px;
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid #fcd34d;
            border-radius: 14px;
            padding: 22px;
            color: #92400e;
            font-weight: 700;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        @media (max-width: 1100px) {
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">verified</span>
                Principles & Takeaways
            </div>
            <div class="slide-subtitle">
                Professional, simple, and repeatable workshop practice
            </div>
        </div>

        <div class="slide-content">
            <div class="grid">
                <div class="card">
                    <h4 style="color:#1d4ed8;">What we reinforce</h4>
                    <ul class="list">
                        <li>Human-led design is non‑negotiable</li>
                        <li>AI is a tool, not a decision maker</li>
                        <li>Two interface purposes stay clear: single verify + bulk verify</li>
                        <li>Contract compliance beats creativity in core systems</li>
                    </ul>
                </div>
                <div class="card">
                    <h4 style="color:#16a34a;">What the team gains</h4>
                    <ul class="list">
                        <li>Faster provider integration without architecture drift</li>
                        <li>Higher confidence in changes</li>
                        <li>Cleaner, more maintainable code</li>
                        <li>Better collaboration across teams and roles</li>
                    </ul>
                </div>
            </div>

            <div class="quote">
                “One new provider class, same interfaces, same flow: fast delivery with AI and stable architecture.”
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
