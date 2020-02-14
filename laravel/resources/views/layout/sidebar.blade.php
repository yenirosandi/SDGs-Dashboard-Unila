      <!-- Sidebar -->
      <ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
          <div class="sidebar-brand-icon rotate-n-0">
            <img src="{{asset('img/sdgs/sdgs.png')}}" alt="UNILA SDGs Center" width="50px">
          </div>
          <div class="sidebar-brand-text mx-3">Dashboard SDGs Unila</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="/admin">
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
          <?php
          $goals=DB::table('t_goals')->get();
        ?>
        @foreach($goals as $goal)
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/goalDetail', $goal->id_goal)}}">
            <img src="{{asset($goal->gambar)}}" alt=" SDG {{$goal->id_goal}}" width="20px">
            <span>SDG {{$goal->id_goal}}</span></a>
        </li>
        @endforeach

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          INDIKATOR
        </div>
        <!-- Indikator -->
        <li class="nav-item">
          <a class="nav-link" href="/admin/master_indikator">
            <img src="{{asset('img/sdgs/admin_indi_master.png')}}" alt="SDG3" width="20px">
            <span>Master Indikator</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/master_sub_indikator">
            <img src="{{asset('img/sdgs/admin_indi_sub.png')}}" alt="Master Sub Indikator" width="20px">
            <span>Master Sub Indikator</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/sumber_data">
            <img src="{{asset('img/sdgs/admin_sumberdata.png')}}" alt="Sumber Data" width="20px">
            <span>Master Sumber Data</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/pencapaian_indikator">
            <img src="{{asset('img/sdgs/admin_indi_capai.png')}}" alt="Pencapaian Indikator" width="20px">
            <span>Pencapaian Indikator</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/form_pengajuan">
            <i style="color: #fcdc26;" class="fas fa-fw fa-clipboard-list"></i>
            <span>Form Pengajuan</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          User
        </div>
        <!-- User -->
        <li class="nav-item">
          <a class="nav-link" href="/admin/profil">
            <img src="{{asset('img/sdgs/admin_profil.png')}}" alt="profil" width="20px">
            <span>Profil</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/logout">
            <img src="{{asset('img/sdgs/admin_logout.png')}}" alt="logout" width="20px">
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
