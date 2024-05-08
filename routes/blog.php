<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


//blog routes

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/blogs/2018/09/29/how-i-learned-ukrainian', [BlogController::class, 'showHowILearnedUkrainian'])
    ->name('blog-how-i');

Route::get('/blogs/2018/09/22/where-to-learn-ukrainian-in-lviv', [BlogController::class, 'showWhereToLearnUkrainianInLviv'])
    ->name('blog-where-to');

Route::get('/blogs/2018/09/15/how-to-learn-ukrainian-online', [BlogController::class, 'showHowToLearnUkrainianOnline'])
    ->name('blog-how-to');

Route::get('/blogs/{slug}', [BlogController::class, 'show']);