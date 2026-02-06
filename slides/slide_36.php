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
            gap: 24px;
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
            margin-bottom: 12px;
        }

        .prompt-box {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 16px;
            color: #374151;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .do { border-left: 4px solid #10b981; }
        .dont { border-left: 4px solid #f97316; background: #fff7ed; }

        .artifact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-top: 18px;
        }

        .artifact {
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 10px;
            padding: 14px;
            text-align: center;
        }

        .artifact-title {
            font-weight: 700;
            color: #1e3a8a;
            margin-top: 6px;
            font-size: 0.9rem;
        }

        @media (max-width: 1100px) {
            .grid-2 { grid-template-columns: 1fr; }
            .artifact-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">prompt_suggestion</span>
                AI Prompting with Constraints
            </div>
            <div class="slide-subtitle">
                Give AI the design, not just the task
            </div>
        </div>

        <div class="slide-content">
            <div class="grid-2">
                <div class="card">
                    <h4 style="color:#10b981;">✅ Do this</h4>
                    <div class="prompt-box do">
                        "Implement NewGateway that conforms to PaymentGatewayInterface. Do not modify core modules. Use the provided interaction diagram and unit tests. Ensure getCheckoutUrl(), supportsAutoBilling(), autoCharge(), verify(), allowManualReviewingOfTransaction(), getMinimumChargeAmount(), getMethodTitle(), getMethodInfo() comply with existing behavior. Output only the new gateway implementation and minimal test updates if needed."
                    </div>

                    <div class="artifact-grid">
                        <div class="artifact">
                            <span class="material-symbols-rounded">description</span>
                            <div class="artifact-title">Interface Design</div>
                        </div>
                        <div class="artifact">
                            <span class="material-symbols-rounded">device_hub</span>
                            <div class="artifact-title">Sequence Diagram</div>
                        </div>
                        <div class="artifact">
                            <span class="material-symbols-rounded">fact_check</span>
                            <div class="artifact-title">Unit Tests</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h4 style="color:#f97316;">❌ Not this</h4>
                    <div class="prompt-box dont">
                        "Code me a new payment gateway for HKCore Cashier." 
                        <br><br>
                        This invites AI to redesign parts of the system, introduce coupling, or change core flows without review.
                    </div>

                    <div style="margin-top: 18px; background:#fff7ed; border:1px solid #fed7aa; border-radius:10px; padding:14px; color:#9a3412; line-height:1.6;">
                        Risk: uncontrolled architecture drift, regression, and harder maintenance.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
