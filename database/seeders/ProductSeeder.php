<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product; // Impor model Product
use App\Models\Category; // Impor model Category

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel products
        Product::truncate();

        // Ambil semua ID kategori yang ada
        $categoryIds = Category::pluck('id')->all();

        if (empty($categoryIds)) {
            $this->command->info('Tidak ada kategori. Silakan jalankan CategorySeeder terlebih dahulu.');
            return;
        }

        $products = [
            [
                'name' => 'Laptop ProBook 14"',
                'description' => 'Laptop bertenaga dengan prosesor terbaru untuk produktivitas maksimal.',
                'price' => 12500000.00,
                'stock' => 15,
            ],
            [
                'name' => 'T-Shirt Katun Polos',
                'description' => 'Kaos nyaman untuk sehari-hari, terbuat dari 100% katun combed.',
                'price' => 85000.00,
                'stock' => 120,
            ],
            [
                'name' => 'Novel "Bumi Manusia"',
                'description' => 'Karya sastra legendaris oleh Pramoedya Ananta Toer.',
                'price' => 110000.00,
                'stock' => 50,
            ],
            [
                'name' => 'Wajan Anti Lengket 24cm',
                'description' => 'Memasak lebih mudah tanpa khawatir makanan lengket.',
                'price' => 150000.00,
                'stock' => 75,
            ],
            [
                'name' => 'Paket Pulpen Gel (Isi 12)',
                'description' => 'Berbagai warna untuk mencatat dan berkreasi.',
                'price' => 45000.00,
                'stock' => 200,
            ],
            [
                'name' => 'Mouse Wireless Silent Click',
                'description' => 'Mouse tanpa kabel dengan klik yang senyap, tidak mengganggu.',
                'price' => 175000.00,
                'stock' => 80,
            ],
            [
                'name' => 'Kemeja Flanel Lengan Panjang',
                'description' => 'Gaya kasual dan hangat, cocok untuk cuaca dingin.',
                'price' => 220000.00,
                'stock' => 60,
            ],
            [
                'name' => 'Buku Tulis Hard Cover A5',
                'description' => 'Buku catatan berkualitas untuk ide-ide brilian Anda.',
                'price' => 35000.00,
                'stock' => 150,
            ],
            [
                'name' => 'Spatula Silikon Tahan Panas',
                'description' => 'Aman untuk semua jenis panci dan wajan.',
                'price' => 25000.00,
                'stock' => 300,
            ],
            [
                'name' => 'Keyboard Mechanical RGB',
                'description' => 'Pengalaman mengetik yang memuaskan dengan lampu RGB yang bisa diatur.',
                'price' => 850000.00,
                'stock' => 30,
            ],
        ];

        // Masukkan data ke tabel products
        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'category_id' => $categoryIds[array_rand($categoryIds)], // Pilih ID kategori secara acak
            ]);
        }
    }
}