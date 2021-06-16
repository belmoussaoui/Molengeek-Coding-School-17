<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'button'
    ];

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function icons() {
        return $this->hasMany(Icon::class);
    }
}
