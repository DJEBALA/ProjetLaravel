@extends('layouts/main')
@section('articleun')

<div class=" container jumbotron ">
    <h3 > {{$post->post_name}}  <small> Titre : {{$post->post_title}}  </small></h3>
    <img class=" container thumbnail center-block  " src="images/image10.jpg">
        <div class="callout">
        <ul class="menu simple">
        <li><a href="/Articles/{{$post->post_name}}">Author: {{$post->post_name}}</a></li>
        <li>Comments: 3</a></li>
        </ul>
        </div>
</div> 
@endsection