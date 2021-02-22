<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function index(){
        $languages = Language::all();
        //dd( $languages);
        return view('admin.Languages.languages',compact('languages'));
    }
}
