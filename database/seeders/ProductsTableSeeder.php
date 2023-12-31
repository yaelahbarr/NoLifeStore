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
            ['id_product' => 1, 'id_category' => '1', 'product_name' => 'NVDIA RTX 4060 Ti GAMING X SLIM 8G', 'price' => '8000000', 'stock' => '10', 'image' => 'vga_1.png'],
            ['id_product' => 2, 'id_category' => '1', 'product_name' => 'NVDIA ASUS GeForce RTX3060', 'price' => '400000', 'stock' => '10', 'image' => 'vga_2.png'],
            ['id_product' => 3, 'id_category' => '1', 'product_name' => 'AMD RADEON RX6600XT', 'price' => '200000', 'stock' => '10', 'image' => 'vga_3.jpg'],
            ['id_product' => 4, 'id_category' => '1', 'product_name' => 'AMD RADEON RX580', 'price' => '1259999', 'stock' => '10', 'image' => 'vga_4.jpg'],
            ['id_product' => 5, 'id_category' => '2', 'product_name' => 'MSI B760M', 'price' => '1689000', 'stock' => '10', 'image' => 'mb_1.jpg'],
            ['id_product' => 6, 'id_category' => '2', 'product_name' => 'MSI B450M-APROMAX', 'price' => '970001', 'stock' => '10', 'image' => 'mb_2.jpg'],
            ['id_product' => 7, 'id_category' => '2', 'product_name' => 'MSI MAGB560M', 'price' => '100000', 'stock' => '10', 'image' => 'mb_3.jpg'],
            ['id_product' => 8, 'id_category' => '2', 'product_name' => 'MSI B450', 'price' => '1531000', 'stock' => '10', 'image' => 'mb_4.jpg'],
            ['id_product' => 9, 'id_category' => '3', 'product_name' => 'Gamemax GP-550', 'price' => '570000', 'stock' => '10', 'image' => 'ps_1.jpg'],
            ['id_product' => 10, 'id_category' => '3', 'product_name' => 'PSU PROMINER 1350W 80+ GOLD', 'price' => '1050000', 'stock' => '10', 'image' => 'ps_2.jpg'],
            ['id_product' => 11, 'id_category' => '3', 'product_name' => 'Redragon Gaming PC Power Supply RGPS 500W Full Range', 'price' => '684000', 'stock' => '10', 'image' => 'ps_3.jpg'],
            ['id_product' => 12, 'id_category' => '3', 'product_name' => 'Aerocool United Power 500W', 'price' => '479000', 'stock' => '10', 'image' => 'ps_4.jpg'],
            ['id_product' => 13, 'id_category' => '4', 'product_name' => 'RAM APACER NOX 16GB KIT 3200', 'price' => '559000', 'stock' => '10', 'image' => 'ram_1.jpg'],
            ['id_product' => 14, 'id_category' => '4', 'product_name' => 'RAM Apacer Golden Panther 16GB', 'price' => '520000', 'stock' => '10', 'image' => 'ram_2.jpg'],
            ['id_product' => 15, 'id_category' => '4', 'product_name' => 'RAM PC KAIZEN DDR4 16GB 25600/3200 MHz', 'price' => '520000', 'stock' => '10', 'image' => 'ram_3.jpg'],
            ['id_product' => 16, 'id_category' => '4', 'product_name' => 'RAM DDR4 16GB PC 17000/2133Mhz', 'price' => '520000', 'stock' => '10', 'image' => 'ram_4.jpg'],
            ['id_product' => 17, 'id_category' => '5', 'product_name' => 'Logitech G102', 'price' => '269000', 'stock' => '90', 'image' => 'ms_1.jpg'],
            ['id_product' => 18, 'id_category' => '5', 'product_name' => 'Sades Raiden S33', 'price' => '357000', 'stock' => '55', 'image' => 'ms_2.png'],
            ['id_product' => 19, 'id_category' => '5', 'product_name' => 'Razer Basilisk V3', 'price' => '699000', 'stock' => '55', 'image' => 'ms_3.jpg'],
            ['id_product' => 20, 'id_category' => '5', 'product_name' => 'Fantech ARIA XD7', 'price' => '665000', 'stock' => '45', 'image' => 'ms_4.jpg'],
            ['id_product' => 21, 'id_category' => '6', 'product_name' => 'Rexus MX5.2', 'price' => '359000', 'stock' => '45', 'image' => 'ky_1.jpg'],
            ['id_product' => 22, 'id_category' => '6', 'product_name' => 'Daxa M64 Ultimate', 'price' => '999000', 'stock' => '30', 'image' => 'ky_2.png'],
            ['id_product' => 23, 'id_category' => '6', 'product_name' => 'Fantech MAXFIT81', 'price' => '1289000', 'stock' => '35', 'image' => 'ky_3.png'],
            ['id_product' => 24, 'id_category' => '6', 'product_name' => 'Fantech ATOM96 MK890', 'price' => '249000', 'stock' => '45', 'image' => 'ky_4.jpg'],
            ['id_product' => 25, 'id_category' => '7', 'product_name' => 'HyperX Cloud III', 'price' => '1213000', 'stock' => '35', 'image' => 'hd_1.jpg'],
            ['id_product' => 26, 'id_category' => '7', 'product_name' => 'Fantech FLASH HQ53', 'price' => '115000', 'stock' => '25', 'image' => 'hd_2.jpg'],
            ['id_product' => 27, 'id_category' => '7', 'product_name' => 'Logitech G733', 'price' => '1669000', 'stock' => '25', 'image' => 'hd_3.jpg'],
            ['id_product' => 28, 'id_category' => '7', 'product_name' => 'Rexus Headset Gaming Thundervox HX9', 'price' => '259000', 'stock' => '50', 'image' => 'hd_4.jpg'],
            ['id_product' => 29, 'id_category' => '8', 'product_name' => 'MOVIO GAMING CHAIR', 'price' => '1250000', 'stock' => '35', 'image' => 'kr_1.jpg'],
            ['id_product' => 30, 'id_category' => '8', 'product_name' => 'ONEX GX3 Premium Quality Gaming Chair', 'price' => '2149000', 'stock' => '65', 'image' => 'kr_2.jpg'],
            ['id_product' => 31, 'id_category' => '8', 'product_name' => 'SAGE CHAIR GAMING 145', 'price' => '200000', 'stock' => '25', 'image' => 'kr_3.jpg'],
            ['id_product' => 32, 'id_category' => '8', 'product_name' => 'Terraflex TF-1 Gaming', 'price' => '100000', 'stock' => '15', 'image' => 'kr_4.jpg'],
        ]);
    }
}
