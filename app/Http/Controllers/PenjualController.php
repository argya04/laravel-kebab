<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File ;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class PenjualController extends Controller
{
    function dashboard(){
        return view('penjual-page/dashboard');
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Awal Fungsi kelola menu (CRUD)
     */

    function kelolaMenu()
    {
        $dataMenu = Menu::get();
        return view('penjual-page/kelola_menu', compact('dataMenu'));
    }


    public function tambahMenu()
    {
        return view('penjual-page/tambah_menu');
    }

    public function simpanMenu(Request $request)
    {
        // rule validasi form
        $request->validate([
              'frmNamaMenu' =>'required',
               'frmDeskripsi'  =>'required',
               'foto' => 'required|mimes:png,jpg,jpeg|max:2048',
               'frmHarga' =>'required'
            ],
            [
                'frmNamaMenu.required' =>'Nama menu harus diisi',
                'frmDeskripsi.required' =>'Deskripsi menu harus diisi',
                'foto.required' =>'Foto harus diisi',
                'foto.mimes' =>'Format file harus hanya berupa *png*,/*jpg*/,*jpeg*',
                'foto.max' =>'Ukuran gambar tidak boleh melebihi 2 MB',
                'frmHarga.required' =>'Harga menu harus diisi',
            ]
        );

        // fungsi mengambil inputan dari form dan simpan kedalam database
        $data_menu= [
            'nama_menu' => $request->frmNamaMenu,
            'deskripsi_menu' => $request->frmDeskripsi,
            'foto_menu' => $request->foto,
            'harga_menu' => $request->frmHarga
        ];

        // fungsi pengecekan gambar yang diupload
        if ($request->hasFile('foto')){
            $file_foto = $request->file('foto');
            $nama_foto = $file_foto->hashName();
            $file_foto->move(public_path('foto-menu'), $nama_foto);

            $data_menu['foto_menu'] = $nama_foto;
        }

        Menu::create($data_menu);

        return redirect('penjual/kelolaMenu')->with('pesan', 'Menu beru berhasil ditambahkan');
    }

    // form edit menu
    public function editMenu(Request $request, string $id)
    {
        $data = Menu::where('id_menu',$id)->first();
        return view('penjual-page/edit_menu')->with('dataMenu',$data);
        
    }

    // fungsi update menu
    public function updateMenu(Request $request,string $id)
    {
         // rule validasi form update
         $request->validate([
             'frmNamaMenu' =>'required',
             'frmDeskripsi'  =>'required',
             'frmHarga' =>'required'
          ],
          [
              'frmNamaMenu.required' =>'Nama menu harus diisi',
              'frmDeskripsi.required' =>'Deskripsi menu harus diisi',
              'frmHarga.required' =>'Harga menu harus diisi',
          ]
      );

      // fungsi mengambil inputan dari form dan simpan kedalam database
      $dataEdited= [
          'nama_menu' => $request->frmNamaMenu,
          'deskripsi_menu' => $request->frmDeskripsi,
          'harga_menu' => $request->frmHarga
      ];

      // fungsi pengecekan gambar yang diupload
      if ($request->hasFile('foto')){
         $request->validate([
            'foto' => 'mimes:png,jpg,jpeg|max:2048'
         ],
         [
            //  'foto.required' =>'Foto harus diisi',
             'foto.mimes' =>'Format file harus hanya berupa *png*,/*jpg*/,*jpeg*',
             'foto.max' =>'Ukuran gambar tidak boleh melebihi 2 MB',
         ]
         );

          $file_foto = $request->file('foto');
          $nama_foto = $file_foto->hashName();
          $file_foto->move(public_path('foto-menu'), $nama_foto);

          $dataMenu = Menu::where('id_menu', $id)->first();
          File::delete(public_path('foto-menu').'/'.$dataMenu->foto_menu);

          $dataEdited['foto_menu'] = $nama_foto;
      }

      Menu::where('id_menu', $id)->update($dataEdited);

      return redirect('penjual/kelolaMenu')->with('pesan', 'Data menu berhasil diubah');
    }

    // fungsi delete menu
    public function deleteMenu(Request $request, string $id)
    {
        $data = Menu::where('id_menu', $id)->first();
        File::delete(public_path('foto-menu').'/'.$data->foto_menu);
        Menu::where('id_menu', $id)->delete();
        return redirect('penjual/kelolaMenu')->with('pesan', 'Data menu berhasil dihapus');
    }

     /**
     * Akhir Fungsi kelola menu (CRUD)
     */

    //  Awal fungsi kelola data penjual
     function kelolaPenjual()
    {
        $dataPenjual = User::get();
        return view('penjual-page/kelola_penjual', compact('dataPenjual'));
    }


    public function tambahPenjual()
    {
        $dataPenjual = User::first();
        return view('penjual-page/tambah_penjual', compact('dataPenjual'));
    }

    public function simpanPenjual(Request $request)
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

        User::create($data_penjual);

        return redirect('penjual/kelolaPenjual')->with('pesan', 'Data penjual berhasil ditambahkan');
    }

    // form edit penjual
    public function editPenjual(Request $request, string $id)
    {
        $data = User::where('id',$id)->first();
        return view('penjual-page/edit_penjual')->with('dataPenjual',$data);
        
    }

    // fungsi update penjual
    public function updatePenjual(Request $request,string $id)
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
             'frmPassword.required' =>'Password harus diisi',
             'frmNamaLengkap.required' =>'Nama Lengkap harus diisi',
             'frmTglLahir.required' =>'Tanggal Lahir harus diisi',
             'frmAlamat.required' =>'Alamat harus diisi',
             'frmnoTelepon.required' =>'Nomor telepon  harus diisi',
             'frmRole.required' =>'Role harus diisi',
         ]
     );

     // fungsi mengambil inputan dari form dan simpan kedalam database
     $dataEdited= [
        'username' => $request->frmUsername,
        'password' => Hash::make($request->frmPassword),
        'nama_lengkap' => $request->frmNamaLengkap,
        'tgl_lahir' => $request->frmTglLahir,
        'alamat' => $request->frmAlamat,
        'no_telepon' => $request->frmnoTelepon,
        'role' => $request->frmRole
    ];

      User::where('id', $id)->update($dataEdited);

      return redirect('penjual/kelolaPenjual')->with('pesan', 'Data penjual berhasil diubah');
    }

    // fungsi delete penjual
    public function deletePenjual(Request $request, string $id)
    {
        $data = User::where('id', $id)->first();
        User::where('id', $id)->delete();
        return redirect('penjual/kelolaPenjual')->with('pesan', 'Data penjual berhasil dihapus');
    }

     /**
     * Akhir Fungsi kelola penjual (CRUD)
     */

     //  Awal fungsi profile
     function profile()
    {
        $dataPenjual = User::get();
        return view('penjual-page/profile', compact('dataPenjual'));
    }



   
}
