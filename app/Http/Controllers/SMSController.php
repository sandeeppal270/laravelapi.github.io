<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Twilio\Rest\Client;

class SMSController extends Controller
{
    public function sendSMS(Request $request){
        try {
            $account_sid = env('TWILIO_SID');
            $account_token = env('TWILIO_TOKEN');
            $number = env('TWILIO_FROM');

           $client = new Client($account_sid,$account_token);
           $client->messages->create('+91'.$request->number,[
                'from'=> $number,
                'body'=>$request->message
           ]);
           return "message sent....";
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }
}
