<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddMenRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenController extends Controller
{
    public function index()
    {

        $items = User::where('type','1')->get();

        return view('admin.men.index', compact('items'));
    }

    public function addMen()
    {
        return view('admin.men.add');
    }

    public function storeMen(AddMenRequest $request)
    {
        $input = $request->all();
        $input['type'] = '1';
        User::create($input);
        return redirect()->route('admin.men')->withFlashMessage("Uspesno dodavanje novog muskarca.")->withFlashType('success');

    }

    public function editMen($id)
    {
        $item = User::find($id);
        return view('admin.men.edit', compact('id','item'));
    }

    public function updateMen($id, AddMenRequest $request)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);

        return redirect()->route('admin.men' )->withFlashMessage("Uspesno izmenjen profil muskarca.")->withFlashType('success');
    }

    public function deleteMen($id)
    {
        User::destroy($id);

        return redirect()->route('admin.men' )->withFlashMessage("Uspesno obrisan profil muskarca.")->withFlashType('success');
    }

}
