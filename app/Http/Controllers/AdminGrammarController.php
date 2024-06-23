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

    public function edit($slug) {
        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        $path = public_path("texts/grammartopic-".$slug.".txt");
    
        $title = Str::title(str_replace('-', ' ', $slug));
        
        $texts_path = "texts/";
    
        $grammar_path 	= $texts_path."grammartopic-".$slug.".txt";
    
        if (file_exists($grammar_path)) {
            $grammar_contents         = file_get_contents($grammar_path,true);
    
        } else {
            echo "No grammar with this slug";
        }
    
        return view('edit_grammar_lesson', ['content' => $grammar_contents,'title'=> $title, 'slug'=> $slug, 'path' => $path]);
    }
    
    public function store() {

        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        $title = request()->title;
        $slug = Str::slug($title);
        $content = request()->content;
    
        //No guards here
        //Save to public directory with texts
        file_put_contents(
            public_path("texts/grammartopic-".$slug.".txt"),
            $content
        );
    
        return redirect('/grammar');
    }

    public function index() {

        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
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
    
        // dd($filteredFiles);
    
        return view('admin_grammar_toc', ['grammar_files' => $filteredFiles]);
    
    }
}
