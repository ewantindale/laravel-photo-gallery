@extends('layouts.app')

@section('content')
<section class="bg-white">
  <div class="container pb-5 pt-5">
    <h1>Gallery</h1>
    <p class="lead text-muted">Browse the gallery or use the button below to add a new photo.</p>
    <p>
      <a href="/photos/create" class="btn btn-primary my-2">Add Photo</a>
    </p>
  </div>
</section>

<div class="album py-5 bg-light">
  @if(count($photos) > 0)
    <div class="container-fluid">
      <div class="card-group">
        @foreach($photos as $photo)
        <div class="card">
          <img class="card-img-top" src="{{$photo->image}}" alt="{{$photo->description}}">
          <div class="card-body">
            <h5 class="card-title">{{$photo->title}}</h5>
            <p class="card-text">{{$photo->description}}</p>
            <p class="card-text text-muted">{{$photo->created_at}}</p>
            {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST', 'class' => 'float-right'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
            {!!Form::close()!!}
          </div>
        </div>
      @endforeach
      </div>
      
    </div>
  @else
    <p>No photos to display</p>
  @endif
</div>
@endsection