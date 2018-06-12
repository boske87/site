<?php

namespace App\Http\Controllers\Admin\GirlOffers;

use App\Offer;
use App\OfferAll;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function getOffersById($girlId)
    {
        $items = OfferAll::where('girlId', $girlId)
            ->orderBy('created_at', 'DESC')
            ->get();

        $user = User::find($girlId);

        return view('admin.girlOffers.offers', compact('items', 'user'));
    }

    public function getOfferById($offerId){
        $item = Offer::find($offerId);

        return view('admin.girlOffers.detailsOffer', compact('item'));
    }
}
