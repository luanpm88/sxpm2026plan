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
                        We add a new email verification provider class for <strong>Reoon</strong> that implements existing contracts (<strong>VerifyInterface</strong> and <strong>BulkVerifyInterface</strong>) without touching core modules. The implementation must comply 100% with current behavior and contracts.
                    </p>

                    <div class="tag">
                        <span class="material-symbols-rounded" style="font-size:16px;">verified</span>
                        Design compliance is mandatory
                    </div>

                    <ul class="list">
                        <li>Provide interface design aligned to <strong>VerifyInterface</strong> + <strong>BulkVerifyInterface</strong></li>
                        <li>Sequence diagram: <em>verify()</em> single email → <em>bulkSubmit()</em> → <em>bulkCheck()</em> with callbacks</li>
                        <li>Unit tests covering <em>status mapping</em>, <em>getCredits()</em>, <em>isBulkVerifySupported()</em>, <em>getServiceName()</em>, <em>getServiceUrl()</em>, and callback payload contracts</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-title">
                        <span class="material-symbols-rounded" style="color:#f59e0b;">rule</span>
                        Constraints
                    </div>
                    <ul class="list">
                        <li class="constraint">No changes to CORE modules</li>
                        <li class="constraint">Zero regression risk (no re-testing entire system)</li>
                        <li class="constraint">AI must follow interface and tests, not invent architecture</li>
                        <li class="constraint">Result must be maintainable at zero additional cost</li>
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
