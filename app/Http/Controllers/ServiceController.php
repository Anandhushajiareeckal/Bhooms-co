<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_service=service::all();
       return view('admin.service', ['admin_service'=>$admin_service]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service_add');
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin_service = new service();
        $admin_service->heading = request("heading");
        $admin_service->content = request("discription");

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_service -> image = '/images/'.$imageName;
        }
        $admin_service->detail_content = request("detail_content");

        $admin_service->save();
        return redirect('/admin/service');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin_service =  service::find($id);
        return view('admin.service_edit',['admin_service'=>$admin_service]);

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
        $admin_service =  service::find($id);
        $admin_service->heading = request("heading");
        $admin_service->content = request("discription");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_service -> image = '/images/'.$imageName;
        }
        $admin_service->detail_content = request("detail_content");
        $admin_service->save();
        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_service = service::find($id);
        $admin_service->delete();
        return redirect('/admin/service');
    }

   
}
