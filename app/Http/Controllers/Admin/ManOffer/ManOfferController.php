<?php

namespace App\Http\Controllers\Admin\ManOffer;

use App\Offer;
use App\OfferAll;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManOfferController extends Controller
{
    public function getOffersById($manId)
    {
        $offers = Offer::where('manId', $manId)
            ->get();
//        $items = OfferAll::leftjoin('offers', 'offers_all.offerId', '=', 'offers.id')
//            ->where('offers.manId',$manId)
//            ->orderBy('offers_all.id', 'DESC')
//            ->get();

//        dd($items);

        $user = User::find($manId);

        return view('admin.men.offers', compact('offers', 'user'));
    }
}
