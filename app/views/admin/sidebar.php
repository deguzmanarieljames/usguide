<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>USGuide</title>
  <link rel="shortcut icon" type="image/png" href="public/images/logos/usguide-mini-logo.png" />
  <link rel="stylesheet" href="public/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="dashboard" class="text-nowrap logo-img">
            <img src="public/images/logos/usguide-logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Students</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="attendance" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Attendance</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="fines" aria-expanded="false">
                <span>
                  <i class="ti ti-coin"></i>
                </span>
                <span class="hide-menu">Fines</span>
              </a>
            </li>



            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Events</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="usg" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-office"></i>
                </span>
                <span class="hide-menu">USG</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="department" aria-expanded="false">
                <span>
                  <i class="ti ti-building"></i>
                </span>
                <span class="hide-menu">Department</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">SCANNING</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="student" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Attendance Checker</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">LOGIN HISTORY</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="student" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Student</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="officer" aria-expanded="false">
                <span>
                  <i class="ti ti-user-check"></i>
                </span>
                <span class="hide-menu">Officer</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
  </div>
  <script src="public/libs/jquery/dist/jquery.min.js"></script>
  <script src="public/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/sidebarmenu.js"></script>
  <script src="public/js/app.min.js"></script>
  <script src="public/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="public/libs/simplebar/dist/simplebar.js"></script>
  <script src="public/js/dashboard.js"></script>
</body>

</html>