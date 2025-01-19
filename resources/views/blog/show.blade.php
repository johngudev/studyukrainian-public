@php
    $tailwind = true;
@endphp

@extends('layouts.layout-tw')

@section('title')
 - Blog
@endsection

@section('css')
<link href="{{ url('/'); }}/css/extra-styles.css" rel="stylesheet">
<link href="{{ url('/'); }}/css/app.css" rel="stylesheet">

<style>
    .navbar {
        border: 1px solid lightgray;
    }
</style>
@endsection


@section('content')
    <h1 class="mt-5 font-bold	text-lg	">{{$title}}</h1>

    <section>
        {!! $content !!}
    </section>
@endsection
