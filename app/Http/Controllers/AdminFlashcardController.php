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



class AdminFlashcardController extends Controller
{
    public function create() {
        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        return view('create_flashcard');
    }

    public function destroy() {

        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        $post = Flashcard::find(request()->id);
        $post->delete();
    
        return redirect('/admin/flashcard/all');
    }

    public function store() {

        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        $flashcard = new Flashcard;
    
        $flashcard->english_phrase = request()->english_phrase;
        $flashcard->ukrainian_phrase = request()->ukrainian_phrase;
    
        $sound_file_path = request()->sound_file_path;
    
        //add leading slash to sound file path for easy use when accessing from db
        if($sound_file_path[0] == "/") {
    
        } else {
            $sound_file_path = "/" . $sound_file_path;
        }
    
        $flashcard->sound_file_path = $sound_file_path;
    
        $flashcard->save();
    
        return redirect('/admin/flashcard/all');
    }

    public function index() {

        $flashcards = Flashcard::all();
        return view('create_flashcard', ['flashcards' => $flashcards]);
    
    }
}
