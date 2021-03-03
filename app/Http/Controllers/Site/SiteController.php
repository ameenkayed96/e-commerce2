<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function about(){
        return view('site.about');
    }

    public function services_details(){
        return view('site.service_details');

    }
}
