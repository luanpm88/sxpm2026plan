<?php 
require_once '../includes/auth.php';
requireAuth();
require_once '../config.php';
?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-container { display: flex; flex-direction: column; gap: 14px; }
        .slide-title { display: flex; align-items: center; gap: 10px; font-size: 1.8rem; font-weight: 800; color: #1f2937; }
        .slide-subtitle { font-size: 1rem; color: #6b7280; margin-bottom: 8px; }
        .content-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .card { background: #ffffff; border: 2px solid #e5e7eb; border-radius: 12px; padding: 14px 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
        .card h3 { margin: 0 0 10px 0; font-size: 1.15rem; color: #111827; display: flex; align-items: center; gap: 8px; }
        .card h3 .material-symbols-rounded { font-size: 1.4rem; }
        .card.purple h3 .material-symbols-rounded { color: #a855f7; }
        .card.green h3 .material-symbols-rounded { color: #22c55e; }
        .card.orange h3 .material-symbols-rounded { color: #f97316; }
        .card.blue h3 .material-symbols-rounded { color: #3b82f6; }
        .card ul { margin: 0; padding: 0; list-style: none; color: #4b5563; line-height: 1.6; font-size: 0.95rem; }
        .card ul li { padding: 5px 0; padding-left: 16px; position: relative; }
        .card.purple ul li:before { content: '•'; position: absolute; left: 2px; color: #a855f7; font-weight: 700; }
        .card.green ul li:before { content: '•'; position: absolute; left: 2px; color: #22c55e; font-weight: 700; }
        .card.orange ul li:before { content: '•'; position: absolute; left: 2px; color: #f97316; font-weight: 700; }
        .card.blue ul li:before { content: '•'; position: absolute; left: 2px; color: #3b82f6; font-weight: 700; }
        .final-message { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border: 2px solid #fbbf24; border-radius: 12px; padding: 16px; text-align: center; margin-top: 10px; }
        .final-message h3 { margin: 0 0 10px 0; font-size: 1.3rem; color: #78350f; display: flex; align-items: center; justify-content: center; gap: 8px; }
        .final-message p { margin: 0; font-size: 1rem; color: #92400e; line-height: 1.6; }
        .tech-stack-box { background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; padding: 12px; font-size: 0.9rem; color: #0f172a; line-height: 1.6; margin-top: 10px; }
        .tech-stack-box strong { color: #111827; }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">science</span>
            Emerging Technologies & R&D Roadmap
        </div>
        <div class="slide-subtitle">
            Công nghệ mới nổi chưa áp dụng nhưng sẽ research/pilot trong 1-10 năm tới: quantum, blockchain, neuromorphic, BCI.
        </div>

        <div class="content-grid">
            <div class="card purple">
                <h3><span class="material-symbols-rounded">blur_on</span>Quantum Computing Integration</h3>
                <ul>
                    <li><strong>Optimization problems:</strong> Task scheduling, resource allocation với millions of constraints.</li>
                    <li><strong>Quantum ML:</strong> Train model nhanh hơn exponentially cho large dataset.</li>
                    <li><strong>Cryptography:</strong> Post-quantum encryption cho data security future-proof.</li>
                    <li><strong>Timeline:</strong> 2028-2030 pilot với quantum cloud (IBM Quantum, AWS Braket).</li>
                    <li><strong>Challenge:</strong> Quantum decoherence, error correction, limited qubit count hiện tại.</li>
                </ul>
            </div>

            <div class="card green">
                <h3><span class="material-symbols-rounded">link</span>Blockchain & Decentralization</h3>
                <ul>
                    <li><strong>Decentralized identity:</strong> User own data/AI models, portable cross-platform.</li>
                    <li><strong>Smart contracts:</strong> Automation workflows immutable, trustless execution.</li>
                    <li><strong>Data marketplace:</strong> Tokenize knowledge/models, trade trên blockchain.</li>
                    <li><strong>Audit trail:</strong> Blockchain-based audit log, tamper-proof compliance.</li>
                    <li><strong>Timeline:</strong> 2027-2029 explore use cases, pilot với consortium blockchain.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card orange">
                <h3><span class="material-symbols-rounded">sensors</span>Neuromorphic Computing & Edge AI</h3>
                <ul>
                    <li><strong>Neuromorphic chips:</strong> Intel Loihi, IBM TrueNorth – ultra low power AI inference.</li>
                    <li><strong>Spiking neural networks:</strong> Event-driven processing, gần giống brain hơn.</li>
                    <li><strong>Real-time edge AI:</strong> Run AI trên IoT sensor, instant decision without cloud.</li>
                    <li><strong>Use case:</strong> Smart office automation (sensor detect → AI decide → actuate), offline mobile AI.</li>
                    <li><strong>Timeline:</strong> 2029-2031 khi neuromorphic chips mature, integrate vào HKSpace mobile.</li>
                </ul>
            </div>

            <div class="card blue">
                <h3><span class="material-symbols-rounded">neurology</span>Brain-Computer Interface (BCI)</h3>
                <ul>
                    <li><strong>Thought-to-command:</strong> Think "create task" → BCI detect intent → execute.</li>
                    <li><strong>Cognitive load sensing:</strong> Detect user stress/fatigue → AI adjust UI/workflow.</li>
                    <li><strong>Attention tracking:</strong> Eye-tracking + EEG → prioritize important tasks tự động.</li>
                    <li><strong>Timeline:</strong> 2032-2036 khi non-invasive BCI (Neuralink, Kernel) consumer-ready.</li>
                    <li><strong>Ethics:</strong> Privacy concerns, consent, regulation compliance critical.</li>
                </ul>
            </div>
        </div>

        <div class="content-grid">
            <div class="card purple">
                <h3><span class="material-symbols-rounded">view_in_ar</span>Spatial Computing (AR/VR/MR)</h3>
                <ul>
                    <li><strong>3D workflow visualization:</strong> Holographic Kanban board, spatial task dependencies.</li>
                    <li><strong>Virtual collaboration:</strong> Avatars meeting trong VR workspace, shared 3D objects.</li>
                    <li><strong>AR task overlay:</strong> Glasses show task info overlay physical world (factory floor, warehouse).</li>
                    <li><strong>Timeline:</strong> 2027-2029 pilot với Apple Vision Pro, Meta Quest, enterprise AR glasses.</li>
                </ul>
            </div>

            <div class="card green">
                <h3><span class="material-symbols-rounded">biotech</span>AI-powered Biometrics & Personalization</h3>
                <ul>
                    <li><strong>Emotion AI:</strong> Detect user mood từ voice/facial expression → adjust UI tone.</li>
                    <li><strong>Physiological sensing:</strong> Heart rate, stress level → suggest break, reschedule tasks.</li>
                    <li><strong>Personalized productivity:</strong> AI learn optimal work patterns per individual.</li>
                    <li><strong>Timeline:</strong> 2028-2030 integrate với wearables (Apple Watch, Whoop, Oura).</li>
                </ul>
            </div>
        </div>

        <div class="tech-stack-box">
            <strong>R&D Investment Strategy:</strong><br>
            • 70% effort: core product (HKSpace, Automation, AI Platform) – proven tech, immediate value.<br>
            • 20% explore: emerging tech pilot (quantum cloud, blockchain POC, AR/VR prototypes).<br>
            • 10% moonshot: radical bets (BCI, neuromorphic, AGI integration) – long-term optionality.<br>
            • Partnership: collaborate với research labs (universities, Big Tech R&D) thay vì build from scratch.
        </div>

        <div class="final-message">
            <h3><span class="material-symbols-rounded">emoji_objects</span>Triết lý R&D</h3>
            <p>
                <strong>"Build for today, design for tomorrow, dream for the decade."</strong><br>
                Ship working product ngay (HKSpace v2), kiến trúc extensible để integrate emerging tech sau (modular design), 
                và luôn theo dõi frontier research để không bị bỏ lại phía sau. Công nghệ thay đổi nhanh, nhưng principles (user-centric, 
                scalable, observable, secure) là bất biến. Focus vào solve real problems, tech là means chứ không phải end goal.
            </p>
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
