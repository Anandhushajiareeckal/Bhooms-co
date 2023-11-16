<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_banner=home::all();

        return view('admin.home',['admin_banner'=>$admin_banner]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home_add',);
 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin_project = new home();
        $admin_project->heading = request("heading");


        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_project -> image = '/images/'.$imageName;
        }
        $admin_project->save();
        return redirect('/admin/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin_banner=home::find($id);

        return view('admin.home_edit',['admin_banner'=>$admin_banner]);
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
        $admin_project = home::find($id);
        $admin_project->heading = request("heading");


        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_project -> image = '/images/'.$imageName;
        }
        $admin_project->save();
        return redirect('/admin/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_project = home::find($id);
        $admin_project->delete();
        return redirect('/admin/home');
    }
}
