<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
