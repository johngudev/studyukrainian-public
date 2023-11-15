@extends('layouts.layout')

@section('title')
 - Flashcard Studying Panel
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
@endsection


@section('content')

@isset($flashcards)
<div class="bg-light my-5 p-5 flex flex-col">
    <ul>
    @foreach($flashcards as $flashcard)
        <div class="flex flex-row justify-content-between my-2">
        
                <form class="d-inline"
                    action="/flashcard-studying/store"
                    method="POST"
                    >

                    @csrf

                    <input style="display: none" type="text" name="id" value="{{$flashcard->id}}"></input>

                    <button class="btn text-success" type="submit">+</button>
                </form>

            <span class="ml-3">{{$flashcard->english_phrase}} | <a target="_blank" href="{{$flashcard->sound_file_path}}"> {{ $flashcard->ukrainian_phrase}} </a></span>


        </div>
    @endforeach
    </ul>
</div>
@endisset


@endsection