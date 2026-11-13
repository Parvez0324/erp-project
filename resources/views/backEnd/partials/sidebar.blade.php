<!-- KAN ERP REDESIGNED SIDEBAR (World-Class Catchy Enterprise Design, Zero Scroll, Bottom Collapse) -->
<nav id="sidebar" class="kan-sidebar">
    <!-- Brand / Official KAN Logo from ats.kaninfos.com -->
    <div class="kan-sidebar-header">
        <a href="{{ route('home') }}" class="kan-sidebar-brand" title="KAN ERP">
            <img src="{{ asset('images/kan-logo-white.png') }}" alt="KAN ERP" class="kan-brand-logo-img">
            <span class="kan-brand-tag">ERP</span>
        </a>
    </div>

    <!-- Quick Workspace / Company Status Card -->
    <div class="kan-sidebar-ws-card" title="Active Organization">
        <div class="kan-ws-indicator">
            <span class="kan-ws-pulse"></span>
        </div>
        <div class="kan-ws-info">
            <span class="kan-ws-name">KAN Industries</span>
            <span class="kan-ws-role">HQ &bull; Mumbai</span>
        </div>
        <i class="bi bi-chevron-expand kan-ws-chevron"></i>
    </div>

    <!-- Navigation List (Grouped by Suites, Useful Badges, Zero Scroll) -->
    <div class="kan-sidebar-menu">
        <ul class="kan-nav">
            <!-- SECTION 1: CORE -->
            <li class="kan-nav-group-label">Core</li>

            <!-- 1. Dashboard (Active) -->
            <li class="kan-nav-item active">
                <a href="{{ route('home') }}" class="kan-nav-link" title="Dashboard">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-grid-1x2-fill"></i></span>
                    <span class="kan-nav-text">Dashboard</span>
                    <span class="kan-active-indicator"></span>
                </a>
            </li>

            <!-- 2. CRM -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="CRM">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-person-circle"></i></span>
                    <span class="kan-nav-text">CRM</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- 3. Sales -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Sales">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-receipt-cutoff"></i></span>
                    <span class="kan-nav-text">Sales</span>
                    <span class="kan-nav-badge badge-red">12</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- 4. Purchase -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Purchase">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-cart3"></i></span>
                    <span class="kan-nav-text">Purchase</span>
                    <span class="kan-nav-badge badge-blue">8</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- SECTION 2: OPERATIONS -->
            <li class="kan-nav-group-label">Operations</li>

            <!-- 5. Inventory -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Inventory">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-box-seam"></i></span>
                    <span class="kan-nav-text">Inventory</span>
                    <span class="kan-nav-badge badge-amber">6</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- 6. Finance -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Finance">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-cash-stack"></i></span>
                    <span class="kan-nav-text">Finance</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- 7. Manufacturing -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Manufacturing">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-gear-wide-connected"></i></span>
                    <span class="kan-nav-text">Manufacturing</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- 8. Projects -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Projects">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-kanban"></i></span>
                    <span class="kan-nav-text">Projects</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- SECTION 3: MANAGEMENT -->
            <li class="kan-nav-group-label">Management</li>

            <!-- 9. HR & Payroll -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="HR & Payroll">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-people-fill"></i></span>
                    <span class="kan-nav-text">HR &amp; Payroll</span>
                    <i class="bi bi-chevron-right kan-nav-arrow"></i>
                </a>
            </li>

            <!-- 10. Reports -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Reports">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-bar-chart-line-fill"></i></span>
                    <span class="kan-nav-text">Reports</span>
                </a>
            </li>

            <!-- 11. Integrations -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Integrations">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-plugin"></i></span>
                    <span class="kan-nav-text">Integrations</span>
                </a>
            </li>

            <!-- 12. Settings -->
            <li class="kan-nav-item">
                <a href="javascript:void(0)" class="kan-nav-link" title="Settings">
                    <span class="kan-nav-icon-wrap"><i class="bi bi-sliders2"></i></span>
                    <span class="kan-nav-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Sidebar Bottom Area: Upgrade Card + Collapse Toggle -->
    <div class="kan-sidebar-bottom">
        <div class="kan-upgrade-card">
            <div class="kan-upgrade-crown">👑</div>
            <div class="kan-upgrade-title">Upgrade to<br>Premium Plan</div>
            <div class="kan-upgrade-desc">Unlock advanced features &amp; higher limits.</div>
            <a href="javascript:void(0)" class="kan-upgrade-btn">Upgrade Now &rarr;</a>
        </div>

        <div class="kan-collapse-trigger" id="sidebarCollapseTrigger" title="Collapse Sidebar">
            <i class="bi bi-chevron-bar-left kan-collapse-icon" id="collapseIcon"></i>
            <span class="kan-collapse-label">Collapse</span>
        </div>
    </div>
</nav>

<script>
(function() {
    // Restore sidebar collapsed state
    if (localStorage.getItem('kan_sidebar_collapsed') === '1') {
        document.body.classList.add('sidebar-collapsed');
    }

    var trigger = document.getElementById('sidebarCollapseTrigger');
    if (trigger) {
        trigger.addEventListener('click', function() {
            document.body.classList.toggle('sidebar-collapsed');
            if (document.body.classList.contains('sidebar-collapsed')) {
                localStorage.setItem('kan_sidebar_collapsed', '1');
            } else {
                localStorage.setItem('kan_sidebar_collapsed', '0');
            }
        });
    }
})();
</script>
