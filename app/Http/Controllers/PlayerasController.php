<?php

namespace App\Http\Controllers;

use App\Models\Jersey;
use Illuminate\Http\Request;

class PlayerasController extends Controller
{
    public function index()
    {
        $jerseys = Jersey::all();
        return view('playeras.index', ['jerseys' => $jerseys]);
    }

    public function create()
    {
        return view('playeras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|url', // Si la imagen es una URL
            // Puedes agregar más reglas de validación según tus necesidades
        ]);

        Jersey::create($request->all());

        return redirect()->route('playeras.index')->with('success', 'Jersey agregado correctamente');
    }

    public function show($id)
    {
        $jersey = Jersey::findOrFail($id);
        return view('playeras.show', compact('jersey'));
    }

    public function edit($id)
    {
        $jersey = Jersey::findOrFail($id);
        return view('playeras.edit', compact('jersey'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|url', // Si la imagen es una URL
            // Puedes agregar más reglas de validación según tus necesidades
        ]);

        $jersey = Jersey::findOrFail($id);
        $jersey->update($request->all());

        return redirect()->route('playeras.index')->with('success', 'Jersey actualizado correctamente');
    }

    public function destroy($id)
    {
        Jersey::destroy($id);
        return redirect()->route('playeras.index')->with('success', 'Jersey eliminado correctamente');
    }
}
