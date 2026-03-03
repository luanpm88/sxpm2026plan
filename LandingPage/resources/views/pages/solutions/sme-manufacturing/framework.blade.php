<section style="background: #ffffff;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">Manufacturing Operating Framework</h2>
            <p class="section-subtitle">A structured modular system architecture designed for repeatable deployment, operational consistency, and long-term expansion.</p>
        </div>

        <div style="display: grid; gap: 1.25rem;">
            <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Layer 1 — Core System Foundation</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    <li>User and role management</li>
                    <li>Workflow engine</li>
                    <li>Reporting structure</li>
                    <li>Audit logging</li>
                    <li>API-ready architecture</li>
                </ul>
            </div>

            <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Layer 2 — Manufacturing Modules</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    <li>Production management</li>
                    <li>Inventory control</li>
                    <li>Packaging workflow</li>
                    <li>Quality control</li>
                    <li>KPI dashboard</li>
                </ul>
            </div>

            <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Layer 3 — Adaptation &amp; Integration</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    <li>SOP alignment</li>
                    <li>ERP integration capability</li>
                    <li>Factory-specific workflow configuration</li>
                    <li>Multi-language support</li>
                </ul>
            </div>
        </div>

        <p style="margin-top: 1.25rem; font-weight: 600; color: var(--primary-dark);">
            This is a structured modular system approach, not one-off coding.
        </p>

        <div style="margin-top: 2rem;">
            <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">Recommended Technology Datasheet</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1rem;">
                The stack below is selected for scalable factory operations, API-driven device integration, and maintainable long-term ownership.
            </p>

            <div style="display: grid; gap: 1rem;">
                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">1) Server-side (Backend)</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        <li>Laravel (PHP) as core framework for modular business logic and RBAC workflow management.</li>
                        <li>MySQL for transactional manufacturing data and reporting consistency.</li>
                        <li>REST API (Laravel API Resources) and optional GraphQL (Lighthouse) for mobile/device clients.</li>
                        <li>Realtime updates via Laravel Echo + WebSocket/Pusher for line dashboards and status boards.</li>
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">2) Client-side (Web + Mobile)</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        <li>Web app: Vue.js or React for supervisor/manager dashboards and planning views.</li>
                        <li>Mobile app: Flutter or React Native for Android/iOS at workstations and floor checkpoints.</li>
                        <li>Device UI patterns optimized for touch operation on industrial tablets.</li>
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">3) Device &amp; Machine Integration</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        <li>IoT messaging through MQTT or FCM for status and task notifications.</li>
                        <li>Line device communication by Bluetooth or secure industrial Wi-Fi.</li>
                        <li>Machine protocol integration via OPC-UA or Modbus.</li>
                        <li>SCADA/collection layer via Ignition, Node-RED, or dedicated integration module.</li>
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">4) Security, Data &amp; Reporting</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        <li>Authentication and authorization by Laravel Sanctum or OAuth2 patterns.</li>
                        <li>TLS 1.2/1.3 encryption in transit, secure storage controls for sensitive data.</li>
                        <li>Backup strategy on AWS S3, Google Cloud Storage, or controlled on-prem storage.</li>
                        <li>Reporting layer with Laravel Excel, Chart.js, or Power BI integration.</li>
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">5) Cloud, Delivery &amp; Operations</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        <li>Hosting on AWS, Google Cloud, or DigitalOcean with predictable scaling models.</li>
                        <li>CDN layer by Cloudflare or AWS CloudFront for static assets and global performance.</li>
                        <li>CI/CD via GitHub Actions, GitLab CI/CD, or Jenkins.</li>
                        <li>Deployment model supports on-prem, cloud, or hybrid architecture.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
