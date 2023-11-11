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
            </ul>
        </div>
    </div>
@endsection