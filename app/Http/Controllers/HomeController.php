<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function daftarMenu(){

        
        return view("pelanggan-page/daftar_menu");

    }

    function buatPesanan(){

        
        return view("pelanggan-page/buat_pesanan");
        
    }

    function cekstatusPesanan(){

        
        return view("pelanggan-page/cek_statuspesanan");
        
    }



}
