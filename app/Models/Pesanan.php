<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_pesanan';
    protected $primaryKey = 'id_pesanan';
    public $timestamps = false;
    protected $fillable = [
        'id_pesanan',
        'tgl_pesanan',
        'nama_pelanggan',
        'catatan_pesanan',
        'jenis_pembayaran',
        'total_pembayaran',
        'status_pesanan',
    ];
}
