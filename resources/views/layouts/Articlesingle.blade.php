@extends('layouts/main')
@section('articleun')

<div class=" container jumbotron ">
    <h3 > {{$post->post_name}}  <small> : {{$post->post_title}}  </small></h3>
    <div class="callout">
    <p>{{$post->post_content}}</p>
    </div>
        <div class="callout">
        <ul class="menu simple">
        <li><a href="/Articles/{{$post->post_name}}">Author: {{$post->post_name}}</a></li>
        
        </ul>
        </div>
</div> 
@endsection