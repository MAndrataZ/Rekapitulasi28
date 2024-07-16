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
 
                
          <!-- Siswa -->
          <li class="nav-item">
            <a href="{{ url('/siswa') }}" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
              <p>Siswa</p>
            </a>
          </li>
          <!-- Guru -->
          <li class="nav-item">
            <a href="{{ url('/guru') }}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Guru</p>
            </a>
          </li>
          <!-- Mapel -->
          <li class="nav-item">
            <a href="{{ url('/mapel') }}" class="nav-link">
                <i class="nav-icon fas fa-book-open"></i>
              <p>Mapel</p>
            </a>
          </li>

          <!-- Kelas -->
          <li class="nav-item">
            <a href="{{ url('/master-kelas') }}" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Kelas</p>
            </a>
          </li>

          <!-- Leger -->
          <li class="nav-item">
            <a href="{{ url('/leger') }}" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>Leger</p>
            </a>
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
            <a href="{{ url('/admin/dashboard-guru')  }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('siswa-wali.index') }}" class="nav-link {{ Route::is('siswa-wali.index')  ? 'active' : '' }}">
              <i class="fas fa-user-graduate nav-icon"></i>
              <p style="font-size: 15px;" class="font-weight-700">
                Kelas Wali
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('kelas.index') }}" class="nav-link {{ Route::is('kelas.index')  ? 'active' : '' }}">
              <i class="fas fa-graduation-cap nav-icon"></i>
              <p style="font-size: 15px;" class="font-weight-700">
                Kelas Mapel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('koreksi.index') }}" class="nav-link {{ Route::is('koreksi.index')  ? 'active' : '' }}">
              <i class="far fa-edit nav-icon"></i>
              <p style="font-size: 15px;" class="font-weight-700">
                Koreksi
              </p>
            </a>
          </li>
        </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
      @endif
      
  </aside>
  