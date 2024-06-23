<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Flashcard;
use App\Models\FlashcardStudyRecord;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class AdminGrammarController extends Controller
{
    public function create() {
        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        /*** 
         * Get all the grammar files available
         */
    
             // Specify the directory path
        $directory = public_path("texts/");
    
        // Get all files in the directory
        $files = scandir($directory);
    
        // Define the string to match
        $startWithString = 'grammartopic';
    
        // Filter files that begin with the specified string
        $filteredFiles = array_filter($files, function ($file) use ($startWithString) {
            return Str::startsWith(basename($file), $startWithString);
        });
    
        /***
         * End:  get all the grammar files available
         */
    
        return view('create_grammar_lesson', ['grammar_files' => $filteredFiles]);
    }
    
}
