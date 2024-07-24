<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuratUsahaModel;
use App\Models\User;

class SuratUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            // Batasi jumlah data yang akan dimasukkan
            $jumlahData = 5;
            // Ambil semua id dari tabel users
        $userIds = User::pluck('id')->toArray();
    
            // Generate data dummy
            $suratusaha = [];
            for ($i = 0; $i < $jumlahData; $i++) {
                $suratusaha[] = [
                    'nama' => 'Nama ' . ($i + 1),
                    'tempat_lahir' => 'Tempat Lahir ' . ($i + 1),
                    'tanggal_lahir' => now()->subYears(rand(18, 70))->subMonths(rand(0, 11))->subDays(rand(0, 30)),
                    'jenis_kelamin' => rand(0, 1) ? 'Laki-laki' : 'Perempuan',
                    'alamat' => 'Alamat ' . ($i + 1),
                    'rt' =>($i + 1),
                    'rw' => ($i + 1),
                    'pekerjaan' => 'Pekerjaan ' . ($i + 1),
                    'nik' => rand(1000000000000000, 9999999999999999),
                    'kewarganegaraan' => 'Kewarganegaraan ' . ($i + 1),
                    'agama' =>  ['Islam', 'Khatolik', 'Protestan', 'Hindu', 'Buddha', 'Konghucu'][rand(0, 5)],
                    'jenis_usaha' =>  ['Perdagangan', 'Jasa', 'Kuliner', 'Industri Kreatif', 'Pertanian dan Perikanan','Manufaktur dan Produksi','Kesehatan','Transportasi dan Logistik','Teknologi Informasi','Pendidikan'][rand(0, 9)],
                    'mulai_usaha' => now()->subYears(rand(18, 70))->subMonths(rand(0, 11))->subDays(rand(0, 30)),
                    'status_usaha' => ['Milik Sendiri', 'Sewa', 'Kontrak'][rand(0, 2)],
                    'ukuran' => [12.5, 13.5, 12, 5.5][rand(0, 3)],
                    'alamat_usaha' => 'Alamat Usaha ' . ($i + 1),
                    'alasan' => 'Alasan ' . ($i + 1),
                    'id_users' => $userIds[array_rand($userIds)], // Ambil id_users secara acak dari daftar user yang ada
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            };
    
            // Masukkan data pengguna ke dalam tabel users
            SuratUsahaModel::insert($suratusaha);
        }
    }
}
