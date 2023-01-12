<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function homePage(){
        return view('homepage');
    }

    public function aboutPage(){
        return view('about');
    }

    public function contactPage(){
        return view('contact');
    }

    public function calc(){
        return 10+1;
    }
}
