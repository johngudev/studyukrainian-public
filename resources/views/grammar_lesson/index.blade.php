@extends('layouts.layout-modern')

@section('title')
- Ukrainian Grammar Lessons
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
        <h1 class="px-5">Grammar Topics </h1>
        <div class="px-5 text-light-gray" >These news articles equip learners with the vocabulary and expressions needed to talk about a variety of topics.
        </div>

        <div class="border-top border-gray-100 mt-5">
            @foreach($entries as $index => $lesson)
                <a class="text-graphite-black text-decoration-none topical-lesson-bar-link" href="/grammar-lessons/{{ $lesson->slug }}">
                    <div class="border-bottom border-gray-100 py-2 px-5 d-flex justify-content-between align-items-center topical-lesson-bar-link"> 
                        <span> 
                            <span class="text-lesson-number"></span>  
                            <span>{{ $lesson->title}}</span>
                        </span> 
                        <svg fill="none" viewBox="0 0 24 24" width="0.75rem" height="0.75rem" class="d-none d-md-block topical-lesson-bar-link-icon"><path fill="currentColor" d="M18.45 11.54a.6.6 0 0 1 0 .92L5.14 23.64a.6.6 0 0 1-.99-.46V.82c0-.51.6-.8.99-.46z"></path></svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection