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
                        class="btn text-success" 
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
    @foreach($flashcard_study_records as $flashcard_study_record)

    <div class="flex flex-row justify-content-between my-2 justify-content-end align-items-center">
        <button style="width: 50px" class="btn btn-sm btn-success">Pass</button>
        <button style="width: 50px" class="btn btn-sm btn-danger">Fail</button>
        <span class="ml-3">{{$flashcard_study_record->flashcard->english_phrase}} | <a target="_blank" href="{{$flashcard_study_record->flashcard->sound_file_path}}"> {{ $flashcard_study_record->flashcard->ukrainian_phrase}} </a></span>
    </div>

    @endforeach
</div>


@endsection