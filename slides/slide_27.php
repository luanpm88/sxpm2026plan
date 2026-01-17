<?php 
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            padding: 50px 60px;
            max-height: 100vh;
            overflow-y: auto;
        }
        .slide-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.6rem;
            font-weight: 800;
            color: #111827;
        }
        .slide-subtitle {
            font-size: 0.95rem;
            color: #6b7280;
        }

        /* Risk Grid */
        .risk-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }
        .risk-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 14px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        .risk-header {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 8px;
        }
        .risk-header .material-symbols-rounded { font-size: 1.3rem; }
        .risk-desc { color: #4b5563; font-size: 0.9rem; margin-bottom: 8px; }
        .mitigation {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 10px;
            font-size: 0.86rem;
            color: #374151;
        }
        .mitigation strong { color: #0f766e; }
        .mitigation ul { margin: 6px 0 0 16px; padding: 0; }
        .mitigation ul li { margin-bottom: 4px; }

        /* Foundation & Best Practices */
        .foundation-section {
            background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
            border: 2px solid #cbd5e1;
            border-radius: 12px;
            padding: 14px;
            margin-top: 6px;
        }
        .foundation-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
        }
        .foundation-title .material-symbols-rounded { color: #8b5cf6; }
        .pill-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
        }
        .pill {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 8px 12px;
            font-size: 0.82rem;
            font-weight: 600;
            color: #334155;
            text-align: center;
            box-shadow: 0 1px 2px rgba(0,0,0,0.04);
        }

        .best-section {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 14px;
        }
        .best-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
        }
        .best-title .material-symbols-rounded { color: #10b981; }
        .best-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            font-size: 0.85rem;
            color: #374151;
        }
        .best-item {
            background: #f9fafb;
            border-radius: 8px;
            padding: 10px;
            border-left: 3px solid #10b981;
        }
        .best-item strong { color: #065f46; }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">shield_lock</span>
            SaaS Security Posture & Risk Mitigation
        </div>
        <div class="slide-subtitle">
            Danh mục rủi ro bảo mật & giải pháp thiết kế ở mức enterprise, chuẩn theo thực hành Google/AWS/Microsoft/Netflix.
        </div>

        <div class="risk-grid">
            <!-- Risk 1: SQL Injection & Input Attacks -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">code</span>SQLi & Input Injection</div>
                <div class="risk-desc">Chèn lệnh vào query, phá hoại dữ liệu.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>Prepared statements/ORM, không concat string.</li>
                        <li>Input validation/encoding (OWASP ASVS).</li>
                        <li>DB least-privilege, tách account read/write.</li>
                        <li>WAF rule: block patterns, rate-limit.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 2: XSS/CSRF -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">html</span>XSS & CSRF</div>
                <div class="risk-desc">Script chèn vào client hoặc giả mạo phiên.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>Output encoding, CSP, HttpOnly/Secure cookies.</li>
                        <li>SameSite=Lax/Strict; CSRF tokens.</li>
                        <li>Template auto-escape; sanitize HTML.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 3: Auth & Identity -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">passkey</span>Auth/Identity</div>
                <div class="risk-desc">Tấn công brute-force, credential stuffing, session hijack.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>MFA, WebAuthn/FIDO2; passwordless khi có thể.</li>
                        <li>Rate-limit login, IP/device fingerprint.</li>
                        <li>Short-lived tokens (JWT) + rotation + revoke.</li>
                        <li>SSO/SAML/OIDC; session pinning.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 4: Access Control -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">verified_user</span>Access Control</div>
                <div class="risk-desc">Sai phân quyền, vertical/horizontal privilege escalation.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>ABAC/RBAC với policy central (OPA/AZ).</li>
                        <li>Enforce tenant_id filtering mọi query.</li>
                        <li>Security unit tests + integration authz.</li>
                        <li>Admin actions cần MFA + audit trail.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 5: Data at Rest/In Transit -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">encrypted</span>Data Protection</div>
                <div class="risk-desc">Rò rỉ dữ liệu, sniffing, mất thiết bị.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>TLS 1.2+/1.3 mọi kết nối, HSTS, PFS.</li>
                        <li>Encryption at rest (KMS), key rotation.</li>
                        <li>Field-level enc for PII, tokenization.</li>
                        <li>Backups mã hóa + riêng account.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 6: Secrets & Supply Chain -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">key</span>Secrets & Supply Chain</div>
                <div class="risk-desc">Lộ API keys, dependency compromise.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>Secrets Manager/Vault, không commit secrets.</li>
                        <li>SBOM, signed artifacts (SLSA), pin versions.</li>
                        <li>Dependency scanning (Snyk/Dependabot).</li>
                        <li>Image signing/verification (Cosign).</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 7: DDoS & Bot -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">shield</span>DDoS & Bot Abuse</div>
                <div class="risk-desc">Traffic flood, scraping, resource exhaustion.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>CDN + WAF + rate limiting per endpoint.</li>
                        <li>Bot management, challenge/JS challenge.</li>
                        <li>Auto-scaling + circuit breaker.</li>
                        <li>Anycast + scrubbing center.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 8: API Abuse -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">api</span>API Abuse</div>
                <div class="risk-desc">Replay, overuse, mass enumeration.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>mTLS cho internal, OAuth2 scopes cho public.</li>
                        <li>Idempotency keys, nonce, timestamp.</li>
                        <li>Per-tenant quotas, burst limits, SLAs.</li>
                        <li>Schema validation, strong versioning.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 9: Infra/Network -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">router</span>Infra & Network</div>
                <div class="risk-desc">Open ports, lateral movement, misconfig.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>Zero Trust, private subnets, SG/NACLs.</li>
                        <li>Bastion with MFA, SSH CA, short-lived creds.</li>
                        <li>VPC peering/Transit Gateway, egress control.</li>
                        <li>Config drift detection (Terraform + policy-as-code).</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 10: Logging, Monitoring, Incident -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">monitor_heart</span>Detection & IR</div>
                <div class="risk-desc">Thiếu phát hiện, phản ứng chậm.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>Centralized logs (SIEM), retention ≥ 90 ngày.</li>
                        <li>UEBA/IDS/IPS, anomaly detection.</li>
                        <li>Runbooks, playbooks, on-call 24/7.</li>
                        <li>Tabletop & chaos security drills.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 11: Availability & Backup -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">backup</span>Availability & Backup</div>
                <div class="risk-desc">Mất dữ liệu, downtime dài.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>PITR, cross-region backups, immutable backups.</li>
                        <li>RTO/RPO rõ ràng theo tier.</li>
                        <li>Failover drills định kỳ.</li>
                    </ul>
                </div>
            </div>

            <!-- Risk 12: Compliance & Privacy -->
            <div class="risk-card">
                <div class="risk-header"><span class="material-symbols-rounded">gavel</span>Compliance & Privacy</div>
                <div class="risk-desc">Vi phạm GDPR/CCPA/PCI, lộ PII.</div>
                <div class="mitigation">
                    <strong>Giải pháp:</strong>
                    <ul>
                        <li>Data classification, retention policy.</li>
                        <li>DPIA, consent management, DSR flows.</li>
                        <li>PCI scope reduction, tokenization.</li>
                        <li>Audit logging, evidence automation.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Foundations -->
        <div class="foundation-section">
            <div class="foundation-title">
                <span class="material-symbols-rounded">school</span>
                Security Foundations & References
            </div>
            <div class="pill-grid">
                <div class="pill">OWASP ASVS / Top 10</div>
                <div class="pill">NIST CSF / SP 800-53</div>
                <div class="pill">CIS Benchmarks</div>
                <div class="pill">SLSA / SSDF</div>
                <div class="pill">Zero Trust (BeyondCorp)</div>
                <div class="pill">ISO 27001 / SOC 2</div>
                <div class="pill">Threat Modeling (STRIDE)</div>
                <div class="pill">Least Privilege / ZSP</div>
                <div class="pill">Key Mgmt (KMS/HSM)</div>
                <div class="pill">Secure SDLC / DevSecOps</div>
                <div class="pill">WAF + RASP</div>
                <div class="pill">Secrets Mgmt (Vault)</div>
            </div>
        </div>

        <!-- Best Practices -->
        <div class="best-section">
            <div class="best-title">
                <span class="material-symbols-rounded">verified</span>
                Best Practices (Google / AWS / Microsoft / Netflix)
            </div>
            <div class="best-grid">
                <div class="best-item"><strong>Google:</strong> BeyondCorp Zero Trust, Binary Authorization, VPC-SC, Cloud Armor WAF.</div>
                <div class="best-item"><strong>AWS:</strong> Well-Architected Security Pillar, IAM least privilege, GuardDuty + Security Hub, WAF + Shield.</div>
                <div class="best-item"><strong>Microsoft:</strong> Defender XDR, Azure Policy, Key Vault, Conditional Access + MFA.</div>
                <div class="best-item"><strong>Netflix:</strong> Security Monkey, Lemur (certs), Chaos/Latency Monkey for resilience, risk-based authz.</div>
                <div class="best-item"><strong>Meta:</strong> Phabricator audits, secret scanning, layered memcache ACLs.</div>
                <div class="best-item"><strong>LinkedIn:</strong> Pinot audit logs, Kafka ACLs, data classification pipelines.</div>
            </div>
        </div>

    </div>

    <div class="navigation">
        <button class="nav-btn" onclick="previousSlide()">
            <span class="material-symbols-rounded">arrow_back</span>
        </button>
        <button class="nav-btn" onclick="nextSlide()">
            <span class="material-symbols-rounded">arrow_forward</span>
        </button>
    </div>

    <?php include '../includes/navigation.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
