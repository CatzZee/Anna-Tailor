<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category; // Pastikan untuk mengimpor model Category

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel sebelum mengisi untuk menghindari duplikat saat seeding ulang
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $categories = [
            ['name' => 'Elektronik', 'slug' => 'elektronik'],
            ['name' => 'Pakaian', 'slug' => 'pakaian'],
            ['name' => 'Buku & Majalah', 'slug' => 'buku-majalah'],
            ['name' => 'Kebutuhan Rumah Tangga', 'slug' => 'kebutuhan-rumah-tangga'],
            ['name' => 'Alat Tulis Kantor', 'slug' => 'alat-tulis-kantor'],
        ];

        // Masukkan data ke tabel categories
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}