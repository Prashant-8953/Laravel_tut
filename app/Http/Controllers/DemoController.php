<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function home(){
        return view('layout.home');
    }
    public function about(){
        return view('layout.about');
    }
}
