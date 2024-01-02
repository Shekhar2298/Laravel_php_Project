<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\Controller4;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/home/{name}/{id?}',function($name,$id=null){
//     echo $name;
//     echo $id;
// });

// Route::any('/test',function(){
//     echo "hii";
// });

// Route::get('/home/{name}/{id?}',function($name,$id=null){
//     $data=compact('name','id');
//     // print_r($data);
//     return view('home')-> with($data);
// });
// Route::get('home/{name?}',function($name=null){
//     $demo='<h2>hii</h2>';
//     $data=compact('name','demo');
//     return view('home')->with($data);
// });
// Route::get('/',function(){
// return view('index');
// });

Route::get('/customer',[CustomerController::class,'index']);
//Route::resource('/ph',Controller4::class);
Route::post('/register',[RegistrationController::class,'register']);
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::get('/customer/view',[CustomerController::class,'view']);
Route::post('/customer',[CustomerController::class,'store']);
Route::get('customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

// Route::get('/customer',[Controller1::class,'register']);
// Route::get('/customer',function(){
// $cusomers=Customer::all();
// echo "<pre>";
// print_r($cusomers->toArray());
// });