<?php

namespace App\Http\Controllers;

use App\Offer;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ManController extends Controller
{
    public function index(){
        $user = Auth::user();
        if(Auth::user()->type == 0){
            return redirect('/');
        }
        $girls = User::where('type','0')->get();
        foreach ($girls as $one) {
            $city [] = $one->city;
            $job [] = $one->job;
            $lang [] = $one->lang;
        }
        $job = array_unique($job);
        $city = array_unique($city);
        foreach ($lang as $oneL){

            $langEx = explode(',', $oneL);

            foreach ($langEx as $one ) {

                $langNew [] = $one;
            }
        }

        $langNew = array_unique($langNew);
        return view('man', compact('user', 'girls', 'city', 'job', 'langNew'));
    }


    public function listGirl(Request $request){

        $input = $request->all();


        $girlsAll = User::where('type','0')->get();

        $girls = User::where('type','0');

        if(isset($input['location']) && !empty($input['location'])) {
            $girls = $girls->where('city','like', '%' . $input['location'] . '%');
        }

        $girls = $girls->get();

        foreach ($girls as $key=>$oneG){
                //year
                $age = date("Y") - $oneG->year;
                if(isset($input['fromYear']) && !empty($input['fromYear'])) {
                    if($age < $input['fromYear'])
                    {
                        unset($girls[$key]);
                    }
                }
                if(isset($input['toYear']) && !empty($input['toYear'])) {
                    if($age > $input['toYear'])
                    {
                        unset($girls[$key]);
                    }
                }

                if(isset($input['fromHeight']) && !empty($input['fromHeight'])) {
                    if($input['fromHeight'] > $oneG->height){

                        unset($girls[$key]);
                    }
                }
                if(isset($input['toHeight']) && !empty($input['toHeight'])) {
                    if($input['toHeight']<$oneG->height){
                        unset($girls[$key]);
                    }
                }

                if(isset($input['fromWeight']) && !empty($input['fromWeight'])) {
                    if($input['fromWeight'] > $oneG->weight){

                        unset($girls[$key]);
                    }
                }
                if(isset($input['toWeight']) && !empty($input['toWeight'])) {
                    if($input['toWeight']<$oneG->weight){
                        unset($girls[$key]);
                    }
                }
            }

        foreach ($girlsAll as $one) {
            $city [] = $one->city;
            $job [] = $one->job;
            $lang [] = $one->lang;
        }
        $job = array_unique($job);
        $city = array_unique($city);
        foreach ($lang as $oneL){

            $langEx = explode(',', $oneL);

            foreach ($langEx as $one ) {

                $langNew [] = $one;
            }
        }

        $langNew = array_unique($langNew);

        return view('search.search', compact('girls',  'city', 'job', 'langNew', 'input'));
    }

    public function viewGirl($id){
        $user = User::find($id);

        return view('search.profile', compact('user'));
    }

    public function manOffers(){
        $user = Auth::user();

        $offers = Offer::where('manId', $user->id)->get();


        return view('offerMan.offers', compact('offers', 'user'));
    }

    public function manOffersDetails($offerId){
        $offer = Offer::find($offerId);
        return view('offerMan.details',compact('offer'));

    }


    public function accOffers(){
        $user = Auth::user();
        $offers = Offer::where('manId', $user->id)

            ->get();
//        dd($offers);
        return view('offerMan.accOffers', compact('offers', 'user'));
    }

    public function deniedOffers(){
        $user = Auth::user();
        $offers = Offer::where('manId', $user->id)

            ->get();
//        dd($offers);
        return view('offerMan.denOffers', compact('offers', 'user'));
    }
}
