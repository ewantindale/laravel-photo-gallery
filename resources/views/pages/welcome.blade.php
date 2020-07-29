@extends('layouts.app')

@section('content')
<section class="jumbotron">
  <div class="container">
    <h1>Welcome to PhotoGallery</h1>
    <p class="lead text-muted">This is a Laravel application. It uses a MySQL database hosted on Amazon RDS and stores uploaded images in an Amazon S3 bucket.</p>
    <p>
      <a href="/photos" class="btn btn-primary my-2">View Gallery</a>
    </p>
  </div>
</section>
@endsection