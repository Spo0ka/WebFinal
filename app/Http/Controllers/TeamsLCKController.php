<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsLCKController extends Controller
{
    public function index()
    {
        return view('Teams.TeamsLCK');
    }
}
