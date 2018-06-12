<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'manId', 'maxGirls', 'place','city',
        'descOffer','price','timeOfferStart',
        'timeOfferRange', 'placeAddress', 'placeAddress','offerType','timeOfferReturn',
        'travelOption'
    ];


    public function offerByMan()
    {
        return $this->hasOne('App\User', 'id','manId' );
    }

    public function myOffers()
    {
        return $this->hasMany('App\OfferAll', 'offerId','id' );
    }
}
