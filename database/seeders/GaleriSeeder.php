<?php

namespace Database\Seeders;

use App\Models\GaleriModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Batasi jumlah data yang akan dimasukkan
         $jumlahData = 5;

         // Generate data dummy
         $galeri = [];
         for ($i = 0; $i < $jumlahData; $i++) {
             $galeri[] = [
                 'judul' => 'Judul ' . ($i + 1),
                 'foto' => 'foto ' . ($i + 1),
                 'created_at' => now(),
                 'updated_at' => now(),
             ];
         };

        // Masukkan data pengguna ke dalam tabel users
        GaleriModel::insert($galeri);
    }
}
