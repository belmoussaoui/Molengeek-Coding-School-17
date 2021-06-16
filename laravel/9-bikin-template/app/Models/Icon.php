<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $table = 'icons';

    protected $fillable = [
        'icon',
        'title',
        'description'
    ];

    public function about() {
        return $this->belongsTo(About::class);
    }
}
