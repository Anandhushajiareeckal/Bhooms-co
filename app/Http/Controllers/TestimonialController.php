<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_testimonial=testimonial::all();
        return view('admin.testimonial', ['admin_testimonial'=>$admin_testimonial]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial_add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin_testimonial = new testimonial();
        $admin_testimonial->content = request("discription");
        $admin_testimonial->name = request("name");
        $admin_testimonial->role = request("role");
        $admin_testimonial->save();
        return redirect('/admin/testimonial');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin_testimonial =  testimonial::find($id);
        return view('admin.testimonial_edit', ['admin_testimonial'=>$admin_testimonial]);
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
        $admin_testimonial = testimonial::find($id);
        $admin_testimonial->content = request("discription");
        $admin_testimonial->name = request("name");
        $admin_testimonial->role = request("role");
        $admin_testimonial->save();
        return redirect('/admin/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_service = testimonial::find($id);
        $admin_service->delete();
        return redirect('/admin/testimonial');
    }
}
