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

/********************************/
/* Manually include blog routes */
/********************************/
require __DIR__.'/blog.php';


Route::get('/dashboard', function () {

    if (Auth::user()->id == 1) {
        // return redirect('/admin');
    }

    return view('dashboard');
    // return view('table_of_contents');
})->middleware(['auth'])->name('dashboard');

//Crudely gets us out of the login
Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);

//COMMENT - ADD login in views home header and header- JG
require __DIR__.'/auth.php';

Route::get('/', function() {

    $blog_highlights = [
        ['title' => 'New Website Features in 2024', 'link' => '/blogs/2024-05-06-new-website-features-in-2024', 'date' => Carbon::createFromFormat('Y-m-d','2024-05-06')->format('F j, Y'), 'image' => '/img/wheat-field-background.jpg'],
        ['title' => 'How I learned Ukrainian', 'link' => '/blogs/2018/09/29/how-i-learned-ukrainian', 'date' => Carbon::createFromFormat('Y-m-d','2024-05-01')->format('F j, Y'), 'image' => '/img/john-gu-lviv.jpg'],
        ['title' => 'How to Learn Ukrainian Online', 'link' => '/blogs/2018/09/15/how-to-learn-ukrainian-online', 'date' => Carbon::createFromFormat('Y-m-d','2024-04-26')->format('F j, Y'), 'image' => '/img/downtown-lviv.jpg']
    ];
    
    return view('home', ['blog_highlights' => $blog_highlights]);

});


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


Route::get('/admin/grammar/create', function() {
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
})->middleware(['auth']);;

Route::get('/admin/grammar/edit/{slug}', function($slug) {
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

Route::post('/admin/grammar/edit/', function() {

    if (Auth::user()->id != 1) {
        return redirect('/');
    }

    $slug = request()->slug;
    $content = request()->content;

    //No guards here
    //Save to public directory with texts
    file_put_contents(
        public_path("texts/grammartopic-".$slug.".txt"),
        $content
    );

    return redirect('/admin');
})->middleware(['auth']);;

Route::get('admin/grammar/all', function() {

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

});


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

