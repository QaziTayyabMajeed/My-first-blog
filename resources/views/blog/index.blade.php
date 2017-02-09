@extends('main')

@section('title' ,'| Blog')

<header class="intro-header" style="background-image: url('img/blog.jpg')">
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

	@foreach($posts as $post)
           
      <div class="row">
      	<div class="col-md-8 col-md-offset-2" >
      		<h2>{{ $post->title }}</h2>
      		<h5>Published: {{ date('M j, Y', strtotime($post->created_at))}}</h5>
      		<p>{{substr($post->body, 0,255)}} {{strlen($post->body) > 255 ? "..." : ""}}</p>
      		<a href="{{route('blog.single', $post->slug)}}" class="btn btn-primary">Read More</a>

 
        <hr>
      	</div>


      </div>
 
    @endforeach
    <div class="row">
    	
  <dir class="col-md-12" >
  	

  	<div class="text-center" >
  		{!!  $posts->links() !!}

  	</div>
  </dir>


    </div>

@endsection