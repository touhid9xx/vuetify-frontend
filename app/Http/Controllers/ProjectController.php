<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return response()->json([
            'success' => true,
            'data' => $projects
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        //     'person' => 'required',
        //     'due' => 'required',
        //     'status' => 'required',
        // ]);

        $project = Project::create($request->all());
        if (!$project) {
            return response()->json([
                'success' => false,
                'data' => 'Could not create project'
            ], 500);
        } else {
            return response()->json([
                'success' => true,
                'data' => $project->toArray()
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        if ($project) {
            return response()->json([
                'success' => 'true',
                'data' => $project->toArray()
            ], 400);
        } else {
            return response()->json([
                'success' => false,
                'data' => 'Project with #id:' . $id . 'not found'
            ], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        if (!$project) {
            return response()->json([
                'success' => false,
                'data' => 'Project with id' . $id . 'not found',
            ], 500);
        }

        $updated = $project->fill($request->all())->save();
        if ($updated) {
            return response()->json([
                'success' => true,
                'message' => 'Project updated successfully',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Project could not be updated',
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project with id' . $id . 'not found'
            ], 400);
        }

        if ($project->delete()) {
            return response()->json([
                'success' => true,
                'message' => "Product deleted successfully"
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Project could not be deleted'
            ], 500);
        }
    }
}
