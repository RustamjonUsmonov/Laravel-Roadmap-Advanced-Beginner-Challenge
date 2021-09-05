<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $todayTasks = Task::where([['due_date', '<', Carbon::tomorrow()], ['due_date', '>', Carbon::yesterday()]])
            ->get(['title', 'id', 'created_at']);
        $upcomingTasks = Task::where('due_date', '>=', Carbon::tomorrow())->get(['title', 'id', 'created_at']);
        return view('tasks.index', compact('todayTasks', 'upcomingTasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TaskStoreRequest $request
     * @return RedirectResponse
     */
    public function store(TaskStoreRequest $request)
    {
        Task::create([
            'title' => $request->title,
            'project_id' => $request->project_id,
            'descr' => $request->descr,
            'due_date' => Carbon::parse($request->due_date),
        ]);
        return redirect()->route('tasks.index')->with(['message' => 'Task successfully created']);
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @return Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Task::findOrFail($id)->delete();
        return redirect()->route('tasks.index')->with(['message' => 'Task successfully deleted']);
    }
}
