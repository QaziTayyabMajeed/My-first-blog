@extends('main')

@section('title' , '| Edit Blog Post')

<header class="intro-header" style="background-image: url({{asset('img/post-sample-image.jpg')}})">
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
{!!Form::model($post , ['route' =>['posts.update' , $post->id] , 'method' => 'PUT'])!!}
		<div class="col-md-8">
		    {{Form::label('title', 'Title:')}}
		    {{Form::text('title' , null , ["class" => 'form-control' ,'input-lg'])}}
        {{Form::label('slug', 'Slug:' , ['class' => 'form-spacing-top'])}}
{{Form::text('slug', null , array('class' => 'form-control', 'required' => '','minlength' => '5', 'maxlength' => '255'))}}
		     {{Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
		    {{Form::textarea('body' , null , ["class" => 'form-control'])}}
	    </div>
	
	<div class = "col-md-4"> 

        <div class ="well"> 
          <dl class ="dl-horizontal">
          <dt>Created At:</dt>
          <dd>{{date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
          </dl>

          <dl class ="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
          </dl>
          <hr>
          <div class = "row">
          	
			<div class ="col-sm-6">
      {{Html::linkRoute('posts.show', 'cancle' ,array($post->id) , array('class' => "btn btn-danger btn-block "))}}
			</div>

            <div class ="col-sm-6">
             {{Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'] )}}
            </div>
          </div>
       </div>
    </div>
    {!!Form::close()!!}
</div>
</div>

@stop