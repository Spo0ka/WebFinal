<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    public function index()
    {
        $preguntas = ChatMessage::all();
        return view('preguntas.index', compact('preguntas'));
    }

    public function create()
    {
        return view('preguntas.create');
    }

    public function edit($id)
    {
        $pregunta = ChatMessage::find($id);
        return view('preguntas.edit', compact('pregunta'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'question' => 'required|string|max:255',
        'answer' => 'required|string|max:255',
       
    ]);


    $pregunta = ChatMessage::findOrFail($id);

    $pregunta->update([
        'question' => $request->input('question'),
        'answer' => $request->input('answer'),

    ]);

    return redirect()->route('preguntas.index')->with('success', 'Pregunta actualizada correctamente');
}


    public function destroy($id)
    {
        ChatMessage::destroy($id);
        return redirect()->route('preguntas.index')->with('success', 'Pregunta eliminada correctamente');
    }

    public function store(Request $request)
{

    $request->validate([
        'question' => 'required|string|max:255',
        'answer' => 'required|string|max:255',

    ]);


    ChatMessage::create([
        'question' => $request->input('question'),
        'answer' => $request->input('answer'),
    ]);


    return redirect()->route('preguntas.index')->with('success', 'Pregunta creada correctamente');
}

}
