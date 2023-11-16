<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_blog=blog::all();
        return view('admin.blog', ['admin_blog'=>$admin_blog]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin_blog = new blog();
        $admin_blog->heading = request("heading");
        $admin_blog->content = request("discription");


        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_blog -> image = '/images/'.$imageName;
        }
        $admin_blog->detail_content = request("detail_content");
        $admin_blog->save();
        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin_blog=blog::find($id);
        return view('admin.blog_edit', ['admin_blog'=>$admin_blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin_blog = blog::find($id);
        $admin_blog->heading = request("heading");
        $admin_blog->content = request("discription");


        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_blog -> image = '/images/'.$imageName;
        }
        $admin_blog->detail_content = request("detail_content");
        $admin_blog->save();
        return redirect('/admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_project = blog::find($id);
        $admin_project->delete();
        return redirect('/admin/blog');
    }
}
