<?php

namespace App\Http\Controllers;

use App\content;
use App\review;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class zambalesController extends Controller
{
    public $municipality = [
        [
            "name" => "Botolan",
            "description" => "Botolan, officially the Municipality of Botolan, is a 1st class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 66,739 people. The municipality was founded by Spanish Governor-General Juan de Salcedo in 1572. Botolan is known for its larger Aeta population, wide gray sand beaches, and as the location of Mount Pinatubo.",
            "etymology" => "The name Botolan came from the a native variety of banana common in the area called Boto-an. The word Boto-an is a Sambal word which combines the word botol which means seeds and the locative prefix -an, referring to a place with many seeded bananas.",
            "geography" => "Located just south of the provincial capital of Iba, Botolan has the largest land area of the municipalities in Zambales. Botolan is 7 kilometres (4.3 mi) from Iba, 71 kilometres (44 mi) from Olongapo, and 197 kilometres (122 mi) from Manila.",
            "barangays" => "Botolan is politically subdivided into 31 barangays. Each barangay consists of puroks and some have sitios.
            Bancal, Bangan, Batonlapoc, Belbel, Beneg, Binuclutan, Burgos, Cabatuan, Capayawan, Carael, Danacbunga, Maguisguis, Malomboy, Mambog, Moraza, Nacolcol, Owaog-Nibloc, Paco (poblacion), Palis, Panan, Parel, Paudpod, Poonbato, Porac, San Isidro, San Juan, San Miguel, Santiago, Tampo (poblacion), Taugtog, Villar"
        ]
    ];
    // redirect to home with title home
    public function homepage() {
        return view('template.homepage')->with(['title'=>'Home']);
    }
    // redirect to about with title about
    public function about() {
        return view('template.about')->with(['title'=>'About']);
    }
    // get all the contents by type and all review
    public function destinations() {
        $content = new content();
        $myDo = $content->getContent("do");
        $myStay = $content->getContent("stay");
        $myEat = $content->getContent("eat");
        $myReviews = review::all();
        $title = "Destinations";
        return view('template.destinations', compact('title', 'myDo', 'myStay', 'myEat', 'myReviews'));
    }
    // get all the contents by type and all review
    public function gallery() {
        $content = new content();
        $myDelicacies = $content->getContent("delicacies");
        $myFestivals = $content->getContent("festivals");
        $myReviews = review::all();
        $title = "Gallery";
        return view('template.gallery', compact('title', 'myDelicacies', 'myFestivals', 'myReviews'));
    }
    // redirect to contact us
    public function contactUs() {
        return view('template.contactus')->with(['title'=>'Contact us']);
    }
    // send an email
    public function sendEmail(Request $request) {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 500, 'message' => 'Invalid inputs!', 'errorMessages' => $validator->errors()]);
        } else {
            $mail_data = [
                'recipient' => 'mrlonzanida08@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->fullname,
                'subject' => $request->subject,
                'body' => $request->message
            ];
            \Mail::send('emails.contactUsEmail', $mail_data, function ($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });
            return response()->json(['status' => 200, 'message' => 'Email successfully sent!']);
        }
    }
    // get review
    public function getReview(Request $request) {
        $id = $request->id;
        $myReviews = review::where('content_id', $id)->get();
        $myContent = content::where('content_id', $id)->get();
        return response()->json(['status'=>200, 'myReviews'=>$myReviews, 'myContent'=>$myContent]);
    }
    // set review
    public function setReview(Request $request) {
        $validated = Validator::make($request->all(),[
            'content_id' => 'exists:contents,content_id',
            'subject' => 'required|max:30',
            'message' => 'required|max:250',
            'score' => 'regex:/^[1-5]$/'
        ]);
        if($validated->fails()) {
            return redirect()->back()->with('error', 'a')
                            ->withErrors($validated)->withInput();
        } else {
            review::create($request->all());
            return redirect()->back()->with('success', 'a');
        }
    }
}
