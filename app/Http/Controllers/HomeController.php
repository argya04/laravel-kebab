<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;

class HomeController extends Controller
{
    function daftarMenu(){

        $dataMenu = Menu::get();
        return view('pelanggan-page/daftar_menu', compact('dataMenu'));

    }

    function buatPesanan(){

        $dataMenu = Menu::get();
        return view('pelanggan-page/buat_pesanan' , compact('dataMenu'));
        
    }

    public function simpanPesanan(Request $request)
    {
        // rule validasi form
        $request->validate([
               'frmUsername' =>'required',
               'frmPassword' =>'required',
               'frmNamaLengkap' =>'required',
               'frmTglLahir' =>'required',
               'frmAlamat' =>'required',
               'frmnoTelepon' =>'required',
               'frmRole' =>'required',
            ],
            [
                'frmUsername.required' =>'Username harus diisi',
                'frmPassword.required' =>'Password menu harus diisi',
                'frmNamaLengkap.required' =>'Nama Lengkap harus diisi',
                'frmTglLahir.required' =>'Tanggal Lahir harus diisi',
                'frmAlamat.required' =>'Alamat harus diisi',
                'frmnoTelepon.required' =>'Nomor telepon  harus diisi',
                'frmRole.required' =>'Role harus diisi',
            ]
        );

        // fungsi mengambil inputan dari form dan simpan kedalam database
        $data_penjual= [
            'username' => $request->frmUsername,
            'password' => $request->frmPassword,
            'nama_lengkap' => $request->frmNamaLengkap,
            'tgl_lahir' => $request->frmTglLahir,
            'alamat' => $request->frmAlamat,
            'no_telepon' => $request->frmnoTelepon,
            'role' => $request->frmRole
        ];

        Pesanan::create($data_penjual);
        DetailPesanan::create($data_penjual);

        return redirect('penjual/kelolaPenjual')->with('pesan', 'Data penjual berhasil ditambahkan');
    }

    function cekstatusPesanan(){

        
        return view('pelanggan-page/cek_statuspesanan');
        
    }



}
