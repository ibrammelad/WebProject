<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','token','code','status','image','showMail','showName','showNearly','HaveCovid19','HelpUsers',
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

    public function nurse()
    {
        return $this->hasOne(Nurse::class);
    }
    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public  function getImageAttribute($val)
    {
        return ($val !== null) ? asset('/images/users/'.$val):
            "https://image.freepik.com/free-vector/illustration-user-avatar-icon_53876-5907.jpg";
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


}
