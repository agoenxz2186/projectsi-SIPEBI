<?php

namespace Database\Seeders;

use App\Models\TentangModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tentang = [
            [
                'deskripsi' => 'tentang',
                'created_at' => now(),
                'updated_at' => now(),
                'foto' => 'tentang.jpg',
            ],
        ];

        TentangModel::insert($tentang);
    }
}
