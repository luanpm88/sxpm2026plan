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

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
        }

        .panel {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .panel-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .panel-title .material-symbols-rounded {
            font-size: 2rem;
        }

        .list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 12px;
        }

        .list-item {
            background: #f9fafb;
            border-radius: 10px;
            padding: 12px 14px;
            border-left: 4px solid #10b981;
            color: #374151;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .list-item.risk {
            border-left-color: #f59e0b;
            background: #fffbeb;
        }

        .guardrail {
            margin-top: 24px;
            background: #eff6ff;
            border: 2px solid #bfdbfe;
            border-radius: 12px;
            padding: 18px;
            color: #1e3a8a;
            font-weight: 600;
            line-height: 1.6;
        }

        @media (max-width: 1100px) {
            .grid-2 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">balance</span>
                AI in Development: Benefits & Risks
            </div>
            <div class="slide-subtitle">
                The opportunity is real, but control is everything
            </div>
        </div>

        <div class="slide-content">
            <div class="grid-2">
                <div class="panel">
                    <div class="panel-title" style="color:#065f46;">
                        <span class="material-symbols-rounded" style="color:#10b981;">trending_up</span>
                        What AI helps us do
                    </div>
                    <ul class="list">
                        <li class="list-item">Speed up routine implementation without sacrificing quality</li>
                        <li class="list-item">Reduce boilerplate and repetitive integration work</li>
                        <li class="list-item">Explore alternatives quickly before choosing the best design</li>
                        <li class="list-item">Improve developer focus on architecture and decision-making</li>
                    </ul>
                </div>

                <div class="panel">
                    <div class="panel-title" style="color:#b45309;">
                        <span class="material-symbols-rounded" style="color:#f59e0b;">warning</span>
                        Where teams lose control
                    </div>
                    <ul class="list">
                        <li class="list-item risk">AI generates code that bypasses system design</li>
                        <li class="list-item risk">Hidden coupling and fragile behavior creep into core modules</li>
                        <li class="list-item risk">Inconsistent interfaces increase regression risk</li>
                        <li class="list-item risk">Teams stop thinking deeply about architecture</li>
                    </ul>
                </div>
            </div>

            <div class="guardrail">
                Design-first guardrail: AI can write code, but only humans can define system intent. Control stays with the team through interfaces, diagrams, and tests that encode the design.
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
