<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedBlog extends Model
{
    /** @use HasFactory<\Database\Factories\SavedBlogFactory> */
    use HasFactory;
    protected $guarded = [];
    
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
