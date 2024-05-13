@extends('layouts.layout')

@section('title')
 - About
@endsection


@section('css')
<link href="css/extra-styles.css" rel="stylesheet">
@endsection


@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="">
            <ul>
                <li><a href="/admin/grammar/create">Create a new grammar lesson</a></li>
                <li><a href="/admin/grammar/all">View all grammar lessons</a></li>
                <li><a href="/admin/flashcard/create">Create a new flashcard</a></li>
                <li><a href="/admin/blogs/create">Create a new blog post</a></li>
            </ul>
        </div>
    </div>
@endsection