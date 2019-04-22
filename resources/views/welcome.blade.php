@extends('layouts/main')
@section('articlediv')
<div class="knockout">
<div>Bienvenue</div>
<h1>Les nouveaux articles</h1>
</div>
@endsection
@section('content')
<<<<<<< HEAD
@foreach( $posts as $post)


<div class="callout">
<ul class="menu simple">
<li>Auteur : {{$post->post_name}} <small> Titre : <a href="/Articles/{{$post->post_name}}"> {{$post->post_title}}</a> </small>
</li>

</ul>
</div>

 
 @endforeach
=======
<h1>Home</h1>
@endsection


@section('contentdiv')
<div class="container knockout">
<div>Bienvenue</div>
<h1>Les nouveaux articles</h1>
</div>
>>>>>>> css
@endsection