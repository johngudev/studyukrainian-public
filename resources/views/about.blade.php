@extends('layouts.layout')

@section('title')
 - About
@endsection


@section('css')
<link href="css/extra-styles.css" rel="stylesheet">
@endsection


@section('content')

        <div class="about-text">
            <h1 class="text-center mb-5">  About the Project </h1>
            <div class="row justify-content-around">

              <div class="col-12 col-md-4 col-lg-3 text-center">
                <img class="img-fluid rounded mx-auto" src="../img/lviv.jpg" alt"Lviv">
              </div>

              <div class="col-12 col-md-6 mt-3 my-md-auto">
                The Study Ukrainian website was created by a group of educators working in Lviv, Ukraine and Austin at the <a href=""https://liberalarts.utexas.edu/humanitiesinstitute/digital-humanities/">Institute for Digital Humanities</a> and the <a href="https://www.ischool.utexas.edu/">School of Information</a> at the University of Texas.
                We're dedicated to creating a free online resource for teaching the Ukrainian language.
                This website is actively being updated with new material.  Keep checking back for updates!
              </div>


              <div class="col-12 mt-5">
                <h2>Contributors</h2>
                <div class="my-1"><strong>Tanya Clement</strong> is an Associate Professor at the University of Texas at Austin. She has a PhD in English from the University of Maryland and an M.F.A. in fiction from the University of Virginia, where she was also trained in humanities computing at the Electronic Text Center and the Institute for Advanced Technology in the Humanities (IATH). </div>
                <div class="my-1"><strong>Daniel Carter</strong>  is a writer, researcher, and designer at the School of Information at the University of Texas at Austin.</div>
                <div class="my-1"><strong>Jon Gu</strong> is a developer and language enthusiast.  He holds a BS in Mathematics from the University of Texas at Austin.</div>
                <div class="my-1"><strong>Oksana Lutsyshyna</strong>  is a Professor of Instructor in the Department of Slavic and Eurasian Studies at the University of Texas at Austin. Dr. Lutsyshyna's research interests revolve around the issue of metropolitan modernity and Central and Eastern European identity in literature. </div>
              </div>


          </div>
        </div>

          <!-- <div class="team-text text-center mt-3 mt-md-5">
            <h1 class="text-center">The Study Ukrainian Team </h1>

            <div class="row">

              <div class="col-12 col-md-6 my-auto">
                <h2 class="text-center">Course Content</h2>
                Nataliya Asasteptsva<br>
                John Gu

                <h2 class="text-center">Art</h2>
                Nataliya Asasteptsva

                <h2 class="text-center">Voice Actors</h2>
                Nataliya Astaptseva <br>
                Oleksandr Bratashov <br>
                Hanna Karpenko <br>
                Rostyslav Zhuravchak <br>


                <h2 class="text-center">Website Development</h2>
                John Gu
              </div>

              <div class="col-12 col-md-6">

                <div class="row mx-auto">
                  John
                  <div class="col-6 p-3 px-lg-5">
                    <img class="rounded-circle img-fluid" src="../img/john.jpg" alt="John">
                  </div>

                  Natalya
                  <div class="col-6 p-3 px-lg-5">
                    <img class="rounded-circle img-fluid" src="../img/natalya.jpg" alt="Natalya">
                    </div>

                  Hanna
                  <div class="col-6 p-3 px-lg-5">
                    <img class="rounded-circle img-fluid" src="../img/hanna.jpg" alt="Hanna">
                  </div>

                  Rostyslav
                  <div class="col-6 p-3 px-lg-5">
                    <img class="rounded-circle img-fluid" src="../img/rostyslav.jpg" alt="Rostyslav">
                  </div>
                </div>

              </div>

            </div>
        </div> -->

        <!-- <div class="contact-text text-center mt-3 mt-md-5">
          <h1 class="text-center">Contact</h1>

          Questions?  Comments?  Technical issues? Contact us at studyukrainianwebsite@gmail.com

        </div> -->

@endsection
