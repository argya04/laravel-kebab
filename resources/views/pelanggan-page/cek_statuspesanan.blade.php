@extends('pelanggan-page.navbar-layout.navbar')
@section('page-content')
<div class="container pt-3">
    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade-show form-group" role="alert">
      <strong>{{ session('pesan') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    <div class="row mt-4">
        <div class="col-7 col-md-6 col-lg-6 col-xl-5 offset-1 offset-md-2 offset-lg-2 offset-xl-3">
            <input class="form-control" type="search" placeholder="Masukkan ID Pesanan" aria-label="Search">
        </div>
        <div class="col-3 col-md-3 text-start">
            <button class="btn btn-primary px-4">Cari</button>
        </div>
    </div>

    <div class="row mt-3">
        <div class="rounded-2 col-10 col-md-8 col-lg-8 col-xl-6 col-xxl-6 offset-1 offset-md-2 offset-lg-2 offset-xl-3 offset-xxl-3 bg-danger">
            <div class="d-flex flex-column justify-content-center align-content-center px-3 py-5 min-vh-63 gap-4">
                <!-- Card 1 -->
                <div class="card1 cursor-pointer rounded-3 py-2" data-bs-toggle="collapse" data-bs-target="#RikaPrastuti" aria-expanded="false" aria-controls="RikaPrastuti">
                    <div class="d-flex flex-column flex-md-row align-content-md-around align-items-center justify-content-center">
                        <div class="container text-center text-md-end">
                            <p class="h4 fw-bold">0148</p>
                        </div>
                        <div class="d-none d-md-block">
                            <p class="h4 fw-bold">|</p>
                        </div>
                        <div class="container text-center text-md-start">
                            <p class="h4 fw-bold">Rika Prastuti</p>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="RikaPrastuti">
                    <div class="card1 card-body mt-1">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">ID Pesanan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">0148</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Nama Pemesan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Rika Prastuti</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Nama Menu</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Lebanese Kebab Kecil - 1 pcs</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Catatan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Tidak pakai saus</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Total Harga</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Rp. 10.000</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Status Pesanan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Diproses</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                            
                <!-- Card 5 -->
                <div class="card1 cursor-pointer rounded-3 py-2" data-bs-toggle="collapse" data-bs-target="#SintaWijaya" aria-expanded="false" aria-controls="SintaWijaya">
                    <div class="d-flex flex-column flex-md-row align-content-md-around align-items-center justify-content-center">
                        <div class="container text-center text-md-end">
                            <p class="h4 fw-bold">0152</p>
                        </div>
                        <div class="d-none d-md-block">
                            <p class="h4 fw-bold">|</p>
                        </div>
                        <div class="container text-center text-md-start">
                            <p class="h4 fw-bold">Sinta Wijaya</p>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="SintaWijaya">
                    <div class="card1 card-body mt-1">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">ID Pesanan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">0152</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Nama Pemesan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Sinta Wijaya</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Nama Menu</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Lebanese Kebab XL - 1 pcs</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Catatan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Tidak pakai sayur</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Total Harga</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Rp. 16.000</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="no-wrap">Status Pesanan</th>
                                </tr>
                                <tr>
                                    <td class="rounded-1" style="background-color:#E8ECEF">Persiapan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation" class="d-flex justify-content-center my-4">
        <ul class="pagination">
          <li class="page-item"><a class="page-link link-danger" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link link-danger" href="#">1</a></li>
          <li class="page-item"><a class="page-link link-danger" href="#">2</a></li>
          <li class="page-item"><a class="page-link link-danger" href="#">3</a></li>
          <li class="page-item"><a class="page-link link-danger" href="#">Next</a></li>
        </ul>
      </nav>

</div>

@endsection