@extends('layouts.layout')

@section('title')
 - Dashboard
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
@endsection


@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<style>
    .dashboard-card {

    }

    .dashboard-panel {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-top:2rem;
    }

    .dashboard-card {
        background-color: rgba(83, 87, 190, 0.12);
        padding: 2rem;
        flex: 1;
        border-radius: 1.25rem;
    }

    .dashboard-card__title {
        font-size: 1.5rem;
        font-weight: 700;
        color: rgb(10,10,10);
    }

    @media(max-width: 480px) {
        .dashboard-panel {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    }
</style>

<div class="foreign-script">

    <h1 style="margin-top: 1.75rem">Dashboard</h1>
    <hr>

    <div class="dashboard-panel">
        <div class="dashboard-card">
            <div class="dashboard-card__title">Lessons</div>
            <hr>
            <div>
                <ul>
                    <li><a href="/lessons/">Browse dialogue lessons</a></li>
                    <li><a href="/grammar/">Browse grammar lessons</a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-card">
        <div class="dashboard-card__title">Manage Flashcards</div>
        <hr>
            <div>
                <ul>
                    <li><a href="/flashcard-studying/">Flashcard management portal</a>
                        <div class="mt-2">Click here to add flashcards to your account.  These can be studied in the flashcard studying interface.</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="dashboard-card__title">Study Flashcards</div>
            <hr>
            <div>
                <ul>
                    <li><a href="/study-record/test/">Study with your flashcards</a>
                        <div class="mt-2">Click here to study with your flashcards.</div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>

</div>

@endsection