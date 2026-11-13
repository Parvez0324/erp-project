<!-- ============================================================
     KAN ERP — HEADER (Exact Reference Alignment & Top-Notch UX)
     Left: Breadcrumb (Home > Workspace > Dashboard)
     Center: Company Dropdown, Location Dropdown, Search Bar
     Right: Notification Center (Bell with Badge 3), Help, Profile Avatar
     Zero Overflow in both Full & Collapsed Sidebar views
     ============================================================ -->
<header class="kan-header">
    <!-- LEFT: Breadcrumb (Matching Reference Image) -->
    <div class="kan-header-left">
        <a href="{{ route('home') }}" class="kan-breadcrumb-home" title="Home">
            <i class="bi bi-house-door"></i>
        </a>
        <i class="bi bi-chevron-right kan-breadcrumb-sep"></i>
        <span class="kan-breadcrumb-item">Workspace</span>
        <i class="bi bi-chevron-right kan-breadcrumb-sep"></i>
        <span class="kan-breadcrumb-item active">Dashboard</span>
    </div>

    <!-- CENTER: Company, Location & Search (Matching Reference Image) -->
    <div class="kan-header-center">
        <!-- Company Selector Dropdown -->
        <div class="kan-dropdown-wrap" id="kanCompanyWrap">
            <button type="button" class="kan-pill-dropdown kan-company-pill" id="companyDropdownBtn" title="Select Organization">
                <i class="bi bi-building kan-pill-icon"></i>
                <span class="kan-pill-text">KAN Industries Pvt. Ltd.</span>
                <i class="bi bi-chevron-down kan-pill-arrow"></i>
            </button>
            <div class="kan-popover-menu kan-org-menu" id="companyDropdownMenu">
                <div class="kan-popover-header">
                    <span class="kan-popover-title">Select Organization</span>
                    <span class="kan-popover-sub">3 entities available</span>
                </div>
                <div class="kan-popover-divider"></div>
                <div class="kan-org-item active">
                    <div class="kan-org-avatar">KI</div>
                    <div class="kan-org-details">
                        <span class="kan-org-name">KAN Industries Pvt. Ltd.</span>
                        <span class="kan-org-role">Manufacturing &bull; Mumbai</span>
                    </div>
                    <i class="bi bi-check2 kan-org-check"></i>
                </div>
                <div class="kan-org-item">
                    <div class="kan-org-avatar bg-indigo">KL</div>
                    <div class="kan-org-details">
                        <span class="kan-org-name">KAN Logistics Pvt. Ltd.</span>
                        <span class="kan-org-role">Supply Chain &bull; Delhi</span>
                    </div>
                </div>
                <div class="kan-org-item">
                    <div class="kan-org-avatar bg-teal">KT</div>
                    <div class="kan-org-details">
                        <span class="kan-org-name">KAN Tech Solutions</span>
                        <span class="kan-org-role">Services &bull; Bengaluru</span>
                    </div>
                </div>
                <div class="kan-popover-divider"></div>
                <a href="javascript:void(0)" class="kan-popover-footer-link">
                    <i class="bi bi-gear-wide"></i> Manage Organizations &rarr;
                </a>
            </div>
        </div>

        <!-- Location Selector Dropdown -->
        <div class="kan-dropdown-wrap" id="kanLocationWrap">
            <button type="button" class="kan-pill-dropdown kan-location-pill" id="locationDropdownBtn" title="Select Location">
                <i class="bi bi-geo-alt kan-pill-icon"></i>
                <span class="kan-pill-text">Mumbai</span>
                <i class="bi bi-chevron-down kan-pill-arrow"></i>
            </button>
            <div class="kan-popover-menu kan-loc-menu" id="locationDropdownMenu">
                <div class="kan-popover-header">
                    <span class="kan-popover-title">Operating Location</span>
                </div>
                <div class="kan-popover-divider"></div>
                <div class="kan-loc-item active">
                    <i class="bi bi-geo-alt-fill text-blue"></i>
                    <span>Mumbai (Headquarters)</span>
                    <i class="bi bi-check2 kan-org-check"></i>
                </div>
                <div class="kan-loc-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Delhi Central Hub</span>
                </div>
                <div class="kan-loc-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Bengaluru Branch</span>
                </div>
                <div class="kan-loc-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Dubai Global Depot</span>
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="kan-header-search" id="serching">
            <i class="bi bi-search kan-search-icon"></i>
            <input type="text" 
                   class="kan-search-input search_menu" 
                   id="kanSearchInput" 
                   placeholder="Search anything..." 
                   autocomplete="off">
            <div id="livesearch" class="kan-livesearch-box"></div>
        </div>
    </div>

    <!-- RIGHT: Notification, Help & User Avatar (Matching Reference Image) -->
    <div class="kan-header-right">
        <!-- Notification Bell with Red Badge 3 & Interactive Popover -->
        <div class="kan-dropdown-wrap" id="kanNotifWrap">
            <button type="button" class="kan-icon-btn kan-notif-btn" id="notifBellBtn" title="Notifications">
                <i class="bi bi-bell"></i>
                <span class="kan-notif-badge">
                    <span class="kan-notif-ping"></span>
                    3
                </span>
            </button>
            <div class="kan-popover-menu kan-notif-menu" id="notifMenu">
                <div class="kan-notif-header">
                    <div>
                        <span class="kan-notif-title">Notifications</span>
                        <span class="kan-notif-count-badge">3 unread</span>
                    </div>
                    <a href="javascript:void(0)" class="kan-notif-mark-read">Mark all read</a>
                </div>
                <div class="kan-popover-divider"></div>
                <div class="kan-notif-list">
                    <div class="kan-notif-item unread">
                        <div class="kan-notif-icon-box bg-red"><i class="bi bi-exclamation-octagon-fill"></i></div>
                        <div class="kan-notif-content">
                            <p class="kan-notif-msg"><strong>12 Invoices Overdue</strong> totalling ₹2.1L require follow-up.</p>
                            <span class="kan-notif-time"><i class="bi bi-clock"></i> 12m ago</span>
                        </div>
                    </div>
                    <div class="kan-notif-item unread">
                        <div class="kan-notif-icon-box bg-blue"><i class="bi bi-cart-check-fill"></i></div>
                        <div class="kan-notif-content">
                            <p class="kan-notif-msg"><strong>8 Purchase Orders</strong> are awaiting approval.</p>
                            <span class="kan-notif-time"><i class="bi bi-clock"></i> 45m ago</span>
                        </div>
                    </div>
                    <div class="kan-notif-item unread">
                        <div class="kan-notif-icon-box bg-amber"><i class="bi bi-box-seam-fill"></i></div>
                        <div class="kan-notif-content">
                            <p class="kan-notif-msg"><strong>24 SKUs</strong> have fallen below safety level.</p>
                            <span class="kan-notif-time"><i class="bi bi-clock"></i> 2h ago</span>
                        </div>
                    </div>
                </div>
                <div class="kan-popover-divider"></div>
                <a href="javascript:void(0)" class="kan-notif-footer-link">View all alerts in Action Center &rarr;</a>
            </div>
        </div>

        <!-- Help Icon Button -->
        <button type="button" class="kan-icon-btn" id="kanHelpBtn" title="Help &amp; Support">
            <i class="bi bi-question-circle"></i>
        </button>

        <!-- User Profile Avatar with Top-Notch Dropdown Menu -->
        <div class="kan-dropdown-wrap" id="kanUserWrap">
            @php
                $avatarPath = 'img/profile.jpg';
                if (!empty(Auth::user()->avatar) && file_exists(public_path(Auth::user()->avatar))) {
                    $avatarPath = Auth::user()->avatar;
                }
            @endphp
            <div class="kan-user-avatar-wrap" id="profileDropdownBtn" title="Account Menu">
                <img src="{{ asset($avatarPath) }}" 
                     alt="{{ Auth::user()->name ?? 'User' }}" 
                     class="kan-user-avatar" 
                     onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Imran&background=2563EB&color=fff&size=64';">
                <span class="kan-user-online-dot"></span>
            </div>

            <!-- User Account Popover Card -->
            <div class="kan-popover-menu kan-user-menu" id="profileMenu">
                <div class="kan-user-card-header">
                    <img src="{{ asset($avatarPath) }}" 
                         alt="{{ Auth::user()->name ?? 'User' }}" 
                         class="kan-user-menu-avatar" 
                         onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Imran&background=2563EB&color=fff&size=64';">
                    <div class="kan-user-card-details">
                        <span class="kan-user-card-name">{{ Auth::user()->name ?? 'Imran Khan' }}</span>
                        <span class="kan-user-card-email">{{ Auth::user()->email ?? 'imran@kaninfos.com' }}</span>
                        <span class="kan-user-card-badge"><i class="bi bi-shield-check"></i> Super Administrator</span>
                    </div>
                </div>

                <div class="kan-popover-divider"></div>

                <div class="kan-menu-list">
                    @if(Route::has('company_info'))
                    <a href="{{ route('company_info') }}" class="kan-menu-link">
                        <i class="bi bi-building"></i> <span>Company Settings</span>
                    </a>
                    @else
                    <a href="javascript:void(0)" class="kan-menu-link">
                        <i class="bi bi-building"></i> <span>Company Settings</span>
                    </a>
                    @endif

                    @if(Route::has('profile_view'))
                    <a href="{{ route('profile_view') }}" class="kan-menu-link">
                        <i class="bi bi-person-circle"></i> <span>My Profile</span>
                    </a>
                    @else
                    <a href="javascript:void(0)" class="kan-menu-link">
                        <i class="bi bi-person-circle"></i> <span>My Profile</span>
                    </a>
                    @endif

                    @if(Route::has('change_password'))
                    <a href="{{ route('change_password') }}" class="kan-menu-link">
                        <i class="bi bi-shield-lock"></i> <span>Security &amp; Password</span>
                    </a>
                    @else
                    <a href="javascript:void(0)" class="kan-menu-link">
                        <i class="bi bi-shield-lock"></i> <span>Security &amp; Password</span>
                    </a>
                    @endif
                </div>

                <div class="kan-popover-divider"></div>

                <a href="{{ route('logout') }}" 
                   class="kan-menu-link kan-logout-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i> <span>Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>

<!-- INTERACTIVE HEADER CONTROLLER -->
<script>
(function() {
    // 1. Spotlight Search Shortcut (Ctrl+K or Cmd+K)
    window.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && (e.key === 'k' || e.key === 'K')) {
            e.preventDefault();
            var searchInput = document.getElementById('kanSearchInput');
            if (searchInput) {
                searchInput.focus();
                searchInput.select();
            }
        }
        if (e.key === 'Escape') {
            closeAllHeaderPopovers();
            var searchInput = document.getElementById('kanSearchInput');
            if (searchInput) searchInput.blur();
        }
    });

    // 2. Popover Click Handlers
    function setupPopover(btnId, menuId) {
        var btn = document.getElementById(btnId);
        var menu = document.getElementById(menuId);
        if (!btn || !menu) return;

        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            var isOpen = menu.classList.contains('show');
            closeAllHeaderPopovers();
            if (!isOpen) {
                menu.classList.add('show');
            }
        });
    }

    setupPopover('companyDropdownBtn', 'companyDropdownMenu');
    setupPopover('locationDropdownBtn', 'locationDropdownMenu');
    setupPopover('notifBellBtn', 'notifMenu');
    setupPopover('profileDropdownBtn', 'profileMenu');

    function closeAllHeaderPopovers() {
        document.querySelectorAll('.kan-popover-menu.show').forEach(function(el) {
            el.classList.remove('show');
        });
    }

    document.addEventListener('click', function(e) {
        if (!e.target.closest('.kan-popover-menu') && !e.target.closest('.kan-dropdown-wrap')) {
            closeAllHeaderPopovers();
        }
    });

    // 3. Organization Switcher
    document.querySelectorAll('.kan-org-item').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.stopPropagation();
            document.querySelectorAll('.kan-org-item').forEach(function(i) { i.classList.remove('active'); });
            item.classList.add('active');
            var name = item.querySelector('.kan-org-name').textContent;
            var textElem = document.querySelector('#companyDropdownBtn .kan-pill-text');
            if (textElem) textElem.textContent = name;
            closeAllHeaderPopovers();
        });
    });

    // 4. Location Switcher
    document.querySelectorAll('.kan-loc-item').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.stopPropagation();
            document.querySelectorAll('.kan-loc-item').forEach(function(i) { i.classList.remove('active'); });
            item.classList.add('active');
            var name = item.querySelector('span').textContent.replace(' (Headquarters)', '');
            var textElem = document.querySelector('#locationDropdownBtn .kan-pill-text');
            if (textElem) textElem.textContent = name;
            closeAllHeaderPopovers();
        });
    });
})();
</script>
