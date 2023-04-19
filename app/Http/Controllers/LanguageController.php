<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{

    public function changeLanguage(Request $request)
    {
        $language = $request->input('language');
        

        App::setlocale($language);
        session()->put('local', $language);

        return redirect()->back()->with('success', 'Language changed successfully.');
    }

}