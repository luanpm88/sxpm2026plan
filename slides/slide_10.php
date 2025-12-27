<?php require_once '../config.php'; ?>
<?php include '../includes/head.php'; ?>
    <!-- Load ECharts -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    
    <style>
        .slide-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-top: 10px;
            color: #6b7280;
        }
        
        .slide-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .allocation-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }
        
        .allocation-card {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 16px;
            padding: 20px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .allocation-card:hover {
            transform: translateY(-5px);
            border-color: #1f2937;
            box-shadow: 0 4px 12px rgba(59,130,246,0.15);
        }
        
        .allocation-card .material-symbols-rounded {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #1f2937;
        }
        
        .allocation-label {
            font-size: 1.05rem;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.3;
            color: #1f2937;
        }
        
        .allocation-percent {
            font-size: 1.9rem;
            font-weight: 700;
            color: #1f2937;
        }
        
        .card-outsourcing {
            border-color: #1f2937;
        }
        
        .card-outsourcing .material-symbols-rounded {
            color: #1f2937;
        }
        
        .card-saas {
            border-color: #1f2937;
        }
        
        .card-saas .material-symbols-rounded {
            color: #1f2937;
        }
        
        .card-ai {
            border-color: #6b7280;
        }
        
        .card-ai .material-symbols-rounded {
            color: #6b7280;
        }
        
        .card-website {
            border-color: #e5e7eb;
        }
        
        .card-website .material-symbols-rounded {
            color: #6b7280;
        }
        
        .charts-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            flex: 1;
            min-height: 0;
        }
        
        .chart-box {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            padding: 25px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .chart-header {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #1f2937;
        }
        
        .chart-header .material-symbols-rounded {
            font-size: 1.8rem;
            color: #1f2937;
        }
        
        #allocationPieChart {
            /* flex: 1; */
            min-height: 0;
        }
        
        #teamGrowthChart {
            flex: 1;
            min-height: 0;
        }
        
        .bottom-section {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 20px;
        }
        
        .timeline-compact {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .timeline-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        
        .timeline-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .timeline-period {
            font-size: 1.05rem;
            font-weight: 600;
            background: #f3f4f6;
            padding: 8px 12px;
            border-radius: 8px;
            min-width: 85px;
            text-align: center;
            flex-shrink: 0;
            color: #1f2937;
        }
        
        .timeline-info {
            flex: 1;
        }
        
        .team-size {
            font-size: 1.6rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 2px;
        }
        
        .team-note {
            font-size: 0.95rem;
            color: #6b7280;
            line-height: 1.3;
        }
        
        .warning-box {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .warning-header {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #1f2937;
        }
        
        .warning-header .material-symbols-rounded {
            font-size: 1.8rem;
            color: #fb923c;
        }
        
        .warning-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .warning-list li {
            padding: 8px 0;
            padding-left: 30px;
            position: relative;
            line-height: 1.5;
            font-size: 1.05rem;
            color: #4b5563;
            text-align: left;
        }
        
        .warning-list li:before {
            content: "priority_high";
            font-family: 'Material Symbols Rounded';
            position: absolute;
            left: 0;
            top: 8px;
            font-size: 1.4rem;
            color: #fb923c;
            line-height: 1;
        }
    </style>
</head>
<body>
<div class="slide-container">
        <div class="slide-header">
            <div class="slide-title">
                <span class="material-symbols-rounded">analytics</span>
                Phân bổ nguồn lực & Tăng trưởng đội ngũ
            </div>
            <div class="slide-subtitle">
                Chiến lược cân đối 4 hướng phát triển và kế hoạch mở rộng 2026
            </div>
        </div>
        
        <div class="slide-content">
            <div class="allocation-grid">
                <div class="allocation-card card-outsourcing">
                    <span class="material-symbols-rounded">handshake</span>
                    <div class="allocation-label">Dev Services &<br>Maintenance</div>
                    <div class="allocation-percent">40–50%</div>
                </div>
                
                <div class="allocation-card card-saas">
                    <span class="material-symbols-rounded">rocket_launch</span>
                    <div class="allocation-label">SaaS<br>HKSpace</div>
                    <div class="allocation-percent">30–40%</div>
                </div>
                
                <div class="allocation-card card-ai">
                    <span class="material-symbols-rounded">psychology</span>
                    <div class="allocation-label">AI Knowledge<br>Platform</div>
                    <div class="allocation-percent">10–15%</div>
                </div>
                
                <div class="allocation-card card-website">
                    <span class="material-symbols-rounded">language</span>
                    <div class="allocation-label">Website &<br>Others</div>
                    <div class="allocation-percent">5–10%</div>
                </div>
            </div>
            
            <div class="charts-section">
                <div class="chart-box">
                    <div class="chart-header">
                        <span class="material-symbols-rounded">pie_chart</span>
                        Tỉ trọng phân bổ nguồn lực
                    </div>
                    <div id="allocationPieChart" style="width:100%;height:300px;"></div>
                </div>
                
                <div class="chart-box">
                    <div class="chart-header">
                        <span class="material-symbols-rounded">show_chart</span>
                        Lộ trình tăng trưởng đội ngũ 2025-2027
                    </div>
                    <div id="teamGrowthChart" style="width:100%;height:300px;"></div>
                </div>
            </div>
            
            <div class="bottom-section">
                <div class="timeline-compact">
                    <div class="chart-header">
                        <span class="material-symbols-rounded">schedule</span>
                        Kế hoạch chi tiết
                    </div>
                    
                    <div class="timeline-grid">
                        <div class="timeline-item">
                            <div class="timeline-period">Q4 2025</div>
                            <div class="timeline-info">
                                <div class="team-size">7–9</div>
                                <div class="team-note">Duy trì Dev Services + MVP</div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-period">Q1–Q2<br>2026</div>
                            <div class="timeline-info">
                                <div class="team-size">12–15</div>
                                <div class="team-note">Tăng cường SaaS, AI research</div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-period">Q3–Q4<br>2026</div>
                            <div class="timeline-info">
                                <div class="team-size">18–20</div>
                                <div class="team-note">SaaS team riêng 6-8 người</div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-period">2027+</div>
                            <div class="timeline-info">
                                <div class="team-size">25+</div>
                                <div class="team-note">Scale theo doanh thu</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="warning-box">
                    <div class="warning-header">
                        <span class="material-symbols-rounded">warning</span>
                        Điểm cần lưu ý
                    </div>
                    <ul class="warning-list">
                        <li><strong>SaaS &lt; 30%</strong> → Không thể thành công</li>
                        <li><strong>Team &lt; 12</strong> → Khó cân đối</li>
                        <li><strong>Không tăng trưởng</strong> → Bỏ lỡ cơ hội</li>
                        <li><strong>Tăng quá nhanh</strong> → Rủi ro cash flow</li>
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
    
    <script>
        // Initialize Allocation Pie Chart
        const pieChartDom = document.getElementById('allocationPieChart');
        const pieChart = echarts.init(pieChartDom);
        
        const pieOption = {
            backgroundColor: 'transparent',
            tooltip: {
                trigger: 'item',
                // backgroundColor: 'rgba(0, 0, 0, 0.8)',
                // borderColor: 'rgba(255, 255, 255, 0.2)',
                // textStyle: {
                //     color: '#fff',
                //     fontSize: 14
                // },
                formatter: '{b}: <strong>{c}%</strong>'
            },
            legend: {
                orient: 'vertical',
                right: '10%',
                top: 'center',
                textStyle: {
                    // color: 'rgba(255, 255, 255, 0.9)',
                    fontSize: 13
                },
                itemGap: 15
            },
            series: [
                {
                    name: 'Phân bổ',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    center: ['35%', '50%'],
                    avoidLabelOverlap: false,
                    itemStyle: {
                        borderRadius: 8,
                        // borderColor: 'rgba(255, 255, 255, 0.2)',
                        borderWidth: 2
                    },
                    label: {
                        show: true,
                        position: 'inside',
                        formatter: '{c}%',
                        fontSize: 14,
                        fontWeight: 'bold',
                        color: '#fff'
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: 16,
                            fontWeight: 'bold'
                        },
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            // shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    },
                    data: [
                        { 
                            value: 45, 
                            name: 'Dev Services & Maintenance',
                            itemStyle: { color: '#4ade80' }
                        },
                        { 
                            value: 35, 
                            name: 'SaaS HKSpace',
                            itemStyle: { color: '#60a5fa' }
                        },
                        { 
                            value: 12, 
                            name: 'AI Knowledge Platform',
                            itemStyle: { color: '#c084fc' }
                        },
                        { 
                            value: 8, 
                            name: 'Website & Others',
                            itemStyle: { color: '#fb923c' }
                        }
                    ]
                }
            ]
        };
        
        pieChart.setOption(pieOption);
        
        // Initialize Team Growth Line Chart
        const lineChartDom = document.getElementById('teamGrowthChart');
        const lineChart = echarts.init(lineChartDom);
        
        const lineOption = {
            backgroundColor: 'transparent',
            tooltip: {
                trigger: 'axis',
                // backgroundColor: 'rgba(0, 0, 0, 0.8)',
                // borderColor: 'rgba(255, 255, 255, 0.2)',
                // textStyle: {
                //     color: '#fff',
                //     fontSize: 14
                // }
            },
            grid: {
                left: '12%',
                right: '8%',
                top: '12%',
                bottom: '12%'
            },
            xAxis: {
                type: 'category',
                data: ['Q4 2025', 'Q1 2026', 'Q2 2026', 'Q3 2026', 'Q4 2026', '2027'],
                axisLine: {
                    lineStyle: {
                        // color: 'rgba(255, 255, 255, 0.3)'
                    }
                },
                axisLabel: {
                    // color: 'rgba(255, 255, 255, 0.8)',
                    fontSize: 12
                }
            },
            yAxis: {
                type: 'value',
                name: 'Số người',
                nameTextStyle: {
                    // color: 'rgba(255, 255, 255, 0.8)',
                    fontSize: 13
                },
                min: 0,
                max: 30,
                interval: 5,
                axisLine: {
                    lineStyle: {
                        // color: 'rgba(255, 255, 255, 0.3)'
                    }
                },
                axisLabel: {
                    // color: 'rgba(255, 255, 255, 0.8)',
                    fontSize: 12
                },
                splitLine: {
                    lineStyle: {
                        // color: 'rgba(255, 255, 255, 0.1)'
                    }
                }
            },
            series: [
                {
                    name: 'Số lượng team',
                    type: 'line',
                    data: [8, 12, 15, 18, 20, 25],
                    smooth: true,
                    lineStyle: {
                        width: 3,
                        color: {
                            type: 'linear',
                            x: 0,
                            y: 0,
                            x2: 1,
                            y2: 0,
                            colorStops: [
                                { offset: 0, color: '#4ade80' },
                                { offset: 0.5, color: '#60a5fa' },
                                { offset: 1, color: '#c084fc' }
                            ]
                        }
                    },
                    itemStyle: {
                        // color: '#fbbf24',
                        borderWidth: 2,
                        // borderColor: '#fff'
                    },
                    areaStyle: {
                        color: {
                            type: 'linear',
                            x: 0,
                            y: 0,
                            x2: 0,
                            y2: 1,
                            colorStops: [
                                { offset: 0, color: 'rgba(96, 165, 250, 0.3)' },
                                { offset: 1, color: 'rgba(96, 165, 250, 0.05)' }
                            ]
                        }
                    },
                    emphasis: {
                        focus: 'series',
                        itemStyle: {
                            color: '#fbbf24',
                            borderWidth: 3,
                            shadowBlur: 10,
                            shadowColor: 'rgba(251, 191, 36, 0.5)'
                        }
                    },
                    label: {
                        show: true,
                        position: 'top',
                        color: '#fbbf24',
                        fontSize: 14,
                        fontWeight: 'bold',
                        formatter: '{c}'
                    }
                }
            ]
        };
        
        lineChart.setOption(lineOption);
        
        // Responsive charts
        window.addEventListener('resize', function() {
            pieChart.resize();
            lineChart.resize();
        });
    </script>
</body>
</html>
