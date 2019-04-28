<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function Contact(){
        $contact=Contact::all();
        return view('layouts/Contact',['contact'=>$contact]);
    }


    /**Validation avrx request et enregistrement 
     *  la fonction teste la validité des informations :
     cas d’échec on renvoie le formulaire au client en l’informant des erreurs 
     en cas de réussite on envoie un message de confirmation au client .*/
    
     public function store(ContactRequest $request){
        $contact = new Contact;
        $contact->contact_name = $request->contact_name;
        $contact->contact_email = $request->contact_email;
        $contact->contact_message = $request->contact_message;
        $contact->contact_date = date('Y-m-d H:i:s');
        $contact->save();
        $contact = Contact::all();
        return view('layouts/Contact',['contact'=>$contact]);
    }

}
