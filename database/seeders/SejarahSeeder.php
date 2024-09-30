<?php

namespace Database\Seeders;

use App\Models\SejarahModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sejarah = [
            [
                'deskripsi' => 'sejarah',
                'created_at' => now(),
                'updated_at' => now(),
                'foto' => 'sejarah.jpg',
            ],
        ];

        SejarahModel::insert($sejarah);
    }
}
