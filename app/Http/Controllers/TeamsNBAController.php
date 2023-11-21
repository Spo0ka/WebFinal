<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsNBAController extends Controller
{
    public function index()
    {
        return view('Teams.TeamsNBA');
    }
}
