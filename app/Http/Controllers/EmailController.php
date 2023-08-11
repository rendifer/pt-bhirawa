<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function postMessage(Request $request)
    {
        $email = [
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'notel' => $request->notel,
            'message' => $request->message
        ];

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'notel' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('rendiferdian2112@gmail.com')->send(new Email($email));
        // Mail::from($email['email'], $email['nama'])->to('rendiferdian2112@gmail.com')->send(new Email($email));
        // ContactUs::create($email);
        return redirect()->back()
                         ->with(['success' => 'Terima kasih telah menghubungi kami. Kami akan segera menghubungi Anda.']);
    }
}

