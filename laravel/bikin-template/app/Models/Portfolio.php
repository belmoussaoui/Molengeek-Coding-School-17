<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function cards() {
        return $this->hasMany(Card::class);
    }
}
