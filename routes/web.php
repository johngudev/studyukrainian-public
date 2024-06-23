<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Flashcard;
use App\Models\FlashcardStudyRecord;
use Carbon\Carbon;

use App\Http\Controllers\FlashcardStudyRecordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AdminGrammarController;
use App\Http\Controllers\AdminFlashcardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/blog.php';
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function() {
    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    return view('admin_dashboard');
} )->middleware(['auth']);

Route::get('/', [StaticPagesController::class, 'homePage']);
Route::get('/about', [StaticPagesController::class, 'aboutPage']);
Route::get('/links', [StaticPagesController::class, 'linksPage']);

Route::get('/grammar', [StaticPagesController::class, 'grammarTableOfContents']); 
Route::get('/grammar/{grammar_topic}', [StaticPagesController::class, 'grammarTopic']);

Route::get('/lessons', [StaticPagesController::class, 'lessonTableOfContents']);
Route::get('/lessons/{dialogue_number}', [StaticPagesController::class, 'lessonPage']);
Route::get('/lessons/flashcards/{dialogue_number}', [StaticPagesController::class, 'lessonFlashcardsPage']);

Route::get('/admin/grammar/create', [AdminGrammarController::class, 'create'])->middleware(['auth']);
Route::get('/admin/grammar/edit/{slug}', [AdminGrammarController::class, 'edit'])->middleware(['auth']);
Route::post('/admin/grammar/create', [AdminGrammarController::class, 'store'])->middleware(['auth']);
Route::post('/admin/grammar/edit/', [AdminGrammarController::class, 'update'])->middleware(['auth']);
Route::get('admin/grammar/all', [AdminGrammarController::class, 'index'])->middleware(['auth']);

Route::get('/admin/flashcard/create', [AdminFlashcardController::class, 'create'])->middleware(['auth']);
Route::post('/admin/flashcard/delete', [AdminFlashcardController::class, 'destroy'])->middleware(['auth']);

Route::post('/admin/flashcard/create', function() {

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
})->middleware(['auth']);;


Route::get('/admin/flashcard/all', function() {

    $flashcards = Flashcard::all();
    return view('create_flashcard', ['flashcards' => $flashcards]);

})->middleware(['auth']);;


Route::get('flashcard-studying', function() {

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
})->middleware(['auth']);

Route::post('flashcard-studying/store', function() {

    $flashcard_study_record = new FlashcardStudyRecord;

    $flashcard_study_record->flashcard_id = request()->id;
    $flashcard_study_record->user_id = Auth::user()->id;
    $flashcard_study_record->study_level = 0;
    $flashcard_study_record->last_tested = Carbon::now();

    $flashcard_study_record->save();

    return redirect()->back();
    // return redirect('flashcard-studying');

})->middleware(['auth']);

Route::get('study-record/test', [FlashcardStudyRecordController::class, 'test'])->middleware(['auth']);
Route::post('study-record/pass', [FlashcardStudyRecordController::class, 'pass'])->middleware(['auth']);
Route::post('study-record/fail', [FlashcardStudyRecordController::class, 'fail'])->middleware(['auth']);

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/premium-1', function () {
    return view('premium-1');
});