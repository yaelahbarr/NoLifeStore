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
        DB::table('products')->insert([['id_product' => 1, 'id_category' => '1', 'product_name' => 'NVDIA RTX 4060 Ti GAMING X SLIM 8G', 'price' => '8000000', 'stock' => '10', 'image' => 'vga_rtx4060.png'],
            ['id_product' => 12, 'id_category' => '1', 'product_name' => 'NVDIA ASUS GeForce RTX3060', 'price' => '400000', 'stock' => '10', 'image' => 'vga_rtx3060.png'],
            ['id_product' => 13, 'id_category' => '1', 'product_name' => 'AMD RADEON RX6600XT', 'price' => '200000', 'stock' => '10', 'image' => 'vga_rx6600.jpg'],
            ['id_product' => 14, 'id_category' => '1', 'product_name' => 'AMD RADEON RX6600XT', 'price' => '1259999', 'stock' => '10', 'image' => 'vga_rx580.jpg'],
            ['id_product' => 3, 'id_category' => '2', 'product_name' => 'MSI B760M', 'price' => '1689000', 'stock' => '10', 'image' => 'motherboard_msib760m.jpeg'],
            ['id_product' => 31, 'id_category' => '2', 'product_name' => 'MSI B450M-APROMAX', 'price' => '970001', 'stock' => '10', 'image' => 'MOTHERBOARD_MSIB450M-APROMAX.jpeg'],
            ['id_product' => 32, 'id_category' => '2', 'product_name' => 'MSI MAGB560M', 'price' => '100000', 'stock' => '10', 'image' => 'MOTHERBOARD_MSIMAGB560MMORTARWIFI.jpeg'],
            ['id_product' => 33, 'id_category' => '2', 'product_name' => 'MSI B450', 'price' => '1531000', 'stock' => '10', 'image' => 'MOTHERBORD_MotherboardMSIB450GamingPlusMAXAM4B450DDR4USB3.jpeg'],
            ['id_product' => 4, 'id_category' => '3', 'product_name' => 'Nama PowerSupply', 'price' => '100000', 'stock' => '10', 'image' => 'bannerpsu.jpg'],
            ['id_product' => 5, 'id_category' => '4', 'product_name' => 'Nama RAM', 'price' => '100000', 'stock' => '10', 'image' => 'bannerram.jpg'],
            ['id_product' => 6, 'id_category' => '5', 'product_name' => 'Nama Mouse', 'price' => '100000', 'stock' => '10', 'image' => 'bannermouse.jpg'],
            ['id_product' => 7, 'id_category' => '6', 'product_name' => 'Nama Keyboard', 'price' => '100000', 'stock' => '10', 'image' => 'bannerkeyboard.png'],
            ['id_product' => 8, 'id_category' => '7', 'product_name' => 'Nama Headset', 'price' => '100000', 'stock' => '10', 'image' => 'bannerheadset.jpg'],
            ['id_product' => 9, 'id_category' => '8', 'product_name' => 'Nama Kursi', 'price' => '100000', 'stock' => '10', 'image' => 'bannerkursi.jpg'],
        ]);
    }
}
