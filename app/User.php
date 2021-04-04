<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
}


// <?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;
// use Laravel\Passport\HasApiTokens;

// class User extends Model
// {
//     use HasApiTokens;
//     // function myCmp()
//     // {
//     //     // return $this->hasOne('App\Company','user_id','id');
//     //     return $this->hasMany('App\Company');
//     // }
// }
