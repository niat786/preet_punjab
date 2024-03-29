<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poet extends Model
{
    use HasFactory;
    protected $fillable = ['pen_name','cover_image','poet_image', 'slug', 'real_name', 'date_of_birth', 'bio','google_map','death_date', 'birth_place'];
}
