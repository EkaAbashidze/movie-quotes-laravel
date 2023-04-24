<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $language = session('locale', config('app.locale'));
        App::setLocale($language);
        return $next($request);
    }
}