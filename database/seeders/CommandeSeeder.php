<?php

namespace Database\Seeders;

use App\Models\Commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["numCom"=> "com1111", "dateCom"=> Date("2022-11-03"), "clientId"=> 1],
            ["numCom"=> "com2222", "dateCom"=> Date("2022-11-04"), "clientId"=> 2],
            ["numCom"=> "com3333", "dateCom"=> Date("2022-11-06"), "clientId"=> 4],
            ["numCom"=> "com4444", "dateCom"=> Date("2022-11-05"), "clientId"=> 3],
            
        ];
        Commande::insert($data);
    }
}
