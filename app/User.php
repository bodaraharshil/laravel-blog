<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    function myCmp()
    {
        return $this->hasOne('App\Company','user_id','id');
    }
}
