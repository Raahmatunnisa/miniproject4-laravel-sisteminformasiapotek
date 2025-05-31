<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Obat Bebas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Obat Resep', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vitamin dan Suplemen', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alat Kesehatan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Produk Herbal', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
