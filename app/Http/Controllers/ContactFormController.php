<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
class ContactFormController extends Controller
{
    public function send(Request $request){

        $to =$request->email;
        $subject = "ContactForm from:".$request->email;
        $txt = $request->comments;
        $headers = "From: fathitarek208@gmail.com" . "\r\n" .
        "CC: fathitarek208@gmail.com";
         mail($to,$subject,$txt,$headers);
        Flash::success('Newsletters saved successfully.');
       return redirect('contact?msg=1');
    }
}
