<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Mail\SendMail;

class MailController extends Controller
{

    public $data;

    public function mailsend()
    {

            $pid_user = Auth::user()->pid_user;
            $email = Auth::user()->email;
            $first_name = Auth::user()->first_name;
            $last_name = Auth::user()->last_name;

            //mail body contents
            $data['title'] = "Directoreel";
            $data['from'] = "support@directoreel.com";
            $data['to'] = Auth::user()->email;
            $data['first_name'] = Auth::user()->first_name;
            $data['last_name'] = Auth::user()->last_name;
    
            //send mail
            \Mail::to($email)->send(new SendMail($data));

            //check and respond to mail request
            if (\Mail::failures()) 
            {
                return back()->with('failed','Your message failed delivery, please try again or contact the Admin');
            }
            else{
                return back()->with('success','Mail was Succeessfully sent.');
            }
    }


    //MAIL DESIGN PAGES PREVIEW
    public function preview()
    {
        return view('emails.general_email');
    }




    


//END OF EMAIL CONTROLLER
}