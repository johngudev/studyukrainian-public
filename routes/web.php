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
use App\Http\Controllers\FlashcardManagerController;

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
Route::post('/admin/flashcard/create', [AdminFlashcardController::class, 'store'])->middleware(['auth']);
Route::get('/admin/flashcard/all', [AdminFlashcardController::class, 'index'])->middleware(['auth']);

Route::get('flashcard-studying', [FlashcardManagerController::class, 'showFlashcardManager'])->middleware(['auth']);
Route::post('flashcard-studying/store', [FlashcardManagerController::class, 'store'])->middleware(['auth']);

Route::get('study-record/test', [FlashcardStudyRecordController::class, 'test'])->middleware(['auth']);
Route::post('study-record/pass', [FlashcardStudyRecordController::class, 'pass'])->middleware(['auth']);
Route::post('study-record/fail', [FlashcardStudyRecordController::class, 'fail'])->middleware(['auth']);

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/premium-1', function () {
    return view('premium-1');
});