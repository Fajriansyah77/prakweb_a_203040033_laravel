<?php

namespace App\Models;

// use Illuminate\Dartabase\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}