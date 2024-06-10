@extends('layouts.layout')

@section('title')
 - Flashcard Management Panel
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
<link href="css/flashcard-admin.css" rel="stylesheet">

<style>
    .flashcard-add-button:disabled {
        color: transparent !important;
    }
</style>
@endsection


@section('content')
<div class="container">
@isset($flashcards)
    <div class="bg-light my-5 p-5 flex flex-col">
        <h2>Lesson 1 Flashcards</h2>
        @if(Auth::check())
            <div class="mt-2">To add a flashcard to your deck, click the <span style="color: green; padding-left: 3px; padding-right: 3px; border: 1px solid rgb(200, 200, 200); background-color:rgb(239, 239, 239);">+</span> button next to the phrase that you want to add as a flashcard.  <a href="/study-record/test">Study your flashcards now!</a></div>
        @else
            <div class="mt-3"><b>You are not logged in!</b></div>
            <div> <a href="/login">Log in</a> or <a href="/register">Create an Account</a> to add these flashcards to your collection.</div>
        @endif
        <hr>

        <ul>

        @foreach($flashcards as $flashcard)
            <div class="flex flex-row justify-content-between my-2">
            
                    @isset($flashcards_owned_ids)
                        <form class="d-inline"
                            action="/flashcard-studying/store"
                            method="POST"

                            >

                            @csrf

                            <input style="display: none" type="text" name="id" value="{{$flashcard->id}}"></input>

                            <button 
                                class="btn text-success flashcard-add-button"
                                style = "margin-left: -2rem;" 
                                type="submit"
                                @if(in_array($flashcard->id, $flashcards_owned_ids))
                                    disabled style="color:gray"
                                @endif
                                >+</button>
                        </form>
                    @endisset

                <span class="ml-3">{{$flashcard->english_phrase}} | <a target="_blank" href="{{$flashcard->sound_file_path}}"> {{ $flashcard->ukrainian_phrase}} </a></span>


            </div>
        @endforeach
        </ul>

    </div>
@endisset
</div>