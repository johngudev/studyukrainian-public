@extends('layouts.layout')

@section('title')
- Ukrainian Topical Lesson <?php  ?>
@endsection

@section('css')
<link href="../../css/sticky-footer-navbar.css" rel="stylesheet"> <!-- from: http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/# -->
<link href="../../css/tooltip.css" rel="stylesheet">
<link href="../../css/extra-styles.css" rel="stylesheet">

<style>

@media (min-width:1000px){
  .navbar {
    border-bottom: 1px solid lightgray;
  }
</style>


@endsection

@section('content')
    <h1 class="mt-5">{{ $page->title}}</h1>

    <h2>Vocabulary</h2>
    <ul>
    @foreach ($page->vocabulary_set as $vocabulary_item)
        <li>{{ $vocabulary_item->ukrainian_word }} | {{ $vocabulary_item->english_definition }}</li>
    @endforeach
    </ul>
@endsection