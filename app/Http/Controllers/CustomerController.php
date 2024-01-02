<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        // $url=url('/customer');
        // $title="Customer Registration";
        // $data=compact('url','title');
        return view('index');
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->contact = $request['contact'];
        $customer->email = $request['email'];

        $customer->gender = $request['gender'];
        $customer->address = $request['address'];

        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect('/customer/view');
    }
    public function view()
    {
        $customers = Customer::all();

        $data = compact('customers');
        return view('customer_view')->with($data);
    }
    public function delete($id)
    {
        // $customer=Customer::find($id)->delete();
        // return redirect()->back();
        $customer=Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('/customer/view');

    }
    public function edit($id){
        $customer=Customer::find($id);
        if(is_null($customer)){
            return redirect('/customer/view');
        }
        else{
            $title="Update Registration";
            $url=url('/customer/update')."/".$id;
            $data=compact('customer','url','title');
            return view('NewCustomer')->with($data);
        }
    }
    public function update($id,Request $request){
$customer=Customer::find($id);
$customer->name = $request['name'];
$customer->contact = $request['contact'];
$customer->email = $request['email'];

$customer->gender = $request['gender'];
$customer->address = $request['address'];

$customer->dob = $request['dob'];
$customer->password = md5($request['password']);
$customer->save();
return redirect('/customer/view');
    }
}
