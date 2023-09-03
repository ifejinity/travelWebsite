<?php

namespace App\Http\Controllers;

use App\content;
use App\review;
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
        $myDo = content::where('type', 'do')->get();
        $myStay = content::where('type', 'stay')->get();
        $myEat = content::where('type', 'eat')->get();
        $myReviews = review::all();
        $title = "Destinations";
        return view('template.destinations', compact('title', 'myDo', 'myStay', 'myEat', 'myReviews'));
    }

    public function gallery() {
        $myDelicacies = content::where('type', 'delicacies')->get();
        $myFestivals = content::where('type', 'festivals')->get();
        $myReviews = review::all();
        $title = "Gallery";
        return view('template.gallery', compact('title', 'myDelicacies', 'myFestivals', 'myReviews'));
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
    // get review
    public function getReview(Request $request) {
        $id = $request->id;
        try {
            $myReviews = review::where('content_id', $id)->get();
            $myContent = content::where('content_id', $id)->get();
            return response()->json(['status'=>200, 'myReviews'=>$myReviews, 'myContent'=>$myContent]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['status'=>500, 'message'=>'Internal servel error!']);
        }
    }
    // set review
    public function setReview(Request $request) {
        $validated = $request->validate([
            'content_id' => 'exists:contents,content_id',
            'subject' => 'required|max:30',
            'message' => 'required|max:250',
            'score' => 'regex:/^[1-5]$/'
        ]);
        review::create($validated);
        return redirect()->back();
    }
}
