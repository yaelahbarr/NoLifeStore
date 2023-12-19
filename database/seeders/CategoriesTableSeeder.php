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
            ['id_category' => 1, 'category_name' => 'VGA', 'type' => 'pc-components'],
            ['id_category' => 2, 'category_name' => 'Motherboard', 'type' => 'pc-components'],
            ['id_category' => 3, 'category_name' => 'Power Supply', 'type' => 'pc-components'],
            ['id_category' => 4, 'category_name' => 'RAM', 'type' => 'pc-components'],
            ['id_category' => 5, 'category_name' => 'Mouse', 'type' => 'gaming-gears'],
        ]);
    }
}
