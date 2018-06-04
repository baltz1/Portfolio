<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;

class PageController extends Controller
{
    public function index() {
      return view('main/index');
    }

    public function store(Request $request){
      $validateMail= $request->validate([
        'email'   =>'required|email',
        'name'    => 'required',
        'subject' => 'required|min:5|max:40',
        'message' => 'required|min:10'
      ]);

      $data = array(
				'name' => $request->name,
				'email' => $request->email,
				'subject'=>$request->subject,
				'bodyMessage' => $request->message
		);

      Mail::send('emails.contact-message', $data, function($message) use ($data){
        $message->from($data['email'],$data['name']);
        $message->to('baltznunez@gmail.com');
        $message->subject($data['subject']);
      });

      Session::flash('success', 'Message was sent successfully');
      return redirect()->back();
    }
}
