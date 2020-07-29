@extends('layouts.app')

@section('content')
<section class="bg-white">
  <div class="container pb-5 pt-5">
    <a href="/photos" class="btn btn-outline-secondary mb-5">Back to Gallery</a>
    <h1>Add Photo</h1>
    {!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
      <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
      </div>
      <div class="form-group">
        {{Form::file('image')}}
      </div>
      
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</section>
  
@endsection

