<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function postMessage(Request $request){
        $email = [
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('rendiferdian2112@gmail.com')->send(New Email($email));
        // ContactUs::create( $email);
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }
}
