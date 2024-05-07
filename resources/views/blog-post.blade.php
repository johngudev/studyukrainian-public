@extends('layouts.layout')

@section('css')
  <link href="/css/sticky-footer-navbar.css" rel="stylesheet"> <!-- from: http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/# -->
  <link href="/css/extra-styles.css" rel="stylesheet">

@endsection


@section('content')

<main role="main" class="container">
  <div class="container">

    {!! $content !!}

  </div>
</main>


@endsection


