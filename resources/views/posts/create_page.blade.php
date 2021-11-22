@extends('layouts.app')

@section('content')

  <h1>create page</h1>
 <div class="flax justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
  <form action="{{route('create')}}" method="POST">
  <div class="md-4">
  <label for="title" class="sr-only">Name</label>
  <input type="text" name="name" id="name" placeholder="enter the name" class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </form>
  </div>

 </div>
@endsection