@extends('layouts.layout')

@section('title')
 - Ukrainian Grammar
@endsection


@section('css')
<link href="css/extra-styles.css" rel="stylesheet">
<link href="css/table-of-contents.css" rel="stylesheet">

@endsection


@section('content')

  <div class="row grammar-topics-group">

    <div class="col-6 mt-3 col-md-3 pt-5">

          <div class=" text-center text-secondary"><h3>Verbs</h3></div>

    </div>

<?php

  $topic = "Verbs";

  foreach($content[$topic] as $item)
    {

      ?>

      <div class="col-6 mt-3 col-md-3">
        <div class="card bg-light">
          <div class="card-header  text-secondary"><b><?php echo $topic; ?></b></div>
          <div class="card-body">
            <div class="card-title text-center"><?php echo $item['title']; ?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href = "<?php echo $item['link']; ?>" class="btn btn-success text-center btn-sm">Go to lesson</a></div>
          </div>
        </div>
      </div>

      <?php

    };

      ?>

  </div>

  <hr class="mt-4 mb-2" style="width: 80%; color: black; height: 1px;" />




  <div class="row grammar-topics-group">

    <div class="col-6 mt-3 col-md-3 pt-5">

          <div class=" text-center text-secondary"><h3>Nouns and Adjectives</h3></div>

    </div>
<?php

  $topic = "Nouns and Adjectives";

  foreach($content[$topic] as $item)
    {

      ?>

      <div class="col-6 mt-3 col-md-3">
        <div class="card bg-light">
          <div class="card-header  text-secondary"><b><?php echo $topic; ?></b></div>
          <div class="card-body">
            <div class="card-title text-center"><?php echo $item['title']; ?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href = "<?php echo $item['link']; ?>" class="btn btn-success text-center btn-sm">Go to lesson</a></div>
          </div>
        </div>
      </div>

      <?php

    };

      ?>

  </div>

  <hr class="mt-4 mb-2" style="width: 80%; color: black; height: 1px;" />

  <div class="row grammar-topics-group">

    <div class="col-6 mt-3 col-md-3 pt-5">

          <div class=" text-center text-secondary"><h3>Noun Cases</h3></div>

    </div>
<?php

  $topic = "Noun Cases";

  foreach($content[$topic] as $item)
    {

      ?>

      <div class="col-6 mt-3 col-md-3">
        <div class="card bg-light">
          <div class="card-header  text-secondary"><b><?php echo $topic; ?></b></div>
          <div class="card-body">
            <div class="card-title text-center"><?php echo $item['title']; ?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href = "<?php echo $item['link']; ?>" class="btn btn-success text-center btn-sm">Go to lesson</a></div>
          </div>
        </div>
      </div>

      <?php

    };

      ?>

  </div>


@endsection