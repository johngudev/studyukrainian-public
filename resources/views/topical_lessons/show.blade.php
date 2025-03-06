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
    }

    .reading-passage {
        flex: 1;
    }

    .reading-passage p {
        display: inline;
    }

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
</style>

@endsection


@section('content')
    <div class="container">

        <div class="modern-panel p-5 text-graphite-black">
            <h1 class=""> {{$page->title}} </h1>
            <div class="lesson-introduction-text">{!! $page->introduction !!}</div>
        </div>

        <div class="modern-panel mt-1 p-5">
            <h2 class="mb-4 text-graphite-black">Vocabulary</h2>

            @if(count($page->nouns) > 0)
            <h3 class="p-3 text-graphite-black" style="background-color: #EEF7DC;">Nouns</h3>
            <div style="margin-left: auto; margin-right:auto; width: 100%" class="my-2 table-auto w-full border-collapse  border-gray-300">

                    <div class="row no-gutters border-top border-left border-gray-300">
                            @foreach($page->nouns as $item)
                                <div class="col-6 col-md-3 border-right border-bottom border-gray-300 px-4 py-2">
                                    <div style="color:#029AF7"><b>{{ $item->ukrainian_word }}</b></div>
                                    <div>{{ $item->english_definition }}</div>
                                </div>
                            @endforeach
                    </div>
            </div>
            @endif

            @if(count($page->verbs) > 0)
            <h3 class="p-3 text-graphite-black" style="background-color: #EEF7DC;">Verbs</h3>
            <div style="margin-left: auto; margin-right:auto; width: 100%" class="my-2 table-auto w-full border-collapse  border-gray-300">

                    <div class="row no-gutters border-top border-left border-gray-300">
                            @foreach($page->verbs as $item)
                                <div class="col-6 col-md-3 border-right border-bottom border-gray-300 px-4 py-2">
                                    <div style="color:#029AF7"><b>{{ $item->ukrainian_word }}</b></div>
                                    <div>{{ $item->english_definition }}</div>
                                </div>
                            @endforeach
                    </div>
            </div>
            @endif

            @if(count($page->adjectives_and_adverbs) > 0)
            <h3 class="p-3 text-graphite-black" style="background-color: #EEF7DC;">Adjectives and Adverbs</h3>
            <div style="margin-left: auto; margin-right:auto; width: 100%" class="my-2 table-auto w-full border-collapse  border-gray-300">

                    <div class="row no-gutters border-top border-left border-gray-300">
                            @foreach($page->adjectives_and_adverbs as $item)
                                <div class="col-6 col-md-3 border-right border-bottom border-gray-300 px-4 py-2">
                                    <div style="color:#029AF7"><b>{{ $item->ukrainian_word }}</b></div>
                                    <div>{{ $item->english_definition }}</div>
                                </div>
                            @endforeach
                    </div>
            </div>
            @endif

            @if(count($page->other_parts_of_speech) > 0)
            <h3 class="p-3 text-graphite-black" style="background-color: #EEF7DC;">Other</h3>
            <div style="margin-left: auto; margin-right:auto; width: 100%" class="my-2 table-auto w-full border-collapse  border-gray-300">

                    <div class="row no-gutters border-top border-left border-gray-300">
                            @foreach($page->other_parts_of_speech as $item)
                                <div class="col-6 col-md-3 border-right border-bottom border-gray-300 px-4 py-2">
                                    <div style="color:#029AF7"><b>{{ $item->ukrainian_word }}</b></div>
                                    <div>{{ $item->english_definition }}</div>
                                </div>
                            @endforeach
                    </div>
            </div>
            @endif




            @foreach($page->word_group as $group)
            <h3 class="p-3 text-graphite-black" style="background-color: #EEF7DC;">{{ $group->word_group_title }}</h3>
            <div style="margin-left: auto; margin-right:auto; width: 100%" class="my-2 table-auto w-full border-collapse  border-gray-300">

                    <div class="row no-gutters border-top border-left border-gray-300">
                            @foreach($group->vocabulary_item as $item)
                                <div class="col-6 col-md-3 border-right border-bottom border-gray-300 px-4 py-2">
                                    <div style="color:#029AF7"><b>{{ $item->ukrainian_word }}</b></div>
                                    <div>{{ $item->english_definition }}</div>
                                </div>
                            @endforeach
                    </div>
            </div>
            @endforeach

        </div>

        <div class="modern-panel mt-1 p-5">
            <h2 class="mb-4 text-graphite-black">Reading</h2>
            <div class="reading-flex">
                <div class="p-5 background-light-gray-box reading-passage">
                    @foreach($page->long_reading_text as $text_item)
                        {!! $text_item->ukrainian_paragraph  !!}
                    @endforeach
                </div>
                <div class="p-5 border border-gray-100 reading-passage">
                    @foreach($page->long_reading_text as $text_item)
                        {!! $text_item->english_paragraph !!}
                    @endforeach
                </div>
            </div>
        </div>

        @if(count($page->phrases_and_questions) > 0)
        <div class="modern-panel mt-1 p-5">
            <h2 class="mb-4 text-graphite-black">Questions and Phrases</h2>

            <table class="table-auto w-full border-collapse border border-gray-100 mx-auto">
                <tbody>
                    @foreach($page->phrases_and_questions as $item)
                        <tr>
                            <td style="border-right: 1px dashed rgb(222, 226, 230) !important" class="border border-gray-100 px-4 py-2 ukrainian-word-text">{{ $item->ukrainian_phrase }}</td>
                            <td style="border-left: 1px dashed  rgb(222, 226, 230) !important" class="border border-gray-100 px-4 py-2">{{ $item->english_definition }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif


        <div class="modern-panel mt-1 p-5">
            <h2 class="mb-4 text-graphite-black">Dialogue</h2>

            <table class="table-auto w-full border-collapse  border-gray-100">
                <tbody class="dialogue-body">
                    @foreach($page->dialogue as $dialogue_item)
                        <tr class="dialogue-row">
                            <td class=" border-gray-100 px-4 py-2 fw-bold text-graphite-black"> {{ $dialogue_item->speaker }}</td>
                            <td class=" border-gray-100 px-4 p-1"> <div class="dialogue-bubble p-3 background-light-gray-box rounded rounded-3">{{ $dialogue_item->ukrainian_speech }} </div></td>
                            <td class=" border-gray-100 px-4 py-2 text-graphite-black"><div class="translation-bubble">{{ $dialogue_item->english_translation }}</div></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>




@endsection