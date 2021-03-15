<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Blogs;
use App\Models\Dentist;
use App\Models\Services;
use App\Models\Participation;
use App\Models\Participation_services;

use App\Models\Messages;
use App\Models\Review;
use Illuminate\Contracts\Session\Session;

class SiteController extends Controller
{


    // public $dentist = Dentist::all();
    //
    public function about(){
        // $dentist = Dentist::with('reviews')->find(1);
        // // dd($dentists->load('reviews'));
        // dd($dentist);
        $dentist_revs = Review::with('Dentist')->get();
        $dentists = Dentist::limit(3)->get();
        $parts = Participation::with('participation_services')->get();
        //$participation_services = Participation_services::first();
// dd( $dentist_revs);
        // $participation -> load(['participation_services']);
    //    $parts = $participation -> load(['participation_services']);
       //dd($part);
        return view('site.about',compact('dentists','parts','dentist_revs'));
    }

    public function services_details(){
        return view('site.service_details');
    }

    public function appointment(){
        $dentists = Dentist::all();
        return view('site.appointment',compact('dentists'));
    }

    public function doctors()
    {
        $dentists = Dentist::all();
        return view('site.doctors',compact('dentists'));
    }

    public function reviews()
    {
        $reviews = Review::with('Dentist')->get();
        // dd($reviews);
        return view('site.reviews',compact('reviews'));
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

        //dd($id);
         $dentist = Dentist::findorfail($id);
        return view('site.test',compact('dentist'));
    }

    public function det($id)
    {
        $dd = Dentist::findorfail($id);
        return view('site.doc_det',compact('dd'));
    }

    public function blogs()
    {
        $blogs = Blogs::all();
        return view('site.blog',compact('blogs'));
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
