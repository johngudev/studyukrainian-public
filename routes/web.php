<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


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


//blog routes

Route::get('/blogs', function () {
    return view('blog');
});

Route::get('/blogs/2018/09/29/how-i-learned-ukrainian', function () {
    return view('blog.blog1');
})->name('blog-how-i');;

Route::get('/blogs/2018/09/22/where-to-learn-ukrainian-in-lviv', function () {
    return view('blog.blog2');
})->name('blog-where-to');

Route::get('/blogs/2018/09/15/how-to-learn-ukrainian-online', function () {
    return view('blog.blog3');
})->name('blog-how-to');