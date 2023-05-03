<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

        return view('contact_us');
    }

    public function contact_us_submit(Request $request){

        $name = $request->name;
        $email = $request->email;
        $messaggio = $request->messaggio;

        try{

            Mail::to($email)->send(new ContactMail($name, $email, $messaggio));

        } catch(Exception $error){

            return redirect()->back()->with('emailError', 'si è verificato un problema con i nostri server, riprova tra qualche minuto');
        
        }

         return redirect(route('homePage'))->with('emailSent', 'abbiamo ricevuto la tua email ti risponderemo il prima possibile');

    }
}
