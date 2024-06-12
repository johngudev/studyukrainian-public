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



//blog routes

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/blogs/2018/09/29/how-i-learned-ukrainian', [BlogController::class, 'showHowILearnedUkrainian'])
    ->name('blog-how-i');

Route::get('/blogs/2018/09/22/where-to-learn-ukrainian-in-lviv', [BlogController::class, 'showWhereToLearnUkrainianInLviv'])
    ->name('blog-where-to');

Route::get('/blogs/2018/09/15/how-to-learn-ukrainian-online', [BlogController::class, 'showHowToLearnUkrainianOnline'])
    ->name('blog-how-to');

Route::get('/blogs/{year}/{month}/{day}/{slug}', [BlogController::class, 'show']);

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
    // $content = $title . "\r\n" . request()->content;

    Storage::put("/blogs-text/blog-".$slug.".txt", $content);

    return redirect('/blogs');
})->middleware(['auth']);;

Route::get('admin/blogs/edit/{slug}', function($slug) {

    $file_path = '/blogs-text/blog-' . $slug . '.txt';

    $content = Storage::get($file_path);
    
    // Strips the title of the blog post
    // Find the position of the first "\r\n"
    $position = strpos($content, "\r\n");

    if ($position !== false) {
        // If "\r\n" is found, extract the substring starting from the next character
        $title = substr($content, 0, $position);
        $content = substr($content, $position + 2);
    } else {
        // If "\r\n" is not found, return the original string
        $content = $content;
        $title = "";
    }

    return view('edit_blog_post', ['title' => $title, 'content' => $content, 'slug' => $slug]);
}) ;

Route::post('admin/blogs/edit/{slug}', function($slug) {


    $title = request()->title;
    $content = $title . "\r\n" .  request()->content;

    Storage::put("/blogs-text/blog-".$slug.".txt", $content);

    return redirect('/blogs');

});