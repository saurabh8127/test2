@extends('layouts.app')

@section('content')
  <h1>index page</h1>
@if(count($posts)>0)
  @foreach($posts as $post)
    <div class="well">
      <h1><a href="/index1/{{$post->id}}">{{$post->title}}</a></h1>
      <small>{{$post->body}}</small>
    </div>
  @endforeach

    @else
      <p>no post found</p>
@endif

@endsection