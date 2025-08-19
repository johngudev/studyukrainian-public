@extends('layouts.layout-modern')

@section('title')
- Road Map
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

    .text-light-gray {
        color: rgba(125,125,125,1) !important;
    }

    .topical-lesson-bar-link:hover {
        background-color: rgba(245,245,245,1) !important;
        text-decoration: none !important; 
    }

    .topical-lesson-bar-link:hover .topical-lesson-bar-link-icon {
        transform: translateX(0.75rem);
    }

    .topical-lesson-bar-link-icon {
        transition: transform 0.3s ease-in-out;
    }

    .text-lesson-number {
        color: rgba(125,125,125,1) !important;
        width: 7rem;

        display: inline-block !important;

    }
</style>
@endsection


@section('content')
<div class="container">

    <div class="modern-panel px-0 py-5 text-graphite-black">
        <h1 class="px-5">Road Map</h1>
    </div>

    <div class="modern-panel px-0 py-5 text-graphite-black mt-1">
        <h2 class="px-5">Beginner I - Level A0</h2>
    </div>

    <div class="modern-panel px-0 py-5 text-graphite-black mt-1">
        <h2 class="px-5">Beginner II - Level A1</h2>
    </div>

    <div class="modern-panel px-0 py-5 text-graphite-black mt-1">
        <h2 class="px-5">Beginner III - Level A2</h2>
    </div>

    <div class="modern-panel px-0 py-5 text-graphite-black mt-1">
        <h2 class="px-5">Intermediate I - Level B1</h2>
    </div>

    <div class="modern-panel px-0 py-5 text-graphite-black mt-1">
        <h2 class="px-5">Intermediate II - Level B2</h2>
    </div>

    <div class="modern-panel px-0 py-5 text-graphite-black mt-1">
        <div class="flex flex-column flex-md-row justify-content-between">
            <ul class="">
                @foreach($topical_lessons as $topical_lesson)
                <li>{{ $topical_lesson->title }}</li>
                @endforeach
            </ul>

            <ul class="">
                @foreach($dialogue_lessons as $dialogue_lesson)
                <li>Dialogue {{ $dialogue_lesson->dialogue_index }}</li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection