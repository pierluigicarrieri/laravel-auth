<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller

{
    public function create() {

        return view('admin.projects.create');

    }

    public function store(Request $request) {

        $data = $request->validate([
            'name'=>'required',
            'technologies_used'=>'required'
        ]);

        $project = Project::create($data);

        return redirect()->route('admin.project.show');

    }

    public function index() {

        $projects = Project::all();

        return view('admin.projects.index', ['projects'=>$projects]);

    }

    public function show($id) {

        $project = Project::findOrFail($id);

        return view('admin.projects.show', ['project'=>$project]);

    }

    public function edit($id) {

        $project = Project::findOrFail($id);

        return view();

    }

    public function update(Request $request, $id) {

        $project = Project::findOrFail($id);

        $newProject = $request->all();

        $project->update($newProject);

        return redirect()->route();

    }

    public function destroy($id) {

        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route();

    }
}
