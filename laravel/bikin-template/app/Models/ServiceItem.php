<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use HasFactory;

    protected $table = 'service_items';

    protected $fillable = [
        'title',
        'description',
        'icon',        
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
