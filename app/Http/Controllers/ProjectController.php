<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $projects = Project::select(['id', 'title', 'descr', 'avatar'])->withCount('tasks')->paginate(12);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProjectRequest $request
     * @return RedirectResponse
     */
    public function store(ProjectRequest $request): RedirectResponse
    {
        $project = Project::create([
            'title' => $request->title,
            'descr' => $request->descr,
            'start_date' => Carbon::create($request->start_date),
            'due_date' => Carbon::create($request->due_date),
            'budget' => (int)$request->budget,
            'client_id' => Auth::id()
        ]);
        $avatar = $request->file('avatar');
        if (isset($avatar)) {
            Storage::disk('public_uploads')->putFileAs('/images',
                $avatar,
                Auth::id() . '_' . now()->format('Y-m-d_H_s') . '.' . $avatar->getClientOriginalExtension());
            $project->update(['avatar' => Auth::id() . '_' . now()->format('Y-m-d_H_s') . '.' . $avatar->getClientOriginalExtension()]);
        }
        return redirect()->route('projects.index')->with(['message' => 'Successfully created']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ProjectRequest $request, int $id): RedirectResponse
    {
        $project = Project::findOrFail($id)->update([
            'title' => $request->title,
            'descr' => $request->descr,
            'start_date' => Carbon::create($request->start_date),
            'due_date' => Carbon::create($request->due_date),
            'budget' => (int)$request->budget,
            'client_id' => Auth::id()
        ]);
        $avatar = $request->file('avatar');
        if (isset($avatar)) {
            Storage::disk('public_uploads')->putFileAs('/images',
                $avatar,
                Auth::id() . '_' . now()->format('Y-m-d_H_s') . '.' . $avatar->getClientOriginalExtension());
            $project->update(['avatar' => Auth::id() . '_' . now()->format('Y-m-d_H_s') . '.' . $avatar->getClientOriginalExtension()]);
        }
        return redirect()->route('projects.index')->with(['message' => 'Successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        Project::findOrFail($id)->delete();
        return redirect()->route('projects.index')->with(['message' => 'Successfully deleted']);
    }
}
