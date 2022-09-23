<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterEmail;

class AuthMailController extends Controller
{
    //
    public function sendRegisterEmail() {

        $mailData = [
            'title' => 'Mail from test',
            'body' => 'body from test'
        ];

       Mail::to('rodrigo.ferreiraabf13@gmail.com')->send(new RegisterEmail($mailData));

       dd("Email is send");
    }
}
