@extends('layouts.layout-modern')

@section('title')
- Ukrainian Grammar Lesson - {{ $page->title}}
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

    .background-light-gray-box {
        background-color: #F4F4F4 !important;
    }

    .reading-flex {
        display: flex;
        gap: 1rem;
        flex-direction: column;
    }

    .reading-passage {
        flex: 1;
    }

    /* .reading-passage p {
        display: inline;
    } */

    .lesson-introduction-text  p:last-of-type {
        margin-bottom: 0rem !important;
    }

    .ukrainian-word-text {
        color:#029AF7;
        font-weight: bold;
    }

    .fw-bold {
        font-weight: bold;
    }

    .dialogue-row:nth-of-type(odd) .dialogue-bubble {
        margin-right: 1rem;
    }

    .dialogue-row:nth-of-type(even) .dialogue-bubble {
        margin-left: 1rem;
    }

    .dialogue-row:nth-of-type(even) .translation-bubble {
        margin-left: 1rem;
    }

    @media (min-width: 768px) {
        .reading-flex {
            flex-direction: row;
        }
    }

</style>

@endsection

@section('content')
    <div class="container">

        <!-- Title -->
        <div class="modern-panel p-3 p-md-5 text-graphite-black">
            <h1 class=""> {{$page->title}} </h1>
            <img class="rounded" src="{{ $page->hero_photo }}" style="max-width: 100%; height: auto;" />
        </div>

        <!-- Readings -->
        <div class="modern-panel p-3 p-md-5 mt-1 text-graphite-black">
            Content
        </div>

    </div>
@endsection

@section('scripts')
<script>
    function playAudioFromButton(button) {
        const audioPath = button.getAttribute('data-audio-file-path');
        if (!audioPath) return;

        button.disabled = true;
        button.style.backgroundColor = '#FFC107'; // Active amber

        const audio = new Audio(audioPath);
        audio.play();

        audio.addEventListener('ended', () => {
            button.disabled = false;
            button.style.backgroundColor = '';
        });

        audio.addEventListener('error', () => {
            console.error("Audio file could not be played:", audioPath);
            button.disabled = false;
            button.style.backgroundColor = '';
        });
    }
</script>
@endsection
