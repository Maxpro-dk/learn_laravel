<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::where('phone','90581436')->get();
        return view('contact.index', compact('contacts'));
    }

    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'min:3', 'string'],
            'email'=> ['required', 'email', 'unique:contacts'],
            'phone' => ['required'],
            'message' => 'nullable|min:3|max:200',
            'image' => ['nullable', 'file' ,'image']
        ]);
    
        $file_path = $request->image->store('public');
    
    
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'image' => $file_path
        ]);
    
    
        
        return redirect()->route('contact.index');
    }

    public function show(int $id){
        $contact =  Contact::where('id',$id)->first();
        return  view('contact.show', compact('contact'));
    }

}
