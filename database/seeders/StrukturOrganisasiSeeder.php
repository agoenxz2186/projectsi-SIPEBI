<?php

namespace Database\Seeders;

use App\Models\StrukturOrganisasiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $struktur = [
            [
                'nama' => 'ariyanto',
                'jabatan' => 'sekdes',
                'foto' => 'sdas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        // Masukkan data pengguna ke dalam tabel users
        StrukturOrganisasiModel::insert($struktur);
    }
}