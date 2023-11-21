<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsTIGERController extends Controller
{
    public function index()
    {
        return view('Teams.TeamsTIGER');
    }
}
