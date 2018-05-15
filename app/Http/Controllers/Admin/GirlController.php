<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddGirlRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GirlController extends Controller
{
    public function index()
    {
        $items = User::where('type','0')->get();

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
        User::create($input);
        return redirect()->route('admin.devojke')->withFlashMessage("Uspesno dodavanje nove devojke.")->withFlashType('success');

    }

    public function updateGirl($id, AddGirlRequest $request)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);

        return redirect()->route('admin.devojke' )->withFlashMessage("Uspesno izmenjen profil devojke.")->withFlashType('success');


    }

    public function deleteGirl($id)
    {
        User::destroy($id);

        return redirect()->route('admin.devojke' )->withFlashMessage("Uspesno obrisan profil devojke.")->withFlashType('success');
    }
}
