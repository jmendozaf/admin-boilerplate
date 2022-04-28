<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App;
use Session;

class Localization
{

    public function handle($request, Closure $next, $guard = null)
    {

        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }else{
            if (Auth::guard($guard)->check()) {
                Session::put('locale', Auth::user()->locale);
                App::setLocale(Auth::user()->locale);
            }
        }
        return $next($request);
    }

}
