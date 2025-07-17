<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Contact;
use App\Mail\ReplayMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    function index() {
        return view('admin.index');
    }
    function contact() {
        $contact_messages=Contact::all();
        return view('admin.contact_messages' ,compact('contact_messages'));
    }
    function message_replay(Contact $contact) {
        return view('admin.message_replay',compact('contact'));
    }
    function send_message_replay(Request $request,Contact $contact) {
        $request->validate([
            'replay'=>'required'
        ]);
        $admin_message=$request->except('_token');
        Mail::to($contact->email)->send(new ReplayMail($admin_message,$contact));
        return redirect()->route('admin.contact');
    }
    function message_destroy(Contact $contact) {
        $contact->delete();
        return redirect()->back();
    }
    function posts() {
        $posts=Post::latest()->paginate(2);
        return view('admin.all_posts',compact('posts'));
    }
    function add_post() {
        return view('admin.add_post');
    }
    function add_post_info(Request $request) {
        $request->validate([
            'title'=>'required|max:100',
            'image'=>'required|mimes:png,jpg',
            'content'=>'required|min:20'
        ]);
        $image=$request->file('image')->store('postImages','custom');
        $data=$request->except('_token','image');
        $post=Post::create($data);
        $post->image=$image;
        $post->save();
        return  redirect()->route('admin.posts');
    }
    function destroy_post(Post $post) {
        $post->delete();
        return  redirect()->back();
    }
}
