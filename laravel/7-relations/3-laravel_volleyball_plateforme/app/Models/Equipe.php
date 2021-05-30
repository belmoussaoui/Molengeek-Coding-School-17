<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public function continent() {
        return $this->belongsTo(Continent::class);
    }

    public function joueurs() {
        return $this->hasMany(Joueur::class);
    }
}