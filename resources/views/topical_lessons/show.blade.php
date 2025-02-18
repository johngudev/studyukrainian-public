@extends('layouts.layout-modern')

@section('title')
- Ukrainian Topical Lesson - {{ $page->title}}
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
        border-radius: 0.75rem;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);

    }

    .modern-panel > *:last-child {
        margin-bottom: 0 !important;
    }
</style>

@endsection


@section('content')
    <div class="container">

        <div class="modern-panel">
            <h1 class=""> {{$page->title}} </h1>
            {!! $page->introduction !!}
        </div>

        <div class="modern-panel mt-3">
            <h2 class="">Vocabulary</h2>
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Ukrainian</th>
                        <th class="border border-gray-300 px-4 py-2">English</th>
                        <th class="border border-gray-300 px-4 py-2">Audio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($page->nouns as $vocabulary_item)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $vocabulary_item->ukrainian_word }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $vocabulary_item->english_definition }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $vocabulary_item->audio_file }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <hr>

            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Ukrainian</th>
                        <th class="border border-gray-300 px-4 py-2">English</th>
                        <th class="border border-gray-300 px-4 py-2">Audio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($page->verbs as $vocabulary_item)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $vocabulary_item->ukrainian_word }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $vocabulary_item->english_definition }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $vocabulary_item->audio_file }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="modern-panel mt-3">
            <h2>Reading</h2>
            <div class="row">
            </div>
        </div>

        <div class="modern-panel mt-3">
            <h2>Questions and Phrases</h2>
        </div>


        <div class="modern-panel mt-3">
            <h2>Dialogue</h2>

            <table class="table-auto w-full border-collapse border border-gray-100">
                <tbody>
                    @foreach($page->dialogue as $dialogue_item)
                        <tr>
                            <td class="border border-gray-100 px-4 py-2">{{ $dialogue_item->speaker }}</td>
                            <td class="border border-gray-100 px-4 py-2">{{ $dialogue_item->ukrainian_speech }}</td>
                            <td class="border border-gray-100 px-4 py-2">{{ $dialogue_item->english_translation }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>




@endsection