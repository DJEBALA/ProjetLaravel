@extends('layouts/main')
@section('articlediv')

<!--
la view welcome permet d'afficher le contenu de la page d'acceuil 
-->
<div class="knockout">
<div>Bienvenue</div>
<h1>Les trois derniers Articles</h1>
</div>
@endsection


@section('content')
@foreach( $posts as $post)
<div class="callout">
<ul class="menu simple">
<li>{{$post->post_name}} <small> <a href="/Articles/{{$post->post_name}}"> {{$post->post_title}}</a> </small>
</li>
<img class=" center-block imgm " src="images/image{{$post->id}}.jpg">
</ul>
</div>

 
 @endforeach
@endsection