<section style="background: #ffffff;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Solution Roadmap</h2>
            <p class="section-subtitle">A phased roadmap to evolve from operational control to continuous performance optimization.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
            <div style="border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; background: var(--secondary-bg);">
                <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">Phase 1 — Foundation &amp; Core Modules</h3>
                <p style="margin: 0; color: var(--text-gray); line-height: 1.7;">Establish governance, user roles, core workflows, and priority production and inventory modules.</p>
            </div>
            <div style="border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; background: var(--secondary-bg);">
                <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">Phase 2 — Integration &amp; Automation</h3>
                <p style="margin: 0; color: var(--text-gray); line-height: 1.7;">Integrate supporting systems, reduce manual handoffs, and standardize cross-department workflows.</p>
            </div>
            <div style="border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; background: var(--secondary-bg);">
                <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">Phase 3 — Data Intelligence &amp; Optimization</h3>
                <p style="margin: 0; color: var(--text-gray); line-height: 1.7;">Expand analytics, improve decision velocity, and continuously optimize operational and quality outcomes.</p>
            </div>
        </div>

        <p style="margin-top: 1.25rem; color: var(--text-gray); font-weight: 600;">
            Our approach builds toward a continuously improving manufacturing platform over time.
        </p>

        <div style="margin-top: 1.75rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
            <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">Infrastructure Baseline (Hardware + Software)</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 0.75rem; color: var(--text-gray);">
                <div><strong style="color: var(--text-dark);">Central Server</strong><br>Linux-based application hosting for Laravel backend and API services.</div>
                <div><strong style="color: var(--text-dark);">Database Tier</strong><br>MySQL/MariaDB with backup policy and role-separated access controls.</div>
                <div><strong style="color: var(--text-dark);">Shopfloor Endpoints</strong><br>Android/iOS tablets and workstation terminals across production checkpoints.</div>
                <div><strong style="color: var(--text-dark);">Industrial Network</strong><br>Managed switch, secure Wi-Fi, segmented factory network, VPN for remote access.</div>
                <div><strong style="color: var(--text-dark);">IoT / PLC Connectivity</strong><br>OPC-UA/Modbus integration via gateway or middleware service.</div>
                <div><strong style="color: var(--text-dark);">Storage &amp; DR</strong><br>NAS/cloud backup, periodic recovery drills, and data retention governance.</div>
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
            <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">Hardware Reference Configuration</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 0.75rem;">
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Web/App Server</strong><br>
                    Reference: 8+ cores CPU, 32GB RAM ECC, enterprise SSD RAID 1/10, Linux server.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Database Server</strong><br>
                    Reference: 16+ cores class CPU, 64GB RAM ECC, enterprise SSD RAID 5/10.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Network Layer</strong><br>
                    Managed switch, industrial Wi-Fi, firewall with VPN/IPSec, segmented production network.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Storage</strong><br>
                    Starting point: 5TB+, separated transaction/log/backup volumes, NAS or cloud backup extension.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Shopfloor Devices</strong><br>
                    Android/iOS tablets 10"+, barcode scanners (1D/2D), workstation terminals, industrial printers.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Power &amp; Continuity</strong><br>
                    UPS backup for server/network layer and periodic DR readiness checks.
                </div>
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
            <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">Risk Management Baseline</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 0.75rem;">
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Requirement volatility</strong><br>
                    Controlled through phased backlog governance and formal change impact review.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Integration complexity</strong><br>
                    De-risked via protocol sandboxing, interface testing, and staged machine onboarding.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Data security incidents</strong><br>
                    Mitigated by encryption controls, segmentation, log monitoring, and incident playbooks.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Performance and scale pressure</strong><br>
                    Addressed by load tests, tuning plans, and scalable infrastructure options.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">User adoption gap</strong><br>
                    Reduced by role-based training, SOP updates, and on-site hypercare in go-live stage.
                </div>
                <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                    <strong style="color: var(--text-dark);">Timeline and budget overrun</strong><br>
                    Managed through sprint-level visibility, milestone checkpoints, and scope discipline.
                </div>
            </div>
        </div>

        <div style="margin-top: 1rem; background: #fff; border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem; color: var(--text-gray); line-height: 1.8;">
            <strong style="color: var(--text-dark);">Operational Targets Reference:</strong>
            availability target 99.9%, scalable architecture for additional devices and production lines, and scheduled maintenance with monthly health checks for infrastructure and application layers.
        </div>
    </div>
</section>
