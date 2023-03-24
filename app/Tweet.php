<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{


    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    function current_user()
    {
        return auth()->user();
    }
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }
    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
                'liked' => $liked,
            ]
        );
    }
    public function dislike($user = null)
    {
        return $this->like($user, false);
    }
    public function isLikedBy(User $user)
    {
        // dd($this->id);
        return (bool) $user->likes()->where('tweet_id', $this->id)->where('liked', 1)->count();
    }

    public function isDislikedBy(User $user)
    {
        
        return (bool) $user->likes()->where('tweet_id', $this->id)->where('liked', 0)->count();

    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
