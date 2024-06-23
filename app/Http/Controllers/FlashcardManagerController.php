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



class FlashcardManagerController extends Controller
{
    public function showFlashcardManager() {

        $flashcard_study_records = FlashcardStudyRecord::where('user_id', '=', Auth::user()->id)->with('flashcard')->get();
    
    
        $flashcard_study_records = $flashcard_study_records->map(function ($flashcard_study_record) { 
            $flashcard_study_record->readableDateTime = Carbon::parse($flashcard_study_record->next_test_date)->setTimezone('America/Chicago')->format('F j, g:i A');
            return $flashcard_study_record;
            ;
        });
    
    
        return view('flashcard_management_panel', 
        [
        'flashcards' => Flashcard::all(), 
        'flashcard_study_records' => $flashcard_study_records
        ]);
    }

    public function store() {

        $flashcard_study_record = new FlashcardStudyRecord;
    
        $flashcard_study_record->flashcard_id = request()->id;
        $flashcard_study_record->user_id = Auth::user()->id;
        $flashcard_study_record->study_level = 0;
        $flashcard_study_record->last_tested = Carbon::now();
    
        $flashcard_study_record->save();
    
        return redirect()->back();
        // return redirect('flashcard-studying');
    
    }
}
