<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['id_product' => 1, 'id_category' => '1', 'product_name' => 'Nama VGA1', 'price' => '999999', 'stock' => '10', 'image' => 'bannervga.jpg'],
            ['id_product' => 2, 'id_category' => '1', 'product_name' => 'Nama VGA2', 'price' => '100000', 'stock' => '10', 'image' => 'bannervga.jpg'],
            ['id_product' => 3, 'id_category' => '2', 'product_name' => 'Nama Motherboard', 'price' => '100000', 'stock' => '10', 'image' => 'bannermobo.jpeg'],
            ['id_product' => 4, 'id_category' => '3', 'product_name' => 'Nama PowerSupply', 'price' => '100000', 'stock' => '10', 'image' => 'bannerpsu.jpg'],
            ['id_product' => 5, 'id_category' => '4', 'product_name' => 'Nama RAM', 'price' => '100000', 'stock' => '10', 'image' => 'bannerram.jpg'],
            ['id_product' => 6, 'id_category' => '5', 'product_name' => 'Nama Mouse', 'price' => '100000', 'stock' => '10', 'image' => 'bannermouse.jpg'],
            ['id_product' => 7, 'id_category' => '6', 'product_name' => 'Nama Keyboard', 'price' => '100000', 'stock' => '10', 'image' => 'bannerkeyboard.png'],
            ['id_product' => 8, 'id_category' => '7', 'product_name' => 'Nama Headset', 'price' => '100000', 'stock' => '10', 'image' => 'bannerheadset.jpg'],
            ['id_product' => 9, 'id_category' => '8', 'product_name' => 'Nama Kursi', 'price' => '100000', 'stock' => '10', 'image' => 'bannerkursi.jpg'],
        ]);
    }
}
