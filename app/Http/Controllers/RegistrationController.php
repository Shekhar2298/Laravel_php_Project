<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(Request $request){
        $request->validate(
                [
                    'name'=>'required','email'=>'required|email','contact'=>'required','password'=>'required|confirmed',
                    'password_confirmation'=>'required'
                ]
                );
    }
}
