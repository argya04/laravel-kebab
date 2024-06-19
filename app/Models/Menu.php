<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'tb_menu';
    protected $primaryKey = 'id_menu';
    public $timestamps = false;
    protected $fillable = [
        'id_menu',
        'nama_menu',
        'deskripsi_menu',
        'foto_menu',
        'harga_menu'
    ];

    
}
