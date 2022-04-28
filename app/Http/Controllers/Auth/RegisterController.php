<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Rules\ValidRecaptchaResponse;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware(['guest','localization']);
    }

    public function register(Request $request)
    {
        $business_card = [];
        if ($request->hasFile('bcard')) {
            $path = $request->file('bcard')->store('', ['disk' => 'uploads']);
            $business_card = [
                [
                    'collection_name' => 'business_card',
                    'path' => $path,
                    'action' => 'add',
                    'meta_data' => [
                        'name' => $request->file('bcard')->getClientOriginalName(),
                        "file_name" => $request->file('bcard')->getClientOriginalName(),
                        'width' => (getimagesize($request->file('bcard')))[0],
                        'height' => (getimagesize($request->file('bcard')))[1],
                    ],
                ],
            ];
        }


        $request->request->add(['business_card'=>$business_card]);

        $data = $request->all();
        $this->validator($data)->validate();

        event(new Registered($user = $this->create($data)));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 201)
            : redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $data['birthday'] = isset($data['birthday']) ? Carbon::createFromFormat('d/m/Y',$data['birthday'])->format('Y-m-d') : null;

        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'birthday' => ['required','date','before:-18 years'],
            'document_type' => ['required', 'string', 'max:10'],
            'document' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cellphone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:5'],
            'country' => ['required', 'string', 'max:5'],
            'media_type' => ['required', 'string', 'max:255'],
            'media_name' => ['required', 'string', 'max:255'],
            'media_country' => ['required', 'string', 'max:5'],
            'facebook' => ['sometimes', 'url'],
            'twitter' => ['sometimes', 'url'],
            'instagram' => ['sometimes', 'url'],
            'linkedin' => ['sometimes', 'url'],
            'g-recaptcha-response' => ['required','string', new ValidRecaptchaResponse],
        ],[
            'birthday.before' => 'Debe ser mayor de 18 años',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $data['locale'] = App::getLocale();
        return User::create($data);
    }

    protected function registered(Request $request, $user)
    {
        if (isset($user->email_verified_at)===false) {
            return redirect('email/verify')->with(['userId' => $user->id]);
        }
    }

}
