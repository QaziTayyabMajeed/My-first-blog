<?php
namespace App\Http\Controllers;

class PageController extends Controller
{

 public function getIndex(){
 	
 return view('pages/welcome');
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
