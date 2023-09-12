<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    //   $image = Image::create([
    //        'path' => 'public/JrDZcRdNbNJ8WADzbBD3XJrUIceA7gn4AOp74WtC.png'
    //   ]);

    //   $blog = Blog::create([
    //     'title' => "Look even slightly believable. If you are",
    //      'description' => "alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
    //      'category_id' => 1,
    //      'image_id' => $image->id
    //   ]);

      $blogs = Blog::all();

       
        return view('index', compact('blogs'));
    }

    public function about(){
     
    
        $articles = Blog::all();
    
       
    
    
        return view('about', compact('articles'));
    }
}
