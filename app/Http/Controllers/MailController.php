<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
   $details=[
        'title'=>'Mail From Telesoft',
        'body' =>' Thank for your cooparation with us, welcome Again'
   ];
   Mail::to("deogratiasdastan@gmail.com")->send(new TestMail($details));
   return "Email sent";
    }
}
