<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id_category' => 1, 'category_name' => 'VGA', 'type' => 'pc-components', 'image' => 'bannervga.jpg'],
            ['id_category' => 2, 'category_name' => 'Motherboard', 'type' => 'pc-components', 'image' => 'bannermobo.jpeg'],
            ['id_category' => 3, 'category_name' => 'Power Supply', 'type' => 'pc-components', 'image' => 'bannerpsu.jpg'],
            ['id_category' => 4, 'category_name' => 'RAM', 'type' => 'pc-components', 'image' => 'bannerram.jpg'],
            ['id_category' => 5, 'category_name' => 'Mouse', 'type' => 'gaming-gears', 'image' => 'bannermouse.jpg'],
            ['id_category' => 6, 'category_name' => 'Keyboard', 'type' => 'gaming-gears', 'image' => 'bannerkeyboard.png'],
            ['id_category' => 7, 'category_name' => 'Headset', 'type' => 'gaming-gears', 'image' => 'bannerheadset.jpg'],
            ['id_category' => 8, 'category_name' => 'Chair', 'type' => 'gaming-gears', 'image' => 'bannerkursi.jpg'],
        ]);
    }
}
