@extends('main')

@section('Title' , '| Create New Post')
@section('content')

<header class="intro-header" style="background-image: url({{asset('img/post-sample-image.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container">
<div class ="row">
	<div class= "col-md-8 col-md-offset-2" >
	

    <h1>Create New Post</h1>
    <hr>
    {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
    


{{Form::label('title', 'Title:')}}
{{Form::text('title', null , array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))}}
{{Form::label('slug', 'Slug:' , ['class' => 'form-spacing-top'])}}
{{Form::text('slug', null , array('class' => 'form-control', 'required' => '','minlength' => '5', 'maxlength' => '255'))}}
{{Form::label('body', 'Post Body:',['class' => 'form-spacing-top'])}}
{{Form::textarea('body', null , array('class' => 'form-control' , 'required' => ''))}}


{{Form::submit('Create Post' , array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
    {!! Form::close() !!}
	</div>


</div>
</div>

@endsection