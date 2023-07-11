<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatBotController extends Controller
{
    public function sendchat(Request $request){
        $input = $request->input('input');
        $result = OpenAI::completions()->create([
            'max_tokens' => 100,
            'model' => 'text-davinci-003',
            'prompt'=>$input,
            "temperature" => 0.4,
        ]);

        $response = array_reduce(
            $result->toArray()['choices'],
            fn(string $result, array $choice) => $result . $choice['text'],""
        );
        
        return $response;
    }

}
