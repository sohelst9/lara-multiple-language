<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    //----change_language
    public function change_language(Request $request)
    {
        App::setLocale($request->language);
        session()->put('locate', $request->language);
        return back();
    }
}
