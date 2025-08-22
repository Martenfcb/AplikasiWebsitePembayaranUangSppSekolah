<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url('/') }}" class="brand-link d-flex align-items-center">
    <img src="{{ asset('images/logo_smk.png') }}" alt="Logo SMK" class="img-circle elevation-3 animate__animated animate__bounceIn"
         style="width: 35px; height: 35px; margin-left: 10px; margin-right: 10px;">
    <span class="brand-text font-weight-light">Sumbangan Komite</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-widget="treeview">

        @auth
          {{-- ADMIN --}}
          @if(Auth::user()->role === 'admin')
            <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-gauge-high fa-beat"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('spp.index') }}" class="nav-link">
                <i class="nav-icon fas fa-money-bill-wave fa-fade"></i>
                <p>Data SPP</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('kelas.index') }}" class="nav-link">
                <i class="nav-icon fas fa-school fa-bounce"></i>
                <p>Data Kelas</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('siswa.index') }}" class="nav-link">
                <i class="nav-icon fas fa-user-graduate fa-beat"></i>
                <p>Data Siswa</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('pembayaran.index') }}" class="nav-link">
                <i class="nav-icon fas fa-wallet fa-shake"></i>
                <p>Pembayaran</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('laporan.index') }}" class="nav-link">
                <i class="nav-icon fas fa-file-alt fa-fade"></i>
                <p>Laporan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users-cog fa-bounce"></i>
                <p>User</p>
              </a>
            </li>

          {{-- SISWA --}}
          @elseif(Auth::user()->role === 'siswa')
            <li class="nav-item">
              <a href="{{ route('dashboard.siswa') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt fa-beat"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('siswa.pembayaran') }}" class="nav-link">
                <i class="nav-icon fas fa-wallet fa-fade"></i>
                <p>Status Pembayaran</p>
              </a>
            </li>

          {{-- PENGAWAS --}}
          @elseif(Auth::user()->role === 'pengawas')
            <li class="nav-item">
              <a href="{{ route('dashboard.pengawas') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt fa-shake"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('laporan.index') }}" class="nav-link">
                <i class="nav-icon fas fa-file-alt fa-bounce"></i>
                <p>Laporan</p>
              </a>
            </li>
          @endif

          <!-- Logout -->
          <li class="nav-item mt-3">
            <a href="{{ route('logout') }}" class="nav-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt fa-fade"></i>
              <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        @endauth

      </ul>
    </nav>
  </div>
</aside>
