<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prénom',
        'age',
        'ddn',
        'genre'
    ];

    protected $hidden = [
        'id',
        'nom',
        'prénom',
        'age',
        'ddn',
        'genre'
    ];
}
