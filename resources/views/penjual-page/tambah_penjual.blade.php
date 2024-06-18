<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kebab Bang Aji | Tambah Penjual</title>
  <link rel="icon" href="{{ asset('/') }}asset/img/logo-bang-aji.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/') }}asset/templatepenjual/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}asset/templatepenjual/plugins/fontawesome-6/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}asset/templatepenjual/dist/css/adminlte.min.css">
 
   <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/') }}asset/templatepenjual/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}asset/templatepenjual/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}asset/templatepenjual/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        {{-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('penjual.profile') }}">
          <i class="fas fa-user"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('penjual.dashboard') }}" class="brand-link">
      <img src="{{ asset('/') }}asset/img/logo-bang-aji.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kebab Bang Aji</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/') }}asset/templatepenjual/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('penjual.profile') }}" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          {{-- Awal sidebar dashboard --}}
          <li class="nav-item">
            <a href="{{ route('penjual.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          {{-- Akhir sidebar dashboard --}}

          
          {{-- Awal Sidebar Kelola Menu --}}
          <li class="nav-header">Kelola Menu</li> 
          <li class="nav-item">
            <a href="{{ route('penjual.kelolaMenu') }}" class="nav-link" >
              <i class="nav-icon fas fa-file"></i>
              <p>Data Menu</p>
            </a>
          </li>
          {{-- Akhir Sidebar Kelola Menu --}}
          

          {{-- Awal Sidebar Kelola Penjual --}}
          <li class="nav-header">Kelola Penjual</li>
          <li class="nav-item">
            <a href="{{ route('penjual.kelolaPenjual') }}" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Penjual</p>
            </a>
          </li>
          {{-- Akhir Sidebar Kelola Penjual --}}


          {{-- Awal Sidebar Data Pesanan --}}
          <li class="nav-header">Data Pesanan</li> 
          <li class="nav-item">
            <a href="{{ route('penjual.pesananAktif') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-arrows-rotate"></i>
              <p>Sedang Berlangsung</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('penjual.riwayatPesanan') }}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>Riwayat Pesanan</p>
            </a>
          </li>
          {{-- Akhir Sidebar Data Pesanan --}}

          <li class="nav-item">
            <a href="{{ route('penjual.logout') }}" class="nav-link" onClick="confirm('Anda yakin ingin keluar?')">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Tambah Penjual</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Penjual</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ( $errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif --}}

                <!-- form start -->
                <form action="{{ route('penjual.simpanPenjual') }}" method="POST" class="form-horizontal">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" name="frmUsername" value="{{ old('frmUsername') }}" class="form-control @error('frmUsername')is-invalid @enderror" id="" placeholder="isi Username">
                        @error('frmUsername')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                    </div>

                        <div class="form-group row">
                          <label for="" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" name="frmPassword" value="{{ old('frmPassword') }}" class="form-control @error('frmPassword')is-invalid @enderror" id="" placeholder="isi Password">
                            @error('frmPassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                              <input type="text" name="frmNamaLengkap" value="{{ old('frmNamaLengkap') }}" class="form-control @error('frmNamaLengkap')is-invalid @enderror" id="" placeholder="isi Nama lengkap">
                              @error('frmNamaLengkap')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Tangga Lahir</label>
                            <div class="col-sm-10">
                            <input type="date" name="frmTglLahir" value="{{ old('frmTglLahir') }}" class="form-control @error('frmTglLahir')is-invalid @enderror" id="">
                            @error('frmTglLahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                              <textarea name="frmAlamat" rows="5" class="form-control @error('frmAlamat')is-invalid @enderror" id="" placeholder="Alamat tinggal">{{ old('frmAlamat') }}</textarea>
                            @error('frmAlamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                            <input type="number" name="frmnoTelepon" value="{{ old('frmnoTelepon') }}" class="form-control @error('frmnoTelepon')is-invalid @enderror" placeholder="contoh:08xxxxxxxxxx">
                            @error('frmnoTelepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                            <select name="frmRole" value="{{ old('frmRole') }}" class="form-control @error('frmRole')is-invalid @enderror">
                                <option value="" selected disabled>--Pilih--</option>                          
                                <option value="{{$dataPenjual->role}}" {{ (old("frmRole") == $dataPenjual->role ? "selected":"") }}>{{$dataPenjual->role}}</option>
                            </select>
                            @error('frmRole')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="submit" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin menambah data penjual?')">Simpan</a>
                            </div>
                        </div>
                   
                </form>
              </div>
          
                
              </div>
              <!-- /.card -->
           
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a style="color:red">Kebab Bang Aji</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="{{ asset('/') }}asset/templatepenjual/plugins/jquery/jquery.min.js"></script>
<!-- REQUIRED SCRIPTS -->

<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}asset/templatepenjual/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}asset/templatepenjual/dist/js/adminlte.min.js"></script>


{{-- <!-- jQuery -->

<script src="{{ asset('/') }}asset/templatepenjual/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="{{ asset('/') }}asset/templatepenjual/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="{{ asset('/') }}asset/templatepenjual/dist/js/adminlte.min.js"></script> --}}

{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/') }}asset/templatepenjual/dist/js/pages/dashboard3.js"></script> --}}
</body>
</html>
