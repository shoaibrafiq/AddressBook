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

    public function add(Request $request){
    	
    	$this->validate($request,[
        'firstname' =>'required',
        'lastname' =>'required',
        'phone' =>'required',
        'email' =>'required',
        'address' =>'required'
      ]);
    	
    	$contacts = new Contact;
    	$contacts->firstname = $request->input('firstname');
    	$contacts->lastname = $request->input('lastname');
    	$contacts->phone = $request->input('phone');
    	$contacts->email = $request->input('email');
    	$contacts->address = $request->input('address');
    	$contacts->save();

    	return redirect('/')->with('info', 'Contact Saved Successfully');
    }
}
