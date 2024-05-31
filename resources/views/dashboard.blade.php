@extends('layouts.layout')

@section('title')
 - Dashboard
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
@endsection


@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<div class="foreign-script">

<h1 style="margin-top: 1.75rem">Dashboard</h1>

<ul>
    <li>My lesson progress</li>
    <li><a href="/lessons">Go to lessons</a></li>
    <li><a href="/flashcard-studying">My flashcards</a></li>
    <li><a href="/study-record/test">Get tested</a></li>

</ul>

</div>

@endsection