<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebab Bang Aji | Daftar Menu</title>
    <link rel="icon" href="{{ asset('/') }}asset/img/logo-bang-aji.png">
    <link href="{{ asset('/') }}asset/css/bootstrap.min.css" rel="stylesheet" >

    <style>
        .cursor-pointer {
          cursor: pointer;
        }

        .no-wrap {
            white-space: nowrap;
          }

        /* .min-vh-75 {
            min-height: 75vh;
        }

        .min-vh-63 {
            min-height: 63vh;
        }

        .min-vh-50 {
            min-height: 50vh;
        } */
        .card {
            width: 300px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }  

        .card1 {
            width: 500px;
            margin: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }  
    </style>
        
</head>
<body>
    <nav class="navbar navbar-expand-md bg-danger py-2">
        <div class="container-fluid px-4 py-2">
            <button type="button" data-bs-toggle="collapse"  data-bs-target="#navbarMenu" class="navbar-toggler me-2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#navbar" class="navbar-brand text-white me-auto fw-bold">Menu</a>
            
            <div class="collapse navbar-collapse" id="navbarMenu" >
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/daftarMenu') }}" class="nav-link link-light">Daftar Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/buatPesanan') }}" class="nav-link link-light">Buat Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/cekstatusPesanan') }}" class="nav-link link-light">Status Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('page-content')

    <script src="{{ asset('/') }}asset/js/bootstrap.min.js"></script>
</body>
</html>