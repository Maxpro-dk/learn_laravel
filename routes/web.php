<?php

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
     
    $article = Blog::create([
        'title' => ' ceci est un titre',
        'description' => 'ceci est une description'
    ]);

    $articles = Blog::all();

   


    return view('about', compact('articles'));
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

    $contact = Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message
    ]);



    
    return view('contact', compact('contact'));
})->name('contact.store');


Route::get('/contact/list', function(){
    $contacts = Contact::where('phone','90581436')->get();
    return view('contact_list', compact('contacts'));
})->name('contact.list');


require __DIR__.'/auth.php';
