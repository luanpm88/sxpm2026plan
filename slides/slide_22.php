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
        .timeline { background: #ffffff; border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
        .timeline-row { display: grid; grid-template-columns: 120px 1fr; gap: 16px; padding: 12px 0; border-bottom: 1px solid #f3f4f6; }
        .timeline-row:last-child { border-bottom: none; }
        .timeline-year { font-size: 1.3rem; font-weight: 800; color: #2563eb; display: flex; align-items: center; gap: 6px; }
        .timeline-content h4 { margin: 0 0 6px 0; font-size: 1.05rem; color: #111827; font-weight: 700; }
        .timeline-content ul { margin: 0; padding: 0; list-style: none; color: #4b5563; font-size: 0.92rem; line-height: 1.5; }
        .timeline-content ul li { padding: 3px 0; padding-left: 14px; position: relative; }
        .timeline-content ul li:before { content: '▸'; position: absolute; left: 2px; color: #3b82f6; font-weight: 700; }
        .vision-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 10px; }
        .vision-card { background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); border: 2px solid #93c5fd; border-radius: 12px; padding: 14px; }
        .vision-card h3 { margin: 0 0 8px 0; font-size: 1.1rem; color: #1e40af; display: flex; align-items: center; gap: 6px; }
        .vision-card h3 .material-symbols-rounded { font-size: 1.3rem; }
        .vision-card ul { margin: 0; padding: 0; list-style: none; color: #1e40af; font-size: 0.92rem; line-height: 1.5; }
        .vision-card ul li { padding: 3px 0; padding-left: 14px; position: relative; }
        .vision-card ul li:before { content: '✦'; position: absolute; left: 2px; color: #2563eb; }
    </style>
</head>
<body>
<div class="slide-container">
    <div class="slide-title">
        <span class="material-symbols-rounded">timeline</span>
        Vision 10 năm: Technology Evolution (2026-2036)
    </div>
    <div class="slide-subtitle">
        Lộ trình phát triển công nghệ dài hạn: từ SaaS vững chắc → tự động hóa sâu → tích hợp AI theo từng bước kiểm soát.
    </div>

    <div class="timeline">
        <div class="timeline-row">
            <div class="timeline-year"><span class="material-symbols-rounded">looks_one</span>2026-2027</div>
            <div class="timeline-content">
                <h4>Phase 1: Platform Foundation & Core Automation</h4>
                <ul>
                    <li><strong>HKSpace core hoàn thiện:</strong> Quản lý task/project, cộng tác nhóm, realtime sync (Web & Mobile).</li>
                    <li><strong>Nền tảng SaaS sẵn sàng scale:</strong> Multi-tenant, billing, RBAC, monitoring, backup, SLA.</li>
                    <li><strong>Automation engine cốt lõi:</strong> Workflow engine + SOP chuẩn cho các nghiệp vụ phổ biến.</li>
                    <li><strong>No-code workflow builder:</strong> Kéo–thả, logic điều kiện, mapping hành động, không cần code.</li>
                    <li><strong>Tích hợp nền tảng:</strong> Email, chat, webhook, dữ liệu, file.</li>
                    <li><strong>Mục tiêu:</strong> 500–1000 khách hàng trả phí, retention >70%, đạt product–market fit.</li>
                </ul>
            </div>
        </div>

        <div class="timeline-row">
            <div class="timeline-year"><span class="material-symbols-rounded">looks_two</span>2028-2029</div>
            <div class="timeline-content">
                <h4>Phase 2: Automation Scale & AI Assistance</h4>
                <ul>
                    <li><strong>Mở rộng automation:</strong> Nhiều action hơn, xử lý quy trình phức tạp hơn.</li>
                    <li><strong>SOP nâng cao:</strong> Workflow cho các chuỗi nghiệp vụ end-to-end.</li>
                    <li><strong>AI hỗ trợ ngữ cảnh:</strong> Gợi ý điều kiện, hành động dựa trên dữ liệu & pattern.</li>
                    <li><strong>Workflow analytics:</strong> Đo hiệu suất, phát hiện bottleneck, đề xuất cải tiến.</li>
                    <li><strong>Custom connector:</strong> Cho phép bên thứ ba tích hợp hệ thống riêng.</li>
                    <li><strong>Mục tiêu:</strong> 1.500–2.500 khách hàng, mở rộng ASEAN, tập trung theo ngành.</li>
                </ul>
            </div>
        </div>

        <div class="timeline-row">
            <div class="timeline-year"><span class="material-symbols-rounded">looks_3</span>2030-2032</div>
            <div class="timeline-content">
                <h4>Phase 3: Intelligent Automation & AI Agents</h4>
                <ul>
                    <li><strong>AI Agent workflows:</strong> Xử lý logic phức tạp, con người duyệt bước quan trọng.</li>
                    <li><strong>Predictive automation:</strong> AI dự đoán sự kiện và chủ động kích hoạt workflow.</li>
                    <li><strong>Tự tối ưu workflow:</strong> Học từ lịch sử chạy để cải thiện hiệu suất.</li>
                    <li><strong>Kết nối liên doanh nghiệp:</strong> Chia sẻ workflow giữa các tổ chức (B2B).</li>
                    <li><strong>Voice-enabled automation:</strong> Điều khiển và kiểm tra trạng thái bằng giọng nói.</li>
                    <li><strong>Mục tiêu:</strong> 3.000–5.000 khách hàng, phân khúc enterprise, $5–10M ARR.</li>
                </ul>
            </div>
        </div>

        <div class="timeline-row">
            <div class="timeline-year"><span class="material-symbols-rounded">looks_4</span>2032-2036</div>
            <div class="timeline-content">
                <h4>Phase 4: Autonomous Enterprise Platform</h4>
                <ul>
                    <li><strong>Hyper-automation:</strong> Phần lớn quy trình vận hành tự động, AI xử lý ngoại lệ.</li>
                    <li><strong>Multimodal AI:</strong> Kết hợp text, voice, vision và dữ liệu vận hành.</li>
                    <li><strong>Regional operating system:</strong> HKSpace trở thành chuẩn vận hành doanh nghiệp khu vực.</li>
                    <li><strong>Edge AI:</strong> Xử lý cục bộ cho các quy trình yêu cầu độ trễ thấp và bảo mật.</li>
                    <li><strong>Marketplace ecosystem:</strong> Hệ sinh thái workflow, AI agent và dịch vụ dữ liệu.</li>
                    <li><strong>Tầm nhìn:</strong> 5.000+ khách hàng, $20–50M ARR, hạ tầng thiết yếu tại Đông Nam Á.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="vision-grid">
        <div class="vision-card">
            <h3><span class="material-symbols-rounded">insights</span>Realistic Execution Strategy</h3>
            <ul>
                <li><strong>2026-27:</strong> Làm chắc nền tảng, tập trung khách hàng đầu tiên.</li>
                <li><strong>2028-29:</strong> Mở rộng có kiểm soát, AI chỉ áp dụng khi chứng minh ROI.</li>
                <li><strong>2030-32:</strong> Scale tự tin, AI agent và predictive automation trưởng thành.</li>
                <li><strong>2032+:</strong> Dẫn đầu thị trường, tạo lợi thế khó thay thế.</li>
            </ul>
        </div>

        <div class="vision-card">
            <h3><span class="material-symbols-rounded">explore</span>Key Risks & Mitigation</h3>
            <ul>
                <li><strong>Execution risk:</strong> Độ phức tạp cao → đội ngũ mạnh, ưu tiên chất lượng.</li>
                <li><strong>Competition:</strong> Big Tech → đi nhanh, tích lũy dữ liệu & domain knowledge.</li>
                <li><strong>Customer adoption:</strong> SME ngại phức tạp → đào tạo, hỗ trợ, onboarding tốt.</li>
                <li><strong>Regulation:</strong> Tuân thủ bảo mật & pháp lý, audit log minh bạch.</li>
            </ul>
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
