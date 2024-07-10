@extends('layouts.layout')

@section('title')
 - Ukrainian Lessons
@endsection

@section('css')
<link href="css/extra-styles.css" rel="stylesheet">
@endsection

@section('content')

  <div class="row">

    @foreach($files as $file)

    @php

        $slug = substr($file, 0, -4);
    
    @endphp

      <div class="col-6 mt-3 col-md-3">
        <div class="card">
          <a href="{{ $slug }}"><!-- img class="card-img-top" src="" alt="Card image cap" --></a>
          <div class="card-body">
            <div class="card-title text-center">{{ $slug }}</div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href="{{ $slug }}" class="btn btn-success btn-sm text-center ">Go to lesson</a></div>
          </div>
        </div>
      </div>

    @endforeach

  </div>

@endsection