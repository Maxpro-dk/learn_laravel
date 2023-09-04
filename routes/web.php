<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
// Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
// Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');

Route::resource('contact', ContactController::class);

// Blog                            
// id 
// titre
// descriptioon
// category_id
// image_id



// category
// id
// titre

// Image
// id
// chemin









require __DIR__.'/auth.php';
