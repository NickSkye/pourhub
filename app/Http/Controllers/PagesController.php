<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Agent;
class PagesController extends Controller
{
    public function showHome(){
        return view('pages.index');
    }

    public function showFaq(){
        return view('pages.faq');
    }

    public function showContact(){
        return view('pages.contact');
    }

public function showAboutCrystal(){
        return view('pages.about-crystal');
}
    public function showAboutRejuvenation(){
        return view('pages.about-rejuvenation');
}
    public function showFacility(){
        return view('pages.facility');

    }


    public function contactform(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);


        $data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,


        );

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to(env('MAIL_USERNAME', 'nick@wbrandstudio.com'));
            $message->subject('Newsletter Signup');


        });
        session()->flash('success', 'Successfully sent message!');

        return redirect()->back();
    }


}
