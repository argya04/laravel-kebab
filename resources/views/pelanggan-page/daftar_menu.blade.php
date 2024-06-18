@extends('pelanggan-page.navbar-layout.navbar')
@section('page-content')

<div class="container">
    <div class="row mt-5">
        <div class="col-6 col-md-12">
            <h2 class="text-danger fw-bold text-center float-md-none float-start ms-4">Daftar Menu</p>
        </div>
        <div class="col-6">
            <a href="{{ url('/buatPesanan') }}" class="btn btn-danger text-white float-end d-md-none me-3">Pesan Sekarang!</a>
        </div>
    </div>

    
    <div class="d-flex flex-wrap justify-content-around gap-md-5">
        @foreach ($dataMenu as $item)
        <div class="card">
            <img src="{{ url('foto-menu').'/'.$item->foto_menu }}" alt="sample" class="rounded-3" >
            <div class="card-body">
                <h4 class="card-title fw-bold">{{ $item->nama_menu }}</h4>
                <p class="card-subtitle my-3 text-muted">{{ $item->deskripsi_menu }}</p>
                <p class="card-text mb-4 text-warning">@currency($item->harga_menu)</p>
                <hr class="mb-4">
            </div>
        </div>
        @endforeach
    </div>
    
</div>
@endsection