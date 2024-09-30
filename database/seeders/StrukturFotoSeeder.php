<?php

namespace Database\Seeders;

use App\Models\StrukturFotoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $strukturfoto = [
            [
                'struktur_foto' => 'struktur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        StrukturFotoModel::insert($strukturfoto);
    }
}
