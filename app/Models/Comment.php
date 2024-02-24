<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

        // Relationship with its parent comment
        public function parent()
        {
            return $this->belongsTo(Comment::class, 'parent_id');
        }
    
        // Relationship with its child comments
        public function children()
        {
            return $this->hasMany(Comment::class, 'parent_id');
        }
    
        // Relationship with cultural content
        public function culturalContent()
        {
            return $this->belongsTo(CulturalContent::class);
        }
}
