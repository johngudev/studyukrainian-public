<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTopicalLessonsController extends Controller
{


    function create() {
        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        return view('create_topical_lesson');
    }
    
    function store() {
    
        if (Auth::user()->id != 1) {
            return redirect('/');
        }
    
        $title = request()->title;
        $slug = Carbon::now()->toDateString() . "-". Str::slug($title);
        $content = $title . "\r\n" . request()->content;
    
        Storage::put("/topical-lesson/".$slug.".txt", $content);
    
        return redirect('/topical-lesson');
    }
    
    function edit($slug) {
    
        $file_path = '/topical-lessons/'. $slug . '.txt';
    
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
    
        return view('edit_topical_lesson', ['title' => $title, 'content' => $content, 'slug' => $slug]);
    }
    
    function update($slug) {
    
    
        $title = request()->title;
        $content = $title . "\r\n" .  request()->content;
    
        Storage::put("/topical-lesson/".$slug.".txt", $content);
    
        return redirect('/topical-lesson');
    
    }


}
