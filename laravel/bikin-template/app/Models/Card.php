<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'image',
        'category',
    ];

    public function portfolio() {
        return $this->belongsTo(Portfolio::class);
    }
}
