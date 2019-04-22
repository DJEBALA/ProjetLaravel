@extends('layouts/main')
@section('articlediv')
<div class="knockout">
<div>Bienvenue</div>
<h1>Les nouveaux articles</h1>
</div>
@endsection
@section('content')
@foreach( $posts as $post)


<div class="callout">
<ul class="menu simple">
<li>Auteur : {{$post->post_name}} <small> Titre : <a href="/Articles/{{$post->post_name}}"> {{$post->post_title}}</a> </small>
</li>

</ul>
</div>

 
 @endforeach
@endsection