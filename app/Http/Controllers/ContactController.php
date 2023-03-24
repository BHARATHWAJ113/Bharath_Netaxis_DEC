<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
        $contact = new contact();

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->sub = request('sub');
        $contact->urmessage = request('urmessage');


        $contact->save();
       return redirect('/contact');
    }
}
