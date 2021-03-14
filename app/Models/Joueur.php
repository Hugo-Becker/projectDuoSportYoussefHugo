<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    public function equipes()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id');
    }
    public function photos()
    {
        return $this->belongsTo(Photo::class, 'photo_id');
    }
}
