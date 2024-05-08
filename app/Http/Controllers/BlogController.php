<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $files = Storage::files('/blogs-text');
        return view('blog', ['files' => $files]);
    }

    public function show($slug)
    {

        try {

            $file_path = '/blogs-text/blog-' . $slug . '.txt';
    
            $content = Storage::get($file_path);
    
            // Strips the title of the blog post
            // Find the position of the first "\r\n"
            $position = strpos($content, "\r\n");
    
            if ($position !== false) {
                // If "\r\n" is found, extract the substring starting from the next character
                $content = substr($content, $position + 2);
            } else {
                // If "\r\n" is not found, return the original string
                $content = $content;
            }
        
            return view('blog-post', ['content' => $content]);
    
        } catch(\Illuminate\Contracts\Filesystem\FileNotFoundException $e) {
            throw new NotFoundHttpException();
        }
    

    }

    public function showHowILearnedUkrainian()
    {
        return view('blog.blog1');
    }

    public function showWhereToLearnUkrainianInLviv()
    {
        return view('blog.blog2');
    }

    public function showHowToLearnUkrainianOnline()
    {
        return view('blog.blog3');
    }
}
