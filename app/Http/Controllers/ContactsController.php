<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function home(){
    	$contacts = Contact::all();
    	return view('home', ['contacts' => $contacts]);
    }
}
