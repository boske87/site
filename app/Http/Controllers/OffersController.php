<?php

namespace App\Http\Controllers;

use App\Offer;
use App\OfferAll;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function offersGirl()
    {
        $id = Auth::user()->id;
        $offers = OfferAll::where('girlId', $id)
            ->where('status', 0)
            ->orderBy('created_at', 'DESC')
            ->get();


        return view('offer.offers', compact('offers'));
    }

    public function acceptOffer($offerId) {
        OfferAll::where('offerId', $offerId)
            ->where('girlId', Auth::user()->id)
            ->update(['status' => 2]);

        return redirect('offersGirl')->with('status', 'Ponuda je prihvacena');
    }

    public function deniedOffer($offerId) {
        OfferAll::where('offerId', $offerId)
            ->where('girlId', Auth::user()->id)
            ->update(['status' => 1]);
        return redirect('offersGirl')->with('status', 'Ponuda je odbijena');
    }

    public function offersGirlDetails($offerId){
        $offer = Offer::find($offerId);
        $offerOne = OfferAll::where('offerId', $offer->id)
            ->where('girlId',Auth::user()->id)
            ->first();

        $offerStatusGlob = OfferAll::where('offerId', $offer->id)
            ->where('status', 2)->count();
        $status = true;
        if($offerStatusGlob >= $offer->maxGirls)
            $status = false;

//        dd($status);
        return view('offer.details',compact('offer','offerOne','status'));

    }

    public function accOffers(){
        $id = Auth::user()->id;
        $offers = OfferAll::where('girlId', $id)
            ->where('status', 2)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('offer.accOffers', compact('offers'));
    }

    public function deniedOffers(){
        $id = Auth::user()->id;
        $offers = OfferAll::where('girlId', $id)
            ->where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('offer.denOffers', compact('offers'));
    }

    public function sendOffers($menId, Request $request)
    {
        if($request->input('offerType') == '0') {
            $input = array(
                'manId' => $menId,
                'maxGirls' => $request->input('girlsNumber'),
                'timeOfferStart' => new Carbon($request->input('offerDateTime')),
                'timeOfferRange' => $request->input('timeRange'),
                'city' => $request->input('city'),
                'place' => $request->input('placeGoOut'),
                'price' => $request->input('timeRange') * 1000,
                'placeAddress' => $request->input('placeAddress'),
                'offerType' => 0,
                'timeOfferReturn' => new Carbon($request->input('offerDateTimeEnd')),
            );
        } else {
            $input = array(
                'manId' => $menId,
                'maxGirls' => $request->input('girlsNumber'),
                'timeOfferStart' => new Carbon($request->input('offerDateTime')),
                'travelOption' => $request->input('travelOption'),
                'city' => $request->input('city'),
                'place' => $request->input('place'),
                'price' => 1000,
                'offerType' => 1,
                'timeOfferReturn' => new Carbon($request->input('offerDateTimeEnd')),
            );
        }

        $offer = Offer::create($input);

        foreach ($request->input('girlsId') as $oneGirl) {
            $inputOffers = array(
                'offerId' => $offer->id,
                'girlId' => $oneGirl,
                'status' => 0
            );
            OfferAll::create($inputOffers);
        }

        return response()->json(["result" => true, 'ttt' => $request->input('offerType')]);
    }

}
