<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'pic',
        'content',
        'user_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
