<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">    
  </head>

  <body>
    <header>
      @include('includes.navbar')
    </header>

    <main role="main">
      <div class="container">@include('includes.messages')</div>
      @yield('content')
    </main>
  </body>
</html>
