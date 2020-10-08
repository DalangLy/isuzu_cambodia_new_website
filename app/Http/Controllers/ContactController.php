<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;

        //Mail::to(['panharith@oxygenkh.com','dalang@oxygenkh.com', 'leaphea@oxygenkh.com', 'a_pisutthida@tripetch-isuzu.co.th'])->send(new ContactMail($data));
        Mail::to(['dalangly@gmail.com'])->send(new ContactMail($data));

        Alert::success('Sent!', "We appreciate you contacting Isuzu Laos. One of our colleagues will get back in touch with you soon! Have a great day!");
        return back();
    }
}
