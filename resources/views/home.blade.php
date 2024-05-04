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

<div class="py-5 ">
  <div class="container">
    <div class="container row justify-content-center" style="gap: 2rem;">

    <div class="col-12 col-md-2">
      <h2 class="text-graphite-black " style="font-size: 4rem;; font-weight: 800">From the Blog</h2>
    </div>

    <div style="border: 0; border-radius: 0.25rem 0.25rem 1rem 0.25rem; padding: 0; background-size: cover; background-image: url('/img/john-gu-lviv.jpg'); background-repeat: no-repeat" class="card col-md-2 flex flex-column justify-content-end">
      <div style="border-radius: 0.25rem 0.25rem 1rem 0.25rem;; height:100px; padding-top: 1rem; padding-left: 0.75rem; padding-right: 0.75rem;" class="transparent-overlay">
          <h3 class="card-title text-white" style="font-size: 1.25rem; font-weight:600; line-height: 1.25rem;">How I learned Ukrainian</h3>
          <div class="text-white">September 29, 2018</div>
        </div>
      </div>

      <div style="border: 0; border-radius: 0.25rem 0.25rem 1rem 0.25rem; padding: 0; background-size: cover; background-image: url('/img/downtown-lviv.jpg'); background-repeat: no-repeat" class="card col-md-2 flex flex-column justify-content-end">
          <div style="border-radius: 0.25rem 0.25rem 1rem 0.25rem;; height:100px; padding-top: 1rem; padding-left: 0.75rem; padding-right: 0.75rem;" class="transparent-overlay">
            <h3 class="card-title text-white" style="font-size: 1.25rem; font-weight:600; line-height: 1.25rem; margin-bottom: 0">Where to Learn Ukrainian in Lviv</h3>
            <div class="text-white">September 22, 2018</div>
        </div>
      </div>

      <div style="min-height: 250px; border: 0; border-radius: 0.25rem 0.25rem 1rem 0.25rem; padding: 0; background-size: cover; background-image: url('/img/ctp.jpg'); background-repeat: no-repeat" class="card col-md-2 flex flex-column justify-content-end">
        <div style="border-radius: 0.25rem 0.25rem 1rem 0.25rem;; height:100px; padding-top: 1rem; padding-left: 0.75rem; padding-right: 0.75rem;" class="transparent-overlay">
          <h3 class="card-title text-white" style="font-size: 1.25rem; font-weight:600; line-height: 1.25rem;">Where to Learn Ukrainian Online</h3>
          <div class="text-white">September 15, 2018</div>
        </div>
      </div>

    </div>

    
  </div>
</div>

<div class="premium-announcement-block padding-y-5">

</div>   

@endsection