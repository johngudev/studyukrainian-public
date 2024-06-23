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
}
