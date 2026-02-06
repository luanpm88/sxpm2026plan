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

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-top: 20px;
        }

        .step-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: relative;
        }

        .step-index {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #1d4ed8;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .step-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 8px;
        }

        .step-desc {
            color: #4b5563;
            font-size: 0.92rem;
            line-height: 1.6;
        }

        .principles {
            margin-top: 26px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .principle {
            background: #f8fafc;
            border-left: 4px solid #2563eb;
            border-radius: 10px;
            padding: 16px 18px;
            color: #374151;
            line-height: 1.6;
        }

        @media (max-width: 1100px) {
            .steps { grid-template-columns: 1fr 1fr; }
            .principles { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">schema</span>
                Design-First Control Loop
            </div>
            <div class="slide-subtitle">
                AI implements. Humans define intent and guardrails.
            </div>
        </div>

        <div class="slide-content">
            <div class="steps">
                <div class="step-card">
                    <div class="step-index">1</div>
                    <div class="step-title">Define Interfaces</div>
                    <div class="step-desc">PaymentGatewayInterface + InvoiceInterface are the contract: getCheckoutUrl(), supportsAutoBilling(), autoCharge(), verify(), getMethodTitle(), getMethodInfo(), allowManualReviewingOfTransaction(), getMinimumChargeAmount().</div>
                </div>
                <div class="step-card">
                    <div class="step-index">2</div>
                    <div class="step-title">Model Interactions</div>
                    <div class="step-desc">Sequence across Invoice, Transaction, PaymentMethod, Gateway service, and cron autoCharge flow.</div>
                </div>
                <div class="step-card">
                    <div class="step-index">3</div>
                    <div class="step-title">Write Tests</div>
                    <div class="step-desc">Unit tests express compliance and expected behavior. Tests are the truth.</div>
                </div>
                <div class="step-card">
                    <div class="step-index">4</div>
                    <div class="step-title">AI Implementation</div>
                    <div class="step-desc">AI generates code strictly within the design. No core changes. No regression.</div>
                </div>
            </div>

            <div class="principles">
                <div class="principle"><strong>Human role is key:</strong> design, decide, and review. AI is not a decision maker.</div>
                <div class="principle"><strong>Design-first mindset:</strong> if design is strong, AI becomes a safe accelerator.</div>
                <div class="principle"><strong>Compliance over creativity:</strong> correct integration beats clever code.</div>
                <div class="principle"><strong>Quality improves:</strong> every feature strengthens architecture instead of bloating it.</div>
            </div>
        </div>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
