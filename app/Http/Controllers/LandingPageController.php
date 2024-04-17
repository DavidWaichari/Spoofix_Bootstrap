<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    
    public function index()
    {
        return view('landing_page/index');
    }

    public function about()
    {
        return view('landing_page/about');
    }

    public function contacts()
    {
        return view('landing_page/contacts');
    }

    public function services()
    {
        return view('landing_page/services/index');
    }


    public function serviceDetails($name)
    {
        return view('landing_page/services/details');
    }

    public function pageNotFound()
    {
        return view('landing_page/404');
    }
}
