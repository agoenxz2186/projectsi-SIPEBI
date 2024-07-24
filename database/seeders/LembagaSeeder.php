<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LembagaModel;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lembaga = [
            [
                'nama' => 'pkk alianyang',
                'keterangan' => 'dibuat pada 2001 dengan nama pkka yang dibuat oleh raude',
                'foto' => 'ini foto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        // Masukkan data pengguna ke dalam tabel users
        LembagaModel::insert($lembaga);
    }
}
