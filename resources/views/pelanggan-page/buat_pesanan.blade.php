@extends('pelanggan-page.navbar-layout.navbar')
@section('page-content')
<div class="container mt-3">
    <div class="rounded-2 col-12 col-md-8 col-lg-8 col-xl-6 col-xxl-6 offset-0 offset-md-2 offset-lg-2 offset-xl-3 offset-xxl-3 border shadow">
        <p class="h3 fw-bold text-center text-danger m-0 py-3">
            Pesan Sekarang
        </p>
    </div>
</div>

<div class="container mt-3 mb-5">
    <div class="rounded-2 col-12 col-md-8 col-lg-8 col-xl-6 col-xxl-6 offset-0 offset-md-2 offset-lg-2 offset-xl-3 offset-xxl-3 border shadow">
        <form action="{{ route('penjual.simpanPesanan') }}" method="POST" class="mx-4 my-4 px-2" >
            @csrf
            <div class="my-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="frmNama" class="form-control @error('frmNama')is-invalid @enderror" value="{{ old('frmNama') }}" id="nama" placeholder="Masukkan nama">
                @error('frmNama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-3">
                <label for="menu" class="form-label">Menu:</label>
                <div class="d-flex flex-column gap-3" id="formmultiMenu">

                    <!-- Loop start -->
                    <div class="d-flex flex-row gap-3">
                        <select class="form-select @error('frmMenu')is-invalid @enderror" id="menu" name="frmMenu[0]['id_menu']">
                            <option value="" selected disabled>--Pilih Menu--</option>        
                            @foreach ($dataMenu as $item)                  
                                <option value="{{$item->id_menu}}" {{ (old("frmMenu") == $item->id_menu ? "selected":"") }}>{{$item->nama_menu}}</option>
                            @endforeach
                        </select>

                        @error('frmMenu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <input type="number" name="frmQty[0]['qty']" class="form-control text-center p-0 m-0 w-25 @error('frmQty')is-invalid @enderror" id="jumlah" placeholder="qty">
                        @error('frmQty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <button type="button" name="add" id="add" class="btn btn-primary p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                              </svg>
                        </button>
                    </div>

                    {{-- <!-- Loop end -->
                    <div class="d-flex flex-row gap-3">
                        <select class="form-select" id="menu">
                            <option value="">Pilih menu</option>
                            <option value="lebanese-kebab-kecil">Lebanese Kebab Kecil</option>
                            <option value="lebanese-kebab-besar">Lebanese Kebab Besar</option>
                            <option value="lebanese-kebab-xl">Lebanese Kebab XL</option>
                            <option value="burger-kebab">Burger Kebab</option>
                            <option value="super-burger">Super Burger</option>
                            <option value="hot-dough-kebab">Hot Dough Kebab</option>
                            </select>
                        <input type="number" class="form-control text-center p-0 m-0 w-25" id="jumlah" placeholder="qty">
                        <button class="btn btn-danger p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                              </svg>
                        </button>
                    </div> --}}

                </div>
            </div>
            <div class="my-3">
                <label for="catatan" class="form-label">Catatan:</label>
                <textarea name="frmCatatan" class="form-control @error('frmCatatan')is-invalid @enderror" id="catatan" placeholder="Masukkan catatan">{{ old('frmCatatan') }}</textarea>
                @error('frmCatatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-3">
                <label for="total-harga" class="form-label">Total harga:</label>
                <div class="form-control" id="total-harga">
                    <p class="text-muted m-0 p-0">Rp 99.999,-</p>
                </div>
            </div>
            <div class="my-3">
                <label for="jenis-pembayaran" class="form-label">Pembayaran:</label>
                <select class="form-select" id="jenis-pembayaran">
                    <option value="">Pilih pembayaran</option>
                    <option value="cash">Cash</option>
                    <option value="qris">QRIS</option>
                </select>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary w-100">Pesan</button>
            </div>
        </form>
    </div>
</div>

@endsection