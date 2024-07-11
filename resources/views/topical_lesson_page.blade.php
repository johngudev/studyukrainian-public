@extends('layouts.layout')

@section('title')
- Topical Lesson <?php echo $vocab[0][0]; ?>
@endsection

@section('css')
<link href="../../css/sticky-footer-navbar.css" rel="stylesheet"> <!-- from: http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/# -->
<link href="../../css/tooltip.css" rel="stylesheet">
<link href="../../css/extra-styles.css" rel="stylesheet">

@endsection

@section('content')

<!-- Title -->
<div class="text-center">
  <h1> {{ $vocab[0][0] }} </h1>
</div>

@php 
  array_shift($vocab);
@endphp

<!-- Image -->
<div class="row justify-content-center">
  <div class="col-md-10 col-lg-0  text-center" />
  <!-- img class="mx-auto rounded img-fluid" src="" -->

  <div class="pt-2 text-left text-secondary"></div>
</div>
<!-- /div -->

<!-- Dialogue Table -->
<!-- div class="row justify-content-center  "-->

<div class="col-md-10 col-lg-9 px-3 mt-3 mt-lg-0">

  <table class="mx-auto table table-striped table-sm" id="lesson-dialogue-table">
    <tbody>
      @foreach($vocab as $vocab_item)
        <tr>
          <td>{{ $vocab_item[0] }}</td>
          <td>{{ $vocab_item[1] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

</div>

</div>


<!-- Transliteration and Translation Buttons / Toggles -->
<div class="text-center">
  <button class="btn btn-info" id="toggleTransliterationButton">Toggle Transliteration</button>
  <!--button class="btn btn-info" onclick="toggleDefinitions()" >Show Literal Translations</button-->
</div>

@isset($display_flashcards)
  @if($display_flashcards)
    <div class="text-center mt-2">
      <a href="/lessons/flashcards/{{$dialogue_number}}" target="_blank" class="btn btn-primary">Add Flashcards</a>
    </div>
  @endif
@endisset

@endsection


