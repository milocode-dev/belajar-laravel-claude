<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create(['nama' => 'Haircare', 'deskripsi' => 'Ini adalah product usaha pertama kami.']);
        Kategori::create(['nama' => 'Keyboard', 'deskripsi' => 'Ini adalah product elektronik pertama kami.']);
        Kategori::create(['nama' => 'Serum', 'deskripsi' => 'Ini adalah product wajah pertama kami.']);
    }
}
