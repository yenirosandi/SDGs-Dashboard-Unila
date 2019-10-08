<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-0">
            <img src="img/sdgs/sdgs.png" alt="UNILA SDGs Center" width="50px">
          </div>
          <div class="sidebar-brand-text mx-3">Dashboard SDGs Unila</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          SDGs
        </div>
        <!-- SDGs Goals -->
        <li class="nav-item">
          <a class="nav-link" href="/sdg/3">
            <img src="img/sdgs/sdg3.png" alt="SDG3" width="20px">
            <span>SDG 3</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/4">
            <img src="img/sdgs/sdg4.png" alt="SDG4" width="20px">
            <span>SDG 4</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/5">
            <img src="img/sdgs/sdg5.png" alt="SDG5" width="20px">
            <span>SDG 5</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/8">
            <img src="img/sdgs/sdg8.png" alt="SDG8" width="20px">
            <span>SDG 8</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/9">
            <img src="img/sdgs/sdg9.png" alt="SDG9" width="20px">
            <span>SDG 9</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/10">
            <img src="img/sdgs/sdg10.png" alt="SDG10" width="20px">
            <span>SDG 10</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/11">
            <img src="img/sdgs/sdg11.png" alt="SDG11" width="20px">
            <span>SDG 11</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/12">
            <img src="img/sdgs/sdg12.png" alt="SDG12" width="20px">
            <span>SDG 12</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/13">
            <img src="img/sdgs/sdg13.png" alt="SDG13" width="20px">
            <span>SDG 13</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/16">
            <img src="img/sdgs/sdg16.png" alt="SDG16" width="20px">
            <span>SDG 16</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sdg/17">
            <img src="img/sdgs/sdg17.png" alt="SDG17" width="20px">
            <span>SDG 17</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          INDIKATOR
        </div>
        <!-- Indikator -->
        <li class="nav-item">
          <a class="nav-link" href="master_indikator">
            <img src="img/sdgs/admin_indi_master.png" alt="SDG3" width="20px">
            <span>Master Indikator</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="master_sub_indikator">
            <img src="img/sdgs/admin_indi_sub.png" alt="Master Sub Indikator" width="20px">
            <span>Master Sub Indikator</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indikator_pencapaian_SDGs">
            <img src="img/sdgs/admin_indi_capai.png" alt="Pencapaian Indikator" width="20px">
            <span>Pencapaian Indikator</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          User
        </div>
        <!-- User -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="img/sdgs/admin_profil.png" alt="profil" width="20px">
            <span>Profil</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="img/sdgs/admin_logout.png" alt="logout" width="20px">
            <span>Logout</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">
                    Alerts Center
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                      <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 2, 2019</div>
                      Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-100 small">Admin</span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">@yield('Judul')</h1>
            <p class="mb-4">@yield('JudulDesc')</a>.</p>
            <br>
            @yield('content')
            <br>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; SDGs Dashboard Universitas Lampung 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
  </body>
</html>