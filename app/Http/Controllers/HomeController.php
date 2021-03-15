<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\Dentist;
use App\Models\Review;

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
        $blogs = Blogs::limit(3)->get();
        $dentists = Dentist::limit(3)->get();
        $dentist_revs = Review::with('Dentist')->get();
        //    dd($dentist_revs);
        return view('site.index',compact('dentists','dentist_revs','blogs'));
    }

}
