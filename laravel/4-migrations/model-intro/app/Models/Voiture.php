<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $table = "voitures";

    protected $fillable = [
        "nom",
        "description",
        "ddf",
        "model",
        "nds"
    ];

    protected $hidden = [
        "nds"
    ];

    // protected $casts = [];
}
