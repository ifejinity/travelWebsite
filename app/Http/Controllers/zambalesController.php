<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zambalesController extends Controller
{
    public function homepage() {
        return view('template.homepage')->with(['title'=>'Homepage']);
    }
}
