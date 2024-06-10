<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Flashcard;
use Illuminate\Support\Facades\Storage;


class GenerateFlashcards extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flashcards:generate {lesson_number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create flashcards from a dialogue\'s audio phrases.';


    /**
     * The path for texts.
     *
     * @var string
     */
    protected $texts_path = "public/texts/";


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Creating flashcards from Lesson ' . $this->argument('lesson_number'));

        $dialogue_index = str_pad($this->argument('lesson_number'), 2, '0', STR_PAD_LEFT);

        $english_dialogue_array = $this->getEnglishDialogue($this->argument('lesson_number'));
        $ukrainian_dialogue_array = $this->getForeignDialogue($this->argument('lesson_number'));

        $flashcards_txt_file_content = "";

        for($i=0; $i< count($english_dialogue_array); $i++) {


            $line_index = str_pad($i+1, 2, '0', STR_PAD_LEFT);

            $sound_file_path = "/audio/dialogue-uk-$dialogue_index-$line_index.mp3";

            $args = ['sound_file_path' => $sound_file_path, 
                'english_phrase' => $english_dialogue_array[$i],
                'ukrainian_phrase' => $ukrainian_dialogue_array[$i]
            ];

            $flashcard_id = $this->createFlashcard($args);

            if($i==0) {
                $flashcards_txt_file_content = '';
            }

            echo ($english_dialogue_array[$i]);
            echo "\n";
            echo $ukrainian_dialogue_array[$i];
            echo "\n";
            echo $sound_file_path;
            echo "\n";
            echo "\n";

            if($i==0) {
                $flashcards_txt_file_content = $flashcard_id;
            } else {
                $flashcards_txt_file_content = $flashcards_txt_file_content . ", " . $flashcard_id;
            }
        }

        $texts_path = "public/texts/";

        $lesson_flashcard_path   = $texts_path . "flashcards" . $dialogue_index . ".txt";
    

        // Create the file in the public directory
        $file = fopen($lesson_flashcard_path, "w");
        fwrite($file, $flashcards_txt_file_content);
        fclose($file);

        return 0;
    }

    public function getEnglishDialogue($dialogue_number)
    {
        //returns "01" if dialogue number is "1"
        $dialogue_index = str_pad($dialogue_number, 2, '0', STR_PAD_LEFT);

        $english_path      = $this->texts_path . "englishphrases" . $dialogue_index . ".txt";
  
        $phrases_english       = file_get_contents($english_path, true);
        $phrases_english_total = explode("\n", $phrases_english);
  
        return $phrases_english_total;
    }

    public function getForeignDialogue($dialogue_number)
    {
        //returns "01" if dialogue number is "1"
        $dialogue_index = str_pad($dialogue_number, 2, '0', STR_PAD_LEFT);

        $english_path      = $this->texts_path . "ukrainianphrases" . $dialogue_index . ".txt";
  
        $phrases_english       = file_get_contents($english_path, true);
        $phrases_english_total = explode("\n", $phrases_english);
  
        return $phrases_english_total;
    }

    /*
    * Create flashcard
    * return id of newly created card
    */
    public function createFlashcard($args) {
        $flashcard = new Flashcard;

        $flashcard->english_phrase =$args['english_phrase'];
        $flashcard->ukrainian_phrase = $args['ukrainian_phrase'];
        $flashcard->sound_file_path = $args['sound_file_path'];
    
        $flashcard->save();

        return $flashcard->id;
    }
}
