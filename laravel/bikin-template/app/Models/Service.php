<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function serviceItems() {
        return $this->hasMany(ServiceItem::class);
    }
}
