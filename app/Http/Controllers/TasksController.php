<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TasksController extends Controller
{
	protected $rules = [
		'name' => ['required'],
		'slug' => ['required'],
		'description' => ['required'],
	];

    public function index(Team $team)
    {
    	return view('tasks.index', compact('team'));
    }

    public function create(Team $team)
    {
    	return view('tasks.create', compact('team'));
    }

    public function store(Team $team, Request $request)
    {
    	$this->validate($request, $this->rules);

    	$input = Input::all();
    	$input['team_id'] = $team->id;
    	Task::create($input);

    	return Redirect::route('teams.show', $team->slug)->with('message', 'Task created!');
    }

    public function show(Team $team, Task $task)
    {
    	return view('tasks.show', compact('team', 'task'));
    }

    public function edit(Team $team, Task $task)
    {
    	return view('tasks.edit', compact('team', 'task'));
    }

    public function update(Team $team, Task $task, Request $request)
    {
    	$this->validate($request, $this->rules);

    	$input = array_except(Input::all(), '_method');
    	$task->update($input);

    	return Redirect::route('teams.tasks.show', [$team->slug, $task->slug])->with('message', 'Task updated.');
    }

    public function destroy(Team $team, Task $task)
    {
    	$task->delete();

    	return Redirect::route('teams.show', $team->slug)->with('message', 'Task deleted.');
    }
}
