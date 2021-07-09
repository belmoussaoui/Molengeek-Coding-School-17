<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    
    public function featureItems() {
        return $this->hasMany(FeatureItem::class);
    }
}
