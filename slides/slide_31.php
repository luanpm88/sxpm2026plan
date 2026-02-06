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

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 28px;
        }

        .hero-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 28px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .hero-title {
            font-size: 2rem;
            font-weight: 800;
            color: #111827;
            margin-bottom: 12px;
        }

        .hero-desc {
            color: #4b5563;
            line-height: 1.7;
            font-size: 1.02rem;
        }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px;
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            color: #1e40af;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .agenda {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .agenda-item {
            background: #f9fafb;
            border-left: 4px solid #2563eb;
            border-radius: 8px;
            padding: 14px 16px;
            color: #374151;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .highlight {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid #fcd34d;
            border-radius: 12px;
            padding: 18px 20px;
            color: #92400e;
            font-weight: 600;
            margin-top: 16px;
        }

        .meta-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-top: 18px;
        }

        .meta-card {
            background: #f3f4f6;
            border-radius: 10px;
            padding: 14px;
            text-align: center;
        }

        .meta-title {
            font-size: 0.85rem;
            color: #6b7280;
            margin-bottom: 6px;
        }

        .meta-value {
            font-size: 1.1rem;
            font-weight: 700;
            color: #111827;
        }

        @media (max-width: 1100px) {
            .hero-grid { grid-template-columns: 1fr; }
            .meta-grid { grid-template-columns: 1fr 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">auto_awesome</span>
                Embracing AI, the HKCore Way
            </div>
            <div class="slide-subtitle">
                Design-first AI coding workshop for Latvia & Vietnam teams
            </div>
        </div>

        <div class="slide-content">
            <div class="hero-grid">
                <div class="hero-card">
                    <div class="pill">
                        <span class="material-symbols-rounded" style="font-size: 18px;">school</span>
                        Official Internal Training
                    </div>
                    <div class="hero-title">AI as an Implementation Engine</div>
                    <p class="hero-desc">
                        This workshop is not about prompts or tools. It is about keeping humans in control of software design while using AI to accelerate implementation. We design first, then ask AI to implement exactly what we intend.
                    </p>

                    <div class="highlight">
                        Goal: strengthen design thinking, keep control, and improve code quality while moving faster.
                    </div>

                    <div class="meta-grid">
                        <div class="meta-card">
                            <div class="meta-title">Audience</div>
                            <div class="meta-value">Dev Teams</div>
                        </div>
                        <div class="meta-card">
                            <div class="meta-title">Format</div>
                            <div class="meta-value">Workshop</div>
                        </div>
                        <div class="meta-card">
                            <div class="meta-title">Mindset</div>
                            <div class="meta-value">Design-first</div>
                        </div>
                    </div>
                </div>

                <div class="hero-card">
                    <div class="pill" style="background:#ecfeff;border-color:#a5f3fc;color:#0e7490;">
                        <span class="material-symbols-rounded" style="font-size: 18px;">timeline</span>
                        20-Minute Presentation
                    </div>
                    <div class="hero-title">Session Preview</div>
                    <div class="agenda">
                        <div class="agenda-item"><strong>Why AI, why now:</strong> benefits, risks, and where control is lost.</div>
                        <div class="agenda-item"><strong>Design-first guardrails:</strong> interfaces, diagrams, and tests as contracts.</div>
                        <div class="agenda-item"><strong>Workshop case:</strong> add a new payment gateway to HKCore Cashier.</div>
                        <div class="agenda-item"><strong>Hands-on flow:</strong> design artifacts → AI implementation → verification.</div>
                        <div class="agenda-item"><strong>Principles:</strong> feature work as a chance to strengthen architecture.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
