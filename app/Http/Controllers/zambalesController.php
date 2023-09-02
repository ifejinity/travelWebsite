<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class zambalesController extends Controller
{
    public function homepage() {
        return view('template.homepage')->with(['title'=>'Home']);
    }
    
    public function about() {
        return view('template.about')->with(['title'=>'About']);
    }

    public function destinations() {
        return view('template.destinations')->with(['title'=>'Destinations']);
    }

    public function gallery() {
        return view('template.gallery')->with(['title'=>'Gallery']);
    }

    public function contactUs() {
        return view('template.contactus')->with(['title'=>'Contact us']);
    }

    public function sendEmail(Request $request) {
        $validator = Validator::make($request->all(),[
            'fullname' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);
        if($validator->fails()) {
            return response()->json(['status'=>500, 'message'=>'Invalid inputs!', 'errorMessages'=>$validator->errors()]);
        } else {
            $mail_data = [
                'recipient' => 'mrlonzanida08@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->fullname,
                'subject' => $request->subject,
                'body' => $request->message
            ];
            try {
                \Mail::send('emails.contactUsEmail', $mail_data, function($message) use ($mail_data) {
                    $message->to($mail_data['recipient'])
                            ->from($mail_data['fromEmail'], $mail_data['fromName'])
                            ->Subject($mail_data['subject']);
                });
                return response()->json(['status'=>200, 'message'=>'Email successfuly sent!']);
            } catch (ModelNotFoundException $e) {
                return response()->json(['status'=>500, 'message'=>'Internal servel error!']);
            }
        }
    }
    
}
