<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferAll extends Model
{
    protected $table = 'offers_all';
    protected $fillable = [
        'offerId', 'girlId', 'status'
    ];



    public function offer()
    {
        return $this->belongsTo('App\Offer', 'offerId' );
    }

    public function offerToGirl()
    {
        return $this->hasOne('App\User', 'id','girlId' );
    }
}
