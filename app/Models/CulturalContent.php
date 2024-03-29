<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CulturalContent extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'content', 'slug', 'featured_image'];

}
