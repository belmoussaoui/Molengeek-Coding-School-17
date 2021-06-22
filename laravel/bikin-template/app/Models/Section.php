<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';

    protected $fillable = [
        'title',
        'text'
    ];

    public function hero() {
        return $this->hasOne(Hero::class);
    }
    
    public function about() {
        return $this->hasOne(About::class);
    }
    
    public function feature() {
        return $this->hasOne(Feature::class);
    }
}
