<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureItem extends Model
{
    use HasFactory;

    protected $table = 'feature_items';

    protected $fillable = [
        'title',
        'description',
        'check1',        
        'check2',
        'check3',
        'image',
        'text',
    ];

    public function feature() {
        return $this->belongsTo(Feature::class);
    }
}
