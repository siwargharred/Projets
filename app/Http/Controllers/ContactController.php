<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function newContact(){
        $newContact=new Contact();
        $newContact->name="siwar Gharred";
        $newContact->email="hdkjh@";
        $newContact->message="fggggggggggg";
        $newContact->save();
    }

    public function listContacts(){
        $contacts=Contact::all();
        dd($contacts);

    }
}
