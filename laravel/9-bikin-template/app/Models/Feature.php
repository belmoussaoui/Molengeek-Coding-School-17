<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'features';

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function featureItems() {
        return $this->hasMany(FeatureItem::class);
    }
}
