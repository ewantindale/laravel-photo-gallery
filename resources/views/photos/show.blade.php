@extends('layouts.app')

@section('content')
<div class="container">
  <img src="{{$photo->image}}" class="img-fluid my-5">
  <h5 class="text-muted float-right">{{$photo->created_at}}</h5>
  <h1>{{$photo->title}}</h1>
  <h5>{{$photo->description}}</h5>
  <div class="my-5">
    <a href="/photos" class="btn btn-dark">Back to Gallery</a>
    {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
    {!!Form::close()!!}
  </div>
  
</div>

@endsection