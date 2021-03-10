<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Services;
use App\Models\Messages;
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

    public function doctors()
    {
        $dentists = Dentist::all();
        return view('site.doctors',compact('dentists'));
    }

    public function services()
    {
        $services = Services::all();
        return view('site.services',compact('services'));
    }

    public function contact_us()
    {
        return view('site.contact_us');
    }

    public function doc_det($id)
    {

        $dentist = Dentist::findorfail($id);
        return view('site.doc_det');
    }

    public function det()
    {

        return view('site.doc_det');
    }
    public function sendMessage(Request $request)
    {
        $message = new Messages();
        $message->sender_name = $request->name;
        $message->sender_email = $request->email;
        $message->sender_phone = $request->phone_number;
        $message->subject = $request->msg_subject;
        $message->text = $request->message;
        $message->save();
        return redirect('/contact_us');

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
        return redirect('/');
    }
}
