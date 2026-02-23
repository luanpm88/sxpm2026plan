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

        .timeline {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-top: 24px;
        }

        .phase {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 18px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .phase-title {
            font-weight: 700;
            font-size: 1.05rem;
            color: #111827;
            margin-bottom: 8px;
        }

        .phase-time {
            font-size: 0.85rem;
            color: #2563eb;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .phase-desc {
            color: #4b5563;
            font-size: 0.92rem;
            line-height: 1.6;
        }

        .roles {
            margin-top: 26px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 16px;
        }

        .role-card {
            background: #f9fafb;
            border-left: 4px solid #2563eb;
            border-radius: 10px;
            padding: 16px;
        }

        .role-title {
            font-weight: 700;
            color: #111827;
            margin-bottom: 6px;
        }

        .role-desc {
            color: #6b7280;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        @media (max-width: 1100px) {
            .timeline { grid-template-columns: 1fr 1fr; }
            .roles { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">event</span>
                Workshop Flow & Roles
            </div>
            <div class="slide-subtitle">
                Hands-on session focused on contract compliance and AI implementation
            </div>
        </div>

        <div class="slide-content">
            <div class="timeline">
                <div class="phase">
                    <div class="phase-title">1. Design Brief</div>
                    <div class="phase-time">10–15 min</div>
                    <div class="phase-desc">Review service contracts, status mapping rules, and constraints. Align on what cannot change.</div>
                </div>
                <div class="phase">
                    <div class="phase-title">2. Interaction Mapping</div>
                    <div class="phase-time">15–20 min</div>
                    <div class="phase-desc">Walk through single + bulk verification flow and expected callback behavior in edge cases.</div>
                </div>
                <div class="phase">
                    <div class="phase-title">3. AI Implementation</div>
                    <div class="phase-time">25–30 min</div>
                    <div class="phase-desc">Use AI to implement the Reoon verification service class strictly within the defined boundaries.</div>
                </div>
                <div class="phase">
                    <div class="phase-title">4. Verification</div>
                    <div class="phase-time">15–20 min</div>
                    <div class="phase-desc">Run tests, validate mapping/compliance, and refactor for clarity if needed.</div>
                </div>
            </div>

            <div class="roles">
                <div class="role-card">
                    <div class="role-title">Design Owner</div>
                    <div class="role-desc">Defines contracts, constraints, and acceptance criteria.</div>
                </div>
                <div class="role-card">
                    <div class="role-title">AI Driver</div>
                    <div class="role-desc">Prompts AI with contracts + flow artifacts and implements within scope.</div>
                </div>
                <div class="role-card">
                    <div class="role-title">Verifier</div>
                    <div class="role-desc">Validates tests, checks status mapping compliance, and reviews code quality.</div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
