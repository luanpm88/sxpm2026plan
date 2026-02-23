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
            grid-template-columns: 1fr 1fr 1fr;
            gap: 18px;
            align-items: center;
            margin-top: 30px;
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
            grid-template-columns: repeat(3, 1fr);
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
                Design structure used for the workshop practice
            </div>
        </div>

        <div class="slide-content">
            <div class="diagram">
                <div class="node">
                    <div class="node-title">Subscriber Query</div>
                    <div class="node-desc">pluck('email') input for single/bulk verification</div>
                </div>
                <div class="arrow">
                    <span class="material-symbols-rounded">arrow_forward</span>
                </div>
                <div class="node">
                    <div class="node-title">Verification Service</div>
                    <div class="node-desc">verify() for single email checks</div>
                </div>
            </div>

            <div class="diagram">
                <div class="node">
                    <div class="node-title">Bulk Workflow</div>
                    <div class="node-desc">bulkSubmit() + bulkCheck() with done/wait callbacks</div>
                </div>
                <div class="arrow">
                    <span class="material-symbols-rounded">arrow_forward</span>
                </div>
                <div class="node" style="border-left:5px solid #f59e0b;">
                    <div class="node-title">BulkVerifyInterface</div>
                    <div class="node-desc">bulkSubmit(), bulkCheck(), getCredits(), getServiceName(), getServiceUrl()</div>
                </div>
            </div>

            <div class="layer">
                <div class="node" style="border-left-color:#10b981;">
                    <div class="node-title">MyEmailVerifier</div>
                    <div class="node-desc">Existing provider implementation in current design</div>
                </div>
                <div class="node" style="border-left-color:#10b981;">
                    <div class="node-title">Bouncify</div>
                    <div class="node-desc">Existing provider implementation with bulk workflow</div>
                </div>
                <div class="node" style="border-left-color:#10b981;">
                    <div class="node-title">New Reoon Service</div>
                    <div class="node-desc">AI implements provider class without core changes</div>
                </div>
            </div>

            <div class="note">
                Design rule: all providers follow the same contracts and pass the same tests. Core workflow stays unchanged; AI only fills the new provider implementation layer.
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
