<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'date' => now()->subDays(3)->toDateString(),
                'customer_id' => 1,
                'product_id' => 1,
                'qty' => 2,
                'total' => 2 * 5000, // harga produk ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => now()->subDays(2)->toDateString(),
                'customer_id' => 2,
                'product_id' => 2,
                'qty' => 1,
                'total' => 12000, // harga produk ID 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => now()->subDay()->toDateString(),
                'customer_id' => 3,
                'product_id' => 3,
                'qty' => 3,
                'total' => 3 * 8000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
