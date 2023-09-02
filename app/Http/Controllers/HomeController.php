<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        $article = Blog::create([
            'title' => ' ceci est un titre',
            'description' => 'ceci est une description'
        ]);
    
        $articles = Blog::all();
    
       
    
    
        return view('about', compact('articles'));
    }
}
