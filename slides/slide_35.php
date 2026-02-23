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

        .diagram {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-top: 22px;
        }

        .node {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 18px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .node-title {
            font-weight: 700;
            color: #111827;
            margin-bottom: 6px;
            font-size: 1rem;
        }

        .node-desc {
            color: #6b7280;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .arrow {
            text-align: center;
            color: #2563eb;
            font-size: 2rem;
        }

        .layer {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-top: 22px;
        }

        .layer .node {
            border-left: 5px solid #2563eb;
        }

        .note {
            margin-top: 24px;
            background: #eff6ff;
            border: 2px solid #bfdbfe;
            border-radius: 12px;
            padding: 18px;
            color: #1e3a8a;
            line-height: 1.6;
            font-weight: 600;
        }

        .flow {
            margin-top: 18px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 14px 16px;
            color: #374151;
            font-size: 0.92rem;
            line-height: 1.7;
        }

        @media (max-width: 1100px) {
            .diagram { grid-template-columns: 1fr; }
            .layer { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">account_tree</span>
                Email Verification Architecture Snapshot
            </div>
            <div class="slide-subtitle">
                Two interfaces, two jobs, one consistent provider pattern
            </div>
        </div>

        <div class="slide-content">
            <div class="diagram">
                <div class="node">
                    <div class="node-title">VerifyInterface</div>
                    <div class="node-desc">Main job: single email verification<br><strong>verify($email)</strong></div>
                </div>
                <div class="node">
                    <div class="node-title">BulkVerifyInterface</div>
                    <div class="node-desc">Main job: bulk list verification<br><strong>bulkSubmit(Builder $subscriberQuery)</strong><br><strong>bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)</strong></div>
                </div>
            </div>

            <div class="flow">
                <strong>Flow:</strong> single email → <strong>verify($email)</strong> | bulk list → <strong>bulkSubmit(...)</strong> → poll <strong>bulkCheck(...)</strong> until done callback receives final statuses.
            </div>

            <div class="layer">
                <div class="node" style="border-left-color:#10b981;">
                    <div class="node-title">Emailable</div>
                    <div class="node-desc">Existing class implementing provider contracts</div>
                </div>
                <div class="node" style="border-left-color:#10b981;">
                    <div class="node-title">Bouncify</div>
                    <div class="node-desc">Existing class with single + bulk support</div>
                </div>
                <div class="node" style="border-left-color:#10b981;">
                    <div class="node-title">MyEmailVerifier</div>
                    <div class="node-desc">Existing class with same contract pattern</div>
                </div>
                <div class="node" style="border-left-color:#10b981;">
                    <div class="node-title">New Reoon Service</div>
                    <div class="node-desc">New class added in workshop, same interfaces</div>
                </div>
            </div>

            <div class="note">
                Design rule: add only one new provider class that conforms to existing interfaces. No core redesign. Same flow, same contracts, new service.
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
