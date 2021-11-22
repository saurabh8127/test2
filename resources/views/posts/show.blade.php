@extends('layouts.app')

@section('content')
<a href="/index" class="btn btn-block">go Back</a>
  <h1>{{$posts->title}}</h1>
<h3>{{$posts->body}}</h3>
@endsection
