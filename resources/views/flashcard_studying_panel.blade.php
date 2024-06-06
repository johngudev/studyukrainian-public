@extends('layouts.layout')

@section('title')
 - Flashcard Studying Panel
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->

<style>
    .flashcard-add-button:disabled {
        color: transparent !important;
    }
</style>
@endsection


@section('content')

@isset($flashcards)
<div class="bg-light my-5 p-5 flex flex-col">
    <h2>Available Flashcards</h2>
    <div>These are the flashcards that you can add to your personal flashcard deck.  To add a flashcard to your deck, click the <span style="color: green; padding-left: 3px; padding-right: 3px; border: 1px solid rgb(200, 200, 200); background-color:rgb(239, 239, 239);">+</span> button next to the phrase that you want to add as a flashcard.  <a href="/study-record/test">Study your flashcards now!</a></div>
    <hr>

    <ul>

    @isset($flashcard_study_records)
        @php
            $flashcards_owned_ids = $flashcard_study_records->pluck('flashcard_id')->toArray();
        @endphp
    @endisset

    @foreach($flashcards as $flashcard)
        <div class="flex flex-row justify-content-between my-2">
        
                @isset($flashcard_study_records)

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

<div class="bg-light my-5 p-5 flex flex-col">
<h2>Your Flashcard Deck</h2>
    <div>These are the flashcards that you will be tested on.</div>
    <hr>
 

    <ul>
        @foreach($flashcard_study_records as $flashcard_study_record)

        <li class="flex flex-row justify-content-between my-2 justify-content-end align-items-center">
            <!-- <button style="width: 50px" class="btn btn-sm btn-success">Pass</button>
            <button style="width: 50px" class="btn btn-sm btn-danger">Fail</button> -->
            <span class="ml-3">{{$flashcard_study_record->flashcard->english_phrase}} | <a target="_blank" href="{{$flashcard_study_record->flashcard->sound_file_path}}"> {{ $flashcard_study_record->flashcard->ukrainian_phrase}} </a></span>
            <span> | </span>
            <span data-date_time="{{$flashcard_study_record->next_test_date}}" class="next-test-date-label ml-auto"> Next Test Date: {{$flashcard_study_record->readableDateTime }} </span>
        </li>

        @endforeach
    </ul>
</div>

<script>
    const slides = document.getElementsByClassName("next-test-date-label");

    console.log(   slides);

    for( let slide of slides)  {
        // console.log("hello world");
        let date = new Date (Date.parse(slide.dataset.date_time + " UTC"));

        slide.innerHTML = "Next Test Date: " + date.toLocaleDateString("en-US") + " " + date.toLocaleTimeString("en-US");
    };

</script>

@endsection