<?php

namespace Database\Seeders;

use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['nama' => 'Sepatu', 'harga' => 150000]);
        Product::create(['nama' => 'Jam', 'harga' => 70000]);
        Product::create(['nama' => 'Parfum', 'harga' => 120000]);
    }
}
