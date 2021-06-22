<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;


    protected $table = 'testimonials';

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function testimonialItems() {
        return $this->hasMany(TestimonialItem::class);
    }
}
