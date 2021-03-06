<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddGirlRequest;
use App\Offer;
use App\OfferAll;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class GirlController extends Controller
{
    public function index()
    {
        $items = User::where('type','0')
            ->get();

        $offers = Offer::
           orderBy('created_at', 'DESC')
            ->get();


        foreach ($offers as $key => $one) {

            $offerStatusGlob = OfferAll::where('offerId', $one->id)
                ->where('status', 2);




            if($offerStatusGlob->count() >= $one->maxGirls){
                Offer::where('id', $one->id)
                    ->update(['status' => 3]);

                foreach ($offerStatusGlob->get() as $oneOf ){
                    OfferAll::where('offerId', $one->id)
                    ->where('status', 0)
                        ->update(['status' => 3]);
                }

            }

        }


        return view('admin.girl.index', compact('items'));
    }

    public function editGirl($id)
    {
        $item = User::find($id);

        return view('admin.girl.edit', compact('id','item'));
    }

    public function addGirl()
    {
        return view('admin.girl.add');
    }

    public function storeGirl(AddGirlRequest $request)
    {
        $input = $request->all();
        $input['type'] = '0';
        $input['pass'] = $input['password'];
        $input['password'] = bcrypt($input['password']);

        User::create($input);

        return redirect()->route('admin.devojke')->withFlashMessage("Uspesno dodavanje nove devojke.")->withFlashType('success');

    }

    public function updateGirl($id, AddGirlRequest $request)
    {
        $user = User::find($id);
        $input = $request->all();
        $input['pass'] = $input['password'];
        $input['password'] = bcrypt($input['password']);

        $user->update($input);

        return redirect()->route('admin.devojke' )->withFlashMessage("Uspesno izmenjen profil devojke.")->withFlashType('success');


    }

    public function deleteGirl($id)
    {
        User::destroy($id);

        return redirect()->route('admin.devojke' )->withFlashMessage("Uspesno obrisan profil devojke.")->withFlashType('success');
    }

    public function reorderSave($tableName)
    {

        // order string to array
        $order = trim(\Request::input('order'), ';');
        $order = explode(';', $order);

        $i = 1;
        foreach ($order as $recordID)
        {

            \DB::table($tableName)->where('id', '=', $recordID)->update(['ordering' => $i]);
            $i++;
        }


        return Response::json(['status' => 'ok', 'url' => \Request::all() ]);
    }
}
