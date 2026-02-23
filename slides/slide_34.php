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

        .layout {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 26px;
        }

        .card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .card-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 10px;
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 999px;
            color: #1d4ed8;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 12px;
        }

        .list li {
            background: #f9fafb;
            border-left: 4px solid #2563eb;
            border-radius: 10px;
            padding: 12px 14px;
            color: #374151;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .constraint {
            background: #fffbeb;
            border-left-color: #f59e0b;
        }

        @media (max-width: 1100px) {
            .layout { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">mark_email_read</span>
                Workshop Use Case: Add an Email Verification Service
            </div>
            <div class="slide-subtitle">
                Design-first integration in current app architecture
            </div>
        </div>

        <div class="slide-content">
            <div class="layout">
                <div class="card">
                    <div class="card-title">
                        <span class="material-symbols-rounded" style="color:#2563eb;">assignment</span>
                        Scenario
                    </div>
                    <p style="color:#4b5563; line-height:1.7; font-size:0.98rem;">
                        We add one new provider class for <strong>Reoon</strong>. It must conform to <strong>VerifyInterface</strong> (single email verification) and <strong>BulkVerifyInterface</strong> (bulk list verification) without touching core modules.
                    </p>

                    <div class="tag">
                        <span class="material-symbols-rounded" style="font-size:16px;">verified</span>
                        Design compliance is mandatory
                    </div>

                    <ul class="list">
                        <li>Single purpose: <em>verify($email)</em> returns mapped verification status</li>
                        <li>Bulk purpose: <em>bulkSubmit(Builder $subscriberQuery)</em> + <em>bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)</em></li>
                        <li>Unit tests focus on status mapping, callback flow, and provider metadata methods</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-title">
                        <span class="material-symbols-rounded" style="color:#f59e0b;">rule</span>
                        Constraints
                    </div>
                    <ul class="list">
                        <li class="constraint">No changes to CORE modules</li>
                        <li class="constraint">No architecture redesign</li>
                        <li class="constraint">AI must follow interfaces and tests</li>
                        <li class="constraint">Keep implementation small and maintainable</li>
                    </ul>

                    <div class="tag" style="background:#ecfeff;border-color:#a5f3fc;color:#0e7490; margin-top:16px;">
                        <span class="material-symbols-rounded" style="font-size:16px;">psychology</span>
                        AI writes code only within constraints
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
