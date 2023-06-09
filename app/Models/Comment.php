<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $with = ['approvedReplies'];
    protected $fillable = [
        'content',
        'is_approved',
        'user_id',
        'post_id',
        'comment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class);
    }

    public function approvedReplies()
    {
        return $this->replies()->where('is_approved', true);
    }

    public function getCreateAtShamsi()
    {
        return new Verta($this->created_at);
    }

    public function getStatus()
    {
        return !! $this->is_approved
            ? 'تایید شده'
            : 'تایید نشده';
    }
}
