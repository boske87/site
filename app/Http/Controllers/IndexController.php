<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function enter(){
        return view('enter');
    }


    public function index(){
        return view('index2');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('/');
    }
}
