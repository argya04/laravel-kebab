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
}
