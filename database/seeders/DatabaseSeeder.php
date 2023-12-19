<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'NoLife Admin',
            'email' => 'nolifestore@gmail.com',
            'password' => bcrypt('nolifestore'),
            'provider' => 'local',
            'role' => 'admin'
        ]);

        // tambah data province dan cities dari API RajaOngkir 
        $this->call(LocationsTableSeeder::class);
        
        //seed category dan product
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
