<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormLogic extends Controller
{
    public function Index(){
        return view('forms.index');
    }

    public function register(Request $req){

        // $req->validate(
        //     [
                
        //         'name'=>'required',
        //         'email' => 'required|email',
        //         'password' => 'required',
        //         'confirm_password' =>'required|same:password',
        //         'message'=>'required'
                
        //         ]
        // );

        echo "<pre>";
        print_r($req->all());
    }


}
