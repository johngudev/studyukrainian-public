@extends('layouts.layout')

@section('title')
 - Grammar - <?php echo $grammar_topic; ?>
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
@endsection


@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<!-- Transliteration and Translation Buttons / Toggles -->
<div style="margin-top: 1.75rem;" class="text-center">
  <button class="btn btn-info btn-sm transliteration-button mt-sm-2 float-right" id="toggleTransliterationButton">Toggle Transliteration</button>
  <!--button class="btn btn-info" onclick="toggleDefinitions()" >Show Literal Translations</button-->
</div>

<div style="margin-top: 1.75rem;" id="grammar-content-original" class="foreign-script">

    <?php

    $texts_path = "texts/";

    $grammar_path 	= $texts_path."grammartopic-".$grammar_topic.".txt";

    if (file_exists($grammar_path)) {
        $grammar_contents         = file_get_contents($grammar_path,true);


        //Transliteration of the grammar text
        $grammar_transliteration = new TranslitUk();
        $grammar_transliterated = $grammar_transliteration->convert($grammar_contents);

        echo $grammar_contents;

        

    } else {
        echo "There was an error $grammar_path";
    }
    ?>

</div>

<div id="grammar-content-transliterated" class="english-script d-none">

    <?php

    $texts_path = "texts/";

    $grammar_path 	= $texts_path."grammartopic-".$grammar_topic.".txt";

    if (file_exists($grammar_path)) {
        $grammar_contents         = file_get_contents($grammar_path,true);


        //Transliteration of the grammar text
        $grammar_transliteration = new TranslitUk();
        $grammar_transliterated = $grammar_transliteration->convert($grammar_contents);

        echo $grammar_transliterated;

        

    } else {
        echo "There was an error $grammar_path";
    }
    ?>

</div>

<script>
  $("#toggleTransliterationButton").click(function() {
    $("#grammar-content-original").toggleClass('d-none');
    $("#grammar-content-transliterated").toggleClass('d-none');
  });
</script>


<?php 

////////////////////////////////////////////
//
//  UPDATE THIS LATER 
//
////////////////////////////////////////////




///////////////////////////////////////////////////////
//
//  TRANSLITERATOR CODE
//
///////////////////////////////////////////////////////

class TranslitUk
{
  public $alphabet = array(
    // upper case
    'А' => 'A',     'Б' => 'B',     'В' => 'V',     'Г' => 'H',
    'ЗГ' => 'Zgh',  'Зг' => 'Zgh',  'Ґ' => 'G',     'Д' => 'D',
    'Е' => 'E',     'Є' => 'Ye',    'Ж' => 'Zh',    'З' => 'Z',
    'И' => 'Y',     'І' => 'I',     'Ї' => 'Yi',     'Й' => 'Y',
    'К' => 'K',     'Л' => 'L',     'М' => 'M',     'Н' => 'N',
    'О' => 'O',     'П' => 'P',     'Р' => 'R',     'С' => 'S',
    'Т' => 'T',     'У' => 'U',     'Ф' => 'F',     'Х' => 'X',
    'Ц' => 'Ts',    'Ч' => 'Ch',    'Ш' => 'Sh',    'Щ' => 'Shch',
    'Ь' => '',      'Ю' => 'Yu',    'Я' => 'Ya',    '’' => '',
    // lower case
    'а' => 'a',     'б' => 'b',     'в' => 'v',     'г' => 'h',
    'зг' => 'zgh',  'ґ' => 'g',     'д' => 'd',     'е' => 'e',
    'є' => 'ye',    'ж' => 'zh',    'з' => 'z',     'и' => 'y',
    'і' => 'i',     'ї' => 'yi',     'й' => 'y',     'к' => 'k',
    'л' => 'l',     'м' => 'm',     'н' => 'n',     'о' => 'o',
    'п' => 'p',     'р' => 'r',     'с' => 's',     'т' => 't',
    'у' => 'u',     'ф' => 'f',     'х' => 'x',    'ц' => 'ts',
    'ч' => 'ch',    'ш' => 'sh',    'щ' => 'shch',  'ь' => '',
    'ю' => 'yu',    'я' => 'ya',    '\'' => '',
  );
  public function convert($text)
  {
    return str_replace(
      array_keys($this->alphabet),
      array_values($this->alphabet),
      preg_replace(
        // use alternative variant at the beginning of a word
        array(
          '/(?<=^|\s)Є/', '/(?<=^|\s)Ї/', '/(?<=^|\s)Й/',
          '/(?<=^|\s)Ю/', '/(?<=^|\s)Я/', '/(?<=^|\s)є/',
          '/(?<=^|\s)ї/', '/(?<=^|\s)й/', '/(?<=^|\s)ю/',
          '/(?<=^|\s)я/',
        ),
        array(
          'Ye', 'Yi', 'Y', 'Yu', 'Ya', 'ye', 'yi', 'y', 'yu', 'ya',
        ),
        $text
      )
    );
  }
}

?>

@endsection