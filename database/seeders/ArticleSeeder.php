<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["numero"=> "AR001", "designation"=> "Clavier Bilingue","quantite"=>5, "prix"=> 30.25],
            ["numero"=> "AR002", "designation"=> "RAM 16 DDR4","quantite"=>2, "prix"=> 450.45],
            ["numero"=> "AR003", "designation"=> "Souris Optique","quantite"=>5, "prix"=> 32.45],
            
        ];
        Article::insert($data);
    }
}
