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
        <div class="card">
            <img src="{{ asset('/') }}asset/img/kebab_kecil.png" alt="sample" class="rounded-3" >
            <div class="card-body">
                <h4 class="card-title fw-bold">Lebanese Kebab Kecil</h4>
                <p class="card-subtitle my-3 text-muted">Irisan daging sapi, kol, daun selada, saus sambal, saus tomat, mayones</p>
                <p class="card-text mb-4 text-warning">Rp. 10.000</p>
                <hr class="mb-4">
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('/') }}asset/img/kebab_besar.png" alt="sample" class="rounded-3" >
            <div class="card-body">
                <h4 class="card-title fw-bold">Lebanese Kebab Besar</h4>
                <p class="card-subtitle my-3 text-muted">Irisan daging sapi, kol, daun selada, saus sambal, saus tomat, mayones</p>
                <p class="card-text mb-4 text-warning">Rp. 13.000</p>
                <hr class="mb-4">
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('/') }}asset/img/kebab_xl.png" alt="sample" class="rounded-3" >
            <div class="card-body">
                <h4 class="card-title fw-bold">Lebanese Kebab XL</h4>
                <p class="card-subtitle my-3 text-muted">Irisan daging sapi, kol, daun selada, saus sambal, saus tomat, mayones</p>
                <p class="card-text mb-4 text-warning">Rp. 16.000</p>
                <hr class="mb-4">
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('/') }}asset/img/burger_kebab.png" alt="sample" class="rounded-3" >
            <div class="card-body">
                <h4 class="card-title fw-bold">Burger Kebab</h4>
                <p class="card-subtitle my-3 text-muted">Irisan daging sapi, kol, daun selada, saus sambal, saus tomat, mayones</p>
                <p class="card-text mb-4 text-warning">Rp. 8.000</p>
                <hr class="mb-4">
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('/') }}asset/img/super_burger.png" alt="sample" class="rounded-3" >
            <div class="card-body">
                <h4 class="card-title fw-bold">Super Burger</h4>
                <p class="card-subtitle my-3 text-muted">Irisan daging sapi, kol, daun selada, saus sambal, saus tomat, mayones</p>
                <p class="card-text mb-4 text-warning">Rp. 10.000</p>
                <hr class="mb-4">
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('/') }}asset/img/hot_dough_kebab.png" alt="sample" class="rounded-3" >
            <div class="card-body">
                <h4 class="card-title fw-bold">Hot Dough Kebab</h4>
                <p class="card-subtitle my-3 text-muted">Irisan daging sapi, kol, daun selada, saus sambal, saus tomat, mayones</p>
                <p class="card-text mb-4 text-warning">Rp. 8.000</p>
                <hr class="mb-4">
            </div>
        </div>
    </div>
</div>
@endsection