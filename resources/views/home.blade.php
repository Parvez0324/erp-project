@extends('backEnd.master')

@section('mainContent')

<div class="kan-dashboard-container">

    <!-- 1. TOP BAR (GREETING + QUICK ACTIONS + FILTERS) -->
    <div class="kan-top-bar">
        <div class="kan-greeting-row">
            <div class="kan-greeting-text">
                <h1 class="kan-greeting-title">Good morning, Imran</h1>
                <p class="kan-greeting-sub">Here's your business snapshot for November 2026</p>
            </div>
            <div class="kan-quick-actions">
                <button type="button" class="kan-btn-primary">
                    <i class="bi bi-plus-lg"></i> Create Invoice <i class="bi bi-chevron-down kan-btn-arrow"></i>
                </button>
                <button type="button" class="kan-btn-outline">
                    <i class="bi bi-journal-plus"></i> New Sales Order
                </button>
                <button type="button" class="kan-btn-outline">
                    <i class="bi bi-receipt"></i> Record Expense
                </button>
                <button type="button" class="kan-btn-outline">
                    <i class="bi bi-cart-plus"></i> Add Purchase Order
                </button>
            </div>
        </div>

        <div class="kan-filter-row">
            <div class="kan-filter-group">
                <button type="button" class="kan-filter-btn">
                    <i class="bi bi-calendar3"></i> This Month <i class="bi bi-chevron-down"></i>
                </button>
                <button type="button" class="kan-filter-btn">
                    <i class="bi bi-gear"></i> Customize Dashboard
                </button>
            </div>
        </div>
    </div>

    <!-- 2. 5 KPI CARDS ROW (Exact Match to Reference Design) -->
    <div class="kan-kpi-grid">
        <!-- Card 1: Net Revenue -->
        <div class="kan-kpi-card">
            <div class="kan-kpi-body">
                <div class="kan-kpi-icon-wrap bg-blue">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/><path d="M19 5v4h-4"/></svg>
                </div>
                <div class="kan-kpi-details">
                    <span class="kan-kpi-label">Net Revenue</span>
                    <div class="kan-kpi-value">₹48.6L</div>
                    <div class="kan-kpi-trend text-green">
                        <i class="bi bi-arrow-up-short"></i> 12.8%
                    </div>
                </div>
            </div>
            <div class="kan-sparkline">
                <svg viewBox="0 0 180 36" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="gradBlue" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.38"/>
                            <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M0,28 L14,27 L24,24 L36,25 L48,21 L60,23 L72,18 L84,20 L98,15 L112,17 L126,13 L140,15 L154,10 L168,12 L180,7 L180,36 L0,36 Z" fill="url(#gradBlue)"/>
                    <polyline points="0,28 14,27 24,24 36,25 48,21 60,23 72,18 84,20 98,15 112,17 126,13 140,15 154,10 168,12 180,7" fill="none" stroke="#3B82F6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <!-- Card 2: Gross Profit -->
        <div class="kan-kpi-card">
            <div class="kan-kpi-body">
                <div class="kan-kpi-icon-wrap bg-green">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2H3v3h1l1.5 12A2 2 0 0 0 7.5 23h9a2 2 0 0 0 2-1.9L20 9h1V6h-5zM10 4h4v2h-4V4zm2 13.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
                </div>
                <div class="kan-kpi-details">
                    <span class="kan-kpi-label">Gross Profit</span>
                    <div class="kan-kpi-value">₹14.2L</div>
                    <div class="kan-kpi-trend text-green">
                        <i class="bi bi-arrow-up-short"></i> 9.4%
                    </div>
                </div>
            </div>
            <div class="kan-sparkline">
                <svg viewBox="0 0 180 36" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="gradGreen" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#10B981" stop-opacity="0.38"/>
                            <stop offset="100%" stop-color="#10B981" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M0,29 L16,28 L28,23 L40,25 L52,19 L64,22 L76,16 L88,21 L102,15 L116,19 L130,13 L144,15 L158,9 L170,11 L180,7 L180,36 L0,36 Z" fill="url(#gradGreen)"/>
                    <polyline points="0,29 16,28 28,23 40,25 52,19 64,22 76,16 88,21 102,15 116,19 130,13 144,15 158,9 170,11 180,7" fill="none" stroke="#10B981" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <!-- Card 3: Total Orders -->
        <div class="kan-kpi-card">
            <div class="kan-kpi-body">
                <div class="kan-kpi-icon-wrap bg-purple">
                    <i class="bi bi-cart-fill"></i>
                </div>
                <div class="kan-kpi-details">
                    <span class="kan-kpi-label">Total Orders</span>
                    <div class="kan-kpi-value">1,284</div>
                    <div class="kan-kpi-trend text-green">
                        <i class="bi bi-arrow-up-short"></i> 8.2%
                    </div>
                </div>
            </div>
            <div class="kan-sparkline">
                <svg viewBox="0 0 180 36" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="gradPurple" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#8B5CF6" stop-opacity="0.38"/>
                            <stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M0,28 L15,27 L28,28 L42,23 L56,25 L70,19 L84,22 L98,16 L112,18 L126,13 L140,17 L154,11 L168,14 L180,8 L180,36 L0,36 Z" fill="url(#gradPurple)"/>
                    <polyline points="0,28 15,27 28,28 42,23 56,25 70,19 84,22 98,16 112,18 126,13 140,17 154,11 168,14 180,8" fill="none" stroke="#8B5CF6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <!-- Card 4: Cash & Bank -->
        <div class="kan-kpi-card">
            <div class="kan-kpi-body">
                <div class="kan-kpi-icon-wrap bg-teal">
                    <i class="bi bi-bank"></i>
                </div>
                <div class="kan-kpi-details">
                    <span class="kan-kpi-label">Cash & Bank</span>
                    <div class="kan-kpi-value">₹22.8L</div>
                    <div class="kan-kpi-trend text-green">
                        <i class="bi bi-arrow-up-short"></i> 4.1%
                    </div>
                </div>
            </div>
            <div class="kan-sparkline">
                <svg viewBox="0 0 180 36" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="gradTeal" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#0D9488" stop-opacity="0.38"/>
                            <stop offset="100%" stop-color="#0D9488" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M0,30 L14,29 L28,27 L42,26 L56,22 L70,23 L84,18 L98,20 L112,16 L126,17 L140,11 L154,13 L168,7 L180,8 L180,36 L0,36 Z" fill="url(#gradTeal)"/>
                    <polyline points="0,30 14,29 28,27 42,26 56,22 70,23 84,18 98,20 112,16 126,17 140,11 154,13 168,7 180,8" fill="none" stroke="#0D9488" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <!-- Card 5: Receivables -->
        <div class="kan-kpi-card">
            <div class="kan-kpi-body">
                <div class="kan-kpi-icon-wrap bg-orange">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17l-5-5a3.5 3.5 0 0 1 5-5l2 2 4-4a3.5 3.5 0 0 1 5 5l-5 5"/><path d="M7 13l2 2"/><path d="M17 11l2 2"/></svg>
                </div>
                <div class="kan-kpi-details">
                    <span class="kan-kpi-label">Receivables</span>
                    <div class="kan-kpi-value">₹8.4L</div>
                    <div class="kan-kpi-trend text-red">
                        <i class="bi bi-triangle-fill kan-trend-triangle"></i> Overdue: ₹2.1L
                    </div>
                </div>
            </div>
            <div class="kan-sparkline">
                <svg viewBox="0 0 180 36" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="gradOrange" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#F97316" stop-opacity="0.38"/>
                            <stop offset="100%" stop-color="#F97316" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M0,30 L15,29 L28,27 L42,26 L56,21 L70,23 L84,20 L98,17 L112,19 L126,15 L140,17 L154,11 L168,14 L180,7 L180,36 L0,36 Z" fill="url(#gradOrange)"/>
                    <polyline points="0,30 15,29 28,27 42,26 56,21 70,23 84,20 98,17 112,19 126,15 140,17 154,11 168,14 180,7" fill="none" stroke="#F97316" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- 4. MIDDLE ROW: REVENUE VS EXPENSES & ACTION REQUIRED (170PX) -->
    <div class="kan-middle-grid">
        <!-- Revenue vs Expenses Chart Card -->
        <div class="kan-card kan-chart-card">
            <div class="kan-card-header">
                <div class="kan-card-title-wrap">
                    <span class="kan-card-icon-blue"><i class="bi bi-bar-chart-fill"></i></span>
                    <h3 class="kan-card-title">Revenue vs Expenses</h3>
                </div>
                <div class="kan-chart-legend">
                    <span class="kan-legend-item"><span class="kan-dot bg-blue-dot"></span> Revenue</span>
                    <span class="kan-legend-item"><span class="kan-dot bg-orange-dot"></span> Expenses</span>
                </div>
            </div>
            <div class="kan-chart-body">
                <!-- SVG Line Chart with Dynamic Crosshair Hover -->
                <div class="kan-chart-svg-wrap" id="kanChartContainer">
                    <svg viewBox="0 0 650 140" class="kan-line-chart" id="kanChartSvg" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="revGrad" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.32"/>
                                <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.0"/>
                            </linearGradient>
                            <linearGradient id="expGrad" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#FB923C" stop-opacity="0.32"/>
                                <stop offset="100%" stop-color="#FB923C" stop-opacity="0.0"/>
                            </linearGradient>
                        </defs>

                        <!-- Horizontal Grid Lines -->
                        <line x1="45" y1="20" x2="635" y2="20" stroke="#F1F5F9" stroke-width="1" stroke-dasharray="3 3"/>
                        <text x="38" y="24" font-size="10" fill="#94A3B8" font-weight="500" text-anchor="end">₹ 60L</text>

                        <line x1="45" y1="50" x2="635" y2="50" stroke="#F1F5F9" stroke-width="1" stroke-dasharray="3 3"/>
                        <text x="38" y="54" font-size="10" fill="#94A3B8" font-weight="500" text-anchor="end">₹ 40L</text>

                        <line x1="45" y1="80" x2="635" y2="80" stroke="#F1F5F9" stroke-width="1" stroke-dasharray="3 3"/>
                        <text x="38" y="84" font-size="10" fill="#94A3B8" font-weight="500" text-anchor="end">₹ 20L</text>

                        <line x1="45" y1="110" x2="635" y2="110" stroke="#F1F5F9" stroke-width="1"/>
                        <text x="38" y="114" font-size="10" fill="#94A3B8" font-weight="500" text-anchor="end">₹ 0</text>

                        <!-- Subtle Vertical Axis Line -->
                        <line x1="45" y1="18" x2="45" y2="110" stroke="#E2E8F0" stroke-width="1"/>
                        <line x1="42" y1="20" x2="45" y2="20" stroke="#CBD5E1" stroke-width="1"/>
                        <line x1="42" y1="50" x2="45" y2="50" stroke="#CBD5E1" stroke-width="1"/>
                        <line x1="42" y1="80" x2="45" y2="80" stroke="#CBD5E1" stroke-width="1"/>
                        <line x1="42" y1="110" x2="45" y2="110" stroke="#CBD5E1" stroke-width="1"/>

                        <!-- Vertical Crosshair Line (Follows Mouse Hover / Hidden by default) -->
                        <line id="chartCrosshair" x1="604" y1="20" x2="604" y2="110" stroke="#CBD5E1" stroke-width="1.2" stroke-dasharray="3 3" opacity="0"/>

                        <!-- Revenue Area & Path (Blue) -->
                        <path d="M55,67 L116,59 L177,58 L238,52 L299,52 L360,49 L421,46 L482,52 L543,50 L604,37 L604,110 L55,110 Z" fill="url(#revGrad)"/>
                        <polyline points="55,67 116,59 177,58 238,52 299,52 360,49 421,46 482,52 543,50 604,37" fill="none" stroke="#2563EB" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>

                        <!-- Expenses Area & Path (Orange) -->
                        <path d="M55,86 L116,83 L177,82 L238,78 L299,75 L360,72 L421,70 L482,69 L543,72 L604,58 L604,110 L55,110 Z" fill="url(#expGrad)"/>
                        <polyline points="55,86 116,83 177,82 238,78 299,75 360,72 421,70 482,69 543,72 604,58" fill="none" stroke="#F97316" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>

                        <!-- Interactive Point Circles -->
                        <!-- Jan -->
                        <circle cx="55" cy="67" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="55" cy="86" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Feb -->
                        <circle cx="116" cy="59" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="116" cy="83" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Mar -->
                        <circle cx="177" cy="58" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="177" cy="82" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Apr -->
                        <circle cx="238" cy="52" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="238" cy="78" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- May -->
                        <circle cx="299" cy="52" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="299" cy="75" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Jun -->
                        <circle cx="360" cy="49" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="360" cy="72" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Jul -->
                        <circle cx="421" cy="46" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="421" cy="70" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Sep -->
                        <circle cx="482" cy="52" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="482" cy="69" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Oct -->
                        <circle cx="543" cy="50" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="543" cy="72" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Nov -->
                        <circle cx="604" cy="37" r="3.2" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.8" class="chart-dot dot-rev"/>
                        <circle cx="604" cy="58" r="3.2" fill="#FFFFFF" stroke="#F97316" stroke-width="1.8" class="chart-dot dot-exp"/>

                        <!-- Active Highlight Halo Rings (Hidden by default, shown on hover) -->
                        <circle id="haloRev" cx="604" cy="37" r="7.5" fill="#2563EB" opacity="0"/>
                        <circle id="haloExp" cx="604" cy="58" r="7.5" fill="#F97316" opacity="0"/>

                        <!-- X-Axis Month Labels -->
                        <text x="55" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Jan</text>
                        <text x="116" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Feb</text>
                        <text x="177" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Mar</text>
                        <text x="238" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Apr</text>
                        <text x="299" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">May</text>
                        <text x="360" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Jun</text>
                        <text x="421" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Jul</text>
                        <text x="482" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Sep</text>
                        <text x="543" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Oct</text>
                        <text x="604" y="126" font-size="10.5" fill="#64748B" font-weight="500" text-anchor="middle">Nov</text>
                    </svg>

                    <!-- Interactive Tooltip (Pops up dynamically on hover) -->
                    <div class="kan-chart-tooltip" id="kanDynamicTooltip" style="display: none; opacity: 0; top: 8px; right: 45px; left: auto;">
                        <div class="kan-tt-date" id="tooltipDate">Nov 2026</div>
                        <div class="kan-tt-row"><span class="kan-dot bg-blue-dot"></span> <span class="kan-tt-name">Revenue</span> <strong id="tooltipRev">₹48.6L</strong></div>
                        <div class="kan-tt-row"><span class="kan-dot bg-orange-dot"></span> <span class="kan-tt-name">Expenses</span> <strong id="tooltipExp">₹34.4L</strong></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Required Card -->
        <div class="kan-card kan-action-card">
            <div class="kan-card-header">
                <div class="kan-card-title-wrap">
                    <span class="kan-action-bolt">⚡</span>
                    <h3 class="kan-card-title">Action Required</h3>
                </div>
                <a href="javascript:void(0)" class="kan-card-link">View All &rarr;</a>
            </div>
            <div class="kan-action-list">
                <!-- Item 1: Invoices Overdue -->
                <div class="kan-action-item">
                    <div class="kan-action-left-group">
                        <div class="kan-action-icon-circle bg-red-soft">
                            <i class="bi bi-file-earmark-text text-red"></i>
                        </div>
                        <span class="kan-action-num-badge badge-red">12</span>
                    </div>
                    <div class="kan-action-text">Invoices Overdue</div>
                    <button type="button" class="kan-action-btn">View</button>
                </div>

                <!-- Item 2: Purchase Orders Awaiting Approval -->
                <div class="kan-action-item">
                    <div class="kan-action-left-group">
                        <div class="kan-action-icon-circle bg-blue-soft">
                            <i class="bi bi-check2-circle text-blue"></i>
                        </div>
                        <span class="kan-action-num-badge badge-blue">8</span>
                    </div>
                    <div class="kan-action-text">Purchase Orders Awaiting Approval</div>
                    <button type="button" class="kan-action-btn">View</button>
                </div>

                <!-- Item 3: Items Below Reorder Level -->
                <div class="kan-action-item">
                    <div class="kan-action-left-group">
                        <div class="kan-action-icon-circle bg-yellow-soft">
                            <i class="bi bi-exclamation-triangle-fill text-yellow"></i>
                        </div>
                        <span class="kan-action-num-badge badge-yellow">6</span>
                    </div>
                    <div class="kan-action-text">Items Below Reorder Level</div>
                    <button type="button" class="kan-action-btn">View</button>
                </div>

                <!-- Item 4: Bank Reconciliations Pending -->
                <div class="kan-action-item">
                    <div class="kan-action-left-group">
                        <div class="kan-action-icon-circle bg-green-soft">
                            <i class="bi bi-bank text-green"></i>
                        </div>
                        <span class="kan-action-num-badge badge-green">3</span>
                    </div>
                    <div class="kan-action-text">Bank Reconciliations Pending</div>
                    <button type="button" class="kan-action-btn">View</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. BOTTOM ROW: SALES PERFORMANCE, INVENTORY SNAPSHOT, RECENT TRANSACTIONS -->
    <div class="kan-bottom-grid">
        <!-- Card 1: Sales Performance (Exact Large Donut Matching Reference) -->
        <div class="kan-card kan-sales-card">
            <div class="kan-card-header">
                <div class="kan-card-title-wrap">
                    <span class="kan-card-icon-blue">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3v18h18"/>
                            <path d="M7 15l4.5-5 4 4 5.5-7"/>
                            <path d="M17 7h4v4"/>
                        </svg>
                    </span>
                    <h3 class="kan-card-title">Sales Performance</h3>
                </div>
                <button type="button" class="kan-pill-btn">
                    By Sales Channel <i class="bi bi-chevron-down kan-pill-arrow"></i>
                </button>
            </div>
            <div class="kan-sales-body">
                <!-- Donut Chart -->
                <div class="kan-donut-container">
                    <svg viewBox="0 0 100 100" class="kan-donut-svg">
                        <circle cx="50" cy="50" r="38" fill="transparent" stroke="#F1F5F9" stroke-width="13"/>
                        <!-- Blue: Online 42% (Circumference = 238.76, 42% = 100.28) -->
                        <circle cx="50" cy="50" r="38" fill="transparent" stroke="#2563EB" stroke-width="13"
                                stroke-dasharray="100.28 238.76" stroke-dashoffset="0" stroke-linecap="round"
                                class="donut-segment" data-label="Online" data-pct="42%" data-val="₹20.4L"/>
                        <!-- Green: Retail 35% (35% = 83.57) -->
                        <circle cx="50" cy="50" r="38" fill="transparent" stroke="#10B981" stroke-width="13"
                                stroke-dasharray="83.57 238.76" stroke-dashoffset="-103" stroke-linecap="round"
                                class="donut-segment" data-label="Retail" data-pct="35%" data-val="₹17.0L"/>
                        <!-- Purple: Wholesale 23% (23% = 54.91) -->
                        <circle cx="50" cy="50" r="38" fill="transparent" stroke="#8B5CF6" stroke-width="13"
                                stroke-dasharray="54.91 238.76" stroke-dashoffset="-189" stroke-linecap="round"
                                class="donut-segment" data-label="Wholesale" data-pct="23%" data-val="₹11.2L"/>
                    </svg>
                    <div class="kan-donut-center">
                        <span class="kan-donut-amount">₹48.6L</span>
                        <span class="kan-donut-sub">Total Sales</span>
                    </div>
                </div>

                <!-- Donut Legend -->
                <div class="kan-donut-legend">
                    <div class="kan-donut-legend-row" data-index="0">
                        <div class="kan-legend-label"><span class="kan-dot bg-blue-dot"></span> Online</div>
                        <span class="kan-legend-val">42%</span>
                    </div>
                    <div class="kan-donut-legend-row" data-index="1">
                        <div class="kan-legend-label"><span class="kan-dot bg-green-dot"></span> Retail</div>
                        <span class="kan-legend-val">35%</span>
                    </div>
                    <div class="kan-donut-legend-row" data-index="2">
                        <div class="kan-legend-label"><span class="kan-dot bg-purple-dot"></span> Wholesale</div>
                        <span class="kan-legend-val">23%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2: Inventory Snapshot (Exact Match: Top Stats + Mint Track Gauge + Isometric Warehouse Graphic) -->
        <div class="kan-card kan-inventory-card">
            <div class="kan-card-header">
                <div class="kan-card-title-wrap">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none" class="kan-inv-title-icon">
                        <path d="M10 2L17.5 6.33V15L10 19.33L2.5 15V6.33L10 2Z" stroke="#2563EB" stroke-width="2.2" stroke-linejoin="round"/>
                        <path d="M10 2V19.33" stroke="#2563EB" stroke-width="2.2"/>
                        <path d="M10 10.67L17.5 6.33" stroke="#2563EB" stroke-width="2.2"/>
                        <path d="M10 10.67L2.5 6.33" stroke="#2563EB" stroke-width="2.2"/>
                    </svg>
                    <h3 class="kan-card-title">Inventory Snapshot</h3>
                </div>
            </div>
            <div class="kan-inventory-body">
                <!-- Top: Metric Stats with Vertical Divider -->
                <div class="kan-inventory-stats">
                    <div class="kan-inv-stat">
                        <div class="kan-inv-val">₹31.5L</div>
                        <div class="kan-inv-label">Stock Value</div>
                    </div>
                    <div class="kan-inv-divider"></div>
                    <div class="kan-inv-stat">
                        <div class="kan-inv-val text-amber">24</div>
                        <div class="kan-inv-label">Low Stock SKUs</div>
                    </div>
                </div>

                <!-- Subtle Horizontal Divider Line matching reference -->
                <div class="kan-inv-divider-h"></div>

                <!-- Bottom: 91% Fulfilment Rate Gauge & Isometric Warehouse Card -->
                <div class="kan-inventory-bottom">
                    <div class="kan-gauge-group">
                        <div class="kan-gauge-wrap">
                            <svg viewBox="0 0 46 46" class="kan-gauge-svg">
                                <!-- Mint pastel track matching reference image -->
                                <circle cx="23" cy="23" r="18" fill="none" stroke="#D1FAE5" stroke-width="4.5"/>
                                <!-- Vibrant emerald green active progress -->
                                <circle cx="23" cy="23" r="18" fill="none" stroke="#00C48C" stroke-width="4.5"
                                        stroke-dasharray="103 113.1" stroke-linecap="round" transform="rotate(-90 23 23)"/>
                            </svg>
                            <span class="kan-gauge-text">91%</span>
                        </div>
                        <div class="kan-gauge-desc">
                            <strong>Fulfilment Rate</strong>
                            <span>(On Time)</span>
                        </div>
                    </div>

                    <!-- Soft Blue Isometric 3D Warehouse & Parcels Illustration matching reference crop -->
                    <div class="kan-warehouse-card">
                        <svg width="78" height="46" viewBox="0 0 78 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Warehouse Roof & Building -->
                            <polygon points="56,5 38,13 70,13" fill="#93C5FD"/>
                            <polygon points="56,5 68,2 78,8 70,13" fill="#70A6FF"/>
                            <polygon points="38,13 70,13 70,39 38,39" fill="#DBEAFE"/>
                            <polygon points="70,13 78,8 78,33 70,39" fill="#BFDBFE"/>
                            <!-- Bay Rollup Entrance Door -->
                            <polygon points="45,19 63,19 63,39 45,39" fill="#93C5FD"/>
                            <line x1="45" y1="24" x2="63" y2="24" stroke="#60A5FA" stroke-width="0.8"/>
                            <line x1="45" y1="29" x2="63" y2="29" stroke="#60A5FA" stroke-width="0.8"/>
                            <line x1="45" y1="34" x2="63" y2="34" stroke="#60A5FA" stroke-width="0.8"/>
                            <!-- Small vent circle -->
                            <circle cx="56" cy="9.5" r="1.5" fill="#2563EB" opacity="0.6"/>

                            <!-- Stacked Parcels in Foreground matching reference -->
                            <!-- Back Parcel Box -->
                            <polygon points="26,20 35,17 44,20 35,23" fill="#BFDBFE"/>
                            <polygon points="26,20 35,23 35,30 26,27" fill="#93C5FD"/>
                            <polygon points="35,23 44,20 44,27 35,30" fill="#60A5FA"/>

                            <!-- Left Medium Box (Light Blue with Flap Line) -->
                            <polygon points="18,27 30,23 42,27 30,31" fill="#93C5FD"/>
                            <polygon points="18,27 30,31 30,41 18,37" fill="#60A5FA"/>
                            <polygon points="30,31 42,27 42,37 30,41" fill="#3B82F6"/>
                            <line x1="24" y1="29" x2="36" y2="29" stroke="#BFDBFE" stroke-width="0.8"/>

                            <!-- Right Large Box (Vibrant Blue with White Shipping Label) -->
                            <polygon points="38,24 52,20 66,24 52,28" fill="#60A5FA"/>
                            <polygon points="38,24 52,28 52,43 38,39" fill="#3B82F6"/>
                            <polygon points="52,28 66,24 66,39 52,43" fill="#2563EB"/>
                            <!-- White Shipping Label -->
                            <polygon points="56,28 62,26 62,32 56,34" fill="#FFFFFF"/>
                            <line x1="45" y1="26" x2="59" y2="26" stroke="#93C5FD" stroke-width="0.8"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Recent Transactions (Spacious Rows, Clean View, Exact Match) -->
        <div class="kan-card kan-transactions-card">
            <div class="kan-card-header">
                <div class="kan-card-title-wrap">
                    <span class="kan-card-icon-blue">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                    </span>
                    <h3 class="kan-card-title">Recent Transactions</h3>
                </div>
                <a href="javascript:void(0)" class="kan-card-link">View All &rarr;</a>
            </div>
            <div class="kan-table-responsive">
                <table class="kan-table">
                    <thead>
                        <tr>
                            <th class="nowrap-col">Date</th>
                            <th class="nowrap-col">Party</th>
                            <th class="nowrap-col">Document No.</th>
                            <th class="nowrap-col">Amount</th>
                            <th class="nowrap-col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-muted nowrap-col">30 Nov 2026</td>
                            <td class="font-medium text-dark nowrap-col">Reliance Traders</td>
                            <td class="text-muted nowrap-col">SO-1024</td>
                            <td class="font-semibold text-dark nowrap-col">₹1,25,000</td>
                            <td class="nowrap-col"><span class="kan-status-pill status-paid">Paid</span></td>
                        </tr>
                        <tr>
                            <td class="text-muted nowrap-col">29 Nov 2026</td>
                            <td class="font-medium text-dark nowrap-col">ABC Enterprises</td>
                            <td class="text-muted nowrap-col">PI-2048</td>
                            <td class="font-semibold text-dark nowrap-col">₹85,000</td>
                            <td class="nowrap-col"><span class="kan-status-pill status-pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="text-muted nowrap-col">28 Nov 2026</td>
                            <td class="font-medium text-dark nowrap-col">Global Retail Ltd</td>
                            <td class="text-muted nowrap-col">SI-1776</td>
                            <td class="font-semibold text-dark nowrap-col">₹2,10,000</td>
                            <td class="nowrap-col"><span class="kan-status-pill status-paid">Paid</span></td>
                        </tr>
                        <tr>
                            <td class="text-muted nowrap-col">27 Nov 2026</td>
                            <td class="font-medium text-dark nowrap-col">Metro Supplies</td>
                            <td class="text-muted nowrap-col">PO-1132</td>
                            <td class="font-semibold text-dark nowrap-col">₹75,000</td>
                            <td class="nowrap-col"><span class="kan-status-pill status-overdue">Overdue</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- High-Precision Interactive Chart Hover Engine -->
<script>
(function() {
    var chartData = [
        { month: 'Jan 2026', rev: '₹29.0L', exp: '₹16.0L', x: 55, revY: 67, expY: 86 },
        { month: 'Feb 2026', rev: '₹34.0L', exp: '₹18.0L', x: 116, revY: 59, expY: 83 },
        { month: 'Mar 2026', rev: '₹35.0L', exp: '₹19.0L', x: 177, revY: 58, expY: 82 },
        { month: 'Apr 2026', rev: '₹38.5L', exp: '₹22.0L', x: 238, revY: 52, expY: 78 },
        { month: 'May 2026', rev: '₹38.5L', exp: '₹24.0L', x: 299, revY: 52, expY: 75 },
        { month: 'Jun 2026', rev: '₹41.0L', exp: '₹26.0L', x: 360, revY: 49, expY: 72 },
        { month: 'Jul 2026', rev: '₹43.0L', exp: '₹27.0L', x: 421, revY: 46, expY: 70 },
        { month: 'Sep 2026', rev: '₹38.5L', exp: '₹28.0L', x: 482, revY: 52, expY: 69 },
        { month: 'Oct 2026', rev: '₹40.0L', exp: '₹26.0L', x: 543, revY: 50, expY: 72 },
        { month: 'Nov 2026', rev: '₹48.6L', exp: '₹34.4L', x: 604, revY: 37, expY: 58 }
    ];

    function setupChartHover() {
        var container = document.getElementById('kanChartContainer');
        var tooltip = document.getElementById('kanDynamicTooltip');
        var crosshair = document.getElementById('chartCrosshair');
        var haloRev = document.getElementById('haloRev');
        var haloExp = document.getElementById('haloExp');
        var ttDate = document.getElementById('tooltipDate');
        var ttRev = document.getElementById('tooltipRev');
        var ttExp = document.getElementById('tooltipExp');

        if (!container || !tooltip) return;

        // Tooltip, crosshair and halos are hidden on initial load; only show on hover
        tooltip.style.display = 'none';
        tooltip.style.opacity = '0';
        if (crosshair) crosshair.setAttribute('opacity', '0');
        if (haloRev) haloRev.setAttribute('opacity', '0');
        if (haloExp) haloExp.setAttribute('opacity', '0');

        container.addEventListener('mousemove', function(e) {
            var rect = container.getBoundingClientRect();
            var mouseX = e.clientX - rect.left;
            var svgX = (mouseX / rect.width) * 650;

            // Find closest month
            var closest = chartData[0];
            var minDiff = Math.abs(svgX - chartData[0].x);
            for (var i = 1; i < chartData.length; i++) {
                var diff = Math.abs(svgX - chartData[i].x);
                if (diff < minDiff) {
                    minDiff = diff;
                    closest = chartData[i];
                }
            }

            // Update crosshair & halos
            if (crosshair) {
                crosshair.setAttribute('x1', closest.x);
                crosshair.setAttribute('x2', closest.x);
                crosshair.setAttribute('opacity', '0.8');
            }

            if (haloRev) {
                haloRev.setAttribute('cx', closest.x);
                haloRev.setAttribute('cy', closest.revY);
                haloRev.setAttribute('opacity', '0.35');
            }
            if (haloExp) {
                haloExp.setAttribute('cx', closest.x);
                haloExp.setAttribute('cy', closest.expY);
                haloExp.setAttribute('opacity', '0.35');
            }

            // Update tooltip content
            if (ttDate) ttDate.textContent = closest.month;
            if (ttRev) ttRev.textContent = closest.rev;
            if (ttExp) ttExp.textContent = closest.exp;

            // Position tooltip dynamically
            var leftPct = (closest.x / 650) * 100;
            if (leftPct > 65) {
                tooltip.style.left = 'auto';
                tooltip.style.right = (100 - leftPct + 3) + '%';
            } else {
                tooltip.style.right = 'auto';
                tooltip.style.left = (leftPct + 3) + '%';
            }
            tooltip.style.top = Math.max(8, closest.revY - 35) + 'px';

            // Show tooltip smoothly on hover
            tooltip.style.display = 'block';
            tooltip.style.opacity = '1';
        });

        container.addEventListener('mouseleave', function() {
            // Hide tooltip, crosshair and halos when mouse leaves
            tooltip.style.display = 'none';
            tooltip.style.opacity = '0';
            if (crosshair) crosshair.setAttribute('opacity', '0');
            if (haloRev) haloRev.setAttribute('opacity', '0');
            if (haloExp) haloExp.setAttribute('opacity', '0');
        });
    }

    // Setup interactive hover for Sales Performance Donut Chart
    function setupDonutHover() {
        var segments = document.querySelectorAll('.donut-segment');
        var legendRows = document.querySelectorAll('.kan-donut-legend-row');
        var centerAmount = document.querySelector('.kan-donut-amount');
        var centerSub = document.querySelector('.kan-donut-sub');

        var originalAmount = centerAmount ? centerAmount.textContent : '₹48.6L';
        var originalSub = centerSub ? centerSub.textContent : 'Total Sales';

        var donutData = [
            { name: 'Online', pct: '42%', val: '₹20.4L' },
            { name: 'Retail', pct: '35%', val: '₹17.0L' },
            { name: 'Wholesale', pct: '23%', val: '₹11.2L' }
        ];

        function highlightSegment(idx) {
            segments.forEach(function(s, i) {
                if (i === idx) {
                    s.setAttribute('stroke-width', '16');
                    s.style.filter = 'none';
                    s.style.opacity = '1';
                    // Bring hovered segment to top so rounded ends render cleanly
                    s.parentNode.appendChild(s);
                } else {
                    s.setAttribute('stroke-width', '13');
                    s.style.filter = 'none';
                    s.style.opacity = '1';
                }
            });
            legendRows.forEach(function(r, i) {
                if (i === idx) {
                    r.style.background = '#F1F5F9';
                } else {
                    r.style.background = 'transparent';
                }
            });
            if (centerAmount && donutData[idx]) {
                centerAmount.textContent = donutData[idx].val;
                centerAmount.style.transform = 'scale(1.06)';
                centerSub.textContent = donutData[idx].name + ' (' + donutData[idx].pct + ')';
            }
        }

        function resetHighlight() {
            segments.forEach(function(s) {
                s.setAttribute('stroke-width', '13');
                s.style.filter = 'none';
                s.style.opacity = '1';
            });
            legendRows.forEach(function(r) {
                r.style.background = 'transparent';
            });
            if (centerAmount) {
                centerAmount.textContent = originalAmount;
                centerAmount.style.transform = 'scale(1)';
                centerSub.textContent = originalSub;
            }
        }

        segments.forEach(function(seg, idx) {
            seg.addEventListener('mouseenter', function() {
                highlightSegment(idx);
            });
            seg.addEventListener('mouseleave', function() {
                resetHighlight();
            });
        });

        legendRows.forEach(function(row, idx) {
            row.addEventListener('mouseenter', function() {
                highlightSegment(idx);
            });
            row.addEventListener('mouseleave', function() {
                resetHighlight();
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            setupChartHover();
            setupDonutHover();
        });
    } else {
        setupChartHover();
        setupDonutHover();
    }
})();
</script>

@endsection
