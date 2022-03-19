<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
       public function send(Request $request)
       {

            if ($request->method()=='POST')
            {
                $body="<p><b>Name:</b>{$request->input('name')}</p>";
                $body.="<p><b>Email:</b>{$request->input('email')}</p>";
                $body.="<p><b>Text Message:</b>.n12br({$request->input('text')}).</p>";

                Mail::to('husanjan2019@gmail.com')->send(new TestMail($body));

                $request->session()->flash('success','Sms Send');
                return redirect('/send');
            }
       return  view('send');

       }





}
