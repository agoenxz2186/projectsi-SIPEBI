<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Berita;  
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ambil ID pengguna pertama dari tabel users
        $user_id = User::first()->id;

        // Buat beberapa data berita untuk seeder
        $berita = [
            [
                'judul' => 'Judul Berita 1',
                'isi' => 'Isi berita pertama.',
                'foto' => 'foto',
                'id_users' => $user_id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Judul Berita 2',
                'isi' => 'Isi berita kedua.',
                'foto' => 'foto',
                'id_users' => $user_id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data berita lainnya sesuai kebutuhan
        ];

        // Masukkan data berita ke dalam tabel berita
        DB::table('berita')->insert($berita);
    }
}
