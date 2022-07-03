<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function friends()
    {
        return $this->acceptedFriendsOfMine->merge($this->acceptedFriendsOf);
    }

    public function getFriendsAttribute()
    {
        return $this->acceptedFriendsOfMine->merge($this->acceptedFriendsOf);
    }

    public function addFriend(User $friend)
    {
        $this->friendsOfMine()->syncWithoutDetaching($friend, ['accepted' => false]);
    }

    public function acceptFriend(User $friend)
    {
        $friend->friendsOfMine()->updateExistingPivot($this->id, ['accepted' => true]);
    }

    public function removeFriend(User $friend)
    {
        $this->friendsOfMine()->detach($friend);
        $this->friendsOf()->detach($friend);
    }

    public function pendingFriendsOfMine()
    {
        return $this->friendsOfMine()->wherePivot('accepted', false);
    }

    public function acceptedFriendsOfMine()
    {
        return $this->friendsOfMine()->wherePivot('accepted', true);
    }

    public function acceptedFriendsOf()
    {
        return $this->friendsOf()->wherePivot('accepted', true);
    }

    public function friendsOfMine()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')->withPivot('accepted');
    }

    public function friendsOf()
    {
        return $this->belongsToMany(User::class, 'friends', 'friend_id', 'user_id')->withPivot('accepted');
    }

    public function pendingFriendsOf()
    {
        return $this->friendsOf()->wherePivot('accepted', false);
    }
}
