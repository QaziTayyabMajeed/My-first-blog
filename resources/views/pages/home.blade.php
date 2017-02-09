@extends('main')

@section('content')

 
     <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
      <!-- end of header .row -->
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                       @foreach($posts as $post)

                          <div class="post">
                            <h3>{{$post->title }}</h3>
                            <p>{{ substr($post->body , 0,50)}}{{strlen($post->body) > 50 ? "..." : ""}}</p>
                            <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
                          </div>

                            <hr>
                        @endforeach
                </div>
            </div>
         </div>
          </div>
      
@endsection
