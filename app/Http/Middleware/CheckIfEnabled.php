<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfEnabled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::getDefaultDriver()==='web' && Auth::guard('web')->check()) {
            $user  = Auth::user();
            if($user->hasVerifiedEmail()){
                if ($user->enabled) {
                    if ($user->rejected) {
                        Auth::logout();
                        return redirect('account/rejected');
                    }
                }else{
                    Auth::logout();
                    return redirect('account/disabled');
                }
            }
        }
        return $next($request);
    }

}
