<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
// use Redirect;

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
    	$input = Input::all();
    	Team::create ($input);

    	return Redirect::route('teams.index')->with('message', 'Team created!');
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
    	$input = array_except(Input::all(), '_method');
    	$team->update($input);

    	return Redirect::route('teams.show', $team->slug)->with('message', 'Team updated.');
    }

    public function destroy(Team $team)
    {
    	$team->delete();

    	return Redirect::route('teams.index')->with('message', 'Team deleted.');
    }
}
