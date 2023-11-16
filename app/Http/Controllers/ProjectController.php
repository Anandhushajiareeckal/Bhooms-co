<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_project=project::all();
        return view('admin.project', ['admin_project'=>$admin_project]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project_add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin_project = new project();
        $admin_project->heading = request("heading");
        $admin_project->content = request("discription");


        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_project -> image = '/images/'.$imageName;
        }
        $admin_project->detail_content = request("detail_content");
        $admin_project->save();
        return redirect('/admin/project');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $admin_project =  project::find($id);
        return view('admin.project_edit',['admin_project'=>$admin_project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin_project = project::find($id);
        $admin_project->heading = request("heading");
        $admin_project->content = request("discription");


        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_project -> image = '/images/'.$imageName;
        }
        $admin_project->detail_content = request("detail_content");

        $admin_project->save();
        return redirect('/admin/project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_project = project::find($id);
        $admin_project->delete();
        return redirect('/admin/project');
    }
}
