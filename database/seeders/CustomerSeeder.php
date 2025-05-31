<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Andi Saputra',
                'address' => 'Jl. Merdeka No. 12, Banda Aceh',
                'phone' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aminah',
                'address' => 'Jl. Teuku Umar No. 45, Lhokseumawe',
                'phone' => '082112345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Budi Santoso',
                'address' => 'Komplek Perumnas, Langsa',
                'phone' => '085298765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nurul Hidayati',
                'address' => 'Gampong Lamteh, Aceh Besar',
                'phone' => '083312345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
