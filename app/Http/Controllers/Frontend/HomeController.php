<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Controller;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['localization']);
    }

    function index(){
        return view('frontend.home');
    }

}
