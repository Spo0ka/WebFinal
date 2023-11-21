<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function index()
    {
  
        $options = ChatMessage::all();
    
        return view('chatbot.chatbot', ['options' => $options]);
    }

    public function handle(Request $request)
    {
        if ($request->ajax()) {

            $selectedQuestion = $request->input('question');
    
            $answer = ChatMessage::where('question', $selectedQuestion)->value('answer');
    
            return $answer ?? 'No tengo informacion de esa pregunta marcale al tocayo: 4742068492';
        } else {
            return view('chatbot.chatbot');
        }
    }
    
}
