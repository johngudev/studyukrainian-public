<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        @yield('css-links')
        <link href="/css/sticky-footer-navbar.css" rel="stylesheet"> <!-- from: http://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/# -->

        <!-- Javascript -->
        <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script-->


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100622268-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-100622268-2');
        </script>


        <title>Flashcards</title>
        <script src="https://unpkg.com/vue@3"></script>

    </head>

<body class="bg-white">

    @include('layouts.header') 

    <!-- Begin page content -->
    <main role="main" class="container">

        <div id="app">
            <section>
                <a style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);" href="/dashboard"><h2 class="font-bold mb-2">Finished Studying!</h2></a>

                    <div v-for="assignment, index in assignments"
                        class="relative"
                        :key="assignment.id"> 

                        <div v-if="index<4" 
                            class="flex flex-col justify-between bg-light rounded text-primary p-5"
                            style="border: 1px solid Gainsboro; height:400px; width:600px; position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);"
                            :style="{'z-index': -index}">

                            <div @click="toggleFlashcard" class="" :data_sound="assignment.flashcard.sound_file_path" >
                                <div>@{{ assignment.flashcard.english_phrase }}</div>

                                <hr class="my-4">

                                <div :class="{ 'invisible' : !showAnswer }"> @{{ assignment.flashcard.ukrainian_phrase }} </div>
                            </div>

                            <div class="d-block text-center mt-5">
                                <button v-if="index == 0" 
                                    style="width: 80px"
                                    class="btn btn-danger font-bold mx-2  rounded" @click="fail">Fail</button>
                                <button v-if="index == 0" 
                                    style="width: 80px"
                                    class="btn btn-success font-bold mx-2 rounded " @click="pass">Pass</button>
        
                            </div>
                        
                        </div>

                        <div v-if="assignments.length >= 2"
                            class="flex flex-col justify-between bg-light rounded text-primary p-5"
                            style="z-index: -2; border: 1px solid Gainsboro; height:400px; width:600px; position: absolute; top: calc(50% + 8px); left: calc(50% + 4px); transform: translate(-50%,-50%);"
                            >
                        </div>

                        <div v-if="assignments.length >= 3"
                            class="flex flex-col justify-between bg-light rounded text-primary p-5"
                            style="z-index: -3; border: 1px solid Gainsboro; height:400px; width:600px; position: absolute; top: calc(50% + 16px); left: calc(50% + 8px); transform: translate(-50%,-50%);"
                            >
                        </div>

                    </div>
            </section>
        </div>

        <script>
            let app = {
                data() {
                    return {
                        assignments: 
                            {!! $flashcardStudyRecordsJSON !!}
                        ,
                        showAnswer: false
                    }
                }, 
                methods: {
                    created: function() {
                        console.log(this.assignments);
                    },

                    toggleFlashcard: function(e) {
                        this.showAnswer = ! this.showAnswer;

                        if(this.showAnswer) {

                            console.log(e.currentTarget.getAttribute('data_sound'));

                            var audio = new Audio(e.currentTarget.getAttribute('data_sound'));
                            audio.play();
                        }

                    },

                    fail: function (event) {
                            this.showAnswer = false;

                            let top_assignment = this.assignments[0];
                            this.assignments = this.assignments.slice(1);
                            this.assignments.push(top_assignment);

                            /* Posts to the endpoint and then console logs response  */
                            fetch('/study-record/fail', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json', "X-CSRF-TOKEN": "{{ csrf_token() }}" },
                                body: JSON.stringify(top_assignment)
                            }).then(response => {
                                console.log( response );
                            });

                    },

                    pass: function (event) {
                        this.showAnswer = false;

                        let top_assignment = this.assignments[0];
                        this.assignments = this.assignments.slice(1);

                        /* Posts to the endpoint and then console logs response  */
                        fetch('/study-record/pass', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json', "X-CSRF-TOKEN": "{{ csrf_token() }}" },
                            body: JSON.stringify(top_assignment)
                        }).then(response => {
                            console.log( response );
                        });
                    }
                }
            }

            Vue.createApp(app).mount('#app');
        </script>

    </main>

    @include('layouts.footer')

</body>

</html>