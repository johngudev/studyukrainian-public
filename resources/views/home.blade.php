@extends('layouts.home_layout')

@section('css')

  <link href="css/home.css" rel="stylesheet">
  <link href="css/extra-styles.css" rel="stylesheet">

@endsection


@section('title')
 - Learn Ukrainian Online
@endsection

@section('content')

<div class="hero pb-5">
  <div class="container">
    <div class="hero__top">
      <span class="hero__top-left-color-blur">
    </div>

    <div class="hero__content">

      <div class="row">
        <div class="col-sm-12 col-md-6 text-center">
          <div>
            <img class="img-fluid mx-auto hero__image" src="/img/ukrainian-woman-with-flag.jpeg"></img>
          </div>
        </div>

        <div class="col-sm-12 col-md-6">

          <div class="pt-4 pt-md-2">
            <h1 class="mb-4 mb-md-3 text-graphite-black">The most complete resource for learning Ukrainian language online</h1>

            <ul class="hero__list-custom-bullet text-softer-black">
            <li>Learn Ukrainian naturally by listening to dialogues.</li>
            <li>Learn how to manage day-to-day situations in Ukrainian.</li>
            <li>Full grammar explanations and word-for-word translations of all dialogues.</li>
            </ul>
            <div class="text-center">
              <a href="/lessons" class="btn hero__cta-button mx-auto">Start learning now</a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="d-flex justify-content-end">
      <span class="hero__bottom-right-color-blur">
    </div>
  </div>

</div>

<!-- <div class="container mt-4">

<div class="flag-stripe-block ">
  <div class="flag-stripe-block__blue"></div>
  <div class="flag-stripe-block__yellow"></div>
</div>

</div> -->



<div class="sample-lessons-block">
  <div class="container">

    <div class="row justify-content-center justify-content-md-between">
      <h2 class="sample-lessons-block-sticker sample-lessons-block-sticker-1" style="z-index: -2; ">Practical Lessons in Spoken Ukrainian</h2>

      <h2 class="sample-lessons-block-sticker sample-lessons-block-sticker-2" style="z-index: -2; ">Full Audio Recorded by Native Speakers</h2>
    </div>
    <!-- <h2 class="mb-5 text-center bg-primary text-white" style="font-weight:700">Practical Lessons in Spoken Ukrainian </h2> -->
    <div class="row sample-lessons-block__flex-gap justify-content-center">

      <div class="card sample-lessons-block__lesson-card sample-lesson-block__lesson-card-first">
          <a href="<?php echo "lessons/1/"; ?>"><img class="card-img-top" src="<?php echo "../img/01.jpg"; ?>" alt="Card image cap"></a>
          <div class="card-body">
            <div class="card-title text-center text-graphite-black"><?php echo "Introducing Yourself";?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href="<?php echo "lessons/1/"; ?>" class="btn btn-success btn-sm text-center ">Go to lesson</a></div>
          </div>
      </div>

      <div class="card sample-lessons-block__lesson-card sample-lesson-block__lesson-card-second">
          <a href="<?php echo "lessons/3/"; ?>"><img class="card-img-top" src="<?php echo "../img/03.jpg"; ?>" alt="Card image cap"></a>
          <div class="card-body">
            <div class="card-title text-center text-graphite-black"><?php echo "Asking About Your Day";?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href="<?php echo "lessons/3/"; ?>" class="btn btn-success btn-sm text-center ">Go to lesson</a></div>
          </div>
      </div>

      <div class="card sample-lessons-block__lesson-card sample-lesson-block__lesson-card-third">
          <a href="<?php echo "lessons/5/"; ?>"><img class="card-img-top" src="<?php echo "../img/05.jpg"; ?>" alt="Card image cap"></a>
          <div class="card-body">
            <div class="card-title text-center text-graphite-black"><?php echo "Making Introductions";?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href="<?php echo "lessons/5/"; ?>" class="btn btn-success btn-sm text-center ">Go to lesson</a></div>
          </div>
      </div>

      <div class="card sample-lessons-block__lesson-card sample-lesson-block__lesson-card-fourth d-none d-lg-inline-block">
          <a href="<?php echo "lessons/20/"; ?>"><img class="card-img-top" src="<?php echo "../img/20.jpg"; ?>" alt="Card image cap"></a>
          <div class="card-body">
            <div class="card-title text-center text-graphite-black"><?php echo "Talking About Your Ukrainian Heritage";?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href="<?php echo "lessons/20/"; ?>" class="btn btn-success btn-sm text-center ">Go to lesson</a></div>
          </div>
      </div>

      <div class="card sample-lessons-block__lesson-card sample-lesson-block__lesson-card-fifth d-none d-xl-inline-block">
          <a href="<?php echo "lessons/25/"; ?>"><img class="card-img-top" src="<?php echo "../img/25.jpg"; ?>" alt="Card image cap"></a>
          <div class="card-body">
            <div class="card-title text-center text-graphite-black"><?php echo "Asking About Likes and Dislikes";?></div>
            <p class="card-text text-center"></p>
            <div class="mx-auto text-center"><a href="<?php echo "lessons/25/"; ?>" class="btn btn-success btn-sm text-center ">Go to lesson</a></div>
          </div>
      </div>

    </div>

    <h2 class="d-none d-md-inline-block sample-lessons-block-sticker sample-lessons-block-sticker-3" style="z-index: -2; ">Comprehensive Grammar Explanations</h2>

    
  </div>
</div>

<!-- <div class="premium-block">
  <div class="container">

    <h2 style="text-align:center;">Premium Membership</h2>

    <div class="mt-4 row justify-content-center premium-block__flex">
      <div class="premium-card">
        <div class="premium-card__title">Supercharge your learning experience with our premium features</div>
        <div class="premium-card__content">With your premium option, you can get these features:
          <ul>
            <li>Feature 1: Lorem ipsum</li>
            <li>Feature 2: Lorem ipsum</li>
            <li>Feature 3: Lorem ipsum</li>
          </ul>

        </div>
      </div>

      <div class="premium-card premium-card__alternate">
        <div class="premium-card__title">Monthly</div>
        <hr />
        <div class="premium-card__content">Billed once a month
          <ul>
            <li>Feature 1: Lorem ipsum</li>
            <li>Feature 2: Lorem ipsum</li>
            <li>Feature 3: Lorem ipsum</li>
          </ul>

        </div>
      </div>

        <div class="premium-card">
          <div class="premium-card__title">Annual</div>
          <hr />
          <div class="premium-card__content">Billed once a year
            <ul>
              <li>Feature 1: Lorem ipsum</li>
              <li>Feature 2: Lorem ipsum</li>
              <li>Feature 3: Lorem ipsum</li>
            </ul>

          </div>
        </div>
      </div>

    </div>
  </div>
</div> -->

<div class=" mt-5 testimonial-block">

  <div class="container ">
    <div class="row justify-content-center testimonial-block__flex-gap px-3 px-md-0">

      <blockquote class="blockquote col-sm-12 col-md-4">
        <div class="d-flex justify-content-center mb-3">
          <div class="testimonial-block__quote-cube"> 
            <img src="/img/right-quote-sign.svg">
          </div>
          <div class="testimonial-block__source text-graphite-black">

            <div class="testimonial-block__source-name">Derick<br>
              <span class="text-easy-gray testimonial-block__source-country" >Brazil</span>
            </div>

          </div>
        </div>
      <p class="testimonial-quotation mb-0 text-easy-gray">Thanks a lot for the website!  My grandparents were born in Ukraine and came to Brazil. Now I am trying to learn the language in honor of them.</p>
      </blockquote>

      <blockquote class="blockquote col-sm-12 col-md-3">
      <div class="d-flex justify-content-center mb-3">
          <div class="testimonial-block__quote-cube testimonial-block__quote-cube-orange"> 
            <img src="/img/right-quote-sign.svg">
          </div>
          <div class="testimonial-block__source text-graphite-black">
          <div class="testimonial-block__source-name">Milad<br>
              <span class="text-easy-gray testimonial-block__source-country" >Saudi Arabia</span>
            </div>
          </div>
        </div>
      <p class="testimonial-quotation mb-0 text-easy-gray">I really like your method for teaching Ukrainian. I am living in Kiev, and it is very helpful to me.</p>
      </blockquote>

      <blockquote class="blockquote col-sm-12 col-md-4">
      <div class="d-flex justify-content-center mb-3">
          <div class="testimonial-block__quote-cube testimonial-block__quote-cube-purple"> 
            <img src="/img/right-quote-sign.svg">
          </div>
          <div class="testimonial-block__source text-graphite-black">
            <div class="testimonial-block__source-name">Alec<br>
              <span class="text-easy-gray testimonial-block__source-country" >Canada</span>
            </div>
          </div>
        </div>
      <p class="testimonial-quotation mb-0 text-easy-gray">Hello, I wish to say thank you on behalf of my teacher. You have a wonderful training resource and we use your site to teach me Ukrainian 3 days per week.</p>
      </blockquote>



    </div>

  </div>


</div>

@endsection