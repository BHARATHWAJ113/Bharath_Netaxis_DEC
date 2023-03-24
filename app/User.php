<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'password', 'userpic','userbgpic', 'userdesc'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    function current_user()
    {
        return auth()->user();
    }
    public function getuserpicAttribute($value)
    {
        $valuee = $value ?: 'no_user.png';

        $userpicpath = "storage/$valuee";
        return asset($userpicpath);
    }
    public function getuserbgpicAttribute($value)
    {
        $valuee = $value ?: 'no_bg.jpg';

        $userbgpicpath = "storage/$valuee";
        return asset($userbgpicpath);
    }    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function timeline()
    {
        $members = $this->follows->pluck('id');

        return Tweet::whereIn('user_id', $members)->orWhere('user_id', $this->id)->WithLikes()->latest()->get();
    }
    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }
    public function path($append = '')
    {
        $path = route('profile', $this->username);
        
        return $append ? "{$path}/{$append}" : $path;
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }
    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }
    public function isfollowing(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }
    public function follows()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'following_user_id');
    }
    public function getRouteKeyName()
    {
        return 'username';
    }    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
