<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
     public function getIndex(){
// \Auth::logout();
    $posts = Post::orderBy('created_at' , 'desc')->limit(4)->get();
 return view('welcome')->withPosts($posts);
}
 public function getAbout(){
    $first = 'Qazi Tayyab ';
    $last = 'Majeed';
    $email= "qazitayyabmajeed@gmail.com";
    $fullname = $first . " " . $last;
    $data =[];
    $data['$fullname'] = $fullname;
    $data['email'] = $email;
     return view('about')
     ->withData($data);
     
}
 public function getContactme(){
 return view('contactme');

 }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Auth::logout();
        return view('welcome');
    }
}
