<?php

namespace Database\Seeders;

use App\Models\GeografisModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeografisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $geografis = [
            [
                'keterangan' => 'geografis',
                'nama' => 'geografis',
                'jumlah' => 'geografis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        GeografisModel::insert($geografis);
    }
}
