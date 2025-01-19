@extends('layouts.layout')

@section('title')
 - Blog
@endsection


@section('css')
<link href="css/extra-styles.css" rel="stylesheet">
@endsection


@section('content')
    <h1>{{$title}}</h1>

    <section>
        {!! $content !!}
    </section>
@endsection
