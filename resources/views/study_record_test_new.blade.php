@extends('layouts.layout')

@section('title')
Flashcards
@endsection

@section('css')
<script src="https://unpkg.com/vue@3"></script>

<style>

.flashcard {
    height: 400px;
    width: 600px;
}

@media(max-width: 480px) {
.flashcard {
    height: auto;
    width: 90vw;
}
}
</style>
@endsection

@section('content')
        <div id="app">
            <section>
                <a style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);" href="/dashboard"><h2 class="font-bold mb-2">Finished Studying!</h2></a>

                    <div v-for="assignment, index in assignments"
                        class="relative"
                        :key="assignment.id"> 

                        <div v-if="index<4" 
                            class="flashcard flex flex-col justify-between bg-light rounded text-primary p-5"
                            style="border: 1px solid Gainsboro;  position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);"
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
                            class="flashcard flex flex-col justify-between bg-light rounded text-primary p-5"
                            style="z-index: -2; border: 1px solid Gainsboro;  position: absolute; top: calc(50% + 8px); left: calc(50% + 4px); transform: translate(-50%,-50%);"
                            >
                        </div>

                        <div v-if="assignments.length >= 3"
                            class="flashcard flex flex-col justify-between bg-light rounded text-primary p-5"
                            style="z-index: -3; border: 1px solid Gainsboro;  position: absolute; top: calc(50% + 16px); left: calc(50% + 8px); transform: translate(-50%,-50%);"
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

@endsection
