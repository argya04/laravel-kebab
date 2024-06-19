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
        <form action="{{ route('pelanggan.simpanPesanan') }}" method="POST" class="mx-4 my-4 px-2" id="formPesanan">
            @csrf
            <div class="my-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="frmNama" class="form-control @error('frmNama') is-invalid @enderror" value="{{ old('frmNama') }}" id="nama" placeholder="Masukkan nama">
                @error('frmNama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3">
                <label for="menu" class="form-label">Menu:</label>
                <div class="d-flex flex-column gap-3" id="formmultiMenu">
                    <div class="d-flex flex-row gap-3">
                        <select class="form-select" name="input[0][id_menu]" id="menu">
                            <option value="" selected disabled>--Pilih Menu--</option>
                            @foreach ($dataMenu as $item)
                                <option value="{{ $item->id_menu }}" data-harga="{{ $item->harga_menu }}">{{ $item->nama_menu }} - Rp {{ number_format($item->harga_menu, 0, ',', '.') }}</option>
                            @endforeach
                        </select>
                        <input type="number" name="input[0][qty]" class="form-control text-center p-0 m-0 w-25" placeholder="qty">

                        <button type="button" name="add" id="add" class="btn btn-primary p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="my-3">
                <label for="catatan" class="form-label">Catatan:</label>
                <textarea name="frmCatatan" class="form-control @error('frmCatatan') is-invalid @enderror" id="catatan" placeholder="Masukkan catatan">{{ old('frmCatatan') }}</textarea>
                @error('frmCatatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3">
                <label for="total-harga" class="form-label">Total harga:</label>
                <div class="form-control" id="total-harga">
                    <p class="text-muted m-0 p-0">Rp <span id="total-harga-nilai">0</span></p>
                </div>
            </div>

            <div class="my-3">
                <label for="jenis-pembayaran" class="form-label">Pembayaran:</label>
                <select class="form-select" id="jenis-pembayaran" name="frmPembayaran">
                    <option value="" selected disabled>--Pilih--</option>
                    <option value="cash">Cash</option>
                    <option value="qris">QRIS</option>
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary w-100" onclick="return confirm('Pesanan akan disimpan dan tidak dapat diubah, pastikan data sudah benar')">Pesan</button>
            </div>
        </form>
    </div>
</div>

@endsection