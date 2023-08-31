<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zambalesController extends Controller
{
    public function homepage() {
        return view('template.homepage')->with(['title'=>'Homepage']);
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
}
