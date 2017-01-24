<?php
namespace App\Http\Controllers;
use App\Post;

class PageController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }
 public function getIndex(){
// \Auth::logout();
 	$posts = Post::orderBy('created_at' , 'desc')->limit(4)->get();
 return view('pages/home')->withPosts($posts);
}
 public function getAboutme(){
    $first = 'Qazi Tayyab ';
 	$last = 'Majeed';
 	$email= "qazitayyabmajeed@gmail.com";
 	$fullname = $first . " " . $last;
 	$data =[];
 	$data['$fullname'] = $fullname;
 	$data['email'] = $email;
     return view('pages/aboutme')
     ->withData($data);
     
}
 public function getContact(){
 return view('pages/contact');

 }
}
