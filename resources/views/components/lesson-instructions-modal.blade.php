<script>
    $(document).ready(function() {

        // $('#instructionsModal').modal("{backdrop: 'static', keyboard: false}")
        $('#instructionsModal').modal('show');
        // console.log("hell world");

        $('#modal-tutorial-next-button').on("click", function() {
            let currIndex = $('#modal-tutorial-next-button').data('tutorial-index');
            currIndex = currIndex + 1;
            $('#modal-tutorial-next-button').data('tutorial-index', currIndex);


            $('#modal-tutorial-01').html( $('#modal-tutorial-0' + currIndex).html() ); 

            if(currIndex >=4) {
                $('#modal-tutorial-next-button').css('display','none');
                $('#modal-tutorial-exit-button').removeClass('d-none');

                console.log("hide");

            }

        });


    });


</script>

<!-- Modal -->
<div class="modal fade" id="instructionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Welcome to Study Ukrainian!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-tutorial-01" class="modal-body">
        Welcome to Study Ukrainian!  You can use our lessons any way that is useful for you, but here are some tips we have for you!

        <p class="mt-2">

        First, use each lesson as an opportunity to learn new words and phrases.  You can click the play button next to each row of dialogue to hear the audio for that sentence.

        <img class="mt-3" style="width:100%" src="/img/tutorial-01.png" />
      </div>
      <div class="modal-footer">
        <button id="modal-tutorial-exit-button" type="button" class="btn btn-secondary d-none" data-dismiss="modal">Close</button>
        <button data-tutorial-index="1" id="modal-tutorial-next-button" type="button" class="btn btn-primary">Next</button>
      </div>
    </div>
  </div>
</div>


<div class="d-none">
    <div id="modal-tutorial-02">
        You can also play the full audio for a dialogue by pressing the play button (▶) at the bottom of the dialogue.

        <img class="mt-3" style="width:100%" src="/img/tutorial-02.png" />
    </div>

    <div id="modal-tutorial-03">
        Haven't learned Cyrillic?  No problem!  Click the "Toggle Transliteration" button under the dialogue to display the Ukrainian text with the English alphabet.
        <img class="mt-3" style="width:100%" src="/img/tutorial-03.png" />
    </div>

    <div id="modal-tutorial-04">
        If you have an account, you can also make each phrase you learn in a lesson into an online flashcard that you can study on this platform!
        <img class="mt-3" style="width:100%" src="/img/tutorial-04.png" />
    </div>
</div>