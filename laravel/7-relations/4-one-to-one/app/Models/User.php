<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['nickname', 'email', 'profil_id'];

    public function profil() {
        return $this->belongsTo(Profil::class);
    }
}
