<?php

namespace App\Http\Controllers;

use App\Offer;
use App\OfferAll;
use Auth;
use Illuminate\Http\Request;

class GirlController extends Controller
{
    public function index(){
        $user = Auth::user();
        $offers = OfferAll::where('girlId', $user->id)
            ->where('status', 0)
            ->orderBy('created_at', 'DESC')
            ->get();

        foreach ($offers as $key => $one) {

            $offerStatusGlob = OfferAll::where('offerId', $one->offerId)
                ->where('status', 2)->count();
            $offer = Offer::find($one->offerId);
            if($offerStatusGlob >= $offer->maxGirls){
                unset($offers[$key]);
            }

        }

        return view('girl', compact('user','offers'));
    }
}
