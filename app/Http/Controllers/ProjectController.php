<?php

namespace App\Http\Controllers;

use App\Models\Wizkid;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Wizkid::all();
        return view('Wizkids.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Wizkids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $project = new Wizkid;
        if ($request->active == NULL) {
            $request->merge([
                'active' => 0,
            ]);
        } else {
            $request->merge([
                'active' => 1,
            ]);
        }
        $project->name = $request->name;
        $project->description = $request->description;
        $project->link = $request->link;
        $project->active = $request->active;
        $project->save();



        return redirect()->route('wizkids.index')
            ->with('success', 'Wizkid created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wizkid  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Wizkid $project)
    {
        return view('Wizkids\show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wizkid  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Wizkid $wizkid)
    {
        return view('Wizkids\edit', compact('wizkid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Wizkid  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Wizkid $Wizkid)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        if ($request->active == NULL) {
            $request->merge([
                'active' => 0,
            ]);
        } else {
            $request->merge([
                'active' => 1,
            ]);
        }

        $project->name = $request->name;
        $project->description = $request->description;
        $project->link = $request->link;
        $project->active = $request->active;
        $project->save();

        return redirect()->route('wizkids.index')
            ->with('success', 'Wizkid updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wizkid  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wizkid $wizkid)
    {
        $wizkid->delete();

        return redirect()->route('wizkids.index')
            ->with('success', 'Wizkid deleted successfully');
    }
}
