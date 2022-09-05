<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class AiController extends Controller
{
    
    public function index(){
        return view('ai.index');
    }
    public function result(Request $request){
        
        $topic = $request->topic;

        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));
$prompt ="A short answer for this question, ".
$topic;

        $complete = $open_ai->complete([
            'engine' => 'text-davinci-002',
            'prompt' => $prompt,
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
         ]);

         
$output = \json_decode($complete, true);
$outputText = $output["choices"][0]["text"];

//dd($complete);

     //   $topic = $request->topic;
        //return view('ai.index',['result' => 'here is the generated text by ai']);
        return view('ai.index',['result' => $outputText] );
       
    }

}
