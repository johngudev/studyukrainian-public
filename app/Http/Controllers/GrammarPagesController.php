<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GrammarPagesController extends Controller
{
    public function tableOfContents()
    {

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
    }
}
