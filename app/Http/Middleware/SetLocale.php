<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $language = $request->session()->get('language', config('app.locale'));
        App::setLocale(LC_ALL, $language);
        return $next($request);
    }
}
