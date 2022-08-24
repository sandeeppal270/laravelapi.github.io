<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    $to_name='sandeep';
    $to_email='sandeeppal270@gmail.com';
    $data=array('name' => 'sandeep pal','body'=>'test mail for like that');
    Mail::send('mail',$data, function($message) use ($to_name,$to_email){
        $message->to($to_email)
        ->subject('web testing mail for this');

    });





});
Route::get('/sms', function () {
    return view('sms');
});
Route::post('/sms', [SMSController::class,'sendSMS']);
    
