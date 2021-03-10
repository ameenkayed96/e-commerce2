<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentist;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(auth()->user());.0
        $dentists = Dentist::paginate(3);
        //dd( $dentists);
    //dd($dentists[0]->appointment);
        return view('site.index',compact('dentists'));
    }

}
