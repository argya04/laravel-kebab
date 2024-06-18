<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'penjual01',
                'password' => Hash::make('tet0101'),
                'nama_lengkap' => 'Argya Falan Rifqi',
                'tgl_lahir' => '2004-04-02',
                'alamat' => 'Jalan Murai 2, Serua Indah, Ciputat, Tangerang Selatan.',
                'no_telepon' => '081386230686',
                'role' => 'penjual',
            ]
        ];
        
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
