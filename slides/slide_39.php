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

        .intro {
            background: #eff6ff;
            border: 2px solid #bfdbfe;
            border-radius: 14px;
            padding: 16px 18px;
            color: #1e3a8a;
            line-height: 1.7;
            margin-bottom: 18px;
            font-size: 0.95rem;
        }

        .step {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            margin-bottom: 16px;
        }

        .step-head {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .step-index {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #1d4ed8;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .step-title {
            font-size: 1.08rem;
            font-weight: 700;
            color: #111827;
        }

        .step-goal {
            color: #4b5563;
            font-size: 0.94rem;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .label {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 10px;
            border-radius: 999px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 8px;
            border: 1px solid;
        }

        .label.prompt { background: #ecfeff; border-color: #a5f3fc; color: #0e7490; }
        .label.output { background: #f0fdf4; border-color: #86efac; color: #166534; }
        .label.cmd { background: #fff7ed; border-color: #fdba74; color: #9a3412; }

        .code-box {
            background: #0f172a;
            color: #e2e8f0;
            border-radius: 10px;
            padding: 14px;
            font-family: 'Monaco', 'Menlo', monospace;
            font-size: 0.82rem;
            line-height: 1.6;
            white-space: pre-wrap;
            word-break: break-word;
            margin-bottom: 10px;
            border: 1px solid #1e293b;
        }

        .note {
            background: #f9fafb;
            border-left: 4px solid #2563eb;
            border-radius: 10px;
            padding: 10px 12px;
            color: #374151;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-top: 8px;
        }

        .final-checklist {
            margin-top: 14px;
            background: #fffbeb;
            border: 2px solid #fde68a;
            border-radius: 12px;
            padding: 14px 16px;
        }

        .final-checklist ul {
            margin: 8px 0 0 16px;
            color: #92400e;
            line-height: 1.7;
            font-size: 0.92rem;
        }

        .screenshot-wrap {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 12px;
            margin-top: 10px;
        }

        .screenshot-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-top: 10px;
        }

        .screenshot-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            display: block;
            background: #ffffff;
        }

        .screenshot-caption {
            margin-top: 8px;
            color: #475569;
            font-size: 0.86rem;
            line-height: 1.5;
        }

        .screenshot-actions {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .screenshot-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid #bfdbfe;
            background: #eff6ff;
            color: #1d4ed8;
            border-radius: 8px;
            padding: 7px 10px;
            font-size: 0.84rem;
            font-weight: 600;
            cursor: pointer;
        }

        .screenshot-btn:hover {
            background: #dbeafe;
        }

        .image-modal {
            position: fixed;
            inset: 0;
            background: rgba(2, 6, 23, 0.88);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 24px;
            z-index: 9999;
        }

        .image-modal.open {
            display: flex;
        }

        .image-modal-content {
            max-width: min(1600px, 96vw);
            max-height: 92vh;
            width: auto;
            height: auto;
            border-radius: 12px;
            border: 1px solid #334155;
            box-shadow: 0 15px 45px rgba(0,0,0,0.45);
            background: #fff;
        }

        .image-modal-close {
            position: fixed;
            top: 16px;
            right: 16px;
            border: 1px solid #475569;
            background: rgba(15, 23, 42, 0.9);
            color: #e2e8f0;
            border-radius: 999px;
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        @media (max-width: 1100px) {
            .screenshot-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">construction</span>
                Workshop Practice Playbook: Add Reoon Fast & Safely
            </div>
            <div class="slide-subtitle">
                Prompt templates + code locations + test flow for Laravel
            </div>
        </div>

        <div class="slide-content">
            <div class="intro">
                Use this 6-step flow in live workshop: <strong>prepare contracts</strong> → <strong>configure service</strong> → <strong>implement class with AI</strong> → <strong>test quickly</strong> → <strong>debug/finalize with AI</strong> → <strong>open app and verify end-to-end</strong>.
                <br>
                Target service: <strong>Reoon</strong>. Goal: add one provider class that conforms to two interfaces: single verification + bulk verification.
            </div>

            <div class="step">
                <div class="step-head">
                    <div class="step-index">1</div>
                    <div class="step-title">Prepare Interface Contract Prompt</div>
                </div>
                    <div class="step-goal">Create a markdown contract first. Lock two purposes clearly: single verify and bulk verify.</div>

                <div class="label prompt"><span class="material-symbols-rounded" style="font-size:14px;">chat</span>Prompt</div>
                <div class="code-box">Read and analyze current verification architecture from:
/Users/luan/apps/acelle/app/Library/Contracts/VerifyInterface.php
/Users/luan/apps/acelle/app/Library/Contracts/BulkVerifyInterface.php
/Users/luan/apps/acelle/app/Library/Everification/

Generate a markdown file: /Users/luan/apps/acelle/docs/verification-design-contract.md

The markdown must include:
1) Interface method contracts and expected behavior
    - verify($email)
    - bulkSubmit(Builder $subscriberQuery)
    - bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)
2) Standard status map conventions (deliverable, undeliverable, risky, unknown)
3) Single verify flow and bulk verify callback flow
4) Error-handling conventions used by current providers
5) Minimal rules for adding a new provider with zero core changes

Do not implement code yet. Only produce the markdown contract.</div>
                <div class="note">Why: This turns architecture into an explicit artifact AI can follow in the next steps.</div>
            </div>

            <div class="step">
                <div class="step-head">
                    <div class="step-index">2</div>
                    <div class="step-title">Add Reoon service to config (exact location)</div>
                </div>
                <div class="step-goal">Update provider registry so Reoon appears in available verification services.</div>

                <div class="label output"><span class="material-symbols-rounded" style="font-size:14px;">code_blocks</span>Add block in config</div>
                <div class="code-box">Path: /Users/luan/apps/acelle/config/verification.php

[
    'id' => 'reoon.com',
    'name' => 'Reoon.com',
    'fields' => [ 'api_key' ],
    'auth' => 'api_key',
],</div>

                <div class="label prompt"><span class="material-symbols-rounded" style="font-size:14px;">chat</span>Prompt</div>
                <div class="code-box">Update /Users/luan/apps/acelle/config/verification.php and ensure Reoon service exists in the 'services' array.
If already present, keep a single clean entry and normalize style to match neighbors.
Do not change unrelated providers.</div>
            </div>

            <div class="step">
                <div class="step-head">
                    <div class="step-index">3</div>
                    <div class="step-title">Ask AI to implement the Reoon provider class</div>
                </div>
                <div class="step-goal">Generate provider implementation from the markdown contract and existing provider patterns.</div>

                <div class="label prompt"><span class="material-symbols-rounded" style="font-size:14px;">chat</span>Prompt</div>
                <div class="code-box">Use /Users/luan/apps/acelle/docs/verification-design-contract.md as the source of truth.

Implement (or update) Reoon verification provider class in:
/Users/luan/apps/acelle/app/Library/Everification/Reoon.php

Requirements:
- Implement VerifyInterface and BulkVerifyInterface contracts exactly
- Keep status mapping explicit and safe
- Support verify($email), bulkSubmit(Builder $subscriberQuery), bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback), getCredits(), getServiceName(), getServiceUrl(), isBulkVerifySupported()
- Follow coding style used by existing providers in app/Library/Everification
- No changes to core workflow outside provider class
- Throw clear exceptions for invalid API responses

After coding, summarize which methods were added/changed and why.</div>

                <div class="note">Tip: Ask AI to compare with Emailable/MyEmailVerifier/Bouncify classes for consistency patterns.</div>
            </div>

            <div class="step">
                <div class="step-head">
                    <div class="step-index">4</div>
                    <div class="step-title">Ask AI to write Unit tests + run focused test command</div>
                </div>
                <div class="step-goal">Create minimal but high-value tests for new Reoon behavior only.</div>

                <div class="label prompt"><span class="material-symbols-rounded" style="font-size:14px;">chat</span>Prompt</div>
                <div class="code-box">Create unit tests for Reoon provider in Laravel project:
Path: /Users/luan/apps/acelle/tests/Unit/ReoonVerificationTest.php

Test coverage:
1) status mapping converts API values to deliverable/undeliverable/risky/unknown
2) verify() handles invalid response shape with exception
3) bulkCheck() returns false on non-completed status and calls wait callback
4) bulkCheck() returns true on completed status and calls done callback for each email
5) getServiceName(), getServiceUrl(), isBulkVerifySupported() expected values

Use PHPUnit/Laravel style consistent with existing tests.
Mock external API responses; do not call real network.</div>

                <div class="label cmd"><span class="material-symbols-rounded" style="font-size:14px;">terminal</span>Run</div>
                <div class="code-box">cd /Users/luan/apps/acelle
php artisan test --filter=ReoonVerificationTest</div>
            </div>

            <div class="step">
                <div class="step-head">
                    <div class="step-index">5</div>
                    <div class="step-title">Consolidated AI Debug & Finalize prompt</div>
                </div>
                <div class="step-goal">Use one final prompt to close gaps quickly and produce production-ready provider code.</div>

                <div class="label prompt"><span class="material-symbols-rounded" style="font-size:14px;">chat</span>Prompt</div>
                <div class="code-box">Review these artifacts and finalize Reoon integration:
1) /Users/luan/apps/acelle/docs/verification-design-contract.md
2) /Users/luan/apps/acelle/config/verification.php
3) /Users/luan/apps/acelle/app/Library/Everification/Reoon.php
4) /Users/luan/apps/acelle/tests/Unit/ReoonVerificationTest.php

Task:
- Fix failing tests and edge cases
- Improve exception messages and defensive checks
- Ensure no interface contract violation
- Keep changes minimal and scoped only to Reoon integration
- Return a concise changelog and final verification checklist

Then provide the exact command list to rerun validation locally.</div>

                <div class="final-checklist">
                    <strong style="color:#92400e;">Final workshop checklist</strong>
                    <ul>
                        <li>Config entry exists and is unique for Reoon</li>
                        <li>Provider class follows both interfaces correctly</li>
                        <li>Status mapping + callbacks tested and passing</li>
                        <li>No core module changes outside integration scope</li>
                        <li>AI output reviewed by human before merge</li>
                    </ul>
                </div>
            </div>

            <div class="step">
                <div class="step-head">
                    <div class="step-index">6</div>
                    <div class="step-title">Open the Application & Validate Platform-Wide Availability</div>
                </div>
                <div class="step-goal">Now open the app and verify the new verification service works across relevant flows. Admin or customer can directly add and use the new verification service on the platform without any additional code changes.</div>

                <div class="label output"><span class="material-symbols-rounded" style="font-size:14px;">image</span>Screenshot evidence</div>
                <div class="screenshot-grid">
                    <div class="screenshot-wrap" style="margin-top: 0;">
                        <img src="../ReoonVerificationServiceAdding.png" alt="Reoon verification service adding screenshot" class="screenshot-img">
                        <div class="screenshot-caption">
                            ReoonVerificationServiceAdding.png — UI confirmation that Reoon is available in the verification service setup flow.
                        </div>
                        <div class="screenshot-actions">
                            <button class="screenshot-btn" onclick="openScreenshotModal('../ReoonVerificationServiceAdding.png', 'Reoon verification service adding full screen')">
                                <span class="material-symbols-rounded" style="font-size:16px;">zoom_in</span>
                                Full-screen view
                            </button>
                        </div>
                    </div>

                    <div class="screenshot-wrap" style="margin-top: 0;">
                        <img src="../ReoonVerificationServiceUsing.png" alt="Reoon verification service using screenshot" class="screenshot-img">
                        <div class="screenshot-caption">
                            ReoonVerificationServiceUsing.png — UI confirmation that the configured Reoon service is actively used in list verification flow.
                        </div>
                        <div class="screenshot-actions">
                            <button class="screenshot-btn" onclick="openScreenshotModal('../ReoonVerificationServiceUsing.png', 'Reoon verification service using full screen')">
                                <span class="material-symbols-rounded" style="font-size:16px;">zoom_in</span>
                                Full-screen view
                            </button>
                        </div>
                    </div>
                </div>

                <div class="note">Expected outcome: configuration-driven extensibility works as designed, and the new provider is available to users through standard app screens.</div>
            </div>
        </div>
    </div>

    <div id="screenshotModal" class="image-modal" onclick="closeScreenshotModal(event)">
        <button class="image-modal-close" onclick="closeScreenshotModal(event)" aria-label="Close full-screen screenshot">
            <span class="material-symbols-rounded" style="font-size:20px;">close</span>
        </button>
        <img id="modalImage" src="../ReoonVerificationServiceAdding.png" alt="Reoon verification service full screen" class="image-modal-content">
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
    <script>
        function openScreenshotModal(src, alt) {
            const image = document.getElementById('modalImage');
            image.src = src;
            image.alt = alt || 'Reoon verification service full screen';
            document.getElementById('screenshotModal').classList.add('open');
        }

        function closeScreenshotModal(event) {
            if (!event || event.target.id === 'screenshotModal' || event.currentTarget.classList.contains('image-modal-close')) {
                document.getElementById('screenshotModal').classList.remove('open');
            }
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.getElementById('screenshotModal').classList.remove('open');
            }
        });
    </script>
</body>
</html>
