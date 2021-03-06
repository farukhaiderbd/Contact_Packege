<?php

namespace FarukHaiderBD\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use FarukHaiderBD\Contact\Mail\ContactMail;
use FarukHaiderBD\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMail($request->messege,$request->name));
        Contact::create($request->all());
    }
}
