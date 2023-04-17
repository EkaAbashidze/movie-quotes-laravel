<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $language = $request->session()->get('language');

        if ($language === null) {
            $language = config('app.locale');
        } else {
            App::setLocale($language);
        }

        return $next($request);
    }
}