<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    const LIMIT = 150;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'pic',
        'content',
        'user_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreateAtShamsi()
    {
        return new Verta($this->created_at);
    }

    public function getPostsUrl()
    {
        return asset('posts/pic/' . $this->pic);
    }

    public function limit()
    {
        return Str::limit($this->content, Post::LIMIT );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function getIsUserLikedAttribute()
    {
        return $this->likes()->where('user_id', auth()->user()->id)->exists();
    }
}
