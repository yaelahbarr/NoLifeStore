<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); 

        $categoryIds = DB::table('categories')->pluck('id_category');

        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'product_name' => $faker->unique()->words(3, true), // Nama produk
                'id_category' => $faker->randomElement($categoryIds), // ID kategori acak
                'stock' => $faker->numberBetween(1, 100), // Jumlah stok
                'price' => $faker->numberBetween(10000, 1000000), // Harga acak
                'image' => 'https://source.unsplash.com/400x400/?gaming', // URL foto dari Unsplash
            ]);
        }
    }
}
