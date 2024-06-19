<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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

        // $getharga = DB::table('tb_detailpesanan')
        //     ->join('tb_pesanan', 'tb_detailpesanan.id_pesanan', '=', 'tb_pesanan.id_pesanan')
        //     ->join('tb_menu', 'tb_detailpesanan.id_menu', '=', 'tb_menu.id_menu')
        //     ->select('tb_detailpesanan.*', 'tb_pesanan.total_pembayaran', 'tb_menu.harga_menu')
        //     ->get();

        // rule validasi form
        $request->validate([
               'frmNama' =>'required',
            //    'input.*.id_menu' =>'required',
            //    'input.*.qty' =>'required|min:1',
               'frmCatatan' =>'required',
               'frmPembayaran' =>'required',
            ],
            [
                'frmNama.required' =>'Nama harus diisi',
                // 'input.*.id_menu.required' =>' Menu tidak boleh kosong, silahkan pilih menu',
                // 'input.*.qty.required' =>'Quantity pesanan tidak boleh kosong',
                // 'input.*.qty.min' =>'Quantity minimal adalah 1',
                'frmCatatan.required' =>'Catatan pesanan harus diisi. jika tidak ada catatan ketik tidak ada',
                'frmPembayaran.required' =>'Jenis pembayaran harus diisi',
            ]
        );

        $status_pesanan = 'persiapan';
        // $total_bayar = $getharga->harga_menu;
        $tglPesanan = now();

        // fungsi mengambil inputan dari form dan simpan kedalam tabel pesanan
        $data_pesanan= [
            'tgl_pesanan' => $tglPesanan,
            'nama_pelanggan' => $request->frmNama,
            'catatan_pesanan' => $request->frmCatatan,
            'jenis_pembayaran' => $request->frmPembayaran,
            'total_pembayaran' => $request->frmTotalPembayaran,
            'status_pesanan' => $status_pesanan
        ];
        $pesanan = Pesanan::create($data_pesanan);
        // Hitung total harga pesanan
        $total_pembayaran = 0;

        // fungsi mengambil inputan dari add more dan simpan kedalam tabel detail_pesanan
        foreach ($request->input('input') as $key => $value) {
            // Ambil harga menu berdasarkan id_menu dari input
            $menu = Menu::findOrFail($value['id_menu']);
            $harga_menu = $menu->harga_menu;

            DetailPesanan::create([
                'id_pesanan' => $pesanan->id_pesanan,
                'id_menu' => $value['id_menu'],
                'qty' => $value['qty'],
                'harga_jual' => $harga_menu, // Simpan harga dari menu yang dipilih
            ]);

             // Akumulasikan total harga
            $total_pembayaran += $harga_menu * $value['qty'];
        }
        // Simpan total pembayaran ke dalam pesanan utama
        $pesanan->update(['total_pembayaran' => $total_pembayaran]);

        return redirect('/cekstatusPesanan')->with('pesan', 'Yeay pesanan kamu sudah tersimpan, mohon ditunggu yaa');
    }

    function cekstatusPesanan(){

        $dataMenu = Menu::get();
        return view('pelanggan-page/cek_statuspesanan', compact('dataMenu'));
        
    }



}
