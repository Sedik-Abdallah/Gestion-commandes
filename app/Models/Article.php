<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'designation','quantite', 'prix'];

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commande__articles', 'articleId', 'commandeId');
    }
}
