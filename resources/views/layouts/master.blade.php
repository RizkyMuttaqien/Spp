<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPP SMKN 4</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item d-none d-sm-inline-block float-right">
        <a href="{{ route('logout') }}" class="nav-link"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img   src="/image/logo4.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SPP 4</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img   src="/image/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    @if(Auth::user()->level == "admin")
          <li class="nav-item">
            <a href="{{url('home')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header">Main Item</li>
          <li class="nav-item">
            <a href="{{url('transaksi')}}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>Transaksi Pembayaran</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('histori')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>Data Histori Transaksi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('siswa')}}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('spp')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>Data Spp</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('kelas')}}" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
              <p>Data Kelas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('petugas')}}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>Data Petugas</p>
            </a>
          </li>
          @elseif(Auth::user()->level == "petugas")
          <li class="nav-item">
            <a href="{{url('home')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header">Main Item</li>
          <li class="nav-item">
            <a href="{{url('transaksi')}}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>Transaksi Pembayaran</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('histori')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>Data Histori Transaksi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('siswa')}}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>Data Siswa</p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.0
    </div>
    Sistem <strong>SPP</strong> SMKN 4 Bdg
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script   src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script   src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script   src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script   src="/dist/js/demo.js"></script>
</body>
</html>
