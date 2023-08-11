<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\UserCreatedMail; // Assuming you have defined this mail class correctly

class EmailController extends Controller
{
    public function index()
    {
        $sendMailData = [
            'title' => "User Created Mail",
            'body' => 'this is an email from adams'
        ];

        Mail::to('adamsmathew23@gmail.com')->send(new UserCreatedMail($sendMailData));
        dd('email sent successfully');
    }
}
