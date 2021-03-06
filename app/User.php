<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Blog;
use App\Todo;
use App\Note;
use App\Event;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'role', 'enable', 'gender', 'avatar'
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

    public function isAdmin()
    {
        return $this->role == 'Admin';
    }

    public function isEnable()
    {
        return $this->enable == 1;
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function todo()
    {
        return $this->hasMany(Todo::class);
    }

    public function note()
    {
        return $this->hasMany(Note::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
