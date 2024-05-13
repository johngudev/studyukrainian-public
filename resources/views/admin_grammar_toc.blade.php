@extends('layouts.layout')

@section('title')
 - Ukrainian Grammar Lessons
@endsection


@section('css')
<link href="css/extra-styles.css" rel="stylesheet">
<link href="css/table-of-contents.css" rel="stylesheet">

@endsection


@section('content')

<ul>
@foreach($grammar_files as $grammar_file)

  @php 
    $grammar_topic = substr($grammar_file, 13);;
    $firstPeriodPos = strpos($grammar_topic, '.');
    $grammar_topic = substr($grammar_topic, 0, $firstPeriodPos);

  @endphp 

  <li><a href="/grammar/{{$grammar_topic}}">{{$grammar_file}}</a></li>
@endforeach
</ul>

@endsection