<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SktmModel;
use App\Models\User;
class SktmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Batasi jumlah data yang akan dimasukkan
        $jumlahData = 5;
        // Ambil semua id dari tabel users
        $userIds = User::pluck('id')->toArray();

        // Generate data dummy
        $sktm = [];
        for ($i = 0; $i < $jumlahData; $i++) {
            $sktm[] = [
                'nama' => 'Nama ' . ($i + 1),
                'tempat_lahir' => 'Tempat Lahir ' . ($i + 1),
                'tanggal_lahir' => now()->subYears(rand(18, 70))->subMonths(rand(0, 11))->subDays(rand(0, 30)),
                'jenis_kelamin' => rand(0, 1) ? 'Laki-laki' : 'Perempuan',
                'alamat' => 'Alamat ' . ($i + 1),
                'rt' => ($i + 1),
                'rw' => ($i + 1),
                'pekerjaan' => 'Pekerjaan ' . ($i + 1),
                'kewarganegaraan' => 'Kewarganegaraan ' . ($i + 1),
                'agama' =>  ['Islam', 'Khatolik', 'Protestan', 'Hindu', 'Buddha', 'Konghucu'][rand(0, 5)],
                'status_perkawinan' => ['Belum Menikah', 'Menikah', 'Cerai Hidup', 'Cerai Mati'][rand(0, 3)],
                'nik' => rand(1000000000000000, 9999999999999999),
                'nomor_kk' => rand(1000000000000000, 9999999999999999),
                'alasan' => 'Alasan ' . ($i + 1),
                'id_users' => $userIds[array_rand($userIds)], // Ambil id_users secara acak dari daftar user yang ada
                'created_at' => now(),
                'updated_at' => now(),
            ];
        };

        // Masukkan data pengguna ke dalam tabel users
        SktmModel::insert($sktm);
    }
}
