<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Rules\ValidRecaptchaResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest','localization'])->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response' => ['required','string', new ValidRecaptchaResponse],
        ]);
    }

    protected function authenticated(Request $request, $user)
    {

        Session::put('locale', $user->locale);
        App::setLocale($user->locale);

        if (!isset($user->email_verified_at)) {
            return redirect('email/verify')->with(['userId' => $user->id]);
        }

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
