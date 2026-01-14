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
    }

    .slide-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.7rem;
        font-weight: 800;
        color: #1f2937;
    }

    .slide-subtitle {
        font-size: 0.98rem;
        color: #6b7280;
    }

    .top-grid {
        display: block;
    }

    .diagram {
        background: #f8fafc;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 16px;
        display: grid;
        grid-template-rows: auto auto auto;
        gap: 12px;
        position: relative;
    }
    .row-two {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .area {
        background: #ffffff;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 12px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
    }

    .area-header {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 800;
        color: #111827;
        margin-bottom: 8px;
    }

    .area-header .material-symbols-rounded {
        font-size: 1.4rem;
    }

    .area-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
    }

    .box {
        background: #f9fafb;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 700;
        color: #374151;
        justify-content: flex-start;
    }

    .box .material-symbols-rounded {
        font-size: 1.2rem;
        color: #64748b;
    }

    .box-stack {
        flex-direction: column;
        align-items: flex-start;
    }

    .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 6px;
    }

    .chip {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        border: 1px solid #e5e7eb;
        border-radius: 999px;
        padding: 6px 10px;
        background: #fff;
        font-weight: 600;
        color: #334155;
        font-size: 0.85rem;
    }

    .chip.events {
        border-color: #cbd5e1;
    }

    .chip.actions {
        border-color: #93c5fd;
        background: #eff6ff;
    }

    .chip.conditions {
        border-color: #fcd34d;
        background: #fffbeb;
    }

    .chip.dto {
        border-color: #d1fae5;
        background: #ecfeff;
    }

    .runtime {
        grid-column: 1 / -1;
        background: #f1f5f9;
        border: 2px dashed #cbd5e1;
        border-radius: 12px;
        padding: 12px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 8px;
    }

    .runtime .instance {
        background: #ffffff;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 700;
        color: #334155;
    }

    .runtime .instance .material-symbols-rounded {
        font-size: 1.2rem;
        color: #0ea5e9;
    }

    /* legend removed */

    .example-panel {
        background: #ffffff;
        border-radius: 12px;
        padding: 14px 30px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
    }

    .example-panel h3 {
        margin: 0 0 8px 0;
        font-size: 1.1rem;
        color: #111827;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .example-panel h3 .material-symbols-rounded {
        color: #0ea5e9;
    }

    .example-panel ol {
        margin: 0;
        padding-left: 28px;
        color: #374151;
        line-height: 2.5;
        font-size: 0.95rem;
    }

    .example-panel ol li {
        margin: 3px 0;
    }

    .example-note {
        background: #f8fafc;
        border: 1px dashed #cbd5e1;
        border-radius: 8px;
        padding: 10px;
        color: #475569;
        font-size: 0.9rem;
        margin-top: 10px;
    }

    /* Removed arrow connectors for a cleaner layout */

    .tree-example {
        background: #ffffff;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 12px;
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 12px;
    }

    .tree-example .preview {
        background: #f8fafc;
        border: 2px dashed #cbd5e1;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tree-example .preview img {
        max-width: 100%;
        border-radius: 8px;
        cursor: pointer;
        transition: opacity 0.2s ease;
    }
    .tree-example .preview img:hover {
        opacity: 0.85;
    }

    .tree-example .caption {
        display: flex;
        gap: 8px;
        color: #334155;
    }

    .tree-example .caption .material-symbols-rounded {
        color: #475569;
    }

    /* Bootstrap 5 Modal Customization */
    #treeImageModal .modal-header {
        background: #f8fafc;
        border-bottom: 2px solid #e5e7eb;
    }
    #treeImageModal .btn-close {
        padding: 0.5rem;
    }
    #treeImageModal .modal-body {
        background: #ffffff;
        padding: 2rem;
        overflow: auto;
    }
    #treeImageModal .modal-body img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
</style>
</head>

<body>
    <div class="slide-container">
        <div class="slide-title">
            <span class="material-symbols-rounded">device_hub</span>
            Phụ lục: Tổng quan Automation (Visual)
        </div>
        <div class="slide-subtitle">Hình tượng hóa kiến trúc automation: định nghĩa → runtime instances → mở rộng không giới hạn loại node.</div>

        <!-- Top: Diagram + Example side-by-side -->
        <div class="top-grid">
            <div class="diagram">
                <div class="row-two">
                    <!-- Engine Area -->
                    <div class="area" id="engine-area">
                        <div class="area-header"><span class="material-symbols-rounded">precision_manufacturing</span>Engine</div>
                        <div class="area-grid">
                            <div class="box"><span class="material-symbols-rounded">settings</span>AutomationEngine</div>
                            <div class="box"><span class="material-symbols-rounded">workspaces</span>ContextBag</div>
                            <div class="box"><span class="material-symbols-rounded">tune</span>TemplateResolver</div>
                            <div class="box"><span class="material-symbols-rounded">view_list</span>NodeRegistry</div>
                        </div>
                    </div>

                    <!-- Contracts Area -->
                    <div class="area" id="contracts-area">
                        <div class="area-header"><span class="material-symbols-rounded">receipt_long</span>Contracts</div>
                        <div class="area-grid">
                            <div class="box"><span class="material-symbols-rounded">assignment</span>NodeInterface</div>
                            <div class="box"><span class="material-symbols-rounded">event</span>EventNodeInterface</div>
                            <div class="box"><span class="material-symbols-rounded">bolt</span>ActionNodeInterface</div>
                            <div class="box"><span class="material-symbols-rounded">rule</span>ConditionNodeInterface</div>
                        </div>
                    </div>
                </div>

                <!-- Nodes Area (full row) -->
                <div class="area" id="nodes-area">
                    <div class="area-header"><span class="material-symbols-rounded">category</span>Nodes</div>
                    <div class="area-grid">
                        <div class="box box-stack"><span class="material-symbols-rounded">notifications</span>Events
                            <div class="chips">
                                <span class="chip events">TaskCreated</span>
                                <span class="chip events">TaskStatusChanged</span>
                                <span class="chip events">FolderCreated</span>
                                <span class="chip events">CommentAdded</span>
                                <span class="chip events">DueDateReached</span>
                                <span class="chip events">WebhookReceived</span>
                            </div>
                        </div>
                        <div class="box box-stack"><span class="material-symbols-rounded">play_arrow</span>Actions
                            <div class="chips">
                                <span class="chip actions">SendEmail</span>
                                <span class="chip actions">CreateTask</span>
                                <span class="chip actions">AssignUser</span>
                                <span class="chip actions">AddFolder</span>
                                <span class="chip actions">MoveTask</span>
                                <span class="chip actions">CopyTask</span>
                                <span class="chip actions">UpdateStatus</span>
                                <span class="chip actions">APIRequest</span>
                                <span class="chip actions">NotifySlack</span>
                            </div>
                        </div>
                        <div class="box box-stack"><span class="material-symbols-rounded">flag</span>Conditions
                            <div class="chips">
                                <span class="chip conditions">Yes/No</span>
                                <span class="chip conditions">MultiChoice</span>
                                <span class="chip conditions">Expression</span>
                                <span class="chip conditions">Threshold</span>
                                <span class="chip conditions">TimeWindow</span>
                            </div>
                        </div>
                        <div class="box box-stack"><span class="material-symbols-rounded">inventory_2</span>DTO
                            <div class="chips">
                                <span class="chip dto">NodeResult</span>
                                <span class="chip dto">NodeContext</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Runtime Instances (full row) -->
                <div class="runtime" id="runtime-area">
                    <div class="instance"><span class="material-symbols-rounded">call_split</span>Workflow A</div>
                    <div class="instance"><span class="material-symbols-rounded">call_split</span>Workflow B</div>
                    <div class="instance"><span class="material-symbols-rounded">call_split</span>Workflow C</div>
                    <div class="instance"><span class="material-symbols-rounded">call_split</span>Workflow D</div>
                </div>
            </div>
        </div>

        <h4 class="mt-5">
            <span class="material-symbols-rounded">description</span>
            Example: SOP Automation for Sales Process</h4>

        <!-- Section: Ví dụ cây & cấu trúc dự án (tree.png) + SOP mô tả -->
        <div class="tree-example">
            <div class="preview">
                <img src="../tree.jpg" alt="Automation project structure" />
            </div>
            <div class="caption">
                <div class="example-panel">
                    <!-- <h3><span class="material-symbols-rounded">route</span>Ví dụ SOP: Quy trình bán hàng</h3> -->
                    <ol>
                        <li><strong>Nhận yêu cầu</strong> (wait): Khách gửi yêu cầu/đặt vấn đề.</li>
                        <li><strong>Tạo cơ hội bán hàng</strong> (action): Khởi tạo cơ hội, liên hệ khách.</li>
                        <li><strong>Ngân sách được duyệt?</strong> (condition): Rẽ nhánh Yes/No.</li>
                        <li><strong>Lập báo giá</strong> (action): Chuẩn bị và gửi báo giá.</li>
                        <li><strong>Yêu cầu duyệt ngân sách</strong> (action): Gửi yêu cầu phê duyệt nội bộ.</li>
                        <li><strong>Ngân sách: đã duyệt</strong> (wait): Chờ sự kiện duyệt ngân sách.</li>
                        <li><strong>Khách chấp nhận báo giá?</strong> (condition): Theo dõi phản hồi khách hàng.</li>
                        <li><strong>Tạo đơn hàng</strong> (action): Khởi tạo Sales Order.</li>
                        <li><strong>Gửi nhắc nhở</strong> (action): Nhắc khách xem/duyệt báo giá.</li>
                        <li><strong>Khách phản hồi</strong> (wait): Chờ phản hồi khách hàng.</li>
                        <li><strong>Lên lịch giao hàng</strong> (action): Sắp xếp vận chuyển/giao hàng.</li>
                        <li><strong>Đã giao hàng</strong> (wait): Chờ xác nhận giao hàng hoàn tất.</li>
                        <li><strong>Bàn giao & nghiệm thu</strong> (action): Bàn giao cho khách và nghiệm thu.</li>
                        <li><strong>Gửi email hoàn tất</strong> (action): Thông báo hoàn tất quy trình.</li>
                    </ol>
                    <div class="example-note">
                        Vòng lặp: Nếu khách chưa chấp nhận báo giá → <em>Gửi nhắc nhở</em> → <em>Khách phản hồi</em> → quay lại bước <em>Khách chấp nhận báo giá?</em> cho đến khi Yes hoặc kết thúc theo chính sách.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 Modal for Tree Image -->
    <div class="modal fade" id="treeImageModal" tabindex="-1" role="dialog" aria-labelledby="treeImageLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="treeImageLabel">Cấu trúc dự án Automation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../tree.jpg" alt="Automation project structure" />
                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Trigger modal on tree image click (Bootstrap 5)
        document.addEventListener('DOMContentLoaded', function() {
            const treeImage = document.querySelector('.tree-example .preview img');
            if (treeImage) {
                treeImage.addEventListener('click', function() {
                    const modal = new bootstrap.Modal(document.getElementById('treeImageModal'));
                    modal.show();
                });
            }
        });
    </script>
</body>

</html>