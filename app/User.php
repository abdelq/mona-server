<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * TODO.
     */
    public function isAdmin()
    {
        return $this->role == 'admin';
    }

    /**
     * The artworks that belong to the user.
     */
    public function artworks()
    {
        return $this->belongsToMany('App\Artwork')
                    ->withPivot(['rating', 'comment', 'photo'])
                    ->withTimestamps();
    }
}
