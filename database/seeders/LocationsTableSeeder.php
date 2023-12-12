<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Province;
use App\Models\City;
use GuzzleHttp\Client;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client();
        try {
            // Fetch provinces
            $response = $client->get('https://api.rajaongkir.com/starter/province', [
                'headers' => [
                    'key' => '4fa684f231ab5649c73b568dad928bac',
                ],
            ]);
            $provinces = json_decode($response->getBody()->getContents(), true)['rajaongkir']['results'];
        
            // Process provinces
            $data_province = [];
            foreach ($provinces as $a) {
                $data_province[] = [
                    'id_province' => $a['province_id'],
                    'title' => $a['province'],
                ];
            }
        
            // Fetch cities
            $response = $client->get('https://api.rajaongkir.com/starter/city', [
                'headers' => [
                    'key' => '4fa684f231ab5649c73b568dad928bac',
                ],
            ]);
            $cities = json_decode($response->getBody()->getContents(), true)['rajaongkir']['results'];
        
            // Process cities
            $data_city = [];
            foreach ($cities as $b) {
                $data_city[] = [
                    'id_city' => $b['city_id'],
                    'id_province' => $b['province_id'],
                    'title' => $b['city_name'],
                    'type' => $b['type'], //kabupaten atau kota
                    'postal_code' => $b['postal_code'],
                ];
            }
        
            // Insert data into the database
            Province::insert($data_province);
            City::insert($data_city);
        } catch (RequestException $e) {
            // Handle the exception, e.g., log or throw an error
            dump($e->getResponse()->getBody()->getContents());
        }
    }
}
