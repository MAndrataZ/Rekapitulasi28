<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('images/logo28.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">REKAPSS 28</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <span style="color: white;">{{ Auth::user()->nama }}</span>
        </div>
      </div>


      @if (Auth::user()->user == 'kurikulum')
        <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard-kurikulum') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- Menu 1: Siswa -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Siswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashboard-kurikulum.master-siswa') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Siswa</p>
                </a>
              </li>
            </ul>
          </li>
                
          <!-- Menu 2: Guru -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Guru
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/guru/tambah') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/guru/master') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Guru</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
      @endif

   
      @if (Auth::user()->user == 'guru')
        <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('siswa.index') }}" class="nav-link {{ Route::is('siswa.index')  ? 'active' : '' }}">
              <i class="fas fa-user-graduate nav-icon"></i>
              <p style="font-size: 15px;" class="font-weight-700">
                Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('kelas.index') }}" class="nav-link {{ Route::is('kelas.index')  ? 'active' : '' }}">
              <i class="fas fa-graduation-cap nav-icon"></i>
              <p style="font-size: 15px;" class="font-weight-700">
                Kelas
              </p>
            </a>
          </li>
        </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
      @endif
      
  </aside>
  