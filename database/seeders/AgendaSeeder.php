<?php

namespace Database\Seeders;

use App\Models\AgendaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agenda = [
            [
                'kegiatan' => 'musrembang di ikuti oleh kades',
                'keterangan' => 'kades',
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        // Masukkan data pengguna ke dalam tabel users
        AgendaModel::insert($agenda);
    }
}
