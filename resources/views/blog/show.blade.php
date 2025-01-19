@extends('layouts.layout')

@section('title')
 - Blog
@endsection

@section('css')
<link href="css/extra-styles.css" rel="stylesheet">
<style>
    .navbar {
        border: 1px solid lightgray;
    }
</style>
@endsection


@section('content')
    <h1 class="mt-3">{{$title}}</h1>

    <section>
        {!! $content !!}
    </section>
@endsection
