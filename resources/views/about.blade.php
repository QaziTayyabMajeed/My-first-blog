@extends('layouts.app')
@section('title','| About')

<header class="intro-header" style="background-image: url('{{asset('img/about-bg.jpg')}}')">        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@section('content')
<div class="online">ONLINE</div>
<div class="offline">Offline</div>
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <h1>About Me</h1>
          <p>My Name is Qazi Tayyab Majeed. I did my bachelor's from UMT lahore. Now i need to learn about how we can code in Php Laravel.. </p>
            </div>
        </div>
    </div>

    <hr>
    @endsection


             