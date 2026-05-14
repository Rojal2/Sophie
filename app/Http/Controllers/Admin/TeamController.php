<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Services\FileService;

class TeamController extends Controller
{
    public function __construct(
        protected FileService $fileService
    ) {
    }

    public function index()
    {
        $teams = Team::latest()->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(TeamRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->fileService->upload($request->file('image'), 'teams');
        }

        Team::create($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member added successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(TeamRequest $request, Team $team)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->fileService->update($team->image, $request->file('image'), 'teams');
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $this->fileService->delete($team->image);
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member removed successfully.');
    }
}
