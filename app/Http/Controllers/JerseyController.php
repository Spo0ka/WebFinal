<?php

// app/Http/Controllers/JerseyController.php

namespace App\Http\Controllers;

use App\Models\Jersey;
use Illuminate\Http\Request;

class JerseyController extends Controller
{
    public function index()
    {
        $jerseys = Jersey::all();
        return view('Shop.index', compact('jerseys'));
    }
    

    public function show($id)
{
    $jersey = Jersey::findOrFail($id);
    return view('Shop.show', compact('jersey'));
}

}
