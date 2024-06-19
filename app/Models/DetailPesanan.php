<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_detailpesanan';
    // protected $primaryKey = 'id_pesanan';
    public $timestamps = false;
    protected $fillable = [
        'id_pesanan',
        'id_menu',
        'qty',
        'harga_jual',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'id_pesanan');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
