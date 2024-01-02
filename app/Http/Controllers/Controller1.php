<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register(Request $request)
    {
    //    $request->validate(
    //     [
    //         'name'=>'required','email'=>'required|email','contact'=>'required','password'=>'required|confirmed',
    //         'password_confirmation'=>'required'
    //     ]
    //     );


    echo "<pre>";
    print_r($request->all());
    $customer=new Customer();
    $customer->name=$request('name');
    $customer->contact=$request('contact');
    $customer->email=$request('email');
   
    $customer->gender=$request('gender');
    $customer->address=$request('address');
 
    $customer->dob=$request('dob');
    $customer->password=md5($request['password']);
    $customer->save();
    return redirect('/customer/view');
}
public function view(){
    $customers=Customer::all();
    
    $data=compact('customers');
    return view('customer_view')->with($data);
}
}