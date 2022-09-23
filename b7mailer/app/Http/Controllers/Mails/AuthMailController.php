<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use app\Mail\RegisterEmail;

class AuthMailController extends Controller
{
    //
    public function sendRegisterEmail() {
        $registerEmail = new RegisterEmail;

       Mail::to('rodrigo.ferreiraabf13@gmail.com')->send($registerEmail);
    }
}
