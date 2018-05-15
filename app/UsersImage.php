<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersImage extends Model
{
    protected $table = 'usersImage';
    protected $fillable = [
        'imageName', 'userId', 'ordering'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'userId' );
    }
}
