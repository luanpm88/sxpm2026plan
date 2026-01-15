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
        Các công nghệ mới nổi chưa triển khai ngay, được nghiên cứu và pilot theo lộ trình 1–10 năm để đảm bảo lợi thế dài hạn.
    </div>

    <div class="content-grid">
        <div class="card purple">
            <h3><span class="material-symbols-rounded">blur_on</span>Quantum Computing Integration</h3>
            <ul>
                <li><strong>Bài toán tối ưu:</strong> Lập lịch công việc, phân bổ tài nguyên với quy mô và ràng buộc rất lớn.</li>
                <li><strong>Quantum ML:</strong> Tiềm năng tăng tốc huấn luyện mô hình cho tập dữ liệu cực lớn.</li>
                <li><strong>Bảo mật:</strong> Chuẩn bị post-quantum cryptography để bảo vệ dữ liệu dài hạn.</li>
                <li><strong>Lộ trình:</strong> 2028–2030 nghiên cứu & pilot qua quantum cloud (IBM Quantum, AWS Braket).</li>
                <li><strong>Thách thức:</strong> Số qubit hạn chế, lỗi tính toán, công nghệ chưa ổn định.</li>
            </ul>
        </div>

        <div class="card green">
            <h3><span class="material-symbols-rounded">link</span>Blockchain & Decentralization</h3>
            <ul>
                <li><strong>Danh tính phi tập trung:</strong> Người dùng sở hữu dữ liệu và AI models của chính họ.</li>
                <li><strong>Smart contracts:</strong> Workflow tự động, minh bạch, không thể chỉnh sửa.</li>
                <li><strong>Data marketplace:</strong> Chia sẻ và giao dịch dữ liệu, mô hình AI có kiểm soát.</li>
                <li><strong>Audit trail:</strong> Nhật ký hoạt động bất biến, phục vụ compliance.</li>
                <li><strong>Lộ trình:</strong> 2027–2029 nghiên cứu use case, pilot ở quy mô giới hạn.</li>
            </ul>
        </div>
    </div>

    <div class="content-grid">
        <div class="card orange">
            <h3><span class="material-symbols-rounded">sensors</span>Neuromorphic Computing & Edge AI</h3>
            <ul>
                <li><strong>Neuromorphic chips:</strong> Chip AI tiêu thụ điện năng cực thấp.</li>
                <li><strong>Spiking neural networks:</strong> Mô hình xử lý theo sự kiện, gần với não người.</li>
                <li><strong>Edge AI real-time:</strong> Xử lý AI trực tiếp trên thiết bị, không cần cloud.</li>
                <li><strong>Ứng dụng:</strong> Văn phòng thông minh, AI offline trên mobile.</li>
                <li><strong>Lộ trình:</strong> 2029–2031 khi phần cứng đủ trưởng thành.</li>
            </ul>
        </div>

        <div class="card blue">
            <h3><span class="material-symbols-rounded">neurology</span>Brain-Computer Interface (BCI)</h3>
            <ul>
                <li><strong>Thought-to-command:</strong> Điều khiển hệ thống bằng tín hiệu não ở mức ý định.</li>
                <li><strong>Cognitive sensing:</strong> Nhận diện stress, mệt mỏi để điều chỉnh workflow.</li>
                <li><strong>Attention tracking:</strong> Ưu tiên tác vụ dựa trên mức độ tập trung.</li>
                <li><strong>Lộ trình:</strong> 2032–2036 khi BCI không xâm lấn đủ an toàn cho người dùng.</li>
                <li><strong>Đạo đức:</strong> Quyền riêng tư và sự đồng thuận là yếu tố bắt buộc.</li>
            </ul>
        </div>
    </div>

    <div class="content-grid">
        <div class="card purple">
            <h3><span class="material-symbols-rounded">view_in_ar</span>Spatial Computing (AR / VR / MR)</h3>
            <ul>
                <li><strong>Workflow 3D:</strong> Trực quan hóa quy trình và phụ thuộc công việc.</li>
                <li><strong>Collaboration ảo:</strong> Không gian làm việc chung trong VR.</li>
                <li><strong>AR overlay:</strong> Hiển thị thông tin công việc trên môi trường thực.</li>
                <li><strong>Lộ trình:</strong> 2027–2029 pilot với thiết bị AR/VR doanh nghiệp.</li>
            </ul>
        </div>

        <div class="card green">
            <h3><span class="material-symbols-rounded">biotech</span>AI-powered Biometrics & Personalization</h3>
            <ul>
                <li><strong>Emotion AI:</strong> Nhận diện cảm xúc để điều chỉnh trải nghiệm.</li>
                <li><strong>Physiological data:</strong> Đề xuất nghỉ ngơi, sắp xếp lại lịch làm việc.</li>
                <li><strong>Cá nhân hóa:</strong> AI học thói quen làm việc tối ưu của từng người.</li>
                <li><strong>Lộ trình:</strong> 2028–2030 tích hợp với wearable devices.</li>
            </ul>
        </div>
    </div>

    <div class="tech-stack-box">
        <strong>R&D Investment Strategy:</strong><br>
        • 70%: Core product & automation – tạo giá trị ngay.<br>
        • 20%: Emerging tech pilot – thử nghiệm có kiểm soát.<br>
        • 10%: Moonshot – chuẩn bị cho tương lai xa.<br>
        • Hợp tác với viện nghiên cứu & Big Tech thay vì tự xây từ đầu.
    </div>

    <div class="final-message">
        <h3><span class="material-symbols-rounded">emoji_objects</span>Triết lý R&D</h3>
        <p>
            <strong>"Build for today, design for tomorrow, prepare for the decade."</strong><br>
            Phát triển sản phẩm tạo giá trị ngay, thiết kế kiến trúc mở để tích hợp công nghệ mới,
            và luôn theo dõi các đột phá công nghệ dài hạn. Công nghệ là công cụ, giải quyết vấn đề
            thực tế của người dùng mới là mục tiêu cuối cùng.
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
