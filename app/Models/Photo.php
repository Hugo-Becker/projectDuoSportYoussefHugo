<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    public function joueurs()
    {
        return $this->hasMany(Joueur::class,'photo_id');
    }
}
