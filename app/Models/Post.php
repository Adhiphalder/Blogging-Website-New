<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;

    protected $table = "posts";
    // protected $primarykey = "post_id";
    protected $primaryKey = "post_id";
    protected $fillable = [
        'post_caption',
        'post_desc',
        'post_img',
        'user_id',
        'community_id',
        // 'up_votes',
        // 'down_votes',
        // 'comments',
        'share',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }
    public function community()
    {
        return $this->belongsTo(Communities::class, 'community_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
