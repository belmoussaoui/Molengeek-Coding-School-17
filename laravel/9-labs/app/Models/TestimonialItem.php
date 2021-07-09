<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialItem extends Model
{
    use HasFactory;

    public function testimonial() {
        return $this->belongsTo(Testimonal::class);
    }
}
