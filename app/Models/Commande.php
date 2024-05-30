<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['numCom', 'dateCom', 'clientId'];

    public function client(){
        return $this->belongsTo(Client::class, 'clientId');
    }
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'commande_articles', 'commandeId', 'articleId');
    }
    public function getTotal(){
        $total=0;
        foreach ($this->articles as $a){
            $total += $a->prix * $a->quantite;
        }
        return $total;
    }
}
