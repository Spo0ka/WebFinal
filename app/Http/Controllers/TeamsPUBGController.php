<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsPUBGController extends Controller
{
    public function index()
    {
        return view('Teams.TeamsPUBG');
    }
}
