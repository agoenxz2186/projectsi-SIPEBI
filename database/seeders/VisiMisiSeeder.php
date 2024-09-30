<?php

namespace Database\Seeders;

use App\Models\VisiMisiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $visimisi = [
            [
                'visi' => 'visi',
                'misi' => 'misi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        VisiMisiModel::insert($visimisi);
    }
}
