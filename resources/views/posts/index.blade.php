@extends('main')

@section('title', '| All Posts')
     <header class="intro-header" style="background-image: url('{{asset('img/post-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <div class="page-heading">
                        <h1>All Posts</h1>
                        <hr class="small">
                        <span class="subheading"></span>
                        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary btn-h1-spacing">Create New Post</a>
            </div>
                </div>
            </div>
        </div>
    </header>
@section('content')

      <div class="container">
<div class="row">
	<div class="col-md-12" >
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>

			</thead>
			<tbody>
				
					@foreach($posts as $post)
                     <tr>
                     <th>{{ $post->id }}</th>
                     <td>{{ $post->title }}</td>
                     <td>{{ substr($post->body , 0,50)}}{{strlen($post->body) > 50 ? "..." : ""}}</td>
                     <td>{{date('M j, Y' , strtotime($post->created_at)) }}</td>
                     <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-sm">View</a> <a href="{{route('posts.edit' , $post->id)}}" class="btn btn-default btn-sm ">Edit</a> </td>
                     </tr>

					@endforeach

			</tbody>

		</table>
		<div class="text-center">

			{!! $posts->links(); !!}
		</div>
	</div>
</div>
</div>
@stop