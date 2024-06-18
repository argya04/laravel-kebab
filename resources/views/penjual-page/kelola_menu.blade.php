<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kebab Bang Aji | Kelola Menu</title>
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
        <a class="nav-link" href="{{ url('penjual/profile') }}">
          <i class="fas fa-user"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('penjual') }}" class="brand-link">
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
          <a href="{{ url('penjual/profile') }}" class="d-block">Alexander Pierce</a>
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
            <a href="{{ route('penjual.kelolaMenu') }}" class="nav-link active" >
              <i class="nav-icon fas fa-file"></i>
              <p>Data Menu</p>
            </a>
          </li>
          {{-- Akhir Sidebar Kelola Menu --}}
          

          {{-- Awal Sidebar Kelola Penjual --}}
          <li class="nav-header">Kelola Penjual</li>
          <li class="nav-item">
            <a href="{{ route('penjual.kelolaPenjual') }}" class="nav-link">
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
            <h1 class="m-0">Data Menu Kebab</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Menu</li>
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
                
                <!-- /.card-header -->
                <div class="card-body">

                  <div class="form-group">
                    <a href="{{ route('penjual.tambahMenu') }}" class="btn btn-primary"><i class="fas fa-add"></i> Tambah Menu</a>
                  </div>

                  @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible fade-show form-group" role="alert">
                      <strong>{{ session('pesan') }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No.</th>
                      <th>Menu</th>
                      <th>Harga</th>
                      <th style="align-items: center;">Foto</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataMenu as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->nama_menu }}</td>
                            <td>@currency($row->harga_menu)</td>
                            <td style="text-align: center;">
                              <img src="{{ url('foto-menu').'/'.$row->foto_menu }}" width="70px" class="rounded">
                            </td>
                            <td>{{ $row->deskripsi_menu }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('penjual.editMenu',['id'=> $row->id_menu])}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                                <a data-toggle="modal" data-target="#modal-hapus{{ $row->id_menu }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                        {{-- modal konfirmasi hapus data --}}
                          <div class="modal fade" id="modal-hapus{{ $row->id_menu }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Apakah anda yakin ingin menghapus data menu <b>{{ $row->nama_menu }}</b></p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <form action="{{ route('penjual.deleteMenu',['id'=> $row->id_menu])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                                  </form> 
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                          
                        @endforeach
                    
                    </tbody>
                    
                  </table>
                </div>
                <!-- /.card-body -->
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
<!-- Page specific script -->
<script>
    $(document).ready(function () {
      $("#example1").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Semua"]],
        "language": {
            "lengthMenu": "Tampilkan _MENU_ baris data",
            "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ baris data",
            "search": "Cari Menu:",
            "zeroRecords": "Tidak ditemukan data yang cocok",
            // "infoEmpty":      "Menampilkan _START_ hingga _END_ dari _TOTAL_ baris data",
            // "infoFiltered":   "(difilter dari _MAX_ total entri)",
        }
      });
    });
</script>

{{-- <script>
    $(document).ready(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script> --}}
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

<!-- DataTables  & Plugins -->
<script src="{{ asset('/') }}asset/templatepenjual/plugins/datatables/jquery.dataTables.js"></script>
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
<script src="{{ asset('/') }}asset/templatepenjual/dist/js/adminlte.min.js"></script> --}}

{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/') }}asset/templatepenjual/dist/js/pages/dashboard3.js"></script> --}}
</body>
</html>
