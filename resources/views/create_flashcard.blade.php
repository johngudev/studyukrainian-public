@extends('layouts.layout')

@section('title')
 - Create Flashcard
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
@endsection


@section('content')

<form class="bg-light p-5 flex flex-col"
    action="/admin/flashcard/create"
    method="POST">

    @csrf

    <div class="my-3 col-12">
        <label for="english_phrase">English Phrase</label>
        <input type="text"
            class="form-control "
            name="english_phrase"
            id="english_phrase">
    </div>

    <div class="my-3 col-12">
        <label for="ukrainian_phrase">Ukrainian Phrase</label>
        <input type="text"
            class="form-control "
            name="ukrainian_phrase"
            id="ukrainian_phrase"></input>
    </div>

    <div class="my-3 col-12">
        <label for="sound_file_path">Sound File Path</label>
        <input type="text"
            class="form-control "
            name="sound_file_path"
            id="sound_file_path"></input>
    </div>

    <div class="col-12">
        <input class="btn btn-primary" type="submit">
    </div>
</form>

@isset($flashcards)
<div class="bg-light my-5 p-5 flex flex-col">
    <ul>
    @foreach($flashcards as $flashcard)
        <div class="flex flex-row justify-content-between my-2">
        
                <form class="d-inline"
                    action="/admin/flashcard/delete"
                    method="POST"
                    >


                    @csrf

                    <input style="display: none" type="text" name="id" value="{{$flashcard->id}}"></input>

                    <button class="btn text-danger" type="submit">×</button>
                </form>

            <span class="ml-3">{{$flashcard->english_phrase}} | <a target="_blank" href="{{$flashcard->sound_file_path}}"> {{ $flashcard->ukrainian_phrase}} </a></span>


        </div>
    @endforeach
    </ul>
</div>
@endisset


@endsection