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

//include blog
require __DIR__.'/blog.php';

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {

    if (Auth::user()->id == 1) {
        return redirect('/admin');
    }

    // return view('dashboard');
    return view('table_of_contents');
})->middleware(['auth'])->name('dashboard');

//Crudely gets us out of the login
Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);

//COMMENT - ADD login in views home header and header- JG
require __DIR__.'/auth.php';

Route::view('/', 'home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/links', function () {
    return view('links');
});

Route::get('/lessons', function () {
    return view('table_of_contents');
});

Route::get('/grammar', function () {
    return view('grammar_toc');
});

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/premium-1', function () {
    return view('premium-1');
});

Route::get('/lessons/{dialogue_number}', function ($dialogue_number) {
    return view('lessons', [
        'dialogue_number' => $dialogue_number
    ]);
});

Route::get('/grammar/{grammar_topic}', function ($grammar_topic) {
    return view('grammar_lesson', [
        'grammar_topic' => $grammar_topic
    ]);
});
//end static pages


Route::get('/admin', function() {
    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    return view('admin_dashboard');
} )->middleware(['auth']);;

Route::get('/admin/blogs/create', function() {
    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    return view('create_blog_post');
})->middleware(['auth']);;

Route::post('/admin/blogs/create', function() {

    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    $title = request()->title;
    $slug = Carbon::now()->toDateString() . "-". Str::slug($title);
    $content = $title . "\r\n" . request()->content;

    Storage::put("/blogs-text/blog-".$slug.".txt", $content);

    return redirect('/blogs');
})->middleware(['auth']);;

Route::get('/admin/grammar/create', function() {
    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    return view('create_grammar_lesson');
})->middleware(['auth']);;

Route::post('/admin/grammar/create', function() {

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
})->middleware(['auth']);;


Route::get('/admin/flashcard/create', function() {
    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    return view('create_flashcard');
})->middleware(['auth']);;

Route::post('/admin/flashcard/delete', function() {

    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    $post = Flashcard::find(request()->id);
    $post->delete();

    return redirect('/admin/flashcard/all');
})->middleware(['auth']);;

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
    return view('flashcard_studying_panel', 
    [
    'flashcards' => Flashcard::all(), 
    'flashcard_study_records' => FlashcardStudyRecord::where('user_id', '=', Auth::user()->id)->with('flashcard')->get()
    ]);
})->middleware(['auth']);

Route::post('flashcard-studying/store', function() {

    $flashcard_study_record = new FlashcardStudyRecord;

    $flashcard_study_record->flashcard_id = request()->id;
    $flashcard_study_record->user_id = Auth::user()->id;
    $flashcard_study_record->study_level = 0;
    $flashcard_study_record->last_tested = Carbon::now();

    $flashcard_study_record->save();

    return redirect('flashcard-studying');

})->middleware(['auth']);

Route::get('study-record/test', [FlashcardStudyRecordController::class, 'test'])->middleware(['auth']);
Route::post('study-record/pass', [FlashcardStudyRecordController::class, 'pass'])->middleware(['auth']);
Route::post('study-record/fail', [FlashcardStudyRecordController::class, 'fail'])->middleware(['auth']);

/*
Route::post('flashcard-studying/passed', function() {
    //get flashcard id from request
    //get user id from session
    //set last_tested property to now() and increment study_level by one

})->middleware(['auth']);

Route::post('flashcard-studying/failed', function() {
    //get flashcard id from request
    //get user id from session
    //set last_tested property to now() and decrement study_level by one


})->middleware(['auth']);*/

