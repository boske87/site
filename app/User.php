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
        'name', 'email', 'password','fullName','level','year','weight','height','phone','job','lang','city', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function images()
    {
        return $this->hasMany('App\UsersImage', 'userId', 'id');
    }

    public function offersGirlAcc()
    {
        return $this->hasMany('App\OfferAll', 'girlId', 'id')->where('status',2);
    }

    public function offersGirlDen()
    {
        return $this->hasMany('App\OfferAll', 'girlId', 'id')->where('status',1);
    }

    public function offersGirlWait()
    {
        return $this->hasMany('App\OfferAll', 'girlId', 'id')->where('status',0);
    }


}
