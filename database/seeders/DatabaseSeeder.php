<?php

namespace Database\Seeders;

use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


    $this->call([
        CategorySeeder::class,
        ProductSeeder::class,
        CustomerSeeder::class,
        TransactionSeeder::class,
    ]);
    }
}
