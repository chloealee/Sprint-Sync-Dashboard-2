<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    public function index()
    {
    	$teams = Team::all();
    	return view('teams.index', compact('teams'));
    }

    public function create()
    {
    	return view('teams.create');
    }

    public function store()
    {

    }

    public function show(Team $team)
    {
    	return view('teams.show', compact('team'));
    }

    public function edit(Team $team)
    {
    	return view('teams.edit', compact('team'));
    }

    public function update(Team $team)
    {

    }

    public function destroy(Team $team)
    {

    }
}
