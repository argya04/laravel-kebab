<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebab Bang Aji </title>
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
                        <a href="{{ route('pelanggan.daftarMenu') }}" class="nav-link link-light">Daftar Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pelanggan.buatPesanan') }}" class="nav-link link-light">Buat Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pelanggan.cekstatusPesanan') }}" class="nav-link link-light">Status Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('page-content')
    
    <!-- jQuery -->
    <script src="{{ asset('/') }}asset/templatepenjual/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}asset/js/bootstrap.min.js"></script>

    {{-- Awal Script tambah menu baru --}}
    <script>
        // Inisialisasi i untuk penambahan menu baru
        var i = 0;
    
        // Fungsi untuk menghitung total harga berdasarkan pilihan menu dan quantity
        function hitungTotalHarga() {
            let total = 0;
    
            // Loop melalui setiap baris menu
            $('#formmultiMenu select[name^="input["]').each(function() {
                let idMenu = $(this).val();
                let qty = $(this).closest('.d-flex').find('input[name^="input["]').val();
                let harga = $(this).find('option:selected').data('harga');
    
                if (idMenu && qty && harga) {
                    total += parseInt(qty) * harga;
                }
            });
    
            // Update tampilan total harga
            $('#total-harga-nilai').text(total.toLocaleString());
        }
    
        // Panggil fungsi hitungTotalHarga saat ada perubahan pada pilihan menu atau quantity
        $('#formmultiMenu').on('change keyup', 'select[name^="input["], input[name^="input["]', function() {
            hitungTotalHarga();
        });
    
        // Panggil fungsi hitungTotalHarga saat button add diklik untuk menambah baris menu baru
        $('#add').click(function() {
            i++; // Tambahkan nilai i sebelum membuat baris baru
            let newRow =
                `<div class="d-flex flex-row gap-3">
                    <select class="form-select" name="input[${i}][id_menu]">
                        <option value="" selected disabled>--Pilih Menu--</option>
                        @foreach ($dataMenu as $item)
                            <option value="{{ $item->id_menu }}" data-harga="{{ $item->harga_menu }}">{{ $item->nama_menu }} - Rp {{ number_format($item->harga_menu, 0, ',', '.') }}</option>
                        @endforeach
                    </select>
                    <input type="number" name="input[${i}][qty]" class="form-control text-center p-0 m-0 w-25" placeholder="qty">
                    <button type="button" class="btn btn-danger p-2 btnhapus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </div>`;
    
            $('#formmultiMenu').append(newRow);
            hitungTotalHarga(); // Hitung ulang total harga setelah menambah baris baru
        });
    
        // Panggil fungsi hitungTotalHarga saat button hapus diklik untuk menghapus baris menu
        $(document).on('click', '.btnhapus', function() {
            $(this).closest('.d-flex').remove();
            hitungTotalHarga(); // Hitung ulang total harga setelah menghapus baris
        });
    
    </script>
    {{-- Akhir Script tambah menu baru --}}

    
</body>
</html>