<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <style>
        .slide-subtitle {
            font-size: 1.3rem;
            font-weight: 400;
            margin-top: 8px;
            color: #6b7280;
        }
        
        .slide-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 25px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .top-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }
        
        .proposal-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            padding: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .proposal-card:hover {
            border-color: #2672cd;
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(59,130,246,0.15);
        }
        
        .card-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #2672cd;
        }
        
        .card-title .material-symbols-rounded {
            font-size: 2.2rem;
        }
        
        .proposal-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .proposal-list li {
            padding: 15px 20px;
            background: #f9fafb;
            border-left: 4px solid #2672cd;
            border-radius: 10px;
            margin-bottom: 12px;
            line-height: 1.6;
            font-size: 1.1rem;
            position: relative;
            color: #4b5563;
        }
        
        .proposal-list li:before {
            content: attr(data-number);
            position: absolute;
            left: -18px;
            top: 50%;
            transform: translateY(-50%);
            width: 32px;
            height: 32px;
            background: #2672cd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.95rem;
            color: #ffffff;
        }

        .proposal-list li:last-child::before {
            background: #6b7280;
        }
        
        .commitment-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .commitment-list li {
            padding: 15px 20px;
            background: #f9fafb;
            border-left: 4px solid #2672cd;
            border-radius: 10px;
            margin-bottom: 12px;
            line-height: 1.6;
            font-size: 1.1rem;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: #4b5563;
        }
        
        .commitment-list li .material-symbols-rounded {
            color: #2672cd;
            font-size: 1.6rem;
            flex-shrink: 0;
        }
        
        .bottom-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }
        
        .shared-responsibility {
            background: #ffffff;
            border: 2px solid #2672cd;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .responsibility-text {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #4b5563;
        }
        
        .responsibility-text strong {
            color: #1f2937;
            font-weight: 600;
        }
        
        .next-steps {
            background: #ffffff;
            border: 2px solid #2672cd;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .steps-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .steps-list li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            line-height: 1.6;
            font-size: 1.05rem;
            color: #4b5563;
        }
        
        .steps-list li:before {
            content: "arrow_forward";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 12px;
            font-size: 1.5rem;
            color: #2672cd;
            line-height: 1;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">handshake</span>
                Đề xuất với BOD & Cam kết thực hiện
            </div>
            <div class="slide-subtitle">
                Trình bày định hướng - Xin ý kiến BOD - Cam kết kết quả - Bước đầu cho kế hoạch chi tiết
            </div>
        </div>
        
        <div class="slide-content">
            <div class="top-section">
                <div class="proposal-card">
                    <div class="card-title">
                        <span class="material-symbols-rounded">forum</span>
                        Đề xuất sơ bộ - Xin ý kiến BOD
                    </div>
                    <ul class="proposal-list">
                        <li data-number="1">Xin BOD <strong>đánh giá 4 định hướng</strong> phát triển (Outsourcing, SaaS, AI, Website) có phù hợp với chiến lược tổng thể của công ty hay cần điều chỉnh?</li>
                        <li data-number="2">Xin BOD <strong>góp ý về tỉ trọng phân bổ</strong> nguồn lực giữa các hướng, xem xét tính khả thi và cân đối với ưu tiên chung?</li>
                        <li data-number="3">Xin BOD <strong>hướng dẫn cơ chế phối hợp</strong> liên phòng ban để hỗ trợ các sản phẩm, mức độ cam kết và trách nhiệm từng bên?</li>
                        <li data-number="4">Xin BOD <strong>chỉ đạo phương thức quản lý</strong> nguồn lực giữa các dự án, quyền quyết định và cơ chế linh hoạt điều phối?</li>
                        <li data-number="5">Xin BOD <strong>xác định kỳ vọng và timeline</strong> cho từng hướng, thiết lập checkpoint đánh giá phù hợp với thực tế?</li>
                        <li data-number="6" style="background: #ffffff; border-left-color: #2672cd; border-width: 5px; padding: 20px 25px; font-size: 1.15rem; line-height: 1.7; font-weight: 600; margin-top: 15px; border: 2px solid #2672cd; border-left-width: 5px;">
                            <strong style="color: #2672cd; font-size: 1.2rem;">Ý kiến và định hướng khác từ phía BOD:</strong> Dựa trên năng lực và chủ quan của bộ phận, rất cần được chỉ đạo lại về các vấn đề chưa được đề cập hoặc góc nhìn khác
                        </li>
                    </ul>
                    <div style="font-size: 0.95rem; color: #4b5563; margin-top: 20px; padding: 15px 20px; background: #f9fafb; border-left: 3px solid #2672cd; border-radius: 8px; font-style: italic; line-height: 1.6;">
                        <strong style="color: #2672cd;">* Lưu ý:</strong> Các nội dung trên là đánh giá và đề xuất của bộ phận dựa trên năng lực hiện có. Rất mong nhận được sự hướng dẫn và điều chỉnh từ BOD cũng như các phòng ban.
                    </div>
                </div>
                
                <div class="proposal-card">
                    <div class="card-title">
                        <span class="material-symbols-rounded">verified</span>
                        Cam kết của bộ phận (nếu được phê duyệt)
                    </div>
                    <ul class="commitment-list">
                        <li>
                            <span class="material-symbols-rounded">summarize</span>
                            <div>Báo cáo tiến độ <strong>định kỳ</strong> theo format mà BOD và các phòng ban thống nhất (hàng tháng/quý)</div>
                        </li>
                        <li>
                            <span class="material-symbols-rounded">analytics</span>
                            <div>Đo lường bằng <strong>KPIs</strong> cụ thể, sẵn sàng điều chỉnh chỉ số theo góp ý của BOD</div>
                        </li>
                        <li>
                            <span class="material-symbols-rounded">handshake</span>
                            <div>Duy trì <strong>Outsourcing ổn định</strong>, đảm bảo dòng tiền không ảnh hưởng hoạt động công ty</div>
                        </li>
                        <li>
                            <span class="material-symbols-rounded">autorenew</span>
                            <div>Linh hoạt <strong>điều chỉnh kế hoạch</strong> theo hướng dẫn của BOD và thực tế thị trường</div>
                        </li>
                        <li>
                            <span class="material-symbols-rounded">visibility</span>
                            <div><strong>Minh bạch</strong> về tiến độ, khó khăn, rủi ro và xin ý kiến kịp thời khi cần</div>
                        </li>
                        <li>
                            <span class="material-symbols-rounded">school</span>
                            <div><strong>Học hỏi và cải thiện</strong> liên tục, chấp nhận góp ý và điều chỉnh hướng đi</div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="bottom-section">
                <div class="shared-responsibility">
                    <div class="card-title">
                        <span class="material-symbols-rounded">groups</span>
                        Trách nhiệm chung & Điều kiện thành công
                    </div>
                    <div class="responsibility-text">
                        Tất cả nội dung trình bày là <strong>đề xuất sơ bộ</strong> của bộ phận dựa trên năng lực và đánh giá chủ quan hiện tại. Chúng tôi không tự cho là đã chốt phương án tốt nhất.
                        <br><br>
                        <strong>• Mong BOD:</strong> Đánh giá toàn diện, điều chỉnh cho phù hợp chiến lược công ty, quyết định nguồn lực và ưu tiên
                        <br>
                        <strong>• Mong các phòng ban:</strong> Góp ý về tính khả thi, hỗ trợ và phối hợp theo hướng BOD quyết định
                        <br>
                        <strong>• Bộ phận cam kết:</strong> Thực hiện tốt theo hướng đã thống nhất, báo cáo minh bạch, sẵn sàng điều chỉnh
                        <br><br>
                        Thành công hay thất bại là <strong>trách nhiệm chung</strong>: định hướng đúng (BOD), thực thi tốt (bộ phận), hỗ trợ hiệu quả (liên phòng ban). Cần đánh giá toàn diện, không quy kết một bên.
                    </div>
                </div>
                
                <div class="next-steps">
                    <div class="card-title">
                        <span class="material-symbols-rounded">timeline</span>
                        Bước tiếp theo
                    </div>
                    <ul class="steps-list">
                        <li>BOD <strong>xem xét và góp ý</strong> về đề xuất, chỉ ra những điểm cần điều chỉnh</li>
                        <li>Họp chung với <strong>các phòng ban</strong> để nghe ý kiến về tính khả thi và mức độ hỗ trợ</li>
                        <li>Bộ phận <strong>điều chỉnh lại kế hoạch</strong> dựa trên feedback, trình lại phương án chi tiết</li>
                        <li>Sau khi BOD phê duyệt, xây dựng <strong>kế hoạch Q1 2026</strong> với OKRs, KPIs, budget cụ thể</li>
                        <li>Thống nhất <strong>checkpoint đánh giá</strong> và cơ chế báo cáo định kỳ</li>
                        <li>Kickoff chính thức sau khi hoàn tất <strong>thống nhất và chuẩn bị</strong></li>
                    </ul>
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
</body>
</html>
