<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>@yield('title', 'Dashboard') | Sumbangan Komite</title>


  <!-- CSS AdminLTE -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Tambahkan ini di <head> layout -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
  :root {
    --sidebar-bg: linear-gradient(145deg, #e0f0ff, #ffffff);
    --sidebar-link-hover: #0d6efd;
    --sidebar-icon-color: #0d6efd;
    --sidebar-text-color: #333;
    --brand-text-color: #0d6efd;
  }

  .main-sidebar {
    background: var(--sidebar-bg) !important;
    color: var(--sidebar-text-color);
    border-right: 1px solid #ddd;
  }

  .main-sidebar .brand-link {
    background: transparent;
    border-bottom: 1px solid #ccc;
    font-weight: bold;
    color: var(--brand-text-color) !important;
  }

  .brand-link .brand-text {
    color: var(--brand-text-color) !important;
    font-size: 1.2rem;
    transition: color 0.3s ease;
  }

  .brand-link:hover .brand-text {
    color: #0b5ed7 !important;
  }

  .nav-sidebar > .nav-item > .nav-link {
    color: var(--sidebar-text-color);
    font-weight: 500;
    transition: all 0.3s ease;
    border-radius: 8px;
    margin: 4px 8px;
    padding: 8px 12px;
  }

  .nav-sidebar > .nav-item > .nav-link:hover {
    background-color: rgba(13, 110, 253, 0.15);
    color: var(--sidebar-link-hover);
    font-weight: bold;
  }

  .nav-sidebar .nav-link i {
    color: var(--sidebar-icon-color);
    transition: transform 0.3s ease-in-out, color 0.3s ease;
    margin-right: 8px;
  }

  .nav-sidebar .nav-link:hover i {
    transform: scale(1.2) rotate(6deg);
    color: #0d6efd;
  }

  .sidebar {
    animation: fadeInLeft 0.5s;
  }

  @media (max-width: 768px) {
    .brand-text {
      font-size: 1rem;
    }

    .nav-sidebar .nav-link {
      font-size: 0.9rem;
    }
  }
</style>



  <!-- Optional: CSS Tambahan -->
  @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.navbar')

  <!-- Sidebar -->
  @include('layouts.sidebar')

  <!-- Content Wrapper -->
  <div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('page-title')</h1>


          </div>
          <div class="col-sm-6">
            <!-- Bisa isi breadcrumb di sini kalau perlu -->
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>

  </div>

  <!-- Footer -->
  @include('layouts.footer')

</div>

<!-- JS AdminLTE -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

<!-- Optional: JS Tambahan -->
@stack('scripts')
    @vite('resources/js/app.js') {{-- atau asset lainnya --}}
    @yield('scripts')
</body>
</html>
