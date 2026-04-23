<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;
    protected $guarded = [];
    public function blogs()
        {
            return $this->hasMany(Blog::class,"user_id");
        
        }
    
    public function savedByUsers()
        {
            return $this->hasMany(SavedBlog::class,"blog_id");
        }    
}
