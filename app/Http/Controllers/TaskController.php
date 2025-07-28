<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TaskRepositoryInterface;

class TaskController extends Controller
{
    public function index(Request $request, TaskRepositoryInterface $taskRepository )
    {

    }

    public function store(Request $request, TaskRepositoryInterface $taskRepository)
    {

    }

    public function show($id, TaskRepositoryInterface $taskRepository)
    {

    }

    public function update(Request $request, $id, TaskRepositoryInterface $taskRepository)
    {

    }

    public function destroy($id, TaskRepositoryInterface $taskRepository)
    {

    }

}
