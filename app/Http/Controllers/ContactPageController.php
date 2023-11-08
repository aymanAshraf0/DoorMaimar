<?php

namespace App\Http\Controllers;

use App\Mail\ClientMailer;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ClientMali;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactPageController extends Controller
{
    use Notifiable;

    public function index(){
        return view('user.contact');
        
    }

    public function sendEmail(Request $request)
    {
        $user = User::first(); // احصل على المستخدم الذي تريد إرسال البريد إليه

        // أرسل بريدًا إلكترونيًا مع البيانات المستلمة من النموذج
        Mail::send('client_mail', ['request' => $request], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('email from client');
        });

        return redirect()->back()->with('message',"تم ارسال البيانات بنجاح.سيتم التواصل معك");
    }

}
