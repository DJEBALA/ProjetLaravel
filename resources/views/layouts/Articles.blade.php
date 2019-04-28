@extends('layouts/main')
@section('articlediv')
<div class="knockout">
<div >Articles</div>
<h1>Tous nos articles</h1>
</div>
@endsection

@section('articletotale')

@foreach( $posts as $post)

<div class="container jumbotron col-md-5 col-ms-5  ">
	<h3 classe="container jumbotron col-md-3 col-ms-2"> {{$post->post_name}} <small> : {{$post->post_title}} </small></h3>
	<img class=" center-block imgm " src="images/image{{$post->id}}.jpg">
		<div class="container  col-md-5 col-ms-5">
		<ul class="">
		<li><a href="/Articles/{{$post->post_name}}">Author: {{$post->post_name}}</a></li>
		<li>Comments: 3</a></li>
		
		</ul>
	</div>
</div> 

 
 @endforeach


@endsection