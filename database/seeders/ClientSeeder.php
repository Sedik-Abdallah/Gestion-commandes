<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nom"=> "Sedik Abdallah","activite"=>"dev","adresse"=>"casa","contact"=>"user1@gmail.com"],
            ["nom"=> "WebTech","activite"=>"dev","adresse"=>"casa","contact"=>"user1@gmail.com"],
            ["nom"=> "AchoTex","activite"=>"dev","adresse"=>"casa","contact"=>"user1@gmail.com"],
            ["nom"=> "AppDevs","activite"=>"dev","adresse"=>"casa","contact"=>"user1@gmail.com"],
            
        ];
        Client::insert($data);
    }
}
