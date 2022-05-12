<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;
use App;
use Session;


class LocaleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['localization']);
    }

    function setLocale($locale){
        App::setLocale($locale);
        Session::put('locale', $locale);
    }

}
