<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeamsController extends Controller
{
    public function index()
    {
    	return view('teams.index');
    }

    public function create()
    {
    	return view('teams.index');
    }
}
