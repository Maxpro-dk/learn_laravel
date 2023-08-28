<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function(){

    $name = "Maxime";

    return view('about', compact('name'));
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/store',function(Request $request){

    $request->validate([
        'name' => ['required', 'min:3', 'string'],
        'email'=> ['required', 'email'],
        'phone' => ['required'],
        'message' => 'nullable|min:3|max:200'
    ]);

    $name = $request->name;
    $email= $request->email;
    $phone= $request->phone;
    $message = $request->message;

    return redirect()->route('home');
    // return view('contact', compact('name','email', 'phone', 'message'));
})->name('contact.store');


require __DIR__.'/auth.php';
