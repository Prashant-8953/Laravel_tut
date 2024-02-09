<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormLogic extends Controller
{
    public function Index(){
        return view('forms.index');
    }

    public function register(Request $req){
        echo "<pre>";
          print_r($req->all());
    }
}
