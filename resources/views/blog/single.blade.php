@extends('main')

@section('title',"| $post->title")

<header class="intro-header" style="background-image: url({{asset('img/post-bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                     
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@section('content')

 <div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">

      <h1>{{ $post->title }}</h1>
      <p>{{ $post->body }}</p>
    
    </div>
    </div>
</div>

@endsection