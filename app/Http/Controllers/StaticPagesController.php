<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Flashcard;
use App\Models\FlashcardStudyRecord;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class StaticPagesController extends Controller
{
    public function homePage()
    {
        $blog_highlights = [
            ['title' => 'Flashcards Are Now Live', 'link' => '/blogs/2024/06/12/study-ukrainian-flashcards-are-now-live', 'date' => Carbon::createFromFormat('Y-m-d','2024-05-06')->format('F j, Y'), 'image' => '/img/wheat-field-background.jpg'],
            ['title' => 'How I learned Ukrainian', 'link' => '/blogs/2018/09/29/how-i-learned-ukrainian', 'date' => Carbon::createFromFormat('Y-m-d','2024-05-01')->format('F j, Y'), 'image' => '/img/john-gu-lviv.jpg'],
            ['title' => 'How to Learn Ukrainian Online', 'link' => '/blogs/2018/09/15/how-to-learn-ukrainian-online', 'date' => Carbon::createFromFormat('Y-m-d','2024-04-26')->format('F j, Y'), 'image' => '/img/downtown-lviv.jpg']
        ];
        
        return view('home', ['blog_highlights' => $blog_highlights]);
    
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function linksPage()
    {
        return view('links');
    }

    public function lessonTableOfContents()
    {
        return view('table_of_contents');
    }

    public function grammarTableOfContents()
    {

        $filePath = 'grammar/Verbs.txt';
        $contents = Storage::disk('local')->get($filePath);
    
        $tokens = preg_split("/\r\n\r\n|\n\n|\r\r/", $contents);
    
        $content["Verbs"] = [];
    
        // Iterate over each string in the input array
        foreach ($tokens as $string) {
            // Split the string by newline character
            $splitStrings = explode("\n", $string);
            // Merge the split strings into the output array
            $content["Verbs"][] = ['title'=>$splitStrings[0], 'link'=> $splitStrings[1]];
        }
    
        $filePath = 'grammar/Nouns and Adjectives.txt';
        $contents = Storage::disk('local')->get($filePath);
    
        $tokens = preg_split("/\r\n\r\n|\n\n|\r\r/", $contents);
    
        $content["Nouns and Adjectives"] = [];
    
        // Iterate over each string in the input array
        foreach ($tokens as $string) {
            // Split the string by newline character
            $splitStrings = explode("\n", $string);
            // Merge the split strings into the output array
            $content["Nouns and Adjectives"][] = ['title'=>$splitStrings[0], 'link'=> $splitStrings[1]];
        }
    
        $filePath = 'grammar/Noun Cases.txt';
        $contents = Storage::disk('local')->get($filePath);
    
        $tokens = preg_split("/\r\n\r\n|\n\n|\r\r/", $contents);
    
        $content["Noun Cases"] = [];
    
        // Iterate over each string in the input array
        foreach ($tokens as $string) {
            // Split the string by newline character
            $splitStrings = explode("\n", $string);
            // Merge the split strings into the output array
            $content["Noun Cases"][] = ['title'=>$splitStrings[0], 'link'=> $splitStrings[1]];
            
        }
    
        return view('grammar_toc', ['content' => $content]);
    }

    public function grammarTopic ($grammar_topic) 
    {
        return view('grammar_lesson', [
            'grammar_topic' => $grammar_topic
        ]);
    }

    public function lessonPage ($dialogue_number)
    {
        $value = request()->cookie('first_visit');

        $cookie = cookie('first_visit', 'yes', 60*24*365*10);
    
    
        //get index of dialogue number
        //returns "01" if dialogue number is "1"
        $dialogue_index = str_pad($dialogue_number, 2, '0', STR_PAD_LEFT);
    
        $texts_path = "texts/";
    
        $lesson_flashcard_path   = $texts_path . "flashcards" . $dialogue_index . ".txt";
    
        if (file_exists($lesson_flashcard_path))
        {
            $display_flashcards = true;
        } else {
            $display_flashcards = false;
        }
    
    
    
        return response()
            ->view('lessons',  [ 'dialogue_number' => $dialogue_number, 'first_visit' => $value, 'display_flashcards' => $display_flashcards ])
            ->withCookie($cookie);
    }

    public function lessonFlashcardsPage($dialogue_number) {

        //get index of dialogue number
        //returns "01" if dialogue number is "1"
        $dialogue_index = str_pad($dialogue_number, 2, '0', STR_PAD_LEFT);
    
        $texts_path = "texts/";
    
        $lesson_flashcard_path   = $texts_path . "flashcards" . $dialogue_index . ".txt";
    
        if (!file_exists($lesson_flashcard_path)) {
            return redirect('/lessons');
    
        } else {
        
    
                //get all flashcards
                $flashcard_indexes = file_get_contents($lesson_flashcard_path);
    
                $flashcard_indexes = array_map('intval', explode(', ', $flashcard_indexes));
    
    
                $flashcards = Flashcard::whereIn('id', $flashcard_indexes)->get();
    
    
    
                //get flashcard for user
                if(Auth::user()) {
                    $flashcard_study_records = FlashcardStudyRecord::where('user_id', '=', Auth::user()->id)->with('flashcard')->get();
                    $flashcards_owned_ids = $flashcard_study_records->pluck('flashcard_id')->toArray();
    
                    // dd($flashcards_owned_ids);
    
                    return view('lessons-flashcards',['dialogue_number' =>$dialogue_number, 'flashcards' => $flashcards, 'flashcards_owned_ids' => $flashcards_owned_ids ]);
                } else {
                    return view('lessons-flashcards',['dialogue_number' =>$dialogue_number, 'flashcards' => $flashcards ]);
                }
        }
    
    
    }

}
