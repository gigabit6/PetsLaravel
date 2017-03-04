<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contactUs() {
        return view('contact-form');
    }

    public function contactUsSend(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');


        Mail::send('emails/email-template', ['name' => $name, 'email' => $email], function ($m) use ($email, $name) {
            $m->from('no-reply@petshop.com', 'Your feedback');

            $m->to($email, $name)->subject('Thanks!');
        });

        return back()->with('message','successfully added!');
    }
}
