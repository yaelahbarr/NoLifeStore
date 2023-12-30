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
            ['id_product' => 1, 'id_category' => '1', 'product_name' => 'NVDIA RTX 4060 Ti GAMING X SLIM 8G', 'price' => '8000000', 'stock' => '10', 'image' => 'vga_rtx4060.png'],
            ['id_product' => 2, 'id_category' => '1', 'product_name' => 'NVDIA ASUS GeForce RTX3060', 'price' => '400000', 'stock' => '10', 'image' => 'vga_rtx3060.png'],
            ['id_product' => 3, 'id_category' => '1', 'product_name' => 'AMD RADEON RX6600XT', 'price' => '200000', 'stock' => '10', 'image' => 'vga_rx6600.jpg'],
            ['id_product' => 4, 'id_category' => '1', 'product_name' => 'AMD RADEON RX580', 'price' => '1259999', 'stock' => '10', 'image' => 'vga_rx580.jpg'],
            ['id_product' => 5, 'id_category' => '2', 'product_name' => 'MSI B760M', 'price' => '1689000', 'stock' => '10', 'image' => 'mb_msib760m.jpg'],
            ['id_product' => 6, 'id_category' => '2', 'product_name' => 'MSI B450M-APROMAX', 'price' => '970001', 'stock' => '10', 'image' => 'mb_msib450m.jpg'],
            ['id_product' => 7, 'id_category' => '2', 'product_name' => 'MSI MAGB560M', 'price' => '100000', 'stock' => '10', 'image' => 'mb_msimagb560.jpg'],
            ['id_product' => 8, 'id_category' => '2', 'product_name' => 'MSI B450', 'price' => '1531000', 'stock' => '10', 'image' => 'mb_msib405.jpeg'],
            ['id_product' => 9, 'id_category' => '3', 'product_name' => 'Gamemax GP-550', 'price' => '570000', 'stock' => '10', 'image' => 'ps_1.jpg'],
            ['id_product' => 10, 'id_category' => '3', 'product_name' => 'PSU PROMINER 1350W 80+ GOLD', 'price' => '1050000', 'stock' => '10', 'image' => 'ps_2.jpg'],
            ['id_product' => 11, 'id_category' => '3', 'product_name' => 'Redragon Gaming PC Power Supply RGPS 500W Full Range', 'price' => '684000', 'stock' => '10', 'image' => 'ps_3.jpg'],
            ['id_product' => 12, 'id_category' => '3', 'product_name' => 'Aerocool United Power 500W', 'price' => '479.000', 'stock' => '10', 'image' => 'ps_4.jpg'],
            ['id_product' => 13, 'id_category' => '4', 'product_name' => 'RAM APACER NOX 16GB KIT 3200', 'price' => '559000', 'stock' => '10', 'image' => 'ram_1.jpg'],
            ['id_product' => 14, 'id_category' => '4', 'product_name' => 'RAM Apacer Golden Panther 16GB', 'price' => '520000', 'stock' => '10', 'image' => 'ram_2.jpg'],
            ['id_product' => 15, 'id_category' => '4', 'product_name' => 'RAM PC KAIZEN DDR4 16GB 25600/3200 MHz', 'price' => '520000', 'stock' => '10', 'image' => 'ram_3.jpg'],
            ['id_product' => 16, 'id_category' => '4', 'product_name' => 'RAM DDR4 16GB PC 17000/2133Mhz', 'price' => '520000', 'stock' => '10', 'image' => 'ram_4.jpg'],
            ['id_product' => 17, 'id_category' => '5', 'product_name' => 'Nama Mouse', 'price' => '100000', 'stock' => '10', 'image' => 'bannermouse.jpg'],
            ['id_product' => 18, 'id_category' => '6', 'product_name' => 'Nama Keyboard', 'price' => '100000', 'stock' => '10', 'image' => 'bannerkeyboard.png'],
            ['id_product' => 19, 'id_category' => '7', 'product_name' => 'Nama Headset', 'price' => '100000', 'stock' => '10', 'image' => 'bannerheadset.jpg'],
            ['id_product' => 20, 'id_category' => '8', 'product_name' => 'Nama Kursi', 'price' => '100000', 'stock' => '10', 'image' => 'bannerkursi.jpg'],
        ]);
    }
}
