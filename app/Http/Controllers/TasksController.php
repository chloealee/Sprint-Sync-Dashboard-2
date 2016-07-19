<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index(Team $team)
    {
    	return view('tasks.index', compact('team'));
    }

    public function create(Team $team)
    {
    	return view('tasks.create', compact('team'));
    }

    public function store(Team $team)
    {

    }

    public function show(Team $team, Task $task)
    {
    	return view('tasks.show', compact('team', 'task'));
    }

    public function edit(Team $team, Task $task)
    {
    	return view('tasks.edit', compact('team', 'task'));
    }

    public function update(Team $team, Task $task)
    {

    }

    public function destroy(Team $team, Task $task)
    {

    }
}
