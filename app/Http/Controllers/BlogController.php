<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\UserContactMail;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    function index() {
        $posts=Post::latest()->paginate(2);
        return view('index',compact('posts'));
    }

    function about() {
        return view('about');
    }

    function contact() {
        return view('contact');
    }

    function contact_data(Request $request) {
        $request->validate([
            'name'=>'required|min:2|max:30',
            'email'=>'required|ends_with:@gmail.com',
            'phone'=>'required|min:10|max:10',
            'message'=>'required'
        ]);
        $data=$request->except('_token');
        $contact=Contact::create($data);
        Mail::to($contact->email)->send(new UserContactMail($contact));
        return  redirect()->route('contact');
    }

    function post(Post $post) {
        return view('post',compact('post'));
    }

}
