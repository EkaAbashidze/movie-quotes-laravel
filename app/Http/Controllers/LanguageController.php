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
        Session::put('locale', $language);

        return redirect()->route('admin.dashboard')->with('success', 'Language changed successfully.');
    }

}