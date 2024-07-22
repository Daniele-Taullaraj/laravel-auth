<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        // $projects = Project::orderByDesc('id')->paginate(4);

        return response()->json([
            'projects' => $projects,
        ]);
    }
    public function show($id)
    {
        $project = Project::find($id);
        // dd($project);
        return response()->json([
            'project' => $project,
        ]);
    }
}
