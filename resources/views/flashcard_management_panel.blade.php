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

@isset($flashcards)
<div class="bg-light my-5 p-5 flex flex-col">
    <h2>Available Flashcards</h2>
    <div>Click each link to open the flashcards manager for a particular lesson.  You can then add the flashcards for each phrase of that lesson individually.  (These links will open in a new tab).</div>  
    <div class="mt-2"><a href="/study-record/test">Study your flashcards now!</a></div>
    <hr>

    <ul>

    @isset($flashcard_study_records)
        @php
            $flashcards_owned_ids = $flashcard_study_records->pluck('flashcard_id')->toArray();
        @endphp
    @endisset

    @for($i = 1; $i < 7; $i++)
        <li><a href="/lessons/flashcards/{{$i}}" target="_blank">Lesson {{$i}} - Flashcards</a></li>
    @endfor

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

        if(date) {
            slide.innerHTML = "Next Test Date: " + date.toLocaleDateString("en-US") + " " + date.toLocaleTimeString("en-US");
        } else {
            slide.innerHTML = "";
        }

    };

</script>

@endsection