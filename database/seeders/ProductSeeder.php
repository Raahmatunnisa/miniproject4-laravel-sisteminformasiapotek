<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1, // Obat Bebas
                'name' => 'Paracetamol',
                'description' => 'Obat untuk menurunkan demam dan meredakan nyeri.',
                'price' => 5000,
                'image' => 'paracetamol.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Obat Resep
                'name' => 'Amoxicillin',
                'description' => 'Antibiotik untuk mengobati infeksi bakteri.',
                'price' => 12000,
                'image' => 'amoxicillin.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Vitamin dan Suplemen
                'name' => 'Vitamin C 500mg',
                'description' => 'Meningkatkan daya tahan tubuh dan antioksidan.',
                'price' => 8000,
                'image' => 'vitamin_c.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4, // Alat Kesehatan
                'name' => 'Termometer Digital',
                'description' => 'Alat untuk mengukur suhu tubuh secara cepat dan akurat.',
                'price' => 25000,
                'image' => 'termometer.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
