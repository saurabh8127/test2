@extends('layouts.app')

@section('content')
   <h1>{{$title}}</h1>
   @if(count($services)>0)
        @foreach ($services as $service)
            <ul>
                <li>{{$service}}</li>
            </ul>
        @endforeach
   @endif
    <h3>This is Laravel Contact page.</h3>
@endsection