<?php
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle { font-size: 1.38rem; color: #111827; margin-top: 8px; font-weight: 500; }
        .chart-box { border: 1px solid #d1d5db; background: #f5f5f5; border-radius: 14px; padding: 18px; }
        .layer-box { border-radius: 14px; padding: 14px; border: 1px solid; }
        .layer-home { --layer-color: #374151; background: #ffffff; border-color: #d1d5db; }
        .layer-content { --layer-color: #374151; background: #ffffff; border-color: #d1d5db; }
        .layer-trust { --layer-color: #374151; background: #f9fafb; border-color: #d1d5db; }
        .layer-contact { --layer-color: #15803d; background: #f4faf6; border-color: #86efac; }
        .layer-title { font-weight: 800; color: var(--layer-color); margin-bottom: 8px; display: inline-flex; align-items: center; gap: 8px; }
        .layer-title .material-symbols-rounded { color: var(--layer-color); font-size: 19px; }
        .layer-subtitle { color: #475569; font-size: 1rem; }
        .sub-title { font-weight: 700; font-size: 1.05rem; margin-bottom: 8px; color: #111827; display: inline-flex; align-items: center; gap: 6px; }
        .sub-title .material-symbols-rounded { font-size: 17px; color: #374151; }
        .connector { text-align: center; margin: 10px 0; }
        .connector .material-symbols-rounded {
            font-size: 32px;
            color: #1f2937 !important;
            background: #ffffff;
            border: 2px solid #9ca3af;
            border-radius: 999px;
            padding: 6px;
        }
        .layer-path { display: inline-flex; align-items: center; gap: 8px; border-radius: 999px; padding: 8px 14px; font-weight: 700; border: 1px solid #cbd5e1; background: #ffffff; color: #334155; }
        .layer-path .material-symbols-rounded { font-size: 16px; }
        .path-home { background: #f9fafb; border-color: #d1d5db; color: #374151; }
        .path-content { background: #f9fafb; border-color: #d1d5db; color: #374151; }
        .path-trust { background: #f9fafb; border-color: #d1d5db; color: #374151; }
        .path-contact { background: #f0fdf4; border-color: #86efac; color: #15803d; }
        .path-home .material-symbols-rounded { color: #374151; }
        .path-content .material-symbols-rounded { color: #374151; }
        .path-trust .material-symbols-rounded { color: #374151; }
        .path-contact .material-symbols-rounded { color: #15803d; }
        .path-wrap { display: flex; flex-wrap: wrap; align-items: center; gap: 8px; }
        .path-arrow { color: #94a3b8; font-size: 20px; line-height: 1; }
        .cluster-box { border: 1px solid #e5e7eb; background: #ffffff; border-radius: 12px; padding: 12px; height: 100%; }
        .mini-item { border: 1px solid #ccc; border-radius: 9px; background: #ffffff; padding: 7px 9px; font-size: 0.95rem; color: #475569; display: flex; align-items: center; gap: 6px; }
        .layer-box .mini-item .material-symbols-rounded { font-size: 16px; color: var(--layer-color); }
        .buyer-map { border: 1px solid #d1d5db; border-radius: 14px; background: #ffffff; padding: 16px; }
        .buyer-intro { font-size: 1.02rem; color: #111827; margin: 4px 0 12px; }
        .buyer-row { border: 1px solid #e5e7eb; border-radius: 11px; background: #f9fafb; padding: 10px 12px; margin-bottom: 10px; }
        .buyer-row:last-child { margin-bottom: 0; }
        .buyer-q { font-weight: 700; margin-bottom: 4px; }
        .buyer-meta { display: flex; flex-wrap: wrap; gap: 8px; font-size: 0.94rem; }
        .buyer-chip { border: 1px solid #d1d5db; border-radius: 999px; background: #fff; padding: 4px 9px; display: inline-flex; align-items: center; gap: 5px; }
        .buyer-chip .material-symbols-rounded { font-size: 15px; }
        .slide-content .text-secondary,
        .slide-content .small,
        .slide-content p,
        .slide-content li,
        .slide-content .layer-subtitle,
        .slide-content .mini-item,
        .slide-content .text-primary,
        .slide-content .text-success,
        .slide-content .text-warning,
        .slide-content .text-info {
            color: #111827 !important;
        }
        .slide-content .material-symbols-rounded {
            color: #111827 !important;
        }
        .slide-content .pro-section-title .material-symbols-rounded,
        .slide-content .layer-title .material-symbols-rounded,
        .slide-content .layer-path .material-symbols-rounded,
        .slide-content .mini-item .material-symbols-rounded {
            border-color: #d1d5db !important;
            background: #f3f4f6 !important;
        }
    </style>
</head>
<body>
<div class="slide-container">
    <div class="slide-header">
        <div class="slide-title"><span class="material-symbols-rounded">account_tree</span>Site Architecture Hub Model</div>
        <div class="slide-subtitle">Hub flow định hướng CTA theo từng tầng nội dung: từ khám phá năng lực đến hành động chuyển đổi</div>
    </div>

    <div class="slide-content">
        <div class="chart-box mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="pro-section-title mb-0"><span class="material-symbols-rounded">schema</span>Architecture Map in HTML Boxes</div>
                <span class="badge text-bg-light border">Hub Navigation Model</span>
            </div>

            <div class="shadow-sm layer-box layer-home mb-2">
                <div class="layer-title"><span class="material-symbols-rounded">home</span>Homepage (Primary Entry)</div>
                <div class="layer-subtitle">100% traffic vào đây trước khi phân nhánh nội dung.</div>
            </div>

            <div class="connector my-4"><span class="material-symbols-rounded">south</span></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="shadow-sm layer-box layer-content mb-2">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="xcluster-box">
                                    <div class="sub-title"><span class="material-symbols-rounded">view_quilt</span>Content Cluster</div>
                                    <div class="mini-item"><span class="material-symbols-rounded">build</span>Services</div>
                                    <div class="mini-item mt-2"><span class="material-symbols-rounded">memory</span>Tech Stack</div>
                                    <div class="mini-item mt-2"><span class="material-symbols-rounded">route</span>SCRUM</div>
                                    <div class="mini-item mt-2"><span class="material-symbols-rounded">trending_up</span>Scaling</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shadow-sm layer-box layer-content mb-2">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="xcluster-box">
                                    <div class="sub-title"><span class="material-symbols-rounded">verified_user</span>Trust Layer</div>
                                    <div class="mini-item"><span class="material-symbols-rounded">apartment</span>About Us</div>
                                    <div class="mini-item mt-2"><span class="material-symbols-rounded">workspace_premium</span>Case Studies</div>
                                    <div class="mini-item mt-2"><span class="material-symbols-rounded">workspace_premium</span>Certifications</div>
                                    <div class="mini-item mt-2"><span class="material-symbols-rounded">price_change</span>Pricing Clarity</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="connector my-4"><span class="material-symbols-rounded">south</span></div>

            <div class="shadow-sm layer-box layer-contact">
                <div class="layer-title"><span class="material-symbols-rounded">mail</span>Contact (Conversion Node)</div>
                <div class="row g-2">
                    <div class="col-md-4"><div class="mini-item"><span class="material-symbols-rounded">contact_mail</span>Contact Form</div></div>
                    <div class="col-md-4"><div class="mini-item"><span class="material-symbols-rounded">request_quote</span>RFQ</div></div>
                    <div class="col-md-4"><div class="mini-item"><span class="material-symbols-rounded">handshake</span>Sales Handoff</div></div>
                </div>
            </div>
        </div>

        <div class="buyer-map mt-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <div class="pro-section-title mb-0"><span class="material-symbols-rounded">rule_settings</span>Buyer Question → Page & CTA Mapping</div>
                <span class="badge text-bg-light border">Framework: B2B Trust Ladder</span>
            </div>
            <div class="buyer-intro">Flow executive dùng xuyên suốt deck: <strong>Awareness → Capability → Proof → Action</strong>. Mỗi câu hỏi buyer cần có trang trả lời, bằng chứng và CTA rõ ràng.</div>

            <div class="buyer-row">
                <div class="buyer-q">1) “Đơn vị này làm gì?”</div>
                <div class="buyer-meta">
                    <span class="buyer-chip"><span class="material-symbols-rounded">web</span>Pages: Homepage + Services</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">lightbulb</span>Signal: Value proposition + offerings</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">ads_click</span>CTA: View Services</span>
                </div>
            </div>

            <div class="buyer-row">
                <div class="buyer-q">2) “Họ có đủ khả năng triển khai không?”</div>
                <div class="buyer-meta">
                    <span class="buyer-chip"><span class="material-symbols-rounded">engineering</span>Pages: Tech Stack + SCRUM + Scaling</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">verified</span>Signal: Capability + delivery method</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">arrow_forward</span>CTA: Explore Method</span>
                </div>
            </div>

            <div class="buyer-row">
                <div class="buyer-q">3) “Làm sao biết họ làm được thật?”</div>
                <div class="buyer-meta">
                    <span class="buyer-chip"><span class="material-symbols-rounded">workspace_premium</span>Pages: Case Studies + Certifications + About</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">fact_check</span>Signal: Proof & credibility</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">support_agent</span>CTA: Request Consultation</span>
                </div>
            </div>

            <div class="buyer-row">
                <div class="buyer-q">4) “Bước tiếp theo là gì?”</div>
                <div class="buyer-meta">
                    <span class="buyer-chip"><span class="material-symbols-rounded">payments</span>Pages: Pricing + Contact</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">assignment</span>Signal: Budget fit + requirement clarity</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">send</span>CTA: Submit Contact / RFQ</span>
                </div>
            </div>

            <div class="buyer-row">
                <div class="buyer-q">5) “Timeline triển khai và cách phối hợp như thế nào?”</div>
                <div class="buyer-meta">
                    <span class="buyer-chip"><span class="material-symbols-rounded">route</span>Pages: SCRUM + Services</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">schedule</span>Signal: Sprint model + delivery cadence</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">event_note</span>CTA: Book Planning Session</span>
                </div>
            </div>

            <div class="buyer-row">
                <div class="buyer-q">6) “Sau khi go-live, đơn vị có đồng hành vận hành không?”</div>
                <div class="buyer-meta">
                    <span class="buyer-chip"><span class="material-symbols-rounded">support_agent</span>Pages: Scaling + Contact</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">monitoring</span>Signal: Monitoring, optimization, support model</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">forum</span>CTA: Request Support Scope</span>
                </div>
            </div>

            <div class="buyer-row">
                <div class="buyer-q">7) “Bảo mật và compliance được xử lý ra sao?”</div>
                <div class="buyer-meta">
                    <span class="buyer-chip"><span class="material-symbols-rounded">verified_user</span>Pages: Certifications + Tech Stack</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">gpp_good</span>Signal: Control standards + governance</span>
                    <span class="buyer-chip"><span class="material-symbols-rounded">shield</span>CTA: Security Consultation</span>
                </div>
            </div>
        </div>

        <div class="visual-panel mt-3 mb-0">
            <strong>Design Rule:</strong> Không để người dùng kẹt ở bất kỳ trang nào; luôn có CTA tiến hoặc CTA liên hệ.
        </div>
    </div>
</div>

<?php include '../includes/navigation.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html>
