<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand">
    <a href="/" class="app-brand-link">
      <img class="img-fluid app-brand-logo " src="assets/img/nivasity_cc_logo_exp.png">
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="/" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <!-- My Profile -->
    <li class="menu-item">
      <a href="profile.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user-circle"></i>
        <div data-i18n="My Profile">My Profile</div>
      </a>
    </li>

    <!-- Admin Management -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Admin Management</span></li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-group"></i>
        <div data-i18n="Admin Management">Admins</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="admin.php" class="menu-link">
            <div data-i18n="Admins">Profiles</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="admin.php" class="menu-link">
            <div data-i18n="Admins">Roles</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="sign_up_key.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-key"></i>
        <div data-i18n="Admin Management">Sign Up Keys</div>
      </a>
    </li>

    <!-- Customer Management -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Customer Management</span></li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-building-house"></i>
        <div data-i18n="Customer Management">Schools</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="school.php" class="menu-link">
            <div data-i18n="Schools">School List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="department.php" class="menu-link">
            <div data-i18n="Schools">Departments</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user-pin"></i>
        <div data-i18n="Customer Management">Students</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="students.php" class="menu-link">
            <div data-i18n="Students">Student Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="students.php?tab=verify" class="menu-link">
            <div data-i18n="Students">Verify Student</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="students.php?tab=email" class="menu-link">
            <div data-i18n="Students">Email Students</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-support"></i>
        <div data-i18n="Customer Management">Support Tickets</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="open_tickets.php" class="menu-link">
            <div data-i18n="Support Tickets">Opened Tickets</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="closed_tickets.php" class="menu-link">
            <div data-i18n="Support Tickets">Closed Tickets</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Financial report -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Financial report</span></li>
    <li class="menu-item">
      <a href="transactions.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-transfer"></i>
        <div data-i18n="Financial report">Transactions</div>
      </a>
    </li>

    <!-- Sign Out -->
    <li class="menu-header small text-uppercase"></li>
    <li class="menu-item">
      <a href="signin.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-log-out"></i>
        <div data-i18n="Support">Sign Out</div>
      </a>
    </li>
  </ul>
</aside>