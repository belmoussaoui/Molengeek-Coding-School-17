<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialItem extends Model
{
    use HasFactory;


    protected $table = 'testimonial_items';

    protected $fillable = [
        'image',
        'quote',
        'name',  
        'job'      
    ];

    public function testimonial() {
        return $this->belongsTo(Testimonial::class);
    }
}
