<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Contracts\Session\Session;

class SiteController extends Controller
{
    //
    public function about(){
        return view('site.about');
    }

    public function services_details(){
        return view('site.service_details');
    }

    public function appointment(){
        return view('site.appointment');
    }


    public function bookings(Request $request)
    {
        $appointment = new Appointment();
        $appointment->doc_id = 2;
        $appointment->name = $request->name;
        $appointment->user = $request->email;
        $appointment->phone = $request->phone;
        $appointment->date = $request->date;
        $appointment->save();
        //session()->flash('success', 'The blog post was successfully saved!');
        return redirect()->url('/home');
    }
}
