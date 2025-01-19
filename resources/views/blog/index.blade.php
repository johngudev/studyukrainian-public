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
@antlers
    <ul class="mt-5">

    {{ collection:blog }}
        <li><a href="/blog/{{ slug }}">{{ title }}</a></li>
    {{ /collection:blog }}
    </ul>
@endantlers

@endsection