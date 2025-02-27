@extends('layouts.layout-modern')

@section('title')
- Ukrainian Topical Lessons
@endsection

@section('css')
<link href="../../css/sticky-footer-navbar.css" rel="stylesheet"> <!-- from: http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/# -->
<link href="../../css/tooltip.css" rel="stylesheet">
<link href="../../css/extra-styles.css" rel="stylesheet">

<style>
    .navbar {
        border-bottom: 1px solid lightgray;
    }

    .modern-panel {
        background-color: white;
        padding: 1rem;
        border-radius: 0.25rem;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);

    }

    .modern-panel > *:last-child {
        margin-bottom: 0 !important;
    }

    .text-graphite-black {
    color: rgba(70, 70, 70, 1) !important;
    }
</style>
@endsection


@section('content')
<div class="container">

    <div class="modern-panel p-5 text-graphite-black">
        <h1 class="">Topical Lessons </h1>

        <hr>

        @foreach($entries as $lesson)
            <div> <a href="{{ $lesson->slug }}">{{ $lesson->title}}</a> </div>
        @endforeach
    </div>
</div>
@endsection